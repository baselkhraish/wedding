<!--begin::Aside column-->
<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
    <!--begin::image-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>صورة القسم</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body text-center pt-0">
            <!--begin::Image input-->
            <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                    style="background-image: url({{ asset('uploads/images/category/'.$category->image) }})">
                <!--begin::Preview existing image-->
                <div class="image-input-wrapper w-150px h-150px"></div>
                <!--end::Preview existing image-->
                <!--begin::Label-->
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
                    <i class="bi bi-pencil-fill fs-7"></i>
                    <!--begin::Inputs-->
                    <input type="file" name="image" value="{{ $category->image }}" />
                    <input type="hidden"/>
                    <!--end::Inputs-->
                </label>
                <!--end::Label-->
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
            <!--begin::Description-->
            <div class="text-muted fs-7">{{ $add_photo ?? 'التعديل على هذه الصورة' }}</div>
            <!--end::Description-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::image-->


    <!--begin::Status-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>الحالة </h2>
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
            </div>
            <!--begin::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Select2-->
            <select name="status" class="form-control  @error('status') is-invalid @enderror">
                <option value="" selected disabled>--ادخل حالة القسم--</option>
                <option value="active" {{ $category->status == 'active' ? 'selected' : '' }}>فعًال</option>
                <option value="not_active" {{ $category->status == 'not_active' ? 'selected' : '' }}>موقوف</option>
            </select>
            @error('status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <!--end::Select2-->
            <!--begin::Description-->
            <div class="text-muted fs-7 mt-2"><span class="text-danger">ملاحظة</span> عند توقيف القسم سيتم الغاء تنشيط كل التجار و المنتجات المتعلقة في هذا القسم</div>
            <!--end::Description-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Status-->

</div>


<!--begin::Main column-->
<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    <!--begin::General options-->
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <div class="card-title">
                <h2>الأقسام</h2>
            </div>
        </div>
        <!--end::Card header-->


        <!--begin::title-->
        <div class="card-body pt-0 pb-0">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
                <!--begin::Label-->
                <label class="required form-label">اسم القسم</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="name" class="form-control mb-2  @error('name') is-invalid @enderror"
                    value="{{ old('name', $category->name) }}" />
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
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
                    <label class="form-label" for="exampleFormControlTextarea1">وصف القسم</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <div class="form-group">
                        <textarea name="description" class="form-control  @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="8">{{ old('description', $category->description) }}</textarea>
                        @error('description')
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

        <!--begin::Meta description-->
        <div class="card-body pt-0 pb-0">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
                <!--begin::Input group-->
                <div>
                    <!--begin::Label-->
                    <label class="form-label" for="exampleFormControlTextarea1">وصف القسم للبحث</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <div class="form-group">
                        <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Meta description">{{ old('meta_description', $category->meta_description) }}</textarea>
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

    </div>
    <!--end::General options-->

    <div class="d-flex justify-content-start">
        <!--begin::Button-->
        <a href="{{ route('admin.category.index') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">إلغاء</a>
        <!--end::Button-->
        <!--begin::Button-->
        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
            <span class="indicator-label">{{ $button_lable ?? 'حفظ' }}</span>
        </button>
        <!--end::Button-->
    </div>
</div>
<!--end::Main column-->
