<?php
	
	function SiteHeader( )
	{
		echo '<div id="header">';
		echo "	Red Ring Rico's Game Programming Web Zone!";
		echo '	<p style="font-size: 18px">';
		echo '		<a href="weblog">Web Log</a> <b>|</b> <a href="projects">Projects</a> <b>|</b> <a href="https://www.github.com/RedRingRico">GitHub</a>';
		echo '	</p>';
		echo '</div>';
	}

	function SiteFooter( )
	{
		echo '<div id="footer">';
		echo "	Copyright ".date( 'Y' )." Rico";
		echo '</div>';
	}
?>
