<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<x-user-navbar></x-user-navbar>
<div class="container mx-auto mt-10">
    <h1 class="text-3xl font-bold text-center text-green-900 mb-6">Welcome to the Quiz System</h1>
    <p class="text-center text-gray-700 mb-8">Test your knowledge with our fun and interactive quizzes!</p>
    <div class="flex justify-center">
        <a href="user-categories" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Start Quiz</a>
    </div>
    <x-footer></x-footer>
</body>
</html>