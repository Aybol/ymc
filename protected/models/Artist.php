<?php

Yii::import('application.models._base.BaseArtists');

class Artist extends BaseArtists
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

    public function getArtistLeader()
    {
        return array(
            'artist' => "The Artist",
            'leader' => "The Leader Of The Band"
        );
    }

    public function getFansCount()
    {
        return array(
            '0-100' => '0-100',
            '101-500'=>'101-500',
            '501- 1,000'=>'501- 1,000',
            '1,001 – 5,000'=>'1,001 – 5,000',
            '5,001 – 10,000'=>'5,001 – 10,000',
            '10,001+'=>'10,001+',
        );
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();

        $labels['artist_leader'] = Yii::t('app', 'I am Signing Up As');
        $labels['name'] = Yii::t('app', 'Artist/Band Name');
        $labels['bio'] = Yii::t('app', 'Artist Bio');
        $labels['website'] = Yii::t('app', 'Artist/Band Website');
        $labels['fans_count'] = Yii::t('app', 'How Many Fans Do you Currently Have?');
        $labels['facebook'] = Yii::t('app', 'Facebook Link');
		$labels['twitter'] = Yii::t('app', 'Twitter Link');
		$labels['youtube'] = Yii::t('app', 'Youtube Link');

        return $labels;
    }
}