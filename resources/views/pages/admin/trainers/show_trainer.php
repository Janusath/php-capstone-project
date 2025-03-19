<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p>

                <div class="table-responsive">
                <table class="table datatable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Twitter Link</th>
                    <th>FaceBook Link</th>
                    <th>Instagram Link</th>  
                    <th>Linkdin Link</th>  
                    <th>Description</th>  
                    <th>Image</th>  
                    <th>Actions</th>  
                  </tr>
                </thead>
               <tbody>


               <?php
               
               if(isset($_SESSION['success']))
               {
                echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";unset($_SESSION['success']);
               }
               
               if(isset($_SESSION['error']))
               {
                echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";unset($_SESSION['error']);
               }
               
               
               ?>

               <?php




        // prepare statement for select query
      
        $sql = "SELECT * FROM trainers";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['subject'] . "</td>";
            echo "<td>" . $row['twitter_link'] . "</td>";
            echo "<td>" . $row['facebook_link'] . "</td>";
            echo "<td>" . $row['instagram_link'] . "</td>";
            echo "<td>" . $row['linkedin_link'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td><img class='img-fluid img-thumbnail' src='../public/images/" . $row['image'] . " ' alt='' width='80px' height='80px'></td>";
            echo "<td><a class='btn btn-outline-primary' href='?page=trainers/edit_trainer&id=" . $row['id'] . "'>Edit</a> | <a class='btn btn-outline-danger' href='?page=trainers/delete_trainer&id=" . $row['id'] . "' onclick='return confirmDelete();'>Delete</a></td>";    
            echo "</tr>";
        }


        ?>

<script>

// this function for confirm delete 
function confirmDelete() {

    return confirm('Are you sure you want to delete this record?');
  }
</script>

               </tbody>
              </table>
              <!-- End Table with stripped rows -->

                </div>
              <!-- Table with stripped rows -->
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->