<?php
	define('site_name',"XparK Competition");
	define('site_title', 'XparK | annual online social coding competition');
	define('site_type', 'Organisation');
	define('site_description', "XparK is an annual online social coding competition organised by School of Computer Science and Enginnering, SMVD Unviversity.");
	define('site_keywords', "xpark, social coding, open-source, osum, smvdu, smvd university, shri mata vaishno devi university, competition, programming, coding, annual");
	define('site_photo_url', "http://xpark.smvdu.net.in/img/logo.xpark.web_640x640.jpg");
	define('site_author', "Saurabh Kumar and contributors");
	
	define('site_twitter_url', "https://twitter.com/intent/user?screen_name',xpark_smvdu");
	define('site_forum_url', "http://groups.google.com/group/xpark");
	define('site_url',"http://xpark.smvdu.net.in");
	define('site_fb_appid','220222621398787');
	
	
	/*
	 * settings.
	 *
	 ************************************/
	
	define('DEBUG', false);

	# page settings
	define('BASE_URL', get_site_path());
	define('SITENAME', 'Example Company');

	# site settings
	define('USE_DATABASE', FALSE);

	# email settings
	define('FROM_EMAIL_ADDRESS', '');

	# mysql database settings
	if (USE_DATABASE) {
		if (!strstr(BASE_URL, 'projects')) {
			define('DB_HOST', '');
			define('DB_USER', '');
			define('DB_PASS', '');
			define('DB_DATABASE', '');
		} else {
			define('DB_HOST', '127.0.0.1');
			define('DB_USER', 'root');
			define('DB_PASS', 'admin');
			define('DB_DATABASE', 'admin_test');
		}
		connect_database();
	}
