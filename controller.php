<?php

var_dump($_POST);

$initialDeposit = $_POST['deposit'];
$dayPercent = $_POST['dayPercent'];

// проверяем данные, которые вводит пользователь
if (is_numeric($initialDeposit) && is_numeric($dayPercent)) {

    // рассчитываем прибыль за день при простых процентах
    $incomePerDay = $initialDeposit * $dayPercent / 100;
    $totalDailyDeposit = $initialDeposit + $incomePerDay;

    // рассчитываем прибыль за неделю при простых процентах
    $incomePerWeek = $initialDeposit * $dayPercent / 100 * 7;
    $totalWeeklyDeposit = $initialDeposit + $incomePerWeek;

    // рассчитываем прибыль за месяц при простых процентах
    $incomePerMonth = $initialDeposit * $dayPercent / 100 * 30;
    $totalMonthlyDeposit = $initialDeposit + $incomePerMonth;

    // рассчитываем прибыль за год при простых процентах
    $incomePerYear = $initialDeposit * $dayPercent / 100 * 365;
    $totalAnnualDeposit = $initialDeposit + $incomePerYear;
}