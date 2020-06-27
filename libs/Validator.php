<?php
class Validator
{
    private $errors=[];

    public function getErrors()
    {
        return $this->errors;
    }

    public function isValid()
    {
        return count($this->errors)==0;
    }

    public function isVide($champ,$key,$sms="Ce champ est obligatoire")
    {
        if($champ=="")
        {
            $this->errors[$key]=$sms;
        }
    }

    public function isEmail($champ,$key,$sms="Veuillez insere un bon email"){}
}