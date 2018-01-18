<?php

use Illuminate\Database\Seeder;
use App\Competence;
class CompetenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $competence = new Competence();
        $competence->name = 'Samenwerking';
        $competence->description = 'lorem ipsum dolar sit amet';
        $competence->imageUrl = 'imageUrl';
        $competence->save();

        $competence = new Competence();
        $competence->name = 'Leiderschap';
        $competence->description = 'lorem ipsum dolar sit amet';
        $competence->imageUrl = 'imageUrl';
        $competence->save();

        $competence = new Competence();
        $competence->name = 'Communicatie';
        $competence->description = 'lorem ipsum dolar sit amet';
        $competence->imageUrl = 'imageUrl';
        $competence->save();

        $competence = new Competence();
        $competence->name = 'Projectleiding';
        $competence->description = 'lorem ipsum dolar sit amet';
        $competence->imageUrl = 'imageUrl';
        $competence->save();
    }
}
