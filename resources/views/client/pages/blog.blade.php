@section('content')
<section>
    <div class="mx-auto max-w-screen-xl mt-10 px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <nav class="bg-gray-50">
            <div class="container mx-auto flex justify-start items-center">
            Danh mục bài viết:    
            @foreach($categories as $itemcat)
                <a href="/" class="text-teal-600 font-semibold py-2 px-4">
                    {{$itemcat->name}}
                </a>
                @endforeach
            </div>
        </nav>
        <div class="mt-4 lg:mt-8 lg:grid lg:grid-cols-4 lg:items-start lg:gap-8">
            <div class="lg:col-span-4">
                <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach( $posts as $itemp)
                    <article class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
                        <img alt="{{$itemp->name}}" src="/storage/{{$itemp->image}}" class="h-56 w-full object-cover" />

                        <div class="p-4 sm:p-6">
                            <a href="#">
                                <h3 class="text-lg font-medium text-gray-900">
                                {{$itemp->name}}.
                                </h3>
                            </a>
                            <a href="#" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                                Xem bài viết
                                <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                                    &rarr;
                                </span>
                            </a>
                        </div>
                    </article>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('client.master')