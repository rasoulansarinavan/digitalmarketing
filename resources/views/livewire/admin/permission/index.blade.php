<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">

            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add Permissions</div>
                </div>
                <div class="card-body">
                    <!-- Row start -->
                    <div class="row gutters">
                        <form wire:submit.prevent="savePermission(Object.fromEntries(new FormData($event.target)))">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <label for="name"></label>
                                    <input name="name" id="name" value="{{@$name}}" wire:model.defer="name"
                                           class="form-control @error('name') error-input-border @enderror"
                                           type="text">
                                    <div class="field-placeholder">Permission <span class="text-danger">*</span></div>
                                    @foreach ($errors->get('name') as $message)
                                        <span wire:loading.remove
                                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
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
                                        style="width: 84.1016px;">Permission Name
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-label="Actions: activate to sort column ascending"
                                        style="width: 71.276px;">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($permissions as $permission)
                                    <tr role="row" class="odd">
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td>
                                            <div class="actions">
                                                <a wire:click="editPermission('{{$permission->id}}')"
                                                   data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Edit">
                                                    <i class="icon-edit1 text-info"></i>
                                                </a>
                                                <a wire:click="deletePermission('{{$permission->id}}')"
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
