<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="table-container">
<table>
<tr>
    <th>名前</th>
    <th>Email</th>
    <th>昨日の夕食は何を食べましたか?</th>
    <th>夕食の味を1~5で評価してください</th>
    <th>同じものをまた食べたいか、1~5で評価してください</th>
    <th>送信時刻</th>
</tr>

<?php
$file = fopen('result.txt', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
  echo "<tr>";
  foreach ($line as $cell) {
    echo "<td>" . htmlspecialchars($cell) . "</td>";
  }
  echo "</tr>\n";
}
fclose($file);
?>

</table>
</div>

</body>
</html> 