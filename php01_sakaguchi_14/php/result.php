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

    $answer1 = $_POST["answer2"];

    if($answer1 == 1) {
        echo '<div class="chra">';
        echo '<div class="chra_img_container">';
        echo '<img src="../img/sunafkin.png" alt="スナフキン" class="chra_img" />';
        echo '</div>';
        echo '<div class="chra_explanation">';
        echo '<h2 class="chra_type">スナフキン タイプ</h2>';
        echo '<p class="chra_text">芸術家タイプ。ロマンチスト、感受性が強く、繊細な天才肌。豊かな創造力を持つ。ナルシシスト。</p><br>';
        echo '<p class="chra_speech">～人の目なんか気にしないで、思うとおりに暮らしていればいいのさ～</p>';
        echo '</div>';
        echo '</div>';
    } else if ($answer1 == 2) {
        echo '<div class="chra">';            
        echo '<div class="chra_img_container">';
        echo '<img src="../img/conan.png" alt="コナン" class="chra_img" />';
        echo '</div>';
        echo '<div class="chra_explanation">';
        echo '<h2 class="chra_type">名探偵コナン タイプ</h2>';
        echo '<p class="chra_text">研究者タイプ。探究心が旺盛。冷静沈着で学究肌。分析力に富む皮肉屋。内向的。</p><br>';
        echo '<p class="chra_speech">～真実はいつもひとつ！～</p>';
        echo '</div>';
        echo '</div>';
    } else if ($answer1 == 3) {
        echo '<div class="chra">';        
        echo '<div class="chra_img_container">';
        echo '<img src="../img/ultra_man.png" alt="ウルトラマン" class="chra_img" />';
        echo '</div>';
        echo '<div class="chra_explanation">';
        echo '<h2 class="chra_type">ウルトラマン タイプ</h2>';
        echo '<p class="chra_text">平和主義者タイプ。マイペースで無欲。友好的で葛藤を嫌う。器が大きい。逃避的。怠慢。</p><br>';
        echo '<p class="chra_speech">～シュワッチ！～</p>';
        echo '</div>';
        echo '</div>';
    } else if ($answer1 == 4) {
        echo '<div class="chra">';        
        echo '<div class="chra_img_container">';
        echo '<img src="../img/hujiko.png" alt="峰不二子" class="chra_img" />';
        echo '</div>';
        echo '<div class="chra_explanation">';
        echo '<h2 class="chra_type">峰不二子 タイプ</h2>';
        echo '<p class="chra_text">成果主義者タイプ。競争心が強く、能率、マネジメントを重視。仕事熱心で行動的。成功への意欲が強い。</p><br>';
        echo '<p class="chra_speech">～裏切りは女のアクセサリーよ～</p>';
        echo '</div>';
        echo '</div>';
    } else if ($answer1 == 5) {
        echo '<div class="chra">';        
        echo '<div class="chra_img_container">';
        echo '<img src="../img/gian.png" alt="ジャイアン" class="chra_img" />';
        echo '</div>';
        echo '<div class="chra_explanation">';
        echo '<h2 class="chra_type">ジャイアン タイプ</h2>';
        echo '<p class="chra_text">挑戦者タイプ。統率力があり自信家。他人に操られるのを嫌う。決断力があり、逆境に強い。</p><br>';
        echo '<p class="chra_speech">～お前のモノは俺のモノ、俺のモノは俺のモノ！～</p>';
        echo '</div>';
        echo '</div>';
    } else if ($answer1 == 6) {
        echo '<div class="chra">';
        
        echo '<div class="chra_img_container">';
        echo '<img src="../img/sazae_san.png" alt="サザエさん" class="chra_img" />';
        echo '</div>';
        echo '<div class="chra_explanation">';
        echo '<h2 class="chra_type">サザエさん タイプ</h2>';
        echo '<p class="chra_text">楽天家タイプ。好奇心旺盛で楽天的な自由人。柔軟性があり、気分転換が上手。飽きっぽい。</p><br>';
        echo '<p class="chra_speech">～来週もまた見てくださいね。じゃんけんポン！うふふふふふふっ～</p>';
        echo '</div>';
        echo '</div>';
    } else if ($answer1 == 7) {
        echo '<div class="chra">';        
        echo '<div class="chra_img_container">';
        echo '<img src="../img/ittetu.png" alt="星一徹" class="chra_img" />';
        echo '</div>';
        echo '<div class="chra_explanation">';
        echo '<h2 class="chra_type">星一徹 タイプ</h2>';
        echo '<p class="chra_text">完全主義者タイプ。正義感が強く生真面目な努力家。神経質で融通が利かない。</p><br>';
        echo '<p class="chra_speech">～つらい苦しい遠回りをえらんでこそ自ずと成長がある！～</p>';
        echo '</div>';
        echo '</div>';
    } else if ($answer1 == 8) {
        echo '<div class="chra">';        
        echo '<div class="chra_img_container">';
        echo '<img src="../img/doraemon.png" alt="ドラえもん" class="chra_img" />';
        echo '</div>';
        echo '<div class="chra_explanation">';
        echo '<h2 class="chra_type">ドラえもん タイプ</h2>';
        echo '<p class="chra_text">博愛主義者タイプ。細かい気遣いで、自己犠牲を厭わない世話好き。押しつけがましい、八方美人。</p><br>';
        echo '<p class="chra_speech">～はい、タケコプター！～</p>';
        echo '</div>';
        echo '</div>';
    } else if ($answer1 == 9) {
        echo '<div class="chra">';        
        echo '<div class="chra_img_container">';
        echo '<img src="../img/masuo_san.png" alt="マスオさん" class="chra_img" />';
        echo '</div>';
        echo '<div class="chra_explanation">';
        echo '<h2 class="chra_type">マスオさん タイプ</h2>';
        echo '<p class="chra_text">サポータータイプ。責任感が強く、規則を厳守する。安全第一で疑い深い。新しい挑戦は苦手。</p><br>';
        echo '<p class="chra_speech">～えぇーっ！？～</p>';
        echo '</div>';
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
    
</body>
</html>