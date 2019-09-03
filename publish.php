<?php 
//http://localhost/quickpost/post.php?edit=34
    include_once'connection.php';
    include_once'publish_details.php';
    $userid=$_SESSION['id'];
    if(isset($_GET['edit'])){
        $publish_id=$_GET['edit'];
        $edit_state=true;
        $rec = mysqli_query($db,"SELECT * FROM publish WHERE id='$publish_id'");
        $record =mysqli_fetch_array($rec);
        $title=$record['title'];
        $comment=$record['comment'];
       // $image=$record['image'];
        $publish_id=$record['id'];   
        $user_id=$record['user_id'];
    }
    else{
        $edit_state=false;
        $title="";
        $comment="";
       // $image=$record['image'];
        $publish_id="";
        $user_id="";
    }
   

?>
<!DOCTYPE html>
<html>
<head>
    <title>Publish</title>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link href="publish.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="signup__box">
        <div class="header">
                <h2>Publish</h2>
        </div>
        <form  method="post" action="publish_details.php" enctype="multipart/form-data">

            <?php if(isset($_SESSION['msg'])):?>
                <div class="input-group">
                    <?php
                        echo $_SESSION['msg'];
                       // unset($_SESSION['msg']);
                    ?>
                </div>
            <?php endif ?>
            <input type="number" name="id" hidden value="<?php echo $publish_id; ?>">

            <div class="input-group">
                <p>Title</p>
                <input type="text" name="title"  placeholder="Enter title" value="<?php echo $title; ?>">
            </div>  
            <div class="input-group">          
                    <p>Comment</p>

                    <input type="text" name="comment"  placeholder="Comment" value="<?php echo $comment; ?>">
            </div><br>
            
            <div class="input-group">
                <input type="file" name="image" id="fileSelect" ><br><br>
            </div>
            
            <input type="hidden" name="userid" value="<?php echo $userid; ?>">

            <div class="input-group">
                <?php if($edit_state==true):?>
                    <input  type="submit" name="update" value="Update">
                <?php else:?>
                    <input  type="submit" name="submit" value="Submit">
                <?php endif?>
                <input  type="submit" name="cancel" value="Cancel">
            </div>


            
		</form>
    </div>
</body>
</html>