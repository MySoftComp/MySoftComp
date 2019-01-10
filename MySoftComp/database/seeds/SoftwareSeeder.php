<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('software')->insert([
            'category_id' => 'CE001',
            'name' => 'Sublime Text',
            'description' => 'Sublime Text is built from custom components, providing for unmatched responsiveness. From a powerful, custom cross-platform UI toolkit, to an unmatched syntax highlighting engine, Sublime Text sets the bar for performance.',
            'price' => '1164960',
            'file_size' => '27',
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => '3',
            'license' => 'Free to Try',
            'imagedir' => 'sublime.png',
            
        ]);

        DB::table('software')->insert([
            'category_id' => 'CE001',
            'name' => 'Atom',
            'description' => 'Atom is the invention of GitHub’s greatest minds',
            'price' => '0',
            'file_size' => '140',
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => '3',
            'license' => 'Free',
            'imagedir' => 'atom.png',
            
        ]);

        DB::table('software')->insert([
            'category_id' => 'CE001',
            'name' => 'Visual Studio Code',
            'description' => 'Visual Studio Code is a Microsoft-powered platform for developers. The application is thus very lightweight and does not consume much of the RAM and promotes fast access and implementation.',
            'price' => '0',
            'file_size' => '3000',
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => '3',
            'license' => 'Free',
            'imagedir' => 'vscode.png',
            
        ]);

        DB::table('software')->insert([
            'category_id' => 'CE001',
            'name' => 'jEdit',
            'description' => 'jEdit is a mature programmers text editor with hundreds (counting the time developing plugins) of person-years of development behind it.',
            'price' => '0',
            'file_size' => '4',
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => '3',
            'license' => 'Free',
            'imagedir' => 'jedit.png',
            
        ]);

        DB::table('software')->insert([
            'category_id' => 'CE001',
            'name' => 'CoffeeCup',
            'description' => 'CoffeeCup is a lightweight text editor which supports HTML/CSS programming.',
            'price' => '713538',
            'file_size' => '87',
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => '3',
            'license' => 'Free to Try',
            'imagedir' => 'coffeecup.png',
            
        ]);

        DB::table('software')->insert([
            'category_id' => 'TE001',
            'name' => 'Apache OpenOffice',
            'description' => 'Apache OpenOffice is both an open-source product and a project. The product is a multiplatform office productivity suite.',
            'price' => '0',
            'file_size' => '234',
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => '3',
            'license' => 'Free',
            'imagedir' => 'openoffice.png',
            
        ]);

        DB::table('software')->insert([
            'category_id' => 'TE001',
            'name' => 'LibreOffice',
            'description' => 'LibreOffice is an open-source personal productivity suite that gives you six feature rich applications for all your document production and data processing needs, writer, calc, impress, draw, math, and base. Support and documentation is free.',
            'price' => '0',
            'file_size' => '140',
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => '3',
            'license' => 'Free',
            'imagedir' => 'libreoffice.png',
            
        ]);

        DB::table('software')->insert([
            'category_id' => 'TE001',
            'name' => 'WPS Office Premium',
            'description' => 'Fully compatible with Microsoft Office, WPS Office comes with Writer, Presentation and Spreadsheets allowing you to open, edit and create almost any document type.',
            'price' => '413710',
            'file_size' => '79',
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => '3',
            'license' => 'Free to Try',
            'imagedir' => 'wpsoffice.png',
            
        ]);

        DB::table('software')->insert([
            'category_id' => 'TE001',
            'name' => 'Polaris Office',
            'description' => 'Polaris Office is a free office app with all-in-one feature to view, edit, share, memo and archive all types of documents anytime and anywhere.',
            'price' => '0',
            'file_size' => '75',
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => '3',
            'license' => 'Free',
            'imagedir' => 'polarisoffice.png',
            
        ]);

        DB::table('software')->insert([
            'category_id' => 'TE001',
            'name' => 'iWork',
            'description' => 'iWork, Apple productivity suite, is the easiest way to create great-looking documents, spreadsheets, and presentations. iWork is compatible with Microsoft Office, so sharing your work is even easier.',
            'price' => '0',
            'file_size' => '302',
            'platform' => 'iOS, Mac OS X',
            'platform_count' => '2',
            'license' => 'Free',
            'imagedir' => 'iwork.png',
            
        ]);

        DB::table('software')->insert([
            'category_id' => 'VE001',
            'name' => 'AVS Video Editor',
            'description' => 'AVS Video Editor is a video editing software published by Online Media Technologies Ltd. It is a part of AVS4YOU software suite which includes video, audio, image editing and conversion, disk editing and burning, document conversion and registry cleaner programs',
            'price' => '849305',
            'file_size' => '138',
            'platform' => 'Windows 10, Windows 8.1, Windows 8, Windows 7, Windows XP, Windows 2003, Vista',
            'platform_count' => '7',
            'license' => 'Trialware',
            'imagedir' => 'avs.png',
            
        ]);

        DB::table('software')->insert([
            'category_id' => 'VE001',
            'name' => 'Sony Vegas Pro',
            'description' => 'Vegas Pro (also stylized as VEGAS Pro) is a video editing software package for non-linear editing (NLE) originally published by Sonic Foundry, then by Sony Creative Software, and now by Magix',
            'price' => '4304104',
            'file_size' => '500',
            'platform' => 'Windows 10, Windows 8.1, Windows 8, Windows 7',
            'platform_count' => '4',
            'license' => 'Proprietary (Berbayar)',
            'imagedir' => 'sonyvegas.png',
            
        ]);

        DB::table('software')->insert([
            'category_id' => 'VE001',
            'name' => 'Corel VideoStudio',
            'description' => 'Corel VideoStudio (formerly Ulead VideoStudio) is a video editing software package for Microsoft Windows distributed by Ulead Systems (a division of Corel).',
            'price' => '1151456',
            'file_size' => '3000',
            'platform' => 'Windows 10, Windows 8, Windows 7',
            'platform_count' => '3',
            'license' => 'Proprietary (Berbayar)',
            'imagedir' => 'corelstudio.png',
            
        ]);

        DB::table('software')->insert([
            'category_id' => 'VE001',
            'name' => 'Adobe Premiere Pro',
            'description' => 'Adobe Premiere Pro is a timeline-based video editing app developed by Adobe Systems and published as part of the Adobe Creative Cloud licensing program.',
            'price' => '305971',
            'file_size' => '1000',
            'platform' => 'Windows 10, Windows 8, Windows 7, Mac OS X',
            'platform_count' => '4',
            'license' => 'Trialware',
            'imagedir' => 'premiere.png',
            
        ]);

        DB::table('software')->insert([
            'category_id' => 'VE001',
            'name' => 'Wondershare Filmora',
            'description' => 'Filmora is an all-in-one home video editing production software that has powerful functionality and a fully stacked feature set. Filmora is a solid app that gives you the features and styles that have been previously only available to professional film makers that have a certain level of experience and the expensive applications to match.',
            'price' => '863556',
            'file_size' => '670',
            'platform' => 'Windows 10, Windows 8, Windows 7, Mac OS X',
            'platform_count' => '4',
            'license' => 'Trialware',
            'imagedir' => 'filmora.png',

        ]);
    }
}
