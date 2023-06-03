<?php

namespace Potter\Connection;

abstract class AbstractConnection implements ConnectionInterface
{
    
    abstract public function connect(): void;
    
    abstract public function connected(): bool;
    
    abstract public function disconnect(): void;
    
}
