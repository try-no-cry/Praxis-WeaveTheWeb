@extends('layout.navbar')

@section('content')


<div class="container">

   <div class="hero" >
       <div class="heroimg">
            <img src="images/hero image.jpg" alt="Hero Image" >
        </div>
        <div class="heroinfo">
        
            <h1> IT UPDATES </h1>
            <p> Find all IT related updates<br> at one location  <h3 >Your Fingertips</h3></p>
          
    
        </div>
   </div>

    <section  class="x-div" id="latest">

        <h1>LATEST</h1>

        <div class="cards">
                <div class="card">
                    <img src="images/alzheimer.jpg" alt="hero" class="card-img">
                    <br>
                    <h3 class="card-head"> Machine learning for comprehensive forecasting of Alzheimer’s Disease progression</h3>
                <br>
                    <p class="card-desc"> Most approaches to machine learning from electronic health data can only predict a single endpoint. The ability to simultaneously simulate dozens of patient characteristics is a crucial step towards personalized medicine for Alzheimer’s Disease. Here, we use an unsupervised machine learning model called a Conditional Restricted Boltzmann Machine (CRBM) to simulate detailed patient trajectories.</p>
                </div>
                <div class="card">
                    <img src="images/brainimage.jpg" alt="hero" class="card-img">
                    <h3 class="card-head">Detecting patients’ pain levels via their brain signals</h3>
                    <p class="card-desc">Researchers from MIT and elsewhere have developed a system that measures a patient’s pain level by analyzing brain activity from a portable neuroimaging device. The system could help doctors diagnose and treat pain in unconscious and noncommunicative patients, which could reduce the risk of chronic pain that can occur after surgery.</p>
                </div><div class="card">
                    <img src="https://www.effra.eu/sites/default/files/fotolia_cybersecurity_xl.jpg" alt="hero" class="card-img" >
                    <h3 class="card-head"> Cyber Security</h3>
                    <p class="card-desc"> 
                            Cyber security is important because government, military, corporate, financial, and medical organizations collect, process, and store unprecedented amounts of data on computers and other devices. A significant portion of that data can be sensitive information, whether that be intellectual property, financial data, personal information, or other types of data for which unauthorized access or exposure could have negative consequences.    </div><div class="card">
                       <img src="https://www.houseofbots.com/images/news/3327/cover.png" alt="hero" class="card-img">

                    <h3 class="card-head"> RPA (Robotic Process Automation)</h3>
                    <p class="card-desc"> 
                            Generally, any desk job in any industry involves tasks that are repetitive in nature and can be automated.
                            RPA or Robotic Process Automation allows you to automate such routine and repetitive tasks. 
                            You don’t need to write any code to automate repetitive tasks.
                            In 2019, the trend of bots and machine learning is only going to skyrocket, which means RPA will become an invaluable skill to have.                </div>

        </div>
    
    </section>
    
    
    <section class="x-div" id="news">
    
        <h1>NEWS</h1>

        <div class="cards">
            <a href="https://www.theverge.com/2019/9/27/20885882/how-to-chromebook-save-retrieve-files-chromeos" target="_blank"></a>
                <div class="card">
                    <img src="https://cdn.vox-cdn.com/thumbor/dWmQGDFkvyMyHJ0PFY37e8buRuE=/0x0:2040x1360/920x613/filters:focal(857x517:1183x843):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/65339047/using1_2040.0.0.jpg" alt="hero" class="card-img">
                    <h3 class="card-head">Chrome OS 101: How to save and retrieve files</h3>
                    <p class="card-desc">
                            About three years ago, I was shopping for a Chromebook to take on a business trip — I wanted something lightweight enough to carry around all day and inexpensive enough that I wouldn’t mind as much when I spilled coffee on the keyboard. I was considering two different models when a sales rep came over to see if I needed help. “You’re aware,” he said, “that these are Chromebooks, right? They only work online; you can’t save any files to the hard drive.”                
                        </div>

                    

               <a href="https://interestingengineering.com/15-inventions-that-will-make-your-2019-a-lot-more-interesting"  target="_blank"> </a>
         
               <div class="card">
                    <img src="https://inteng-storage.s3.amazonaws.com/images/JANUARY/sizes/Inventions_blow_your_mind_IE_resize_md.jpg" alt="hero" class="card-img">
                    <h3 class="card-head"> Xbox Adaptive Controller</h3>
                    <p class="card-desc"> 
                            The Xbox adaptive controller is here to make the gaming world more inclusive. The Microsoft developed  Xbox Adaptive Controller is here to help those with limited hand and arm mobility play games.                
                        </div>
              

        </div>

    </section>

    <section class="x-div" id="upcoming">

        <h1>UPCOMING</h1>

        <div class="cards">
            
    @foreach( $article as $a)
                <div class="card">
                <img src="{{ $a->imagePath }}" alt="hero" class="card-img">

                <h3 class="card-head">{{ $a->title }}</h3>
                    <p class="card-desc"> 
                    {{ $a->body }} </p>
                            <a href="https://interestingengineering.com/15-inventions-that-will-make-your-2019-a-lot-more-interesting" >Learn More
                            </a>
                </div>
     @endforeach           
        </div>    

{{--                     
                <div class="card">
                    <img src="https://inteng-storage.s3.amazonaws.com/images/JANUARY/sizes/Inventions_blow_your_mind_IE_6_resize_md.jpg" alt="hero" class="card-img">
                    <h3 class="card-head"> The Mirror</h3>
                    <p class="card-desc">   
                            The Mirror is one of the sleekest looking inventions on this list. Perfect for those with fitness goals in 2019, the interactive mirror helps take your home fitness regime to the next level.

                            The device streams live workouts and even offers an interactive fitness coach.                    </p>
                            <a href="https://interestingengineering.com/15-inventions-that-will-make-your-2019-a-lot-more-interesting" >Learn More
                            </a>

                </div><div class="card">
                      <img src="https://timedotcom.files.wordpress.com/2018/11/keen-best-inventions-2018-13.jpg?w=720&quality=85" alt="hero" class="card-img">
                    <h3 class="card-head"> HabitAware</h3>
                    <p class="card-desc"> 
                            A common New Year’s resolution centers around the idea of kicking some sort of bad habit. HabitAware is here to make your life a little easier.
                            As a friendly reminder, the fashionable Keen band vibrates anytime it catches you doing the bad habit you are trying to shake.                 
                           </p>
                           <a href="https://interestingengineering.com/15-inventions-that-will-make-your-2019-a-lot-more-interesting" >Learn More
                           </a>

                </div><div class="card">
                       <img src="https://inteng-storage.s3.amazonaws.com/images/JANUARY/sizes/Inventions_blow_your_mind_IE_12_resize_md.jpg" alt="hero" class="card-img">
                    <h3 class="card-head"> Solar Charged Jacket</h3>
                    <p class="card-desc">
                            If you are a night runner, then this one's for you. Created by U.K.-based sports-gear startup,  Vollebak, the Solar Charged Jacket phosphorescent membrane absorbs light during the day and release its “kryptonite green energy” for those who need to be safe after dark.                        </p>
                            <a href="https://interestingengineering.com/15-inventions-that-will-make-your-2019-a-lot-more-interesting" >Learn More
                            </a>
                </div> --}}

        </div>

    </section>
</div>

@endsection
