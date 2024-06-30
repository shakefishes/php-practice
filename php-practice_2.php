<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します' . "\n\n";

$numbers = [];
for ($i = 1; $i <=100; $i++) {
  if($i % 4 === 0 && !($i % 5 === 0)) {
    echo 'tic' . "\n";
} elseif ($i % 5 === 0 && !($i % 4 === 0)) {
    echo 'tac' . "\n";
} elseif ($i % 4 === 0 && $i % 5 === 0) {
    echo 'tic-tac' . "\n";
} else {
    echo $i . "\n";
}}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

var_dump($personalInfos);

//問題1
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

//問題2
foreach ($personalInfos as $index => $person) {
  echo $index+1 . '番目の' . $personalInfos[$index]['name'] . 'のメールアドレスは' . $personalInfos[$index]['mail'] . 'で、電話番号は' . $personalInfos[$index]['tel'] . 'です。' . "\n";
}

//問題3
$ageList = [
    25,
    30,
    18
];
foreach ($personalInfos as $index => $person) {
    $personalInfos[$index]['age'] =
        $ageList[$index];
}

var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($class)
    {
        echo $this->studentName . 'は' . $class . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$takahashi = new Student(130, '高橋');
echo '学籍番号' . $takahashi->studentId . '番の生徒は' . $takahashi->studentName . 'です。';

// Q4 オブジェクト-2
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1
$date = new DateTime();
echo $date->modify('-1 months')->format('Y-m-d');

//問題2
$beforeDate = new DateTime('1992-04-25');
echo $date->diff($beforeDate)->format('あの日から%a日経過しました。');

?>