<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo" style="place-content: center">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/sabi_logo.png') }}" height="120">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ menuIsActive('home') }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-trophy"></i>
                <div data-i18n="Sales Race">
                    {{ __('Sales Race') }}
                </div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('operational_checklist') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-check"></i>
                <div data-i18n="Sales Race">
                    {{ __('Operational Checklist') }}
                </div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('operational_report') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Sales Race">
                    {{ __('Operational Report') }}
                </div>
            </a>
        </li>


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">
                {{ __('Management pages') }}
            </span>
        </li>

        <li class="menu-item {{ menuIsActive('users.*') }}">
            <a href="{{ route('users.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="User management">
                    {{ __('User management') }}
                </div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('users.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-id-card"></i>
                <div data-i18n="Position">
                    {{ __('Position') }}
                </div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('users.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-building-house"></i>
                <div data-i18n="Department">
                    {{ __('Department') }}
                </div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('users.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map"></i>
                <div data-i18n="Location">
                    {{ __('Location') }}
                </div>
            </a>
        </li>



        <!-- <li class="menu-item">
   <a href="javascript:void(0);" class="menu-link menu-toggle">
    <i class="menu-icon tf-icons bx bx-cube-alt"></i>
    <div data-i18n="Misc">Misc</div>
   </a>
   <ul class="menu-sub">
    <li class="menu-item">
     <a href="javascript:void(0);" class="menu-link">
      <div data-i18n="Error">Error</div>
     </a>
    </li>
   </ul>
  </li> -->

    </ul>
</aside>
