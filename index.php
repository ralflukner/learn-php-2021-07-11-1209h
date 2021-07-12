<?php
  function longdate($timestamp): string
  {
      return date("l F jS Y", $timestamp);
  }

function longdate_plus_days($timestamp,$days): string
{
    return date("l F jS Y", $timestamp+$days*24*60*60);
}

        echo 'Hello World!<br>';
        echo 'The current date and time is ' . longdate(time()) . '.';
        echo '<br>';
        $refill_date = '06/23/2021';
        echo 'The date of the refill was ' . $refill_date . '.';
        echo '28 days after the refill date is '
            . longdate_plus_days(strtotime($refill_date),28) . '.';