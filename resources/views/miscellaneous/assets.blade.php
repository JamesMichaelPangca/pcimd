
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Manage Assets Entries') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your assets entries and register assets entry here.') }}</x-slot>
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
                <th>Current Assets</th>
                <th>Total Current Assets</th>
                <th>Non-Current Assets</th>
                <th>Total-Non Assets </th>
                <th width="100">Action</th>
            </tr>
        </thead>
        <tbody>
                                 @foreach ($assets as $data )
                                <tr style="cursor: pointer">    
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{$data->as_ca}}</td>
                                    <td>{{$data->as_tca}}</td>
                                    <td>{{$data->as_nca}}</td>
                                    <td>{{$data->as_tna}}</td>
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
                        <form action="{{route('assets.save')}}" method="POST">
                        @csrf
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_ca">Current Assets <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Current Assets here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-control" id="inp_ca" name="inp_ca">
                <option value=""  style="text-transform: uppercase !important;">-- SELECT CURRENT ASSETS --</option>
                    <option value="Cash and Cash Equivalents" >Cash and Cash Equivalents</option>
                <option value="Investments">Investments</option>
                <option value="Receivables" >Receivables</option>
                <option value="Inventories">Inventories</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_tca">Total Current Assets <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Total Current Assets here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_tca" name="inp_tca" placeholder="Enter (Optional) Total Current Assets here.. ">
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_nca">Non-Current Assets <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Non-Current Assets here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-control" id="inp_nca" name="inp_nca">
                <option value=""  style="text-transform: uppercase !important;">-- SELECT NON-CURRENT ASSETS --</option>
                    <option value="Receivables" >Receivables</option>
                <option value="Advance to Contractors" >Advance to Contractors</option>
                <option value="Investment" >Investment</option>
                <option value="Investment Properties" >Investment Properties</option>
                <option value="Property Plant Equipment" >Property Plant Equipment</option>
                <option value="Biological Assets" >Biological Assets</option>
                <option value="Intangible Assets" >Intangible Assets</option>
            </select>
                
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_tna">Total-Non Assets <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Total-Non Assets here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_tna" name="inp_tna" placeholder="Enter (Optional) Total-Non Assets here.. ">
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
