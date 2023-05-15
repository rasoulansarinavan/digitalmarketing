<div class="content-wrapper">
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
                                        style="width: 84.1016px;">Contact
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-label="Ratings: activate to sort column ascending"
                                        style="width: 84.1016px;">Created at
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
                                    <th class="sorting" tabindex="0" aria-controls="copy-print-csv" rowspan="1"
                                        colspan="1" aria-label="Ratings: activate to sort column ascending"
                                        style="width: 84.1016px;">Blocked
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">
                                            <div class="media-box d-flex align-items-center ">
                                                <img src="{{$user->picture}}" width="50" class="media-avatar"
                                                     alt="Product">
                                                <div class="media-box-body ms-2">
                                                    <a href="#" class="text-truncate">{{ $user->name }}</a>
                                                    <p>ID: #{{$user->id}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- <td>{{ $loop->index+1 }}</td>--}}

                                        <td>{{$user->email}}<br>{{$user->mobile}}</td>
                                        <td>{{$user->created_at}}<br>({{$user->created_at->diffForHumans()}})</td>
                                        <td>
                                            @forelse($user->kycies as $kyc)

                                                @php

                                                    $class='';
                                                    if($kyc->status_id==1){
                                                        $class='primary';
                                                    }elseif ($kyc->status_id=2){
                                                        $class='success';
                                                    }elseif ($kyc->status_id=3){
                                                        $class='danger';
                                                    }
                                                @endphp
                                                <span wire:click="showDataModal({{$user->id}},{{$loop->index+1}})"
                                                      class="btn  badge bg-{{$class}}"
                                                      data-bs-toggle="modal"
                                                      data-bs-target="#exampleModalCenteredScrollable">
                                                    KYC-{{$loop->index+1}}
                                                </span>

                                                {{--<span class="badge bg-primary">KYC-{{$loop->index+1}}</span>--}}
                                            @empty

                                            @endforelse
                                        </td>
                                        <td><input type="checkbox"></td>

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

    <div wire:ignore.self class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1"
         aria-labelledby="exampleModalCenteredScrollableTitle" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">KYC</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @if($currentLevel==1)
                    <form wire:submit.prevent="changeLevel(Object.fromEntries(new FormData($event.target)))">
                        <div class="slimScrollDiv"
                             style="position: relative; overflow: hidden; width: auto; height: 95%;">
                            <div class="modal-body" style="overflow: hidden; width: auto; height: 95%;">

                                <img src="{{@$dataUser['file']['file']}}" alt="Le Meilleur Admin" class="w-100">

                                <ul class="list-group mt-2">
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Name : </span>{{@$dataUser['name']}}</li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Email : </span>{{@$dataUser['code_melli']}}</li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Phone : </span>{{@$dataUser['birth_date']}}</li>
                                    {{--<li class="list-group-item"><span>Location: </span>London</li>--}}
                                </ul>


                                <div class="d-flex justify-content-start mb-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" checked id="pending" value="1"
                                               name="status">
                                        <label class="form-check-label btn btn-primary" for="pending"
                                               wire:click="$set('showCommentFiled', 'hidden')">Pending</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" id="accept" value="2"
                                               style="color: #52ff00;"
                                               name="status">
                                        <label class="form-check-label btn btn-success" for="accept"
                                               wire:click="$set('showCommentFiled', 'hidden')">Accept</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="reject" value="3"
                                               name="status">
                                        <label class="form-check-label btn btn-danger" for="reject"
                                               wire:click="$set('showCommentFiled', '')">Reject</label>
                                    </div>
                                    @foreach ($errors->get('status') as $message)
                                        <span wire:loading.remove
                                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                    @endforeach

                                </div>

                                <div class="form-group"{{$showCommentFiled}}>
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" class="w-100" id="comment" cols="30" rows="6"
                                              style="background: transparent;color: #fff;padding: 10px"></textarea>
                                    @foreach ($errors->get('comment') as $message)
                                        <span wire:loading.remove
                                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                    @endforeach
                                </div>

                            </div>
                            <div class="slimScrollBar"
                                 style="background: rgb(36, 38, 68); width: 5px; position: absolute; top: 0px; opacity: 0.8; display: block; border-radius: 0px; z-index: 99; right: 1px; height: 353.552px;"></div>
                            <div class="slimScrollRail"
                                 style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(36, 38, 68); opacity: 0.2; z-index: 90; right: 1px;"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                @elseif($currentLevel==2)
                    <form wire:submit.prevent="changeLevel(Object.fromEntries(new FormData($event.target)))">
                        <div class="slimScrollDiv"
                             style="position: relative; overflow: hidden; width: auto; height: 95%;">
                            <div class="modal-body" style="overflow: hidden; width: auto; height: 95%;">
                                <ul class="list-group mt-2">
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Bank card : </span>{{@$dataUser['bank_card']}}</li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>IBAN : </span>{{@$dataUser['sheba']}}</li>

                                    {{--<li class="list-group-item"><span>Location: </span>London</li>--}}
                                </ul>


                                <div class="d-flex justify-content-start mb-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" checked id="pending" value="1"
                                               name="status">
                                        <label class="form-check-label btn btn-primary" for="pending"
                                               wire:click="$set('showCommentFiled', 'hidden')">Pending</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" id="accept" value="2"
                                               style="color: #52ff00;"
                                               name="status">
                                        <label class="form-check-label btn btn-success" for="accept"
                                               wire:click="$set('showCommentFiled', 'hidden')">Accept</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="reject" value="3"
                                               name="status">
                                        <label class="form-check-label btn btn-danger" for="reject"
                                               wire:click="$set('showCommentFiled', '')">Reject</label>
                                    </div>
                                    @foreach ($errors->get('status') as $message)
                                        <span wire:loading.remove
                                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                    @endforeach

                                </div>

                                <div class="form-group"{{$showCommentFiled}}>
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" class="w-100" id="comment" cols="30" rows="6"
                                              style="background: transparent;color: #fff;padding: 10px"></textarea>
                                    @foreach ($errors->get('comment') as $message)
                                        <span wire:loading.remove
                                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                    @endforeach
                                </div>

                            </div>
                            <div class="slimScrollBar"
                                 style="background: rgb(36, 38, 68); width: 5px; position: absolute; top: 0px; opacity: 0.8; display: block; border-radius: 0px; z-index: 99; right: 1px; height: 353.552px;"></div>
                            <div class="slimScrollRail"
                                 style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(36, 38, 68); opacity: 0.2; z-index: 90; right: 1px;"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                @elseif($currentLevel==3)
                    <form wire:submit.prevent="changeLevel(Object.fromEntries(new FormData($event.target)))">
                        <div class="slimScrollDiv"
                             style="position: relative; overflow: hidden; width: auto; height: 95%;">
                            <div class="modal-body" style="overflow: hidden; width: auto; height: 95%;">
                                <img src="{{@$dataUser['file']['file']}}" alt="Le Meilleur Admin" class="w-100">

                                <ul class="list-group mt-2">
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>ID card serial : </span>{{@$dataUser['serial']}}</li>

                                </ul>


                                <div class="d-flex justify-content-start mb-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" checked id="pending" value="1"
                                               name="status">
                                        <label class="form-check-label btn btn-primary" for="pending"
                                               wire:click="$set('showCommentFiled', 'hidden')">Pending</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input " type="radio" id="accept" value="2"
                                               style="color: #52ff00;"
                                               name="status">
                                        <label class="form-check-label btn btn-success" for="accept"
                                               wire:click="$set('showCommentFiled', 'hidden')">Accept</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="reject" value="3"
                                               name="status">
                                        <label class="form-check-label btn btn-danger" for="reject"
                                               wire:click="$set('showCommentFiled', '')">Reject</label>
                                    </div>
                                    @foreach ($errors->get('status') as $message)
                                        <span wire:loading.remove
                                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                    @endforeach

                                </div>

                                <div class="form-group"{{$showCommentFiled}}>
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" class="w-100" id="comment" cols="30" rows="6"
                                              style="background: transparent;color: #fff;padding: 10px"></textarea>
                                    @foreach ($errors->get('comment') as $message)
                                        <span wire:loading.remove
                                              class=" text-danger w-100 d-block mt-2">{{ $message}}</span>
                                    @endforeach
                                </div>

                            </div>
                            <div class="slimScrollBar"
                                 style="background: rgb(36, 38, 68); width: 5px; position: absolute; top: 0px; opacity: 0.8; display: block; border-radius: 0px; z-index: 99; right: 1px; height: 353.552px;"></div>
                            <div class="slimScrollRail"
                                 style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(36, 38, 68); opacity: 0.2; z-index: 90; right: 1px;"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>

</div>

