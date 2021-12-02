<?php

declare(strict_types=1);

namespace Stwarog\FuelFixtures\Events;

/**
 * Class ModelPersisted
 * Should be dispatched in PersistenceContract > persist
 */
final class BeforePersisted
{
    public const NAME = 'model.before.persisted';

    private object $model;

    public function __construct(object $model)
    {
        $this->model = $model;
    }

    public function getModel(): object
    {
        return $this->model;
    }
}
