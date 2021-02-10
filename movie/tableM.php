<?php require_once("dbcon.php");
?>
<form action="." method="get">
    <input type="text" name="search" id="search" placeholder="ค้นหา">
    <button type="submit" name="serach_click">ค้นหา</button>
</form>
<table style="width:100%;" border="1">
  <tr>
    <th>รหัสภาพยนต์</th>
    <th>ชื่อภาพยนต์</th>
    <th>เวลาที่เริ่มฉาย</th>
    <th>ชื่อผู้ใช้งาน</th>
    <th>pin</th>
    <th>จัดการ</th>
  </tr>
  <?php
  $sql = "SELECT * FROM moviedb";
 $result = $conn ->query($sql);

while($rs = $result->fetch_object()){
  ?>
  <tr>
    <td><?=$rs->m_id?></td>
    <td><?=$rs->m_name?></td>
    <td><?=$rs->m_time?></td>
    <td><?=$rs->m_user?></td>
    <td><?=$rs->m_pin?></td>
    <td>
</td>
</tr>

  <?php } ?>
</table>