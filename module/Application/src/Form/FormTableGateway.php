<?php

namespace Application\Form;

use Laminas\Db\Sql\Select;
use Laminas\Db\TableGateway\TableGateway;

class FormTableGateway extends TableGateway
{
  public function getForm(string $formKey): FormEntity
  {

  }
}
