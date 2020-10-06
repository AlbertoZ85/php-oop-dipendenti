<?php
require_once 'classes/Employee.php';
require_once 'classes/Position.php';

try {
    $employee1 = new Employee('Alberto', 'Zordan', 524510);

    var_dump($employee1);
    echo "$employee1";
} catch (Exception $e) {
    echo "Eccezione: {$e->getMessage()}";
    # in luogo della concatenazione, uso le {} che introducono blocchi di codice, così riesco a invocare i metodi delle istanze di una classe (non funziona con funzioni globali)
}

try {
    $employee2 = new Position('A', 'Z', 103386, 'CEO');
    $employee2->daysFromHiring('2020-01-01');

    var_dump($employee2);
    echo "$employee2";
} catch (Exception $e) {
    echo "Eccezione: {$e->getMessage()}";
}