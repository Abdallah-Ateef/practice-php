<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice-PHP</title>
    <style>
      table{
        width:50%;
        border-collapse: collapse;
      }

      table ,th ,td{
        border:1px solid #ddd;
        padding:10px;
        text-align:left;
        
      }

      tr:nth-child(even) {background-color: #e4e4e4;}

      th {
           background-color: #666;
            color: white;
        }
      tr:hover {background-color: coral;}

      .green{
        color:green;
      }

      .red{
        color:red;
      }

      table tr th[data-class-name]{
        background:#999;
      }

    </style>

</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Employee Name</th>
        <th>Salary</th>
      </tr>
    </thead>
    <tbody>
    <?php
        $employees=array('Abdallah','Mohamed','Lotfy','Samy','Hesham','Ziad','Mahmoud','Sameer','Atef');

        $Salaries=array(3000,3500,2000,4000,3200,4300,1333,6000,5000);
        $Total_salary=0;

        for($i=0,$length=count($Salaries);$i<$length;$i++){
          $Total_salary+=$Salaries[$i];
          echo<<<showcode
            <tr>
              <td>$employees[$i]</td>
              <td>$Salaries[$i]</td>
            </tr>

          showcode;
        }
        echo<<<total
        <tfoot>
          <tr>
            <th>Total_Salary</th>
            <th>$Total_salary</th>
          </tr>
        </tfoot>
        total;


       ?>
      
    </tbody>
  </table>
<hr>
<!-- Example 2-->
<?php
  $student=array('Abdallah','Mohamed','Lotfy','Samy','Hesham','Ziad','Mahmoud','Sameer','Atef');
  $english=array(44,33,22,15,16,18,19,44,50);
  $math=array(32,33,20,15,16,18,20,40,20);
  $science=array(44,30,22,15,12,18,144,44,50);
  $arabic=array(44,33,22,15,16,18,19,44,50);
  ?>

  <table>
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Arabic</th>
        <th>English</th>
        <th>Math</th>
        <th>Science</th>
        <th>Total</th>
        <th>Percentage</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $max_grade=0;
      $min_grade=PHP_INT_MAX;
      for($i=0,$length=count($student);$i<$length;$i++){
        $total=0;
        $total=$arabic[$i]+$english[$i]+$math[$i]+$science[$i];
        $max_grade=max($max_grade,$total);
        $min_grade=min($min_grade,$total);
        $htmlelement=$total>100? "<span class='green'>Sucsses</span>":"<span class='red'>Failed</span>";
        echo "
        <tr>
          <td>{$student[$i]}</td>
          <td>{$arabic[$i]}</td>
          <td>{$english[$i]}</td>
          <td>{$math[$i]}</td>
          <td>{$science[$i]}</td>
          <td>{$total}</td>
          <td>". ($total/200*100) ."%</td>
          <td>$htmlelement</td>
         
     </tr>
        ";
      }
      ?>
      

    </tbody>
  </table>
  <hr>
  <?php

  $class1=array(array('Abdallah',33,15,32),array('Ahmed',12,16,44));
  $class2=array(array('lotfy',33,15,32),array('mohasen',12,16,44));
  $class3=array(array('nahalafhala',33,15,32),array('zolaha',12,16,44));
  $school=array($class1,$class2,$class3);
  ?>

  <table>
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Arabic</th>
        <th>Math</th>
        <th>English</th>
        <th>Total</th>
        <th>Percentage</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    <!-- <tr>
        <th data-class-name='class1' colspan='7'>Class 1</th>
      </tr>

      <tr>
        <td>Abdallah</td>
        <td>33</td>
        <td>66</td>
        <td>88</td>
        <td>444</td>
        <td>100%</td>
        <td><span class='green'>Sucsses</span></td>
      </tr> -->
      <?php
      for($i=0,$cnt=count($school);$i<$cnt;$i++){
        echo '<tr> <th data-class-name="class1" colspan="7">Class ' .($i+1) .'</th> </tr>';
        for($j=0,$ii=count($school[$i]);$j<$ii;$j++){
          for($m=0,$jj=count($school[$i][$j]);$m<$jj;$m++){

                   
           echo'
           <tr>
           <td>' .$school[$i][$j][$m] .'</td>
           <td>444</td>
           <td>100%</td>
           <td><span class=\'green\'>Sucsses</span></td>
         </tr>

         ';

          }

      }}
      ?>

    </tbody>
  </table>
  <hr>
  <hr>

 <?php

/*  Access modifiers
*public 
*private 
*protected
*/

 class emp{
  private $name;
  public $lname;
  private $age;
  public $address;

  
 }

    class students{
      private $name;
      private $age ;
      private $level;
      protected $score;
      protected $subjects=array('Arabic'=>0,'English'=>0,'Math'=>0,'Science'=>0);
      protected $minscore=150;
      protected $maxscore=300;

      

     
     function __construct($name='Null',$age='Null'){
      $this->setName($name);
      $this->setage($age);
      if($age>=12){$this->age=$age;}
      else {throw new Exception('sorry the student\'s age must be greater than 12');}
      
     }

     function setlevel($level){
      // make sure this is an integer 
      // $level=abs($level);
      if(filter_var($level, FILTER_SANITIZE_NUMBER_INT)){
        if($level<1 || $level >12) throw new Exception('sorry level must bettwen 1 and 12');
        else echo $level;
      }else echo "number not valid";
     }

      private function setName($name){
      $name=strtolower($name);
      $name=filter_var($name,FILTER_SANITIZE_STRING);
      $this->name=$name;
     }

     private function setage($age){
      $age=filter_var($age,FILTER_SANITIZE_NUMBER_INT);
     
      if($age<12 || $age>20){
        throw new Exception('sorry age must be bettwen 12 and 20');
      }else $this->age=$age;
     }

     function getname(){
      return $this->name;
     }

     function getage(){
      return $this->age;
     }

     function getsubjects(){
      return $this->subjects;
     }
    
     function getminscore(){
      return $this->minscore;
     }
     function getmaxscore() {
      return $this->maxscore;
     }

     function setsubjectscore($subject,$value){
      if(array_key_exists($subject,$this->subjects)){
        $value=filter_var($value,FILTER_SANITIZE_NUMBER_INT);
        $value=abs($value);
        if($value>50)throw new Exception('Sorry The max score of'.$subject .'50');
        else $this->subjects[$subject]=$value;
      }
      else throw new Exception('sorry the subject'.$subject .'not found');
     }

     function getsubjectgrade($subject){
      if(array_key_exists($subject,$this->subjects)){
        return $this->subjects[$subject];
      }else throw new Exception('sorry subject '.$subject.' not found');
     }


    }

    /* make class gradstudent extends from class students */

    class gradstudent extends students{
      private $Activity;

      function __construct($name,$age)
      {
        parent::__construct($name,$age);
        $this->subjects['Computer']=0;
        $this->minscore=50;
        $this->maxscore=70;
      }

      function setstudentActive(){
        $this->Activity='Active';
      }

      function setstudentNonActive(){
        $this->Activity='Not ative';
      }

      /* override of parent functions*/
     
    }


  $grade1=new gradstudent('Abdallah',16);
  echo $grade1->getminscore() .'<br>';
  echo $grade1->getmaxscore() .'<br>';
  $grade1->setsubjectscore('Arabic',33);

  echo $grade1->getsubjectgrade('Arabic');
  echo '<pre>';
  
  echo '</pre>';

   
 













?>






</body>
</html>