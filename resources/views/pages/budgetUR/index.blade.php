
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Manage Budget Utilization Report') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your Budget Utilization Report and register new budget utilization report here.') }}</x-slot>
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
                <th>Old UACS</th>
                <th>New UACS</th>
                <th>Account Group </th>
                <th>Ref </th>
                <th>Particulars</th>
                <th>Amount</th>
                <th>Allotment Class</th>
                <th>API </th>
                <th width="100">Action</th>
            </tr>
        </thead>
        <tbody>
                                 @foreach ($budgets as $data )
                                <tr style="cursor: pointer">    
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->bur_date }}</td>
                                    <td>{{ $data->bur_old_uacs }}</td>
                                    <td>{{ $data->bur_new_uacs }}</td>
                                    <td>{{ $data->bur_account_group }}</td>
                                    <td>{{ $data->bur_ref }}</td>
                                    <td>{{ $data->bur_particulars }}</td>
                                    <td>{{ $data->bur_amount }}</td>
                                    <td>{{ $data->bur_allotment_class }}</td>
                                    <td>{{ $data->bur_api    }}</td>
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
                        <form  action="{{ route('budgets.save') }}" method="POST">
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
                <label class="form-label" for="inp_ou">Old UACS <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Old UACS here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_ou" name="inp_ou" placeholder="Enter (Optional) Old UACS here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_nu">New UACS <b class="text-danger">*</b></label>
                <span class="form-note">Specify the New UACS here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_nu" name="inp_nu" placeholder="Enter (Optional) New UACS here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ag">Account Group <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Account Group here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_ag" name="inp_ag" placeholder="Enter (Optional) Account Group here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ref">Ref <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Ref here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_ref" name="inp_ref" placeholder="Enter (Optional) Ref here..">
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
                <textarea class="form-control" rows="2" id="inp_particulars" name="inp_particulars" placeholder="Enter Description here.."></textarea>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_amount">Amount <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Amount here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" class="form-control" id="inp_amount" name="inp_amount" placeholder="Enter (Optional) Amount here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ac">Allotment Class <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Allotment Class here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_ac" name="inp_ac" placeholder="Enter (Optional) Allotment Class here..">
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
                <input type="text" class="form-control" id="inp_api" name="inp_api" placeholder="Enter (Optional) API here..">
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-5"></div>
        <div class="col-lg-7">
            <hr>
            <div class="form-group mt-2 mb-2 justify-end">
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
