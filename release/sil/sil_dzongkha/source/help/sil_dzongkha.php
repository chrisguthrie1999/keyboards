<?php
  $pagename = 'Dzongkha (SIL)';
  $pagetitle = 'Dzongkha (SIL)';
	$pagestyle = <<<END
	samp{font-family: 'DDC Uchen', 'Tibetan Machine Uni', 'Microsoft Himalaya'; color:blue;}
	kbd {color:black;}
	table {border-collapse:collapse !important; margin:10px 0px 20px 40px;}
	.grid col {background-color:#ffffff;}
	.grid td, .grid th {padding:2px 5px;border-bottom:1px solid #ddd;}
	.grid tr {text-align:center; font-weight:normal; height:80px;}
	.grid thead tr, .grid .headrow{height:30px;}
	.grid .headrow {font-weight:bold; color:#AD4A28; background-color:#eee; text-align:left;}
	col.char   {width:85px;}
	col.keys   {width:75px;}
	col.point {width:85px;}
	col.name   {width:165px;}
	td samp {font-size:24pt}
	table kbd {font-size:12pt;padding:2px 4px; vertical-align:middle;}
	.columns  {width:375px; -webkit-column-count: 2; -webkit-column-gap: 10px; -moz-column-count: 2; -moz-column-gap: 10px; column-count: 2; column-gap: 10px;}
	.colleft, .colright {position:relative; float:left;}
	.colright {padding-left:40px;}
	p samp {font-size:22pt; line-height:.8em;}
	p kbd {color:black; font:9pt Arial; border:solid 1px grey; background:#ccc; margin:0px 1px; padding:0px 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;}
					.key {
							float: left;
							display: block;
							position: relative;
							overflow: hidden;
							height: 35px;
							margin: 2px 0px 0px 2px;
							border: solid 1px grey;
				-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;
					}
					.plain {
						background-repeat: no-repeat;
						width: 34px;
					}
			.empty {
				background:#eee;
			}
			.K_BKQUOTE {
			width:34px;
			}
					.K_BKSP {
			width: 60px;
			}
			.K_TAB {
			width: 52px;
			}
					.K_BKSLASH {
					width: 42px;
					}
			.K_CAPS {
			width: 62px;
			}
			.K_ENTER {
					width: 70px;
			}
			.K_ENTER-EU1 {
					width: 42px;
			-webkit-border-radius: 3px 3px 0px; -moz-border-radius: 3px 3px 0px; border-radius: 3px 3px 0px;
			}
			.K_ENTER-EU1 .key kbd {
			left:3px !important;
			}
			.K_ENTER-EU2 {
					width: 32px;
			margin-top:-1px !important;
			border-top:none !important;
			height:39px !important;
			-webkit-border-radius: 0px 0px 3px 3px; -moz-border-radius: 0px 0px 3px 3px; border-radius: 0px 0px 3px 3px;
			}
					.K_SHIFTL {
						width: 85px;
					}
					.K_SHIFTL-EU {
						width: 47px;
					}
					.K_oE2 {
						display:none;
					}
			.K_SHIFTR {
						width: 85px;
					}
			.K_CTRLL {
				width:60px;
				margin-right: 40px;
					}
			.K_ALTL {
						width: 40px;
					}
					.K_SPACE , .K_SPACE samp{
						width: 224px;
					}
			.K_ALTR {
						width: 40px;
					}
			.K_CTRLR {
						width: 60px;
				margin-left: 76px;
			}


					.special {
						background-repeat: no-repeat;
				background: #c0c0c0;
					}

					.key kbd {
						font: bold 7pt Arial;
						position: absolute;
						left: 3px;
						top: 3px;
					}

					.key kbd {
						display: block;
					}

					.special kbd {
						display: block;
					}

					.key samp {
				font-size:20px;
						position: absolute;
						display: block;
						right: 3px;
						bottom: -3px;
					}
			#altgr .K_J samp, #shift_altgr .K_J samp {
			bottom:3px;
			}
			.K_SPACE samp {
			 text-align:center;
				}

			.LTN {
				font-family:Arial !important;
				font-size:12px !important;
				color: #AD4A28 !important;
				right:2px !important;
				bottom:2px !important;
				font-variant:small-caps;
			}

END;
  require_once('header.php');
?>








	<h2>Overview</h2>
	<p>This keyboard is designed for the Dzongkha language of Bhutan. The keyboard follows the current (October 2009) official Dzongkha layout approved by the Department of Information Technology and Dzongkha Development Authority of the Government of Bhutan. This keyboard is fully compliant with the <a href='http://unicode.org/standard/standard.html'>Unicode Standard</a>.</p>
	<h4>On Screen Keyboard</h4>
	<p>This keyboard includes an On Screen Keyboard view for easy reference. The On Screen Keyboard works best when associated with a QWERTY US layout.</p>
	<h4>Fonts</h4>
	<p>This is a Unicode keyboard and works with any Unicode font which has support for Tibetan script. The <b>DDC Uchen</b> font fully supports this keyboard and is installed with the keyboard. To find other fonts on your computer which support the keyboard, use the Keyman <a href='http://help.keymandesktop.com/docs/start_font.php'>Font Helper</a>.</p>
  </section>
  <section id='layout'>
	<h2>Keyboard Layout</h2>
  </section>