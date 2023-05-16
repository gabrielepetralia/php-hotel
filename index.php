<?php
$hotels = [
  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <title>PHP Hotel</title>
</head>

<body class="bg-dark">
  <div class="container my-5">
    <div class="gp-wrapper border shadow-white rounded-4 p-4">

      <h1 class="text-white text-center py-4">Hotel Boolean</h1>

      <table class="table p-4">
        <thead>
          <tr>
            <?php foreach ($hotels[0] as $key => $value) : ?>
              <th scope="col" class="text-white p-3"><?php echo strtoupper($key) ?></th>
            <?php endforeach ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($hotels as $hotel) : ?>
            <tr>
              <?php foreach ($hotel as $key => $value) : ?>
                <td class="text-white p-3">
                  <?php if($key === "parking") {
                    echo $value ? "Parcheggio disponibile" : "Parcheggio non disponibile";
                  } else {
                    echo $value;
                  } ?>
                </td>
              <?php endforeach ?>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>

    </div>
  </div>
</body>

</html>