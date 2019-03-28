<div class="page-sidebar">
    <a class="logo-box" href="{{ route('admin.dashboard') }}">
                    <span>Admin</span>
                    <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
                    <i class="icon-close" id="sidebar-toggle-button-close"></i>
                </a>
    <div class="page-sidebar-inner">
        <div class="page-sidebar-menu">
            <ul class="accordion-menu">
                <li class="{{ (Route::currentRouteName() == 'admin.dashboard') ? 'active-page' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="menu-icon fa fa-home text-small"></i><span>Dashboard</span>
                    </a>
                </li>
                {{-- <li class="{{ (Route::currentRouteName() == 'feedback.index') ? 'active-page' : '' }}">
                    <a href="{{ route('feedback.index') }}">
                        <i class="menu-icon fa fa-envelope-open text-small"></i><span>Feedback</span>
                    </a>
                </li> --}}
                <li class="menu-divider"></li>
                {{-- <li class="{{ (Request::is('admin/resources/*')) ? 'active-page' : '' }}"">
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-newspaper text-small"></i><span>Resources</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        @foreach ($categories as $category)
                            <li><a class="{{ ($category->id == Request::segment(3)) ? 'active' : '' }}" href="{{ route('posts.index', $category->id) }}">{{ $category->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="{{ (Request::is('admin/categories/*') || Request::is('admin/categories')) ? 'active-page' : '' }}">
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-bars text-small"></i><span>Categories</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a class="{{ (Route::currentRouteName() == 'categories.index') ? 'active' : '' }}" href="{{ route('categories.index') }}">View Categories</a></li>
                        <li><a class="{{ (Route::currentRouteName() == 'categories.create' || Route::currentRouteName() == 'categories.edit') ? 'active' : '' }}" href="{{ route('categories.create') }}">Create Category</a></li>
                    </ul>
                </li>
                <li class="{{ (Request::is('admin/articles/*') || Request::is('admin/articles')) ? 'active-page' : '' }}">
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-newspaper text-small"></i><span>Articles</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a class="{{ (Route::currentRouteName() == 'articles.index') ? 'active' : '' }}" href="{{ route('articles.index') }}">View Articles</a></li>
                        <li><a class="{{ (Route::currentRouteName() == 'articles.create' || Route::currentRouteName() == 'articles.edit') ? 'active' : '' }}" href="{{ route('articles.create') }}">Create Article</a></li>
                    </ul>
                </li>
                <li class="{{ (Request::is('admin/podcasts/*') || Request::is('admin/podcasts')) ? 'active-page' : '' }}">
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-podcast text-small"></i><span>Podcast</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a class="{{ (Route::currentRouteName() == 'podcasts.index') ? 'active' : '' }}" href="{{ route('podcasts.index') }}">View Podcasts</a></li>
                        <li><a class="{{ (Route::currentRouteName() == 'podcasts.create' || Route::currentRouteName() == 'podcasts.edit') ? 'active' : '' }}" href="{{ route('podcasts.create') }}">Create Podcast</a></li>
                    </ul>
                </li> --}}

                <li class="menu-divider"></li>

                {{-- <li class="{{ (Request::is('admin/events/*') || Request::is('admin/events')) ? 'active-page' : '' }}">
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-calendar-alt text-small"></i><span>Events</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a class="{{ (Route::currentRouteName() == 'events.index' || Route::currentRouteName() == 'events.show') ? 'active' : '' }}" href="{{ route('events.index') }}">View Events</a></li>
                        <li><a class="{{ (Route::currentRouteName() == 'events.create' || Route::currentRouteName() == 'events.edit') ? 'active' : '' }}"" href="{{ route('events.create') }}">Create Event</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="{{ (Request::is('admin/testimonies/*') || Request::is('admin/testimonies')) ? 'active-page' : '' }}">
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-comment text-small"></i><span>Testimonies</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a class="{{ (Route::currentRouteName() == 'testimonies.index') ? 'active' : '' }}" href="{{ route('testimonies.index') }}" href="{{ route('testimonies.index') }}">View Testimonies</a></li>
                        <li><a class="{{ (Route::currentRouteName() == 'testimonies.create' || Route::currentRouteName() == 'testimonies.edit') ? 'active' : '' }}"" href="{{ route('testimonies.create') }}">Add Testimony</a></li>
                    </ul>
                </li> --}}
                
                <li class="menu-divider"></li>
            </ul>
        </div>
    </div>
</div>