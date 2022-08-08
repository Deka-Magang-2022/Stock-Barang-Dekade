<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1 . 0">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>

<body>
    <div class="sidenav fixed top-0 left-0 z-10 h-full w-48 overflow-x-hidden bg-gray-700 font-[Helvetica] text-white">
        <section class="pb-5 pt-5 text-3xl">
            <a class="block cursor-pointer place-items-center border-none bg-none text-center outline-none hover:text-gray-500 active:bg-green-600 active:text-white"
                href="#about">Dashboard</a>
        </section>
        <section class="pt-5">
            <button
                class="dropdown-btn block w-full cursor-pointer border-none bg-none text-left outline-none hover:text-gray-500 focus:bg-green-600 active:text-white">
                Transaction
                <span class="iconify-inline float-right h-auto w-6" data-icon="bi:caret-down"></span>
            </button>
            <div
                class="dropdown-container hidden cursor-pointer border-none bg-[#d5c8c6] bg-none pl-5 text-left outline-none">
                <a class="block cursor-pointer border-none bg-none text-left outline-none hover:text-gray-500 active:text-white"
                    href="#">Contoh </a>
                <a class="block cursor-pointer border-none bg-none text-left outline-none hover:text-gray-500 active:text-white"
                    href="#">Contoh </a>
                <a class="block cursor-pointer border-none bg-none text-left outline-none hover:text-gray-500 active:text-white"
                    href="#">Contoh </a>
            </div>
            <a class="block cursor-pointer border-none bg-none text-left outline-none hover:text-gray-500 active:bg-green-600 active:text-white"
                href="#services">Services</a>
            <a class="block cursor-pointer border-none bg-none text-left outline-none hover:text-gray-500 active:bg-green-600 active:text-white"
                href="#clients">Clients</a>
            <a class="block cursor-pointer border-none bg-none text-left outline-none hover:text-gray-500 active:bg-green-600 active:text-white"
                href="#contact">Contact</a>
            <a class="block cursor-pointer border-none bg-none text-left outline-none hover:text-gray-500 active:bg-green-600 active:text-white"
                href="#contact">Search</a>
        </section>
    </div>
    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
</body>

</html>
