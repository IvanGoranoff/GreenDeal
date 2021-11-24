<!DOCTYPE html>
<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "contactform@greendl.eu";
    $email_subject = "New form submissions";


    $email_message = "Form details below.\n\n";
 
    
    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>


<?php
echo '<script language="javascript">';
echo 'alert("Съобщението е изпратено успешно.")';
echo '</script>';
}
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
  <title>Европейски зелен пакт</title>
  <meta name="description" content="Европейският зелен пакт е нашата пътна карта за постигане на устойчивост на икономиката на ЕС. Това ще стане като превърнем климатичните и екологичните предизвикателства във възможности във всички области на политиката и направим така, че преходът да е справедлив и приобщаващ за всички." />
  <meta content="европейски зелен пакт, европа, европейски съюз, ЕС, пакт за климата, климат, енергетика, сгради, мобилност, European Green Deal, european green pact, europe, european union, EU, climate pact, climate, energy, buildings, mobility" name="keywords">
  <meta name="googlebot" content="Европейският зелен пакт е нашата пътна карта за постигане на устойчивост на икономиката на ЕС. Това ще стане като превърнем климатичните и екологичните предизвикателства във възможности във всички области на политиката и направим така, че преходът да е справедлив и приобщаващ за всички." />
  <meta name="robots" content="Европейският зелен пакт е нашата пътна карта за постигане на устойчивост на икономиката на ЕС. Това ще стане като превърнем климатичните и екологичните предизвикателства във възможности във всички области на политиката и направим така, че преходът да е справедлив и приобщаващ за всички." />
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
 
    

  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>

<body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60420de6385de407571cdbb1/1f010cjfe';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Европейски зелен пакт</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Начало</a></li>
          <li class="dropdown"><a class="nav-link scrollto" href="#services"><span>Цели</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#why-us"><span>Полезно</span><i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="https://ec.europa.eu/commission/presscorner/api/files/attachment/860311/Whats_in_it_for_me_bg.pdf.pdf" target="_blank">Каква е ползата за мен?</a></li>     
                <li><a href="https://ec.europa.eu/commission/presscorner/api/files/attachment/860272/What_if_we_do_not_act_bg.pdf.pdf" target="_blank">Какво ще стане ако не действаме?</a></li>        
              </ul>
              
              <li><a class="nav-link  scrollto" href="#portfolio">Галерия</a></li>
            </ul>
          </li>
           
          <li><a class="nav-link  scrollto" href="#cta">Действия</a></li>
          <li class="dropdown"><a class="nav-link scrollto" href="#faq"> <span>Информация</span> <i class="bi bi-chevron-down"></i> </a> 
          <ul>
          </li> 
          <li><a class="nav-link  scrollto" href="#footer">Използвани материали</a></li>
          </ul>
          <li><a class="nav-link   scrollto" target="_blank" href="https://blog-ivan.weebly.com/">Блог</a></li>
        
         
            
          </li>
          <li><a class="nav-link scrollto" href="#team">За мен</a></li>
          <li><a class="nav-link scrollto" href="#contact">Контакти</a></li>
          <li><a class="getstarted scrollto" href="#about">Същност</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Стремеж да бъдем първия неутрален по отношение на климата континент</h1>
          <h2>Това ще стане като превърнем климатичните и екологичните предизвикателства във възможности във всички области на политиката и направим така, че преходът да е справедлив и приобщаващ за всички.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Същност</a>
            <a href="https://www.youtube.com/watch?v=zf74KGVOhm4" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Гледай видео</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" title="Планета" class="img-fluid animated" alt="Планета">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Европейски зелен пакт?</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Изменението на климата и влошаването на състоянието на околната среда са заплаха за самото съществуване на Европа и света. За да преодолее тези предизвикателства, Европа се нуждае от нова стратегия за растеж, насочена към превръщането на Съюза в модерна, ефективно използваща ресурсите и конкурентоспособна икономика, в която:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> до 2050 г. няма нетни емисии на парникови газове;</li>
              <li><i class="ri-check-double-line"></i> икономическият растеж не зависи от използването на ресурси;</li>
              <li><i class="ri-check-double-line"></i> никое лице или регион не са пренебрегнати.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Европейският зелен пакт е нашата пътна карта за постигане на устойчивост на икономиката на ЕС. Това ще стане като превърнем климатичните и екологичните предизвикателства във възможности във всички области на политиката и направим така, че преходът да е справедлив и приобщаващ за всички.
            </p>
            <a href="https://ec.europa.eu/info/strategy/priorities-2019-2024/european-green-deal_bg"  target="_blank" class="btn-learn-more">Допълнителна информация</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Цел</h2>
      <p>Европейският зелен пакт има за цел да подобри благосъстоянието на хората.
        Превръщането на Европа в неутрална по отношение на климата зона и опазването
        на естественото ни местообитание ще е от полза за хората, планетата и икономиката.
        Никой няма да бъде забравен.</p>
    </div>

    <div class="row">
      <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bxs-landmark
            "></i></div>
          <h4><a href="">Икономика</a></h4>
          <p>Ще подпомогне
            предприятията да станат
            световни лидери в областта
            на чистите продукти
            и технологии</p>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-book-add"></i></div>
          <h4><a href="">Живот</a></h4>
          <p>Ще защитава човешкия
            живот, животните
            и растенията, като
            намали замърсяването</p>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bx bxs-thermometer"></i></div>
         
          <h4><a href="">Климат</a></h4>
          <p>Ще стане неутрална
            по отношение на
            климата зона до
            2050 г.</p>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-body"></i></div>
          <h4><a href="">Трансформация</a></h4>
          <p>Ще спомогне за
            осигуряването
            на справедлив
            и приобщаващ преход.</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->
 
    <!-- ======= Skills Section ======= -->
    <section id="why-us" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/skills.png" class="img-fluid" alt="Банк">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>„Европейският зелен пакт е новата ни стратегия за растеж.
              Той ще ни помогне да намалим емисиите, като
              същевременно създадем работни места.“
              </h3>
            <p class="font-italic">
              Урсула фон дер Лайен, председател на Европейската комисия
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">Европейците
                  са предприели поне едно
                  действие, за да се борят
                  с изменението на климата <i class="val">93%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">79 % са съгласни, че
                  предприемането на действия
                  във връзка с изменението
                  на климата ще доведе до
                  иновации <i class="val">79%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">За 93 %
                  от европейците
                  изменението на
                  климата е сериозен
                  проблем <i class="val">93%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="deistviq" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>„Предлагаме приобщаващ преход към зелена икономика, който
                да спомогне за подобряване на благосъстоянието на хората
                и осигуряване на здрава планета за <strong>идните поколения</strong>.“ </h3>
              <p>
                
                Франс Тимерманс, изпълнителен заместник-председател на Европейската комисия
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>1)</span>Климат <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      ЕС ще бъде неутрален по отношение на климата през 2050 г.
Комисията ще предложи европейски законодателен акт в областта на климата,
чрез който ще превърне този политически ангажимент в правно задължение
и генератор на инвестиции.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>2)</span> Енергетика<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Производството и потреблението
                      на енергия генерира над
                      75 % от емисиите на
                      парникови газове в ЕС. Чрез декарбонизация
                      на енергийния
                      сектор този процент ще се намали.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>3)</span> Сгради <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      40 % от
                      потреблението на
                      енергия се дължи на
                      сградите. Чрез саниране на сградите,
                      ще се помогне на
                      хората да намалят
                      сметките си за енергия
                      и потреблението си на
                      енергия.
                    </p>
                  </div>
                </li>
                <li> 
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>4)</span> Мобилност<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Транспортът
                      представлява
                      25 % от
                      емисиите ни. С въвеждане на по-чисти, по-евтини и по-здравословни форми
                      на частен и обществен
                      транспорт емисиите ще намалеят.
                    </p>
                  </div>
                </li>
              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

   
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start ">
            <h3>Действия</h3>
            <p class="exampl">
              ЕС ще предостави финансова подкрепа и техническа помощ, за да помогне на най-силно засегнатите от прехода към екологосъобразна икономика. Това ще стане чрез механизма за справедлив преход. Той ще помогне за мобилизирането на най-малко 100 млрд. евро за периода 2021—2027 г. в най-засегнатите региони.
              За постигането на целта ще са необходими действия във всички сектори на нашата икономика, като например:
              <li class="exampl"><i class="ri-check-double-line"></i>инвестиране в екологосъобразни технологии</li>
              <li class="exampl"><i class="ri-check-double-line"></i>подкрепа на иновациите в промишлеността</li>
              <li class="exampl"><i class="ri-check-double-line"></i>въвеждане на по-чисти, по-евтини и по-здравословни форми на частен и обществен транспорт</li>
              <li class="exampl"><i class="ri-check-double-line"></i>декарбонизация на енергийния сектор</li>
              <li class="exampl"><i class="ri-check-double-line"></i>подобряване на енергийната ефективност на сградите</li>
              <li class="exampl"><i class="ri-check-double-line" ></i>работа с международни партньори за подобряване на екологичните стандарти в световен мащаб.</li>







            </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://ec.europa.eu/info/strategy/priorities-2019-2024/european-green-deal/actions-being-taken-eu_bg" target="_blank">Цифри и факти</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Информация</h2>
          <p>В настоящото съобщение се представя Европейски зелен пакт, предназначен за Европейския съюз (ЕС) и неговите граждани. В него се подновява ангажиментът на Комисията за справяне с предизвикателствата, свързани с климата и околната среда — определящата задача на настоящото поколение. Атмосферата се затопля и климатът се изменя с всяка изминала година. От осемте милиона вида на планетата един милион са застрашени от изчезване. Горите и океаните се замърсяват и унищожават. </p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Увод—превръщане на неотложното предизвикателство в уникална възможност <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Европейският зелен пакт представлява отговор на тези предизвикателства. Това е нова стратегия за растеж, която има за цел превръщането на ЕС в справедливо и благоденстващо общество с модерна, ресурсно ефективна и конкурентоспособна икономика, в която през 2050 г. няма да има нетни емисии на парникови газове и икономическият растеж не зависи от използването на ресурси. 

                  Пактът също така има за цел опазването, съхранението и увеличаването на природния капитал на ЕС, както и защитата на здравето и благосъстоянието на гражданите от свързани с околната среда рискове и въздействия. Същевременно този преход трябва да бъде справедлив и приобщаващ. Той трябва да поставя хората на първо място и да обръща внимание на регионите, предприятията и работниците, които ще се изправят пред най-големите предизвикателства. Тъй като преходът ще доведе до съществена промяна, активното участие и доверието на обществеността в него са от първостепенно значение, за да бъдат политиките работещи и приети. Необходим е нов пакт за обединяването на гражданите в цялото им многообразие, като националните, регионалните, местните органи, гражданското общество и промишлеността работят в тясно сътрудничество с институциите и консултативните органи на ЕС.
                  
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Трансформация на икономиката на ЕС с цел устойчиво бъдеще<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  За да се реализира Европейският зелен пакт, е необходимо да се преосмислят политиките за снабдяване с чиста енергия в сферите на икономиката, промишлеността, производството и потреблението, мащабната инфраструктура, транспорта, храните и селското стопанство, строителството, данъчното облагане и социалните придобивки. За постигането на тези цели е важно да се повиши значението, придавано на опазването и възстановяването на естествените екосистеми, устойчивото използване на ресурсите и подобряването на човешкото здраве. Точно тук е най-необходима преобразуваща промяна, която потенциално е и най-благотворна за икономиката, обществото и околната среда на ЕС. ЕС следва също така да насърчава и да инвестира в необходимите цифрова трансформация и инструменти, тъй като те са основен фактор за промените.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Снабдяване с чиста, достъпна и сигурна енергия  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  По-нататъшното намаляване на въглеродните емисии на енергийната система е от решаващо значение за постигане на целите в областта на климата през 2030 г. и 2050 г. При емисиите на парникови газове в ЕС делът на производството и използването на енергия в икономическите сектори надхвърля 75 %. Трябва да се даде приоритет на енергийната ефективност. Трябва да се развие енергиен сектор, който се гради основно на възобновяеми източници, допълнени от бързо извеждане от експлоатация на въглищата и декарбонизация на газа. В същото време енергийните доставки на ЕС трябва да бъдат сигурни и достъпни за потребителите и предприятията. За да се случи това, от съществено значение е да се гарантира, че европейският енергиен пазар е напълно интегриран, взаимосвързан и цифровизиран, като същевременно се зачита технологичната неутралност.

                  Държавите членки ще представят до края на 2019 г. своите преразгледани планове в областта на енергетиката и климата. В съответствие с Регламента относно управлението на Енергийния съюз и действията в областта на климата 11 тези планове следва да определят амбициозни национални приноси за постигане на целите на равнището на ЕС. Комисията ще оцени амбицията на плановете и нуждата от допълнителни мерки, ако тази амбиция не е на необходимото равнище. Това ще бъде включено в процеса на увеличаване на амбициите в областта на климата за 2030 г., за което Комисията ще направи преглед и ще предложи при необходимост изменение на съответното законодателство в областта на енергетиката до юни 2021 г. Когато държавите членки започнат да актуализират своите национални планове в областта на енергетиката и климата през 2023 г., тези планове следва да отразяват новите амбиции в областта на климата. Комисията ще продължи да гарантира стриктното прилагане на цялото законодателство в това отношение.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Мобилизиране на промишлеността за чиста и кръгова икономика <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Постигането на неутрална по отношение на климата и кръгова икономика изисква пълна мобилизация на промишлеността. Необходими са 25 години — едно поколение — за да се извърши трансформация на даден промишлен сектор и на всички вериги за създаване на стойност. За да бъдем готови през 2050 г., трябва да се вземат решения и да се предприемат действия през следващите пет години.

                  От 1970 г. до 2017 г. годишното глобално извличане на материали се е утроило, като то продължава да нараства 13 и поражда сериозни рискове в световен мащаб. Около половината от общите емисии на парникови газове и над 90 % от загубата на биологично разнообразие и недостига на вода се дължат на добива на ресурси и преработката на материали, горива и храни. Промишлеността на ЕС е започнала промяната, но на нея все още се падат 20 % от емисиите на парникови газове в ЕС. Тя остава твърде „линейна“ и зависима от количеството обработени нови материали, които се извличат, търгуват и преработват в стоки, а накрая се изхвърлят като отпадък или емисии. От материалите, които тя използва, едва 12 % са получени от рециклиране 14 .
                  
                  Преходът е възможност за разширяване на устойчивата и създаваща работни места икономическа дейност. На световните пазари съществува значителен потенциал за технологии, устойчиви продукти и услуги с ниски емисии. Също така кръговата икономика предлага голям потенциал за нови дейности и работни места. Въпреки това, трансформацията се извършва твърде бавно, като напредъкът не е нито широкообхватен, нито равномерен. Европейският зелен пакт ще подкрепи и ще ускори прехода на промишлеността на ЕС към устойчив модел на приобщаващ растеж.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Време е да действаме заедно: Европейски пакт за климата   <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Участието и ангажираността на обществеността и на всички заинтересовани страни е от решаващо значение за успеха на Европейския зелен пакт. Неотдавнашните политически събития показват, че политиките за радикална промяна са ефективни само ако гражданите участват пълноценно в тяхното разработване. Хората са загрижени за работните си места, за отоплението на своите домове и за покриването на ежедневните си разходи и институциите на ЕС следва да се ангажират с тези проблеми, за да може Зеленият пакт да постигне успех и да осигури трайна промяна. Гражданите са и трябва да останат движещата сила на прехода.
                  Комисия на ЕС ще постави началото на Европейски пакт за климата, който ще бъде съсредоточен върху три начина за ангажиране на обществеността с действия за справяне с изменението на климата. На първо място, с него ще се насърчават обменът на информация, вдъхновението и повишаването на общественото разбиране за заплахата и предизвикателствата, свързани с изменението на климата и влошаването на състоянието на околната среда, както и относно начините за борба с тях. Ще се използват множество канали и инструменти за това, включително събития в държавите членки, по модела на текущите граждански диалози, организирани от Комисията. Второ, хората следва да разполагат с реални и виртуални пространства, чрез които да изразяват идеите и творчеството си и да работят заедно за амбициозни действия както на индивидуално, така и на колективно равнище. Участниците ще бъдат насърчавани да се ангажират с конкретни цели за действия, свързани с климата. На трето място, Комисията ще работи за изграждане на капацитет за улесняване на инициативите на местно равнище във връзка с изменението на климата и опазването на околната среда. Информацията, насоките и образователните модули могат да спомогнат за обмена на добри практики. Комисията ще гарантира, че въпросът за екологичния преход заема важно място в дебата за бъдещето на Европа.
                </p>
              </div>
            </li>
            
          </ul>
        </div>
      
      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Галерия</h2>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Всички</li>
          <li data-filter=".filter-app">Планове</li>
          <li data-filter=".filter-card">Любопитни статистики</li>
          <li data-filter=".filter-web">Други</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Възобновяема енергия</h4>
              <p>ВЕЦ</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="ВЕЦ"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="Pic"></div>
            <div class="portfolio-info">
              <h4>Други</h4>
              <p></p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Picture"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="Pic"></div>
            <div class="portfolio-info">
              <h4>Планове 2</h4>
              <p></p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Picture"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="Picture"></div>
            <div class="portfolio-info">
              <h4>Статистика</h4>
              
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Статистика"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" title="Event" alt="Event"></div>
            <div class="portfolio-info">
              <h4>Дебатско събитие</h4>
              
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="Съвети"></div>
            <div class="portfolio-info">
              <h4>Съвети</h4>
             
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Tips"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="Статистика"></div>
            <div class="portfolio-info">
              <h4>Статистика</h4>
              
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Статистика"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="Статистика"></div>
            <div class="portfolio-info">
              <h4>Статистика</h4>
             
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="СТатистика"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="Дебат"></div>
            <div class="portfolio-info">
              <h4>Дебат</h4>
              
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Дебат"><i class="bx bx-plus"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>За мен</h2>
        </div>

        <div class="row">

          <!-- <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Иван Горанов</h4>
                <span>Създател на сайта</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
              <h4>Иван Горанов</h4>
                <span>Създател на сайта</span>
                <p>Аз съм Иван Горанов, ученик в 12 клас НПГ"Димитър Талев" гр. Гоце Делчев.

</p>
                <div class="social">
                  <a href="https://twitter.com/IvanGoranov3" target="_blank"><i class="ri-twitter-fill"></i></a>
                  <a href="https://www.facebook.com/IvanVGoranov" target="_blank" ><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.instagram.com/prostogoranov/" target="_blank" ><i class="ri-instagram-fill"></i></a>
               
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
           
             
             
               
              <div class="typeform-widget" data-url="https://form.typeform.com/to/Dp4P0I?typeform-medium=embed-snippet" style="width: 570px; height: 120%;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>          

         
          <br>
          <div id="fb-root"></div>

      </div>
      
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/bg_BG/sdk.js#xfbml=1&version=v10.0" nonce="Zt0Z51qd"></script>
<div class="fb-like" data-href="https://www.greendl.eu/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>

    </section><!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Контакти</h2>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Местоположение:</h4>
              <p>Гоце Делчев, Благоевград, България</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>ivangoranoff@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Телефон:</h4>
              <p>+359 8890 55798</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d11938.857317196067!2d23.733875372753886!3d41.57542692495529!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sbg!2sbg!4v1488024894144" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>
        
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              
          <form id="fcf-form-id" class="newform" method="post" action="index.php"  role="form" >
          <h4 class="text-center" style="color:#3d7e37;" > <b> Свържи се с мен чрез тази контактна форма!</b> </h4> <br> <br>
          <div class="row">
            <div  class="form-group col-md-6">
                <label for="Name" >Име:</label>
               <input type="text" id="Name" name="Name" class="form-control"required>
                
            </div>
            
            <div class="form-group col-md-6">
                <label for="Email">Email:</label>
                <div class="fcf-input-group">
                    <input type="email" id="Email" name="Email"  class="form-control"  required>
                </div>
            </div>
            </div>
            <div class="form-group">
                <label for="Message" >Съобщение:</label>
                <textarea id="Message" name="Message" class="form-control" rows="6" maxlength="3000" required></textarea>
                
            </div>
    
            <div  class="text-center"> <br>
                <button type="submit" id="fcf-button" >Изпрати</button>
            </div>
          </form>
         
        </div> 

      </div>

    </div>
  </section><!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">

          <h3 style="color:#3d7e37;">Използвани материали</h3><br>
              <p>Текст и снимки:
              <a href="ec.europa.eu" target="_blank">ec.europa.eu</a>
              </p> 
              <p>Темпейт:
                <a href="bootstrapmade.com" target="_blank">bootstrapmade.com</a>
              </p> <br> <hr><br> 
          <script src="//inc.freefind.com/inc/ffse-overlay.min.js" async></script>
          <h4 >Не намираш нещо в сайта?</h4>
            <p>Опитай с ключови думи в търсачката.</p>
            <td  style="font-family: Arial, Helvetica, sans-serif; font-size: 7.5pt;">
		<form style="margin:0px; margin-top:4px;" action="https://search.freefind.com/find.html" method="get" accept-charset="utf-8" target="_self">
		<input type="hidden" name="si" value="12725103">
		<input type="hidden" name="pid" value="r">
		<input type="hidden" name="n" value="0">
		<input type="hidden" name="_charset_" value="">
		<input type="hidden" name="bcd" value="&#247;" >
		<input type="text" name="query" size="15" class="none"> 
		<input type="submit" value="търси">
		</form> <br>
	</td>
  <hr> <br> <h4>Изпробвай знанията си!</h4>
  <iframe width="640px" height= "180px" src= "https://forms.office.com/Pages/ResponsePage.aspx?id=q4QFQuxOx0G7Q3Nk0Kb9_TTLflfEH8RLpDTn2HVY_bpURDFYMVpSNEFMQUszMzZXVk5PSFBZMVEyQy4u&embed=true" frameborder= "0" marginwidth= "0" marginheight= "0" style= "border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ЕВРОПЕЙСКИ ЗЕЛЕН ПАКТ</h3>
            <p>
              Гоце Делчев<br>
              Благоевград<br>
              България <br><br>
              <strong>Телефон:</strong> +359 889 055 798<br>
              <strong>Email:</strong> ivangoranoff@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Навигация</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Начало</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Цели</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#cta">Действия</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">Информация</a></li>             
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Контакти</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Брой посещения:</h4>
            <!-- hitwebcounter Code START -->
<a href="https://www.hitwebcounter.com" target="_blank">
<img src="https://hitwebcounter.com/counter/counter.php?page=7760154&style=0006&nbdigits=5&type=ip&initCount=100" title="Free Counter" Alt="web counter"   border="0" /></a>                  
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Моите социални профили</h4>
            <p>Свържи се с мен чрез:</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/IvanGoranov3" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a  href="https://www.facebook.com/IvanVGoranov" target="_blank"  class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" title="vancho.g" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.instagram.com/prostogoranov/" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
              
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a >BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>