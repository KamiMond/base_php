<?php
//ВВод данных
$name = readline("Как вас зовут?\n");
$age = readline("Сколько вам лет?\n");

$task1 = readline("Какая задача стоит перед вами сегодня?\n");
$taskTime1 = readline("Сколько примерно времени эта задача займет?\n");

$task2 = readline("Какая потом задача стоит перед вами сегодня?\n");
$taskTime2 = readline("Сколько примерно времени эта задача займет?\n");

$task3 = readline("Какая затем задача стоит перед вами сегодня?\n");
$taskTime3 = readline("Сколько примерно времени эта задача займет?\n");
//Логика (для послежнего действия)
$sumTime = $taskTime1+$taskTime2+$taskTime3;
//Вывод данных
echo("Вас зовут $name, вам $age лет\n");
echo("$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n- $task1 ({$taskTime1}ч)\n- $task2 ({$taskTime2}ч)\n- $task3 ({$taskTime3}ч)\nПримерное время выполнения плана = {$sumTime}ч");