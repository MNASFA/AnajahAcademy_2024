<!DOCTYPE html>
<html dir='rtl' lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!-- style css link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="carousel.css">
   <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    
    <!-- Bootstrap cdn links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/1c69cf81a6.js" crossorigin="anonymous"></script>
    <title>Anajah Academy</title>

   

    <script defer src="script.js"></script>

    <style>

    
#btn-back-to-top {
  position: fixed;
  bottom: 20px;
  right: 20px;
  display: none;
  border:none;
  background-color: #d9033c !important;
}
    

    </style>
</head>
<body>
    
    <header class="header" >
        <div class=" top-bar">
          <div class="top-bar__content">
            <section class="phone" dir="ltr">
                <i class="fa-solid fa-phone"></i>
              <span class="content_top_bar" dir="ltr">+212 661436917</span>
            </section>
            <section class="email" dir="ltr">
                <i class="fa-solid fa-envelope"></i>
              <span class="content_top_bar">info@anajahacademy.com</span>
            </section>
          </div>
        </div>
    
        <div class="bottom-bar" id="myHeader">
          <div class="bottom-bar__content">
            <a href="index.html" class="logo">
              <img class="logo__img" src="assets/img/favicon.png" alt="logo">
            </a>
        
            <nav class="nav">
              <ul class="nav__list">
                <li class="nav__item">
                  <a class="nav__link" href="#">الصفحة الرئيسية</a>
                </li>
                <li class="nav__item">
                  <a class="nav__link" href="#about">من نحن</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="#services">خدماتنا</a>
                  </li>
                  <li class="nav__item">
                    <a class="nav__link" href="#partners">شركاؤنا</a>
                  </li>
                
                <li class="nav__item">
                  <a class="btn" href="pages/contact.php">تواصل معنا</a>
                </li>
              </ul>
            </nav>
      
            <div class="hamburger">
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
            </div>
          </div>
        </div>
    </header>

    <div>
        <section class="home_page">
            <div class="text ">
                <h1><span>النجاح</span> اكاديمي</h1>
                <p style="line-height: 30px;">

                  النجاح أكاديمي هي وكالة مختصة في تقديم الاستشارات التعليمية للدراسة في
                  تركيا،حيث نوفر العديد من الخدمات المتميزة للطلاب المغاربة و الطلاب العرب
                  بصفة عامة الذين يرغبون في الدراسة في تركيا. 
                
                </p>
                <button onclick="location.href='pages/contact.php'" id="btn"><strong>اتصل الآن</strong><i class="fa-solid fa-phone"></i></button>
                
            </div>
        </section>
    </div>
 
    <section class="container why_us_section" id="whyus">
        <div class="feat bg-gray pt-5 pb-5">
            <div class="container">
              <div class="row">
                <div class="section-head col-sm-12">
                  <h4><span>لمَ تختار فريقنا ؟</span></h4>
                  <p>يعد مركز النجاح أكاديمي منصة تعليمية متخصصة وذات خبرة عالية في تقديم الاستشارات التعليمية الشاملة مجانا.</p>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="item"> <span class="icon feature_box_col_one"><i class="fa-solid fa-building-columns"></i></span>
                    <h6>تحصيل القبولات الجامعية مجانا</h6>
                    <p>قبولات في الجامعات الحكومية مضمونة 100% .</p>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="item"> <span class="icon feature_box_col_two"><i class="fa-solid fa-comments"></i></span>
                    <h6>استشارات تعليمية مجانية</h6>
                    <p>استشارات تعليمية،توجيه وارشاد طوال فترة دراستك .</p>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="item"> <span class="icon feature_box_col_three"><i class="fa-solid fa-house-circle-check"></i></span>
                    <h6>تأمين السكن المناسب و الملائم للطلاب</h6>
                    <p>تأمين سكن حسب متطلبات الطالب و تكاليف المتوفرة لدى الطالب .</p>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="item"> <span class="icon feature_box_col_four"><i class="fa-solid fa-graduation-cap"></i></span>
                    <h6>التقديم على الاقامة الطلابية الإجبارية</h6>
                    <p>اخد موعد الاقامة الطلابية الجبارية مجانا .</p>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="item"> <span class="icon feature_box_col_five"><i class="fa-solid fa-percent"></i></span>
                    <h6>خصومات مميزة</h6>
                    <p>استفد فورا من منح تصل ل75% بتسجيلك عن طريقنا مجانا .</p>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_one"><i class="fa-solid fa-handshake"></i></span>
                      <h6>تواصل مستمر</h6>
                      <p>فريق النجاح اكاديمي دائما في تواصل مع الطلبة الذين يأتون عن طريقنا.</p>
                    </div>
                  </div>
               
              </div>
            </div>
          </div>
        
    </section>

    <section class="container about_us" id="about">
        <div class="about_container">
            <div class="left_side">
                <h2>من نحن ؟</h2>
                <p>يعد مركز النجاح أكاديمي منصة تعليمية متخصصة وذات خبرة عالية في تقديم الاستشارات التعليمية الشاملة مجانا. ولضمان تجرِبة الطلاب الناجحة، يتم توفير مستوى عالٍ من الدعم الأكاديمي والإداري من قبل فريق من المستشارين ذوي الخبرة و ذلك بمساعدة عديد من شركائنا و دكاترة الجامعات التركية لتوفير الأحسن دائمًا حيث نوفر لكم أكثر من 25 جامعة معترف بها دوليًا وأكثر من 100 تخصص، بالإضافة إلى أفضل الخصومات الممكنة والمرافقة الكاملة للطلاب طيلة مسيرتهم الدراسية. ٠كما نقوم بتوجيهكم ومساعدتكم في جميع الأمور المتعلقة بالسكن والإقامة الطلابية الإجبارية، ونوفر لكم الدعم في فتح حسابات بنكية.
                    <br><br>
                ويعد اختياركم للدراسة في تركيا خيارًا ممتازًا بما أن الشهادات التي يتم الحصول عليها من الجامعات التركية معترف بها في جميع الدول الأوروبية.
                </p>
                
                <button onclick="location.href='#services'" class="btn-53">
                    <div class="original">خدماتنا</div>
                    <div class="letters">
                      
                      <span>S</span>
                      <span>E</span>
                      <span>R</span>
                      <span>V</span>
                      <span>I</span>
                      <span>C</span>
                      <span>E</span>
                      <span>S</span>

                    </div>
                  </button>
            </div>
            <div class="right_side">
                <img src="assets/img/Questions-amico.svg" alt="about_us_pic">
            </div>
        </div>

     
    </section>

    <section class="container counter_section">
      <div class="section-head col-sm-12">
        <h4><span>عن مركزنا !</span></h4>
      </div>
      <div class="container counter">
        <div class="stats-section">
          <div class="stats-card">
            <div class="icon-circle">
              <img class="icon" src="assets/img/group.png" alt="" />
            </div>
            <div class="title_container">           
               <span>+</span><p class="title" id="value" data-target="2500">-2</p>
            </div>
            <p class="label">استشارة تعليمية</p>
          </div>
        </div>
        <div class="stats-section">
          <div class="stats-card">
            <div class="icon-circle">
              <img class="icon" src="assets/img/cheer-up.png" alt="" />
            </div>
            <div class="title_container">           
               <span>+</span><p class="title" id="value" data-target="1000">0</p>
            </div>
            <p class="label">طالب ممتن للخدمات</p>
          </div>
        </div>
        <div class="stats-section">
          <div class="stats-card">
            <div class="icon-circle">
              <img class="icon" src="assets/img/university (1).png" alt="" />
            </div>
            <div class="title_container">           
               <span>+</span><p class="title" id="value" data-target="30">0</p>
            </div>
            <p class="label">جامعة معترف بها</p>
          </div>
        </div>
        <div class="stats-section">
          <div class="stats-card">
            <div class="icon-circle">
              <img class="icon" src="assets/img/percentage.png" alt="" />
            </div>
            <div class="title_container">           
               <span>+</span><p class="title" id="value" data-target="100">0</p>
            </div>
            <p class="label">تخصص متاح</p>
          </div>
        </div>
      </div>
  
    </section>

    <section class="services_section container" id="services">
      <div class="section-head col-sm-12">
        <h4><span>خدماتنا</span></h4>
      </div>

      <div class="main">
        <ul class="cards">


          <li class="cards_item">
            <div class="card">
              <div class="card_image">
               
                <img src="assets/img/college project-bro.png" alt="mixed vegetable salad in a mason jar." />
                <span class="card_price free_price"><span>$</span>250</span>
              </div>
              <div class="card_content">
                <h2 class="card_title">FREE PACK</h2>
                <div class="card_text">
                  <ul class="features">
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">استخراج القبول الجامعي مجانا بكل التخفيضات الممكنة و بأقل الأسعار .</span>
                      
                    </li>
                   
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">الاستقبال في المطار و المرافقة إلى المكان الذي يود الطالب (الفندق الذي حجز فيه او غيرها ).</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">مرافقة الطالب و إتمام التسجيل في الجامعة بشكل صحيح و سليم .</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">أخد موعد الإقامة الطلابية الإجبارية.</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">الاستفادة من استشارات تعليمية مجانية طوال فترة دراستك .</span>
                      
                    </li>
                    <li class="list_item btn_item">
                      <a href="pages/contact.php" class="btn_services">تواصل معنا</a>
                    </li>
                  </ul>
                </div>
                <br>
               
              </div>
            </div>
          </li>
      


          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                
                <img src="assets/img/college project-rafiki.png" alt="a Reuben sandwich on wax paper." />
                <span class="card_price"><span>$</span>350</span>
              </div>
              <div class="card_content">
                <h2 class="card_title">MINI PACK</h2>
                <div class="card_text">
                  <ul class="features">
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">مرافقة الطالب،و إكمال إجراءات التسجيل بالجامعة.</span>
                      
                    </li>
                   
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">ترجمة الوثائق من طرف مترجم محلف تركي.</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">مصادقة الوثائق المترجمة من خلال النوتر.</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">استخراج بطاقة المواصلات الخاصة بطالب.</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">دفع أقساط التأمين الصحي الاجباري.</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">دفع أقساط الرقم الضريبي الخاص بالطالب .</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">استخراج موعد الإقامة الطلابية الاجباري.</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">استخراج المعادلة من وزارة التعليم التركي .</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">الاستفادة من انشطة الترفيهية التي ستنظم بشكل مجاني .</span>
                      
                    </li>
                    <li class="list_item btn_item">
                      <a href="pages/contact.php" class="btn_services">تواصل معنا</a>
                    </li>
                  </ul>
                </div>
               
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <span class="note">خدمة مميزة</span>
                <img src="assets/img/college project-pana.png" alt="A side view of a plate of figs and berries." />
                <span class="card_price"><span>$</span>900</span>
              </div>
              <div class="card_content">
                <h2 class="card_title">VIP PACK</h2>
                <div class="card_text">
                  <ul class="features">
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">استخراج القبول الجامعي مجانا بكل التخفيضات الممكنة و بأقل الأسعار .</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">الاستقبال في المطار و المرافقة إلى الفندق.</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">الاستضافة في الفندق لمدة ثلاث أيام (+وجبة عشاء).</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">المساعدة على ايجاد السكن اللائق و قريب على الجامعة.</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">مرافقة الطالب و إتمام التسجيل في الجامعة بشكل صحيح و سليم .</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">ترجمة الوثائق اللازمة لاتمام التسجيل في الجامعة من طرف مترجم محلف .</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">لمصادقة على الوثائق من طرف النوتر .</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">استخراج بطاقة المواصلات الخاصة بطلاب.</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">دفع أقساط التأمين الصحي الاجباري .</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">دفع اقساط الرقم الضريبي الخاص بالطالب .</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">استخراج موعد الإقامة الطلابية الاجباري .</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">استخراج المعادلة من وزارة التعليم التركي .</span>
                      
                    </li>
                    <li class="list_item">
                      <i class="fas fa-check"></i>
                      <span class="list-name">الاستفادة من انشطة الترفيهية التي ستنظم بشكل مجاني .</span>
                      
                    </li>
                    <li class="list_item btn_item">
                      <a href="pages/contact.php" class="btn_services">تواصل معنا</a>
                    </li>
                  </ul>
                </div>
              
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <section class="partners_section" id="partners">
      <div class="section-head col-sm-12">
        <h4><span>شركاؤنا</span></h4>
      </div>


    <section class="my-5 " dir="ltr">
        <div class="container">
            <div class="row mb-5">
               
            </div>
            <div class="row mx-auto my-auto justify-content-center">
                <div class="col">
                    <div class="row">
                        <div class="col-1 d-flex align-items-center justify-content-center">
                            <a role="button" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                <div class="carousel-nav-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#d9033c">
                                        <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="col-10">
                            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img class="halic_img" src="assets/img/partners/Haliç Üniversitesi Yeni (2022).svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="assets/img/partners/İSÜ İstinye Üniversitesi.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="assets/img/partners/Nişantaşı Üniversitesi.svg" class="img-fluid">
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="assets/img/partners/BAU Bahçeşehir Üniversitesi.svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="assets/img/partners/biruni-universitesi-seeklogo.com.svg" class="img-fluid">
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="assets/img/partners/logo-en (1).svg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Uncomment these lines to use the default overlay controls!
                                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </a>
                                -->
                            </div>
                        </div>
                        <div class="col-1 d-flex align-items-center justify-content-center">
                            <a role="button" href="#recipeCarousel" role="button" data-bs-slide="next">
                                <div class="carousel-nav-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#d9033c">
                                        <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
      



    </section>

     <!-- footer section start -->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 about-grid">
            <a href="index.html"><img src="assets/img/favicon.png" alt="" class="img-fluid logo-footer"></a>
                      <div class="footer-about">
                          <p>النجاح أكاديمي هي وكالة مختصة في تقديم الاستشارات التعليمية للدراسة في تركيا،حيث نوفر العديد من الخدمات المتميزة للطلاب المغاربة و الطلاب العرب بصفة عامة الذين يرغبون في الدراسة في تركيا.</p>
                      </div>

          </div>
          <div class="col-md-3">
            <div class="useful-link">
              <h2>قائمة الصفحات</h2>
              <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
              <div class="use-links">
                <li><a href="index.html">الصفحة الرئيسية </a></li>
                <li><a href="#about">من نحن </a></li>
                <li><a href="#services">خدماتنا </a></li>
                <li><a href="#partners">شركاؤنا </a></li>
                <li><a href="pages/contact.php"> تواصل معنا</a></li>
              </div>
            </div>

          </div>
                    <div class="col-md-3">
                        <div class="social-links">
              <h2>تابعنا</h2>
              <img src="./assets/images/about/home_line.png" alt="">
              <div class="social-icons" dir="ltr">
                <li><a href="https://www.facebook.com/profile.php?id=100090757052555&mibextid=ZbWKwL"><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
                <li><a href="https://instagram.com/anajah.academy?igshid=NGVhN2U2NjQ0Yg=="><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                <li><a href="https://www.linkedin.com/in/driss-fallouni-9a5633273?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BQOKNKoZPR66q9NLLpM6mHA%3D%3D"><i class="fa-brands fa-linkedin-in"></i> Linkedin</a></li>
              </div>
            </div>
                    

                    </div>
          <div class="col-md-3">
            <div class="address">
              <h2>تفاصيل اخرى</h2>
              <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
              <div class="address-links" dir="ltr">
                <li class="address1"><i class="fa-solid fa-location-dot"></i> 8,rue abou omar el alaa belvedere ,casablanca</li>
                   <li><a href=""><i class="fa-solid fa-phone"></i>+212 661436917</a></li>
                   <li><a href=""><i class="fa-solid fa-envelope"></i>info@anajahacademy.com</a></li>
              </div>
            </div>
          </div>
                  
        </div>
      </div>

    </footer>
    <!-- footer section end -->
    <!-- footer copy right section start -->
    <section id="copy-right">
      <div class="copy-right-sec">  
        النجاح اكاديمي © 2024
      </div>

    </section>
    <!-- footer copy right section end -->
    
    <button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
          <i class="fas fa-arrow-up"></i>
    </button>


    <script>
      //Get the button
      let mybutton = document.getElementById("btn-back-to-top");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      // When the user clicks on the button, scroll to the top of the document
      mybutton.addEventListener("click", backToTop);

      function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

</body>
</html>