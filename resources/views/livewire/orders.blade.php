@php use Carbon\Carbon; @endphp

<div class="container mx-auto">
    <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-5xl dark:text-white">
        Orders
    </h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-1">
        @foreach($groupedOrders as $orderNumber => $group)
        <div class="border p-4 rounded-lg bg-blue-200 flex flex-col justify-between">
            <div class="flex items-center justify-between mb-2">
                <h2 class="text-xl font-semibold">Order #: {{ $orderNumber }}</h2>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Done</button>
            </div>
            <!-- List of orders -->
            <ul>
            @foreach($group as $order)
                @php
                    $carbonTimestamp = Carbon::parse($order->created_at);
                    $timeAgo = $carbonTimestamp->diffForHumans();
                @endphp
                <li class="mb-2">
                    {{ $order->quantity }} {{ $order->menu }}
                    <hr>
                </li> 
            @endforeach
            </ul>
            <span class="mt-5">{{ $timeAgo }}</span> 
        </div>
        @endforeach
    </div>
    
</div>