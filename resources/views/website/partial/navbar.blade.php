<header>
    <div class="flex-nav">
        <div class="logo">
            <img src="dummy-logo-1b.png" class="logo-image">
        </div>
        <div class="topnav" id="myTopnav">
            <a href="/" class="{{ $active === 'Blog Home' ? 'active' : '' }}">All Blog</a>
            <a href="#news">Category</a>
            <a href="#about">About</a>
        </div>
        <div class="flex-icon">
            <a class="icon">
                @include('fa.github')
            </a>
            <span>|</span>
            <div class="box" onclick="show()" style="cursor: pointer">
                <form name="search" action="/" method="GET">
                    <input type="text" class="input" name="search"
                        value="{{ Request::is('/?search=*') ? request('search') : '' }}"
                        onmouseout="hide();this.blur();">
                </form>
                <div class="icon-search">
                    @include('fa.search')
                </div>
            </div>
        </div>

        <div class="responsive-icon">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                &#9776;
            </a>
        </div>
    </div>
</header>
