<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
    <form wire:submit.prevent="submitLevel1(Object.fromEntries(new FormData($event.target)))">

        <div class="row gutters">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <img src="{{\Illuminate\Support\Facades\Auth::user()->picture}}" style="border-radius: 50%"
                     class="img-fluid change-img-avatar"
                     alt="image">
            </div>


            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                <div id="dropzone-sm" class="mb-4">
                    <div class="dz-message needsclick">
                        <label class="form-label" for="file">تصویر کارت ملی</label>
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

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <!-- Field wrapper start -->
                <div class="field-wrapper">
                    <input name="name" class="form-control @error('name') error-input-border @enderror" id="name"
                           placeholder="اینجا تایپ کنید" type="text">
                    @foreach ($errors->get('name') as $message)
                        <span wire:loading.remove
                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                    @endforeach
                    <div class="field-placeholder">نام و نام خانوادگی</div>
                </div>
                <!-- Field wrapper end -->
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <!-- Field wrapper start -->
                <div class="field-wrapper">
                    <input type="text" class="form-control  @error('code_melli') error-input-border @enderror"
                           id="code_melli" name="code_melli" placeholder="اینجا تایپ کنید">
                    @foreach ($errors->get('code_melli') as $message)
                        <span wire:loading.remove
                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                    @endforeach
                    <div class="field-placeholder">کد ملی</div>
                </div>
                <!-- Field wrapper end -->
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <!-- Field wrapper start -->
                <div class="field-wrapper">
                    <input type="text" class="form-control @error('birth_date') error-input-border @enderror"
                           name="birth_date" placeholder="YYYY-MM-DD"
                           id="date-formatting">
                    @foreach ($errors->get('birth_date') as $message)
                        <span wire:loading.remove
                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                    @endforeach
                    <div class="field-placeholder">تاریخ تولد</div>
                </div>
                <!-- Field wrapper end -->
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <!-- Field wrapper start -->
                <div class="field-wrapper">
                    <input type="tel" class="form-control @error('mobile') error-input-border @enderror" name="mobile"
                           id="mobile" maxlength="11">
                    @foreach ($errors->get('mobile') as $message)
                        <span wire:loading.remove
                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                    @endforeach
                    <div class="field-placeholder">شماره موبایل</div>
                </div>
                <!-- Field wrapper end -->
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <button type="submit" class="btn btn-primary mb-3">ذخیره اطلاعات</button>
        </div>
    </form>
</div>

