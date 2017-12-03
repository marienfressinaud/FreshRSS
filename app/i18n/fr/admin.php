<?php

return array(
	'auth' => array(
		'allow_anonymous' => 'Autoriser la lecture anonyme des articles de l’utilisateur par défaut (%s)',
		'allow_anonymous_refresh' => 'Autoriser le rafraîchissement anonyme des flux',
		'api_enabled' => 'Autoriser l’accès par <abbr>API</abbr> <small>(nécessaire pour les applis mobiles)</small>',
		'form' => 'Formulaire (traditionnel, requiert JavaScript)',
		'http' => 'HTTP (pour utilisateurs avancés avec HTTPS)',
		'none' => 'Aucune (dangereux)',
		'title' => 'Authentification',
		'title_reset' => 'Réinitialisation de l’authentification',
		'token' => 'Jeton d’identification',
		'token_help' => 'Permet d’accéder à la sortie RSS de l’utilisateur par défaut sans besoin de s’authentifier :',
		'type' => 'Méthode d’authentification',
		'unsafe_autologin' => 'Autoriser les connexions automatiques non-sûres au format : ',
	),
	'check_install' => array(
		'cache' => array(
			'nok' => 'Veuillez vérifier les droits sur le répertoire <em>./data/cache</em>. Le serveur HTTP doit être capable d’écrire dedans',
			'ok' => 'Les droits sur le répertoire de cache sont bons.',
		),
		'categories' => array(
			'nok' => 'La table category est mal configurée.',
			'ok' => 'La table category est bien configurée.',
		),
		'connection' => array(
			'nok' => 'La connexion à la base de données est impossible.',
			'ok' => 'La connexion à la base de données est bonne.',
		),
		'ctype' => array(
			'nok' => 'Impossible de trouver une librairie pour la vérification des types de caractères (php-ctype).',
			'ok' => 'Vous disposez de la librairie pour la vérification des types de caractères (ctype).',
		),
		'curl' => array(
			'nok' => 'Impossible de trouver la librairie cURL (paquet php-curl).',
			'ok' => 'Vous disposez de la librairie cURL.',
		),
		'data' => array(
			'nok' => 'Veuillez vérifier les droits sur le répertoire <em>./data</em>. Le serveur HTTP doit être capable d’écrire dedans',
			'ok' => 'Les droits sur le répertoire de data sont bons.',
		),
		'database' => 'Installation de la base de données',
		'dom' => array(
			'nok' => 'Impossible de trouver une librairie pour parcourir le DOM (paquet php-xml).',
			'ok' => 'Vous disposez de la librairie pour parcourir le DOM.',
		),
		'entries' => array(
			'nok' => 'La table entry est mal configurée.',
			'ok' => 'La table entry est bien configurée.',
		),
		'favicons' => array(
			'nok' => 'Veuillez vérifier les droits sur le répertoire <em>./data/favicons</em>. Le serveur HTTP doit être capable d’écrire dedans',
			'ok' => 'Les droits sur le répertoire des favicons sont bons.',
		),
		'feeds' => array(
			'nok' => 'La table feed est mal configurée.',
			'ok' => 'La table feed est bien configurée.',
		),
		'fileinfo' => array(
			'nok' => 'Impossible de trouver la librairie PHP fileinfo (paquet fileinfo).',
			'ok' => 'Vous disposez de la librairie fileinfo.',
		),
		'files' => 'Installation des fichiers',
		'json' => array(
			'nok' => 'Vous ne disposez pas de JSON (paquet php5-json).',
			'ok' => 'Vous disposez de l’extension JSON.',
		),
		'minz' => array(
			'nok' => 'Vous ne disposez pas de la librairie Minz.',
			'ok' => 'Vous disposez du framework Minz',
		),
		'pcre' => array(
			'nok' => 'Impossible de trouver une librairie pour les expressions régulières (php-pcre).',
			'ok' => 'Vous disposez de la librairie pour les expressions régulières (PCRE).',
		),
		'pdo' => array(
			'nok' => 'Vous ne disposez pas de PDO ou d’un des drivers supportés (pdo_mysql, pdo_sqlite, pdo_pgsql).',
			'ok' => 'Vous disposez de PDO et d’au moins un des drivers supportés (pdo_mysql, pdo_sqlite, pdo_pgsql).',
		),
		'php' => array(
			'_' => 'Installation de PHP',
			'nok' => 'Votre version de PHP est la %s mais FreshRSS requiert au moins la version %s.',
			'ok' => 'Votre version de PHP est la %s, qui est compatible avec FreshRSS.',
		),
		'tables' => array(
			'nok' => 'Impossible de trouver une ou plusieurs tables en base de données.',
			'ok' => 'Les tables sont bien présentes en base de données.',
		),
		'title' => 'Vérification de l’installation',
		'tokens' => array(
			'nok' => 'Veuillez vérifier les droits sur le répertoire <em>./data/tokens</em>. Le serveur HTTP doit être capable d’écrire dedans',
			'ok' => 'Les droits sur le répertoire des tokens sont bons.',
		),
		'users' => array(
			'nok' => 'Veuillez vérifier les droits sur le répertoire <em>./data/users</em>. Le serveur HTTP doit être capable d’écrire dedans',
			'ok' => 'Les droits sur le répertoire des utilisateurs sont bons.',
		),
		'zip' => array(
			'nok' => 'Vous ne disposez pas de l’extension ZIP (paquet php-zip).',
			'ok' => 'Vous disposez de l’extension ZIP.',
		),
	),
	'extensions' => array(
		'disabled' => 'Désactivée',
		'empty_list' => 'Il n’y a aucune extension installée.',
		'enabled' => 'Activée',
		'no_configure_view' => 'Cette extension ne peut pas être configurée.',
		'system' => array(
			'_' => 'Extensions système',
			'no_rights' => 'Extension système (vous n’avez aucun droit dessus)',
		),
		'title' => 'Extensions',
		'user' => 'Extensions utilisateur',
		'community' => 'Available community extensions for download', // @todo translate
		'name' => 'Name', // @todo translate
		'version' => 'Version', // @todo translate
		'description' => 'Description', // @todo translate
		'author' => 'Author', // @todo translate
		'latest' => 'Installed', // @todo translate
		'update' => 'Update available', // @todo translate
	),
	'stats' => array(
		'_' => 'Statistiques',
		'all_feeds' => 'Tous les flux',
		'category' => 'Catégorie',
		'entry_count' => 'Nombre d’articles',
		'entry_per_category' => 'Articles par catégorie',
		'entry_per_day' => 'Nombre d’articles par jour (30 derniers jours)',
		'entry_per_day_of_week' => 'Par jour de la semaine (moyenne : %.2f messages)',
		'entry_per_hour' => 'Par heure (moyenne : %.2f messages)',
		'entry_per_month' => 'Par mois (moyenne : %.2f messages)',
		'entry_repartition' => 'Répartition des articles',
		'feed' => 'Flux',
		'feed_per_category' => 'Flux par catégorie',
		'idle' => 'Flux inactifs',
		'main' => 'Statistiques principales',
		'main_stream' => 'Flux principal',
		'menu' => array(
			'idle' => 'Flux inactifs',
			'main' => 'Statistiques principales',
			'repartition' => 'Répartition des articles',
		),
		'no_idle' => 'Il n’y a aucun flux inactif !',
		'number_entries' => '%d articles',
		'percent_of_total' => '%% du total',
		'repartition' => 'Répartition des articles',
		'status_favorites' => 'favoris',
		'status_read' => 'lus',
		'status_total' => 'total',
		'status_unread' => 'non lus',
		'title' => 'Statistiques',
		'top_feed' => 'Les dix plus gros flux',
	),
	'system' => array(
		'_' => 'Configuration du système',
		'auto-update-url' => 'URL du service de mise à jour',
		'instance-name' => 'Nom de l’instance',
		'max-categories' => 'Limite de catégories par utilisateur',
		'max-feeds' => 'Limite de flux par utilisateur',
		'registration' => array(
			'help' => 'Un chiffre de 0 signifie que l’on peut créer un nombre infini de comptes',
			'number' => 'Nombre max de comptes',
		),
	),
	'update' => array(
		'_' => 'Système de mise à jour',
		'apply' => 'Appliquer la mise à jour',
		'check' => 'Vérifier les mises à jour',
		'current_version' => 'Votre version actuelle de FreshRSS est la %s.',
		'last' => 'Dernière vérification : %s',
		'none' => 'Aucune mise à jour à appliquer',
		'title' => 'Système de mise à jour',
	),
	'user' => array(
		'articles_and_size' => '%s articles (%s)',
		'create' => 'Créer un nouvel utilisateur',
		'language' => 'Langue',
		'number' => '%d compte a déjà été créé',
		'numbers' => '%d comptes ont déjà été créés',
		'password_form' => 'Mot de passe<br /><small>(pour connexion par formulaire)</small>',
		'password_format' => '7 caractères minimum',
		'title' => 'Gestion des utilisateurs',
		'user_list' => 'Liste des utilisateurs',
		'username' => 'Nom d’utilisateur',
		'users' => 'Utilisateurs',
	),
);
