
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Manage Current Operation Expenses') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your current operation expenses and register current operation expense here.') }}</x-slot>
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
                                    <th>Less Current Operating Expenses</th>
                                    <th>Current Operating Expenses</th>
                                    <th width="100">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($operation as $data )
                                <tr style="cursor: pointer">    
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{$data->rv_tlcoe}}</td>
                                    <td>{{$data->rv_coe}}</td>                            
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
                                <form action="{{ route('operation.save') }}" method="POST">
                                    @csrf
                                    
                                    <!-- Row for Less Current Operating Expenses -->
                                    <div class="row mt-2 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="inp_lcoe">Less Current Operating Expenses <b class="text-danger">*</b></label>
                                                <span class="form-note">Specify the Less Current Operating Expenses here.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-control-wrap">
                                                <select class="form-control" id="inp_lcoe" name="inp_lcoe">
                                                    <option value="" style="text-transform: uppercase !important;">-- SELECT LESS CURRENT OPERATING EXPENSES --</option>
                                                    <option value="Personal Service">Personal Service</option>
                                                    <option value="Maintenance and Other Operating Expenses">Maintenance and Other Operating Expenses</option>
                                                    <option value="Non-Cash Expenses">Non-Cash Expenses</option>
                                                    <option value="Financial Expenses">Financial Expenses</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Row for Current Operating Expenses -->
                                    <div class="row mt-2 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="inp_coe">Current Operating Expenses <b class="text-danger">*</b></label>
                                                <span class="form-note">Specify the Current Operating Expenses here.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right">
                                                    <em class="icon ni ni-info"></em>
                                                </div>
                                                <input type="number" pattern="[0-9]" class="form-control" id="inp_coe" name="inp_coe" placeholder="Enter (Optional) Current Operating Expenses here..">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5">
                                   </div>
                         <div class="col-lg-7" style="float: right">
                               <hr>
                         </div>

                         <div class="col-lg-5">
                            </div>
                         <div class="col-lg-7 justify-end" style="float: right">
                                <hr>
                                <div class="form-group mt-2 mb-2 justify-end">
                                 <button type="reset" class="btn btn-light bg-white mx-3">
                                        <em class="icon ni ni-repeat"></em>
                                      Reset
                                    </button>
                                   <button  type="submit" class="btn btn-light bg-white">
                                      <em class="icon ni ni-save"></em>
                                       Submit Record
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
