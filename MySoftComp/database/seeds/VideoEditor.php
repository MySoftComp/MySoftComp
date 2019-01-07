<?php

use Illuminate\Database\Seeder;

class VideoEditor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id = 3
//        DB::table('software')->insert([
//            'category_id' => 3,
//            'name' => '',
//            'description' => '',
//            'price' => 0,
//            'file_size' => 0,
//            'platform' => '',
//            'platform_count' => 0,
//            'license' => '',
//            'imagedir'=> '',
//        ]);
        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'AVS Video Editor',
            'description' => 'AVS Video Editor is a video editing software published by Online Media Technologies Ltd. It is a part of AVS4YOU software suite which includes video, audio, image editing and conversion, disk editing and burning, document conversion and registry cleaner programs',
            'price' => 849305,
            'file_size' => 138,
            'platform' => 'Windows 10, Windows 8.1, Windows 8, Windows 7, Windows XP, Windows 2003, Vista',
            'platform_count' => 7,
            'license' => 'Trialware',
            'imagedir' => 'avs.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'Sony Vegas Pro',
            'description' => 'Vegas Pro (also stylized as VEGAS Pro) is a video editing software package for non-linear editing (NLE) originally published by Sonic Foundry, then by Sony Creative Software, and now by Magix',
            'price' => 4304104,
            'file_size' => 500,
            'platform' => 'Windows 10, Windows 8.1, Windows 8, Windows 7',
            'platform_count' => 4,
            'license' => 'Purchase',
            'imagedir' => 'sonyvegas.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'Corel VideoStudio',
            'description' => 'Corel VideoStudio (formerly Ulead VideoStudio) is a video editing software package for Microsoft Windows distributed by Ulead Systems (a division of Corel).',
            'price' => 1151456,
            'file_size' => 3000,
            'platform' => 'Windows 10, Windows 8, Windows 7',
            'platform_count' => 3,
            'license' => 'Purchase',
            'imagedir' => 'corelstudio.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'Adobe Premiere Pro',
            'description' => 'Adobe Premiere Pro is a timeline-based video editing app developed by Adobe Systems and published as part of the Adobe Creative Cloud licensing program.',
            'price' => 305971,
            'file_size' => 1000,
            'platform' => 'Windows 10, Windows 8, Windows 7, Mac OS X',
            'platform_count' => 4,
            'license' => 'Trialware',
            'imagedir' => 'premiere.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'Wondershare Filmora',
            'description' => 'Filmora is an all-in-one home video editing production software that has powerful functionality and a fully stacked feature set. Filmora is a solid app that gives you the features and styles that have been previously only available to professional film makers that have a certain level of experience and the expensive applications to match.',
            'price' => 863556,
            'file_size' => 670,
            'platform' => 'Windows 10, Windows 8, Windows 7, Mac OS X',
            'platform_count' => 4,
            'license' => 'Trialware',
            'imagedir' => 'filmora.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'ShotCut',
            'description' => 'Shotcut is a free, open-source video editor and encoder that can handle a wide range of media formats. It has many user-friendly features; for example, it doesn\'t notify you of its frequent (almost daily) updates: You simply download an updated version of the program when you want to. It\'s compatible with JACK Audio and Melted Server technology, and it even offers an experimental GPU Processing feature. Shotcut can test MLT XML files, too. Several language options are available, and users can create and share new translations. The project\'s Web site also offers a forum, FAQs, ',
            'price' => 0,
            'file_size' => 261,
            'platform' => 'Windows,Mac OS X',
            'platform_count' => 2,
            'license' => 'Free',
            'imagedir' => 'shotcut.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'Camtasia',
            'description' => 'Camtasia empowers you to make amazing videos--even if you\'ve never made one before. Record a video of your screen or bring in your own video footage. Then, use Camtasia\'s drag-and-drop editor to easily create remarkable videos you can share with anyone. Keep your audience engaged by adding eye-catching animations, music, and captions in record time. With Camtasia, you\'ll be able to produce stunning videos without being a professional video editor.',
            'price' => 3542274,
            'file_size' => 224,
            'platform' => 'Windows,Mac OS X',
            'platform_count' => 2,
            'license' => 'Trialware',
            'imagedir' => 'camptasia.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'Lightworks',
            'description' => '',
            'price' => 355507,
            'file_size' => 80,
            'platform' => 'Windows,Mac OS X',
            'platform_count' => 2,
            'license' => 'Purchase',
            'imagedir' => 'lightworks.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'VSDC Free Video Editor',
            'description' => '',
            'price' => 0,
            'file_size' => 0,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Free',
            'imagedir' => 'lightworks.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 3,
            'name' => 'VirtualDub',
            'description' => 'VirtualDub is a video capture and processing utility licensed under the GNU General Public License (GPL). It is designed to be a general utility that can trim and clean up video before exporting to tape or processing with another program. It does not possess the editing power of a general-purpose editor such as Adobe Premiere, but is streamlined for fast linear operations over video. VirtualDub has batch-processing capabilities for processing large numbers of files, which you can extend with third-party video filters. VirtualDub is best at processing AVI files, although it can read (not write) MPEG-1 and handle BMP image sets.',
            'price' => 0,
            'file_size' => 2,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Free',
            'imagedir' => 'virtualdub.png',
        ]);

    }
}
