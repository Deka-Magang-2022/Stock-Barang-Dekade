<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaturan</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    {{-- navnya --}}
    <div class="grid grid-cols-1 grid-rows-1 w-full">
        <div class="w-full h-full bg-sky-600">
            <div
                class="p-2 w-full h-full flex flex-row text-gray-100 text-[times-new-roman] justify-between place-items-center">
                <div class="flex place-items-center">
                    <a class="text-2xl" href="/dashboard">DEKADE COFFEE</a>
                    <p class="pl-4 text-sm">
                        Jln keledang No. 48 Vorvo Samarinda, Kalimantan Timur
                    </p>
                </div>
                <section class="pr-4">
                    <button
                        class="hover:text-white active:bg-gray-500 bg-red-500 hover:bg-red-200 rounded-sm px-2 py-1">
                        Log out
                    </button>
                </section>
            </div>
        </div>
        <div class="flex flex-row">
            <div
                class="h-auto min-h-screen bg-gradient-to-b from-gray-800 to-gray-600 border-r-2 border-r-black text-white w-56 font-[Helvetica] ">
                <section class="pt-5 pb-5">
                    <section class="">
                        <a class="flex flex-row items-center pl-3 py-2 hover:bg-gray-500" href="/dashboard">
                            <span>
                                <svg class="w-8 h-8 pr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M11 21H5c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h6v18zm2 0h6c1.1 0 2-.9 2-2v-7h-8v9zm8-11V5c0-1.1-.9-2-2-2h-6v7h8z" />
                                </svg>
                            </span>DashBoard
                        </a>
                    </section>
                    <section class="">
                        <a class="flex flex-row items-center pl-3 py-2 hover:bg-gray-500" href="/transaksi">
                            <span>
                                <svg class="w-8 h-8 pr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                        <path
                                            d="M2 7a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7Z" />
                                        <circle cx="12" cy="12" r="3" />
                                        <path d="M2 9v0a4 4 0 0 0 4-4v0m12 14v0a4 4 0 0 1 4-4v0" />
                                    </g>
                                </svg>
                            </span>Transaksi
                        </a>
                    </section>
                    <section class="">
                        <a class="flex flex-row items-center pl-3 py-2 hover:bg-gray-500" href="/stok">
                            <span>
                                <svg class="w-8 h-8 pr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 32 32">
                                    <path fill="currentColor"
                                        d="M24 21c-.5 0-1-.2-1.4-.6l-3-3c-.4-.4-.6-.9-.6-1.4s.2-1 .6-1.4l3-3c.4-.4.9-.6 1.4-.6c.5 0 1 .2 1.4.6l3 3c.4.4.6.9.6 1.4c0 .5-.2 1-.6 1.4l-3 3c-.4.4-.9.6-1.4.6zm0-8l-3 3l3 3l3-3l-3-3zm-8 0c-.5 0-1-.2-1.4-.6l-3-3C11.2 9 11 8.5 11 8s.2-1 .6-1.4l3-3c.4-.4.9-.6 1.4-.6c.5 0 1 .2 1.4.6l3 3c.4.4.6.9.6 1.4c0 .5-.2 1-.6 1.4l-3 3c-.4.4-.9.6-1.4.6zm0-8l-3 3l3 3l3-3l-3-3zm0 24c-.5 0-1-.2-1.4-.6l-3-3c-.4-.4-.6-.9-.6-1.4s.2-1 .6-1.4l3-3c.4-.4.9-.6 1.4-.6c.5 0 1 .2 1.4.6l3 3c.4.4.6.9.6 1.4c0 .5-.2 1-.6 1.4l-3 3c-.4.4-.9.6-1.4.6zm0-8l-3 3l3 3l3-3l-3-3zm-8 0c-.5 0-1-.2-1.4-.6l-3-3C3.2 17 3 16.5 3 16s.2-1 .6-1.4l3-3c.4-.4.9-.6 1.4-.6c.5 0 1 .2 1.4.6l3 3c.4.4.6.9.6 1.4c0 .5-.2 1-.6 1.4l-3 3c-.4.4-.9.6-1.4.6zm0-8l-3 3l3 3l3-3l-3-3z" />
                                </svg>
                            </span>Stok
                        </a>
                    </section>
                    <section class="">
                        <a class="flex flex-row items-center pl-3 py-2 hover:bg-gray-500" href="/barang-masuk">
                            <span>
                                <svg class="w-8 h-8 pr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M11 3a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V3Zm4 0h-3v2h3V3Zm-1.5 4a.5.5 0 0 1 .5.5v5.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L13 13.293V7.5a.5.5 0 0 1 .5-.5ZM4 12a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-2Zm4 0H5v2h3v-2Zm-5.5 1a.5.5 0 0 1 .5.5V15a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1.5a.5.5 0 0 1 1 0V15a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-1.5a.5.5 0 0 1 .5-.5Z" />
                                </svg>
                            </span>Barang Masuk
                        </a>
                    </section>
                    <section class="">
                        <a class="flex flex-row items-center pl-3 py-2 hover:bg-gray-500" href="/pengaturan">
                            <span>
                                <svg class="w-8 h-8 pr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="m12 23l-9.5-5.5v-11L12 1l9.5 5.5v11L12 23Zm0-19.688L4.5 7.653v8.694l7.5 4.342l7.5-4.342V7.653L12 3.311v.001ZM12 16a4 4 0 1 1 2.828-1.172A4.027 4.027 0 0 1 12 16Zm0-6a2 2 0 1 0-.001 4A2 2 0 0 0 12 10Z" />
                                </svg>
                            </span>Pengaturan
                        </a>
                    </section>
                </section>
            </div>
            {{-- isinya --}}
            <div class="bg-gray-300 w-full h-full p-9">
                <div class="border-b-2 border-b-black pb-6">
                    <p class="text-6xl text-gray-900">Pengaturan</p>
                </div>
                <div class="p-6">
                    <p class="font-semibold capitalize text-xl">profil</p>
                    <div class="">
                        <form>
                            <div class="flex flex-row py-6">
                                <div class="grid grid-rows-2 w-full">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" name="username" value="kurt knispel">
                                    <label for="tentang">Tentang</label>
                                    <textarea name="tentang" id="tentang" cols="30" rows="5"></textarea>
                                </div>
                                <label for="foto">Foto</label>
                                <input class="w-48 rounded-full h-auto" type="image"
                                    src="https://cdn.pixabay.com/photo/2017/06/13/12/54/profile-2398783_960_720.png"
                                    alt="anggaplah foto mu"
                                    name="foto"
                                    >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
