@if (session('status') == 'verification-link-sent')
    <div class="alert alert-success mt-3" role="alert">
        {{ __('A new verification link has been sent to your email address.') }}
    </div>
@endif

@if (Auth::user() && !Auth::user()->hasVerifiedEmail())
    <div class="alert alert-warning mt-3" role="alert">
        {{ __('Please verify your email address.') }}
        <form method="POST" action="{{ route('verification.send') }}" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                {{ __('Resend verification email') }}
            </button>.
        </form>
    </div>
@endif
