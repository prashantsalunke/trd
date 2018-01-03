webpackJsonp(["advertise-management.module"],{

/***/ "../../../../../src/app/advertise-management/advertise-management-routing.module.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AdvertiseManagementRoutingModule; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("../../../core/esm5/core.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_router__ = __webpack_require__("../../../router/esm5/router.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__advt_index_component__ = __webpack_require__("../../../../../src/app/advertise-management/advt-index.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__advt_main_component__ = __webpack_require__("../../../../../src/app/advertise-management/advt-main.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__edit_carousel_component__ = __webpack_require__("../../../../../src/app/advertise-management/edit-carousel.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__advt_carousel_component__ = __webpack_require__("../../../../../src/app/advertise-management/advt-carousel.component.ts");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};






var routes = [
    {
        path: '',
        component: __WEBPACK_IMPORTED_MODULE_2__advt_index_component__["a" /* AdvtIndexComponent */],
        children: [{
                path: '', component: __WEBPACK_IMPORTED_MODULE_3__advt_main_component__["a" /* AdvtMainComponent */],
                children: [
                    {
                        path: 'add', component: __WEBPACK_IMPORTED_MODULE_4__edit_carousel_component__["a" /* EditCarouselComponent */]
                    },
                    {
                        path: 'edit/:id', component: __WEBPACK_IMPORTED_MODULE_4__edit_carousel_component__["a" /* EditCarouselComponent */]
                    }
                ],
            },
            {
                path: 'carousel', component: __WEBPACK_IMPORTED_MODULE_5__advt_carousel_component__["a" /* AdvtCarouselComponent */]
            }]
    }
];
var AdvertiseManagementRoutingModule = (function () {
    function AdvertiseManagementRoutingModule() {
    }
    AdvertiseManagementRoutingModule = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["NgModule"])({
            imports: [__WEBPACK_IMPORTED_MODULE_1__angular_router__["c" /* RouterModule */].forChild(routes)],
            exports: [__WEBPACK_IMPORTED_MODULE_1__angular_router__["c" /* RouterModule */]]
        })
    ], AdvertiseManagementRoutingModule);
    return AdvertiseManagementRoutingModule;
}());



/***/ }),

/***/ "../../../../../src/app/advertise-management/advertise-management.module.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AdvertiseManagementModule", function() { return AdvertiseManagementModule; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("../../../core/esm5/core.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_common__ = __webpack_require__("../../../common/esm5/common.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__advertise_management_routing_module__ = __webpack_require__("../../../../../src/app/advertise-management/advertise-management-routing.module.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__advt_index_component__ = __webpack_require__("../../../../../src/app/advertise-management/advt-index.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__advt_main_component__ = __webpack_require__("../../../../../src/app/advertise-management/advt-main.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__advt_carousel_component__ = __webpack_require__("../../../../../src/app/advertise-management/advt-carousel.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__edit_carousel_component__ = __webpack_require__("../../../../../src/app/advertise-management/edit-carousel.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__advt_report_component__ = __webpack_require__("../../../../../src/app/advertise-management/advt-report.component.ts");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};








var AdvertiseManagementModule = (function () {
    function AdvertiseManagementModule() {
    }
    AdvertiseManagementModule = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["NgModule"])({
            imports: [
                __WEBPACK_IMPORTED_MODULE_1__angular_common__["CommonModule"],
                __WEBPACK_IMPORTED_MODULE_2__advertise_management_routing_module__["a" /* AdvertiseManagementRoutingModule */]
            ],
            declarations: [__WEBPACK_IMPORTED_MODULE_3__advt_index_component__["a" /* AdvtIndexComponent */], __WEBPACK_IMPORTED_MODULE_4__advt_main_component__["a" /* AdvtMainComponent */], __WEBPACK_IMPORTED_MODULE_5__advt_carousel_component__["a" /* AdvtCarouselComponent */], __WEBPACK_IMPORTED_MODULE_6__edit_carousel_component__["a" /* EditCarouselComponent */], __WEBPACK_IMPORTED_MODULE_7__advt_report_component__["a" /* AdvtReportComponent */]]
        })
    ], AdvertiseManagementModule);
    return AdvertiseManagementModule;
}());



/***/ }),

/***/ "../../../../../src/app/advertise-management/advt-carousel.component.html":
/***/ (function(module, exports) {

module.exports = "<p>\n  advt-carousel works!\n</p>\n"

/***/ }),

/***/ "../../../../../src/app/advertise-management/advt-carousel.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AdvtCarouselComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("../../../core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var AdvtCarouselComponent = (function () {
    function AdvtCarouselComponent() {
    }
    AdvtCarouselComponent.prototype.ngOnInit = function () {
    };
    AdvtCarouselComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'trd-advt-carousel',
            template: __webpack_require__("../../../../../src/app/advertise-management/advt-carousel.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [])
    ], AdvtCarouselComponent);
    return AdvtCarouselComponent;
}());



/***/ }),

/***/ "../../../../../src/app/advertise-management/advt-index.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AdvtIndexComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("../../../core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var AdvtIndexComponent = (function () {
    function AdvtIndexComponent() {
    }
    AdvtIndexComponent.prototype.ngOnInit = function () {
    };
    AdvtIndexComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'trd-advt-index',
            template: "\n    <p>\n      advt-index works!\n    </p>\n  ",
            styles: []
        }),
        __metadata("design:paramtypes", [])
    ], AdvtIndexComponent);
    return AdvtIndexComponent;
}());



/***/ }),

/***/ "../../../../../src/app/advertise-management/advt-main.component.html":
/***/ (function(module, exports) {

module.exports = "<p>\n  advt-main works!\n</p>\n"

/***/ }),

/***/ "../../../../../src/app/advertise-management/advt-main.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AdvtMainComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("../../../core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var AdvtMainComponent = (function () {
    function AdvtMainComponent() {
    }
    AdvtMainComponent.prototype.ngOnInit = function () {
    };
    AdvtMainComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'trd-advt-main',
            template: __webpack_require__("../../../../../src/app/advertise-management/advt-main.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [])
    ], AdvtMainComponent);
    return AdvtMainComponent;
}());



/***/ }),

/***/ "../../../../../src/app/advertise-management/advt-report.component.html":
/***/ (function(module, exports) {

module.exports = "<p>\n  advt-report works!\n</p>\n"

/***/ }),

/***/ "../../../../../src/app/advertise-management/advt-report.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AdvtReportComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("../../../core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var AdvtReportComponent = (function () {
    function AdvtReportComponent() {
    }
    AdvtReportComponent.prototype.ngOnInit = function () {
    };
    AdvtReportComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'trd-advt-report',
            template: __webpack_require__("../../../../../src/app/advertise-management/advt-report.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [])
    ], AdvtReportComponent);
    return AdvtReportComponent;
}());



/***/ }),

/***/ "../../../../../src/app/advertise-management/edit-carousel.component.html":
/***/ (function(module, exports) {

module.exports = "<p>\n  edit-carousel works!\n</p>\n"

/***/ }),

/***/ "../../../../../src/app/advertise-management/edit-carousel.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return EditCarouselComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("../../../core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var EditCarouselComponent = (function () {
    function EditCarouselComponent() {
    }
    EditCarouselComponent.prototype.ngOnInit = function () {
    };
    EditCarouselComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'trd-edit-carousel',
            template: __webpack_require__("../../../../../src/app/advertise-management/edit-carousel.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [])
    ], EditCarouselComponent);
    return EditCarouselComponent;
}());



/***/ })

});
//# sourceMappingURL=advertise-management.module.chunk.js.map