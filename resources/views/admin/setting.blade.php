@extends('layouts.admin')
@section('title', 'الإعدادات')
@section('content')

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-15">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                    <!--begin:::المعلومات العامة-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                            href="#kt_ecommerce_settings_general">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                            <span class="svg-icon svg-icon-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->المعلومات الأساسية
                        </a>
                    </li>
                    <!--end:::المعلومات العامة-->
                    <!--begin:::بيانات البائع-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                            href="#kt_ecommerce_settings_store">
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
                            <!--end::Svg Icon-->بيانات البائع
                        </a>
                    </li>
                    <!--end:::بيانات البائع -->

                </ul>
                <!--end:::Tabs-->
                <!--begin:::Tab content-->
                <div class="tab-content" id="myTabContent">



                    <!--begin:::information-->
                    <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Title-->
                                    <h2>المعلومات الأساسية</h2>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Form-->
                                <form id="kt_ecommerce_settings_general_form" class="form"
                                    action="{{ route('admin.setting.update', $setting1->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')

                                    <!--begin::image-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-2 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Set keywords for the store separated by a comma."></i>
                                                <span>صورة البائع</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="file" class="form-control form-control-solid" name="image"
                                                data-kt-ecommerce-settings-type="tagify" />
                                            <img src="{{ asset('uploads/images/setting/' . $setting1->image) }}"
                                                width="50" alt="">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::logo-->

                                    <!--begin::phone-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-2 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Set the title of the store for SEO."></i>
                                                <span class="required">رقم الهاتف</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="phone"
                                                value="{{ $setting1->phone }}" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::phone-->


                                    <!--begin::Action buttons-->
                                    <div class="row">
                                        <div class="col-md-9 offset-md-3">
                                            <!--begin::Separator-->
                                            <div class="separator mb-6"></div>
                                            <!--end::Separator-->
                                            <div class="d-flex justify-content-end">
                                                <!--begin::Button-->
                                                <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                    class="btn btn-light me-3">إلغاء</button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">حفظ</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Action buttons-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                    <!--end:::information-->


                    <!--begin:::Social Media-->
                    <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Title-->
                                    <h2>بيانات البائع</h2>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->


                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Form-->
                                <form id="kt_ecommerce_settings_general_store" class="form"
                                    action="{{ route('admin.setting.update2', $setting2->id) }}" method="post">
                                    @csrf
                                    @method('put')

                                    <!--begin::Category-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-2 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Set the name of the store"></i>
                                                <span class="required">الأقسام</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        @php
                                            $categories = App\Models\Category::all();
                                        @endphp
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <select name="category_id"
                                                class="form-control form-control-solid   @error('category_id') is-invalid @enderror">
                                                <option disabled selected>--اختر قسم--</option>
                                                @foreach ($categories as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <!--end::Category-->
                                        </div>
                                    </div>
                                    <!--end:: Category-->

                                    <!--begin::name-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-2 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Set the store owner's name"></i>
                                                <span class="required">اسم المحل</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="name"
                                                value="{{ $setting2->name }}" />
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::name-->

                                    <!--begin::image-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-2 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Set keywords for the store separated by a comma."></i>
                                                <span>صورة البائع</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="file" class="form-control form-control-solid" name="image"
                                                data-kt-ecommerce-settings-type="tagify" />
                                            <img src="{{ asset('uploads/images/vendor/' . $setting2->image) }}"
                                                width="50" alt="">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::image-->

                                    <!--begin::description-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-2 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Set the store owner's description"></i>
                                                <span class="required">وصف المحل</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <textarea name="description" class="form-control  @error('description') is-invalid @enderror"
                                                id="exampleFormControlTextarea1" rows="8">{{ old('description', $setting2->description) }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::description-->


                                        <!--begin::meta_description-->
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-2 text-md-end">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold form-label mt-3">
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="Set the store owner's meta_description"></i>
                                                    <span class="required">وصف المحل</span>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <div class="col-md-9">
                                                <!--begin::Input-->
                                                <textarea name="meta_description" class="form-control  @error('meta_description') is-invalid @enderror"
                                                    id="exampleFormControlTextarea1" rows="8">{{ old('meta_description', $setting2->meta_description) }}</textarea>
                                                @error('meta_description')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <!--end::meta_description-->







                                    <!--begin::status-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-2 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Set the store owner's name"></i>
                                                <span class="required">حالة الحساب</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            @if ($setting2->status === 'pending')
                                                <input type="text" class="form-control form-control-solid" disabled
                                                    value="{{ $setting2->status }}" style="color:rgb(56, 56, 11)" />
                                            @elseif ($setting2->status === 'canceled')
                                                <input type="text" class="form-control form-control-solid" disabled
                                                    value="{{ $setting2->status }}" style="color: red" />
                                            @elseif($setting2->status === 'accepted')
                                                <input type="text" class="form-control form-control-solid" disabled
                                                    value="{{ $setting2->status }}" style="color: rgb(25, 82, 25)" />
                                            @endif
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::status-->

                                    <!--begin::identity_image-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-2 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Set keywords for the store separated by a comma."></i>
                                                <span>صورة الهوية</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="file" class="form-control form-control-solid"
                                                name="identity_image" data-kt-ecommerce-settings-type="tagify" />
                                            <img src="{{ asset('uploads/images/identity_image/' . $setting2->identity_image) }}"
                                                width="50" alt="">
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::identity_image-->


                                    <!--begin::Action buttons-->
                                    <div class="row">
                                        <div class="col-md-9 offset-md-3">
                                            <!--begin::Separator-->
                                            <div class="separator mb-6"></div>
                                            <!--end::Separator-->
                                            <div class="d-flex justify-content-end">
                                                <!--begin::Button-->
                                                <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">حفظ</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                    class="btn btn-light me-3">إلغاء</button>
                                                <!--end::Button-->

                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Action buttons-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Products-->
                    </div>
                    <!--end:::Social Media-->


                    <!--begin:::User-->
                    <div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">
                        <!--begin::Products-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Title-->
                                    <h2>إعدادات المستخدم</h2>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Form-->
                                <form id="kt_ecommerce_settings_general_localization" class="form" action="#">
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-2 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Country</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <div class="w-100">
                                                <!--begin::Select2-->
                                                <div class="form-floating border rounded">
                                                    <select id="kt_ecommerce_localization_country"
                                                        class="form-select form-select-solid" name="localization_country"
                                                        data-kt-ecommerce-settings-type="select2_flags"
                                                        data-placeholder="Select a country">
                                                        <option></option>
                                                        <option value="AF"
                                                            data-kt-select2-country="assets/media/flags/afghanistan.svg">
                                                            Afghanistan</option>
                                                        <option value="AX"
                                                            data-kt-select2-country="assets/media/flags/aland-islands.svg">
                                                            Aland Islands</option>
                                                        <option value="AL"
                                                            data-kt-select2-country="assets/media/flags/albania.svg">
                                                            Albania</option>
                                                        <option value="DZ"
                                                            data-kt-select2-country="assets/media/flags/algeria.svg">
                                                            Algeria</option>
                                                        <option value="AS"
                                                            data-kt-select2-country="assets/media/flags/american-samoa.svg">
                                                            American Samoa</option>
                                                        <option value="AD"
                                                            data-kt-select2-country="assets/media/flags/andorra.svg">
                                                            Andorra</option>
                                                        <option value="AO"
                                                            data-kt-select2-country="assets/media/flags/angola.svg">Angola
                                                        </option>
                                                        <option value="AI"
                                                            data-kt-select2-country="assets/media/flags/anguilla.svg">
                                                            Anguilla</option>
                                                        <option value="AG"
                                                            data-kt-select2-country="assets/media/flags/antigua-and-barbuda.svg">
                                                            Antigua and Barbuda</option>
                                                        <option value="AR"
                                                            data-kt-select2-country="assets/media/flags/argentina.svg">
                                                            Argentina</option>
                                                        <option value="AM"
                                                            data-kt-select2-country="assets/media/flags/armenia.svg">
                                                            Armenia</option>
                                                        <option value="AW"
                                                            data-kt-select2-country="assets/media/flags/aruba.svg">Aruba
                                                        </option>
                                                        <option value="AU"
                                                            data-kt-select2-country="assets/media/flags/australia.svg">
                                                            Australia</option>
                                                        <option value="AT"
                                                            data-kt-select2-country="assets/media/flags/austria.svg">
                                                            Austria</option>
                                                        <option value="AZ"
                                                            data-kt-select2-country="assets/media/flags/azerbaijan.svg">
                                                            Azerbaijan</option>
                                                        <option value="BS"
                                                            data-kt-select2-country="assets/media/flags/bahamas.svg">
                                                            Bahamas</option>
                                                        <option value="BH"
                                                            data-kt-select2-country="assets/media/flags/bahrain.svg">
                                                            Bahrain</option>
                                                        <option value="BD"
                                                            data-kt-select2-country="assets/media/flags/bangladesh.svg">
                                                            Bangladesh</option>
                                                        <option value="BB"
                                                            data-kt-select2-country="assets/media/flags/barbados.svg">
                                                            Barbados</option>
                                                        <option value="BY"
                                                            data-kt-select2-country="assets/media/flags/belarus.svg">
                                                            Belarus</option>
                                                        <option value="BE"
                                                            data-kt-select2-country="assets/media/flags/belgium.svg">
                                                            Belgium</option>
                                                        <option value="BZ"
                                                            data-kt-select2-country="assets/media/flags/belize.svg">Belize
                                                        </option>
                                                        <option value="BJ"
                                                            data-kt-select2-country="assets/media/flags/benin.svg">Benin
                                                        </option>
                                                        <option value="BM"
                                                            data-kt-select2-country="assets/media/flags/bermuda.svg">
                                                            Bermuda</option>
                                                        <option value="BT"
                                                            data-kt-select2-country="assets/media/flags/bhutan.svg">Bhutan
                                                        </option>
                                                        <option value="BO"
                                                            data-kt-select2-country="assets/media/flags/bolivia.svg">
                                                            Bolivia, Plurinational State of</option>
                                                        <option value="BQ"
                                                            data-kt-select2-country="assets/media/flags/bonaire.svg">
                                                            Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="BA"
                                                            data-kt-select2-country="assets/media/flags/bosnia-and-herzegovina.svg">
                                                            Bosnia and Herzegovina</option>
                                                        <option value="BW"
                                                            data-kt-select2-country="assets/media/flags/botswana.svg">
                                                            Botswana</option>
                                                        <option value="BR"
                                                            data-kt-select2-country="assets/media/flags/brazil.svg">Brazil
                                                        </option>
                                                        <option value="IO"
                                                            data-kt-select2-country="assets/media/flags/british-indian-ocean-territory.svg">
                                                            British Indian Ocean Territory</option>
                                                        <option value="BN"
                                                            data-kt-select2-country="assets/media/flags/brunei.svg">Brunei
                                                            Darussalam</option>
                                                        <option value="BG"
                                                            data-kt-select2-country="assets/media/flags/bulgaria.svg">
                                                            Bulgaria</option>
                                                        <option value="BF"
                                                            data-kt-select2-country="assets/media/flags/burkina-faso.svg">
                                                            Burkina Faso</option>
                                                        <option value="BI"
                                                            data-kt-select2-country="assets/media/flags/burundi.svg">
                                                            Burundi</option>
                                                        <option value="KH"
                                                            data-kt-select2-country="assets/media/flags/cambodia.svg">
                                                            Cambodia</option>
                                                        <option value="CM"
                                                            data-kt-select2-country="assets/media/flags/cameroon.svg">
                                                            Cameroon</option>
                                                        <option value="CA"
                                                            data-kt-select2-country="assets/media/flags/canada.svg">Canada
                                                        </option>
                                                        <option value="CV"
                                                            data-kt-select2-country="assets/media/flags/cape-verde.svg">
                                                            Cape Verde</option>
                                                        <option value="KY"
                                                            data-kt-select2-country="assets/media/flags/cayman-islands.svg">
                                                            Cayman Islands</option>
                                                        <option value="CF"
                                                            data-kt-select2-country="assets/media/flags/central-african-republic.svg">
                                                            Central African Republic</option>
                                                        <option value="TD"
                                                            data-kt-select2-country="assets/media/flags/chad.svg">Chad
                                                        </option>
                                                        <option value="CL"
                                                            data-kt-select2-country="assets/media/flags/chile.svg">Chile
                                                        </option>
                                                        <option value="CN"
                                                            data-kt-select2-country="assets/media/flags/china.svg">China
                                                        </option>
                                                        <option value="CX"
                                                            data-kt-select2-country="assets/media/flags/christmas-island.svg">
                                                            Christmas Island</option>
                                                        <option value="CC"
                                                            data-kt-select2-country="assets/media/flags/cocos-island.svg">
                                                            Cocos (Keeling) Islands</option>
                                                        <option value="CO"
                                                            data-kt-select2-country="assets/media/flags/colombia.svg">
                                                            Colombia</option>
                                                        <option value="KM"
                                                            data-kt-select2-country="assets/media/flags/comoros.svg">
                                                            Comoros</option>
                                                        <option value="CK"
                                                            data-kt-select2-country="assets/media/flags/cook-islands.svg">
                                                            Cook Islands</option>
                                                        <option value="CR"
                                                            data-kt-select2-country="assets/media/flags/costa-rica.svg">
                                                            Costa Rica</option>
                                                        <option value="CI"
                                                            data-kt-select2-country="assets/media/flags/ivory-coast.svg">
                                                            Côte d'Ivoire</option>
                                                        <option value="HR"
                                                            data-kt-select2-country="assets/media/flags/croatia.svg">
                                                            Croatia</option>
                                                        <option value="CU"
                                                            data-kt-select2-country="assets/media/flags/cuba.svg">Cuba
                                                        </option>
                                                        <option value="CW"
                                                            data-kt-select2-country="assets/media/flags/curacao.svg">
                                                            Curaçao</option>
                                                        <option value="CZ"
                                                            data-kt-select2-country="assets/media/flags/czech-republic.svg">
                                                            Czech Republic</option>
                                                        <option value="DK"
                                                            data-kt-select2-country="assets/media/flags/denmark.svg">
                                                            Denmark</option>
                                                        <option value="DJ"
                                                            data-kt-select2-country="assets/media/flags/djibouti.svg">
                                                            Djibouti</option>
                                                        <option value="DM"
                                                            data-kt-select2-country="assets/media/flags/dominica.svg">
                                                            Dominica</option>
                                                        <option value="DO"
                                                            data-kt-select2-country="assets/media/flags/dominican-republic.svg">
                                                            Dominican Republic</option>
                                                        <option value="EC"
                                                            data-kt-select2-country="assets/media/flags/ecuador.svg">
                                                            Ecuador</option>
                                                        <option value="EG"
                                                            data-kt-select2-country="assets/media/flags/egypt.svg">Egypt
                                                        </option>
                                                        <option value="SV"
                                                            data-kt-select2-country="assets/media/flags/el-salvador.svg">El
                                                            Salvador</option>
                                                        <option value="GQ"
                                                            data-kt-select2-country="assets/media/flags/equatorial-guinea.svg">
                                                            Equatorial Guinea</option>
                                                        <option value="ER"
                                                            data-kt-select2-country="assets/media/flags/eritrea.svg">
                                                            Eritrea</option>
                                                        <option value="EE"
                                                            data-kt-select2-country="assets/media/flags/estonia.svg">
                                                            Estonia</option>
                                                        <option value="ET"
                                                            data-kt-select2-country="assets/media/flags/ethiopia.svg">
                                                            Ethiopia</option>
                                                        <option value="FK"
                                                            data-kt-select2-country="assets/media/flags/falkland-islands.svg">
                                                            Falkland Islands (Malvinas)</option>
                                                        <option value="FJ"
                                                            data-kt-select2-country="assets/media/flags/fiji.svg">Fiji
                                                        </option>
                                                        <option value="FI"
                                                            data-kt-select2-country="assets/media/flags/finland.svg">
                                                            Finland</option>
                                                        <option value="FR"
                                                            data-kt-select2-country="assets/media/flags/france.svg">France
                                                        </option>
                                                        <option value="PF"
                                                            data-kt-select2-country="assets/media/flags/french-polynesia.svg">
                                                            French Polynesia</option>
                                                        <option value="GA"
                                                            data-kt-select2-country="assets/media/flags/gabon.svg">Gabon
                                                        </option>
                                                        <option value="GM"
                                                            data-kt-select2-country="assets/media/flags/gambia.svg">Gambia
                                                        </option>
                                                        <option value="GE"
                                                            data-kt-select2-country="assets/media/flags/georgia.svg">
                                                            Georgia</option>
                                                        <option value="DE"
                                                            data-kt-select2-country="assets/media/flags/germany.svg">
                                                            Germany</option>
                                                        <option value="GH"
                                                            data-kt-select2-country="assets/media/flags/ghana.svg">Ghana
                                                        </option>
                                                        <option value="GI"
                                                            data-kt-select2-country="assets/media/flags/gibraltar.svg">
                                                            Gibraltar</option>
                                                        <option value="GR"
                                                            data-kt-select2-country="assets/media/flags/greece.svg">Greece
                                                        </option>
                                                        <option value="GL"
                                                            data-kt-select2-country="assets/media/flags/greenland.svg">
                                                            Greenland</option>
                                                        <option value="GD"
                                                            data-kt-select2-country="assets/media/flags/grenada.svg">
                                                            Grenada</option>
                                                        <option value="GU"
                                                            data-kt-select2-country="assets/media/flags/guam.svg">Guam
                                                        </option>
                                                        <option value="GT"
                                                            data-kt-select2-country="assets/media/flags/guatemala.svg">
                                                            Guatemala</option>
                                                        <option value="GG"
                                                            data-kt-select2-country="assets/media/flags/guernsey.svg">
                                                            Guernsey</option>
                                                        <option value="GN"
                                                            data-kt-select2-country="assets/media/flags/guinea.svg">Guinea
                                                        </option>
                                                        <option value="GW"
                                                            data-kt-select2-country="assets/media/flags/guinea-bissau.svg">
                                                            Guinea-Bissau</option>
                                                        <option value="HT"
                                                            data-kt-select2-country="assets/media/flags/haiti.svg">Haiti
                                                        </option>
                                                        <option value="VA"
                                                            data-kt-select2-country="assets/media/flags/vatican-city.svg">
                                                            Holy See (Vatican City State)</option>
                                                        <option value="HN"
                                                            data-kt-select2-country="assets/media/flags/honduras.svg">
                                                            Honduras</option>
                                                        <option value="HK"
                                                            data-kt-select2-country="assets/media/flags/hong-kong.svg">Hong
                                                            Kong</option>
                                                        <option value="HU"
                                                            data-kt-select2-country="assets/media/flags/hungary.svg">
                                                            Hungary</option>
                                                        <option value="IS"
                                                            data-kt-select2-country="assets/media/flags/iceland.svg">
                                                            Iceland</option>
                                                        <option value="IN"
                                                            data-kt-select2-country="assets/media/flags/india.svg">India
                                                        </option>
                                                        <option value="ID"
                                                            data-kt-select2-country="assets/media/flags/indonesia.svg">
                                                            Indonesia</option>
                                                        <option value="IR"
                                                            data-kt-select2-country="assets/media/flags/iran.svg">Iran,
                                                            Islamic Republic of</option>
                                                        <option value="IQ"
                                                            data-kt-select2-country="assets/media/flags/iraq.svg">Iraq
                                                        </option>
                                                        <option value="IE"
                                                            data-kt-select2-country="assets/media/flags/ireland.svg">
                                                            Ireland</option>
                                                        <option value="IM"
                                                            data-kt-select2-country="assets/media/flags/isle-of-man.svg">
                                                            Isle of Man</option>
                                                        <option value="IL"
                                                            data-kt-select2-country="assets/media/flags/israel.svg">Israel
                                                        </option>
                                                        <option value="IT"
                                                            data-kt-select2-country="assets/media/flags/italy.svg">Italy
                                                        </option>
                                                        <option value="JM"
                                                            data-kt-select2-country="assets/media/flags/jamaica.svg">
                                                            Jamaica</option>
                                                        <option value="JP"
                                                            data-kt-select2-country="assets/media/flags/japan.svg">Japan
                                                        </option>
                                                        <option value="JE"
                                                            data-kt-select2-country="assets/media/flags/jersey.svg">Jersey
                                                        </option>
                                                        <option value="JO"
                                                            data-kt-select2-country="assets/media/flags/jordan.svg">Jordan
                                                        </option>
                                                        <option value="KZ"
                                                            data-kt-select2-country="assets/media/flags/kazakhstan.svg">
                                                            Kazakhstan</option>
                                                        <option value="KE"
                                                            data-kt-select2-country="assets/media/flags/kenya.svg">Kenya
                                                        </option>
                                                        <option value="KI"
                                                            data-kt-select2-country="assets/media/flags/kiribati.svg">
                                                            Kiribati</option>
                                                        <option value="KP"
                                                            data-kt-select2-country="assets/media/flags/north-korea.svg">
                                                            Korea, Democratic People's Republic of</option>
                                                        <option value="KW"
                                                            data-kt-select2-country="assets/media/flags/kuwait.svg">Kuwait
                                                        </option>
                                                        <option value="KG"
                                                            data-kt-select2-country="assets/media/flags/kyrgyzstan.svg">
                                                            Kyrgyzstan</option>
                                                        <option value="LA"
                                                            data-kt-select2-country="assets/media/flags/laos.svg">Lao
                                                            People's Democratic Republic</option>
                                                        <option value="LV"
                                                            data-kt-select2-country="assets/media/flags/latvia.svg">Latvia
                                                        </option>
                                                        <option value="LB"
                                                            data-kt-select2-country="assets/media/flags/lebanon.svg">
                                                            Lebanon</option>
                                                        <option value="LS"
                                                            data-kt-select2-country="assets/media/flags/lesotho.svg">
                                                            Lesotho</option>
                                                        <option value="LR"
                                                            data-kt-select2-country="assets/media/flags/liberia.svg">
                                                            Liberia</option>
                                                        <option value="LY"
                                                            data-kt-select2-country="assets/media/flags/libya.svg">Libya
                                                        </option>
                                                        <option value="LI"
                                                            data-kt-select2-country="assets/media/flags/liechtenstein.svg">
                                                            Liechtenstein</option>
                                                        <option value="LT"
                                                            data-kt-select2-country="assets/media/flags/lithuania.svg">
                                                            Lithuania</option>
                                                        <option value="LU"
                                                            data-kt-select2-country="assets/media/flags/luxembourg.svg">
                                                            Luxembourg</option>
                                                        <option value="MO"
                                                            data-kt-select2-country="assets/media/flags/macao.svg">Macao
                                                        </option>
                                                        <option value="MG"
                                                            data-kt-select2-country="assets/media/flags/madagascar.svg">
                                                            Madagascar</option>
                                                        <option value="MW"
                                                            data-kt-select2-country="assets/media/flags/malawi.svg">Malawi
                                                        </option>
                                                        <option value="MY"
                                                            data-kt-select2-country="assets/media/flags/malaysia.svg">
                                                            Malaysia</option>
                                                        <option value="MV"
                                                            data-kt-select2-country="assets/media/flags/maldives.svg">
                                                            Maldives</option>
                                                        <option value="ML"
                                                            data-kt-select2-country="assets/media/flags/mali.svg">Mali
                                                        </option>
                                                        <option value="MT"
                                                            data-kt-select2-country="assets/media/flags/malta.svg">Malta
                                                        </option>
                                                        <option value="MH"
                                                            data-kt-select2-country="assets/media/flags/marshall-island.svg">
                                                            Marshall Islands</option>
                                                        <option value="MQ"
                                                            data-kt-select2-country="assets/media/flags/martinique.svg">
                                                            Martinique</option>
                                                        <option value="MR"
                                                            data-kt-select2-country="assets/media/flags/mauritania.svg">
                                                            Mauritania</option>
                                                        <option value="MU"
                                                            data-kt-select2-country="assets/media/flags/mauritius.svg">
                                                            Mauritius</option>
                                                        <option value="MX"
                                                            data-kt-select2-country="assets/media/flags/mexico.svg">Mexico
                                                        </option>
                                                        <option value="FM"
                                                            data-kt-select2-country="assets/media/flags/micronesia.svg">
                                                            Micronesia, Federated States of</option>
                                                        <option value="MD"
                                                            data-kt-select2-country="assets/media/flags/moldova.svg">
                                                            Moldova, Republic of</option>
                                                        <option value="MC"
                                                            data-kt-select2-country="assets/media/flags/monaco.svg">Monaco
                                                        </option>
                                                        <option value="MN"
                                                            data-kt-select2-country="assets/media/flags/mongolia.svg">
                                                            Mongolia</option>
                                                        <option value="ME"
                                                            data-kt-select2-country="assets/media/flags/montenegro.svg">
                                                            Montenegro</option>
                                                        <option value="MS"
                                                            data-kt-select2-country="assets/media/flags/montserrat.svg">
                                                            Montserrat</option>
                                                        <option value="MA"
                                                            data-kt-select2-country="assets/media/flags/morocco.svg">
                                                            Morocco</option>
                                                        <option value="MZ"
                                                            data-kt-select2-country="assets/media/flags/mozambique.svg">
                                                            Mozambique</option>
                                                        <option value="MM"
                                                            data-kt-select2-country="assets/media/flags/myanmar.svg">
                                                            Myanmar</option>
                                                        <option value="NA"
                                                            data-kt-select2-country="assets/media/flags/namibia.svg">
                                                            Namibia</option>
                                                        <option value="NR"
                                                            data-kt-select2-country="assets/media/flags/nauru.svg">Nauru
                                                        </option>
                                                        <option value="NP"
                                                            data-kt-select2-country="assets/media/flags/nepal.svg">Nepal
                                                        </option>
                                                        <option value="NL"
                                                            data-kt-select2-country="assets/media/flags/netherlands.svg">
                                                            Netherlands</option>
                                                        <option value="NZ"
                                                            data-kt-select2-country="assets/media/flags/new-zealand.svg">
                                                            New Zealand</option>
                                                        <option value="NI"
                                                            data-kt-select2-country="assets/media/flags/nicaragua.svg">
                                                            Nicaragua</option>
                                                        <option value="NE"
                                                            data-kt-select2-country="assets/media/flags/niger.svg">Niger
                                                        </option>
                                                        <option value="NG"
                                                            data-kt-select2-country="assets/media/flags/nigeria.svg">
                                                            Nigeria</option>
                                                        <option value="NU"
                                                            data-kt-select2-country="assets/media/flags/niue.svg">Niue
                                                        </option>
                                                        <option value="NF"
                                                            data-kt-select2-country="assets/media/flags/norfolk-island.svg">
                                                            Norfolk Island</option>
                                                        <option value="MP"
                                                            data-kt-select2-country="assets/media/flags/northern-mariana-islands.svg">
                                                            Northern Mariana Islands</option>
                                                        <option value="NO"
                                                            data-kt-select2-country="assets/media/flags/norway.svg">Norway
                                                        </option>
                                                        <option value="OM"
                                                            data-kt-select2-country="assets/media/flags/oman.svg">Oman
                                                        </option>
                                                        <option value="PK"
                                                            data-kt-select2-country="assets/media/flags/pakistan.svg">
                                                            Pakistan</option>
                                                        <option value="PW"
                                                            data-kt-select2-country="assets/media/flags/palau.svg">Palau
                                                        </option>
                                                        <option value="PS"
                                                            data-kt-select2-country="assets/media/flags/palestine.svg">
                                                            Palestinian Territory, Occupied</option>
                                                        <option value="PA"
                                                            data-kt-select2-country="assets/media/flags/panama.svg">Panama
                                                        </option>
                                                        <option value="PG"
                                                            data-kt-select2-country="assets/media/flags/papua-new-guinea.svg">
                                                            Papua New Guinea</option>
                                                        <option value="PY"
                                                            data-kt-select2-country="assets/media/flags/paraguay.svg">
                                                            Paraguay</option>
                                                        <option value="PE"
                                                            data-kt-select2-country="assets/media/flags/peru.svg">Peru
                                                        </option>
                                                        <option value="PH"
                                                            data-kt-select2-country="assets/media/flags/philippines.svg">
                                                            Philippines</option>
                                                        <option value="PL"
                                                            data-kt-select2-country="assets/media/flags/poland.svg">Poland
                                                        </option>
                                                        <option value="PT"
                                                            data-kt-select2-country="assets/media/flags/portugal.svg">
                                                            Portugal</option>
                                                        <option value="PR"
                                                            data-kt-select2-country="assets/media/flags/puerto-rico.svg">
                                                            Puerto Rico</option>
                                                        <option value="QA"
                                                            data-kt-select2-country="assets/media/flags/qatar.svg">Qatar
                                                        </option>
                                                        <option value="RO"
                                                            data-kt-select2-country="assets/media/flags/romania.svg">
                                                            Romania</option>
                                                        <option value="RU"
                                                            data-kt-select2-country="assets/media/flags/russia.svg">Russian
                                                            Federation</option>
                                                        <option value="RW"
                                                            data-kt-select2-country="assets/media/flags/rwanda.svg">Rwanda
                                                        </option>
                                                        <option value="BL"
                                                            data-kt-select2-country="assets/media/flags/st-barts.svg">Saint
                                                            Barthélemy</option>
                                                        <option value="KN"
                                                            data-kt-select2-country="assets/media/flags/saint-kitts-and-nevis.svg">
                                                            Saint Kitts and Nevis</option>
                                                        <option value="LC"
                                                            data-kt-select2-country="assets/media/flags/st-lucia.svg">Saint
                                                            Lucia</option>
                                                        <option value="MF"
                                                            data-kt-select2-country="assets/media/flags/sint-maarten.svg">
                                                            Saint Martin (French part)</option>
                                                        <option value="VC"
                                                            data-kt-select2-country="assets/media/flags/st-vincent-and-the-grenadines.svg">
                                                            Saint Vincent and the Grenadines</option>
                                                        <option value="WS"
                                                            data-kt-select2-country="assets/media/flags/samoa.svg">Samoa
                                                        </option>
                                                        <option value="SM"
                                                            data-kt-select2-country="assets/media/flags/san-marino.svg">San
                                                            Marino</option>
                                                        <option value="ST"
                                                            data-kt-select2-country="assets/media/flags/sao-tome-and-prince.svg">
                                                            Sao Tome and Principe</option>
                                                        <option value="SA"
                                                            data-kt-select2-country="assets/media/flags/saudi-arabia.svg">
                                                            Saudi Arabia</option>
                                                        <option value="SN"
                                                            data-kt-select2-country="assets/media/flags/senegal.svg">
                                                            Senegal</option>
                                                        <option value="RS"
                                                            data-kt-select2-country="assets/media/flags/serbia.svg">Serbia
                                                        </option>
                                                        <option value="SC"
                                                            data-kt-select2-country="assets/media/flags/seychelles.svg">
                                                            Seychelles</option>
                                                        <option value="SL"
                                                            data-kt-select2-country="assets/media/flags/sierra-leone.svg">
                                                            Sierra Leone</option>
                                                        <option value="SG"
                                                            data-kt-select2-country="assets/media/flags/singapore.svg">
                                                            Singapore</option>
                                                        <option value="SX"
                                                            data-kt-select2-country="assets/media/flags/sint-maarten.svg">
                                                            Sint Maarten (Dutch part)</option>
                                                        <option value="SK"
                                                            data-kt-select2-country="assets/media/flags/slovakia.svg">
                                                            Slovakia</option>
                                                        <option value="SI"
                                                            data-kt-select2-country="assets/media/flags/slovenia.svg">
                                                            Slovenia</option>
                                                        <option value="SB"
                                                            data-kt-select2-country="assets/media/flags/solomon-islands.svg">
                                                            Solomon Islands</option>
                                                        <option value="SO"
                                                            data-kt-select2-country="assets/media/flags/somalia.svg">
                                                            Somalia</option>
                                                        <option value="ZA"
                                                            data-kt-select2-country="assets/media/flags/south-africa.svg">
                                                            South Africa</option>
                                                        <option value="KR"
                                                            data-kt-select2-country="assets/media/flags/south-korea.svg">
                                                            South Korea</option>
                                                        <option value="SS"
                                                            data-kt-select2-country="assets/media/flags/south-sudan.svg">
                                                            South Sudan</option>
                                                        <option value="ES"
                                                            data-kt-select2-country="assets/media/flags/spain.svg">Spain
                                                        </option>
                                                        <option value="LK"
                                                            data-kt-select2-country="assets/media/flags/sri-lanka.svg">Sri
                                                            Lanka</option>
                                                        <option value="SD"
                                                            data-kt-select2-country="assets/media/flags/sudan.svg">Sudan
                                                        </option>
                                                        <option value="SR"
                                                            data-kt-select2-country="assets/media/flags/suriname.svg">
                                                            Suriname</option>
                                                        <option value="SZ"
                                                            data-kt-select2-country="assets/media/flags/swaziland.svg">
                                                            Swaziland</option>
                                                        <option value="SE"
                                                            data-kt-select2-country="assets/media/flags/sweden.svg">Sweden
                                                        </option>
                                                        <option value="CH"
                                                            data-kt-select2-country="assets/media/flags/switzerland.svg">
                                                            Switzerland</option>
                                                        <option value="SY"
                                                            data-kt-select2-country="assets/media/flags/syria.svg">Syrian
                                                            Arab Republic</option>
                                                        <option value="TW"
                                                            data-kt-select2-country="assets/media/flags/taiwan.svg">Taiwan,
                                                            Province of China</option>
                                                        <option value="TJ"
                                                            data-kt-select2-country="assets/media/flags/tajikistan.svg">
                                                            Tajikistan</option>
                                                        <option value="TZ"
                                                            data-kt-select2-country="assets/media/flags/tanzania.svg">
                                                            Tanzania, United Republic of</option>
                                                        <option value="TH"
                                                            data-kt-select2-country="assets/media/flags/thailand.svg">
                                                            Thailand</option>
                                                        <option value="TG"
                                                            data-kt-select2-country="assets/media/flags/togo.svg">Togo
                                                        </option>
                                                        <option value="TK"
                                                            data-kt-select2-country="assets/media/flags/tokelau.svg">
                                                            Tokelau</option>
                                                        <option value="TO"
                                                            data-kt-select2-country="assets/media/flags/tonga.svg">Tonga
                                                        </option>
                                                        <option value="TT"
                                                            data-kt-select2-country="assets/media/flags/trinidad-and-tobago.svg">
                                                            Trinidad and Tobago</option>
                                                        <option value="TN"
                                                            data-kt-select2-country="assets/media/flags/tunisia.svg">
                                                            Tunisia</option>
                                                        <option value="TR"
                                                            data-kt-select2-country="assets/media/flags/turkey.svg">Turkey
                                                        </option>
                                                        <option value="TM"
                                                            data-kt-select2-country="assets/media/flags/turkmenistan.svg">
                                                            Turkmenistan</option>
                                                        <option value="TC"
                                                            data-kt-select2-country="assets/media/flags/turks-and-caicos.svg">
                                                            Turks and Caicos Islands</option>
                                                        <option value="TV"
                                                            data-kt-select2-country="assets/media/flags/tuvalu.svg">Tuvalu
                                                        </option>
                                                        <option value="UG"
                                                            data-kt-select2-country="assets/media/flags/uganda.svg">Uganda
                                                        </option>
                                                        <option value="UA"
                                                            data-kt-select2-country="assets/media/flags/ukraine.svg">
                                                            Ukraine</option>
                                                        <option value="AE"
                                                            data-kt-select2-country="assets/media/flags/united-arab-emirates.svg">
                                                            United Arab Emirates</option>
                                                        <option value="GB"
                                                            data-kt-select2-country="assets/media/flags/united-kingdom.svg">
                                                            United Kingdom</option>
                                                        <option value="US"
                                                            data-kt-select2-country="assets/media/flags/united-states.svg">
                                                            United States</option>
                                                        <option value="UY"
                                                            data-kt-select2-country="assets/media/flags/uruguay.svg">
                                                            Uruguay</option>
                                                        <option value="UZ"
                                                            data-kt-select2-country="assets/media/flags/uzbekistan.svg">
                                                            Uzbekistan</option>
                                                        <option value="VU"
                                                            data-kt-select2-country="assets/media/flags/vanuatu.svg">
                                                            Vanuatu</option>
                                                        <option value="VE"
                                                            data-kt-select2-country="assets/media/flags/venezuela.svg">
                                                            Venezuela, Bolivarian Republic of</option>
                                                        <option value="VN"
                                                            data-kt-select2-country="assets/media/flags/vietnam.svg">
                                                            Vietnam</option>
                                                        <option value="VI"
                                                            data-kt-select2-country="assets/media/flags/virgin-islands.svg">
                                                            Virgin Islands</option>
                                                        <option value="YE"
                                                            data-kt-select2-country="assets/media/flags/yemen.svg">Yemen
                                                        </option>
                                                        <option value="ZM"
                                                            data-kt-select2-country="assets/media/flags/zambia.svg">Zambia
                                                        </option>
                                                        <option value="ZW"
                                                            data-kt-select2-country="assets/media/flags/zimbabwe.svg">
                                                            Zimbabwe</option>
                                                    </select>
                                                    <label for="kt_ecommerce_localization_country">Select a country</label>
                                                </div>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-2 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Language</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <div class="w-100">
                                                <!--begin::Select2-->
                                                <select class="form-select form-select-solid" name="localization_language"
                                                    data-control="select2" data-placeholder="Select a language">
                                                    <option></option>
                                                    <option value="id">Bahasa Indonesia - Indonesian</option>
                                                    <option value="msa">Bahasa Melayu - Malay</option>
                                                    <option value="ca">Català - Catalan</option>
                                                    <option value="cs">Čeština - Czech</option>
                                                    <option value="da">Dansk - Danish</option>
                                                    <option value="de">Deutsch - German</option>
                                                    <option value="en">English</option>
                                                    <option value="en-gb">English UK - British English</option>
                                                    <option value="es">Español - Spanish</option>
                                                    <option value="fil">Filipino</option>
                                                    <option value="fr">Français - French</option>
                                                    <option value="ga">Gaeilge - Irish (beta)</option>
                                                    <option value="gl">Galego - Galician (beta)</option>
                                                    <option value="hr">Hrvatski - Croatian</option>
                                                    <option value="it">Italiano - Italian</option>
                                                    <option value="hu">Magyar - Hungarian</option>
                                                    <option value="nl">Nederlands - Dutch</option>
                                                    <option value="no">Norsk - Norwegian</option>
                                                    <option value="pl">Polski - Polish</option>
                                                    <option value="pt">Português - Portuguese</option>
                                                    <option value="ro">Română - Romanian</option>
                                                    <option value="sk">Slovenčina - Slovak</option>
                                                    <option value="fi">Suomi - Finnish</option>
                                                    <option value="sv">Svenska - Swedish</option>
                                                    <option value="vi">Tiếng Việt - Vietnamese</option>
                                                    <option value="tr">Türkçe - Turkish</option>
                                                    <option value="el">Ελληνικά - Greek</option>
                                                    <option value="bg">Български език - Bulgarian</option>
                                                    <option value="ru">Русский - Russian</option>
                                                    <option value="sr">Српски - Serbian</option>
                                                    <option value="uk">Українська мова - Ukrainian</option>
                                                    <option value="he">עִבְרִית - Hebrew</option>
                                                    <option value="ur">اردو - Urdu (beta)</option>
                                                    <option value="ar">العربية - Arabic</option>
                                                    <option value="fa">فارسی - Persian</option>
                                                    <option value="mr">मराठी - Marathi</option>
                                                    <option value="hi">हिन्दी - Hindi</option>
                                                    <option value="bn">বাংলা - Bangla</option>
                                                    <option value="gu">ગુજરાતી - Gujarati</option>
                                                    <option value="ta">தமிழ் - Tamil</option>
                                                    <option value="kn">ಕನ್ನಡ - Kannada</option>
                                                    <option value="th">ภาษาไทย - Thai</option>
                                                    <option value="ko">한국어 - Korean</option>
                                                    <option value="ja">日本語 - Japanese</option>
                                                    <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                                    <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-2 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Currency</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <div class="w-100">
                                                <!--begin::Select2-->
                                                <select class="form-select form-select-solid" name="localization_currency"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select a currency">
                                                    <option></option>
                                                    <option value="USD">US Dollar</option>
                                                    <option value="Euro">Euro</option>
                                                    <option value="Pound">Pound</option>
                                                    <option value="AUD">Australian Dollar</option>
                                                    <option value="JPY">Japanese Yen</option>
                                                    <option value="KRW">Korean Won</option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-2 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Length Class</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Set the unit measurement for length."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <div class="w-100">
                                                <!--begin::Select2-->
                                                <select class="form-select form-select-solid" name="localization_currency"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select a length class">
                                                    <option></option>
                                                    <option value="cm" selected="selected">Centimeter</option>
                                                    <option value="mm">Milimeter</option>
                                                    <option value="in">Inch</option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-2 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Weight Class</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Set the unit measurement for weight."></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <div class="w-100">
                                                <!--begin::Select2-->
                                                <select class="form-select form-select-solid" name="localization_currency"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Select a weight class">
                                                    <option></option>
                                                    <option value="kg" selected="selected">Kilogram</option>
                                                    <option value="g">Gram</option>
                                                    <option value="lb">Pound</option>
                                                    <option value="oz">Ounce</option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Action buttons-->
                                    <div class="row">
                                        <div class="col-md-9 offset-md-3">
                                            <!--begin::Separator-->
                                            <div class="separator mb-6"></div>
                                            <!--end::Separator-->
                                            <div class="d-flex justify-content-end">
                                                <!--begin::Button-->
                                                <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                    class="btn btn-light me-3">Cancel</button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">Save</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Action buttons-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Products-->
                    </div>
                    <!--end:::User-->

                </div>
                <!--end:::Tab content-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->

@stop
