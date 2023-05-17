<div class="content-wrapper">

    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <div id="copy-print-csv_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div id="copy-print-csv_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                                                                           class="form-control form-control-sm selectpicker mb-2"
                                                                                                           placeholder=""
                                                                                                           aria-controls="copy-print-csv"></label>
                            </div>
                            <table id="copy-print-csv" class="table v-middle dataTable no-footer" role="grid"
                                   aria-describedby="copy-print-csv_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Products: activate to sort column descending"
                                        style="width: 193.763px;">Image Service
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-label="Ratings: activate to sort column ascending"
                                        style="width: 85.1042px;">Name service
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-label="Status: activate to sort column ascending"
                                        style="width: 64.4141px;">Category
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-label="Actions: activate to sort column ascending"
                                        style="width: 72.2005px;">Actions
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($services as $service)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="media-box">
                                                <img src="/{{@$service->image->file}}" class="media-avatar"
                                                     alt="Product" width="100px">
                                            </div>
                                        </td>
                                        <td>
                                            {{$service->title}}
                                        </td>
                                        <td>
                                            <b>{{@$service->category->title}}</b>
                                        </td>
                                        <td>
                                            <div class="actions">
                                                <a wire:click="editService({{$service->id}})" data-toggle="tooltip"
                                                   data-placement="top" title=""
                                                   data-original-title="Edit">
                                                    <i class="icon-edit1 text-info"></i>
                                                </a>
                                                <a
                                                    data-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-original-title="Delete"
                                                    class="primary" data-bs-toggle="modal"
                                                    data-bs-target="#staticBackdrop">
                                                    <i class="icon-x-circle text-danger "></i>
                                                </a>
                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                     data-bs-keyboard="false" tabindex="-1"
                                                     aria-labelledby="staticBackdropLabel" style="display: none;"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Delete
                                                                    Service</h5>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <div class="slimScrollDiv"
                                                                 style="position: relative; overflow: hidden; width: auto; height: 95%;">
                                                                <div class="modal-body"
                                                                     style="overflow: hidden; width: auto; height: 95%;">
                                                                    Are you sure??
                                                                </div>
                                                                <div class="slimScrollBar"
                                                                     style="background: rgb(36, 38, 68); width: 5px; position: absolute; top: 0px; opacity: 0.8; display: block; border-radius: 0px; z-index: 99; right: 1px;"></div>
                                                                <div class="slimScrollRail"
                                                                     style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(36, 38, 68); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close
                                                                </button>
                                                                <button wire:click="deleteService({{$service->id}})"
                                                                        type="button"
                                                                        class="btn btn-danger add-danger-noti"
                                                                        data-bs-dismiss="modal">Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="dataTables_info" id="copy-print-csv_info" role="status" aria-live="polite">
                                Showing 1 to 5 of 5 entries
                            </div>
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
                            {{-- //////// toaster //////--}}
                            <div wire:ignore class="notify-notifications clearfix">
                                <div id="notes" class="notify notify-notes"></div>
                                <div class="custom-btn-group">
                                </div>
                            </div>
                            {{--  ///// toaster /////--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
