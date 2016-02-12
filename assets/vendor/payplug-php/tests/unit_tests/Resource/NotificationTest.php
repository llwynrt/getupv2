<?php
namespace Payplug\Resource;

/**
 * @group unit
 * @group ci
 * @group recommended
 */
class NotificationTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateNotificationFromAttributes()
    {
        $notification = Notification::fromAttributes(array(
            'url'               => 'https://www.example.net/payplug_notification.html',
            'response_code'     => 200
        ));

        $this->assertEquals('https://www.example.net/payplug_notification.html', $notification->url);
        $this->assertEquals(200, $notification->response_code);
    }
}
