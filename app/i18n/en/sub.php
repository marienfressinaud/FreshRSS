<?php

return array(
	'api' => array(
		'documentation' => 'Copy the following URL to use it within an external tool.',
		'title' => 'API',
	),
	'bookmarklet' => array(
		'documentation' => 'Drag this button to your bookmarks toolbar or right-click it and choose "Bookmark This Link". Then click "Subscribe" button in any page you want to subscribe to.',
		'label' => 'Subscribe',
		'title' => 'Bookmarklet',
	),
	'category' => array(
		'add' => 'Add a category',
		'archiving' => 'Archiving',
		'empty' => 'Empty category',
		'information' => 'Information',
		'new' => 'New category',
		'position' => 'Display position',
		'position_help' => 'To control category sort order',
		'title' => 'Title',
		'_' => 'Category',
	),
	'feed' => array(
		'add' => 'Add a RSS feed',
		'advanced' => 'Advanced',
		'archiving' => 'Archiving',
		'auth' => array(
			'configuration' => 'Login',
			'help' => 'Allows access to HTTP protected RSS feeds',
			'http' => 'HTTP Authentication',
			'password' => 'HTTP password',
			'username' => 'HTTP username',
		),
		'clear_cache' => 'Always clear cache',
		'css_help' => 'Retrieves truncated RSS feeds (caution, requires more time!)',
		'css_path' => 'Articles CSS path on original website',
		'description' => 'Description',
		'empty' => 'This feed is empty. Please verify that it is still maintained.',
		'error' => 'This feed has encountered a problem. Please verify that it is always reachable then update it.',
		'filteractions' => array(
			'help' => 'Write one search filter per line.',
			'_' => 'Filter actions',
		),
		'information' => 'Information',
		'keep_min' => 'Minimum number of articles to keep',
		'moved_category_deleted' => 'When you delete a category, its feeds are automatically classified under <em>%s</em>.',
		'mute' => 'mute',
		'no_selected' => 'No feed selected.',
		'number_entries' => '%d articles',
		'priority' => array(
			'archived' => 'Do not show (archived)',
			'main_stream' => 'Show in main stream',
			'normal' => 'Show in its category',
			'_' => 'Visibility',
		),
		'show' => array(
			'all' => 'Show all feeds',
			'error' => 'Show only feeds with error',
		),
		'showing' => array(
			'error' => 'Showing only feeds with error',
		),
		'ssl_verify' => 'Verify SSL security',
		'stats' => 'Statistics',
		'think_to_add' => 'You may add some feeds.',
		'timeout' => 'Timeout in seconds',
		'title' => 'Title',
		'title_add' => 'Add a RSS feed',
		'ttl' => 'Do not automatically refresh more often than',
		'url' => 'Feed URL',
		'validator' => 'Check the validity of the feed',
		'website' => 'Website URL',
		'websub' => 'Instant notification with WebSub',
		'maintenance' => array(
			'title' => 'Maintenance',
			'clear_cache' => 'Clear Cache',
			'clear_cache_help' => 'Clear the cache of this feed on disk',
			'reload_articles' => 'Reload Articles',
			'reload_articles_help' => 'Reload articles and fetch complete content',
		),
	),
	'firefox' => array(
		'documentation' => 'Follow the steps described <a href="https://developer.mozilla.org/en-US/Firefox/Releases/2/Adding_feed_readers_to_Firefox#Adding_a_new_feed_reader_manually">here</a> to add FreshRSS to Firefox feed reader list.',
		'obsolete_63' => 'From version 63 and onwards, Firefox has removed the ability to add your own subscription services that are not standalone programs.',
		'title' => 'Firefox feed reader',
	),
	'import_export' => array(
		'export' => 'Export',
		'export_labelled' => 'Export your labelled articles',
		'export_opml' => 'Export list of feeds (OPML)',
		'export_starred' => 'Export your favourites',
		'feed_list' => 'List of %s articles',
		'file_to_import' => 'File to import<br />(OPML, JSON or ZIP)',
		'file_to_import_no_zip' => 'File to import<br />(OPML or JSON)',
		'import' => 'Import',
		'starred_list' => 'List of favourite articles',
		'title' => 'Import / export',
	),
	'menu' => array(
		'bookmark' => 'Subscribe (FreshRSS bookmark)',
		'import_export' => 'Import / export',
		'subscription_management' => 'Subscriptions management',
		'subscription_tools' => 'Subscription tools',
	),
	'title' => array(
		'feed_management' => 'RSS feeds management',
		'subscription_tools' => 'Subscription tools',
		'_' => 'Subscriptions management',
	),
);
