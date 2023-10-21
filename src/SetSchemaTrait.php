<?php

namespace GustavoSantarosa\SetSchemaTrait;

trait SetSchemaTrait
{
    /**
     * Initialize the Set Schema trait for an instance.
     *
     * @return void
     */
    public function initializeSetSchemaTrait()
    {
        $this->setSchema();
    }

    public function setSchema()
    {
        $this->setTable(strtolower(explode('\\', static::class)[3]) . '.' . $this->getTable());
    }
}
