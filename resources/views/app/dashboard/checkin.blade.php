<!--begin::Modal - Offer A Deal-->
<div class="modal fade" id="kt_modal_checkin" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header py-7 d-flex justify-content-between">
                <!--begin::Modal title-->
                <h2>Pacient Check-in</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y m-5">
                <!--begin::Stepper-->
                <div class="stepper stepper-links d-flex flex-column" id="kt_modal_checkin_stepper">
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="row">
                            <!--begin::Select-->
                            <div class="col-md-6 mb-8">
							    <label class="fs-6 fw-semibold mb-2 required">Patient</label>
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <!--begin::Input-->
                                    <select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a patient..." class="form-select form-select-solid form-select-lg">
                                        <option value="">Select a Patient...</option>
                                        <option data-kt-flag="flags/indonesia.svg" value="id">Emma</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Select-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Stepper-->
                <!--begin::Card body-->
                <div class="card-body pt-3">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_roles_view_table">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_roles_view_table .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-50px">Date Appointment</th>
                                <th class="min-w-150px">Doctor</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td>20/01/2024</td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                                        <span>smith@kpmg.com</span>
                                    </div>
                                    <!--begin::User details-->
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td>29/01/2024</td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">John Miller</a>
                                        <span>miller@mapple.com</span>
                                    </div>
                                    <!--begin::User details-->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--begin::Modal footer-->
            <div class="modal-footer flex-center">
				<!--begin::Button-->
			    <button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">Cancel</button>
				    <!--end::Button-->
					<!--begin::Button-->
					<button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
						<span class="indicator-label">Check-in</span>
						<span class="indicator-progress">Please wait... 
						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					</button>
					<!--end::Button-->
			</div>
			<!--end::Modal footer-->
        </div>
    </div>
</div>
<!--end::Modal - Offer A Deal-->