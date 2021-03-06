<?php
/**********************************************************************************************
 * <body> -> SNIPET Contenido texto legal
 * Recoge las variables desde 
 *
**********************************************************************************************
VERSION 0.1
*********************************************************************************************
TODO: 
	> Treballar amb variables des del WP Admin (Plugin WP users)

	> BOE --> http://www.boe.es/buscar/doc.php?id=BOE-A-1999-23750
	

*********************************************************************************************/
//// 
//
// VARIABLES SETEJADES DEL DEL WP ADMIN
//
//Empresa
$empresa_array = get_option('legal_empresa');
if ( isset($empresa_array['nombre']) ){ $empresa_nombre = $empresa_array['nombre'];}else{ $empresa_nombre = ''; }
if ( isset($empresa_array['nombre_legal']) ){ $empresa_nombre_legal = $empresa_array['nombre_legal'];}else{ $empresa_nombre_legal = ''; }
if ( isset($empresa_array['cif']) ){ $empresa_cif = $empresa_array['cif'];}else{ $empresa_cif = ''; }
if ( isset($empresa_array['adress']) ){ $empresa_direccion = $empresa_array['adress'];}else{ $empresa_direccion = ''; }
if ( isset($empresa_array['email']) ){ $empresa_email = $empresa_array['email'];}else{ $empresa_email = ''; }
if ( isset($empresa_array['telf']) ){ $empresa_telefono = $empresa_array['telf'];}else{ $empresa_telefono = ''; }
//
// Web
$web_array = get_option('legal_web');
if ( isset($web_array['url']) ){ $url_nombre = $web_array['url'];}else{ $url_nombre = ''; }
if ( !isset( $web_array['lopd'] ) ){$proteccion_datos = 0;}else{$proteccion_datos = $web_array['lopd'];}
//
// Hosting 
$hosting_array = get_option('legal_hosting');
if ( isset($hosting_array['hosting']) ){ $hosting = $hosting_array['hosting'];}else{ $hosting = ''; }
if ( isset($hosting_array['h_url']) ){ $hosting_url = $hosting_array['h_url'];}else{ $hosting_url = ''; }
if ( isset($hosting_array['h_adress']) ){ $hosting_dir = $hosting_array['h_adress'];}else{ $hosting_dir = ''; }
if ( isset($hosting_array['h_url_leg']) ){ $hosting_legal = $hosting_array['h_url_leg'];}else{ $hosting_legal = ''; }
// Cookies & LOPD
$analtytics_array = get_option('stats_analytics');
if (isset($analtytics_array['id'])){ $analtytics_id = $analtytics_array['id'];}
$cookies_array = get_option('legal_cookies');
if ( !isset( $cookies_array['analytics'] ) ){$legal_analytics = 0;}else{$legal_analytics = $cookies_array['analytics'];}
if ( !isset( $cookies_array['gmaps'] ) ){$legal_gmaps = 0;}else{$legal_gmaps = $cookies_array['gmaps'];}
if ( !isset( $cookies_array['gplus'] ) ){$legal_gplus = 0;}else{$legal_gplus = $cookies_array['gplus'];}
if ( !isset( $cookies_array['facebook'] ) ){$legal_facebook = 0;}else{$legal_facebook = $cookies_array['facebook'];}
if ( !isset( $cookies_array['twitter'] ) ){$legal_twitter = 0;}else{$legal_twitter = $cookies_array['twitter'];}
if ( !isset( $cookies_array['linkedin'] ) ){$legal_linkedin = 0;}else{$legal_linkedin = $cookies_array['linkedin'];}
if ( !isset( $cookies_array['pinterest'] ) ){$legal_pinterest = 0;}else{$legal_pinterest = $cookies_array['pinterest'];}
if ( !isset( $cookies_array['ytube'] ) ){$legal_youtube = 0;}else{$legal_youtube = $cookies_array['ytube'];}
if ( !isset( $cookies_array['vimeo'] ) ){$legal_vimeo = 0;}else{$legal_vimeo = $cookies_array['vimeo'];}
if ( !isset( $cookies_array['slideshare'] ) ){$legal_slideshare = 0;}else{$legal_slideshare = $cookies_array['slideshare'];}
?>
<!-- Aviso Legal -->
<section id="legal_section">
	<section>
		<h2>1.- Aceptaci??n de los T??rminos de Uso</h2>
		<p>La visita o acceso a este sitio web exige la aceptaci??n de los t??rminos de uso que en cada momento se encuentren vigentes en esta direcci??n. En caso de que no est?? de acuerdo con los t??rminos y condiciones descritos a continuaci??n, el usuario debe abstenerse de utilizar esta p??gina web y todos sus servicios relacionados con ella. </p>
	</section>
	<section>
	<h2>2.- Acerca de <?php echo $url_nombre; ?></h2>
		<p>En cumplimiento con el deber de informaci??n recogido en <a href="http://www.boe.es/buscar/act.php?id=BOE-A-2002-13758" target="_blank">Art??culo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Informaci??n y del Comercio Electr??nico</a> a continuaci??n se declara <strong><?php echo $url_nombre; ?></strong>  como un sitio web gestionado por <?php echo $empresa_nombre_legal; ?> <?php if (isset($empresa_cif) && $empresa_cif != '') { echo '<em>con CIF / NIF ' . $empresa_cif .  '</em>'; }?> (en adelante, <em><?php echo $empresa_nombre; ?></em>) <?php if (isset($empresa_direccion) && $empresa_direccion != '') { echo 'con domicilio en <em>' . $empresa_direccion .  '</em> y'; } ?> con email <?php echo '<a href="mailto:' . antispambot( $empresa_email ) . '">' . antispambot( $empresa_email ) . '</a>'; ?>.</p>
	</section>
	<section>
		<h2>3.- Responsabilidad</h2>
		<p>Toda persona que acceda a este sitio web asume el papel de <strong>usuario</strong>, comprometi??ndose a la observancia y cumplimiento riguroso de las disposiciones aqu?? dispuestas, as?? como a cualquier otra disposici??n legal que fuera de aplicaci??n.</p>
		<p>El prestador se exime de cualquier tipo de responsabilidad derivada de la informaci??n publicada en su sitio web y por la falta de disponibilidad (ca??das) del sitio el cual efectuar?? adem??s paradas peri??dicas por mantenimientos t??cnicos, del mismo modo, el visitante expl??citamente acepta declinar cualquier responsabilidad, por parte del prestador del servicio, derivada del acceso o uso de <strong><?php echo $url_nombre; ?></strong>. Adem??s, el prestador se reserva el derecho a modificar cualquier tipo de informaci??n que pudiera aparecer en el sitio web, sin que exista obligaci??n de aviso previo, o poner en conocimiento de los usuarios dichas obligaciones, entendi??ndose como suficiente con la publicaci??n en el sitio web del prestador.</p>
	</section>
	<a name="a_cookies" id="a_cookies"></a>
	<section>
		<h2>4.- Pol??tica de Cookies</h2>
		<p>El sitio web del prestador puede utilizar cookies (peque??os archivos de texto que el servidor env??a al ordenador de quien accede a la p??gina). Se trata de una t??cnica usada de manera habitual en Internet para llevar a cabo determinadas funciones que son consideradas imprescindibles para el correcto funcionamiento y visualizaci??n del sitio.</p>
		<h4>??Qu?? es una cookie?</h4>
		<p>Una cookie es un fichero que se descarga en el ordenador/smartphone/tablet del usuario al acceder a determinadas p??ginas web para almacenar y recuperar informaci??n sobre la navegaci??n que se efect??a desde dicho equipo. Para conocer m??s informaci??n sobre las cookies: <a href="http://es.wikipedia.org/wiki/Cookie_%28inform%C3%A1tica%29" target="_blank"> Wikipedia</a>.</p>
		<h3>4.1.- Las cookies puede ser, seg??n su persistencia en el sistema:</h3>
		<ul>
			<li><em>Cookies de sesi??n</em>: Son un tipo de cookies dise??adas para recabar y almacenar datos mientras el usuario accede a una p??gina web.</li>
			<li><em>Cookies permanentes</em>: Son un tipo de cookies en el que los datos siguen almacenados en el terminal y pueden ser accedidos y tratados durante un periodo definido por el responsable de la cookie, y que puede ir de unos minutos a varios a??os.</li>
		</ul>
		<h3>4.2.- Seg??n su finalidad:</h3>
		<ul>
			<li><em>Cookies t??cnicas</em>: Son aqu??llas que permiten al usuario la navegaci??n a trav??s de una p??gina web, plataforma o aplicaci??n y la utilizaci??n de las diferentes opciones o servicios que en ella existan como, por ejemplo, controlar el tr??fico y la comunicaci??n de datos, identificar la sesi??n, acceder a partes de acceso restringido, recordar los elementos que integran un pedido, realizar el proceso de compra de un pedido, realizar la solicitud de inscripci??n o participaci??n en un evento, utilizar elementos de seguridad durante la navegaci??n, almacenar contenidos para la difusi??n de videos o sonido o compartir contenidos a trav??s de redes sociales.</li>
			<li><em>Cookies de personalizaci??n</em>: Son aqu??llas que permiten al usuario acceder al servicio con algunas caracter??sticas de car??cter general predefinidas en funci??n de una serie de criterios en el terminal del usuario como por ejemplo serian el idioma, el tipo de navegador a trav??s del cual accede al servicio, la configuraci??n regional desde donde accede al servicio, etc.</li>
			<li><em>Cookies de an??lisis</em>: Son aqu??llas que permiten al responsable de las mismas, el seguimiento y an??lisis del comportamiento de los usuarios de los sitios web a los que est??n vinculadas. La informaci??n recogida mediante este tipo de cookies se utiliza en la medici??n de la actividad de los sitios web, aplicaci??n o plataforma y para la elaboraci??n de perfiles de navegaci??n de los usuarios de dichos sitios, aplicaciones y plataformas, con el fin de introducir mejoras en funci??n del an??lisis de los datos de uso que hacen los usuarios del servicio. </li>
			<li><em>Cookies publicitarias</em>: Son aqu??llas que permiten la gesti??n, de la forma m??s eficaz posible, de los espacios publicitarios que, en su caso, el editor haya incluido en una p??gina web, aplicaci??n o plataforma desde la que presta el servicio solicitado en base a criterios como el contenido editado o la frecuencia en la que se muestran los anuncios. </li>
			<li><em>Cookies de publicidad comportamental</em>: Son aqu??llas que permiten la gesti??n, de la forma m??s eficaz posible, de los espacios publicitarios que, en su caso, el editor haya incluido en una p??gina web, aplicaci??n o plataforma desde la que presta el servicio solicitado. Estas cookies almacenan informaci??n del comportamiento de los usuarios obtenida a trav??s de la observaci??n continuada de sus h??bitos de navegaci??n, lo que permite desarrollar un perfil espec??fico para mostrar publicidad en funci??n del mismo. </li>
		</ul>
		<p><em>Las cookies utilizadas en el sitio web tienen</em>, en todo caso, <em>car??cter temporal</em> con la ??nica finalidad de hacer m??s eficaz su transmisi??n ulterior.  En ning??n caso se utilizar??n las cookies para recoger informaci??n de car??cter personal o privado de nuestros visitantes.</p>
		<p><em><?php echo $url_nombre; ?></em> utiliza cookies de sesi??n para optimizar el uso de recursos del sistema y mejorar la velocidad de carga del web:</p>
		<ul>
			<li><strong>i_cookies</strong>: cookie generada por la p??gina web, para determinar si el visitante acepta o no la pol??tica de cookies. Caduca al a??o, o cuando cambien el aviso legal del web. Lo que suceda antes.</li>
		</ul>
		<?php if ($legal_gmaps == 1 || $legal_youtube == 1 || $analtytics_id != '' || $legal_analytics == 1 || $legal_gplus || $legal_facebook ||$legal_twitter || $legal_vimeo){ ?>
			<h3>4.3.- Cookies de terceros:</h3>
			<?php $i = 1;
			if ($analtytics_id != '' || $legal_analytics == 1){?>
				<h4>4.3.<?php echo $i; ?> - Google Analytics:</h4>
				<p>El sitio utiliza el servicio Google Analytics, que es prestado por Google, Inc., entidad cuya oficina principal est?? en 1600 Amphitheatre Parkway, Mountain View (California), CA 94043, Estados Unidos. </p>
				<p>Google Analytics utiliza cookies para ayudarnos a analizar el uso que hacen los usuarios del sitio. La informaci??n que genera la cookie acerca de tu uso del sitio (incluyendo tu direcci??n IP) ser?? directamente transmitida y archivada por Google en sus servidores de Estados Unidos. Google usar?? esta informaci??n por cuenta nuestra con el prop??sito de seguir la pista de tu uso del sitio, recopilando informes de la actividad del sitio y prestando otros servicios relacionados con la actividad del sitio y el uso de Internet. Google podr?? transmitir dicha informaci??n a terceros cuando as?? se lo requiera la legislaci??n, o cuando dichos terceros procesen la informaci??n por cuenta de Google. Google no asociar?? tu direcci??n IP con ning??n otro dato del que disponga Google. </p>
				<p>Si lo deseas puedes rechazar el tratamiento de los datos o la informaci??n rechazando el uso de cookies mediante la selecci??n de la configuraci??n apropiada de tu navegador. Sin embargo, si lo haces, puede ser que no puedas usar la plena funcionabilidad de este sitio. Al utilizar este sitio consientes el tratamiento tu informaci??n por Google en la forma y para los fines arriba indicados. </p>
				<h6>Cookies utilizadas por  Google Analytics:</h6>
				<ul>
					<li><strong>__utma</strong>: Esta cookie tiene una duraci??n de dos a??os, y es utilizada para distinguir la sesi??n de usuario.</li>
					<li><strong>__utmb</strong>: Esta cookie tiene una duraci??n de 30 minutos. Se usa para determinar nuevas sesiones y/o visitas.</li>
					<li><strong>__utmc</strong>: Esta cookie permanece activa mientras perdura la sesi??n del navegador. Es una cookie temporal para indicar si la sesi??n est?? abierta o cerrada. Ya no suele utilizarse.</li>
					<li><strong>__utmz</strong>:  Esta cookie tiene una duraci??n de seis meses. Esta cookie se utiliza para calcular el tr??fico que proviene de motores de b??squeda (org??nico y PPC), las campa??as publicitarias en display y la navegaci??n dentro de la misma web (enlaces internos).</li>
					<li><strong>__utmv</strong>:  Esta cookie tiene una duraci??n de dos a??os, y es utilizada para almacenar datos obtenidos de registros, para posteriormente poder segmentarlos demogr??ficamente.</li>
					<li><strong>_ga</strong>:  Esta cookie tiene una duraci??n de dos a??os, y es utilizada para distinguir usuarios.</li>
				</ul>
			<?php $i++;
			} //end if G Analytics cookies
			if ($legal_gmaps == 1){ ?>
				<h4>4.3.<?php echo $i; ?> - Google Maps:</h4>
				<p>Google maps permite la inserci??n de mapas en las webs de terceros, como la presente. Las cookies utilizadas por google maps son: <strong>SID</strong>, <strong>SAPISID</strong>, <strong>APISID</strong>, <strong>SSID</strong>, <strong>HSID</strong>, <strong>NID</strong>, <strong>PREF</strong>.</p>
				<p>Sirven para establecer varios identificadores ??nicos, salvo la cookie <strong>PREF</strong>, que es utilizada para mostrar las preferencias del zoom de los mapas.</p>
				<p>La cookie <strong>PREF</strong> tienen una duraci??n de un a??o. Las cookies <strong>SAPISID</strong>, <strong>APISID</strong>, <strong>SSID</strong>, <strong>HSID</strong>, <strong>SID</strong>, tienen una duraci??n de dos a??os. El resto son cookies de sesi??n, o que tienen una permanencia corta.</p>
				<p>Si desea obtener m??s informaci??n, visite el siguiente enlace: <a href="http://www.google.es/policies/privacy/" target="_blank">Pol??tica de Privacidad de Google</a>.</p>
				<p>Para m??s informaci??n sobre las cookies que utiliza google maps, puede visitar el siguiente enlace: <a href="http://www.google.com/policies/technologies/types/" target="_blank">Tecnolog??as de Google</a>.</p>
			<?php  $i++;
			} //end if $legal_gmaps
			if ($legal_gplus == 1 || $legal_facebook == 1 || $legal_twitter == 1 || $legal_linkedin == 1 ||$legal_pinterest || $legal_slideshare){ ?>
				<h4>4.3.<?php echo $i; ?> - Redes Sociales:</h4>
				<p>Las redes sociales tales como Facebook, Twitter, Google Plus, etc??? nos proveen botones a trav??s de los cuales podemos publicar contenidos directamente en ellas. Dichos botones tambi??n hacen uso de cookies para su funcionamiento.</p>
				<?php if ($legal_gplus == 1){ ?>
					<h6>Google Plus</h6>
					<p>Google se sirve de varias cookies para sus diferentes aplicaciones entre las que podemos observar "PREF", "NID", "GAPS", "LSID", "BEAT" o "ULS".</p>
					<p>Para m??s informaci??n sobre las cookies que utiliza Google Plus, puede visitar los siguientes enlaces: </p>
					<ul>
						<li><a href="http://www.google.com/policies/technologies/types/" target="_blank">Tecnolog??as de Google</a>.</li>
						<li><a href="http://www.google.es/intl/es-419/policies/technologies/types/" target="_blank">Tipos de cookies que Google usa</a>.</li>
					</ul>
				<?php } ?>
				<?php if ($legal_facebook == 1){ ?>
					<h6>Facebook</h6>
					<p>Facebook utiliza varias cookies como "locale", "reg_fb_gate" y "reg_fb_ref".</p>
					<p>Para m??s informaci??n sobre las cookies que utiliza Facebook, puede visitar los siguientes enlaces: </p>
					<ul>
						<li><a href="https://www.facebook.com/about/privacy/cookies" target="_blank">Pol??tica de Datos de Facebook</a>.</li>
						<li><a href="https://www.facebook.com/help/cookies/update" target="_blank">Cookies, p??xeles y otras tecnolog??as similares</a>.</li>
					</ul>
				<?php } ?>
				<?php if ($legal_twitter == 1){ ?>
					<h6>Twitter</h6>
					<p>Twitter utiliza varias cookies como "guest_id", "_twitter_sess", "k" y "original_referer".</p>
					<p>Para m??s informaci??n sobre las cookies que utiliza Twitter, puede visitar los siguientes enlaces: </p>
					<ul>
						<li><a href="https://twitter.com/privacy?lang=es" target="_blank">Pol??tica de Privacidad de Twitter</a>.</li>
						<li><a href="https://support.twitter.com/articles/20170521-el-uso-que-hace-twitter-de-cookies-y-tecnologias-similares" target="_blank">El uso que hace Twitter de cookies y tecnolog??as similares</a>.</li>
					</ul>
				<?php } ?>
				<?php if ($legal_linkedin == 1){ ?>
					<h6>LinkedIn</h6>
					<p>Para m??s informaci??n sobre las cookies que utiliza LinkedIn, puede visitar los siguientes enlaces: </p>
					<ul>
						<li><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank">Pol??tica de Privacidad de LinkedIn</a>.</li>
						<li><a href="https://www.linkedin.com/legal/cookie-policy" target="_blank">Pol??tica de cookies de LinkedIn</a>.</li>
					</ul>
				<?php } ?>
				<?php if ($legal_pinterest == 1){ ?>
					<h6>Pinterest</h6>
					<p>Pinterest utiliza una cookie llamada "_pinterest_cm".</p>
					<p>Para m??s informaci??n sobre las cookies que utiliza Pinterest, puede visitar los siguientes enlaces: </p>
					<ul>
						<li><a href="https://about.pinterest.com/es/privacy-policy" target="_blank">Pol??tica de Privacidad de Pinterest</a>.</li>
					</ul>
				<?php } ?>
			<?php  $i++;
			} //end if $legal social
			if ($legal_youtube == 1){ ?>                
				<h4>4.3.<?php echo $i; ?> - YouTube:</h4>
				<p>Youtube almacena informaci??n para poder generar estad??sticas sobre las visitas de videos incrustados en otras p??ginas.</p>
				<p>Las siguientes cookies son generadas a trav??s de Youtube:</p>
				<p>La cookie <strong>YSC</strong> contiene un identificador ??nico para permitir el control de visitas a videos de Youtube y expira al finalizar la sesi??n (cierre de la pesta??a o del navegador).</p>
				<p>La cookie <strong>VISITOR_INFO1_LIVE</strong> contiene un identificador ??nico para permitir el control de visitas a videos de Youtube y expira a los 9 meses.</p>
				<p>La cookie <strong>PREF</strong> contiene datos sobre preferencias de visualizaci??n y expira a los 2 a??os.</p>
				<p>Si desea obtener m??s informaci??n, visite el siguiente enlace: <a href="http://www.google.es/policies/privacy/" target="_blank">Pol??tica de Privacidad de Google</a>.</p>
			<?php  $i++;
			} //end if $legal_youtube	
			if ($legal_vimeo == 1){ ?>                
				<h4>4.3.<?php echo $i; ?> - Vimeo:</h4>
				<p>Vimeo es una red social basada en videos que permite compartir y almacenar videos digitales para que los usuarios comenten en la p??gina de cada uno de ellos.</p>
				<p>Vimeo se sirve de una serie de cookies tanto para su funcionamiento como para el an??lisis de su utilizaci??n con google analytics (<strong>"__utma", "__utmb", "__utmc", "__utmz"</strong>).</p>
				<p>Entre las cookies propias de Vimeo podemos observar <strong>"aka_debug"</strong>, <strong>"a"</strong> y <strong>"pl_volume"</strong>.</p>
				<p>En la <a href="https://vimeo.com/cookie_policy" target="_blank">P??gina de cookies de Vimeo</a> podemos observar la finalidad de cada una de ellas.</p>
			<?php  $i++;
			} //end if $legal_vimeo	
			if ($legal_slideshare == 1){ ?>                
				<h4>4.3.<?php echo $i; ?> - Slideshare:</h4>
				<p>Para m??s informaci??n sobre las cookies que utiliza Slideshare, puede visitar los siguientes enlaces: </p>
				<ul>
					<li><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank">Pol??tica de Privacidad de LinkedIn</a>.</li>
					<li><a href="https://www.linkedin.com/legal/cookie-policy" target="_blank">Pol??tica de cookies de LinkedIn</a>.</li>
				</ul>
			<?php  $i++;
			} //end if $legal_vimeo	
		} // end if cookies terceros ?>
		<h3>4.4.- Desactivaci??n de cookies.</h3>
		<h4>El usuario podr?? en cualquier momento elegir qu?? cookies quiere que funcionen en este sitio web mediante:</h4>
		<h6>a) La configuraci??n del navegador:</h6>
		<ul>
			<li><em>Navegador Chrome</em>: <a href="https://support.google.com/accounts/answer/61416?hl=es" target="_blank" class="wordwrap">https://support.google.com/accounts/answer/61416?hl=es</a></li>
			<li><em>Navegador Internet Explorer</em>: <a href="http://windows.microsoft.com/es-es/windows-vista/block-or-allow-cookies" target="_blank" class="wordwrap">http://windows.microsoft.com/es-es/windows-vista/block-or-allow-cookies</a></li>
			<li><em>Navegador Firefox</em>: <a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we" target="_blank" class="wordwrap">https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we</a></li>
			<li><em>Navegador Safari</em>: <a href="http://support.apple.com/kb/HT1677?viewlocale=es_ES" target="_blank" class="wordwrap">http://support.apple.com/kb/HT1677?viewlocale=es_ES</a></li>
			<li><em>Navegador Opera</em>: <a href="http://help.opera.com/Windows/11.50/es-ES/cookies.html" target="_blank" class="wordwrap">http://help.opera.com/Windows/11.50/es-ES/cookies.html</a></li>
		</ul>
		<h6>b) Herramientas de terceros:</h6>
		<p>Otras herramientas de terceros, disponibles on line, que permiten a los usuarios detectar las cookies en cada sitio web que visita y gestionar su desactivaci??n, por ejemplo, Ghostery.</p>
		<ul>
			<li><a href="http://www.ghostery.com" target="_blank">http://www.ghostery.com</a></li>
		</ul>
		<p><em>NOTA IMPORTANTE: </em> En caso de bloquear el uso de cookies en su navegador es posible que algunos servicios o funcionalidades de la p??gina Web no est??n disponibles.</p>
	</section>
	<a name="a_beacon" id="a_beacon"></a>
	<section>
		<h2>5.- Web beacons</h2>
		<p>Este sitio puede albergar tambi??n web beacons (tambi??n conocidos por web bugs).</p>
		<h4>??Qu?? es un web beacon?</h4>
		<p>Los web beacons suelen ser peque??as im??genes de un pixel por un pixel, visibles o invisibles colocados dentro del c??digo fuente de las p??ginas web de un sitio. Los Web beacons sirven y se utilizan de una forma similar a las cookies. Adem??s, los web beacons suelen utilizarse para medir el tr??fico de usuarios que visitan una p??gina web y poder sacar un patr??n de los usuarios de un sitio. Dispone de m??s informaci??n sobre los web beacons en <a href="http://es.wikipedia.org/wiki/Web_bug" target="_blank"> Wikipedia</a>.</p>
	<a name="a_datos" id="a_datos"></a>
	<section>
		<h2>6.- Protecci??n de datos personales</h2>
<?php if ($proteccion_datos == 1){?>
	<p>De conformidad con lo establecido en el <a href="http://www.boe.es/buscar/doc.php?id=BOE-A-1999-23750" target="_blank" title="Ley Org??nica 15/1999">Art. 5 de la Ley Org??nica 15/1999 de diciembre de Protecci??n de Datos de Car??cter Personal</a>, por el que se regula el derecho de informaci??n en la recogida de datos le informamos de los siguientes extremos:</p>
	<ul>
		<li>Los datos de car??cter personal que nos ha suministrado en esta y otras comunicaciones mantenidas con usted ser??n objeto de tratamiento en los ficheros responsabilidad de <strong><?php echo $empresa_nombre_legal; ?></strong>.</li>
		<li>La finalidad del tratamiento de datos es la de gestionar de forma adecuada la comunicaci??n y la prestaci??n de servicios. Asimismo estos datos no ser??n cedidos a terceros, salvo las cesiones legalmente permitidas.</li>
		<li>Los datos solicitados a trav??s de esta y otras comunicaciones son de suministro necesario para la comunicaci??n y prestaci??n de servicios. Estos son adecuados, pertinentes y no excesivos.</li>
		<li>Asimismo, le informamos de la posibilidad de ejercitar los correspondiente derechos de acceso, rectificaci??n, cancelaci??n y oposici??n de conformidad con lo establecido en la Ley 15/1999 ante <em><?php echo $empresa_nombre_legal; ?></em> como responsables del fichero.</li>
	</ul>
	<p><em>Los derechos mencionados los puede ejercitar a trav??s de los siguientes medios:</em></p>
	<ul>
		<li>Mediante email <?php echo '<a href="mailto:' . antispambot( $empresa_email ) . '">' . antispambot( $empresa_email ) . '</a>'; ?></li>
		<?php if ($empresa_telefono != ''){ echo '<li><strong>Por tel??fono: </strong> ' . $empresa_telefono . '</li>'; }?>
		<?php if ($empresa_direccion != ''){ echo '<li><strong>' . $empresa_nombre_legal . '</strong>: ' . $empresa_direccion . '</li>'; }?>
	</ul>
<?php  }else{?>
	<p>El prestador no almacena datos de car??cter personal de los clientes.</p>
<?php  } //end if Proteccion Datos ?>
	</section>
	<section>
		<h2>7.- Pol??tica anti-spam</h2>
		<p>El prestador se declara completamente en contra del env??o de comunicaciones comerciales no solicitadas y a cualquier tipo de conducta o manifestaci??n conocida como <em>spam</em>, asimismo se declara comprometido con la lucha contra este tipo de pr??cticas abusivas.</p>
		<p>Por tanto, el prestador garantiza al usuario a que bajo ning??n concepto los datos personales recogidos en el sitio web (en el caso de ser recogidos) ser??n cedidos, compartidos, transferidos, ni vendidos a ning??n tercero.</p>
		<p>El usuario puede ponerse en contacto con nosotros a trav??s del formulario de contacto o en su defecto, por el email proporcionado en las presentes condiciones legales, tanto para comunicarse con nosotros como para informar de cualquier irregularidad.</p>
	</section>
	<section>
		<h2>8.- Alojamiento de datos</h2>
		<p>Por razones t??cnicas y de calidad de servicio, el sitio web  <strong><?php echo $url_nombre; ?></strong> se encuentra alojado en los servidores de la empresa <strong><?php echo $hosting; ?></strong>. La empresa tiene su domicilio social en <i><?php echo $hosting_dir; ?></i>.</p>
		<h4>M??s informaci??n:</h4>
		<ul>
			<li><a href="<?php echo $hosting_url; ?>" target="_blank"><?php echo $hosting_url; ?></a></li>
			<li><a href="<?php echo $hosting_legal; ?>" target="_blank"><?php echo $hosting_legal; ?></a></li>
		</ul>
	</section>
	<section>
		<h2>9.- Propiedad Intelectual y uso de los contenidos</h2>
		<p>El sitio web <strong><?php echo $url_nombre; ?></strong>, incluyendo a t??tulo enunciativo pero no limitativo su programaci??n, edici??n, compilaci??n y dem??s elementos necesarios para su funcionamiento, los dise??os, logotipos, texto y/o gr??ficos son propiedad del prestador o en su caso dispone de licencia o autorizaci??n expresa por parte de los autores.
		<p>Cualquier uso no autorizado previamente por parte del prestador ser?? considerado un incumplimiento grave de los derechos de propiedad intelectual o industrial del autor.</p>
		<p>Los dise??os, logotipos, texto y/o gr??ficos ajenos al prestador y que pudieran aparecer en el sitio web, pertenecen a sus respectivos propietarios, siendo ellos mismos responsables de cualquier posible controversia que pudiera suscitarse respecto a los mismos. En todo caso, el prestador cuenta con la autorizaci??n expresa y previa por parte de los mismos.</p>
		<p>Para realizar cualquier tipo de observaci??n respecto a posibles incumplimientos de los derechos de propiedad intelectual o industrial, as?? como sobre cualquiera de los contenidos del sitio web, puede hacerlo a trav??s del formulario de contacto que se mantiene en el sitio web.</p>
	</section>
	<section>
		<h2>10.- Ley Aplicable y Jurisdicci??n</h2>
		<p>Para la resoluci??n de todas las controversias o cuestiones relacionadas con el presente sitio web o de las actividades en ??l desarrolladas, ser?? de aplicaci??n la <em>Legislaci??n Espa??ola</em>, a la que se someten expresamente las partes.</p>
	</section>
<div class="clearboth"></div>
</section>
<?php ?>