<!--begin::Header-->
<div id="kt_app_header" class="app-header  d-flex ">
	<!--begin::Header container-->
	<div class="app-container  container-fluid d-flex align-items-center justify-content-between " id="kt_app_header_container">
		@include('app.layout.header._logo')
		<div class="d-flex flex-lg-grow-1 flex-stack" id="kt_app_header_wrapper">
			<div
				class="app-header-wrapper d-flex align-items-center justify-content-around justify-content-lg-between flex-wrap gap-6 gap-lg-0 mb-6 mb-lg-0"
				data-kt-swapper="true"
				data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
				data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}"
			>
				@include('app.layout.header._page-title')
				@include('app.layout.header._targets')
			</div>
			@include('app.layout.header._navbar')
		</div>
	</div>
	<!--end::Header container-->
</div>
<!--end::Header-->