<?php

trait Hiring {
    public function daysFromHiring($_hiringDate) {
        $currentDate = date('Y-m-d');
        $diff = abs(strtotime($_hiringDate) - strtotime($currentDate));
        $daysFromHiring = $diff / (60 * 60 * 24);

        return $daysFromHiring;
    }
}