<!DOCTYPE html>
<html lang="en">

<head>
    <x-kepala/>
</head>

<body>
    <div class="w-full">
        <x-sidebar />
        <div class="pl-0 lg:pl-56">
            <div class="w-full h-full bg-gray-100 sticky top-0 px-7 text-gray-900 text-[times-new-roman]">
                <div class="p-2 w-full h-full flex flex-row  justify-between place-items-center">
                    <div class="flex place-items-center">
                        <a class="text-2xl" href="/dashboard">DEKA STOCK</a>
                    </div>
                    <section>
                        <a href="{{ route('logout') }}"
                            class="hover:text-white active:bg-gray-500 bg-red-200 hover:bg-red-500 rounded-sm px-2 py-1"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </section>
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
</body>

</html>
