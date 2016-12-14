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
   <div class="container-blur">
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
    
            <span class="tcon-indicator" aria-label="scroll" aria-hidden="true">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="tcon-svgchevron" viewBox="0 0 30 36">
                <path class="a3" d="M0,0l15,16L30,0"></path>
                <path class="a2" d="M0,10l15,16l15-16"></path>
                <path class="a1" d="M0,20l15,16l15-16"></path>
              </svg>
            </span>
                       
            <div class="email-link">
                <a href="http://10.10.10.123:3000/" target="_blank">
                    <p>Mandegar Mail</p>
                </a>
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
    </div>