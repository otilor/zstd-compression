<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
    <title>LZ4 and Zstandard compressor</title>
</head>

<body class="antialiased">
<div class="text-center">
    <h3 class="text-xl">Compress your files!</h3>
    <div class="max-w-2xl mx-auto">

        <form action="/compress" method="post" enctype="multipart/form-data">
            @csrf
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload file</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="input_file">

        <button type="submit" class="mt-2 text-white bg-[#050708] hover:bg-[#050708]/80 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-[#050708]/40 dark:focus:ring-gray-600 mr-2 mb-2">
            <span class="p-2">Compress</span>

        </button>
        </form>

        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>
</div>
</body>
</html>
