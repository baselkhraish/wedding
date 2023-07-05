@extends('layouts.admin')
@section('title','تعديل البائع')
@section('content')

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">


            <form action="{{ route('admin.vendor.update',$vendor->id) }}" method="post" id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row">
                @csrf
                @method('put')
                @include('admin.vendor._form', [
                    'button_lable' => 'حفظ التغييرات',
                ])
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->

@stop
