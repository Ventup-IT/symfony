<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Messenger\Tests\Fixtures;

/**
 * Used whenever a test needs to show a message handler with a class description.
 */
class DummyCommandWithDescriptionHandler
{
    public function __invoke(DummyCommandWithDescription $command)
    {
    }
}
