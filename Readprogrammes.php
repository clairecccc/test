<?php 

$xmlNodes=simplexml_load_file ("Uploads/Programmes.xml");
$format="£%0.2f\n";

$zenresult =$_GET['zen'];
$mood=$zenresult;

if ($zenresult>50) {$mood="Calm";}
else {$mood="agitated";}
echo $mood;



      
      ?>
        <div class="container">
            <div class="row">
                <?php foreach($xmlNodes as $programme) {?>
                
                <?php if ($mood==$programme->mood) { ?>
                
                
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
                <?php }?>      
                        
                <?php }?>                       
            </div>
        </div>
    
   
	