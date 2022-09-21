<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
$db = [
  'teachers' => [
    [
      'name' => 'Michele',
      'lastname' => 'Papagni'
    ],
    [
      'name' => 'Fabio',
      'lastname' => 'Forghieri'
    ]
    ],
  'pm' => [
    [
      'name' => 'Roberto',
      'lastname' => 'Marazzini'
    ],
    [
      'name' => 'Federico',
      'lastname' => 'Pellegrini'
    ]
  ]
];

$teachers = $db['teachers'];
$pm = $db['pm'];
?>

<div style="background-color: gray">
  <?php      
    for ($i = 0; $i < count($teachers); $i++) {
      $person = $teachers[$i];
      $full_name = "{$person['name']} {$person['lastname']}";
    ?>
    <div>
      <?php
        echo $full_name;
      ?>
    </div>
    <?php
    }
  ?>
</div>

<div style="background-color: green">
  <?php      
    for ($i = 0; $i < count($pm); $i++) {
      $person = $pm[$i];
      $full_name = "{$person['name']} {$person['lastname']}";
    ?>
    <div>
      <?php
        echo $full_name;
      ?>
    </div>
    <?php
    }
  ?>
</div>