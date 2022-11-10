<?php
declare(strict_types=1);

namespace Application\Form;

class FormEntity {
  private int $id;
  public string $form_key;
  public string $form_title;

  public function getId(): int
  {
    return $this->id;
  }

  public function getKey(): string
  {
    return $this->form_key;
  }

  public function getTitle(): string
  {
    return $this->form_title;
  }
}
