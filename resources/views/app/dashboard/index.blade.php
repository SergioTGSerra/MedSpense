@extends('app.layout.index')

@section('title', 'Dashboard')

@section('content')
<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid " >
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-fluid ">
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
			@include('app.dashboard.cards')
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5 g-xl-10 g-xl-10">
			@include('app.dashboard.appointments')
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5 g-xl-10">
            <!--begin::Col-->
            <div class="col-xxl-6 mb-xxl-10">
				@include('app.dashboard.calendar')
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xxl-6 mb-5 mb-xl-10">
				@include('app.dashboard.unpaid_invoices')
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection

@section('styles')
	<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
	<!--begin::Vendors Javascript(used for this page only)-->
	<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used for this page only)-->
	<script src="assets/js/widgets.bundle.js"></script>
	<script src="assets/js/custom/widgets.js"></script>
	<script src="assets/js/custom/apps/chat/chat.js"></script>
	<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/type.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/budget.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/settings.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/team.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/targets.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/files.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/complete.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/main.js"></script>
	<script src="assets/js/custom/utilities/modals/create-app.js"></script>
	<script src="assets/js/custom/utilities/modals/users-search.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
	<script src="assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
	<!--end::Custom Javascript-->
@endsection