<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10th class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
<table class="table">
  <thead class="thead-dark">
    <tr>
      
      <h3 class ="btn btn-warning">Rooms</h3>
      <th scope="col">RoomNo.</th>
      <th scope="col">Title</th>
      <th scope="col">Capicity </th>
      <th scope="col">Desk</th>
   
    </tr>
  </thead>
  <tbody>
      
    <tr>
     
      <td><?php echo $school['Classes']['10th']['Rooms']['0']['RoomNo'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['0']['Title'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['0']['Capicity'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['0']['Desk'] ?></td>
    </tr>
    <tr>
   
      <td><?php echo $school['Classes']['10th']['Rooms']['1']['RoomNo'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['1']['Title'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['1']['Capicity'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['1']['Desk'] ?></td>
    </tr>
   </tbody>
</table>

</body>
</html>
