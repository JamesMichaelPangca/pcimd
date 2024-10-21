<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Manage Revenue Entries') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your revenue entries and register revenue entry here.') }}</x-slot>
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
                                    <th>Revenue </th>
                                    <th>Total Revenue</th>
                                    <th width="100">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($revenue as $data )
                                <tr style="cursor: pointer">    
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{$data->rv_info}}</td>
                                    <td>{{$data->rv_tr}}</td>
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
                        <form action="{{route('revenue.save')}}" method="POST"> 
                        @csrf
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_revenue">Revenue <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Revenue here.</span>
            </div>                
        </div>
        <div class="col-lg-7">
        <div class="form-control-wrap">
        <select class="form-control" id="inp_revenue" name="inp_revenue">
                <option value="" style="text-transform: uppercase !important;">-- SELECT REVENUE --</option>
                    <option value="Tax Income">Tax Income</option>
                <option value="Share from Internal Revenue Collections" >Share from Internal Revenue Collections</option>
                <option value="Other Share From National Taxes" >Other Share From National Taxes</option>
                <option value="Service and Business Income" >Service and Business Income</option>
                <option value="Shares Grants and Donations" >Shares Grants and Donations</option>
                <option value="Gains">Gains</option>
                <option value="Other Income">Other Income</option>
            </select> 
        </div>
        
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_tr">Total Revenue <b class="text-danger">*</b></label>
                <span class="form-note">Specify the Total Revenue here.</span>
            </div>             
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_tr" name="inp_tr" placeholder="Enter (Optional) Total Revenue here.. ">
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
