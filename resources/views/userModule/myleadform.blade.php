


<x-guest-layout>
    <form method="post" action="{{$url}}">
        @csrf

        <div>
            <x-input-label for="lead id" :value="__('lead id')" />
            <x-text-input id="lead id" class="block mt-1 w-full" type="text" name="lead_id" :value="$lead->lead_id" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('lead id')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
           
            <label for="selectOption" class="block font-medium text-sm text-gray-700">Status:</label>
        <select id="selectOption" name="selectOption" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <!-- Static options -->
            <option value="pending"> pending</option>
            <option value="followup">followUp</option>
            
            
        </select>
            
           
           
        </select>

        </div>
        <div class="mt-4">
            <x-input-label for="user id" :value="__('user id')" />
            <x-text-input style="pading:4px" id="user id" class="block mt-1 w-full" type="user id" name="user_id" :value="old('user id')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('user id')" class="mt-2" />
        </div>



        <!-- Name -->
        <!-- <div>
            <x-input-label for="lead id" :value="$lead->lead_id" />
            <x-text-input id="lead id" class="block mt-1 w-full" type="text" name="lead_id" :value="$lead->lead_id" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('lead id')" class="mt-2" />
        </div> -->

        <!-- Email Address -->
        <!-- <div class="mt-4">
           
            <label for="selectOption" class="block font-medium text-sm text-gray-700">Status:</label>
        <select id="selectOption" name="selectOption" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            Static options
            <option value="FollowUp">FollowUp</option>
            <option value="Pending">Pending</option>
            
            
        </select> -->
            
           
           
        <!-- </select>

        </div>
        <div class="mt-4">
            <x-input-label for="user id" :value="__($lead->user_id)" />
            <x-text-input style="pading:4px" id="user id" class="block mt-1 w-full" type="user id" name="user_id" :value="$lead->user_id" required autocomplete="username" />
            <x-input-error :messages="$errors->get('user id')" class="mt-2" />
        </div> -->

        <!-- Password -->
        <!-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

         Confirm Password -->
        <!-- <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div> -->

        <!-- <div class="flex items-center justify-end mt-4"> --> 
            <!-- <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a> -->

            <x-primary-button class="ms-4">
                {{ __('submit') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
