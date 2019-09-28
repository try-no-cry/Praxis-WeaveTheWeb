<!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IT UPDATES</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navdesign.css">
    <link rel="stylesheet" href="css/footerdesign.css">



    <link href="http://allfont.net/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css" />

</head>
<body>
<nav class="homepagenav">

<div class="logo">
 <a href="">Inventions</a>
</div>
    <div class="navmenu">
        <div class="navcontent1">
            <a class="hlink" href="#home">Home</a>
        </div>
        <div class="navcontent2">
            <a class="hlink" href="#news">News</a>
        </div>
                <div class="dropdown">
                        <button class="dropbtn">Fields
                        <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="{{route('timeline')}}">Machine Learning</a>
                            <a href="{{route('timeline')}}">Artificial Intelligence</a>
                            <a href="{{route('timeline')}}">Big Data</a>
                        </div>
                </div>
        
    </div>
</nav>

@yield('content')

<footer>
    <div class="footcontent1">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    </div>
    <div class="footcontent2">
        <h4 class="connectheader">Connect</h4>
        <ul class="footerul">
            <li class="footerlist"><a href="#">Link1</a></li>
            <li class="footerlist"><a href="#">Link2</a></li>
            <li class="footerlist"><a href="#">Link3</a></li>
        </ul>


    </div>
    
</footer>
</body>
</html>

