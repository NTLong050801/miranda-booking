<?php

namespace Botble\Hotel\Repositories\Interfaces;

use Botble\Support\Repositories\Interfaces\RepositoryInterface;

interface CurrencyInterface extends RepositoryInterface
{
    public function getAllCurrencies();
}
