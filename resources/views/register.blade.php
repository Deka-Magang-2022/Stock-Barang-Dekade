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
    <div
        class="flex flex-col w-full h-full min-h-screen place-content-center pr-32 place-items-end bg-no-repeat bg-cover bg-[url(https://media.istockphoto.com/photos/empty-dark-wooden-table-in-front-of-abstract-blurred-bokeh-background-picture-id1130714046?k=20&m=1130714046&s=612x612&w=0&h=b4bENp3GV_9nwHlYz3PJJfZkL8IlW4DTzJpV-R5XbNw=)]">
        <form class="w-full max-w-sm">
            <div class="space-y-2">
                <section class="flex flex-row bg-gray-200 items-center">
                    <svg class="w-auto h-6 pl-1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                        width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 2a5 5 0 1 0 5 5a5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3a3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z" />
                    </svg>
                    <input
                        class="form-control py-2 pr-2 pl-1 focus:placeholder:text-transparent block text-black transition ease-in-out m-0  placeholder-gray-900/70 w-full focus:outline-none bg-gray-200 focus:ring-0 border-b-black"
                        placeholder="Kurt Knispel" type="text" name="username" id="password">
                </section>
                <section class="flex flex-row bg-gray-200 items-center">
                    <svg class="w-auto h-6 pl-1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                        width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10h5v-2h-5c-4.34 0-8-3.66-8-8s3.66-8 8-8s8 3.66 8 8v1.43c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57V12c0-2.76-2.24-5-5-5s-5 2.24-5 5s2.24 5 5 5c1.38 0 2.64-.56 3.54-1.47c.65.89 1.77 1.47 2.96 1.47c1.97 0 3.5-1.6 3.5-3.57V12c0-5.52-4.48-10-10-10zm0 13c-1.66 0-3-1.34-3-3s1.34-3 3-3s3 1.34 3 3s-1.34 3-3 3z" />
                    </svg>
                    <input
                        class="form-control py-2 pr-2 pl-1 focus:placeholder:text-transparent block text-black transition ease-in-out m-0 placeholder-gray-900/70 w-full focus:outline-none bg-gray-200 focus:ring-0 border-b-black"
                        placeholder="your@email.com" type="email" name="email" id="email" />
                </section>
                <section class="flex flex-row bg-gray-200 items-center">
                    <svg class="w-auto h-6 pl-1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                        width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="M21 2a8.998 8.998 0 0 0-8.612 11.612L2 24v6h6l10.388-10.388A9 9 0 1 0 21 2Zm0 16a7.013 7.013 0 0 1-2.032-.302l-1.147-.348l-.847.847l-3.181 3.181L12.414 20L11 21.414l1.379 1.379l-1.586 1.586L9.414 23L8 24.414l1.379 1.379L7.172 28H4v-3.172l9.802-9.802l.848-.847l-.348-1.147A7 7 0 1 1 21 18Z" />
                        <circle cx="22" cy="10" r="2" fill="currentColor" />
                    </svg>
                    <input
                        class="form-control py-2 pr-2 pl-1 focus:placeholder:text-transparent block text-black transition ease-in-out m-0  placeholder-gray-900/70 w-full focus:outline-none bg-gray-200 focus:ring-0 border-b-black"
                        placeholder="•••••••••" type="password" name="password" id="password" />
                </section>
                <section class="flex flex-row bg-gray-200 items-center">
                    <svg class="w-auto h-6 pl-1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                        width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="M21 2a8.998 8.998 0 0 0-8.612 11.612L2 24v6h6l10.388-10.388A9 9 0 1 0 21 2Zm0 16a7.013 7.013 0 0 1-2.032-.302l-1.147-.348l-.847.847l-3.181 3.181L12.414 20L11 21.414l1.379 1.379l-1.586 1.586L9.414 23L8 24.414l1.379 1.379L7.172 28H4v-3.172l9.802-9.802l.848-.847l-.348-1.147A7 7 0 1 1 21 18Z" />
                        <circle cx="22" cy="10" r="2" fill="currentColor" />
                    </svg>
                    <input
                        class="form-control py-2 pr-2 pl-1 focus:placeholder:text-transparent block text-black transition ease-in-out m-0  placeholder-gray-900/70 w-full focus:outline-none bg-gray-200 focus:ring-0 border-b-black"
                        placeholder="Confirm Password" type="password" name="confirm_password" id="confirm_password" />
                </section>
                <button
                    class="bg-blue-500/70 text-white hover:text-white hover:bg-gray-800  py-2 w-full max-w-sm focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-300 ease-in-out"
                    href="">
                    Register
                </button>
            </div>
        </form>
    </div>
</body>

</html>
