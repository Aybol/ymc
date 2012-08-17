<?php

Yii::import('application.models._base.BaseFans');

class Fan extends BaseFans
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

    public function getGenders()
    {
        return array('male' => 'male', 'female' => 'female');
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();

        $labels['concert_per_year'] = Yii::t('app', 'How many concerts attended per year');
        $labels['tracks_per_year'] = Yii::t('app', 'How many tracks downloaded per year');

        return $labels;
    }

    public function rules(){
        $rules = parent::rules();

        $addRules = array(
            array(array('concert_per_year','tracks_per_year'), 'numerical')
        );

        return array_merge($rules, $addRules);
    }
}