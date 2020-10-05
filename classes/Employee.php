<?php

class Employee {
    private $name;
    private $surname;
    private $CF;
    private $IdNum;
    private $department;

    public function __construct($_name, $_surname, $_IdNum = 000000) {
        if (empty($_name && $_surname && $_IdNum)) {
            die('Missing data');
        }

        $this->name = $_name;
        $this->surname = $_surname;

        if (strlen($_IdNum) != 6) {
            die('Incorrect ID number');
        }

        $this->IdNum = $_IdNum;
    }

    public function setName($_name) {
        if (empty($_name)) {
            die('You must enter a name');
        }

        $this->name = $_name;
    }

    public function setSurname($_surname) {
        if (empty($_surname)) {
            die('You must enter a surname');
        }

        $this->surname = $_surname;
    }

    public function setIdNum($_IdNum) {
        if (empty($_IdNum)) {
            die('You must enter an ID number');
        }

        $this->IdNum = $_IdNum;
    }
}