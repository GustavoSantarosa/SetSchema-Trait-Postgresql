<?php

namespace GustavoSantarosa\SetSchemaTrait;

trait SetSchemaTrait
{
    public function initializeTraits()
    {
        $this->setSchema();
    }

    public function setSchema()
    {
        $this->setTable(strtolower(explode('\\', static::class)[3]).'.'.$this->getTable());
    }
}
