<?php declare(strict_types=1);

namespace MageMastery\Popup\Model\ResourceModel\Popup;

use MageMastery\Popup\Model\Popup;
use MageMastery\Popup\Model\ResourceModel\Popup as PopupResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Popup::class,PopupResource::class);
    }
}
