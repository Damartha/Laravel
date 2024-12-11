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
        <form enctype="multipart/form-data" action="{{ $rute }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_tumbuhan2" class="block">Nama Tumbuhan:</label>
                <input type="text" id="nama_tumbuhan2" name="nama_tumbuhan2" class="w-full px-4 py-2 border" value="{{ old('nama_tumbuhan2', $tumbuhan->nama_tumbuhan2 ?? '') }}">
            </div>
            <div class="mb-4">
                <label for="nama_tumbuhan2" class="block">Habitat Tumbuhan:</label>
                <input type="text" id="nama_tumbuhan2" name="habitat_tumbuhan2" class="w-full px-4 py-2 border" value="{{ old('habitat_tumbuhan2', $tumbuhan->habitat_tumbuhan2 ?? '') }}">
            </div>
            <div class="mb-4">
                <label for="nama_tumbuhan2" class="block">Jenis Tumbuhan:</label>
                <input type="text" id="nama_tumbuhan2" name="jenis_tumbuhan2" class="w-full px-4 py-2 border" value="{{ old('jenis_tumbuhan2', $tumbuhan->jenis_tumbuhan2 ?? '') }}">
            </div>
            <div class="mb-4">
                <label for="nama_tumbuhan2" class="block">Foto Tumbuhan:</label>
                <input type="file" id="nama_tumbuhan2" name="foto_tumbuhan2" class="w-full px-4 py-2 border" >
            </div>
            <div class="mb-4">
                <label for="deskripsi_tumbuhan2" class="block">Deskripsi Tumbuhan:</label>
                <textarea id="deskripsi_tumbuhan2" name="deskripsi_tumbuhan2" value="{{ old('deskripsi_tumbuhan2', $tumbuhan->deskripsi_tumbuhan2 ?? '') }}"></textarea>
            </div>
            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Simpan</button>
        </form>
    </div>
</body>
</html>
