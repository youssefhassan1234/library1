<?php
include 'inc/header.php';
?>

<?php
include 'inc/featured-data.php';
?>

<?php
include 'components/nav.php';

$id = $_GET['id'];
$d = $nice[$id];

?>

<div class="container py-5" >
     <div class="row">
          <!-- Product Images -->
          <div class="col-md-4">
               <div class="card">
                    <img src="<?php echo $d['img']; ?>" class="product-thumb">
               </div>
          </div>

          <!-- Product Details -->
          <div class="col-md-5">
               <h1 class="text-bolder">name of book:</h1>
               <h1 class="h2 mb-3 text-warning text-bold"><?php echo $d['name']; ?></h1>
               <h2 class="mb-4">author: <?php echo $d['author']; ?></h2>
               <h3>The book talks about:</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta suscipit, nam blanditiis sunt officia ut aperiam assumenda libero reprehenderit quidem facere animi. Consectetur consequatur, quidem alias molestias sapiente fugiat excepturi!</p>

          </div>
     </div>
     <div class="row">
          <div class="col-md-4">

          </div>
          <div class="col-md-3">
               <p class="mb-4"><?php echo $d['price']; ?></p>
               <!-- Quantity -->
               <div class="mb-4">
                    <div class="d-flex align-items-center gap-2">

                         <a class="btn btn-outline-secondary" type="button">buy</a>
                         <a href="./index.php" class="btn btn-outline-secondary" type="button">
                              <i class="far fa-heart me-2"></i>Back To Home
                         </a>
                    </div>

               </div>
          </div>
     </div>
</div>


<?php
include './inc/footer.php';
?>