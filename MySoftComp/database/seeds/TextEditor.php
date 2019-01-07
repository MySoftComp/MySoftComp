<?php

use Illuminate\Database\Seeder;

class TextEditor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id = 2
//        DB::table('software')->insert([
//            'category_id' => 2,
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
            'category_id' => 2,
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
            'category_id' => 2,
            'name' => 'LibreOffice',
            'description' => 'LibreOffice is an open-source personal productivity suite that gives you six feature rich applications for all your document production and data processing needs, writer, calc, impress, draw, math, and base. Support and documentation is free.',
            'price' => 0,
            'file_size' => 140,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Free',
            'imagedir' => 'libreoffice.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 2,
            'name' => 'WPS Office Premium',
            'description' => 'Fully compatible with Microsoft Office, WPS Office comes with Writer, Presentation and Spreadsheets allowing you to open, edit and create almost any document type.',
            'price' => 413710,
            'file_size' => 79,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Trialware',
            'imagedir' => 'wpsoffice.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 2,
            'name' => 'Polaris Office',
            'description' => 'Polaris Office is a free office app with all-in-one feature to view, edit, share, memo and archive all types of documents anytime and anywhere.',
            'price' => 0,
            'file_size' => 75,
            'platform' => 'Windows, Mac OS X, Linux',
            'platform_count' => 3,
            'license' => 'Free',
            'imagedir' => 'polarisoffice.png',
        ]);

        DB::table('software')->insert([
            'category_id' => 2,
            'name' => 'iWork',
            'description' => 'iWork, Apple productivity suite, is the easiest way to create great-looking documents, spreadsheets, and presentations. iWork is compatible with Microsoft Office, so sharing your work is even easier.',
            'price' => 0,
            'file_size' => 302,
            'platform' => 'iOS, Mac OS X',
            'platform_count' => 2,
            'license' => 'Free',
            'imagedir' => 'iwork.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 2,
            'name' => 'Nevron Writer',
            'description' => 'Nevron Text Editor is an alternative word processing program that includes all of the features you\'d expect from top-of-the-line software. Its interface will be familiar to anyone who has used a word processor before, and it supports multiple file formats to ensure compatibility with almost all types of documents',
            'price' => 0,
            'file_size' => 20,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Trialware',
            'imagedir'=> 'nevron_writer.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 2,
            'name' => 'Microsoft Word 2016',
            'description' => 'Microsoft Word 2016 is the word-processing portion of Microsoft\'s newly updated Microsoft Office suite of productivity programs. It provides several new features and improvements to existing features. Most notably, it allows users to view and edit PDF documents as if they had natively been made in Word itself. ',
            'price' => 1586105,
            'file_size' => 700,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Purchase',
            'imagedir'=> 'microsoft_word2016.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 2,
            'name' => 'Soft Marker Free Office',
            'description' => 'SoftMaker FreeOffice can be used in the event that the user wishes to update current software or if the original Microsoft product key has been lost. It offers many similar functions such as word processing and editing. However, one of its main advantages is that files can be shared with Microsoft Office users without needing to export them first. ',
            'price' => 0,
            'file_size' => 1,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Free',
            'imagedir'=> 'softmarker_freeoffice.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 2,
            'name' => 'Zoho Docs',
            'description' => 'Zoho Docs is an online document management application for individuals and businesses. The mobile App lets you do the following:- Add files into Zoho Docs from other storage sources- Create and edit documents- Deliver amazing presentations right from your device- Copy, move, and tag files on the go- Share your files and folders with colleagues. Set permission to view, comment or edit- Always find the right file using the powerful content search- Store files offline',
            'price' => 0,
            'file_size' => 58,
            'platform' => 'Mac OS X',
            'platform_count' => 1,
            'license' => 'Free',
            'imagedir'=> 'zohodocs.jpg',
        ]);
        DB::table('software')->insert([
            'category_id' => 2,
            'name' => 'AbiWord',
            'description' => 'AbiWord is an open-source word processing program that gives you the freedom to create and share documents, as well as open documents created in other programs. No matter what type of word processor you\'re used to, you\'ll feel right at home with this intuitive program.',
            'price' => 0,
            'file_size' => 8,
            'platform' => 'Windows, Mac OSX',
            'platform_count' => 2,
            'license' => 'Free',
            'imagedir'=> 'abiword.png',
        ]);
    }
}
