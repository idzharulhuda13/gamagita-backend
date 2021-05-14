<!-- Header-->
<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('dashboard') }}"><img src="{{asset('images/logo_gamagita.png')}}" width="65px" alt="Logo"></a>
            <a class="navbar-brand hidden" href="{{ route('dashboard') }}"><img src="{{asset('images/logo_gamagita.png')}}" width="65px" alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{asset('images/admin_huda.png')}}" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fa fa-sign-out"></i>{{ __('Logout') }}
                            </x-jet-dropdown-link>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- /#header -->