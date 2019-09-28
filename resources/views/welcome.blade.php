@extends('layout.navbar')

@section('content')


<div class="container">

   <div class="hero">
       <div class="heroimg">
            <img src="images/hero image.jpg" alt="Hero Image" >
        </div>
        <div class="heroinfo">
        
            <h1> IT UPDATES </h1>
            <p> Find all IT related updates<br> at one location  <h3 >Your Fingertips</h3></p>
            <button> Have A Look! </button>
    
        </div>
   </div>

    <section  class="x-div" id="latest">

        <h1>LATEST</h1>

        <div class="cards">
                <div class="card">
                    <img src="images/alzheimer.jpg" alt="hero" class="card-img">
                    <h3 class="card-head"> Machine learning for comprehensive forecasting of Alzheimer’s Disease progression</h3>
                    <p class="card-desc"> Most approaches to machine learning from electronic health data can only predict a single endpoint. The ability to simultaneously simulate dozens of patient characteristics is a crucial step towards personalized medicine for Alzheimer’s Disease. Here, we use an unsupervised machine learning model called a Conditional Restricted Boltzmann Machine (CRBM) to simulate detailed patient trajectories.</p>
                </div>
                <div class="card">
                    <img src="images/brainimage.jpg" alt="hero" class="card-img">
                    <h3 class="card-head">Detecting patients’ pain levels via their brain signals</h3>
                    <p class="card-desc">Researchers from MIT and elsewhere have developed a system that measures a patient’s pain level by analyzing brain activity from a portable neuroimaging device. The system could help doctors diagnose and treat pain in unconscious and noncommunicative patients, which could reduce the risk of chronic pain that can occur after surgery.</p>
                </div><div class="card">
                      <img src="images/hero image.jpg" alt="hero" class="card-img">
                    <h3 class="card-head"> Heading 3</h3>
                    <p class="card-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat sapiente natus, minus itaque quae dignissimos, dicta, ab mollitia ipsum saepe tempore veritatis similique obcaecati magnam tempora ea iure vitae.</p>
                </div><div class="card">
                       <img src="images/hero image.jpg" alt="hero" class="card-img">
                    <h3 class="card-head"> Heading 4</h3>
                    <p class="card-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat sapiente natus, minus itaque quae dignissimos, dicta, ab mollitia ipsum saepe tempore veritatis similique obcaecati magnam tempora ea iure vitae.</p>
                </div>

        </div>
    
    </section>
    
    
    <section class="x-div" id="news">
    
        <h1>NEWS</h1>

        <div class="cards">
                <div class="card">
                    <img src="images/hero image.jpg" alt="hero" class="card-img">
                    <h3 class="card-head"> Heading 1</h3>
                    <p class="card-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat sapiente natus, minus itaque quae dignissimos, dicta, ab mollitia ipsum saepe tempore veritatis similique obcaecati magnam tempora ea iure vitae.</p>
                </div>
                <div class="card">
                    <img src="images/hero image.jpg" alt="hero" class="card-img">
                    <h3 class="card-head"> Heading 2</h3>
                    <p class="card-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat sapiente natus, minus itaque quae dignissimos, dicta, ab mollitia ipsum saepe tempore veritatis similique obcaecati magnam tempora ea iure vitae.</p>
                </div><div class="card">
                      <img src="images/hero image.jpg" alt="hero" class="card-img">
                    <h3 class="card-head"> Heading 3</h3>
                    <p class="card-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat sapiente natus, minus itaque quae dignissimos, dicta, ab mollitia ipsum saepe tempore veritatis similique obcaecati magnam tempora ea iure vitae.</p>
                </div><div class="card">
                       <img src="images/hero image.jpg" alt="hero" class="card-img">
                    <h3 class="card-head"> Heading 4</h3>
                    <p class="card-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat sapiente natus, minus itaque quae dignissimos, dicta, ab mollitia ipsum saepe tempore veritatis similique obcaecati magnam tempora ea iure vitae.</p>
                </div>

        </div>

    </section>

    <section class="x-div" id="upcoming">

        <h1>UPCOMING</h1>

        <div class="cards">
                <div class="card">
                    <img src="images/hero image.jpg" alt="hero" class="card-img">
                    <h3 class="card-head"> Heading 1</h3>
                    <p class="card-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat sapiente natus, minus itaque quae dignissimos, dicta, ab mollitia ipsum saepe tempore veritatis similique obcaecati magnam tempora ea iure vitae.</p>
                </div>
                <div class="card">
                    <img src="images/hero image.jpg" alt="hero" class="card-img">
                    <h3 class="card-head"> Heading 2</h3>
                    <p class="card-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat sapiente natus, minus itaque quae dignissimos, dicta, ab mollitia ipsum saepe tempore veritatis similique obcaecati magnam tempora ea iure vitae.</p>
                </div><div class="card">
                      <img src="images/hero image.jpg" alt="hero" class="card-img">
                    <h3 class="card-head"> Heading 3</h3>
                    <p class="card-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat sapiente natus, minus itaque quae dignissimos, dicta, ab mollitia ipsum saepe tempore veritatis similique obcaecati magnam tempora ea iure vitae.</p>
                </div><div class="card">
                       <img src="images/hero image.jpg" alt="hero" class="card-img">
                    <h3 class="card-head"> Heading 4</h3>
                    <p class="card-desc"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam placeat sapiente natus, minus itaque quae dignissimos, dicta, ab mollitia ipsum saepe tempore veritatis similique obcaecati magnam tempora ea iure vitae.</p>
                </div>

        </div>
        
    </section>
</div>

@endsection
