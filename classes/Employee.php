<?php

class Employee {
    private $name;
    private $surname;
    private $CF;
    private $IdNum;
    private $department;

    public function __construct($_name, $_surname, $_IdNum = 000000) {
        if (empty($_name)) {
            throw new Exception('Name missing');
        }
        $this->name = $_name;

        if (empty($_surname)) {
            throw new Exception('Surname missing');
        }
        $this->surname = $_surname;

        if (empty($_IdNum)) {
            throw new Exception('ID missing');
        }

        if (strlen($_IdNum) != 6) {
            throw new Exception('Incorrect ID number');
        }
        $this->IdNum = $_IdNum;
    }

    public function setName($_name) {
        if (empty($_name)) {
            throw new Exception('You must enter a name');
        }
        $this->name = $_name;
    }

    public function setSurname($_surname) {
        if (empty($_surname)) {
            throw new Exception('You must enter a surname');
        }
        $this->surname = $_surname;
    }

    public function setIdNum($_IdNum) {
        if (empty($_IdNum)) {
            throw new Exception('You must enter an ID number');
        }
        $this->IdNum = $_IdNum;
    }

    public function __toString() {
        return nl2br("Nome: $this->name \n Cognome: $this->surname \n ID: $this->IdNum");
    }
}