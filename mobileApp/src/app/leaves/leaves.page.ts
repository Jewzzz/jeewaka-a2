import { Component, OnInit } from '@angular/core';
import { LoadingController, ModalController } from '@ionic/angular';
import { Observable } from 'rxjs';
import { map, tap } from 'rxjs/operators';
import { LeaveDeatailComponent } from '../leave-deatail/leave-deatail.component';
import { LeaveService } from '../services/leave.servise';
import { Leave } from './leave.model';

@Component({
  selector: 'app-leaves',
  templateUrl: './leaves.page.html',
  styleUrls: ['./leaves.page.scss'],
})
export class LeavesPage implements OnInit {

  leaves$: Observable<Leave[]>;
  constructor(
    private leaveSerice: LeaveService,
    private lodingCtrl: LoadingController,
    private modalCtrl: ModalController) { }

  async ngOnInit() {
    const loading = await this.lodingCtrl.create({message: 'Loading...'});
    loading.present();

    this.leaves$ = this.leaveSerice.getLeave().pipe(
      tap((leaves) =>{
        loading.dismiss();
        return leaves;
      })
    );
  }

  async openDeatailModal(leave: Leave){
    const modal = await this.modalCtrl.create({
     component: LeaveDeatailComponent,
     componentProps: {leave},
    });

    await modal.present();

    const { data: updatedLeave, role } = await modal.onDidDismiss();
    if (updatedLeave && role === 'edit') {
      // TODO do something
      this.leaves$ = this.leaves$.pipe(
        map((leaves) => {
          leaves.forEach((leav) => {
            if(leav.id === updatedLeave.id) {
              leav = updatedLeave;
            }
            return leav;
          });
          return leaves;
        })
      );
    }

    if (role === 'delete'){
      this.leaves$ = this.leaves$.pipe(
        map((leaves) => {
          leaves.filter((leav) => leav.id !== updatedLeave.id);
          return leaves;
        })
      );
    }
 }

}
