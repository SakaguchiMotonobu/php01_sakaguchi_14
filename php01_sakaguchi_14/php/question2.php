<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" />
    <title>キャラクター性格診断</title>
</head>
<body>
    <!-- ヘッダー -->
    <header>
      <div class="header">
        <a href="../index.html"><img src="../img/crystal.png" alt="水晶玉" /></a>
        <a href="../index.html" class="main_title">
          <p class="title">キャラクター性格診断</p>
        </a>
      </div>
    </header>
    <!-- ヘッダー -->

    <?php

    $answer1 = $_POST["answer1"];

    if($answer1 == 1) {
        echo '<div class="question_field">';
        echo '<div>';
        echo '<p class="explanation">自分に最も合う選択肢を選び、『決定』を押してください。</p>';
        echo '</div>';
        echo '<form method="post" action="result.php" class="option">';
        echo '<div class="rich_radio">';
        echo '<label><input type="radio" class="option radio" name="answer2" value="1" required/>自分の内面の感情や気持ちの動きを重視する。豊かな表現力があり、手の届かないものに憧れる。<br/></label>';
        echo '<label><input type="radio" class="option radio" name="answer2" value="2"/>冷静で、論理的な分析家。洞察力と革新性に富み、知的好奇心が強い。<br/></label>';
        echo '<label><input type="radio" class="option radio" name="answer2" value="3"/>動じることは少なく、マイペースなのんびり屋。現状を肯定し、人をなごませる雰囲気を持ち、粘り強い。<br/></label>';
        echo '</div>';
        echo '<div class="submit_container">';
        echo '<input type="submit" class="submit_button" value="決定"/>';
        echo '</div>';
        echo '</form>';
        echo '</div>';
    } else if ($answer1 == 2) {
        echo '<div class="question_field">';
        echo '<div>';
        echo '<p class="explanation">自分に最も合う選択肢を選び、『決定』を押してください。</p>';
        echo '</div>';
        echo '<form method="post" action="result.php" class="option">';
        echo '<div class="rich_radio">';
        echo '<label><input type="radio" class="option radio" name="answer2" value="4" required/>競う気持ちが強く、効率を重視し活動する。見映えがよく、人の才能を素早く見抜き、引き出す。<br/></label>';
        echo '<label><input type="radio" class="option radio" name="answer2" value="5"/>まわりを気にせず、思ったことはハッキリという直言家。親分肌で統率力がある。<br/></label>';
        echo '<label><input type="radio" class="option radio" name="answer2" value="6"/>自分に興味があることに飛びつき夢中になる。社交的で、楽天的。<br/></label>';
        echo '</div>';
        echo '<div class="submit_container">';
        echo '<input type="submit" class="submit_button" value="決定"/>';
        echo '</div>';
        echo '</form>';
        echo '</div>';
    } else if ($answer1 == 3) {
        echo '<div class="question_field">';
        echo '<div>';
        echo '<p class="explanation">自分に最も合う選択肢を選び、『決定』を押してください。</p>';
        echo '</div>';
        echo '<form method="post" action="result.php" class="option">';
        echo '<div class="rich_radio">';
        echo '<label><input type="radio" class="option radio" name="answer2" value="7" required/>自分を厳しく律する勤勉化。規律正しく公正で、完璧を目指して努力する。<br/></label>';
        echo '<label><input type="radio" class="option radio" name="answer2" value="8"/>人の気持ちに寄り添う人情派。気前がよく親切で、人に好かれることを重要と考える。<br/></label>';
        echo '<label><input type="radio" class="option radio" name="answer2" value="9"/>周囲を気にする気配り屋。協調性があり、規則に従い、献身的に責任を果たす。<br/></label>';
        echo '</div>';
        echo '<div class="submit_container">';
        echo '<input type="submit" class="submit_button" value="決定"/>';
        echo '</div>';
        echo '</form>';
        echo '</div>';
    } 

    ?>

    <!-- フッター -->
    <footer class="footer text-center">
      <div class="wrapper">
        <small class="copyrights"
          >&copy;Copyright 2020 XXXXX All rIghts reserved.
        </small>
      </div>
    </footer>
    <!-- フッター -->

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- jsファイル読込み -->
    <script src="../js/submit.js"></script>

</body>
</html>