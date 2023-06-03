<?php

namespace Potter\Database;

abstract class AbstractDatabase implements DatabaseInterface
{
    
    abstract public function writable(): bool;
    
}
