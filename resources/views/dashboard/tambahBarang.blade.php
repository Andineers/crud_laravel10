<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <title>Document</title>
</head>
<body>
    <!-- Button Kembali -->
    <div class="mb-4">
        <button class="bg-gray-500-500 text-white px-4 py-2 rounded hover:bg-gray-600 focus:outline-none font-[Poppins]">
            Kembali
        </button>
    </div>

    <!-- Table Tambah Barang -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider font-[Poppins]">
                        Nama Barang
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider font-[Poppins]">
                        Jenis Barang
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider font-[Poppins]">
                        Stok Barang
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider font-[Poppins]">
                        Harga
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <input type="text" class="w-full px-2 py-1 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nama Barang">
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <input type="text" class="w-full px-2 py-1 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Jenis Barang">
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <input type="number" class="w-full px-2 py-1 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Stok Barang">
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <input type="number" class="w-full px-2 py-1 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Harga">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Buttons Cancel and Save -->
    <div class="flex justify-end mt-4">
        <button class="bg-red-500 font-[Poppins] text-white px-4 py-2 mr-2 rounded hover:bg-red-600 focus:outline-none">
            Cancel
        </button>
        <button class="bg-blue-500 font-[Poppins] text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Save
        </button>
    </div>

</body>
</html>
