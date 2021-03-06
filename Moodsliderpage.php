<!DOCTYPE html>


<html>
<head>
  <title>Recommendations for you</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <link rel="stylesheet" type="text/css" href="Test.css">
  
</head>
<body> 
    
<?php require 'header.php';?>    
    
    <div class=my-5>
    </div>
    
    <div class="slidecontainer">    
            <div class="row">
                <div class="col-2">
                    <h4>Agitated</h4>         
                </div>
                <div class="col-8">
                    <input type="range" min="1" max="100" value="50" class="slider" id="zen" onchange="filter();">
                </div>
                <div class="col-2">
                    <h4>Calm</h4>
                </div>
            </div>
   </div>  
    
    <div class=my-4>
    </div>
    
    <div class="slidecontainer">
            <div class="row">
                <div class="col-2">
                    <h4>Sad</h4>         
                </div>
                <div class="col-8">
                    <input type="range" min="1" max="100" value="50" class="slider" id="happy" onchange="filter();" >
                </div>
                <div class="col-2">
                    <h4>Happy</h4>
                </div>
            </div>
   </div> 
    
    <div class=my-4>
    </div>
    
    <div class="slidecontainer">
            <div class="row">
                <div class="col-2">
                    <h4>Tired</h4>         
                </div>
                <div class="col-8">
                    <input type="range" min="1" max="100" value="50" class="slider" id="awakeness" onchange="filter();">
                </div>
                <div class="col-2">
                    <h4>Wide Awake</h4>
                </div>
            </div>
   </div> 
        
    <div class=my-4>
    </div>
    
    <div class="slidecontainer">
            <div class="row">
                <div class="col-2">
                    <h4>Scared</h4>         
                </div>
                <div class="col-8">
                    <input type="range" min="1" max="100" value="50" class="slider" id="fear"onchange="filter();">
                </div>
                <div class="col-2">
                    <h4>Fearless</h4>
                </div>
            </div>
   </div>
        
</div> 

<div class=my-5>
</div>
           
    <div id="result">
        <div class="container">
            <div class="row justify-content-center">    
                
               
                <?php for ($counter=0;$counter<5;$counter++){?>
                    <div class="col-2">
                          <div class='card'> 
                              <img class="card-img-top" img src="images/noimage.jpg" alt="noimage">
                                    <div class="card-body">
                                            <h4 class="programme title">No content</h4>
                                    </div>
                            </div>
                    </div> 
                <?php } ?> 
            </div>
        </div>  
    </div>
    
<?php require 'footer.php';?> 

    <script>
        function filter() {
            
            var zenvalue  = document.getElementById("zen").value;
            var happyvalue = document.getElementById("happy").value;
            var awakenessvalue = document.getElementById("awakeness").value;
            var fearvalue = document.getElementById("fear").value;
            
            var xhttp;
            //console.log(zenvalue)
            xhttp = new XMLHttpRequest(); //object instantiation
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                   document.getElementById("result").innerHTML = this.responseText;
                };
            };
            xhttp.open("GET", "Readprogrammes.php?zen="+zenvalue+"&happy="+happyvalue+"&awakeness="+awakenessvalue+"&fear="+fearvalue, true);
            xhttp.send();   
        }
    </script> 
     

</body>
</html>

    