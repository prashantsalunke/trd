import { Component, OnInit } from '@angular/core';
import { AuthService } from '../../core/auth.service';
import { FormBuilder, FormGroup, Validators  } from '@angular/forms';

@Component({
  selector: 'trd-main',
  templateUrl: './main.component.html',
  styles: []
})
export class MainComponent implements OnInit {
  loginForm: FormGroup;

  constructor(private authService:AuthService, private formBuilder:FormBuilder) { }

  ngOnInit() {
    this.loginForm = this.formBuilder.group({
      'email':['',[Validators.required]],
      'password':['',Validators.required],
      'security_code':['',Validators.required]
    })
  }

  onSubmit(user:any){
    this.authService.authenticate(user)
    .subscribe((userdata)=>{
      console.log(userdata);
    })
  }

}
