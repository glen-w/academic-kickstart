<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> <html lang="en"> <head> <meta http-equiv="content-type" content="text/html; charset=utf-8"> <title>Little Blue Letter</title> 

<?

$lbl = $_GET[lbl];
		
 ?>


<style type="text/css">
            @font-face {
                font-family: 'Open Sans Regular';
                src: url('//tinyletter.com/site/assets/fonts/opensans-regular-webfont.eot');
                src: url('//tinyletter.com/site/assets/fonts/opensans-regular-webfont.eot?#iefix') format('embedded-opentype'), url('//tinyletter.com/site/assets/fonts/opensans-regular-webfont.woff') format('woff'), url('//tinyletter.com/site/assets/fonts/opensans-regular-webfont.ttf') format('truetype'), url('//tinyletter.com/site/assets/fonts/opensans-regular-webfont.svg#opensans-regular') format('svg');
                font-weight: normal;
                font-style: normal;
            }
            body {
                font: 15px/24px 'Helvetica Neue', Helvetica, Arial, Sans-serif;
                min-width: 400px;
                margin: 0;
                padding: 30px 0 0 0;
                text-align: center;
                -webkit-font-smoothing: antialiased;
            }
            h1 {
                font-weight: normal;
                font-size: 45px;
                line-height: 60px;
                margin-bottom: 5px;
                padding: 0;
                margin-top: 0;
            }
            p {
                padding: 0 0 10px 0;
            }
            a {
                color: #336699;
            }
            textarea {
                font: 12px/18px'Helvetica Neue', Helvetica, Arial, Sans-serif;
            }
            .header {
                padding-bottom: 15px;
                text-align: center;
            }
            .header span {
                /*font-size: 22px;*/
            }
            .wrapper {
                width: 540px;
                margin: 0 auto 80px auto;
                text-align: left;
            }
            .container {
                position: relative;
                border-width: 0 !important;
                border-color: transparent !important;
                margin: 0;
                text-align: left;
                background-color: #ffffff;
                border-radius: 3px;
                padding: 60px;
                line-height: 150%;
                -moz-box-shadow: 0 1px 6px rgba(0, 0, 0, .12);
                -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, .12);
                box-shadow: 0 1px 6px rgba(0, 0, 0, .12);
            }
            .clear {
                clear: both;
            }
            /* Form */

            form {
                font: 16px/20px'Helvetica', Arial, sans-serif;
                display: block;
                padding: 6px 0 10px 0;
            }
            label {
                clear: both;
                display: block;
                margin: 8px 0;
                font-weight: bold;
                position: relative;
                line-height: 150%;
                font-family: Helvetica;
                font-size: 14px;
                color: #333333;
            }
            .email-group input {
                display: block;
                float: left;
                width: 60%;
                margin: 0 10px 0 0;
                min-width: 200px;
                padding: 12px 10px 11px 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 14px;
                box-shadow: none;
            }
            .email-group .button {
                width: 30%;
                margin: 0;
                min-width: 75px;
            }
            .error,
            .errorText {
                margin: 5px 0 0 0;
                padding: 10px;
                font-size: 14px;
                color: #6b0505;
                background-color: #f4bfbf;
            }
            .formstatus {
                margin-bottom: 10px;
            }
            .success {
                background: #e4f3d4;
                font-size: 14px;
                color: #5ca000;
                margin: 10px 0;
                padding: 10px;
                font-family: 'Helvetica Neue', Helvetica, Arial, Sans-serif;
            }
            .success a {
                color: #5ca000;
                text-decoration: underline;
            }
            .rounded {
                border-radius: 4px;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
            }
            .button,
            .button-small {
                display: inline-block;
                white-space: nowrap;
                height: 40px;
                line-height: 42px;
                margin: 0 5px 0 0;
                padding: 0 22px;
                text-decoration: none;
                text-transform: uppercase;
                text-align: center;
                font-weight: bold;
                font-style: normal;
                font-size: 14px;
                cursor: pointer;
                border: 0;
                -moz-border-radius: 4px;
                border-radius: 4px;
                -webkit-border-radius: 4px;
                vertical-align: top;
                -webkit-font-smoothing: antialiased;
                font-smoothing: antialiased;
            }
            .button-small {
                float: none;
                display: inline-block;
                height: auto;
                line-height: 18px !important;
                padding: 2px 15px !important;
                font-size: 11px !important;
            }
            .button:hover,
            .button-small:hover {
                opacity: .8;
            }
            /* Mobile Tweaks */

            body {
                -webkit-text-size-adjust: none;
            }
            input {
                -webkit-appearance: none;
            }
            input[type=checkbox] {
                -webkit-appearance: checkbox;
            }
            input[type=radio] {
                -webkit-appearance: radio;
            }
            /* Customizable Theme Bits */

            body {
                background-color: #DDDDDD;
            }

            
                body {
                    background-image: url("https://static.tinyletter.com/LittleBlueLetter/9b28d71e-d857-4602-8af2-f3d6d39eff0b.png");
background-attachment:fixed;
                }
            

            h1.title {
                font-size: 36px;
                line-height: 36px;
                margin: 20px 0;
                font-family: Monaco, 'Bitstream Vera Sans Mono', 'Lucida Console', Terminal, monospace;
                color: #81B3CD;
            }
            .byline {
                font-size: 18px;
                font-family: Georgia, Times New Roman, Times, serif;
                color: #111111;
            }
            .description,
            label,
            .fake-label {
                font-family: Georgia, Times New Roman, Times, serif;
                color: #111111;
            }
            .button {
                font-family: Helvetica, Arial, sans-serif;
                color: #FFFFFF;
                background-color: #333333;
            }
            /* Fly-out tinyletter Panel */

            .tl-tab {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                text-align: center;
                font-family: 'Helvetica Neue', Helvetica, Arial, Sans-serif;
                color: #111;
            }
            .tl-tab-content {
                background: #fff;
                margin-bottom: -204px;
                height: 240px;
                position: relative;
                background: rgba(255, 255, 255, .8);
                -webkit-transition: margin-bottom 0.2s ease-out;
                -moz-transition: margin-bottom 0.2s ease-out;
                -o-transition: margin-bottom 0.2s ease-out;
                transition: margin-bottom 0.2s ease-out;
            }
            .tl-tab:hover .tl-tab-content {
                margin-bottom: 0;
            }
            .tl-tab-content:before {
                position: absolute;
                top: -24px;
                left: 0;
                right: 0;
                height: 50px;
                background:url(https://app.tinyletter.com/img/tinyletter-icon.svg) center center no-repeat;
                background-size: contain;
                content: '';
            }
            .tl-tab-content h1 {
                text-align: center;
                padding-top: 42px;
            }
            .tl-tab-content h1 a {
                display: block;
                width: 190px;
                height: 36px;
                height: 50px;
                margin: 0 auto;
                background: transparent url(https://app.tinyletter.com/img/tinyletter-logo.svg) no-repeat center center;
                text-indent: -9999px;
                outline: none;
                background-size: contain;
            }
            .tl-tab-content p {
                width: 100%;
                max-width: 90%;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                font-size: 16px;
                line-height: 1.2em;
                font-family: 'Open Sans Regular';
            }
            .tl-button {
                padding: 0 18px;
                cursor: pointer;
                overflow: hidden;
                font-weight: 400;
                font-family: 'Open Sans Regular';
                text-align: center;
                vertical-align: middle;
                text-decoration: none !important;
                text-transform: capitalize;
                letter-spacing: .01em;
                border: 2px solid #ec2126;
                color: #ec2126 ;
                background-color: transparent;
                border-radius: 3px;
                display: inline-block;
                white-space: nowrap;
                font-size: 16px;
                height: 36px;
                line-height: 32px;
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
                -webkit-transition: all 0.1s linear 0.0001s;
                -ms-transition: all 0.1s linear 0.0001s;
                transition: all 0.1s linear 0.0001s;
            }
            .tl-button:hover {
                background: #ec2126;
                text-decoration: none !important;
                color: #fff;
            }
            .view-messages {
                margin-top: 30px;
            }
            #view-messages-link {
                font-size: 16px;
                text-decoration: none;
                color: #ED1F24;
            }
            #view-messages-link:hover,
            #view-messages-link:focus {
                color: #000;
                text-decoration: none;
            }

            .privacy-policy p{
                font-size: 14px;
                margin-top:30px;
                text-align: center;
            }
            /* apply a natural box layout model to all elements */
            *,
            *:before,
            *:after {
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            /* Hide for all but screen readers */
            .sr-only {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0,0,0,0);
                border: 0;
            }
            @media only screen and (max-width: 50em) {
                body {
                    padding-top: 30px;
                    min-width: 100%;
                }
                .wrapper {
                    width: 96%
                }
                .container {
                    padding: 30px 15px
                }
            }
            @media only screen and (max-width: 40em) {
                body {
                    background-image: none!important;
                }
                .email-group input {
                    float: none;
                    width: 100%;
                    margin: 0 0 12px 0;
                    min-width: inherit;
                }
                .email-group .button {
                    width: 100%;
                }
            }
            </style>

        <!--[if IE]>
        <style type="text/css">
            .tl-tab-content h1 { background:url(http://gallery.mailchimp.com/7f1f3a0cca670414e2146e475/images/tinyletter_sprite.png) 0 15px no-repeat; }
            .tl-tab-content h1 a { background:url(http://gallery.mailchimp.com/7f1f3a0cca670414e2146e475/images/tinyletter_sprite.png) no-repeat -148px 0 transparent; }
        </style>
        <![endif]-->

</head> 

<body> 

  <div class="wrapper">
            <div class="container">
                <div class="header">
                    <img src="images/Little Blue Letter logo small.png">
                </div>

<? if(empty($lbl)){ ?>

                <div class="description"> A splash of uplifting ocean stuff, lovingly curated by young ocean leaders & shipped straight to your inbox every Friday. </div>
                <div class="view-messages"> 
                    
                 </div> 
                
                

                 <form id="subscribe-form" method="post" action="https://tinyletter.com/LittleBlueLetter"> 
	                

	                
	                    
	                     <div class="email-group">
                            <label for="email" class="sr-only"> Email </label>
	                        <input type="email" id="email" name="email" value="" placeholder=" email@example.com ">
	                        <button class="button" type="submit"> Subscribe </button>
	                    </div> 
	                    
	                    
	                
	                 <div class="privacy-policy">
	                    <p><a target="_blank" href="http://twitter.com/littlebluelette/">Twitter</a>  |  <a target="_blank" href="https://docs.google.com/spreadsheets/d/1sMP_UmzB7Fb_SaUf3JWwVCtHyxsMyBOVJUVzAclZ2WM/edit?usp=sharing">Curation Signup</a>  |  <a href="http://tinyletter.com/LittleBlueLetter/archive">Archive</a>  |  <a href="mailto:glen.w.wright@gmail.com">Contact</a>  |  <a href="http://tinyletter.com/site/legal/privacy/">Privacy Policy</a> </p>

	                </div>
                </form>
            <?
}else{ 

 include('includes/' . $lbl . '.php');  } ?>  

 </div>
        </div>
     

</body> 

</html>