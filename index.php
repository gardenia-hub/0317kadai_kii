<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ジャニーズWEST</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
  $J = [[
    "group" => "ジャニーズWEST",
    "members" => [[
      "name" => "重岡大毅",
      "color" => "red",
      "text" => "1992年8月26日生まれ",
      "url" => "https://ja.wikipedia.org/wiki/%E9%87%8D%E5%B2%A1%E5%A4%A7%E6%AF%85"
      ],[
        "name" => "桐山照史",
        "color" => "orange",
        "text" => "1989年8月31日生まれ",
        "url" => "https://ja.wikipedia.org/wiki/%E6%A1%90%E5%B1%B1%E7%85%A7%E5%8F%B2"
      ],[
        "name" => "中間淳太",
        "color" => "yellow",
        "text" => "1987年10月21日生まれ",
        "url" => "https://ja.wikipedia.org/wiki/%E4%B8%AD%E9%96%93%E6%B7%B3%E5%A4%AA"
      ],[
        "name" => "神山智洋",
        "color" => "green",
        "text" => "1993年7月1日生まれ",
        "url" => "https://ja.wikipedia.org/wiki/%E7%A5%9E%E5%B1%B1%E6%99%BA%E6%B4%8B"
      ],[
        "name" => "藤井流星",
        "color" => "blue",
        "text" => "1993年8月18日生まれ",
        "url" => "https://ja.wikipedia.org/wiki/%E8%97%A4%E4%BA%95%E6%B5%81%E6%98%9F"
      ],[
        "name" => "濱田崇裕",
        "color" => "purple",
        "text" => "1992年12月19日生まれ",
        "url" => "https://ja.wikipedia.org/wiki/%E6%BF%B5%E7%94%B0%E5%B4%87%E8%A3%95"
      ],[
        "name" => "小瀧望",
        "color" => "pink",
        "text" => "1996年7月30日生まれ",
        "url" => "https://ja.wikipedia.org/wiki/%E5%B0%8F%E7%80%A7%E6%9C%9B"
      ]]],
      [
        "group" => "HAY! SAY! JUMP",
        "members" => [[
          "name" => "山田涼介",
          "color" => "red",
          "text" => "1993年5月9日生まれ",
          "url" => "https://ja.wikipedia.org/wiki/%E5%B1%B1%E7%94%B0%E6%B6%BC%E4%BB%8B"
          ],[
            "name" => "知念侑李",
            "color" => "pink",
            "text" => "1993年11月30日生まれ",
            "url" => "https://ja.wikipedia.org/wiki/%E7%9F%A5%E5%BF%B5%E4%BE%91%E6%9D%8E"
          ],[
            "name" => "中島裕翔",
            "color" => "light-blue",
            "text" => "1993年8月10日生まれ",
            "url" => "https://ja.wikipedia.org/wiki/%E4%B8%AD%E5%B3%B6%E8%A3%95%E7%BF%94"
          ],[
            "name" => "高木雄也",
            "color" => "purple",
            "text" => "1990年3月26日生まれ",
            "url" => "https://ja.wikipedia.org/wiki/%E9%AB%99%E6%9C%A8%E9%9B%84%E4%B9%9F"
          ],[
            "name" => "伊野尾慧",
            "color" => "blue",
            "text" => "1990年6月22日生まれ",
            "url" => "https://ja.wikipedia.org/wiki/%E4%BC%8A%E9%87%8E%E5%B0%BE%E6%85%A7"
          ],[
            "name" => "八乙女光",
            "color" => "yellow",
            "text" => "1990年12月2日生まれ",
            "url" => "https://ja.wikipedia.org/wiki/%E5%85%AB%E4%B9%99%E5%A5%B3%E5%85%89"
          ],[
            "name" => "薮宏太",
            "color" => "yellow-green",
            "text" => "1990年1月31日生まれ",
            "url" => "https://ja.wikipedia.org/wiki/%E8%96%AE%E5%AE%8F%E5%A4%AA"
          ]]]
  ];
  foreach($J as $key => $groups):
  ?>
    <div>
    <h1>
      <?php echo $groups["group"]; ?>
    </h1>
    <?php foreach($groups["members"] as $member): ?>
      <h2 class="<?php echo $member["color"]; ?>">
        <a href="<?php echo $member["url"]; ?>">
        <?php echo $member["name"]; ?>
        </a>
        <?php if($member["name"] == "神山智洋"): ?>
          <p class="oshi">推し</p>
        <?php endif; ?>
      </h2>
      <p>
        <?php echo $member["text"] ?>
      </p>
    <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
  <!-- <h1 class="JW">ジャニーズWEST</h1>
  <h2 class="red">重岡大毅</h2>
  <p>1992年8月26日生まれ</p> -->
</body>
</html>