@section('content')
    <section class="bg-gray-100 mt-10">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
                <div class="lg:col-span-2 lg:py-12">
                    <p class="text-teal-600 font-bold text-3xl mb-5">Liên hệ với OOTD Cloth</p>
                    <p class="max-w-xl text-lg">
                        Chúng tôi luôn lắng nghe khách hàng của mình, những ý kiến của các bạn là điều mà chúng tôi luôn mong chờ.
                        Hãy cùng nhau trau đổi hoặc chúng tôi có thể giải đáp thắc mắc cho bạn !
                    </p>

                    <div class="mt-8">
                        <a href="" class="text-2xl font-bold text-teal-600">
                            0151 475 4450
                        </a>

                        <address class="mt-2 not-italic">
                            Địa chỉ: kdc Hoàng Quân, quận Cái Răng, tp Cần Thơ
                        </address>
                    </div>
                </div>

                <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
                    <form action="" class="space-y-4">
                        <div>
                            <label class="sr-only" for="name">Họ và tên</label>
                            <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Họ và tên" type="text" id="name" />
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="sr-only" for="email">Email</label>
                                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Địa chỉ email" type="email" id="email" />
                            </div>

                            <div>
                                <label class="sr-only" for="phone">Số điện thoại</label>
                                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Số điện thoại" type="tel" id="phone" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 text-center sm:grid-cols-3">
                            <div>
                                <input class="peer sr-only" id="option1" type="radio" tabindex="-1" name="option" />

                                <label for="option1" class="block w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white" tabindex="0">
                                    <span class="text-sm"> Góp ý </span>
                                </label>
                            </div>

                            <div>
                                <input class="peer sr-only" id="option2" type="radio" tabindex="-1" name="option" />

                                <label for="option2" class="block w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white" tabindex="0">
                                    <span class="text-sm"> Khiếu nại </span>
                                </label>
                            </div>

                            <div>
                                <input class="peer sr-only" id="option3" type="radio" tabindex="-1" name="option" />

                                <label for="option3" class="block w-full rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black peer-checked:border-black peer-checked:bg-black peer-checked:text-white" tabindex="0">
                                    <span class="text-sm"> Trao đổi khác </span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <label class="sr-only" for="message">Nội dung</label>

                            <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Nội dung" rows="8" id="message"></textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="inline-block w-full rounded-lg bg-teal-600 hover:scale-105 hover:bg-teal-900 duration-100 px-5 py-3 font-medium text-white sm:w-auto">
                                Gửi nội dung
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('client.master')