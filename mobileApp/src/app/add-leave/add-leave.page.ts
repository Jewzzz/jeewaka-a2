import { Component, Input, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';
import { LoadingController, ModalController } from '@ionic/angular';
import { Observable } from 'rxjs';
import { take } from 'rxjs/operators';
import { Leave } from '../leaves/leave.model';
import { LeaveService } from '../services/leave.servise';

@Component({
  selector: 'app-add-leave',
  templateUrl: './add-leave.page.html',
  styleUrls: ['./add-leave.page.scss'],
})
export class AddLeavePage implements OnInit {

  @Input() leave: Leave;
  isEditMode = false;
  form: FormGroup;
  constructor(
    private leaveServise: LeaveService ,
    private lodingCtrl: LoadingController,
    private modalCtrl: ModalController) { }

  ngOnInit() {
    this.iniAddLeaveForm();

    if(this.leave){
      this.isEditMode = true;
      this.setFormValues();
    }
  }

  iniAddLeaveForm(){
    this.form = new FormGroup({
      empNo: new FormControl(null, [Validators.required]),
      empName: new FormControl(null, [Validators.required]),
      leaveType: new FormControl(null, [Validators.required]),
      leaveCatogory: new FormControl(null, [Validators.required]),
      reason: new FormControl(null, [Validators.required]),
      date: new FormControl(null, [Validators.required]),
      permission: new FormControl(null),
    });
  }

  setFormValues(){
    this.form.setValue({
      empNo: this.leave.empNo,
      empName: this.leave.empName,
      leaveType: this.leave.leaveType,
      leaveCatogory: this.leave.leaveCatogory,
      reason: this.leave.reason,
      date: this.leave.date,
      permission: this.leave.permission,
    });

    this.form.updateValueAndValidity();
  }

  closeModal(data = null){
    this.modalCtrl.dismiss(data);
  }

  async submitLeave(){
    //console.log('clisck me');
    const loading = await this.lodingCtrl.create({message: 'Loading...'});
    loading.present();

    let response: Observable<Leave>;
    if(this.isEditMode){
      response = this.leaveServise.updateLeave(
        this.leave.id ,
        this.form.value
        );
    }
    else{
      response = this.leaveServise.addLeave(this.form.value);
    }


    response.pipe(take(1)).subscribe((leave)=> {
      //console.log(leave);
      this.form.reset();
      loading.dismiss();

      if(this.isEditMode){
        this.closeModal(leave);
      }
    });
  }



}
