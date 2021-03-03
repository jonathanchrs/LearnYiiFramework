<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
<![endif]-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Francois+One&family=Paytone+One&family=Black+Han+Sans&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php echo CHtml::scriptFile(Yii::app()->request->baseUrl . "/js/file.js"); ?>
<style>
	
	.hide{
		display: none;
	}

</style>

<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="bg-dark">
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
		<div class="container pt-4 mt-3">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText" style="font-family: Fjalla One, sans-serif;">
					<a class="navbar-brand" href="<?php echo Yii::app()->createUrl('article/landing') ?>" style="display: inline;">
						<img src="<?php echo Yii::app()->request->baseUrl . '/image/logo.png'; ?>" alt="" width="200px">
					</a>
					<?php if(Yii::app()->user->getIsGuest()): ?>
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo Yii::app()->createUrl('guest/aboutUs') ?>"><h4 style="color: white; margin-left: 30px">About Us</h4></a>
						</li>
					</ul>
					<?php else: ?>
						<?php if(Yii::app()->user->getState('role') == 'User'): ?>
						<ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 30px">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo Yii::app()->createUrl('user/showUpdate') ?>"><h4 style="color: white">Profil</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo Yii::app()->createUrl('article/showBlog') ?>"><h4 style="color: white">My Blog</h4></a>
							</li>
						</ul>
						<?php elseif(Yii::app()->user->getState('role') == 'Admin'): ?>
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link" href="#"><h4 style="color: white">Admin</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo Yii::app()->createUrl('user/showUser') ?>"><h4 style="color: white">User</h4></a>
							</li>
						</ul>
					<?php endif; ?>
				<?php endif; ?>
				<?php if(Yii::app()->user->getIsGuest()): ?>
				<span class="navbar-text" style="margin-right: 20px">
					<a class="nav-link" href="<?php echo Yii::app()->createUrl('user/showRegister'); ?>"><h4 style="color: white">Sign Up</h4></a>
				</span>
				<span class="navbar-text">
					<a class="nav-link" href="<?php echo Yii::app()->createUrl('user/showLogin') ?>"><h4 style="color: white">Login</h4></a>
				</span>
				<?php else: ?>
					<span class="navbar-text">
						<h4 class="mt-2" style="color: white; margin-right: 20px"><?php echo "Welcome ".Yii::app()->user->getState('name')." !"; ?></h4>
					</span>
					<span class="navbar-text mt-1">
						<a class="nav-link" href="<?php echo Yii::app()->createUrl('user/logout') ?>"><h4 style="color: white">Logout</h4></a>
					</span>
				<?php endif; ?>
			</div>
		</div>
	</div>
</nav>

<div class="container pt-5">
	<div class="container">
		<?php echo $content; ?>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
