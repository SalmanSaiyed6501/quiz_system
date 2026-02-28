<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <x-navbar name={{$name}}></x-navbar>
    <div class="flex flex-col items-center min-h-screen pt-10">   
        <div class="w-200">
            <div class="flex justify-center items-center mb-5">
                <h1 class="text-center mr-4 text-4xl font-bold tracking-tight text-heading">All Questions</h1> <a class="text-blue-500 hover:underline cursor-pointer text-lg text-yellow-800" onclick="window.history.back()">Back</a>
            </div>
            <h1 class="text-2xl text-blue-500 font-bold mb-3">Category Name :{{ $catname }}</h1>
            <ul class="border border-gray-200">
                <ul class="flex justify-between font-bold p-2">
                    <li class="w-30">Que. ID</li>
                    <li class="w-70">Questions</li>
                    <li class="w-30">#</li>
                </ul>
                @foreach($getQue as $value)
                <li class="even:bg-gray-300 p-2">
                    <ul class="flex justify-between">
                        <li class="w-30">{{$value->id}}</li>
                        <li class="w-70">{{$value->question}}</li>
                        <li class="w-30">
                            <a href="question/delete/{{$value->id}}" onclick="return confirm('Are You Want to Delete this ?');">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
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