<header>
    <div class="flex-nav">
        <div class="logo">
            <img src="dummy-logo-1b.png" class="logo-image">
        </div>
        <div class="topnav" id="myTopnav">
            <a href="#home">All Blog</a>
            <a href="#news">Category</a>
            <a href="#about">About</a>
        </div>
        <div class="flex-icon">
            <a class="icon">
                @include('fa.github')
            </a>
            <span>|</span>
            <div class="box">
                <form name="search">
                    <input type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();">
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
