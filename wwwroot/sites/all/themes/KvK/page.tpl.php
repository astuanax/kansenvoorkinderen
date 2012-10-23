<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <title>
      <?php print $head_title ?>
    </title><?php print $head ?>
    <link rel="stylesheet" href="/sites/all/themes/KvK/reset-fonts-grids.css" type="text/css">
    <link rel="stylesheet" href="/sites/all/themes/KvK/style.css" type="text/css">
		<!--[if gte IE 7]><style>.first{width:200px ! important;}</style><![endif]-->
    <style type="text/css">img{border:0;}</style>
  </head>
  <body>
    <div id="custom-doc" class="yui-t7">
      <div id="bd" role="main">
        <div class="yui-gb" style="background:#11A0C8;">
          <div class="yui-u first" style="background:#fff">
            <a href="/"><?php
             if ($logo) {
                print '<img src="'. check_url($logo) .'" alt="'. $site_title .'" id="logo" />';
              }
            ?></a>
          </div>
          <div class="yui-u" style="background:#11A0C8;">
              <img src="/sites/all/themes/KvK/images/nameKvK.png">
          </div>     
          <div class="yui-u" style="background:#11A0C8;">
             		<!--[if gte IE 7]> <ul class="basicUL">
                <li><a href="http://educationfordevelopment.org/website/pages/index.php">Education&nbsp;for&nbsp;development</a></li>
                <li><a href="http://kansenvoorkinderen.nl">KvK Nederland</a></li>
              </ul>     <![endif]-->         
          </div>
        </div>
        <div class="yui-g" style="overflow:hidden">
          <img src="/sites/all/themes/KvK/images/banner.png" width="801" height="203">
        </div>
        <div class="yui-gf">
          <div class="yui-u first">
            <?php if ($navigation_block) print $navigation_block;?>

          </div>
          <div class="yui-u">
                      <?php if ($title): print '<h1 class="title">'. $title .'</h1>'; endif; ?>
            <?php print $content ?>
          </div>
        </div>
      </div>
      <div class="yui-u" id="contactFooter">
        <?php print $footer_message . $footer ?>
        <!--  -->
      </div>
      <div id="ft" role="contentinfo">
        
      </div>
    </div>
    <script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
    try {
    var pageTracker = _gat._getTracker("UA-110747-7");
    pageTracker._trackPageview();
    } catch(err) {}</script>
  </body>
</html>