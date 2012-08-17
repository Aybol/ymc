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
        $fanModel = $this->loadModel($id, 'Fan');
        $userModel = $fanModel->user;

        $data = array();

        if (isset($_POST['Fan']) && isset($_POST['User'])) {

            $fanModel->setAttributes($_POST['Fan']);
            $userModel->setAttributes($_POST['User']);

            $userValid = $userModel->validate();
            $fanValid = $fanModel->validate();


            if ($userValid && $fanValid && $userModel->save()) {

                $relatedData = array(
                    'genres' => $_POST['Fan']['genres'] === '' ? null : $_POST['Fan']['genres'],
                );

                if ($fanModel->saveWithRelated($relatedData)) {
                    if (Yii::app()->getRequest()->getIsAjaxRequest()) {
                        Yii::app()->end();

                    } else {
                        Yii::app()->user->setFlash('success', 'Fan was successfully updated');
                        $this->redirect(array('user/index'));
                    }
                }
            }
        }

        $data['fanModel'] = $fanModel;
        $data['userModel'] = $userModel;

        $this->render('update', $data);
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

    public function actionRegister() {
        $fanModel = new Fan;
        $userModel = new User();

        $userModel->scenario = 'register';

        $data = array();

        if (isset($_POST['Fans']) && isset($_POST['Users'])) {

            $fanModel->setAttributes($_POST['Fans']);
            $userModel->setAttributes($_POST['Users']);

            $userModel->role = 'fan';


            $userValid = $userModel->validate();
            $fanModel->id = 9999999;
            $fanValid = $fanModel->validate();


            if ($userValid && $fanValid && $userModel->save()) {

                $relatedData = array(
                    'genres' => $_POST['Fans']['genres'] === '' ? null : $_POST['Fans']['genres'],
                );

                $fanModel->id = $userModel->id;

                if ($fanModel->saveWithRelated($relatedData)) {
                    if (Yii::app()->getRequest()->getIsAjaxRequest())
                        Yii::app()->end();
                    else
                        $this->redirect(array('view', 'id' => $fanModel->id));
                }
            }
        }

        $data['fanModel'] = $fanModel;
        $data['userModel'] = $userModel;

        $this->render('register', $data);
    }
    */
}