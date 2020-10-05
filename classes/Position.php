<?php
require_once __DIR__ . '/../traits/Hiring.php';

class Position extends Employee {
    use Hiring;
    private $position;

    public function __construct($_name, $_surname, $_IdNum = 000000, $_position) {
        parent::__construct($_name, $_surname, $_IdNum = 000000);
        if (empty($_position)) {
            die('Position missing');
        }

        $this->position = $_position;
    }
}