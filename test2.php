<?php 
$host = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "practice";
$conn = mysqli_connect($host, $user, $password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "select EMPNO,ENAME,JOB,DNAME from emp inner Join dept 
on emp.DEPTNO = dept.DEPTNO ";
$result = mysqli_query($conn, $sql);


?>





<!DOCTYPE html>
<html>
    <head>
        <meta  charset = "utf-8">
        <title>HTML5 เบื้องต้น</title>
        <!--this is comment setion.-->
    </head>
    <body>
        <div>
            <h1>Hello world</h1>
        </div>
        <table border="1">
            <tr>
                <th>รหัสพนักงาน </th>
                <th>ชื่อ - นามสกุล </th>
                <th>ตำแหน่ง </th> 
                <th>แผนก</th>          
            </tr>
            <?php
            if (mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result)){ ?>

            <tr>
                <td>  <?php echo $row['EMPNO'] ?></td>
                <td><?php echo $row['ENAME'] ?></td>
                <td><?php echo $row['JOB'] ?></td> 
                <td><?php echo $row['DNAME'] ?></td>
            </tr>
            <?php } //end loop
            } //end if ?>    


        </table>


    </body>
</html>

<?php ?>

<?php for($i=0;$i<=3;$i++){

}?>

<?php  
$i=1;
while($i<5){

    $i++;
    }?>