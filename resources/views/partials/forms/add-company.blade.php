<div class="w-full sm:max-w-md mt-3 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-3xl">
    <form method="POST" action="{{ route('company.store') }}" class="flex flex-col gap-3" enctype="multipart/form-data">
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
            <!-- Company Name -->
            <div>
                <x-input-label for="company_name" :value="__('Company name')" />
                <x-text-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" :value="old('company_name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
            </div>

            <!-- Industry -->
            <div>
                <x-input-label for="industry" :value="__('Industry')" />
                <x-text-input id="industry" class="block mt-1 w-full" type="text" name="industry" :value="old('industry')" required autocomplete="on" />
                <x-input-error :messages="$errors->get('industry')" class="mt-2" />
            </div>

            {{-- Company Bio --}}
            <div>
                <x-input-label for="bio" :value="__('Bio')" />
                <x-textarea-input id="bio" class="block mt-1 w-full" name="bio" row="5" :value="old('bio')" required autocomplete="on" />
                <x-input-error :messages="$errors->get('bio')" class="mt-2" />
            </div>

            {{--  --}}
            <div>
                <x-input-label for="" :value="__('')" />
                <x-text-input id="" class="block mt-1 w-full" type="" name="" :value="old('')" required autocomplete="on" />
                <x-input-error :messages="$errors->get('')" class="mt-2" />
            </div>

            <x-secondary-button class="border-secondary border-4">
                {{ __('Submit') }}
            </x-secondary-button>
    </form>
</div>