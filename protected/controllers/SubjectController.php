<?php

class SubjectController extends Controller {
	
	public $layout='//layouts/column2';

	public function actionHome(){
		$this->render('home');
	}

	public function actionCreate(){
		$this->render('create');
	}

	public function actionViewAll(){
		$subjects = JoSubject::model()->findAll();
		$this->render('viewall', array('subjects' => $subjects));
	}

	public function actionSelectUpdate(){
		$subjects = JoSubject::model()->findAll();
		$this->render('selectUpdate', array('subjects' => $subjects));
	}

	public function actionUpdateShow(){
		$subjectTarget = JoSubject::model()->findByPk($_GET['id']);
		$this->render('update', array('subject' => $subjectTarget));
	}

	public function actionUpdateProcess($id){
		$subject = JoSubject::model()->findByPk($id);
		$subject->name = $_POST['subjectname'];
		$subject->score = $_POST['subjectscore'];
		if($subject->save()){
			$this->render('updateResult');
		}
	}

	public function actionDelete(){
		$subject = JoSubject::model()->findByPk($_GET['id']);
		if($subject->delete()){
			$subjects = JoSubject::model()->findAll();
			$this->render('selectUpdate', array('subjects' => $subjects));
		}
	}

	public function actionCreateProcess(){
		$subjectname = $_POST['subjectname'];
		$subjectscore = $_POST['subjectscore'];

		$model = new JoSubject;
		$model->name = $subjectname;
		$model->score = $subjectscore;

		if($model->save()){
			$this->render('subjectdetail', array('model' => $model));
		}
		else{
			$this->render('create');
		}
	}

}

?>