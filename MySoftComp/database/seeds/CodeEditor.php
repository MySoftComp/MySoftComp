<?php

use Illuminate\Database\Seeder;

class CodeEditor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id = 1
        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'Sublime Text',
            'description' => 'Sublime Text is built from custom components, providing for unmatched responsiveness. From a powerful, 
            custom cross-platform UI toolkit, to an unmatched syntax highlighting engine, Sublime Text sets the bar for performance.',
            'price' => 1164960,
            'file_size' => 27,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Trialware',
            'imagedir'=> 'sublime.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'Atom',
            'description' => 'Atom is the invention of GitHub’s greatest minds',
            'price' => 0,
            'file_size' => 140,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Free',
            'imagedir' => 'atom.png'
        ]);

        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'Visual Studio Code',
            'description' => 'Visual Studio Code is a Microsoft-powered platform for developers. The application is thus very lightweight and does not consume much of the RAM and promotes fast access and implementation.',
            'price' => 0,
            'file_size' => 3000,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Free',
            'imagedir' => 'vscode.png'
        ]);

        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'jEdit',
            'description' => 'jEdit is a mature programmers text editor with hundreds (counting the time developing plugins) of person-years of development behind it.',
            'price' => 0,
            'file_size' => 4,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Free',
            'imagedir' => 'jedit.png'
        ]);

        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'Coffee Cup',
            'description' => 'CoffeeCup is a lightweight text editor which supports HTML/CSS programming.',
            'price' => 713538,
            'file_size' => 87,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Trialware',
            'imagedir' => 'coffeecup.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'Notepad++',
            'description' => 'Notepad++ is a free, open source application for writing text. A powerful editor full of options, Notepad++ is ideal for programming as well as normal text. Notepad++ works with tabs, so it\'s very easy to work with multiple files open at the same time.',
            'price' => 0,
            'file_size' => 4,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Free',
            'imagedir' => 'notepad.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'Android SDK',
            'description' => 'The Android SDK gives mobile software developers the chance to play around with the new platform. It contains everything you need to start building applications with this programming language, as well as a fully functional device emulator for testing them out when you\'ve finished.',
            'price' => 0,
            'file_size' => 145,
            'platform' => 'Windows, Mac OS X',
            'platform_count' => 2,
            'license' => 'Free',
            'imagedir' => 'androidsdk.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'Visual Studio Professional 2015',
            'description' => 'Professional developer tools and services for individual developers or small teams.',
            'price' => 17056974,
            'file_size' => 3,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Purchase',
            'imagedir' => 'VisualStudioProfessional2015.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'BlueJ',
            'description' => 'BlueJ is an integrated Java development environment developed specifically for introductory programming learning and teaching. It is ideal for small-scale development. BlueJ offers a very easy-to-use and highly interactive interface that allows the interactive creation and invocation of objects.',
            'price' => 0,
            'file_size' => 8,
            'platform' => 'Windows, Mac OS X',
            'platform_count' => 2,
            'license' => 'Free',
            'imagedir' => 'bluej.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'Eclipse Classic (32 bit)',
            'description' => 'Eclipse Classic (32 bit) includes tools made to give developers the freedom of choice in a multi-language, multi-platform, and multi-vendor environment. Eclipse provides a plug-in based framework that makes it easier to create, integrate, and utilize software tools, saving time and money. ',
            'price' => 0,
            'file_size' => 184,
            'platform' => 'Windows, Mac OS X',
            'platform_count' => 2,
            'license' => 'Free',
            'imagedir' => 'eclipseclassic.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'NetBeans IDE',
            'description' => 'The NetBeans IDE is free, Open-Source Integrated Development Environment for software developers. The IDE runs on many platforms including Windows, Linux, Solaris, and the MacOS. It is easy to install and use straight out of the box. The NetBeans IDE provides developers with all the tools they need to create professional cross-platform desktop, enterprise, web and mobile applications.',
            'price' => 0,
            'file_size' => 162,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Free',
            'imagedir' => 'netbeanside.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'Code::Blocks',
            'description' => 'Code::Blocks is a free C, C++ and Fortran IDE built to meet the most demanding needs of its users. It is designed to be very extensible and fully configurable.',
            'price' => 0,
            'file_size' => 80,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Free',
            'imagedir' => 'codeblock.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'SciTE',
            'description' => 'SciTE is a SCIntilla based Text Editor. Originally built to demonstrate Scintilla, it has grown to be a generally useful editor with facilities for building and running programs. It is best used for jobs with simple configurations used it for building test and demonstration programs as well as SciTE and Scintilla, themselves. SciTE is currently available for Intel Win32 and Linux compatible operating systems with GTK+.',
            'price' => 0,
            'file_size' => 2,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Free',
            'imagedir' => 'scite.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 1,
            'name' => 'PilotEdit ',
            'description' => 'PilotEdit is a powerful file editor capable of editing huge files larger than 400GB (40 billion lines). PilotEdit provides the ability to edit, download, upload, sort and compare huge files. PilotEdit works on both 32-bit and 64-bit Windows Operating System.',
            'price' => 142260,
            'file_size' => 24,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Trialware',
            'imagedir' => 'pilotedit.png',
        ]);
    }
}
