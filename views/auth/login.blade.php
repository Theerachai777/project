<x-guest-layout>
    <form method="POST" action="{{ route('login') }}">
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
                            style="background-image: url('data:image/png;base64,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')"
                        ></div>
                        <!-- Col -->
                        <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                            <h3 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">Login</h3>
                            <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                                <div class="mb-4 md:flex md:justify-between">
                                    
                                </div>
                                <div class="mb-4">
                                    <div>
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <x-input-label class="block text-xs font-semibold text-gray-600 uppercase" for="password" :value="__('Password')" />
                                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    
                                </div>
                                <div class="mb-6 text-center">
                                        <x-primary-button class="ml-1 px-4 py-2 font-bold text-white bg-gradient-to-r from-purple-500 to-pink-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                                            {{ __('Login') }}
                                        </x-primary-button>
                                </div>
                                <hr class="mb-6 border-t" />
                                
                                <div class="text-center">
                                    <a
                                        class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                        href="{{ route('register') }}">
                                        {{ __('Not a member?') }}
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