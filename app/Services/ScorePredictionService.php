<?php

namespace App\Services;

use Phpml\ModelManager;

class ScorePredictionService
{
    /**
     * Create a new class instance.
     */

    private $model;

    public function __construct()
    {
        $manager = new ModelManager();
        $this->model = $manager->restoreFromFile(storage_path('app/train_model/student_classier_model.phpml'));
    }

    public function predict(
        int $attendence, int $assigment, int $mid_exam, int $final_exam
    ): bool {
        $result = $this->model->predict(
            [$attendence, $assigment, $mid_exam, $final_exam]
        );

        return (bool) $result;
    }
}
