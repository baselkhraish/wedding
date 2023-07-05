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
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-hover table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="min-w-200px">الملاحظة</th>
                                        <th class="min-w-200px">نص الملاحظة</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $counter = 1;
                                    @endphp
                                    @foreach ($note as $item)
                                    <tr>
                                        <td>
                                            <p class="font-weight-bold"> ملاحظة {{ $counter++ }}</p>
                                        </td>
                                        <td>
                                            <p class="text-dark fw-bolder text-hover-primary fs-6">{{ $item->note }}</p>
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
