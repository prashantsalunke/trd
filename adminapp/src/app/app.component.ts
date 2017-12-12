import { Component } from '@angular/core';
import { TestService } from './shared/test.service';
import { OnInit } from '@angular/core/src/metadata/lifecycle_hooks';
import { AuthService } from './core/auth.service';

@Component({
  selector: 'trd-root',
  template: `
    <!--The content below is only a placeholder and can be replaced.-->
    
   <router-outlet></router-outlet>
  `,
  styles: []
})
export class AppComponent implements OnInit {
  title = 'trd';
constructor(private authService:AuthService){}

  ngOnInit(){

    this.authService.getLoggedInUser().subscribe((res)=> console.log(res));
  }
}
