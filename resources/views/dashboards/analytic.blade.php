

<x-app-layout>
    <div class="space-y-8">
        <div class="block sm:flex items-center justify-between mb-6">
            <x-breadcrumb :pageTitle="$pageTitle"/>
        </div>
        {{-- Dashboard Top Card --}}
        {{-- <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-7">
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
        </div> --}}


        <!-- START:: GROUP CHART 5 -->
        <div class="grid xl:grid-cols-7  sm:grid-cols-2 grid-cols-1 gap-3">
            <div class=" bg-info-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                <div
                    class="text-info-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                    <iconify-icon icon=heroicons-outline:menu-alt-1></iconify-icon>
                </div>
                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                    Pending Order
                </span>
                <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                    64
                </span>
            </div>
            <div class=" bg-success-600 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                <div
                    class="text-success-600 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                    <iconify-icon icon="ic:round-done-outline"></iconify-icon>
                </div>
                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                    Confirm Order
                </span>
                <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                    190
                </span>
            </div>
            <div class=" bg-primary-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                    Processing Order
                </span>
                <div class="text-primary-500  h-10 w-10 items-center justify-center ">

                <svg id="SvgjsSvg1643" width="150" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1645" class="apexcharts-inner apexcharts-graphical" transform="translate(52, 0)"><defs id="SvgjsDefs1644"><clipPath id="gridRectMaskbv3sh8bzh"><rect id="SvgjsRect1647" width="95" height="113" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskbv3sh8bzh"></clipPath><clipPath id="nonForecastMaskbv3sh8bzh"></clipPath><clipPath id="gridRectMarkerMaskbv3sh8bzh"><rect id="SvgjsRect1648" width="93" height="115" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1960" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feComponentTransfer id="SvgjsFeComponentTransfer1961" result="SvgjsFeComponentTransfer1961Out" in="SourceGraphic"><feFuncR id="SvgjsFeFuncR1962" type="linear" slope="0.5"></feFuncR><feFuncG id="SvgjsFeFuncG1963" type="linear" slope="0.5"></feFuncG><feFuncB id="SvgjsFeFuncB1964" type="linear" slope="0.5"></feFuncB><feFuncA id="SvgjsFeFuncA1965" type="identity"></feFuncA></feComponentTransfer></filter></defs><g id="SvgjsG1649" class="apexcharts-pie"><g id="SvgjsG1650" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1651" r="14.96585365853659" cx="44.5" cy="44.5" fill="transparent"></circle><g id="SvgjsG1652" class="apexcharts-slices"><g id="SvgjsG1653" class="apexcharts-series apexcharts-pie-series" seriesName="Complete" rel="1" data:realIndex="0"><path id="SvgjsPath1654" d="M 44.5 7.08536585365853 A 37.41463414634147 37.41463414634147 0 1 1 8.916568390322787 56.06175778954072 L 30.266627356129113 49.12470311581629 A 14.96585365853659 14.96585365853659 0 1 0 44.5 29.534146341463412 L 44.5 7.08536585365853 z" fill="rgba(12,231,250,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="252" data:startAngle="0" data:strokeWidth="2" data:value="70" data:pathOrig="M 44.5 7.08536585365853 A 37.41463414634147 37.41463414634147 0 1 1 8.916568390322787 56.06175778954072 L 30.266627356129113 49.12470311581629 A 14.96585365853659 14.96585365853659 0 1 0 44.5 29.534146341463412 L 44.5 7.08536585365853 z" stroke="#ffffff" selected="true" filter="url(#SvgjsFilter1960)"></path></g><g id="SvgjsG1655" class="apexcharts-series apexcharts-pie-series" seriesName="Left" rel="2" data:realIndex="1"><path id="SvgjsPath1656" d="M 8.916568390322787 56.06175778954072 A 37.41463414634147 37.41463414634147 0 0 1 44.49346991449032 7.0853664235159926 L 44.49738796579613 29.534146569406396 A 14.96585365853659 14.96585365853659 0 0 0 30.266627356129113 49.12470311581629 L 8.916568390322787 56.06175778954072 z" fill="#0CE7FA29" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="108" data:startAngle="252" data:strokeWidth="2" data:value="30" data:pathOrig="M 8.916568390322787 56.06175778954072 A 37.41463414634147 37.41463414634147 0 0 1 44.49346991449032 7.0853664235159926 L 44.49738796579613 29.534146569406396 A 14.96585365853659 14.96585365853659 0 0 0 30.266627356129113 49.12470311581629 L 8.916568390322787 56.06175778954072 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG1657" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1658" font-family="Inter" x="44.5" y="54.5" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Inter;">70</text></g></g><line id="SvgjsLine1659" x1="0" y1="0" x2="89" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1660" x1="0" y1="0" x2="89" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1646" class="apexcharts-annotations"></g></svg>
                </div>


            </div>

            <div class=" bg-warning-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                <div
                    class="text-warning-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                    <iconify-icon icon=heroicons-outline:chart-pie></iconify-icon>
                </div>
                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                    In Transit
                </span>
                <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                    45
                </span>
            </div>
            <div class=" bg-success-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                <div
                    class="text-success-500 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                    <iconify-icon icon="material-symbols:send-outline-rounded"></iconify-icon>
                </div>
                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                    Delivered Order
                </span>
                <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                    11
                </span>
            </div>


            <div class=" bg-warning-600 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                <div
                    class="text-warning-600 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                    <iconify-icon icon="material-symbols:cancel-outline"></iconify-icon>
                </div>
                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                    Cancel Order
                </span>
                <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                    11
                </span>
            </div>
            <div class=" bg-warning-600 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 text-center">
                <div
                    class="text-warning-600 mx-auto h-10 w-10 flex flex-col items-center justify-center rounded-full bg-white text-2xl mb-4">
                    <iconify-icon icon="material-symbols:cancel-outline"></iconify-icon>
                </div>
                <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">
                    Return Order
                </span>
                <span class="block mb- text-2xl text-slate-900 dark:text-white font-medium">
                    11
                </span>
            </div>





        </div>
        <!-- END:: GROUP CHART 5 -->




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
                    <div class="statisticsChartCard bg-slate-100 p-2 rounded-md">
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
                    <div class="statisticsChartCard bg-slate-100 p-2 rounded-md">
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
                    <div class="statisticsChartCard bg-slate-100 p-2 rounded-md  md:col-span-2 md:flex items-center justify-between">
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
 <!-- START:: GROUP CHART 5 -->
 <div class="grid xl:grid-cols-6  sm:grid-cols-2 grid-cols-1 gap-3">


        <div class="flex bg-primary-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 ">

        <div>
        <h5 class="text-sm text-slate-600 dark:text-slate-300 mb-[6px]">Product Strok</h5>
        <h3 class="text-lg text-slate-900 dark:text-slate-300 font-medium mb-[6px]">{{ $data['lastWeekOverview']['amount'] }}</h3>
        <p class="font-normal text-xs text-slate-600 dark:text-slate-300">
            <span class="text-indigo-400">
                {{ $data['lastWeekOverview']['percentage'] }}%
            </span>
            {{ __('From last Week') }}
        </p>
        </div>
        <div class="text-primary-500  ml-[-48px] items-center justify-center ">

        <svg id="SvgjsSvg1643" width="150" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1645" class="apexcharts-inner apexcharts-graphical" transform="translate(52, 0)"><defs id="SvgjsDefs1644"><clipPath id="gridRectMaskbv3sh8bzh"><rect id="SvgjsRect1647" width="95" height="113" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskbv3sh8bzh"></clipPath><clipPath id="nonForecastMaskbv3sh8bzh"></clipPath><clipPath id="gridRectMarkerMaskbv3sh8bzh"><rect id="SvgjsRect1648" width="93" height="115" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1960" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feComponentTransfer id="SvgjsFeComponentTransfer1961" result="SvgjsFeComponentTransfer1961Out" in="SourceGraphic"><feFuncR id="SvgjsFeFuncR1962" type="linear" slope="0.5"></feFuncR><feFuncG id="SvgjsFeFuncG1963" type="linear" slope="0.5"></feFuncG><feFuncB id="SvgjsFeFuncB1964" type="linear" slope="0.5"></feFuncB><feFuncA id="SvgjsFeFuncA1965" type="identity"></feFuncA></feComponentTransfer></filter></defs><g id="SvgjsG1649" class="apexcharts-pie"><g id="SvgjsG1650" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1651" r="14.96585365853659" cx="44.5" cy="44.5" fill="transparent"></circle><g id="SvgjsG1652" class="apexcharts-slices"><g id="SvgjsG1653" class="apexcharts-series apexcharts-pie-series" seriesName="Complete" rel="1" data:realIndex="0"><path id="SvgjsPath1654" d="M 44.5 7.08536585365853 A 37.41463414634147 37.41463414634147 0 1 1 8.916568390322787 56.06175778954072 L 30.266627356129113 49.12470311581629 A 14.96585365853659 14.96585365853659 0 1 0 44.5 29.534146341463412 L 44.5 7.08536585365853 z" fill="rgba(12,231,250,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="252" data:startAngle="0" data:strokeWidth="2" data:value="70" data:pathOrig="M 44.5 7.08536585365853 A 37.41463414634147 37.41463414634147 0 1 1 8.916568390322787 56.06175778954072 L 30.266627356129113 49.12470311581629 A 14.96585365853659 14.96585365853659 0 1 0 44.5 29.534146341463412 L 44.5 7.08536585365853 z" stroke="#ffffff" selected="true" filter="url(#SvgjsFilter1960)"></path></g><g id="SvgjsG1655" class="apexcharts-series apexcharts-pie-series" seriesName="Left" rel="2" data:realIndex="1"><path id="SvgjsPath1656" d="M 8.916568390322787 56.06175778954072 A 37.41463414634147 37.41463414634147 0 0 1 44.49346991449032 7.0853664235159926 L 44.49738796579613 29.534146569406396 A 14.96585365853659 14.96585365853659 0 0 0 30.266627356129113 49.12470311581629 L 8.916568390322787 56.06175778954072 z" fill="#0CE7FA29" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="108" data:startAngle="252" data:strokeWidth="2" data:value="30" data:pathOrig="M 8.916568390322787 56.06175778954072 A 37.41463414634147 37.41463414634147 0 0 1 44.49346991449032 7.0853664235159926 L 44.49738796579613 29.534146569406396 A 14.96585365853659 14.96585365853659 0 0 0 30.266627356129113 49.12470311581629 L 8.916568390322787 56.06175778954072 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG1657" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1658" font-family="Inter" x="44.5" y="54.5" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Inter;">70</text></g></g><line id="SvgjsLine1659" x1="0" y1="0" x2="89" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1660" x1="0" y1="0" x2="89" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1646" class="apexcharts-annotations"></g></svg>
        </div>
        </div>

        <div class="bg-slate-50 dark:bg-slate-900 rounded pt-3 px-4">
            <div class="text-sm text-slate-600 dark:text-slate-300 mb-[6px]" bis_skin_checked="1"> Total Order Place </div><div class="text-lg text-slate-900 dark:text-white font-medium mb-[6px]" bis_skin_checked="1"> 123k </div><div class="font-normal text-xs text-slate-600 dark:text-slate-300" bis_skin_checked="1"><span class="text-warning-500">-60%</span> From last Week </div><div class="mt-4" bis_skin_checked="1"><div class="vue-apexcharts" style="min-height: 44px;" bis_skin_checked="1"><div id="apexcharts4lbov1m8" class="apexcharts-canvas apexcharts4lbov1m8 apexcharts-theme-light" style="width: 235px; height: 44px;" bis_skin_checked="1"><svg id="SvgjsSvg2380" width="235" height="44" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2382" class="apexcharts-inner apexcharts-graphical" transform="translate(22.42857142857143, 0)"><defs id="SvgjsDefs2381"><linearGradient id="SvgjsLinearGradient2385" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2386" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop2387" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop2388" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask4lbov1m8"><rect id="SvgjsRect2390" width="241" height="46" x="-21.42857142857143" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask4lbov1m8"></clipPath><clipPath id="nonForecastMask4lbov1m8"></clipPath><clipPath id="gridRectMarkerMask4lbov1m8"><rect id="SvgjsRect2391" width="202.14285714285714" height="48" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect2389" width="16.983673469387757" height="44" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2385)" class="apexcharts-xcrosshairs" y2="44" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG2412" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2413" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2421" class="apexcharts-grid"><g id="SvgjsG2422" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2424" x1="-18.42857142857143" y1="0" x2="216.57142857142856" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2425" x1="-18.42857142857143" y1="11" x2="216.57142857142856" y2="11" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2426" x1="-18.42857142857143" y1="22" x2="216.57142857142856" y2="22" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2427" x1="-18.42857142857143" y1="33" x2="216.57142857142856" y2="33" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2428" x1="-18.42857142857143" y1="44" x2="216.57142857142856" y2="44" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2423" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2430" x1="0" y1="44" x2="198.14285714285714" y2="44" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2429" x1="0" y1="1" x2="0" y2="44" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2392" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG2393" class="apexcharts-series" rel="1" seriesName="Revenue" data:realIndex="0"><path id="SvgjsPath2397" d="M -8.491836734693878 44L -8.491836734693878 29.333333333333332Q -8.491836734693878 29.333333333333332 -8.491836734693878 29.333333333333332L 6.491836734693878 29.333333333333332Q 6.491836734693878 29.333333333333332 6.491836734693878 29.333333333333332L 6.491836734693878 29.333333333333332L 6.491836734693878 44L 6.491836734693878 44z" fill="rgba(250,145,107,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4lbov1m8)" pathTo="M -8.491836734693878 44L -8.491836734693878 29.333333333333332Q -8.491836734693878 29.333333333333332 -8.491836734693878 29.333333333333332L 6.491836734693878 29.333333333333332Q 6.491836734693878 29.333333333333332 6.491836734693878 29.333333333333332L 6.491836734693878 29.333333333333332L 6.491836734693878 44L 6.491836734693878 44z" pathFrom="M -8.491836734693878 44L -8.491836734693878 44L 6.491836734693878 44L 6.491836734693878 44L 6.491836734693878 44L 6.491836734693878 44L 6.491836734693878 44L -8.491836734693878 44" cy="29.333333333333332" cx="7.491836734693878" j="0" val="40" barHeight="14.666666666666668" barWidth="16.983673469387757"></path><path id="SvgjsPath2399" d="M 19.814285714285717 44L 19.814285714285717 18.333333333333332Q 19.814285714285717 18.333333333333332 19.814285714285717 18.333333333333332L 34.79795918367347 18.333333333333332Q 34.79795918367347 18.333333333333332 34.79795918367347 18.333333333333332L 34.79795918367347 18.333333333333332L 34.79795918367347 44L 34.79795918367347 44z" fill="rgba(250,145,107,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4lbov1m8)" pathTo="M 19.814285714285717 44L 19.814285714285717 18.333333333333332Q 19.814285714285717 18.333333333333332 19.814285714285717 18.333333333333332L 34.79795918367347 18.333333333333332Q 34.79795918367347 18.333333333333332 34.79795918367347 18.333333333333332L 34.79795918367347 18.333333333333332L 34.79795918367347 44L 34.79795918367347 44z" pathFrom="M 19.814285714285717 44L 19.814285714285717 44L 34.79795918367347 44L 34.79795918367347 44L 34.79795918367347 44L 34.79795918367347 44L 34.79795918367347 44L 19.814285714285717 44" cy="18.333333333333332" cx="35.79795918367347" j="1" val="70" barHeight="25.666666666666668" barWidth="16.983673469387757"></path><path id="SvgjsPath2401" d="M 48.12040816326531 44L 48.12040816326531 27.5Q 48.12040816326531 27.5 48.12040816326531 27.5L 63.10408163265306 27.5Q 63.10408163265306 27.5 63.10408163265306 27.5L 63.10408163265306 27.5L 63.10408163265306 44L 63.10408163265306 44z" fill="rgba(250,145,107,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4lbov1m8)" pathTo="M 48.12040816326531 44L 48.12040816326531 27.5Q 48.12040816326531 27.5 48.12040816326531 27.5L 63.10408163265306 27.5Q 63.10408163265306 27.5 63.10408163265306 27.5L 63.10408163265306 27.5L 63.10408163265306 44L 63.10408163265306 44z" pathFrom="M 48.12040816326531 44L 48.12040816326531 44L 63.10408163265306 44L 63.10408163265306 44L 63.10408163265306 44L 63.10408163265306 44L 63.10408163265306 44L 48.12040816326531 44" cy="27.5" cx="64.10408163265306" j="2" val="45" barHeight="16.5" barWidth="16.983673469387757"></path><path id="SvgjsPath2403" d="M 76.4265306122449 44L 76.4265306122449 7.333333333333329Q 76.4265306122449 7.333333333333329 76.4265306122449 7.333333333333329L 91.41020408163266 7.333333333333329Q 91.41020408163266 7.333333333333329 91.41020408163266 7.333333333333329L 91.41020408163266 7.333333333333329L 91.41020408163266 44L 91.41020408163266 44z" fill="rgba(250,145,107,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4lbov1m8)" pathTo="M 76.4265306122449 44L 76.4265306122449 7.333333333333329Q 76.4265306122449 7.333333333333329 76.4265306122449 7.333333333333329L 91.41020408163266 7.333333333333329Q 91.41020408163266 7.333333333333329 91.41020408163266 7.333333333333329L 91.41020408163266 7.333333333333329L 91.41020408163266 44L 91.41020408163266 44z" pathFrom="M 76.4265306122449 44L 76.4265306122449 44L 91.41020408163266 44L 91.41020408163266 44L 91.41020408163266 44L 91.41020408163266 44L 91.41020408163266 44L 76.4265306122449 44" cy="7.333333333333329" cx="92.41020408163266" j="3" val="100" barHeight="36.66666666666667" barWidth="16.983673469387757"></path><path id="SvgjsPath2405" d="M 104.7326530612245 44L 104.7326530612245 16.499999999999996Q 104.7326530612245 16.499999999999996 104.7326530612245 16.499999999999996L 119.71632653061225 16.499999999999996Q 119.71632653061225 16.499999999999996 119.71632653061225 16.499999999999996L 119.71632653061225 16.499999999999996L 119.71632653061225 44L 119.71632653061225 44z" fill="rgba(250,145,107,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4lbov1m8)" pathTo="M 104.7326530612245 44L 104.7326530612245 16.499999999999996Q 104.7326530612245 16.499999999999996 104.7326530612245 16.499999999999996L 119.71632653061225 16.499999999999996Q 119.71632653061225 16.499999999999996 119.71632653061225 16.499999999999996L 119.71632653061225 16.499999999999996L 119.71632653061225 44L 119.71632653061225 44z" pathFrom="M 104.7326530612245 44L 104.7326530612245 44L 119.71632653061225 44L 119.71632653061225 44L 119.71632653061225 44L 119.71632653061225 44L 119.71632653061225 44L 104.7326530612245 44" cy="16.499999999999996" cx="120.71632653061225" j="4" val="75" barHeight="27.500000000000004" barWidth="16.983673469387757"></path><path id="SvgjsPath2407" d="M 133.0387755102041 44L 133.0387755102041 29.333333333333332Q 133.0387755102041 29.333333333333332 133.0387755102041 29.333333333333332L 148.02244897959184 29.333333333333332Q 148.02244897959184 29.333333333333332 148.02244897959184 29.333333333333332L 148.02244897959184 29.333333333333332L 148.02244897959184 44L 148.02244897959184 44z" fill="rgba(250,145,107,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4lbov1m8)" pathTo="M 133.0387755102041 44L 133.0387755102041 29.333333333333332Q 133.0387755102041 29.333333333333332 133.0387755102041 29.333333333333332L 148.02244897959184 29.333333333333332Q 148.02244897959184 29.333333333333332 148.02244897959184 29.333333333333332L 148.02244897959184 29.333333333333332L 148.02244897959184 44L 148.02244897959184 44z" pathFrom="M 133.0387755102041 44L 133.0387755102041 44L 148.02244897959184 44L 148.02244897959184 44L 148.02244897959184 44L 148.02244897959184 44L 148.02244897959184 44L 133.0387755102041 44" cy="29.333333333333332" cx="149.02244897959184" j="5" val="40" barHeight="14.666666666666668" barWidth="16.983673469387757"></path><path id="SvgjsPath2409" d="M 161.34489795918367 44L 161.34489795918367 14.666666666666664Q 161.34489795918367 14.666666666666664 161.34489795918367 14.666666666666664L 176.32857142857142 14.666666666666664Q 176.32857142857142 14.666666666666664 176.32857142857142 14.666666666666664L 176.32857142857142 14.666666666666664L 176.32857142857142 44L 176.32857142857142 44z" fill="rgba(250,145,107,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4lbov1m8)" pathTo="M 161.34489795918367 44L 161.34489795918367 14.666666666666664Q 161.34489795918367 14.666666666666664 161.34489795918367 14.666666666666664L 176.32857142857142 14.666666666666664Q 176.32857142857142 14.666666666666664 176.32857142857142 14.666666666666664L 176.32857142857142 14.666666666666664L 176.32857142857142 44L 176.32857142857142 44z" pathFrom="M 161.34489795918367 44L 161.34489795918367 44L 176.32857142857142 44L 176.32857142857142 44L 176.32857142857142 44L 176.32857142857142 44L 176.32857142857142 44L 161.34489795918367 44" cy="14.666666666666664" cx="177.32857142857142" j="6" val="80" barHeight="29.333333333333336" barWidth="16.983673469387757"></path><path id="SvgjsPath2411" d="M 189.65102040816328 44L 189.65102040816328 11Q 189.65102040816328 11 189.65102040816328 11L 204.63469387755103 11Q 204.63469387755103 11 204.63469387755103 11L 204.63469387755103 11L 204.63469387755103 44L 204.63469387755103 44z" fill="rgba(250,145,107,1)" fill-opacity="1" stroke="#" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4lbov1m8)" pathTo="M 189.65102040816328 44L 189.65102040816328 11Q 189.65102040816328 11 189.65102040816328 11L 204.63469387755103 11Q 204.63469387755103 11 204.63469387755103 11L 204.63469387755103 11L 204.63469387755103 44L 204.63469387755103 44z" pathFrom="M 189.65102040816328 44L 189.65102040816328 44L 204.63469387755103 44L 204.63469387755103 44L 204.63469387755103 44L 204.63469387755103 44L 204.63469387755103 44L 189.65102040816328 44" cy="11" cx="205.63469387755103" j="7" val="90" barHeight="33" barWidth="16.983673469387757"></path><g id="SvgjsG2395" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG2396" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2398" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2400" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2402" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2404" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2406" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2408" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG2410" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG2394" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2431" x1="-18.42857142857143" y1="0" x2="216.57142857142856" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2432" x1="-18.42857142857143" y1="0" x2="216.57142857142856" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2433" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2434" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2435" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2420" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2383" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 22px;" bis_skin_checked="1"></div><div class="apexcharts-tooltip apexcharts-theme-light" bis_skin_checked="1"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;" bis_skin_checked="1"></div><div class="apexcharts-tooltip-series-group" style="order: 1;" bis_skin_checked="1"><span class="apexcharts-tooltip-marker"></span><div class="apexcharts-tooltip-text" bis_skin_checked="1" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light" bis_skin_checked="1"><div class="apexcharts-yaxistooltip-text" bis_skin_checked="1"></div></div></div></div></div>
        </div>

        <div class="bg-slate-50 dark:bg-slate-900 rounded pt-3 px-4">
            <div class="text-sm text-slate-600 dark:text-slate-300 mb-[6px]" bis_skin_checked="1"> Total Delivered </div><div class="text-lg text-slate-900 dark:text-white font-medium mb-[6px]" bis_skin_checked="1"> 654k </div><div class="font-normal text-xs text-slate-600 dark:text-slate-300" bis_skin_checked="1"><span class="text-primary-500">+02%</span> From last Week </div><div class="mt-4" bis_skin_checked="1"><div class="vue-apexcharts" style="min-height: 44px;" bis_skin_checked="1"><div id="apexchartsl2luobdq" class="apexcharts-canvas apexchartsl2luobdq apexcharts-theme-light" style="width: 167px; height: 44px;" bis_skin_checked="1"><svg id="SvgjsSvg4638" width="167" height="44" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG4640" class="apexcharts-inner apexcharts-graphical" transform="translate(4, 4)"><defs id="SvgjsDefs4639"><clipPath id="gridRectMaskl2luobdq"><rect id="SvgjsRect4645" width="165" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskl2luobdq"></clipPath><clipPath id="nonForecastMaskl2luobdq"></clipPath><clipPath id="gridRectMarkerMaskl2luobdq"><rect id="SvgjsRect4646" width="187" height="64" x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine4644" x1="0" y1="0" x2="0" y2="36" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="36" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG4663" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4664" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG4672" class="apexcharts-grid"><g id="SvgjsG4673" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG4674" class="apexcharts-gridlines-vertical"><line id="SvgjsLine4675" x1="0" y1="0" x2="0" y2="36" stroke="#e2e8f0" stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4676" x1="31.8" y1="0" x2="31.8" y2="36" stroke="#e2e8f0" stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4677" x1="63.6" y1="0" x2="63.6" y2="36" stroke="#e2e8f0" stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4678" x1="95.4" y1="0" x2="95.4" y2="36" stroke="#e2e8f0" stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4679" x1="127.2" y1="0" x2="127.2" y2="36" stroke="#e2e8f0" stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4680" x1="159" y1="0" x2="159" y2="36" stroke="#e2e8f0" stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine4682" x1="0" y1="36" x2="159" y2="36" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4681" x1="0" y1="1" x2="0" y2="36" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG4647" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG4648" class="apexcharts-series" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath4662" d="M0 31.5L31.799999999999997 9L63.6 31.5L95.4 9L127.2 24L159 1.5C159 1.5 159 1.5 159 1.5 " fill="none" fill-opacity="1" stroke="rgba(70,105,250,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskl2luobdq)" pathTo="M 0 31.5L 31.8 9L 63.6 31.5L 95.4 9L 127.2 24L 159 1.5" pathFrom="M -1 54L -1 54L 31.8 54L 63.6 54L 95.4 54L 127.2 54L 159 54"></path><g id="SvgjsG4649" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG4651" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskl2luobdq)"><circle id="SvgjsCircle4652" r="4" cx="0" cy="31.5" class="apexcharts-marker no-pointer-events wino0rgsj" stroke="#4669fa" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="4"></circle><circle id="SvgjsCircle4653" r="4" cx="31.8" cy="9" class="apexcharts-marker no-pointer-events wvr153y6j" stroke="#4669fa" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="4"></circle></g><g id="SvgjsG4654" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskl2luobdq)"><circle id="SvgjsCircle4655" r="4" cx="63.6" cy="31.5" class="apexcharts-marker no-pointer-events wenjj5euo" stroke="#4669fa" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="4"></circle></g><g id="SvgjsG4656" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskl2luobdq)"><circle id="SvgjsCircle4657" r="4" cx="95.4" cy="9" class="apexcharts-marker no-pointer-events wgzhdqyc7f" stroke="#4669fa" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="4"></circle></g><g id="SvgjsG4658" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskl2luobdq)"><circle id="SvgjsCircle4659" r="4" cx="127.2" cy="24" class="apexcharts-marker no-pointer-events wrauzgixg" stroke="#4669fa" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="4"></circle></g><g id="SvgjsG4660" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskl2luobdq)"><circle id="SvgjsCircle4661" r="4" cx="159" cy="1.5" class="apexcharts-marker no-pointer-events w0wmd1ase" stroke="#4669fa" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="4"></circle></g></g></g><g id="SvgjsG4650" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine4683" x1="0" y1="0" x2="159" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4684" x1="0" y1="0" x2="159" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4685" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4686" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4687" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect4643" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG4671" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG4641" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 22px;" bis_skin_checked="1"></div><div class="apexcharts-tooltip apexcharts-theme-light" bis_skin_checked="1"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;" bis_skin_checked="1"></div><div class="apexcharts-tooltip-series-group" style="order: 1;" bis_skin_checked="1"><span class="apexcharts-tooltip-marker" style="background-color: rgb(70, 105, 250);"></span><div class="apexcharts-tooltip-text" bis_skin_checked="1" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group" bis_skin_checked="1"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light" bis_skin_checked="1"><div class="apexcharts-yaxistooltip-text" bis_skin_checked="1"></div></div></div></div></div>
        </div>

        <div class="bg-primary-500 rounded-md p-2 bg-opacity-[0.15] dark:bg-opacity-25 relative z-[1]" >
            <div class="overlay absolute left-0 top-0 w-full h-full z-[-1]" ><img src="data:image/png;base64,       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" alt="" draggable="false" class="w-full h-full object-contain"></div><span class="block mb-2 text-sm text-slate-900 dark:text-white font-medium">Total Expanse</span><span class="block text-2xl text-slate-900 dark:text-white font-medium mb-2">15%</span><div class="flex space-x-2 rtl:space-x-reverse" bis_skin_checked="1"><div class="flex-none text-xl text-danger-500" bis_skin_checked="1"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="iconify iconify--heroicons"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 0 1 4.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181"></path></svg></span></div><div class="flex-1" bis_skin_checked="1"><span class="block mb-[2px] text-danger-500">1.67%  </span><span class="block mb-1 text-slate-600 dark:text-slate-300">From last week</span></div></div>
        </div>






        <div class="flex bg-warning-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 ">
            {{-- <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">

            </span> --}}
            <div>
            <h5 class="text-sm text-slate-600 dark:text-slate-300 mb-[6px]">Total Cancel</h5>
            <h3 class="text-lg text-slate-900 dark:text-slate-300 font-medium mb-[6px]">{{ $data['lastWeekOverview']['amount'] }}</h3>
            <p class="font-normal text-xs text-slate-600 dark:text-slate-300">
                <span class="text-indigo-400">
                    {{ $data['lastWeekOverview']['percentage'] }}%
                </span>
                {{ __('From last Week') }}
            </p>
            </div>

            <div class="text-primary-500  ml-[-48px] items-center justify-center ">

            <svg id="SvgjsSvg1643" width="150" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1645" class="apexcharts-inner apexcharts-graphical" transform="translate(52, 0)"><defs id="SvgjsDefs1644"><clipPath id="gridRectMaskbv3sh8bzh"><rect id="SvgjsRect1647" width="95" height="113" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskbv3sh8bzh"></clipPath><clipPath id="nonForecastMaskbv3sh8bzh"></clipPath><clipPath id="gridRectMarkerMaskbv3sh8bzh"><rect id="SvgjsRect1648" width="93" height="115" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1960" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feComponentTransfer id="SvgjsFeComponentTransfer1961" result="SvgjsFeComponentTransfer1961Out" in="SourceGraphic"><feFuncR id="SvgjsFeFuncR1962" type="linear" slope="0.5"></feFuncR><feFuncG id="SvgjsFeFuncG1963" type="linear" slope="0.5"></feFuncG><feFuncB id="SvgjsFeFuncB1964" type="linear" slope="0.5"></feFuncB><feFuncA id="SvgjsFeFuncA1965" type="identity"></feFuncA></feComponentTransfer></filter></defs><g id="SvgjsG1649" class="apexcharts-pie"><g id="SvgjsG1650" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1651" r="14.96585365853659" cx="44.5" cy="44.5" fill="transparent"></circle><g id="SvgjsG1652" class="apexcharts-slices"><g id="SvgjsG1653" class="apexcharts-series apexcharts-pie-series" seriesName="Complete" rel="1" data:realIndex="0"><path id="SvgjsPath1654" d="M 44.5 7.08536585365853 A 37.41463414634147 37.41463414634147 0 1 1 8.916568390322787 56.06175778954072 L 30.266627356129113 49.12470311581629 A 14.96585365853659 14.96585365853659 0 1 0 44.5 29.534146341463412 L 44.5 7.08536585365853 z" fill="rgba(12,231,250,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="252" data:startAngle="0" data:strokeWidth="2" data:value="70" data:pathOrig="M 44.5 7.08536585365853 A 37.41463414634147 37.41463414634147 0 1 1 8.916568390322787 56.06175778954072 L 30.266627356129113 49.12470311581629 A 14.96585365853659 14.96585365853659 0 1 0 44.5 29.534146341463412 L 44.5 7.08536585365853 z" stroke="#ffffff" selected="true" filter="url(#SvgjsFilter1960)"></path></g><g id="SvgjsG1655" class="apexcharts-series apexcharts-pie-series" seriesName="Left" rel="2" data:realIndex="1"><path id="SvgjsPath1656" d="M 8.916568390322787 56.06175778954072 A 37.41463414634147 37.41463414634147 0 0 1 44.49346991449032 7.0853664235159926 L 44.49738796579613 29.534146569406396 A 14.96585365853659 14.96585365853659 0 0 0 30.266627356129113 49.12470311581629 L 8.916568390322787 56.06175778954072 z" fill="#0CE7FA29" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="108" data:startAngle="252" data:strokeWidth="2" data:value="30" data:pathOrig="M 8.916568390322787 56.06175778954072 A 37.41463414634147 37.41463414634147 0 0 1 44.49346991449032 7.0853664235159926 L 44.49738796579613 29.534146569406396 A 14.96585365853659 14.96585365853659 0 0 0 30.266627356129113 49.12470311581629 L 8.916568390322787 56.06175778954072 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG1657" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1658" font-family="Inter" x="44.5" y="54.5" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Inter;">70</text></g></g><line id="SvgjsLine1659" x1="0" y1="0" x2="89" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1660" x1="0" y1="0" x2="89" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1646" class="apexcharts-annotations"></g></svg>
            </div>

        </div>

        <div class="flex bg-primary-500 rounded-md p-4 bg-opacity-[0.15] dark:bg-opacity-50 ">
            {{-- <span class="block text-sm text-slate-600 font-medium dark:text-white mb-1">

            </span> --}}
            <div>
            <h5 class="text-sm text-slate-600 dark:text-slate-300 mb-[6px]">Total Return</h5>
            <h3 class="text-lg text-slate-900 dark:text-slate-300 font-medium mb-[6px]">{{ $data['lastWeekOverview']['amount'] }}</h3>
            <p class="font-normal text-xs text-slate-600 dark:text-slate-300">
                <span class="text-indigo-400">
                    {{ $data['lastWeekOverview']['percentage'] }}%
                </span>
                {{ __('From last Week') }}
            </p>
            </div>
            <div class="text-primary-500  ml-[-48px] items-center justify-center ">

            <svg id="SvgjsSvg1643" width="150" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1645" class="apexcharts-inner apexcharts-graphical" transform="translate(52, 0)"><defs id="SvgjsDefs1644"><clipPath id="gridRectMaskbv3sh8bzh"><rect id="SvgjsRect1647" width="95" height="113" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskbv3sh8bzh"></clipPath><clipPath id="nonForecastMaskbv3sh8bzh"></clipPath><clipPath id="gridRectMarkerMaskbv3sh8bzh"><rect id="SvgjsRect1648" width="93" height="115" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter1960" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feComponentTransfer id="SvgjsFeComponentTransfer1961" result="SvgjsFeComponentTransfer1961Out" in="SourceGraphic"><feFuncR id="SvgjsFeFuncR1962" type="linear" slope="0.5"></feFuncR><feFuncG id="SvgjsFeFuncG1963" type="linear" slope="0.5"></feFuncG><feFuncB id="SvgjsFeFuncB1964" type="linear" slope="0.5"></feFuncB><feFuncA id="SvgjsFeFuncA1965" type="identity"></feFuncA></feComponentTransfer></filter></defs><g id="SvgjsG1649" class="apexcharts-pie"><g id="SvgjsG1650" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1651" r="14.96585365853659" cx="44.5" cy="44.5" fill="transparent"></circle><g id="SvgjsG1652" class="apexcharts-slices"><g id="SvgjsG1653" class="apexcharts-series apexcharts-pie-series" seriesName="Complete" rel="1" data:realIndex="0"><path id="SvgjsPath1654" d="M 44.5 7.08536585365853 A 37.41463414634147 37.41463414634147 0 1 1 8.916568390322787 56.06175778954072 L 30.266627356129113 49.12470311581629 A 14.96585365853659 14.96585365853659 0 1 0 44.5 29.534146341463412 L 44.5 7.08536585365853 z" fill="rgba(12,231,250,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="252" data:startAngle="0" data:strokeWidth="2" data:value="70" data:pathOrig="M 44.5 7.08536585365853 A 37.41463414634147 37.41463414634147 0 1 1 8.916568390322787 56.06175778954072 L 30.266627356129113 49.12470311581629 A 14.96585365853659 14.96585365853659 0 1 0 44.5 29.534146341463412 L 44.5 7.08536585365853 z" stroke="#ffffff" selected="true" filter="url(#SvgjsFilter1960)"></path></g><g id="SvgjsG1655" class="apexcharts-series apexcharts-pie-series" seriesName="Left" rel="2" data:realIndex="1"><path id="SvgjsPath1656" d="M 8.916568390322787 56.06175778954072 A 37.41463414634147 37.41463414634147 0 0 1 44.49346991449032 7.0853664235159926 L 44.49738796579613 29.534146569406396 A 14.96585365853659 14.96585365853659 0 0 0 30.266627356129113 49.12470311581629 L 8.916568390322787 56.06175778954072 z" fill="#0CE7FA29" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="108" data:startAngle="252" data:strokeWidth="2" data:value="30" data:pathOrig="M 8.916568390322787 56.06175778954072 A 37.41463414634147 37.41463414634147 0 0 1 44.49346991449032 7.0853664235159926 L 44.49738796579613 29.534146569406396 A 14.96585365853659 14.96585365853659 0 0 0 30.266627356129113 49.12470311581629 L 8.916568390322787 56.06175778954072 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG1657" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1658" font-family="Inter" x="44.5" y="54.5" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Inter;">70</text></g></g><line id="SvgjsLine1659" x1="0" y1="0" x2="89" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1660" x1="0" y1="0" x2="89" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1646" class="apexcharts-annotations"></g></svg>
            </div>
        </div>







    </div>
<!-- END:: GROUP CHART 5 -->


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


