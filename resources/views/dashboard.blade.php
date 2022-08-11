<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <title>STOK DEKADE</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    {{-- navnya --}}
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
                class="h-auto min-h-screen bg-gradient-to-b from-gray-300 to-gray-400 border-r-2 border-r-black text-black w-56 font-[Helvetica] ">
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
                            href="/barang-masuk">Barang Masuk</a>
                    </section>
                    <section class="">
                        <a class="block pl-3 py-2 hover:text-gray-500 active:bg-gray-400 active:text-gray-900"
                            href="/pengaturan">Pengaturan</a>
                    </section>
                </section>
            </div>
            {{-- isinya --}}
            <div class="bg-gray-200 w-full h-full p-9">
                <div class="border-b-2 border-b-black pb-6">
                    <p class="text-6xl text-gray-900">Dashboard</p>
                </div>
                <div class="grid grid-flow-row grid-cols-3 space-x-5">
                    <section class="border-blue-400 border-2 flex flex-col place-items-center my-6 text-center">
                        <div class="bg-blue-400 w-full px-8 py-4">
                            <p class="text-gray-100">Stock Barang</p>
                        </div>
                        <div class="py-6 text-2xl">
                            90
                        </div>
                        <div class="bg-gray-300 text-blue-400 font-bold py-4 w-full text-center">
                            <button>Tabel Barang</button>
                        </div>
                    </section>
                    <section class="border-gray-300 border-2 flex flex-col place-items-center my-6 text-center">
                        <div class="bg-green-100 w-full px-8 py-4">
                            <p class="text-green-600">Barang Masuk</p>
                        </div>
                        <div class="py-6 text-2xl">
                            10
                        </div>
                        <div class="bg-gray-300 text-blue-400 font-bold py-4 w-full text-center">
                            <button>Tabel Barang</button>
                        </div>
                    </section>
                    <section class="border-rose-100 border-2 flex flex-col place-items-center my-6 text-center">
                        <div class="bg-rose-100 w-full px-8 py-4">
                            <p class="text-rose-600">Menu Deka</p>
                        </div>
                        <div class="py-6 text-2xl">
                            4
                        </div>
                        <div class="bg-gray-300 text-blue-400 font-bold py-4 w-full text-center">
                            <button>Tabel Menu</button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
