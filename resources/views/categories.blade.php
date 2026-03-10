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
    @if(Session('category'))
    <div class="bg-green-500 text-white p-2">{{Session('category')}}</div>
    @endif
    <div class="flex flex-col items-center min-h-screen pt-10">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm mb-5">
            <h2 class="text-2xl text-center font-bold text-gray-600 mb-6">Add Category</h2>
            <form action="/addCategory" method="post" class="space-y-4">
                @csrf
                <div>
                    <label for="" class="text-gray-600 mb-1">Category Name</label>
                    <input type="text" name="name" placeholder="Enter Category" class="w-full px-4 py-2 border border-gray-300 rounded-xl">
                    @error('name')
                        <div class="text-red-500">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="w-full bg-blue-500 rounded-xl text-white px-4 py-2 cursor-pointer">+ Add new</button>
            </form>
        </div>
        <div class="w-200">
            <h1 class="text-2xl text-blue-500 font-bold mb-3">Categories List</h1>
            <ul class="border border-gray-200">
                <ul class="flex justify-between font-bold p-2">
                    <li class="w-30">Sr.No.</li>
                    <li class="w-70">Category</li>
                    <li class="w-70">Creator</li>
                    <li class="w-30">#</li>
                </ul>
                @foreach($categories as $category)
                <li class="even:bg-gray-300 p-2">
                    <ul class="flex justify-between">
                        <li class="w-30">{{$category->id}}</li>
                        <li class="w-70">{{$category->name}}</li>
                        <li class="w-70">{{$category->creator}}</li>
                        <li class="w-30 flex gap-2">
                            <a href="quiz-list/{{$category->id}}/{{$category->name}}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M607.5-372.5Q660-425 660-500t-52.5-127.5Q555-680 480-680t-127.5 52.5Q300-575 300-500t52.5 127.5Q405-320 480-320t127.5-52.5Zm-204-51Q372-455 372-500t31.5-76.5Q435-608 480-608t76.5 31.5Q588-545 588-500t-31.5 76.5Q525-392 480-392t-76.5-31.5ZM214-281.5Q94-363 40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200q-146 0-266-81.5ZM480-500Zm207.5 160.5Q782-399 832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280q113 0 207.5-59.5Z"/></svg>
                            </a>
                            <a href="category/delete/{{$category->id}}" onclick="return confirm('Are You Want to Delete this ?');">
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