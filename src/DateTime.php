<?php

namespace Marco\Study;

class DateTime
{
  public static function formatDateTime(\DateTime $dateTime, string $format = 'Y-m-d H:i:s'): string
  {
    return $dateTime->format($format);
  }

  public static function createDateTime(string $dateTimeString): \DateTime
  {
    return new \DateTime($dateTimeString);
  }
}
