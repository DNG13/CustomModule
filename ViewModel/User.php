<?php

namespace Rd\CustomModule\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class User implements ArgumentInterface
{
    public function getFirstName(): string
    {
        return '$this->user->getFisrtName()';
    }
}