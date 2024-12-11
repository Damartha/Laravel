<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-800 bg-gray-100">

        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <aside class="w-1/4 p-6 text-white bg-gray-800">
                <div class="text-lg font-bold text-center">Admin Dashboard</div>
                <nav class="mt-6">
                    <ul>
                        <li class="px-4 py-2 hover:bg-gray-700">
                            <a href="">Tumbuhan</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-700">
                            <a href="">Binatang</a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 p-6">
                <div class="container mx-auto">
                    <h1 class="mb-4 text-2xl font-bold">Tumbuhan</h1>
                    <div class="relative w-2/3 max-w-md">
                        <form action="{{ route('search') }}" method="GET" class="relative">
                            <input type="text" name="search"
                                placeholder="Cari..."
                                class="w-full py-2 pl-4 pr-10 text-sm text-gray-700 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button type="submit" class="absolute text-gray-500 transform -translate-y-1/2 right-2 top-1/2 hover:text-blue-500">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                    <a href="{{ route('create') }}" class="px-4 py-2 text-white bg-blue-500 rounded">Tambah Tumbuhan</a>

                    <div class="mt-6">
                        <table class="w-full border">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-2 border">ID</th>
                                    <th class="px-4 py-2 border">Nama Tumbuhan</th>
                                    <th class="px-4 py-2 border">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $idx=0 ?>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="px-4 py-2 border">{{ ++$idx }}</td>
                                        <td class="px-4 py-2 border">{{ $item->nama_tumbuhan2 }}</td>
                                        <td class="px-4 py-2 border">
                                            <a href="{{ route('edit',$item->id_tumbuhan2) }}" class="text-blue-500">Edit</a>
                                            <a href="{{ route('destroy',$item->id_tumbuhan2) }}" class="text-red-500" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach



                            </tbody>

                        </table>
                         <!-- Pagination -->
                         <div class="flex justify-end mt-4">
                            <div class="inline-flex p-2 space-x-2 bg-gray-100 rounded-lg shadow-md">
                                {{ $data->links('pagination::tailwind') }}
                            </div>
                          </div>

                    </div>
                </div>
            </main>
        </div>

</body>
</html>
