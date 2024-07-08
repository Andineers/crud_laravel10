<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>landing Page</title>
</head>
<body >

    <header class="px-24">
        <nav class="flex items-center justify-between mt-[20px] gap-36 w-full">
            <div class="flex items-center">
                <img src="{{ asset('assets/img/LogoA.png') }}" alt="logo" />
                <p class="text-base font-normal ml-2 ">AndiniIventory</p>
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
            <img class=" flex flex-col mt-[20px] relative text-center rounded-[20px] w-[1300px] h-[613px] left-[115px]" src="{{ asset('assets/img/heroImg.png') }}" alt="ImageHero">
            <h1 class="absolute top-[35%] left-[38%] font-bold text-[28px] text-white">Lorem ipsum dolor sit amet?</h1>
            <p class="text-center absolute top-[50%] left-[35%] text-white font-medium text-[20px]">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div>
            <h1 class="text-center gap-[20px] font-bold text-4xl flex flex-col justify-center left-[48%]">About</h1>
        </div>
        <div>
            <img class="flex items-center justify-between w-1/4 h-auto left-[100px]" src="{{ asset('assets/img/ImgAbout.png') }}" alt="ImageAbout">
            <p class=" font-normal " >Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, recusandae voluptatum. Voluptatum delectus id tempora possimus, iure odit deleniti suscipit eveniet voluptas. Quas non expedita nam error porro pariatur tempora.</p>
        </div>

    </main>



</body>
</html>
