import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {AdvtIndexComponent} from "./advt-index.component";
import {AdvtMainComponent} from "./advt-main.component";
import {EditCarouselComponent} from "./edit-carousel.component";
import {AdvtCarouselComponent} from "./advt-carousel.component";

const routes: Routes = [
  {
    path: '',
    component: AdvtIndexComponent,
    children: [{
      path: '', component: AdvtMainComponent,
      children: [
        {
          path: 'add', component: EditCarouselComponent
        },
        {
          path: 'edit/:id', component: EditCarouselComponent
        }],
    },
      {
        path: 'carousel', component: AdvtCarouselComponent
      }]
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AdvertiseManagementRoutingModule { }
