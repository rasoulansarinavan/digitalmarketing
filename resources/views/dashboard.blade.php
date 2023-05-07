<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="content-wrapper-scroll">

        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <!-- Card start -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Form Layout</div>
                        </div>
                        <div class="card-body">

                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text">
                                        <div class="field-placeholder">Name <span class="text-danger">*</span></div>
                                        <div class="form-text">
                                            Please enter your full name.
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="email">
                                        <div class="field-placeholder">Email <span class="text-danger">*</span></div>
                                        <div class="form-text">
                                            We'll never share your email with anyone.
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text">
                                        <div class="field-placeholder">Phone</div>
                                        <div class="form-text">
                                            Please enter your mobile number.
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text">
                                        <div class="field-placeholder">Business Address</div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text">
                                        <div class="field-placeholder">Province/Territory</div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text">
                                        <div class="field-placeholder">Postal Code</div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text">
                                        <div class="field-placeholder">Company Name</div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text">
                                        <div class="field-placeholder">Industry Type</div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <textarea class="form-control" rows="2"></textarea>
                                        <div class="field-placeholder">Message <span class="text-danger">*</span></div>
                                        <div class="form-text">
                                            Please enter a small description.
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            <!-- Row end -->

                        </div>
                    </div>
                    <!-- Card end -->

                </div>
            </div>
            <!-- Row end -->

        </div>
        <!-- Content wrapper end -->

        <!-- App Footer start -->
        <div class="app-footer">© Uni Pro Admin 2021</div>
        <!-- App footer end -->

    </div>
</x-app-layout>
