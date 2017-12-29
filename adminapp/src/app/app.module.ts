import './rxjs-extensions';

import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {HttpClientModule} from '@angular/common/http';
import { ReactiveFormsModule } from '@angular/forms';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

import { AppRoutingModule } from './app-routing.module';

import { AppComponent } from './app.component';
import { MainRouteComponent } from './main-route.component';
import { CoreModule } from './core/core.module';
import { AuthService } from './core/auth.service';


@NgModule({
  declarations: [
    AppComponent,
    MainRouteComponent
    ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    HttpClientModule,
    ReactiveFormsModule,
    CoreModule,
    AppRoutingModule
    
  ],
  providers: [AuthService ],
    bootstrap: [AppComponent]
})
export class AppModule { }
