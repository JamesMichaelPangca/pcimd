
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Manage Liability Entries') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your liability entries and register liability entry here.') }}</x-slot>
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
                <th>Current Liabilities</th>
                <th>Total Current Liabilities</th>
                <th>Non-Current Assets</th>
                <th>Total Liabilities</th>
                <th width="100">Action</th>
                          </tr>
                          </thead>
                      <tbody>
                                 @foreach ($liabilities as $data )
                                <tr style="cursor: pointer">    
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{$data->as_cl}}</td>
                                    <td>{{$data->as_tcl}}</td>
                                    <td>{{$data->as_ncas}}</td>
                                    <td>{{$data->as_tl}}</td>
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
                                <form action="{{route('liabilities.save')}}" method="POST">
                                    @csrf
                                    
                                    <div class="row mt-2">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="inp_cl">Current Liabilities <b class="text-danger">*</b></label>
                                                <span class="form-note">Specify the Current Liabilities here.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-control-wrap">
                                                <select class="form-control" id="inp_cl" name="inp_cl">
                                                    <option value="" style="text-transform: uppercase !important;">-- SELECT CURRENT LIABILITIES --</option>
                                                    <option value="Financial Liabilities">Financial Liabilities</option>
                                                    <option value="Inter-Agency Payables">Inter-Agency Payables</option>
                                                    <option value="Intra-Agency Payables">Intra-Agency Payables</option>
                                                    <option value="Trust Liabilities">Trust Liabilities</option>
                                                    <option value="Other Liabilities">Other Liabilities</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="inp_tcl">Total Current Liabilities <b class="text-danger">*</b></label>
                                                <span class="form-note">Specify the Total Current Liabilities here.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-control-wrap">
                                                <input type="number" pattern="[0-9]" class="form-control" id="inp_tcl" name="inp_tcl" placeholder="Enter (Optional) Total Current Liabilities here..">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="inp_ncas">Non-Current Assets <b class="text-danger">*</b></label>
                                                <span class="form-note">Specify the Non-Current Assets here.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-control-wrap">
                                                <select class="form-control" id="inp_ncas" name="inp_ncas">
                                                    <option value="" style="text-transform: uppercase !important;">-- SELECT NON-CURRENT ASSETS --</option>
                                                    <option value="Financial Liabilities">Financial Liabilities</option>
                                                    <option value="Inter-Agency Payables">Inter-Agency Payables</option>
                                                    <option value="Intra-Agency Payables">Intra-Agency Payables</option>
                                                    <option value="Trust Liabilities">Trust Liabilities</option>
                                                    <option value="Deferred Credit /Unearned Income">Deferred Credit / Unearned Income</option>
                                                    <option value="Provisions">Provisions</option>
                                                    <option value="Other Payables">Other Payables</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="inp_tl">TOTAL LIABILITIES <b class="text-danger">*</b></label>
                                                <span class="form-note">Specify the TOTAL LIABILITIES here.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-control-wrap">
                                                <input type="number" pattern="[0-9]" class="form-control" id="inp_tl" name="inp_tl" placeholder="Enter (Optional) TOTAL LIABILITIES here..">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                        <div class="col-lg-12 text-right">
                                            <hr>
                                            <div class="form-group mt-2 mb-2 d-flex justify-content-end">
                                                <button type="reset" class="btn btn-light bg-white mx-3">
                                                    <em class="icon ni ni-repeat"></em> Reset
                                                </button>
                                                <button type="submit" class="btn btn-light bg-white">
                                                    <em class="icon ni ni-save"></em> Submit Record
                                                </button>
                                    </div>
                            </div>
        
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
