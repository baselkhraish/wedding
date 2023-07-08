<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
    <!--begin::Navbar-->
    <div class="d-flex align-items-stretch" id="kt_header_nav">
        <!--begin::Menu wrapper-->
        <div class="header-menu align-items-stretch" data-kt-drawer="true"
            data-kt-drawer-name="header-menu"
            data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
            data-kt-drawer-width="{default:'200px', '300px': '250px'}"
            data-kt-drawer-direction="end"
            data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
            data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
            <!--begin::Menu-->
            <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch">

                {{-- <div class="menu-item here show menu-lg-down-accordion me-lg-1">
                    <span class="menu-link py-3">
                        <a class="menu-title" href="{{ route('admin.order') }}">الطلبات</a>
                    </span>
                </div> --}}


            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Navbar-->
    <!--begin::Toolbar wrapper-->
    <div class="d-flex align-items-stretch flex-shrink-0">
        <!--begin::Search-->
        <div class="d-flex align-items-stretch ms-1 ms-lg-3">
            <!--begin::Search-->
            <div id="kt_header_search" class="header-search d-flex align-items-stretch"
                data-kt-search-keypress="true" data-kt-search-min-length="2"
                data-kt-search-enter="enter" data-kt-search-layout="menu"
                data-kt-menu-trigger="auto" data-kt-menu-overflow="false"
                data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                <!--begin::Search toggle-->
                <div class="d-flex align-items-center" data-kt-search-element="toggle"
                    id="kt_header_search_toggle">
                    <div
                        class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg') }}-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223"
                                    width="8.15546" height="2" rx="1"
                                    transform="rotate(45 17.0365 15.1223)"
                                    fill="currentColor" />
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                </div>
                <!--end::Search toggle-->
                <!--begin::Menu-->
                <div data-kt-search-element="content"
                    class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                    <!--begin::Wrapper-->
                    <div data-kt-search-element="wrapper">
                        <!--begin::Form-->
                        <form data-kt-search-element="form"
                            class="w-100 position-relative mb-3" autocomplete="off">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg') }}-->
                            <span
                                class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223"
                                        width="8.15546" height="2" rx="1"
                                        transform="rotate(45 17.0365 15.1223)"
                                        fill="currentColor" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Input-->
                            <input type="text"
                                class="search-input form-control form-control-flush ps-10"
                                name="search" value="" placeholder="Search..."
                                data-kt-search-element="input" />
                            <!--end::Input-->


                            <!--begin::Toolbar-->
                            <div class="position-absolute top-50 end-0 translate-middle-y"
                                data-kt-search-element="toolbar">


                            </div>
                            <!--end::Toolbar-->
                        </form>
                        <!--end::Form-->
                        <!--begin::Separator-->
                        <div class="separator border-gray-200 mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Recently viewed-->
                        <div data-kt-search-element="results" class="d-none">
                            <!--begin::Items-->
                            <div class="scroll-y mh-200px mh-lg-350px">
                                <!--begin::Category title-->
                                <h3 class="fs-5 text-muted m-0 pb-5"
                                    data-kt-search-element="category-title">
                                    Users
                                </h3>
                                <!--end::Category title-->
                                <!--begin::Item-->
                                <a href="#"
                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <img src="{{ asset('adminasset/assets/media/avatars/300-6.jpg') }}"
                                            alt="" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div
                                        class="d-flex flex-column justify-content-start fw-bold">
                                        <span class="fs-6 fw-bold">Karina Clark</span>
                                        <span class="fs-7 fw-bold text-muted">Marketing
                                            Manager</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#"
                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <img src="{{ asset('adminasset/assets/media/avatars/300-2.jpg') }}"
                                            alt="" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div
                                        class="d-flex flex-column justify-content-start fw-bold">
                                        <span class="fs-6 fw-bold">Olivia Bold</span>
                                        <span class="fs-7 fw-bold text-muted">Software
                                            Engineer</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#"
                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <img src="{{ asset('adminasset/assets/media/avatars/300-9.jpg') }}"
                                            alt="" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div
                                        class="d-flex flex-column justify-content-start fw-bold">
                                        <span class="fs-6 fw-bold">Ana Clark</span>
                                        <span class="fs-7 fw-bold text-muted">UI/UX
                                            Designer</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#"
                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <img src="{{ asset('adminasset/assets/media/avatars/300-14.jpg') }}"
                                            alt="" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div
                                        class="d-flex flex-column justify-content-start fw-bold">
                                        <span class="fs-6 fw-bold">Nick Pitola</span>
                                        <span class="fs-7 fw-bold text-muted">Art
                                            Director</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#"
                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <img src="{{ asset('adminasset/assets/media/avatars/300-11.jpg') }}"
                                            alt="" />
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div
                                        class="d-flex flex-column justify-content-start fw-bold">
                                        <span class="fs-6 fw-bold">Edward Kulnic</span>
                                        <span class="fs-7 fw-bold text-muted">System
                                            Administrator</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Category title-->
                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                    data-kt-search-element="category-title">
                                    Customers
                                </h3>
                                <!--end::Category title-->
                                <!--begin::Item-->
                                <a href="#"
                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-light">
                                            <img class="w-20px h-20px"
                                                src="{{ asset('adminasset/assets/media/svg/brand-logos/volicity-9.svg') }}"
                                                alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div
                                        class="d-flex flex-column justify-content-start fw-bold">
                                        <span class="fs-6 fw-bold">Company Rbranding</span>
                                        <span class="fs-7 fw-bold text-muted">UI Design</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#"
                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-light">
                                            <img class="w-20px h-20px"
                                                src="{{ asset('adminasset/assets/media/svg/brand-logos/tvit.svg') }}"
                                                alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div
                                        class="d-flex flex-column justify-content-start fw-bold">
                                        <span class="fs-6 fw-bold">Company Re-branding</span>
                                        <span class="fs-7 fw-bold text-muted">Web
                                            Development</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#"
                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-light">
                                            <img class="w-20px h-20px"
                                                src="{{ asset('adminasset/assets/media/svg/misc/infography.svg') }}"
                                                alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div
                                        class="d-flex flex-column justify-content-start fw-bold">
                                        <span class="fs-6 fw-bold">Business Analytics
                                            App</span>
                                        <span
                                            class="fs-7 fw-bold text-muted">Administration</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#"
                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-light">
                                            <img class="w-20px h-20px"
                                                src="{{ asset('adminasset/assets/media/svg/brand-logos/leaf.svg') }}"
                                                alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div
                                        class="d-flex flex-column justify-content-start fw-bold">
                                        <span class="fs-6 fw-bold">EcoLeaf App Launch</span>
                                        <span class="fs-7 fw-bold text-muted">Marketing</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#"
                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-light">
                                            <img class="w-20px h-20px"
                                                src="{{ asset('adminasset/assets/media/svg/brand-logos/tower.svg') }}"
                                                alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div
                                        class="d-flex flex-column justify-content-start fw-bold">
                                        <span class="fs-6 fw-bold">Tower Group Website</span>
                                        <span class="fs-7 fw-bold text-muted">Google
                                            Adwords</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Category title-->
                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                    data-kt-search-element="category-title">
                                    Projects
                                </h3>
                                <!--end::Category title-->
                                <!--begin::Item-->
                                <a href="#"
                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-light">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg') }}-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                                                        fill="currentColor" />
                                                    <rect x="7" y="17"
                                                        width="6" height="2"
                                                        rx="1" fill="currentColor" />
                                                    <rect x="7" y="12"
                                                        width="10" height="2"
                                                        rx="1" fill="currentColor" />
                                                    <rect x="7" y="7"
                                                        width="6" height="2"
                                                        rx="1" fill="currentColor" />
                                                    <path
                                                        d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <span class="fs-6 fw-bold">Si-Fi Project by AU
                                            Themes</span>
                                        <span class="fs-7 fw-bold text-muted">#45670</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#"
                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-light">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg') }}-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9"
                                                        width="3" height="10"
                                                        rx="1.5" fill="currentColor" />
                                                    <rect opacity="0.5" x="13"
                                                        y="5" width="3"
                                                        height="14" rx="1.5"
                                                        fill="currentColor" />
                                                    <rect x="18" y="11"
                                                        width="3" height="8"
                                                        rx="1.5" fill="currentColor" />
                                                    <rect x="3" y="13"
                                                        width="3" height="6"
                                                        rx="1.5" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <span class="fs-6 fw-bold">Shopix Mobile App
                                            Planning</span>
                                        <span class="fs-7 fw-bold text-muted">#45690</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#"
                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-light">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg') }}-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                        fill="currentColor" />
                                                    <rect x="6" y="12"
                                                        width="7" height="2"
                                                        rx="1" fill="currentColor" />
                                                    <rect x="6" y="7"
                                                        width="12" height="2"
                                                        rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <span class="fs-6 fw-bold">Finance Monitoring SAAS
                                            Discussion</span>
                                        <span class="fs-7 fw-bold text-muted">#21090</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <a href="#"
                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                                        <span class="symbol-label bg-light">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg') }}-->
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <span class="fs-6 fw-bold">Dashboard Analitics
                                            Launch</span>
                                        <span class="fs-7 fw-bold text-muted">#34560</span>
                                    </div>
                                    <!--end::Title-->
                                </a>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Recently viewed-->

                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Preferences-->
                    <form data-kt-search-element="preferences" class="pt-1 d-none">
                        <!--begin::Heading-->
                        <h3 class="fw-bold text-dark mb-7">
                            Search Preferences
                        </h3>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="pb-4 border-bottom">
                            <label
                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                <span
                                    class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Projects</span>
                                <input class="form-check-input" type="checkbox"
                                    value="1" checked="checked" />
                            </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                            <label
                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                <span
                                    class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Targets</span>
                                <input class="form-check-input" type="checkbox"
                                    value="1" checked="checked" />
                            </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                            <label
                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                <span
                                    class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Affiliate
                                    Programs</span>
                                <input class="form-check-input" type="checkbox"
                                    value="1" />
                            </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                            <label
                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                <span
                                    class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Referrals</span>
                                <input class="form-check-input" type="checkbox"
                                    value="1" checked="checked" />
                            </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                            <label
                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                <span
                                    class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Users</span>
                                <input class="form-check-input" type="checkbox"
                                    value="1" />
                            </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end pt-7">
                            <button type="reset"
                                class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2"
                                data-kt-search-element="preferences-dismiss">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-sm fw-bolder btn-primary">
                                Save Changes
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Preferences-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Search-->
        </div>
        <!--end::Search-->
        @php
            $user_id = Auth::id();
            $user_image = App\Models\UserDetails::where('user_id',$user_id)->first();
        @endphp
        {{-- @dump($user_image->id) --}}
        <!--begin::User menu-->
        <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
            <!--begin::Menu wrapper-->

            @if(Auth::user()->status == 'vendor')
                <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                    data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <img src="{{ asset('uploads/images/setting/'.$user_image->image) }}"
                        alt="{{ Auth::user()->name }}" />
                </div>
            @else
                <div class="cursor-pointer symbol symbol-30px   symbol-md-40px"
                    data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}"
                        alt="{{ Auth::user()->name }}" />
                </div>
            @endif
            <!--begin::User account menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                        <!--begin::Avatar-->

                        @if(Auth::user()->status == 'vendor')
                            <div class="symbol symbol-50px me-5">
                                <img alt="Logo"
                                    src="{{ asset('uploads/images/setting/'.$user_image->image) }}" />
                            </div>
                        @else
                        <div class="symbol symbol-50px me-5">
                            <img alt="Logo"
                                src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" />
                        </div>
                        @endif

                        <!--end::Avatar-->
                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                            <div class="fw-bolder d-flex align-items-center fs-5">
                                {{ Auth::user()->name }}
                            </div>
                            <a href="#"
                                class="fw-bold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                        </div>
                        <!--end::Username-->
                    </div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->

                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="{{ route('home') }}" class="menu-link px-5"
                        target="_blank">الموقع العام</a>
                </div>

                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="{{ route('admin.setting.edit',Auth::user()->id) }}" class="menu-link px-5"
                    >الإعدادات</a>
                </div>

                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->

                <!--begin::Menu item-->
                {{-- <div class="menu-item px-5 my-1">
                    <a href="{{ route('setting.edit',Auth::user()->id) }}" class="menu-link px-5">الإعدادات</a>
                </div> --}}
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="menu-item px-5">
                        <a href="route('logout')"
                            onclick="event.preventDefault();
                        this.closest('form').submit();"
                            class="menu-link px-5">تسجيل الخروج</a>
                    </div>
                </form>
                <!--end::Menu item-->

            </div>
            <!--end::User account menu-->
            <!--end::Menu wrapper-->
        </div>
        <!--end::User menu-->
        <!--begin::Header menu toggle-->
        <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                id="kt_header_menu_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg') }}-->
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none">
                        <path
                            d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
                            fill="currentColor" />
                        <path opacity="0.3"
                            d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
        </div>
        <!--end::Header menu toggle-->
    </div>
    <!--end::Toolbar wrapper-->
</div>
