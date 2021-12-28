<?php
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
$month=$_POST['Month'];
?>
<select name="Month" id="" require>
            <option  <?= ($month=="January")?"selected":""?>>January</option>
            <option <?= ($month=="Febuary")?"selected":""?>>Febuary</option>
            <option <?= ($month=="March")?"selected":""?>>March</option>
            <option <?= ($month=="April")?"selected":""?>>April</option>
            <option <?= ($month=="May")?"selected":""?>>May</option>
            <option <?= ($month=="June")?"selected":""?>>June</option>
            <option <?= ($month=="July")?"selected":""?>>July</option>
            <option <?= ($month=="August")?"selected":""?>>August</option>
            <option <?= ($month=="Septmber")?"selected":""?>>Septmber</option>
            <option <?= ($month=="Octomber")?"selected":""?>>Octomber</option>
            <option <?= ($month=="November")?"selected":""?>>November</option>
            <option <?= ($month=="December")?"selected":""?>>December</option>
        </select>
