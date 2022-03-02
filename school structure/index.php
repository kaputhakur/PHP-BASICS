<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School</title>
</head>

<body>
  <h1> School Stucture</h1>

  <?php


  $school =
    [
      //=================================================Classes============================================

      'Classes' => [
        //================================== Class10 =============================================

        '10th' =>
        [
          'Room' => [
            'No.' => ['11', '13(Computer)',],
            'Capacity' => '30',
            //  'Room.11','Room.13(ComputerScience)',
          ],
          'Subjects' => [
            ['Name' => 'science', 'Teacher' => 'Rajeev Kumar', 'Time' => '9:30am-10:10am', 'RoomNo' => '11'],
            ['Name' => 'Hindi', 'Teacher' => 'Santosh',  'Time' => '10:10am-10:50am', 'RoomNo' => '11'],
            ['Namet' => 'Social science', 'Teacher' => 'Gopal', 'Time' => '10:50am-11:30am', 'RomNo' => '11'],
            ['Name' => 'Maths', 'Teacher' => 'Lekhraj', 'Time' => '11:30am-12:10pm', 'RoomNo' => '11'],
            ['Name' => 'Sanskrit', 'Teacher' => 'Palak Rana', 'Time' => '12:10pm-12:50am', 'RoomNo' => '11'],
            ['Name' => 'English', 'Teacher' => 'Sunita Kumar', 'Time' => '1:30pm-2:10pm', 'RoomNo' => '11'],
            ['Name' => ' Computer science', 'Teacher' => 'Nitesh Kumar', 'Time' => '2:10pm-3:00', 'RomNo' => '13'],
          ],
          'Students' => [
            ['Name' => 'Kalpana Thakur', 'RollNo' => '1', 'Age' => '15', 'Gender' => 'Female', 'DOB' => '', 'EmailId' => 'kalpana071@gmail.com'],
            ['Name' => 'KusamLata', 'RollNo' => '2', 'Age' => '15', 'Gender' => 'Female', 'DOB' => '', 'EmailId' => 'Kusam234@gmail.com'],
            ['Name' => 'Sushma Thakur', 'RollNo' => '3', 'Age' => '15', 'Gender' => 'Female', 'DOB' => '', 'EmailId' => 'sushma839@gmail.com'],
            ['Name' => 'Rina Kumari', 'RollNo' => '4', 'Age' => '16', 'Gender' => 'Female', 'DOB' => '', 'EmailId' => 'rina377@gmail.com'],
            ['Name' => 'Manju Thakur', 'RollNo' => '5', 'Age' => '15', 'Gender' => 'Female', 'DOB' => '', 'EmailId' => 'manju287@gmail.com'],
            ['Name' => 'Gita Kumari', 'RollNo' => '6', 'Age' => '15', 'Gender' => 'Female', 'DOB' => '', 'EmailId' => 'Gita124@gmail.com'],
            ['Name' => 'Yash Pal', 'RollNo' => '7', 'Age' => '16', 'Gender' => 'Male', 'DOB' => '', 'EmailId' => 'Yashpal@gmail.com'],
            ['Name' => 'Sona Kumari', 'RollNo' => '8', 'Age' => '15', 'Gender' => 'Female', 'DOB' => '', 'EmailId' => 'sona345@gmail.com'],
            ['Name' => 'Satish Kumar', 'RollNo' => '9', 'Age' => '16', 'Gender' => 'Male', 'DOB' => '', 'EmailId' => 'satish6576@gmail.com'],
            ['Name' => 'Dharmender thakur', 'RollNo' => '10', 'Age' => '15', 'Gender' => 'Male', 'DOB' => '', 'EmailId' => 'dham45546@gmail.com'],
          ],
          'Teachers' => [
            ['Name' => 'Rajeev Kumar', 'Subject' => 'science', 'Time' => '9:30am-10:10am', 'RoomNo.' => '11',],
            ['Name' => 'Santosh', 'Subject' => 'Hindi', 'Time' => '10:10am-10:50am', 'RoomN.' => '11',],
            ['Name' => 'Gopal', 'Subject' => 'Social science', 'Time' => '10:50am-11:30am', 'RoomNo.' => '11',],
            ['Name' => 'Sunita', 'Subject' => 'English', 'Time' => '11:30am-12:10pm', 'RoomNo.' => '11',],
            ['Name' => 'Palak Rana', 'Subject' => 'Sanskrit', 'Time' => '12:10pm-12:50am', 'RoomNo.' => '11',],
            //[Lunch time:12:50pm-1:30pm]  
            ['Name' => 'Lekhraj', 'Subject' => 'Maths', 'Time' => '1:30pm-2:10pm', 'RoomNo.' => '11',],
            ['Name' => 'Nitesh Kumar', 'Subject' => 'Computer science', 'Time' => '2:10pm-3:00', 'RoomNo.' => '13',],
          ],

          'Time' => [
            ['Subject' => 'Science', 'Time' => '9:30am-10:10am', 'Teacher' => 'Rajeev Kumar', 'RomNo' => '11',],
            ['Subject' => 'Hindi', 'Time' => '10:10am-10:50am', 'Teacher' => 'Rajeev Kumar', 'RomNo' => '11',],
            ['Subject' => 'Social science', 'Time' => '10:50am-11:30am', 'Teacher' => 'Gopal', 'RomNo' => '11',],
            ['Subject' => 'English', 'Time' => '11:30am-12:10pm', 'Teacher' => 'Sunita', 'RomNo' => '11',],
            ['Subject' => 'Sanskrit', 'Time' => '12:10pm-12:50am', 'Teacher' => 'Palak Rana', 'RomNo' => '11',],
            //[Lunch time:12:50pm-1:30pm]  
            ['Subject' => 'Maths', 'Time' => '1:30pm-2:10pm', 'RomNo' => '11', 'Teacher' => 'Lekhraj'],
            ['Subject' => 'Computer science', 'Time' => '2:10pm-3:00pm', 'RomNo' => '13', 'Teacher' => 'Nitesh Kumar'],
          ],
        ],

        // ==================================================Class11 start=========================================================

        '11' =>
        [
          'Rooms' => [
            'No.' => ['13(Computer)', '14', '15(Chem.Lab)', '17(Phy.Lab)',],
            'Capicity' => '25'
            //  'Labs'=>['Chem.Lab'=>15,'Phy.Lab'=>17,] ,
            // 'Room.14', 'Room.13(Computer Science)', 'Room.15(Chem.Lab)', 'Room.17(Phy.Lab)',
          ],
          'Subjects' => [

            ['Name' => 'Maths', 'Teacher' => 'Nishant Verma', 'Time' => '9:30am-10:30am', 'RoomNo.' => '14',],
            ['Name' => 'Chemistry Theory', 'Teacher' => 'Kanchan Rawat', 'Time' => '10:30am-11:30am', 'RoomNo.' => '14',],
            ['Name' => 'Chemistry Practical', 'Teacher' => 'Kanchan Rawat', 'Time' => '10:30am-11:30am', 'RoomNo.' => '15(Chem.Lab)', 'Day' => ' Every Friday'],
            ['Name' => 'Physcics Theory', 'Teacher' => 'Neelam', 'Time' => '11:30am-12:30pm', 'RoomNo.' => '14',],
            ['Name' => 'Physcics Practical', 'Teacher' => 'Neelam', 'Time' => '11:30am-12:30pm', 'RoomNo.' => '17(Phy.Lab)', 'Day' => 'Every Friday'],
            ['Name' => 'Computer science', 'Teacher' => 'Nitesh Kumar', 'Time' => '1:00pm-2:00pm', 'RoomNo.' => '13',],
            ['Name' => 'English', 'Teacher' => 'Anita', 'Time' => '2:00pm-3:00', 'RoomNo.' => '14',],

          ],
          'Students' => [
            ['Name' => 'Sachin Kuamr', 'RollNo' => '1', 'Age' => '16', 'Gender' => 'Male', 'EmailId' => 'sachin343@gmail.com'],
            ['Name' => 'Vivek Thakur', 'RollNo' => '2', 'Age' => '17', 'Gender' => 'Male', 'EmailId' => 'vivek58904@gmail.com'],
            ['Name' => 'Hiamnshi Thakur', 'RollNo' => '3', 'Age' => '16', 'Gender' => 'Female', 'EmailId' => 'himanshi839@gmail.com'],
            ['Name' => 'Meenakshi', 'RollNo' => '4', 'Age' => '16', 'Gender' => 'Female', 'EmailId' => 'Meenakshi34@gmail.com'],
            ['Name' => 'Romesh Thakur', 'RollNo' => '5', 'Age' => '16', 'Gender' => 'Male', 'EmailId' => 'romesh985@gmail.com'],
            ['Name' => 'Mahima', 'RollNo' => '6', 'Age' => '15', 'Gender' => 'Female', 'EmailId' => 'mahima@gmail.com'],
            ['Name' => 'Ankit', 'RollNo' => '7', 'Age' => '17', 'Gender' => 'Male', 'EmailId' => 'ankit344@gmail.com'],
            ['Name' => 'Ekta', 'RollNo' => '8', 'Age' => '16', 'Gender' => 'Female', 'EmailId' => 'ekta345@gmail.com'],
            ['Name' => 'Jyoti', 'RollNo' => '9', 'Age' => '16', 'Gender' => 'Female', 'EmailId' => 'jyoti6576@gmail.com'],
            ['Name' => 'spana', 'RollNo' => '10', 'Age' => '16', 'Gender' => 'Female', 'EmailId' => 'spana45546@gmail.com'],
            ['Name' => 'Manish Rana', 'RollNo' => '11', 'Age' => '17', 'Gender' => 'Female', 'EmailId' => 'manishrana@gmail.com'],
            ['Name' => 'Digvijay', 'RollNo' => '12', 'Age' => '16', 'Gender' => 'Male', 'EmailId' => 'digu23@gmail.com'],
            ['Name' => 'Ajay tahkur', 'RollNo' => '13', 'Age' => '16', 'Gender' => 'Male', 'EmailId' => 'ajayx854@gmail.com'],
          ],
          'Teachers' => [
            ['Name' => 'Nishant Verma', 'Subject' => 'Maths', 'Time' => '9:30am-10:30am', 'RoomNo' => '14',],
            ['Name' => 'Kanchan Rawat', 'Subject' => 'Chemistry Theory', 'Time' => '10:30am-11:30am', 'RoomNo' => '14',],
            ['Name' => 'Kanchan Rawat', 'Subject' => 'Chemistry Practical', 'Time' => '10:30am-11:30am', 'RoomNo' => '15(Chem.Lab)', 'Day' => ' Every Friday'],
            ['Name' => 'Neelam', 'Subject' => 'Physcics Theory', 'Time' => '11:30am-12:30pm', 'RoomNo' => '14',],
            ['Name' => 'Neelam', 'Subject' => 'Physcics Practical', 'Time' => '11:30am-12:30pm', 'RoomNo' => '17(Phy.Lab)', 'Day' => 'Every Friday'],
            //[Lunch time 12:30pm-1:00pm]  
            ['Name' => 'Nitesh Kumar', 'Subject' => 'Computer science', 'Time' => '1:00pm-2:00pm', 'RoomNo' => '13',],
            ['Name' => 'Anita', 'Subject' => 'English', 'Time' => '2:00pm-3:00', 'RoomNo' => '14',],
          ],
          'Time' => [
            ['Subject' => 'Maths', 'Time' => '9:30am-10:30am', 'Teacher' => 'Nishant Verma', 'RoomNo' => '14',],
            ['Subject' => 'Chemistry Theory', 'Time' => '10:30am-11:30am',  'Teacher' => 'Kanchan Rawat', 'RoomNo' => '14',],
            ['Subject' => 'Chemistry Practical', 'Time' => '10:30am-11:30am', 'Teacher' => 'Kanchan Rawat', 'RoomNo' => '15(Chem.Lab)',  'Day' => 'Every Friday',],
            ['Subject' => 'Physcics Theory', 'Time' => '11:30am-12:30pm', 'Teacher' => 'Neelam', 'RoomNo' => '14',],
            ['Subject' => 'Physcics Practical', 'Time' => '11:30am-12:30pm', 'Teacher' => 'Neelam', 'RoomNo' => '17(Phy.Lab)', 'Day' => 'Every Friday,'],
            //[Lunch time:12:50pm-1:30pm]  
            ['Subject' => 'Computer science', 'Time' => '1:00pm-2:00pm', 'Teacher' => 'Nitesh Kumar', 'RoomNo' => '13',],
            ['Subject' => 'English', 'Time' => '2:00pm-3:00pm', 'Teacher' => 'Anita', 'RoomNo' => '14',],
          ],

        ],

        // ======================================================class12 Start ==========================================================
        '12' =>
        [
          'Rooms' => [
            'No.' => ['18', '17(phy.Lab)', '15(Chem.Lab)', '13(Computer)',],
            'Capicity' => '40'
          ],
          'Subjects' => [
            ['Name' => 'Computer science', 'Teacher' => 'Nitesh Kumar', 'Time' => '9:00am-10:30am', 'RoomNo' => '13',],
            ['Name' => 'Physcics Theory', 'Teacher' => 'Neelam', 'Time' => '10:30am-11:30am', 'RoomNo' => '18',],
            ['Name' => 'Physcics Practical', 'Teacher' => 'Neelam', 'Time' => '10:30am-11:30am', 'RoomNo' => '17(Phy.Lab)', 'Day' => 'Every Thusrday'],
            ['Name' => 'Chemistry Theory', 'Teacher' => 'Kanchan Rawat', 'Time' => '11:30am-12:30pm', 'RoomNo' => '18',],
            ['Name' => 'Chemistry Practical', 'Teacher' => 'Kanchan Rawat', 'Time' => '11:30am-12:30pm', 'RoomNo' => '15(Chem.Lab)', 'Day' => 'Every Thusrday'],
            ['Name' => 'English', 'Teacher' => 'Anita', 'Time' => '1:00pm-2:00pm', 'RoomNo' => '18',],
            ['Name' => 'Maths', 'Teacher' => 'Nishant Verma', 'Time' => '2:00pm-3:00pm', 'RoomNo' => '18',],
          ],
          'Students' => [
            ['Name' => 'Nishant Thakur', 'RollNo' => '1', 'Age' => '17', 'Gender' => 'Male', 'EmailId' => 'nisant343@gmail.com'],
            ['Name' => 'Shivani', 'RollNo' => '2', 'Age' => '17', 'Gender' => 'Female', 'EmailId' => 'shivani434@gmail.com'],
            ['Name' => 'Neha', 'RollNo' => '3', 'Age' => '17', 'Gender' => 'Female', 'EmailId' => 'neha4345@gmail.com'],
            ['Name' => 'Divya Mahajan', 'RollNo' => '4', 'Age' => '17', 'Gender' => 'Female', 'EmailId' => 'divya343@gmail.com'],
            ['Name' => 'Sanya', 'RollNo' => '5', 'Age' => '17', 'Gender' => 'Female', 'EmailId' => 'sanya66@gmail.com'],
            ['Name' => 'Simarn', 'RollNo' => '6', 'Age' => '18', 'Gender' => 'Female', 'EmailId' => 'simarn65@gmail.com'],
            ['Name' => 'Arun', 'RollNo' => '7', 'Age' => '18', 'Gender' => 'Male', 'EmailId' => 'arun565@gmail.com'],
            ['Name' => 'Mohit', 'RollNo' => '8', 'Age' => '17', 'Gender' => 'Male', 'EmailId' => 'mohit45@gmail.com'],
            ['Name' => 'shushant', 'RollNo' => '9', 'Age' => '18', 'Gender' => 'Male', 'EmailId' => 's45545@gmail.com'],
            ['Name' => 'Namrata', 'RollNo' => '10', 'Age' => '17', 'Gender' => 'Female', 'EmailId' => 'namrta56@gmail.com'],
            ['Name' => 'Kanchan', 'RollNo' => '11', 'Age' => '17', 'Gender' => 'Female', 'EmailId' => 'kanchn3434@gmail.com'],
            ['Name' => 'Khushi', 'RollNo' => '12', 'Age' => '18', 'Gender' => 'Female', 'EmailId' => 'khushi454@gmail.com'],
            ['Name' => 'Swati', 'RollNo' => '13', 'Age' => '17', 'Gender' => 'Female', 'EmailId' => 'swati454@gmail.com'],
          ],
          'Teachers' => [
            ['Name' => 'Nitesh Kumar', 'Subject' => 'Computer science', 'Time' => '9:00am-10:30am', 'RoomNo' => '13',],
            ['Name' => 'Neelam', 'Subject' => 'Physcics Theory', 'Time' => '10:30am-11:30am', 'RoomNo' => '18',],
            ['Name' => 'Neelam', 'Subject' => 'Physcics Practical', 'Time' => '10:30am-11:30am', 'RoomNo' => '17(Phy.Lab)', 'Day' => 'Every Thusrday'],
            ['Name' => 'Kanchan Rawat', 'Subject' => 'Chemistry Theory', 'Time' => '11:30am-12:30pm', 'RoomNo' => '18',],
            ['Name' => 'Kanchan Rawat', 'Subject' => 'Chemistry Practical', 'Time' => '11:30am-12:30pm', 'RoomNo' => '15(Chem.Lab)', 'Day' => 'Every Thusrday'],
            //[Lunch time 12:30pm-1:00pm]  
            ['Name' => 'Anita', 'Subject' => 'English', 'Time' => '1:00pm-2:00pm', 'RoomNo' => '18',],
            ['Name' => 'Nishant Verma', 'Subject' => 'Maths', 'Time' => '2:00pm-3:00pm', 'RoomNo' => '18',],
          ],
          'Time' => [
            ['Subject' => 'Computer science', 'Time' => '9:30am-10:30am', 'RoomNo' => '13', 'Teacher' => 'Nitesh Kumar',],
            ['Subject' => 'Physcics Theory', 'Time' => '10:30am-11:30am', 'RoomNo' => '18', 'Teacher' => 'Neelam',],
            ['Subject' => 'Physcics Practical', 'Time' => '10:30am-11:30am', 'Teacher' => 'Neelam',  'RoomNo' => '17(phy.Lab)', 'Teacher' => 'Neelam', 'Day' => 'Every Thursday',],
            ['Subject' => 'Chemistry Practical', 'Time' => '11:30am-12:30pm',  'Teacher' => 'Kanchan Rawat', 'RoomNo' => '15(Chem.Lab)', 'Day' => 'EveryThursday',],
            //[Lunch time:12:50pm-1:30pm]  
            ['Subject' => 'English', 'Time' => '1:00pm-2:00pm', 'RoomNo' => '18', 'Teacher' => 'Anita'],
            ['Subject' => 'Maths', 'Time' => '2:00pm-3:00pm', 'RoomNo' => '13(computer)', 'Teacher' => 'Nishant Verma',],
          ],
        ],
      ],

      // ===============================================Teacher=============================================

      'Teachers' =>
      [
        ['Name' => 'Rajeev Kumar', 'Qualification' => 'M.sc', 'Subject' => 'science',],
        ['Name' => 'Santosh', 'Qualification' => 'B.ed,M.A', 'Subject' => 'Hindi',],
        ['Name' => 'Gopal', 'Qualification' => 'B.ed,M.A', 'Subject' => 'Social science',],
        ['Name' => 'Sunita', 'Qualification' => 'B.ed,M.A', 'Subject' => 'English',],
        ['Name' => 'Palak Rana', 'Qualification' => 'M.sc', 'Subject' => 'Sanskrit',],
        ['Name' => 'Lekhraj', 'Qualification' => 'M.sc,B.ed', 'Subject' => 'Maths',],
        ['Name' => 'Nitesh Kumar', 'Qualification' => 'IT', 'Subject' => 'Computer science',],
        ['Name' => 'Nishant Verma', 'Qualification' => 'M.sc', 'Subject' => 'Maths',],
        ['Name' => 'Kanchan Rawat', 'Qualification' => 'B.ed,M.sc', 'Subject' => 'Chemistry',],
        ['Name' => 'Neelam',  'Qualification' => 'M.sc,PHD', 'Subject' => 'Physcics ',],
        ['Name' => 'Anita',  'Qualification' => 'B.ed,M.A', 'Subject' => 'English',],


      ],


      //=================================================Subjects========================================= 

      'Subjects' =>
      [
        ['Name' => 'Science', 'Teacher' => 'Rajeev Kumar', 'Class' => '10th', ],
        ['Name' => 'Hindi', 'Teacher' => 'Santosh', 'Class' => '10th', ],
        ['Name' => 'Social science', 'Teacher' => 'Gopal', 'Class' => '10th',],
        ['Name' => 'Maths', 'Teacher' => 'Lekhraj', 'Class' => '10th',],
        ['Name' => 'Sanskrit', 'Teacher' => 'Palak Rana', 'Class' => '10th',],
        ['Name' => 'English', 'Teacher' => 'Sunita Kumar', 'Class' => '10th',],
        ['Name' => ' Computer science', 'Teacher' => 'Nitesh Kumar', 'Class' => '10th,11,12',],
        ['Name'=>'Maths','Teacher'=>'Nishant Verma','class'=>'11,12'],
        ['Name' => 'Chemistry ', 'Teacher' => 'Kanchan Rawat', 'class' => '11 ,12'],
        ['Name' => 'Physcics ', 'Teacher' => 'Neelam','class'=>'11,12'],
        ['Name' => 'English', 'Name' => 'Anita', 'class' => '11,12',],
      ],



    ];



  echo '<pre>';
  print_r($school['Subjects']);

  ?>

</body>

</html>
