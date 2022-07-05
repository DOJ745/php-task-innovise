<?php

namespace src;

use DateTime;
use Exception;

/*
 * Write a function that finds how many Mondays
 * occurred on the first day of each month in
 * the period from January 1, 1980 to December 31, 1999.
 *
 * Function arguments: (int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday')
 *
 * All arguments described in the task already, why do we need to make function with
 * parameters which are already know?
 */
class Task6
{
    private function outputToConsole($data): void
    {
        echo '<script>';
        echo "console.log('" . $data . "')";
        echo '</script>';
    }

    private function isMonday(string $dayOfWeek): bool
    {
        return $dayOfWeek === 'Mon';
    }

    public function main(): void
    {
        $dayOfWeekFormat = 'D';
        $firstDayOfMonthFormat = '01.m.Y';
        $year = 1980;
        $lastYear = 1999;
        $month = 1;
        $lastMonth = 12;

        $mondaysNum = 0;
        $mondaysArr = [];
        for ($i = $year; $i <= $lastYear; $i++) {
            for ($j = $month; $j <= $lastMonth; $j++) {
                $formattedDate = "01.$j.$i";
                $tempDate = new DateTime($formattedDate);
                if ($this->isMonday($tempDate->format($dayOfWeekFormat))) {
                    $mondaysNum++;
                    $mondaysArr[] = $tempDate->format($firstDayOfMonthFormat);
                }
            }
        }

        // Watch console output in browser
        $this->outputToConsole("Count of Mondays: $mondaysNum");
        foreach ($mondaysArr as $item) {
            $this->outputToConsole($item);
        }
    }
}

$test = new Task6();

try {
    $test->main();
} catch (Exception $e) {
    print_r($e->getMessage());
}
