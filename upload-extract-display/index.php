<?php  
 if(isset($_POST["image_zip"]))  
 {  
      $output = '';  
      if($_FILES['zip_file']['name'] != '')  
      {  
           $file_name = $_FILES['zip_file']['name'];  
           $array = explode(".", $file_name);  
           $name = $array[0];  
           $ext = $array[1];  
           if($ext == 'zip')  
           {  
                $path = 'upload/';  
                $location = $path . $file_name;  
                if(move_uploaded_file($_FILES['zip_file']['tmp_name'], $location))  
                {  
                     $zip = new ZipArchive();  
                     if($zip->open($location))  
                     {  
                          $zip->extractTo($path.$name);  
                          $zip->close();  
                     }  
                     $files = scandir($path . $name);  
                     
                     foreach($files as $file)  
                     { 
                          $tmp = explode(".", $file); 
                          $file_ext = end($tmp);  
                          $allowed_ext = array('jpg', 'png');  
                          if(in_array($file_ext, $allowed_ext))  
                          {  
                               $new_name = md5(rand()).'.' . $file_ext;  
                               $output .= '<div class="col-md-6"><img src="upload/'.$new_name.'"/></div>';  
                               copy($path.$name.'/'.$file, $path . $new_name);  
                               unlink($path.$name.'/'.$file);  
                          }       
                     }  
                     unlink($location);  
                     rmdir($path . $name);  
                }  
           }  
      }  
 }  
 ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Engineering Internship Assessment</title>
  <meta name="description" content="The HTML5 Herald" />
  <meta name="author" content="Digi-X Internship Committee" />

  <link rel="stylesheet" href="style.css?v=1.0" />
  <link rel="stylesheet" href="custom.css" />

</head>

<body>

    <div class="top-wrapper">
        <img src="https://assets.website-files.com/5cd4f29af95bc7d8af794e0e/5cfe060171000aa66754447a_n-digi-x-logo-white-yellow-standard.svg" alt="digi-x logo" height="70" />
        <h1>Engineering Internship Assessment</h1>
    </div>

    <div class="instruction-wrapper">
        <h2>What you need to do?</h2>
        <h3 style="margin-top:31px;">Using this HTML template, create a page that can:</h3>
        <ol>
            <li><b class="yellow">Upload</b> a zip file - containing 5 images (Cats, or Dogs, or even Pokemons)</li>
            <li>after uploading, <b class="yellow">Extract</b> the zip to get the images </li>
            <li><b class="yellow">Display</b> the images on this page</li>
        </ol>

        <h2 style="margin-top:51px;">The rules?</h2>
        <ol>
            <li>May use <b class="yellow">any programming language/script</b>. The simplest the better *wink*</li>
            <li><b class="yellow">Best if this project could be hosted</b></li>
            <li><b class="yellow">If you are not hosting</b>, please provide a video as proof (GDrive video link is ok)</li>
            <li><b class="yellow">Submit your code</b> by pushing to your own github account, and share the link with us</li>
        </ol>
    </div>
      
                <br />  
                  
    <div class="display-wrapper">
        <h2 style="margin-top:51px;">Upload ZIP File</h2>
        <form method="POST" enctype="multipart/form-data" class="plain-form">  
            <input type="file" name="zip_file" class="file-upload" id="file-upload"/>
            <br>
            <input type="submit" name="image_zip" class="btn" value="Upload File" />  
        </form>
        
    </div>

    <!-- DO NO REMOVE CODE STARTING HERE -->
    <div class="display-wrapper">
        <h2 style="margin-top:51px;">My images</h2>
        
        <div class="append-images-here">
        <div class="row">
        <?php  
                if(isset($output))  
                {  
                     echo $output;  
                }
                else {
                    echo "<p>No image found. Your extracted images should be here.</p>";
                }  
                ?>
        </div>    
            <!-- THE IMAGES SHOULD BE DISPLAYED INSIDE HERE -->
        </div>
    </div>
    <!-- DO NO REMOVE CODE UNTIL HERE -->

</body>
</html>