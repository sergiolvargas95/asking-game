<?php
/**
 * This class will perform the comparison between the correct answer and the player's choice.
 * If the answer is correct add and a period and return to the main index.php file;
 * Otherwise the game ends.
 */

class Answer {
    public function  __construct($option, $answer) {
        $this->option = $option;
        $this->answer = $answer;
        if($option === $answer) {
            $_SESSION['puntaje'] = $_SESSION['puntaje'] + 1;
            echo($_SESSION['puntaje']);
            header("Location:index.php");
        } else {
            header("Location: lost.php");
        }
    }
}