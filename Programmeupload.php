        
<!DOCTYPE html>
<html>
    <header>
        <title>Upload Page </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>         
        <link rel="stylesheet" type="text/css" href="Test.css"> 
    </header>
        
    <body>
        <?php require 'header.php';?>  
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 jumbotron center">
                        <div class=text-white>
                             <h1> Upload your files here</h1>
                        </div>
                       
                        <div>
                            <form action="Programmeupload.php" method="post" enctype="multipart/form-data">
                                Select a file to upload:
                                <input type="file" name="myfile" id="fileToUpload"/>
                                <input type="submit" name="send"/>
                                <input type="hidden"name="MAX_FILE_SIZE"value="10000000"/>
                            </form>
                       
                        <?php                  
                           const InputKey= 'myfile';
                           const AllowedTypes = ['text/xml'];
                           if (empty($_FILES[InputKey])){
                               die();
                           }
                           if($_FILES[InputKey]['error']>0){
                               die ("Handle the error!");
                           }
                           if (!in_array ($_FILES[InputKey]['type'], AllowedTypes)){
                               die ("Handle File Type Not Allowed");
                           }
                           $tmpFile = $_FILES[InputKey]['tmp_name'];
                           $dstFile = 'Uploads/Programmes.xml';
                           if (!move_uploaded_file ($tmpFile, $dstFile)) {
                               die ("Handle Error"); 
                           }        
                           if (file_exists($dstFile)){
                               echo "Successful upload";
                               
                            header("location:Moodsliderpage.php");
                            exit;
                           }
                         ?>   
                        </div>

                                           
                    </div>
                </div> 
        </div>
        
        <?php require 'footer.php';?> 
    </body>
 </html>




