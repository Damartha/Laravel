<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tumbuhan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-800 bg-gray-100">
    <div class="container p-6 mx-auto">
        <h1 class="mb-4 text-2xl font-bold">Tambah Tumbuhan</h1>
        <form enctype="multipart/form-data" action="{{ $rute_hewan }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_binatang3" class="block">Nama Tumbuhan:</label>
                <input type="text" id="nama_binatang3" name="nama_binatang3" class="w-full px-4 py-2 border" value="{{ old('nama_binatang3', $tumbuhan->nama_binatang3 ?? '') }}">
            </div>
            <div class="mb-4">
                <label for="nama_binatang3" class="block">Habitat Tumbuhan:</label>
                <input type="text" id="nama_binatang3" name="habitat_binatang3" class="w-full px-4 py-2 border" value="{{ old('habitat_binatang3', $tumbuhan->habitat_binatang3 ?? '') }}">
            </div>
            <div class="mb-4">
                <label for="nama_binatang3" class="block">Jenis Tumbuhan:</label>
                <input type="text" id="nama_binatang3" name="jenis_binatang3" class="w-full px-4 py-2 border" value="{{ old('jenis_binatang3', $tumbuhan->jenis_binatang3 ?? '') }}">
            </div>
            <div class="mb-4">
                <label for="nama_binatang3" class="block">Foto Tumbuhan:</label>
                <input type="file" id="nama_binatang3" name="foto_binatang3" class="w-full px-4 py-2 border" >
            </div>
            <div class="mb-4">
                <label for="deskripsi_binatang3" class="block">Deskripsi Tumbuhan:</label>
                <textarea id="deskripsi_binatang3" name="deskripsi_binatang3" value="{{ old('deskripsi_binatang3', $tumbuhan->deskripsi_binatang3 ?? '') }}"></textarea>
            </div>
            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Simpan</button>
        </form>
    </div>
</body>
</html>
