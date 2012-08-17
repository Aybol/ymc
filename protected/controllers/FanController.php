<?php

class FanController extends GxController {

public function filters() {
	return array(
			'accessControl', 
			);
}

public function accessRules() {
	return array(
			array('allow',
				'actions'=>array('index','view', 'register'),
				'users'=>array('*'),
				),
			array('allow', 
				'actions'=>array('admin','delete', 'create','update'),
				'roles'=>array('root'),
				),
			array('deny',
				'users'=>array('*'),
				),
			);
}

    /*
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Fans'),
		));
	}

	public function actionCreate() {
		$model = new Fans;


		if (isset($_POST['Fans'])) {
			$model->setAttributes($_POST['Fans']);
			$relatedData = array(
				'genres' => $_POST['Fans']['genres'] === '' ? null : $_POST['Fans']['genres'],
				);

			if ($model->saveWithRelated($relatedData)) {
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
		$model = $this->loadModel($id, 'Fans');


		if (isset($_POST['Fans'])) {
			$model->setAttributes($_POST['Fans']);
			$relatedData = array(
				'genres' => $_POST['Fans']['genres'] === '' ? null : $_POST['Fans']['genres'],
				);

			if ($model->saveWithRelated($relatedData)) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

    /*
	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Fans')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Fans');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Fans('search');
		$model->unsetAttributes();

		if (isset($_GET['Fans']))
			$model->setAttributes($_GET['Fans']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
    */

    public function actionRegister() {
        $fanModel = new Fan;
        $userModel = new User();

        $userModel->scenario = 'register';

        $data = array();

        if (isset($_POST['Fan']) && isset($_POST['User'])) {

            $fanModel->setAttributes($_POST['Fan']);
            $userModel->setAttributes($_POST['User']);

            $userModel->role = 'fan';


            $userValid = $userModel->validate();
            $fanModel->id = 9999999;
            $fanValid = $fanModel->validate();


            if ($userValid && $fanValid && $userModel->save()) {

                $relatedData = array(
                    'genres' => $_POST['Fan']['genres'] === '' ? null : $_POST['Fan']['genres'],
                );

                $fanModel->id = $userModel->id;

                if ($fanModel->saveWithRelated($relatedData)) {
                    if (Yii::app()->getRequest()->getIsAjaxRequest()) {
                        Yii::app()->end();
                    } else {
                        Yii::app()->user->setFlash('success', 'You have successfully registered');
                        $this->redirect(array('view', 'id' => $fanModel->id));
                    }
                }
            } else {
                $userModel->password = '';
                $userModel->password_repeat = '';
            }
        }

        $data['fanModel'] = $fanModel;
        $data['userModel'] = $userModel;

        $this->render('register', $data);
    }
}