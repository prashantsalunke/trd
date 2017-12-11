import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { environment } from '../../environments/environment';
import { Router } from '@angular/router';

@Injectable()
export class AuthService {

  private apiUrl = environment.backend;

  constructor(private http:HttpClient, private router:Router) { }

  authenticate(user){
    return this.http.post(`${this.apiUrl}auth`,user,{
      headers: new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded'),
    });
  }

  getLoggedInUser(){
    return this.http.get(`${this.apiUrl}current-user`);
  }

  logout(){
    return this.http.get(`${this.apiUrl}logout`).subscribe((status)=> {
this.router.navigate(['login']);
    });
  }

}
