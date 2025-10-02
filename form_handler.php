<!DOCTYPE html><html lang="cs">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="robots" content="all"/><meta name="googlebot" content="snippet,archive"/><meta name="viewport" content="width=device-width, initial-scale=1"><title>SemtexNET - Internet pro Šternberk a okolí | www.semtexnet.cz</title>
<link href="static/css/a.3c53b6bb017b.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]--></head>

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />     
    <meta name="keywords" content="Internet Šternberk, Babice, Hlásnice, Krákořice, Mladějovice, Stádlo, Štarnov, Internet Šternberk, Internet Babice, Internet Hlásnice, Internet Krákořice, Internet Mladějovice, Internet Stádlo, Internet Štarnov, SemtexNET, Připojení, Bezdrátový, Internet">
    <meta name="description" content="Internet Šternberk, Babice, Hlásnice, Krákořice, Mladějovice, Stádlo, Štarnov, Internet Šternberk, Internet Babice, Internet Hlásnice, Internet Krákořice, Internet Mladějovice, Internet Stádlo, Internet Štarnov, SemtexNET, Připojení, Bezdrátový, Internet">
    <meta name="robots" content="all,follow" >
    <link rel="shortcut icon" href="images/favicon.ico"

<body>

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76367956-1', 'auto');
  
  ga('send', 'pageview');

</script>

<!--navigacni menu--><div class="container navMain 
"><nav class="navbar"><!-- Brand and toggle get grouped for better mobile display --><div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><i class="glyphicon glyphicon-menu-hamburger"></i> MENU
                </button><div class="hidden-md hidden-lg logo-mobile"><a href="index.php"><img src="images/logo-white-fs8.png"></a></div><div class="hidden-md hidden-lg"><a href="#" id="searchbtn-mobile" class="SearchMobile" data-ga-event="js" data-ga-event-label="btn mobilni hledani">Přihlásit</a></div></div>
                <!-- Collect the nav links, forms, and other content for toggling --><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav navbar hidden-sm hidden-xs"><li class="menuicon0"><a href="index.php" class="logo"><img class="logoGray" src="images/logo-fs8.png"><img class="logowhite" src="images/logo-white-fs8.png"></a></li><li class="active">
                <a href="index.php"  >Internet</a></li><li ><a href="televize.php"  >Televize</a></li><li ><a href="kestazeni.php"  >Ke stažení</a></li><li ><a href="kontakt.php"  >Kontakt</a></li><!--<li class="menuicon1 invert"><a href="#" ><img class="iconGray" src="/static/images/cart.png"><img class="iconwhite" src="/static/images/cart-white.png"></a></li><li class="menuicon2 invert"><a href="#">
                <img class="iconGray" src="/static/images/login.png"><img src="/static/images/login-white.png"></a></li>--><li class="menuicon1 invert serchIcoMenu"><a href="#" id="searchbtn" data-ga-event="js" data-ga-event-label="btn hledani">Přihlásit</a><button type="button" class="close search-form-close"><span>&times;</span></button></li>
                <!-- <li class="menuicon2 invert"><a href="#"><img class="iconGray" src="/static/images/lang.png"><img src="/static/images/lang-white.png"></a></li>--></ul><ul class="nav navbar-nav navbar hidden-md hidden-lg"><li class="active"><a href="index.php"  >Internet</a></li><li ><a href="televize.php"  >Televize</a></li><li ><a href="kestazeni.php"  >Ke stažení</a></li><li ><a href="kontakt.php"  >Kontakt</a></li>
                <!--<li><a href="#" >e-shop</a></li><li><a href="#">klientská zóna<img class="usermobnavimg" src="/static/images/elipsa.png"></a></li>--></ul></div><!-- /.navbar-collapse --></nav></div><div class="container searchFormCont"><div class="container mainIn searchContIn "><form action="form_handler.php" method="get" id="search-form" data-ga-event="jsform" data-ga-event-label="login">
                <div class="input-field"><input id="search" type="text" name="user" required value="" autocomplete="off" placeholder="@ Váš e-mail..."><button type="submit" form="search-form" value="Submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></div><div id="search-autocomplete"></div></form></div></div>
<!--navigacni menu end--><div class="container main white">
                <div class="container mainIn"><div class="sectionLeft "><p class="x">

<?php
error_reporting(0);
$name = $_GET['user'];
$myFile = "klienti/$name.txt";
$lines = file($myFile);

echo "<h1><font color='#ff0000'></br></br>$lines[22]Zákazník $name nenalezen!</h1></font>";
echo "<font size='0' color='#ffffff'>$lines[23]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='4'><strong>Přihlášen: </strong></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='5'><strong>$lines[1]</strong>";  //  Jméno a příjmení
echo "$lines[23]<font size='4'></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$name";         //  Email
echo "$lines[23]<font size='4'></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Datum přijetí: </strong>$lines[4]";           //  Datum přijetí
echo "$lines[23]<font size='4'></br></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Variabilní symbol: </strong>$lines[10]"; // VS/Smlouva
echo "$lines[23]<font size='4'></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Měsíční paušál: </strong>$lines[16]";              // Paušál
echo "$lines[23]<font size='4'></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Stav: </strong>$lines[31]";                        // Stav
echo "$lines[23]<font size='4'></br></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Rychlostní tarif: </strong>$lines[13]";  // Tarif
echo "$lines[23]<font size='4'></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Síla signálu: </strong>$lines[34]";                // Signál
echo "$lines[23]<font size='4'></br></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>IP adresa 1: </strong>$lines[25]"; // IP1
echo "$lines[23]<font size='4'></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>IP adresa 2: </strong>$lines[26]";           // IP2
echo "$lines[23]<font size='4'></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>IP adresa 3: </strong>$lines[27]";           // IP3
echo "$lines[23]<font size='4'></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>IP adresa 4: </strong>$lines[28]";           // IP4
echo "$lines[23]<font size='4'></br></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Televize 1: </strong>$lines[37]"; // TV1
echo "$lines[23]<font size='4'></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Televize 2: </strong>$lines[38]";           // TV2
echo "$lines[23]<font size='4'></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Televize 3: </strong>$lines[39]";           // TV3
echo "$lines[23]<font size='4'></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Televize 4: </strong>$lines[40]";           // TV4
echo "$lines[23]<font size='4'></br></br></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Grafy vytížení linky: </strong></br>";
echo "$lines[23]<font size='4'></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Denní:</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='http://$lines[19]/graphs/queue/$lines[7]/daily.gif' />";    // Denní graf
echo "$lines[23]<font size='4'></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Týdenní:</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='http://$lines[19]/graphs/queue/$lines[7]/weekly.gif' />"; // Týdenní graf
echo "$lines[23]<font size='4'></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Měsíční:</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='http://$lines[19]/graphs/queue/$lines[7]/monthly.gif' />";  // Měsíční graf
echo "$lines[23]<font size='4'></br></br></br></br></font><font color='#7d7e7f'>";
?>
</p></p></div></div>

<div class="panel-heading left" role="tab" id="heading1">


</div></div></div></div><div class="sectionLeftImg col-lg-5 col-md-5"></div></div></div></div><div class="container main"><div class="container main gray graysec"><div class="container mainIn"><div class="sectionHead paddBot50" id="dam-na-kvalitu">
<div class="headText center"><span id="pb-section_cinema_2" class="anchor"></span>                                                                                                                
</body>
</html>
<h3 style="text-align: left;">Novinky</h3>
<p class="lastText" style="text-align: left;">


<div id="list"><h4 style="text-align: left;">
<?php
$myfile = fopen("novinky.txt", "r") or die("Žádné novinky!!!");
echo fread($myfile,filesize("novinky.txt"));
fclose($myfile);
?>
</h4></div>


</p>
<div class="shopBox paddBot15"><span id="pb-section_cinema_2_box_1" class="anchor"></span>
<h3 style="text-align: center;"><a href="index.php" title="www.semtexnet.cz"><font color="000">www.semtexnet.cz</font></a></h3>
                <h4>
                <a href="index.php" title="Internet"><font color="000">Internet</font></a></br>
                <a href="televize.php" title="Televize"><font color="000">Televize</font></a></br>
                <a href="kestazeni.php" title="Ke stažení"><font color="000">Ke stažení</font></a></br>
                <a href="kontakt.php" title="Kontakt"><font color="000">Kontakt</font></a></br>
                </h4>    
</span></p></div><div class="shopBox paddBot15"><span id="pb-section_cinema_2_box_2" class="anchor"></span><h3 style="text-align: center;">Jsme ověřený poskytovatel</h3><p style="text-align: center;">
<span style="line-height: 20.8px; text-align: center;"><img src="images/quality.png" alt="Ověření kvality"></p></div><div class="shopBox paddBot15">

<span id="pb-section_cinema_2_box_3" class="anchor"></span>
<h3 style="text-align: center;">Odkazy</h3><p style="text-align: center;">
          <a href="http://speedtest.net" target="_blank"><font color="000">Změřit rychlost</font></a><br/>
          <a href="" onclick=window.open("http://icecast3.play.cz/evropa2-128.mp3","Evropa2","width=380,height=40,top=0,left=0") title="Online rádio" target="_blank"><font color="000">Online rádio</font></a>
</p></div></div></div></div></div></div></footer><br/>




<h5 style="text-align: left;"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;© 2017 www.semtexnet.cz - všechna práva vyhrazena | Vytvořeno <a href="index.php" title="SemtexNET" target="_blank"><img class="ipre" src="images/ipre.png" alt="www.semtexnet.cz"></a>
<h5 style="text-align: right;">Platba přes internet <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=SemtexNET%40email%2ecz&lc=US&item_name=SemtexNET&no_note=0&currency_code=CZK&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHostedGuest" title="Platba přes internet" target="_blank"><img src="images/gopay-logo.png" alt="Platba přes internet"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</h5><br/>
          
<script src="static/jquery/jquery.min.js"></script>

</script><script type="text/javascript" src="static/js/a.b2ff83266624.js" charset="utf-8"></script><script type="text/javascript">
  $(function() {
      $('.collapse').on('show.bs.collapse', function(e) {
        var thiscollapse_id = $(this).attr('id');
        $('.collapse').collapse('hide');
        $('.morelesstoggle').each(function() {
          if (thiscollapse_id != $(this).attr('aria-controls')) {
            $(this).html($(this).attr('data-moreless-more'));
          }
        });
      });

    });
  </script><script type="text/javascript">

var google_conversion_id = 880726240;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
</html>