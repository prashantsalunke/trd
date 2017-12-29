import { Injectable } from '@angular/core';
import { environment } from '../../environments/environment';
import { HttpClient } from '@angular/common/http';
import {SubAdmin, Permissions} from './models/sub-admin';
import { Subject } from 'rxjs/Subject';

@Injectable()
export class SubAdminService {

  private apiUrl = environment.backend;
  subAdminChanged = new Subject<SubAdmin[]>(); 
  private subAdmins: SubAdmin[] = [];

  constructor(public http:HttpClient) { }

  addSubAdmin(subadmin:SubAdmin){
    let userData = new FormData();
    if(subadmin){
      const userKeys = Object.keys(subadmin);
      userKeys.forEach((key) => {
        if(key == 'permissions'){
          userData.append(key,JSON.stringify(subadmin[key]));          
        }else{
        userData.append(key,subadmin[key]);
        }
      });
    }
    return this.http.post(`${this.apiUrl}sub-admins`,userData);
  }

  updateSubAdmin(subadmin:SubAdmin){
    return this.http.put(`${this.apiUrl}sub-admins`,subadmin);
  }

  getAdminPermission(adminId:number){
    return this.http.get(`${this.apiUrl}sub-admins/permissions/${adminId}`);
  }

  updateAdminPermission(permission:Permissions){
    return this.http.put(`${this.apiUrl}sub-admins/permissions`,permission);
  }

  addLocalAdmin(admin:SubAdmin){
    this.subAdmins.push(admin);
    this.subAdminChanged.next(this.subAdmins.slice());
  }

  getIndexOfAdmin(admin:SubAdmin){
    const index = this.subAdmins.indexOf(admin);
    console.log(index);
    return index;
  }

  getAdminById(id:number){
    return this.subAdmins.filter(admin => {
      return admin.id === id;
    })[0];
  }

  updateLocalAdmin(adminIndex:number, admin:SubAdmin){
this.subAdmins[adminIndex] = admin;
    this.subAdminChanged.next(this.subAdmins.slice());
  }

  getSubAdmins(){
      return this.http.get<SubAdmin[]>(`${this.apiUrl}sub-admins`)
          .subscribe((subAdmins:SubAdmin[])=>{
              this.subAdmins = subAdmins;
              this.subAdminChanged.next(this.subAdmins.slice())
          });
  }

}
