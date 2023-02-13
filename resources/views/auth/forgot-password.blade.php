<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('忘記密碼了嗎？沒關係，輸入您註冊時的電子郵件信箱，我們會傳送重設密碼的連結，您可以點擊連結重新設定密碼。') }}
        {{-- {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }} --}}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('電子郵件')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('發送重設密碼信件') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
