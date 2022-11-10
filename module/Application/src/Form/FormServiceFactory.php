<?php

namespace Application\Form;

use Laminas\Db\ResultSet\HydratingResultSet;
use Laminas\Hydrator\ObjectPropertyHydrator;
use Psr\Container\ContainerInterface;

class FormServiceFactory
{
  public function __invoke(ContainerInterface $container)
  {
    return new FormService((new FormTableGatewayFactory())->__invoke($container));
  }

  private function getResultSetPrototype(ContainerInterface $container)
  {
    $hydrators = $container->get('HydratorManager');
    $hydrator = $hydrators->get(ObjectPropertyHydrator::class);
    return new HydratingResultSet($hydrator, new FormEntity());
  }
}
