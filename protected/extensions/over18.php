<?php
class over18 extends CValidator
{
	
	protected function validateAttribute($object,$attribute)
	{
		$message = Yii::t('over18', 'I’m sorry, you must be 18 years or older in order to be a registered artist on the site.');
		
		// validate the string
		$value=$object->$attribute;
        $year = 60*60*24*365;
		if((time() - strtotime($value)) / $year  < 18 )
		{
			$this->addError($object,$attribute,$message);
		}
	}

	public function clientValidateAttribute($object,$attribute)
	{
    	return "";
	}
	

}
