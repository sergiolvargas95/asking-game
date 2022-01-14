<?php include_once("includes/header.php")?>
<?php include_once("includes/classes/Question.php"); ?>
<?php include_once("includes/classes/Answer.php"); ?>
<?php include_once("includes/classes/Db.php"); ?>
<?php

/**
 * this is our main file where we will call our classes.
 * We will also present all the important information of
 * the questions and send the selected answer.
 */

    $level = $_SESSION['puntaje'];              //user data
    $randomNumber = rand(0, 4);                 //random number to choose the question
    $questionData = new Question($level, $randomNumber);

    $posibleAnswers = $questionData->getAnswers();
    shuffle($posibleAnswers);

    if($_GET) {
        $option = $_GET['send'];
        $answer = $_GET['answer'];
        $correctAnswer = new Answer($option, $answer);
    }

    if($_SESSION['puntaje'] == 5) {
        header("Location: win.php");
    }
?>
<div class="finish--button">
    <!-- button to end the game -->
    <input type="button" onclick="location='final.php'" value="Finaliza el juego"/>
</div>
        <div class="Header">
            <div class="Category" id="Category">
                <?php echo $questionData->getCategory(); ?>
            </div>
            <div class="Question" id="Question">
                <?php echo $questionData->getQuestion(); ?>
            </div>
            <img id="Image" class="Header-image" src="<?php echo $questionData->getImage(); ?>" alt="Image">
        </div>
        <div class="Btn-container">
            <!-- response options -->
            <div class="Btn-container__left">
                <a class="btn" href="?send=<?php echo $posibleAnswers[0]; ?>&answer=<?php echo $questionData->getCorrectAnswer(); ?>" class="btn"><?php echo $posibleAnswers[0]; ?></a>
                <a class="btn" href="?send=<?php echo $posibleAnswers[1]; ?>&answer=<?php echo $questionData->getCorrectAnswer(); ?>" class="btn"><?php echo $posibleAnswers[1]; ?></a>
            </div>
            <div class="Btn-container__right">
                <a class="btn" href="?send=<?php echo $posibleAnswers[2]; ?>&answer=<?php echo $questionData->getCorrectAnswer(); ?>" class="btn"><?php echo $posibleAnswers[2]; ?></a>
                <a class="btn" href="?send=<?php echo $posibleAnswers[3]; ?>&answer=<?php echo $questionData->getCorrectAnswer(); ?>" class="btn"><?php echo $posibleAnswers[3]; ?></a>
            </div>
        </div>
<?php include_once("includes/footer.php")?>

