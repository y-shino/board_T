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
@if (count($categories) > 0)

    <form action="category.blade.php" method="get" >
        <div class="search">
            <input type="text" class="textbox" placeholder="キーワード" name="keyword" value="" style="width: 200px;" >
            <button class="btn-k" type="submit" >検索</button>
        </div>
    </form>


    @foreach ($categories as $category)
        <div class="link_box">
            <a href="" class="title">{{ $category->name }}</a><br>
            <span class="ex"> {{ $category->comment }}</span>
        </div>

    @endforeach


    <nav>
        <ul>
            <li class="page_t">
                <a href="" class="li_box"><<</a>
            </li>
            <li class="page">
                <a href="" class="li_box"><</a>
            </li>
            <li>
                <span class="li_box">1</span>
            </li>
            <li class="page">
                <a href="" class="li_box">></a>
            </li>
            <li class="page_e">
                <a href="" class="li_box">>></a>
            </li>

        </ul>
    </nav>
@endif
</body>
</html>
