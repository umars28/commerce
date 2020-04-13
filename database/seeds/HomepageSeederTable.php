<?php

use Illuminate\Database\Seeder;
use App\Model\Media;
use App\Model\Homepages;

class HomepageSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Homepages::create([
            'title' => 'ayo brlanja',
            'subtitle' => 'ayo lagi',
            'description' => 'cmon',
            'button_text' => 'shop',
            'content_type' => 'MAIN_CONTENT'
        ]);

        \App\Model\Media::create([
            'file_name' => 'main-content-placeholder.png',
            'file_type' => '.png',
            'media_type' => 'IMAGE',
            'alt' => 'main-content-placeholder',
            'file_size' => 12
        ]);
    }
}
