<?php

/**
 * 
 */
class UserController extends Controller
{
	
	public function actionShowRegister(){
		$this->render('register');
	}

	public function actionRegisterProcess(){
		$allUser = Users::model()->findAll();

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];

		$user =  new Users;
		$user->id = count($allUser) + 1;
		$user->name = $name;
		$user->email = $email;
		$user->phone = $phone;
		$user->password = $password;
		$user->role = "User";

		if($user->save()){
			$this->render('login');
		}
	}

	public function actionShowLogin(){
		$this->render('login');
	}

	public function actionLoginProcess(){
		$model = new Users;
		$email = $_POST['email'];
		$password = $_POST['password'];

		$model->email = $email;
		$model->password = $password;

		if($model->login()){
			$this->redirect(Yii::app()->createUrl('article/landing'));
		} 
		else{
			$this->render('login');
		}
	}

	public function actionLogout(){
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->createUrl('article/landing'));
	}

	public function actionShowUpdate(){
		$this->render('updateprofile');
	}

	public function actionUpdateProcess(){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$id = Yii::app()->user->getState('id');

		$model = Users::model()->findByAttributes(array('id' => $id));

		$model->name = $name;
		$model->email = $email;
		$model->phone = $phone;

		Yii::app()->user->setState('name', $model->name);

		if($model->save()){
			$this->redirect(Yii::app()->createUrl('article/landing'));
		}
	}
}