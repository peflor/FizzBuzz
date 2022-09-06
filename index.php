
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

//  ----- Version allégée ----------
for ($i=0; $i <= 100; $i++) {
    if (($i % 3 === 0) && ($i % 5 === 0)) {
      echo " $i - FizzBuzz <br>";
      } else if ($i % 3 === 0) {
        echo " $i - Fizz <br>";
        } else if ($i % 5 === 0) {
          echo " $i - Buzz <br>";
          } else {
            echo " " . $i . " <br>";
          }
  }
  
  //   version impaire

for ($i=0; $i <= 100; $i++) {
    if (($i % 2 !== 0)) {
      echo " $i - FizzBuzz <br>";
    } else {
    echo " " . $i . " <br>";
    }
  }

  var_dump('test');