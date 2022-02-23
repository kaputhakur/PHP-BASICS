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

        'Class10' =>
        [
          'ClassRoom' => [
            'RoomNO11', 'RoomNO13(Computer Science)'
          ],
          'Subjects'=>
           [
            'Science'=>
                ['Teacher' => 'Rajeev Kumar', 'Class' => '10th', 'ClaasTiming' => '9:30am-10:10am', 'RomNo' => '11'],
            'Hindi'=>
                ['Teacher' => 'Santosh', 'Class' => '10th', 'ClaasTiming' => '10:10am-10:50am', 'RomNo' => '11'],
            'Social science'=>   
                ['Teacher' => 'Gopal', 'Class' => '10th', 'ClaasTiming' => '10:50am-11:30am', 'RomNo' => '11'],
            'Maths'=>
                ['Teacher' => 'Lekhraj', 'Class' => '10th', 'ClaasTiming' => '11:30am-12:10pm', 'RomNo' => '11'],
            'Sanskrit'=>
                ['Teacher' => 'Palak Rana', 'Class' => '10th', 'ClaasTiming' => '12:10pm-12:50am', 'RomNo' => '11'],
            'English'=>
                ['Teacher' => 'Sunita Kumar', 'Class' => '10th', 'ClaasTiming' => '1:30pm-2:10pm', 'RomNo' => '11'],
            'Computer science'=>
                ['Teacher' => 'Nitesh Kumar', 'Class' => '10th', 'ClaasTiming' => '2:10pm-3:00', 'RomNo' => '13(Comp.)'],

          ],
          'Students' => [
            ['Name' => 'Kalpana Thakur', 'RollNo' => '1', 'Age' => '15', 'class' => '10th', 'EmailId' => 'kalpana071@gmail.com'],
            ['Name' => 'KusamLata', 'RollNo' => '2', 'Age' => '15', 'class' => '10th', 'EmailId' => 'Kusam234@gmail.com'],
            ['Name' => 'Sushma Thakur', 'RollNo' => '3', 'Age' => '15', 'class' => '10th', 'EmailId' => 'sushma839@gmail.com'],
            ['Name' => 'Rina Kumari', 'RollNo' => '4', 'Age' => '16', 'class' => '10th', 'EmailId' => 'rina377@gmail.com'],
            ['Name' => 'Manju Thakur', 'RollNo' => '5', 'Age' => '15', 'class' => '10th', 'EmailId' => 'manju287@gmail.com'],
            ['Name' => 'Gita Kumari', 'RollNo' => '6', 'Age' => '15', 'class' => '10th', 'EmailId' => 'Gita124@gmail.com'],
            ['Name' => 'Yash Pal', 'RollNo' => '7', 'Age' => '16', 'class' => '10th', 'EmailId' => 'Yashpal@gmail.com'],
            ['Name' => 'Sona Kumari', 'RollNo' => '8', 'Age' => '15', 'class' => '10th', 'EmailId' => 'sona345@gmail.com'],
            ['Name' => 'Satish Kumar', 'RollNo' => '9', 'Age' => '16', 'class' => '10th', 'EmailId' => 'satish6576@gmail.com'],
            ['Name' => 'Dharmender thakur', 'RollNo' => '10', 'Age' => '15', 'class' => '10th', 'EmailId' => 'dham45546@gmail.com'],
          ],
          'Teachers' => [
            'Rajeev Kumar'=>
               ['Subject' => 'science', 'class' => '10th', 'classTiming' => '9:30am-10:10am', 'RomNo' => '11',],
            'Santosh'=> 
               ['Subject' => 'Hindi', 'class' => '10th', 'classTiming' => '10:10am-10:50am', 'RomNo' => '11',],
            'Gopal'=>
               ['Subject' => 'Social science', 'class' => '10th', 'classTiming' => '10:50am-11:30am', 'RomNo' => '11',],
            'Sunita'=>
               ['Subject' => 'English', 'class' => '10th', 'classTiming' => '11:30am-12:10pm', 'RomNo' => '11',],
            'Palak Rana'=>
               ['Subject' => 'Sanskrit', 'class' => '10th', 'classTiming' => '12:10pm-12:50am', 'RomNo' => '11',],
            //[Lunch time:12:50pm-1:30pm]  
            'Lekhraj'=>
               ['Subject' => 'Maths', 'class' => '10th', 'classTiming' => '1:30pm-2:10pm', 'RomNo' => '11',],
            'Nitesh Kumar'=> 
               ['Subject' => 'Computer science', 'class' => '10th', 'classTiming' => '2:10pm-3:00', 'RomNo' => '13',],
          ],

          'ClassTiming' => [
            '9:30am-10:10am'=>
              ['Subject' => 'Science', 'class' => '10th', 'RomNo' => '11', 'Teacher' => 'Rajeev Kumar'],
            '10:10am-10:50am' =>
              ['Subject' => 'Hindi', 'class' => '10th' , 'RomNo' => '11', 'Teacher' => 'Rajeev Kumar'],
            '10:50am-11:30am'=>
              ['Subject' => 'Social science', 'class' => '10th' , 'RomNo' => '11', 'Teacher' => 'Gopal'],
            '11:30am-12:10pm' =>
              ['Subject' => 'English', 'class' => '10th', 'RomNo' => '11', 'Teacher' => 'Sunita'],
            '12:10pm-12:50am' => 
              ['Subject' => 'Sanskrit', 'class' => '10th', 'RomNo' => '11', 'Teacher' => 'Palak Rana'],
            //[Lunch time:12:50pm-1:30pm] 
             '12:50pm-1:30pm'=>
               ['LunchTime'] ,
            '1:30pm-2:10pm'  =>  
              ['Subject' => 'Maths', 'class' => '10th', 'RomNo' => '11', 'Teacher' => 'Lekhraj'],
            '2:10pm-3:00pm' => 
              ['Subject' => 'Computer science', 'class' => '10th', 'RomNo' => '13', 'Teacher' => 'Nitesh Kumar'],
          ],
        ],

        // ==================================================Class11=========================================================

        'Class+1' =>
        [
          'ClassRoom' => [
            'RoomNo14', 'RoomNo13(Computer Science)', 'RoomNo15(Chem.Lab)', 'RoomNo17(Phy.Lab)',
          ],
          'subjects' =>
           [
            'Maths'=>
               ['Teacher' => 'Nishant Verma', 'class' => '+1', 'classTiming' => '9:30am-10:30am', 'RomNo' => '14',],
            'Chemistry Theory'=>
               ['Teacher' => 'Kanchan Rawat', 'class' => '+1', 'classTiming' => '10:30am-11:30am', 'RomNo' => '14',],
            'Chemistry Practical'=>
               ['Teacher' => 'Kanchan Rawat', 'class' => '+1', 'Timing' => '10:30am-11:30am', 'RomNo' => '15(Chem.Lab)', 'Day' => ' Every Friday'],
            'Physcics Theory'=>
               ['Teacher' => 'Neelam', 'class' => '+1', 'ClassTiming' => '11:30am-12:30pm', 'RomNo' => '14',],
            'Physcics Practical'=>
               ['Teacher' => 'Neelam', 'class' => '+1', 'Timing' => '11:30am-12:30pm', 'RomNo' => '17(Phy.Lab)', 'Day' => 'Every Friday'],
            //[Lunch time 12:30pm-1:00pm] 
            'Computer science'=>
               [ 'Teacher' => 'Nitesh Kumar', 'class' => '+1', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '13',],
            'English'=>
                ['Teacher' => 'Anita', 'class' => '+1', 'classTiming' => '2:00pm-3:00', 'RomNo' => '14',],

          ],
          'Students' => [
            ['Name' => 'Sachin Kuamr', 'RollNo' => '1', 'Age' => '16', 'class' => '+1', 'EmailId' => 'sachin343@gmail.com'],
            ['Name' => 'Vivek Thakur', 'RollNo' => '2', 'Age' => '17', 'class' => '+1', 'EmailId' => 'vivek58904@gmail.com'],
            ['Name' => 'Hiamnshi Thakur', 'RollNo' => '3', 'Age' => '16', 'class' => '+1', 'EmailId' => 'himanshi839@gmail.com'],
            ['Name' => 'Meenakshi', 'RollNo' => '4', 'Age' => '16', 'class' => '+1', 'EmailId' => 'Meenakshi34@gmail.com'],
            ['Name' => 'Romesh Thakur', 'RollNo' => '5', 'Age' => '16', 'class' => '+1', 'EmailId' => 'romesh985@gmail.com'],
            ['Name' => 'Mahima', 'RollNo' => '6', 'Age' => '15', 'class' => '+1', 'EmailId' => 'mahima@gmail.com'],
            ['Name' => 'Ankit', 'RollNo' => '7', 'Age' => '17', 'class' => '+1', 'EmailId' => 'ankit344@gmail.com'],
            ['Name' => 'Ekta', 'RollNo' => '8', 'Age' => '16', 'class' => '+1', 'EmailId' => 'ekta345@gmail.com'],
            ['Name' => 'Jyoti', 'RollNo' => '9', 'Age' => '16', 'class' => '+1', 'EmailId' => 'jyoti6576@gmail.com'],
            ['Name' => 'spana', 'RollNo' => '10', 'Age' => '16', 'class' => '+1', 'EmailId' => 'spana45546@gmail.com'],
            ['Name' => 'Manish Rana', 'RollNo' => '11', 'Age' => '17', 'class' => '+1', 'EmailId' => 'manishrana@gmail.com'],
            ['Name' => 'Digvijay', 'RollNo' => '12', 'Age' => '16', 'class' => '+1', 'EmailId' => 'digu23@gmail.com'],
            ['Name' => 'Ajay tahkur', 'RollNo' => '13', 'Age' => '16', 'class' => '+1', 'EmailId' => 'ajayx854@gmail.com'],
          ],
          'Teachers' => [
            'Nishant Verma'=>
              ['Subject' => 'Maths', 'class' => '+1', 'classTiming' => '9:30am-10:30am', 'RomNo' => '14',],
            'Kanchan Rawat'=>
              ['Subject' => 'Chemistry Theory', 'class' => '+1', 'classTiming' => '10:30am-11:30am', 'RomNo' => '14',],
            'Neelam'=>
              ['Subject' => 'Physcics Theory', 'class' => '+1', 'ClassTiming' => '11:30am-12:30pm', 'RomNo' => '14',],
            //[Lunch time 12:30pm-1:00pm]  
            'Nitesh Kumar' =>
              ['Subject' => 'Computer science', 'class' => '+1', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '13',],
            'Anita ' =>
             [ 'Subject' => 'English', 'class' => '+1', 'classTiming' => '2:00pm-3:00', 'RomNo' => '14',],
          ],
          'ClassTiming'=> [
            '9:30am-10:30am'=>
              ['Subject' => 'Maths', 'class' => '+1','RomNo' => '14', 'Teacher' => 'Nishant Verma'],
            '10:30am-11:30am'=>
              ['Subject' => 'Chemistry Theory', 'class' => '+1',  'RomNo' => '14', 'Teacher' => 'Kanchan Rawat'],
              /*Chem.Practical */
            '10:30am-11:30am(Friday)'=>
              ['Subject' => 'Chemistry Practical', 'class' => '+1','RomNo' => '15(Chem.Lab)', 'Teacher' => 'Kanchan Rawat', 'Day' => 'Every Friday'],
            '11:30am-12:30pm'=> 
              ['Subject' => 'Physcics Theory', 'class' => '+1', 'RomNo' => '14', 'Teacher' => 'Neelam'],
              /*Phys. Practical */
            '11:30am-12:30pm(Friday)'=>
              ['Subject' => 'Physcics Practical', 'class' => '+1', 'RomNo' => '17(phy.Lab)', 'Teacher' => 'Neelam', 'Day' => 'Every Friday'],
              //[Lunch time:12:50pm-1:30pm]  
            '1:00pm-2:00pm'=>
              ['Subject' => 'Computer science', 'class' => '+1','RomNo' => '13', 'Teacher' => 'Nitesh Kumar'],
            '2:00pm-3:00pm'=>
              ['Subject' => 'English', 'class' => '+1',  'RomNo' => '14', 'Teacher' => 'Anita'],
          ],

        ],

         // ======================================================class12 ==========================================================
        'Class+2' =>
        [
          'ClassRoom' => [
            'RoomNo.18', 'RoomNo.17(phy.Lab)', 'RoomNo.15(Chem.Lab)', 'RoomNo.13(Computer)',
          ],
          'Subjects' => [
              'Computer science' => 
                ['Teacher' => 'Nitesh Kumar', 'class' => '+2', 'classTiming' => '9:00am-10:30am', 'RomNo' => '13',],
              'Physcics Theory' =>
                ['Teacher' => 'Neelam', 'class' => '+2', 'ClassTiming' => '10:30am-11:30am', 'RomNo' => '18',],
              'Physcics Practical' =>
                ['Teacher' => 'Neelam', 'class' => '+2', 'Timing' => '10:30am-11:30am', 'RomNo' => '17(Phy.Lab)', 'Day' => 'Every Thusrday'],
              'Chemistry Theory' =>
                [ 'Teacher' => 'Kanchan Rawat', 'class' => '+2', 'classTiming' => '11:30am-12:30pm', 'RomNo' => '18',],
              'Chemistry Practical' => 
                [ 'Teacher' => 'Kanchan Rawat', 'class' => '+2', 'Timing' => '11:30am-12:30pm', 'RomNo' => '15(Chem.Lab)', 'Day' => 'Every Thusrday'],
              'English'=>
                [ 'Teacher' => 'Anita', 'class' => '+2', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '18',],
              'Maths' =>
              ['Teacher' => 'Nishant Verma', 'class' => '+2', 'classTiming' => '2:00pm-3:00pm', 'RomNo' => '18',],
          ],
          'Students' => [
              ['Name' => 'Nishant Thakur', 'RollNo' => '1', 'Age' => '17', 'class' => '+2', 'EmailId' => 'nisant343@gmail.com'],
              ['Name' => 'Shivani', 'RollNo' => '2', 'Age' => '17', 'class' => '+2', 'EmailId' => 'shivani434@gmail.com'],
              ['Name' => 'Neha', 'RollNo' => '3', 'Age' => '17', 'class' => '+2', 'EmailId' => 'neha4345@gmail.com'],
              ['Name' => 'Divya Mahajan', 'RollNo' => '4', 'Age' => '17', 'class' => '+2', 'EmailId' => 'divya343@gmail.com'],
              ['Name' => 'Sanya', 'RollNo' => '5', 'Age' => '17', 'class' => '+2', 'EmailId' => 'sanya66@gmail.com'],
              ['Name' => 'Simarn', 'RollNo' => '6', 'Age' => '18', 'class' => '+2', 'EmailId' => 'simarn65@gmail.com'],
              ['Name' => 'Arun', 'RollNo' => '7', 'Age' => '18', 'class' => '+2', 'EmailId' => 'arun565@gmail.com'],
              ['Name' => 'Mohit', 'RollNo' => '8', 'Age' => '17', 'class' => '+2', 'EmailId' => 'mohit45@gmail.com'],
              ['Name' => 'shushant', 'RollNo' => '9', 'Age' => '18', 'class' => '+2', 'EmailId' => 's45545@gmail.com'],
              ['Name' => 'Namrata', 'RollNo' => '10', 'Age' => '17', 'class' => '+2', 'EmailId' => 'namrta56@gmail.com'],
              ['Name' => 'Kanchan', 'RollNo' => '11', 'Age' => '17', 'class' => '+2', 'EmailId' => 'kanchn3434@gmail.com'],
              ['Name' => 'Khushi', 'RollNo' => '12', 'Age' => '18', 'class' => '+2', 'EmailId' => 'khushi454@gmail.com'],
              ['Name' => 'Swati', 'RollNo' => '13', 'Age' => '17', 'class' => '+2', 'EmailId' => 'swati454@gmail.com'],
          ],
          'Teachers' => [
              'Nitesh Kumar' =>
                ['Subject' => 'Computer science', 'class' => '+2', 'classTiming' => '9:00am-10:30am', 'RomNo' => '13',],
              'Neelam'=>
                ['Subject' => 'Physcics Theory', 'class' => '+2', 'ClassTiming' => '10:30am-11:30am', 'RomNo' => '18',],
              'Kanchan Rawat' =>
                [ 'Subject' => 'Chemistry Theory', 'class' => '+2', 'classTiming' => '11:30am-12:30pm', 'RomNo' => '18',],
              //[Lunch time 12:30pm-1:00pm]  
              'Anita' =>
                [ 'Subject' => 'English', 'class' => '+2', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '18',],
              'Nishant Verma' =>
                [ 'Subject' => 'Maths', 'class' => '+2', 'classTiming' => '2:00pm-3:00pm', 'RomNo' => '18',],
          ],
          'ClassTiming' => [
              '9:30am-10:30am' =>
                ['Subject' => 'Computer science', 'class' => '+2', 'RomNo' => '13', 'Teacher' => 'Nitesh Kumar'],
              '10:30am-11:30am'=>
                ['Subject' => 'Physcics Theory', 'class' => '+2',  'RomNo' => '18', 'Teacher' => 'Neelam'],
                /*Phys. Practical */
              '10:30am-11:30am(Thursday)' => 
                ['Subject' => 'Physcics Practical', 'class' => '+2',  'RomNo' => '17(phy.Lab)', 'Teacher' => 'Neelam', 'Day' => 'Every Thursday'],
              '11:30am-12:30pm' =>
                ['Subject' => 'Chemistry Theory', 'class' => '+2',  'RomNo' => '18', 'Teacher' => 'Kanchan Rawat'],
                /*Chem.Practical */
              '11:30am-12:30pm(Thursday)'=>
                ['Subject' => 'Chemistry Practical', 'class' => '+2',  'RomNo' => '15(Chem.Lab)', 'Teacher' => 'Kanchan Rawat', 'Day' => 'EveryThursday'],
                //[Lunch time:12:50pm-1:30pm]  
                '1:00pm-2:00pm' =>
                  ['Subject' => 'English', 'class' => '+2', 'RomNo' => '18', 'Teacher' => 'Anita'],
                '2:00pm-3:00pm' =>
                  ['Subject' => 'Maths', 'class' => '+2',  'RomNo' => '13(computer)', 'Teacher' => 'Nishant Verma'],
          ],
        ],
      ],

      // ===============================================Teacher=============================================

      'Teachers' =>
      [
        'Class10' =>
        [
          ['Teacher' => 'Rajeev Kumar', 'Qualification' => 'M.sc', 'Subject' => 'science', 'class' => '10th', 'classTiming' => '9:30am-10:10am', 'RomNo' => '11',],
          ['Teacher' => 'Santosh', 'Qualification' => 'B.ed,M.A', 'Subject' => 'Hindi', 'class' => '10th', 'classTiming' => '10:10am-10:50am', 'RomNo' => '11',],
          ['Teacher' => 'Gopal', 'Qualification' => 'B.ed,M.A', 'Subject' => 'Social science', 'class' => '10th', 'classTiming' => '10:50am-11:30am', 'RomNo' => '11',],
          ['Teacher' => 'Sunita', 'Qualification' => 'B.ed,M.A', 'Subject' => 'English', 'class' => '10th', 'classTiming' => '11:30am-12:10pm', 'RomNo' => '11',],
          ['Teacher' => 'Palak Rana', 'Qualification' => 'M.sc', 'Subject' => 'Sanskrit', 'class' => '10th', 'classTiming' => '12:10pm-12:50am', 'RomNo' => '11',],
          ['Teacher' => 'Lekhraj', 'Qualification' => 'M.sc,B.ed', 'Subject' => 'Maths', 'class' => '10th', 'classTiming' => '1:30pm-2:10pm', 'RomNo' => '11',],
          ['Teacher' => 'Nitesh Kumar', 'Qualification' => 'IT', 'Subject' => 'Computer science', 'class' => '10th', 'classTiming' => '2:10pm-3:00', 'RomNo' => '13',],
        ],

        'Class+1' =>
        [
          ['Teacher' => 'Nishant Verma', 'Subject' => 'Maths', 'Qualification' => 'M.sc', 'class' => '+1', 'classTiming' => '9:30am-10:30am', 'RomNo' => '14',],
          ['Teacher' => 'Kanchan Rawat', 'Subject' => 'Chemistry Theory', 'Qualification' => 'B.ed,M.sc', 'class' => '+1', 'classTiming' => '10:30am-11:30am', 'RomNo' => '14',],
          ['Teacher' => 'Kanchan Rawat', 'Subject' => 'Chemistry Practical', 'class' => '+1', 'Timing' => '10:30am-11:30am', 'RomNo' => '15(Chem.Lab)', 'Day' => ' Every Friday'],
          ['Teacher' => 'Neelam', 'Subject' => 'Physcics Theory', 'Qualification' => 'M.sc,PHD', 'class' => '+1', 'ClassTiming' => '11:30am-12:30pm', 'RomNo' => '14',],
          ['Teacher' => 'Neelam', 'Subject' => 'Physcics Practical', 'Timing' => '11:30am-12:30pm', 'RomNo' => '17(Phy.Lab)', 'Day' => 'Every Friday'],
          ['Teacher' => 'Nitesh Kumar', 'Subject' => 'Computer science', 'Qualification' => 'IT', 'class' => '+1', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '13',],
          ['Teacher' => 'Anita', 'Subject' => 'English', 'Qualification' => 'B.ed,M.A', 'class' => '+1', 'classTiming' => '2:00pm-3:00', 'RomNo' => '14',],
        ],

        'Class+2' =>
        [
          ['Teacher' => 'Nitesh Kumar', 'Subject' => 'Computer science', 'Qualification' => 'IT', 'class' => '+2', 'classTiming' => '9:00am-10:30am', 'RomNo' => '13',],
          ['Teacher' => 'Neelam', 'Subject' => 'Physcics Theory', 'Qualification' => 'M.sc,PHD', 'class' => '+2', 'ClassTiming' => '10:30am-11:30am', 'RomNo' => '18',],
          ['Teacher' => 'Neelam', 'Subject' => 'Physcics Practical', 'class' => '+2', 'Timing' => '10:30am-11:30am', 'RomNo' => '17(Phy.Lab)', 'Day' => 'Every Thusrday'],
          ['Teacher' => 'Kanchan Rawat', 'Subject' => 'Chemistry Theory', 'class' => '+2', 'Qualification' => 'B.ed,M.sc', 'classTiming' => '11:30am-12:30pm', 'RomNo' => '18',],
          ['Teacher' => 'Kanchan Rawat', 'Subject' => 'Chemistry Practical', 'class' => '+2', 'Timing' => '11:30am-12:30pm', 'RomNo' => '15(Chem.Lab)', 'Day' => 'Every Thusrday'],
          ['Teacher' => 'Anita', 'Subject' => 'English', 'Qualification' => 'B.ed,M.A', 'class' => '+2', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '18',],
          ['Teacher' => 'Nishant Verma', 'Subject' => 'Maths', 'Qualification' => 'M.sc', 'classTiming' => '2:00pm-3:00pm', 'RomNo' => '18',],
        ],

      ],
      //=================================================Subjects========================================= 

      'Subjects' =>
      [
        'Class10' =>
        [
          ['Subject' => 'science', 'Teacher' => 'Rajeev Kumar', 'Class' => '10th', 'ClaasTiming' => '9:30am-10:10am'],
          ['Subject' => 'Hindi', 'Teacher' => 'Santosh', 'Class' => '10th', 'ClaasTiming' => '10:10am-10:50am'],
          ['Subject' => 'Social science', 'Teacher' => 'Gopal', 'Class' => '10th', 'ClaasTiming' => '10:50am-11:30am'],
          ['Subject' => 'Maths', 'Teacher' => 'Lekhraj', 'Class' => '10th', 'ClaasTiming' => '11:30am-12:10pm'],
          ['Subject' => 'Sanskrit', 'Teacher' => 'Palak Rana', 'Class' => '10th', 'ClaasTiming' => '12:10pm-12:50am'],
          ['Subject' => 'English', 'Teacher' => 'Sunita Kumar', 'Class' => '10th', 'ClaasTiming' => '1:30pm-2:10pm'],
          ['Subject' => ' Computer science', 'Teacher' => 'Nitesh Kumar', 'Class' => '10th', 'ClaasTiming' => '2:10pm-3:00'],
        ],
   
       'Class+1' =>
        [
          ['Subject' => 'Maths', 'Teacher' => 'Nishant Verma', 'class' => '+1', 'classTiming' => '9:30am-10:30am', 'RomNo' => '14',],
          ['Subject' => 'Chemistry Theory', 'Teacher' => 'Kanchan Rawat', 'class' => '+1', 'classTiming' => '10:30am-11:30am', 'RomNo' => '14',],
          ['Subject' => 'Chemistry Practical', 'Teacher' => 'Kanchan Rawat', 'class' => '+1', 'Timing' => '10:30am-11:30am', 'RomNo' => '15(Chem.Lab)', 'Day' => ' Every Friday'],
          ['Subject' => 'Physcics Theory', 'Teacher' => 'Neelam', 'class' => '+1', 'ClassTiming' => '11:30am-12:30pm', 'RomNo' => '14',],
          ['Subject' => 'Physcics Practical', 'Teacher' => 'Neelam', 'class' => '+1', 'Timing' => '11:30am-12:30pm', 'RomNo' => '17(Phy.Lab)', 'Day' => 'Every Friday'],
          ['Subject' => 'Computer science', 'Teacher' => 'Nitesh Kumar', 'class' => '+1', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '13',],
          ['Subject' => 'English', 'Teacher' => 'Anita', 'class' => '+1', 'classTiming' => '2:00pm-3:00', 'RomNo' => '14',],
        ],

        'Class+2' =>
        [
          ['Subject' => 'Computer science', 'Teacher' => 'Nitesh Kumar', 'class' => '+2', 'classTiming' => '9:00am-10:30am', 'RomNo' => '13',],
          ['Subject' => 'Physcics Theory', 'Teacher' => 'Neelam', 'class' => '+2', 'ClassTiming' => '10:30am-11:30am', 'RomNo' => '18',],
          ['Subject' => 'Physcics Practical', 'Teacher' => 'Neelam', 'class' => '+2', 'Timing' => '10:30am-11:30am', 'RomNo' => '17(Phy.Lab)', 'Day' => 'Every Thusrday'],
          ['Subject' => 'Chemistry Theory', 'Teacher' => 'Kanchan Rawat', 'class' => '+2', 'classTiming' => '11:30am-12:30pm', 'RomNo' => '18',],
          ['Subject' => 'Chemistry Practical', 'Teacher' => 'Kanchan Rawat', 'class' => '+2', 'Timing' => '11:30am-12:30pm', 'RomNo' => '15(Chem.Lab)', 'Day' => 'Every Thusrday'],
          ['Subject' => 'English', 'Name' => 'Teacher', 'class' => '+2', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '18',],
          ['Subject' => 'Maths', 'Teacher' => 'Nishant Verma', 'class' => '+2', 'classTiming' => '2:00pm-3:00pm', 'RomNo' => '18',],
        ],
      ],
     ];



  echo '<pre>';
  print_r($school['Classes']['Class+1']['ClassTiming']);
  ?>

</body>

</html>
