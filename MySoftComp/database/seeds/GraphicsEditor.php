<?php

use Illuminate\Database\Seeder;

class GraphicsEditor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 5
        DB::table('software')->insert([
            'category_id' => 5,
            'name' => '3DVIA Shape ',
            'description' => 'Adobe Photoshop Lightroom is a powerful and versatile program for editing and enhancing your photos, as well as compiling them into a slideshow. With an intuitive interface and plenty of built-in tips along the way, this program makes advanced editing features available to all experience levels.',
            'price' => 0,
            'file_size' => 1,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Free',
            'imagedir'=> '3dviashape.png',

        ]);
        DB::table('software')->insert([
            'category_id' => 5,
            'name' => 'LibreCAD',
            'description' => 'LibreCAD is a free Open Source CAD application for Windows. Support and documentation is free from our large, dedicated community of users, contributors, and developers. LibreCAD is a fully comprehensive 2D CAD application that you can download and install for free. It is a 2D CAD drawing tool based on the community edition of QCad LibreCAD has been re-structured and ported to qt4.',
            'price' => 0,
            'file_size' => 12,
            'platform' => 'Windows,Mac OS X',
            'platform_count' => 2,
            'license' => 'Free',
            'imagedir'=> 'librecad.png',

        ]);
        DB::table('software')->insert([
            'category_id' => 5,
            'name' => 'PosteRazor',
            'description' => 'Need to print a large poster but you don\'t have the right printer to do it? PosteRazor for Mac guides you through five quick and easy steps in order to cut the image into several parts and then print them as a multipage PDF file with your normal A4 printer.',
            'price' => 0,
            'file_size' => 2,
            'platform' => 'Windows,Mac OS X',
            'platform_count' => 2,
            'license' => 'Free',
            'imagedir'=> 'posterazor.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 5,
            'name' => 'Inkscape',
            'description' => 'Inkscape is an Open Source vector graphics editor, with capabilities similar to Illustrator, Freehand, CorelDraw, or Xara X using the W3C standard Scalable Vector Graphics (SVG) file format.',
            'price' => 0,
            'file_size' => 82,
            'platform' => 'Windows,Mac OS X',
            'platform_count' => 2,
            'license' => 'Free',
            'imagedir'=> 'linkscape.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 5,
            'name' => 'GIMP',
            'description' => 'GIMP (GNU Image Manipulation Program) is a freely distributed piece of software suitable for such tasks as photo retouching, image composition, and image authoring. It is a powerful piece of software with capabilities not found in any other free software product. ',
            'price' => 0,
            'file_size' => 190,
            'platform' => 'Windows,Mac OS X',
            'platform_count' => 2,
            'license' => 'Free',
            'imagedir'=> 'gimp.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 5,
            'name' => 'Artweaver',
            'description' => 'Artweaver is a program to simulate natural brush tools. It is therefore suitable to leave your creativity free run. Artweaver functions realistic imitation of brushes, chalks, and charcoals, detailed adjustment possibilities for altering existing brushes and creating new custom brushes, common image processing tools like gradient, crop, fill, and selection tools, supports file formats like AWD (Artweaver), BMP, GIF, JPEG, PCX, TGA, TIFF, and PNG, transparency and layers, large number of filters like sharpen, soften, emboss, and mosaic. ',
            'price' => 0,
            'file_size' => 12,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Free',
            'imagedir'=> 'artweaver.png',

        ]);
        DB::table('software')->insert([
            'category_id' => 5,
            'name' => 'CyberLink PhotoDirector',
            'description' => 'Photo editing doesn\'t have to be daunting. PhotoDirector features a wide range of easy-to-use, professional-quality tools built specifically for turning your photos into stunning artworks no matter how you shoot. Whether you\'re working with the latest 360 or DSLR camera, or just a simple point-and-shoot device, PhotoDirector is the definitive creative photo editing solution.',
            'price' => 995677,
            'file_size' => 2,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Trialware',
            'imagedir'=> 'cyberlinkphotodirector.png',

        ]);
        DB::table('software')->insert([
            'category_id' => 5,
            'name' => 'Capture One Pro for Mac',
            'description' => 'Capture One is a raw converter and digital photo workflow software which enables photographers to reduce the time and effort required to deliver stunning ready-to-use images with excellent color and detail. Capture One is designed to create the best image quality in the market and holds a series of easy-to-use tools created to match the professional photographer\'s daily workflow.',
            'price' => 4253574,
            'file_size' => 310,
            'platform' => 'Windows,Mac OS X',
            'platform_count' => 2,
            'license' => 'Trialware',
            'imagedir'=> 'captureoneproformac.png',
        ]);
        DB::table('software')->insert([

            'category_id' => 5,
            'name' => 'Pixlr',
            'description' => 'Pixlr tools provide more control over your photo editing process. Add focus to your photos and emphasize exactly what you want.Add effects like crosshatch, halftone, and dapple with a single click. Your options are limitless with hundreds of effects, overlays, stickers, and borders to choose from - experiment with different effect combinations and amaze yourself with the stunning art you create.',
            'price' => 0,
            'file_size' => 25,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Free',
            'imagedir'=> 'pixlr.png',

        ]);
        DB::table('software')->insert([
            'category_id' => 5,
            'name' => 'DxO Optics Pro',
            'description' => 'DxO Optics Pro is automatic image enhancement software for professional and enthusiastic amateur photographers, capable of handling JPEG as well as RAW files. DxO Optics Pro will meet your needs for outstanding image quality and productivity.',
            'price' => 2404194,
            'file_size' => 0,
            'platform' => 'Windows,Mac OS X',
            'platform_count' => 2,
            'license' => 'Trialware',
            'imagedir'=> 'dxoopticspro.png',
        ]);
    }
}
