<html>
<link
      href="style.css" type="text/css" rel="stylesheet">
<?php
    $dir = 'C:\xampp\htdocs\myCodes\photoPack';
    $a = scandir($dir);
    $awithquote = implode("','",$a);
    $dermpiclist = json_encode($a);
    ?>
<!--<script>
    let dermpiclist = <?php echo $dermpiclist;?> ;
    document.getElementById("printarray").innerHTML = dermpiclist
    </script> For looking at the array, will have to put a div with id printarray back in-->    
<body>
<h1 class="centre">Milan's Medical Student Derm Quiz</h1>
   </body>
    <div id="arraylist"></div>
<br> <br>
<button onclick="displayRandomImage()" class="centre">
    Get a new image
    </button>
<br> <br>
<button onclick="revealAnswer()" class="centre">Click for the answer</button>
<br> <br>
<img id="dermImage" class="centre2"/>
<br> <br>
 <h3 id="nameofpic" style="display:none" class="centre"></h3>
<script>
    function getRandomImage(){
        let images = <?php echo $dermpiclist;?> ;
        let imageDerm = images[Math.floor(Math.random()*images.length)]
        let imageDermTrimmed = imageDerm.slice(0, -8);
        document.getElementById("nameofpic").innerHTML = imageDermTrimmed
        let imageDermInLoc = "photoPack/" + imageDerm
      
        return imageDermInLoc
       
    }
   function revealAnswer(){
       let answer = document.getElementById("nameofpic")
       if (answer.style.display === "none"){
           answer.style.display = "block"
       }
        
   }
    
    function displayRandomImage(){
        let htmlimage = document.getElementById("dermImage")
        htmlimage.src = getRandomImage()
           let answer = document.getElementById("nameofpic")
        if (answer.style.display === "block"){
            answer.style.display = "none"
        }

    }
    
    displayRandomImage()
    
    </script>

   
   <script>
       
       
function myFunction() {
  var x = document.getElementById("myDiv");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<!--
htmlimage.src = getRandomImage()
-->
   
</html>