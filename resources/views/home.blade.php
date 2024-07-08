<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>landing Page</title>
</head>
<body >

    <header class="px-24">
        <nav class="flex items-center justify-between mt-10 gap-36 w-full">
            <div class="flex items-center">
                <img src="" alt="#" />
                <p class="text-base font-medium ml-2">Logo</p>
            </div>

            <ul class="flex gap-15">
                <li><a href="#" class="text-base text-black no-underline ml-10">Home</a></li>
                <li><a href="#" class="text-base text-black no-underline ml-10">About</a></li>
                <li><a href="#" class="text-base text-black no-underline ml-10">Product</a></li>
                <li><a href="#" class="text-base text-black no-underline ml-10">Contact</a></li>
            </ul>

            <div class="">
                <a href="#" id="btn-login" class="bg-customGreen text-white font-serif py-2 px-4 rounded-[20px]">Login</a>
            </div>

        </nav>
    </header>

    <main>
        <div>
            <img src="{{ assets('assets/img/ImgAbout.png') }}" class="flex flex-col " alt="ImageHero">
        </div>

    </main>



</body>
</html>
