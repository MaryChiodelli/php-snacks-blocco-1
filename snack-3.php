<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php
$posts = [
  '10-10-2021' => [
    [
      'title' => 'Post 1',
      'author' => 'Charlie Monroe',
      'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptatum laborum dolores rerum dolore blanditiis?'
    ],
    [
      'title' => 'Post 2',
      'author' => 'Louise Beckham',
      'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptatum laborum dolores rerum dolore blanditiis?'
    ]
  ],
  '11-12-2021' => [
    [
      'title' => 'Post 3',
      'author' => 'Harry Manson',
      'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptatum laborum dolores rerum dolore blanditiis?'
    ],
    [
      'title' => 'Post 4',
      'author' => 'Steven Holmes',
      'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptatum laborum dolores rerum dolore blanditiis?'
    ],
    [
      'title' => 'Post 5',
      'author' => 'Loise Adams',
      'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptatum laborum dolores rerum dolore blanditiis?'
    ]
  ]
];

$key_list = array_keys($posts);
?>

<ul>
  <?php
    for ($i = 0; $i < count($posts); $i++) { 
      $key = $key_list[$i];
      $post_list = $posts[$key];
    ?>
    <li>
      <strong>
        <?php
          echo $key;
        ?>
      </strong>
      <?php
        for ($y = 0; $y < count($post_list); $y++) {
          $post = $post_list[$y];
        ?>
          <h3>
            <?php
                echo $post['title'];
            ?>
          </h3>
          <em>
            <?php
              echo $post['author'];
            ?>
          </em>
          <p>
            <?php
              echo $post['content'];
            ?>
          </p>
        <?php
        }
      ?>
    </li>
    <?php
    }
  ?>
</ul>