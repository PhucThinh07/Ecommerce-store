
<header class="bg-white fixed top-0 left-0 right-0 z-50">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="md:flex md:items-center md:gap-12">
        <a class="block text-teal-600 text-2xl font-medium" href="/">
          OOTD Cloth
        </a>
        
      </div>
        <div class="hidden md:block">
          <nav aria-label="Global">
            <ul class="flex items-center gap-6 text-sm">
              <li>
                <a class="text-gray-400 text-base font-medium tracking-wide transition hover:text-teal-600" href="/">
                  Trang chủ
                </a>
              </li>
              <li>
                <a class="text-gray-400 text-base font-medium tracking-wide transition hover:text-teal-600" href="/product">
                  Sản phẩm
                </a>
              </li>
              <li>
                <a class="text-gray-400 text-base font-medium tracking-wide transition hover:text-teal-600" href="/about">
                  Về chúng tôi
                </a>
              </li>
              <li>
                <a class="text-gray-400 text-base font-medium tracking-wide transition hover:text-teal-600" href="/form">
                  Hỗ trợ
                </a>
              </li>
              <li>
                <a class="text-gray-400 text-base font-medium tracking-wide transition hover:text-teal-600" href="/blog">
                  Bài viết
                </a>
              </li>
            </ul>
          </nav>
        </div>
        
        <div class="flex items-center gap-4">
          <div class="sm:flex sm:gap-4">
            <div class="hidden sm:flex">
              @if(Auth::user())
              <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Quản lí tài khoản') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Đăng xuất') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
              @else
              <a href="/login" class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600"
               >
                <i class="fa-regular fa-user"></i>
              </a>
              @endif
            </div>
            <div class="hidden sm:flex">
              <a href="/cart" class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600" >
                <i class="fa-solid fa-cart-shopping"></i>
              </a>
            </div>
            <div class="hidden sm:flex">
              <a href="/favorite" class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600" >
                <i class="fa-regular fa-heart"></i>
              </a>
            </div>
          </div>
          
          <div class="block md:hidden">
            <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>