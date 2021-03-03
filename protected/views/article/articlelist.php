<html>

<head>
	<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
</head>

<body>
	<div class="row" data-masonry='{"percentPosition": true }'>
		<?php $id = 0 ?>
		<?php foreach($articles as $article): ?>
			<div class="col-4 mt-4">
			<a href="#" style="text-decoration: none; color: black" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $id; ?>">
				<div class="card" style="width: 100%; border-radius: 10px; transition: 0.4s">
					<img src="<?php echo Yii::app()->request->baseUrl . '/image/' . $article->image; ?>" class="mt-3 mr-2 img-fluid" alt="..." height="300px" width="376px" style="margin-right: 10px; margin-left: 10px; border-radius: 10px;">
					<div class="card-body">
						<h5 class="card-title"><b><?php echo $article->title ?></b></h5>
						<p class="card-text" style="height: 100px; overflow: hidden; line-height: 28px"><?php echo $article->description ?></p>
					</div>
				</div>
			</a>
			<div class="modal fade" id="exampleModal<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><?php echo $article->title; ?></h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<img class="img-fluid" src="<?php echo Yii::app()->request->baseUrl . '/image/' . $article->image; ?>" alt="not found" width="465px">
							<div class="row">
								<div class="col-1">
									<?php if(Yii::app()->createUrl('article/isLiked', array('id' => $article->id))): ?>
									<img id="love<?php echo $id; ?>" class="mt-3" src="<?php echo Yii::app()->request->baseUrl . '/image/love.png'; ?>" alt="not found" width="30px">
									<?php else: ?>
										<img id="unlove<?php echo $id; ?>" class="mt-3" src="<?php echo Yii::app()->request->baseUrl . '/image/unlove.png'; ?>" alt="not found" width="30px">

									<?php endif; ?>
								</div>
								<div class="col-11 mt-2">
									<strong><h6 style="margin-top: 10px"><?php echo $article->likes.' Likes' ?></h6></strong>
								</div>
							</div>
							
							<p class="mt-2" style="text-align: justify; line-height: 23px; color: black"><?php echo $article->description; ?></p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $id++; ?>
	<?php endforeach; ?>
</div>

</body>
</html>