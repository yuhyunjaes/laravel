<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- public 폴더 안의 CSS 불러오기 예시 -->
    <link href="{{ asset('public/web_file/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/web_file/style.css') }}" rel="stylesheet">

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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          판매상품
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                      <li class="nav-item mx-4">
                        <a class="nav-link" href="#">가맹점</a>
                      </li>
                       <li class="nav-item mx-4">
                        <a class="nav-link disabled" aria-disabled="true">장바구니</a>
                      </li>
                    </ul>
                    <div class="btn_box m-0 p-0">
                        <button class="btn btn-success fw-bold">로그인</button>
                        <button class="btn btn-outline-success fw-bold">회원가입</button>
                    </div>
                  </div>
                </div>
            </nav>
        </header>
    </div>
</body>
</html>
