<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz System | User SignUp </title>
    @vite('resources/css/app.css')
</head>
<body>
<x-user-navbar></x-user-navbar>
    <div class="bg-gradient-to-r from-green-300 to-blue-300 flex items-center justify-center min-h-screen">
        <div class="flex flex-col items-center min-h-screen pt-10">
            <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md mb-5">
                @if(Session('quiz'))
                <div class="bg-green-500 text-white p-2">{{Session('quiz')}}</div>
                @endif
                <span class="font-bold text-green-600">{{Session('quizDetails.name')}}</span><br>
                </span>
                <h2 class="text-2xl text-center font-bold text-gray-800 mb-6">User SignUp</h2>
                <form action="/user-signup" method="post" class="space-y-4">
                    @csrf
                    <label for="">User Name :</label>
                    <input type="text" name="userName" placeholder="Enter Username *" class="w-full px-4 py-2 border border-gray-300 rounded-xl" required>
                    <label for="">User Email :</label>
                    <input type="text" name="userEmail" placeholder="Enter Email *" class="w-full px-4 py-2 border border-gray-300 rounded-xl" required>
                    <label for="">Password :</label>
                    <input type="password" name="userPassword" placeholder="Enter Password *" class="w-full px-4 py-2 border border-gray-300 rounded-xl" required>
                    <label for="">Confirm Password :</label>
                    <input type="password" name="confirmPassword" placeholder="Confirm Password *" class="w-full px-4 py-2 border border-gray-300 rounded-xl" required>
                    <button type="submit" class="w-full bg-green-500 rounded-xl text-white px-4 py-2 cursor-pointer transform hover:scale-105 hover:bg-gray-500 transition-all duration-300 ease-out">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>