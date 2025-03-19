
<?php

$id=$_GET['id'];
echo($id);


$sql = "SELECT image FROM trainers WHERE id = ?";

if($fetchStmt=mysqli_prepare($conn, $sql))
{
    mysqli_stmt_bind_param($fetchStmt, "i", $id);
    mysqli_stmt_execute($fetchStmt);
    $result=mysqli_stmt_get_result($fetchStmt);
    $trainer=mysqli_fetch_assoc($result);
    mysqli_stmt_close($fetchStmt);

    if($trainer)
    {

    
        $imagePath = "../public/images/" . $trainer['image'];


        if(!empty($trainer['image'])&& file_exists($imagePath))
        {
            unlink($imagePath);
        }
    }

}



$sql = "DELETE FROM trainers WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
if(mysqli_stmt_execute($stmt)){
    $_SESSION['success'] = "Trainer Deleted Successfully!";
    header('Location: ?page=trainers/show_trainer');
}
else{
    echo "Error: " . mysqli_error($conn);
}

exit();

?>