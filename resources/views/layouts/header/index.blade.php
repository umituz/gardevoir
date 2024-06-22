<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a target="_blank" class="nav-link btn btn-outline-primary mr-3" href="{{ url('/') }}">
                        {{ __('Go Website') }}
                    </a>
                </li>

                @include('trinity::layouts.header.language')

                @include('trinity::layouts.header.auth')
            </ul>
        </div>
    </div>
</nav>

<style>
    /* Bildirimler dropdown menüsü */
    .notifications-dropdown {
        min-width: 250px;
    }

    /* Bildirim içeriği */
    .notification-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* Bildirim başlığı */
    .notification-title {
        font-weight: bold;
    }

    /* Bildirim zamanı */
    .notification-time {
        color: #888;
        font-size: 0.8rem;
    }

    /* Tüm bildirimleri gör bağlantısı */
    .view-all {
        font-weight: bold;
    }

</style>