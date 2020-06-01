<?php

use Illuminate\Database\Seeder;
use App\RoomCategory;
use App\Room;

class RoomCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roomcat = new RoomCategory();
        $roomcat->name = 'Tent Rooms';
        $roomcat->price = '700';
        $roomcat->image = '/storage/images/room/room3.jpg';
        $roomcat->save();

        for($i = 1; $i <= 5; $i++) {
            $room = new Room;
            $room->name = 'AT' . $i;
            $room->room_category_id = $roomcat->id;
            $room->zone = 'A';
            $room->save();
        }

        for($i = 1; $i <= 5; $i++) {
            $room = new Room;
            $room->name = 'BT' . $i;
            $room->room_category_id = $roomcat->id;
            $room->zone = 'B';
            $room->save();
        }

        $roomcat = new RoomCategory();
        $roomcat->name = 'A-Frame House';
        $roomcat->price = '1500';
        $roomcat->image = '/storage/images/room/room1.jpg';
        $roomcat->save();

        for($i = 1; $i <= 5; $i++) {
            $room = new Room;
            $room->name = 'AAF' . $i;
            $room->room_category_id = $roomcat->id;
            $room->zone = 'A';
            $room->save();
        }

        for($i = 1; $i <= 5; $i++) {
            $room = new Room;
            $room->name = 'BAF' . $i;
            $room->room_category_id = $roomcat->id;
            $room->zone = 'B';
            $room->save();
        }

        $roomcat = new RoomCategory();
        $roomcat->name = 'B-Frame House';
        $roomcat->price = '2500';
        $roomcat->image = '/storage/images/room/room2.jpg';
        $roomcat->save();

        for($i = 1; $i <= 5; $i++) {
            $room = new Room;
            $room->name = 'ABF' . $i;
            $room->room_category_id = $roomcat->id;
            $room->zone = 'A';
            $room->save();
        }

        for($i = 1; $i <= 5; $i++) {
            $room = new Room;
            $room->name = 'BBF' . $i;
            $room->room_category_id = $roomcat->id;
            $room->zone = 'B';
            $room->save();
        }


    }
}
