<!--begin::Modal - Offer A Deal-->
<div class="modal fade" id="kt_modal_offer_a_deal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header py-7 d-flex justify-content-between">
                <!--begin::Modal title-->
                <h2>Schedule Appoitment</h2>
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
                <div class="stepper stepper-links d-flex flex-column" id="kt_modal_offer_a_deal_stepper">
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="row">
                            <!--begin::Select-->
                            <div class="col-md-6 mb-2">
							    <label class="fs-6 fw-semibold mb-2 required">Doctor</label>
                                <select class="form-select" data-control="select2" data-placeholder="Select the doctor" data-allow-clear="true" multiple="multiple">
                                    <option value="Computers">Computers</option>
                                </select>
                            </div>
                            <!--end::Select-->
                            <!--begin::Select2-->
                            <div class="col-md-6 mb-2">
							    <label class="fs-6 fw-semibold mb-2 required">Pacient</label>
                                <select class="form-select mb-6" data-control="select2" data-placeholder="Select the Pacient" data-allow-clear="true" multiple="multiple">
                                    <option value="Computers">Computers</option>
                                </select>
                            </div>
                            <!--end::Select2-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Stepper-->
                <div class="row row-cols-lg-2 g-10">
					<div class="col">
						<div class="fv-row mb-9">
							<!--begin::Label-->
							<label class="fs-6 fw-semibold mb-2 required">Date</label>
							    <!--end::Label-->
								<!--begin::Input-->
								<input class="form-control form-control-solid" name="calendar_event_start_date" placeholder="Pick a date" id="kt_calendar_datepicker_start_date" />
								<!--end::Input-->
						</div>
					</div>
				    <div class="col" data-kt-calendar="datepicker">
						<div class="fv-row mb-9">
						    <!--begin::Label-->
							<label class="fs-6 fw-semibold mb-2 required">Hour</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input class="form-control form-control-solid" name="calendar_event_start_time" placeholder="Pick a Hour" id="kt_calendar_datepicker_start_time" />
							<!--end::Input-->
						</div>
					</div>
				</div>
            </div>
            <!--begin::Modal footer-->
            <div class="modal-footer flex-center">
				<!--begin::Button-->
			    <button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">Cancel</button>
				    <!--end::Button-->
					<!--begin::Button-->
					<button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
						<span class="indicator-label">Schedule Appoitment</span>
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