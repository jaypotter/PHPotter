<?php

namespace Potter\Connection;

interface ConnectionInterface
{
    
    public function connect(): void;
    
    public function connected(): bool;
    
    public function disconnect(): void;
    
}
