{{-- <div>
    Do what you can, with what you have, where you are. - Theodore Roosevelt 
</div> --}}
<x-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center align-middle pt-6 sm:pt-0 bg-primary">
        <div>
            <img src="{{Vite::asset('resources/image/logo-white.png')}}" alt="">
        </div>
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-3xl">
            <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-3">
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
                <!-- Choose role -->
                <div name="role" class="flex flex-col gap-3 text-center">
                    <p class=" text-2xl">{{ __('Are you a talent looking for a job?') }}</p>
                    <ul class=" grid w-full gap-6 md:grid-cols-2">
                        <li class=" w-full">
                            <input class="hidden peer" type="radio" name="role_id" value={{$talent->id}} id={{$talent->name}} required autofocus>
                            <label class=" inline-flex justify-center align-middle w-full text-2xl border-2 px-5 hover:bg-primary cursor-pointer border-secondary rounded-xl" for={{$talent->name}}>Yes</label>
                        </li>
                        <li class=" w-full">
                            <input class="hidden peer" type="radio" name="role_id" value={{$user->id}} id={{$user->name}} >
                            <label class=" inline-flex justify-center align-middle w-full text-2xl border-2 px-5 hover:bg-primary cursor-pointer border-secondary rounded-xl" for={{$user->name}}>No</label>
                        </li>
                    </ul>
                </div>
                <div name="user-info" class="flex flex-col gap-3 hidden">
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Full name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
    
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
    
                    {{-- Phone number --}}
                    <div>
                        <x-input-label for="phone" :value="__('Phone number')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autocomplete="phone_number" />
                        <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                    </div>
    
                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" />
    
                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
    
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
    
                    <!-- Confirm Password -->
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
    
                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
    
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
    
                    <x-primary-button class="border-secondary border-4">
                        {{ __('Register') }}
                    </x-primary-button>
    
                    <div class="flex items-center justify-end mt-4">
                        <p>{{ __('Already registered?') }}</p>
                        <a class="underline text-sm  " href="{{ route('login') }}">
                            {{ __('log in') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-layout>
