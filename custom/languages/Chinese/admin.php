<?php
/*
 *	Made by Samerton
 *	Translation  by Hi_Michael
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr3
 *
 *  License: MIT
 *
 *  Chinese Language - Admin
 *  Translation progress : 93%
 *  翻譯有誤請使用GitHun回報issues 
 *  https://github.com/haer0248/NamelessMC-v2-Traditional-Chinese/issues
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => '請重新驗證',

	// Sidebar
	'admin_cp' => '管理員控制台',
	'administration' => '管理者',
	'overview' => '總覽',
	'core' => '核心',
	'minecraft' => 'Minecraft',
	'modules' => '模組',
	'security' => '安全',
	'styles' => '樣式',
	'users_and_groups' => '使用者與群組',

	// Overview
	'running_nameless_version' => '使用中NamelessMC版本 <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => '使用中PHP版本 <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => '統計',
	'registrations' => 'Registrations',
	'topics' => 'Topics',
	'posts' => 'Posts',
	'notices' => '通知',
	'no_notices' => '沒有通知.',
	'email_errors_logged' => '電子郵件錯誤已被紀錄. 點擊<a href="{x}">這裡</a>查看.', // Don't replace "{x}"

	// Core
	'settings' => '設置',
	'general_settings' => '基本設置',
	'sitename' => '網站名稱',
	'default_language' => '預設語言',
	'default_language_help' => '使用者可選擇已安裝的語言.',
	'installed_languages' => '語言已經安裝成功.',
	'default_timezone' => '預設時區',
	'registration' => '註冊',
	'enable_registration' => '啟用註冊?',
	'verify_with_mcassoc' => '使用MCAssoc驗證?',
	'email_verification' => '使用電子郵件驗證?',
	'homepage_type' => '首頁類型',
	'post_formatting_type' => '發布格式',
	'portal' => 'Portal',
	'missing_sitename' => '請輸入 2 ~ 64 字元的網站名稱.',
	'use_friendly_urls' => '友好連結.',
	'use_friendly_urls_help' => '重要提示: 您的伺服器必須允許使用 mod_rewrite 和 .htaccess 檔案才可以運作.',
	'config_not_writable' => '您的<strong>core/config.php</strong>檔案無法存取，請檢查權限.',
	'social_media' => '社交媒體',
	'youtube_url' => 'Youtube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => '使用Twitter黑主題?',
	'discord_id' => 'Discord伺服器ID',
	'discord_widget_theme' => 'Discord Widget Theme',
	'dark' => 'Dark',
	'light' => 'Light',
	'google_plus_url' => 'Google+ URL',
	'facebook_url' => 'Facebook URL',
	'successfully_updated' => '成功更新',
    'debugging_and_maintenance' => '調整與維護',
    'enable_debug_mode' => '啟用除錯模式?',
	'force_https' => '強制加密連線(https)?',
	'force_https_help' => '如果此選項被啟用，網站將會自動導向Https加密連線網頁，必須有正確的SSL證書才可以正常運作，請再次檢查再開啟.',
	'contact_email_address' => '聯絡用電子郵件',
	'emails' => '電子郵件',
	'email_errors' => '電子郵件錯誤',
	'registration_email' => '註冊電子郵件',
	'contact_email' => '聯絡電子郵件',
	'forgot_password_email' => '忘記密碼郵件',
	'unknown' => '未知',
	'delete_email_error' => '移除錯誤',
	'confirm_email_error_deletion' => '確定移除錯誤?',
	'viewing_email_error' => '檢視錯誤',
	'unable_to_write_email_config' => '無法寫入<strong>core/email.php</core>. 請檢查權限.',
	'enable_mailer' => '使用 PHPMailer?',
	'enable_mailer_help' => '如果電子郵件無法發送，請使用此功能，PHPMailer可以使您正常發送郵件，EX: Google的SMTP.',
	'outgoing_email' => '外部電子郵件',
	'outgoing_email_info' => '這個電子郵件將是NamelessMC拿來發送驗證信的電子郵件.',
	'mailer_settings_info' => '如果您啟用的PHPMailer，則以下字段都必須要，不知道是什麼請造訪 <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">維基</a>.',
	'host' => '伺服器',
	'email_port' => '端口',
	'email_password_hidden' => '安全原因，密碼不顯示.',
	'send_test_email' => '傳送測試電子郵件',
	'send_test_email_info' => '下面按鈕將會傳送測試電子郵件至 <strong>{x}</strong>. 任何錯誤都會被顯示.', // Don't replace {x}
    'send' => '傳送',
	'test_email_error' => '測試電子郵件錯誤:',
	'test_email_success' => '測試電子郵件傳送成功!',
	'terms_error' => '請輸入您的服務條款 (最大字元 2048).',
	'terms_updated' => '服務條款更新成功.',
	'avatars' => '頭顱',
	'allow_custom_avatars' => '允許使用者使用自訂頭顱?',
	'default_avatar' => '預設頭顱',
	'custom_avatar' => '自訂頭顱',
	'minecraft_avatar' => 'Minecraft 頭顱',
	'minecraft_avatar_source' => 'Minecraft 頭顱來源',
	'built_in_avatars' => '在 avatar 服務建立',
	'minecraft_avatar_perspective' => 'Minecraft avatar 視角',
	'face' => '臉',
	'head' => '頭',
	'select_default_avatar' => '選擇新的預設頭顱:',
	'no_avatars_available' => '沒有已知頭顱. 請上傳新的頭顱.',
	'avatar_settings_updated_successfully' => '頭顱更新成功.',
	'navigation' => '導航',
	'navbar_order' => '導航欄順序',
	'navbar_order_instructions' => '您可以給予比0更大的數字，以便在導航欄選擇連結.',
    'navbar_icon' => 'Navbar Icon',
    'navbar_icon_instructions' => 'You can also add an icon to each navbar item here, for example using <a href="https://fontawesome.com/v4.7.0/" target="_blank" rel="noopener nofollow">Font Awesome</a>.',
    'dropdown_items' => 'Dropdown Items',
	'enable_page_load_timer' => '啟用畫面讀取計時?',
	'google_recaptcha' => 'Enable Google reCAPTCHA?',
	'recaptcha_site_key' => 'reCAPTCHA Site Key',
	'recaptcha_secret_key' => 'reCAPTCHA Secret Key',
	'registration_disabled_message' => 'Registration disabled message',
	'enable_nicknames_on_registration' => 'Enable nicknames for registering users?',
	'validation_promote_group' => 'Post-validation group',
	'validation_promote_group_info' => 'This is the group a user will be promoted to once they have validated their account.',
	'login_method' => 'Login Method',
    'privacy_and_terms' => 'Privacy Policy and Terms & Conditions',

    // Reputation
    'enable_reputation' => 'Enable Reputation?',
    'amount' => 'Amount',
    'amount_reputation_tooltip' => 'This is the amount of reputation given',

	// Reactions
	'icon' => '圖標',
	'type' => '類型',
	'positive' => '讚',
	'neutral' => '中',
	'negative' => '倒讚',
	'editing_reaction' => '編輯符號',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> 新符號',
	'creating_reaction' => '建立符號',

	// Custom profile fields
	'custom_fields' => '自訂個人檔區域',
	'new_field' => '<i class="fa fa-plus-circle"></i> 新區域',
	'required' => '必須',
	'editable' => 'Editable',
	'public' => '公開',
	'text' => '文字',
	'textarea' => '多行文字',
	'date' => '日期',
	'creating_profile_field' => '建立個人檔區域',
	'editing_profile_field' => '編輯個人檔區域',
	'field_name' => '區域名稱',
	'profile_field_required_help' => '在註冊時，必須若被啟用，將會要求使用者輸入.',
	'profile_field_public_help' => '公開將會顯示給所有使用者，如果關閉，只有本人可以查看.',
	'profile_field_error' => '請輸入 2~16 字元的區域名稱.',
	'description' => '說明',
	'display_field_on_forum' => '在論壇中顯示區域?',
	'profile_field_forum_help' => '如果啟用，區域的文字將會在論壇中被顯示.',
	'profile_field_editable_help' => 'If enabled, users will have permission to edit the field in their profile settings.',

	// Minecraft
	'enable_minecraft_integration' => '啟用 Minecraft integration?',
	'mc_service_status' => 'Minecraft 伺服器狀態',
	'service_query_error' => '無法接收伺服器狀態.',
	'authme_integration' => 'AuthMe Integration',
	'authme_integration_info' => '當 AuthMe integration 被啟用，使用者只能在遊戲中註冊.',
	'enable_authme' => '啟用 AuthMe integration?',
	'authme_db_address' => 'AuthMe 資料庫位置',
	'authme_db_port' => 'AuthMe 資料庫端口',
	'authme_db_name' => 'AuthMe 資料庫名稱',
	'authme_db_user' => 'AuthMe 資料庫使用者',
	'authme_db_password' => 'AuthMe 資料庫密碼',
	'authme_hash_algorithm' => 'AuthMe 加密機制',
	'authme_db_table' => 'AuthMe 使用者資料表',
	'enter_authme_db_details' => '請輸入正確的資料庫資料.',
	'authme_password_sync' => '同步 AuthMe 密碼?',
	'authme_password_sync_help' => '如果啟用，遊戲中變更密碼的話，網站也會跟著變更密碼.',
	'minecraft_servers' => 'Minecraft 伺服器',
	'account_verification' => 'Minecraft 帳戶驗證',
	'server_banners' => 'Server 橫幅',
	'query_errors' => 'Query 錯誤',
	'add_server' => '<i class="fa fa-plus-circle"></i> 新增',
	'no_servers_defined' => '尚未定義伺服器',
	'query_settings' => 'Query 設置',
	'default_server' => '預設伺服器',
	'no_default_server' => '沒有預設伺服器',
	'external_query' => '使用外部查詢?',
	'external_query_help' => '如果預設查詢沒效果請啟用.',
	'adding_server' => '新增伺服器中',
	'server_name' => '伺服器名稱',
	'server_address' => '伺服器位置',
	'server_address_help' => '這個IP將會顯示於網頁首頁讓玩家連結，請不要輸入端口.',
	'server_port' => '伺服器端口',
    'parent_server' => '父伺服器',
    'parent_server_help' => '通常只有BungeeCord伺服器才需要使用父伺服器功能.',
    'no_parent_server' => '沒有父伺服器',
    'bungee_instance' => 'BungeeCord 伺服器?',
    'bungee_instance_help' => '如果您是BungeeCord伺服器請啟用.',
    'server_query_information' => '如果您要顯示玩家列表，請在<strong>server.properties</strong>更改<strong>enable-query</strong>為<strong>TRUE</strong>',
    'enable_status_query' => '啟用 Query 狀態查詢?',
    'status_query_help' => '如果啟用，狀態頁面將顯示伺服器線上或離線.',
    'enable_player_list' => '啟用玩家名單?',
    'pre_1.7' => 'Minecraft 版本在 1.7 之前?',
    'player_list_help' => '如果啟用，狀態網站將會顯示玩家列表.',
    'server_query_port' => '伺服器 Query 端口',
    'server_query_port_help' => '這個 query.port 在 <strong>server.properties</strong> 設定檔中可以找到，請記得開啟才有效果.',
    'server_name_required' => '請輸入伺服器名稱',
    'server_name_minimum' => '伺服器名稱最低限制 1 字元',
    'server_name_maximum' => '伺服器名稱最高限制 20 字元',
    'server_address_required' => '請輸入伺服器IP',
    'server_address_minimum' => '伺服器IP最低限制 1 字元',
    'server_address_maximum' => '伺服器IP最高限制 64 字元',
    'server_port_required' => '請輸入伺服器端口',
    'server_port_minimum' => '伺服器端口最低限制 2 字元',
    'server_port_maximum' => '伺服器端口最高限制 5 字元',
    'server_parent_required' => '請選擇父伺服器',
    'query_port_maximum' => '伺服器端口最高限制 5 字元',
    'server_created' => '伺服器建立成功.',
    'confirm_delete_server' => '您要移除伺服器嗎?',
	'server_updated' => '伺服器更新成功.',
	'editing_server' => '編輯伺服器',
	'server_deleted' => '伺服器移除成功',
	'unable_to_delete_server' => '無法移除伺服器.',
	'leave_port_empty_for_srv' => '您可以保持空白，端口會自動填入 25565，或者您使用SRV紀錄',
    'viewing_query_error' => 'Query 錯誤',
    'confirm_query_error_deletion' => '您要移除 Query 錯誤嗎?',
    'no_query_errors' => '沒有錯誤被記錄.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> 新橫幅',
	'purge_errors' => '清除錯誤',
	'confirm_purge_errors' => '您確定要清除所有錯誤?',
	'mcassoc_help' => 'mcassoc是一個外部驗證服務，可以用來驗證用戶他們已經註冊Minecraft帳號，要使用此功能請至 <a href="https://mcassoc.lukegb.com/" target="_blank">此處</a> 領取共享密鑰.',
	'mcassoc_key' => 'mcassoc 共享密鑰',
	'mcassoc_instance' => 'mcassoc 實例密鑰',
	'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">取得一個實例密鑰</a>',
	'mcassoc_error' => '請確認您已經輸入正確的共享密鑰及生成實例密鑰.',
	'updated_mcassoc_successfully' => 'mcassoc 設定已成功更新.',
	'force_premium_accounts' => '強制正版 Minecraft 帳戶?',
	'banner_background' => '橫幅背景',
	'query_interval' => 'Query 間格 (以分鐘計算，5~60分鐘)',
	'player_graphs' => '玩家圖表',
	'player_count_cronjob_info' => '你可以設置一個cron作業，每間格 {x} 分鐘就使用下列指令查詢伺服器:',

	// Modules
	'modules_installed_successfully' => '全部模組都已經安裝成功.',
	'enabled' => '啟用',
	'disabled' => '禁用',
	'enable' => '啟用',
	'disable' => '禁用',
	'module_enabled' => '模組啟用.',
	'module_disabled' => '模組禁用.',
	'author' => '作者:',

	// Styles
	'templates' => '樣式',
	'template_outdated' => '我們偵測到您使用的樣式為適用於NamelessMC版本 {x}，但您使用的版本為 {y}', // Don't replace "{x}" or "{y}"
	'active' => '使用',
	'deactivate' => '停用',
	'activate' => '使用中',
	'warning_editing_default_template' => '警告! 建議您不要編輯預設樣式.',
	'images' => '圖片',
	'upload_new_image' => '上傳新圖片',
	'reset_background' => '重設背景',
	'install' => '<i class="fa fa-plus-circle"></i> 安裝',
	'template_updated' => '樣式成功更新.',
	'default' => '預設',
	'make_default' => '設為預設',
	'default_template_set' => '預設樣式已設定為 {x} .', // Don't replace {x}
	'template_deactivated' => '樣式停用.',
	'template_activated' => '樣式啟用.',
	'permissions' => '權限',
	'setting_perms_for_x' => '設定樣式 {x} 權限', // Don't replace {x}
	'templates_installed_successfully' => '所有新樣式安裝成功.',
	'confirm_delete_template' => '您要移除這個樣式嗎?',
	'delete' => '移除',
	'template_deleted_successfully' => '樣式移除成功.',
	'background_image_x' => 'Background image: <strong>{x}</strong>', // Don't replace {x}

	// Users & groups
	'users' => '使用者',
	'groups' => '群組',
	'group' => '群組',
	'new_user' => '<i class="fa fa-plus-circle"></i> 新使用者',
	'creating_new_user' => '建立新使用者',
	'registered' => '已註冊',
	'user_created' => '使用者建立成功.',
	'cant_delete_root_user' => '無法移除root使用者!',
	'cant_modify_root_user' => '無法修改root使用者的群組!',
	'user_deleted' => '使用者移除成功.',
	'confirm_user_deletion' => '你確定要移除 <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => '驗證使用者',
	'update_uuid' => '更新 UUID',
	'update_mc_name' => '更新 Minecraft Username',
	'reset_password' => '重製密碼',
	'punish_user' => '懲罰使用者',
	'delete_user' => '移除使用者',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => '其他動作',
	'disable_avatar' => '禁用頭像',
	'select_user_group' => '你必須選取使用者群組.',
	'uuid_max_32' => 'UUID最高限制 32 字元.',
	'title_max_64' => '用戶標題最高限制 64 字元.',
	'group_id' => 'Group ID',
	'name' => '名稱',
	'title' => '用戶標題',
	'new_group' => '<i class="fa fa-plus-circle"></i> 新群組',
	'group_name_required' => '請輸入群組名稱.',
	'group_name_minimum' => '群組名稱最低限制 2 字元.',
	'group_name_maximum' => '群組名稱最高限制 20 字元.',
	'creating_group' => '建立新群組',
	'group_html_maximum' => '群組HTML模式下最高限制 1024 字元',
	'group_html' => 'Group HTML',
	'group_html_lg' => 'Group 大量HTML',
	'group_username_colour' => '群組使用者顏色',
	'group_staff' => '這是管理群組?',
	'group_modcp' => '群組可以訪問 控制員 後台嗎?',
	'group_admincp' => '群組可以訪問 管理員 後台嗎?',
	'delete_group' => '移除群組',
	'confirm_group_deletion' => '確定要移除群組 {x}?', // Don't replace {x}
	'group_not_exist' => '群組不存在.',
	'secondary_groups' => '次要群組',
	'secondary_groups_info' => '使用者將會從這些組別獲得權限，<strong>Ctrl+點擊</strong>可選擇/取消群組.',
	'unable_to_update_uuid' => 'Unable to update UUID.',
	'default_group' => 'Is the group the default group (for new users)?',

	// Permissions
    'select_all' => 'Select All',
    'deselect_all' => 'Deselect All',
	'background_image' => 'Background image',
	'can_edit_own_group' => 'Can edit own group\'s permissions',
	'permissions_updated_successfully' => 'Permissions updated successfully.',
	'cant_edit_this_group' => 'You can\'t edit this group\'s permissions!',

	// General Admin language
	'task_successful' => '任務成功.',
	'invalid_action' => '無效操作.',
	'enable_night_mode' => '啟用夜晚模式',
	'disable_night_mode' => '禁用夜晚模式',
	'view_site' => '返回網站',
	'signed_in_as_x' => '目前使用<strong>{x}</strong>登入', // Don't replace {x}
    'warning' => '警告',

    // Maintenance
    'maintenance_mode' => '維護模式',
    'maintenance_enabled' => '維護模式已啟用.',
    'enable_maintenance_mode' => '啟用維護模式?',
    'maintenance_mode_message' => '維護模式訊息',
    'maintenance_message_max_1024' => '維護模式最高限制 1024 字元.',

	// Security
	'acp_logins' => '管理員登入',
	'please_select_logs' => '請選擇紀錄顯示',
	'ip_address' => 'IP位置',
	'template_changes' => '模板更改',
	'file_changed' => '檔案更改',
	'all_logs' => 'All Logs',
	'action' => 'Action',
	'action_info' => 'Action Info',

	// Updates
	'update' => '更新',
	'current_version_x' => '目前版本: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => '新版本: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => '已找到一個新的更新',
	'up_to_date' => '您的 NamelessMC 是最新版本的!',
	'urgent' => '此更新是一個緊急更新!',
	'changelog' => '更新紀錄',
	'update_check_error' => '檢查更新時發生錯誤:',
	'instructions' => '說明',
	'download' => '下載',
	'install_confirm' => '請確保您已經下載了軟件包並已上傳包含的檔案!',

	// Widgets
	'widgets' => '小工具',
	'widget_enabled' => '小工具啟用.',
	'widget_disabled' => '小工具禁用.',
	'editing_widget_x' => '編輯小工具 {x}', // Don't replace {x}
	'module_x' => '模組: {x}', // Don't replace {x}

    // Online users widget
    'include_staff_in_user_widget' => 'Include staff members in user widget?',

	// Custom Pages
	'pages' => '自訂頁面',
	'new_page' => '<i class="fa fa-plus-circle"></i> 新自訂頁面',
	'no_custom_pages' => '沒有自訂頁面.',
	'creating_new_page' => '建立自訂頁面',
	'page_title' => '自訂頁面標題',
	'page_path' => '自訂頁面資料 (使用 "/". eg: /example)',
	'page_icon' => '自訂頁面圖標',
	'page_link_location' => '自訂頁面顯示位置',
	'page_link_navbar' => '導覽行',
	'page_link_footer' => '頁底',
	'page_link_more' => '"更多" 下拉選單',
	'page_link_none' => '無連結',
	'page_content' => '自訂頁面內文',
	'page_redirect' => '自訂頁面轉址?',
	'page_redirect_to' => '轉址網址 (http://)',
	'unsafe_html' => '允許使用不安全的 HTML?',
	'unsafe_html_warning' => '啟用此選項表示你可以使用任何的HTML標籤，包括未加密的JavaScript，確定HTML是安全的再開啟',
	'page_permissions' => '自訂頁面權限',
	'view_page' => '查看自訂頁面?',
	'editing_page_x' => '編輯自訂頁面 {x}', // Don't replace {x}
    'unable_to_create_page' => '無法建立自訂頁面:',
	'page_title_required' => '自訂頁面的標題是需要的.',
	'page_url_required' => '自訂頁面的資料是需要的.',
	'link_location_required' => '自訂頁面的連結是需要的.',
	'page_title_minimum_2' => '自訂頁面的標題最低限制 2 字元.',
	'page_url_minimum_2' => '自訂頁面的資料最低限制 2 字元.',
	'page_title_maximum_30' => '自訂頁面的標題最高限制 30 字元.',
	'page_icon_maximum_64' => '自訂頁面的圖標最高限制 30 字元.',
	'page_url_maximum_20' => '自訂頁面的資料最低限制 20 字元.',
	'page_content_maximum_20480' => '自訂頁面的內文最高限制 20480 字元.',
	'page_redirect_link_maximum_512' => '自訂頁面的轉址網址最高限制 512 字元',
	'confirm_delete_page' => '移除自訂頁面?',

	// API
    'api' => 'API',
	'enable_api' => 'Enable API?',
	'api_info' => 'The API allows for plugins and other services to interact with your website, such as the <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >official Nameless plugin</a>.',
	'enable_legacy_api' => 'Enable legacy API?',
	'legacy_api_info' => 'The legacy API allows plugins which use the old Nameless version 1 API to work with your version 2 website.',
	'confirm_api_regen' => 'Are you sure you want to regenerate your API key?',
	'api_registration_email' => 'API Registration Email',
	'link_to_complete_registration' => 'Link to complete registration: {x}', // Don't replace {x}
	'api_verification' => 'Enable API verification?',
	'api_verification_info' => 'If enabled, accounts can only be verified through the API, for example ingame using the official Nameless plugin. <strong>This option will override email verification, and accounts will be automatically activated!</strong><br />You should set up your default group to have limited permissions, and then update the post-validation group in the AdminCP -> Core -> Registration tab to the full member group with normal permissions.',
	'enable_username_sync' => 'Enable username sync?',
	'enable_username_sync_info' => 'If enabled, website usernames will be updated to match ingame usernames.',

	// File uploads
	'drag_files_here' => '拖曳檔案至此上傳.',
	'invalid_file_type' => '錯誤檔案類型!',
	'file_too_big' => '檔案過大! 您的檔案大小為 {{filesize}} 最高限制為 {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => 'Allowed Proxies',
	'allowed_proxies_info' => 'Line separated list of allowed proxy IPs.',

	// Error logs
	'error_logs' => 'Error Logs',
	'notice_log' => 'Notice log',
	'warning_log' => 'Warning log',
	'custom_log' => 'Custom log',
	'other_log' => 'Other log',
	'fatal_log' => 'Fatal log',
	'log_file_not_found' => 'Log file not found.',

	// Hooks
	'discord_hooks' => 'Discord Hooks',
	'discord_hooks_info' => 'Send a message to a Discord channel when something happens on your site. Create a Discord hook in your Discord Server Settings -> Webhooks tab.',
	'discord_hook_url' => 'Discord webhook URL',
	'discord_hook_events' => 'Enabled Discord hook events (Ctrl+click to select multiple events)',
	'register_hook_info' => 'User registration',
	'validate_hook_info' => 'User validation'
);
