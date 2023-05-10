<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
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
                <input type="text" class="form-control" name="name" placeholder="اینجا تایپ کنید">
                <div class="field-placeholder" >نام و نام خانوادگی</div>
            </div>
            <!-- Field wrapper end -->
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <!-- Field wrapper start -->
            <div class="field-wrapper">
                <input type="text" class="form-control" name="code_melli" placeholder="اینجا تایپ کنید">
                <div class="field-placeholder">کد ملی</div>
            </div>
            <!-- Field wrapper end -->
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <!-- Field wrapper start -->
            <div class="field-wrapper">
                <input type="text" class="form-control" name="birth_date" placeholder="YYYY-MM-DD"
                       id="date-formatting">
                <div class="field-placeholder">تاریخ تولد</div>
            </div>
            <!-- Field wrapper end -->
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
            <!-- Field wrapper start -->
            <div class="field-wrapper">
                <input type="tel" class="form-control" name="mobile" maxlength="11">
                <div class="field-placeholder">شماره موبایل</div>
            </div>
            <!-- Field wrapper end -->
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <button type="submit" class="btn btn-primary mb-3">ذخیره اطلاعات</button>
    </div>
</div>

