@can('list-notification')
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNotifications" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell"></i> <!-- Bildirim simgesi -->
            <!-- Bildirim sayısı veya diğer bildirim göstergesi buraya gelebilir -->
        </a>
        <!-- Dropdown menüsü -->
        <div class="dropdown-menu dropdown-menu-right notifications-dropdown"
             aria-labelledby="navbarDropdownNotifications">
            <div class="dropdown-header">Bildirimler</div>
            <a class="dropdown-item" href="#">
                <div class="notification-content">
                    <div class="notification-title">Bildirim 1</div>
                    <div class="notification-time">2 saat önce</div>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="notification-content">
                    <div class="notification-title">Bildirim 2</div>
                    <div class="notification-time">Dün</div>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="notification-content">
                    <div class="notification-title">Bildirim 3</div>
                    <div class="notification-time">3 gün önce</div>
                </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item view-all" href="#">Tüm bildirimleri gör</a>
        </div>
    </li>
@endcan