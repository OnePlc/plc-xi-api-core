<?php
declare(strict_types=1);

namespace Application\Form;

use Application\List\FormListTableGateway;

class FormService
{
  public function __construct(
      private readonly FormTableGateway $formTable,
      private readonly FormListTableGateway $listTable,
      private readonly FormFieldTableGateway $fieldTable,
  )
  {

  }

  public function getForm(string $formKey): ?FormEntity
  {
    return $this->formTable->getForm($formKey);
  }

  public function getListColumnsByFormKey(string $formKey, $formatForApi = false): array
  {
      $form = $this->getForm($formKey);
      return $form ? $this->listTable->getListFields($form, $formatForApi) : [];
  }

  public function getFieldsByFormKey(string $formKey, $formatForApi = false): array
  {
      $form = $this->getForm($formKey);
      return $form ? $this->fieldTable->getFormFields($form, $formatForApi) : [];
  }
}
