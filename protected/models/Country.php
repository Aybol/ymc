<?php

Yii::import('application.models._base.BaseCountries');

class Country extends BaseCountries
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}