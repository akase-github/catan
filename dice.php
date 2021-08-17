<?php
$rand1 = 0;
$rand2 = 0;
$sum = 0;
$dice_count = 0;
$count_2 = 0;
$count_3 = 0;
$count_4 = 0;
$count_5 = 0;
$count_6 = 0;
$count_7 = 0;
$count_8 = 0;
$count_9 = 0;
$count_10 = 0;
$count_11 = 0;
$count_12 = 0;
$ratio_2 = 0;
$ratio_3 = 0;
$ratio_4 = 0;
$ratio_5 = 0;
$ratio_6 = 0;
$ratio_7 = 0;
$ratio_8 = 0;
$ratio_9 = 0;
$ratio_10 = 0;
$ratio_11 = 0;
$ratio_12 = 0;



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['dice_count']) === TRUE) {
        $dice_count = $_POST['dice_count'];
        $count_2 = $_POST['count_2'];
        $count_3 = $_POST['count_3'];
        $count_4 = $_POST['count_4'];
        $count_5 = $_POST['count_5'];
        $count_6 = $_POST['count_6'];
        $count_7 = $_POST['count_7'];
        $count_8 = $_POST['count_8'];
        $count_9 = $_POST['count_9'];
        $count_10 = $_POST['count_10'];
        $count_11 = $_POST['count_11'];
        $count_12 = $_POST['count_12'];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['diceroll']) === TRUE) {
        $rand1 = mt_rand(1, 6);
        $rand2 = mt_rand(1, 6);
        $sum = $rand1 + $rand2;
        $dice_count++;
        if ($sum === 2) {
            $count_2++;
        } else if ($sum === 3) {
            $count_3++;
        } else if ($sum === 4) {
            $count_4++;       
        } else if ($sum === 5) {
            $count_5++;
        } else if ($sum === 6) {
            $count_6++;
        } else if ($sum === 7) {
            $count_7++;
        } else if ($sum === 8) {
            $count_8++;
        } else if ($sum === 9) {
            $count_9++;
        } else if ($sum === 10) {
            $count_10++;
        } else if ($sum === 11) {
            $count_11++;
        } else if ($sum === 12) {
            $count_12++;
        }
        $ratio_2 = round($count_2 / $dice_count * 100, 2);
        $ratio_3 = round($count_3 / $dice_count * 100, 2);
        $ratio_4 = round($count_4 / $dice_count * 100, 2);
        $ratio_5 = round($count_5 / $dice_count * 100, 2);
        $ratio_6 = round($count_6 / $dice_count * 100, 2);
        $ratio_7 = round($count_7 / $dice_count * 100, 2);
        $ratio_8 = round($count_8 / $dice_count * 100, 2);
        $ratio_9 = round($count_9 / $dice_count * 100, 2);
        $ratio_10 = round($count_10 / $dice_count * 100, 2);
        $ratio_11 = round($count_11 / $dice_count * 100, 2);
        $ratio_12 = round($count_12 / $dice_count * 100, 2);
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>サイコロ</title>
</head>
<body>
    <p>出た目: <?php if(isset($_POST['diceroll']) === TRUE) { print $sum; } ?></p>
    <p>サイコロ1: <?php if (isset($_POST['diceroll']) === TRUE) { print $rand1; } ?></p>
    <p>サイコロ2: <?php if (isset($_POST['diceroll']) === TRUE) { print $rand2; } ?></p>
    <p>サイコロを振った回数: <?=$dice_count?></p>
    <p>データ</p>
    <p>2: <?=$count_2?> | <?=$ratio_2?>%</p>
    <p>3: <?=$count_3?> | <?=$ratio_3?>%</p>
    <p>4: <?=$count_4?> | <?=$ratio_4?>%</p>
    <p>5: <?=$count_5?> | <?=$ratio_5?>%</p>
    <p>6: <?=$count_6?> | <?=$ratio_6?>%</p>
    <p>7: <?=$count_7?> | <?=$ratio_7?>%</p>
    <p>8: <?=$count_8?> | <?=$ratio_8?>%</p>
    <p>9: <?=$count_9?> | <?=$ratio_9?>%</p>
    <p>10: <?=$count_10?> | <?=$ratio_10?>%</p>
    <p>11: <?=$count_11?> | <?=$ratio_11?>%</p>
    <p>12: <?=$count_12?> | <?=$ratio_12?>%</p>
   
    <p></p>
    <form method="post">
        <input type="hidden" name="dice_count" value="<?=$dice_count?>">
        <input type="hidden" name="count_2" value="<?=$count_2?>">
        <input type="hidden" name="count_3" value="<?=$count_3?>">
        <input type="hidden" name="count_4" value="<?=$count_4?>">
        <input type="hidden" name="count_5" value="<?=$count_5?>">
        <input type="hidden" name="count_6" value="<?=$count_6?>">
        <input type="hidden" name="count_7" value="<?=$count_7?>">
        <input type="hidden" name="count_8" value="<?=$count_8?>">
        <input type="hidden" name="count_9" value="<?=$count_9?>">
        <input type="hidden" name="count_10" value="<?=$count_10?>">
        <input type="hidden" name="count_11" value="<?=$count_11?>">
        <input type="hidden" name="count_12" value="<?=$count_12?>">
        <input type="submit" name="diceroll" value="サイコロを振る">
    </form>
</body>
</html>
