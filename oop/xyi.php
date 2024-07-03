<?php
class Xyi extends Worker
{
    public function setAge($age)
    {
        if ($age >= 1 and $age <= 100) {
            $this->age = $age;
            parent::setAge($age);
        }
    }
}
