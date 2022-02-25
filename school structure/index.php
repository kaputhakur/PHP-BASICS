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

      'Classes' =>
      [
        //================================== Class10 =============================================

        'Class10' =>
        [
          'ClassRoom' => [
            'RoomNO11', 'RoomNO13(Computer Science)'
          ],
          'Subjects'=>
           [
            'Science'=>
                ['Subject' => 'science','Teacher' => 'Rajeev Kumar', 'Class' => '10th', 'ClaasTiming' => '9:30am-10:10am', 'RomNo' => '11'],
            'Hindi'=>
                ['Subject' => 'Hindi','Teacher' => 'Santosh', 'Class' => '10th', 'ClaasTiming' => '10:10am-10:50am', 'RomNo' => '11'],
            'Social science'=>   
                ['Subject' => 'Social science', 'Teacher' => 'Gopal', 'Class' => '10th', 'ClaasTiming' => '10:50am-11:30am', 'RomNo' => '11'],
            'Maths'=>
                ['Subject' => 'Maths','Teacher' => 'Lekhraj', 'Class' => '10th', 'ClaasTiming' => '11:30am-12:10pm', 'RomNo' => '11'],
            'Sanskrit'=>
                ['Subject' => 'Sanskrit', 'Teacher' => 'Palak Rana', 'Class' => '10th', 'ClaasTiming' => '12:10pm-12:50am', 'RomNo' => '11'],
            'English'=>
                ['Subject' => ' Computer science','Subject' => 'English', 'Teacher' => 'Sunita Kumar', 'Class' => '10th', 'ClaasTiming' => '1:30pm-2:10pm', 'RomNo' => '11'],
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
               ['Name' => 'Rajeev Kumar','Subject' => 'science', 'class' => '10th', 'classTiming' => '9:30am-10:10am', 'RomNo' => '11',],
            'Santosh'=> 
               ['Name' => 'Santosh','Subject' => 'Hindi', 'class' => '10th', 'classTiming' => '10:10am-10:50am', 'RomNo' => '11',],
            'Gopal'=>
               ['Name' => 'Gopal', 'Subject' => 'Social science', 'class' => '10th', 'classTiming' => '10:50am-11:30am', 'RomNo' => '11',],
            'Sunita'=>
               ['Name' => 'Sunita','Subject' => 'English', 'class' => '10th', 'classTiming' => '11:30am-12:10pm', 'RomNo' => '11',],
            'Palak Rana'=>
               ['Subject' => 'Sanskrit', 'class' => '10th', 'classTiming' => '12:10pm-12:50am', 'RomNo' => '11',],
            //[Lunch time:12:50pm-1:30pm]  
            'Lekhraj'=>
               ['Name' => 'Lekhraj','Name' => 'Palak Rana', 'Subject' => 'Maths', 'class' => '10th', 'classTiming' => '1:30pm-2:10pm', 'RomNo' => '11',],
            'Nitesh Kumar'=> 
               ['Name' => 'Nitesh Kumar', 'Subject' => 'Computer science', 'class' => '10th', 'classTiming' => '2:10pm-3:00', 'RomNo' => '13',],
          ],

          'ClassTiming' => [
            'Science'=>
              ['Subject' => 'Science','Timing' => '9:30am-10:10am', 'class' => '10th', 'RomNo' => '11', 'Teacher' => 'Rajeev Kumar'],
            'Hindi' =>
              ['Subject' => 'Hindi','Timing' => '10:10am-10:50am', 'class' => '10th' , 'RomNo' => '11', 'Teacher' => 'Rajeev Kumar'],
            'Social science'=>
              ['Subject' => 'Social science','Timing' => '10:50am-11:30am', 'class' => '10th' , 'RomNo' => '11', 'Teacher' => 'Gopal'],
            'English' =>
              ['Subject' => 'English', 'Timing' => '11:30am-12:10pm','class' => '10th', 'RomNo' => '11', 'Teacher' => 'Sunita'],
            'Sanskrit' => 
              ['Subject' => 'Sanskrit', 'Timing' => '12:10pm-12:50am','class' => '10th', 'RomNo' => '11', 'Teacher' => 'Palak Rana'],
            //[Lunch time:12:50pm-1:30pm] 
             'LunchTime'=>
               ['Timing=>12:50pm-1:30pm'] ,
            'Maths'  =>  
              ['Subject' => 'Maths','Timing' => '1:30pm-2:10pm', 'class' => '10th', 'RomNo' => '11', 'Teacher' => 'Lekhraj'],
            'Computer Science' => 
              ['Subject' => 'Computer science','Timing' => '2:10pm-3:00pm', 'class' => '10th', 'RomNo' => '13', 'Teacher' => 'Nitesh Kumar'],
          ],
        ],

        // ==================================================Class11=========================================================

        'Class+1' =>
        [
          'ClassRoom' => [
            'RoomNo14', 'RoomNo13(Computer Science)', 'RoomNo15(Chem.Lab)', 'RoomNo17(Phy.Lab)',
          ],
          'Subjects' =>
           [
            'Maths'=>
               ['Subject' => 'Maths', 'Teacher' => 'Nishant Verma', 'class' => '+1', 'classTiming' => '9:30am-10:30am', 'RomNo' => '14',],
            'Chemistry Theory'=>
               ['Subject' => 'Chemistry Theory', 'Teacher' => 'Kanchan Rawat', 'class' => '+1', 'classTiming' => '10:30am-11:30am', 'RomNo' => '14',],
            'Chemistry Practical'=>
               ['Subject' => 'Chemistry Practical','Teacher' => 'Kanchan Rawat', 'class' => '+1', 'Timing' => '10:30am-11:30am', 'RomNo' => '15(Chem.Lab)', 'Day' => ' Every Friday'],
            'Physcics Theory'=>
               ['Subject' => 'Physcics Theory','Teacher' => 'Neelam', 'class' => '+1', 'ClassTiming' => '11:30am-12:30pm', 'RomNo' => '14',],
            'Physcics Practical'=>
               ['Subject' => 'Physcics Practical','Teacher' => 'Neelam', 'class' => '+1', 'Timing' => '11:30am-12:30pm', 'RomNo' => '17(Phy.Lab)', 'Day' => 'Every Friday'],
            //[Lunch time 12:30pm-1:00pm] 
            'Computer science'=>
               ['Subject' => 'Computer science','Teacher' => 'Nitesh Kumar', 'class' => '+1', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '13',],
            'English'=>
                ['Subject' => 'English','Teacher' => 'Anita', 'class' => '+1', 'classTiming' => '2:00pm-3:00', 'RomNo' => '14',],

          ],
          'Students' => [
            'RollNo1' => ['Name' => 'Sachin Kuamr', 'RollNo' => '1', 'Age' => '16', 'class' => '+1', 'EmailId' => 'sachin343@gmail.com'],
            'RollNo2' =>  ['Name' => 'Vivek Thakur', 'RollNo' => '2', 'Age' => '17', 'class' => '+1', 'EmailId' => 'vivek58904@gmail.com'],
            'RollNo3' =>  ['Name' => 'Hiamnshi Thakur', 'RollNo' => '3', 'Age' => '16', 'class' => '+1', 'EmailId' => 'himanshi839@gmail.com'],
            'RollNo4' =>  ['Name' => 'Meenakshi', 'RollNo' => '4', 'Age' => '16', 'class' => '+1', 'EmailId' => 'Meenakshi34@gmail.com'],
            'RollNo5' =>['Name' => 'Romesh Thakur', 'RollNo' => '5', 'Age' => '16', 'class' => '+1', 'EmailId' => 'romesh985@gmail.com'],
            'RollNo6' =>  ['Name' => 'Mahima', 'RollNo' => '6', 'Age' => '15', 'class' => '+1', 'EmailId' => 'mahima@gmail.com'],
            'RollNo7' =>['Name' => 'Ankit', 'RollNo' => '7', 'Age' => '17', 'class' => '+1', 'EmailId' => 'ankit344@gmail.com'],
            'RollNo8' =>  ['Name' => 'Ekta', 'RollNo' => '8', 'Age' => '16', 'class' => '+1', 'EmailId' => 'ekta345@gmail.com'],
            'RollNo9' =>  ['Name' => 'Jyoti', 'RollNo' => '9', 'Age' => '16', 'class' => '+1', 'EmailId' => 'jyoti6576@gmail.com'],
            'RollNo10' => ['Name' => 'spana', 'RollNo' => '10', 'Age' => '16', 'class' => '+1', 'EmailId' => 'spana45546@gmail.com'],
            'RollNo11' =>  ['Name' => 'Manish Rana', 'RollNo' => '11', 'Age' => '17', 'class' => '+1', 'EmailId' => 'manishrana@gmail.com'],
            'RollNo12' => ['Name' => 'Digvijay', 'RollNo' => '12', 'Age' => '16', 'class' => '+1', 'EmailId' => 'digu23@gmail.com'],
            'RollNo13' =>['Name' => 'Ajay tahkur', 'RollNo' => '13', 'Age' => '16', 'class' => '+1', 'EmailId' => 'ajayx854@gmail.com'],
          ],
          'Teachers' => [
            'Nishant Verma'=>
              ['Name' => 'Nishant Verma','Subject' => 'Maths', 'class' => '+1', 'classTiming' => '9:30am-10:30am', 'RomNo' => '14',],
            'Kanchan Rawat'=>
              ['Name' => 'Kanchan Rawat','Subject' => 'Chemistry Theory', 'class' => '+1', 'classTiming' => '10:30am-11:30am', 'RomNo' => '14',],
            'Neelam'=>
              ['Name' => 'Neelam','Subject' => 'Physcics Theory', 'class' => '+1', 'ClassTiming' => '11:30am-12:30pm', 'RomNo' => '14',],
            //[Lunch time 12:30pm-1:00pm]  
            'Nitesh Kumar' =>
              ['Name' => 'Nitesh Kumar', 'Subject' => 'Computer science', 'class' => '+1', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '13',],
            'Anita ' =>
             [ 'Name' => 'Anita','Subject' => 'English', 'class' => '+1', 'classTiming' => '2:00pm-3:00', 'RomNo' => '14',],
          ],
          'ClassTiming'=> [
            'Maths'=>
              ['Subject' => 'Maths','Timing' => '9:30am-10:30am', 'class' => '+1','RomNo' => '14', 'Teacher' => 'Nishant Verma'],
            'Chemistry Theory'=>
              ['Subject' => 'Chemistry Theory','Timing' => '10:30am-11:30am', 'class' => '+1',  'RomNo' => '14', 'Teacher' => 'Kanchan Rawat'],
              /*Chem.Practical */
            'Chemistry Practical'=>
              ['Subject' => 'Chemistry Practical','Timing' => '10:30am-11:30am', 'class' => '+1','RomNo' => '15(Chem.Lab)', 'Teacher' => 'Kanchan Rawat', 'Day' => 'Every Friday'],
            'Physcics Theory'=> 
              ['Subject' => 'Physcics Theory', 'Timing' => '11:30am-12:30pm', 'class' => '+1', 'RomNo' => '14', 'Teacher' => 'Neelam'],
              /*Phys. Practical */
            'Physcics Practical'=>
              ['Subject' => 'Physcics Practical', 'Timing' => '11:30am-12:30pm', 'class' => '+1', 'RomNo' => '17(phy.Lab)', 'Teacher' => 'Neelam', 'Day' => 'Every Friday'],
              //[Lunch time:12:50pm-1:30pm]  
            'Computer science'=>
              ['Subject' => 'Computer science','Timing' => '1:00pm-2:00pm', 'class' => '+1','RomNo' => '13', 'Teacher' => 'Nitesh Kumar'],
            'English'=>
              ['Subject' => 'English','Timing' => '2:00pm-3:00pm',  'class' => '+1',  'RomNo' => '14', 'Teacher' => 'Anita'],
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
                ['Subject' => 'Computer science','Teacher' => 'Nitesh Kumar', 'class' => '+2', 'classTiming' => '9:00am-10:30am', 'RomNo' => '13',],
              'Physcics Theory' =>
                ['Subject' => 'Physcics Theory','Teacher' => 'Neelam', 'class' => '+2', 'ClassTiming' => '10:30am-11:30am', 'RomNo' => '18',],
              'Physcics Practical' =>
                ['Subject' => 'Physcics Practical', 'Teacher' => 'Neelam', 'class' => '+2', 'Timing' => '10:30am-11:30am', 'RomNo' => '17(Phy.Lab)', 'Day' => 'Every Thusrday'],
              'Chemistry Theory' =>
                [ 'Subject' => 'Chemistry Theory','Teacher' => 'Kanchan Rawat', 'class' => '+2', 'classTiming' => '11:30am-12:30pm', 'RomNo' => '18',],
              'Chemistry Practical' => 
                [ 'Subject' => 'Chemistry Practical','Teacher' => 'Kanchan Rawat', 'class' => '+2', 'Timing' => '11:30am-12:30pm', 'RomNo' => '15(Chem.Lab)', 'Day' => 'Every Thusrday'],
              'English'=>
                ['Subject' => 'English', 'Teacher' => 'Anita', 'class' => '+2', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '18',],
              'Maths' =>
                ['Subject' => 'Maths','Teacher' => 'Nishant Verma', 'class' => '+2', 'classTiming' => '2:00pm-3:00pm', 'RomNo' => '18',],
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
                 ['Name' => 'Nitesh Kumar','subject'=>'Computer science','class' => '+2', 'classTiming' => '9:00am-10:30am', 'RomNo' => '13',],
              'Neelam'=>
                ['Name' => 'Neelam', 'Subject' => 'Physcics Theory', 'class' => '+2', 'ClassTiming' => '10:30am-11:30am', 'RomNo' => '18',],
              'Kanchan Rawat' =>
                [ 'Name' => 'Kanchan Rawat','Subject' => 'Chemistry Theory', 'class' => '+2', 'classTiming' => '11:30am-12:30pm', 'RomNo' => '18',],
              //[Lunch time 12:30pm-1:00pm]  
              'Anita' =>
                ['Name' => 'Anita', 'Subject' => 'English', 'class' => '+2', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '18',],
              'Nishant Verma' =>
                [ 'Name' => 'Nishant Verma','Subject' => 'Maths', 'class' => '+2', 'classTiming' => '2:00pm-3:00pm', 'RomNo' => '18',],
          ],
          'ClassTiming' => [
              'Computer science' =>
                ['Subject' => 'Computer science','Timing' => '9:30am-10:30am', 'class' => '+2', 'RomNo' => '13', 'Teacher' => 'Nitesh Kumar'],
              'Physcics Theory'=>
                ['Subject' => 'Physcics Theory', 'class' => '+2', 'Timing' => '10:30am-11:30am', 'RomNo' => '18', 'Teacher' => 'Neelam'],
                /*Phys. Practical */
              'Physcics Practical' => 
                ['Subject' => 'Physcics Practical', 'Timing' => '10:30am-11:30am', 'class' => '+2',  'RomNo' => '17(phy.Lab)', 'Teacher' => 'Neelam', 'Day' => 'Every Thursday'],
              'Chemistry Theory' =>
                ['Subject' => 'Chemistry Theory', 'Timing' => '11:30am-12:30pm', 'class' => '+2',  'RomNo' => '18', 'Teacher' => 'Kanchan Rawat'],
                /*Chem.Practical */
              'Chemistry Practical'=>
                ['Subject' => 'Chemistry Practical', 'Timing' => '11:30am-12:30pm','class' => '+2',  'RomNo' => '15(Chem.Lab)', 'Teacher' => 'Kanchan Rawat', 'Day' => 'EveryThursday'],
                //[Lunch time:12:50pm-1:30pm]  
              'English' =>
                  ['Subject' => 'English','Timing' => '1:00pm-2:00pm', 'class' => '+2', 'RomNo' => '18', 'Teacher' => 'Anita'],
              'Maths' =>
                  ['Subject' => 'Maths', 'Timing' => '2:00pm-3:00pm','class' => '+2',  'RomNo' => '13(computer)', 'Teacher' => 'Nishant Verma'],
          ],
        ],
      ],

      // ===============================================Subjects=============================================
      'Subjects' =>
      [
        'Class10' =>
        [
          'Subject'=> [
              'Science' => 
                ['Subject' => 'science', 'Teacher' => 'Rajeev Kumar', 'Class' => '10th', 'ClaasTiming' => '9:30am-10:10am'],
              'Hindi' => 
                ['Subject' => 'Hindi', 'Teacher' => 'Santosh', 'Class' => '10th', 'ClaasTiming' => '10:10am-10:50am'],
              'Social' =>   
                ['Subject' => 'Social science', 'Teacher' => 'Gopal', 'Class' => '10th', 'ClaasTiming' => '10:50am-11:30am'],
              'Maths' =>  
                ['Subject' => 'Maths', 'Teacher' => 'Lekhraj', 'Class' => '10th', 'ClaasTiming' => '11:30am-12:10pm'],
              'Sanskrit' => 
                ['Subject' => 'Sanskrit', 'Teacher' => 'Palak Rana', 'Class' => '10th', 'ClaasTiming' => '12:10pm-12:50am'],
              'English' => 
                ['Subject' => 'English', 'Teacher' => 'Sunita Kumar', 'Class' => '10th', 'ClaasTiming' => '1:30pm-2:10pm'],
              'Computer Science' => 
              ['Subject' => ' Computer science', 'Teacher' => 'Nitesh Kumar', 'Class' => '10th', 'ClaasTiming' => '2:10pm-3:00'],
          ],
          'Teacher'=>[
            'Rajeev Kumar'=>
               ['Name' => 'Rajeev Kumar','Subject' => 'science', 'class' => '10th', 'classTiming' => '9:30am-10:10am', 'RomNo' => '11',],
            'Santosh'=> 
                ['Name' => 'Santosh','Subject' => 'Hindi', 'class' => '10th', 'classTiming' => '10:10am-10:50am', 'RomNo' => '11',],
            'Gopal'=>
                ['Name' => 'Gopal', 'Subject' => 'Social science', 'class' => '10th', 'classTiming' => '10:50am-11:30am', 'RomNo' => '11',],
            'Sunita'=>
                ['Name' => 'Sunita','Subject' => 'English', 'class' => '10th', 'classTiming' => '11:30am-12:10pm', 'RomNo' => '11',],
            'Palak Rana'=>
                ['Subject' => 'Sanskrit', 'class' => '10th', 'classTiming' => '12:10pm-12:50am', 'RomNo' => '11',],
            //[Lunch time:12:50pm-1:30pm]  
            'Lekhraj'=>
                ['Name' => 'Lekhraj','Name' => 'Palak Rana', 'Subject' => 'Maths', 'class' => '10th', 'classTiming' => '1:30pm-2:10pm', 'RomNo' => '11',],
            'Nitesh Kumar'=> 
                ['Name' => 'Nitesh Kumar', 'Subject' => 'Computer science', 'class' => '10th', 'classTiming' => '2:10pm-3:00', 'RomNo' => '13',],
          ],
          
        ],
   
       'Class+1' =>
        [
          'Subject'=>[
              'Maths'=>
                ['Subject' => 'Maths', 'Teacher' => 'Nishant Verma', 'class' => '+1', 'classTiming' => '9:30am-10:30am', 'RomNo' => '14',],
              'Chemistry Theory' => 
                ['Subject' => 'Chemistry Theory', 'Teacher' => 'Kanchan Rawat', 'class' => '+1', 'classTiming' => '10:30am-11:30am', 'RomNo' => '14',],
              'Chemistry Practical' => 
                ['Subject' => 'Chemistry Practical', 'Teacher' => 'Kanchan Rawat', 'class' => '+1', 'Timing' => '10:30am-11:30am', 'RomNo' => '15(Chem.Lab)', 'Day' => ' Every Friday'],
              'Physcics Theory' =>
                ['Subject' => 'Physcics Theory', 'Teacher' => 'Neelam', 'class' => '+1', 'ClassTiming' => '11:30am-12:30pm', 'RomNo' => '14',],
              'Physcics Practical' => 
                ['Subject' => 'Physcics Practical', 'Teacher' => 'Neelam', 'class' => '+1', 'Timing' => '11:30am-12:30pm', 'RomNo' => '17(Phy.Lab)', 'Day' => 'Every Friday'],
              'Computer science' =>
                ['Subject' => 'Computer science', 'Teacher' => 'Nitesh Kumar', 'class' => '+1', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '13',],
              'English' => 
                ['Subject' => 'English', 'Teacher' => 'Anita', 'class' => '+1', 'classTiming' => '2:00pm-3:00', 'RomNo' => '14',],
            ],
          'Teachers' => [
                'Rajeev Kumar'=>
                   ['Name' => 'Rajeev Kumar','Subject' => 'science', 'class' => '10th', 'classTiming' => '9:30am-10:10am', 'RomNo' => '11',],
                'Santosh'=> 
                   ['Name' => 'Santosh','Subject' => 'Hindi', 'class' => '10th', 'classTiming' => '10:10am-10:50am', 'RomNo' => '11',],
                'Gopal'=>
                   ['Name' => 'Gopal', 'Subject' => 'Social science', 'class' => '10th', 'classTiming' => '10:50am-11:30am', 'RomNo' => '11',],
                'Sunita'=>
                   ['Name' => 'Sunita','Subject' => 'English', 'class' => '10th', 'classTiming' => '11:30am-12:10pm', 'RomNo' => '11',],
                'Palak Rana'=>
                   ['Subject' => 'Sanskrit', 'class' => '10th', 'classTiming' => '12:10pm-12:50am', 'RomNo' => '11',],
                //[Lunch time:12:50pm-1:30pm]  
                'Lekhraj'=>
                   ['Name' => 'Lekhraj','Name' => 'Palak Rana', 'Subject' => 'Maths', 'class' => '10th', 'classTiming' => '1:30pm-2:10pm', 'RomNo' => '11',],
                'Nitesh Kumar'=> 
                   ['Name' => 'Nitesh Kumar', 'Subject' => 'Computer science', 'class' => '10th', 'classTiming' => '2:10pm-3:00', 'RomNo' => '13',],
              ],
        ],

        'Class+2' =>
        [
          'Subject'=>[
            'Computer science' =>
              ['Subject' => 'Computer science', 'Teacher' => 'Nitesh Kumar', 'class' => '+2', 'classTiming' => '9:00am-10:30am', 'RomNo' => '13',],
            'Physcics Theory' => 
              ['Subject' => 'Physcics Theory', 'Teacher' => 'Neelam', 'class' => '+2', 'ClassTiming' => '10:30am-11:30am', 'RomNo' => '18',],
            'Physcics Practical' => 
              ['Subject' => 'Physcics Practical', 'Teacher' => 'Neelam', 'class' => '+2', 'Timing' => '10:30am-11:30am', 'RomNo' => '17(Phy.Lab)', 'Day' => 'Every Thusrday'],
            'Chemistry Theory' =>
              ['Subject' => 'Chemistry Theory', 'Teacher' => 'Kanchan Rawat', 'class' => '+2', 'classTiming' => '11:30am-12:30pm', 'RomNo' => '18',],
            'Chemistry Practical' => 
              ['Subject' => 'Chemistry Practical', 'Teacher' => 'Kanchan Rawat', 'class' => '+2', 'Timing' => '11:30am-12:30pm', 'RomNo' => '15(Chem.Lab)', 'Day' => 'Every Thusrday'],
            'English' => 
              ['Subject' => 'English', 'Name' => 'Teacher', 'class' => '+2', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '18',],
            'Maths' => 
              ['Subject' => 'Maths', 'Teacher' => 'Nishant Verma', 'class' => '+2', 'classTiming' => '2:00pm-3:00pm', 'RomNo' => '18',],
          ],
          'Teachers' => [
            'Nitesh Kumar' =>
               ['Name' => 'Nitesh Kumar','subject'=>'Computer science','class' => '+2', 'classTiming' => '9:00am-10:30am', 'RomNo' => '13',],
            'Neelam'=>
              ['Name' => 'Neelam', 'Subject' => 'Physcics Theory', 'class' => '+2', 'ClassTiming' => '10:30am-11:30am', 'RomNo' => '18',],
            'Kanchan Rawat' =>
              [ 'Name' => 'Kanchan Rawat','Subject' => 'Chemistry Theory', 'class' => '+2', 'classTiming' => '11:30am-12:30pm', 'RomNo' => '18',],
            //[Lunch time 12:30pm-1:00pm]  
            'Anita' =>
              ['Name' => 'Anita', 'Subject' => 'English', 'class' => '+2', 'classTiming' => '1:00pm-2:00pm', 'RomNo' => '18',],
            'Nishant Verma' =>
              [ 'Name' => 'Nishant Verma','Subject' => 'Maths', 'class' => '+2', 'classTiming' => '2:00pm-3:00pm', 'RomNo' => '18',],
          ],
        ],
        
      ],
      
      //=================================================Teachers========================================= 
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
      
    ];

  echo '<pre>';
  print_r($school['Classes']['Class+1']['ClassTiming']['Chemistry Practical']);
  ?>

</body>

</html>
