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

        <form method="POST" action="{{ url('post-login') }}">
            @csrf

            <div class=" mt-4  pt-5">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class=" mt-4  pt-5">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4 mt-4  pt-5  d-flex justify-content-end ">
                <label for="remember_me" class="d-flex justify-content-end ">
                    <x-jet-label  name="" />
                    <a  class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ url('/registration') }}">
Create New Account 
                    </a>
                 
                </label>
            </div> 

            <div class="flex items-center justify-end mt-4">
         

              
            </div>

                <x-jet-button class="">
                    {{ __('Log in') }}
                </x-jet-button>
                
               
            </div>
        </form>
    </x-jet-authentication-card>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('User/scripts.js')}}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        @include('sweetalert::alert')

    </body>
</x-guest-layout>
