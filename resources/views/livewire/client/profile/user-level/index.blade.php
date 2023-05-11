<div class="content-wrapper-scroll">
    @php
        $userLevel=\Illuminate\Support\Facades\Auth::user()->user_level_id;
    @endphp
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
                                                    @php
                                                        $href = route('profile.kyc', $userLevel);
                                                        $title='';
                                                    @endphp

                                                    <a class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                                       style="max-width: inherit;"
                                                       href="{{$href}}">
                                                        <h5>{{$level->title}}</h5>
                                                        <h6>{{$level->short_description}}</h6>
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if($userLevel < 1)
                                <livewire:client.profile.user-level.level1/>
                            @elseif($userLevel < 2)
                                <livewire:client.profile.user-level.level2/>
                            @elseif($userLevel <3)
                                <livewire:client.profile.user-level.level3/>
                            @elseif($userLevel < 4)
                                <livewire:client.profile.user-level.level4/>
                            @endif
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





