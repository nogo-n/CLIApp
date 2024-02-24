<?php
// OS の種類を取得
$os = strtoupper(PHP_OS);

// 事前に定義しているメールアドレス1
$email = 'example@example.com';
// 事前に定義しているメールアドレス2
$email2 = 'example@example2.com';
// 事前に定義している学生番号
$studentNumber = 1000;
// 他に登録したいものがあれば以下で登録

// 標準入力から余分な空白を取り除いたデータを読み込む
$input = trim(fgets(STDIN)); 

// OS の種類に応じてコマンドを選択し、クリップボードにコピーする
if ($input === "email") {
    $command = ($os === 'WINNT') ? "echo \"$email\" | clip" : "echo \"$email\" | pbcopy";
    exec($command);
    echo "事前に定義されたメールアドレスをコピーしました: $email\n";
} elseif ($input === "email2") {
    $command = ($os === 'WINNT') ? "echo \"$email2\" | clip" : "echo \"$email2\" | pbcopy";
    exec($command);
    echo "事前に定義されたメールアドレスをコピーしました: $email2\n";
} elseif ($input === "studentNumber") {
    $command = ($os === 'WINNT') ? "echo \"$studentNumber\" | clip" : "echo \"$studentNumber\" | pbcopy";
    exec($command);
    echo "事前に定義された学生番号をコピーしました: $studentNumber\n";
} else {
    echo "入力された内容は 'email' または 'email2' または 'studentNumber' ではありません。\n";
}
?>