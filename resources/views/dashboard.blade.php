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
    <div class="grid grid-cols-1 grid-rows-1 w-full">
        <div class="w-full h-full bg-stone-700 max-h-12">
            <div
                class="p-2 w-full h-full flex flex-row text-white text-2xl text-[times-new-roman] justify-between place-items-center">
                <div class="flex place-items-center">
                    <a class="" href="#home">DEKADE COFFEE</a>
                    <p class="pl-4 text-sm">
                        jln keledang No. 48 Vorvo Samarinda,Kalimantan Timur</p>
                </div>
                <div class="hover:text-black text-sm pr-4">
                    <button class="bg-red-500 active:bg-red-800 px-2 py-1">
                        Log-out
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="h-screen bg-gray-600 text-gray-200 w-48 font-[Helvetica]">
                <section class="space-y-6 pt-5 pb-5">
                    <section class="cursor-pointer border-none  bg-none text-left outline-none">
                        <a class="block cursor-pointer border-none bg-none text-left outline-none hover:text-gray-500 active:bg-green-600 active:text-white focus:bg-gray-200 focus:text-gray-900"
                            href="#dashboard">DashBoard</a>
                    </section>
                    <section class="cursor-pointer border-none  bg-none text-left outline-none">
                        <a class="block cursor-pointer border-none bg-none text-left outline-none hover:text-gray-500 active:bg-green-600 active:text-white"
                            href="/transaksi">Transaksi</a>
                    </section>
                    <section class="cursor-pointer border-none  bg-none text-left outline-none">
                        <a class="block cursor-pointer border-none bg-none text-left outline-none hover:text-gray-500 active:bg-green-600 active:text-white"
                            href="#services">Services</a>
                    </section>

                    <section class="cursor-pointer border-none  bg-none text-left outline-none">
                        <a class="block cursor-pointer border-none bg-none text-left outline-none hover:text-gray-500 active:bg-green-600 active:text-white"
                            href="#clients">Clients</a>
                    </section>

                    <section class="cursor-pointer border-none  bg-none text-left outline-none space-2">
                        <a class="block cursor-pointer border-none bg-none text-left outline-none hover:text-gray-500 active:bg-green-600 active:text-white"
                            href="#contact">Contact</a>
                    </section>

                    <section class="cursor-pointer border-none  bg-none text-left outline-none">
                        <a class="block cursor-pointer border-none bg-none text-left outline-none hover:text-gray-500 active:bg-green-600 active:text-white"
                            href="#contact">Search</a>
                    </section>
                </section>
            </div>
            <div class="bg-gray-200 w-full h-full p-9">
                <div class="border border-b-2 border-b-black pb-6">
                    <p class="text-6xl text-gray-500">Dashboard</p>
                </div>
                <div class="grid grid-flow-row grid-cols-4 space-x-5">
                    <section class="border-black border-2 flex flex-col place-items-center my-6 text-center">
                        <div class="bg-blue-400 w-full px-8 py-4">
                            <p class="text-white">Stock Barang</p>
                        </div>
                        <div class="py-6 text-2xl">
                            90
                        </div>
                        <div class="bg-blue-100 text-blue-400 font-bold py-4 w-full text-center">
                            <button>Tabel Barang</button>
                        </div>
                    </section>
                    <section class="border-black border-2 flex flex-col place-items-center my-6 text-center">
                        <div class="bg-blue-400 w-full px-8 py-4">
                            <p class="text-white">Barang Masuk</p>
                        </div>
                        <div class="py-6 text-2xl">
                            10
                        </div>
                        <div class="bg-blue-100 text-blue-400 font-bold py-4 w-full text-center">
                            <button>Tabel Barang</button>
                        </div>
                    </section>
                    <section class="border-black border-2 flex flex-col place-items-center my-6 text-center">
                        <div class="bg-blue-400 w-full px-8 py-4">
                            <p class="text-white">Menu Deka</p>
                        </div>
                        <div class="py-6 text-2xl">
                            4
                        </div>
                        <div class="bg-blue-100 text-blue-400 font-bold py-4 w-full text-center">
                            <button>Tabel Menu</button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
