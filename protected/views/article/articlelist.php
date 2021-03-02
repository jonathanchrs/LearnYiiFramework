<div class="row">
	<?php $id = 0 ?>
	<?php foreach($articles as $article): ?>
		<div class="col-4 mt-4">
			<?php
			$desc = substr($article->description, 0, strlen($article->description) / 4) . '...';
			?>
			<a href="#" style="text-decoration: none; color: black" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $id; ?>">
				<div class="card h-100" style="width: 100%;">
					<img src="<?php echo Yii::app()->request->baseUrl . '/image/' . $article->image; ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><?php echo $article->title ?></h5>
						<p class="card-text"><?php echo $desc ?></p>
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
							<img src="<?php echo Yii::app()->request->baseUrl . '/image/' . $article->image; ?>" alt="not found" width="465px">
							<p class="mt-3" style="text-align: justify;"><?php echo $article->description; ?></p>
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