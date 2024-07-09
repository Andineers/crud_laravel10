<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" /> --}}


    <title>landing Page</title>
</head>

<body>

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
                <a href="#" id="btn-login"
                    class="bg-customGreen text-white font-serif py-2 px-4 rounded-[20px]">Login</a>
            </div>

        </nav>
    </header>

    <main>
        <div>
            <img class=" flex flex-col mt-[20px] relative text-center rounded-[20px] w-[1300px] h-[613px] left-[115px]"
                src="{{ asset('assets/img/heroImg.png') }}" alt="ImageHero">
            <h1 class="absolute top-[40%] left-[38%] font-bold text-[28px] text-white">Selamat datang di AndiniIventory</h1>
            <p class="text-center absolute top-[53%] left-[27%] text-white font-medium text-[20px]">Platform ini untuk mengelola dan mengoptimalkan persediaan barang dengan mudah.</p>
        </div>

        <div>
            <h1 class="text-center gap-[20px] font-bold text-4xl flex flex-col justify-center left-[48%] pt-[50px]">About</h1>
        </div>
        <div class="grid grid-cols-2 gap-10">
            <div class="relative">
                <img data-aos="fade-right"="" class="w-1/2 h-auto absolute left-28"
                     src="{{ asset('assets/img/ImgAbout.png') }}" alt="ImageAbout">
            </div>
            <p data-aos="fade-left" class="font-normal text-justify pt-24 text-[20px]">
                AndiniInventory ini dibuat untuk pengelolaan efisien<br> persediaan barang.
                Dengan fitur-fitur seperti <br>penambahan stok barang,menampilkan stok barang,<br>
                mengubah atau memperbarui stok barang,<br> dan menghapus stok barang.
            </p>
        </div>

        <div>
            <h1 class="text-center gap-[20px] font-bold text-4xl flex flex-col justify-center left-[48%] pt-[100px]">Product</h1>
        </div>
        <div>
            <img class="flex flex-col relative w-full h-[500px] pt-[40px] " src="{{ asset('assets/img/Background.png') }}" alt="bgProduct">
        </div>



    </main>



</body>

</html>
