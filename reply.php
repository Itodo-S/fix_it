<?php

    session_start();

    include("./includes/db_connection.php");
    include("./includes/functions.php");

    $id = $successMessage = "";

        if (isset($_POST['btnReply'])){
                $postid = sanitize_data($_POST['postid']);
                $comment = sanitize_data($_POST['txtreply']);

                if($comment && $postid) {
                    $query = "INSERT INTO reply (post_id, reply_comment) VALUES ('$postid', '$comment')";
                    $result = mysqli_query($conn, $query);
                    if (!$result) {
                        exit ("Error: " .mysqli_error($conn));
                    }else {

                        header("location: home.php?action=Reply");
                    }
                }
        }
        

        include ("includes/header.php");        
    

?>

<?php 

    $body = "";

    if (isset($_GET['action'])){
        $id = $_GET['action'];

        $query = "SELECT * FROM posts WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)){
            $body=$row['body'];
            $authID = $row['author_id'];

            $auth_query = "SELECT * FROM users WHERE id = '$authID' ";
            $auth_result = mysqli_query($conn, $auth_query);
            while ($auth_row = mysqli_fetch_assoc($auth_result)){
                $author = $auth_row['first_name'];
            }
        

            echo' 
                <div class="container">
                    <form action="reply.php" method="post" class="form-horizontal">
                        <div class="form-group">
                            <h1>'.$body.'</h1>
                        </div>
                        <div class="form-group">
                            <textarea autofocus class="form-control col-md-6" name="txtreply" placeholder="Write you answer"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" value = "'. $id .'" name ="postid">
                        </div>
                        <div class="form-group">
                            <button class="btn col-md-6 btn-info" type="submit" name="btnReply">Submit Answer</button>
                        </div>
                    </form>
                </div>
            <hr>
            ';
        }

        $query = "SELECT * FROM reply WHERE post_id = '$id' ORDER BY id DESC";
        $result = mysqli_query ($conn, $query);
        while ($row = mysqli_fetch_assoc($result)){
            
            echo '
                    <div class="container">
                        <div class="card">
                            <img src="" alt="" class="img-fluid">
                        </div>
                        <div class="reply">'.$row['reply_comment'].'</div>
                        <div class="name">'.$author .'</div>
                        <div class="date">'.$row['created_at'].'</div>
                    </div>';
        }
    }

?>

<?php include("includes/footer.php") ?>
