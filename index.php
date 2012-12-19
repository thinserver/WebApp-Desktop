<html>

<head>
	<title>Kanzleiserver</title>
	<style>
		body			{
					background-color:		#F3F3F3;
					background-image:		url('Desktop/curve.png');
					background-repeat:		no-repeat;
					background-size:		100% 100%;
					}
		button		{
					cursor:				pointer;
					width:				100px;
					}
		button img	{
					padding:				none;
					margin:				none;
					width:				85;
					height:				85;
					/*box-shadow:			2px 2px 5px darkgray;*/
					}
		div.menu		{
					width:				450px;
					left:					30%;
					top:					25%;"
					}
	</style>
</head>

<body>
<table style="border: none; width: 100%; height: 100%; padding: none; margin: none;">
	<tr style="width: 100%;">
		<td align=center style="width: 100%; vertical-align: middle;">
			<div class=menu id=menu>
				<font size=17 color="#202020" style="text-decoration:none; text-shadow: 2px 2px 5px darkgray;">Kanzleiserver</font>
				<hr/>
				Willkommen, <?php
							$values = [];
							foreach (explode('/', $_SERVER['SSL_CLIENT_S_DN']) as $definition) {
								$e = explode('=', $definition);
								if ($e[0] != '')
									$values[ $e[0] ] = $e[1];
								}
							#print_r($values);
							if (array_key_exists('CN', $values))
								$friendlyName = $values['CN'];
							else	$friendlyName = 'Unbekannter';
							echo $friendlyName;
							?> !<br/><br/>
				<button onclick="window.location.href='/OpenLawyers/';">
					<img src="Desktop/OpenLawyers.png"/><br/>
					OpenLawyers
				</button>
				<button onclick="window.location.href='/LawyerWiki/index.php/Kategorie:Portal';">
					<img src="Desktop/Puzzle.png"/><br/>
					Wiki
				</button>
				<button onclick="window.location.href='/LawyerCloud/';">
					<img src="Desktop/ownCloud.png"/><br/>
					ownCloud
				</button>
				<button onclick="window.location.href='/WebSC/';">
					<img src="Desktop/keycard.png"/><br/>
					WebSC
				</button>
			</div>
			<!--div class=shadow id=shadow></div-->
		</td>
	</tr>
</table>
</body>

</html>