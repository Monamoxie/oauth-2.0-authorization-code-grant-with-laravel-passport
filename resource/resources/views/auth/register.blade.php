<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

         <h5 style="text-align:center; padding: 10px; font-weight: bold"> PLEASE REGISTER ON RESOURCE </h5>
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700">
                    Registering as
                </label>
                <select class="block mt-1 w-full block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" 
                    name="user_type" required :value="old('user_type')">
                    <option value="user">User</option>
                    <option value="client">Client</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Name') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>


            <div>
                <p> <b>N/B:</b> </p>
                <p> 
                   <small> If you register as a user, it means our <b> clients </b> can access your data from us (the resource), with your permission, when you visit their site, </small>
                </p> 
                <p> 
                   <small> If you register as a client, it means you can access our <b>users</b> data, with their permission when they visit your site. </small>
                </p> 
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered on resource?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
