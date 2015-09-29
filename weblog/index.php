<?php require_once( '../common/site.php' ) ?>
<?php require_once( '../common/database.php' ) ?>
<html>
	<head>
		<title>Red Ring Rico's Game Programming Web Zone | Web Log</title>
		<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
		<link href="../common/default.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="content">
			<?php SiteHeader( ); ?>

			<div id="body">
				<?php
					$WebLogConnection = new mysqli( MYSQL_HOST, WEBLOG_USER, WEBLOG_PASSWORD, WEBLOG_DB );
					if( $WebLogConnection->connect_error )
					{
						echo "<p>[ERROR] Failed to connect to database</p>";
					}

					$SelectQuery = "SELECT Title, Body, DATE_FORMAT( Date, '%M | %d | %Y | ' ), Date, Date AS date FROM Entry ORDER BY Date DESC LIMIT 10";

					if( $Result = $WebLogConnection->query( $SelectQuery ) )
					{
						while( list( $Title, $Body, $Date, $BDate ) = ( $Row = $Result->fetch_row( ) ) )
						{
							// Convert the stored string to HTML-compatible ones
							// TODO
							//	Create a function for this!

							// Handle return lines and commas
							$StrLen = strlen( $Body );
							$NewBody = "";
							$NewTitle = "";

							for( $c = 0; $c < $StrLen; $c++ )
							{
								$Char = $Body[ $c ];

								// Insert a line break
								if( strcmp( $Char, "\r" ) === 0 )
								{
									$c++;
									$Char = $Body[ $c ];
									if( strcmp( $Char, "\n" ) === 0 )
									{
										$NewBody .= "<br/>";
									}
								}
								// Replace < with &lt
								else if( strcmp( $Char, "<" ) === 0 )
								{
									$NewBody .= "&lt";
								}
								// Replace > with $gt
								else if( strcmp( $Char, ">" ) === 0 )
								{
									$NewBody .= "&gt";
								}
								// URI tags (no image support, yet)
								else if( strcmp( $Char, "[" ) === 0 )
								{
									$c++;
									$URIBuff = "";
									$URIChar = $Body[ $c ];
									$URI = "";
									$CharItr = $c;
									$URILen = strlen( $Body );
									// 0 == [uri]URI[/uri]
									// 1 == [uri=URI]Text[/uri]
									$URIType = 0;
									while( $CharItr != $URILen )
									{
										$URIChar = $Body[ $CharItr ];
										if( strcmp( $URIChar, "]" ) === 0 )
										{
											$URIType = 0;
											break;
										}
										if( strcmp( $URIChar, "=" ) === 0 )
										{
											$URIType = 1;
											break;
										}
										$URIBuff .= $URIChar;
										$CharItr++;
									}
									/*
									while( ( strcmp( $URIChar, "]" ) !== 0 ) &&
										( strcmp( $URIChar, "=" ) !== 0 ) )
									{
										$URIBuff .= $URIChar;
										$CharItr++;
										$URIChar = $Body[ $CharItr ];

										echo "$URIChar<br/>";

										echo "$URIBuff<br/>";
									}*/

									/*for( $BC = 0; $BC < 3; $BC++ )
									{
										$URIBuff .=$Body[ $c + $BC ];
									}*/

									// URI?
									if( strcmp( $URIBuff, "uri" ) === 0 )
									{
										// Replace with <a href
										$NewBody .= "<a href='";

										// Skip the "uri"
										$c += 3;

										switch( $URIType )
										{
											case 0:
											{
												$c++;
												// Read the URI
												$URIBuff = "";
												$URIChar = $Body[ $c ];
												$URI = "";
												$CharItr = $c;
												$URILen = strlen( $Body );
												while( $CharItr != $URILen )
												{
													$URIChar = $Body[ $CharItr ];
													if( strcmp( $URIChar, "[" ) === 0 )
													{
														break;
													}
													$URIBuff .= $URIChar;
													$CharItr++;
												}
												// Replace with </a>
												$NewBody .= "$URIBuff'>$URIBuff</a>";

												$c += strlen( $URIBuff );

												// Skip the "[/uri]"
												$c += 6;

												// Get the end ']'
												/*$URIStr = substr( $Body, $c, $StrLen - $c );
												$URILen = strlen( $URIStr );

												// Skip over the block
												for( $URIItr = 0; $URIItr < $URILen; $URIItr++ )
												{
													if( strcmp( $URIStr[ $URIItr ], "]" ) === 0 )
													{
														break;
													}
													else
													{
														$c++;
													}
												}*/
												break;
											}
											case 1:
											{
												// Skip the =
												$c++;
												// Read the URI
												$URIBuff = "";
												$URIChar = $Body[ $c ];
												$URI = "";
												$CharItr = $c;
												$URILen = strlen( $Body );
												while( $CharItr != $URILen )
												{
													$URIChar = $Body[ $CharItr ];
													if( strcmp( $URIChar, "]" ) === 0 )
													{
														break;
													}
													$URIBuff .= $URIChar;
													$CharItr++;
												}

												$NewBody .= "$URIBuff'>";
												$c += strlen( $URIBuff );

												$URIBuff = "";
												$CharItr++;

												while( $CharItr != $URILen )
												{
													$URIChar = $Body[ $CharItr ];

													if( strcmp( $URIChar, "[" ) === 0 )
													{
														break;
													}
													$URIBuff .= $URIChar;
													$CharItr++;
												}

												// Replace with </a>
												$NewBody .= "$URIBuff</a>";

												$c += strlen( $URIBuff );

												// Skip the "[/uri]"
												$c += 6;

												// Get the end ']'
												/*$URIStr = substr( $Body, $c, $StrLen - $c );
												$URILen = strlen( $URIStr );

												// Skip over the block
												for( $URIItr = 0; $URIItr < $URILen; $URIItr++ )
												{
													if( strcmp( $URIStr[ $URIItr ], "]" ) === 0 )
													{
														break;
													}
													else
													{
														$c++;
													}
												}*/

												break;
											}
										}
									}
								}
								// Normal character
								else
								{
									$NewBody .= $Char;
								}
							}

							$StrLen = strlen( $Title );

							for( $c = 0; $c < $StrLen; $c++ )
							{
								$Char = $Title[ $c ];
								
								// Comma
								if( ( strcmp( $Char, "\\" ) === 0 ) &&
									( strcmp( $Title[ $c+1 ], "'" ) === 0 ) )
								{
									$c++;
									$NewTitle .= "'";
								}
								// Normal character
								else
								{
									$NewTitle .= $Char;
								}
							}

							echo "<p>\n";
							echo "\t\t\t\t<b>\n";
							echo "\t\t\t\t\t<table style='border:0px;padding:0px;width:100%'>\n";
							echo "\t\t\t\t\t\t<tr style='background-color:#BB0000; font-size:18px'>\n";
							echo "\t\t\t\t\t\t\t<td>\n";
							echo "\t\t\t\t\t\t\t\t$NewTitle\n";
							echo "\t\t\t\t\t\t\t</td>\n";
							echo "\t\t\t\t\t\t\t<td style='font-size:14px;text-align:right;'>\n";
							echo "\t\t\t\t\t\t\t\t[ $Date@".date( "B", strtotime( $BDate ) )." ]\n";
							echo "\t\t\t\t\t\t\t</td>\n";
							echo "\t\t\t\t\t\t</tr>\n";
							echo "\t\t\t\t\t\t<tr style='background-color:#770000; font-size:14px'>\n";
							echo "\t\t\t\t\t\t\t<td colspan='2'>\n";
							echo "\t\t\t\t\t\t\t\t$NewBody\n";
							echo "\t\t\t\t\t\t\t</td>\n";
							echo "\t\t\t\t\t\t</tr>\n";
							echo "\t\t\t\t\t</table>\n";
							echo "\t\t\t\t</b>\n";
							echo "\t\t\t\t</p>\n";
						}

						$Result->close( );
					}
					else
					{
						echo $WebLogConnection->error;
						echo "<p>[ERROR] Failed to acquire web log entries</p>";
					}
					$WebLogConnection->close( );
				?>
			</div>

			<?php SiteFooter( ); ?>
	</body>
</html>
