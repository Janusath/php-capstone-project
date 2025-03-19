
<?php

// ID fetch and validation


$id = $_GET['id'];


    // this is edit
    $sql = "SELECT * FROM trainers WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);


// this is update
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit']))
{

    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $twitter_link=$_POST['twitter_link'];
    $facebook_link=$_POST['facebook_link'];
    $instagram_link=$_POST['instagram_link'];
    $linkedin_link=$_POST['linkedin_link'];
    $description=$_POST['description'];

    $imageName="";


        // when upload new image 
        if($_FILES['image']['error']===0)
        {

          if(!empty($row['image']))
          {
              $oldImagePath="../public/images/".$row['image'];
              if(file_exists($oldImagePath))
              {
                unlink($oldImagePath);
              }

          }


            $imageName = time() . "_" . basename($_FILES["image"]["name"]);
            $imagePath = "../public/images/" . $imageName;  //this public path is working according to the index.php file

            if (!move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                echo "File upload Failed";
                exit();
            }

        }

        // whithout upload any image
        else{
            $sql = "SELECT image FROM trainers WHERE id = ?";
            $stmt=mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            $row=mysqli_fetch_assoc($result);
            $imageName= $row['image'];
        }


      //  this is update code 
        $sql="UPDATE trainers SET name = ?, subject = ?, description = ?, twitter_link = ?,facebook_link = ?,instagram_link=?,linkedin_link=?,image=? WHERE id=?";
        $stmt=mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt,'ssssssssi',$name,$subject,$description,$twitter_link,$facebook_link,$instagram_link,$linkedin_link,$imageName,$id);
        if(mysqli_stmt_execute($stmt)){
          $_SESSION['success']="Trainer Updated Successfully";
          header('Location: ?page=trainers/show_trainer');
            exit();
        }

      else{
        echo "Error: ".mysqli_error($conn);
      }

    }


?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form Elements</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Elements</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Trainers Details</h5>

            <!-- General Form Elements -->
            <form method="post" enctype="multipart/form-data">
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10"> 
                  <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Subject</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="subject" value="<?php echo $row['subject']; ?>" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">X</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="twitter_link" value="<?php echo $row['twitter_link']; ?>" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Facebook</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="facebook_link" value="<?php echo $row['facebook_link']; ?>" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Instagram</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="instagram_link" value="<?php echo $row['instagram_link']; ?>" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">LinkedIn</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="linkedin_link" value="<?php echo $row['linkedin_link']; ?>" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                <div class="col-sm-10">
                  <input class="form-control" type="file" id="formFile" name="image" >

                  <?php if($row['image']){?>

                    <img class="mt-3" src="../public/images/<?php echo $row['image'] ?>" width="100" height="100" alt="this is image">

                  <?php }?>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                  <textarea class="form-control" style="height: 100px" name="description"><?php echo $row['description']; ?></textarea>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Submit Button</label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit Form</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
