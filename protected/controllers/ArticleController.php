<?php


class ArticleController extends Controller
{
	
	public function actionShowBlog(){
		$id = Yii::app()->user->getState('id');
		$model = Articles::model()->findAllByAttributes(array('user_id' => $id));
		$categories = Categories::model()->findAll();
		$this->render('blog', array('articles' => $model, 'categories' => $categories));
	}

	public function actionDeleteBlog(){
		$id = $_GET['id'];
		$model = Articles::model()->findByPk($id);
		if($model->delete()){
			$this->redirect(Yii::app()->createUrl('article/showBlog'));
			printf("id = %d", $id);
		}
	}

	public function actionCreateBlog(){
		$userId = Yii::app()->user->getState('id');
		$categoryId = $_POST['category'];
		$title = $_POST['title'];
		$description = $_POST['story'];
		$path = Yii::app()->basePath."\..\image\\";
		print($path);
		$imageName = $_FILES['file']['name'];

		if(move_uploaded_file($_FILES['file']['tmp_name'], $path.$_FILES['file']['name'])){
			$article = new Articles;
			$article->user_id = $userId;
			$article->category_id  = $categoryId;
			$article->title = $title;
			$article->description = $description;
			$article->image = $imageName;
			if($article->save()){
				$this->redirect(Yii::app()->createUrl('article/showBlog'));
			}
		}	
	}

	public function actionLanding(){
		$articles = Articles::model()->findAll();
		$this->render('landing', array('articles' => $articles));
	}

	public function actionGetArticleByTitle($keyword){
		$articles = Articles::model()->findAllBySql("SELECT * FROM articles WHERE title LIKE '%".$keyword."%'");
		$this->renderPartial('articlelist', array('articles' => $articles));
	}
}