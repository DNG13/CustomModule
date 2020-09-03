<?php

namespace Rd\CustomModule\Model;

use Magento\Framework\Model\AbstractModel;

class User extends AbstractModel
{
    public function execute()
    {
        $user = $this->userFactory->create();
        $user->setData('first_name', 'Stas');

        $firstName = $user->getData('first_name');
    }
}