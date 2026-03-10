<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <x-navbar name={{$name}}></x-navbar>
    <div class="flex flex-col items-center min-h-screen pt-10">   
        <div class="w-200">
            <div class="flex justify-center items-center mb-5">
                <h1 class="text-center mr-4 text-4xl font-bold tracking-tight text-heading">{{$category}} - Quizes</h1> <a class="text-blue-500 hover:underline cursor-pointer text-lg text-yellow-800" onclick="window.history.back()">Back</a>
            </div>
            <ul class="border border-gray-200">
                <ul class="flex justify-between font-bold p-2">
                    <li class="w-30">Quiz ID</li>
                    <li class="w-70">Quiz Title</li>
                    <li class="w-30">Actions</li>
                </ul>
                @foreach($quizData as $value)
                <li class="even:bg-gray-300 p-2">
                    <ul class="flex justify-between">
                        <li class="w-30">{{$value->id}}</li>
                        <li class="w-70">{{$value->name}}</li>
                        <li class="w-30">
                            <a href="{{ route('quiz.show', [$value->id, $value->name]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M607.5-372.5Q660-425 660-500t-52.5-127.5Q555-680 480-680t-127.5 52.5Q300-575 300-500t52.5 127.5Q405-320 480-320t127.5-52.5Zm-204-51Q372-455 372-500t31.5-76.5Q435-608 480-608t76.5 31.5Q588-545 588-500t-31.5 76.5Q525-392 480-392t-76.5-31.5ZM214-281.5Q94-363 40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200q-146 0-266-81.5ZM480-500Zm207.5 160.5Q782-399 832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280q113 0 207.5-59.5Z"/></svg>
                            </a>
                        </li>
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>