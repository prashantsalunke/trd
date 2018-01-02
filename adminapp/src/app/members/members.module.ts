import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { MembersRoutingModule } from './members-routing.module';
import { MemberIndexComponent } from './member-index.component';
import { MemberTypeComponent } from './member-type.component';
import { MemberTypeDetailsComponent } from './member-type-details.component';
import { MemberTypeHeaderComponent } from './member-type-header.component';
import { MemberTypeSidebarComponent } from './member-type-sidebar.component';
import { MemberTypeListComponent } from './member-type-list.component';
import { MemberDetailsComponent } from './member-details.component';

@NgModule({
  imports: [
    CommonModule,
    MembersRoutingModule
  ],
  declarations: [MemberIndexComponent, MemberTypeComponent, MemberTypeDetailsComponent, MemberTypeHeaderComponent, MemberTypeSidebarComponent, MemberTypeListComponent, MemberDetailsComponent]
})
export class MembersModule { }
