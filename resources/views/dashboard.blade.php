@extends('layouts.default')
@section('content')
    <title>Dashboard</title>
    <div class="border-b-2 border-b-black pb-6">
        <p class="text-6xl text-gray-900">Dashboard</p>
    </div>
    <div class="grid grid-flow-row grid-cols-3 space-x-5 pt-6">
        <div class="flex-1 p-6 bg-white rounded-lg hover:shadow-xl duration-300">
            <div class="justify-between items-center flex">
                <div class="flex shrink-0 grow-0 items-center justify-center">
                    <div>
                        <h3 class="text-lg leading-tight text-gray-900 capitalize">stok</h3>
                        <h1 class="text-3xl leading-tight font-semibold">
                            <div>69</div>
                        </h1>
                    </div>
                </div>
                <div class="flex shrink-0 grow-0 items-center justify-center"><span
                        class="inline-flex justify-center items-center  h-16 text-emerald-500">

                        <svg class="inline-block w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m8.1 13.34l2.83-2.83L3.91 3.5a4.008 4.008 0 0 0 0 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38c1.91-1.91 2.28-4.65.81-6.12c-1.46-1.46-4.2-1.1-6.12.81c-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88l1.41-1.41L13.41 13l1.47-1.47z" />
                        </svg> </span>
                </div>
            </div>
        </div>
        <div class="flex-1 p-6 bg-white rounded-lg hover:shadow-xl duration-300">
            <div class="justify-between items-center flex">
                <div class="flex shrink-0 grow-0 items-center justify-center">
                    <div>
                        <h3 class="text-lg leading-tight text-gray-900 capitalize">barang masuk</h3>
                        <h1 class="text-3xl leading-tight font-semibold">
                            <div>90</div>
                        </h1>
                    </div>
                </div>
                <div class="flex shrink-0 grow-0 items-center justify-center"><span
                        class="inline-flex justify-center items-center  h-16 text-emerald-500">
                        <svg class="inline-block w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                            <path fill="currentColor"
                                d="M15 2.5a.75.75 0 0 1 .75.75v1.5h1.5a.75.75 0 0 1 0 1.5h-1.5v1.5a.75.75 0 0 1-1.5 0v-1.5h-1.5a.75.75 0 0 1 0-1.5h1.5v-1.5A.75.75 0 0 1 15 2.5ZM4.75 3A1.75 1.75 0 0 0 3 4.75v10.5c0 .966.784 1.75 1.75 1.75h10.5A1.75 1.75 0 0 0 17 15.25v-4.5A1.75 1.75 0 0 0 15.25 9h-4a.25.25 0 0 1-.25-.25v-4A1.75 1.75 0 0 0 9.25 3h-4.5ZM4.5 4.75a.25.25 0 0 1 .25-.25h4.5a.25.25 0 0 1 .25.25v4c0 .085.006.168.018.25H4.5V4.75Zm5 5.75v5H4.75a.25.25 0 0 1-.25-.25V10.5h5Zm1.5 5v-5.018c.082.012.165.018.25.018h4a.25.25 0 0 1 .25.25v4.5a.25.25 0 0 1-.25.25H11Z" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        <div class="flex-1 p-6 bg-white rounded-lg hover:shadow-xl duration-300">
            <div class="justify-between items-center flex">
                <div class="flex shrink-0 grow-0 items-center justify-center">
                    <div>
                        <h3 class="text-lg leading-tight text-gray-900 capitalize">barang keluar</h3>
                        <h1 class="text-3xl leading-tight font-semibold">
                            <div>21</div>
                        </h1>
                    </div>
                </div>
                <div class="flex shrink-0 grow-0 items-center justify-center">
                    <span class="inline-flex justify-center items-center  h-16 text-emerald-500">
                        <svg class="inline-block w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                            <g fill="currentColor">
                                <path
                                    d="M27.707 7.707a1 1 0 0 0-1.414-1.414L24 8.586l-2.293-2.293a1 1 0 1 0-1.414 1.414L22.586 10l-2.293 2.293a1 1 0 0 0 1.414 1.414L24 11.414l2.293 2.293a1 1 0 1 0 1.414-1.415L25.414 10l2.293-2.293Z" />
                                <path fill-rule="evenodd"
                                    d="M6.684 26.449L10 27.554V36a1 1 0 0 0 .673.945l12.992 4.497a.99.99 0 0 0 .637.011l.014-.004l.015-.005l12.996-4.499A1 1 0 0 0 38 36v-8.446l3.316-1.105a1 1 0 0 0 .465-1.574l-4-5a1 1 0 0 0-.456-.32l-12.998-4.5a1 1 0 0 0-.654 0l-12.998 4.5a.999.999 0 0 0-.456.32l-4 5a1 1 0 0 0 .465 1.574Zm14.635 4.124l1.681-2.4v10.923l-11-3.808V28.22l8.184 2.728a1 1 0 0 0 1.135-.376ZM14.057 20.5L24 23.942l9.943-3.442L24 17.058L14.057 20.5Zm12.624 10.073L25 28.174v10.923l11-3.808V28.22l-8.184 2.728a1 1 0 0 1-1.135-.376ZM11.34 21.676l-2.663 3.329l5.511 1.837l5.92 1.973l2.313-3.303l-.135-.047l-10.946-3.79Zm27.983 3.329l-2.663-3.33l-11.081 3.837l2.313 3.303l11.431-3.81Z"
                                    clip-rule="evenodd" />
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
    {{-- chartnya --}}
    <x-chart />
@endsection
