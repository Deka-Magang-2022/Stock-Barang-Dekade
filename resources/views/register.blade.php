<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-col w-full h-full min-h-screen place-content-center place-items-center
     bg-no-repeat bg-cover bg-[url(https://media.istockphoto.com/photos/empty-dark-wooden-table-in-front-of-abstract-blurred-bokeh-background-picture-id1130714046?k=20&m=1130714046&s=612x612&w=0&h=b4bENp3GV_9nwHlYz3PJJfZkL8IlW4DTzJpV-R5XbNw=)]">
        <form class="w-full max-w-sm">
            <div class="space-y-2">
                <section class="">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2a5 5 0 1 0 5 5a5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3a3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"/></svg>
                    <input
                        class="form-control p-2 focus:placeholder:text-transparent block text-black transition ease-in-out m-0  placeholder-gray-900/70 w-full focus:outline-none bg-gray-200 focus:ring-0 border-b-black"
                        placeholder="Kurt Knispel" type="text" name="username" id="password" />
                </section>
                <section class="">
                    <input
                        class="form-control p-2 focus:placeholder:text-transparent block text-black transition ease-in-out m-0 placeholder-gray-900/70 w-full focus:outline-none bg-gray-200 focus:ring-0 border-b-black"
                        placeholder="your@email.com" type="email" name="email" id="email" />
                </section>
                <section class="">
                    <input
                        class="form-control p-2 focus:placeholder:text-transparent block text-black transition ease-in-out m-0  placeholder-gray-900/70 w-full focus:outline-none bg-gray-200 focus:ring-0 border-b-black"
                        placeholder="*******" type="password" name="password" id="password" />
                </section>
            </div>
            <button class="bg-blue-400 px-4 py-3 rounded-md ">
                Register
            </button>
        </form>
    </div>
</body>

</html>
