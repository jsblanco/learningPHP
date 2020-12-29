<?php

class PersonCall
{
    private $name;
    private $age;
    private $city;

    /**
     * PersonCall constructor.
     * @param $name
     * @param $age
     * @param $city
     */
    public function __construct($name, $age, $city)
    {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
    }

    public function __call($name, $arguments)
    {
        $methodPrefix = substr($name, 0, 3);
        if ($methodPrefix === 'get') {
            $keyName = substr(strtolower($name), 3);
            return $this->$keyName;
        } else {
            return 'The <i>' . $name . '</i> method does not exist on class PersonCall.';
        }
    }
}

$person = new PersonCall('Francisco', 33, 'Zaragoza');

echo $person->getName() . '<br>';
echo $person->getAge() . '<br>';
echo $person->getCity() . '<br>';
echo $person->thisMethodDoesNotExist() . '<br>';