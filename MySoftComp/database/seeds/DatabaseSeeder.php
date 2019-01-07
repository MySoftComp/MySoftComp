<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(AudioEditor::class);
        $this->call(CodeEditor::class);
        $this->call(GraphicsEditor::class);
        $this->call(VideoEditor::class);
        $this->call(TextEditor::class);

    }
}
