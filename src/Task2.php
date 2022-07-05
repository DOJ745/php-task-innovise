namespace src;
<?php

class Task2
{
    public function main(string $date): string
    {
        $dateFormat = 'd.m.Y';
        $checkDate = \DateTime::createFromFormat($dateFormat, $date);

        if ($checkDate !== false && !array_sum($checkDate::getLastErrors())) {
            $currentDate = \DateTime::createFromFormat($dateFormat, date($dateFormat));

            $originDay = date('d', strtotime($checkDate->format($dateFormat)));
            $originMonth = date('m', strtotime($checkDate->format($dateFormat)));
            $originYear = date('Y', strtotime($currentDate->format($dateFormat)));
            $originDate = "$originDay.$originMonth.$originYear";

            $formattedBirthdayDate = \DateTime::createFromFormat($dateFormat, $originDate);

            $endDate = \DateTime::createFromFormat($dateFormat, $formattedBirthdayDate->format($dateFormat));
            $startDate = \DateTime::createFromFormat($dateFormat, date($dateFormat));

            $diff = date_diff($startDate, $endDate);
            $diffDays = (int) $diff->format('%R%a');

            $leapYear = (int) date('L', strtotime($checkDate->format($dateFormat)));

            if ($diffDays < 0 && $leapYear === 0) {
                $diffDays += 365;
            } elseif ($diffDays < 0 && $leapYear === 1) {
                $diffDays += 366;
            }

            return "Days left until the birthday: $diffDays";
        }

        throw new \InvalidArgumentException('Invalid date! Use pattern DD.MM.YYYY!');
    }
}

