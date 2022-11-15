<?php
include 'config.php';
    function createDirectory() {
        $folder = $_POST['folder'];
        mkdir("gfg/".$folder);
        echo "<script type = 'text/javascript'>alert('Done!');</script>";
    }
    if (!isset($_POST['submit'])) {
    	        
   		}else{
            createDirectory();
        }

$cover_img = $_FILES['cover_img']['name'];
$folder = $_POST['folder'];
$title = $_POST['title'];
$author = $_POST['author'];
$artist = $_POST['artist'];
$synopsis = $_POST['synopsis'];
$status = $_POST['status'];
$slash = '/';
$tempname = $_FILES["cover_img"]["tmp_name"];
$folder2 = "gfg/". $folder. $slash . $cover_img;

    // Get all the submitted data from the form
    $sql = "INSERT INTO comics (cover_img, folder, title, author, artist, synopsis, status) VALUES ('$cover_img','$folder','$title','$author','$artist','$synopsis','$status')";
 
    // Execute query
    mysqli_query($conn, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder2)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

 

?>