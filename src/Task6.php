namespace src;
<?php

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
                $tempDate = new \DateTime($formattedDate);
                if ($this->isMonday($tempDate->format($dayOfWeekFormat))) {
                    $mondaysNum++;
                    $mondaysArr[] = $tempDate->format($firstDayOfMonthFormat);
                }
            }
        }

        $this->outputToConsole("Count of Mondays: $mondaysNum");
        foreach ($mondaysArr as $item) {
            $this->outputToConsole($item);
        }
    }
}
