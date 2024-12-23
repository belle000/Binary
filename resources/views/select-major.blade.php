<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Your Major</title>
</head>
<body>
    <div class="container">
        <h1>Select Your Major</h1>
        
        <!-- Profile Link -->
        <a href="{{ route('profile') }}">Go to Profile</a>

        <ul>
            @foreach ($majors as $major)
                <li>
                    <a href="{{ route('major', ['id' => $major->id]) }}">
                        {{ $major->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
