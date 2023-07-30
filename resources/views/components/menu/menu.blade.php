@extends('layouts.menu-layout')

@section('content')
{{--Style Animation--}}
<style>
  .swing-in-top-fwd{-webkit-animation:.5s cubic-bezier(.175,.885,.32,1.275) both swing-in-top-fwd;animation:.5s cubic-bezier(.175,.885,.32,1.275) both swing-in-top-fwd}@-webkit-keyframes swing-in-top-fwd{0%{-webkit-transform:rotateX(-100deg);transform:rotateX(-100deg);-webkit-transform-origin:top;transform-origin:top;opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);-webkit-transform-origin:top;transform-origin:top;opacity:1}}@keyframes swing-in-top-fwd{0%{-webkit-transform:rotateX(-100deg);transform:rotateX(-100deg);-webkit-transform-origin:top;transform-origin:top;opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);-webkit-transform-origin:top;transform-origin:top;opacity:1}}
</style>
    <div class="flex justify-center items-center p-2">
        <div class="flex justify-center w-full">
            <img src="{{ asset('logo/logo.png') }}" class="h-12 mr-3" alt="Logo" />
            <h1 class="mb-4 text-2xl font-extrabold text-gray-900 dark:text-white md:text-4xl lg:text-5xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">The Rabbit Hole</span> Cafe</h1>
            </div>
        </div>
        <div class="flex items-center justify-center py-3 md:py-3 flex-wrap">
            <a href="{{ route('customer.index') }}" class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">All categories</a>
            @foreach($categories as $category)
            <a href="{{ route('menu.selectedCategory', $category->category_id) }}" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-gray-800">{{ $category->getCategoryName() }}</a>
            @endforeach
        </div>
        <div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 px-20">
        @if ($isEmpty)
            <p class="text-center font-bold">Temporarily no menus available.</p>
        @else
            @foreach($menus as $menu)
                <div class="card-link hover:shadow-lg swing-in-top-fwd">
                    <div class="relative bg-white rounded-lg shadow-md">
                        <img loading="eager" class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('images/'.$menu->image) }}" alt="Category 1">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold mb-2">{{ $menu->getName() }} <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300"> {{ $menu->getPrice() }}</span></h2>
                            <p class="text-gray-700">{{ $menu->getDescription() }}</p>
                        </div>
                        <a href="{{ route('menu.checkout', $menu->id) }}" class="absolute bottom-4 right-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                                <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                            </svg>
                            Buy
                        </a> 
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection