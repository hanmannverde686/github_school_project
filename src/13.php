  <?php
   function getRandomNumber($min,$max) {
       $num = rand($min,$max);
       return $num;
   }
   echo getRandomNumber(10,20);
?>