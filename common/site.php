<?php
	
	function SiteHeader( )
	{
		echo '<div id="header">';
		echo '	<div id="headerlink"><a href="/">Red Ring Rico\'s Game Programming Web Zone!</a></div>';
		echo '	<p style="font-size: 18px">';
		echo '		<a href="/weblog">Web Log</a> <b>|</b> <a href="/projects">Projects</a> <b>|</b> <a href="https://www.github.com/RedRingRico">GitHub</a>';
		echo '	</p>';
		echo '</div>';
	}

	function SiteFooter( )
	{
		echo '<div id="footer">';
		echo "<table style='width:100%'>";
		echo "	<tr>";
		echo "		<td>";
		echo "			Copyright ".date( 'Y' )." Rico";
		echo "		</td>";
		echo "		<td style='text-align:right'>";
		echo "			Git Version: ".file_get_contents("gitver");
		echo "		</td>";
		echo "	</tr>";
		echo "</table>";
		echo '</div>';
	}
?>
