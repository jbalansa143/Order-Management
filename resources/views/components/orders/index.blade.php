<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ORders</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>
<body>
<<<<<<< Updated upstream
    <livewire:orders />
    @livewireScripts
=======
    @php use Carbon\Carbon; @endphp
<div class="container mx-auto">
    <h1 class="mx-5 mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-5xl dark:text-white">
        Orders
    </h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-1" id="content-loaded">
        @foreach($groupedOrders as $orderNumber => $group)
        <div class="border p-4 rounded-lg bg-gray-200 flex flex-col justify-between">
            <div class="flex items-center justify-between mb-2">
                <h2 class="text-xl font-semibold">Order #: {{ $orderNumber }}</h2>
                
                <a href="{{ route('order.update', $orderNumber) }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Done</a>
            </div>
            <!-- List of orders -->
            <ul>
            @foreach($group as $order)
                @php
                    $carbonTimestamp = Carbon::parse($order['created_at']);
                    $timeAgo = $carbonTimestamp->diffForHumans();
                @endphp
                <li class="mb-2">
                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> {{ $order['quantity'] }} {{ $order['menu'] }}
                    <hr>
                </li> 
            @endforeach
            </ul>
            <span class="mt-5">{{ $timeAgo }}</span> 
        </div>
        @endforeach
    </div>  
</div>
>>>>>>> Stashed changes
</body>
</html>