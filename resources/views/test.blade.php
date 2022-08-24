<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.js"
        integrity="sha512-E378bwaeZf1nwXeJGIwTB58A5gPt5jFU3u6aTGja4ZdRFJeo/N/REKnBgNZOZlH6JdnOPO98vg2AnSGaNfCMFQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div id="badan" class="w-16 h-6 border-solid border-4 border-[grey] float-left">
        <div  class="segment w-0 h-6 bg-[lime] float-left"></div>
        <div  class="segment w-0 h-6 bg-[lime] float-left"></div>
        <div  class="segment w-0 h-6 bg-[lime] float-right"></div>
    </div>
    <div id="pala" class="w-[5px] h-[15px] mt-[10px] bg-[grey] float-left"></div>
</body>
<script>
    let animation = anime({
        targets: '.segment',
        width: 20,
        duration: 300,
        easing: 'linear',
        delay: function(el, i, l) {
            return i * 500;
        },
        endDelay: 500,
        loop: true
    });
</script>

</html>
