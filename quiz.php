
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="quiz.js"></script>
<style>
    button {
background-color: Transparent;
background-repeat:no-repeat;
border: none;
cursor:pointer;
overflow: hidden;
outline:none;
}


* {
    box-sizing: border-box;
  }
  
  body {
    margin: 0;
    font-family: Times-new-roman, Helvetica, sans-serif;
  }
  
  
  .row {
    display: -ms-flexbox; /* IE 10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE 10 */
    flex-wrap: wrap;
    padding: 0 4px;
  }
  
  .column {
    -ms-flex: 50%; /* IE 10 */
    flex: 50%;
    padding: 0 4px;
  }
  
  .column img {
    margin-top: 8px;
    vertical-align: middle;
  }
  
  .centered {
    position: absolute;
    top: 170px;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  
  .container {
    position: relative;
    text-align: center;
    color: white;
  }
  
  
  a:link {
    color: white;
    background-color: transparent;
    text-decoration: none;
  }
  
  a:visited {
    color: white;
    background-color: transparent;
    text-decoration: none;
  }

  .iebg {
    position: fixed;
    top: 50%; /* here is where you specify how low you want the image to start */

    width: 50%;
    height: 50%;
}
</style>
<script>

  // Get the elements with class="column"
  var elements = document.getElementsByClassName("column");
  
  // Declare a loop variable
  var i;
  
  // Full-width images
  function one() {
      for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "100%";  // IE10
      elements[i].style.flex = "100%";
    }
  }
  
  // Two images side by side
  function two() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "50%";  // IE10
      elements[i].style.flex = "50%";
    }
  }
  
  // Four images side by side
  function four() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "25%";  // IE10
      elements[i].style.flex = "25%";
    }
  }
  
  // Add active class to the current button (highlight it)
  var header = document.getElementById("myHeader");
  var btns = header.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
  </script>
</head>

<body style="background-color:darkgray;">






<center><img src="gallery/painting1.jpg" style="height:50%;width:auto"  alt="propagande ici svp"></center><br>

<!--ceci compte les points-->
<?php
$incorrect=$_GET['points'];
$correct=$_GET['points']+1;
?>


<!-- Photo Grid -->
<div class="row" > 
  <div class="column">
  <?php echo "<div class='container'><a href='reponse.php?points=$correct'><img src='images/blue.png' style='left: 0%;' class='iebg'><div class='centered'><h1>Business</h1></div></a></div>"; ?>
  </div>

  <div class="column">
  <?php echo "<div class='container'><a href='reponse.php?points=$incorrect'><img src='images/red.png' style='left: 50%;' class='iebg'><div class='centered'><h1>Pas Business</h1></div></a></div></div>"; ?>
  </div>



</body>
</html>
