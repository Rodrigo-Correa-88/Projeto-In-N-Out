<?php
session_start();
requireValidSession();

$date = (new DateTime()) -> getTimestamp();
$today = date("d \\d\\e M \\d\\e Y", $date);

loadTemplateView('day_records', ['today'=> $today]);