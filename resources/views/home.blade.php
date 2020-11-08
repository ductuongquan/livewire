<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <title>Demo livewire</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @livewireStyles
    @livewireScripts
</head>
<body class="flex flex-wrap justify-center">
    <div class="flex w-full justify-between px-4 bg-purple-900 text-white">
        <a class="my-3 py-4" href="/">Home</a>
        
    </div>
    <div class="my-10 w-full flex justify-center">
        <livewire:post />
    </div>
</body>
</html>