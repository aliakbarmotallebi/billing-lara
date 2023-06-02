<x-guest-layout title="ورود به حساب کاربری">
    <div class="flex items-center justify-center h-screen bg-blue-100">  
        <div class="md:min-w-full lg:min-w-[445px]"> 
            <div class="bg-white rounded-2xl border shadow-xl mx-auto w-full">
                <form method="POST">
                    <section
                        class="mx-auto px-12 text-right space-y-4 py-7">
                            <h1 class="font-bold text-2xl text-gray-700 w-4/6 text-center py-5">
                                ورود به پنل مدیریت
                            </h1>
                            @csrf
                            <div>
                                <x-form.input label="نام کاربری" name="username" required />
                            </div>
                            <div>
                                <x-form.input label="گذرواژه" name="passcode" type="password" required />
                            </div>
                            <div class="flex justify-between">
                                <div class="mb-5 px-2 ">
                                    <label class="font-semibold text-sm text-gray-600 pb-1 block mb-1">
                                        کد امنیتی
                                    </label>
                                    <img onclick="document.getElementById('captcha').src = 'captcha/flat?' + Math.random()"
                                        wire:ignore class="w-full rounded-md cursor-pointer"
                                        src="{{ captcha_src('flat') }}" alt="" id="captcha">
                                </div>
                                <div class="flex-1">
                                    <x-form.input label="کد امنیتی را وارد کنید" name="captcha" required />
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" name="remember" type="checkbox"
                                        class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-cyan-200 h-4 w-4 rounded">
                                </div>
                                <div class="text-sm mr-3">
                                    <label for="remember" class="font-medium text-gray-900">
                                        مرا بخاطر بسپار
                                    </label>
                                </div>
                            </div>
                            <div>
                                <button class="bg-blue-400 text-white rounded-md font-semibold px-4 py-3 w-full">
                                    ورود به حساب
                                </button>    
                            </div>          

                    </section>
                </form> 
            </div> 
            <div class="mx-auto flex w-full max-w-md flex-col space-y-2">
                <div class="pt-5">
                    <a href="/" class="text-gray-900 hover:underline focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 mr-2 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 ml-1 text-[#626890]" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M6 19h12V9.157l-6-5.454-6 5.454V19zm13 2H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9a1 1 0 0 1-1 1zM7.5 13h2a2.5 2.5 0 1 0 5 0h2a4.5 4.5 0 1 1-9 0z"/></svg>
                        برگشت به صفحه اصلی
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>