<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <body class="font-mono bg-gray-400">
            <!-- Container -->
            <div class="container mx-auto">
                <div class="flex justify-center px-6 my-12">
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                        <!-- Col -->
                        <div
                            class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                            style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTH9qdDBsQzQNL4rwro7iD8_J2MTdJFlhu64g&usqp=CAU')"
                        ></div>
                        <!-- Col -->
                        <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                            <h3 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">Create an Account!</h3>
                            <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                                <div class="mb-4 md:flex md:justify-between">
                                    
                                </div>
                                <div class="mb-4">
                                    <x-input-label class="block text-xs font-semibold text-gray-600 uppercase" for="name" :value="__('Name')" />
                                    <x-text-input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="mb-4">
                                    <x-input-label class="block text-xs font-semibold text-gray-600 uppercase" for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <x-input-label class="block text-xs font-semibold text-gray-600 uppercase" for="password" :value="__('Password')" />
                                            <x-text-input id="password" class="block mt-1 w-full" type="password" placeholder="******************" name="password" required autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        <p class="text-xs italic text-red-500">Please choose a password.</p>
                                    </div>
                                    <div class="md:ml-2">
                                        <x-input-label class="block text-xs font-semibold text-gray-600 uppercase" for="password_confirmation" :value="__('Confirm Password')" />
                                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password" placeholder="******************"
                                            name="password_confirmation" required autocomplete="new-password" />
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="mb-6 text-center">
                                        <x-primary-button class="ml-1 px-4 py-2 font-bold text-white bg-gradient-to-r from-purple-500 to-pink-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                                            {{ __('Register') }}
                                        </x-primary-button>
                                </div>
                                <hr class="mb-6 border-t" />
                                
                                <div class="text-center">
                                    <a
                                        class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                        href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        
    </form>
</x-guest-layout>