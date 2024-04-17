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
          <tr>
            <th>Total_Salary</th>
            <th>$Total_salary</th>
          </tr>
        total;


       ?>
      
    </tbody>
  </table>








</body>
</html>