<?php
declare(strict_types=1);

namespace Application\List;

class FormListEntity
{
    public int $id;
    public string $field_key;
    public string $field_label;
    public string $field_type;
    public ?string $field_default_value;
    public ?string $list_column;
    public ?string $list_label;

    public function getId(): int
    {
        return $this->id;
    }

    public function getKey(): string
    {
        return $this->field_key;
    }

    public function getLabel(): string
    {
        return $this->field_label;
    }

    public function getType(): string
    {
        return $this->field_type;
    }

    public function getDefaultValue(): ?string
    {
        return $this->field_default_value;
    }

    public function getListColumn(): ?string
    {
        return $this->list_column;
    }

    public function getListLabel(): ?string
    {
        return $this->list_label;
    }
}
