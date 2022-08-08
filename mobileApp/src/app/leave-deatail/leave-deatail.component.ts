import { Component, Input, OnInit } from '@angular/core';
import { IonicModule, LoadingController } from '@ionic/angular';
import { ModalController } from '@ionic/angular';
import { take } from 'rxjs/operators';
import { AddLeavePage } from '../add-leave/add-leave.page';
import { Leave } from '../leaves/leave.model';
import { LeaveService } from '../services/leave.servise';

@Component({
  selector: 'app-leave-deatail',
  templateUrl: './leave-deatail.component.html',
  styleUrls: ['./leave-deatail.component.scss'],
})
export class LeaveDeatailComponent implements OnInit {

  @Input() leave: Leave;

  constructor(
    private modalCtrl: ModalController,
    private loadingCtrl: LoadingController,
    private leaveServise: LeaveService
  ) { }

  ngOnInit() {}

  closeModal(role = 'edit'){
    this.modalCtrl.dismiss(this.leave , role);
  }



    async openEditModal(){
      const modal = await this.modalCtrl.create({
        component: AddLeavePage,
        componentProps: {leave: this.leave},
      });
      await modal.present();

      const {data: updatedLeave }= await modal.onDidDismiss();

      if(updatedLeave){
        //
        this.leave = updatedLeave;
      }
    }

    async onDeleteLeave(){
      const loading = await this.loadingCtrl.create({message: 'Deleting...'});
      loading.present();

      this.leaveServise.deleteProduct(this.leave.id)
      .pipe(take(1))
      .subscribe(()=> {
        loading.dismiss();
        this.closeModal('delete');
      });
    }


}
