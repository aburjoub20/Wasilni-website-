<x-guest-layout>
<style>
    .img{
        width: 300px;
    }
    </style>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <a href="{{url('/')}}"> <img src="{{asset('logo.jpg')}}" class="img"> </a>

        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ url('Driver/post-login') }}">
            @csrf

            <div class=" mt-4  pt-5">
                <x-jet-label for="text" value="{{ __('phone') }}" />
                <x-jet-input id="text" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            </div>

            <div class=" mt-4  pt-5">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

          
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-label  name="" />
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ url('Driver/registration') }}">
Create new Account 
                    </a>
                 
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
         

              
            </div>

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
        @include('sweetalert::alert')
    </x-jet-authentication-card>
</x-guest-layout>
