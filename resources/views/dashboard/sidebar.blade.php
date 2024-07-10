<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />

    <title>Dashboard</title>
</head>

<body>

    <!--start sidebar-->
    <div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4">
        <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
            <img class="w-[38px] h-[38px]" src="{{ asset('assets/img/LogoA.png') }}" alt="logo">
            <span class="text-lg font-medium  text-white ml-3 font-[Poppins]">Andini</span>
        </a>
        <ul class="mt-4">
            <li class="mb-1 group active">
                <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                    <i class="ri-home-5-line mr-3 text-lg"></i>
                    <span class="font-[Poppins] text-sm">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group ">
                <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md">
                    <i class="ri-home-5-line mr-3 text-lg"></i>
                    <span class="font-[Poppins] text-sm">Dashboard</span>
            </li>
            <!--end sidebar-->

        </ul>
    </div>



</body>

</html>
