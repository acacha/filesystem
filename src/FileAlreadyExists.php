<?php

namespace Acacha\Filesystem;

/**
 * Class FileAlreadyExists.
 *
 * @package Acacha\Filesystem\Filesystem
 */
class FileAlreadyExists extends \Exception
{
    /**
     * FileAlreadyExists constructor.
     */
    public function __construct()
    {
        parent::__construct('File already exists');
    }
}
