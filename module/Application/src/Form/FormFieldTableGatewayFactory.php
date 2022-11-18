<?php

namespace Application\Form;

use Laminas\Db\ResultSet\HydratingResultSet;
use Laminas\Hydrator\ObjectPropertyHydrator;
use Psr\Container\ContainerInterface;

class FormFieldTableGatewayFactory
{
  public function __invoke(ContainerInterface $container)
  {
    return new FormFieldTableGateway('core_form_field', $container->get('api'), null, $this->getResultSetPrototype($container));
  }

  private function getResultSetPrototype(ContainerInterface $container)
  {
    $hydrators = $container->get('HydratorManager');
    $hydrator = $hydrators->get(ObjectPropertyHydrator::class);
    return new HydratingResultSet($hydrator, new FormFieldEntity());
  }
}
