<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizes</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <x-navbar name={{$name}}></x-navbar>
    <div class="flex flex-col items-center min-h-screen pt-10">
        <div class="w-200">
            <h1 class="text-2xl text-blue-500 font-bold mb-3">Quizes List</h1>
            <ul class="border border-gray-200">
                <ul class="flex justify-between font-bold p-2">
                    <li class="w-30">Sr.No.</li>
                    <li class="w-70">Quiz Name</li>
                    <li class="w-70">Category</li>
                    <li class="w-70">Creator</li>
                    <li class="w-30">#</li>
                </ul>   
                @foreach($quizes as $quiz)
                <li class="even:bg-gray-300 p-2">
                    <ul class="flex justify-between">
                        <li class="w-30">{{$quiz->id}}</li>
                        <li class="w-70">{{$quiz->name}}</li>
                        <li class="w-70">{{$quiz->category}}</li>
                        <li class="w-70">{{$quiz->creator}}</li>
                        <li class="w-30">
                            <a href="quiz/delete/{{$quiz->id}}" onclick="return confirm('Are You Want to Delete this ?');" class="text-red-500 font-bold">
                              Delete
                            </a>
                        </li>
                    </ul>
                </li>
                @endforeach
            </ul>
    </div>
</body>
</html>