<!DOCTYPE html>
<html lang="en">

<head>
    <x-kepala />
</head>

<body>
    <div
        class="flex flex-col w-full h-full min-h-screen bg-no-repeat bg-cover bg-[url(https://img.freepik.com/free-vector/realistic-coffee-time-background-with-coffee-cup_79603-1560.jpg?w=2000)] dark:bg-gray-800">
        <div class="pr-0 lg:pr-32">
            <div class="w-full h-full min-h-screen flex flex-col place-content-center place-items-center lg:place-items-end">
                <div class="w-full max-w-lg">
                    <p class="text-6xl pb-10 place-items-center text-center font-[Helvetica] uppercase">deka stok</p>
                    <div class=" bg-white px-3 py-7 rounded-lg">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>
