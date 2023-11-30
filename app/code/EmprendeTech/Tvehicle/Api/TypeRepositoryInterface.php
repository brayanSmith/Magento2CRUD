<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace EmprendeTech\Tvehicle\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface TypeRepositoryInterface
{

    /**
     * Save Type
     * @param \EmprendeTech\Tvehicle\Api\Data\TypeInterface $type
     * @return \EmprendeTech\Tvehicle\Api\Data\TypeInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \EmprendeTech\Tvehicle\Api\Data\TypeInterface $type
    );

    /**
     * Retrieve Type
     * @param string $typeId
     * @return \EmprendeTech\Tvehicle\Api\Data\TypeInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($typeId);

    /**
     * Retrieve Type matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \EmprendeTech\Tvehicle\Api\Data\TypeSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Type
     * @param \EmprendeTech\Tvehicle\Api\Data\TypeInterface $type
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \EmprendeTech\Tvehicle\Api\Data\TypeInterface $type
    );

    /**
     * Delete Type by ID
     * @param string $typeId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($typeId);
}

