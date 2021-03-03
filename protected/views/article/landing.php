<?php $this->beginContent('//layouts/main')?>

<?php if(Yii::app()->user->getIsGuest()): ?>
<div class="bg-dark" style="height: 350px">
	<div class="container pt-5" style="text-align: center; font-family: 'Black Han Sans', sans-serif;">
		<h1 class="mt-5" style="color: white">Wonderful Journey</h1>
		<h4 style="color: white">Blog of Indonesian Tourism</h4>
	</div>
</div>
<div class="container mt-5">
	<hr style="border: 1px solid white">
</div>
<div class="bg-dark mt-5" style="font-family: Black Han Sans, sans-serif;">
	<div class="container" style="color: white; text-align: center">
		<?php foreach($articles as $article): ?>
			<div class="mt-4">
				<?php
				$desc = substr($article->description, 0, strlen($article->description) / 4) . '...';
				?>
				<a href="<?php echo Yii::app()->createUrl('user/showLogin'); ?>" style="text-decoration: none">
					<div class="card w-100" style="height: 200px; background-image: url(<?php echo Yii::app()->request->baseUrl . '/image/'. $article->image; ?>); background-repeat: no-repeat; background-size: cover; transition: 0.4s">
						<div class="card-body">
							<h2 class="card-title" style="color: white; text-shadow: 0 0 3px #000000, 0 0 5px #000000;"><?php echo $article->title; ?></h2>
							<p><h5 style="color: white; text-shadow: 0 0 3px #000000, 0 0 5px #000000; font-family: Fjalla One, sans-serif;"><?php echo $desc; ?></h5></p>
						</div>
					</div>
				</a>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<?php else: ?>
	<div class="container mt-5">
		<div class="pt-5 mb-3">
			<h1 style="color: white; font-family: 'Black Han Sans', sans-serif;">Feeds</h1>
			
			<input type="text" class="form-control mt-5" placeholder="input title here !" id="keyword" style="font-family: Fjalla One, sans-serif;">
			<div id="result" style="font-family: Fjalla One, sans-serif;">
				<?= $this->renderPartial('articlelist', array('articles' => $articles)); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php $this->endContent(); ?>