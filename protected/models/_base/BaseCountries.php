<?php

/**
 * This is the model base class for the table "countries".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Countries".
 *
 * Columns in table "countries" available as properties of the model,
 * followed by relations of table "countries" available as properties of the model.
 *
 * @property integer $id
 * @property string $short
 * @property string $name
 *
 * @property Artists[] $artists
 */
abstract class BaseCountries extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'countries';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Country|Countries', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('short, name', 'required'),
			array('short, name', 'length', 'max'=>255),
			array('id, short, name', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'artists' => array(self::HAS_MANY, 'Artist', 'country_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'short' => Yii::t('app', 'Short'),
			'name' => Yii::t('app', 'Name'),
			'artists' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('short', $this->short, true);
		$criteria->compare('name', $this->name, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}