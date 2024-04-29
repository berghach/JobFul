<x-layout title="Add Company">
    @include('partials.sidebar')
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
                    <x-input-label for="name" class="after:ml-0.5 after:text-red-500 after:content-['*']" :value="__('Company name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Exemple company" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
    
                <!-- Industry -->
                <div>
                    <x-input-label for="industry" class="after:ml-0.5 after:text-red-500 after:content-['*']" :value="__('Industry')" />
                    <x-text-input id="industry" class="block mt-1 w-full" type="text" name="industry" :value="old('industry')" placeholder="Exemple industry" required autocomplete="on" />
                    <x-input-error :messages="$errors->get('industry')" class="mt-2" />
                </div>
    
                {{-- Company Bio --}}
                <div>
                    <x-input-label for="bio" class="after:ml-0.5 after:text-red-500 after:content-['*']" :value="__('Bio')" />
                    <x-textarea-input id="bio" class="block mt-1 w-full" name="bio" row="5" :value="old('bio')" placeholder="About the company ..." required autocomplete="on" />
                    <x-input-error :messages="$errors->get('bio')" class="mt-2" />
                </div>
    
                {{-- Company Headquarter --}}
                <div>
                    <x-input-label for="headquarter" class="after:ml-0.5 after:text-red-500 after:content-['*']" :value="__('Company headquarter')" />
                    <x-text-input id="headquarter" class="block mt-1 w-full" type="text" name="headquarter" :value="old('headquarter')" placeholder="Company headquarter address" required autocomplete="on" />
                    <x-input-error :messages="$errors->get('headquarter')" class="mt-2" />
                </div>
    
                {{-- Company Logo --}}
                <div>
                    <x-input-label for="logo" class="relative cursor-pointer rounded-md "  :value="__('Upload the company logo')"/>
                    <x-file-input id="logo" class="block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-primary file:py-2.5 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-primary focus:outline-none" type="file" name="logo" autocomplete="on" />
                    <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                </div>
    
                {{-- Company Links --}}
                <h1 class="font-large font-semibold text-md text-gray-700">{{__('Company links')}}</h1>
                <div id="links-container" class="flex flex-col gap-1">
                    <div id="links[0]" class="inline-flex items-center gap-1">
                        <input id="links[0][url]" type="url" name="links[0][url]" class="block mt-1 w-full h-10 ps-3 border-gray-300 border-2 rounded-xl shadow-sm"  placeholder="Link 1"/>
                    </div>
                </div>
                <x-secondary-button type="button" onclick="addLink()" class=" inline-flex w-10 h-10 p-1 items-center justify-center">
                    <i data-feather="plus"></i></x-secondary-button>
                
                {{--  --}}
                {{-- <div>
                    <x-input-label for="" :value="__('')" />
                    <x-text-input id="" class="block mt-1 w-full" type="" name="" :value="old('')" required autocomplete="on" />
                    <x-input-error :messages="$errors->get('')" class="mt-2" />
                </div> --}}
                <hr>
    
                <x-secondary-button type="submit" class="border-secondary px-4 py-2 border-4">
                    {{ __('Submit') }}
                </x-secondary-button>
        </form>
    </div>
</x-layout>
