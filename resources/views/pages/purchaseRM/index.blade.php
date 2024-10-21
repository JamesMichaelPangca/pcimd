
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Manage Purchase Request Monitoring') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your Purchase Request Monitoring and register new purchase request monitoring here.') }}</x-slot>
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
                                    <th>DATE PREPARED</th>
                                    <th>PR NUMBER</th>
                                    <th>DU</th>
                                    <th>ITEM DESCRIPTION</th>
                                    <th>API CODE</th>
                                    <th>QTY</th>
                                    <th>UNIT</th>
                                    <th>UNIT COST</th>
                                    <th>TOTAL COST</th>
                                    <th>PO NUMBER</th>
                                    <th>ITEM DESCRIPTION</th>
                                    <th>QTY</th>
                                    <th>UNIT</th>
                                    <th>UNIT COST</th>
                                    <th>TOTAL COST</th>
                                    <th>SUPPLIER</th>
                                    <th>BUR #</th>
                                    <th>STATUS</th>
                                    <th width="100">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($purchase as $data )
                                <tr style="cursor: pointer">
                                     <td>{{ $loop->iteration }}</td>
                                    <td>{{$data->prm_date}}</td>
                                    <td>{{$data->prm_pne}}</td>
                                    <td>{{$data->prm_du}}</td>
                                    <td>{{$data->prm_idw}}</td>
                                    <td>{{$data->prm_ida}}</td>
                                    <td>{{$data->prm_ac}}</td>
                                    <td>{{$data->prm_qtya}}</td>
                                    <td>{{$data->prm_ucb}}</td>
                                    <td>{{$data->prm_tc}}</td>
                                    <td>{{$data->prm_pn}}</td>
                                    <td>{{$data->prm_idb}}</td>
                                    <td>{{$data->prm_qty}}</td>
                                    <td>{{$data->prm_unit}}</td>
                                    <td>{{$data->prm_uc}}</td>
                                    <td>{{$data->prm_tcb}}</td>
                                    <td>{{$data->prm_supplier}}</td>
                                    <td>{{$data->prm_b_number}}</td>
                                    <td>{{$data->prm_status}}</td>
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
<form action="{{route('purchase.save')}}" method="POST"> 
    @csrf
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_dp">DATE PREPARED <b class="text-danger">*</b></label>
                <span class="form-note">Specify the DATE PREPARED here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap focused">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-calendar-alt"></em>
                </div>
                <input type="text" data-date-format="yyyy-mm-dd" id="inp_dp" name="inp_dp" placeholder="YYYY-MM-DD" class="form-control date-picker" >
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_pn">PR NUMBER <b class="text-danger">*</b></label>
                <span class="form-note">Specify the PR NUMBER here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" class="form-control" id="inp_pn" name="inp_pn" placeholder="Enter (Optional) PR NUMBER here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_du">DU <b class="text-danger">*</b></label>
                <span class="form-note">Specify the DU here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_du" name="inp_du" placeholder="Enter (Optional) DU here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_id">ITEM DESCRIPTION <b class="text-danger">*</b></label>
                <span class="form-note">Specify the ITEM DESCRIPTION here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <textarea class="form-control" rows="2" placeholder="Enter Description here.." id="inp_id" name="inp_id"></textarea>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ac">API CODE <b class="text-danger">*</b></label>
                <span class="form-note">Specify the API CODE here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_ac" name="inp_ac" placeholder="Enter (Optional) API CODE here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_qty">QTY <b class="text-danger">*</b></label>
                <span class="form-note">Specify the QTY here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" class="form-control" id="inp_qty" name="inp_qty" placeholder="Enter (Optional) QTY here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_unit">UNIT <b class="text-danger">*</b></label>
                <span class="form-note">Specify the UNIT here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" class="form-control" id="inp_unit" name="inp_unit" placeholder="Enter (Optional) UNIT here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_uc">UNIT COST <b class="text-danger">*</b></label>
                <span class="form-note">Specify the UNIT COST here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" class="form-control" id="inp_uc" name="inp_uc" placeholder="Enter (Optional) UNIT COST here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_tc">TOTAL COST <b class="text-danger">*</b></label>
                <span class="form-note">Specify the TOTAL COST here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" class="form-control" id="inp_tc" name="inp_tc" placeholder="Enter (Optional) TOTAL COST here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_po">PO NUMBER <b class="text-danger">*</b></label>
                <span class="form-note">Specify the PO NUMBER here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text" class="form-control" id="inp_po" name="inp_po" placeholder="Enter (Optional) PO NUMBER here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_item_desc">ITEM DESCRIPTION <b class="text-danger">*</b></label>
                <span class="form-note">Specify the ITEM DESCRIPTION here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
            <textarea class="form-control" rows="2" placeholder="Enter Description here.." id="inp_item_desc" name="inp_item_desc"></textarea>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_qtye">QTY <b class="text-danger">*</b></label>
                <span class="form-note">Specify the QTY here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="number" class="form-control" id="inp_qtye" name="inp_qtye" placeholder="Enter (Optional) QTY here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_unite">UNIT <b class="text-danger">*</b></label>
                <span class="form-note">Specify the UNIT here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" id="inp_unite" name="inp_unite" placeholder="Enter (Optional) UNIT here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_uce">UNIT COST <b class="text-danger">*</b></label>
                <span class="form-note">Specify the UNIT COST here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" id="inp_uce" name="inp_uce" placeholder="Enter (Optional) UNIT COST here..">
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_tce">TOTAL COST <b class="text-danger">*</b></label>
                <span class="form-note">Specify the TOTAL COST here.</span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" id="inp_tce" name="inp_tce" placeholder="Enter (Optional) TOTAL COST here..">
            </div>
        </div>
    </div>
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
        <div class="form-group">
                <label class="form-label" for="inp_supplier">SUPPLIER <b class="text-danger">*</b></label>
                <span class="form-note">Specify the SUPPLIER here.</span>
            </div>              
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="text"  class="form-control" id="inp_supplier" name="inp_supplier" placeholder="Enter (Optional) SUPPLIER here.. ">
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_bwe">BUR # <b class="text-danger">*</b></label>
                <span class="form-note">Specify the BUR # here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <div class="form-control-wrap">
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-info"></em>
                </div>
                <input type="number" pattern="[0-9]" class="form-control" id="inp_bwe" name="inp_bwe" placeholder="Enter (Optional) BUR # here.. ">
            </div>
            
        </div>
    </div>    
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            
            <div class="form-group">
                <label class="form-label" for="inp_status">STATUS <b class="text-danger">*</b></label>
                <span class="form-note">Specify the STATUS here.</span>
            </div>
                           
        </div>
        <div class="col-lg-7">
            
            <select class="form-select" id="inp_status" name="inp_status">
                <option value="" data-select2-id="3" style="text-transform: uppercase !important;">-- SELECT STATUS --</option>
                    <option value="Pending" data-select2-id="16">Pending</option>
                <option value="In-progress" data-select2-id="16">In-progress</option>
                <option value="Complete" data-select2-id="16">Complete</option>
            </select>
                
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
