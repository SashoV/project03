<ul class="nav nav-pills nav-stacked">
    <li role="presentation" class="{{ Request::is('admin') ? 'active' : '' }}"><a href="{{ route('adminHome') }}">Dashboard</a></li>
    <li role="presentation" class="{{ Request::is('admin/categor*') ? 'active' : '' }}"><a href="{{ route('adminCategories') }}">Categories</a></li>
    <li role="presentation" class="{{ Request::is('admin/lecture*') ? 'active' : '' }}"><a href="{{ route('adminLectures') }}">Lectures</a></li>
    <li role="presentation" class="{{ Request::is('admin/banner*') ? 'active' : '' }}"><a href="{{ route('adminBanners') }}">Banners</a></li>
    <li role="presentation" class="{{ Request::is('admin/email*') ? 'active' : '' }}"><a href="{{ route('adminEmails') }}">Mailing List</a></li>
    <li role="presentation"><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a></li>
</ul>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>