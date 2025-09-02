<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{route('admin.dashboard')}}">
                        <i data-feather="home"></i>
                        {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                    <a href="{{route('admin.banners')}}">
                        <i data-feather="users"></i>
                        {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                        <span data-key="t-dashboard">Banners</span>
                    </a>
                    <a href="{{route('admin.contacts')}}">
                        <i data-feather="users"></i>
                        {{-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> --}}
                        <span data-key="t-dashboard">Contacts</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
