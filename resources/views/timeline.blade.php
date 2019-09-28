@extends('layout.navbar')

@section('content')


<style>
* {
  box-sizing: border-box;
}



/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
  flex: 1;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: lightblue;
  top: 0;
  bottom: 0;
  left: 54%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color:#5edfff;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: #5edfff;
  position: relative;
  border-radius: 6px;
  text-align: center;
}

.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8;
  cursor: pointer;
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.myimg {
  flex: 1;
}


/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 100px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }

 
}
</style>

    
        <h1><CENTER>ARTIFICIAL INTELLIGENCE</CENTER></h1>

    <div class="timeline">
  <div class="container left">
    <div class="content">
     <h2 style ="color:#FF9F55">1980–1987</h2 >
      <img src="images/1.jpg" alt="Nature" style= "width:50%">
      <p>In 1982, physicist John Hopfield was able to prove that a form of neural network (now called a "Hopfield net") could learn and process information in a completely new way. Around the same time, Geoffrey Hinton and David Rumelhart popularized a method for training neural networks called "backpropagation"</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
     <h2 style ="color:#FF9F55">1987–1993</h2>
    <img src="images/2.jpg" alt="Nature" style= "width:50%">
     <P>By 1991, the impressive list of goals penned in 1981 for Japan's Fifth Generation Project had not been met. Indeed, some of them, like "carry on a casual conversation" had not been met by 2010.As with other AI projects, expectations had run much higher than what was actually possible.

        Over 300 AI companies had shutdown, gone bankrupt, or been acquired by the end of 1993, effectively ending the first commercial wave of AI.</P>
    </div>
  </div>

  <div class="container left">
    <div class="content">
     <h2 style ="color:#FF9F55">1993–2011</h2>
     <img src="images/3.jpg" alt="Nature" style= "width:50%">
     <p>The field of AI, now more than a half a century old, finally achieved some of its oldest goals. It began to be used successfully throughout the technology industry, although somewhat behind the scenes</p>
  </div>
  </div>



  <div class="container right">
    <div class="content">
     <h2 style ="color:#FF9F55">DEEP LEARNING</h2>
     <img src="images/4.jpg" alt="Nature" style= "width:50%">
      <p>Deep learning is a branch of machine learning that models high level abstractions in data by using a deep graph with many processing layers</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
     <h2 style ="color:#FF9F55">BIG DATA</h2>
     <img src="images/5.jpg" alt="Nature" style= "width:50%">
     <P>Big data refers to a collection of data that cannot be captured, managed, and processed by conventional software tools within a certain time frame.</P>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2 style ="color:#FF9F55">ARTIFICIAL GENERAL INTELLIGENCE</h2>
      <img src="images/6.jpg" alt="Nature" style= "width:50%">
      <P>Artificial intelligence is a branch of computer science that attempts to understand the essence of intelligence and produce a new intelligent machine that responds in a manner similar to human intelligence.</P>
    </div>
  </div>
</div>
</div>

    

    
</div>

@endsection
