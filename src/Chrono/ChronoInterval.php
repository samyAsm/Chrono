<?php

namespace SamBakon\Chrono\Chrono;

use DateTimeInterface;

/**
 * Handles date intervals
 */
class ChronoInterval
{
    public ?DateTimeInterface $start;
    public ?DateTimeInterface $end;

    public function __construct(?DateTimeInterface $start = null, ?DateTimeInterface $end = null)
    {
        $this->start = $start;
        $this->end = $end;
    }
}
