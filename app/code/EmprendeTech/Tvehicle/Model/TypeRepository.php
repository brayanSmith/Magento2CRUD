<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace EmprendeTech\Tvehicle\Model;

use EmprendeTech\Tvehicle\Api\TypeRepositoryInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use EmprendeTech\Tvehicle\Api\Data\TypeInterface;
use EmprendeTech\Tvehicle\Api\Data\TypeInterfaceFactory;
use EmprendeTech\Tvehicle\Api\Data\TypeSearchResultsInterfaceFactory;
use EmprendeTech\Tvehicle\Api\DataRepositoryInterface;
use EmprendeTech\Tvehicle\Model\ResourceModel\Type as ResourceType;
use EmprendeTech\Tvehicle\Model\ResourceModel\Type\CollectionFactory as TypeCollectionFactory;

class TypeRepository implements TypeRepositoryInterface
{

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var Type
     */
    protected $searchResultsFactory;

    /**
     * @var TypeInterfaceFactory
     */
    protected $typeFactory;

    /**
     * @var TypeCollectionFactory
     */
    protected $typeCollectionFactory;

    /**
     * @var ResourceType
     */
    protected $resource;


    /**
     * @param ResourceType $resource
     * @param TypeInterfaceFactory $typeFactory
     * @param TypeCollectionFactory $typeCollectionFactory
     * @param TypeSearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourceType                      $resource,
        TypeInterfaceFactory              $typeFactory,
        TypeCollectionFactory             $typeCollectionFactory,
        TypeSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface      $collectionProcessor
    )
    {
        $this->resource = $resource;
        $this->typeFactory = $typeFactory;
        $this->typeCollectionFactory = $typeCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(TypeInterface $type)
    {
        try {
            $this->resource->save($type);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the type: %1',
                $exception->getMessage()
            ));
        }
        return $type;
    }

    /**
     * @inheritDoc
     */
    public function get($typeId)
    {
        $post = $this->typeFactory->create();
        $this->resource->load($type, $typeId);
        if (!$post->getId()) {
            throw new NoSuchEntityException(__('Type with id "%1" does not exist.', $typeId));
        }
        return $type;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    )
    {
        $collection = $this->typeCollectionFactory->create();

        $this->collectionProcessor->process($criteria, $collection);

        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);

        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }

        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(TypeInterface $type)
    {
        try {
            $typeModel = $this->typeFactory->create();
            $this->resource->load($typeModel, $type->getTypeId());
            $this->resource->delete($typeModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Type: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($typeId)
    {
        return $this->delete($this->get($typeId));
    }
}

