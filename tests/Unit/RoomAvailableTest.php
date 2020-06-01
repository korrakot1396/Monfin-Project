<?php

namespace Tests\Unit;

use App\Detail;
use App\Room;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoomAvailableTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $room = factory(Room::class)->create(
            [
                'room_category_id' => 1,
                'name' => 'TEST',
                'zone' => 'TEST',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        $room->details()->save(
            factory(Detail::class)->make([
                'user_id' => 1,
                'earnest_price' => 0,
                'price_room' => '0',
                'status' => 'test',
                'checkin_date' => '2019-10-19',
                'checkout_date' => '2019-10-24'
            ])
        );

        $this->assertTrue($room->isAvailable('2019-10-16', '2019-10-19'));
        $this->assertTrue($room->isAvailable('2019-10-24', '2019-10-26'));
        $this->assertFalse($room->isAvailable('2019-10-19', '2019-10-24'));
        $this->assertFalse($room->isAvailable('2019-10-20', '2019-10-24'));
        $this->assertFalse($room->isAvailable('2019-10-19', '2019-10-23'));
        $this->assertFalse($room->isAvailable('2019-10-20', '2019-10-23'));
        $this->assertFalse($room->isAvailable('2019-10-16', '2019-10-20'));
        $this->assertFalse($room->isAvailable('2019-10-23', '2019-10-26'));
        $room->delete();

    }
}
