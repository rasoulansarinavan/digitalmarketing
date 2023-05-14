<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

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
                                        style="width: 84.1016px;">Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-label="Ratings: activate to sort column ascending"
                                        style="width: 84.1016px;">Email
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-label="Ratings: activate to sort column ascending"
                                        style="width: 84.1016px;">Phone
                                    </th>
                                    {{-- <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                         colspan="1" aria-label="Ratings: activate to sort column ascending"
                                         style="width: 84.1016px;">Permission
                                     </th>
                                     <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                         colspan="1" aria-label="Ratings: activate to sort column ascending"
                                         style="width: 84.1016px;">Role
                                     </th>--}}
                                    <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-label="Ratings: activate to sort column ascending"
                                        style="width: 84.1016px;">KYC
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr role="row" class="odd">
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->mobile}}</td>
                                        {{-- <td>
                                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                 <!-- Field wrapper start -->
                                                 <div class="field-wrapper">
                                                     <select class="select-single js-states select2-hidden-accessible"
                                                             title="Select Product Category" data-live-search="true"
                                                             data-select2-id="select2-data-9-l6lp" tabindex="-1"
                                                             aria-hidden="true"
                                                             wire:change="permission"
                                                             class="form-select @error('permission') error-input-border @enderror"
                                                             name="permission" id="permission">
                                                         @foreach($permissions as $permission)
                                                             <option
                                                                 @if(isset($permission->name))
                                                                     selected
                                                                 @endif
                                                                 value="{{ $permission->name }}">{{ $permission->name }}</option>
                                                         @endforeach
                                                     </select>
                                                     <div class="field-placeholder">Permissions <span
                                                             class="text-danger">*</span></div>
                                                     @foreach($errors->get('permission') as $message)
                                                         <span wire:loading.remove
                                                               class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                     @endforeach
                                                 </div>
                                                 <!-- Field wrapper end -->
                                             </div>
                                         </td>
                                         <td>
                                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                 <!-- Field wrapper start -->
                                                 <div class="field-wrapper">
                                                     <select class="select-single js-states select2-hidden-accessible"
                                                             title="Select Product Category" data-live-search="true"
                                                             data-select2-id="select2-data-9-l6lp" tabindex="-1"
                                                             aria-hidden="true"
                                                             wire:change="role"
                                                             class="form-select @error('role') error-input-border @enderror"
                                                             name="role" id="role">
                                                         @foreach($roles as $role)
                                                             <option
                                                                 @if(isset($role->name))
                                                                     selected
                                                                 @endif
                                                                 value="{{ $role->name }}">{{ $role->name }}</option>
                                                         @endforeach
                                                     </select>
                                                     <div class="field-placeholder">Roles <span
                                                             class="text-danger">*</span></div>
                                                     @foreach($errors->get('role') as $message)
                                                         <span wire:loading.remove
                                                               class="text-danger w-100 d-block mt-2">{{$message}}</span>
                                                     @endforeach
                                                 </div>
                                                 <!-- Field wrapper end -->
                                             </div>
                                         </td>--}}
                                        <td>
                                            @forelse($kycies as $kyc)

                                                <span  class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
                                                    KYC-{{$loop->index+1}}
                                                </span>

                                                {{--<span class="badge bg-primary">KYC-{{$loop->index+1}}</span>--}}
                                            @empty

                                            @endforelse
                                        </td>

                                        <!-- Field wrapper end -->
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
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Row end -->

</div>
