<?php include("path.php"); ?>
<?php 
include( ROOT_PATH .  "/app/controllers/posts.php"); 
if(isset($_GET['id'])){
    $post = selectOne('b', ['id' => $_GET['id']]);
}

$posts = selectAll('b', ['published' => 1]);


$topics = selectAll('c');

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
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php echo $post['tittle']; ?> | EPhemzyInspires</title>
</head>
<body>
    <!-- Facebook page plugin SDK -->
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=311600040125859&autoLogAppEvents=1" nonce="YXShlkN4"></script>
<!-- Header -->

   <!-- TODO: INCLUDE -->
   <?PHP include(ROOT_PATH. "/app/include/header.php"); ?>
    <!-- //Header -->


    <!-- page wrapper -->
    <div class="page-wrapper">
       
    




    <!-- Content -->
    <div class="content clearfix single">
        <!-- Main Content  wrapper-->
        <div class="main-content-wrapper">
        <div class="main-content single">
           <h1 class="post-title"><?php echo $post['tittle']; ?></h1> 
           <div class="post-content">
           <?php echo html_entity_decode($post['description']); ?>
            </div>
        </div>
        </div>
        <!-- //Main Content -->

        <!-- Side bar -->
        <div class="sidebar single">
            <div class="fb-page" data-href="https://web.facebook.com/Ephemzy-Venture-109202047102675" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://web.facebook.com/Ephemzy-Venture-109202047102675" class="fb-xfbml-parse-ignore"><a href="https://web.facebook.com/Ephemzy-Venture-109202047102675">Ephemzy Venture</a></blockquote></div>
           <div class="section popular">
               <h2 class="section-title">Popular</h2>
               <?php foreach ($posts as $p): ?>
                <div class="post clearfix">
                   <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                   <a href="single.php?id=<?php echo $p['id']; ?>" class="title"><h4><?php echo $p['tittle']; ?></h4></a>
               </div>
               <?php endforeach; ?>
                             
            
            </div>
            <div class="section topics">
                <h2 class="section-title">Topics</h2>
                <ul>
                <?php foreach ($topics as $topic): ?>
                    <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id']. '&title=' . $topic['title']; ?>"><?php echo $topic['title']; ?></a></li>
                <?php endforeach; ?>
                    
                   
                </ul>
            </div>
        </div>
        <!-- //Side bar -->

    </div>
    <!-- //Content -->
</div>
<!-- Footer -->
<?PHP include(ROOT_PATH."/app/include/footer.php"); ?>

<!--// Footer -->

    <!-- JqQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>

</body>
</html>