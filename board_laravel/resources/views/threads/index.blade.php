@extends('layouts.app')
 
@section('content')
 
<!-- コメント一覧表示 -->
@if (count($comments) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
    </div>
    <div class="panel-body">
        <table class="table table-striped category-table">
 
            <!-- テーブルヘッダ -->
            <thead>
                <th>掲示板</th>
                <th>&nbsp;</th>
            </thead>
            
 
 @section('title', 'board_larabel 投稿の一覧ページ')
 @section('keywords', 'キーワード1,キーワード2,キーワード3')
 @section('description', '投稿一覧ページの説明文')
 @section('pageCss')
 <link href="/css/bbs/style.css" rel="stylesheet">
 @endsection
  
 
  
 @section('content')
 <div class="table-responsive">
     <table class="table table-hover">
         <thead>
         <tr>
             <th>ID</th>
             <th>カテゴリ</th>
             <th>作成日時</th>
             <th>名前</th>
             <th>メッセージ</th>
         </tr>
         </thead>
         <tbody id="tbl">
         @foreach ($comments as $comment)
             <tr>
                 <td>{{ $comment->id }}</td>
                 <td>{{ $comment->category->name }}</td>  
                 <td>{{ $comment->created_at->format('Y.m.d') }}</td>
                 <td>{{ $comment->user->name }}</td>
                 <td>{!! nl2br(e(Str::limit($comment->comment, 1000))) !!}
                  </td>
             </tr>
         @endforeach
         </tbody>
     </table>
 </div>

    @if($errors->any())
    <h2>エラーメッセージ</h2>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <h2>フォーム</h2>
    <form action="/threads" method="POST">
        <input type="hidden" name="category_id" value="{{ $category_id }}">
        名前:<br>
        <input name="name">
        <br>
        コメント:<br>
        <textarea name="comment" rows="4" cols="40"></textarea>
        <br>
        {{ csrf_field() }}
        <button class="btn btn-success"> 送信 </button>
    </form>


 @endsection
 @endif

 
