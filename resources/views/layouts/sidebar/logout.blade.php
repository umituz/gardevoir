<div class="list-group mt-auto">
    <form id="logoutForm" action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="list-group-item list-group-item-action">
            <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Logout') }}
        </button>
    </form>
</div>