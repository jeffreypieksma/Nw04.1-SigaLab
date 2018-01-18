<?php

use Illuminate\Database\Seeder;
use App\Workshop;
class WorkshopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workshop = new Workshop();
        $workshop->name = 'Artemis';
        $workshop->description = 'lorem ipsum dolar sit amet';
        $workshop->length = '12';
        $workshop->participants = '12';
        $workshop->application = 'Training workshop';
        $workshop->imageUrl = 'storage/uploads/workshops/ab00OQZXM6NRStKcNVAT72I6dvjny2DzM8K3ZnR8.png';
        $workshop->save();

        $workshop = new Workshop();
        $workshop->name = 'Team Up';
        $workshop->description = 'lorem ipsum dolar sit amet';
        $workshop->length = '12';
        $workshop->participants = '12';
        $workshop->application = 'Training workshop';
        $workshop->imageUrl = 'storage/uploads/workshops/ab00OQZXM6NRStKcNVAT72I6dvjny2DzM8K3ZnR8.png';
        $workshop->save();

        $workshop = new Workshop();
        $workshop->name = 'Capture';
        $workshop->description = 'lorem ipsum dolar sit amet';
        $workshop->length = '12';
        $workshop->participants = '12';
        $workshop->application = 'Training workshop';
        $workshop->imageUrl = 'storage/uploads/workshops/ab00OQZXM6NRStKcNVAT72I6dvjny2DzM8K3ZnR8.png';
        $workshop->save();

        $workshop = new Workshop();
        $workshop->name = 'ARRA';
        $workshop->description = 'lorem ipsum dolar sit amet';
        $workshop->length = '12';
        $workshop->participants = '12';
        $workshop->application = 'Training workshop';
        $workshop->imageUrl = 'storage/uploads/workshops/ab00OQZXM6NRStKcNVAT72I6dvjny2DzM8K3ZnR8.png';
        $workshop->save();

        $workshop = new Workshop();
        $workshop->name = 'Keep Talking';
        $workshop->description = 'lorem ipsum dolar sit amet';
        $workshop->length = '12';
        $workshop->participants = '12';
        $workshop->application = 'Training workshop';
        $workshop->imageUrl = 'storage/uploads/worksjops/ab00OQZXM6NRStKcNVAT72I6dvjny2DzM8K3ZnR8.png';
        $workshop->save();
    }
}
