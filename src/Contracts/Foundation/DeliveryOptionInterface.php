<?php

namespace Jne\Contracts\Foundation;

interface DeliveryOptionInterface
{
    /**
     * Get delivery's service.
     *
     * @return string
     */
    public function service();

    /**
     * Get delivery's type.
     *
     * @return string
     */
    public function type();

    /**
     * Get delivery's tariff.
     *
     * @return int|float
     */
    public function tariff();

    /**
     * Get delivery's estimated days.
     *
     * @return string|null
     */
    public function estimatedDays();
}
