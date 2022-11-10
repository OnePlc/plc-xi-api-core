<?php

namespace Application\Form;

use Laminas\Db\ResultSet\HydratingResultSet;
use Laminas\Db\TableGateway\TableGateway;

class FormTableGateway extends TableGateway
{
  public function getForm(string $formKey): ?FormEntity
  {
      $form = $this->select(['form_key' => $formKey])?->current();
      return $form ?: null;
  }
}
