<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject->name }} - Books</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">
    <!-- Container -->
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <!-- Header -->
        <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ $subject->name }}</h1>
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Books</h2>

        <!-- Books List -->
        @if ($books->count())
            <ul class="divide-y divide-gray-200">
                @foreach ($books as $book)
                    <li class="py-4 flex justify-between items-center">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800 truncate w-96">{{ $book->title }}</h2>
                            <p class="text-sm text-gray-600">
                                {{ $book->subject ? $book->subject->name : 'No Subject Assigned' }}
                            </p>
                        </div>
                        @if ($book->address)
                            <a href="{{ $book->address }}"
                                class="text-white bg-blue-500 px-4 py-2 rounded hover:bg-blue-600 transition"
                                target="_blank" rel="noopener noreferrer">
                                Download Link
                            </a>
                        @else
                            <span class="text-red-500">No PDF available</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500 text-center">No books available for this subject.</p>
        @endif

        <!-- Back Button -->
        <div class="mt-6">
            <a href="{{ route('semester', ['id' => $subject->semester->major_id, 'semester' => $subject->semester->number]) }}"
                class="text-blue-500 hover:underline">
                Back to Subjects
            </a>
        </div>
    </div>
</body>

</html>


