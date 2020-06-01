<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        $post = new Post();
        $post->detail = 'ที่พักที่นี่สวยมากๆเลยครับทำให้ผมต้องนึกย้อนไปสมัยตอนที่ผมอยู่มัธยมที่เชียงใหม่
                         ตั้งแต่มาเรียนกรุงเทพก็แทบจะไม่ได้กลับไปเที่ยวเชียงใหม่เลยครับถ้าใครกำลังมองหา
                         ที่พักที่บรรยากาศดี โรแมนติก ผมขอคอนเฟิร์มที่นี่ครับ ว่าม่อนฟินจะไม่ทำให้ผิดหวัง';

        $post->view_count = 3499;
        $post->user_id = 2;
        $post->image = '/storage/images/reviews/3.jpg';
        $post->save();

        $post = new Post();
        $post->detail = 'คนเราเกิดมามีชีวิตทั้งที ผมคิดว่าเราไม่ควรพลาดเลยครับ เพราะปีนี้เป็นหน้าหนาวที่ดีสำหรับผมมากจริงๆครับ';

        $post->view_count = 2600;
        $post->user_id = 3;
        $post->image = '/storage/images/reviews/4.jpg';
        $post->save();

        $post = new Post();
        $post->detail = 'ต้องกลับไปอีกแน่นอนครับ เวลาผิงไฟผมรู้สึกอบอุ่นหัวใจที่สุดเลยครับ';

        $post->view_count = 5000;
        $post->user_id = 4;
        $post->image = '/storage/images/reviews/6.jpg';
        $post->save();

        $post = new Post();
        $post->detail = 'ผมอยากบอกทุกคนว่าผมรักเชียงใหม่ ผมรักม่อนฟิน';

        $post->view_count = 950;
        $post->user_id = 5;
        $post->image = '/storage/images/reviews/5.jpg';
        $post->save();

        $post = new Post();
        $post->detail = 'หนูรักที่นี้ หนูรักม่อนฟินนน ฟินที่สุดเลยยย';

        $post->view_count = 1577;
        $post->user_id = 6;
        $post->image = '/storage/images/reviews/7.jpg';
        $post->save();

        factory(Post::class, 5)->create();

        
    }
}
