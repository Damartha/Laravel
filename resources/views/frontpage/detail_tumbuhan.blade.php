<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Tumbuhan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-800 bg-gray-100">
    <x-home-layout class="p-6">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 ">
        @foreach ($datas as $item)
        <div class="p-4 bg-white rounded-lg shadow-md">
            <h3 class="text-lg font-bold">{{ $item->nama_tumbuhan2 }}</h3>
            <p>{{ $item->deskripsi_tumbuhan2 }}</p>
            <a href="{{ route('tumbuhan.show', $item->id_tumbuhan2) }}" class="text-blue-500 hover:underline">
                Lihat Detail
            </a>
        </div>
        @endforeach
        </div>
    </x-home-layout>
</body>
</html>
