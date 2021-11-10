<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>投稿一覧画面</title>
</head>
<body >
    <form action="{{ route('add') }}" method="POST" class="add-form">
            {{ csrf_field() }}

            <!-- タスク名 -->
            <div class="form-group">
                <h1 for="task-name" class="">スレッド作成</h1>
                
                <div class="form-text">
                    <label>スレッド名</label>
                    <input type="text" name="name" id="category-name" class="category_box">
                </div>
                <div class="form-text">
                <label>説明</label>
                <input type="text" name="comment" id="category-comment" class="category_box">
                </div>

                <!-- タスク追加ボタン -->
                <input type="submit" value="作成" class="btn" >
            </div>
            @csrf
    </form>
</body>
