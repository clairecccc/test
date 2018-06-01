<?php 

$xmlNodes=simplexml_load_file ("Uploads/Programmes.xml");
$format="£%0.2f\n";

$zenresult =$_GET['zen'];
$happyresult=$_GET['happy'];
$awakenessresult=$_GET['awakeness'];
$fearresult=$_GET['fear'];

if ($zenresult>50) {$zenresult="Calm";}
else {$zenresult="Agitated";
}

if ($happyresult>50) {
$happyresult="Happy";}
else {$happyresult="Sad";
}

if ($awakenessresult>50) {
$awakenessresult="Wide Awake";}
else {$awakenessresult="Tired";
}

if ($fearresult>50) {
$fearresult="Scared";}
else {$fearresult="Fearless";
}


      
      ?>
        <div class="container">
            <div class="row">
                <?php foreach($xmlNodes as $programme) {?>
                <?php if ($zenresult || $happyresult || $awaknessresult || $fearresult==$programme->mood) { ?>
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
    
   
	