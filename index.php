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
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      for($i=0,$length=count($student);$i<$length;$i++){
        $total=0;
        $total=$arabic[$i]+$english[$i]+$math[$i]+$science[$i];
        $htmlelement=$total>100? "<span class='green'>Sucsses</span>":"<span class='red'>Failed</span>";
        echo "
        <tr>
          <td>{$student[$i]}</td>
          <td>{$arabic[$i]}</td>
          <td>{$english[$i]}</td>
          <td>{$math[$i]}</td>
          <td>{$science[$i]}</td>
          <td>{$total}</td>
          <td>$htmlelement</td>
         
     </tr>
        ";
      }
      ?>

    </tbody>
  </table>

 






</body>
</html>