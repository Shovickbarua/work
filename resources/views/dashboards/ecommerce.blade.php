

<x-app-layout>
    <div class="space-y-8">
        <div class="block sm:flex items-center justify-between mb-6">
            <x-breadcrumb :pageTitle="$pageTitle"/>
        </div>
        {{-- Dashboard Top Card --}}
        <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-7">
            <div class="dasboardCard bg-white dark:bg-slate-800 rounded-md px-5 py-4 flex items-center justify-between bg-center bg-cover bg-no-repeat" style="background-image:url('{{ asset('/images/ecommerce-wid-bg.png') }}')">
                <div class="w-56 ">
                    <h3 class="font-Inter font-normal text-white text-lg">
                        {{ __('Good evening') }},
                    </h3>
                    <h3 class="font-Interfont-medium text-white text-2xl pb-2">
                        {{ auth()->user()->name }}
                    </h3>
                    <p class="font-Intertext-base text-white font-normal">
                        {{ __('Welcome to dashcode') }}
                    </p>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800 rounded-md px-5 py-4 ">
                <div class="pl-14 relative">
                    <div
                            class="w-10 h-10 rounded-full bg-sky-100 text-sky-800 text-base flex items-center justify-center absolute left-0 top-2">
                        <iconify-icon icon="ph:shopping-cart-simple-bold"></iconify-icon>
                    </div>
                    <h4 class="font-Interfont-normal text-sm text-textColor dark:text-white pb-1">
                        {{ __('Total revenue') }}
                    </h4>
                    <p class="font-Intertext-xl text-black dark:text-white font-medium">
                        {{ $data['revenue']['currencySymbol'] .$data['revenue']['total'] }}
                    </p>
                </div>
                <div class="ml-auto w-24">
                    <div id="EChart"></div>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800 rounded-md px-5 py-4 ">
                <div class="pl-14 relative">
                    <div
                            class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-800 text-base flex items-center justify-center absolute left-0 top-2">
                        <iconify-icon icon="teenyicons:box-outline"></iconify-icon>
                    </div>
                    <h4 class="font-Interfont-normal text-sm text-textColor dark:text-white pb-1">
                        {{ __('Products sold') }}
                    </h4>
                    <p class="font-Intertext-xl text-black dark:text-white font-medium">
                        {{ $data['productSold']['total'] }}
                    </p>
                </div>
                <div class="ml-auto w-24">
                    <div id="EChart2"></div>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800 rounded-md px-5 py-4 ">
                <div class="pl-14 relative">
                    <div
                            class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-800 text-base flex items-center justify-center absolute left-0 top-2">
                        <iconify-icon icon="carbon:growth"></iconify-icon>
                    </div>
                    <h4 class="font-Interfont-normal text-sm text-textColor dark:text-white pb-1">
                        @lang("Growth")
                    </h4>
                    <p class="font-Intertext-xl text-black dark:text-white font-medium">
                        {{ $data['growth']['preSymbol'].' '.$data['growth']['total'].$data['growth']['postSymbol'] }}
                    </p>
                </div>
                <div class="ml-auto w-24">
                    <div id="EChart3"></div>
                </div>
            </div>
        </div>

        {{-- Dashboard Chart --}}
        <div class="xl:flex gap-y-8 xl:gap-8 overflow-hidden">
            <div class="xl:w-8/12 bg-white dark:bg-slate-800 overflow-hidden rounded-md">
                <div class="card">
                    <div class="card-header border-0 align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Monthly Order Delivery Ratio</h4>
                        <div>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                ALL
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                1M
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                6M
                            </button>
                            <button type="button" class="btn btn-soft-primary btn-sm">
                                1Y
                            </button>
                        </div>
                    </div><!-- end card header -->


                        {{-- <div class="flex ">
                            <div >
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value"
                                            data-target="7585">0</span></h5>
                                    <p class="text-muted mb-0">Orders</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div >
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1">$<span class="counter-value"
                                            data-target="22.89">0</span>k</h5>
                                    <p class="text-muted mb-0">Earnings</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div >
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value"
                                            data-target="367">0</span></h5>
                                    <p class="text-muted mb-0">Refunds</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div >
                                <div
                                    class="p-3 border border-dashed border-start-0 border-end-0">
                                    <h5 class="mb-1 text-success"><span class="counter-value"
                                            data-target="18.92">0</span>%</h5>
                                    <p class="text-muted mb-0">Conversation Ratio</p>
                                </div>
                            </div>
                            <!--end col-->
                        </div> --}}



                        <div class="p-4">
                            <div id="apex-charts"></div>
                        </div>

                </div><!-- end card -->

            </div>
            {{-- Statistics Chats  --}}
            <div class="mt-8 xl:mt-0 xl:w-4/12 bg-white  dark:bg-slate-800 rounded-md w-full">
                <h3 class="px-6 py-5 font-Interfont-normal text-black dark:text-white text-xl border-b border-b-slate-100 dark:border-b-slate-900">
                    {{ __('Statistics') }}
                </h3>
                <div class="overflow-hidden px-6 py-5 grid md:grid-cols-2 gap-4">
                    <div class="statisticsChartCard bg-black-100 p-2 rounded-md">
                        <div>
                            <h5 class="text-sm text-slate-600 dark:text-slate-300 mb-[6px]"> {{ __('Orders') }} </h5>
                            <h3 class="text-lg text-slate-900 dark:text-slate-300 font-medium mb-[6px]">{{ $data['lastWeekOrder']['total'] }}</h3>
                            <p class="font-normal text-xs text-slate-600 dark:text-slate-300">
                                <span class="text-red-400">
                                    {{ $data['lastWeekOrder']['preSymbol'].' '.$data['lastWeekOrder']['percentage'] }}%
                                </span>
                                {{ __('From last week.') }}
                            </p>
                        </div>
                        <div id="columnChart" class="mt-1"></div>
                    </div>
                    <div class="statisticsChartCard bg-black-100 p-2 rounded-md">
                        <div>
                            <h5 class="text-sm text-slate-600 dark:text-slate-300 mb-[6px]">{{ __('Profit') }}</h5>
                            <h3 class="text-lg text-slate-900 dark:text-slate-300 font-medium mb-[6px]">
                                {{ $data['lastWeekProfit']['total'] }}
                            </h3>
                            <p class="font-normal text-xs text-slate-600 dark:text-slate-300">
                                <span class="text-indigo-400">
                                   {{ $data['lastWeekProfit']['preSymbol'].' '.$data['lastWeekProfit']['percentage'] }}%
                                </span>
                                {{ __('From last week.') }}
                            </p>
                        </div>
                        <div id="lineChart" class="mt-1"></div>
                    </div>
                    <div class="statisticsChartCard bg-black-100 p-2 rounded-md  md:col-span-2 md:flex items-center justify-between">
                        <div>
                            <h5 class="text-sm text-slate-600 dark:text-slate-300 mb-[6px]">{{ $data['lastWeekOverview']['title'] }}</h5>
                            <h3 class="text-lg text-slate-900 dark:text-slate-300 font-medium mb-[6px]">{{ $data['lastWeekOverview']['amount'] }}</h3>
                            <p class="font-normal text-xs text-slate-600 dark:text-slate-300">
                                <span class="text-indigo-400">
                                    {{ $data['lastWeekOverview']['percentage'] }}%
                                </span>
                                {{ __('From last Week') }}
                            </p>
                        </div>
                        <div  id="donutChart"></div>
                    </div>
                </div>
            </div>
        </div>


        {{-- DashBoard Top Customer Area --}}



    </div>
    @push('scripts')
    {{-- <script type="text/javascript" src="{{asset('assets/js/apexcharts.min.js') }}"></script> --}}
        <script type="module">

var options = {
          series: [{
          name: 'Revenue',
          type: 'column',
          data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30,10]
        }, {
          name: 'Net Profit',
          type: 'area',
          data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43,20]
        }, {
          name: 'Cash Flow',
          type: 'line',
          data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39,30]
        }],
          chart: {
          height: 350,
          type: 'line',
          stacked: false,
        },
        stroke: {
          width: [0, 2, 5],
          curve: 'smooth'
        },
        plotOptions: {
          bar: {
            columnWidth: '50%'
          }
        },

        fill: {
          opacity: [0.85, 0.25, 1],
          gradient: {
            inverseColors: false,
            shade: 'light',
            type: "vertical",
            opacityFrom: 0.85,
            opacityTo: 0.55,
            stops: [0, 100, 100, 100]
          }
        },
        // labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jly',
        //   'Aug', 'Sep', 'Oct', 'Nov','Dec'
        // ],
        markers: {
          size: 0
        },
        xaxis: {
    categories: ['Jan', 'Feb', 'Mar','Apr','May','Jun','Jly','Aug','Sep','Oct','Nov','Dec'
    ],
    },
        // yaxis: {
        // //   title: {
        // //     text: 'Points',
        // //   },
        //   min: 0
        // },
        tooltip: {
          shared: true,
          intersect: false,
          y: {
            formatter: function (y) {
              if (typeof y !== "undefined") {
                return y.toFixed(0) + " points";
              }
              return y;

            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#apex-charts"), options);
        chart.render();






            var options = {
    series: [{
        name: 'Revenue',

    data: [44, 55, 41, 67, 22, 43, 21, 49,44, 55, 41, 67]
    },
        {
        name: 'Net Profit',

    data: [13, 23, 20, 8, 13, 27, 33, 12,13, 23, 20, 8]
        },

        {
        name: 'Cash Flow',

    data: [11, 17, 15, 15, 21, 14, 15, 13,11, 17, 15, 15]
        }],

    chart: {
    type: 'bar',
        height: 350,
    stacked: true,
        stackType: '100%',

    },
    colors: ['#4768F6', '#F2916A','#63E8FA'],
    plotOptions: {
        bar: {
          horizontal: false,
          borderRadius: 7,
          endingShape: 'rounded'
        },
      },
      dataLabels: {
        enabled: false,
      },
  responsive: [{
    breakpoint: 480,
    options: {
      legend: {
        position: 'bottom',
        offsetX: 10,
            offsetY: 10,

      }
    }
  }],
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar','Apr','May','Jun','Jly','Aug','Sep','Oct','Nov','Dec'
    ],
    },

  fill: {
    opacity: 1
  },


    stroke: {
        show: true,
        width: 2,
        colors: ['#fff'],

    },


};


  var chart = new ApexCharts(document.querySelector("#apexchartsc"), options);
  chart.render();



            {{-- Total Revenue Report Chart start --}}
            {{-- Chart Type: Bar --}}
            let revenueReportChartConfig = {
                series: [
                    {
                        name: '{{ $data['revenueReport']['revenue']['title'] }}',
                        data: {{ Js::from($data['revenueReport']['revenue']['data']) }},
                    },
                    {
                        name: '{{ $data['revenueReport']['netProfit']['title'] }}',
                        data: {{ Js::from($data['revenueReport']['netProfit']['data']) }},
                    },
                    {
                        name: '{{ $data['revenueReport']['cashFlow']['title'] }}',
                        data: {{ Js::from($data['revenueReport']['cashFlow']['data']) }},
                    },
                ],
                chart: {
                    type: "bar",
                    height: 350,
                    width: "100%",
                    toolbar: {
                        show: false,
                    },
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: "45%",
                        endingShape: "rounded",
                    },
                },
                legend: {
                    show: true,
                    position: "top",
                    horizontalAlign: "right",
                    fontSize: "13px",
                    fontFamily: "Inter",
                    offsetY: -30,
                    markers: {
                        width: 12,
                        height: 12,
                        radius: 12,
                    },
                    itemMargin: {
                        horizontal: 8,
                        vertical: 0,
                    },
                    onItemClick: {
                        toggleDataSeries: true,
                    },
                    onItemHover: {
                        highlightDataSeries: true,
                    },
                },
                title: {
                    text: "Revenue Report",
                    align: "left",
                    offsetX: 0,
                    offsetY: 13,
                    floating: false,
                    style: {
                        fontSize: "20px",
                        fontWeight: "medium",
                        fontFamily: "Inter",
                        color: "##111112",
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ["transparent"],
                },
                yaxis: {
                    labels: {
                        style: {
                            fontFamily: "Inter",
                        },
                    },
                },
                xaxis: {
                    categories: {{ Js::from($data['revenueReport']['month']) }},
                    labels: {
                        style: {
                            fontFamily: "Inter",
                        },
                    },
                },
                fill: {
                    opacity: 1,
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return "$ " + val + " thousands";
                        },
                    },
                },
                colors: ["#4669FA", "#0CE7FA", "#FA916B"],
                grid: {
                    show: true,
                    borderColor: "#E2E8F0",
                    strokeDashArray: 10,
                    position: "back",
                },
                responsive: [
                    {
                        breakpoint: 600,
                        options: {
                            legend: {
                                position: "bottom",
                                offsetY: 0,
                                horizontalAlign: "center",
                            },
                            plotOptions: {
                                bar: {
                                    columnWidth: "80%",
                                },
                            },
                        },
                    },
                ],
            };
            const revenueReportSelector = document.querySelector("#barChartOne");
            const chartDelay = setTimeout(delayChart, 50);
            let revenueReportChart = new ApexCharts(
                revenueReportSelector,
                revenueReportChartConfig
            );

            function delayChart() {
                revenueReportChart.render();
            }
            {{-- Total Revenue Report Chart end --}}


            {{-- Total Revenue Chart start --}}
            {{-- Chart Type: area --}}
            let revenueChartConfig = {
                chart: {
                    type: "area",
                    height: "48",
                    toolbar: {
                        autoSelected: "pan",
                        show: false,
                    },
                    offsetX: 0,
                    offsetY: 0,
                    zoom: {
                        enabled: false,
                    },
                    sparkline: {
                        enabled: true,
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    curve: "smooth",
                    width: 2,
                },
                colors: ["#00EBFF"],
                tooltip: {
                    theme: "light",
                },
                grid: {
                    show: false,
                    padding: {
                        left: 0,
                        right: 0,
                    },
                },
                yaxis: {
                    show: false,
                },
                fill: {
                    type: "solid",
                    opacity: [0.1],
                },
                legend: {
                    show: false,
                },
                xaxis: {
                    low: 0,
                    offsetX: 0,
                    offsetY: 0,
                    show: false,
                    labels: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    axisBorder: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    categories: {{ Js::from($data['revenue']['year']) }},
                },
                series: [
                    {
                        data: {{ Js::from($data['revenue']['data']) }},
                    },
                ],
            };
            const revenueChartSelector = document.querySelector("#EChart")
            const revenueChart = new ApexCharts(
                revenueChartSelector,
                revenueChartConfig
            ).render();
            {{-- Total Revenue Chart end --}}


            {{-- Product Sales Chart start --}}
            {{-- Chart Type: area --}}``
            let productSalesChartConfig = {
                chart: {
                    type: "area",
                    height: "48",
                    toolbar: {
                        autoSelected: "pan",
                        show: false,
                    },
                    offsetX: 0,
                    offsetY: 0,
                    zoom: {
                        enabled: false,
                    },
                    sparkline: {
                        enabled: true,
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    curve: "smooth",
                    width: 2,
                },
                colors: ["#5743BE"],
                tooltip: {
                    theme: "light",
                },
                grid: {
                    show: false,
                    padding: {
                        left: 0,
                        right: 0,
                    },
                },
                yaxis: {
                    show: false,
                },
                fill: {
                    type: "solid",
                    opacity: [0.1],
                },
                legend: {
                    show: false,
                },
                xaxis: {
                    low: 0,
                    offsetX: 0,
                    offsetY: 0,
                    show: false,
                    labels: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    axisBorder: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    categories: {{ Js::from($data['productSold']['year']) }},
                },
                series: [
                    {
                        data: {{ Js::from($data['productSold']['quantity']) }},
                    },
                ],
            };
            const productSalesChartSelector = document.querySelector("#EChart2")
            const productSalesChart = new ApexCharts(
                productSalesChartSelector,
                productSalesChartConfig
            ).render();
            {{-- Product Sales Chart end --}}



            {{-- Growth chart --}}
            {{-- Chart Type: area --}}
            let growthChartConfig = {
                chart: {
                    type: "area",
                    height: "48",
                    width: "48",
                    toolbar: {
                        autoSelected: "pan",
                        show: false,
                    },
                    offsetX: 0,
                    offsetY: 0,
                    zoom: {
                        enabled: false,
                    },
                    sparkline: {
                        enabled: true,
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    curve: "smooth",
                    width: 2,
                },
                colors: ["#fd5693"],
                tooltip: {
                    theme: "light",
                },
                grid: {
                    show: false,
                    padding: {
                        left: 0,
                        right: 0,
                    },
                },
                yaxis: {
                    show: false,
                },
                fill: {
                    type: "solid",
                    opacity: [0.1],
                },
                legend: {
                    show: false,
                },
                xaxis: {
                    low: 0,
                    offsetX: 0,
                    offsetY: 0,
                    show: false,
                    labels: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    axisBorder: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    categories: {{ Js::from($data['growth']['year']) }},
                },
                series: [
                    {
                        data: {{ Js::from($data['growth']['perYearRate']) }},
                    },
                ],
            };
            const growthChartSelector = document.querySelector("#EChart3");
            const growthChart = new ApexCharts(
                growthChartSelector,
                growthChartConfig
            ).render();
            {{-- Growth chart end --}}


            {{-- Order Last week chart --}}
            {{-- Chart Type: bar --}}
            let lastWeekOrderChartConfig = {
                series: [
                    {
                        name: {{ Js::from($data['lastWeekOrder']['name']) }},
                        data: {{ Js::from($data['lastWeekOrder']['data']) }},
                    },
                ],
                chart: {
                    type: "bar",
                    height: 50,
                    toolbar: {
                        show: false,
                    },
                    offsetX: 0,
                    offsetY: 0,
                    zoom: {
                        enabled: false,
                    },
                    sparkline: {
                        enabled: true,
                    },
                },

                plotOptions: {
                    bar: {
                        columnWidth: "50%",
                        barHeight: "100%",
                    },
                },
                legend: {
                    show: false,
                },

                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    curve: "smooth",
                    width: 2,
                },

                fill: {
                    opacity: 1,
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return "$ " + val + "k";
                        },
                    },
                },
                yaxis: {
                    show: false,
                },
                xaxis: {
                    show: false,
                    labels: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                colors: "#EDB899",
                grid: {
                    show: false,
                },
            };

            const lastWeekOrderChartSelector = document.querySelector("#columnChart")
            const lastWeekOrderChart = new ApexCharts(
                lastWeekOrderChartSelector,
                lastWeekOrderChartConfig
            ).render();
            {{-- Order Last week chart end --}}


            {{-- Profit Last week chart --}}
            {{-- Chart Type: line --}}
            let lastWeekProfitChartConfig = {
                series: [
                    {
                        name: {{ Js::from($data['lastWeekProfit']['name']) }},
                        data: {{ Js::from($data['lastWeekProfit']['data']) }},
                    },
                ],
                chart: {
                    height: 50,
                    toolbar: {
                        show: false,
                    },
                    offsetX: 0,
                    offsetY: 0,

                    sparkline: {
                        enabled: true,
                    },
                },
                stroke: {
                    width: [2],
                    curve: "straight",
                    dashArray: [0, 8, 5],
                },
                dataLabels: {
                    enabled: false,
                },

                markers: {
                    size: 4,
                    colors: "#fff",
                    strokeColors: "#4669FA",
                    strokeWidth: 2,
                    shape: "circle",
                    radius: 2,
                    hover: {
                        sizeOffset: 1,
                    },
                },

                yaxis: {
                    show: false,
                },
                xaxis: {
                    show: false,
                    labels: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                grid: {
                    show: true,
                    borderColor: "#E2E8F0",
                    strokeDashArray: 5,
                    position: "back",
                    xaxis: {
                        lines: {
                            show: true,
                        },
                    },
                    yaxis: {
                        lines: {
                            show: false,
                        },
                    },
                },
                colors: ["#4669FA"],
            };

            const lastWeekProfitChartSelector = document.querySelector("#lineChart")
            const lastWeekProfitChart = new ApexCharts(
                lastWeekProfitChartSelector,
                lastWeekProfitChartConfig
            ).render();
            {{-- Profit Last week chart end --}}

            {{-- Last Week Overview chart --}}
            {{-- Chart Type: donut --}}
            let lastWeekOverviewChartConfig = {
                series: {{ Js::from($data['lastWeekOverview']['data']) }},
                chart: {
                    type: 'donut',
                    width: "240px"
                },
                labels: {{ Js::from($data['lastWeekOverview']['labels']) }},
                dataLabels: {
                    enabled: false,
                },
                colors: ["#0CE7FA", "#FA916B"],
                legend: {
                    position: "bottom",
                    fontSize: "14px",
                    fontFamily: "Inter",
                    fontWeight: 400,
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: "65%",
                        },
                    },
                },
                responsive: [
                    {
                        breakpoint: 480,
                        options: {
                            legend: {
                                position: "bottom",
                            },
                        },
                    },
                ],
            };
            const lastWeekOverviewChartSelector = document.querySelector("#donutChart")
            const lastWeekOverviewChart = new ApexCharts(
                lastWeekOverviewChartSelector,
                lastWeekOverviewChartConfig
            ).render();
            {{-- Last Week Overview chart end --}}


















        </script>


    @endpush
</x-app-layout>


