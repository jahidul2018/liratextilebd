<div class="preloader">
    <div class="spinner">
        <div class="pre-bounce1"></div>
        <div class="pre-bounce2"></div>
    </div>
</div>
    
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

    
    <header id="masthead" class="site-header" role="banner">
        <div class="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        @if ((App\Models\Photo::where('b_type','logo')->orderBy('priority', 'asc')->get()) !=null)
                            @foreach (App\Models\Photo::where('b_type','logo')->orderBy('priority', 'asc')->get() as $logo)
                            <a href="index.html" title="liratextlinebd"><img class="site-logo" src="{{ asset('img/sliders/'.$logo->image) }}" alt="liratextlinebd" /></a>
                            @endforeach
                        @else
                            <a href="index.html" title="liratextlinebd"><img class="site-logo" src="{{ asset('frontend/wp-content/uploads/Logo.png') }}" alt="liratextlinebd" /></a>
                        @endif
                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-12">
                        <div class="btn-menu"><i class="sydney-svg-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" /></svg></i></div>
                            <nav id="mainnav" class="mainnav" role="navigation">
                                <div class="menu-main-menu-container">
                                    <ul id="menu-main-menu" class="menu">
                                        <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-42 current_page_item menu-item-44"><a href="{{ route('home') }}" aria-current="page">Home</a></li>
                                        <li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41"><a href="{{ route('profile') }}">Profile</a></li>
                                        <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="{{ route('product') }}">Products</a></li>
                                        <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"><a href="{{ route('contact') }}">Contacts</a></li>
                                    </ul>
                                </div>						
                            </nav><!-- #site-navigation -->
                        </div>
                    </div>
                </div>
            </div>
    </header><!-- #masthead -->