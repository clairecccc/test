<?php 

$filename="Uploads/Programmes.xml";

if (!file_exists($filename)){
    echo "Please upload a file before filtering";
    die();
}
    
$xmlNodes=simplexml_load_file ($filename);
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
$fearresult="Fearless";}
else {$fearresult="Scared";
}

      ?>
        <div class="container">
            <div class="row justify-content-center">
                <?php foreach($xmlNodes as $programme) {?>
                <?php if ($zenresult==$programme->mood || $happyresult==$programme->mood || $awakenessresult==$programme->mood || $fearresult==$programme->mood) { ?>
                    <div class="col-2">
                        <div class='card'> 
                            <img class="card-img-top" img src=" <?php echo $programme->imagepath; ?> ">
                                    <div class="card-body">
                                            <p><?php echo $programme->name;?></p>
                                       
                                    </div>
                        </div>
                    </div>
                <?php }?>      
                        
                <?php }?>                       
            </div>
        </div>
    
   
	