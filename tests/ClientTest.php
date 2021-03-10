<?php

/*
 * This file is part of the Pushok package.
 *
 * (c) Arthur Edamov <edamov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pushok\Tests;

use PHPUnit\Framework\TestCase;
use Pushok\AuthProvider\Certificate;
use Pushok\Client;
use Pushok\Notification;

class ClientTest extends TestCase
{
    public function testAmountOfAddedMessages()
    {
        $authProvider = $this->createMock(Certificate::class);
        $notification = $this->createMock(Notification::class);

        $client = new Client($authProvider, $production = false);
        $client->addNotification($notification);

        $this->assertEquals(1, count($client->getNotifications()));
    }
}
