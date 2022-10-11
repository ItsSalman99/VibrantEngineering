<header id="header" class="header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 85}">
    <div class="header-body border-top-0">
        <div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-between">
                        <div class="header-row">
                            <nav class="header-nav-top w-100 w-md-50pct w-xl-100pct">
                                <ul class="nav nav-pills d-inline-flex custom-header-top-nav-background pe-5">
                                    <li class="nav-item py-2 d-inline-flex z-index-1">
                                        <span class="d-flex align-items-center p-0">
                                            <span>
                                                <img width="25"
                                                    src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/phone.svg') }}"
                                                    alt="Phone Icon" data-icon
                                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                            </span>
                                            <a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2"
                                                href="tel:1234567890" data-cursor-effect-hover="plus"
                                                data-cursor-effect-hover-color="light">(800) 123-4567</a>
                                        </span>
                                        <span class="font-weight-normal align-items-center px-0 d-none d-xl-flex ms-3">
                                            <span>
                                                <img width="25"
                                                    src="img/demos/business-consulting-3/icons/email.svg"
                                                    alt="Email Icon" data-icon
                                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                            </span>
                                            <a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2"
                                                data-cursor-effect-hover="plus"
                                                data-cursor-effect-hover-color="light"><span class=""
                                                    data-cfemail="">vibrantengineering@gmail.com</span></a>
                                        </span>
                                    </li>
                                </ul>
                            </nav>
                            <div class="d-flex align-items-center w-100">
                                <ul class="ps-0 ms-auto mb-0">
                                    <li
                                        class="nav-item font-weight-semibold text-1 text-lg-2 text-color-dark d-none d-md-flex justify-content-end me-3">
                                        Mon - Sat 9:00am - 6:00pm / Sunday - CLOSED
                                    </li>
                                </ul>
                                <ul
                                    class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ms-lg-2">
                                    <li class="social-icons-instagram">
                                        <a href="http://www.instagram.com/" target="_blank" class="text-4"
                                            title="Instagram" data-cursor-effect-hover="fit"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="social-icons-twitter">
                                        <a href="http://www.twitter.com/" target="_blank" class="text-4" title="Twitter"
                                            data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="social-icons-facebook">
                                        <a href="http://www.facebook.com/" target="_blank" class="text-4"
                                            title="Facebook" data-cursor-effect-hover="fit"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container" style="height: 117px;">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="Vibrant Engineering" width="100"
                                    src="{{ asset('assets/frontend/img/viblogo.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end w-100">
                    <div class="header-row">
                        <div class="header-nav header-nav-links order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link active" href="/">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('about') }}">
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('machines') }}">
                                                Machines
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{ route('services.index') }}">
                                                Services
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ route('services.sealing') }}"
                                                        class="dropdown-item">
                                                        Sealing Machines
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="demo-business-consulting-3-services-detail.html"
                                                        class="dropdown-item">
                                                        Packaging Machines
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="demo-business-consulting-3-services-detail.html"
                                                        class="dropdown-item">
                                                        Filling Machines
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="demo-business-consulting-3-services-detail.html"
                                                        class="dropdown-item">
                                                        Badge Printers
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-business-consulting-3-blog.html">
                                                Spare Parts
                                            </a>
                                        </li>
                                        <li class="d-lg-none">
                                            <a class="nav-link" href="{{ route('contact') }}">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="header-column header-column-search justify-content-end align-items-center d-flex w-auto flex-row">
                    <a href="{{ route('contact') }}"
                        class="btn btn-dark custom-btn-style-1 font-weight-semibold text-3-5 btn-px-3 py-2 ws-nowrap ms-4 d-none d-lg-block"
                        data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Contact
                            Us</span></a>
                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                        data-bs-target=".header-nav-main nav">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
