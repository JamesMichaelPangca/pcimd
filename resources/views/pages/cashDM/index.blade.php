
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Manage Cash Disbursement Monitoring') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage yourCash Disbursement Monitoring and register new cash disbursement monitoring here.') }}</x-slot>
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
                <th>Date</th>
                <th>DV #</th>
                <th>ORS/BURS</th>
                <th>PARTICULARS</th>
                <th>PO #/PAYROLL # </th>
                <th>PAYEE</th>
                <th>Item of Expenditure</th>
                <th>UACS CODE</th>
                <th>DEBIT</th>
                <th>CREDIT</th>
                <th>API</th>
                <th width="100">Action</th>
            </tr>
                                </thead>
                                <tbody>
                                 @foreach ($cashs as $data )
                                <tr style="cursor: pointer">    
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->cdm_date }}</td>
                                    <td>{{ $data->cdm_dv_number }}</td>
                                    <td>{{ $data->cdm_ors_burs_number }}</td>
                                    <td>{{ $data->cdm_particulars }}</td>
                                    <td>{{ $data->cdm_po_payroll_number }}</td>
                                    <td>{{ $data->cdm_payee }}</td>
                                    <td>{{ $data->cdm_item_of_expenditure }}</td>
                                    <td>{{ $data->cdm_uacs_code }}</td>
                                    <td>{{ $data->cdm_debit }}</td>
                                    <td>{{ $data->cdm_credit}}</td>
                                    <td>{{ $data->cdm_api}}</td>
                                    <td><button class="btn btn-xs btn-block btn-light bg-white text-dark">
                                            <em class="icon ni ni-edit"></em>
                                        </button></td>
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

                 <form action="{{ route('cashs.save') }}" method="POST">
                        @csrf

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_date">DATE <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Date here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap focused">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-calendar-alt"></em>
                </div>
                <input type="text" data-date-format="yyyy-mm-dd" placeholder="YYYY-MM-DD" class="form-control date-picker" name="inp_date" id="inp_date">

            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_d">DV # <b class="text-danger">*</b></label>
                <span class="form-note">Specify the DV # here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_d" name="inp_d" placeholder="Enter (Optional) DV # here.. ">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_o">ORS/BURS # <b class="text-danger">*</b></label>
                <span class="form-note">Specify the ORS/BURS # here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_o" name="inp_o" placeholder="Enter (Optional) ORS/BURS # here.. ">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_particulars">PARTICULARS <b class="text-danger">*</b></label>
                <span class="form-note">Specify the PARTICULARS here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-group">
                <textarea class="form-control" rows="2" id="inp_particulars" name="inp_particulars" placeholder="Enter Description here.."></textarea>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_p">PO #/PAYROLL # <b class="text-danger">*</b></label>
                <span class="form-note">Specify the PO #/PAYROLL # here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_p" name="inp_p" placeholder="Enter (Optional) PO #/PAYROLL # here.. ">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_payee">PAYEE <b class="text-danger">*</b></label>
                <span class="form-note">Specify the PAYEE here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_payee" name="inp_payee" placeholder="Enter (Optional) PAYEE here.. ">
            </div>
        </div>
    </div>

    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ioe">Item of Expenditure <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Item of Expenditure here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_ioe" name="inp_ioe" placeholder="Enter (Optional) Item of Expenditure here.. ">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_uc">UACS CODE <b class="text-danger">*</b></label>
                <span class="form-note">Specify the UACS CODE here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_uc" name="inp_uc" placeholder="Enter (Optional) UACS CODE here.. ">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_debit">DEBIT <b class="text-danger">*</b></label>
                <span class="form-note">Specify the DEBIT here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" class="form-control" id="inp_debit" name="inp_debit" placeholder="Enter (Optional) DEBIT here.. ">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_credit">CREDIT <b class="text-danger">*</b></label>
                <span class="form-note">Specify the CREDIT here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" class="form-control" id="inp_credit" name="inp_credit" placeholder="Enter (Optional) CREDIT here.. ">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_api">API <b class="text-danger">*</b></label>
                <span class="form-note">Specify the API here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_api" name="inp_api" placeholder="Enter (Optional) API here.. ">
            </div>
        </div>
    </div>

    <div class="row mt-2 justify-content-end">
        <div class="col-lg-7">
            <div class="form-group mt-2 mb-2">
                <button type="reset" class="btn btn-light bg-white mx-3">
                    <em class="icon ni ni-repeat"></em> Reset
                </button>
                <button type="submit" class="btn btn-light bg-white">
                    <em class="icon ni ni-save"></em> Submit Record
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
        </div>
    </div>
</x-app-layout>
