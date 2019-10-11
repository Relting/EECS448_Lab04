<?php

$correct = 0;

if ($_POST["q1"] == "a1") {
$q1 = "Females 100% black, males 25% black / 25% gray";
}
if ($_POST["q1"] == "a2") {
$q1 = "Females 100% black, males 100% gray.";
}
if ($_POST["q1"] == "a3") {
$q1 = "75% black, 25% gray.";
$correct++;
}
if ($_POST["q1"] == "a4") {
$q1 = "50% black, 25% brown / 25% gray";
}

echo "Question 1: When two black cats are bred together, what could you expect the color distribution of the kittens to be? <br>";
echo "You answered: " . $q1 . "<br>";
echo "Correct answer: 75% black, 25% gray. <br><br>";




if ($_POST["q2"] == "a1") {
$q2 = "X-linked.";
$correct++;
}
if ($_POST["q2"] == "a2") {
$q2 = "Y-linked.";
}
if ($_POST["q2"] == "a3") {
$q2 = "Autosomal.";
}
if ($_POST["q2"] == "a4") {
$q2 = "Randomized.";
}

echo "Question 2: The calico coat color gene is: <br>";
echo "You answered: " . $q2 . "<br>";
echo "Correct answer: X-linked. <br><br>";



if ($_POST["q3"] == "a1") {
$q3 = "He is homozygous recessive for dilute.";
}
if ($_POST["q3"] == "a2") {
$q3 = "He is homozygous dominant for dilute.";
}
if ($_POST["q3"] == "a3") {
$q3 = "He is heterozygous for dilute.";
$correct++;
}
if ($_POST["q3"] == "a4") {
$q3 = "His dilute gene is linked to his Y-Chromosome.";
}

echo "Question 3: A kitten is lilac, and her father is brown. What is true about her father? <br>";
echo "You answered: " . $q3 . "<br>";
echo "Correct answer: He is heterozygous for dilute. <br><br>";



if ($_POST["q4"] == "a1") {
$q4 = "Brown.";
}
if ($_POST["q4"] == "a2") {
$q4 = "Tarnish.";
}
if ($_POST["q4"] == "a3") {
$q4 = "Silver.";
}
if ($_POST["q4"] == "a4") {
$q4 = "Blue.";
$correct++;
}

echo "Question 4: Which Bengal coat color is not accepted for show by The International Cat Association? <br>";
echo "You answered: " . $q4 . "<br>";
echo "Correct answer: Blue. <br><br>";


if ($_POST["q5"] == "a1") {
$q5 = "Cheetah.";
}
if ($_POST["q5"] == "a2") {
$q5 = "African Serval.";
$correct++;
}
if ($_POST["q5"] == "a3") {
$q5 = "Asian leopard cat.";
}
if ($_POST["q5"] == "a4") {
$q5 = "Sand cat.";
}

echo "Question 5: A Savannah cat is a cross between a domestic cat and a(n): <br>";
echo "You answered: " . $q5 . "<br>";
echo "Correct answer: African serval. <br><br><br>";

if  ($correct == 0){
$percent = 0;
}
if  ($correct == 1){
$percent = 20;
}
if  ($correct == 2){
$percent = 40;
}
if  ($correct == 3){
$percent = 60;
}
if  ($correct == 4){
$percent = 80;
}
if  ($correct == 5){
$percent = 100;
}
echo "You got " . $correct . " out of 5 questions correct! You earned a " . $percent . " percent.<br>";


?>
