<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo( 'name' ); wp_title( '-' ); ?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css1/bootstrap-rtl.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery.niftymodals.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
	?>
<?php wp_head(); ?>
</head>

<body>
    <div class="social">
        <a href="https://www.facebook.com/Tejarat.Mandegar" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/Facebook.png" alt="Facebook"></a>
        <a href="https://www.instagram.com/tejaratmandegar/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/Instagram.png" alt="Instagram"></a>
        <a href="https://www.linkedin.com/company/mandegar-group" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/LinkedIn.png" alt="LinkedIn"></a>
        <a href="https://plus.google.com/+TejaratMandegar" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/Google%20Plus.png" alt="Google Plus"></a>
    </div>
    <div class="row">
        <div class="header-logo">
            <div class="mandegar-logo" id="mandegar-logo"> <img src="<?php bloginfo('template_url'); ?>/images/Mandegar-logo.png" alt="Mandegar Logo"> </div>
            <div class="menu-grid"></div>
            <div class="email-link">
                <a href="http://10.10.10.123:3000/" target="_blank">
                    <p>Mandegar Mail</p>
                </a>
            </div>
        </div>
        
        <div class="modal fade bs-example-modal-lg" id="phonebook-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        
                    </div>
                </div>
            </div>
            
        <div class="icons-fade">
            <div class="container col-xs-12 icons-container-pop">
                <div class="arrow-bottom"></div>
                <div class="arrow-top"></div>
                <div class="icons1">
                    <a href="http://10.10.10.20:7080/LoginForms/Login.aspx" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/flight-attendant.png" alt="Attendance"></a>
                    <p>ورود و خروج</p>
                </div>
                <div class="icons1">
                    <a href="http://10.10.10.13/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/crm-ico11n.png" alt="Microsoft CRM"></a>
                    <p>مایکروسافت CRM</p>
                </div>
                <div class="icons1">
                    <a href="http://10.10.10.8/#/signin" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/BusinessIntelligenceandinformatics.png" alt="BI System"></a>
                    <p>BI</p>
                </div>
                <div class="icons1" id="phonebook"><img src="<?php bloginfo('template_url'); ?>/images/agenda.png" alt="PhoneBook" onclick="phonebook()">
					<p>دفتر تلفن</p>
				</div>
                <div class="icons1">
                    <a href="http://10.10.10.123:3000/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/letter.png" alt="Email icon"></a>
                    <p>ایمیل سازمانی</p>
                </div>
                <div class="icons1">
                    <a href="http://10.10.10.3:50700" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/bmps.png" alt="BPMS">  </a>                  <p>BPMS</p>
                </div>
            </div>
        </div>
        
        
<div class="md-container md-effect-7" id="modal-1">
	  <div class="md-content">
	    <div>
	      <div class="container search-container">
                            <div id="users">
                                <input class="search" placeholder="جستجوی نام، شماره یا واحد" />
                                <table>
                                    <!-- IMPORTANT, class="list" have to be at tbody -->
                                    <thead>
                                        <tr>
                                            <th>نام</th>
                                            <th>واحد</th>
                                            <th>داخلی</th>
                                            <th>موبایل</th>
                                            <th>ایمیل</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td class="name">سعید یاوری</td>
                                            <td class="unit">مدیریت</td>
                                            <td class="phone">801-802</td>
                                            <td class="mobile">09122006090</td>
                                            <td class="mail">saeid@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">مرجان نوروزی</td>
                                            <td class="unit">مدیریت</td>
                                            <td class="phone">122-123</td>
                                            <td class="mobile">09129479166</td>
                                            <td class="mail">M.Norouzi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">فرزانه علیان نژاد</td>
                                            <td class="unit">منابع انسانی</td>
                                            <td class="phone">124-125</td>
                                            <td class="mobile">09129590290</td>
                                            <td class="mail">HR@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">فاطمه نوری</td>
                                            <td class="unit">منابع انسانی</td>
                                            <td class="phone">111-112</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">f.noori@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">سارا محمدحسینی</td>
                                            <td class="unit">منابع انسانی</td>
                                            <td class="phone">116</td>
                                            <td class="mobile">09129590291</td>
                                            <td class="mail">s.mohamadhoseini@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">رضا حیدری</td>
                                            <td class="unit">منابع انسانی</td>
                                            <td class="phone">146-147-143</td>
                                            <td class="mobile">09129590300</td>
                                            <td class="mail">t.heydari@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">مسعود صادقی</td>
                                            <td class="unit">فناوری اطلاعات</td>
                                            <td class="phone">444-445</td>
                                            <td class="mobile">09129590344</td>
                                            <td class="mail">M.Sadeghi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">حامد ملکی </td>
                                            <td class="unit">فناوری اطلاعات</td>
                                            <td class="phone">446</td>
                                            <td class="mobile">09129590269</td>
                                            <td class="mail">h.maleki@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">سامان معصومی</td>
                                            <td class="unit">فناوری اطلاعات</td>
                                            <td class="phone">425</td>
                                            <td class="mobile">09129590284</td>
                                            <td class="mail">s.masoomi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">محسن طریقی</td>
                                            <td class="unit">فناوری اطلاعات</td>
                                            <td class="phone">440</td>
                                            <td class="mobile">09129590255</td>
                                            <td class="mail">m.tarighi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">رضا سویزی</td>
                                            <td class="unit">فناوری اطلاعات</td>
                                            <td class="phone">421-422</td>
                                            <td class="mobile">09129590285</td>
                                            <td class="mail">r.soueizi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">علی امیریان</td>
                                            <td class="unit">انبار</td>
                                            <td class="phone">321-325</td>
                                            <td class="mobile">09129590312</td>
                                            <td class="mail">a.amirian@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">فرامرز عبدی</td>
                                            <td class="unit">انبار</td>
                                            <td class="phone">324</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">الهه حاجی زاده</td>
                                            <td class="unit">منابع انسانی</td>
                                            <td class="phone">111</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">احمد جوان جعفری</td>
                                            <td class="unit">منابع انسانی</td>
                                            <td class="phone">108</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">حامد شرطی</td>
                                            <td class="unit">فناوری اطلاعات</td>
                                            <td class="phone">446</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">h.sharti@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">حامد ملک محمودی</td>
                                            <td class="unit">فناوری اطلاعات</td>
                                            <td class="phone">429</td>
                                            <td class="mobile">09129590275</td>
                                            <td class="mail">h.mahmoodi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">پوریا ابوطالبی</td>
                                            <td class="unit">فناوری اطلاعات</td>
                                            <td class="phone">191</td>
                                            <td class="mobile">09129590320</td>
                                            <td class="mail">abootalebi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">مریم گودرزی</td>
                                            <td class="unit">فناوری اطلاعات</td>
                                            <td class="phone">430</td>
                                            <td class="mobile">09129590236</td>
                                            <td class="mail">m.goudarzi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">علیرضا باقری فرد</td>
                                            <td class="unit">فناوری اطلاعات</td>
                                            <td class="phone">428</td>
                                            <td class="mobile">09129590311</td>
                                            <td class="mail">a.bagherifard@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">زهرا حقگو</td>
                                            <td class="unit">فناوری اطلاعات</td>
                                            <td class="phone">426</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">z.haghgoo@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">طاهره نوروزی</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">561-562</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">t.noroozi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">ساناز رحیمی نژاد</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">572-573</td>
                                            <td class="mobile">09129590271</td>
                                            <td class="mail">s.rahiminezhad@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">مهدی ناصحی</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">597-598</td>
                                            <td class="mobile">09129590278</td>
                                            <td class="mail">m.nasehi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">محمدرضا غفوریان</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">577-578</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">m.ghafourian@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">محمد محمدی</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">580-581</td>
                                            <td class="mobile">09129590279</td>
                                            <td class="mail">m.mohammadi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">حسین جمشیدیان</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">595-596</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">h.jamshidian@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">صادق امینی</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">590</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">s.amini@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">هیمن نیک پی</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">557</td>
                                            <td class="mobile">09129590256</td>
                                            <td class="mail">h.nikpay@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">سمانه بالش آبادی</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">594</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">s.baleshabadi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">سولماز صراف زاده</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">575-576</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">s.sarafzade@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">حامد سرائی</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">567</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">h.saraie@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">نسرین نجفی </td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">549</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">n.najafi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">فرزانه آذرهوا</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">548</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">f.azarhava@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">الهه فتاحی</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">569</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">حمید باقری</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">551</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">h.bagheri@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">متین بهره ور</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">559</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">m.bahrevar@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">معزالدین مسعود صفانور</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">545</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">مهران رحمانی</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">552</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">m.rahmani@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">مینا دخانی</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">584</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">علی رئوف کیش</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">167</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">علیرضا امیر احمدی</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">178</td>
                                            <td class="mobile">09129590268</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">کیومرث لیوارجانی</td>
                                            <td class="unit">حسابداری</td>
                                            <td class="phone">606</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">09129590274</td>
                                        </tr>
                                        <tr>
                                            <td class="name">حمید کمال زاده</td>
                                            <td class="unit">مالیاتی</td>
                                            <td class="phone">630-631</td>
                                            <td class="mobile">09129590277</td>
                                            <td class="mail">kamalzade@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">پروانه میقانی</td>
                                            <td class="unit">مالیاتی</td>
                                            <td class="phone">634</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">نازنین رسولی</td>
                                            <td class="unit">مالیاتی</td>
                                            <td class="phone">636</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">مهسا سهندی</td>
                                            <td class="unit">مالیاتی</td>
                                            <td class="phone">648</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">m.sahandi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">آتنا غلامی فارسی</td>
                                            <td class="unit">مالیاتی</td>
                                            <td class="phone">646</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">a.gholami@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">سپیده اسلامی میلانی</td>
                                            <td class="unit">مالیاتی</td>
                                            <td class="phone">641</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">s.milani@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">علیرضا نوروزی</td>
                                            <td class="unit">مالیاتی</td>
                                            <td class="phone">639-640</td>
                                            <td class="mobile">09129479166</td>
                                            <td class="mail">a.noroozi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">شاروین کشاورزی</td>
                                            <td class="unit">مالیاتی</td>
                                            <td class="phone">645</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">sh.keshavarzi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">سید مهدی حسینی جدیدی</td>
                                            <td class="unit">مالیاتی</td>
                                            <td class="phone">632</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">m.hoseini@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">زهرا فنی پور</td>
                                            <td class="unit">مالیاتی</td>
                                            <td class="phone">642</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">سحر ایمانی</td>
                                            <td class="unit">مالیاتی</td>
                                            <td class="phone">643</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">s.imani@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">رقیه دامادی</td>
                                            <td class="unit">مالیاتی</td>
                                            <td class="phone">647</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">r.mirdamadi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">فاطمه ایوبی</td>
                                            <td class="unit">مالیاتی</td>
                                            <td class="phone">644</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">وحید نجفی</td>
                                            <td class="unit">طرح ماندگار</td>
                                            <td class="phone">501-502</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">حامد نجفی</td>
                                            <td class="unit">طرح ماندگار</td>
                                            <td class="phone">543</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">امید چنگیزی</td>
                                            <td class="unit">طرح ماندگار</td>
                                            <td class="phone">506</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">هیوا خاکی</td>
                                            <td class="unit">انبار</td>
                                            <td class="phone">323</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">کاظم ترکه دهی</td>
                                            <td class="unit">انبار</td>
                                            <td class="phone">315-320</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">عباس ابراهیمی</td>
                                            <td class="unit">گارانتی</td>
                                            <td class="phone">301-302</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">نرگس یحیایی</td>
                                            <td class="unit">گارانتی</td>
                                            <td class="phone">311-312</td>
                                            <td class="mobile">09129590301</td>
                                            <td class="mail">guaranty@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">علی کفاش</td>
                                            <td class="unit">گارانتی</td>
                                            <td class="phone">305-760</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">a.kafash@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">حسن دامغانیان</td>
                                            <td class="unit">گارانتی</td>
                                            <td class="phone">305-760</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">h.damghanian@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">طاهره حیدری</td>
                                            <td class="unit">گارانتی</td>
                                            <td class="phone">303-304</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">t.heydari@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">هانیه میزانیان</td>
                                            <td class="unit">تامین</td>
                                            <td class="phone">782-783</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">h.mizanian@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">آزاده عابدینی</td>
                                            <td class="unit">تامین</td>
                                            <td class="phone">780</td>
                                            <td class="mobile">09129590258</td>
                                            <td class="mail">a.abedini@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">سیمین دخت اسحاقی</td>
                                            <td class="unit">برنامه ریزی</td>
                                            <td class="phone">148</td>
                                            <td class="mobile">09129590286</td>
                                            <td class="mail">s.eshaghi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">مرجان نسل سراجی</td>
                                            <td class="unit">برنامه ریزی</td>
                                            <td class="phone">142</td>
                                            <td class="mobile">09129590283</td>
                                            <td class="mail">m.seraji@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">پرستو قائدی</td>
                                            <td class="unit">برنامه ریزی</td>
                                            <td class="phone">141</td>
                                            <td class="mobile">09129590272</td>
                                            <td class="mail">p.ghaedi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">نسرین شکوهی</td>
                                            <td class="unit">استراتژی</td>
                                            <td class="phone">424</td>
                                            <td class="mobile">09129590289</td>
                                            <td class="mail">n.nazarpoor@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">سپیده داودی</td>
                                            <td class="unit">استراتژی</td>
                                            <td class="phone">176</td>
                                            <td class="mobile">09129590326</td>
                                            <td class="mail">s.davoudi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">سپیده سادات موسوی</td>
                                            <td class="unit">روابط عمومی</td>
                                            <td class="phone">170-171</td>
                                            <td class="mobile">09129590259</td>
                                            <td class="mail">pr@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">هومن آذرنگ</td>
                                            <td class="unit">کسب و کار</td>
                                            <td class="phone">203</td>
                                            <td class="mobile">09129590280</td>
                                            <td class="mail">h.azarang@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">رضا یاوری</td>
                                            <td class="unit">سرمایه گذاری</td>
                                            <td class="phone">582-583</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">Reza@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">پریسا علیدادی</td>
                                            <td class="unit">سرمایه گذاری</td>
                                            <td class="phone">165-166</td>
                                            <td class="mobile">09129590253</td>
                                            <td class="mail">p.alidadi@mandegar.com </td>
                                        </tr>
                                        <tr>
                                            <td class="name">رضا فضلی</td>
                                            <td class="unit">سرمایه گذاری</td>
                                            <td class="phone">103</td>
                                            <td class="mobile">09129590298</td>
                                            <td class="mail">r.fazli@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">حمید رضا رضایی</td>
                                            <td class="unit">سرمایه گذاری</td>
                                            <td class="phone">155-156</td>
                                            <td class="mobile">09129590292</td>
                                            <td class="mail">h.rezaei@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">هامون امانی</td>
                                            <td class="unit">سرمایه گذاری</td>
                                            <td class="phone">793-794</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">h.amani@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">علیرضا میری</td>
                                            <td class="unit">سرمایه گذاری</td>
                                            <td class="phone">797</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">a.miri@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">حمیدرضا مرادی</td>
                                            <td class="unit">سرمایه گذاری</td>
                                            <td class="phone">788-789</td>
                                            <td class="mobile">09129590287</td>
                                            <td class="mail">h.moradi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">امیر مرادی</td>
                                            <td class="unit">سرمایه گذاری</td>
                                            <td class="phone">150-151</td>
                                            <td class="mobile">09129590313</td>
                                            <td class="mail">a.moradi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">یزدان مرادی ترکاشوندی</td>
                                            <td class="unit">سرمایه گذاری</td>
                                            <td class="phone">795-796</td>
                                            <td class="mobile">09129590295</td>
                                            <td class="mail">y.torkashvand@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">مجید یاوری</td>
                                            <td class="unit">واحد 17</td>
                                            <td class="phone">601</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">majid@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">امیر روشنگه</td>
                                            <td class="unit">واحد 17</td>
                                            <td class="phone">630-631</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">فرید صفری</td>
                                            <td class="unit">واحد 17</td>
                                            <td class="phone">602</td>
                                            <td class="mobile">09129590294</td>
                                            <td class="mail">f.safari@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">دیکاو</td>
                                            <td class="unit">سالن کنفرانس</td>
                                            <td class="phone">605</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">-</td>
                                        </tr>
                                        <tr>
                                            <td class="name">معصومه حزینی</td>
                                            <td class="unit">فروش</td>
                                            <td class="phone">298-299</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">m.hazini@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">عباسعلی راعی</td>
                                            <td class="unit">فروش</td>
                                            <td class="phone">770-771</td>
                                            <td class="mobile">09129590314</td>
                                            <td class="mail">a.raee@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">سید امین امینی</td>
                                            <td class="unit">فروش</td>
                                            <td class="phone">223-224</td>
                                            <td class="mobile">09129590265</td>
                                            <td class="mail">a.amini@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">حمید منزوی</td>
                                            <td class="unit">فروش</td>
                                            <td class="phone">271-272</td>
                                            <td class="mobile">09129590264</td>
                                            <td class="mail">h.monzavi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">نیما ترابی</td>
                                            <td class="unit">فروش</td>
                                            <td class="phone">215-216</td>
                                            <td class="mobile">09129590282</td>
                                            <td class="mail">n.torabi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">ابراهیم کاکی پور</td>
                                            <td class="unit">فروش</td>
                                            <td class="phone">211-212</td>
                                            <td class="mobile">09129590252</td>
                                            <td class="mail">e.kaki@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">آرام محمدی</td>
                                            <td class="unit">فروش</td>
                                            <td class="phone">248-249</td>
                                            <td class="mobile">09129590257</td>
                                            <td class="mail">a.mohammadi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">مسعود درفش دوز</td>
                                            <td class="unit">فروش</td>
                                            <td class="phone">251-252</td>
                                            <td class="mobile">09129590251</td>
                                            <td class="mail">m.derafshdooz@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">محمد امین مساح</td>
                                            <td class="unit">فروش</td>
                                            <td class="phone">236-237</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">m.massah@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">مرتضی ابراهیمی</td>
                                            <td class="unit">فروش</td>
                                            <td class="phone">217-218</td>
                                            <td class="mobile">09129590254</td>
                                            <td class="mail">m.ebrahimi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">مرتضی شاهرخی نسب</td>
                                            <td class="unit">فروش</td>
                                            <td class="phone">243-244</td>
                                            <td class="mobile">09129590296</td>
                                            <td class="mail">m.shahrokhi@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">زهرا تیز قلم</td>
                                            <td class="unit">فروش</td>
                                            <td class="phone">229-230</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">z.tizghalam@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">نیما ناصری</td>
                                            <td class="unit">گارانتی</td>
                                            <td class="phone">207-208</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">n.naseri@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">کورش ایرج پور</td>
                                            <td class="unit">وکیل</td>
                                            <td class="phone">193</td>
                                            <td class="mobile">-</td>
                                            <td class="mail">k.irajpour@mandegar.com</td>
                                        </tr>
                                        <tr>
                                            <td class="name">امین ویسی پور</td>
                                            <td class="unit">صنایع غذایی</td>
                                            <td class="phone">163</td>
                                            <td class="mobile">09129590324</td>
                                            <td class="mail">a.veisipoor@mandegar.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
	      <button class="md-close">Close</button>
	    </div>
	  </div>
	</div>
    </div>