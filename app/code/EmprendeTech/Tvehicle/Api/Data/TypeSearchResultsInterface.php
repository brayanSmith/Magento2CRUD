<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace EmprendeTech\Tvehicle\Api\Data;

interface TypeSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Type list.
     * @return \EmprendeTech\Tvehicle\Api\Data\TypeInterface[]
     */
    public function getItems();

    /**
     * Set title list.
     * @param \EmprendeTech\Tvehicle\Api\Data\TypeInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

