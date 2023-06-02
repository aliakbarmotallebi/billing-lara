<x-guest-layout title="ورود به حساب کاربری">
    <div class="flex items-center justify-center h-screen bg-blue-100">  
    <div class="container mx-auto p-4 bg-white">
        <div class="w-full md:w-1/2 lg:w-1/3 mx-auto my-12">
          <h1 class="text-lg font-bold">ورود به پنل مدیریت</h1>
          <form class="flex flex-col mt-4" method="POST">
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
            <button
                type="submit"
                class="mt-4 px-4 py-3  leading-6 text-base rounded-md border border-transparent text-white focus:outline-none bg-blue-500 text-blue-100 hover:text-white focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer inline-flex items-center w-full justify-center items-center font-medium focus:outline-none"
            >
            ورود به حساب
            </button>
          </form>
        </div>
      </div>
    </div>
      
</x-guest-layout>