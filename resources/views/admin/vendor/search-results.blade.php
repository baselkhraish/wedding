@extends('layouts.admin')
@section('title','التجار')
@section('content')


<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Row-->
        <div class="row gy-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::Tables Widget 9-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="card-header border-0 pt-5">

                            <form action="{{ route('admin.search') }}" method="GET" class="d-flex justify-content-between align-items-center">
                                <input type="text" name="keyword"  value="{{ request()->keyword }}" placeholder="اسم المحل"  class="form-control">
                                <button type="submit" class="btn btn-primary ml-3">بحث</button>
                            </form>

                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-hover table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="w-25px">#</th>
                                        <th class="min-w-200px">اسم التاجر</th>
                                        <th class="min-w-200px">اسم المحل</th>
                                        {{-- <th class="min-w-200px">صورة المحل</th> --}}
                                        <th class="min-w-200px">اسم القسم</th>
                                        <th class="min-w-150px">الحالة</th>
                                        <th class="min-w-150px">الصلاحية</th>
                                        <th class="min-w-100px text-end">الحركات</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($vendor as $item)
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold">{{ $item->id }}</p>
                                        </td>
                                        <td>
                                            <p class="text-dark fw-bolder text-hover-primary fs-6">{{ $item->user->name }}</p>
                                        </td>
                                        <td>
                                            <p class="text-dark fw-bolder text-hover-primary fs-6">{{ $item->name }}</p>
                                        </td>

                                        {{-- <td>
                                            <p class="text-dark fw-bolder text-hover-primary fs-6"><img src="{{ asset('uploads/images/vendor/'.$item->image) }}" alt="{{ $item->name }}" style="width: 50px;"></p>
                                        </td> --}}

                                        <td>
                                            <div class="d-flex align-items-center">
                                                    <p class="text-dark fw-bolder text-hover-primary fs-6">{{ $item->category->name }}</p>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                    <p class="text-dark fw-bolder text-hover-primary fs-6">
                                                        @if ($item->status == 'accepted')
                                                            <span class="text-success">مقبول</span>
                                                        @elseif($item->status == 'canceled')
                                                            <span class="text-danger">موقوف</span>
                                                        @else
                                                         <span class="text-warning">بالانتظار</span>
                                                        @endif
                                                    </p>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                    <p class="text-dark fw-bolder text-hover-primary fs-6">
                                                        @if ($item->user->status == 'admin')
                                                            <span>أدمن</span>
                                                        @elseif($item->user->status == 'vendor')
                                                            <span>بائع</span>
                                                        @elseif($item->user->status == 'not_active')
                                                         <span class="text-danger">محظور</span>
                                                        @else
                                                            <span>مستخدم</span>
                                                        @endif
                                                    </p>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex justify-content-end align-items-center flex-shrink-0">
                                                <a href="{{ route('admin.vendor.show',$item->id) }}"
                                                    class="btn btn-primary btn-bg-light btn-sm me-1">
                                                    + المزيد
                                                </a>
                                                <a href="{{ route('admin.vendor.edit',$item->id) }}"
                                                    class="btn btn-success btn-bg-light btn-sm me-1">
                                                    تعديل
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
                    <!--begin::Body-->
                </div>
                <!--end::Tables Widget 9-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::Post-->

@stop
