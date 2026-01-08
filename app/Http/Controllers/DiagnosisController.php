<?php

namespace App\Http\Controllers;

use App\Services\QuestionService;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function quiz()
    {
        $questions = QuestionService::getQuestions();
        return view('quiz', compact('questions'));
    }

    public function analyze(Request $request)
    {
        // Expect 'answers' to be an array of QuestionID => DiseaseCode or just an array of codes
        $data = $request->validate([
            'answers' => 'required|array',
        ]);

        $answers = $data['answers'];
        // Count scores
        $scores = [
            'D' => 0,
            'M' => 0,
            'T' => 0,
            'C' => 0,
            'L' => 0,
        ];

        // Assuming answers is keyed by question ID, logic is simpler if we just iterate values
        foreach ($answers as $code) {
            if (isset($scores[$code])) {
                $scores[$code]++;
            }
        }

        // Logic (Forward Chaining / Max Score)
        $maxScore = -1;
        foreach ($scores as $code => $score) {
            if ($score > $maxScore) {
                $maxScore = $score;
            }
        }

        $maxDiseases = [];
        foreach ($scores as $code => $score) {
            if ($score === $maxScore) {
                $maxDiseases[] = $code;
            }
        }

        // Tie-breaker Priority: D > L > M > T > C
        $priorityOrder = ['D', 'L', 'M', 'T', 'C'];
        $topDisease = null;

        if (count($maxDiseases) > 1) {
            foreach ($priorityOrder as $pCode) {
                if (in_array($pCode, $maxDiseases)) {
                    $topDisease = $pCode;
                    break;
                }
            }
        } else {
            $topDisease = $maxDiseases[0] ?? 'D';
        }

        $diseaseDetails = QuestionService::getDiseases()[$topDisease];
        $totalScore = array_sum($scores);
        $certaintyFactor = $totalScore > 0 ? round(($scores[$topDisease] / $totalScore) * 100) : 0;

        return view('result', [
            'disease' => $diseaseDetails,
            'scores' => $scores,
            'topDiseaseCode' => $topDisease,
            'certaintyFactor' => $certaintyFactor,
            'allDiseases' => QuestionService::getDiseases()
        ]);
    }
}
