@section('content')
<div class="flex mx-auto max-w-screen-xl mt-10 px-4 py-8">
    <div class="w-7/12 p-4">
        <section>
            <div class="mx-auto max-w-screen-xl mt-10 px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
                <div class="mx-auto max-w-3xl">
                    <header class="text-left">
                        <h1 class="text-xl font-medium text-teal-700 sm:text-3xl">Giỏ hàng</h1>
                    </header>

                    <div class="mt-8">
                        <ul class="space-y-4">
                            @foreach ( $cartItems as $itempd)
                            <li class="flex items-center gap-4 border-b-2 pb-2">
                                <img src="/storage/{{$itempd->image}}" alt="" class=" w-20 rounded object-cover" />

                                <div>
                                    <h3 class="text-xl text-gray-900">{{$itempd->name}}</h3>

                                    <dl class="mt-0.5 text-sm space-y-px text-[10px] text-gray-600">
                                        <div>
                                            <dt class="inline">Kích cỡ:</dt>
                                            <dd class="inline">{{$itempd->size}}</dd>
                                        </div>

                                        <div>
                                            <dt class="inline">Màu sắc:</dt>
                                            <dd class="inline">{{$itempd->color}}</dd>
                                        </div>
                                        <div>
                                            <dt class="inline">Giá:</dt>
                                            <dd class="inline">{{ number_format($itempd->price, 0, '.', ',') }} đ</dd>
                                        </div>
                                        <div>
                                            <dt class="inline">Tổng:</dt>
                                            <dd class="inline">{{ number_format($itempd->total, 0, '.', ',') }} đ</dd>
                                        </div>
                                    </dl>
                                </div>

                                <div class="flex flex-1 items-center justify-end gap-2">
                                    <div>
                                        Số lượng: 
                                        <input type="number" min="1" value="{{$itempd->quantity}}" id="Line3Qty" class="h-8 w-12 rounded border-gray-200 bg-gray-50 p-0 text-center text-xs text-gray-600 [-moz-appearance:_textfield] focus:outline-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" />
                                    </div>

                                    <a onclick="return confirm('Bạn chắc chắn muốn xoá sản phẩm sau: {{$itempd->name}}')" href="/remove/{{$itempd->id}}" class="text-gray-600 transition hover:text-red-600">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>


                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="w-5/12 p-4">
        <div class="mx-auto max-w-screen-xl mt-10 pt-20 flex justify-end border-t border-gray-100">
            <div class="w-screen max-w-lg space-y-4 mt-10">
                <p class="text-xl font-medium text-teal-700">Thông tin thanh toán</p>
                <dl class="space-y-0.5 text-sm text-gray-700">
<!-- 
                    @foreach($cartItems as $itemtotal)
                    <div class="flex justify-between">
                        <dt>{{$itemtotal->name}} x {{$itemtotal->quantity}}</dt>
                        <dd>{{ number_format($itemtotal->total, 0, '.', ',') }} đ  </dd>
                    </div>
                    @endforeach -->
                    <div class="flex justify-between">
                        <dt>VAT</dt>
                        <dd>0 đ</dd>
                    </div>

                    <div class="flex justify-between">
                        <dt>Giảm giá</dt>
                        <dd>0 đ</dd>
                    </div>

                    <div class="flex justify-between !text-base font-medium">
                        <dt>Tổng cộng</dt>
                        <dd>{{ number_format($totalCart, 0, '.', ',') }} đ</dd>

                    </div>
                </dl>

                <div class="flex justify-end">
                    <span class="inline-flex items-center justify-center rounded-full bg-indigo-100 px-2.5 py-0.5 text-indigo-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-ms-1 me-1.5 h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z" />
                        </svg>

                        <p class="whitespace-nowrap text-xs">2 phiếu giảm giá</p>
                    </span>
                </div>

                <div class="flex justify-end">
                    <a href="/product" class="block rounded ml-2 border-2 border-solid bg-gray-50 px-5 py-3 text-sm text-teal-700 transition hover:bg-gray-200">
                        Tiếp tục mua hàng
                    </a>
                    <a href="#" class="block rounded ml-5 bg-teal-600 px-5 py-3 text-sm text-gray-100 transition hover:bg-gray-600">
                        Thanh toán
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('client.master')