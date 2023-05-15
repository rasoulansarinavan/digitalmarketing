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
                                                        $href = route('profile.kyc', $userLevel+1);
                                                        $badge='';
                                                        $background='';
                                                        $color='';
                                                        //dd($level->userLevel->status_id);
                                                        if (@$level->userLevel->status_id==1){
                                                            $background='#d69e00';
                                                            $color='#fff';
                                                            $badge='('.$level->userLevel->statusName->title.')';
                                                        }elseif (@$level->userLevel->status_id==2){
                                                             $background='#0d8d29';
                                                             $color='#fff';
                                                             $badge='('.$level->userLevel->statusName->title.')';
                                                        }elseif (@$level->userLevel->status_id==3){
                                                             $background='#e02539';
                                                             $color='#fff';
                                                             $badge='('.$level->userLevel->statusName->title.')';
                                                        }
                                                    @endphp

                                                    <a class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                                       style="max-width: inherit; background: {{$background}};color:{{$color}} "
                                                       href="{{$href}}">

                                                        <h5 style="color: {{$color}}">{{$level->title}} {{$badge}}</h5>
                                                        <h6 style="color: {{$color}}">{{$level->short_description}}</h6>
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if($checkKyc)

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="alert alert-warning" role="alert">
                                        در حال بررسی . . .
                                    </div>
                                    <div class="text-center">
                                        <img src="/backend/img/pending.png" alt="" width="270">
                                    </div>
                                </div>

                            @else

                                @if($userLevel < 1)
                                    <livewire:client.profile.user-level.level1/>
                                @elseif($userLevel < 2)
                                    <livewire:client.profile.user-level.level2/>
                                @elseif($userLevel <3)
                                    <livewire:client.profile.user-level.level3/>
                                @elseif($userLevel < 4)
                                    {{--<livewire:client.profile.user-level.level4/>--}}
                                    <livewire:client.profile.user-level.completed/>
                                @endif

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





