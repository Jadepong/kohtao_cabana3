<!-- ////////////////////////////////////  START HELP CONTENT ///////////////////////////////////////-->



        <!--begin::Demos drawer-->
        <div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
            <div class="card shadow-none rounded-0 w-100">
                <div class="card-header" id="kt_engage_demos_header">
                    <h3 class="card-title fw-bold text-gray-700">Current order <span class="text-danger ms-5">TABLE:01</span></h3>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="card-body" id="kt_engage_demos_body">
                    <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body" data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">
                        <div class="mb-0">

                            
                            <div class="mb-0">
                                <h3 class="fw-bold text-start">XXXX-A</h3>
                                <div class="fs-4 fw-bold text-start text-info">#01 WHITESAND OCEANVIEW</div>
                                <div class="fs-4 fw-bold text-start text-success">01/11/2024</div>
                                <div class="row g-5 mt-5" id="show_pos_order"></div>
                            </div>

                            <div class="d-flex align-items-center gap-2 gap-lg-3">
                                <a href="#" class="btn btn-primary fw-bold mt-15 w-50">Send 
                                

                                </a>
                            </div>

                            


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Demos drawer-->


        <div class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 end-0 gap-2" style="margin-top:140px;">
            <button id="kt_engage_demos_toggle" class="engage-demos-toggle engage-btn btn btn-warning shadow-sm fs-6 px-4"  data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
                <span id="kt_engage_demos_label" class="text-dark">Current Order</span>
            </button>
        </div>

<!-- ////////////////////////////////////  END HELP CONTENT ///////////////////////////////////////-->