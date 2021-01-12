<?php

$successMessage = "";

include ("includes/header.php");

?>


        <div class="row" >
            <div class="col-md-12 container-fluid">
                <div class ="hero">
                    <div id = "hero-text">
                        <h1>lorem</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque impedit aliquam doloremque quia culpa provident laborum sequi, quis, sunt nesciunt vitae corrupti. Ducimus commodi asperiores laboriosam, praesentium qui obcaecati totam.</p>
                
                    </div>
                </div> 
            </div>
        </div>

        <!-- About Us starts Here. -->
        <div class="row about bg-light" >
            <div class="container-fluid">
                <h2 id = "about"  class ="text-info d-flex justify-content-center mt-3" >About us</h2>
                <div class="col-md-12 p-2 mt-4 h-100" id="about" >
                    <ul class = "nav nav-pills nav-fill d-md-flex d-block">
                        <li class = "nav-item md-mb-2">
                            <a href="#mission" data-toggle = "tab" class ="nav-link link p-5">mission</a>
                        </li>

                        <li class = "nav-item md-mb-2">
                            <a href="#vision" data-toggle = "tab" class ="nav-link link p-5">vision</a>
                        </li>

                        <li class = "nav-item md-mb-2">
                            <a href="#values" data-toggle = "tab" class ="nav-link link p-5 ">values</a>
                        </li>
                    </ul>
                    <div class="tab-content text-dark">
                        <div class="tab-pane p-3 mt-3" id ="mission">
                            <p>mission Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quidem at? Veniam minus ab illo dolorum sapiente veritatis consectetur deleniti atque earum, assumenda amet praesentium culpa non explicabo, fugiat sint. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae reiciendis assumenda id, blanditiis aliquid alias consequatur excepturi at odit recusandae ducimus quia voluptas rem corrupti omnis quos eaque? Eum, reprehenderit.</p>
                        </div>

                        <div class="tab-pane p-3 mt-3" id ="vision">
                            <p>about Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus ipsa ad esse hic laborum eaque rem inventore nisi voluptatum cumque! Natus obcaecati iure nisi dolores dicta! Ut qui dignissimos omnis.  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae reiciendis assumenda id, blanditiis aliquid alias consequatur excepturi at odit recusandae ducimus quia voluptas rem corrupti omnis quos eaque? Eum, reprehenderit.</p>
                        </div>

                        <div class="tab-pane p-3 mt-3" id ="values">
                            <p>values Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, laudantium. Nam, quidem dolorum numquam voluptate molestiae vitae nihil corporis nostrum optio at a laborum, veritatis, quia illo! Praesentium, consectetur nisi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae reiciendis assumenda id, blanditiis aliquid alias consequatur excepturi at odit recusandae ducimus quia voluptas rem corrupti omnis quos eaque? Eum, reprehenderit.</p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <!-- About Us Ends Here  -->

        <!--Services  -->
        <div class="container-fluid content">
            <br>
            <div id="header-2">
                <h2 class="motorist">For motorist looking for assistance</h2>
            </div>
            <hr class="bg-info horizon">
            <p class="d-flex justify-content-center mt-3" id="block">We help you answer question to problem you are facing with your vehicle, provide technical assistance where ever you are!</p>
            <div class="row d-flex justify-content-center mt-5">
                <div id="left" class="col-md-3 p-5 bg-light right">
                    <img src="./image/IMG_20200916_102737_058.JPG" class="img-fluid mt-3" alt="" width="400">

                    <h3 class="heading" >Questions and Answer</h3>
                    <p>get all the answers you need to know about what is/when wrong with your vehicle. There are <strong>professional</strong> ready to answer question concering your car.</p>
                    <a href="signup.php" class="btn btn-lg btn-block">Ask Question</a>
                </div>
                <div id="middle" class="col-md-3 p-5 bg-light">
                    <img src="./image/IMG_20200916_102737_058.JPG" class="img-fluid mt-3" alt="" width="400">
                    <h3 class="heading" >Questions and Answer</h3>
                    <p>get all the answers you need to know about what is/when wrong with your vehicle. There are <strong>professional</strong> ready to answer question concering your car.</p>
                    <a href="request.php" class="btn btn-lg btn-block">Request For Service</a>
                </div>
                <div id="right" class="col-md-3 p-5 right bg-light">
                    <img src="./image/IMG_20200916_102806_990.JPG" class="img-fluid mt-3" alt="" width="400">
                    <h3 class="heading" >Questions and Answer</h3>
                    <p>get all the answers you need to know about what is/when wrong with your vehicle. There are <strong>professional</strong> ready to answer question concering your car.</p>
                    <a href="signup.php" class="btn btn-lg btn-block">Ask Question</a>
                </div>
            </div>  
        </div>
        <!--Services ends here  -->

        <footer class="bg-dark container-fluid p-3">
            <!-- logo -->
            <div class="row p-5">
                <div class="col-md-1">
                    <a href="index.php" class="logo text-light">Fix-<span class="text-danger it">it</span></a>
                </div>
                <div class="col-md-3 about-footer">
                    <h2 class="about-foot">about us</h2>
                    <ul>
                        <li><a href="">Mission</a></li>
                        <li><a href="">Vision</a></li>
                        <li><a href="">Value</a></li>
                    </ul>
                </div>
                <div class="col-md-3 about-footer">
                    <h2 class="about-foot">our service</h2>
                    <ul>
                        <li><a href="">something here</a></li>
                        <li><a href="">something here</a></li>
                        <li><a href="">something here</a></li>
                        <li><a href="">something here</a></li>
                        <li><a href="">something here</a></li>
                    </ul>
                </div>
                <div class="col-md-3" id="contact">
                    <div class="contact-form">
                        <h2 class="about-foot">contact us</h2>
                        <form action="" class="form-horizontal">
                            <div class="form-group">
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Write Your Message Here" id="" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" value="Send" class="btn btn-block btndanger">
                            </div>
                        </form>

                        <p>or</p>

                        <p>Get us on social media</p>
                        <ul class="row">
                            <li class="col-md-6"><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li class="col-md-6"><a href=""><i class="fa fa-twitter"></i></a></li>
                        </ul>
                        <p class="copy-right">All Rights Reserved &copy; 2020</p>

                    </div>
                </div>
            </div>
        </footer>
<?php include("includes/footer.php") ?>

<!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Signup</h5>
                <br>
                <p>Signing up is easy! Just some few step and you will be added!</p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
              <div class="container mt-5 ms">
                <form style="width: 400px; margin: auto" action="signup.php" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputFirstName">First Name</label>
                                <input type="text" class="form-control text" id="exampleInputFirstName" value="<?php echo $firstName; ?>" aria-describedby="emailHelp" name="txtFirstname" autofocus required>
                              </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputLastName">Last Name</label>
                                <input type="text" class="form-control" id="exampleInputLastName" value="<?php echo $lastName; ?>" aria-describedby="emailHelp" name="txtLastname" required>
                              </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email; ?>" aria-describedby="emailHelp" name="txtEmail" required>
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password"  class="form-control
                      
                      <?php
                      
                      if($pass== 'no match')
                      {echo 'is-invalid';
                      }else if ($match == 'match')
                      {echo 'is-valid';}
                      
                      ?>
                      
                      
                      " id="exampleInputPassword1" name="txtPassword1"  required>
                      <small class="is-invalid-feedback text-danger"><?=$errorMessage; ?></small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword">Confirm Password</label>
                      <input type="password"  class="form-control
                      
                      
                    
                      <?php
                      
                      if($pass== 'no match')
                      {echo 'is-invalid';
                      }else if ($match == 'match')
                      {echo 'is-valid';}
                      
                      ?>
                      
                        id="exampleInputConfirmPassword" name="txtPassword2"   required>
                      <small class="is-invalid-feedback text-danger"><?=$errorMessage; ?></small>
                    </div>
                    <button type="submit" name="btnSubmit" class="btn btn-block btn-primary">Submit</button>
                    <div class="container mt-3">
                      <p>Already have an account?<a href="login.php" id="login-link" class="ml-2">&nbsp;Log in</a></p>
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </div>
        