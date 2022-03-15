<ul class="navbar-nav ml-auto">
    <li class="nav-item my-auto {{Route::currentRouteName() == 'home' ? 'active' : ''}}"><a href="{{ route('home') }}" class="nav-link">{{__('string.Home')}}</a></li>
    <li class="nav-item my-auto {{Route::currentRouteName() == 'about-us' ? 'active' : ''}}"><a href="{{ route('about-us') }}" class="nav-link">{{__('string.About')}}</a></li>
    <li class="nav-item my-auto {{Route::currentRouteName() == 'events.index' ? 'active' : ''}}"><a href="{{ route('events.index') }}" class="nav-link">{{__('string.Cultural Activities')}}</a></li>
    <li class="nav-item my-auto {{Route::currentRouteName() == 'news.index' ? 'active' : ''}}"><a href="{{ route('news.index') }}" class="nav-link">{{__('string.News')}}</a></li>
    <li class="nav-item my-auto {{Route::currentRouteName() == 'facility.index' ? 'active' : ''}}"><a href="{{ route('facility.index') }}" class="nav-link">{{__('string.Facility')}}</a></li>
    <li class="nav-item my-auto {{Route::currentRouteName() == 'products.index' ? 'active' : ''}}"><a href="{{ route('products.index') }}" class="nav-link">{{__('string.Products')}}</a></li>
    <li class="nav-item my-auto {{Route::currentRouteName() == 'gallery' ? 'active' : ''}}"><a href="{{ route('gallery') }}" class="nav-link">{{__('string.Gallery')}}</a></li>
    <li class="nav-item my-auto {{Route::currentRouteName() == 'contact-us' ? 'active' : ''}}"><a href="{{ route('contact-us') }}" class="nav-link">{{__('string.Contact')}}</a></li>
    <li class="nav-item my-auto mt-3">
        <a href="{{ LaravelLocalization::getLocalizedURL('id') }}">
            <span class="flag-icon flag-icon-id"></span>
        </a>
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">
            <span class="flag-icon flag-icon-us"></span>
        </a>
    </li>
    
</ul>
