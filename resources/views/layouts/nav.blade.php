<ul class="navbar-nav ml-auto">
    <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">{{__('string.Home')}}</a></li>
    <li class="nav-item"><a href="{{ url('about-us') }}" class="nav-link">{{__('string.About')}}</a></li>
    <li class="nav-item"><a href="{{ url('events') }}" class="nav-link">{{__('string.Cultural Activities')}}</a></li>
    <li class="nav-item"><a href="{{ url('news') }}" class="nav-link">{{__('string.News')}}</a></li>
    <li class="nav-item"><a href="{{ url('facility') }}" class="nav-link">{{__('string.Facility')}}</a></li>
    <li class="nav-item"><a href="{{ url('products') }}" class="nav-link">{{__('string.Products')}}</a></li>
    <li class="nav-item"><a href="{{ url('contact-us') }}" class="nav-link">{{__('string.Contact')}}</a></li>
    <li class="nav-item mt-3">
        <a href="{{ LaravelLocalization::getLocalizedURL('id') }}">
            <span class="flag-icon flag-icon-id"></span>
        </a>
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">
            <span class="flag-icon flag-icon-us"></span>
        </a>
    </li>
    
</ul>
