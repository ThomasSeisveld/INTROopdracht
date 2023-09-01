<?php
require 'PHP/connection.php';
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    if ($_FILES["image"]["error"] === 4) {
        echo
        "<script> alert('Image bestaat niet'); </script>";
    } else {
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtensions = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if (!in_array($imageExtension, $validImageExtensions)){
            echo
            "<script> alert('Invalid Image Extensions') </script>"
            ;
        }
        else if($fileSize > 1000000) {
            echo
            "<script> alert('Image te groot!') </script>"
            ;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Upload Image</title>
</head>
<body>

   


    <div class="alert alert-secondary" role="alert">
        <h4 class="text-center">Upload Image</h4>
    </div>
    <div class="container col-12 m-5">
       <div class="col-6 m-auto">

         <form action="index.php" method="post" class="form-control" enctype="multipart/form-data">
            <input type="file" class="form-control" name="choosefile"  id="">
            <div class="col-6 m-auto ">
                <button type="submit" name="btn_img" class="btn btn-outline-success m-4">
                Submit
            </button>
            </div>
        </form>

        <table class="table text-center">
            <tr>
                <th>id</th>
                <th>image</th>
                <th>button</th>

            </tr>



                <tr>
                    <td><?php echo $fetch['id'] ?></td>
                    <td><img src="./image/<?php echo $fetch['image'] ?>" width=100px alt=""></td>
                    <td><a href="delete.php?id=<?php echo $fetch['id'] ?>" class="btn btn-outline-danger">Delete</a></td>
                </tr>



                <?php
                "";
            } 
            ?>
        </table>

      
       


       </div>
    </div>

</body>
</html>