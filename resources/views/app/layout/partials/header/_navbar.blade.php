<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0 gap-2 gap-lg-4">
	<!--begin::My apps links-->
	<div class="app-navbar-item">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon border border-200 bg-gray-100 btn-color-gray-600 btn-active-color-primary w-40px h-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="ki-outline ki-element-11 fs-4"></i>        </div>
            @include('app.partials.menus._my-apps-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::My apps links-->
	<!--begin::Notifications-->
    <div class="app-navbar-item">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon border border-200 bg-gray-100 btn-color-gray-600 btn-active-color-primary w-40px h-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
            <i class="ki-outline ki-notification-status fs-4"></i>        </div>
            @include('app.partials.menus._notifications-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::Notifications-->
    <!--begin::User menu-->
    <div class="app-navbar-item" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-40px"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
            data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end">
            <img src="assets/media/avatars/300-2.jpg" class="rounded-3" alt="user"/>
        </div>
        @include('app.partials.menus._user-account-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
    </div>
<!--end::Navbar-->