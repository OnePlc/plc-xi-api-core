<?php
declare(strict_types=1);

namespace Application\Form;

class FormService
{
  public function __construct(
      private readonly FormTableGateway $formTable
  )
  {

  }

  public function getForm(string $formKey): FormEntity
  {
    return $this->formTable->getForm($formKey);
  }
}
