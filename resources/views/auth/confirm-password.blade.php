<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ route('users.index') }}">
                <img data-sizes="auto" data-src="{{ getLogoUrl() }}" title="{{ env('APP_NAME') }}" alt="{{ env('APP_NAME') }}" class="lazyload h-45px"/>
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Harap konfirmasi password Anda sebelum melanjutkan.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Konfirmasi') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>