<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$students = [
  [
    'firstName' => 'Liam',
    'lastName' => 'Miller',
    'votes' => [
      8,
      7,
      6
    ]
  ],
  [
    'firstName' => 'Fiona',
    'lastName' => 'Smith',
    'votes' => [
      5,
      9,
      7
    ]
  ],
  [
    'firstName' => 'Ivor',
    'lastName' => 'Watson',
    'votes' => [
      9,
      10,
      8
    ]
  ]
];
?>

<ul>
  <?php
    for ($i = 0; $i < count($students); $i++) {
      $student = $students[$i];
      $votes = $student['votes'];
    ?>
    <li>
      <?php
        echo "{$student['firstName']} {$student['lastName']}";
      ?>
      -
      <?php
        $votes_sum = 0;
        for ($y = 0; $y < count($votes); $y++) {
          $vote = $votes[$y];
          $votes_sum += $vote;
        }
        echo $votes_sum / 3;
      ?>
    </li>
    <?php
    }
  ?>
</ul>