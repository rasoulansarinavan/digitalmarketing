<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">
    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header-lg">
                        <h4>تکمیل اطلاعات سطح کاربر</h4>
                    </div>
                    <div class="card-body">

                        <div class="row gutters">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="account-settings-block">
                                    <div class="settings-block">

                                        <div class="settings-block-body">
                                            <div class="pricing-chnage-plan">
                                                @foreach($levels as $level)
                                                    <a wire:click="showDescription('{{$level->id}}')"
                                                       data-bs-toggle="modal" data-bs-target="#exampleModalSmall"
                                                       class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                                       style="max-width: inherit;" href="#">
                                                        <h5>{{$level->title}}</h5>
                                                        <h6>{{$level->short_description}}</h6>
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                                <div class="row gutters">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <img src="/backend/img/user1.png" class="img-fluid change-img-avatar"
                                             alt="Image">
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                                        <div id="dropzone-sm" class="mb-4">
                                            <form action="/upload" class="dropzone needsclick dz-clickable"
                                                  id="demo-upload">

                                                <div class="dz-message needsclick">
                                                    <button type="button" class="dz-button">تصویر کارت ملی</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input type="text" class="form-control" placeholder="اینجا تایپ کنید">
                                            <div class="field-placeholder">شماره کد ملی</div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input type="date" class="form-control">
                                            <div class="field-placeholder">تاریخ تولد</div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="btn btn-primary mb-3">ذخیره اطلاعات</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalSmall" tabindex="-1"
                 aria-labelledby="exampleModalSmallTitle"
                 style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalSmallTitle">
                                Modal title</h5>
                            <button type="button" class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="slimScrollDiv"
                             style="position: relative; overflow: hidden; width: auto; height: 95%;">
                            <div class="modal-body"
                                 style="overflow: hidden; width: auto; height: 95%;">
                                <p>
                                    {{$long_description}}
                                </p>
                            </div>
                            <div class="slimScrollBar"
                                 style="background: rgb(214, 219, 230); width: 5px; position: absolute; top: 0px; opacity: 0.8; display: block; border-radius: 0px; z-index: 99; left: 1px; height: 156.49px;"></div>
                            <div class="slimScrollRail"
                                 style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(214, 219, 230); opacity: 0.2; z-index: 90; left: 1px;"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





