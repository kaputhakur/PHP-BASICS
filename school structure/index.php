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
          'Rooms' => [
            ['Room' => '11', 'Capicity' => '30', 'Desk' => '15',],
            ['Room' => '13', 'Title' => 'Computer Lab', 'Computers' => '50', 'Capicity' => '40',],
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
            [
              'Name' => 'Kalpana Thakur',
              'RollNo' => '1',
              'Age' => '15',
              'Gender' => 'Female',
              'DOB' => '',
              'EmailId' => 'kalpana071@gmail.com',
              'Markslist' => [
                'Maths' => '67',
                'Chemistry' => '58',
                'Physics' => '69',
                'English' => '65',
                'Computer' => '86',
                'Total' => '345',
                'Average' => '69',
                'Grade' => 'A',
              ],
            ],
            [
              'Name' => 'KusamLata',
              'RollNo' => '2',
              'Age' => '15',
              'Gender' => 'Female',
              'DOB' => '',
              'EmailId' => 'Kusam234@gmail.com',
              'Markslist' => [
                'Maths' => '60',
                'Chemistry' => '68',
                'Physics' => '71',
                'English' => '70',
                'Computer' => '80',
                'Total' => '',
                'Average' => '',
                'Grade' => '',
              ],
            ],
            [
              'Name' => 'Sushma Thakur',
              'RollNo' => '3',
              'Age' => '15',
              'Gender' => 'Female',
              'DOB' => '',
              'EmailId' => 'sushma839@gmail.com',
              'Markslist' => [
                'Maths' => '67',
                'Chemistry' => '58',
                'Physics' => '69',
                'English' => '65',
                'Computer' => '86',
                'Total' => '345',
                'Average' => '69',
                'Grade' => 'A',
              ],
            ],

            [
              'Name' => 'Yash Pal',
              'RollNo' => '4',
              'Age' => '16',
              'Gender' => 'Male',
              'DOB' => '',
              'EmailId' => 'Yashpal@gmail.com',
              'Markslist' => [
                'Maths' => '60',
                'Chemistry' => '68',
                'Physics' => '71',
                'English' => '70',
                'Computer' => '80',
                'Total' => '',
                'Average' => '',
                'Grade' => '',
              ],
            ],
            [
              'Name' => 'Sona Kumari',
              'RollNo' => '5',
              'Age' => '15',
              'Gender' => 'Female',
              'DOB' => '',
              'EmailId' => 'sona345@gmail.com',
              'Markslist' => [
                'Maths' => '67',
                'Chemistry' => '58',
                'Physics' => '69',
                'English' => '65',
                'Computer' => '86',
                'Total' => '345',
                'Average' => '69',
                'Grade' => 'A',
              ],

            ],
            [
              'Name' => 'Satish Kumar',
              'RollNo' => '6',
              'Age' => '16',
              'Gender' => 'Male',
              'DOB' => '',
              'EmailId' => 'satish6576@gmail.com',
              'Markslist' => [
                'Maths' => '78',
                'Chemistry' => '57',
                'Physics' => '45',
                'English' => '89',
                'Computer' => '45',
                'Total' => '314',
                'Average' => '62.8',
                'Grade' => 'B+',
              ],
            ],
            [
              'Name' => 'Dharmender thakur',
              'RollNo' => '7',
              'Age' => '15',
              'Gender' => 'Male',
              'DOB' => '',
              'EmailId' => 'dham45546@gmail.com',
              'Markslist' => [
                'Maths' => '78',
                'Chemistry' => '57',
                'Physics' => '45',
                'English' => '89',
                'Computer' => '45',
                'Total' => '314',
                'Average' => '62.8',
                'Grade' => 'B+',
              ],
            ],
          ],
          'Teachers' => [
            ['Name' => 'Rajeev Kumar', 'Subject' => 'science', 'Time' => '9:30am-10:10am', 'RoomNo.' => '11',],
            ['Name' => 'Santosh', 'Subject' => 'Hindi', 'Time' => '10:10am-10:50am', 'RoomN.' => '11',],
            ['Name' => 'Gopal', 'Subject' => 'Social science', 'Time' => '10:50am-11:30am', 'RoomNo.' => '11',],
            ['Name' => 'Sunita', 'Subject' => 'English', 'Time' => '11:30am-12:10pm', 'RoomNo.' => '11',],
            ['Name' => 'Palak Rana', 'Subject' => 'Sanskrit', 'Time' => '12:10pm-12:50am', 'RoomNo.' => '11',],
            ['Lunch time' => '12:50pm-1:30pm',],
            ['Name' => 'Lekhraj', 'Subject' => 'Maths', 'Time' => '1:30pm-2:10pm', 'RoomNo.' => '11',],
            ['Name' => 'Nitesh Kumar', 'Subject' => 'Computer science', 'Time' => '2:10pm-3:00', 'RoomNo.' => '13',],
          ],

          'Time' => [
            ['Subject' => 'Science', 'Time' => '9:30am-10:10am', 'Teacher' => 'Rajeev Kumar', 'RomNo' => '11',],
            ['Subject' => 'Hindi', 'Time' => '10:10am-10:50am', 'Teacher' => 'Rajeev Kumar', 'RomNo' => '11',],
            ['Subject' => 'Social science', 'Time' => '10:50am-11:30am', 'Teacher' => 'Gopal', 'RomNo' => '11',],
            ['Subject' => 'English', 'Time' => '11:30am-12:10pm', 'Teacher' => 'Sunita', 'RomNo' => '11',],
            ['Subject' => 'Sanskrit', 'Time' => '12:10pm-12:50am', 'Teacher' => 'Palak Rana', 'RomNo' => '11',],
            ['Lunch time' => '12:50pm-1:30pm'],
            ['Subject' => 'Maths', 'Time' => '1:30pm-2:10pm', 'RomNo' => '11', 'Teacher' => 'Lekhraj'],
            ['Subject' => 'Computer science', 'Time' => '2:10pm-3:00pm', 'RomNo' => '13', 'Teacher' => 'Nitesh Kumar'],
          ],
        ],

        // ==================================================Class11 start=========================================================

        '11th' =>
        [
          'Rooms' => [
            ['Room' => '14', 'Capicity' => '25',],
            ['Room' => '13', 'Title' => 'Computer Lab', 'Computers' => '50', 'Capicity' => '40',],
            ['Room' => '15', 'Title' => 'Chem.Lab', 'Capicity' => '30',],
            ['Room' => '17', 'Title' => 'Phy.Lab', 'Capicity' => '30',],

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
            [
              'Name' => 'Sachin Kuamr',
              'RollNo' => '1',
              'Age' => '16',
              'Gender' => 'Male',
              'EmailId' => 'sachin343@gmail.com',
              'Markslist' => [
                'Maths' => '78',
                'Chemistry' => '57',
                'Physics' => '45',
                'English' => '89',
                'Computer' => '45',
                'Total' => '314',
                'Average' => '62.8',
                'Grade' => 'B+',
              ],
            ],
            [
              'Name' => 'Vivek Thakur',
              'RollNo' => '2',
              'Age' => '17',
              'Gender' => 'Male',
              'EmailId' => 'vivek58904@gmail.com',
              'Markslist' => [
                'Maths' => '67',
                'Chemistry' => '58',
                'Physics' => '69',
                'English' => '65',
                'Computer' => '86',
                'Total' => '345',
                'Average' => '69',
                'Grade' => 'A',
              ],
            ],
            [
              'Name' => 'Hiamnshi Thakur',
              'RollNo' => '3',
              'Age' => '16',
              'Gender' => 'Female',
              'EmailId' => 'himanshi839@gmail.com',
              'Markslist' => [
                'Maths' => '70',
                'Chemistry' => '78',
                'Physics' => '71',
                'English' => '74',
                'Computer' => '80',
                'Total' => '373',
                'Average' => '74.6',
                'Grade' => 'A+',
              ],
            ],
            [
              'Name' => 'Meenakshi',
              'RollNo' => '4',
              'Age' => '16',
              'Gender' => 'Female',
              'EmailId' => 'Meenakshi34@gmail.com',
              'Markslist' => [
                'Maths' => '=67',
                'Chemistry' => '78',
                'Physics' => '78',
                'English' => '87',
                'Computer' => '88',
                'Total' => '398',
                'Average' => '79.6',
                'Grade' => 'A+',
              ],
            ],
            [
              'Name' => 'Romesh Thakur',
              'RollNo' => '5', 'Age' => '16',
              'Gender' => 'Male',
              'EmailId' => 'romesh985@gmail.com',
              'Markslist' => [
                'Maths' => '60',
                'Chemistry' => '68',
                'Physics' => '71',
                'English' => '70',
                'Computer' => '80',
                'Total' => '',
                'Average' => '',
                'Grade' => '',
              ],
            ],
            [
              'Name' => 'Mahima',
              'RollNo' => '6', 'Age' => '15',
              'Gender' => 'Female',
              'EmailId' => 'mahima@gmail.com',
              'Markslist' => [
                'Maths' => '=67',
                'Chemistry' => '78',
                'Physics' => '78',
                'English' => '87',
                'Computer' => '88',
                'Total' => '398',
                'Average' => '79.6',
                'Grade' => 'A+',
              ],
            ],
            [
              'Name' => 'Ankit',
              'RollNo' => '7', 'Age' => '17',
              'Gender' => 'Male',
              'EmailId' => 'ankit344@gmail.com',
              'Markslist' => [
                'Maths' => '=67',
                'Chemistry' => '78',
                'Physics' => '78',
                'English' => '87',
                'Computer' => '88',
                'Total' => '398',
                'Average' => '79.6',
                'Grade' => 'A+',
              ],
            ],
            [
              'Name' => 'Ekta',
              'RollNo' => '8', 'Age' => '16',
              'Gender' => 'Female',
              'EmailId' => 'ekta345@gmail.com',
              'Markslist' => [
                'Maths' => '67',
                'Chemistry' => '58',
                'Physics' => '69',
                'English' => '65',
                'Computer' => '86',
                'Total' => '345',
                'Average' => '69',
                'Grade' => 'A',
              ],
            ],
            [
              'Name' => 'Jyoti',
              'RollNo' => '9',
              'Age' => '16',
              'Gender' => 'Female',
              'EmailId' => 'jyoti6576@gmail.com',
              'Markslist' => [
                'Maths' => '67',
                'Chemistry' => '58',
                'Physics' => '48',
                'English' => '47',
                'Computer' => '60',
                'Total' => '280',
                'Average' => '56',
                'Grade' => 'C+',

              ],
            ],
            [
              'Name' => 'spana',
              'RollNo' => '10',
              'Age' => '16',
              'Gender' => 'Female',
              'EmailId' => 'spana45546@gmail.com',
              'Markslist' => [
                'Maths' => '60',
                'Chemistry' => '68',
                'Physics' => '71',
                'English' => '70',
                'Computer' => '80',
                'Total' => '349',
                'Average' => '69.8',
                'Grade' => 'A',
              ],
            ],
            [
              'Name' => 'Manish Rana',
              'RollNo' => '11',
              'Age' => '17',
              'Gender' => 'Female',
              'EmailId' => 'manishrana@gmail.com',
              'Markslist' => [
                'Maths' => '67',
                'Chemistry' => '58',
                'Physics' => '48',
                'English' => '47',
                'Computer' => '60',
                'Total' => '280',
                'Average' => '56',
                'Grade' => 'C+',
              ],
            ],
            [
              'Name' => 'Digvijay',
              'RollNo' => '12',
              'Age' => '16',
              'Gender' => 'Male',
              'EmailId' => 'digu23@gmail.com',
              'Markslist' => [
                'Maths' => '67',
                'Chemistry' => '58',
                'Physics' => '48',
                'English' => '47',
                'Computer' => '60',
                'Total' => '280',
                'Average' => '56',
                'Grade' => 'C+',
              ],
            ],
            [
              'Name' => 'Ajay tahkur',
              'RollNo' => '13',
              'Age' => '16',
              'Gender' => 'Male',
              'EmailId' => 'ajayx854@gmail.com',
              'Markslist' => [
                'Maths' => '78',
                'Chemistry' => '57',
                'Physics' => '45',
                'English' => '89',
                'Computer' => '45',
                'Total' => '314',
                'Average' => '62.8',
                'Grade' => 'B+',
              ],
            ],
            // 'MarksList' => [
            //   'Name' => 'Sachin Kuamr',
            //   'Maths' => '60',
            //   'Chemistry' => '68',
            //   'Physics' => '71',
            //   'English' => '70',
            //   'Computer' => '80',
            //   'Total' => '',
            //   'Average' => '',
            //   'Grade' => '',
            // ],

          ],
        ],
        'Teachers' => [
          ['Name' => 'Nishant Verma', 'Subject' => 'Maths', 'Time' => '9:30am-10:30am', 'RoomNo' => '14',],
          ['Name' => 'Kanchan Rawat', 'Subject' => 'Chemistry Theory', 'Time' => '10:30am-11:30am', 'RoomNo' => '14',],
          ['Name' => 'Kanchan Rawat', 'Subject' => 'Chemistry Practical', 'Time' => '10:30am-11:30am', 'RoomNo' => '15(Chem.Lab)', 'Day' => ' Every Friday'],
          ['Name' => 'Neelam', 'Subject' => 'Physcics Theory', 'Time' => '11:30am-12:30pm', 'RoomNo' => '14',],
          ['Name' => 'Neelam', 'Subject' => 'Physcics Practical', 'Time' => '11:30am-12:30pm', 'RoomNo' => '17(Phy.Lab)', 'Day' => 'Every Friday'],
          ['Lunch time' => ' 12:30pm-1:00pm'],
          ['Name' => 'Nitesh Kumar', 'Subject' => 'Computer science', 'Time' => '1:00pm-2:00pm', 'RoomNo' => '13',],
          ['Name' => 'Anita', 'Subject' => 'English', 'Time' => '2:00pm-3:00', 'RoomNo' => '14',],
        ],
        'Time' => [
          ['Subject' => 'Maths', 'Time' => '9:30am-10:30am', 'Teacher' => 'Nishant Verma', 'RoomNo' => '14',],
          ['Subject' => 'Chemistry Theory', 'Time' => '10:30am-11:30am',  'Teacher' => 'Kanchan Rawat', 'RoomNo' => '14',],
          ['Subject' => 'Chemistry Practical', 'Time' => '10:30am-11:30am', 'Teacher' => 'Kanchan Rawat', 'RoomNo' => '15(Chem.Lab)',  'Day' => 'Every Friday',],
          ['Subject' => 'Physcics Theory', 'Time' => '11:30am-12:30pm', 'Teacher' => 'Neelam', 'RoomNo' => '14',],
          ['Subject' => 'Physcics Practical', 'Time' => '11:30am-12:30pm', 'Teacher' => 'Neelam', 'RoomNo' => '17(Phy.Lab)', 'Day' => 'Every Friday,'],
          ['Lunch time' => ' 12:30pm-1:00pm'],
          ['Subject' => 'Computer science', 'Time' => '1:00pm-2:00pm', 'Teacher' => 'Nitesh Kumar', 'RoomNo' => '13',],
          ['Subject' => 'English', 'Time' => '2:00pm-3:00pm', 'Teacher' => 'Anita', 'RoomNo' => '14',],
        ],

      ],

      // ======================================================class12 Start ==========================================================
      '12th' =>
      [
        'Rooms' => [
          ['Room' => '18', 'Capicity' => '30',],
          ['Room' => '13', 'Title' => 'Computer Lab', 'Computers' => '50', 'Capicity' => '40',],
          ['Room' => '15', 'Title' => 'Chem.Lab', 'Capicity' => '30',],
          ['Room' => '17', 'Title' => 'Phy.Lab', 'Capicity' => '30',],
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
          [
            'Name' => 'Nishant Thakur',
            'RollNo' => '1',
            'Age' => '17',
            'Gender' => 'Male',
            'EmailId' => 'nisant343@gmail.com',
            'Markslist' => [
              'Maths' => '78',
              'Chemistry' => '57',
              'Physics' => '45',
              'English' => '89',
              'Computer' => '45',
              'Total' => '314',
              'Average' => '62.8',
              'Grade' => 'B+',
            ],
          ],
          [
            'Name' => 'Shivani',
            'RollNo' => '2',
            'Age' => '17',
            'Gender' => 'Female',
            'EmailId' => 'shivani434@gmail.com',
            'Markslist' => [
              'Maths' => '78',
              'Chemistry' => '57',
              'Physics' => '45',
              'English' => '89',
              'Computer' => '45',
              'Total' => '314',
              'Average' => '62.8',
              'Grade' => 'B+',
            ],
          ],
          [
            'Name' => 'Neha',
            'RollNo' => '3',
            'Age' => '17',
            'Gender' => 'Female',
            'EmailId' => 'neha4345@gmail.com',
            'Markslist' => [
              'Maths' => '78',
              'Chemistry' => '57',
              'Physics' => '45',
              'English' => '89',
              'Computer' => '45',
              'Total' => '314',
              'Average' => '62.8',
              'Grade' => 'B+',
            ],
          ],
          [
            'Name' => 'Divya Mahajan',
            'RollNo' => '4',
            'Age' => '17',
            'Gender' => 'Female',
            'EmailId' => 'divya343@gmail.com',
            'Markslist' => [
              'Maths' => '78',
              'Chemistry' => '57',
              'Physics' => '45',
              'English' => '89',
              'Computer' => '45',
              'Total' => '314',
              'Average' => '62.8',
              'Grade' => 'B+',
            ],
          ],
          [
            'Name' => 'Sanya',
            'RollNo' => '5',
            'Age' => '17',
            'Gender' => 'Female',
            'EmailId' => 'sanya66@gmail.com',
            'Markslist' => [
              'Maths' => '78',
              'Chemistry' => '57',
              'Physics' => '45',
              'English' => '89',
              'Computer' => '45',
              'Total' => '314',
              'Average' => '62.8',
              'Grade' => 'B+',
            ],
          ],
          [
            'Name' => 'Simarn',
            'RollNo' => '6',
            'Age' => '18',
            'Gender' => 'Female',
            'EmailId' => 'simarn65@gmail.com',
            'Markslist' => [
              'Maths' => '78',
              'Chemistry' => '57',
              'Physics' => '45',
              'English' => '89',
              'Computer' => '45',
              'Total' => '314',
              'Average' => '62.8',
              'Grade' => 'B+',
            ],
          ],
          [,
            'Name' => 'Arun',
            'RollNo' => '7',
            'Age' => '18',
            'Gender' => 'Male',
            'EmailId' => 'arun565@gmail.com',
            'Markslist' => [
              'Maths' => '78',
              'Chemistry' => '57',
              'Physics' => '45',
              'English' => '89',
              'Computer' => '45',
              'Total' => '314',
              'Average' => '62.8',
              'Grade' => 'B+',
            ],
          ],

        ],
        'Teachers' => [
          ['Name' => 'Nitesh Kumar', 'Subject' => 'Computer science', 'Time' => '9:00am-10:30am', 'RoomNo' => '13',],
          ['Name' => 'Neelam', 'Subject' => 'Physcics Theory', 'Time' => '10:30am-11:30am', 'RoomNo' => '18',],
          ['Name' => 'Neelam', 'Subject' => 'Physcics Practical', 'Time' => '10:30am-11:30am', 'RoomNo' => '17(Phy.Lab)', 'Day' => 'Every Thusrday'],
          ['Name' => 'Kanchan Rawat', 'Subject' => 'Chemistry Theory', 'Time' => '11:30am-12:30pm', 'RoomNo' => '18',],
          ['Name' => 'Kanchan Rawat', 'Subject' => 'Chemistry Practical', 'Time' => '11:30am-12:30pm', 'RoomNo' => '15', 'Day' => 'Every Thusrday'],
          ['Lunch time' => ' 12:30pm-1:00pm'],
          ['Name' => 'Anita', 'Subject' => 'English', 'Time' => '1:00pm-2:00pm', 'RoomNo' => '18',],
          ['Name' => 'Nishant Verma', 'Subject' => 'Maths', 'Time' => '2:00pm-3:00pm', 'RoomNo' => '18',],
        ],
        'Time' => [
          ['Subject' => 'Computer science', 'Time' => '9:30am-10:30am', 'RoomNo' => '13', 'Teacher' => 'Nitesh Kumar',],
          ['Subject' => 'Physcics Theory', 'Time' => '10:30am-11:30am', 'RoomNo' => '18', 'Teacher' => 'Neelam',],
          ['Subject' => 'Physcics Practical', 'Time' => '10:30am-11:30am', 'Teacher' => 'Neelam',  'RoomNo' => '17', 'Teacher' => 'Neelam', 'Day' => 'Every Thursday',],
          ['Subject' => 'Chemistry Practical', 'Time' => '11:30am-12:30pm',  'Teacher' => 'Kanchan Rawat', 'RoomNo' => '15', 'Day' => 'EveryThursday',],
          ['Lunch time' => ' 12:30pm-1:00pm'],
          ['Subject' => 'English', 'Time' => '1:00pm-2:00pm', 'RoomNo' => '18', 'Teacher' => 'Anita'],
          ['Subject' => 'Maths', 'Time' => '2:00pm-3:00pm', 'RoomNo' => '13', 'Teacher' => 'Nishant Verma',],
        ],
      ],


      // ===============================================Teacher=============================================

      'Teachers' =>
      [
        [
          'Name' => 'Rajeev Kumar',
          'Qualification' => ['Degree' => 'B.sc', 'Master s' => 'M.sc',],
          'Subject' => 'science',
          'Class' => '10th',

        ],
        [
          'Name' => 'Santosh',
          'Qualification' => ['Degree' => 'B.A ,B.ed', 'Master s' => 'M.A',],
          'Subject' => 'Hindi',
          'Class' => '10th',
        ],
        [
          'Name' => 'Gopal',
          'Qualification' => ['Degree' => 'B.A ,B.ed', 'Master s' => 'M.A',],
          'Subject' => 'Social science',
          'Class' => '10th',
        ],
        [
          'Name' => 'Sunita',
          'Qualification' =>  ['Degree' => 'B.A ', 'Master s' => 'M.A',],
          'Subject' => 'English',
          'Class' => '10th',
        ],
        [
          'Name' => 'Palak Rana',
          'Qualification' => 'M.sc',
          'Subject' => 'Sanskrit',
          'Class' => '10th',
        ],
        [
          'Name' => 'Lekhraj',
          'Qualification' =>  ['Degree' => 'B.A ,B.ed', 'Master s' => 'M.sc',],
          'Subject' => 'Maths',
          'Class' => '10th',
        ],
        [
          'Name' => 'Nitesh Kumar',
          'Qualification' => 'IT',
          'Subject' => 'Computer science',
          'Class' => ['10th', '11th', '12th'],
        ],
        [
          'Name' => 'Nishant Verma',
          'Qualification' => ['Degree' => 'B.sc', 'Master s' => 'M.sc',],
          'Subject' => 'Maths',
          'Class' => ['11th', '12th'],
        ],
        [
          'Name' => 'Kanchan Rawat',
          'Qualification' => ['Degree' => 'B.sc', 'Master s' => 'M.sc,PHD',],
          'Subject' => 'Chemistry',
          'Class' => ['11th', '12th'],
        ],
        [
          'Name' => 'Neelam',
          'Qualification' => ['Degree' => 'B.sc', 'Master s' => 'M.sc,PHD',],
          'Subject' => 'Physcics ',
          'Class' => ['11th', '12th'],
        ],
        [
          'Name' => 'Anita',
          'Qualification' =>  ['Degree' => 'B.A ,B.ed', 'Master s' => 'M.A',],
          'Subject' => 'English',
          'Class' => ['11th', '12th'],
        ],


      ],


      //=================================================Subjects========================================= 

      'Subjects' =>
      [
        [
          'Name' => 'Science',
          'Teacher' => 'Rajeev Kumar',
          'Time' => ['Class10' => '9:30am-10:10am'],
        ],
        [
          'Name' => 'Hindi',
          'Teacher' => 'Santosh',
          'Time' => ['Class10' => '10:10am-10:50am'],
        ],
        [
          'Name' => 'Social science',
          'Teacher' => 'Gopal',
          'Time' => ['Class10' => '10:50am-11:30am'],
        ],
        [
          'Name' => 'Maths',
          'Teacher' => 'Lekhraj',
          'Time' => ['Class10' => '11:30am-12:10pm'],
        ],
        [
          'Name' => 'Sanskrit',
          'Teacher' => 'Palak Rana',
          'Time' => ['Class10' => '12:10pm-12:50am'],
        ],
        [
          'Name' => 'English',
          'Teacher' => 'Sunita Kumar',
          'Time' => ['Class10' => '1:30pm-2:10pm'],
        ],
        [
          'Name' => ' Computer science',
          'Teacher' => 'Nitesh Kumar',
          'Time' => ['Class10' => '2:10pm-3:00', 'Class11' => '', 'Class12' => '',],
        ],
        [
          'Name' => 'Maths',
          'Teacher' => 'Nishant Verma',
          'Time' => ['Class11' => '', 'Class12' => '',],
        ],
        [
          'Name' => 'Chemistry ',
          'Teacher' => 'Kanchan Rawat',
          'Time' => ['Class11' => '', 'Class12' => '',],
        ],
        [
          'Name' => 'Physcics ',
          'Teacher' => 'Neelam',
          'Time' => ['Class11' => '', 'Class12' => '',],

        ],
        [
          'Name' => 'English',
          'Name' => 'Anita',
          'Time' => ['Class11' => '', 'Class12' => '',],
        ],
      ],






    ];



  echo '<pre>';
  print_r($school['Classes']['11th']['Students']['0']['Markslist']);

  ?>

</body>

</html>
