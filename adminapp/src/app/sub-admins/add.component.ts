import { Component, OnInit } from '@angular/core';
import { SubAdminService } from './sub-admin.service';
import { Router } from '@angular/router';
import { FormBuilder, FormGroup, Validators, FormControl } from '@angular/forms';
import { SubAdmin, Permissions, PermissionsArray } from './models/sub-admin'
import { FormArray } from '@angular/forms/src/model';
import { CustomValidators } from '@floydspace/ngx-validation';

@Component({
  selector: 'trd-add',
  templateUrl: './add.component.html',
  styles: []
})
export class AddComponent implements OnInit {
  permissionKeys: string[];

  showForm: boolean = false;
  adminForm: FormGroup;
  constructor(private subAdminService: SubAdminService,
    private router: Router, private formBuilder: FormBuilder
  ) { }

  ngOnInit() {
    this.initForm();


  }

  initForm(): any {
    let adminUser = new SubAdmin();
    let permissions = new Permissions();
    adminUser.permissions = permissions;
    const permissionGroup: FormGroup = this.getPermissionGorup(adminUser.permissions);

    this.adminForm = this.formBuilder.group({
      'id': adminUser.id,
      'username': [adminUser.username, Validators.required],
      'security_code': [adminUser.security_code, Validators.required],
      'password': [adminUser.password, Validators.required],
      'email': [adminUser.email, Validators.required,CustomValidators.email],
      'profile_image': adminUser.profile_image,
      'online_status': adminUser.online_status,
      'is_suspended': adminUser.is_suspended,
      'is_deleted': adminUser.is_deleted,
      'permissions': permissionGroup
    });
    this.adminForm.valueChanges
    .debounceTime(500)
    .subscribe(c=>{
      console.log(c);
      this.subAdminService.addSubAdmin(c).subscribe(res=> console.log(res));
    })
    console.log(this.adminForm);
  }

  getPermissionGorup(permissions: Permissions): FormGroup {
    let permissionGroup: FormGroup = this.formBuilder.group({});

    this.permissionKeys = PermissionsArray;

    // const permissionKeys = Object.keys(permissions);
    this.permissionKeys.forEach(permit => {
      let control: FormControl = new FormControl(permissions[permit]);
      permissionGroup.addControl(permit, control);
    });

    
    return permissionGroup;
  }

}
