{{-- <div>
    The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh
</div> --}}
<x-guest>
    <div class="h-screen flex flex-col gap-2 justify-center items-center  bg-primary">
        <div>
            <img src="{{Vite::asset('resources/images/logo-white.png')}}" alt="">
        </div>
        <div>
            <h1 class=" corinthia-bold text-5xl text-white">{{ __('Inside the job market') }}</h1>
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="w-full sm:max-w-md mt-3 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-3xl">

            <form method="POST" action="{{ route('login') }}" class="flex flex-col justify-center gap-3">
                @csrf
                @method('POST')
                @if ($errors->any())
                    <div class=" text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600  hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 " href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                
                <x-primary-button class=" border-secondary border-4">
                    {{ __('Log in') }}
                </x-primary-button>

                <div class="flex items-center justify-end mt-4">
                    <p>{{ __('Don\'t have an account?') }}</p>
                    <a class="underline text-sm text-gray-600  hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 " href="{{ route('register') }}">
                        {{ __('sign up') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest>