<x-guest-layout>
    <x-authcard>
        <div class="mb-4 text-lg text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="mt-4 flex flex-row space-x-3">
                <svg class="w-auto h-10" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em"
                    height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10h5v-2h-5c-4.34 0-8-3.66-8-8s3.66-8 8-8s8 3.66 8 8v1.43c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57V12c0-2.76-2.24-5-5-5s-5 2.24-5 5s2.24 5 5 5c1.38 0 2.64-.56 3.54-1.47c.65.89 1.77 1.47 2.96 1.47c1.97 0 3.5-1.6 3.5-3.57V12c0-5.52-4.48-10-10-10zm0 13c-1.66 0-3-1.34-3-3s1.34-3 3-3s3 1.34 3 3s-1.34 3-3 3z" />
                </svg>
                <x-input id="email"
                    class="focus:placeholder:text-transparent block text-black bg-transparent border-transparent focus:border-x-transparent focus:border-t-transparent transition ease-in-out m-0 placeholder-gray-900/70 w-full focus:outline-none border-b-2 focus:ring-0 border-b-black"
                    placeholder="E-mail" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Link Reset Email Password  ') }}
                </x-button>
            </div>
        </form>
    </x-authcard>
</x-guest-layout>
