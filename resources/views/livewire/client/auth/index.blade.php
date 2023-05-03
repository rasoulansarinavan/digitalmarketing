<div class="login-container">

    <div class="container-fluid h-100">

        <!-- Row start -->
        <div class="row no-gutters h-100">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="login-about">
                    <div class="slogan">
                        <span>Design</span>
                        <span>Made</span>
                        <span>Simple.</span>
                    </div>
                    <div class="about-desc">
                        UniPro a data dashboard is an information management tool that visually tracks, analyzes and
                        displays key performance indicators (KPI), metrics and key data points to monitor the health of
                        a business, department or specific process.
                    </div>
                    <a href="/backend/reports.html" class="know-more">Know More <img src="/backend/img/right-arrow.svg"
                                                                                     alt="Uni Pro Admin"></a>

                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="login-wrapper">
                    <form action="reports.html">
                        <div class="login-screen">
                            <div class="login-body">
                                <a href="/backend/reports.html" class="login-logo">
                                    <img src="/backend/img/logo.svg" alt="Uni Pro Admin">
                                </a>
                                <h6>Welcome to UniPro dashboard,<br>Create your account.</h6>
                                <div class="field-wrapper">
                                    <input type="email" autofocus>
                                    <div class="field-placeholder">Email ID</div>
                                </div>
                                <div class="field-wrapper">
                                    <input type="password">
                                    <div class="field-placeholder">Password</div>
                                </div>
                                <div class="field-wrapper mb-3">
                                    <input type="password">
                                    <div class="field-placeholder">Confirm Password</div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="btn btn-primary ms-auto">Sign Up</button>
                                </div>
                                <span class="additional-link">Have an account? <a href="/backend/login.html"
                                                                                  class="btn btn-light">Login</a></span>
                            </div>
                            <div class="login-footer">
                                <a href="{{route('auth.client.gmail')}}" ><img class="w-100"
                                        src="/backend/img/btns/google.png" alt=""></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Row end -->
    </div>
</div>
