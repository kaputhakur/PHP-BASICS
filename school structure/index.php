<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
</head>
<body>
   <h1> Array</h1>

   <?php
  echo'<pre>';
  
  
  $array=
['school'=>
    ['Class'=>
        ['Class10'=>
            ['ClassRoom'=>['RoomNO'=>'11','RoomNO.'=>'13'],
              'Subjects'=>['Maths','Hindi','English','Science','Social Science','Sanskrit','Computer Science'],
                'Students'=>[['Name'=>'Kalpana Thakur','RollNo'=>'1','Age'=>'15','EmailId'=>'kalpana071@gmail.com'],
                             ['Name'=>'KusamLata','RollNo'=>'2','Age'=>'15','EmailId'=>'Kusam234@gmail.com'],
                             ['Name'=>'Suahma Thakur','RollNo'=>'3','Age'=>'15','EmailId'=>'sushma839@gmail.com'],
                             ['Name'=>'Rina Kumari','RollNo'=>'4','Age'=>'16','EmailId'=>'rina377@gmail.com'],
                             ['Name'=>'Manju Thakur','RollNo'=>'5','Age'=>'15','EmailId'=>'manju287@gmail.com'],
                             ['Name'=>'Gita Kumari','RollNo'=>'6','Age'=>'15','EmailId'=>'Gita124@gmail.com'],
                             ['Name'=>'Yash Pal','RollNo'=>'7','Age'=>'16','EmailId'=>'Yashpal@gmail.com'],  
                             ['Name'=>'Sona Kumari','RollNo'=>'8','Age'=>'15','EmailId'=>'sona345@gmail.com'], 
                             ['Name'=>'Satish Kumar','RollNo'=>'9','Age'=>'16','EmailId'=>'satish6576@gmail.com'], 
                             ['Name'=>'Dharmender thakur','RollNo'=>'10','Age'=>'15','EmailId'=>'dham45546@gmail.com'],],
                             
                 'Teachers'=>[['Name'=>'Rajeev Kumar','Subject'=>'science','classTiming'=>'10:00am','RomNo'=>'11',],
                             ['Name'=>'Santosh','Subject'=>'Hindi','classTiming'=>'11:00am','RomNo'=>'11',],
                             ['Name'=>'Gopal','Subject'=>' Social science','classTiming'=>'12:00am','RomNo'=>'11',],
                             ['Name'=>'Sunita','Subject'=>'English','classTiming'=>'10:00am','RomNo'=>'11',],
                             ['Name'=>'Palak Rana','Subject'=>'Sanskrit','classTiming'=>'01:00pm','RomNo'=>'11',],
                             ['Name'=>'Lekhraj','Subject'=>'Maths','classTiming'=>'2:00am','RomNo'=>'11',],
                             ['Name'=>'Nitesh Kumar','Subject'=>'Computer science','classTiming'=>'10:00am','RomNo'=>'13',],],
                        
                 'ClassTiming'
            ],
                               'class11',
                               'class12' 
        ],
                     'Subject',
                     'Student'
    ],

];
                 
  
       
   


   
  print_r($array);
   ?>

</body>
</html>
<!-- $array=['school'=>['Class'=>
                      ['Class10'=>['ClassRoom'=>['RomNo11','RoomNo12'],
                      'Subject'=>['Maths','Hindi','Science','English','Social Science','Computer Science'],
                      'Student'=>[
                                  ['Name'=>'Himanshi','RollNO.'=>'1','EmailId'=>'himanshi922@gmail.com'],
                                  ['Name'=>'Kalpana','RollNO.'=>'2','EmailId'=>'kalpana071@gmail.com'],
                                ],
                      ],
                      
                     'Class+1','Class+2'],
                     'Subject','Teacher'],]; -->
