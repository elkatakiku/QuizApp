<?php

namespace App\Services;

use App\Models\Quiz;
use App\Repository\QuizRepository;

class QuizService {

    private QuizRepository $quizRepository;

    public function __construct(QuizRepository $quizRepository)
    {
        $this->quizRepository = $quizRepository;
    }

    public function createQuiz(array $details) : Quiz {

        return $this->quizRepository->create($details);

    }

}
