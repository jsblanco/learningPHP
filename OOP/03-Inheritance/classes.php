<?php

class Person
{

    public $name;
    public $surname;
    public $age;
    public $isMale;

    /**
     * Person constructor.
     * @param $name
     * @param $age
     * @param $isMale
     */
    public function __construct($name, $age, $isMale)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isMale = $isMale;
    }

    public function talk()
    {
        return 'I\'m talking';
    }

    public function walk()
    {
        return 'I\'m walking';
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getIsMale()
    {
        return $this->isMale;
    }

    /**
     * @param mixed $isMale
     */
    public function setIsMale($isMale): void
    {
        $this->isMale = $isMale;
    }
}

class Developer extends Person
{

    public $languages = [];

    public function __construct($name, $age, $isMale, $mainLanguage)
    {
        parent::__construct($name, $age, $isMale);
        array_push($this->languages, $mainLanguage);
    }


    public function knowsLanguage($language)
    {
        array_push($this->languages, $language);
    }

    public function canCodeIn()
    {
        $info = '<p>' . $this->name . ' can code in:</p><ul>';
        foreach ($this->languages as $key => $value) {
            $info .= '<li>' . $value . '</li>';
        }
        $info .= '</ul>';
        return $info;
    }

    public function program()
    {
        return 'I\'m programming';
    }

    public function debug()
    {
        return 'I\'m debugging';
    }

}

class WebDeb extends Developer
{
    public $isFrontEnd;
    public $isBackEnd;

    public function __construct($name, $age, $isMale, $mainLanguage, $isBackEnd, $isFrontEnd)
    {
        parent::__construct($name, $age, $isMale, $mainLanguage);
        $this->isBackEnd = !!$isBackEnd;
        $this->isFrontEnd = !!$isFrontEnd;
    }


    /**
     * @return mixed
     */
    public function getIsFrontEnd()
    {
        if ($this->isFrontEnd) {
            return $this->name . ' is a frontend dev<br>';
        } else {
            return $this->name . ' is not a frontend dev<br>';
        }
    }

    /**
     * @param mixed $isFrontEnd
     */
    public function setIsFrontEnd($isFrontEnd): void
    {
        $this->isFrontEnd = !!$isFrontEnd;
    }

    /**
     * @return mixed
     */
    public function getIsBackEnd()
    {
        if ($this->isBackEnd) {
            return $this->name . ' is a backend dev<br>';
        } else {
            return $this->name . ' is not a backend dev<br>';
        }
    }

    /**
     * @param mixed $isBackEnd
     */
    public function setIsBackEnd($isBackEnd): void
    {
        $this->isBackEnd = !!$isBackEnd;
    }


}

class AccountManager extends Person
{

    public function isMakingBudgets()
    {
        return $this->name . ' is creating budgets';
    }
}