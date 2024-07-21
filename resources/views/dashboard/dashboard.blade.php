<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Dashboard</title>
</head>

<body class="overflow-x-hidden">

    <div class="flex justify-center ml-60 mt-10 ">
        <input type="text" placeholder="Search"
            class="w-[100vh] py-2 pl-10 pr-10 text-gray-600 bg-white border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
        <div class="ml-10">
            <img src="{{ asset('assets/img/profile.jpg') }}" alt="Profile Picture" class="rounded-full w-10 h-10 ">
        </div>
    </div>

    <div class="flex mt-24 px-8 ml-80 border-solid w-72 h-11">
        <a href="{{ route('tambahBarang') }}"
            class="font-[Poppins] bg-blue-500 flex items-center gap-2 text-white px-4 py-2 rounded-[20px]">
            Tambah Barang
            <img class="w-6 stroke-zinc-100" src="{{ asset('assets/img/icons.svg') }}" alt="item">
        </a>

    </div>

    <div class="w-full m-6 px-10 flex justify-center ">
        <div class="shadow-md w-[600] rounded-md overflow-x-auto ml-[200px]">
            <table class="min-w-full bg-white border">
                <thead class="bg-gray-400">
                    <tr>
                        <th class="px-6 py-3 text-left">No</th>
                        <th class="px-6 py-3 text-left">Nama Barang</th>
                        <th class="px-6 py-3 text-left">Code Barang</th>
                        <th class="px-6 py-3 text-left">Jenis Barang</th>
                        <th class="px-6 py-3 text-left">Stock Barang</th>
                        <th class="px-6 py-3 text-left">Harga</th>
                        <th class="px-6 py-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $index => $item)
                        <tr class="{{ $loop->odd ? 'bg-white' : 'bg-gray-100' }}">
                            <td class="px-6 py-3 text-center">{{ $produk->firstItem() + $index }}</td>
                            <td class="px-6 py-3 text-left">{{ $item->name }}</td>
                            <td class="px-6 py-3 text-center">{{ $item->code }}</td>
                            <td class="px-6 py-3 text-left">{{ $item->jenis }}</td>
                            <td class="px-6 py-3 text-center">{{ $item->stock }}</td>
                            <td class="px-6 py-3 text-right">{{ $item->harga }}</td>
                            <td class="px-6 py-3 text-left">
                                <a href="{{ route('editBarang', $item->id) }}" class="text-blue-500">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="#" class="text-red-500 ml-4 delete" data-id="{{ $item->id }}"
                                    data-name="{{ $item->name }}">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination Links -->
            <div class="mt-4 flex justify-end">
                {{ $produk->links() }}
            </div>
        </div>
    </div>

    <script>
        swalDel = (classBtn, dataAttr, url) => {
            const btns = document.querySelectorAll(classBtn);
            btns.forEach(btn => {
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
                            fetch(`/action-deleteProduk/${id}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]').getAttribute(
                                        'content')
                                }
                            }).then(response => {
                                if (response.ok) {
                                    Swal.fire(
                                        'Terhapus!',
                                        'Data berhasil dihapus.',
                                        'success'
                                    ).then(() => {
                                        window.location.href =
                                            "{{ route('dashboard') }}";
                                    });
                                } else {
                                    Swal.fire(
                                        'Gagal!',
                                        'Terjadi kesalahan saat menghapus data.',
                                        'error'
                                    );
                                }
                            }).catch(error => {
                                Swal.fire(
                                    'Gagal!',
                                    'Terjadi kesalahan saat menghapus data.',
                                    'error'
                                );
                            });
                        }
                    });
                });
            });
        }
        swalDel('.delete', 'data-name', 'destroy');
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('dashboard.sidebar')
</body>

</html>
