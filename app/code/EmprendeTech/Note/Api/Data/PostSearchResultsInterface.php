<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace EmprendeTech\Note\Api\Data;

interface PostSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Post list.
     * @return \EmprendeTech\Note\Api\Data\PostInterface[]
     */
    public function getItems();

    /**
     * Set title list.
     * @param \EmprendeTech\Note\Api\Data\PostInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

