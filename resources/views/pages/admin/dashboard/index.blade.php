@extends('layouts.app-admin')
@section('title', 'Dashboard | PROTECH LEARNING')

@section('content')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Row-->
                <div class="row gx-5 g-xl-10 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-5 mb-xl-10">
                        <!--begin::List widget 12-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Visits by Source</span>
                                    <span class="text-gray-500 mt-1 fw-semibold fs-6">29.4k visitors</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex align-items-end">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-rocket fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Direct Source</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">1,067</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.6%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-tiktok fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Social Networks</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">All Social Channels</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">24,588</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>4.1%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-sms fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Email Newsletter</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Mailchimp Campaigns</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>0.2%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-icon fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Impact Radius visits</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">6,578</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-danger fs-base">
                                                <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>0.4%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-abstract-25 fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Many Sources</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">79,458</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>8.3%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-5">
                                            <span class="symbol-label">
                                                <i class="ki-outline ki-abstract-39 fs-3 text-gray-600"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Container-->
                                        <div class="d-flex align-items-center flex-stack flex-wrap d-grid gap-1 flex-row-fluid">
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Rising Networks</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Number-->
                                                <span class="text-gray-800 fw-bold fs-4 me-3">18,047</span>
                                                <!--end::Number-->
                                                <!--begin::Info-->
                                                <!--begin::label-->
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>1.9%</span>
                                                <!--end::label-->
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List widget 12-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-5 mb-xl-10">
                        <!--begin::Chart widget 31-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7 mb-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Warephase stats</span>
                                    <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">PDF Report</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Chart-->
                                <div id="kt_charts_widget_31_chart" class="w-100 h-300px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 31-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-5 mb-xl-10">
                        <!--begin::Chart widget 30-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7 mb-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Stats by Department</span>
                                    <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">PDF Report</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex justify-content-between flex-column">
                                <!--begin::Items-->
                                <div class="d-flex flex-wrap d-grid gap-5 mb-10">
                                    <!--begin::Item-->
                                    <div class="border-end-dashed border-end border-gray-300 pe-xxl-7 me-xxl-5">
                                        <!--begin::Statistics-->
                                        <div class="d-flex mb-2">
                                            <span class="fs-4 fw-semibold text-gray-500 me-1">$</span>
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">8,035</span>
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Description-->
                                        <span class="fs-6 fw-semibold text-gray-500">Actual for April</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Currency-->
                                            <span class="fs-4 fw-semibold text-gray-500 align-self-start me-1">$</span>
                                            <!--end::Currency-->
                                            <!--begin::Value-->
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">4,684</span>
                                            <!--end::Value-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>4.5%</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Description-->
                                        <span class="fs-6 fw-semibold text-gray-500">GAP</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                                <!--begin::Chart container-->
                                <div id="kt_charts_widget_30_chart" class="w-100 h-200px"></div>
                                <!--end::Chart container-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 30-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Table Widget 5-->
                <div class="card card-flush mb-5 mb-xl-10">
                    <!--begin::Card header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900">Stock Report</span>
                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 2,356 Items in the Stock</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Actions-->
                        <div class="card-toolbar">
                            <!--begin::Filters-->
                            <div class="d-flex flex-stack flex-wrap gap-4">
                                <!--begin::Destination-->
                                <div class="d-flex align-items-center fw-bold">
                                    <!--begin::Label-->
                                    <div class="text-muted fs-7 me-2">Cateogry</div>
                                    <!--end::Label-->
                                    <!--begin::Select-->
                                    <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                        <option></option>
                                        <option value="Show All" selected="selected">Show All</option>
                                        <option value="a">Category A</option>
                                        <option value="b">Category B</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Destination-->
                                <!--begin::Status-->
                                <div class="d-flex align-items-center fw-bold">
                                    <!--begin::Label-->
                                    <div class="text-muted fs-7 me-2">Status</div>
                                    <!--end::Label-->
                                    <!--begin::Select-->
                                    <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
                                        <option></option>
                                        <option value="Show All" selected="selected">Show All</option>
                                        <option value="In Stock">In Stock</option>
                                        <option value="Out of Stock">Out of Stock</option>
                                        <option value="Low Stock">Low Stock</option>
                                    </select>
                                    <!--end::Select-->
                                </div>
                                <!--end::Status-->
                                <!--begin::Search-->
                                <a href="apps/ecommerce/catalog/products.html" class="btn btn-light btn-sm">View Stock</a>
                                <!--end::Search-->
                            </div>
                            <!--begin::Filters-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-150px">Item</th>
                                    <th class="text-end pe-3 min-w-100px">Product ID</th>
                                    <th class="text-end pe-3 min-w-150px">Date Added</th>
                                    <th class="text-end pe-3 min-w-100px">Price</th>
                                    <th class="text-end pe-3 min-w-100px">Status</th>
                                    <th class="text-end pe-0 min-w-75px">Qty</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Macbook Air M1</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">#XGY-356</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">02 Apr, 2024</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end">$1,230</td>
                                    <!--end::Price-->
                                    <!--begin::Status-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                    </td>
                                    <!--end::Status-->
                                    <!--begin::Qty-->
                                    <td class="text-end" data-order="58">
                                        <span class="text-gray-900 fw-bold">58 PCS</span>
                                    </td>
                                    <!--end::Qty-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Surface Laptop 4</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">#YHD-047</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">01 Apr, 2024</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end">$1,060</td>
                                    <!--end::Price-->
                                    <!--begin::Status-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                    </td>
                                    <!--end::Status-->
                                    <!--begin::Qty-->
                                    <td class="text-end" data-order="0">
                                        <span class="text-gray-900 fw-bold">0 PCS</span>
                                    </td>
                                    <!--end::Qty-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Logitech MX 250</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">#SRR-678</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">24 Mar, 2024</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end">$64</td>
                                    <!--end::Price-->
                                    <!--begin::Status-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                    </td>
                                    <!--end::Status-->
                                    <!--begin::Qty-->
                                    <td class="text-end" data-order="290">
                                        <span class="text-gray-900 fw-bold">290 PCS</span>
                                    </td>
                                    <!--end::Qty-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">AudioEngine HD3</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">#PXF-578</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">24 Mar, 2024</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end">$1,060</td>
                                    <!--end::Price-->
                                    <!--begin::Status-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                    </td>
                                    <!--end::Status-->
                                    <!--begin::Qty-->
                                    <td class="text-end" data-order="46">
                                        <span class="text-gray-900 fw-bold">46 PCS</span>
                                    </td>
                                    <!--end::Qty-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">HP Hyper LTR</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">#PXF-778</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">16 Jan, 2024</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end">$4500</td>
                                    <!--end::Price-->
                                    <!--begin::Status-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                    </td>
                                    <!--end::Status-->
                                    <!--begin::Qty-->
                                    <td class="text-end" data-order="78">
                                        <span class="text-gray-900 fw-bold">78 PCS</span>
                                    </td>
                                    <!--end::Qty-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Dell 32 UltraSharp</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">#XGY-356</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">22 Dec, 2024</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end">$1,060</td>
                                    <!--end::Price-->
                                    <!--begin::Status-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">Low Stock</span>
                                    </td>
                                    <!--end::Status-->
                                    <!--begin::Qty-->
                                    <td class="text-end" data-order="8">
                                        <span class="text-gray-900 fw-bold">8 PCS</span>
                                    </td>
                                    <!--end::Qty-->
                                </tr>
                                <tr>
                                    <!--begin::Item-->
                                    <td>
                                        <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-900 text-hover-primary">Google Pixel 6 Pro</a>
                                    </td>
                                    <!--end::Item-->
                                    <!--begin::Product ID-->
                                    <td class="text-end">#XVR-425</td>
                                    <!--end::Product ID-->
                                    <!--begin::Date added-->
                                    <td class="text-end">27 Dec, 2024</td>
                                    <!--end::Date added-->
                                    <!--begin::Price-->
                                    <td class="text-end">$1,060</td>
                                    <!--end::Price-->
                                    <!--begin::Status-->
                                    <td class="text-end">
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                    </td>
                                    <!--end::Status-->
                                    <!--begin::Qty-->
                                    <td class="text-end" data-order="124">
                                        <span class="text-gray-900 fw-bold">124 PCS</span>
                                    </td>
                                    <!--end::Qty-->
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Table Widget 5-->
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-xl-10">
                        <!--begin::Engage widget 1-->
                        <div class="card h-md-100" dir="ltr">
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column flex-center">
                                <!--begin::Heading-->
                                <div class="mb-2">
                                    <!--begin::Title-->
                                    <h1 class="fw-semibold text-gray-800 text-center lh-lg">Have you tried
                                    <br />new
                                    <span class="fw-bolder">Invoice Manager ?</span></h1>
                                    <!--end::Title-->
                                    <!--begin::Illustration-->
                                    <div class="py-10 text-center">
                                        <img src="{{URL::to('/')}}/assets/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
                                        <img src="{{URL::to('/')}}/assets/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Links-->
                                <div class="text-center mb-1">
                                    <!--begin::Link-->
                                    <a class="btn btn-sm btn-primary me-2" href="apps/ecommerce/customers/listing.html">Try now</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a class="btn btn-sm btn-light" href="apps/invoices/view/invoice-1.html">Learn more</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Engage widget 1-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-xl-10">
                        <!--begin::Chart widget 5-->
                        <div class="card card-flush h-md-100">
                            <!--begin::Header-->
                            <div class="card-header flex-nowrap pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900">Top Selling Categories</span>
                                    <span class="text-gray-500 pt-2 fw-semibold fs-6">8k social visitors</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                        <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-5 ps-6">
                                <div id="kt_charts_widget_5" class="min-h-auto"></div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Chart widget 5-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-4 mb-5 mb-xl-10">
                        <!--begin::List widget 6-->
                        <div class="card card-flush h-md-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Top Selling Products</span>
                                    <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="apps/ecommerce/catalog/categories.html" class="btn btn-sm btn-light">View All</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-4">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                <th class="p-0 w-50px pb-1">ITEM</th>
                                                <th class="ps-0 min-w-140px"></th>
                                                <th class="text-end min-w-140px p-0 pb-1">TOTAL PRICE</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{URL::to('/')}}/assets/media/stock/ecommerce/210.png" class="w-50px" alt="" />
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/sales/details.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$72.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{URL::to('/')}}/assets/media/stock/ecommerce/215.png" class="w-50px" alt="" />
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/sales/details.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$45.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{URL::to('/')}}/assets/media/stock/ecommerce/209.png" class="w-50px" alt="" />
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/sales/details.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$168.00</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{URL::to('/')}}/assets/media/stock/ecommerce/214.png" class="w-50px" alt="" />
                                                </td>
                                                <td class="ps-0">
                                                    <a href="apps/ecommerce/sales/details.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Yellow Stone</a>
                                                    <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
                                                </td>
                                                <td>
                                                    <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$72.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List widget 6-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    <div id="kt_app_footer" class="app-footer">
        <!--begin::Footer container-->
        <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
            <!--begin::Copyright-->
            <div class="text-gray-900 order-2 order-md-1">
                <span class="text-muted fw-semibold me-1">2024&copy;</span>
                <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                <li class="menu-item">
                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                </li>
                <li class="menu-item">
                    <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                </li>
                <li class="menu-item">
                    <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                </li>
            </ul>
            <!--end::Menu-->
        </div>
        <!--end::Footer container-->
    </div>
    <!--end::Footer-->
</div>
@endsection
