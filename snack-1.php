<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$matches = [
  [
    'homeTeam' => 'Virtus Bologna',
    'homeScore' => 62,
    'guestTeam' => 'Milano',
    'guestScore' => 66
  ],
  [
    'homeTeam' => 'Varese',
    'homeScore' => 57,
    'guestTeam' => 'Brescia',
    'guestScore' => 72
  ],
  [
    'homeTeam' => 'Derthona',
    'homeScore' => 78,
    'guestTeam' => 'Brindisi',
    'guestScore' => 87
  ],
  [
    'homeTeam' => 'Venezia',
    'homeScore' => 88,
    'guestTeam' => 'Cremona',
    'guestScore' => 71
  ]
  ];
?>

<ul>
  <?php
    for ($i = 0; $i < count($matches); $i++) {
      $match = $matches[$i];
    ?>
    <li>
      <?php
        echo "{$match['homeTeam']} - {$match['guestTeam']}";
      ?>
      |
      <?php
        echo "{$match['homeScore']}-{$match['guestScore']}";
      ?>
    </li>
    <?php
    }
  ?>
</ul>