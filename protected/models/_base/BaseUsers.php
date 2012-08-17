<?php

/**
 * This is the model base class for the table "users".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Users".
 *
 * Columns in table "users" available as properties of the model,
 * followed by relations of table "users" available as properties of the model.
 *
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property string $dob
 * @property string $role
 *
 * @property Artists $artists
 * @property Fans $fans
 */
abstract class BaseUsers extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'users';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'User|Users', $n);
	}

	public static function representingColumn() {
		return 'email';
	}

	public function rules() {
		return array(
			array('email, password, first_name, last_name, dob, role', 'required'),
			array('email, password, first_name, last_name', 'length', 'max'=>50),
			array('role', 'length', 'max'=>20),
			array('id, email, password, first_name, last_name, dob, role', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'artists' => array(self::HAS_ONE, 'Artist', 'id'),
			'fans' => array(self::HAS_ONE, 'Fan', 'id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'email' => Yii::t('app', 'Email'),
			'password' => Yii::t('app', 'Password'),
			'first_name' => Yii::t('app', 'First Name'),
			'last_name' => Yii::t('app', 'Last Name'),
			'dob' => Yii::t('app', 'Dob'),
			'role' => Yii::t('app', 'Role'),
			'artists' => null,
			'fans' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('email', $this->email, true);
		$criteria->compare('password', $this->password, true);
		$criteria->compare('first_name', $this->first_name, true);
		$criteria->compare('last_name', $this->last_name, true);
		$criteria->compare('dob', $this->dob, true);
		$criteria->compare('role', $this->role, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}