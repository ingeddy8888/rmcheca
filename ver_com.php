<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
require_once("config/config.php");
require_once("include/clasesmysql.php");
$miconexion = new DB_mysql;
$miconexion->conectar($basededatos, $host, $usuario_bd, $contrasena_bd);

$not=round($_GET['nt']);
$miconexion->consulta("select com_id from comunicado where com_id=$not");
if(!mysql_num_rows($miconexion->Consulta_ID)){
   header("HTTP/1.1 404 Not Found");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="robots" content="noindex, follow" />
<title>Ver comunicado - Instituci&oacute;n Educativa Particular Rosa Mar&iacute;a Checa - Chiclayo</title>

<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Coustard:900' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css' />
<style type="text/css">
<!--
body {

	background-color: #E5E5E5;

	background-image: url(imagenes/fondo1_fondo.png);

	background-repeat: repeat-x;

}

.Estilo53 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: smaller;

	color: #0000FF;

}

.Estilo53 {color: #FFFFFF; }

.Estilo1 {font-family: Verdana, Arial, Helvetica, sans-serif}

.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }

.Estilo4 {color: #000000}

.Estilo5 {font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: small;

	color: #FFFF00;

}

.Estilo5 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF;}

.Estilo52 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF; font-size: medium; }

.Estilo54 {font-size: small}

.Estilo54 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF;}

.Estilo55 {font-size: smaller}

.Estilo8 {font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: x-small;

}

.Estilo9 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #FFFFFF; font-size: small; }

.Estilo59 {font-size: smaller; color: #000000; }
-->
</style>
<link href="http://www.rmcheca.edu.pe/botones.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">

<!--

function MM_preloadImages() { //v3.0

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}



function MM_findObj(n, d) { //v4.01

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}



function MM_nbGroup(event, grpName) { //v6.0

  var i,img,nbArr,args=MM_nbGroup.arguments;

  if (event == "init" && args.length > 2) {

    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {

      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;

      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();

      nbArr[nbArr.length] = img;

      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {

        if (!img.MM_up) img.MM_up = img.src;

        img.src = img.MM_dn = args[i+1];

        nbArr[nbArr.length] = img;

    } }

  } else if (event == "over") {

    document.MM_nbOver = nbArr = new Array();

    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {

      if (!img.MM_up) img.MM_up = img.src;

      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);

      nbArr[nbArr.length] = img;

    }

  } else if (event == "out" ) {

    for (i=0; i < document.MM_nbOver.length; i++) {

      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }

  } else if (event == "down") {

    nbArr = document[grpName];

    if (nbArr)

      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }

    document[grpName] = nbArr = new Array();

    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {

      if (!img.MM_up) img.MM_up = img.src;

      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;

      nbArr[nbArr.length] = img;

  } }

}

//-->

</script>

<script language="JavaScript1.2" type="text/javascript" src="mm_css_menu.js"></script>

</head>

<body text="#ffffff" onload="MM_preloadImages('img/botones_r2_c4_s3.gif','img/botones_r2_c4_s2.gif','img/botones_r2_c4_s4.gif','img/botones_r2_c10_s3.gif','img/botones_r2_c10_s2.gif','img/botones_r2_c10_s4.gif','img/botones_r2_c14_s3.gif','img/botones_r2_c14_s2.gif','img/botones_r2_c14_s4.gif','img/botones_r3_c2_s3.gif','img/botones_r3_c2_s2.gif','img/botones_r3_c2_s4.gif','img/botones_r3_c6_s3.gif','img/botones_r3_c6_s2.gif','img/botones_r3_c6_s4.gif','img/botones_r3_c8_s3.gif','img/botones_r3_c8_s2.gif','img/botones_r3_c8_s4.gif','img/botones_r3_c12_s3.gif','img/botones_r3_c12_s2.gif','img/botones_r3_c12_s4.gif','img/botones_r4_c16_s3.gif','img/botones_r4_c16_s2.gif','img/botones_r4_c16_s4.gif')">

<table width="1053" height="112" border="0" align="center">

  <tr>

    <td width="554" height="108" valign="top"><div align="left"><img src="imagenes/logo.png" alt="logo" width="538" height="94" /></div></td>

    <td width="10" valign="top">&nbsp;</td>

    <td width="476" height="108" valign="middle">

      <table width="340" border="0" align="right">
      <tr>
        <td width="30"><span class="Estilo3"><a href="http://www.santillanacompartir.com/integration/compartir" target="_top"><img src="imagenes/santillana.png" alt="Santillana Compartir" title="Santillana Compartir" /></a></span></td>
        <td width="130"><span class="Estilo3"><a href="http://www.santillanacompartir.com/integration/compartir" target="_top"><span class="Estilo4">Santillana Compartir</span></a></span></td>
        <td width="60"><span class="Estilo3"><a href="http://rmcheca.sieweb.com.pe" target="_top"><img src="imagenes/intranet.png" alt="Intranet Sieweb" title="Intranet Sieweb" /></a></span></td>
        <td width="70"><span class="Estilo3"><a href="http://colegios.pucp.edu.pe/rosamariacheca/login/index.php" target="_top"><img src="imagenes/pucp.jpg" alt="Paideia Colegios" title="Paideia Colegios" /></a></span></td>
      </tr>
      </table>

      <table width="458" border="0" align="right">
      <tr>

        <td width="21"><img src="imagenes/a1.gif" alt="a1" width="15" height="13" /></td>

        <td width="46"><span class="Estilo3"><a href="/" target="_top"><span class="Estilo4">Inicio</span></a></span></td>

        <td width="17"><img src="imagenes/a3.gif" alt="a3" width="15" height="12" /></td>

        <td width="68"><span class="Estilo3"><a href="contacto.html" target="_top"><span class="Estilo4">Contacto</span></a></span></td>

        <td width="21"><img src="imagenes/a2.gif" alt="a2" width="15" height="12" /></td>

        <td width="96"><span class="Estilo3"><a href="http://www.rmcheca.edu.pe/administracion" target="_blank"><span class="Estilo4">Administrador</span></a></span></td>

        <td width="10">&nbsp;</td>

        <td width="81"><div align="center" class="Estilo3">S&iacute;guenos</div></td>

        <td width="24"><a href="http://www.facebook.com/rmcheca" target="_blank"><img src="imagenes/face.png" alt="face" width="21" height="20" border="0" /></a></td>

        <td width="32"><a href="http://www.youtube.com/user/ChecaColegio" target="_blank"><img src="imagenes/you.png" alt="you" width="21" height="21" border="0" /></a></td>

      </tr>

    </table></td>

  </tr>

</table>

<table width="1053" border="0" align="center" bgcolor="#FFFFFF">

  <tr>

    <td colspan="2"><div id="FWTableContainer1283559429">

      <table style="display: inline-table;" border="0" cellpadding="0" cellspacing="0" width="1053">

        <!-- fwtable fwsrc="botones.png" fwpage="P&aacute;gina 1" fwbase="botones.gif" fwstyle="Dreamweaver" fwdocid = "1283559429" fwnested="0" -->

        <tr>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="37" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="103" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="35" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="82" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="36" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="154" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="33" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="73" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="31" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="67" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="34" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="58" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="33" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="143" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="34" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="63" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="37" height="1" border="0" id="undefined_2" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="1" height="1" border="0" id="undefined_2" /></td>

        </tr>

        <tr>

          <td colspan="17"><img name="botones_r1_c1_s1" src="img/botones_r1_c1_s1.gif" width="1053" height="19" border="0" id="botones_r1_c1_s1" alt="" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="1" height="19" border="0" id="undefined_2" /></td>

        </tr>

        <tr>

          <td colspan="3"><img name="botones_r2_c1_s1" src="img/botones_r2_c1_s1.gif" width="175" height="2" border="0" id="botones_r2_c1_s1" alt="" /></td>

          <td rowspan="3"><a href="javascript:;" target="_top" onmouseout="MM_nbGroup('out');MM_menuStartTimeout(1000);" onmouseover="MM_menuShowMenu('MMMenuContainer0427141743_0', 'MMMenu0427141743_0',8,20,'botones_r2_c4_s1');MM_nbGroup('over','botones_r2_c4_s1','img/botones_r2_c4_s2.gif','img/botones_r2_c4_s4.gif',1);" onclick="MM_nbGroup('down','navbar1','botones_r2_c4_s1','img/botones_r2_c4_s3.gif',1);"><img name="botones_r2_c4_s1" src="img/botones_r2_c4_s1.gif" width="82" height="13" border="0" id="botones_r2_c4_s1" alt="" /></a></td>

          <td colspan="5"><img name="botones_r2_c5_s1" src="img/botones_r2_c5_s1.gif" width="327" height="2" border="0" id="botones_r2_c5_s1" alt="" /></td>

          <td rowspan="4"><a href="admision.html" target="_top" onmouseout="MM_nbGroup('out');" onmouseover="MM_nbGroup('over','botones_r2_c10_s1','img/botones_r2_c10_s2.gif','img/botones_r2_c10_s4.gif',1);" onclick="MM_nbGroup('down','navbar1','botones_r2_c10_s1','img/botones_r2_c10_s3.gif',1);"><img name="botones_r2_c10_s1" src="img/botones_r2_c10_s1.gif" width="67" height="20" border="0" id="botones_r2_c10_s1" alt="" /></a></td>

          <td colspan="3"><img name="botones_r2_c11_s1" src="img/botones_r2_c11_s1.gif" width="125" height="2" border="0" id="botones_r2_c11_s1" alt="" /></td>

          <td rowspan="4"><a href="atencion.html" target="_top" onmouseout="MM_nbGroup('out');" onmouseover="MM_nbGroup('over','botones_r2_c14_s1','img/botones_r2_c14_s2.gif','img/botones_r2_c14_s4.gif',1);" onclick="MM_nbGroup('down','navbar1','botones_r2_c14_s1','img/botones_r2_c14_s3.gif',1);"><img name="botones_r2_c14_s1" src="img/botones_r2_c14_s1.gif" width="143" height="20" border="0" id="botones_r2_c14_s1" alt="" /></a></td>

          <td rowspan="2" colspan="3"><img name="botones_r2_c15_s1" src="img/botones_r2_c15_s1.gif" width="134" height="4" border="0" id="botones_r2_c15_s1" alt="" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="1" height="2" border="0" id="undefined_2" /></td>

        </tr>

        <tr>

          <td rowspan="5"><img name="botones_r3_c1_s1" src="img/botones_r3_c1_s1.gif" width="37" height="29" border="0" id="botones_r3_c1_s1" alt="" /></td>

          <td rowspan="3"><a href="institucional.html" target="_top" onmouseout="MM_nbGroup('out');" onmouseover="MM_nbGroup('over','botones_r3_c2_s1','img/botones_r3_c2_s2.gif','img/botones_r3_c2_s4.gif',1);" onclick="MM_nbGroup('down','navbar1','botones_r3_c2_s1','img/botones_r3_c2_s3.gif',1);"><img name="botones_r3_c2_s1" src="img/botones_r3_c2_s1.gif" width="103" height="18" border="0" id="botones_r3_c2_s1" alt="" /></a></td>

          <td rowspan="5"><img name="botones_r3_c3_s1" src="img/botones_r3_c3_s1.gif" width="35" height="29" border="0" id="botones_r3_c3_s1" alt="" /></td>

          <td rowspan="5"><img name="botones_r3_c5_s1" src="img/botones_r3_c5_s1.gif" width="36" height="29" border="0" id="botones_r3_c5_s1" alt="" /></td>

          <td rowspan="2"><a href="javascript:;" target="_top" onmouseout="MM_nbGroup('out');MM_menuStartTimeout(1000);" onmouseover="MM_menuShowMenu('MMMenuContainer0423110639_0', 'MMMenu0423110639_0',8,20,'botones_r3_c6_s1');MM_nbGroup('over','botones_r3_c6_s1','img/botones_r3_c6_s2.gif','img/botones_r3_c6_s4.gif',1);" onclick="MM_nbGroup('down','navbar1','botones_r3_c6_s1','img/botones_r3_c6_s3.gif',1);"><img name="botones_r3_c6_s1" src="img/botones_r3_c6_s1.gif" width="154" height="11" border="0" id="botones_r3_c6_s1" alt="" /></a></td>

          <td rowspan="5"><img name="botones_r3_c7_s1" src="img/botones_r3_c7_s1.gif" width="33" height="29" border="0" id="botones_r3_c7_s1" alt="" /></td>

          <td rowspan="3"><a href="personal.html" target="_top" onmouseout="MM_nbGroup('out');" onmouseover="MM_nbGroup('over','botones_r3_c8_s1','img/botones_r3_c8_s2.gif','img/botones_r3_c8_s4.gif',1);" onclick="MM_nbGroup('down','navbar1','botones_r3_c8_s1','img/botones_r3_c8_s3.gif',1);"><img name="botones_r3_c8_s1" src="img/botones_r3_c8_s1.gif" width="73" height="18" border="0" id="botones_r3_c8_s1" alt="" /></a></td>

          <td rowspan="5"><img name="botones_r3_c9_s1" src="img/botones_r3_c9_s1.gif" width="31" height="29" border="0" id="botones_r3_c9_s1" alt="" /></td>

          <td rowspan="5"><img name="botones_r3_c11_s1" src="img/botones_r3_c11_s1.gif" width="34" height="29" border="0" id="botones_r3_c11_s1" alt="" /></td>

          <td rowspan="3"><a href="agenda.html" target="_top" onmouseout="MM_nbGroup('out');" onmouseover="MM_nbGroup('over','botones_r3_c12_s1','img/botones_r3_c12_s2.gif','img/botones_r3_c12_s4.gif',1);" onclick="MM_nbGroup('down','navbar1','botones_r3_c12_s1','img/botones_r3_c12_s3.gif',1);"><img name="botones_r3_c12_s1" src="img/botones_r3_c12_s1.gif" width="58" height="18" border="0" id="botones_r3_c12_s1" alt="" /></a></td>

          <td rowspan="5"><img name="botones_r3_c13_s1" src="img/botones_r3_c13_s1.gif" width="33" height="29" border="0" id="botones_r3_c13_s1" alt="" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="1" height="2" border="0" id="undefined_2" /></td>

        </tr>

        <tr>

          <td rowspan="4"><img name="botones_r4_c15_s1" src="img/botones_r4_c15_s1.gif" width="34" height="27" border="0" id="botones_r4_c15_s1" alt="" /></td>

          <td rowspan="3"><a href="comunicados.php" target="_top" onmouseout="MM_nbGroup('out');" onmouseover="MM_nbGroup('over','botones_r4_c16_s1','img/botones_r4_c16_s2.gif','img/botones_r4_c16_s4.gif',1);" onclick="MM_nbGroup('down','navbar1','botones_r4_c16_s1','img/botones_r4_c16_s3.gif',1);"><img name="botones_r4_c16_s1" src="img/botones_r4_c16_s1.gif" width="63" height="18" border="0" id="botones_r4_c16_s1" alt="" /></a></td>

          <td rowspan="4"><img name="botones_r4_c17_s1" src="img/botones_r4_c17_s1.gif" width="37" height="27" border="0" id="botones_r4_c17_s1" alt="" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="1" height="9" border="0" id="undefined_2" /></td>

        </tr>

        <tr>

          <td rowspan="3"><img name="botones_r5_c4_s1" src="img/botones_r5_c4_s1.gif" width="82" height="18" border="0" id="botones_r5_c4_s1" alt="" /></td>

          <td rowspan="3"><img name="botones_r5_c6_s1" src="img/botones_r5_c6_s1.gif" width="154" height="18" border="0" id="botones_r5_c6_s1" alt="" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="1" height="7" border="0" id="undefined_2" /></td>

        </tr>

        <tr>

          <td rowspan="2"><img name="botones_r6_c2_s1" src="img/botones_r6_c2_s1.gif" width="103" height="11" border="0" id="botones_r6_c2_s1" alt="" /></td>

          <td rowspan="2"><img name="botones_r6_c8_s1" src="img/botones_r6_c8_s1.gif" width="73" height="11" border="0" id="botones_r6_c8_s1" alt="" /></td>

          <td rowspan="2"><img name="botones_r6_c10_s1" src="img/botones_r6_c10_s1.gif" width="67" height="11" border="0" id="botones_r6_c10_s1" alt="" /></td>

          <td rowspan="2"><img name="botones_r6_c12_s1" src="img/botones_r6_c12_s1.gif" width="58" height="11" border="0" id="botones_r6_c12_s1" alt="" /></td>

          <td rowspan="2"><img name="botones_r6_c14_s1" src="img/botones_r6_c14_s1.gif" width="143" height="11" border="0" id="botones_r6_c14_s1" alt="" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="1" height="2" border="0" id="undefined_2" /></td>

        </tr>

        <tr>

          <td><img name="botones_r7_c16_s1" src="img/botones_r7_c16_s1.gif" width="63" height="9" border="0" id="botones_r7_c16_s1" alt="" /></td>

          <td><img src="img/spacer.gif" alt="" name="undefined_2" width="1" height="9" border="0" id="undefined_2" /></td>

        </tr>

      </table>

      <div id="MMMenuContainer0427141743_0">

        <div id="MMMenu0427141743_0" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();"> <a href="tutorias.html" target="_top" id="MMMenu0427141743_0_Item_0" class="MMMIFVStyleMMMenu0427141743_0" onmouseover="MM_menuOverMenuItem('MMMenu0427141743_0');"> TUTORIAS </a> <a href="horarios.html" target="_top" id="MMMenu0427141743_0_Item_1" class="MMMIVStyleMMMenu0427141743_0" onmouseover="MM_menuOverMenuItem('MMMenu0427141743_0');"> HORARIOS </a> <a href="academico.html" target="_top" id="MMMenu0427141743_0_Item_2" class="MMMIVStyleMMMenu0427141743_0" onmouseover="MM_menuOverMenuItem('MMMenu0427141743_0');"> PROPUESTA </a> </div>

      </div>

      <div id="MMMenuContainer0423110639_0">

        <div id="MMMenu0423110639_0" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();"> <a href="estudiantes.html" target="_top" id="MMMenu0423110639_0_Item_0" class="MMMIFVStyleMMMenu0423110639_0" onmouseover="MM_menuOverMenuItem('MMMenu0423110639_0');"> DE&nbsp;LAS&nbsp;ESTUDIANTES </a> <a href="familiar.html" target="_top" id="MMMenu0423110639_0_Item_1" class="MMMIVStyleMMMenu0423110639_0" onmouseover="MM_menuOverMenuItem('MMMenu0423110639_0');"> DE&nbsp;LA&nbsp;FAMILIA </a> <a href="juvenil.html" target="_top" id="MMMenu0423110639_0_Item_2" class="MMMIVStyleMMMenu0423110639_0" onmouseover="MM_menuOverMenuItem('MMMenu0423110639_0');"> JUVENIL&nbsp;VOCACIONAL </a> </div>

      </div>

    </div></td>

  </tr>

  <tr>

    <td width="296" valign="top"><table width="238" border="0" bgcolor="#FFFFFF">

      <tr>

        <td><a href="reglamento.pdf" target="_blank"><img src="imagenes/c1.png" alt="c1" width="290" height="211" border="0" /></a></td>

      </tr>

      <tr>

        <td><a href="inicial.html" target="_top"><img src="imagenes/c6.png" alt="c6" width="288" height="72" border="0" /></a></td>

      </tr>

      <tr>

        <td><a href="primaria.html" target="_top"><img src="imagenes/c7.png" alt="c7" width="288" height="72" border="0" /></a></td>

      </tr>

      <tr>

        <td><a href="secundaria.html" target="_top"><img src="imagenes/c8.png" alt="c8" width="288" height="72" border="0" /></a></td>

      </tr>

      <tr>

        <td valign="bottom"><a href="apafa.html" target="_top"></a><a href="apafa.html" target="_top"></a><a href="apafa.html" target="_top"></a><a href="apafa.html" target="_top"><img src="imagenes/c2.png" alt="c2" width="288" height="72" border="0" /></a></td>

      </tr>

      <tr>

        <td><a href="padres.html" target="_top"><img src="imagenes/c3.png" alt="c3" width="288" height="72" border="0" /></a></td>

      </tr>

      <tr>

        <td><a href="comunicados.php" target="_top"><img src="imagenes/c4.png" alt="c4" width="288" height="72" border="0" /></a></td>

      </tr>

      <tr>

        <td><a href="http://www.buenpastorperu.pe/" target="_blank"><img src="imagenes/c5.png" alt="c5" width="288" height="72" border="0" /></a></td>

      </tr>

      <tr>

        <td><a href="contacto.html" target="_top"><img src="imagenes/c9.png" alt="c9" width="288" height="191" border="0" /></a></td>

      </tr>

    </table></td>

    <td width="754" valign="top"><table width="754" border="0">
      <tr>

        <td width="748"><!-- Notas --></td>

      </tr>

    </table>

        <table width="748" border="0" align="center" cellpadding='0' cellspacing='0'>

          <tr>

            <td width="658" bgcolor="#008400"><blockquote class="Estilo52">

                <div align="left">COMUNICADO </div>

            </blockquote></td>

            <td width="84" bgcolor="#008400"><img src="imagenes/lo2.png" alt="lo2" width="35" height="42" /></td>

          </tr>
          <tr>
				<td colspan='2'>
					<p align="center">
		<div align='center'>
		<?
		$not=round($_GET['nt']);
		$miconexion->consulta("select * from comunicado where com_id=$not");
		$row_not1=mysql_fetch_array($miconexion->Consulta_ID);
		$com_1_id=$row_not1['com_id'];
		$com_1_ti=htmlentities($row_not1['com_nom']);
		$com_1_pie=htmlentities($row_not1['com_pie']);
		$com_1_de=$row_not1['com_desc'];
		$com_1_fe=explode('-',$row_not1['com_fecha']);
		$com_dia=$com_1_fe[2];
		$com_mes=$com_1_fe[1];
		$com_ano=$com_1_fe[0];

		$arch_1=htmlentities($row_not1['ofe_titu_arch1']);
		$arc_1=htmlentities($row_not1['ofe_arch1']);
		$arch_2=htmlentities($row_not1['ofe_titu_arch2']);
		$arc_2=htmlentities($row_not1['ofe_arch2']);
		$arch_3=htmlentities($row_not1['ofe_titu_arch3']);
		$arc_3=htmlentities($row_not1['ofe_arch3']);
		$arch_4=htmlentities($row_not1['ofe_titu_arch4']);
		$arc_4=htmlentities($row_not1['ofe_arch4']);
		$arch_5=htmlentities($row_not1['ofe_titu_arch5']);
		$arc_5=htmlentities($row_not1['ofe_arch5']);
		$arch_6=htmlentities($row_not1['ofe_titu_arch6']);
		$arc_6=htmlentities($row_not1['ofe_arch6']);

		$hoy="$com_dia-$com_mes-$com_ano";
		$fecha = $hoy;
		$fechats = strtotime($fecha); //a timestamp 
		//el parametro w en la funcion date indica que queremos el dia de la semana 
		//lo devuelve en numero 0 domingo, 1 lunes,.... 
		switch (date('w', $fechats))
		{ 
			case 0: $semana="Domingo"; break; 
			case 1: $semana="Lunes"; break; 
			case 2: $semana="Martes"; break; 
			case 3: $semana="Mi�rcoles"; break; 
			case 4: $semana="Jueves"; break; 
			case 5: $semana="Viernes"; break; 
			case 6: $semana="S�bado"; break; 
		}
		switch ($com_mes)
		{
			case 1: $mes_letra="Enero"; break;
			case 2: $mes_letra="Febrero"; break;
			case 3: $mes_letra="Marzo"; break;
			case 4: $mes_letra="Abril"; break;
			case 5: $mes_letra="Mayo"; break;
			case 6: $mes_letra="Junio"; break;
			case 7: $mes_letra="Julio"; break;
			case 8: $mes_letra="Agosto"; break;
			case 9: $mes_letra="Septiembre"; break;
			case 10: $mes_letra="Octubre"; break;
			case 11: $mes_letra="Noviembre"; break;
			case 12: $mes_letra="Diciembre"; break;
		}
		?>
		<br />
		<table border='0' align='center' width='600'>
			<tr>
				<td style='padding-left:5px; padding-right:5px;'>
					<div align='center' id='seleccion'>
						<table border='0' align='center' width='99%'>
							<tr>
								<td align='left' style="font-family: Georgia; color:#222222; font-weight:normal; font-size: 20px;" style='padding-left:15px; padding-right:15px;'>
									<? if($com_1_ti) echo $com_1_ti; else echo 'El comunicado que busca no existe.';?>
								</td>
							</tr>
                                                    <? if($com_1_ti){ ?>
							<tr>
								<td align='left' style='padding-left:15px; padding-right:15px; padding-top:5px; padding-bottom:5px; font-size:10px; font-family:Verdana; color:#666666;'>
									<? echo "$semana, $com_dia de $mes_letra del $com_ano"; ?>
								</td>
							</tr>
									<?
									if(file_exists("comunicado/$com_1_id.jpg"))
									{
									?>
										<tr><td align='center' class='tit_not'>
										<img src='comunicado/<?=$com_1_id?>.jpg' width='658' border='0' alt=''/>
                                                                                </td></tr>
									<?
									}
									/*else
									{
										echo "<img src='logo2.png' width='500' border='0' alt=''/>";
									}*/
									?>
							<tr>
								<td align='center' style='padding-left:25px; padding-right:15px;  padding-bottom:15px; font-size:11px; font-weight:normal; font-family:Verdana; color:#666666;' valign='top'>
									<?=$com_1_pie?>
								</td>
							</tr>
							<tr>
								<td align='justify' style='padding-left:23px; padding-right:23px;'>
									<div align='justify' class='des_not2' style='color:#000000;'>
										<?=$com_1_de?>
									</div>
								</td>
							</tr>
							<tr>
								<td align='left'>
									<?
									if(file_exists("comunicado/$arc_1") && $arc_1!='')
									{
									?>
										<table border='0' cellspacing='2' cellpadding='2'>
											<tr>
												<td style='font-family:verdana; font-size:12px; color:#000000;' align='left'>
													<b><?=$arch_1?></b>
												</td>
												<td valign='top' style='border:1px solid #FFFFFF;'>
													<a href='comunicado/<?=$arc_1?>' target='_blank' style='color:#990000; font-weight:bold; font-family:verdana; font-size:11px;'>
														Descargar
													</a>
												</td>
											</tr>
										</table>
									<?
									}
									?>
								</td>
							</tr>
                                                    <? } ?>
						</table>
					</div>
				</td>
			</tr>
		</table>
		</div>
	</p>
				</td>
          </tr>

        </table>

      </td>

  </tr>

</table>

<table width="1061" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#009900">

  <tr>

    <td width="575"><div align="center" class="Estilo54">

      <div align="left">

        <blockquote>

          <p align="center">Av. Juan Tomis Stack 170 - Chiclayo - Per&uacute; <br />

            T. (074) 227958 / <span class="Estilo9">rmcheca2003@yahoo.es</span> / colegiocheca@gmail.com <br />

          </p>

        </blockquote>

      </div>

    </div></td>

    <td width="478"><div align="center" class="Estilo9">www.rmcheca.edu.pe</div>

        <div align="center"><span class="Estilo5">&copy; <span class="Estilo53">Instituci&oacute;n Educativa Particular Rosa Mar&iacute;a Checa</span><span class="Estilo9">. </span></span></div></td>

  </tr>

</table>

</body>

</html>