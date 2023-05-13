<div class="content-wrapper-scroll">
    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add New Service</div>
                    </div>
                    <div class="card-body">

                        <div id="example-form">

                            <h3>General Information</h3>
                            <section>
                                <form wire:submit.prevent="submitGeneralInformation(Object.fromEntries(new FormData($event.target)))">
                                    <h6 class="h-0 m-0">&nbsp;</h6>
                                    <div class="row gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                            <div class="field-wrapper">
                                                <input type="text" placeholder="Enter Service Name" name="title">
                                                <div class="field-placeholder">Service Name <span
                                                        class="text-danger">*</span></div>
                                            </div>

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                            <div class="field-wrapper">
                                                <select class="select-single js-states" title="Select Service Category"
                                                        data-live-search="true">
                                                    @forelse($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                                    @empty
                                                    @endforelse

                                                </select>
                                                <div class="field-placeholder">Service Category <span
                                                        class="text-danger">*</span></div>
                                            </div>

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                            <div class="field-wrapper">
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                           placeholder="Set Service Price">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <div class="field-placeholder">Service Price <span
                                                        class="text-danger">*</span></div>
                                            </div>

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                            <div class="field-wrapper">
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                           placeholder="Set Service Discount Price" name="discount">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                                <div class="field-placeholder">Service Discount <span
                                                        class="text-danger">*</span></div>
                                            </div>

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <div class="field-wrapper m-0">
                                                <div class="summernote"></div>
                                                <div class="field-placeholder">Service Description <span
                                                        class="text-danger"></span></div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </section>

                            <h3>Service Images</h3>
                            <section>
                                <h6 class="h-0 m-0">&nbsp;</h6>
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div id="dropzone">
                                            <form action="/upload" class="dropzone needsclick dz-clickable"
                                                  id="demo-upload">

                                                <div class="dz-message needsclick">
                                                    <button type="button" class="dz-button">Drop files here or click to
                                                        upload.
                                                    </button>
                                                    <br>
                                                    <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </section>

                            <h3>Meta Data</h3>
                            <section>
                                <h6 class="h-0 m-0">&nbsp;</h6>
                                <div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                        <div class="field-wrapper">
                                            <input type="text" placeholder="Enetr Meta Name">
                                            <div class="field-placeholder">Meta Name <span class="text-danger">*</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="field-wrapper">
                                            <input type="text" placeholder="Enter Keywords" value="Books, Mobiles, Food"
                                                   data-role="tagsinput">
                                            <div class="field-placeholder">Meta Keywords <span
                                                    class="text-danger">*</span></div>
                                        </div>

                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                        <div class="field-wrapper m-0">
                                            <div class="summernote"></div>
                                            <div class="field-placeholder">Meta Description <span
                                                    class="text-danger">*</span></div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->

    @push('script')

        <!-- Steps wizard JS -->
        <script src="/backend/dark/vendor/wizard/jquery.steps.min.js"></script>
        <script src="/backend/dark/vendor/wizard/jquery.steps.custom.js"></script>

        <!-- Summernote JS -->
        <script src="/backend/dark/vendor/summernote/summernote-bs4.js"></script>

        <!-- Bootstrap Select JS -->
        <script src="/backend/dark/vendor/bs-select/bs-select.min.js"></script>
        <script src="/backend/dark/vendor/bs-select/bs-select-custom.js"></script>

        <!-- Dropzone JS -->
        <script src="/backend/dark/vendor/dropzone/dropzone.min.js"></script>

        <!-- Input Tags JS -->
        <script src="/backend/dark/vendor/input-tags/tagsinput.min.js"></script>
        <script src="/backend/dark/vendor/input-tags/typeahead.js"></script>
        <script src="/backend/dark/vendor/input-tags/tagsinput-custom.js"></script>

        <!-- Main Js Required -->
        <script src="/backend/dark/js/main.js"></script>

        <script>

            // Summernote
            $(document).ready(function () {
                $('.summernote').summernote({
                    height: 120,
                    tabsize: 2,
                    focus: true,
                    toolbar: [
                        ['font', ['bold', 'underline', 'clear']],
                        ['para', ['ul', 'ol']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']],
                    ]
                });
            });

        </script>
    @endpush

</div>
