<x-guest-layout title="ورود به حساب کاربری">
    <div class="m-0 antialiased leading-none">
        <!-- START NAV -->
        <nav class="bg-white border-b">
            <div class="container mx-auto">
                <div class="flex items-center justify-between py-4 pl-1">

                    <!-- LOGO -->
                    <div>
                        <a href="#" class="flex items-center font-extrabold text-gray-700 text-sm">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 fill-current" viewBox="0 0 24 24"><path d="M12.0049 22.0029C6.48204 22.0029 2.00488 17.5258 2.00488 12.0029C2.00488 6.48008 6.48204 2.00293 12.0049 2.00293C17.5277 2.00293 22.0049 6.48008 22.0049 12.0029C22.0049 17.5258 17.5277 22.0029 12.0049 22.0029ZM8.50488 14.0029V16.0029H11.0049V18.0029H13.0049V16.0029H14.0049C15.3856 16.0029 16.5049 14.8836 16.5049 13.5029C16.5049 12.1222 15.3856 11.0029 14.0049 11.0029H10.0049C9.72874 11.0029 9.50488 10.7791 9.50488 10.5029C9.50488 10.2268 9.72874 10.0029 10.0049 10.0029H15.5049V8.00293H13.0049V6.00293H11.0049V8.00293H10.0049C8.62417 8.00293 7.50488 9.12222 7.50488 10.5029C7.50488 11.8836 8.62417 13.0029 10.0049 13.0029H14.0049C14.281 13.0029 14.5049 13.2268 14.5049 13.5029C14.5049 13.7791 14.281 14.0029 14.0049 14.0029H8.50488Z"></path></svg>
                        </a>
                    </div>

                    <!-- Header Menu -->
                    <div
                        class="hidden w-full flex-grow lg:flex justify-end lg:items-center lg:w-auto uppercase font-light">
                        <a href="#" class="text-gray-800 text-sm hover:text-blue-600 mr-5">
                            <i class="icon ion-ios-analytics mr-2 text-gray-600 inline-block"></i>
                            خروج از سیستم
                        </a>
                    </div>

                    <!-- Avatar Menu -->
                    <div class="hidden sm:flex items-center">
                        <div class="relative" id="usermenu">
                            <div
                                class="flex items-center cursor-pointer text-sm border border-white border-b-0 text-gray-700 text-sm rounded-t-lg py-1 px-2">
                                <img src="avatar.png" class="rounded-full h-8 mr-2 border border-gray-500 p-px">
                                eCreeth
                                <svg class="fill-current text-gray-600 h-4 w-4 mt-1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                            <!-- Avatar Sub-Menu -->
                            <div
                                class="absolute border border-t-0 border-gray-100 invisible rounded-b-lg bg-white p-2 w-48">
                                <a href="#" class="px-4 py-2 block text-gray-800">Account Settings</a>
                                <hr class="border-t mx-2 border-gray-100">
                                <a href="#" class="px-4 py-2 block text-gray-800">Logout</a>
                            </div>
                        </div>
                    </div>
                    <!-- END Avatar Menu -->

                    <!-- Toggle Menu Svg Icon -->
                    <div class="sm:hidden cursor-pointer h-6 w-6 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" className="fill-current">
                            <path fillRule="evenodd"
                                d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </div>

                </div>
            </div>
        </nav>
        <!-- END NAV -->

        <div class="container mx-auto">
            <div class="flex w-full min-w-full rounded-sm mt-4">
                <!-- ASIDE -->
                <div class="w-1/4 md:w-2/6 font-light mb-5">
                    <!-- First Aside Menu -->
                    <div class="bg-white rounded-lg border border-neutral-200">
                        <div class="border-b border-gray-200">
                            <div class="text-black font-semibold uppercase py-5 px-5">
                                مدیریت طرف حساب ها
                            </div>
                        </div>
                        <div>
                            <a class="block py-3 px-5 hover:bg-neutral-100" href="#">
                                <div class="text-gray-700 text-sm">
                                    <i class="icon ion-ios-paper mr-2 text-gray-600 inline-block"></i>
                                    ثبت طرف حساب جدید
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="block py-3 px-5 hover:bg-neutral-100 border border-gray-200 bg-gray-600 flex justify-between"
                                href="#">
                                <div class="text-white">
                                    <i class="icon ion-ios-person mr-2 text-gray-500 inline-block"></i>
                                    لیست طرف حساب ها
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Second Aside Menu -->
                    <div class="mt-5 bg-white rounded-lg border border-neutral-200">
                        <div class="border-b border-gray-200">
                            <div class="text-black font-semibold uppercase py-5 px-5">مدیریت محصولات</div>
                        </div>
                        <div>
                            <a class="block py-3 px-5 hover:bg-neutral-100" href="#">
                                <div class="text-gray-700 text-sm">
                                    <i class="icon ion-ios-apps mr-2 text-gray-600 inline-block"></i>
                                    جدید محصول جدید
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="block py-3 px-5 hover:bg-neutral-100" href="#">
                                <div class="text-gray-700 text-sm">
                                    <i class="icon ion-ios-lock mr-2 text-gray-600 inline-block"></i>
                                    لیست محصولات
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- Third Aside Menu -->
                    <div class="mt-5 bg-white rounded-lg border border-neutral-200">
                        <div class="border-b border-gray-200">
                            <div class="text-black font-semibold uppercase py-5 px-5">
                                درآمد و هزنیه جانبی
                            </div>
                        </div>
                        <div>
                            <a class="block py-3 px-5 hover:bg-neutral-100" href="#">
                                <div class="text-gray-700 text-sm">
                                    <i class="icon ion-ios-compass mr-2 text-gray-600 inline-block"></i>
                                    تراز مالی
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mt-5 bg-white rounded-lg border border-neutral-200">
                      <div class="border-b border-gray-200">
                          <div class="text-black font-semibold uppercase py-5 px-5">
                              فاکتور 
                          </div>
                      </div>
                      <div>
                          <a class="block py-3 px-5 hover:bg-neutral-100" href="#">
                              <div class="text-gray-700 text-sm">
                                  <i class="icon ion-ios-compass mr-2 text-gray-600 inline-block"></i>
                                  خرید محصول
                              </div>
                          </a>
                          <a class="block py-3 px-5 hover:bg-neutral-100" href="#">
                            <div class="text-gray-700 text-sm">
                                <i class="icon ion-ios-compass mr-2 text-gray-600 inline-block"></i>
                                فروش محصول
                            </div>
                        </a>
                      </div>
                  </div>
                </div> <!-- END ASIDE -->

                <!-- CONTENT -->
                <div class="p-4 w-full bg-white mr-4 font-light mb-5 rounded">
                    <h1>eCreeth</h1>
                    {{ $slot }}
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
