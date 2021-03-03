<?php $this->beginContent('//layouts/main')?>
<div class="container mt-5 pt-4">
	<div class="container pt-5" style="width: 50%; text-align: center">
		<h1 style="color: white; font-family: Black Han Sans, sans-serif;"">Login</h1>
		<form action="<?php echo Yii::app()->createUrl('user/loginProcess'); ?>" method="POST" style="font-family: Fjalla One, sans-serif;"">
			<div class="input-group mt-3 mb-3">
				<span class="input-group-text" id="basic-addon1" style="width: 100px">Email</span>
				<input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
			</div>
			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1" style="width: 100px">Password</span>
				<input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
			</div>
			<button type="submit" class="btn btn-danger" style="width: 100%">Login</button>
		</form>
	</div>

</div>
<?php $this->endContent(); ?>