<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex text-gray-800 bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-1/4 h-screen text-white bg-gray-800">
        <div class="p-6 text-lg font-bold text-center">Admin Dashboard</div>
        <nav>
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
        {{ $slot }}
    </main>
</body>
</html>
