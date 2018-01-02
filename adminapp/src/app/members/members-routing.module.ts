import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {MemberIndexComponent} from "./member-index.component";
import {MemberTypeComponent} from "./member-type.component";

const routes: Routes = [{
  path: '',
  component: MemberIndexComponent,
  children: [{
    path: '', component: MemberTypeComponent}]
}];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class MembersRoutingModule { }
