<!--begin::Aside column-->
<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">

    <!--begin::image shop-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>صورة المحل</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body text-center pt-0">
            <!--begin::Image input-->
            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                style="background-image: url({{ asset('uploads/images/vendor/' . $vendor->image) }})">
                <!--begin::Preview existing image-->
                <div class="image-input-wrapper w-250px h-250px"></div>
                <!--end::Preview existing image-->
                <!--begin::Cancel-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel image">
                    <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Cancel-->
                <!--begin::Remove-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove image">
                    <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Remove-->
            </div>
            <!--end::Image input-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::image shop-->


    <!--begin::image shop-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>صورة الهوية</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body text-center pt-0">
            <!--begin::Image input-->
            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                style="background-image: url({{ asset('uploads/images/identity/' . $vendor->identity_image) }})">
                <!--begin::Preview existing image-->
                <div class="image-input-wrapper w-250px h-250px"></div>
                <!--end::Preview existing image-->
                <!--begin::Cancel-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel image">
                    <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Cancel-->
                <!--begin::Remove-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove image">
                    <i class="bi bi-x fs-2"></i>
                </span>
                <!--end::Remove-->
            </div>
            <!--end::Image input-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::image shop-->



</div>


<!--begin::Main column-->
<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    <!--begin::General options-->
    <div class="card card-flush py-4">


        <!--begin::name-->
        <div class="card-body pt-3 pb-0">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
                <!--begin::Label-->
                <label class="required form-label">اسم المحل</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="name" disabled class="form-control mb-2"
                    value="{{ old('name', $vendor->name) }}" />
                <!--end::Input-->

            </div>
            <!--end::Input group-->

        </div>

        <!--begin::description-->
        <div class="card-body pt-0 pb-0">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
                <!--begin::Input group-->
                <div>
                    <!--begin::Label-->
                    <label class="form-label" for="exampleFormControlTextarea1">وصف البائع</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <div class="form-group">
                        <textarea name="description" class="form-control" disabled>{{ old('description', $vendor->description) }}</textarea>
                    </div>
                    <!--end::Editor-->
                </div>
                <!--end::Input-->
            </div>
            <!--end::Input group-->
        </div>

        <!--begin::Meta description-->
        <div class="card-body pt-0 pb-0">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
                <!--begin::Input group-->
                <div>
                    <!--begin::Label-->
                    <label class="form-label" for="exampleFormControlTextarea1">وصف البائع للبحث</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <div class="form-group">
                        <textarea name="meta_description" class="form-control" disabled id="exampleFormControlTextarea1" rows="3"
                            placeholder="Meta description">{{ old('meta_description', $vendor->meta_description) }}</textarea>
                        @error('meta_description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!--end::Editor-->
                </div>


                <!--end::Input-->
            </div>
            <!--end::Input group-->
        </div>


        <!--begin::status seller-->
        <div class="card-body pt-0 pb-0">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
                <!--begin::Input group-->
                <div>
                    <!--begin::Label-->
                    <label class="form-label" for="exampleFormControlTextarea1">حالة البائع</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <div class="form-group">
                        <select name="status_seller" class="form-control form-control-solid">
                            <option value="admin" {{ $vendor->user->status == 'admin' ? 'selected' : '' }}>أدمن
                            </option>
                            <option value="vendor" {{ $vendor->user->status == 'vendor' ? 'selected' : '' }}>بائع
                            </option>
                            <option value="user" {{ $vendor->user->status == 'user' ? 'selected' : '' }}>مستخدم
                            </option>
                            <option value="not_active" {{ $vendor->user->status == 'not_active' ? 'selected' : '' }}>
                                بلوك</option>
                        </select>

                    </div>
                    <!--end::Editor-->
                </div>


                <!--end::Input-->
            </div>
            <!--end::Input group-->
        </div>

        <!--begin::status shop-->
        <div class="card-body pt-0 pb-0">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
                <!--begin::Input group-->
                <div>
                    <!--begin::Label-->
                    <label class="form-label" for="exampleFormControlTextarea1">حالة المحل</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <div class="form-group">
                        <select name="status_shop" class="form-control form-control-solid">
                            <option value="accepted" {{ $vendor->status == 'accepted' ? 'selected' : '' }}>مقبول
                            </option>
                            <option value="pending" {{ $vendor->status == 'pending' ? 'selected' : '' }}>قيد الانتظار
                            </option>
                            <option value="canceled" {{ $vendor->status == 'canceled' ? 'selected' : '' }}>متوقف
                            </option>
                        </select>
                    </div>
                    <!--end::Editor-->
                </div>


                <!--end::Input-->
            </div>
            <!--end::Input group-->
        </div>


        <!--begin::note-->
        <div class="card-body pt-0 pb-0">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
                <!--begin::Input group-->
                <div>
                    <!--begin::Label-->
                    <label class="form-label" for="exampleFormControlTextarea1">ملاحظة</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <div class="form-group">
                        <textarea name="note" class="form-control" placeholder="ادخل ملاحظتك"></textarea>
                    </div>
                    <!--end::Editor-->
                </div>
                <!--end::Input-->
            </div>
            <!--end::Input group-->
        </div>


        <div class="d-flex justify-content-start">
            <!--begin::Button-->
            <a href="{{ route('admin.vendor.index') }}" id="kt_ecommerce_add_product_cancel"
                class="btn btn-light me-5">إلغاء</a>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" id="kt_ecommerce_add_vendor_submit" class="btn btn-primary">
                <span class="indicator-label">{{ $button_lable ?? 'حفظ' }}</span>
            </button>
            <!--end::Button-->
        </div>
    </div>
    <!--end::General options-->

</div>
<!--end::Main column-->
