import { Component } from '@angular/core';
import { TestService } from './shared/test.service';
import { OnInit } from '@angular/core/src/metadata/lifecycle_hooks';

@Component({
  selector: 'trd-root',
  template: `
    <!--The content below is only a placeholder and can be replaced.-->
    
<nav class="navbar admin-nav navbar-fixed-top">
<div class="container">
  <ul class="nav navbar-right navbar-nav">
    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/rseller2.png" style="width:35px;"> Tang Lee</a>
      <ul class="dropdown-menu">
        <li><a href="#">Edit</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </li>
  </ul>
</div>
</nav>
    <router-outlet></router-outlet>
    <nav class="navbar navbar-fixed-bottom footerNav-div">
    <div class="container">
      <nav class="navbar  footer-nav">
        <div class="navbar-header"> <a href="#" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="padding: 0px; margin: 4px 0px;"><img src="images/5-128.png" width="40px"></a> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="#" data-toggle="modal" data-target=".monitor-popup"> <img src="images/videosok.png" style="height:40px;"><br>
              Monitor </a> </li>
            <li> <a href="#" data-toggle="modal" data-target=".Sub-Admin"> <img src="images/user-new-3.png" style="height:40px;"><br>
              Sub Admins </a> </li>
            <li> <a href="#"  data-toggle="modal" data-target=".memberInfo"> <img src="images/img2539.png" style="height:40px;"><br>
              Member Info </a> </li>
            <li> <a href="#"  data-toggle="modal" data-target=".AUDIT-REQUESTS"> <img src="images/trusted.png" style="height:40px;"><br>
              Audit </a> </li>
            <li> <a href="#"  data-toggle="modal" data-target=".ADS-Managment"> <img src="images/advertising1.png" style="height:40px;"><br>
              Carousels </a> </li>
            <li> <a href="#"  data-toggle="modal" data-target=".chat-list"> <img src="images/support.png" style="height:40px;"><br> Support </a> </li>
            <li> <a href="#"  data-toggle="modal" data-target=".selectContact"> <img src="images/NewsWeather.png" style="height:40px;"><br> Newsletter </a> </li>
            <li> <a href="#"> <img src="images/battery-charging.png" style="height:40px;"><br>  Statistics </a> </li>
            <li> <a href="#"> <img src="images/battery-caution-2.png" style="height:40px;"><br>  Errors </a> </li>
            <li> <a href="#"> <img src="images/exit.png" style="height:40px;"><br> Logout </a> </li>
            <li> <a href="#"  data-toggle="modal" data-target=".Accounts-Alarm"> <img src="images/Alerts2.png" style="height:40px;"><br> Accounts Alarm </a> </li>
          </ul>
        </div>
      </nav>
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
