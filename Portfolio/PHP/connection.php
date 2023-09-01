
<?php
$conn = mysqli_connect("localhost","root","","codeaddict");
$sql2 = "SELECT*FROM `images` WHERE 1";
$result2 = mysqli_query($conn, $sql2);
while($fetch = mysqli_fetch_assoc($result2))
{
echo "";

?>


<?php

if (isset($_POST['btn_img'])) {
    $con = mysqli_connect("localhost", "root", "", "codeaddict");

    $filename = $_FILES["choosefile"]["name"];
    $tempfile = $_FILES["choosefile"]["tmp_name"];
    $folder = "image/" . $filename;
    $sql = "INSERT INTO `images`(`image`)VALUES('$filename')";
    if ($filename == "") {
        echo
        "
            <div class='alert alert-danger' role='alert'>
                <h4 class='text-center'>Blank not Allowed</h4>
            </div>
            ";
    } else {
        $result = mysqli_query($con, $sql);
        move_uploaded_file($tempfile, $folder);
        echo
        "
            <div class='alert alert-success' role='alert'>
                <h4 class='text-center'>Image uploaded</h4>
            </div>
            ";
    }
}
?>

