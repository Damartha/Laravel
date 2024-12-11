<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  
  <!-- Main Content -->
  <x-home-layout class="p-6">
    <h1 class="text-2xl font-bold text-center mb-6">Kontak Kami</h1>
    <form class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
      <div class="mb-4">
        <label for="name" class="block font-medium">Nama</label>
        <input type="text" id="name" class="w-full border-gray-300 rounded-lg p-2" placeholder="Nama Anda">
      </div>
      <div class="mb-4">
        <label for="email" class="block font-medium">Email</label>
        <input type="email" id="email" class="w-full border-gray-300 rounded-lg p-2" placeholder="Email Anda">
      </div>
      <div class="mb-4">
        <label for="message" class="block font-medium">Pesan</label>
        <textarea id="message" rows="4" class="w-full border-gray-300 rounded-lg p-2" placeholder="Tulis pesan Anda"></textarea>
      </div>
      <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg w-full">Kirim Pesan</button>
    </form>
  </x-home-layout>
</body>
</html>
