<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi</title>
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
        <div class="flex flex-row ">
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
            <div class="bg-gray-200 w-full h-full p-9">
                <div class="border border-b-2 border-b-black pb-6">
                    <p class="text-6xl text-gray-900">Transaksi</p>
                </div>
                <div class="grid grid-flow-row grid-cols-3 space-x-5">
                    <table>
                        <thead>
                            <tr>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
