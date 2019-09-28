@extends('layout.navbar')

@section('content')


<div class="container">

   <div class="hero">
       <div class="heroimg">
            <img src="images/hero image.jpg" alt="Hero Image" >
        </div>
        <div class="heroinfo">
        
            <h1> IT UPDATES </h1>
            <p> Find all IT related updates<br> at one location <br>Your Fingertips</p>
    
        </div>
   </div>

    <section  class="flex-div" id="latest">

        <h1>LATEST</h1>
        <div class="cards">
                <div class="card">
                    <h3 class="card-head"> Heading 1</h3>
                    <p class="card-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat sapiente natus, minus itaque quae dignissimos, dicta, ab mollitia ipsum saepe tempore veritatis similique obcaecati magnam tempora ea iure vitae.</p>
                </div>
                <div class="card">
                    <h3 class="card-head"> Heading 2</h3>
                    <p class="card-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat sapiente natus, minus itaque quae dignissimos, dicta, ab mollitia ipsum saepe tempore veritatis similique obcaecati magnam tempora ea iure vitae.</p>
                </div><div class="card">
                    <h3 class="card-head"> Heading 3</h3>
                    <p class="card-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat sapiente natus, minus itaque quae dignissimos, dicta, ab mollitia ipsum saepe tempore veritatis similique obcaecati magnam tempora ea iure vitae.</p>
                </div><div class="card">
                    <h3 class="card-head"> Heading 4</h3>
                    <p class="card-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat sapiente natus, minus itaque quae dignissimos, dicta, ab mollitia ipsum saepe tempore veritatis similique obcaecati magnam tempora ea iure vitae.</p>
                </div>

        </div>
    
    </section>
    
    
    <section class="flex-div" id="news">
    
        <h1>NEWS</h1>

    </section>

    <section class="flex-div" id="upcoming">

        <h1>UPCOMING</h1>

    </section>
</div>

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
