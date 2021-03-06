@extends('layouts.main')

@section('content')
    <div class="bg-gray-800 py-4">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <h1 class="flex items-center justify-center text-white">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z" />
                    <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z" />
                    <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z" />
                </svg>
                <span class="mr-3 text-2xl font-semibold leading-normal">ادارة المتجر</span>
            </h1>

            <div class="flex items-center">
                <a class="text-white font-medium hover:underline" href="/">المنتجات</a>
                <a class="text-white font-medium hover:underline mr-4" href="/reports">التقارير</a>
            </div>
        </div>
    </div>
    
    <div class="container mx-auto px-6 py-16">
        <products-component class="mt-8" :products="{{ json_encode($products) }}"></products-component>
    </div>
@endsection