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

    <div class="flex flex-col w-full h-full min-h-screen">
        <div>
            <section class="w-full h-full min-h-screen flex flex-col place-content-center place-items-center">
                <div class="w-full max-w-lg ">
                    <form class="px-3 py-7 rounded-lg ">
                        <div class="flex flex-col  p-5 space-y-7">
                            <section class="flex flex-row space-x-3">
                                <input
                                    class="form-control p-2 focus:placeholder:text-transparent block text-black transition ease-in-out m-0 placeholder-gray-900/70 w-full focus:outline-none bg-gray-200 focus:ring-0 border-b-black"
                                    placeholder="E-mail" type="email" name="email" id="email" />
                            </section>
                            <section class="flex flex-row space-x-3">

                                <input
                                    class="form-control p-2 focus:placeholder:text-transparent block text-black transition ease-in-out m-0  placeholder-gray-900/70 w-full focus:outline-none bg-gray-200 focus:ring-0 border-b-black"
                                    placeholder="Password" type="password" name="password" id="password" />
                            </section>
                            <section class="flex flex-row space-x-3">

                                <input
                                    class="form-control p-2 focus:placeholder:text-transparent block text-black transition ease-in-out m-0  placeholder-gray-900/70 w-full focus:outline-none bg-gray-200 focus:ring-0 border-b-black"
                                    placeholder="Confirm password" type="password" name="confirm password"
                                    id="password" />
                            </section>
                            <section class="border-2 w-full text-start p-5">
                                <p>Sig-in with</p>
                                <section class="flex flex-col space-y-2 py-3">
                                    <button
                                        class="border border-transparent flex flex-row text-center justify-center justify-items-center hover:bg-green-300 rounded border-green-900 hover:ring-2">
                                        <a class="w-6" href="https://cdnlogo.com/logo/google-icon_489.html"><img
                                                src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg"></a>
                                        Google
                                    </button>
                                    <button
                                        class="border border-transparent flex flex-row text-center justify-center justify-items-center hover:bg-green-300 rounded border-green-900 hover:ring-2">
                                        Github
                                    </button>
                                    <button
                                        class="border border-transparent flex flex-row text-center justify-center justify-items-center hover:bg-green-300 rounded border-green-900 hover:ring-2">
                                        Twitter
                                    </button>
                                    <button
                                        class="border border-transparent flex flex-row text-center justify-center justify-items-center hover:bg-green-300 rounded border-green-900 hover:ring-2">
                                        Facebook
                                    </button>
                                    <button
                                        class="border border-transparent flex flex-row text-center justify-center justify-items-center hover:bg-green-300 rounded border-green-900 hover:ring-2">
                                        Instagram
                                    </button>
                                </section>
                                <div class="flex flex-row">
                                    <input type="checkbox" name="" id="">
                                    <p>remember me</p>
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
