
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Manage Transaction Log') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your Transaction Log and register new transaction Log here.') }}</x-slot>
    <x-slot name="btn">
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                        class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt d-none d-sm-block">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#registration" class="btn btn-primary">
                                <em class="icon ni ni-plus"></em>
                                <span>Add New</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </x-slot>
    <table class="datatable-init table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>DATE</th>
                <th>Document type</th>
                <th>Particulars</th>
                <th>API Code</th>
                <th>Requestor </th>
                <th>Quarter </th>
                <th>Item of Exp </th>
                <th>Allotment Class </th>
                <th>Requested Amount </th>
                <th>Remarks </th>
                <th width="100">Action</th>
            </tr>
        </thead>
        <tbody>
                                 @foreach ($transactions as $data)
                                <tr style="cursor: pointer">    
                                <td>{{ $loop->iteration}}</td>
                                    <td>{{ $data->tl_date}}</td>
                                    <td>{{ $data->tl_document_type}}</td>
                                    <td>{{ $data->tl_particulars}}</td>
                                    <td>{{ $data->tl_api_code}}</td>
                                    <td>{{ $data->tl_requestor}}</td>
                                    <td>{{ $data->tl_quarter}}</td>
                                    <td>{{ $data->tl_item_of_exp}}</td>
                                    <td>{{ $data->tl_allotment_class}}</td>
                                    <td>{{ $data->tl_requested_amount}}</td>
                                    <td>{{ $data->tl_remarks }}</td>
                                    <td>
                                         <button class="btn btn-xs btn-block btn-light bg-white text-dark">
                                            <em class="icon ni ni-edit"></em>
                                        </button>
                                    </td>
                                  </tr>
                                 @endforeach
                            </tbody>
                         </table>

    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-inner">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="modal fade" tabindex="-1" role="dialog" id="registration">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                    <hr class="mt-2 mb-2">
                        <form  action="{{ route('transactions.save') }}" method="POST">
                 @csrf
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_date">Date <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Date here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap focused">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-calendar-alt"></em>
                </div>
                <input type="text" data-date-format="yyyy-mm-dd" placeholder="YYYY-MM-DD" class="form-control date-picker" id="inp_date" name="inp_date">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_dt">Document type <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Document type here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_dt" name="inp_dt" placeholder="Enter Document type here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_particulars">Particulars <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Particulars here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-group">
                <textarea class="form-control" rows="2" id="inp_particulars" name="inp_p" placeholder="Enter Description here.."></textarea>
            </div>
        </div>
    </div>

    <!-- Additional fields -->

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ac">API Code <b class="text-danger">*</b></label>
                <span class="form-note">Specify the API Code here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_ac" name="inp_ac" placeholder="Enter API Code here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_requestor">Requestor <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Requestor here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_requestor" name="inp_requestor" placeholder="Enter (Optional) Requestor here.. ">
            </div>
            
        </div>
    </div>
    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_quarter">Quarter <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Quarter here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_quarter" name="inp_quarter" placeholder="Enter (Optional) Quarter here.. ">
            </div>
            
        </div>
    </div>
    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_ioe">Item of Exp <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Item of Exp here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_ioe" name="inp_ioe" placeholder="Enter (Optional) Item of Exp here.. ">
            </div>
            
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_alc">Allotment Class <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Allotment Class here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_alc" name="inp_alc" placeholder="Enter (Optional) Allotment Class here.. ">
            </div>
            
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_ra">Requested Amount <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Requested Amount here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_ra" name="inp_ra" placeholder="Enter (Optional) Requested Amount here.. ">
            </div>
            
        </div>
    </div>    

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_remarks">Remarks <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Remarks here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_remarks" name="inp_remarks" placeholder="Enter Remarks here..">
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-12 text-right">
            <hr>
            <div class="form-group mt-2 mb-2">
                <button type="reset" class="btn btn-light bg-white mx-3">
                    <em class="icon ni ni-repeat"></em>
                    Reset
                </button>
                <button type="submit" class="btn btn-light bg-white">
                    <em class="icon ni ni-save"></em>
                    Submit Record
                </button>
            </div>
        </div>
    </div>
</form>



                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
