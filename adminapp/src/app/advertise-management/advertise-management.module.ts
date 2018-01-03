import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { AdvertiseManagementRoutingModule } from './advertise-management-routing.module';
import { AdvtIndexComponent } from './advt-index.component';
import { AdvtMainComponent } from './advt-main.component';
import { AdvtCarouselComponent } from './advt-carousel.component';
import { EditCarouselComponent } from './edit-carousel.component';
import { AdvtReportComponent } from './advt-report.component';

@NgModule({
  imports: [
    CommonModule,
    AdvertiseManagementRoutingModule
  ],
  declarations: [AdvtIndexComponent, AdvtMainComponent, AdvtCarouselComponent, EditCarouselComponent, AdvtReportComponent]
})
export class AdvertiseManagementModule { }
