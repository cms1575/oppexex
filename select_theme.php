<!DOCTYPE html>
<?php 
    session_start();
   
    if(!isset($_SESSION['token'])) {
        echo "<script type=\"text/javascript\">alert('이메일 인증 후 이용해주세요'); location.href='./ui.php'</script>";
    } else {
        $token = $_SESSION['token'];
    }
       
?>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>GMyou &ndash; Web Profile for You</title>
      <!-- Latest compiled and minified CSS -->
      <link
         rel="stylesheet"
         href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
         integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
         crossorigin="anonymous"
      />

      <!-- Optional theme -->
      <link
         rel="stylesheet"
         href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
         integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ"
         crossorigin="anonymous"
      />

      <link rel="stylesheet" href="style_select_theme.css" />

      <script
         src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
         integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
         crossorigin="anonymous"
      ></script>
   </head>
   <body>
      <section class="style-gray">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="page-header">
                     <h3>사이트 개설</h3>
                     <h5 class="text-gray">
                        내 사이트에 사용할 템플릿을 선택해 주세요.
                     </h5>
                  </div>
               </div>
            </div>

            <div class="row theme-row" id="theme_list">
               <div class="col-md-4 col-sm-6 col-theme">
                  <div class="card card-theme _card-theme">
                     <div class="theme-item">
                        <div class="card-body">
                           <div class="holder">
                              <img class="img-responsive" src="img1.png" />
                              <div class="theme-overlay">
                                 <div class="icon">
                                    <div class="inline-blocked">
                                       <!--<a
                                          href="javascript:;"
                                          class="
                                             hidden-xs
                                             width-4
                                             text-15
                                             btn btn-theme btn-primary
                                             margin-bottom-xl margin-top-xl
                                             blocked
                                             _start
                                          "
                                          >개설하기</a
                                       >-->
                                       <a
                                          href="../templates/1/index.html"
                                          class="
                                             width-4
                                             text-15
                                             btn btn-theme btn-flat-white
                                             margin-bottom-xl margin-top-xl
                                             _preview
                                             blocked
                                          "
                                       >
                                          <span class="hidden-xs hidden-sm"
                                             >미리보기</span
                                          >
                                          <span class="hidden-md hidden-lg"
                                             >미리보기</span
                                          >
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a
                     href="javascript:;"
                     class="user-avatar site-avatar _user-avatar"
                  >
                     <div class="avatar-info">
                        <span class="name"></span>
                        <span class="badge badge-circle badge-shop">1번</span>
                        <div class="form-check">
                           <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckDefault"
                           />
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-4 col-sm-6 col-theme">
                  <div class="card card-theme _card-theme">
                     <div class="theme-item">
                        <div class="card-body">
                           <div class="holder">
                              <img class="img-responsive" src="img2.png" />
                              <div class="theme-overlay">
                                 <div class="icon">
                                    <div class="inline-blocked">
                                       <!--<a
                                          href="javascript:;"
                                          class="
                                             hidden-xs
                                             width-4
                                             text-15
                                             btn btn-theme btn-primary
                                             margin-bottom-xl margin-top-xl
                                             blocked
                                             _start
                                          ""
                                          >개설하기</a
                                       >-->
                                       <a
                                          href="../templates/2/index.html"
                                          class="
                                             width-4
                                             text-15
                                             btn btn-theme btn-flat-white
                                             margin-bottom-xl margin-top-xl
                                             _preview
                                             blocked
                                          "
                                       >
                                          <span class="hidden-xs hidden-sm"
                                             >미리보기</span
                                          >
                                          <span class="hidden-md hidden-lg"
                                             >미리보기</span
                                          >
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a
                     href="javascript:;"
                     class="user-avatar site-avatar _user-avatar"
                  >
                     <div class="avatar-info">
                        <span class="name"></span>
                        <span class="badge badge-circle badge-shop">2번</span>
                        <div class="form-check">
                           <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckDefault"
                           />
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-4 col-sm-6 col-theme">
                  <div class="card card-theme _card-theme">
                     <div class="theme-item">
                        <div class="card-body">
                           <div class="holder">
                              <img class="img-responsive" src="img3.png" />
                              <div class="theme-overlay">
                                 <div class="icon">
                                    <div class="inline-blocked">
                                       <!--<a
                                          href="javascript:;"
                                          class="
                                             hidden-xs
                                             width-4
                                             text-15
                                             btn btn-theme btn-primary
                                             margin-bottom-xl margin-top-xl
                                             blocked
                                             _start
                                          "
                                          >개설하기</a
                                       >-->
                                       <a
                                          href="../templates/3/index.html"
                                          class="
                                             width-4
                                             text-15
                                             btn btn-theme btn-flat-white
                                             margin-bottom-xl margin-top-xl
                                             _preview
                                             blocked
                                          "
                                       >
                                          <span class="hidden-xs hidden-sm"
                                             >미리보기</span
                                          >
                                          <span class="hidden-md hidden-lg"
                                             >미리보기</span
                                          >
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a
                     href="javascript:;"
                     class="user-avatar site-avatar _user-avatar"
                  >
                     <div class="avatar-info">
                        <span class="name"></span>
                        <span class="badge badge-circle badge-shop">3번</span>
                        <div class="form-check">
                           <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckDefault"
                           />
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </section>

      <section>
         <div class="info-input container mt-10 p-10">
            <label class="info-input-heading">기본 정보</label>
            <form class="row g-3">
               <div class="col-auto">
                  <label for="name-input" class="input-form-label">이름</label>
                  <input
                     type="text"
                     class="form-control-plaintext"
                     id="name-input"
                  />
               </div>
               <div class="col-auto">
                  <label class="input-form-label">프로필 이미지</label>
                  <input
                     class="form-control form-control-sm"
                     style="width: 50%; margin-left: 130px; border-style: none"
                     id="profile-thumb-input"
                     type="file"
                  />
               </div>
               <div class="col-auto">
                  <label for="occupation-input" class="input-form-label"
                     >직업</label
                  >
                  <input
                     type="text"
                     class="form-control-plaintext"
                     id="occupation-input"
                  />
               </div>
               <div class="col-auto">
                  <label for="intro-input" class="input-form-label"
                     >소개글</label
                  >
                  <input
                     type="text"
                     class="form-control-plaintext"
                     id="intro-input"
                  />
               </div>
               <div class="col-auto">
                  <label for="phone-input" class="input-form-label"
                     >연락처</label
                  >
                  <input
                     type="text"
                     class="form-control-plaintext"
                     id="phone-input"
                     placeholder="010-0000-0000"
                  />
               </div>
               <div class="col-auto">
                  <label for="email-input" class="input-form-label"
                     >E-mail</label
                  >
                  <input
                     type="text"
                     class="form-control-plaintext"
                     id="email-input"
                     placeholder="email@example.com"
                  />
               </div>
               <div class="col-auto">
                  <label for="github-input" class="input-form-label"
                     >GitHub</label
                  >
                  <input
                     type="text"
                     class="form-control-plaintext"
                     id="github-input"
                     placeholder="github.com/example"
                  />
               </div>
            </form>
            <label class="timeline-input-heading">타임라인</label>
            <div class="row submit-btn-row">
               <a
                  href="javascript:;"
                  class="
                     submit-btn
                     width-4
                     text-15
                     btn btn-theme btn-light
                     blocked
                     _start
                  "
                  >입력</a
               >
            </div>
            <form class="row g-3">
               <div class="col-auto">
                  <label for="timeline-desc-input" class="input-form-label"
                     >WHEN</label
                  >
                  <input
                     type="text"
                     class="form-control-plaintext"
                     id="timeline-desc-input"
                  />
               </div>
               <div class="col-auto">
                  <label for="timeline-subtitle-input" class="input-form-label"
                     >WHERE</label
                  >
                  <input
                     type="text"
                     class="form-control-plaintext"
                     id="timeline-subtitle-input"
                  />
               </div>

               <div class="col-auto">
                  <label for="timeline-title-input" class="input-form-label"
                     >WHAT</label
                  >
                  <input
                     type="text"
                     class="form-control-plaintext"
                     id="timeline-title-input"
                  />
               </div>

               <div class="col-auto">
                  <label for="timeline-desc-input" class="input-form-label"
                     >HOW</label
                  >
                  <input
                     type="text"
                     class="form-control-plaintext"
                     id="timeline-body-input"
                  />
               </div>
            </form>

            <div class="row complete-btn-row">
               <a
                  href="javascript:;"
                  class="
                     complete-btn
                     width-4
                     text-15
                     btn btn-theme btn-primary
                     margin-bottom-xl margin-top-xl
                     blocked
                     _start
                  "
                  >개설하기</a
               >
            </div>
         </div>
      </section>
   </body>
</html>
