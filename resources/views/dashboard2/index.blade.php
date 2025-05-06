<!-- resources/views/rooms/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ruangan Karaoke</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-semibold text-center">Daftar Ruangan Karaoke</h1>
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($rooms as $room)
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-semibold text-center">{{ $room->name }}</h2>
                    <p class="text-center mt-4">{{ $room->description }}</p>
                    <p class="text-center mt-2 text-lg font-bold">Rp {{ number_format($room->price, 0, ',', '.') }}</p>
                    <div class="text-center mt-4">
                        <a href="{{ route('room.book', $room->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Pesan Ruangan</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
