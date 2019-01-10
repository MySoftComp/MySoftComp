<?php
use Illuminate\Database\Seeder;
class AudioEditor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id = 4
        // 'Free','Trialware', dan 'Purchase' ya
        DB::table('software')->insert([
            'category_id' => 4,
            'name' => 'Audacity',
            'description' => 'Audacity is an open source, cross-platform audio editor and recorder. Audacity can record and play sounds and import and export WAV, AIFF, MP3, and OGG files. Edit your sounds using cut, copy, and paste features (with unlimited undo functionality), mix tracks, or apply effects to your recordings. Audacity also has a built-in amplitude-envelope editor, a customizable spectrogram mode, and a frequency-analysis window for audio-analysis applications.',
            'price' => 0,
            'file_size' => 26,
            'platform' => 'Windows,Mac OS X',
            'platform_count' => 2,
            'license' => 'Free',
            'imagedir'=> 'Audacity.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 4,
            'name' => 'Podium',
            'description' => 'Podium is an object based project structure allows for advanced media and device management. Feature highlights: Hierarchic track layout, integrated sound editor, surround sound, spline curve automation, 64-bit mixing, multiprocessing, and a stylish and customizable user interface. Features include object based project structure, customizable user interface, hierarchic engine, recording and editing, audio bounce tracks, VST plug-ins, external hardware devices, mixer busses, and multi-channel audio.',
            'price' => 707102,
            'file_size' => 16,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Trialware',
            'imagedir'=> 'Podium.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 4,
            'name' => 'ocenaudio',
            'description' => 'ocenaudio is a cross-platform, easy to use, fast and functional audio editor. It is the ideal software for people who need to edit and analyze audio files without complications. ocenaudio also has powerful features that will please more advanced users. This software is based on Ocen Framework, a powerful library developed to simplify and standardize the development of audio manipulation and analysis applications across multiple platforms.',
            'price' => 0,
            'file_size' => 32,
            'platform' => 'Windows,Mac OS X',
            'platform_count' => 2,
            'license' => 'Free',
            'imagedir'=> 'ocenaudio.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 4,
            'name' => 'FL Studio',
            'description' => 'With a new name and a new interface, FL Studio is reestablishing its place as a full-featured and affordable audio-production program. Competition in the world of all-in-one music-creation suites has grown considerably since Fruity Loops first started breaking beats.',
            'price' => 1414063,
            'file_size' => 703,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Trialware',
            'imagedir'=> 'FLStudio.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 4,
            'name' => 'Sound Forge Pro 12',
            'description' => 'Sound Forge Pro 12 is the ideal audio editor for creative artists, producers, and sound designers. The Sound Forge audio engine has been further developed and ensures ultra-precise results for dedicated audio editing. The new 64-bit Sound Forge Pro enables you to harness the full power of your PC for all audio editing tasks. Record multichannel audio simultaneously on up to 32 channels and in 64-bit/192 kHz resolution. For editing, restoration and mastering tasks, effortlessly remove noise with integrated restoration effects. Shape your project\'s sound with sophisticated mastering tools by iZotope and the transparent audio engine. Create broadcast-ready productions and gold-standard masters.',
            'price' => 5642678,
            'file_size' => 5,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Free',
            'imagedir'=> 'SOundForge.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 4,
            'name' => 'REAPER',
            'description' => 'Reaper is a sensible Windows application designed for the recording, arrangement, editing, mixing and rendering of audio. Reaper provides a flexible but easy to use interface that is equally suited to amateurs and professionals alike. Reaper works with almost any hardware and can be used in combination with a vast universe of other software and plug-ins.',
            'price' => 3181962,
            'file_size' => 8,
            'platform' => 'Windows,Mac OS X',
            'platform_count' => 2,
            'license' => 'Trialware',
            'imagedir'=> 'Reaper.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 4,
            'name' => 'Ableton Live',
            'description' => 'Ableton Live is the only solution designed for each stage of the musical process, from creation to production to performance. In the creative stage, Live is transparent, intuitive and responsive, capturing inspiration and encouraging the flow of musical ideas. During production, Live provides all of the professional tools and studio compatibility required to complete and perfect projects. On stage, Live delivers the expressive control and stability that innumerable performing artists have come to rely on. Live 5 from inspiration to studio to stage. Create. Produce. Perform.',
            'price' => 7056883,
            'file_size' => 79,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Trialware',
            'imagedir'=> 'AbletonLive.png',
        ]);
//        DB::table('software')->insert([
//            'category_id' => 4,
//            'name' => 'DJ Audio Editor',
//            'description' => 'DJ Audio Editor easy-to-use and well-organized audio editing software will let you explore and edit favorite songs and sounds in ways which you would never have imagined. You can add or detract hundreds of audio effects to your sound files, even create and save your own presets. Manipulate and enhance multi audio files with cut, join and trim functions simultaneously. Record audio from various inputs and save to all popular audio formats. Rip audio CD and convert to an audio file, also edit audio tag and update song information easily.',
//            'price' => 423556,
//            'file_size' => 31,
//            'platform' => 'Windows',
//            'platform_count' => 1,
//            'license' => 'Trialware',
//            'imagedir'=> '',
//
//        ]);
        DB::table('software')->insert([
            'category_id' => 4,
            'name' => 'Audiotool',
            'description' => 'Audiotool allows you to create music tracks in the cloud with your favorite gear. Audiotool also features 24/7 Autotool radio with music made in the Audiotools suite. Record, sample, and collaborate on your own tracks or with friends.',
            'price' => 0,
            'file_size' => 1,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Free',
            'imagedir'=> 'AudioTool.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 4,
            'name' => 'Wavepad',
            'description' => 'Audacity is an open source, cross-platform audio editor and recorder. Audacity can record and play sounds and import and export WAV, AIFF, MP3, and OGG files. Edit your sounds using cut, copy, and paste features (with unlimited undo functionality), mix tracks, or apply effects to your recordings. Audacity also has a built-in amplitude-envelope editor, a customizable spectrogram mode, and a frequency-analysis window for audio-analysis applications.',
            'price' => 0,
            'file_size' => 2,
            'platform' => 'Windows,Mac OS X',
            'platform_count' => 2,
            'license' => 'Free',
            'imagedir'=> 'Wavepad.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 4,
            'name' => 'Wavosaur',
            'description' => 'Wavosaur is a audio editor, it\'s ASIO and VST compatible. You can perform audio editing in a fast and efficient way, record from your soundcard inputs, edit and process your audio files. Wavosaur can import wav, mp3, aiff, 8svx and raw binary files. Basic features: cut, copy, paste, mix, trim/crop, normalize, fade in/out, mute, change volume, invert, vocal remover, channel convert, resample, pitch shift. Advanced features: loop points support, markers, analysis tools: 2D & 3D frequency spectrum, statistics, sonogram, and snthesis generators. Wavosaur provides a virtual rack for VST plugins effects, you can set up a chain of VST effects, tweak and listen to your processed audio in real time.Wavosaur provides also a batch processor. It can also be controlled by a MIDI control surface. The development is active and many features will be added in the next releases.',
            'price' => 0,
            'file_size' => 1,
            'platform' => 'Windows',
            'platform_count' => 1,
            'license' => 'Free',
            'imagedir'=> 'Wavosaur.png',
        ]);
        DB::table('software')->insert([
            'category_id' => 4,
            'name' => 'QTractor',
            'description' => 'Qtractor is an Audio/MIDI multi-track sequencer application written in C++ around the Qt4 toolkit. The target platform will be Linux, where the Jack Audio Connection Kit (JACK) for audio, and the Advanced Linux Sound Architecture (ALSA) for MIDI.',
            'price' => 0,
            'file_size' => 2,
            'platform' => 'Linux',
            'platform_count' => 1,
            'license' => 'Free',
            'imagedir'=> 'QTractor.png',
        ]);
    }
}