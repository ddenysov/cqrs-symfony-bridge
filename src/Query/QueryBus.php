<?php

namespace Ddenysov\CQRS\Bridge\Symfony\Query;

use Ddenysov\CQRS\Query\Query;
use Ddenysov\CQRS\Query\QueryBus as QueryBusInterface;
use Ddenysov\CQRS\Query\QueryResult;

class QueryBus implements QueryBusInterface
{
    public function send(Query $query): QueryResult
    {
        // TODO: Implement execute() method.
    }

}