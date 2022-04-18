<!--Variables-->

<?php
$firstname = 'Anaïs';
$age = 27 ;
$eyes = 'green';
$family = array (
    'mum'=>'Pascale',
    'sister'=>'Elisa',
    'grand-mother'=>'Alberte',
    'grand-mother2'=>'Patricia',
    'aunt'=>'Nathalie'
);
$hungry = "yes"
?>

<!--Exercices-->

<p>Hi! My name is <?php echo ($firstname); ?>! </p>

<p>I'm <?php echo ($age);?> years old. </p>

<p> My eyes are <?php echo ($eyes); ?> !</p>

<p>In my family there are :</p> <?php echo "<pre>"; print_r ($family); echo"</pre>" ?>

<p> The first person in my family is <?php echo ($family['mum']); ?> </p>

<p> Am I hungry? <?php echo ($hungry) ?> </p>

