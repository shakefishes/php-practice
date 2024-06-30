<?php
// Q1 変数と文字列
$name = '齋藤';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
echo "$num\n";

$num /= 2 ;
echo $num;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo date('現在時刻は、Y年m月d日 G時i分s秒です。');

// Q4 条件分岐-1 if文
$device = 'a';
if ($device === 'windows' || $device === 'mac') {
  echo '使用OSは、' . $device . 'です。';
} else {
  echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 10;
$message = ($age < 18) ? '未成年です。' : '大人です。';
echo $message;

// Q6 配列
$prefectureOfKantoRegion = [
  '東京都',
  '神奈川県',
  '千葉県',
  '埼玉県',
  '栃木県',
  '群馬県',
  '茨城県'
];
echo $prefectureOfKantoRegion[2] . 'と' . $prefectureOfKantoRegion[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$prefectureAndPrefecturalCapitalLocation = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];
foreach ($prefectureAndPrefecturalCapitalLocation as $prefecturalCapitalLocation) {
  echo $prefecturalCapitalLocation;
  echo PHP_EOL;
}

// Q8 連想配列-2
foreach ($prefectureAndPrefecturalCapitalLocation as $prefecture => $prefecturalCapitalLocation) {
  if (!($prefecture == '埼玉県')) {
    continue;
  }
  echo $prefecture . 'の県庁所在地は、' . $prefecturalCapitalLocation . 'です。';
  break;
}

// Q9 連想配列-3
$prefectureAndPrefecturalCapitalLocation['愛知県'] =
  '名古屋市';
$prefectureAndPrefecturalCapitalLocation['大阪府'] =
  '大阪市';
foreach ($prefectureAndPrefecturalCapitalLocation as $prefecture => $prefecturalCapitalLocation) {
  if (in_array($prefecture , $prefectureOfKantoRegion,)) {
    echo $prefecture . 'の県庁所在地は、'. $prefecturalCapitalLocation . 'です。';
    echo PHP_EOL;
  } else {
    echo $prefecture . 'は関東地方ではありません。';
    echo PHP_EOL;
  }
}

// Q10 関数-1
function hello($name) {
  return $name . 'さん、こんにちは。' ."\n";
}
echo hello('金谷');
echo hello('安藤');

// Q11 関数-2
$price = 1000;
function calcTaxInPrice($taxOutPrice) {
  return $taxOutPrice * 1.10;
}
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文
function distinguishNum($Num) {
  if ($Num % 2 === 0) {
    return $Num . 'は奇数です。' . "\n";
  } else {
    return $Num . 'は偶数です。' . "\n";
  }
}
echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($Grades) {
  switch ($Grades) {
    case 'A';
    case 'B';
      return '合格です。' . "\n";
    
    case 'C';
      return '合格ですが追加課題があります。' . "\n";
      
    case 'D';
      return '不合格です。' . "\n";
    
    default;
      return '判定不明です。講師に問い合わせてください。' . "\n";
  }
}
echo evaluateGrade('A');
echo evaluateGrade(1);

?>