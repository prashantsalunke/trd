import { Injectable } from '@angular/core';
import { environment } from '../../environments/environment';
import { HttpClient } from '@angular/common/http';
import { SubAdmin } from './models/sub-admin';

@Injectable()
export class SubAdminService {

  private apiUrl = environment.backend;

  constructor(public http:HttpClient) { }

  addSubAdmin(subadmin:SubAdmin){
    return this.http.post(`${this.apiUrl}sub-admins/add`,subadmin);
  }

}
