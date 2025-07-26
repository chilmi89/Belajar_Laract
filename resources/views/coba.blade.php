<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.4/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-8">
        <header class="text-center mb-8">
            <h1 class="text-4xl font-bold text-blue-600">Welcome to My Stylish Page</h1>
            <p class="text-lg text-gray-600">This is a simple example using Tailwind CSS</p>
        </header>

        <main class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold mb-4">Feature One</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold mb-4">Feature Two</h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros.</p>
            </div>
        </main>

        <footer class="text-center mt-8">
            <p class="text-sm text-gray-500">&copy; 2023 My Stylish Page. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>

