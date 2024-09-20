<?php

use PHPUnit\Framework\TestCase;
use YourVendorName\MigrationGenerator\MigrationGenerator;

class MigrationGeneratorTest extends TestCase
{
    public function test_migration_generation()
    {
        $generator = new MigrationGenerator();
        $this->expectOutputString('Generating migration...');
        $generator->generate();
    }
}
