<table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Classes</th>
      <th scope="col">RoomNo.</th>
      <th scope="col">Title</th>
      <th scope="col">Capicity </th>
      <th scope="col">Desk</th>
   
    </tr>
  </thead>
  <tbody>
      <h3>Rooms</h3>
    <tr>
      <th scope="row">10th</th>
      <td><?php echo $school['Classes']['10th']['Rooms']['0']['RoomNo'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['0']['Title'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['0']['Capicity'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['0']['Desk'] ?></td>
    </tr>
    <tr>
    <th scope="row">10th</th>
      <td><?php echo $school['Classes']['10th']['Rooms']['1']['RoomNo'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['1']['Title'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['1']['Capicity'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['1']['Desk'] ?></td>
    </tr>
   </tbody>
</table>
<h3>Subjects</h3>
<table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Subjects</th>
      <th scope="col">Teacher</th>
      <th scope="col">Time </th>
      <th scope="col">RoomNo.</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $school ['Classes']['10th']['Subjects']['0']['Name'] ?></th>
     <td><?php echo $school ['Classes']['10th']['Subjects']['0']['Teacher']  ?></td>
      <td><?php echo $school ['Classes']['10th']['Subjects']['0']['Time']  ?></td>
      <td><?php echo $school ['Classes']['10th']['Subjects']['0']['RoomNo'] ?></td>
    </tr>
    <tr>
    <th scope="row">10th</th>
      <td><?php echo $school['Classes']['10th']['Rooms']['1']['RoomNo'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['1']['Title'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['1']['Capicity'] ?></td>
      <td><?php echo $school['Classes']['10th']['Rooms']['1']['Desk'] ?></td>
    </tr>
   </tbody>
</table>
