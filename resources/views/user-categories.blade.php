<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Categories</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<x-user-navbar></x-user-navbar>
<div class="container mx-auto mt-10">
    <h1 class="text-3xl font-bold text-center text-green-900 mb-6">Check Your Skills !!</h1>
    <div class="w-full max-w-md mx-auto">
        <div class="relative">
            <input type="text" placeholder="Search categories..." class="w-full px-4 py-3 text-gray-700 border border-gray-700 rounded-2xl shadow">
            <button class="absolute right-0 top-0 mt-3 mr-4 text-gray-700 cursor-pointer">
                <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                    <path d="M10 2a8 8 0 105.293 14.707l5.707 5.707 1.414-1.414-5.707-5.707A8 8 0 0010 2zm0 2a6 6 0 110 12A6 6 0 0110 4z"/>
                </svg>
            </button>
        </div>
        <div class="flex flex-col items-center min-h-screen pt-10">
            <div class="w-200 mt-5">
            <h1 class="text-2xl text-blue-500 font-bold mb-3">Categories List</h1>
            <ul class="border border-gray-200">
                <ul class="flex justify-between font-bold p-2">
                    <li class="w-30">Sr.No.</li>
                    <li class="w-70">Category</li>
                    <li class="w-70">No. of Quiz</li>
                    <li class="w-30">#</li>
                </ul>
                @foreach($categories as $key=>$category)
                <li class="even:bg-gray-300 p-2">
                    <ul class="flex justify-between">
                        <li class="w-30">{{$key+1}}</li>
                        <li class="w-70">{{$category->name}}</li>
                        <li class="w-70">{{$category->quizes_count}}</li>
                        <li class="w-30 flex gap-2">
                            <a href="user-quiz-list/{{$category->id}}/{{$category->name}}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M607.5-372.5Q660-425 660-500t-52.5-127.5Q555-680 480-680t-127.5 52.5Q300-575 300-500t52.5 127.5Q405-320 480-320t127.5-52.5Zm-204-51Q372-455 372-500t31.5-76.5Q435-608 480-608t76.5 31.5Q588-545 588-500t-31.5 76.5Q525-392 480-392t-76.5-31.5ZM214-281.5Q94-363 40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200q-146 0-266-81.5ZM480-500Zm207.5 160.5Q782-399 832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280q113 0 207.5-59.5Z"/></svg>
                            </a>
                        </li>
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
        </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>