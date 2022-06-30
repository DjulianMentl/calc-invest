<?php
    require $_SERVER['DOCUMENT_ROOT'] . "/calc_invest/controller.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор простых процентов</title>
</head>
<body>

<h1>Калькулятор</h1>

<? require $_SERVER['DOCUMENT_ROOT'] . "/calc_invest/form.php"; ?>
<div>
    <span>Ваш депозит: </span>
    <font color = "green" size = "5 px">
        <?= $initialDeposit; ?>
    </font>
    <span> руб.</span><br/>
</div>
<hr/>
<div>
    <span>Доход за день: </span>
    <font color = "green" size = "5 px">
        <?= $incomePerDay; ?>
    </font>
    <span> руб.</span><br/>
    <span>Итого: </span>
    <font color = "green" size = "5 px">
        <?= $totalDailyDeposit; ?>
    </font>
    <span> руб.</span>
</div>
<hr/>
<div>
    <span>Доход за неделю: </span>
    <font color = "green" size = "5 px">
        <?= $incomePerWeek; ?>
    </font>
    <span> руб.</span><br/>
    <span>Итого: </span>
    <font color = "green" size = "5 px">
        <?= $totalWeeklyDeposit; ?>
    </font>
    <span> руб.</span>
</div>
<hr/>
<div>
    <span>Доход за месяц: </span>
    <font color = "green" size = "5 px">
        <?= $incomePerMonth; ?>
    </font>
    <span> руб.</span><br/>
    <span>Итого: </span>
    <font color = "green" size = "5 px">
        <?= $totalMonthlyDeposit; ?>
    </font>
    <span> руб.</span>
</div>
<hr/>
<div>
    <span>Доход за год: </span>
    <font color = "green" size = "5 px">
        <?= $incomePerYear; ?>
    </font>
    <span> руб.</span><br/>
    <span>Итого: </span>
    <font color = "green" size = "5 px">
        <?= $totalAnnualDeposit; ?>
    </font>
    <span> руб.</span>
</div>
<hr/>




</body>
</html>