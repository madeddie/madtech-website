<?php

// HTML Resume Template in PHP
// version 2.2, 2006-08-06
//
// Copyright (c) 2002-2006 Alex King
// http://www.alexking.org/software/resume/
//
// **********************************************************************
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
// General Public License for more details.
//
// http://www.gnu.org/copyleft/gpl.html
//
// *****************************************************************
//

/* -- INITIALIZE DATA ------------------------------------------------------------ */

// we want to see any errors so we can fix them

ini_set('display_errors', '1');
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL); 

$bio = array();
$data = array();
$data['jobs'] = array();
$prefs = array();

/* -- ENTER DATA ----------------------------------------------------------------- */

// start editing here

$bio['name'] 	= "Edwin Hermans";
$bio['phone'] 	= "+31 (0)6-41211275";
$bio['email'] 	= "edwin@madtech.cx";
$bio['address']	= "Theophilusstraat 1-3hg";
$bio['zip']	    = "1055CN";
$bio['city']	= "Amsterdam";
$bio['country']	= "Netherlands";
$bio['birthdate'] = "06-03-1979";
$bio['driverslicence'] = "Yes";

// set to 1 to show this info on the page, 0 to hide it

$prefs['show_phone']	= 1;
$prefs['show_email']	= 1;
$prefs['show_address']	= 1;

// if you want to be able to enter HTML (links, etc.) in your descriptions, set this to 1. 
// This means you need to manually escape any content as HTML.

$prefs['encode_output']	= 0;

// enter job data here

$data['objective'] = "For the past 17 years I have been a Linux power user and for over 13 years I've worked for a handful of ISPs 
and hosters administering linux servers. I have a love for automation. Privately I try to automate everything at home, professionally
I try to automate as many processes as possible, either by using existing tooling or where needed developing my own. The last 7 years
I've become more and more enamored with configuration management as a means of automating system administration and ensuring
stability by repeatability.";

// add more to this array as needed
$data['skills_technologies_projects'] = array(
    "Drivers license: yes, owns car: no",
    "Dutch: fluent",
    "English: fluent",
    "German: basic",
    "Unix System Administration",
    "- Apache, Lighttpd, nginx",
    "- MySQL, PostgreSQL, Oracle",
    "- BIND, PowerDNS, djbdns, NSD",
    "- Postfix, Exim, Sendmail, QMail",
    "- Xen, KVM, VMWare, VirtualBox, AWS/Amazon Cloud, LVS",
    "- Samba, AFPd, NFS, AoE, LVM, RAID, ZFS, NetAPP",
    "- Puppet, Cfengine, ansible",
    "- Nagios, Zabbix",
    "- Asterisk, OpenSER, OpenSIPS",
    "Programming",
    "- Python, PHP, Ruby, Perl, Bash",
    "- XHTML, CSS, LaTeX",
    "- Mercurial, SVN, git, CVS",
    "Network Administration",
    "- TCP/IP, IPv6, BGP",
    "- Juniper SSG, Juniper Netscreen, Cisco IOS, PIX, BGP, Cisco VPN, OpenVPN, IPSEC",
    "IT Support",
    "Hacking and Security Awareness",
);

// add more to this array as needed
$data['education_interests'] = array(
    "Mostly self-educated",
    "Vocational Education, Network Administration Specialization",
    "Linux Professional Institute LPI-1 Certification",
    "Novell Certified Linux Administrator",
    "Open Source Advocate",
);

// this is where you put all your job information
// add more of these arrays as needed
$data['jobs'][] = array(
    'period' =>	"2007-Present",
    'employer' => "Madtech",
    'location' => "Netherlands",
    'employer_info' => "IT consultancy, Systems Engineering projects",
    'employer_link' => "http://www.madtech.cx/",
    'positions' => array('Owner' => array(
        "Self-employed",
        "Built Monitoring Systems for one of NLs largest Electricity Companies",
        "Specialization in building and migrating hosting platforms on and to Amazon Web Services",
        "Installation and maintenance of open source VOIP setups, based primarily on Asterisk",
        "Migrated dozens of small-scale companies from proprietary to open source platforms",
    )),
    'show' => 1 // set to 0 to hide this job, 1 to show it
);

$data['jobs'][] = array(
    'period' => "2013-2013",
    'employer' => "IS Group",
    'location' => "Purmerend",
    'employer_info' => "Hosting and Managed Services Provider",
    'employer_link' => "http://group.is.nl",
    'positions' => array('Devops engineer' => array(
        "Merging environments of old-Nxs and old-IS into new playform",
        "Bringing manually maintained linux servers into the Puppet fold",
        "Deploying Puppet on Windows"
        )
    ),
    'show' => 1
);

$data['jobs'][] = array(
    'period' =>	"2010-2013",
    'employer' => "Nxs Internet B.V.",
    'location' => "Amsterdam",
    'employer_info' => "Managed hosting and colocation",
    'employer_link' => "http://www.nxs.nl/",
    'positions' => array('Senior linux systems engineer' => array(
        "Configuration management for linux hosting platforms",
        "Consultancy and technical project planning for new customers and new customer platforms",
        "Managing Nagios, Cacti, Puppet and VMWare for automation and maintenance"
        ),
    'Devops engineer' => array(
        "Building new configuration management en product deployment environment",
        "Based on Puppet and VMWare Vsphere",
        "Extensive modifications to Foreman and writing tooling to automate VMWare VM management"
        )
    ),
    'show' => 1 // set to 0 to hide this job, 1 to show it
);

$data['jobs'][] = array(
    'period' =>	"2009-2010",
    'employer' => "XS4ALL Internet BV",
    'location' => "Diemen",
    'employer_info' => "ISP for Consumer and Business market",
    'employer_link' => "http://www.xs4all.nl/",
    'positions' => array('Support Engineer' => array(
        "Customer Support",
        "Started at Consumer Support",
        "Moved to Business Support within a month",
	    "Training Supervision new Support Engineers",
    )),
    'show' => 1 // set to 0 to hide this job, 1 to show it
);

$data['jobs'][] = array(
    'period' =>	"2006-2007",
    'employer' => "YourChoice BV",
    'location' => "Diemen",
    'employer_info' => "One of the biggest resellers of adult DVDs in NL",
    'positions' => array('System Engineer' => array(
        "Maintaining Website Infrastructure",
        "Designing and Building new Webhosting Cluster",
        "Upgraded local Infrastructure, Administration System",
        "Implemented Working from Home Infrastructure",
    )),
    'show' => 1 // set to 0 to hide this job, 1 to show it
);

$data['jobs'][] = array(
    'period' =>	"2003-2006",
    'employer' => "Support Net BV",
    'location' => "Amsterdam",
    'employer_info' => "ISP for Business market",
    'employer_link' => "http://www.support.net/",
    'positions' => array('System Engineer' => array(
        "Overhaul of Hosting Platform and Maintenance Infrastructure",
        "Designed and Built new Webhosting Cluster",
        "Installed and Maintained local VOIP Infrastructure",
    )),
    'show' => 1 // set to 0 to hide this job, 1 to show it
);

$data['jobs'][] = array(
    'period' =>	"1997-2003",
    'employer' => "Various employers",
    'location' => "Netherlands",
    'employer_info' => "Versatel, UUNET, Infologic, Dutch government",
    'positions' => array('Support and System Engineer' => array(
        "Older working experience, more details on request",
        "Worked as Support engineer and System admin, documentation writer",
        "Programmer, Network admin",
    )),
    'show' => 1 // set to 0 to hide this job, 1 to show it
);
/* -- DONE ENTERING DATA - you shouldn't need to edit below this line ------------ */

/* ------------------------------------------------------------------------------- */

/* -- OUTPUT --------------------------------------------------------------------- */

function pad_and_wrap($string, $pad_to = 20, $pad_with = ' ', $wrap_at = 80, $bullet = '') {
	global $prefs;
	if (!empty($prefs['encode_output']) && $prefs['encode_output'] == 1) {
		$string = strip_tags($string);
	}
	if (!empty($bullet)) {
		$string = $bullet.$string;
	}
	if (strlen($string) > $wrap_at) {
		$wrap_line_at = strrpos(substr($string, 0, $wrap_at), ' ');
		$output = str_pad('', $pad_to, $pad_with).substr($string, 0, $wrap_line_at);
		$remainder = substr($string, $wrap_line_at + 1);
		if (strlen($remainder) > 0) {
			$output .= "\n".pad_and_wrap($remainder, ($pad_to + strlen($bullet)), $pad_with, ($wrap_at - strlen($bullet)), '');
		}
	}
	else {
		$output = str_pad('', $pad_to, $pad_with).$string;
	}
	return $output;
}

function encode_output($str) {
	global $prefs;
	if (!empty($prefs['encode_output']) && $prefs['encode_output'] == 1) {
		return htmlentities($str);
	}
	else {
		return $str;
	}
}

// CSS

ob_start();
?>
body {
	margin: 10px;
}
p, td, span, li, a { 
	font-family: verdana, arial, helvetica, sans-serif; 
}
h1 {
	font: 90% verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 0 0 5px 0;
}
h2 {
	border-bottom: 1px solid #666;
	clear: both;
	font: 80% verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 15px 0 10px 0;
	padding: 0 0 3px 0;
	width: 700px;
}
h3 {
	float: left;
	font: 80% verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 0 0 5px 0;
	padding: 0;
	width: 446px;
}
li {
	font-size: 70%;
	margin: 0 0 3px 20px;
	padding: 0;
}
p {
	font-size: 70%;
	margin: 0 0 10px 0;
	padding: 0;
	width: 575px;
}
body ul {
	margin: 0 0 0 125px;
	padding: 0;
	width: 575px;
}
body div ul {
	margin: 3px 0 0 0;
	padding: 0;
	width: 575px;
}
#bio_left {
	font-size: 75%;
	float: left;
	width: 350px;
}
#bio_right {
	font-size: 75%;
	float: left;
	text-align: right;
	width: 350px;
}
.company {
	clear: both;
	margin: 0 0 5px 0;
	padding: 0;
}
.data {
	padding-left: 125px;
}
.date {
	clear: left;
	float: left;
	padding-top: 2px;
	width: 125px;
}
.job {
	clear: both;
	width: 700px;
}
.job_data {
	float: left;
	width: 575px;
}
.location {
	clear: right;
	float: left;
	text-align: right;
	width: 125px;
}
.position {
	font-style: italic;
	margin: 0 0 5px 0;
}
#references {
	margin-top: 20px;
}
#meta {
	margin-top: 30px;
}
<?php
$css_screen = ob_get_contents();
ob_end_clean();

ob_start();
?>
body {
	margin: 0px;
}
p, td, span, li, a { 
	font-family: verdana, arial, helvetica, sans-serif; 
}
h1 {
	font: 14pt verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 0 0 5px 0;
}
h2 {
	border-bottom: 1px solid #666;
	clear: both;
	font: 11pt verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 15px 0 10px 0;
	padding: 0 0 3px 0;
	width: 100%;
}
h3 {
	font: 11pt verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 0 0 2px 0;
	padding: 0;
}
li {
	font-size: 10pt;
	margin: 0 0 3px 5%;
	padding: 0;
}
p {
	font-size: 10pt;
	margin: 0 0 10px 0;
	padding: 0;
}
body ul {
	margin: 0 0 0 20%;
	padding: 0;
}
body div ul {
	margin: 3px 0 0 0;
	padding: 0;
}
#bio_left {
	font-size: 11pt;
	float: left;
	width: 50%;
}
#bio_right {
	font-size: 11pt;
	float: left;
	text-align: right;
	width: 50%;
}
.company {
	clear: both;
	margin: 0 0 5px 0;
	padding: 0;
}
.data {
	padding-left: 20%;
}
.date {
	clear: left;
	float: left;
	padding-top: 2px;
	width: 20%;
}
.job {
	clear: both;
	width: 100%;
}
.job_data {
	float: left;
	width: 80%;
}
.location {
	clear: right;
	float: right;
	text-align: right;
	width: 20%;
}
.position {
	font-style: italic;
	margin: 0 0 5px 0;
}
#references {
	margin-top: 20px;
}
#meta {
	display: none;
}
<?php
$css_print = ob_get_contents();
ob_end_clean();

ob_start();
$split_length = floor(strlen($bio['email']) / 4);
?>
function email() { // try to avoid spam trollers, intentionally complex
	var a = "<?php print(substr($bio['email'], 0, $split_length)); ?>";
	var b = "<?php print(substr($bio['email'], $split_length, $split_length)); ?>";
	var c = "<?php print(substr($bio['email'], ($split_length * 2), $split_length)); ?>";
	var d = "<?php print(substr($bio['email'], ($split_length * 3), ($split_length + (strlen($bio['email']) % 4)))); ?>";
	
	e_string = "<a href=\"ma" + "ilto:" + a + b + c + d + "\">" + a + b + c + d + "</a>";
	document.write(e_string);
}
<?php
$js = ob_get_contents();
ob_end_clean();

if (isset($_REQUEST["output"])) {
	$output = stripslashes($_REQUEST["output"]);
}
else {
	$output = 'html';
}
switch ($output) {
	case "css_screen":
		header("Content-type: text/css");
		print($css_screen);
		break;
	case "css_print":
		header("Content-type: text/css");
		print($css_print);
		break;
	case "js":
		header("Content-type: text/javascript");
		print($js);
		break;
	case "html":
		if (isset($_GET['contained']) && $_GET['contained'] == 1) {
			header("Content-Type: application/force-download");
			header("Content-Type: application/octet-stream");
			header("Content-Type: application/download");
			header("Content-Disposition: attachment; filename=\"resume.html\"");
		}
?>
<!DOCTYPE html>
<!-- HTML Resume Template from http://www.alexking.org/software/resume/ -->
<html>
<head>
<title><?php print(encode_output($bio['name'])); ?></title>
<meta charset="UTF-8">
<?php
if (isset($_GET['contained']) && $_GET['contained'] == 1) {
?>
<style type="text/css" media="screen">
<?php
	print($css_screen);
?>
</style>
<style type="text/css" media="print">
<?php
	print($css_print);
?>
</style>
<script type="text/javascript">
<?php
	print($js);
?>
</script>
<?php
}
else {
?>
<style type="text/css" media="screen">
	@import url(http://<?php print($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']); ?>?output=css_screen);
</style>
<link rel="stylesheet" type="text/css" media="print" href="http://<?php print($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']); ?>?output=css_print" />
<script type="text/javascript" src="http://<?php print($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']); ?>?output=js"></script>
<?php
}
?>
</head>

<body>

<h1><?php print(encode_output($bio['name'])); ?></h1>

<p id="bio_left">
<?php
print(encode_output($bio['birthdate']).'<br />');
if ($prefs['show_phone'] == 1) {
	print(encode_output($bio['phone']).'<br />');
}
if ($prefs['show_email'] == 1) {
?>
	<script type="text/javascript">email();</script>
<?php
}
?>
</p>
<p id="bio_right">
<?php
if ($prefs['show_address'] == 1) {
	print(encode_output($bio['address']).'<br />'
	     .encode_output($bio['zip']).' '
	     .encode_output($bio['city']).'<br />'
	     .encode_output($bio['country']).'<br />'
	     );
}
?>
</p>

<h2>OBJECTIVE</h2>
<p class="data"><?php print(encode_output($data['objective'])); ?></p>

<h2>EXPERIENCE</h2>
<?php
foreach ($data['jobs'] as $job) { 
	if ($job['show'] == 1) {
		if (!empty($job['employer_link'])) {
			$link = array(
				'<a href="'.$job['employer_link'].'">'
				,'</a>'
			);
		}
		else {
			$link = array('','');
		}
?>
<div class="job">
	<p class="date"><?php print(encode_output($job['period'])); ?></p>
	<div class="job_data">
		<h3><?php print($link[0].encode_output($job['employer']).$link[1]); ?></h3>
<?php
		if (!empty($job['location'])) {
?>
		<p class="location"><?php print(encode_output($job['location'])); ?></p>
<?php
		}
		else {
?>
		<p class="location">&nbsp;</p>
<?php
		}
		if (!empty($job['employer_info'])) {
?>
		<p class="company"><?php print(encode_output($job['employer_info'])); ?></p>
<?php
		}
		foreach ($job['positions'] as $title => $position) {
?>
		<p class="position"><?php print(encode_output($title)); ?></p>
		<ul>
<?php
			foreach ($position as $responsibility) {
				print("			<li>".encode_output($responsibility)."</li>\n");
			}
?>
		</ul>
		&nbsp;
<?php
		}
?>
	</div>
</div>

<?php
	}
}
?>
<h2>SKILLS, TECHNOLOGIES &amp; PROJECTS</h2>
<ul>
<?php
foreach ($data['skills_technologies_projects'] as $temp) {
	print("	<li>".encode_output($temp)."</li>\n");
}
?>
</ul>

<h2>EDUCATION &amp; INTERESTS</h2>
<ul>
<?php
foreach ($data['education_interests'] as $temp) {
	print("	<li>".encode_output($temp)."</li>\n");
}
?>
</ul>

<p id="references">References available upon request.</p>

<p id="meta">
<?php
if (empty($_GET['contained']) || $_GET['contained'] != 1) {
?>
	<span id="versions"><a href="<?php print($_SERVER['PHP_SELF']); ?>">HTML version</a> | <a href="<?php print($_SERVER['PHP_SELF'].'?output=html&amp;contained=1'); ?>">E-mailable HTML version</a> | <a href="<?php print($_SERVER['PHP_SELF'].'?output=text'); ?>">Plain Text (.txt) version</a>.</span>
<?php
}
?>
	<span id="valid">Valid <a href="http://validator.w3.org/check/referer">HTML5</a> / <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS 2.1</a></span>
</p>

</body>
</html>
<?php
		break;
	case "text":
		header("Content-type: text/plain");
		print($bio['name']."\n\n");
        print(str_pad($bio['birthdate'], 50, ' '));
		if ($prefs['show_address'] == 1) {
			print(str_pad($bio['address'], 50, ' ', STR_PAD_LEFT)."\n"); 
		}
		if ($prefs['show_phone'] == 1) {
			print(str_pad($bio['phone'], 50, ' '));
		}
		if ($prefs['show_address'] == 1) {
			print(str_pad($bio['zip'].' '.$bio['city'], 50, ' ', STR_PAD_LEFT)."\n"); 
        }
		if ($prefs['show_email'] == 1) {
			print(str_pad($bio['email'], 50, ' '));
		}
		if ($prefs['show_address'] == 1) {
			print(str_pad($bio['country'], 50, ' ', STR_PAD_LEFT)); 
		}
		print("\n\n");
		print('OBJECTIVE'."\n".str_pad('', 100, '-')."\n");
		print(pad_and_wrap($data['objective'])."\n\n\n");
		print('EXPERIENCE'."\n".str_pad('', 100, '-')."\n");
		foreach ($data['jobs'] as $job) { 
			if ($job['show'] == 1) {
				print(str_pad($job['period'], 20, ' '));
				print(str_pad($job['employer'], 55, ' '));
				print(str_pad($job['location'], 25, ' ', STR_PAD_LEFT)."\n");
				if (!empty($job['employer_info'])) {
					print(pad_and_wrap($job['employer_info'])."\n");
				}
				foreach ($job['positions'] as $title => $position) {
					print("\n".pad_and_wrap($title)."\n");
					foreach ($position as $responsibility) {
						print(pad_and_wrap($responsibility, 20, ' ', 80, '- ')."\n");
					}
				}
			}
			print("\n");
		}
		print("\n".'SKILLS, TECHNOLOGIES & PROJECTS'."\n".str_pad('', 100, '-')."\n");
		foreach ($data['skills_technologies_projects'] as $temp) {
			print(pad_and_wrap($temp, 20, ' ', 80, '- ')."\n");
		}
		print("\n\n".'EDUCATION & INTERESTS'."\n".str_pad('', 100, '-')."\n");
		foreach ($data['education_interests'] as $temp) {
			print(pad_and_wrap($temp, 20, ' ', 80, '- ')."\n");
		}
		print("\n\n".'References available upon request.'."\n\n");
		break;
}
?>
