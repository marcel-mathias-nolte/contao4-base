<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace MarcelMathiasNolte\SkeletonBundle\Tests;

use MarcelMathiasNolte\SkeletonBundle\ContaoSkeletonBundle;
use PHPUnit\Framework\TestCase;

class SkeletonBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new SkeletonBundle();

        $this->assertInstanceOf('MarcelMathiasNolte\SkeletonBundle\ContaoSkeletonBundle', $bundle);
    }
}
