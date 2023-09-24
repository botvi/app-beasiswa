<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" data-toggle="minimize" type="button">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
            </li>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="profileDropdown">
                        @php
                            $inAuth = \App\Models\User::whereId(auth()->user()->id)->first();
                            
                        @endphp
                        <img alt="profile" src="{{ asset($inAuth->image ?? '') }}" />
                    </a>
                    <a href="/profil">
                        {{ $inAuth->username ?? '' }}
                    </a>
                </li>
            </ul>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" data-toggle="offcanvas"
            type="button">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>
