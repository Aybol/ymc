<?php

/**
 * This is the model base class for the table "artist_genres".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ArtistGenres".
 *
 * Columns in table "artist_genres" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $artist_id
 * @property integer $genre_id
 *
 */
abstract class BaseArtistGenres extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'artist_genres';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ArtistGenres|ArtistGenres', $n);
	}

	public static function representingColumn() {
		return array(
			'artist_id',
			'genre_id',
		);
	}

	public function rules() {
		return array(
			array('artist_id, genre_id', 'required'),
			array('artist_id, genre_id', 'numerical', 'integerOnly'=>true),
			array('artist_id, genre_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'artist_id' => null,
			'genre_id' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('artist_id', $this->artist_id);
		$criteria->compare('genre_id', $this->genre_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}