<?php 

$xmlNodes=simplexml_load_file ("Uploads/Programmes.xml");
$format="£%0.2f\n";

$zenresult =$_GET['zen'];

//$happyresult =$_GET['happy'];
//
//$awakenessresult =$_GET['awakeness'];
//
//$fearresult =$_GET['fear'];
//
//echo $zenresult;
//echo $happyresult;
//echo $awakenessresult;
//echo $fearresult;

//if ($result > 50) {
//echo"yeah";}
//    else {echo "no";}
    
if ($zenresult > 50) {
$mood="calm";}
    else {$mood="Agitated";}
    
echo $mood;
    
            
            
            
if($mood="calm")     {
    foreach ($xmlNodes as $programme) {
        echo $programme->name;
        
    };
?>




<    <div class="container">
        <div class="row">
                <?php foreach($xmlNodes as $programme) {?>
                    <div class="col">
                        <div class='card'> 
                            <img class="card-img-top" img src=" <?php echo $programme->imagepath; ?> ">
                                    <div class="card-body">
                                        <div class="card text-center">
                                            <h2><?php echo $programme->name;?></h2>
                                        </div>
                                    </div>
                        </div>
                    </div>
            
                <?php  }?>                       
        </div>
    </div>	