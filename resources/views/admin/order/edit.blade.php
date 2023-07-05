@extends('layouts.admin')
@section('title', 'تحكم')
@section('content')

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">


            <form action="{{ route('admin.order.update', $order->id) }}" method="post"
                class="form d-flex flex-column flex-lg-row">
                @csrf
                @method('put')

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>الخدمة</h2>
                            </div>
                        </div>
                        <!--end::Card header-->


                        <!--begin::service-->
                        <div class="card-body pt-0 pb-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">الخدمة</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" disabled
                                    class="form-control mb-2  @error('name') is-invalid @enderror"
                                    value="{{ old('name', $order->product->name) }}" />
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <!--end::Input-->

                            </div>
                            <!--end::Input group-->
                        </div>

                        <!--begin::user-->
                        <div class="card-body pt-0 pb-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">اسم المستخدم</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" disabled
                                    class="form-control mb-2"
                                    value="{{ old('name', $order->user->name) }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>

                        <!--begin::phone-->
                        <div class="card-body pt-0 pb-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">رقم التواصل</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" disabled
                                    class="form-control mb-2"
                                    value="{{ old('name', $order->phone) }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>

                        <!--begin::date-->
                        <div class="card-body pt-0 pb-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">تاريخ الحجز</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" disabled
                                    class="form-control mb-2"
                                    value="{{ old('name', $order->date) }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>

                        <!--begin::price-->
                        <div class="card-body pt-0 pb-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">السعر</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name" disabled
                                    class="form-control mb-2"
                                    value="${{ old('name', $order->price) }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>

                        <!--begin::status-->
                        <div class="card-body pt-0 pb-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">حالة الحجز</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="status_id" class="form-control mb-2">
                                    <option selected disabled>-- اختر الحالة --</option>
                                    <option value="accepted" {{ $order->status == 'accepted' ? 'selected' : '' }}>   موافق عليها</option>
                                    <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>قيد الانتظار</option>
                                    <option value="canceled" {{ $order->status == 'canceled' ? 'selected' : '' }}> رفض</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Input group-->
                        </div>



                    </div>
                    <!--end::General options-->

                    <div class="d-flex justify-content-start">
                        <!--begin::Button-->
                        <a href="{{ route('admin.order_vendor') }}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">إلغاء</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_order_submit" class="btn btn-primary">
                            <span class="indicator-label">{{ $button_lable ?? 'حفظ' }}</span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->

            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->

@stop
