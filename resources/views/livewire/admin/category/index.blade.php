<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">

            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add services</div>
                </div>
                <div class="card-body">
                    <!-- Row start -->
                    <div class="row gutters">
                        <form wire:submit.prevent="saveCategory(Object.fromEntries(new FormData($event.target)))">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <label for="title"></label>
                                    <input name="title" id="title" value="{{@$title}}" wire:model.defer="title"
                                           class="form-control @error('title') error-input-border @enderror"
                                           type="text">
                                    <div class="field-placeholder">Service <span class="text-danger">*</span></div>
                                    @foreach ($errors->get('title') as $message)
                                        <span wire:loading.remove
                                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                    @endforeach
                                </div>
                                <!-- Field wrapper end -->
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <select class="select-single js-states select2-hidden-accessible"
                                            title="Select Product Category" data-live-search="true"
                                            data-select2-id="select2-data-9-l6lp" tabindex="-1" aria-hidden="true"
                                            wire:model.defer="category_id"
                                            class="form-select @error('category_id') error-input-border @enderror"
                                            name="category_id" id="category_id">
                                        <option value="0">parent</option>
                                        @foreach($categories as $category)
                                            <option
                                                @if(isset($category->title))
                                                    selected
                                                @endif
                                                value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    <div class="field-placeholder">Category <span class="text-danger">*</span></div>
                                    @foreach($errors->get('category_id') as $message)
                                        <span wire:loading.remove
                                              class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                    @endforeach
                                </div>
                                <!-- Field wrapper end -->
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <textarea wire:model.defer="icon"
                                              name="icon" id="icon"
                                              class="form-control  @error('icon') error-input-border @enderror"
                                              rows="2">

                                    </textarea>
                                    <div class="field-placeholder">Icon <span class="text-danger">*</span></div>
                                    @foreach($errors->get('icon') as $message)
                                        <span wire:loading.remove
                                              class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                    @endforeach
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- Row end -->

                </div>
            </div>
            <!-- Card end -->

            <!-- Row end -->

        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">

            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <div id="copy-print-csv_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <table id="copy-print-csv" class="table v-middle dataTable no-footer" role="grid"
                                   aria-describedby="copy-print-csv_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Products: activate to sort column descending"
                                        style="width: 191.862px;">Id
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-label="Ratings: activate to sort column ascending"
                                        style="width: 84.1016px;">Service Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-label="Ratings: activate to sort column ascending"
                                        style="width: 84.1016px;">Category Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-label="Ratings: activate to sort column ascending"
                                        style="width: 84.1016px;">Icon
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-label="Actions: activate to sort column ascending"
                                        style="width: 71.276px;">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr role="row" class="odd">
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $category->title }}</td>
                                        @if($category->category_id ==0)
                                            <td>Parent</td>
                                        @elseif(isset($category->category_id))
                                            <td>{{ $category->category->title }}</td>
                                        @endif

                                        <td>{{ $category->icon }}</td>
                                        <td>
                                            <div class="actions">
                                                <a wire:click="editCategory('{{$category->id}}')"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Edit">
                                                    <i class="icon-edit1 text-info"></i>
                                                </a>
                                                <a wire:click="deleteCategory('{{$category->id}}')"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Delete">
                                                    <i class="icon-x-circle text-danger"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="dataTables_paginate paging_simple_numbers" id="copy-print-csv_paginate">
                                <ul class="pagination pagination-sm">
                                    <li class="paginate_button page-item previous disabled"
                                        id="copy-print-csv_previous"><a href="#" aria-controls="copy-print-csv"
                                                                        data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                    </li>
                                    <li class="paginate_button page-item active"><a href="#"
                                                                                    aria-controls="copy-print-csv"
                                                                                    data-dt-idx="1" tabindex="0"
                                                                                    class="page-link">1</a></li>
                                    <li class="paginate_button page-item next disabled" id="copy-print-csv_next"><a
                                            href="#" aria-controls="copy-print-csv" data-dt-idx="2" tabindex="0"
                                            class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Row end -->

</div>
