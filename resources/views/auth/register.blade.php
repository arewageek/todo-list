<x-guest-layout>

<div id="appCapsule" class="bg-[#0d4656] flex justify-center items-center h-full min-h-screen">
        <div class="login-form mt-1 w-full">
            <div class="flex flex-col gap-y-6 text-center mb-8">
                {{-- <img src="{{ asset('assets/img/logo-slim.png') }}"
                    style="position:relative;width:100%;margin-top:15px;" /> --}}
                <h1 class="text-white text-4xl font-bold">Register</h1>
                <h4 class="text-gray-100">
                    Create your free account!
                    Already have an account? <a href="{{ route('login') }}" class="text-blue-500">Login</a>
                </h4>
            </div>
 
            <div class="section mb-3 mt-2 w-full lg:w-1/2 mx-auto">
                <form action="{{ route('register') }}" class="" method="POST">
                    @csrf
                    <div class="flex justify-between flex-wrap gap-y-2 p-8">
                        <div class="w-full lg:w-[45%] flex flex-col gap-y-2">
                            <label class="form-label text-gray-200 fs-6" for="first_name">First name <span
                                    class="text-danger"></span></label>
                            <input class="rounded-xl" id="first_name" name="first_name" required type="text">
                        </div>
 
                        <div class="w-full lg:w-[45%] flex flex-col gap-y-2">
                            <label class="form-label text-gray-200 fs-6" for="last_name">Last name <span
                                    class="text-danger"></span></label>
                            <input class="rounded-xl" id="last_name" name="last_name" required type="text">
                        </div>
 
                        <div class="w-full lg:w-[45%] flex flex-col gap-y-2">
                            <label class="form-label text-gray-200 fs-6" for="phone">Phone number <span
                                    class="text-danger"></span></label>
                            <input class="rounded-xl" id="phone"required name="phone" type="tel" required>
                        </div>
 
                        <div class="w-full lg:w-[45%] flex flex-col gap-y-2">
                            <label class="form-label text-gray-200 fs-6" for="username">Username</label>
                            <input class="rounded-xl" id="username" name="username" type="text" required>
                        </div>
 
                        <div class="w-full lg:w-full flex flex-col gap-y-2">
                            <label class="form-label text-gray-200 fs-6" for="email">Email</label>
                            <input class="rounded-xl" id="email" name="email" type="email" required>
                        </div>
 
                        <div class="w-full lg:w-[45%] flex flex-col gap-y-2 text-">
                            <label class="form-label text-gray-200 fs-6" for="Password">Password <span
                                    class="text-danger"></span></label>
                            <input autocomplete="off" class="rounded-xl" id="password" name="password" required
                                type="password">
                        </div>
 
                        <div class="w-full lg:w-[45%] flex flex-col gap-y-2">
                            <label class="form-label text-gray-200 fs-6" for="password_confirmation">Confirm password <span
                                    class="text-danger"></span></label>
                            <input autocomplete="off" class="rounded-xl" id="password_confirmation"
                                name="password_confirmation" required type="password">
                        </div>
 
                        <div class="form-links text-start">
                            <div class="form-check mb-6">
                                <input {{ old('terms') ? 'checked' : '' }} class="form-check-input" id="customCheckb1"
                                    name="terms" required type="checkbox">
                                <label class="form-check-label text-gray-200 text-[#3df5ea]" for="customCheckb1">
                                    I Agree to the <a href="#">Terms & Conditions</a>
                                </label>
                            </div>
                        </div>
 
                    </div>
 
                    <div class="w-3/4 mx-auto">
                        <x-primary-button 
                            class="w-full bg-gradient-to-r py-4 rounded-lg font-bold from-[#38af99] via-[#268273] to-[#0c4b43] flex items-center justify-center border-0" 
                            style="width: 100%;  color: white;" 
                            type="submit">
                            
                            Register
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
</x-guest-layout>
