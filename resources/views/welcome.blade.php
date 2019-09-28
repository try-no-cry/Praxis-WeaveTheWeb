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

    <section  class="x-div" id="latest">

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
    
    
    <section class="x-div" id="news">
    
        <h1>NEWS</h1>

    </section>

    <section class="x-div" id="upcoming">

        <h1>UPCOMING</h1>

    </section>
</div>

@endsection
