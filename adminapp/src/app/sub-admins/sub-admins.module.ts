import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { SubAdminsRoutingModule } from './sub-admins-routing.module';
import { IndexComponent } from './index.component';
import { ListComponent } from './list.component';
import { AddComponent } from './add.component';
import { SuspendedListComponent } from './suspended-list.component';
import { PermitionComponent } from './permition.component';
import { HeaderComponent } from './header.component';
import { ModalModule } from 'ngx-bootstrap/modal';

@NgModule({
  imports: [
    CommonModule,
    SubAdminsRoutingModule,    
    ModalModule.forRoot()
  ],
  declarations: [IndexComponent, ListComponent, AddComponent, SuspendedListComponent, PermitionComponent, HeaderComponent]
})
export class SubAdminsModule { }
