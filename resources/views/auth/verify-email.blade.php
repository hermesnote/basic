<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ ('感謝您的註冊！ 在開始之前，您能否通過單擊我們剛剛通過電子郵件發送給您的鏈接來驗證您的電子郵件地址？ 如果您沒有收到電子郵件，我們很樂意向您發送另一封電子郵件。') }}
        {{-- {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }} --}}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ ('新的驗證鏈接已發送到您在註冊時提供的電子郵件地址。') }}
            {{-- {{ __('A new verification link has been sent to the email address you provided during registration.') }} --}}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ ('重新發送驗證郵件') }}
                    {{-- {{ __('Resend Verification Email') }} --}}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ ('登出') }}
                {{-- {{ __('Log Out') }} --}}
            </button>
        </form>
    </div>
</x-guest-layout>
