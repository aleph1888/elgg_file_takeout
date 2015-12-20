
<p>Hi,</p><p><strong>Elgg_backup</strong> plugin status note:</p><p>&nbsp;</p><h2 style="font-style: italic;">What is done?</h2><p>&nbsp;</p><ul><li>It has been forked <a href="https://github.com/aleph1888/elgg_file_takeout/" rel="nofollow">file_takeout.</a></li>
	<li><a rel="nofollow" href="https://github.com/aleph1888/elgg_file_takeout/blob/elgg_backup/file_takeout/views/default/plugins/file_takeout/settings.php">Plugin settings</a> has been edited with two new fields:<span style="color: #000000;"><span style="background-color: #FFD700;">Python directory and Uzta directory.</span></span> So site admin can configure Python execution from PHP.</li>
	<li><a rel="nofollow" href="https://github.com/aleph1888/elgg_file_takeout/blob/elgg_backup/file_takeout/views/default/plugins/file_takeout/usersettings.php">Plugin user settings</a> has been edited so user can decide if it is wanted a "remote lorea backup", so fields: <span style="background-color: #FFD700;">Remote Lorea url, user and password</span>.</li>
	<li>Main <a rel="nofollow" href="https://github.com/aleph1888/elgg_file_takeout/blob/elgg_backup/file_takeout/file_takeout.php">file_takout</a> class has been edited so <span style="background-color: #FFFF00;">its behaviour switches on wether inhabitant wants a "local" or a "remote" backup</span>. And then launches accurate process, by giving instant downloadable links if "local" and by giving a future link if "remote" (<strong>Note</strong>: that <span style="background-color: #FFD700;">we use default Elgg file folder to output </span><strong>only one</strong> remote downloadable zip called <em>/remote_lorea_name/uzta.zip)</em></li>
</ul><p>&nbsp;</p><h2 style="font-style: italic;">What is left?</h2><p>&nbsp;</p><ul><li>Some admin should install this plugin on 1.12 and some coder finish to refactor 1.8 pending warnings.</li>
	<li>Some admin should install Utza on Lamp. And set proper settings on plugin.</li>
	<li>Better Uzta ready notification when zipping process is done.</li>
	<li>Better remote Loreas settings, by adding an array of sites instead of single site strings. And so on when retrieving pending links.</li>
	<li>Better local backup by doing recursive for subpages.</li>
	<li>Better local backup by adding other missed entities.</li>
</ul><p>&nbsp;</p><h2 style="font-style: italic;">What is right?</h2><p>&nbsp;</p><ul><li>To encrypt zip files with lorea-gpg plugin.</li>
	<li>To install webservices on Lorea remote potentials and access through API.</li>

</ul>

elgg_file_takeout
=================

This Elgg plugin lets users take out all their group/personal files from Elgg in an archived ZIP file.

See the official Elgg plugin site for more information about this plugin. http://community.elgg.org/plugins/1602047/1.0/file-takeout
