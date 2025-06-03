<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="{{ asset('public/web_file/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/web_file/fontawesome-free-6.7.2-web/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/web_file/manager.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container w-100">
        <table class="table table-dark table-striped w-50 m-0 p-0">
            <tr>
                <th>회원 번호</th>
                <th>이름</th>
                <th>이메일</th>
                <th>계정 생성일</th>
            </tr>
            @foreach($users as $user)
            <tr class="item" draggable="true">
                <td class="item_id">{{ $user->id }}</td>
                <td>{{ $user->user_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('Y-m-d') }}</td>
            </tr>
            @endforeach
        </table>

        <div class="drop_box" ondragover="over(event)" ondrop="drop(event)">
            <img src="{{ asset('public/img/trash_icon.png') }}" alt="">
        </div>
    </div>

    <script src="{{ asset('public/js/manager.js') }}"></script>
</body>
</html>