<?php

namespace Potter\Connection;

abstract class AbstractConnection
{
    
    abstract public function connect(): void;
    
    abstract public function connected(): bool;
    
    abstract public function disconnect(): void;
    
}
