<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <title>Travel</title>
</head>
<body>
    <div class="container">
        <nav class="flex justify-between items-center py-9 font-plus-jakarta-sans">
            <div class="max-w-[130px]">
                <img src="{{ asset('img/logo.png') }}" alt="logo">
            </div>
            <ul class="lg:flex gap-10 hidden">
                <li><a href="#" class="font-semibold">Beranda</a></li>
                <li><a href="#" class="font-semibold">Paket Travel</a></li>
                <li><a href="#" class="font-semibold">Services</a></li>
                <li><a href="#" class="font-semibold">Testimonial</a></li>
            </ul>
            <div class="lg:flex gap-4 hidden">
                <button class="font-semibold px-8 py-4 rounded-full">Login</button>
                <button class="font-semibold bg-primary text-white px-8 py-4 rounded-full">Sign Up</button>
            </div>
            <i data-feather="align-right" class="lg:hidden"></i>
        </nav>
    </div>
</body>
<script>
    feather.replace();

    
</script>
</html>