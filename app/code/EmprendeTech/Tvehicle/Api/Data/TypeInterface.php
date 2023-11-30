<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace EmprendeTech\Tvehicle\Api\Data;

interface TypeInterface
{

    const TYPE_ID = 'type_id';
    const DESCRIPTION = 'description';
    const IS_ACTIVE = 'is_active';
    const CREATED_AT = 'created_at';

    /**
     * Get type_id
     * @return string|null
     */
    public function getTypeId();

    /**
     * Set type_id
     * @param string $typeId
     * @return \EmprendeTech\Tvehicle\Type\Api\Data\TypeInterface
     */
    public function setTypeId($typeId);

    /**
     * Get description
     * @return string|null
     */
    public function getDescription();

    /**
     * Set description
     * @param string $description
     * @return \EmprendeTech\Tvehicle\Type\Api\Data\TypeInterface
     */
    public function setDescription($description);

    /**
     * Get is_active
     * @return string|null
     */
    public function getIsActive();

    /**
     * Set is_active
     * @param string $content
     * @return \EmprendeTech\Tvehicle\Type\Api\Data\TypeInterface
     */
    public function setIsActive($content);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \EmprendeTech\Tvehicle\Type\Api\Data\TypeInterface
     */
    public function setCreatedAt($createdAt);
}

