<?php require_once( '../common/site.php' ) ?>
<html>
	<head>
		<title>Red Ring Rico's Game Programming Web Zone | Projects</title>
		<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
		<link href="../common/default.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="content">
			<?php SiteHeader( ); ?>

			<div id="body">
				<!--<div style="font-size:20px">
					Category: <a href="" style="font-size:20px">Game</a> | <a href="" style="font-size:20px">Tech Demo</a> | <a href="" style="font-size:20px">Tool</a> | <a href="" style="font-size:20px">Engine</a>
				</div>-->
				<table style="width:750px">
					<tr style="background:#600000">
						<!-- Main category / sub-category -->
						<td colspan="2" style="font-size:20px">Tool // SDK</td>
					</tr>
					<tr style="background:#730000">
						<!-- Title -->
						<td colspan="2">SEGA Saturn SDK</td>
					</tr>
					<tr style="background:#600000">
						<!-- A small thumbnail of a screenshot/logo -->
						<td><img src="sssdk/thumbnail.png" width=128 height=128/></td>
						<!-- Description -->
						<td style="vertical-align:text-top;">
							The SEGA Saturn SDK (SSSDK) is a Free and Open Source software development kit for developing games on the SEGA Saturn.
							<br/>
							<a href="https://saturnsdk.github.io">Website</a>
						</td>
					</tr>
					<tr style="background:#730000">
						<td colspan="2">
							<table style="width:100%">
								<tr>
									<td>Source Code Repositories</td>

									<td>GNU/Linux 32-bit</td>
									<td>GNU/Linux 64-bit</td>
									<td>Windows 32-bit</td>
									<td>Windows 64-bit</td>
								</tr>
								<tr>
									<td><a href="https://github.com/SaturnSDK/Saturn-SDK-GCC-SH2">GCC for SH-2</a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gcc_sh2_elf_linux_i686'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gcc_sh2_elf_linux_i686/badge/icon'></a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gcc_sh2_elf_linux_x86_64'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gcc_sh2_elf_linux_x86_64/badge/icon'></a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gcc_sh2_elf_w64-mingw32_i686'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gcc_sh2_elf_w64-mingw32_i686/badge/icon'></a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gcc_sh2_elf_w64-mingw32_x86_64'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gcc_sh2_elf_w64-mingw32_x86_64/badge/icon'></a></td>
								</tr>
								<tr>
									<td><a href="https://github.com/SaturnSDK/Saturn-SDK-GNU-Make">GNU Make</a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gnu_make_linux_i686/'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gnu_make_linux_i686/badge/icon'></a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gnu_make_linux_x86_64/'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gnu_make_linux_x86_64/badge/icon'></a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gnu_make_w64-mingw32_i686/'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gnu_make_w64-mingw32_i686/badge/icon'></a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gnu_make_w64-mingw32_x86_64/'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_gnu_make_w64-mingw32_x86_64/badge/icon'></a></td>
								</tr>
								<tr>
									<td><a href="https://github.com/SaturnSDK/Saturn-SDK-IDE">Code::Blocks IDE</a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_ide_linux_i686'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_ide_linux_i686/badge/icon'></a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_ide_linux_x86_64'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_ide_linux_x86_64/badge/icon'></a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_ide_windows_i686'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_ide_windows_i686/badge/icon'></a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_ide_windows_x86_64'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_ide_windows_x86_64/badge/icon'></a></td>
								</tr>
								<tr>
									<td><a href="https://github.com/SaturnSDK/Saturn-SDK-MSYS2">MSYS 2</a></td>
									<td colspan=2/>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_msys2_w64-mingw32_i686/'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_msys2_w64-mingw32_i686/badge/icon'></a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_msys2_w64-mingw32_x86_64/'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_msys2_w64-mingw32_x86_64/badge/icon'></a></td>
								</tr>
								<tr>
									<td><a href="https://github.com/SaturnSDK/Saturn-SDK-Installer">Installer</a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_installer_linux_i686/'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_installer_linux_i686/badge/icon'></a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_installer_linux_x86_64/'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_installer_linux_x86_64/badge/icon'></a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_installer_w64-mingw32_i686/'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_installer_w64-mingw32_i686/badge/icon'></a></td>
									<td><a href='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_installer_w64-mingw32_x86_64/'><img src='https://ci.opengamedevelopers.org/view/SEGA%20Saturn%20SDK/job/sega_saturn_sdk_installer_w64-mingw32_x86_64/badge/icon'></a></td>
								</tr>
							</table>
						</td>
					</br>
					<tr style="background:#600000">
						<td style="vertical-align:text-top">
							<a href="https://saturnsdk.github.io/samples.html">Videos</a> (External site)
						</td>
						<td>
							Download
							<br/>
							<a href="ftp://ftp.opengamedevelopers.org/saturn-sdk/installer/SEGA-Saturn-SDK_i686-pc-linux-gnu_alpha_latest.run">GNU/Linux 32-bit</a>
							<br/>
							<a href="ftp://ftp.opengamedevelopers.org/saturn-sdk/installer/SEGA-Saturn-SDK_x86_64-pc-linux-gnu_alpha_latest.run">GNU/Linux 64-bit</a>
							<br/>
							<a href="ftp://ftp.opengamedevelopers.org/saturn-sdk/installer/SEGA-Saturn-SDK_i686-w64-mingw32_alpha_latest.exe">Windows 32-bit</a>
							<br/>
							<a href="ftp://ftp.opengamedevelopers.org/saturn-sdk/installer/SEGA-Saturn-SDK_x86_64-w64-mingw32_alpha_latest.exe">Windows 64-bit</a>
						</td>
					</tr>
					<!--<tr style="background:#730000">
						<td colspan="2">Tags: <a href="">Fun</a>, <a href="">Game</a>, <a href="">Questionable Physics</a></td>
					</br>-->
					<tr style="background:#600000">
						<!-- Platforms -->
						<td colspan="2">Platforms: GNU/Linux, Windows</td>
					</tr>
				</table>
			</div>

			<?php SiteFooter( ); ?>
	</body>
</html>
