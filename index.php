
<!-- FizzBuzz avec IF -->

<?php for ($i=0; $i <= 20; $i++){
    if ($i % 3 == 0) {        
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo $i . " - FizzBuzz <hr>";
        }else{
            echo $i . " - Fizz <hr>";
        }

    }else if ($i % 5 == 0) {
        if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i . " - FizzBuzz <hr>";
        }else{
            echo $i . " - Buzz <hr>";
        }
    }else{
        echo $i . "<hr>";
    }
}
