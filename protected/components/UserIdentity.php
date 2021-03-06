<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $id;

    public function authenticate()
    {
        $record = User::model()->findByAttributes(array('email'=>$this->username));

        if($record === null) {
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        } else if($record->password !== $record->encryptPassword($this->password)) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->id = $record->id;
            $this->setState('roles', $record->role);
            $this->errorCode=self::ERROR_NONE;
        }

        return !$this->errorCode;
    }

    public function getId(){
        return $this->id;
    }
}