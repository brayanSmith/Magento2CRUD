<?php declare(strict_types= 1);

namespace MageMastery\Popup\Model;

use MageMastery\Popup\Api\Data\PopupInterface;
use MageMastery\Popup\Model\ResourceModel\Popup as PopupResource;
use Magento\Framework\Model\AbstractModel;

Class Popup extends AbstractModel implements PopupInterface
{
    private const POPUP_ID = 'popup_id';
    private const NAME = 'name';
    private const CONTENT = 'content';
    private const IS_ACTIVE = 'is_active';
    private const CREATED_AT = 'created_at';
    private const UPDATED_AT = 'updated_at';
    private const TIMEOUT = 'timeout';


    protected function _construct()
    {
        $this->_eventPrefix = 'magemastery_popup';
        $this->_eventObject = 'popup';
        $this->_idFieldName = 'popup_id';
        $this->_init(PopupResource::class);
    }

    public function getPopupId(): int
    {
        return (int) $this->getData(self::POPUP_ID);
    }
    public function setPopupId(int $popupId)
    {
        $this->setData(self::POPUP_ID, $popupId);
    }
    public function getName(): string
    {
        return (string) $this->getData(self::NAME);
    }
    public function setName(string $name)
    {
        $this->setData(self::NAME, $name);
    }
    public function getContent(): string
    {
        return (string) $this->getData(self::CONTENT);
    }
    public function setContent(string $content)
    {
        $this->setData(self::CONTENT, $content);
    }
    public function getCreatedAt(): string
    {
        return (string) $this->getData(self::CREATED_AT);
    }
    public function setCreatedAt(string $createdAt)
    {
        $this->setData(self::CREATED_AT, $createdAt);

    }
    public function getUpdatedAt(): string
    {
        return (string) $this->getData(self::UPDATED_AT);
    }
    public function setUpdatedAt(string $updatedAt)
    {
        $this->setData(self::UPDATED_AT, $updatedAt);

    }
    public function getTimeout(): int
    {
        return (int) $this->getData(self::TIMEOUT);

    }
    public function setTimeout(int $timeOut)
    {
        $this->setData(self::TIMEOUT, $timeOut);

    }
    public function getIsActive(): bool
    {
        return (bool) $this->getData(self::IS_ACTIVE);
    }
    public function setIsActive(bool $isActive)
    {
        $this->setData(self::IS_ACTIVE, $isActive);
    }
}
