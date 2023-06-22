<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newProject = new Project();
        $newProject->title = 'Boolflix';
        $newProject->description = 'Creazione layout Netflix';
        $newProject->project_date = '2023-06-20';
        $newProject->programming_languages = 'Vue Js/Laravel';
        $newProject->link = 'https://github.com/Giorgiopri22/vite-boolflix';
        $newProject->save();
    }
}