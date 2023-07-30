@section('content')
<div class="mx-auto max-w-screen-xl mt-10 px-4 py-8">
  <section>
    <div class="relative mx-auto max-w-screen-xl px-4 py-8">
      <div class="grid grid-cols-1 items-start gap-8 md:grid-cols-2">
        <div class="grid grid-cols-2 gap-4 md:grid-cols-1 mx-10">
          <img src="/storage/{{$products->image}}" class="aspect-square w-full rounded-xl object-cover" />

        </div>

        <div class="sticky top-0">
          <strong class="rounded-full border border-blue-600 bg-gray-100 px-3 py-0.5 text-xs font-medium tracking-wide text-blue-600">
            Sản phẩm mới
          </strong>
          <div class="input-group hidden">
            {{$products->slug}}
          </div>
          <div class="mt-8 flex justify-between">
            <div class="max-w-[35ch] space-y-2">
              <h1 class="text-xl font-bold sm:text-2xl">
                {{$products->name}}
              </h1>
            </div>

            <p class="text-lg font-bold">{{ number_format($products->price, 0, '.', ',') }} đ</p>
          </div>

          <div class="mt-4">
            <div class="prose max-w-none">
              <p>
                {{$products->description}}
              </p>
            </div>
          </div>

          <div class="mt-8">
            <fieldset>
              <legend class="mb-1 text-sm font-medium">Màu</legend>

              <div class="flex flex-wrap gap-1">
                <label for="color_tt" class="cursor-pointer">
                  <input type="radio" name="color" id="color_tt" class="peer sr-only" />

                  <span class="group inline-block rounded-full border px-3 py-1 text-xs font-medium peer-checked:bg-black peer-checked:text-white">
                    {{$products->color}}
                  </span>
                </label>
              </div>
            </fieldset>

            <fieldset class="mt-4">
              <legend class="mb-1 text-sm font-medium">Kích cỡ</legend>

              <div class="flex flex-wrap gap-1">
                <label for="size_xs" class="cursor-pointer">
                  <input type="radio" name="size" id="size_xs" class="peer sr-only" />

                  <span class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white">
                    {{$products->size}}
                  </span>
                </label>
              </div>
            </fieldset>

            <div class="mt-4 flex gap-4">
              <div>
                <label for="quantity" class="mb-1 text-sm font-medium">Số lượng:</label>
                <form action="{{ route('addCart') }}" method="post">
                  @csrf
                  <input class="hidden" type="text" name="name" value="{{$products->name}}" />
                  <input class="hidden" type="text" name="price" value="{{$products->price}}" />
                  <input class="hidden" type="text" name="image" value="{{$products->image}}" />
                  <input class="hidden" type="text" name="color" value="{{$products->color}}" />
                  <input class="hidden" type="text" name="size" value="{{$products->size}}" />
                  <input type="number" id="Quantity" name="quantity" value="1" class="h-10 w-24 rounded border-gray-200 sm:text-sm" />
                  <button type="submit" class="block rounded mt-10 bg-teal-600 px-5 py-3 text-xs font-medium text-white hover:bg-gray-500">
                    Thêm vào giỏ hàng
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
  </section>
</div>
@endsection
@extends('client.master')