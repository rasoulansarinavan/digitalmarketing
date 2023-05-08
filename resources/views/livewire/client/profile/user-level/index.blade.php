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
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="account-settings-block" style="border: none;padding: 0">
                                    <div class="settings-block">

                                        <div class="settings-block-body">
                                            <div class="pricing-chnage-plan">
                                                @foreach($levels as $level)
                                                    <a class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                                       style="max-width: inherit;"
                                                       href="{{route('profile.kyc',$level->id)}}">
                                                        <h5>{{$level->title}}</h5>
                                                        <h6>{{$level->short_description}}</h6>
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <form wire:submit.prevent="saveUser(Object.fromEntries(new FormData($event.target)))">
                                    <div class="row gutters">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                            <img src="/backend/img/user1.png" class="img-fluid change-img-avatar"
                                                 alt="Image">
                                        </div>

                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input type="text" class="form-control" placeholder="اینجا تایپ کنید">
                                            <div class="field-placeholder">نام و نام خانوادگی</div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input type="text" class="form-control" placeholder="اینجا تایپ کنید">
                                            <div class="field-placeholder">کد ملی</div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="date-formatting">
                                            <div class="field-placeholder">تاریخ تولد</div>

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input type="tel" class="form-control" maxlength="11">
                                            <div class="field-placeholder">شماره موبایل</div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="btn btn-primary mb-3">ذخیره اطلاعات</button>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="account-settings-block">
                                    <div class="settings-block">
                                        <div class="settings-block-title"><b>نکات مهم این سطح :</b></div>
                                        <div class="settings-block-body">
                                            <div class="list-group">
                                                <div>
                                                    {{$levelInfo->long_description}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





