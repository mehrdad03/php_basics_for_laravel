<?php

class Family
{
    // خصوصی: کپسوله‌سازی

    private $name;
    private $age;
    private $gender;

    // سازنده

    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $name;
        $this->gender = $name;

    }

    // متد عمومی برای دریافت نام
    public function getName()
    {
        return $this->name;

    }

    // متد عمومی برای دریافت سن

    public function getAge()
    {
        return $this->age;

    }

    // متد عمومی برای دریافت جنسیت

    public function getGender()
    {
        return $this->gender;

    }

    // متد عمومی برای صحبت کردن
    public function speak()
    {
        echo "Hello my name is $this->name.<br>";

    }


}


interface Workable
{
    public function work();

}

class Father extends Family implements Workable
{

    private $job;

    public function __construct($name, $age, $gender, $job)
    {

        parent::__construct($name, $age, $gender);
        $this->job = $job;
    }

    public function getJob()
    {
        return $this->job;

    }

    public function speak()
    {
        echo "Hello my name is " . $this->getName() . "and I work as a " . $this->job . ".<br>";

    }

    public function work()
    {
        echo $this->getName() . " is working as a " . $this->job . ".<br>";
    }

}

class Mother extends Family implements Workable
{

    private $job;

    public function __construct($name, $age, $gender, $job)
    {

        parent::__construct($name, $age, $gender);
        $this->job = $job;
    }

    public function getJob()
    {
        return $this->job;

    }

    public function speak()
    {
        echo "Hello my name is" . $this->getName() . "and I work as a " . $this->job . ".<br>";

    }
    public function work()
    {
        echo $this->getName() . " is working as a " . $this->job . ".<br>";
    }

}

$father=new Father('mehrdad',33,'male','programmer');

$father->speak();
$father->work();

$mother = new Father('maryam', 30, 'female', 'housewife');

$mother->speak();
$mother->work();












