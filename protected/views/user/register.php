<?php $this->beginContent('//layouts/main')?>

<div class="container mt-5 pt-4">
	<div class="container pt-5" style="width: 50%; text-align: center">
		<h1 style="color: white; font-family: Black Han Sans, sans-serif;">Register</h1>
		<form method="POST" action="<?php echo Yii::app()->createUrl('user/registerProcess'); ?>" style="font-family: Fjalla One, sans-serif;">
			<div class="input-group mb-3 mt-5">
				<span class="input-group-text" id="basic-addon1" style="width: 100px">Name</span>
				<input type="text" name="name" class="form-control" placeholder="Username" aria-label="Name" aria-describedby="basic-addon1">
			</div>
			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1" style="width: 100px">Email</span>
				<input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
			</div>
			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1" style="width: 100px">Phone</span>
				<input type="text" name="phone" class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1">
			</div>
			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1" style="width: 100px">Password</span>
				<input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
			</div>
			<button type="submit" class="btn btn-danger" style="width: 100%">Register</button>
		</form>
	</div>

</div>	

<?php $this->endContent(); ?>