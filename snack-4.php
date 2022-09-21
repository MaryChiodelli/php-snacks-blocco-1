<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$numbers = [];

while (count($numbers) < 15) {
  $number = rand(10, 50);
  if (!in_array($number, $numbers)) {
    $numbers[] = $number;
  }
}
?>

<ul>
  <?php
    for ($i = 0; $i < count($numbers); $i++) {
      $n = $numbers[$i];
      ?>
      <li>
        <?php
          echo $n;
        ?>
      </li>
      <?php
    } 
  ?>
</ul>