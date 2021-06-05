<?php
function FizzBuzz($Fizz,$Buzz):void{
  if(!preg_match('/^[0-9]+$/', $Fizz)  || !preg_match('/^[0-9]+$/', $Buzz)){
    echo '整数値を入力してください。';
    return;
  } else {
     for ($i = 1;$i < 100;$i++) {
        if ($i % $Fizz == 0) echo 'Fizz '.$i.'<br>';
        if ($i % $Buzz == 0) echo 'Buzz '.$i.'<br>';
        if ($i % $Fizz == 0 && $i % $Buzz == 0) echo 'FizzBuzz '.$i.'<br>';
     }
   }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <title>MISSION2</title>
</head>

<body>
  <form method="POST" action="mission2.php">
    FizzNum: <input type="text" name="FizzNum" size="25" placeholder="整数値を入力してください" /><br>
    BuzzNum: <input type="text" name="BuzzNum" size="25" placeholder="整数値を入力してください" /><br>
    <input type="submit" name="exe" value="実行" />
  </form>
  <br>【出力】<br>
  <?php
  if(isset($_POST['exe'])){
    FizzBuzz($_POST['FizzNum'], $_POST['BuzzNum']);
  }
  ?>
</body>

</html>