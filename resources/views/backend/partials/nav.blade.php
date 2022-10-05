<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="/"><img src="{{ asset('assets/frontend/img/logo/newlogo.jpg') }}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a href="{{ route('dashboard') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="img/menu-icon/5.svg" alt="">
                </div>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('regions.index') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="img/menu-icon/5.svg" alt="">
                </div>
                <span>Regions</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('clients.index') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="img/menu-icon/5.svg" alt="">
                </div>
                <span>Clients</span>
            </a>
        </li>
    </ul>
</nav>
