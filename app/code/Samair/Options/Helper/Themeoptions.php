<?php


namespace Samair\Options\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Themeoptions extends AbstractHelper
{

    public function getconfig($config_path)
    {
        return $this->scopeConfig->getValue($config_path,\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
