@extends('layouts.default')

@section('content')
<title>Transaksi</title>
<div class="border-b-2 border-b-black pb-6">
    <p class="text-xl sm:text-6xl text-gray-900 capitalize">transaksi</p>
</div>
<x-tabel>
    <x-slot name="tpala">
        <td class="border-r">no</td>
        <td class="border-r">jumlah pembelian</td>
        <td class="border-r">nama barang</td>
        <td class="border-r">transaksi</td>
        <td class="border-r">h/b/t</td>
        <td class="">aksi</td>
    </x-slot>

    <x-slot name="tbadan">
        <td class="border-r">1</td>
        <td class="border-r">3 kaleng</td>
        <td class="border-r">skm carnation</td>
        <td class="border-r">rp.43.500</td>
        <td class="border-r">8/10/2022</td>
        <td class="">
            <button class="bg-blue-600 text-white p-1 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                    <g fill="currentColor">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </g>
                </svg>
            </button>
            <button class="bg-red-500 text-white p-1 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                    <path fill="currentColor" d="M864 256H736v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zm-200 0H360v-72h304v72z" />
                </svg>
            </button>
        </td>
    </x-slot>
</x-tabel>
@endsection
