<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Selection</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="text-center">
        <h1 class="mb-8 text-2xl font-bold text-gray-800">Select Your Role</h1>
        <div class="flex space-x-4">
            <a href="{{ route('admin_home') }}">
                <button
                class="px-6 py-3 font-semibold text-white transition bg-blue-600 rounded-lg hover:bg-blue-700"
                href="">
                Admin
            </button>
            </a>
            <a href="{{ route('landingpage') }}">
                <button
                class="px-6 py-3 font-semibold text-white transition bg-green-600 rounded-lg hover:bg-green-700"
                href="">
                User
            </button>
            </a>


        </div>
    </div>
</body>
</html>
