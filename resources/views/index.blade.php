<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="py-10 bg-gray-100">
    <div class="max-w-lg p-6 mx-auto bg-white rounded-lg shadow">
        <h1 class="mb-4 text-2xl font-bold text-center">URL Shortener</h1>

        <form action="{{ route('url.shorten') }}" method="POST" class="mb-4">
            @csrf
            <div class="mb-4">
                <label for="original_url" class="block font-medium text-gray-700">Enter Long URL</label>
                <input type="url" name="original_url" id="original_url" 
                class="block w-full h-10 mt-1 border-2 border-blue-400 rounded-lg shadow-sm sm:text-sm">
                @error('original_url')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit"
                    class="w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
                Shorten URL
            </button>
        </form>

        <!-- Display Shortened URL -->
        @if(session('shortened_url'))
            <div class="p-4 text-green-800 bg-green-100 rounded">
                <p>Your shortened URL:</p>
                <a href="{{ session('shortened_url') }}" target="_blank" class="text-blue-600 underline">{{ session('shortened_url') }}</a>
            </div>
        @endif
    </div>
</body>
</html>
