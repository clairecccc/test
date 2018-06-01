<?php 

$xmlNodes=simplexml_load_file ("Uploads/Programmes.xml");
$format="£%0.2f\n";


$result = $_GET['zen'];

echo $result;

//if ($result > 50) {
//echo"yeah";}
//    else {echo "no";}
    
if ($result > 50) {
$mood="calm";}
    else {$mood="Agitated";}
    
echo $mood;
    

?>


<!--
function gameinput($Input) {
    
    if($Input === "R" || $Input === "r" || $Input === 0) {
        return "Rock";
    }

    if($Input === "P" || $Input === "p" ||  $Input === 1){
        return "Paper";
    }
    
    if($Input === "S" || $Input === "s" || $Input === 2){
        return "Scissors";
    }  
}-->

    <div class="container">
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