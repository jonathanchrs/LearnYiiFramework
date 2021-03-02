<?php $this->beginContent('//layouts/main')?>

<?php if(Yii::app()->user->getIsGuest()): ?>
<div class="bg-dark" style="height: 350px">
	<div class="container pt-5" style="text-align: center">
		<h1 class="mt-5" style="color: white">Wonderful Journey</h1>
		<h4 style="color: white">Blog of Indonesian Tourism</h4>
	</div>
</div>
<div class="container mt-5">
	<hr style="border: 1px solid white">
</div>
<div class="bg-dark mt-5">
	<div class="container" style="color: black; text-align: center">
		<div class="row">
			<?php foreach($articles as $article): ?>
				<div class="col-4 mt-4">
					<?php
					$desc = substr($article->description, 0, strlen($article->description) / 4) . '...';
					?>
					<div class="card h-100" style="width: 100%;">
						<div class="card-body">
							<h5 class="card-title"><?php echo $article->title ?></h5>
							<p class="card-text"><?php echo $desc ?></p>
							<a href="#" class="btn btn-danger">Full Story ></a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?php else: ?>
	<div class="container mt-5">
		<h1 style="color: white"><?php echo "Welcome ".Yii::app()->user->getState('name')." !"; ?></h1>
		<div class="mb-3">
			<form action="" method="GET"></form>
			<input type="text" class="form-control" placeholder="input title here !" id="keyword">
			<div id="result">
				<?= $this->renderPartial('articlelist', array('articles' => $articles)); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php $this->endContent(); ?>