<?php

class JobOpening {

    private $title;
    private $description;
    private $contactInfo; //an object

    function __construct($t, $d, $c)
    {
        $this->title=$t;
        $this->description=$d;
        $this->contactInfo=$c;
    }
}

class Contact {

    private $name;
    private $email;
    private $phone;

    function __construct($n, $e, $p)
    {
        $this->name=$n;
        $this->email=$e;
        $this->phone=$p;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getPhone() {
        return $this->phone;
    }
}

?>
