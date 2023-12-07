<!--begin::Tables Widget 11-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Next Appoitments</span>
            <span class="text-muted mt-1 fw-semibold fs-7">Wait for the best patients with the best smile.</span>
        </h3>
        <div class="card-toolbar">
            <a href="#" class="btn btn-sm btn-light-primary">
            <i class="ki-outline ki-plus fs-2"></i>Order services</a>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bold text-muted bg-light">
                        <th class="ps-4 min-w-225px rounded-start">Doctor</th>
                        <th class="min-w-200px">Patient</th>
                        <th class="min-w-150px">Date</th>
                        <th class="pe-4 min-w-125px text-end rounded-end">Actions</th>
                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    @foreach($appointments as $appointment)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
                                    <img src="assets/media/stock/600x400/img-26.jpg" class="" alt="" />
                                </div>
                                <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">{{ $appointment->doctor->user->name }}</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">{{ $appointment->patient->user->name }}</a>
                            <span class="text-muted fw-semibold text-muted d-block fs-7">8vCores, 16 Ram</span>
                        </td>
                        <td>
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">520.00 €</a>
                            <span class="text-muted fw-semibold d-block fs-7">Monthly</span>
                        </td>
                        <!--<td>
                            <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">23/04/2024</a>
                            <span class="text-success fw-semibold d-block fs-7">25 day</span>
                        </td>
                        <td>
                            <span class="badge badge-light-primary fs-7 fw-bold">Approved</span>
                        </td>-->
                        <td class="text-end">
                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                <i class="ki-outline ki-switch fs-2"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                <i class="ki-outline ki-trash fs-2"></i>
                            </a>
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
<!--end::Tables Widget 11-->