<?php

class ArtistController extends GxController {

public function filters() {
	return array(
			'accessControl', 
			);
}

public function accessRules() {
	return array(
			array('allow',
				'actions'=>array('index','view','register'),
				'users'=>array('*'),
				),
			array('deny',
				'users'=>array('*'),
				),
			);
}

    /*
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Artists'),
		));
	}

	public function actionCreate() {
		$model = new Artists;


		if (isset($_POST['Artists'])) {
			$model->setAttributes($_POST['Artists']);
			$relatedData = array(
				'genres' => $_POST['Artists']['genres'] === '' ? null : $_POST['Artists']['genres'],
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
		$model = $this->loadModel($id, 'Artists');


		if (isset($_POST['Artists'])) {
			$model->setAttributes($_POST['Artists']);
			$relatedData = array(
				'genres' => $_POST['Artists']['genres'] === '' ? null : $_POST['Artists']['genres'],
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
			$this->loadModel($id, 'Artists')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Artists');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Artists('search');
		$model->unsetAttributes();

		if (isset($_GET['Artists']))
			$model->setAttributes($_GET['Artists']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
     */

    public function actionRegister() {
        $artistModel = new Artist;
        $userModel = new User();

        $userModel->scenario = 'register';

        $data = array();


        if (isset($_POST['Artist']) && isset($_POST['User'])) {


            $artistModel->setAttributes($_POST['Artist']);
            $userModel->setAttributes($_POST['User']);

            $userModel->role = 'artist';


            $userValid = $userModel->validate();
            $artistModel->id = 9999999;
            $artistValid = $artistModel->validate();


            if ($userValid && $artistValid && $userModel->save()) {

                $relatedData = array(
                    'genres' => $_POST['Artist']['genres'] === '' ? null : $_POST['Artist']['genres'],
                );

                $artistModel->id = $userModel->id;

                if ($artistModel->saveWithRelated($relatedData)) {
                    if (Yii::app()->getRequest()->getIsAjaxRequest()) {
                        Yii::app()->end();
                    } else {
                        Yii::app()->user->setFlash('success', 'Artist was successfully registered');
                        $this->redirect(array('user'));
                    }
                }
            } else {
                $userModel->password = '';
                $userModel->password_repeat = '';
            }
        }

        $data['artistModel'] = $artistModel;
        $data['userModel'] = $userModel;

        $this->render('register', $data);
    }

}