<?php

$projectPath = dirname(__DIR__, 3);

$basePath = $projectPath . '/public';

$baseUrl = (string) getenv('BASE_URL');

$imagesUrl = $baseUrl . '/images';

$imagesPath = $basePath . '/public/images';

return [
    'allow_php' => 'n',
    'autosave_interval_seconds' => '0',
    'avatar_path' => $imagesPath . '/avatars/',
    'avatar_url' => $imagesUrl . '/avatars/',
    'base_path' => $basePath,
    'base_url' => $baseUrl,
    'cache_driver' => 'file',
    'captcha_path' => $imagesPath . '/captchas/',
    'captcha_url' => $imagesUrl . '/captchas/',
    'cp_session_type' => 'c',
    'cp_url' => $baseUrl . '/admin.php',
    'database' => [
        'expressionengine' => [
            'dbprefix' => 'exp_',
            'char_set' => 'utf8mb4',
            'dbcollat' => 'utf8mb4_unicode_ci',
            'port'     => '',
            'hostname' => (string) getenv('DB_HOST'),
            'username' => (string) getenv('DB_USER'),
            'database' => (string) getenv('DB_NAME'),
            'password' => (string) getenv('DB_PASSWORD'),
        ],
    ],
    'debug' => (string) getenv('ERROR_VISIBILITY'),
    'disable_all_tracking' => 'y',
    'email_debug' => 'n',
    'emoticon_path' => $imagesPath . '/smileys/',
    'emoticon_url' => $imagesUrl . '/smileys/',
    'enable_devlog_alerts' => (string) getenv('ENABLE_DEV_LOG_ALERTS'),
    'enable_hit_tracking' => 'n',
    'enable_sql_caching' => 'n',
    'encryption_key' => (string) getenv('ENCRYPTION_KEY'),
    'gzip_output' => 'n',
    'index_page' => '',
    'is_system_on' => 'y',
    'legacy_member_templates' => 'y',
    'log_referrers' => 'n',
    'multiple_sites_enabled' => 'n',
    'photo_path' => $imagesPath . '/member_photos/',
    'photo_url' => $imagesUrl . '/member_photos/',
    'profile_trigger' => uniqid(),
    'prv_msg_upload_path' => $imagesPath . '/pm_attachments/',
    'save_tmpl_files' => 'y',
    'session_crypt_key' => (string) getenv('SESSION_CRYPT_KEY'),
    'share_analytics' => 'y',
    'show_ee_news' => 'n',
    'show_profiler' => (string) getenv('SHOW_PROFILER'),
    'sig_img_path' => $imagesPath . '/signature_attachments/',
    'sig_img_url' => $imagesUrl . '/signature_attachments/',
    'site_index' => '',
    'site_url' => $baseUrl,
    'template_debugging' => (string) getenv('TEMPLATE_DEBUGGING'),
    'theme_folder_path' => $basePath . '/themes/',
    'theme_folder_url' => $baseUrl . '/themes/',
];
