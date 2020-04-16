<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/stye.css">
</head>

<body>
    <div class="header">
        <span class="logo">MINIMø</span>
        <ul class="menu">
            <li class="menu__item">LIFESTYLE</li>
            <li class="menu__item">PHOTODIARY</li>
            <li class="menu__item">MUSIC</li>
            @if(!Auth::user())
            <li class="menu__item"><a href="/login-form" class="menu_item_link">LOGIN</a></li>
            <li class="menu__item"><a href="/login-form" class="menu_item_link">REGISTER</a></li>
            @else
                        <li class="menu__item">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="menu__item">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif

        </ul>
    </div>

    @yield('content')
    
    <div class="image-container">
        <img src="./image/1.png">
    </div>
    <div class="page">
        <div class="record">
            <span class="record__topic">PHOTODIARY</span>
            <span class="record__title">The perfect weekend getaway</span>
            <span class="record__content">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.
                Sed felis eget velit aliquet sagittis id consectetur purus.
                Lacus sed turpis tincidunt id. Sit amet commodo nulla facilisi nullam
                vehicula ipsum a arcu.
                Neque egestas congue quisque egestas diam. Justo eget magna fermentum
                iaculis eu.
                Odio aenean sed adipiscing diam donec adipiscing. Nisl nunc mi ipsum
                faucibus vitae aliquet
                nec ullamcorper. Eget nunc lobortis mattis aliquam faucibus purus in massa.
                In egestas erat imperdiet sed euismod nisi. Velit aliquet sagittis id consectetur
                purus ut
                faucibus pulvinar elementum.
            </span>
            <span class="record__comment">LEAVE A COMMENT</span>
        </div>
        <div class="post-container">
            <div class="post">
                <img src="./image/2.png" alt="Girl">
                <span class="post__topic">LIFESTYLE</span>
                <span class="post__title">More than just a music festifal</span>
                <span class="post__content">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                    Sed felis eget velit aliquet sagittis id consectetur purus.

                </span>

            </div>
            <div class="post">
                <img class="post__image" src="./image/5.png" alt="Girl">
                <span class="post__topic">LIFESTYLE</span>
                <span class="post__title">Life tastes better with coffee</span>
                <span class="post__content">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                    Sed felis eget velit aliquet sagittis id consectetur purus.

                </span>

            </div>
            
            <div class="post">
                <img class="post__image" src="./image/4.png" alt="Girl">
                <span class="post__topic">PHOTODIARY</span>
                <span class="post__title">A day exploring the Alphs</span>
                <span class="post__content">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                    Sed felis eget velit aliquet sagittis id consectetur purus.

                </span>

            </div>
            
            <div class="post">
                <img class="post__image" src="./image/3.png " alt="Girl">
                <span class="post__topic">PHOTODIARY</span>
                <span class="post__title">American dream</span>
                <span class="post__content">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                    Sed felis eget velit aliquet sagittis id consectetur purus.

                </span>

            </div>
    
    <div class="footer-container">
        <div class="footer">
            <span class="footer__title"> Terms and condisions </span>
            <span class="footer__title">Privacy</span>
            <span class="footer__follow">Follow</span>
           
            <span class="icon-facebook footer__icon"></span>
            <span class="icon-twitter footer__icon"></span>
            <span class="icon-instagram footer__icon"></span>
            
        </div>
    </div>
</body>

</html>