<?php

    session_start();


    // if(!$_SESSION['user_identity'])  {
    //     header("location: login.php");
    // }
    
    include("./includes/db_connection.php");

    $name = $successMessage= "";
    if (isset($_GET['login'])){

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>'.$_SESSION['user_identity'].'Success</strong> 
        </div>
        
        <script>
        $(".alert").alert();
        </script>';
    }

    if (isset($_GET['action'])){
        if ($_GET['action'] == 'reply'){
            $successmsg = '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>You replied to this his/her comment</strong> 
            </div>
            
            <script>
            $(".alert").alert();
            </script>';
        }
    }

    include ("./includes/header.php");
    echo $_SESSION['user_identity'];

?>

    <div class="container">
        <div class="container">
            <div id="top">
                <h1 id="heading-1">All Questions <?php echo $_SESSION['user_identity']; ?></h1>
                <form class="form-question" method="post" action="question.php">
                    <div class="form-group">
                        <a id="ask" class="btn btn-info" href="question.php">Ask Question</a>
                    </div>
                </form>
            </div>
            <div id="bottom">
                <?php

                    // $id = $row['id'];

                    $query="SELECT * FROM posts";
                    $results = mysqli_query($conn,$query);
                    $counter = mysqli_num_rows($results);

                ?>
                <h2 id='header' class='text-danger'><?=$counter ?>&nbsp;<span>Questions</span></h2>
                <?php
    
                ?>
            </div>

            <hr>
            <div id="section">
                <section id="question-section" class="container">
                <div class="container-fluid p-3">
                    <?php

                        $query = "SELECT * FROM posts ORDER BY id DESC";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($result)){

                            $postid = $row['id'];
                            $query="SELECT * FROM reply WHERE post_id = '$postid'";
                            $results = mysqli_query($conn,$query);
                            $reply_counter = mysqli_num_rows($results);

                    ?>
                        <div class="question answer">                              
                            <h3 ><a href="reply.php?action=<?=$row['id'] ?>" alt="<?=$_SESSION['user_identity'] ?>" class="text-dark"><?=$row['body'] ?></a></h3>
                            <p id="para"><?=$reply_counter ?>&nbsp;<span>replies</span></p>
                            <div>
                               <p> <a href="reply.php?action=<?=$row['id'] ?>"><i class="fa fa-comment" aria-hidden="true"></i> reply</a></p>
                            </div>
                            <div class="image row">
                                <div>
                                    <p>asked&nbsp;<span>12 min</span>&nbsp;ago</p>
                                    <img src="<?=$row['image'] ?>" width="50" height="50" alt="" style="border-radius: 30px; margin-top: -12px;" class="img-fluid">
                                    <div id="info">
                                        <h6><?=$_SESSION['user_identity'] ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    <?php

                        }

                    ?>
                    </div>

                </section>

            </div>

            <hr>

            <!-- <div class="col">
                <div class="block-27">
                  <ul class="page-item">
                    <li class="page-no"><a class="page-link" href="#">&lt;</a></li>
                    <li class="active"><span class="page-link">1</span></li>
                    <li class="page-no"><a class="page-link" href="#">2</a></li>
                    <li class="page-no"><a class="page-link" href="#">3</a></li>
                    <li class="page-no"><a class="page-link" href="#">4</a></li>
                    <li class="page-no"><a class="page-link" href="#">5</a></li>
                    <li class="page-no"><a class="page-link" href="#">&gt;</a></li>
                  </ul>
                </div>
            </div>
  -->
        </div>

        <!-- <div id="left">
            <h1>For Sale</h1>
            <a href="reply.php=action=<?=$row['id'] ?>"><img src="./images/thumb-008.jpg" class="img-responsive" alt=""></a>
            <p style="text-align:center;">price&nbsp;<span><strong>$3,000</strong></span></p>
            <form action="" class="buy" method="post">
                <div class="group">
                    <button class="btn-button" type="submit" name="buy">Buy</button>
                </div>
            </form>
        </div>
         -->
    </div>

    <footer>
    <!-- <i class="fa fa-bell-o"></i><sup class=" badge badge-danger"><?=$counter ?></sup>
        <ul style="width: 20%; height: ;">
            <h4>About us</h4>
            <li><a href=""><h4>Our Mission</h4></a></li>
            <li><a href=""><h4>Our Vision</h4></a></li>
            <li><a href=""><h4>Meet the Team</h4></a></li>
        </ul>

        <h1>what when wrong</h1>
<div id="form">
    <h4>Contact Us</h4>
    <form action="" class="form-horizontal">
        <div class="form-group-1">
            <label for="name">Enter your Name</label>
            <input type="text" name="txtName" placeholder="Samson Daniel" class="form-control-1">
        </div>
        <div class="form-group-1">
            <label for="email">Enter your Email</label>
            <input type="text" class="form-control-1" name="txtEmail" id="" placeholder="naanman10@example.com" aria-describedby="helpId">
        </div>
        <div class="form-group-1">
            <label for="massage">Message</label>
            <textarea class="form-control-1" name="" id="txtMessage" rows="3" placeholder="Message"></textarea>
        </div>
        <div class="form-group-1">
            <button type="submit" name="btnSubmit" id="btn">Submit</button>
        </div>
    </form>
</div> -->

</footer>
    
<?php include("includes/footer.php") ?>
