<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

    @if($verification_box)
        <form wire:submit.prevent="checkSmsCode(Object.fromEntries(new FormData($event.target)))">

            <div class="row gutters">
                <div class="col-12">

                    <div class="settings-block-title pb-3"><b>کد تایید ارسال شده به شماره : {{$mobile}} را وارد
                            کنید </b>
                    </div>
                    <div class="field-wrapper">

                        <input name="code" class="form-control @error('name') error-input-border @enderror" id="code"
                               placeholder="اینجا تایپ کنید" type="number" maxlength="6">
                        @foreach ($errors->get('code') as $message)
                            <span wire:loading.remove
                                  class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                        @endforeach
                        @if($invalidSmsCode)
                            <span wire:loading.remove
                                  class=" text-danger w-100 d-block mt-2">کد نامعتبر است !</span>
                        @endif
                        <div class="field-placeholder">کد تایید</div>
                    </div>


                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <button type="submit" class="btn btn-primary mb-3">ذخیره اطلاعات</button>
            </div>
        </form>
    @else
        <form wire:submit.prevent="submitLevel2(Object.fromEntries(new FormData($event.target)))">
            <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <!-- Field wrapper start -->
                    <div class="field-wrapper">
                        <input type="text" class="form-control @error('bank_card') error-input-border @enderror"
                               name="bank_card" placeholder="اینجا تایپ کنید">
                        <div class="field-placeholder">شماره کارت بانکی</div>
                        @foreach ($errors->get('bank_card') as $message)
                            <span wire:loading.remove
                                  class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                        @endforeach
                    </div>

                    <!-- Field wrapper end -->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <!-- Field wrapper start -->
                    <div class="field-wrapper">
                        <input type="text" class="form-control @error('sheba') error-input-border @enderror"
                               name="sheba" placeholder="اینجا تایپ کنید">
                        <div class="field-placeholder">شماره شبا</div>
                        @foreach ($errors->get('sheba') as $message)
                            <span wire:loading.remove
                                  class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                        @endforeach
                    </div>
                    <!-- Field wrapper end -->
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <button type="submit" class="btn btn-primary mb-3">ذخیره اطلاعات</button>
            </div>
        </form>
    @endif
</div>
