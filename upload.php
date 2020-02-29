<?php
    echo $_FILES['file']['name'];
    $con=mysqli_connect("localhost","root","","project") or die("Unable to connect to db");

    if(move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$_FILES['file']['name']))
    {
        $query=mysqli_query($con,"insert into images values ('','".$_FILES['file']['name']."')");
        if($query){
            
            header("location:homepage.php");
            echo '<script>alert("Image Uploaded")</script>';
        }
        else
        {
            echo mysqli_error($con);
        }
    }
?>