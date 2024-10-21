
<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Manage Deficit Current Operations') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your deficit current operation and register current operation here.') }}</x-slot>
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
                                    <th>Surplus(Deficit) from Current Operation</th>
                                    <th>Surplus(Deficit) for the Period</th>
                                    <th width="100">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($decifit as $data )
                                <tr style="cursor: pointer">    
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{$data->rv_sfco}}</td>
                                    <td>{{$data->rv_sftp}}</td>
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
                                <form action="{{route('decifit.save')}}" method="POST">
                                    @csrf
                                    <div class="row mt-2">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="inp_sfco">Surplus(Deficit) from Current Operation <b class="text-danger">*</b></label>
                                                <span class="form-note">Specify the Surplus(Deficit) from Current Operation here.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-control-wrap">
                                                <select class="form-control" id="inp_sfco" name="inp_sfco">
                                                    <option value="" style="text-transform: uppercase !important;">-- SELECT SURPLUS(DEFICIT) FROM CURRENT OPERATION --</option>
                                                    <option value="Add(Deduct)">Add(Deduct)</option>
                                                    <option value="Transfers Assistance and Subsidy From">Transfers Assistance and Subsidy From</option>
                                                    <option value="Transfers Assistance and Subsidy To">Transfers Assistance and Subsidy To</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="inp_sftp">Surplus(Deficit) for the Period <b class="text-danger">*</b></label>
                                                <span class="form-note">Specify the Surplus(Deficit) for the Period here.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-control-wrap">
                                                <input type="number" pattern="[0-9]" class="form-control" id="inp_sftp" name="inp_sftp" placeholder="Enter (Optional) Surplus(Deficit) for the Period here.. ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
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
</x-app-layout>
