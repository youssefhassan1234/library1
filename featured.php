<?php
include './inc/header.php';
?>
<?php
include './components/nav.php';
?>
<?php
include './inc/featured-data.php';
?>

<section id="featured-books" class="my-5" data-animate>
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="section-header align-center">
					<div class="title">
						<span>Some quality items</span>
					</div>
					<h2 class="section-title">Featured Books</h2>
				</div>

				<div class="product-list">
					<div class="grid product-grid">
						<?php foreach ($nice as $id => $book) { ?>
							<div class="product-item">
								<figure class="product-style">
									<img src="<?php echo $book['img']; ?>" alt="Book Image" class="product-thumb">
								</figure>
								<figcaption>
									<h3><?php echo $book['name']; ?></h3>
									<span><?php echo $book['author']; ?></span>
									<div class="item-price"><?php echo $book['price']; ?></div>
									<a href="details.php?id=<?= $id ?>" class="outline-btn-primary">see details</a>
								</figcaption>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include './inc/footer.php';
?>