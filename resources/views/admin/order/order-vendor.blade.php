@extends('layouts.admin')
@section('title', 'الطلبات')
@section('content')

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-15">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">


                    <!--begin:::كل الطلبات-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                            href="#kt_all_product">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                            <span class="svg-icon svg-icon-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->كل الطلبات
                        </a>
                    </li>
                    <!--end:::كل الطلبات-->

                    <!--begin:::الطلبات الموافق عليها-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                            href="#kt_accepted_order">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm004.svg-->
                            <span class="svg-icon svg-icon-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="14" y="4" width="4" height="4"
                                        rx="2" fill="currentColor" />
                                    <path
                                        d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="6" y="5" width="6" height="6"
                                        rx="3" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->الطلبات الموافق عليها
                        </a>
                    </li>
                    <!--end:::الطلبات الموافق عليها -->

                    <!--begin:::الطلبات قيد الانتظار-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                            href="#kt_pending_order">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm004.svg-->
                            <span class="svg-icon svg-icon-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="14" y="4" width="4" height="4"
                                        rx="2" fill="currentColor" />
                                    <path
                                        d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="6" y="5" width="6" height="6"
                                        rx="3" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->الطلبات قيد الانتظار
                        </a>
                    </li>
                    <!--end:::الطلبات قيد الانتظار -->

                    <!--begin:::الطلبات الملغاة-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                            href="#kt_canceled_order">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm004.svg-->
                            <span class="svg-icon svg-icon-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="14" y="4" width="4" height="4"
                                        rx="2" fill="currentColor" />
                                    <path
                                        d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z"
                                        fill="currentColor" />
                                    <rect opacity="0.3" x="6" y="5" width="6" height="6"
                                        rx="3" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->الطلبات الملغاة
                        </a>
                    </li>
                    <!--end:::الطلبات الملغاة -->

                </ul>
                <!--end:::Tabs-->
                <!--begin:::Tab content-->
                <div class="tab-content" id="myTabContent">
                    <!--begin:::all order-->
                    <div class="tab-pane fade show active" id="kt_all_product" role="tabpanel">
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Title-->
                                    <h2>كل الطلبات</h2>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">

                                <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-hover table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="w-100px">رقم الطلب</th>
                                        <th class="min-w-200px">اسم الخدمة</th>
                                        <th class="min-w-200px">تاريخ الحجز</th>
                                        <th class="min-w-200px">السعر</th>
                                        <th class="min-w-150px">الحالة</th>
                                        <th class="min-w-100px text-end">الحركات</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($order as $item)
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold">{{ $item->id }}</p>
                                        </td>
                                        <td>
                                            <p class="text-dark fw-bolder fs-6">{{ $item->product->name }}</p>
                                        </td>
                                        <td>
                                            <p class="text-dark fw-bolder d-block fs-6">{{ $item->date }}</p>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                    <p class="text-dark fw-bolder fs-6">${{ $item->price }}</p>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if($item->status == 'accepted')
                                                    <p class="text-success fw-bolder fs-6">تم الموافقة</p>
                                                @elseif($item->status == 'pending')
                                                    <p class="text-warning fw-bolder fs-6">قيد الانتظار</p>
                                                @else
                                                    <p class="text-danger fw-bolder fs-6">ملغاة</p>
                                                @endif
                                            </div>
                                        </td>


                                        <td>
                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                <a href="{{ route('admin.order.edit',$item->id) }}" class="btn btn-primary btn-bg-light btn-sm me-1">
                                                    فحص
                                                </a>


                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->


                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                    <!--end:::all order-->


                    <!--begin:::accepted-->
                    <div class="tab-pane fade show" id="kt_accepted_order" role="tabpanel">
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Title-->
                                    <h2>الطلبات الموافق عليها</h2>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">

                                <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-hover table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="w-100px">رقم الطلب</th>
                                        <th class="min-w-200px">اسم الخدمة</th>
                                        <th class="min-w-200px">تاريخ الحجز</th>
                                        <th class="min-w-200px">السعر</th>
                                        <th class="min-w-150px">الحالة</th>
                                        <th class="min-w-100px text-end">الحركات</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($order_accepted as $item)
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold">{{ $item->id }}</p>
                                        </td>
                                        <td>
                                            <p class="text-dark fw-bolder fs-6">{{ $item->product->name }}</p>
                                        </td>
                                        <td>
                                            <p class="text-dark fw-bolder d-block fs-6">{{ $item->date }}</p>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                    <p class="text-dark fw-bolder fs-6">${{ $item->price }}</p>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if($item->status == 'accepted')
                                                    <p class="text-success fw-bolder fs-6">تم الموافقة</p>
                                                @elseif($item->status == 'pending')
                                                    <p class="text-warning fw-bolder fs-6">قيد الانتظار</p>
                                                @else
                                                    <p class="text-danger fw-bolder fs-6">ملغاة</p>
                                                @endif
                                            </div>
                                        </td>


                                        <td>
                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                <a href="{{ route('admin.order.edit',$item->id) }}" class="btn btn-primary btn-bg-light btn-sm me-1">
                                                    فحص
                                                </a>


                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->


                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                    <!--end:::accepted-->

                    <!--begin:::pending-->
                    <div class="tab-pane fade show" id="kt_pending_order" role="tabpanel">
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Title-->
                                    <h2>الطلبات قيد الانتظار</h2>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">

                                <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-hover table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="w-100px">رقم الطلب</th>
                                        <th class="min-w-200px">اسم الخدمة</th>
                                        <th class="min-w-200px">تاريخ الحجز</th>
                                        <th class="min-w-200px">السعر</th>
                                        <th class="min-w-150px">الحالة</th>
                                        <th class="min-w-100px text-end">الحركات</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($order_pending as $item)
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold">{{ $item->id }}</p>
                                        </td>
                                        <td>
                                            <p class="text-dark fw-bolder fs-6">{{ $item->product->name }}</p>
                                        </td>
                                        <td>
                                            <p class="text-dark fw-bolder d-block fs-6">{{ $item->date }}</p>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                    <p class="text-dark fw-bolder fs-6">${{ $item->price }}</p>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if($item->status == 'accepted')
                                                    <p class="text-success fw-bolder fs-6">تم الموافقة</p>
                                                @elseif($item->status == 'pending')
                                                    <p class="text-warning fw-bolder fs-6">قيد الانتظار</p>
                                                @else
                                                    <p class="text-danger fw-bolder fs-6">ملغاة</p>
                                                @endif
                                            </div>
                                        </td>


                                        <td>
                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                <a href="{{ route('admin.order.edit',$item->id) }}" class="btn btn-primary btn-bg-light btn-sm me-1">
                                                    فحص
                                                </a>


                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->


                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                    <!--end:::pending-->


                    <!--begin:::canceled-->
                    <div class="tab-pane fade show" id="kt_canceled_order" role="tabpanel">
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Title-->
                                    <h2>الطلبات الملغاة</h2>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">

                                <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-hover table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="w-100px">رقم الطلب</th>
                                        <th class="min-w-200px">اسم الخدمة</th>
                                        <th class="min-w-200px">تاريخ الحجز</th>
                                        <th class="min-w-200px">السعر</th>
                                        <th class="min-w-150px">الحالة</th>
                                        <th class="min-w-100px text-end">الحركات</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($order_canceled as $item)
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold">{{ $item->id }}</p>
                                        </td>
                                        <td>
                                            <p class="text-dark fw-bolder fs-6">{{ $item->product->name }}</p>
                                        </td>
                                        <td>
                                            <p class="text-dark fw-bolder d-block fs-6">{{ $item->date }}</p>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                    <p class="text-dark fw-bolder fs-6">${{ $item->price }}</p>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if($item->status == 'accepted')
                                                    <p class="text-success fw-bolder fs-6">تم الموافقة</p>
                                                @elseif($item->status == 'pending')
                                                    <p class="text-warning fw-bolder fs-6">قيد الانتظار</p>
                                                @else
                                                    <p class="text-danger fw-bolder fs-6">ملغاة</p>
                                                @endif
                                            </div>                                          </div>
                                        </td>


                                        <td>
                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                <a href="{{ route('admin.order.edit',$item->id) }}" class="btn btn-primary btn-bg-light btn-sm me-1">
                                                    فحص
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->


                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                    <!--end:::canceled-->



                </div>
                <!--end:::Tab content-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->

@stop
