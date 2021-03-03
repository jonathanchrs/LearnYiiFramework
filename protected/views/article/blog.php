<?php $this->beginContent('//layouts/main')?>

<div class="container mt-5 pt-5" style="">
	<div class="container pt-4" style="text-align: center;">
	 	<h1 style="color: white; font-family: 'Black Han Sans', sans-serif;">Owned Article</h1>
		<table class="table mt-5">
			<thead>
				<tr>
					<th scope="col" style="color: white">Title</th>
					<th scope="col" style="color: white">Action</th>
				</tr>
			</thead>
			<tbody style="font-family: Fjalla One, sans-serif;">
				<?php $id = 0 ?>
				<?php foreach ($articles as $article): ?>
					<tr class="clickable-row" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $id; ?>">
						<td style="text-align: center;">
							<h5 style="color: white;"><?php echo $article->title; ?></h5>
						</td>
						<td style="text-align: center;">
							<!-- Modal -->
							<div class="modal fade" id="exampleModal<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel"><?php echo $article->title; ?></h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<img src="<?php echo Yii::app()->request->baseUrl . '/image/' . $article->image; ?>" alt="not found" width="465px">
											<p class="mt-3" style="text-align: justify; line-height: 23px; color: black; "><?php echo $article->description; ?></p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<a href="<?php echo Yii::app()->createUrl('article/deleteBlog', array('id' => $article->id)); ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					<?php $id++; ?>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<div class="container mt-3" style="font-family: Fjalla One, sans-serif;">
		<a href="#" style="text-decoration: none"><button type="button" class="btn btn-danger" id="btn_create">+ Create Blog</button></a>
		<form id="create_form" class="hide" method="POST" action="<?php echo Yii::app()->createUrl('article/createBlog') ?>" enctype="multipart/form-data">
			<div class="form-group mt-4" style="color: white">
				<label for="exampleInputEmail1"  class="mb-2">Title</label>
				<input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
			</div>
			<label for="exampleInputEmail1"  class="mb-2 mt-2" style="color: white">Category</label>
			<select class="form-select form-select-lg mb-2 mt-1" aria-label=".form-select-lg example" name="category">
				<?php $counter = 1 ?>
				<?php foreach ($categories as $category): ?>
					<option value="<?php echo $counter; ?>"><?php echo $category->name ?></option>
					<?php $counter++; ?>
				<?php endforeach; ?>
			</select>
			<label for="exampleInputEmail1"  class="mb-2 mt-2" style="color: white">Photo</label>
			<div class="mb-2">
				<input class="form-control" type="file" id="formFile" name="file">
			</div>
			<label for="exampleInputEmail1"  class="mb-2 mt-2" style="color: white">Story</label>
			<div class="mb-2">
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="story"></textarea>
			</div>
			<button type="submit" class="btn btn-danger mt-1">Create</button>
		</form>
	</div>
</div>


<?php $this->endContent(); ?>