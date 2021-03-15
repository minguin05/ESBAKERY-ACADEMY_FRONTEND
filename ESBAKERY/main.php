<?
include_once("./_common.php"); 
include_once("$g4[path]/lib/latest.lib.php");
include_once("$g4[path]/lib/outlogin.lib.php"); 

?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>은성제과제빵커피정은학원</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="//cdn.rawgit.com/hiun/NanumSquare/master/nanumsquare.css"
    />

    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="./css/main.css" />
  </head>

  <body>
    <!-- Start your project here-->

    <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a
                  class="nav-link"
                  aria-current="page"
                  href="/main.html"
                  id="logo"
                >
                  <img src="img/LOGO.png" alt="" width="210px" height="65px" />
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./IntroduceAcademy.html" id="first">학원 소개</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./course.html" id="introduce" >교육 과정</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Notice.html" id="introduce">공지사항</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Board.html" id="introduce">게시판</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./WillOpen.html" id="introduce">개설 예정 과정</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Gallery.html" id="introduce">갤러리</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./QandA.html" id="introduce">문의/예약</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Site.html" id="introduce">관련사이트</a>
              </li>
            </ul>
            <div>
              <a class="btn btn-primary" id="sign-btn" href="./SignUp.html">
                회원가입
              </a>
            </div>
            <div class="dropdown">
              <button
                class="btn btn-primary dropdown-toggle"
                type="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
                id="login-btn"
              >
                로그인
              </button>
              <div
                class="dropdown-menu dropdown-menu-lg-end"
                id="LoginDropdown"
              >
                <form class="px-4 py-3">
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input
                      type="email"
                      id="form1Example1"
                      class="form-control"
                    />
                    <label class="form-label" for="form1Example1">아이디</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input
                      type="password"
                      id="form1Example2"
                      class="form-control"
                    />
                    <label class="form-label" for="form1Example2"
                      >비밀번호</label
                    >
                  </div>

                  <!-- 2 column grid layout for inline styling -->
                  <div class="row mb-4" id="chheck">
                    <div class="col d-flex justify-content-center">
                      <!-- Checkbox -->
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="form1Example3"
                          checked
                        />
                        <label
                          class="form-check-label"
                          for="form1Example3"
                          id="autocheck"
                        >
                          자동로그인
                        </label>
                      </div>
                    </div>
                  </div>

                  <!-- Submit button -->
                  <button
                    type="submit"
                    class="btn btn-primary btn-block"
                    id="login-btn1"
                  >
                    로그인
                  </button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">ID/비밀번호 찾기</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar -->
    </header>

    <main>
      <!-- 모달-->
      <script src="https://code.jquery.com/jquery-latest.js"></script>

      <!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <img src="img/ESBREAD-FIRST.jpg" />
          <div
            style="
              cursor: pointer;
              background-color: #dddddd;
              text-align: center;
              padding-bottom: 10px;
              padding-top: 10px;
            "
            onClick="close_pop();"
          >
            <span class="pop_bt" style="font-size: 13pt"> 닫기 </span>
          </div>
        </div>
      </div>
      <!--End Modal-->

      <script type="text/javascript">
        jQuery(document).ready(function () {
          $("#myModal").show();
        });
        //팝업 Close 기능
        function close_pop(flag) {
          $("#myModal").hide();
        }
      </script>
      <!-- 모달-->

      
      <!-- Carousel wrapper -->
      <div
        id="carouselBasicExample"
        class="carousel slide carousel-fade"
        data-mdb-ride="carousel"
        id="bond-carousel"
      >
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="0"
            class="active"
          ></li>
          <li
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="1"
          ></li>
          <li
            data-mdb-target="#carouselBasicExample"
            data-mdb-slide-to="2"
          ></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner" id="main-carousel">
          <!-- Single item -->
          <div class="carousel-item active">
            <img
              src="./img/ESBREAD-FIRST.jpg"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>이달의 봉사활동</h5>
              <p>봉사와 함께하는 은성제과제빵커피학원</p>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <img
              src="./img/ESBREAD-SECOND.jpg"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <img
              src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>
                Praesent commodo cursus magna, vel scelerisque nisl consectetur.
              </p>
            </div>
          </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a
          class="carousel-control-prev"
          href="#carouselBasicExample"
          role="button"
          data-mdb-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselBasicExample"
          role="button"
          data-mdb-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      <!-- Carousel wrapper -->

      <!--Notice(Academy Curriculum)-->

      <div class="col-lg-6 col-md-12 customservice-box">
        <h2 id="noticeT">원내 교육 과정</h2>
        <table class="table" id="curriculum">
          <thead>
            <tr>
              <th scope="col" id="table-title">제목</th>
              <th scope="col" id="table-date">날짜</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mark</td>
              <td id="table-date">Otto</td>
            </tr>
            <tr>
              <td>Mark</td>
              <td id="table-date">Otto</td>
            </tr>
            <tr>
              <td>Mark</td>
              <td id="table-date">Otto</td>
            </tr>
          </tbody>
        </table>
        <div class="row d-flex justify-content-center" id="curriculum-btn">
          <a href="./course.html" style="color: black;">
          <button
            type="button"
            class="btn btn-outline-dark btn-rounded"
            data-mdb-ripple-color="dark"
          >더보기
          </button>
          </a>
        </div>
      </div>

      <!--Notice(Academy Curriculum)-->

      <!--Customer Service(Call)-->
      <div class="col-lg-6 col-md-12 customservice-box1">
        <h2 id="noticeT1">상담 전화</h2>
        <h3 id="cstom-service">
          <img
            id="mainbody-img"
            src="img/mainbody-phone.png"
            alt=""
          />055-339-7663
        </h3>
        <h3 id="cstom-service">
          <img
            id="mainbody-img"
            src="img/mainbody-mail.png"
            alt=""
          />055-339-7663
        </h3>
        <a href="./QandA.html" style="color: black;">
        <button
          type="button"
          class="btn btn-outline-dark btn-rounded"
          id="customservice-btn"
          data-mdb-ripple-color="dark"
        >
          문의하기
        </button>
      </a>
      </div>
      <!--Customer Service(Call)-->

      <!--certificate cards-->
      <div class="col-lg-6 col-md-12">
        <h2 id="certi">취득 가능한 자격증</h2>
      </div>

      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-mdb-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div id="menu">
              <div class="card1">
                <img
                  src="img/pecan-1736875_640.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">제과 기능사</h5>
                  <p class="card-text">
                    한국산업인력공단에서 시행 및 관리하는 제과제빵 계열의 기능사
                    자격증
                  </p>
                </div>
              </div>
              <div class="card2">
                <img
                  src="img/croissants-3652582_640.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">제빵 기능사</h5>
                  <p class="card-text">
                    한국산업인력공단에서 시행 및 관리하는 제과제빵 계열의 기능사
                    자격증
                  </p>
                </div>
              </div>
              <div class="card3">
                <img
                  src="img/muffins-2951757_640.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">제과 기능장</h5>
                  <p class="card-text">
                    한국산업인력공단에서 시행하는 기능장 자격증
                  </p>
                </div>
              </div>
              <div class="card4">
                <img
                  src="img/cake-486874_640.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">케이크 디자이너</h5>
                  <p class="card-text">음식문화 교류협회에서 시행하는 자격증</p>
                </div>
              </div>
              <div class="card5">
                <img
                  src="./img/coffee-983955_640.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">바리스타 마스터</h5>
                  <p class="card-text">
                    한국카페레스토랑마스터협회에서 시행되는 공신력 있는 민간자격증
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div id="menu">
              <div class="card1">
                <img
                  src="img/cookies-3798903_640.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">쿠키 마스터</h5>
                  <p class="card-text">
                    (사)한국식생활제과협회에서 시행되는 공신력 있는 민간자격증
                  </p>
                </div>
              </div>
              <div class="card2">
                <img
                  src="img/cookies-4053771_640.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">마카롱 마스터</h5>
                  <p class="card-text">
                    (사)한국식생활제과협회에서 시행되는 공신력 있는 민간자격증
                  </p>
                </div>
              </div>
              <div class="card3">
                <img
                  src="img/praline-182861_640.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">초콜릿 마스터</h5>
                  <p class="card-text">사단법인음식문화교류협회에서 시행되는 공신력 있는 민간자격증</p>
                </div>
              </div>
              <div class="card4">
                <img
                  src="img/sandwich-1238615_640.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">샌드위치 마스터</h5>
                  <p class="card-text">
                    한국외식문화연구원에서 시행되는 공신력 있는 민간자격증
                  </p>
                </div>
              </div>
              <div class="card5">
                <img
                  src="img/dessert-1850627_640.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">디저트 마스터</h5>
                  <p class="card-text">
                    한국능력개발진흥원에서 시행되는 공신력 있는 민간자격증
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          id="left-minibar"
          role="button"
          data-mdb-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          id="right-minibar"
          data-mdb-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      <!--certificate cards-->

      <!--Affiliated site Logo-->
      <div class="row" id="big-row">
        <div class="col-lg-12 col-md-4" id="affiliated-site">
          <a
            class="nav-link"
            aria-current="page"
            href="/main.html"
            id="affiliated-logo1"
          >
            <img src="img/banner01.png" alt="" width="156px" height="74px" />
          </a>
          <a
            class="nav-link"
            aria-current="page"
            href="https://cb.dongju.ac.kr/cb"
            id="affiliated-logo2"
          >
            <img src="img/banner02.jpg" alt="" width="156px" height="50px" />
          </a>
          <a
            class="nav-link"
            aria-current="page"
            href="http://www.hrdkorea.or.kr/"
            id="affiliated-logo3"
          >
            <img src="img/banner03.jpg" alt="" width="156px" height="50px" />
          </a>
          <a
            class="nav-link"
            aria-current="page"
            href="http://www.moel.go.kr/index.do"
            id="affiliated-logo4"
          >
            <img src="img/banner04.jpg" alt="" width="156px" height="50px" />
          </a>
          <a
            class="nav-link"
            aria-current="page"
            href="http://0zip.co.kr/"
            id="affiliated-logo5"
          >
            <img src="img/banner05.jpg" alt="" width="156px" height="50px" />
          </a>
          <a
            class="nav-link"
            aria-current="page"
            href="http://www.artisan.or.kr/index.php"
            id="affiliated-logo6"
          >
            <img src="img/banner06.jpg" alt="" width="156px" height="50px" />
          </a>
        </div>
      </div>
      <!--Affiliated site Logo-->
    </main>

    <!-- End your project here-->
    <!--FOOTER -->
    <footer
      class="text-white text-center text-lg-start"
      style="background-color: #4b4b4b"
    >
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
            <img src="img/miniLogo.png" alt="" width="150px" height="147px" />
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-10 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase text-logo">은성제과제빵커피학원</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-white text-href">개인정보보호정책</a>
                <a href="#!" class="text-white text-href">서비스이용약관</a>
              </li>
              <li>
                <br />
                <div class="text-white text-href">
                  <img
                    src="img/footer-pointer.png"
                    alt=""
                    width="25px"
                    height="25px"
                  />&nbsp;&nbsp;경상남도 김해시 가락로 10&nbsp;&nbsp;&nbsp;
                  <img
                    src="img/footer-phone.png"
                    alt=""
                    width="25px"
                    height="25px"
                  />&nbsp;&nbsp;TEL : 055-339-7663&nbsp;&nbsp;&nbsp;
                  <img
                    src="img/footer-fax.png"
                    alt=""
                    width="25px"
                    height="25px"
                  />&nbsp;&nbsp;FAX : 055-339-7664&nbsp;&nbsp;&nbsp;
                </div>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: #3d3d3d">
        COPYRIGHT (C) 2008 ESBREAD ALL RIGHTS RESERVED
      </div>
      <!-- Copyright -->
    </footer>
    <!--FOOTER-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
  </html>