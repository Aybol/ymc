<?php

Yii::import('application.models._base.BaseUsers');

class User extends BaseUsers
{
    public $password_repeat;
    //public $recaptcha;

    public static function model($className=__CLASS__) {
		return parent::model($className);
	}

    public function rules(){
        $rules = parent::rules();

        $addRules = array(
            array('password_repeat', 'required', 'on'=>'register'),
            array('password_repeat', 'compare', 'compareAttribute'=>'password' , 'on'=>'register'),
            array('password_repeat', 'safe'),
            array('email','email'),
            array('email','unique'),
            array(array('first_name','last_name'), 'ext.alpha'),
            //array('recaptcha', 'ext.recaptcha.EReCaptchaValidator','privateKey'=>Yii::app()->params['recaptcha']['private_key']),
            array('dob', 'ext.over18')
        );

        return array_merge($rules, $addRules);
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();

        $labels['recaptcha'] = Yii::t('demo', 'Enter both words separated by a space: ');
        $labels['dob'] = Yii::t('demo', 'Date Of Birth');

        return $labels;
    }

    /**
     * @param bool $runValidation
     * @param null $attributes
     * @return bool
     */
    public function save($runValidation=true,$attributes=null)
    {
        if (!$this->id) {
            $this->password = $this->encryptPassword($this->password);
            $this->password_repeat = $this->encryptPassword($this->password_repeat);
        }

        return parent::save($runValidation,$attributes);
    }


    /**
     * @return bool
     */
    public function delete()
    {
        if ($this->role == 'fan') {
            FanGenres::model()->deleteAllByAttributes(array('fan_id' => $this->id));
            Fan::model()->deleteAllByAttributes(array('id'=>$this->id));
        }

        if ($this->role == 'artist') {
            ArtistGenres::model()->deleteAllByAttributes(array('artist_id' => $this->id));
            Artist::model()->deleteAllByAttributes(array('id'=>$this->id));
        }

        return parent::delete();
    }

    /**
     * @static
     * @param $password
     * @return string
     */
    public static function encryptPassword($password)
    {
        return md5($password);
    }
}