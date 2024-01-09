<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $projects =
        [
            [
                'title'=> 'Progetto Marvel',
                'description'=>'Tutti gli eroi Marvel in un app',


            ],
            [
                'title'=> 'Progetto Colors',
                'description'=>'Migliaia di colori da scoprire',


            ],
            [
                'title'=> 'Progetto Navi',
                'description'=>'Sei un appassionato di navi, scopri tutte le caratteristiche',


            ],
            [
                'title'=> 'Progetto Football Team',
                'description'=>'Scopri le statistiche aggiornate sui tuoi campioni preferiti',


            ]

        ];

        $types = Type::all();
        $ids = $types->pluck('id');

        foreach ($projects as $project) {
            $new_project = new Project();

            $new_project->title = $project['title'];
            $new_project->description = $project['description'];
            $new_project->type_id = $ids->random();


            $new_project->save();

        }
    }
}

