<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}"> <img alt="image" src="{{ asset('/front/images/about.png') }}"
                    class="header-logo" /> Memorial
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">User {{ auth()->user()->name }}</li>

            <li class="dropdown">
                <a href="{{ route('admin.contact.index') }}" class="menu-toggle nav-link "><i
                        class='bx bx-category'></i><span>Contact</span></a>
            </li>

            <li class="dropdown">
                <a href="{{ route('admin.author.index') }}" class="menu-toggle nav-link "><i
                        class='bx bx-category'></i><span>Author</span></a>
            </li>
        </ul>
    </aside>
</div>
