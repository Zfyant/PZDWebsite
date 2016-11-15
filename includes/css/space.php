<style type="text/css">

#solar-sytem, #sun-origin, #sun, #earth-orbit, #earth, #moon, #mars-orbit, #mars {
		z-index: -1;
}
#sun-origin {
    position: fixed;
    top: 50%;
    left: 50%;

    width: 400px;
    height: 400px;
    margin-top: -200px;
    margin-left: -200px;
}
#sun {
		background: url(<?php echo $root; ?>images/sun.png);
    position: fixed;
    /* Positions the top-left corner of the image to be */
    /* in the middle of the box */
    top: 50%;
    left: 50%;
    
    /* Play with these numbers to see what it does */
    height: 400px;
    width: 400px;
    margin-top: -200px; 
    margin-left: -200px;
    
    border: orange 8px solid 50%;
    border-radius: 100px;
}

#earth-orbit {
    position: fixed;
    top: 50%;
    left: 50%;

    width: 500px;
    height: 500px;
    margin-top: -250px;
    margin-left: -250px;

    border-width: 2px;
    border-style: dotted;
    border-color: rgba(255,255,255,0.2);
    border-radius: 50%;
}

#earth {
    background: url(<?php echo $root; ?>images/earth.png);
    position: absolute;
    top: 0;
    left: 50%;

    height: 50px;
    width: 50px;
    margin-left: -25px;
    margin-top: -25px;
    
    border-radius: 100px;
}
#moon-orbit {
    position: absolute;
    top: 50%;
    left: 50%;

    width: 50px;
    height: 50px;
    margin-top: -25px;
    margin-left: -25px;
}
#moon {
    background: #FEFCD7;
    position: absolute;
    left: 0%;

    width: 1px;
    height: 1px;
    margin-top: -16px;
    margin-left: -16px;

    border-width: 3px;
    border-style: dotted;
    border-color: white;
    border-radius: 50%;
}

#mars-orbit {
    position: fixed;
    top: 50%;
    left: 50%;

    width: 700px;
    height: 700px;
    margin-top: -350px;
    margin-left: -350px;

    border-width: 2px;
    border-style: dotted;
    border-color: rgba(255,255,255,0.2);
    border-radius: 50%;
}

#mars {
    background: url(<?php echo $root; ?>images/mars.png);
    position: absolute;
    top: 14%;
    left: 14%;

    height: 70px;
    width: 70px;
    margin-left: -35px;
    margin-top: -35px;
    
    border-radius: 100px;
}

@-webkit-keyframes spin-right {
  100% {
    -webkit-transform: rotate(360deg);
       -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
         -o-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes spin-right {
  100% {
    -webkit-transform: rotate(360deg);
       -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
         -o-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}


#sun-origin {
  -webkit-animation: spin-right 120s linear infinite;
     -moz-animation: spin-right 120s linear infinite;
      -ms-animation: spin-right 120s linear infinite;
       -o-animation: spin-right 120s linear infinite;
          animation: spin-right 120s linear infinite;
}

#earth-orbit {
    -webkit-animation: spin-right 50s linear infinite;
     -moz-animation: spin-right 50s linear infinite;
      -ms-animation: spin-right 50s linear infinite;
       -o-animation: spin-right 50s linear infinite;
          animation: spin-right 50s linear infinite;
}

#moon-orbit {
    -webkit-animation: spin-right 15s linear infinite;
     -moz-animation: spin-right 15s linear infinite;
      -ms-animation: spin-right 15s linear infinite;
       -o-animation: spin-right 15s linear infinite;
          animation: spin-right 15s linear infinite;
}
#mars-orbit {
    -webkit-animation: spin-right 30s linear infinite;
     -moz-animation: spin-right 30s linear infinite;
      -ms-animation: spin-right 30s linear infinite;
       -o-animation: spin-right 30s linear infinite;
          animation: spin-right 30s linear infinite;
}

</style>