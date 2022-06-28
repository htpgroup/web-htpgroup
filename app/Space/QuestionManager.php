<?php

namespace App\Space;

use App\Models\Choice\Choice;
use App\Models\Choice\Question;

class QuestionManager
{
    public function put($questionIdOrText, array $choicesText)
    {
        $question = null;

        // Attempt to find question
        if (is_numeric($questionIdOrText)) {
            $question = Question::FindOrFail($questionIdOrText);
        } else {
            $question = Question::where('text', $questionIdOrText)->first();
        }

        // Create question if it does not exist
        if (! $question) {
            $question = new Question;
            $question->text = $questionIdOrText;
            $question->save();
        }

        // Load in question choices
        $question->load('choices');

        // Delete choices with text not in choicesText array
        $choicesToDelete = $question->choices()->whereNotIn('text', $choicesTexts)->get();
        foreach ($choicesToDelete as $choiceToDelete) {
            $choiceToDelete->delete();
        }

        // Create any choices from choicesText array that do not already exist
        foreach ($choicesTexts as $choicesText) {
            $choice = $question->choices()->where('text', $choicesText)->first();

            if ($choice) {
                continue;
            }

            $choice = new Choice;
            $choice->question_id = $question->id;
            $choice->text = $choicesText;
            $choice->save();
        }
    }
}
