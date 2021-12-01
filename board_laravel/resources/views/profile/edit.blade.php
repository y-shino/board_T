@section('content')
<div class="">


    <!-- 新タスクフォーム -->
    <form action="{{ route('koushin') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
      
        <!-- タスク名 -->
        <div class="form-group">

            <div class="col-sm-6">
                <img src="" alt="">
            </div>
            <div class="col-sm-6">
                <input type="file" name="image_name" id="user-name" class="form-control" value='ファイルを選択'>
            </div>
            <div class="col-sm-6">
                <input type="text" name="name" id="user-name" class="form-control" placeholder='ニックネーム' value="{{ $user->name }}">
            </div>
            <div class="col-sm-6">
                <input type="text" name="profile" id="user-profile" class="form-control" placeholder='自己紹介文' value="{{ $user->profile }}">
            </div>

            <div>
                <!-- タスク追加ボタン -->
                <input type="submit" value="更新" class="btn-g">
            </div>



        </div>
        ​
        @csrf

    </form>