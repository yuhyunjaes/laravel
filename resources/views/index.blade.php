<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="{{ asset('public/web_file/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/web_file/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/web_file/fontawesome-free-6.7.2-web/css/fontawesome.min.css') }}" rel="stylesheet">

</head>
<body>

  

  <div class="header_container w-100 bg-body-tertiary">
      <header class="header_con d-flex">
          <nav class="navbar navbar-expand-lg w-100 h-100">
              <div class="container-fluid">
                    <a id="logo_a" class="navbar-brand" href="#">
                      <img src="{{ asset('public/img/logo.png') }}" alt="">
                    </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-4">
                      <a class="nav-link active" aria-current="page" href="#">소개</a>
                    </li>
                    <li class="nav-item mx-4 dropdown">
                      <a id="li_hover_event" class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        판매상품
                      </a>
                      <ul class="dropdown-menu show">
                        <li><a class="dropdown-item" href="#">전체상품</a></li>
                        <li><a class="dropdown-item" href="#">인기상품</a></li>
                      </ul>
                    </li>
                    <li class="nav-item mx-4">
                      <a class="nav-link active" href="#">가맹점</a>
                    </li>
                     <li class="nav-item mx-4">
                      <a class="nav-link active" aria-disabled="true">장바구니</a>
                    </li>
                  </ul>
                  <div class="btn_box m-0 p-0">
                  @auth
                    <span class="fw-bold me-2">{{ Auth::user()->user_name }}님</span>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-primary fw-bold">로그아웃</button>
                    </form>
                  @endauth
                  @guest
                      <label for="modal1_open" class="btn btn-primary fw-bold">로그인</label>
                      <label for="modal2_open" class="btn btn-outline-primary fw-bold">회원가입</label>
                  @endguest
                  </div>
                </div>
              </div>
          </nav>
      </header>
  </div>

  <input type="radio" name="modal2box" id="modal1_open">
  <input type="radio" name="modal2box" id="modal1_close">
  @if(session('danger'))
    <script>
        window.onload = function() {
            document.getElementById('modal1_open').checked = true;
        }
    </script>
  @endif
  <div class="modal fade show" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @if(session('danger'))
    <div class="alert alert-danger w-100 text-center mb-2 position-fixed t-0">
      {{ session('danger') }}
    </div>
    @endif
    <div class="modal-dialog modal-dialog-centered h-50">
      <div class="modal-content h-50">
        <div class="modal-header position-relative w-100">
          <h1 class="modal-title position-absolute fw-bold px-0 fs-5" id="exampleModalLabel">로그인</h1>
          <label for="modal1_close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></label>
        </div>
        <div class="modal-body d-flex justify-content-center align-items-center w-100">
          <form id="forr" action="{{ route('login') }}" method="POST" class="w-100 h-75 d-flex justify-content-center align-items-center">
              @csrf
              <input class="w-75 rounded-2" type="text" name="email" id="email" placeholder=" 이메일"> <br>
              <input class="w-75 rounded-2" type="text" name="password" id="password" placeholder=" 비밀번호"> <br>
              <button class="btn btn-primary w-75 fw-bold" type="submit" id="mit">로그인</button> <br>
          </form>
        </div>
      </div>
    </div>
  </div>

  <input type="radio" name="modal1box" id="modal2_open">
  <input type="radio" name="modal1box" id="modal2_close">

  <div class="modal fade show" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered h-75">
      <div class="modal-content h-75">
        <div class="modal-header position-relative w-100">
          <h1 class="modal-title position-absolute fw-bold px-0 fs-5" id="exampleModalLabel">회원가입</h1>
          <label for="modal2_close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></label>
        </div>
        <div class="modal-body d-flex justify-content-center align-items-center w-100">
        <form id="forr" method="POST" action="{{ route('register') }}" class="w-100 h-100 d-flex justify-content-center align-items-center">
              @csrf
              <input class="w-75 rounded-2" type="text" name="user_name" id="user_name" placeholder=" 회원 성명"> <br>
              <input class="w-75 rounded-2" type="text" name="email" id="email" placeholder=" 이메일"> <br>
              <input class="w-75 rounded-2" type="text" name="user_id" id="user_id" placeholder=" 아이디"> <br>
              <input class="w-75 rounded-2" type="text" name="password" id="password" placeholder=" 비밀번호"> <br>
              <input class="w-75 rounded-2" type="text" name="password_check" id="password_check" placeholder=" 비밀번호 확인"> <br>
              <button class="btn btn-primary w-75 fw-bold" type="submit" id="mit">회원가입</button> <br>
          </form>
        </div>
      </div>
    </div>
  </div>
    
</body>
</html>
 