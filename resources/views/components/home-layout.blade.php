<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tumbuhan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-800 bg-gray-100">
  <!-- Navbar -->
  <header class="text-white bg-green-600">
    <nav class="container flex items-center justify-between p-4 mx-auto">
      <a href="index.html" class="text-xl font-bold">Katalog Tumbuhan dan Hewan</a>
      <div class="flex space-x-4">
        <form action="{{ route('search_tumbuhan') }}" method="GET" class="relative">
            <input type="text" name="search"
                placeholder="Cari..."
                class="w-full py-2 pl-4 pr-10 text-sm text-gray-700 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-700">
            <button type="submit" class="absolute text-gray-500 transform -translate-y-1/2 right-2 top-1/2 hover:text-purple-700">
                <i class="bi bi-search"></i>
            </button>
        </form>
        <ul class="flex space-x-4">
            <li><a href="{{route('landingpage')}}" class="hover:underline">Beranda</a></li>
            <li><a href="{{route('tumbuhan')}}" class="hover:underline">Tumbuhan</a></li>
            <li><a href="{{route('hewan')}}" class="hover:underline">Hewan</a></li>
          </ul>
        </div>


    </nav>
  </header>

  <!-- Main Content -->
 {{$slot}}

  <!-- Footer -->
  <footer class="p-4 mb-0 text-center text-white bg-gray-800">
    <p>© 2024 Katalog Tumbuhan dan Hewan. Semua hak dilindungi.</p>
  </footer>
</body>
</html>
