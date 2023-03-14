<nav class="navbar navbar-expand-lg navbar-default">
    <div class="container-fluid px-0">
        <a class="navbar-brand" href="{{ route('index') }}"> <img alt="{{env('APP_NAME')}}" src="{{asset('frontend/logo/menulogo.jpg')}}"></a>
        <!-- Mobile view nav wrap -->
        <ul class="navbar-nav navbar-right-wrap ms-auto d-lg-none d-flex nav-top-wrap">
            @auth
            <li class="dropdown  ms-2">
                <a class="rounded-circle" href="#" role="button" data-bs-toggle="dropdown">
                    <div class="avatar avatar-md avatar-indicators avatar-online">
                        <img alt="avatar" src="{{auth()->user()->userimage()}}" class="rounded-circle">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow">
                    <div class="dropdown-item">
                        <div class="d-flex">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="{{auth()->user()->userimage()}}" class="rounded-circle">
                            </div>
                            <div class="ms-3 lh-1">
                                <h5 class="mb-1">{{ auth()->user()->name }}</h5>
                                <p class="mb-0 text-muted">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled">


                        <li>
                            <a class="dropdown-item" href="{{ route('panel.index') }}">
                                <i class="fe fe-user me-2"></i>@lang('messages.Profile')
                            </a>

                        </li>

                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fe fe-settings me-2"></i>{{ __('messages.Settings') }}
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled">
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                @csrf
                                <button class="btn  btn-outline-light-warning text-black w-100" >
                                    <i class="fe fe-power me-2"></i>@lang('messages.Sign Out')
                                </button>
                            </form>

                        </li>
                    </ul>
                </div>

            </li>
            @endauth

        </ul>
        <!-- Button -->
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar top-bar mt-0"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbar-default">


            @include('frontend.frontendlayout.catmenu')




            <!-- search form-->

            <form method="get" action="{{route('home.search')}}" class="mt-3 mt-lg-0 ms-lg-3 d-flex align-items-center">
				<span class="position-absolute ps-3 search-icon">
					<i class="fe fe-search"></i>
				</span>
                <input type="search" name="search" class="form-control ps-6" placeholder="@lang('messages.Search Courses')">
            </form>

            {{--language menu--}}

                <ul class="navbar-nav navbar-right-wrap ms-auto d-none d-lg-block">







            <!-- user menu-->
            @auth



                    <li class="dropdown ms-2 d-inline-block">
                        <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="{{auth()->user()->userimage()}}" class="rounded-circle">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="dropdown-item">
                                <div class="d-flex">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="{{auth()->user()->userimage()}}" class="rounded-circle">
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h5 class="mb-1">{{ auth()->user()->name }}</h5>
                                        <p class="mb-0 text-muted">{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">

                                <li>
                                    <a class="dropdown-item" href="{{ route('panel.index') }}">
                                        <i class="fe fe-user me-2"></i>@lang('messages.Profile')
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fe fe-settings me-2"></i>{{ __('messages.Settings') }}
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled">
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                        <button class="btn  btn-outline-light-warning text-black w-100" >
                                            <i class="fe fe-power me-2"></i>@lang('messages.Sign Out')
                                        </button>
                                    </form>

                                           </li>
                            </ul>
                        </div>
                    </li>

            @endauth


                </ul>
                @guest


                    <a href="{{route('login')}}" class="btn btn-white shadow-sm me-1">@lang('messages.Sign In')</a>
                    <a href="{{route('register')}}" class="btn btn-primary">@lang('messages.Sign Up')</a>

                @endguest


        </div>
    </div>
</nav>
