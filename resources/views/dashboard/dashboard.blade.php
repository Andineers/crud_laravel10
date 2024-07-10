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
    <style>

        body {
            background-color: #F8F9FA;
            height: 100vh;
        }
    </style>

    <title>Dashboard</title>
</head>

<body>


    <div class="flex justify-end p-4">
        <div class="flex items-center border border-gray-300 shadow-lg rounded-lg p-2 w-60">
            <img src="#" alt="Profile Picture" class="rounded-full w-10 h-10">
            <span class="ml-3 font-[Poppins] font-medium">Rizky Andini</span>
        </div>
    </div>

    <div class="w-full mt-32 px-10 flex justify-center">
        <div class="shadow-md w-[50%] rounded-md overflow-x-auto">
            <table class="w-full">
                <thead class="p-3 bg-gray-50">
                    <tr>
                        <th class="p-3">No</th>
                        <th class="p-3">Nama Barang</th>
                        <th class="p-3">Jenis Barang</th>
                        <th class="p-3">Code Barang</th>
                        <th class="p-3">Stock Barang</th>
                        <th class="p-3">Action</th>
                    </tr>

                </thead>

            </table>
        </div>
    </div>
    @include('dashboard.sidebar')
</body>

</html>
