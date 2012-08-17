<?php

class UserController extends GxController {

public function filters() {
	return array(
			'accessControl', 
			);
}

public function accessRules() {
	return array(
			array('allow',
				'roles'=>array('admin'),
				),
			array('deny',
				'users'=>array('*'),
				),
			);
}

    /*
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Users'),
		));
	}

	public function actionCreate() {
		$model = new Users;


		if (isset($_POST['Users'])) {
			$model->setAttributes($_POST['Users']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}
    */

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'User');

        if ($model->role == 'fan') {
            $this->redirect(array('fan/update', 'id' => $model->id));
        }else if ($model->role == 'artist') {
            $this->redirect(array('artist/update', 'id' => $model->id));
        }


		if (isset($_POST['User'])) {
			$model->setAttributes($_POST['User']);

			if ($model->save()) {
				$this->redirect(array('index'));
			}
		}

		$this->render('update', array(
		    'model' => $model,
		));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'User')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$model = new User('search');
		$model->unsetAttributes();

		if (isset($_GET['User']))
			$model->setAttributes($_GET['User']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}