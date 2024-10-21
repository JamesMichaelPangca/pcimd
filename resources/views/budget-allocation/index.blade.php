<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">{{ __('Budget Allocation Dashboard') }}</x-slot>
    <x-slot
        name="subHeader">{{ __('You can manage your budget allocation and register new budget allocation here.') }}</x-slot>
    <x-slot name="btn">
        <div class="nk-block-head-content">
            <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                        class="icon ni ni-menu-alt-r"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                    <ul class="nk-block-tools g-3">
                        <li>
                            <div class="drodown">
                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                    data-bs-toggle="dropdown" aria-expanded="false"><em
                                        class="d-none d-sm-inline icon ni ni-calender-date"></em><span>Budget Allocation
                                        for Year (2025-2026) </span><em
                                        class="dd-indc icon ni ni-chevron-right"></em></a>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                    <ul class="link-list-opt no-bdr">
                                        @foreach ($budgets as $data)
                                            <li>
                                                <a href="#">
                                                    <em class="d-none d-sm-inline icon ni ni-calender-date"></em>
                                                    <span class="text-dark fw-bold">
                                                        Budget Allocation
                                                        ({{ $data->mb_year }})
                                                    </span>
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="nk-block">
        <div class="row g-gs">

            <div class="col-xxl-6">
                <div class="card h-100">
                    <div class="card-inner">
                        <div class="card-title-group align-start gx-3 mb-3">
                            <div class="card-title">
                                <h6 class="title">Budget Allocation in Years</h6>
                                <p>You can visualize your budget allocation..</p>
                            </div>
                        </div>
                        <div class="nk-sale-data-group align-center justify-between gy-3 gx-5">
                            <div class="nk-sale-data">
                                <span class="amount">₱ {{ number_format($budgets[0]->mb_amount, 2) }}</span>
                            </div>
                            <div class="nk-sale-data">
                                <span class="amount sm">{{ $budgets[0]->mb_year }}</span>
                            </div>
                        </div>
                        <div class="nk-sales-ck large pt-4">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas class="sales-overview-chart chartjs-render-monitor" id="salesOverview"
                                width="598" height="352"
                                style="display: block; width: 299px; height: 176px;"></canvas>
                        </div>
                    </div>
                </div><!-- .card -->
            </div>
            <div class="col-xxl-3 col-md-6">
                <div class="card card-full overflow-hidden">
                    <div class="nk-ecwg nk-ecwg7 h-100">
                        <div class="card-inner flex-grow-1">
                            <center>
                                <h6 class="title">Top 3 Offices Allocation</h6>
                            </center>
                            <br>
                            <div class="nk-ecwg7-ck">
                                <canvas class="ecommerce-doughnut-s1" id="orderStatistics"></canvas>
                            </div>
                            <ul class="nk-ecwg7-legends">
                                <li>
                                    <div class="title">
                                        <span class="dot dot-lg sq" data-bg="#816bff"></span>
                                        <span>MDRRMO</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <span class="dot dot-lg sq" data-bg="#13c9f2"></span>
                                        <span>MEMO</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="title">
                                        <span class="dot dot-lg sq" data-bg="#92E0AC"></span>
                                        <span>MAYORS OFFICE</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <span class="dot dot-lg sq" data-bg="#ff82b7"></span>
                                        <span>Others</span>
                                    </div>
                                </li>

                            </ul>
                        </div><!-- .card-inner -->
                    </div>
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-3 col-md-6">
                <div class="col-xxl-12 col-md-12">
                    <div class="card" style="height: 160px">
                        <div class="nk-ecwg nk-ecwg6">
                            <div class="card-inner">
                                <div class="card-title-group mt-2">
                                    <div class="card-title">
                                        <h6 class="title">Remaining Balance</h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="data-group">
                                        <div class="amount text-primary">₱
                                            <b>{{ number_format($budgets[0]->mb_amount - 784100, 2) }}</b>
                                        </div>
                                    </div>
                                    <div class="info">
                                        As of {{ date('D, F d, Y h:i A') }}
                                    </div>
                                </div>
                            </div>
                            < </div>
                        </div>
                    </div>

                    <div class="col-xxl-12 col-md-12 mt-4">
                        <div class="card" style="height: 160px">
                            <div class="nk-ecwg nk-ecwg6">
                                <div class="card-inner">
                                    <div class="card-title-group mt-2">
                                        <div class="card-title">
                                            <h6 class="title">Total Allocated Budget</h6>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="data-group">
                                            <div class="amount text-dark">₱ <b>{{ number_format(784100, 2) }}</b></div>
                                        </div>
                                        @php
                                            $current_dashboard = 784100;
                                            $total_dashboard = $budgets[0]->mb_amount;

                                            if ($total_dashboard > 0) {
                                                $percentage_dashboard = ($current_dashboard / $total_dashboard) * 100;
                                            } else {
                                                $percentage_dashboard = 0;
                                            }
                                        @endphp

                                        <div class="info">
                                            <span
                                                class="change up text-{{ $percentage_dashboard == 0 ? 'dark' : 'success' }}">

                                                @if ($percentage_dashboard != 0)
                                                    <em class="icon ni ni-arrow-long-up"></em>
                                                    {{ number_format($percentage_dashboard, 2) }}
                                                @else
                                                    {{ number_format(0, 2) }}
                                                @endif
                                                %
                                            </span>
                                            <span>of Allocated Budget Distributed</span>
                                        </div>
                                    </div>
                                </div><!-- .card-inner -->
                            </div><!-- .nk-ecwg -->
                        </div><!-- .card -->
                    </div>
                </div>


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
                                            <td>Municipality Budget for Year (<b>{{ $data->mb_year }}</b>) Allocation
                                            </td>
                                            <td class="text-dark fw-bold">₱ {{ number_format($data->mb_amount, 2) }}
                                            </td>
                                            <td class="text-success fw-bold">₱ {{ number_format(784100, 2) }}</td>
                                            <td class="pt-3">
                                                <div class="progress progress-md progress-alt bg-transparent">
                                                    <div class="progress-bar"
                                                        data-progress="{{ number_format($percentage, 2) }}"
                                                        style="width: {{ number_format($percentage, 2) }}%;">
                                                    </div>
                                                    <div class="progress-amount">{{ number_format($percentage, 2) }}%
                                                    </div>
                                                </div>
                                            </td>
                                            <td><b class="text-primary">₱
                                                    {{ number_format($data->mb_amount - 784100, 2) }}</b></td>
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


        <script src="/vendor/js/charts/chart-ecommerce.js?ver=3.0.3"></script>
        @include('budget-allocation.script');

</x-app-layout>
