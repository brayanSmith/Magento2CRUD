<?php declare(strict_types= 1);

namespace MageMastery\Popup\Api\Data;

interface PopupInterface
{
    public function getPopupId(): int;
    public function setPopupId(int $popupId);
    public function getName(): string;
    public function setName(string $name);
    public function getContent(): string;
    public function setContent(string $content);
    public function getCreatedAt(): string;
    public function setCreatedAt(string $createdAt);
    public function getUpdatedAt(): string;
    public function setUpdatedAt(string $updatedAt);
    public function getTimeout(): int;
    public function setTimeout(int $timeOut);
    public function getIsActive(): bool;
    public function setIsActive(bool $isActive);
}

