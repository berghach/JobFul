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
                <x-text-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" :value="old('company_name')" placeholder="Exemple company" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
            </div>

            <!-- Industry -->
            <div>
                <x-input-label for="industry" :value="__('Industry')" />
                <x-text-input id="industry" class="block mt-1 w-full" type="text" name="industry" :value="old('industry')" placeholder="Exemple industry" required autocomplete="on" />
                <x-input-error :messages="$errors->get('industry')" class="mt-2" />
            </div>

            {{-- Company Bio --}}
            <div>
                <x-input-label for="bio" :value="__('Bio')" />
                <x-textarea-input id="bio" class="block mt-1 w-full" name="bio" row="5" :value="old('bio')" placeholder="About the company ..." required autocomplete="on" />
                <x-input-error :messages="$errors->get('bio')" class="mt-2" />
            </div>

            {{-- Company Headquarter --}}
            <div>
                <x-input-label for="company_headquarter" :value="__('Company headquarter')" />
                <x-text-input id="company_headquarter" class="block mt-1 w-full" type="text" name="company_headquarter" :value="old('company_headquarter')" placeholder="Company headquarter address" required autocomplete="on" />
                <x-input-error :messages="$errors->get('company_headquarter')" class="mt-2" />
            </div>

            {{-- Company Logo --}}
            <div>
                <x-input-label for="logo" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                    <x-file-input id="logo" class="block mt-1 w-full" type="file" name="logo" :value="__('Upload the company logo')" autocomplete="on" />
                </x-input-label>
                <x-input-error :messages="$errors->get('logo')" class="mt-2" />
            </div>

            {{-- Company Links --}}
            <x-input-label for="links" :value="__('Company Links')" />
            <div id="links-container" class="flex flex-col gap-1">
                <div id="link[0]">
                    <x-text-input type="text" name="links[0][url]" class="block mt-1 w-full"  placeholder="Link URL"/>
                </div>
            </div>
            <x-secondary-button type="button" id="add-link" onclick="addLink()" class=" inline-flex w-10 h-10 p-1 items-center justify-center">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('logo').addEventListener('change', (event) => {    
            document.getElementById('logo').value;
        });
    });
    
    function addLink() {
        const linksContainer = document.getElementById('links-container');

        let linkCount = linksContainer.childElementCount;

        const linkDiv = document.createElement('div');
        linkDiv.Id.add(`link[${linkCount}]`);
        linkDiv.innerHTML = `
            <x-text-input type="text" name="links[${linkCount}][url]" placeholder="Link URL"/>
        `;
        linksContainer.appendChild(linkDiv);
    }
</script>