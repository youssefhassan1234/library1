<?php
include './inc/data.php';
?>


<section id="special-offer" class="bookshelf pb-5 mb-5" >
	<div class="section-header align-center">
		<div class="title">
			<span>Grab your opportunity</span>
		</div>
		<h2 class="section-title">Books with offer</h2>
	</div>

	<div class="container">
		<div class="row">
			<div class="inner-content">
				<div class="product-list">
					<div class="grid product-grid">

						<?php foreach ($nice as $id => $d) { ?>
							<div class="product-item">
								<figure class="product-style">
									<img src="<?php echo $d['img']; ?>" alt="Book Image" class="product-thumb">
								</figure>
								<figcaption>
									<h3><?php echo $d['name']; ?></h3>
									<span><?php echo $d['author']; ?></span>
									<div class="item-price">
										<span class="prev-price"><?php echo $d['price']; ?></span> $40.00
									</div>
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