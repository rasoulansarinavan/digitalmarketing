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
                                <div class="account-settings-block">
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
                                        <div
                                            class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                                            <div id="dropzone-sm" class="mb-4 dropzone needsclick dz-clickable">
                                                <label class="form-label" for="image">تصویر کارت ملی</label>
                                                <input wire:model="image"
                                                       class="form-control @error('image') error-input-border @enderror"
                                                       id="image" type="file">
                                                @foreach ($errors->get('image') as $message)
                                                    <span wire:loading.remove
                                                          class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                                @endforeach
                                                <div wire:loading wire:target="image">Uploading...</div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input wire:model.defer="code_melli" name="code_melli"
                                                       id="code_melli" type="text"
                                                       class="form-control @error('code_melli') error-input-border @enderror"
                                                       placeholder="اینجا تایپ کنید">
                                                @foreach ($errors->get('code_melli') as $message)
                                                    <span wire:loading.remove
                                                          class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                                @endforeach
                                                <div class="field-placeholder">شماره کد ملی</div>
                                            </div>
                                            <!-- Field wrapper end -->
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input wire:model.defer="birth_date" name="birth_date"
                                                       id="birth_date" type="date"
                                                       class="form-control @error('birth_date') error-input-border @enderror">
                                                @foreach ($errors->get('birth_date') as $message)
                                                    <span wire:loading.remove
                                                          class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                                @endforeach
                                                <div class="field-placeholder">تاریخ تولد</div>
                                            </div>
                                            <!-- Field wrapper end -->
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button type="submit" class="btn btn-primary mb-3">ذخیره اطلاعات</button>
                                    </div>
                                </form>
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





