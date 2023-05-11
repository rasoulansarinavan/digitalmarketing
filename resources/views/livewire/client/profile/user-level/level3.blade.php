<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
    @php
        $userName=\Illuminate\Support\Facades\Auth::user()->name;
    @endphp
    <form wire:submit.prevent="submitLevel3(Object.fromEntries(new FormData($event.target)))">
        <div class="row gutters">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <img src="{{\Illuminate\Support\Facades\Auth::user()->picture}}" style="border-radius: 50%"
                     class="img-fluid change-img-avatar"
                     alt="image">
            </div>
            <div class="mb-10 basis-full xl:basis-2/3"><h3 class="mb-5 font-Pelak text-sm font-semibold text-primary">
                    راهنمای گرفتن عکس سلفی</h3>
                <ul class="font-Estedad text-xs font-semibold leading-7 text-gray-700 xl:pl-20">
                    <li class="mb-2 flex items-start">
                        <svg class="ml-3 mt-1 min-w-[18px] text-gray-600 " xmlns="http://www.w3.org/2000/svg" width="18"
                             height="18" viewBox="0 0 24 24" fill="none">
                            <path d="M12 22c5.5 0 10-4.5 10-10S17.5 2 12 2 2 6.5 2 12s4.5 10 10 10Z"
                                  stroke="currentColor"
                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="m7.75 12 2.83 2.83 5.67-5.66" stroke="currentColor" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        در نظر داشته باشید شما می‌بایست متن راستی‌آزمایی زیر را بر روی کاغذ با دست خط خود نوشته و
                        اطلاعات
                        درون آن را کامل کنید.
                    </li>
                    <li class="mb-2 flex items-start">
                        <svg class="ml-3 mt-1 min-w-[18px] text-gray-600 " xmlns="http://www.w3.org/2000/svg" width="18"
                             height="18" viewBox="0 0 24 24" fill="none">
                            <path d="M12 22c5.5 0 10-4.5 10-10S17.5 2 12 2 2 6.5 2 12s4.5 10 10 10Z"
                                  stroke="currentColor"
                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="m7.75 12 2.83 2.83 5.67-5.66" stroke="currentColor" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        تصویر سلفی باید شامل متن دست‌نویس و کارت شناسایی و کارت بانکی باشد.
                    </li>
                    <li class="mb-2 flex items-start">
                        <svg class="ml-3 mt-1 min-w-[18px] text-gray-600 " xmlns="http://www.w3.org/2000/svg" width="18"
                             height="18" viewBox="0 0 24 24" fill="none">
                            <path d="M12 22c5.5 0 10-4.5 10-10S17.5 2 12 2 2 6.5 2 12s4.5 10 10 10Z"
                                  stroke="currentColor"
                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="m7.75 12 2.83 2.83 5.67-5.66" stroke="currentColor" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        به دستور پلیس فتا لطفاً از پوشش مناسب استفاده نمایید.
                    </li>
                    <li class="mb-2 flex items-start">
                        <svg class="ml-3 mt-1 min-w-[18px] text-gray-600 " xmlns="http://www.w3.org/2000/svg" width="18"
                             height="18" viewBox="0 0 24 24" fill="none">
                            <path d="M12 22c5.5 0 10-4.5 10-10S17.5 2 12 2 2 6.5 2 12s4.5 10 10 10Z"
                                  stroke="currentColor"
                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="m7.75 12 2.83 2.83 5.67-5.66" stroke="currentColor" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        تصویر سلفی خود را در محیط و نور مناسب تهیه نمایید، پشت تصویر حتما باید روشن باشد.
                    </li>
                    <li class="mb-2 flex items-start">
                        <svg class="ml-3 mt-1 min-w-[18px] text-gray-600 " xmlns="http://www.w3.org/2000/svg" width="18"
                             height="18" viewBox="0 0 24 24" fill="none">
                            <path d="M12 22c5.5 0 10-4.5 10-10S17.5 2 12 2 2 6.5 2 12s4.5 10 10 10Z"
                                  stroke="currentColor"
                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="m7.75 12 2.83 2.83 5.67-5.66" stroke="currentColor" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        گردی صورت باید کاملا مشخص باشد و با چیزی پوشانده نشود.(ماسک و عینک آفتابی و.....).
                    </li>
                    <li class="mb-2 flex items-start">
                        <svg class="ml-3 mt-1 min-w-[18px] text-gray-600 " xmlns="http://www.w3.org/2000/svg" width="18"
                             height="18" viewBox="0 0 24 24" fill="none">
                            <path d="M12 22c5.5 0 10-4.5 10-10S17.5 2 12 2 2 6.5 2 12s4.5 10 10 10Z"
                                  stroke="currentColor"
                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="m7.75 12 2.83 2.83 5.67-5.66" stroke="currentColor" stroke-width="1.5"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        از اضافه و یا کم کردن لغتی از متن سلفی جدا خودداری نموده و متن را به درستی یادداشت نمایید(اگر
                        متن
                        شما حتی یک کلمه اشتباه داشته باشد رد می شود.)
                    </li>
                </ul>
            </div>

            <div class="flex flex-wrap items-start justify-center py-10 md:justify-between xl:flex-nowrap">
                <div class="flex basis-full flex-col xl:basis-2/3"><h3
                        class="mb-5 font-Pelak text-sm font-semibold text-primary">متن راستی آزمایی</h3>
                    <div class="mb-10 font-Estedad text-xs font-semibold leading-7 text-gray-700 xl:pl-20 undefined"><p>
                            اینجانب {{$userName}} با شماره ملی ...(کد ملی شما)... جهت احراز هویت در سایت ایرانیکارت
                            اعلام میکنم؛ می‌دانم کلاهبرداران با عناوینی مثل کاریابی و مالیات و سقف تراکنش روزانه قصد
                            سواستفاده از حساب دیگران را دارند پس اطلاعات حساب بانکی و اکانت ایرانیکارت خود را در اختیار
                            کسی
                            قرار نمیدهم زیرا می‌دانم این کار جرم و خطا کار مجرم است.</p>
                        <p>قوانین و مقررات سایت ایرانیکارت را خوانده‌ و قبول دارم.</p>
                        <p>نام و نام خانوادگی:{{$userName}}</p>
                        <p>تاریخ: ۱۴۰۲/۰۲/۲۱ </p>
                        <p>امضا:</p></div>
                </div>
            </div>
            <h4 class="mb-5 font-Pelak text-sm font-semibold text-primary">عکس سلفی به همراه مدارک</h4>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <!-- Field wrapper start -->
                <div class="field-wrapper">
                    <input name="serial" class="form-control @error('serial') error-input-border @enderror" id="serial"
                           placeholder="اینجا تایپ کنید" type="text">
                    <div class="field-placeholder">سریال کارت ملی</div>
                    @foreach ($errors->get('serial') as $message)
                        <span wire:loading.remove
                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                    @endforeach
                </div>
                <p>*سریال کارت ملی در پشت کارت ملی قرار دارد.</p>
                <!-- Field wrapper end -->
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div id="dropzone-sm" class="mb-4">
                    <div class="dz-message needsclick">
                        <h5>عکس سلفی </h5>
                        <input wire:model="file" name="file"
                               class="dz-button @error('file') error-input-border @enderror" id="file" type="file">
                        @foreach ($errors->get('file') as $message)
                            <span wire:loading.remove
                                  class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                        @endforeach
                        <div wire:loading wire:target="image">Uploading...</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <button type="submit" class="btn btn-primary mb-3">ذخیره اطلاعات</button>
            </div>
        </div>
    </form>
</div>

