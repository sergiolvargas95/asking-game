<?php
/**
 * This class receives the questions that come from the questions.json file,
 * and stores them in the "question" variable, from here we can obtain each
 * question and send it to our index.php file when requested.
 */
class Question {
    private $question;

    public function __construct($level, $randomNumber) {
        $this->level = $level;
        $this->randomNumber = $randomNumber;
        $data = file_get_contents("questions.json");
        $interpreter = json_decode($data, true);
        $this->question = $interpreter[$level][$randomNumber];
    }

    public function getQuestion() {
        return $this->question['question'];
    }

    public function getCategory() {
        return $this->question['category'];
    }

    public function getImage() {
        return $this->question['image'];
    }

    public function getCorrectAnswer() {
        return $this->question['answer'];
    }

    public function getAnswers() {
        $answers = array(
                        $this->question['choice_4'],
                        $this->question['choice_1'],
                        $this->question['choice_2'],
                        $this->question['choice_3']
                    );
        return $answers;
    }

}