<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information.") }}
        </p>
    </header>

    
    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="prenom" :value="__('Prénom')" />
            <x-text-input id="prenom" name="prenom" type="text" class="mt-1 block w-full" :value="old('prenom', $user->prenom)" required autocomplete="prenom" />
            <x-input-error class="mt-2" :messages="$errors->get('prenom')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>
        <div>
            <x-input-label for="profile_photo" :value="__('Profile Photo')" />
            <input id="profile_photo" name="profile_photo" type="file" class="mt-1 block w-full" autocomplete="profile_photo" />
            @if ($user->profile_photo)
                <p>Current Profile Photo:</p>
                <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Current Profile Photo" class="mt-2 w-32 h-32 rounded-full">
            @else
                <p>No profile photo available</p>
            @endif
            <x-input-error class="mt-2" :messages="$errors->get('profile_photo')" />
        </div>
       
        
        

        <div>
            <x-input-label for="telephone" :value="__('Téléphone')" />
            <x-text-input id="telephone" name="telephone" type="text" class="mt-1 block w-full" :value="old('telephone', $user->telephone)" required autocomplete="telephone" />
            <x-input-error class="mt-2" :messages="$errors->get('telephone')" />
        </div>

        <div>
            <x-input-label for="region" :value="__('Region')" />
            <select id="region" name="region" class="mt-1 block w-full" required autocomplete="region">
                <option disabled selected>{{ __('Select Region') }}</option>
                @foreach(['Chaouia-Ouardigha', 'Doukkala-Abda', 'Fès-Boulemane', 'Gharb-Chrarda-Beni Hssen', 'Grand Casablanca', 'Guelmim-Es Semara', 'Laâyoune-Boujdour-Sakia el Hamra', 'Marrakech-Tensift-Al Haouz', 'Meknès-Tafilalet', 'LOriental', 'Oued ed Dahab-Lagouira', 'Rabat-Salé-Zemmour-Zaër', 'Souss-Massa-Drâa', 'Tadla-Azilal', 'Tanger-Tétouan'] as $region)
                    <option value="{{ $region }}" @if(old('region', $user->region) == $region) selected @endif>{{ $region }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <x-input-label for="ville" :value="__('ville')" />
            <x-text-input id="ville" name="ville" type="text" class="mt-1 block w-full" :value="old('ville', $user->ville)" autocomplete="ville" />
            <x-input-error class="mt-2" :messages="$errors->get('ville')" />
        </div>
        <div>
            <x-input-label for="adresse" :value="__('adresse')" />
            <x-text-input id="adresse" name="adresse" type="text" class="mt-1 block w-full" :value="old('adresse', $user->adresse)" autocomplete="adresse" />
            <x-input-error class="mt-2" :messages="$errors->get('adresse')" />
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Save Changes') }}
            </button>
        </div>
    </form>
</section>
            
