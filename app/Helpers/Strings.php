<?php

namespace App\Helpers;

use DateTime;

class Strings
{
    public static function toSimpleTimeAgo(string $date): string
    {
        $dateToConvert = new DateTime($date);
        $now = new DateTime();
        $interval = $dateToConvert->diff($now, true);

        if ($interval->y) return $interval->y . ' years ago';
        elseif ($interval->m) return $interval->m . ' months ago';
        elseif ($interval->d) return $interval->d . ' days ago';
        elseif ($interval->h) return $interval->h . ' hours ago';
        elseif ($interval->i) return $interval->i . ' minutes ago';
        else return "less than 1 minute ago";
    }
}
