<!DOCTYPE html>
<html lang="en">

<head>
    <x-kepala />
</head>

<body>
    <div
        class="flex flex-col w-full h-full min-h-screen bg-no-repeat bg-cover bg-[url(https://img.freepik.com/free-vector/realistic-coffee-time-background-with-coffee-cup_79603-1560.jpg?w=2000)] dark:bg-gray-800">
        <div class="pr-0 sm:pr-32">
            <div class="w-full h-full min-h-screen flex flex-col place-content-center place-items-end">
                <div class="w-full max-w-lg">
                    <div class=" bg-white sm:bg-gray-900/[0.08] px-3 py-7 rounded-lg">
                        <p class="text-6xl pb-10 place-items-center text-center font-[Helvetica]">DEKA STOCK</p>
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>
