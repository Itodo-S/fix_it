<?php
    session_start();
    
    include("includes/db_connection.php");
    include("includes/functions.php");
    $successMessage = "";
    
    include("includes/header.php");
?>

	
<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          <?php

              $query = "SELECT * FROM users WHERE user_type = 0";
              $result = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_assoc($result)){
                $firstname = $row['first_name'];
                $lastname = $row['last_name'];

          ?>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('');">
								
              </a>
              <div class="text bg-white p-4">
                <h3 class="text-center text-danger "><?=$row['address'] ?></h3>
               <hr> 

               <h4><i class="fa fa-user"></i><?=$firstname ?>&nbsp;<?=$lastname ?></h4>
               <small><i class="fa fa-car"></i> Toyota</small>
               <h5><i class="fa fa-phone"></i> 09056239845.</h5>
               <h6><i class="fa fa-envelope"></i> <a href="">sanito23@gmail.com.</a> </h6>

               <a href=""> <i class="fa fa-facebook"></i> <i class="fa fa-snapchat"></i> <i class="fa fa-twitter"></i> <i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
          <?php

            }

          ?>
        </div>
			</div>
      
		</section>

<?php include("includes/footer.php") ?>