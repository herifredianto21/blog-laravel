 <!-- Header -->
 <header class="header fixed-top">
    <div class="header-main navbar-expand-xl">
        <div class="container-wrap">
            <div class="header-main">
                <!-- logo -->
                <div class="site-branding">
                    <a class="dark-logo" href="/">
                        <img src="{{ blogInfo()->blog_logo }}" style="max-width: 100px;" alt="{{ blogInfo()->blog_name }}">
                    </a>
                    <a class="light-logo" href="/">
                        <img src="{{ blogInfo()->blog_logo }}" style="max-width: 100px;" alt="">
                    </a>
                </div><!--/-->
                
                <div class="main-menu header-navbar">
                    <nav class="navbar">
                    <!--navbar-collapse-->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <!--Homes -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="javascript:void(0)" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                                <ul class="dropdown-menu ">
                                <li><a class="dropdown-item active" href="index-9.html">homepage 9</a></li>
                                </ul>
                            </li>

                            <!--Posts features -->
                            @foreach( \App\Models\Category::whereHas('subcategories', function($q){
                                $q->whereHas('posts');
                            })->orderBy('ordering','asc')->get() as $category )
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="javascript:void(0)" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ $category->category_name }}</a>
                                <ul class="dropdown-menu ">
                                @foreach ( \App\Models\SubCategory::where('parent_category',$category->id)->whereHas('posts')->orderBy('ordering','asc')->get() as $subcategory )
                                    <li><a class="dropdown-item " href="post-default.html">{{ $subcategory->subcategory_name }} </a></li>
                                @endforeach
                                </ul>
                            </li>
                            
                            @endforeach

                            <!--Blogs-->
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false"> blogs </a>
                                <ul class="dropdown-menu ">
                                    <li><a class="dropdown-item " href="blog-grid.html">Blog grid</a></li>
                                    <li><a class="dropdown-item" href="blog-masonry.html">Blog masonry</a></li>
                                    <li><a class="dropdown-item" href="blog-list.html">Blog list</a></li>
                                    <li><a class="dropdown-item" href="blog-classic.html">Blog classic</a></li>
                                </ul>
                            </li>
                    
                            <!--Pages-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false"> pages </a>
                                <ul class="dropdown-menu ">
                                <li><a class="dropdown-item" href="author.html">author </a></li>
                                <li><a class="dropdown-item" href="about.html">about us </a> </li>
                                <li><a class="dropdown-item" href="contact.html">contact us</a></li>
                                <li><a class="dropdown-item" href="login.html">login</a></li>
                                <li><a class="dropdown-item" href="signup.html">Sign up</a></li>
                                <li><a class="dropdown-item" href="page404.html">404 page</a></li>
                                </ul>
                            </li>

                            @foreach ( \App\Models\SubCategory::where('parent_category',0)->whereHas('posts')->get() as $subcategory )
                            <!--contact -->
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html"> {{ $subcategory->subcategory_name }} </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--/-->
                    </nav>
                </div>

                <!-- header actions -->
                <div class="header-action-items">
                    <!--header-social--> 
                    <ul class="header-social list-inline">
                        <li><a href="#" ><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#" ><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" ><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" ><i class="fab fa-youtube"></i></a></li>
                    </ul>
                                
                    <!--theme-switch-->
                    <div class="theme-switch-wrapper switch-icon">
                        <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox">
                        <span class="slider round ">
                            <i class="lar la-sun icon-light"></i>
                            <i class="lar la-moon icon-dark"></i>
                        </span>
                        </label>
                    </div>

                    <!--search-icon-->
                    <div class="search-icon"> <a href="#search">  <i class="fas fa-search"></i></a></div>

                    <!--navbar-toggler-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>  
            </div>
        </div> 
    </div>
</header><!--/-->

{{ blogInfo() }}