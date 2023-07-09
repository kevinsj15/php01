<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="form-container">
<form action="write.php" method="post">
  <label for="name">名前:</label><br>
  <input type="text" id="name" name="name" required title="名前が入力されていません！"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required title="Emailが入力されていません！"><br>
  <label for="question1">昨日の夕食は何を食べましたか?</label><br>
  <select id="question1" name="question1" required title="昨日の夕食についての回答が入力されていません！">
    <option value="">選択してください</option>
    <option value="カレーライス">カレーライス</option>
    <option value="ラーメン">ラーメン</option>
    <option value="焼肉">焼肉</option>
    <option value="寿司">寿司</option>
    <option value="緑の草">緑の草</option>
  </select><br>
  <label for="question2">夕食の味を1~5で評価してください:</label><br>
    <input type="radio" id="question2" name="question2" value="1" required title="夕食の味についての評価が入力されていません！">1
    <input type="radio" name="question2" value="2" required title="夕食の味についての評価が入力されていません！">2
    <input type="radio" name="question2" value="3" required title="夕食の味についての評価が入力されていません！">3
    <input type="radio" name="question2" value="4" required title="夕食の味についての評価が入力されていません！">4
    <input type="radio" name="question2" value="5" required title="夕食の味についての評価が入力されていません！">5<br>
  <label for="question3">同じものをまた食べたいか、1~5で評価してください:</label><br>
    <input type="radio" id="question3" name="question3" value="1" required title="再度食べたいかについての評価が入力されていません！">1
    <input type="radio" name="question3" value="2" required title="再度食べたいかについての評価が入力されていません！">2
    <input type="radio" name="question3" value="3" required title="再度食べたいかについての評価が入力されていません！">3
    <input type="radio" name="question3" value="4" required title="再度食べたいかについての評価が入力されていません！">4
    <input type="radio" name="question3" value="5" required title="再度食べたいかについての評価が入力されていません！">5<br>
  <input type="submit">
</form>
</div>

</body>
</html>
