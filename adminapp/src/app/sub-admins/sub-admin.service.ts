import { Injectable } from '@angular/core';
import { environment } from '../../environments/environment';
import { HttpClient } from '@angular/common/http';
import { SubAdmin } from './models/sub-admin';

@Injectable()
export class SubAdminService {

  private apiUrl = environment.backend;

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
    return this.http.post(`${this.apiUrl}sub-admins/add`,userData);
  }

}
