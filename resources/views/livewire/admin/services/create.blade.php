<div class="content-wrapper-scroll">
    <div class="content-wrapper">

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
                                <form
                                    wire:submit.prevent="submitGeneralInformation(Object.fromEntries(new FormData($event.target)))">
                                    <div class="row gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                            <div class="field-wrapper">
                                                <input type="text" placeholder="Enter Service Name" name="title">
                                                <div
                                                    class="field-placeholder   @error('title') error-input-border @enderror">
                                                    Service Name <span
                                                        class="text-danger">*</span></div>
                                            </div>
                                            @foreach($errors->get('title') as $message)
                                                <span wire:loading.remove
                                                      class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                            @endforeach


                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                            <div class="field-wrapper">
                                                <select name="category_id" id="category_id" class="select-single js-states
                                                 @error('category_id') error-input-border @enderror"
                                                        title="Select Service Category"
                                                        data-live-search="true">
                                                    @forelse($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                                    @empty
                                                    @endforelse

                                                </select>
                                                @foreach($errors->get('category_id') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                                <div class="field-placeholder">Service Category <span
                                                        class="text-danger">*</span></div>
                                            </div>

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <div class="field-wrapper">
                                                <div class="input-group">
                                                    <input type="text" class="form-control
                                                    @error('discount') error-input-border @enderror"
                                                           placeholder="Set Service Discount Price" name="discount">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                                @foreach($errors->get('discount') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                                <div class="field-placeholder">Service Discount <span
                                                        class="text-danger">*</span></div>
                                            </div>

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <textarea name="description" id="" cols="30" rows="5"></textarea>
                                                @foreach ($errors->get('description') as $message)
                                                    <span wire:loading.remove
                                                          class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                                @endforeach

                                                <div class="field-placeholder">Description<span
                                                        class="text-danger">*</span></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <div id="editor" class="w-100"></div>
                                                @foreach ($errors->get('long_description') as $message)
                                                    <span wire:loading.remove
                                                          class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                                @endforeach

                                                <div class="field-placeholder">Long Description<span
                                                        class="text-danger">*</span></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <div class="input-group">

                                                    <input wire:model="file" name="file"
                                                           type="file"
                                                           class="form-control @error('file') error-input-border @enderror"
                                                           id="inputGroupFile01">
                                                    @foreach ($errors->get('file') as $message)
                                                        <span wire:loading.remove
                                                              class=" text-danger w-100 d-block mt-1">{{ $message}}</span>
                                                    @endforeach

                                                    <button class="btn btn-outline-primary" type="button"
                                                            id="inputGroupFile02">Upload
                                                    </button>

                                                </div>
                                                <div wire:loading wire:target="file">Uploading...</div>
                                                <div class="field-placeholder">Service Image<span
                                                        class="text-danger">*</span></div>
                                                @if ($file)
                                                    <img class="w-100" src="{{ $file->temporaryUrl() }}">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="mt-5">Seo Information</h3>
                                    <div class="row gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                            <div class="field-wrapper">
                                                <input type="text" placeholder="Enter Service Name" name="meta_name">
                                                <div
                                                    class="field-placeholder   @error('meta_name') error-input-border @enderror">
                                                    Meta Name<span
                                                        class="text-danger">*</span></div>
                                            </div>
                                            @foreach($errors->get('meta_name') as $message)
                                                <span wire:loading.remove
                                                      class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                            @endforeach

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                            <div class="field-wrapper">
                                                <input type="text" placeholder="Enter Service Name"
                                                       name="meta_keywords">
                                                <div
                                                    class="field-placeholder   @error('meta_keywords') error-input-border @enderror">
                                                    Meta Keywords<span
                                                        class="text-danger">*</span></div>
                                            </div>
                                            @foreach($errors->get('meta_keywords') as $message)
                                                <span wire:loading.remove
                                                      class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                            @endforeach

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <div class="field-wrapper">
                                                <div class="input-group">
                                                    <input type="text" class="form-control
                                                    @error('meta_description') error-input-border @enderror"
                                                           placeholder="Set Service Discount Price"
                                                           name="meta_description">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                                @foreach($errors->get('meta_description') as $message)
                                                    <span wire:loading.remove
                                                          class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                @endforeach
                                                <div class="field-placeholder">Meta Description<span
                                                        class="text-danger">*</span></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4" dir="rtl">
                                        <input class="btn btn-primary" type="submit" value="Submit" >
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

@push('script')

    <!-- Steps wizard JS -->
    {{--        <script src="/backend/dark/vendor/wizard/jquery.steps.min.js"></script>--}}
    {{--        <script src="/backend/dark/vendor/wizard/jquery.steps.custom.js"></script>--}}
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
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

