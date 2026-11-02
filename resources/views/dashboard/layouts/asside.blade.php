<div class="br-logo"><a href=""><span></span>Admin Kotgil<span></span></a></div>
    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Menu</label>
      <div class="br-sideleft-menu">
        <a href="{{ route('dashboard') }}" class="br-menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Beranda</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{ route('dashboard-free-lesson.index') }}" class="br-menu-link {{ request()->routeIs('dashboard-free-lesson.*') ? 'active' : '' }}">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Upload Free Lesson</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{ route('dashboard-transaksi.index') }}" class="br-menu-link {{ request()->routeIs('dashboard-transaksi.*') ? 'active' : '' }}">
          <div class="br-menu-item">
            <i class="menu-item-icon fa fa-database tx-20"></i>
            <span class="menu-item-label">Transaksi</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
      </div><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Setting</label>
        <div class="br-sideleft-menu">
            <a href="#" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-gear tx-22"></i>
                    <span class="menu-item-label">Settings</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="#" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-power tx-22"></i>
                    <span class="menu-item-label">Keluar</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
        </div>
    </div>
