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
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>



    <title>Dashboard</title>
</head>

<body>

    <div class="flex justify-center ml-60 mt-10">
        <input type="text" placeholder="Search"
            class="w-[100vh] py-2 pl-10 pr-10 text-gray-600 bg-white border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
        <div class="ml-10">
            <img src="{{ asset('assets/img/profile.jpg') }}" alt="Profile Picture" class="rounded-full w-10 h-10 ">
        </div>
    </div>


    <div class="flex mt-32 px-8 ml-80 border-solid w-72 h-11">
        <a href="{{ route('tambahBarang') }}"
            class="font-[Poppins] bg-blue-500  flex items-center gap-2 text-white px-4 py-2 rounded-[20px] data-toggle="modal"
            data-target="#insertModal">Tambah Barang <img class="w-6  stroke-zinc-100"
                src="{{ asset('assets/img/icons.svg') }}" alt="item"></a>

    </div>


    <div class="w-full m-6 px-10 flex justify-center ">

        <div class="shadow-md w-[50%] rounded-md overflow-x-auto ml-48">
            <table class="w-full">
                <thead class="p-3 bg-gray-50 ">
                    <tr>
                        <th class="p-3">No</th>
                        <th class="p-3">Nama Barang</th>
                        <th class="p-3">Jenis Barang</th>
                        <th class="p-3">Code Barang</th>
                        <th class="p-3">Stock Barang</th>
                        <th class="p-3">Harga</th>
                        <th class="p-3">Action</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($produk as $index => $item)
                        <tr>
                            <td class="p-3">{{ $index + 1 }}</td>
                            <td class="p-3">{{ $item->name }}</td>
                            <td class="p-3">{{ $item->jenis }}</td>
                            <td class="p-3">{{ $item->code }}</td>
                            <td class="p-3">{{ $item->stock }}</td>
                            <td class="p-3">{{ $item->harga }}</td>
                            <td class="p-3"><button>edit</button>
                                <button class="delete" data-id="{{ $item->id }}">delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <script>
        swalDel = (classBtn, dataAttr, url) => {
            const btn = document.querySelector(classBtn)
            btn.addEventListener("click", function() {
                const id = btn.getAttribute('data-id');
                const attributeData = btn.getAttribute(dataAttr);
                Swal.fire({
                    title: 'Anda Yakin?',
                    text: `Anda Akan Menghapus Data ${attributeData}`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Hapus",
                    cancelButtonText: "Batal",
                    reverseButtons: true,
                    customClass: {
                        confirmButton: 'confirm-button-class',
                        cancelButton: 'cancel-button-class',
                        title: 'title-class',
                        icon: 'icon-class',
                        text: 'text-class'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = `/${url}/${id}`;
                        // Swal.fire(
                        //     'Deleted!',
                        //     'Data Berhasil Dihapus!',
                        //     'success'
                        // )
                    }
                })

            })



        }
        swalDel('.delete', 'data-id', 'action-deleteProduk');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('dashboard.sidebar')
</body>

</html>
