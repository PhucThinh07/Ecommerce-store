@section('content')
<div class="max-w-screen-xl mx-auto px-8 mt-6">
    <section class="bg-white ">
        <div class="mx-auto max-w-screen-xl px-4 py-10 lg:flex lg:h-screen lg:items-center bg-fixed bg-no-repeat bg-top bg-cover bg-origin-content h-full" style="background-image: url('https://images.unsplash.com/photo-1511389026070-a14ae610a1be?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80')">
            <div class="mx-auto max-w-xl text-center blur-none">
                <h1 class="text-3xl font-medium sm:text-5xl text-gray-600">
                    #Outfit of the Day
                    <strong class="font-semibold text-teal-700 pt-10 sm:block">
                        Cửa hàng thời trang online.
                    </strong>
                </h1>

                <div class="mt-10 flex flex-wrap justify-center gap-4">
                    <a class="block w-full rounded bg-teal-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-gray-200 hover:text-teal-600 focus:outline-none focus:ring  sm:w-auto" href="/">
                        Bắt đầu mua sắm
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
<!------------------------------------------------------------------------------------>
<div class="text-center max-w-screen-xl mx-auto mt-10  px-8">
    <div class=" bg-orange-50 py-4">
        <p class="text-3xl font-bold text-red-500">
            Nhận ngay ưu đãi 50% khi trở thành member !
        </p>
        <p class="max-w-2xl mx-auto mt-2 text-gray-500">
            Member luôn được miễn phí giao hàng tiêu chuẩn và nhiều quyền lợi mua sắm khác!
        </p>
    </div>

</div>
<div class="text-center max-w-screen-xl mx-auto mt-8 px-8">
    <div class=" bg-orange-50 py-4">
        <p class="text-3xl font-bold text-teal-600">
            Điều chỉnh​ thuế VAT​ từ 10%​ xuống 8%
        </p>
        <p class="max-w-md mx-auto mt-2 text-gray-500">
            HIỆU LỰC TỪ 01.07.2023 ĐẾN 31.12.2023​
        </p>
    </div>

</div>
<!------------------------------------------------------------------------------------>
<section>
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
            <div class="grid p-6 bg-gray-100 rounded place-content-center sm:p-8">
                <div class="max-w-md mx-auto text-center lg:text-left">
                    <header>
                        <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Bộ sưu tập mới</h2>

                        <p class="mt-4 max-w-sm text-gray-500">
                            Cùng tìm hiểu bộ sưu tập mùa hè vừa được ra mắt trên cửa hàng trực tuyến !
                        </p>
                    </header>
                    <a href="#" class="inline-block mt-5 rounded bg-teal-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-emerald-700 focus:outline-none focus:ring focus:ring-yellow-400">
                        Khám phá ngay
                    </a>
                </div>
            </div>

            <div class="lg:col-span-2 lg:py-8">
                <ul class="grid grid-cols-2 gap-4">
                    <li>
                        <a href="#" class="block group">
                            <img src="https://images.unsplash.com/photo-1535120927584-0230f40fc1e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80" alt="" class="object-cover w-full rounded aspect-square" />

                            <div class="mt-3">
                                <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                    Túi xách
                                </h3>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="block group">
                            <img src="https://images.unsplash.com/photo-1491637639811-60e2756cc1c7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=428&q=80" alt="" class="object-cover w-full rounded aspect-square" />

                            <div class="mt-3">
                                <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                    Balô
                                </h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!------------------------------------------------------------------------------------>
<section>
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
        <div class="text-center">
            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
                Sản phẩm
            </h2>
        </div>

        <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
            @foreach( $products as $item)
            <li>
                <a href="/detail/{{$item->slug}}" class="group rounded block overflow-hidden border-1 hover:shadow-lg">

                    <img src="/storage/{{$item->image}}" class="h-64 w-full object-cover transition duration-400 group-hover:scale-105 sm:h-72" />

                    <div class=" border border-gray-100 bg-white p-6">

                        <div class="input-group hidden">
                            {{$item->slug}}
                        </div>

                        <h3 class="mt-0 text-lg font-medium text-gray-900">{{$item->name}}</h3>

                        <p class="mt-1.5 text-sm text-gray-700">{{ number_format($item->price) }} đ</p>

                        <div class="mt-2 flex">

                            <button class="block w-50% rounded bg-teal-500 text-white p-3 text-sm font-medium transition hover:scale-105">
                                Xem sản phẩm
                            </button>
                            <button class="block ml-2 w-50% rounded bg-gray-200 text-gray-600 p-3 text-sm font-medium transition hover:scale-105 hover:bg-teal-100 hover:text-red-500">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
<!------------------------------------------------------------------------------------>
<section>
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

        <section class="bg-gray-100">
            <div class="mx-auto max-w-[1340px] px-4 py-16 sm:px-6 sm:py-24 lg:me-0 lg:pe-0 lg:ps-8">
                <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-3 lg:items-center lg:gap-x-16">
                    <div class="max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
                            Bài viết tiêu biểu trong tháng
                            <br class="hidden sm:block lg:hidden" />

                        </h2>

                        <p class="mt-4 text-gray-500">
                            Một cộng đồng yêu thích thời trang, cùng những thông tin cập nhật liên tục
                        </p>
                    </div>

                    <div class="-mx-6 lg:col-span-2 lg:mx-0">
                        <div class="swiper-container !overflow-hidden">
                            <div class="swiper-wrapper">
                                @foreach($posts as $item)
                                <div class="swiper-slide">
                                    <blockquote class="flex h-full flex-col justify-between bg-white p-12">
                                        <div>
                                            <div class="flex gap-0.5 text-yellow-500">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>

                                            <div class="mt-4">
                                                <p class="text-2xl font-bold text-teal-600 sm:text-3xl">
                                                    {{$item->name}}
                                                </p>
                                            </div>
                                        </div>

                                        <footer class="mt-8 text-sm text-gray-500">
                                            Danh mục: <strong> {{ $item->category_name }}</strong>

                                        </footer>
                                    </blockquote>
                                </div>
                                @endforeach
                            </div>
        </section>
        <ul class="grid grid-cols-1 gap-4 mt-8 lg:grid-cols-3">
            <li>
                <a href="#" class="block group">
                    <img src="https://images.unsplash.com/photo-1618898909019-010e4e234c55?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="" class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-80" />

                </a>
            </li>

            <li>
                <a href="#" class=" block group">
                    <img src="https://images.unsplash.com/photo-1624623278313-a930126a11c3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="" class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-80" />
                </a>
            </li>

            <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
                <a href="#" class=" block group">
                    <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80" alt="" class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-80" />
                </a>
            </li>
        </ul>
    </div>
</section>
@endsection
@extends('client.master')