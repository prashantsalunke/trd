import { Component, OnInit } from '@angular/core';
import { SubAdminService } from './sub-admin.service';
import { Router } from '@angular/router';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import {SubAdmin, Permissions} from './models/sub-admin'
import { FormArray } from '@angular/forms/src/model';

@Component({
  selector: 'trd-add',
  templateUrl: './add.component.html',
  styles: []
})
export class AddComponent implements OnInit {
 
 showForm:boolean = false;
 adminForm:FormGroup;
  constructor(private subAdminService:SubAdminService,
     private router:Router, private formBuilder:FormBuilder
    ) { }

  ngOnInit() {
this.initForm();
   

  }

  initForm(): any {
    let adminUser = new SubAdmin();
    let permissions = new Permissions();
    adminUser.permissions = permissions;
    const permissionGroup:FormArray = this.getPermissionGorup(adminUser.permissions);

    this.adminForm = this.formBuilder.group({
      'id' : adminUser.id,
      'username' : [adminUser.username, Validators.required],
      'security_code' : [adminUser.security_code, Validators.required],
      'password' : [adminUser.password, Validators.required],
      'email' : [adminUser.email,Validators.required],
      'profile_image' : adminUser.profile_image,
      'online_status' : adminUser.online_status,
      'is_suspended' : adminUser.is_suspended,
      'is_deleted' : adminUser.is_deleted,
      'permissions' : permissionGroup
          });

          console.log(this.adminForm);
  }

  getPermissionGorup(permission: Permissions): FormArray {
let permissionGroup:FormArray = this.formBuilder.array([]);
  
    const permissionKeys = ['id','admin_user_id','as_admin',
    'manage_sub_admin','manage_member', 'manage_carousel','audit','chat',
    'view_errors','statistic','account_alarm'];

  // const permissionKeys = Object.keys(permissions);
  permissionKeys.forEach(permit => {
    permissionGroup.push(this.formBuilder.control(permit,permission[permit]));
  });

return permissionGroup;
  }

}
