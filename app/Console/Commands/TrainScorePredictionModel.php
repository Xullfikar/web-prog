<?php

namespace App\Console\Commands;

use Faker\Factory;
use Illuminate\Console\Command;
use Phpml\Classification\Ensemble\RandomForest;
use Phpml\ModelManager;

class TrainScorePredictionModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'student-score-prediction:train';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Train student score prediction model';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $faker = Factory::create();
        $attributes = [];
        $labels = [];

        for($i = 0;$i<200;$i++){
            $attendence = $faker->numberBetween(40,100);
            $assigment = $faker->numberBetween(40,100);
            $mid_exam = $faker->numberBetween(40,100);
            $final_exam = $faker->numberBetween(40,100);

            $attributes[] = [
                $attendence, $assigment, $mid_exam, $final_exam
            ];

            $avg = ($assigment + $mid_exam + $final_exam) / 3;

            $status =$attendence < 85 || $avg < 75;

            $labels[] = $status ? 1 : 0;
        }

        $classifier = new RandomForest(10);
        $classifier->train($attributes, $labels);

        $manager = new ModelManager();
        $manager->saveToFile(
            $classifier,
            storage_path('app/train_model/student_classier_model.phpml')
        );

        $this->info("model training success");
    }
}
