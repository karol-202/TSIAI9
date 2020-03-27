<?php

function date_diff_seconds($nowFormatted, $endFormatted)
{
    $now = strtotime($nowFormatted);
    $end = strtotime($endFormatted);
    return $end - $now;
}

function date_diff_minutes($nowFormatted, $endFormatted)
{
    return intval(date_diff_seconds($nowFormatted, $endFormatted) / 60);
}

function date_diff_days($nowFormatted, $endFormatted)
{
    return intval(date_diff_seconds($nowFormatted, $endFormatted) / (60 * 60 * 24));
}

echo '<h2>1. Ile pozostało minut do końca lekcji?</h2>';
echo 'Klasa A: '.date_diff_minutes('2020-01-09 09:11', '2020-01-09 09:35').'<br>';
echo 'Klasa B: '.date_diff_minutes('2020-01-13 13:45', '2020-01-13 14:05');

echo '<h2>2. Ile pozostało minut do końca zajęć (początek weekendu)?</h2>';
echo 'Klasa A: '.date_diff_minutes('2020-01-09 09:11', '2020-01-10 16:40').'<br>';
echo 'Klasa B: '.date_diff_minutes('2020-01-13 13:45', '2020-01-17 13:10');

echo '<h2>3. Ile dni pozostało do wystawienia ocen?</h2>';
echo 'Klasa A: '.date_diff_days('2020-01-09', '2020-06-19').'<br>';
echo 'Klasa B: '.date_diff_days('2020-01-13', '2020-06-19');

echo '<h2>4. Za ile dni zaczną się wakacje?</h2>';
echo 'Klasa A: '.date_diff_days('2020-01-09', '2020-06-26').'<br>';
echo 'Klasa B: '.date_diff_days('2020-01-13', '2020-06-26');

echo '<h2>5. Pan John Doe urodził sie 15.04.1999r. Ile dni przeżył już Pan Doe?</h2>';
echo date_diff_days('15.04.1999', date('c'));

echo '<h2>6. Pani Doe kupiła dziś (teraz - łącznie z czasem) abonament na 90 dni.
Kiedy skończy jej się abonament na usługę która wykupiła? Przyjmijmy że 1 dzień = 24*60*60 sekund.
Podaj datę i godzinę wygaśnięcia abonamnetu.</h2>';
$duration = 90 * 24 * 60 * 60;
$endTime = time() + $duration;
echo date('c', $endTime);
