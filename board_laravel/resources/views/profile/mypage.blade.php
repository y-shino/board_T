<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>投稿一覧画面</title>
</head>
<body>
    @if (count($users) > 0)
        <div class="mypage">
            @foreach ($users as $user)
                <div class="icon">
                    <img src="../storage/images/profile.png" alt="">
                </div>
                <div class="title">{{ $user->name }}</div>
                <div class="profile">{{ $user->profile }}</div>
            @endforeach
            <a href="">
                <img src="../storage/images/DM.png" alt="" >
            </a>
        </div>
    @endif
</body>
