<?php for ($i=0; $i <= 20; $i++) : ?>
<?php switch($i): ?>
<?php case ($i % 3) : ?>
<p><?php echo $i ?> - Fizz</p>
<hr>
<?php break; ?>

<?php case ($i % 5) : ?>
<p><?php echo $i ?> - Buzz</p>
<hr>
<?php break; ?>
<?php case ($i % 3 && $i % 5) : ?>
<p><?php echo $i ?> - FizzBuzz</p>
<hr>
<?php break; ?>
<?php default : ?>
<p><?php echo $i ?></p>
<hr>
<?php endswitch ?>


<?php endfor ?>