
        <style>
    .img{
        width: 300px;
    }
    </style>

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <a href="{{url('/')}}"> <img src="{{asset('logo.jpg')}}" class="img"> </a>
    </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ url('Driver/post-registration') }}">
            @csrf

            <div><h3>Driver</h3>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
 
            <div class=" mt-4  pt-5">
                <x-jet-label for="location_id" value="{{ __('Location') }}" />
                <select   class="  block mt-1 w-full" id="location_id" name="location_id">
                    @foreach ($location as $locations )
                        
                  
<option value="{{$locations->id}}">{{$locations->name}}</option>

 
    @endforeach
  </select>
                <!-- <x-jet-input id="licancenumber" class="block mt-1 w-full" type="email" name="licancenumber" :value="old('licancenumber')"  /> -->
            </div> 
            <div class=" mt-4  pt-5">
                <x-jet-label for="explicance" value="{{ __('explicance') }}" />
                <x-jet-input id="explicance" class="block mt-1 w-full" type="text" name="explicance" :value="old('explicance')"  />
            </div>
            <div class=" mt-4  pt-5">
                <x-jet-label for="explicance" value="{{ __('Car Number') }}" />

                <x-jet-input id="carnumber" class="block mt-1 w-full" type="text" name="carnumber" :value="old('carnumber')"  />
            </div>
        
            <div class=" mt-4  pt-5">
                <x-jet-label for="phone" value="{{ __('phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>


            <div class=" mt-4  pt-5">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>
          
            <div class=" mt-4  pt-5">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class=" mt-4  pt-5">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ url('Driver/login') }}">
                   Driver Login
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
