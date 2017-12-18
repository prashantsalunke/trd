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
import { SubAdminService } from './sub-admin.service';
import { ReactiveFormsModule } from '@angular/forms';

@NgModule({
  imports: [
    CommonModule,
    SubAdminsRoutingModule,    
    ReactiveFormsModule,
    ModalModule.forRoot()
  ],
  declarations: [IndexComponent, 
    ListComponent, AddComponent,
     SuspendedListComponent, PermitionComponent,
      HeaderComponent],
      providers: [SubAdminService]
})
export class SubAdminsModule { }
