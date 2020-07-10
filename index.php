/* ------- Example 1.1 ------- */<br/><br/>
<?php 
  for ($i = 0; $i <= 5; $i++) { 
    for ($j = 1; $j <= 5; $j++) { 
        if($j <= ( 5 - $i )){ 
            echo " "." "; 
              
        }else { 
            echo "* "; 
        } 
          
    } 
    echo '<br/>';  
  } 

?>

<br/><br/>/* ------- Example 1.2 ------- */<br/><br/>

<?php  
for($i = 1; $i <= 9; $i++){  
  for($k = 9; $k >= $i; $k--){  
    echo "  ";  
  }  
  for($j = 1; $j <= $i; $j++){  
    echo "*  ";  
  }  
  echo "<br/>";  
}  

?>

<br/><br/>/* ------- Example 2.1 ------- */<br/><br/>

<?php 
$salary = 10000;
if( $salary < 10000 ){
  $salary = $salary +200;
}elseif($salary < 11000){
  $salary =+200;
}elseif($salary < 11000){
  $salary =+300;
}

echo 'Salary = '.$salary;
?>

<br/><br/>/* ------- Example 2.2.1 ------- */<br/><br/>

<?php 
$bath = 100;
echo ($bath==300?'300':'200');
?>

<br/><br/>/* ------- Example 2.2.2 ------- */<br/><br/>

<?php
  $score = 9; $age = 10;
  echo 'Your score is : '. $score > 10 ? ($age > 10 ? 'Avarage':'Exceptional') : ($age > 10 ? 'Horrible':'Average');
?>

<br/><br/>/* ------- Example 3.1 ------- */<br/><br/>

<?php 
$data = array(
  10000 => 15000,
  15000 => 20000,
  'salary' => 30000
);
foreach ($data as $value) {
  
  if( $value < 10000 ){
    $value = $value +200;
  }elseif($value < 11000){
    $value =+200;
  }elseif($value < 11000){
    $value =+300;
  }
  echo $value . ' / ';
}
?>
<br/><br/>/* ------- Example 3.2 ------- */<br/><br/>
<!--- example 3.2 --->
<?php
  $marks = array( 
    "mohammad" => array(
      "physics" => 35, 
      "maths" => 30,
      "chemistry" => 39 
    ),
    "qadir" => array(
      "physics" => 30, 
      "maths" => 32, 
      "chemistry" => 29
    ), 
    "zara" => array(
      "physics" => 31, 
      "maths" => 22, 
      "chemistry" => 39
    ) 
  );
?>
<?php
foreach ($marks as $name => $val){
  echo 'Name : '. $name . '<br/>';
  foreach ($val as $key => $va) {
    echo 'Class : ' . $key . ' -> Score : ' . $va . ' <br/>';
  }
  echo '<br/>';
}
?>

<br/><br/>/* ------- Example 3.2.1 ------- */<br/><br/>

<?php 
  foreach ($marks as $key => $value) {
    
      # code...
      if(in_array(35 , $value, true)){
        
        echo '35';
      }
    
  }
?>

<br/><br/>/* ------- Example 3.2.2 ------- */<br/><br/>

<?php
foreach ($marks as $name => $val){
  foreach ($val as $key => $va) {
    echo $va . ' ';
  }
}
?>

<br/><br/>/* ------- Example 4 ------- */<br/><br/>
<style>
  .container{width: 740px; margin: 0 auto 60px; display: flex;}
  .col{width: 240px; height: 200px; margin-right: 10px;border: 1px solid #000; box-sizing: border-box;}
  .col:last-child{margin-right: 0;}
</style>
<div class="container">
  <div class="col"></div>
  <div class="col"></div>
  <div class="col"></div>
</div>

<br/><br/>/* ------- Example 5.1 ------- */<br/><br/>

<img src="ER.jpg" alt="" style='max-width: 720px;'>

<br/><br/>/* ------- Example 5.2 ------- */<br/><br/>

INSERT INTO Branch (Name, Location) VALUES ('เชียงใหม่', 'เชียงใหม่');
INSERT INTO Branch (Name, Location) VALUES ('เชียงราย', 'เชียงราย');
INSERT INTO Branch (Name, Location) VALUES ('ภูเก็ต', 'ภูเก็ต');

<br/><br/>/* ------- Example 5.3 ------- */<br/><br/>

DELETE FROM Position WHERE Name = 'Sale';

<br/><br/>/* ------- Example 5.4 ------- */<br/><br/>

UPDATE Branch SET Name = 'นราธิวาส' WHERE Branch_id = 3;

<br/><br/>/* ------- Example 5.5 ------- */<br/><br/>

SELECT EMPLOYEE.Name, branch.Branch_Name, position.Position_Name
FROM employee, branch, position
where employee.branch_id = branch.branch_id and employee.position_id = position.position_id


<br/><br/>/* ------- Example 6 ------- */<br/><br/>

เป็นความฝันตั้งแต่เด็ก แต่ก็ยังไม่เชี่ยวชาญพอ และต้องการเรียนรู้ไปเรื่อยๆ

<br/><br/>/* ------- Example 7 ------- */<br/><br/>

Research ปัญหาที่เกิดขึ้น หา solution ต่างๆเพื่อแก้ไข หรือ อาจจะถามผู้ที่เคยทำมาก่อน เพื่อขอคำแนะนำ

<br/><br/>/* ------- Example 8 ------- */<br/><br/>

MVC คือ Model view controller 
Model จะเป็นส่วนที่เก็บข้อมูลต่างๆ
View จะเป็นส่วนแสดงผล ที่ user จะมี action ต่างๆกับหน้าเว็บ
Controller จะเป็นส่วนติดต่อกับ Model และ View

<br/><br/>/* ------- Example 9 ------- */<br/><br/>

Git คือ version controller ซึ่งสามารถเก็บ source code ได้หลายๆ version เพื่อการย้อนกลับไปแก้ไขได้ หากว่าเกิดของผิดพลาดขึ้น<br/><br/>

<b>ตัวอย่าง git </b><br/>
- github<br/>
- gitlab<br/>
- bitbucket<br/>

<br/><br/>/* ------- Example 10 ------- */<br/><br/>

Docker จะเป็นตัวจำลอง server คล้ายๆ vmware สำหรับการพัฒนาบนเครื่องของ dev หรือ สำหรับทดสอบ 
และสำหรับการ deploy ขึ้น production จริง ซึ่งแต่ละส่วนจะแยกกันเพื่อใช้งานในบริบทที่ต่างกัน

<br/><br/>/* ------- Example 11 ------- */<br/><br/>

เป็น Tools ของ php ที่เอาไว้จัดการ library ที่ต้องการใช้ในโปรเจค
การทำงานของ comprosser นั้นจะเป็นตัวจัดการเรื่อง package ต่างๆที่อยู่ในโปรเจคของเรา 

<br/><br/>/* ------- Example 12 ------- */<br/><br/>

เป็น ตัว complie scss ในตัว app เองโดยไม่ต้องลง scss complie ในเครื่องเพราะมีมาให้ในตัวแล้ว
การทำงาน ก็คือ เขียน scss ก่อน แล้วตัว prepros จะ complie scss ของเรากลับไปเป็น css ตาม path ที่เราตั้งไว้

<br/><br/>/* ------- Example 13 ------- */<br/><br/>

ถ้าเก่งในด้าน coding จะมีประมาณ 3 คน จาก 25 คน ถ้าเป็นด้าน design จะมีประมาณ 5-6 คน

<br/><br/>/* ------- Example 14 ------- */<br/><br/>

ปกติปัจจุบันก็ยังมีงาน Freelance ทำอยู่บ้างเป็นครั้งคราว

ตัวอย่างผลงาน

http://clickbeautycare.com/ -> ตัวนี้เป็น e-commerce จะใช้ wordpress ในการทำ
https://www.lasersbiz.com/ -> wordpress เช่นกัน แต่จะเป็น โชว์สินค้าเฉยๆ

<br/><br/>/* ------- Example 15 ------- */<br/><br/>

Bootstrap -> ทำให้ทำงาน frontend ไวขึ้นและมีมาตรฐาน
React JS -> เคยใช้เมื่อนานมาแล้ว แต่ยังไม่เชี่ยวชาญ


<br/><br/>/* ------- Example 16 ------- */<br/><br/>

<b>เคยใช้</b> <br/>
Google page speed เป็นตัววัด score ของ website ในด้าน performance ของตัว website เอง
ซึ่ง score จะบ่งบอกว่า website ของเราได้กี่คะแนน จากมาตรฐานของ google ที่ใช้เป็นสากล
และ หากว่า website ของเราบ่งพร่องด้านใน tools นี้จะบอกไว้ด้วย เช่น รูปใหญ่เกินไป หรือ script ที่ใช้งานอยู่มีขนาดใหญ่เกินไป

<br/><br/>/* ------- Example 17 ------- */<br/><br/>

Domain / Title / Description / Meta / Keyword / headline / paragraph / content / Img / alt img - in website