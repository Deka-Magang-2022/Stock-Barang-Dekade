<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>stok</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="grid grid-cols-1 grid-rows-1 w-full">
        <div class="w-full h-full bg-gray-500 max-h-12">
            <div
                class="p-2 w-full h-full flex flex-row text-gray-100 text-2xl text-[times-new-roman] justify-between place-items-center">
                <div class="flex place-items-center">
                    <a class="" href="#home">DEKADE COFFEE</a>
                    <p class="pl-4 text-sm">
                        jln keledang No. 48 Vorvo Samarinda,Kalimantan Timur</p>
                </div>
                <section class="text-center place-items-center place-content-center pr-4">
                    <button class="hover:text-white text-sm active:bg-gray-500 bg-red-500 hover:bg-red-200 rounded-sm px-2 py-1">
                        Log out
                    </button>
                </section>
            </div>
        </div>
        <div class="flex flex-row">
            <div
                class="h-auto min-h-screen bg-gray-200 border-r-2 border-r-black text-black w-56 font-[Helvetica] ">
                <section class="pt-5 pb-5">
                    <section class="">
                        <a class="block pl-3 py-2 hover:text-gray-500 active:bg-gray-400 active:text-gray-900"
                            href="/dashboard">DashBoard</a>
                    </section>
                    <section class="">
                        <a class="block pl-3 py-2 hover:text-gray-500 active:bg-gray-400 active:text-gray-900"
                            href="/transaksi">Transaksi</a>
                    </section>
                    <section class="">
                        <a class="block pl-3 py-2 hover:text-gray-500 active:bg-gray-400 active:text-gray-900"
                            href="/stok">Stok</a>
                    </section>
                    <section class="">
                        <a class="block pl-3 py-2 hover:text-gray-500 active:bg-gray-400 active:text-gray-900"
                            href="#Barang Masuk">Barang Masuk</a>
                    </section>
                    <section class="">
                        <a class="block pl-3 py-2 hover:text-gray-500 active:bg-gray-400 active:text-gray-900"
                            href="#Menu Deka">Menu Deka</a>
                    </section>
                    <section class="">
                        <a class="block pl-3 py-2 hover:text-gray-500 active:bg-gray-400 active:text-gray-900"
                            href="#pengaturan">Pengaturan</a>
                    </section>
                </section>
            </div>
            {{-- isinya --}}
            <div class="bg-gray-300 w-full h-full p-9">
                <div class="border border-b-2 border-b-black pb-6">
                    <p class="text-6xl text-gray-900">Stok barang</p>
                </div>
                <div class="mt-6 text-center">
                    <p class="text-gray-900 uppercase bg-blue-300 border-x-2 border-black border-t-2 rounded-t-lg">stok</p>
                    <table class="w-full border-black border-y-2">
                        <thead>
                            <tr class="grid grid-cols-5">
                                <td class="border-black border-l-2 capitalize">id</td>
                                <td class="border-black border-l-2 capitalize">id barang</td>
                                <td class="border-black border-l-2 capitalize">stok sekarang</td>
                                <td class="border-black border-l-2 capitalize">h/b/t</td>
                                <td class="border-black border-l-2 capitalize border-r-2">aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="grid grid-cols-5">
                                <td class="border-black border-l-2 border-t-2 capitalize">1</td>
                                <td class="border-black border-l-2 border-t-2 capitalize">skm carnation</td>
                                <td class="border-black border-l-2 border-t-2 capitalize">5 kaleng</td>
                                <td class="border-black border-l-2 border-t-2 capitalize">8/10/2022</td>
                                <td class="border-black border-x-2 border-t-2 capitalize">
                                    <button class="bg-blue-600 text-white p-1 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                            width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
                                            viewBox="0 0 16 16">
                                            <g fill="currentColor">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </g>
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 text-white p-1 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                            width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
                                            viewBox="0 0 1024 1024">
                                            <path fill="currentColor"
                                                d="M864 256H736v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zm-200 0H360v-72h304v72z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
