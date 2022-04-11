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
  <?php
  $school=[
    'Classes'=>[
      '10th' =>
                [
                    'Rooms' => [
                        ['RoomNo' => '11', 'Title' => '10th', 'Capicity' => '30', 'Desk' => '15',],
                        ['RoomNo' => '13', 'Title' => 'Computer Lab', 'Capicity' => '40', 'Desk' => '40',],
                    ],
                    'Subjects' => [
                        ['Name' => 'Science', 'Teacher' => 'Rajeev Kumar', 'Time' => '9:30am-10:10am', 'RoomNo' => '11'],
                        ['Name' => 'Hindi', 'Teacher' => 'Santosh',  'Time' => '10:10am-10:50am', 'RoomNo' => '11'],
                        ['Namet' => 'Social science', 'Teacher' => 'Gopal', 'Time' => '10:50am-11:30am', 'RomNo' => '11'],
                        ['Name' => 'Maths', 'Teacher' => 'Lekhraj', 'Time' => '11:30am-12:10pm', 'RoomNo' => '11'],
                        ['Name' => 'Sanskrit', 'Teacher' => 'Palak Rana', 'Time' => '12:10pm-12:50am', 'RoomNo' => '11'],
                        ['Name' => 'English', 'Teacher' => 'Sunita Kumar', 'Time' => '1:30pm-2:10pm', 'RoomNo' => '11'],
                        ['Name' => ' Computer science', 'Teacher' => 'Nitesh Kumar', 'Time' => '2:10pm-3:00', 'RomNo' => '13'],
                    ],
                    'Students' => [
                        [
                            'Name' => 'Kalpana Thakur',
                            'RollNo' => '1',
                            'Age' => '15',
                            'Gender' => 'Female',
                            'EmailId' => 'kalpana071@gmail.com',
                            'Markslist' =>
                            [
                                'Science' => '67',
                                'Hindi' => '58',
                                'Social science' => '78',
                                'Maths' => '45',
                                'Sanskrit' => '69',
                                'English' => '65',
                                'Computer' => '86',
                                'Marks Obtained' => '468',
                                'Max Marks' => '700',
                                'Average' => '66.8',
                                'Grade' => 'B',
                            ],
                        ],
                        [
                            'Name' => 'KusamLata',
                            'RollNo' => '2',
                            'Age' => '15',
                            'Gender' => 'Female',
                            'EmailId' => 'Kusam234@gmail.com',
                            'Markslist' =>
                            [
                                'Science' => '67',
                                'Hindi' => '58',
                                'Social science' => '78',
                                'Maths' => '45',
                                'Sanskrit' => '69',
                                'English' => '65',
                                'Computer' => '86',
                                'Marks Obtained' => '468',
                                'Max Marks' => '700',
                                'Average' => '66.8',
                                'Grade' => 'B',
                            ],
                        ],

                        [
                            'Name' => 'Sushma Thakur',
                            'RollNo' => '3',
                            'Age' => '15',
                            'Gender' => 'Female',
                            'EmailId' => 'sushma839@gmail.com',
                            'Markslist' =>
                            [
                                'Science' => '67',
                                'Hindi' => '58',
                                'Social science' => '78',
                                'Maths' => '45',
                                'Sanskrit' => '69',
                                'English' => '65',
                                'Computer' => '86',
                                'Marks Obtained' => '468',
                                'Max Marks' => '700',
                                'Average' => '66.8',
                                'Grade' => 'B',
                            ],
                        ],


                        [
                            'Name' => 'Yash Pal',
                            'RollNo' => '4',
                            'Age' => '16',
                            'Gender' => 'Male',
                            'EmailId' => 'Yashpal@gmail.com',
                            'Markslist' => [
                                'Science' => '67',
                                'Hindi' => '58',
                                'Social science' => '78',
                                'Maths' => '45',
                                'Sanskrit' => '69',
                                'English' => '65',
                                'Computer' => '86',
                                'Marks Obtained' => '468',
                                'Max Marks' => '700',
                                'Average' => '66.8',
                                'Grade' => 'B',
                            ],
                        ],

                        [
                            'Name' => 'Sona Kumari',
                            'RollNo' => '5',
                            'Age' => '15',
                            'Gender' => 'Female',

                            'EmailId' => 'sona345@gmail.com',
                            'Markslist' => [
                                'Science' => '67',
                                'Hindi' => '58',
                                'Social science' => '78',
                                'Maths' => '45',
                                'Sanskrit' => '69',
                                'English' => '65',
                                'Computer' => '86',
                                'Marks Obtained' => '468',
                                'Max Marks' => '700',
                                'Average' => '66.8',
                                'Grade' => 'B',
                            ],

                        ],
                        [
                            'Name' => 'Satish Kumar',
                            'RollNo' => '6',
                            'Age' => '16',
                            'Gender' => 'Male',

                            'EmailId' => 'satish6576@gmail.com',
                            'Markslist' => [
                                'Science' => '67',
                                'Hindi' => '58',
                                'Social science' => '78',
                                'Maths' => '45',
                                'Sanskrit' => '69',
                                'English' => '65',
                                'Computer' => '86',
                                'Marks Obtained' => '468',
                                'Max Marks' => '700',
                                'Average' => '66.8',
                                'Grade' => 'B',
                            ],
                        ],
                        [
                            'Name' => 'Dharmender thakur',
                            'RollNo' => '7',
                            'Age' => '15',
                            'Gender' => 'Male',

                            'EmailId' => 'dham45546@gmail.com',
                            'Markslist' => [
                                'Science' => '67',
                                'Hindi' => '58',
                                'Social science' => '78',
                                'Maths' => '45',
                                'Sanskrit' => '69',
                                'English' => '65',
                                'Computer' => '86',
                                'Marks Obtained' => '468',
                                'Max Marks' => '700',
                                'Average' => '66.8',
                                'Grade' => 'B',
                            ],
                        ],
                    ],
                    'Teachers' => [
                        ['Name' => 'Rajeev Kumar', 'Subject' => 'science', 'Time' => '9:30am-10:10am', 'RoomNo.' => '11',],
                        ['Name' => 'Santosh', 'Subject' => 'Hindi', 'Time' => '10:10am-10:50am', 'RoomN.' => '11',],
                        ['Name' => 'Gopal', 'Subject' => 'Social science', 'Time' => '10:50am-11:30am', 'RoomNo.' => '11',],
                        ['Name' => 'Sunita', 'Subject' => 'English', 'Time' => '11:30am-12:10pm', 'RoomNo.' => '11',],
                        ['Name' => 'Palak Rana', 'Subject' => 'Sanskrit', 'Time' => '12:10pm-12:50am', 'RoomNo.' => '11',],
                        ['Name' => 'Lekhraj', 'Subject' => 'Maths', 'Time' => '1:30pm-2:10pm', 'RoomNo.' => '11',],
                        ['Name' => 'Nitesh Kumar', 'Subject' => 'Computer science', 'Time' => '2:10pm-3:00', 'RoomNo.' => '13',],
                    ],

                    'Time' => [
                        ['Subject' => 'Science', 'Time' => '9:30am-10:10am', 'Teacher' => 'Rajeev Kumar', 'RomNo' => '11',],
                        ['Subject' => 'Hindi', 'Time' => '10:10am-10:50am', 'Teacher' => 'Rajeev Kumar', 'RomNo' => '11',],
                        ['Subject' => 'Social science', 'Time' => '10:50am-11:30am', 'Teacher' => 'Gopal', 'RomNo' => '11',],
                        ['Subject' => 'English', 'Time' => '11:30am-12:10pm', 'Teacher' => 'Sunita', 'RomNo' => '11',],
                        ['Subject' => 'Sanskrit', 'Time' => '12:10pm-12:50am', 'Teacher' => 'Palak Rana', 'RomNo' => '11',],
                        ['Subject' => 'Lunch Time', 'Time' => '12:50pm-1:30pm', 'Teacher' => '', 'RomNo' => '',],
                        ['Subject' => 'Maths', 'Time' => '1:30pm-2:10pm', 'RomNo' => '11', 'Teacher' => 'Lekhraj'],
                        ['Subject' => 'Computer science', 'Time' => '2:10pm-3:00pm', 'RomNo' => '13', 'Teacher' => 'Nitesh Kumar'],
                    ],
                ],
    ],
  ]
  ?>
<?php
// $class=$school[$_GET["Classes"]];
// echo  $class["10th"][$_GET["Rooms"]['RoomNo']];
?>
 <?php
 echo $school['Classes']['10th']['Rooms']['0']['RoomNo']
 ?>
  <table class="table">
    <thead class="thead-dark">
      <tr>

        <h3 class="btn btn-warning"><a href="/school structure/10th.php">Rooms</a></h3>
        <h3 class="btn btn-primary">Subjects</h3>
        <h3 class="btn btn-success ">Students</h3>
        <h3 class="btn btn-warning">Teachers</h3>
        <h3 class="btn  btn-primary">Time</h3>
        

      </tr>
    </thead>

  </table>

</body>

</html>
