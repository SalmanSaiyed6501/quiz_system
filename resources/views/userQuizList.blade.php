<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - {{ $categoryName }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <x-user-navbar></x-user-navbar>
    <div class="flex flex-col items-center min-h-screen pt-10">   
        <div class="w-200">
            <div class="flex justify-center items-center mb-5">
                <h1 class="text-center mr-4 text-4xl font-bold tracking-tight text-heading">{{$categoryName}} - Quizes</h1> <a class="text-blue-500 hover:underline cursor-pointer text-lg text-yellow-800" onclick="window.history.back()">Back</a>
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
                            <a href="#" class="text-green-800 font-bold">
                                Attempt Quiz
                            </a>
                        </li>
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>