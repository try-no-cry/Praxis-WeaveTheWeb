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
  min-height: 20rem;

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

    
        <h1><CENTER>MACHINE LEARNING</CENTER></h1>

    <div class="timeline">
  <div class="container left">
    <div class="content">
     <h2 style ="color:#FF9F55">1950</h2 >
      <img src="images/1.jpg" alt="Nature" style= "width:50%">
      <p>Alan Turing proposes a 'learning machine' that could learn and become artificially intelligent. Turing's specific proposal foreshadows genetic algorithms</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
     <h2 style ="color:#FF9F55">1969</h2>
    <img src="images/2.jpg" alt="Nature" style= "width:50%">
     <P>BMarvin Minsky and Seymour Papert publish their book Perceptrons, describing some of the limitations of perceptrons and neural networks. The interpretation that the book shows that neural networks are fundamentally limited is seen as a hindrance for research into neural networks</P>
    </div>
  </div>

  <div class="container left">
    <div class="content">
     <h2 style ="color:#FF9F55">1989</h2>
     <img src="images/3.jpg" alt="Nature" style= "width:50%">
    <p>Christopher Watkins develops Q-learning, which greatly improves the practicality and feasibility of reinforcement learning</p>
    </div>
  </div>



  <div class="container right">
    <div class="content">
     <h2 style ="color:#FF9F55">2002</h2>
     <img src="images/4.jpg" alt="Nature" style= "width:50%">
      <p>Torch, a software library for machine learning, is first released</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
     <h2 style ="color:#FF9F55">2012</h2>
     <img src="images/2.jpg" alt="Nature" style= "width:50%">
     <P>The Google Brain team, led by Andrew Ng and Jeff Dean, create a neural network that learns to recognize cats by watching unlabeled images taken from frames of YouTube videos.</P>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2 style ="color:#FF9F55">2016</h2>
      <img src="images/1.jpg" alt="Nature" style= "width:50%">
      <P>Google's AlphaGo program becomes the first Computer Go program to beat an unhandicapped professional human player[50] using a combination of machine learning and tree search techniques.[51] Later improved as AlphaGo Zero and then in 2017 generalized to Chess and more two-player games with AlphaZero.</P>
    </div>
  </div>
</div>
</div>

    

    
</div>

@endsection
