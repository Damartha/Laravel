<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail {{ $data->nama_binatang3 }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-800 bg-gray-100">
    <x-home-layout class="p-6">
        <div class="w-11/12 p-6 mx-auto my-10 bg-white rounded-lg shadow-md">
            <!-- Title -->
            <h1 class="text-3xl font-bold text-center text-gray-800">
                 {{ $data->nama_binatang3 }}
            </h1>
            <hr class="my-6 border-gray-300">
            <img src="{{ asset($data->foto_binatang3) }}" alt="">

            <!-- Content -->
            <div class="px-4 py-6 ">
                <table class="border-collapse ">
                    <tr class="border-b">
                        <td class="py-2 font-semibold">Habitat</td>
                        <td class="p-2">:</td>
                        <td class="py-2">{{ $data->habitat_binatang3 }}</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 font-semibold">Jenis</td>
                        <td class="p-2">:</td>
                        <td class="py-2">{{ $data->jenis_binatang3 }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-semibold">Deskripsi</td>
                        <td class="p-2">:</td>
                        <td class="py-2">{{ $data->deskripsi_binatang3 }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </x-home-layout>
</body>
</html>
