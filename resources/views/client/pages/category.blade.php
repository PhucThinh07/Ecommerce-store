@section('content')
<section>
    <div class="mx-auto max-w-screen-xl mt-10 px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <div class="mt-4 lg:mt-8 lg:grid lg:grid-cols-4 lg:items-start lg:gap-8">
            <div class="hidden space-y-4 lg:block">
                <div class="flex h-screen flex-col justify-between border-e bg-white">
                    <div class="px-4">
                        <ul class="space-y-1">
                            <li>
                                <a href="/product" class="block rounded-lg bg-gray-100 px-4 py-2 text-lg font-medium text-teal-600">
                                    Danh mục
                                </a>
                            </li>
                            @foreach( $categories as $cat)
                            <li>
                                <a href=" {{ route('PBC', $cat->id) }} " class="block rounded-lg px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    {{$cat->name}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>

            <div class="lg:col-span-3">
                <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach( $products as $itempd)
                    <li>
                        <a href="/detail/{{$itempd->slug}}" class="group rounded block overflow-hidden border-1 hover:shadow-lg">

                            <img src="/storage/{{$itempd->image}}" alt="" class="h-64 w-full object-cover transition duration-400 group-hover:scale-105 sm:h-72" />

                            <div class=" border border-gray-100 bg-white p-6">
                                <div class="input-group hidden">
                                    {{$itempd->slug}}
                                </div>
                                <h3 class="mt-0 text-lg font-medium text-gray-900"> {{$itempd->name}}
                                </h3>

                                    
                                <p class="mt-1.5 text-sm text-gray-700">{{ number_format($itempd->price, 0, '.', ',') }} đ</p>

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
        </div>
    </div>
</section>
@endsection
@extends('client.master')