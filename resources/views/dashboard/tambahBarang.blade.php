<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <title>Document</title>
</head>

<body>

    <!-- Button Kembali -->
    <div class="mb-4 mt-10">
        <a href="{{ route('dashboard') }}"
            class="bg-gray-500 font-[Poppins] text-white px-4 py-2 m-10 rounded hover:bg-gray-600 focus:outline-none">
            Kembali
        </a>
    </div>

    <!-- Table Tambah Barang -->
    <form method="POST" action="{{ route('tambah') }}">
        @csrf
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <label class="block font-[Poppins] text-gray-700 text-sm font-bold mb-2" for="namaBarang">
                    Nama Barang
                </label>
                <input type="text" id="namaBarang" name="name"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Nama Barang">
            </div>
            <div class="mb-4">
                <label class="block font-[Poppins] text-gray-700 text-sm font-bold mb-2" for="codeBarang">
                    Code Barang
                </label>
                <input type="text" id="codeBarang" name="code"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Code Barang">
            </div>
            <div class="mb-4">
                <label class="block font-[Poppins] text-gray-700 text-sm font-bold mb-2" for="jenisBarang">
                    Jenis Barang
                </label>
                <input type="text" id="jenisBarang" name="jenis"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Jenis Barang">
            </div>
            <div class="mb-4">
                <label class="block font-[Poppins] text-gray-700 text-sm font-bold mb-2" for="stokBarang">
                    Stok Barang
                </label>
                <input type="number" id="stokBarang" name="stock"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Stok Barang">
            </div>
            <div class="mb-4">
                <label class="block font-[Poppins] text-gray-700 text-sm font-bold mb-2" for="namaBarang">
                    Harga
                </label>
                <input type="text" id="namaBarang" name="harga"
                    class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Harga">
            </div>

            <!-- Buttons Cancel and Save -->
            <div class="flex justify-end mt-4">
                <a href="{{ route('dashboard') }}"
                    class="bg-red-500 font-[Poppins] text-white px-4 py-2 mr-2 rounded hover:bg-red-600 focus:outline-none">
                    Cancel
                </a>
                <button type="submit"
                    class="bg-blue-500 font-[Poppins] text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
                    Save
                </button>
            </div>
        </div>
    </form>

</body>

</html>
