<!DOCTYPE html>
<html lang="en">

<head>
    <x-kepala />
    <style type="text/tailwindcss">
        @layer utilities {
        .sidebar-expanded {
          @apply w-56 z-50;
        }
        .sidebar-hidden {
          @apply w-0 p-0 hidden;
        }
        .konten-push {
            @apply pl-56;
        }
        .konten-return {
            @apply pl-0;
        }
      }
   </style>
</head>

<body>
    {{-- sidebar --}}
    <aside id="sidebar" class="sidebar-hidden lg:sidebar-expanded h-auto min-h-screen bg-gradient-to-b from-gray-800 to-gray-600 border-r-2 border-r-black text-white font-[Helvetica] z-10 top-0 left-0 transition-all duration-300 fixed lg:block">
        <ul class="[&>*]:py-2 [&>*]:pl-3 hover:[&>*]:text-blue-300">
            <li>
                <a class="flex flex-row items-center duration-200 ease-in" href="/">
                    <span>
                        <svg class="w-8 h-8 pr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M11 21H5c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2h6v18zm2 0h6c1.1 0 2-.9 2-2v-7h-8v9zm8-11V5c0-1.1-.9-2-2-2h-6v7h8z" />
                        </svg>
                    </span>Dashboard
                </a>
            </li>
            <li>
                <a class="flex flex-row items-center duration-200 ease-in" href="/barang-masuk">
                    <span>
                        <svg class="w-8 h-8 pr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                            <path fill="currentColor" d="M11 3a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V3Zm4 0h-3v2h3V3Zm-1.5 4a.5.5 0 0 1 .5.5v5.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L13 13.293V7.5a.5.5 0 0 1 .5-.5ZM4 12a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-2Zm4 0H5v2h3v-2Zm-5.5 1a.5.5 0 0 1 .5.5V15a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1.5a.5.5 0 0 1 1 0V15a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-1.5a.5.5 0 0 1 .5-.5Z" />
                        </svg>
                    </span>Barang Masuk
                </a>
            </li>
            <li>
                <a class="flex flex-row items-center duration-200 ease-in" href="/barang-keluar">
                    <span>
                        <svg class="w-8 h-8 pr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                            <path fill="currentColor" d="M11 3a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V3Zm4 0h-3v2h3V3Zm-1.854 4.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L14 8.707V14.5a.5.5 0 0 1-1 0V8.707l-1.146 1.147a.5.5 0 0 1-.708-.708l2-2ZM4 12a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-2Zm4 0H5v2h3v-2Zm-5.5 1a.5.5 0 0 1 .5.5V15a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1.5a.5.5 0 0 1 1 0V15a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-1.5a.5.5 0 0 1 .5-.5Z" />
                        </svg>
                    </span>Barang Keluar
                </a>
            </li>
            <li>
                <a class="flex flex-row items-center duration-200 ease-in" href="/transaksi">
                    <span>
                        <svg class="w-8 h-8 pr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M2 7a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7Z" />
                                <circle cx="12" cy="12" r="3" />
                                <path d="M2 9v0a4 4 0 0 0 4-4v0m12 14v0a4 4 0 0 1 4-4v0" />
                            </g>
                        </svg>
                    </span>Transaksi
                </a>
            </li>
            <li>
                <a class="flex flex-row items-center duration-200 ease-in" href="/stok">
                    <span>
                        <svg class="w-8 h-8 pr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                            <path fill="currentColor" d="M24 21c-.5 0-1-.2-1.4-.6l-3-3c-.4-.4-.6-.9-.6-1.4s.2-1 .6-1.4l3-3c.4-.4.9-.6 1.4-.6c.5 0 1 .2 1.4.6l3 3c.4.4.6.9.6 1.4c0 .5-.2 1-.6 1.4l-3 3c-.4.4-.9.6-1.4.6zm0-8l-3 3l3 3l3-3l-3-3zm-8 0c-.5 0-1-.2-1.4-.6l-3-3C11.2 9 11 8.5 11 8s.2-1 .6-1.4l3-3c.4-.4.9-.6 1.4-.6c.5 0 1 .2 1.4.6l3 3c.4.4.6.9.6 1.4c0 .5-.2 1-.6 1.4l-3 3c-.4.4-.9.6-1.4.6zm0-8l-3 3l3 3l3-3l-3-3zm0 24c-.5 0-1-.2-1.4-.6l-3-3c-.4-.4-.6-.9-.6-1.4s.2-1 .6-1.4l3-3c.4-.4.9-.6 1.4-.6c.5 0 1 .2 1.4.6l3 3c.4.4.6.9.6 1.4c0 .5-.2 1-.6 1.4l-3 3c-.4.4-.9.6-1.4.6zm0-8l-3 3l3 3l3-3l-3-3zm-8 0c-.5 0-1-.2-1.4-.6l-3-3C3.2 17 3 16.5 3 16s.2-1 .6-1.4l3-3c.4-.4.9-.6 1.4-.6c.5 0 1 .2 1.4.6l3 3c.4.4.6.9.6 1.4c0 .5-.2 1-.6 1.4l-3 3c-.4.4-.9.6-1.4.6zm0-8l-3 3l3 3l3-3l-3-3z" />
                        </svg>
                    </span>Stok
                </a>
            </li>
        </ul>
    </aside>
    {{-- end sidebar --}}

    <div id="konten" class="w-full ">
        <div class="konten-return lg:konten-push">
            <div class="w-full h-full bg-gray-100 sticky top-0 px-7 text-gray-900 text-[times-new-roman]">
                <div class="p-2 w-full h-full flex flex-row justify-between place-content-center place-items-center">
                    <div class="flex place-items-center">
                        <div class="pr-4 visible lg:hidden">
                            <button id="toggle-sidebar">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.75 12.25h10.5m-10.5-4h10.5m-10.5-4h10.5" />
                                </svg>
                            </button>
                        </div>
                        <a class="text-2xl invisible lg:visible uppercase" href="/dashboard">stok deka</a>
                    </div>
                    <div>
                        <a href="{{ route('logout') }}" class="hover:text-white active:bg-gray-500 capitalize text-xs bg-red-200 hover:bg-red-500 rounded-sm px-2 py-[5px]" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">sign out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>

            <div class="bg-gray-100 min-h-screen w-full h-full p-9">
                @yield('content')
            </div>

            <div class="flex px-8 py-4 bg-slate-100">
                <p class="text-sm w-full capitalize">
                    jln keledang No. 48 Vorvo Samarinda, Kalimantan Timur
                </p>
            </div>
        </div>
    </div>
    <script>
        const button = document.getElementById('toggle-sidebar');
        const sidebar = document.getElementById('sidebar');
        const konten = document.getElementById('konten');
        button.addEventListener('click', () => {

            if (sidebar.classList.contains('sidebar-hidden'))
            {
                sidebar.classList.add('sidebar-expanded');
                sidebar.classList.remove('sidebar-hidden');
                konten.classList.add('konten-push');
                konten.classList.remove('konten-return');
            } 
            else {
                konten.classList.add('konten-return');
                konten.classList.remove('konten-push');
                sidebar.classList.add('sidebar-hidden');
                sidebar.classList.remove('sidebar-expanded');
            }
        });

    </script>
</body>

</html>
