<?php
require_once __DIR__ . '/../traits/Hiring.php';

class Position extends Employee {
    use Hiring;
    private $position;
    private $daysFromHiring;

    public function __construct($_name, $_surname, $_IdNum = 000000, $_position) {
        parent::__construct($_name, $_surname, $_IdNum);
        # nel parent non va $_IdNum = 000000, altrimenti sovrascrivo l'id assegnato nel costruttore di Position e da questa riga in poi non vi sono più istruzioni di assegnamento dell'id, perciò mi dà id null e l'errore 'missing data'
        if (empty($_position)) {
            throw new Exception('Position missing');
        }
        $this->position = $_position;
    }

    public function __toString() {
        return parent::__toString() . "<br>Giorni dall'assunzione: $this->daysFromHiring";
        # usando il parent toString copio il metodo della classe padre, senza doverlo manipolare, ecco perché visualizzo comunque le var private; senza parent avrei riscritto toString di Position e avrei dovuto impostare le var come protected per poterle usare
    }
}