{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
<x-guest-layout>
    @section('title')
        Register
    @endsection
    @section('content')
        <div class="flex items-center justify-center grow bg-center bg-no-repeat page-bg">
            <div class="card max-w-[370px] w-full">
                <form method="POST" action="{{ route('register') }}"class="card-body flex flex-col gap-5 p-10"
                    id="sign_up_form">
                    @csrf
                    <div class="text-center mb-2.5">
                        <h3 class="text-lg font-medium text-gray-900 leading-none mb-2.5">
                            Sign up
                        </h3>
                        <div class="flex items-center justify-center">
                            <span class="text-2sm text-gray-700 me-1.5">
                                Already have an Account ?
                            </span>
                            <a class="text-2sm link" href="/login">
                                Login
                            </a>
                        </div>
                        @if ($errors->any())
                            <div class="flex items-center justify-center font-medium">
                                <div>
                                    <ul class="mt-3 list-disc list-inside text-sm text-red-600 dark:text-red-400">
                                        @foreach ($errors->all() as $error)
                                            <li class="text-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        @session('status')
                            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                                {{ $value }}
                            </div>
                        @endsession
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="form-label text-gray-900">
                            Name
                        </label>
                        <input class="input" name="name" placeholder="Your name" type="text" value="" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="form-label text-gray-900">
                            Email
                        </label>
                        <input class="input" name="email" placeholder="email@email.com" type="email" value="" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="form-label font-normal text-gray-900">
                            Password
                        </label>
                        <div class="input" data-toggle-password="true">
                            <input name="password" placeholder="Enter Password" type="password" value="">
                            <button class="btn btn-icon" data-toggle-password-trigger="true" type="button">
                                <i class="ki-filled ki-eye text-gray-500 toggle-password-active:hidden">
                                </i>
                                <i class="ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block">
                                </i>
                            </button>
                            </input>
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="form-label font-normal text-gray-900">
                            Confirm Password
                        </label>
                        <div class="input" data-toggle-password="true">
                            <input name="password_confirmation" placeholder="Re-enter Password" type="password"
                                value="" />
                            <button class="btn btn-icon" data-toggle-password-trigger="true" type="button">
                                <i class="ki-filled ki-eye text-gray-500 toggle-password-active:hidden">
                                </i>
                                <i class="ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block">
                                </i>
                            </button>
                        </div>
                    </div>
                    @if (\Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <label class="checkbox-group">
                            <input class="checkbox checkbox-sm" name="terms" type="checkbox" value="1" required />
                            <span class="checkbox-label">
                                I accept
                                <a class="text-2sm link" href="/terms-conditions">
                                    Terms &amp; Conditions
                                </a>
                            </span>
                        </label>
                    @endif
                    <button type="submit" name="submit" class="btn btn-dark flex justify-center grow">
                        Sign up
                    </button>
                    <div class="flex items-center gap-2">
                        <span class="border-t border-gray-200 w-full">
                        </span>
                        <span class="text-2xs text-gray-500 font-medium uppercase">
                            Or
                        </span>
                        <span class="border-t border-gray-200 w-full">
                        </span>
                    </div>
                    <div class="grid grid-cols-2 gap-2.5">
                        <a class="btn btn-light btn-sm justify-center" href="#">
                            <svg width="20" enable-background="new 0 0 24 24" viewBox="0 0 20 20" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>google [#178]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-300.000000, -7399.000000)"
                                            fill="#000000">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M263.821537,7247.00386 L254.211298,7247.00386 C254.211298,7248.0033 254.211298,7250.00218 254.205172,7251.00161 L259.774046,7251.00161 C259.560644,7252.00105 258.804036,7253.40026 257.734984,7254.10487 C257.733963,7254.10387 257.732942,7254.11086 257.7309,7254.10986 C256.309581,7255.04834 254.43389,7255.26122 253.041161,7254.98137 C250.85813,7254.54762 249.130492,7252.96451 248.429023,7250.95364 C248.433107,7250.95064 248.43617,7250.92266 248.439233,7250.92066 C248.000176,7249.67336 248.000176,7248.0033 248.439233,7247.00386 L248.438212,7247.00386 C249.003881,7245.1669 250.783592,7243.49084 252.969687,7243.0321 C254.727956,7242.65931 256.71188,7243.06308 258.170978,7244.42831 C258.36498,7244.23842 260.856372,7241.80579 261.043226,7241.6079 C256.0584,7237.09344 248.076756,7238.68155 245.090149,7244.51127 L245.089128,7244.51127 C245.089128,7244.51127 245.090149,7244.51127 245.084023,7244.52226 L245.084023,7244.52226 C243.606545,7247.38565 243.667809,7250.75975 245.094233,7253.48622 C245.090149,7253.48921 245.087086,7253.49121 245.084023,7253.49421 C246.376687,7256.0028 248.729215,7257.92672 251.563684,7258.6593 C254.574796,7259.44886 258.406843,7258.90916 260.973794,7256.58747 C260.974815,7256.58847 260.975836,7256.58947 260.976857,7256.59047 C263.15172,7254.63157 264.505648,7251.29445 263.821537,7247.00386"
                                                    id="google-[#178]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>

                        </a>
                        <a class="btn btn-light btn-sm justify-center" href="#">
                            <svg width="20" viewBox="-5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>facebook [#176]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-385.000000, -7399.000000)"
                                            fill="#000000">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M335.821282,7259 L335.821282,7250 L338.553693,7250 L339,7246 L335.821282,7246 L335.821282,7244.052 C335.821282,7243.022 335.847593,7242 337.286884,7242 L338.744689,7242 L338.744689,7239.14 C338.744689,7239.097 337.492497,7239 336.225687,7239 C333.580004,7239 331.923407,7240.657 331.923407,7243.7 L331.923407,7246 L329,7246 L329,7250 L331.923407,7250 L331.923407,7259 L335.821282,7259 Z"
                                                    id="facebook-[#176]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                             
                        </a>
                    </div>
                </form>
            </div>
        </div>
    @endsection
</x-guest-layout>
