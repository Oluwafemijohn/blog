<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php') ;
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FOnt awesome -->
    <script src="https://kit.fontawesome.com/f76a3423dc.js" crossorigin="anonymous"></script>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <!-- Custome Styling -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Admin Section -Edit Post</title>
</head>
<body>
    <!-- Admin header here -->
    <?php include(ROOT_PATH . "/app/include/adminHeader.php"); ?>

    <!-- admin page wrapper -->
    <div class="admin-wrapper1 clearfix">
    <!-- Left sidebar -->
    <?php include(ROOT_PATH . "/app/include/adminSidebar.php"); ?>

    <!-- //Left sidebar -->
    <!-- Admin content -->
    <div class="admin-content">
        <div class="buuton-group">
            <a href="edit.php" class="btn btn-big">Add Post</a>
            <a href="index.php" class="btn btn-big">Manage Posts</a>
        </div>
        <div class="content">
            <h2 class="page-title">Edit Post</h2>
            <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
           <form action="edit.php" method="post"  enctype="multipart/form-data">
             <input type="hidden" name="id" value="<?php echo $id; ?>" >
                <div>
                   <label for="">Title</label>
                   <input type="text" name="tittle" value="<?php echo $tittle; ?>" id="" class="text-input">
               </div>
               <div>
                    <label for="">Body</label>
                    <textarea name="description" id="description" class="text-input"><?php echo $description ?> </textarea>
                </div>
                <div>
                    <label for="">
                        <input type="file" name="image"  class="text-input">
                    </label>
                </div>
                <div>
                    <label for="">Topic</label>
                    <select name="category" id="" class="text-input">
                        <option value="">Select topic</option>
                        <?php foreach ($topics as $key => $topic): ?>
                            <?php if(!empty($category) && $category == $topic['id']): ?>
                                <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['title']; ?></option>
                            <?php else: ?>
                                <option value="<?php echo $topic['id']; ?>"><?php echo $topic['title']; ?></option>
                            <?php endif; ?>
                        
                        <?php endforeach;?> 
                        
                   
                    </select>
                </div>
                <div>
                    <?php if(empty($published) && $published = 0): ?>
                        <label for="">
                            <input type="checkbox" name="published" id="" class="">
                            Publish
                        </label>
                    <?php else: ?>
                        <label for="">
                            <input type="checkbox" name="published" id="" class="" checked>
                            Publish
                        </label>
                    <?php endif; ?>
                    
                </div>
                <div>
                    <button type="submit" name="update-post" class="btn btn-big">Update Post</button>
                </div>
           </form>
        </div>
    </div>
    <!-- //Admin content -->
    </div>
    <!-- //admin page wrapper -->

    <!-- JqQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- CKeditor -->
   <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>

</body>
</html>