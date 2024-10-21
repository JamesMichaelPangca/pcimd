
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Manage General Journal') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your general journal and register new general journal here.') }}</x-slot>
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
                                    <th>Account and Explanation</th>
                                    <th>UACS Object Code</th>
                                    <th>Amount</th>
                                    <th width="100">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($journals as $data )
                                <tr style="cursor: pointer">
                                     <td>{{ $loop->iteration }}</td>
                                    <td>{{$data->jp_accounts_explanation}}</td>
                                    <td>{{$data->jp_uacs_object_code}}</td>
                                    <td>{{$data->jp_amount}}</td>
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
               
              
                        <form action="{{route('journals.save')}}" method="POST"> 
                        @csrf
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_aae">Account and Explanation <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Account and Explanation here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_aae" name="inp_aae" placeholder="Enter (Optional) Account and Explanation here.. ">
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_uoc">UACS Object Code <b class="text-danger">*</b></label>
                <span class="form-note">Specify the UACS Object Code here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_uoc" name="inp_uoc" placeholder="Enter (Optional) UACS Object Code here.. ">
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
                <input type="number" class="form-control" id="inp_amount" name="inp_amount" placeholder="Enter (Optional) Amount here.. ">
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
