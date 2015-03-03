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

    function getTitle() {
        return $this->title;
    }

    function getDescription(){
        return $this->description;
    }

    function getContact(){
        $contact = array($this->contactInfo->getName(), $this->contactInfo->getEmail(), $this->contactInfo->getPhone());
        return $contact;
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
