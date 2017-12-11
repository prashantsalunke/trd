import { Component } from '@angular/core';
import { TestService } from './shared/test.service';
import { OnInit } from '@angular/core/src/metadata/lifecycle_hooks';

@Component({
  selector: 'trd-root',
  template: `
    <!--The content below is only a placeholder and can be replaced.-->
    
   <router-outlet></router-outlet>
  `,
  styles: [],
  providers: [TestService]
})
export class AppComponent implements OnInit {
  title = 'trd';
constructor(private testService:TestService){}

  ngOnInit(){

    this.testService.testApi().subscribe((res)=> console.log(res));
  }
}
