<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Manage Budget Allocation') }}</x-slot>
    <x-slot name="subHeader">{{ __('You can manage your budget allocation and register new budget allocation here.') }}</x-slot>
    <x-slot name="btn">
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                        class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt d-none d-sm-block">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit" class="btn btn-primary">
                                <em class="icon ni ni-plus"></em>
                                <span>Add New Budget</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </x-slot>

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
                        <table class="datatable-init-export table table-hover">
                            <thead>
                                <tr>
                                    <th width="50">#</th>
                                    <th>Project List</th>
                                    <th width="150">Budget</th>
                                    <th width="150">Allocated</th>
                                    <th>Budget Distributed</th>
                                    <th width="170">Remaining Balance</th>
                                    <th width="50" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $num = 1;
                                @endphp
                                @foreach ($budgets as $data)
                                    @php
                                        $current = 784100; 
                                        $total = $data->mb_amount; 

                                        if ($total > 0) {
                                            $percentage = ($current / $total) * 100;
                                        } else {
                                            $percentage = 0;
                                        }
                                    @endphp
                                    <tr style="cursor: pointer;">
                                        <td>{{ $num++ }}.</td>
                                        <td>Municipality Budget for Year (<b>{{ $data->mb_year }}</b>) Allocation</td>
                                        <td class="text-dark fw-bold">₱ {{ number_format($data->mb_amount, 2) }}</td>
                                        <td class="text-success fw-bold">₱ {{ number_format(784100, 2) }}</td>
                                        <td class="pt-3">
                                            <div class="progress progress-md progress-alt bg-transparent">
                                                <div class="progress-bar"
                                                    data-progress="{{ number_format($percentage, 2) }}"
                                                    style="width: {{ number_format($percentage, 2) }}%;">
                                                </div>
                                                <div class="progress-amount">{{ number_format($percentage, 2) }}%</div>
                                            </div>
                                        </td>
                                        <td><b class="text-primary">₱ {{ number_format($data->mb_amount - 784100, 2) }}</b></td>
                                        <td>
                                            <center>
                                                <button onclick="go_to('/projects/details/1')"
                                                    class="btn btn-xs btn-block btn-light bg-white">
                                                    <em class="icon ni ni-eye"></em>
                                                </button>
                                            </center>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('budget-allocation.modal.modal')

    <script src="/vendor/js/charts/chart-ecommerce.js?ver=3.0.3"></script>
    <script src="/vendor/js/charts/chart-sales.js?ver=3.0.3"></script>
</x-app-layout>
