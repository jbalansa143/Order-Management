
<div class="flex flex-wrap -mx-4 slide-in-bck-center ">
    @foreach($groupedOrders as $orderNumber => $group)
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="p-4">
                    <strong class="text-lg">Order: {{ $orderNumber }}</strong> <br>
                    <ul class="mt-4">
                        @foreach($group as $order)
                            <li class="mb-2">
                                {{ $order->menu }}  Qty: {{ $order->quantity }}<br>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>

