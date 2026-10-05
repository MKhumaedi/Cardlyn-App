<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ route('users.index') }}">
                <img data-sizes="auto" data-src="{{ getLogoUrl() }}" title="{{ env('APP_NAME') }}" alt="{{ env('APP_NAME') }}" class="lazyload h-45px logo-fix-size"/>
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Sebelum memulai, silakan verifikasi email Anda dengan mengeklik tautan yang kami kirimkan. Jika Anda tidak menerima email, kami akan mengirim ulang.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Tautan verifikasi telah dikirim ke email Anda.') }}
        </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('messages.resend_verification_email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('messages.common.logout') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>