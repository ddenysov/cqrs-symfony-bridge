<?php

namespace Ddenysov\CQRS\Bridge\Symfony\Query;

use Ddenysov\CQRS\Query\Query;
use Ddenysov\CQRS\Query\QueryBus as QueryBusInterface;
use Ddenysov\CQRS\Query\QueryResult;
use Ddenysov\CQRS\Query\QueryResultSingle;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;

class QueryBus implements QueryBusInterface
{
    use HandleTrait;

    /**
     * @param MessageBusInterface $messageBus 1
     */
    public function __construct(private readonly MessageBusInterface $messageBus)
    {
    }

    /**
     * @param Query $query
     * @return QueryResult
     */
    public function send(Query $query): QueryResult
    {
        return new QueryResultSingle($this->handle($query));
    }
}