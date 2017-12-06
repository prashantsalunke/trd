import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable()
export class TestService {

  private appUrl = `api/` 
  constructor(private http:HttpClient) { }

  testApi(){
    console.log(`${this.appUrl}auth`);
    return this.http.get(`${this.appUrl}auth`)
  }

}
