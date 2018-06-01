<!DOCTYPE html>

<html>
<head>
  <title>Recommendations for you</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <link rel="stylesheet" type="Test/css" href="Test.css">
  
      <?php
        //include "readprogrammes.php";
        ?>
  
<body>  
  
    <div class="container">
         <div class="row">
             
              <div class="col-4">
                    <img src="images/skylogo.jpeg" class="img" alt="Sky Logo">
              </div>
             
            <div class="col-8">
                 <div class="m-5 pb-5">
                    
                        <h1>Programme recommendations for you</h1>
                             <a href=Programmeupload.php><h3>Upload Programme information</h3></a>
                 </div>
            </div> 

        </div>
    </div>
    
    
    <div class ="jumboton">
        <div class="slidecontainer">
            <div class="row">
                <div class="col">
                    <h4>Agitated</h4>         
                </div>
                <div class="col">
                <input type="range" min="1" max="100" value="50" class="slider" id="zen" onchange="filter();">
                </div>
                <div class="col">
                    <h4>Calm</h4>
                </div>
            </div>
   </div>  
    
    <div class="slidecontainer">
            <div class="row">
                <div class="col">
                    <h4>Sad</h4>         
                </div>
                <div class="col">
                <input type="range" min="1" max="100" value="50" class="slider" id="happy" onchange="filter();" >
                </div>
                <div class="col">
                    <h4>Happy</h4>
                </div>
            </div>
   </div> 
    
    <div class="slidecontainer">
            <div class="row">
                <div class="col">
                    <h4>Tired</h4>         
                </div>
                <div class="col">
                <input type="range" min="1" max="100" value="50" class="slider" id="awakeness" onchange="filter();">
                </div>
                <div class="col">
                    <h4>Wide Awake</h4>
                </div>
            </div>
   </div> 
        
    <div class="slidecontainer">
            <div class="row">
                <div class="col">
                    <h4>Scared</h4>         
                </div>
                <div class="col">
                <input type="range" min="1" max="100" value="50" class="slider" id="fear"onchange="filter();">
                </div>
                <div class="col">
                    <h4>Fearless</h4>
                </div>
            </div>
   </div>     
</div>        
           
    <div id="result">
        <div class="container">
            <div class="row">     
                    <div class="col">
                          <div class='card'> 
                              <img class="card-img-top" img src="images/noimage.jpg" alt="noimage">
                                    <div class="card text-center">      
                                        <div class="card-body">
                                            <h2 class="programme title">No content</h2>
                                        </div>
                                    </div>
                            </div>
                    </div> 
            
                    <div class="col">
                          <div class='card'> 
                              <img class="card-img-top" img src="images/noimage.jpg" alt="noimage">
                                    <div class="card text-center">      
                                        <div class="card-body">
                                            <h2 class="programme title">No content</h2>
                                        </div>
                                    </div>
                            </div>
                    </div> 
            
                    <div class="col">
                          <div class='card'> 
                              <img class="card-img-top" img src="images/noimage.jpg" alt="noimage">
                                    <div class="card text-center">      
                                        <div class="card-body">
                                            <h2 class="programme title">No content</h2>
                                        </div>
                                    </div>
                            </div>
                    </div>
                
                    <div class="col">
                          <div class='card'> 
                              <img class="card-img-top" img src="images/noimage.jpg" alt="noimage">
                                    <div class="card text-center">      
                                        <div class="card-body">
                                            <h2 class="programme title">No content</h2>
                                        </div>
                                    </div>
                            </div>
                    </div>
        
                    <div class="col">
                          <div class='card'> 
                              <img class="card-img-top" img src="images/noimage.jpg" alt="noimage">
                                    <div class="card text-center">      
                                        <div class="card-body">
                                            <h2 class="programme title">No content</h2>
                                        </div>
                                    </div>
                            </div>
                    </div>
            </div>
        </div>  
    </div>
    
    <script>
        function filter() {
            
            var zenvalue  = document.getElementById("zen").value;
            var xhttp;
            console.log(zenvalue)
            xhttp = new XMLHttpRequest(); //object instantiation
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                   document.getElementById("result").innerHTML = this.responseText
                }
            };
            xhttp.open("GET", "Readprogrammes.php?zen="+zenvalue, true);
            xhttp.send();   
        }
    </script> 
     
   
    
</body>
</html>

    