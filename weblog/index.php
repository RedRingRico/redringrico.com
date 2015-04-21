<?php require_once( '../common/site.php' ) ?>
<html>
	<head>
		<title>Red Ring Rico's Game Programming Web Zone</title>
		<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
		<link href="../common/default.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="content">
			<?php SiteHeader( ); ?>

			<div id="body">
				<table style="width:100%">
					<tr style="background-color:#BB0000; font-size:18px">
						<td>Finally updating the website</td>
						<td style="text-align:right">21|04|2015 @801</td>
					</tr>
					<tr style="background-color:#770000; font-size:14px">
						<td colspan="2">
							It's been almost a year since I started this site, and I'm embarrassed that I've let it decay for so long.
							At the moment the site is completely static, the web log entries are edited and sent to the web server on the same page, instead of getting them from a database.
							I have been reading a few website design and implementation books, mostly concerning JavaScript and PHP, which I'm rusty on.
							My current goals are to make the web log entries easy to edit and create, get the Projects page showing a real game that I'm working on, and move my repositories from GitHub over here.
							I want to get at least an initial web log system finished by the weekend.
							Creating permalinks for web log entries, tags, and an archive view will most likely not be functional by the weekend.
							A system for me to authenticate myself and post/edit entries will most likely be completed, though.
							Unfortunately, this will put a few things on hold, such as the SEGA Saturn SDK, and my current game project, Killer.
							<br/>
							<br/>
							About a month after I posted the first entry, <i>Repairing a SEGA Dreamcast Dev. Box [HKT-01] - Part 1</i>, I finished and fixed the development kit.
							The entry after this one (using the new web log system) will be about that.
						</td>
					</tr>
					<tr>
						<td colspan="2" style="background-color:#AA0000; font-size:14px">
							Tags: <a href="">Site updates</a>
						</td>
					</tr>
					<tr style="background-color:#BB0000; font-size:18px">
						<td>Repairing a SEGA Dreamcast Dev. Box [HKT-01] - Part 1</td>
						<td style="text-align:right">17|07|2014 @647</td>
					</tr>
					<tr style="background-color:#770000; font-size:14px">
						<td colspan="2">
							I recently took possession of a SEGA Dreamcast Development Kit [HKT-01].  While this is pretty good in itself, there is one problem; the front control panel is broken.
							Unfortunately, it looks like this may have happened during shipping; though the DIP switch is peculiar, as it looks as if it had been bent downward with the pins unsheathed, then the switch had been pushed back into place with the exposed pins under the back instead of inside the switch.
							In any case, the rotarty switch has broken clean off, the DIP switch is severed on one side (right now, I've taken the DIP switch off the board), and the slide switch is bent downward.
							I tried booting the box while I thought the only issue was the rotary switch, as the DIP switch didn't look broken until I checked it out later, in the hopes that it would possibly use zero (luckily, Japan is zero) for the country selection.
							When it booted, nothing was displayed via the VGA port (DIP switch configuration: 0:on 1:on 2:off 3:off for VGA output), the hard disk light flickerd, then turned off, the GD-ROM light remained on until I turned the unit off.
							With this failure, I thought it could be that the SCSI terminators which weren't connected were the culprit.
							Alas, this was not the case.  The active light came on for the GD-Writer port, but not for the SCSI-B port.
							<br/>
							<br/>
							By this point, I was committed to getting the only component that I thought I needed; the rotary switch.
							I decided to try and take a look inside the development kit to discern if anything else was amiss.
							I'm glad I did, as I didn't notice the slide switch was bent downward, so that was another part I needed.
							After about 20 minutes carefully looking around inside the unit, I decided not to continue inward, lest I break something vital.
							When I checked out the DIP switch, I manipulated all the switches into the off position, which is when the component rotated toward the bottom.
							Then there were three components I needed to get.
							<br/>
							<br/>
							<!-- REMINDER Add the images and the components list here -->
							After the parts arrived (which was a Tuesday, I received the development kit on the Friday prior), there was one missing; the solder wick.
							This wasn't much of a problem, as it was a part that had to come from America (for some reason there was no EU or UK stock), and it arrived the following day.
							For those who don't do much electronic work (myself included), solder wick or solder braid is a copper wire mesh which soaks up the solder when heat is applied to it from a soldering iron.
							I have needed to desolder only a few components in my lifetime; when I installed an Xecuter X3 modchip into an Xbox, a floppy disk power connector which needed re-soldering, and a few resistors from my monitor which had failed.
							While I may not be new to desoldering, I am still not experienced.
							Anyway, onto the point; I started desoldering the components from the PCB and could only get a small amount of solder to attach to the solder wick.
							After a solid four hours of trying different techniques, adding flux, solder, removing said solder with a bit of the original, nothing was working.
							At around 00:00, I decided to call it a day and started looking for a better soldering iron.
							I have two soldering irons, the type that are plugged directly into the mains socket.
							One of the irons is a 15W with a small tip attached and it came with a large flat tip, the other is a 25W with a well tip.
							There are a few problems with this, mainly that I have no idea how hot the iron actually gets, and that the tips are near impossible to remove and replace.
							I tried for a solid ten minutes to remove the smaller tip from the 15W iron, but it would not move, the 25W iron tip comes off much easier, but the flat tip that came with the 15W won't fit it.
							At around 02:00, I bought an entry-level soldering station, more solder braid varieties (1.5mm [two brands], and a 0.9mm), some flux remover, and a desoldering gun (just the vacuum gun, not an iron+extractor).
							That was around 14 hours ago.
							Hopefully by tomorrow night, I should be able to desolder the components and install the new ones.
						</td>

					</tr>
					<tr>
						<td colspan="2" style="background-color:#AA0000; font-size:14px">
							Tags: <a href="">Dreamcast</a>
						</td>
					</tr>
				</table>
			</div>

			<?php SiteFooter( ); ?>
	</body>
</html>
