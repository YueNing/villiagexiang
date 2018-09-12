<?php 
/*
 *	Made by Birkhoff
 *  https://birkhoff.me
 *
 *  License: MIT
 */

/*
 *  Chinese Language
 */
 
/*
 *  Admin Panel
 */
$admin_language = array(
	// General terms
	'admin_cp' => '管理后台',
	'infractions' => 'Infractions',
	'invalid_token' => '不正确的 token，请重试。',
	'invalid_action' => '非法行为',
	'successfully_updated' => '更新成功',
	'settings' => '设置',
	'confirm_action' => '确认操作',
	'edit' => '编辑',
	'actions' => '操作',
	'task_successful' => '任务执行成功',
	
	// Admin login
	're-authenticate' => '请重新登录',
	
	// Admin sidebar
	'index' => '首页',
	'announcements' => '公告',
	'core' => '核心',
	'custom_pages' => '自定义页面',
	'general' => '一般',
	'forums' => '论坛',
	'users_and_groups' => '用户与组',
	'minecraft' => 'Minecraft',
	'style' => '样式',
	'addons' => '插件',
	'update' => '更新',
	'misc' => '杂项',
	'help' => '帮助',
	
	// Admin index page
	'statistics' => '统计',
	'registrations_per_day' => '每天的注册人数（最近七天）',
	
	// Admin announcements page
	'current_announcements' => '目前的公告',
	'create_announcement' => '建立一个公告',
	'announcement_content' => '公告內容',
	'announcement_location' => '公告位置',
	'announcement_can_close' => '可以关闭公告吗？',
	'announcement_permissions' => '公告权限',
	'no_announcements' => '目前还沒有建立任何公告。',
	'confirm_cancel_announcement' => '你确定要取消这个公告吗？',
	'announcement_location_help' => '按住 Ctrl 並點選以选择多个页面',
	'select_all' => '全選',
	'deselect_all' => '取消全選',
	'announcement_created' => '公告建立完毕',
	'please_input_announcement_content' => '请输入公告內容並且选择一个類型',
	'confirm_delete_announcement' => '你确定要刪除这个公告吗？',
	'announcement_actions' => '公告操作',
	'announcement_deleted' => '公告刪除完成',
	'announcement_type' => '公告類型',
	'can_view_announcement' => '可以查看公告吗？',
	
	// Admin core page
	'general_settings' => '一般設定',
	'modules' => '模組',
	'module_not_exist' => '找不到該模組！',
	'module_enabled' => '模組啟用完毕。',
	'module_disabled' => '模組停用完毕。',
	'site_name' => '網站名稱',
	'language' => '語言',
	'voice_server_not_writable' => '无法寫入 core/voice_server.php，请檢查檔案权限。',
	'email' => '電子郵件位址',
	'incoming_email' => 'Incoming 電子郵件位址',
	'outgoing_email' => 'Outgoing 電子郵件位址',
	'outgoing_email_help' => '只有在已啟用 PHP mail() 函式的狀況之下才需要填寫',
	'use_php_mail' => '使用 PHP mail() 函式',
	'use_php_mail_help' => '建議啟用。如果无法发送電子郵件，请停用此项並且進入 core/email.php 進行電子郵件的設定。',
	'use_gmail' => '使用 Gmail 來发送電子郵件',
	'use_gmail_help' => '只有在 PHP mail() 函式停用的時候才可以使用。如果你选择不使用 Gmail，系统將會使用 SMTP。兩種情況都需要你在 core/email.php 中進行設定。',
	'enable_mail_verification' => '啟用電子郵件驗證',
	'enable_email_verification_help' => '若你啟用此项，新使用者注册時將會被要求驗證他们的電子郵件位址才能完成注册。',
	'explain_email_settings' => '若你停用了「使用 PHP mail() 函式」 選项，則以下项目為必填。你可以在<a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">我们的維基页面</a>上找到更多关於此项設定的资料。',
	'email_config_not_writable' => '无法寫入 <strong>core/email.php</strong>，请檢查檔案权限。',
	'pages' => '页面',
	'enable_or_disable_pages' => '在这里啟用或停用页面。',
	'enable' => '啟用',
	'disable' => '停用',
	'maintenance_mode' => '帖子維護模式',
	'forum_in_maintenance' => '帖子目前處於維護模式中',
	'unable_to_update_settings' => '无法更新設定，请确认所有欄位都已填入资料。',
	'editing_google_analytics_module' => '設定 Google Analytics 模組',
	'tracking_code' => '追蹤代碼',
	'tracking_code_help' => '在这里填入你的 Google Analytics 追蹤代碼，包括被 script 标签包住的部分。',
	'google_analytics_help' => '查看<a href="https://support.google.com/analytics/answer/1008080?hl=en#GA" target="_blank">这个教學</a>以了解更多，跟隨步驟一至步驟三。',
	'social_media_links' => '社交媒體連结',
	'youtube_url' => 'YouTube 連结',
	'twitter_url' => 'Twitter 連结（不要在结尾加上「/」）',
	'twitter_dark_theme' => '使用黑色的 Twitter 布景主题',
	'twitter_widget_id' => 'Twitter 小工具 ID',
	'google_plus_url' => 'Google+ 連结',
	'facebook_url' => 'Facebook 連结',
	'registration' => '注册',
	'registration_warning' => '若停用此模組，新使用者將无法在本站注册。',
	'google_recaptcha' => '啟用 Google reCAPTCHA',
	'recaptcha_site_key' => 'reCAPTCHA Site Key',
	'recaptcha_secret_key' => 'reCAPTCHA Secret Key',
	'registration_terms_and_conditions' => '注册條款',
	'voice_server_module' => '語音服务器模組',
	'only_works_with_teamspeak' => '此模組目前僅支援 TeamSpeak 与 Discord',
	'discord_id' => 'Discord 服务器 ID',
	'voice_server_help' => '请输入 ServerQuery 使用者的资料',
	'ip_without_port' => 'IP 位址（不包含連线埠）',
	'voice_server_port' => '連线埠（一般而言為 10011）',
	'virtual_port' => '虛擬連线埠（一般而言為 9987）',
	'permissions' => '权限：',
	'view_applications' => '查看申请表单',
	'accept_reject_applications' => '接受/拒绝申请',
	'questions' => '問题：',
	'question' => '問题',
	'type' => '類別',
	'options' => '選项',
	'options_help' => '每个選项占一行，可以留空（僅下拉選单）',
	'no_questions' => '还沒有新增任何問题。',
	'new_question' => '新的問题',
	'editing_question' => '编辑問题',
	'delete_question' => '刪除問题',
	'dropdown' => '下拉選单',
	'text' => '文字',
	'textarea' => '文字區塊',
	'question_deleted' => '問题已刪除',
	'name_required' => 'Name is required.',
	'question_required' => 'Question is required.',
	'name_minimum' => 'Name must be a minimum of 2 characters.',
	'question_minimum' => 'Question must be a minimum of 2 characters.',
	'name_maximum' => 'Name must be a maximum of 16 characters.',
	'question_maximum' => 'Question must be a maximum of 16 characters.',
	'use_followers' => '使用追隨者',
	'use_followers_help' => '如果停用此選项，系统將會啟用好友系统。',
	
	// Admin custom pages page
	'click_on_page_to_edit' => '點選一个页面來编辑',
	'page' => '页面：',
	'url' => '網址：',
	'page_url' => '页面網址',
	'page_url_example' => '（包含最前面的「/」，例如「/help/」）',
	'page_title' => '页面标题',
	'page_content' => '页面內容',
	'new_page' => '新的页面',
	'page_successfully_created' => '页面建立完毕',
	'page_successfully_edited' => '页面编辑完毕',
	'unable_to_create_page' => '页面建立失敗',
	'unable_to_edit_page' => '页面编辑失敗',
	'create_page_error' => '请确认你输入的網址的長度在 1 ~ 20 个字元之內，标题在 1 ~ 30 个字元之內，且內容在 5 ~ 20480 个字元之內。',
	'delete_page' => '刪除页面',
	'confirm_delete_page' => '你确定要刪除这个页面吗？',
	'page_deleted_successfully' => '页面刪除完毕',
	'page_link_location' => '页面連结显示位置：',
	'page_link_navbar' => '導航列',
	'page_link_more' => '導航列的「更多」下拉選单',
	'page_link_footer' => '页尾',
	'page_link_none' => '不显示連结',
	'page_permissions' => '页面权限',
	'can_view_page' => '可查看页面：',
	'redirect_page' => 'Redirect page?',
	'redirect_link' => 'Redirect link',
	'page_icon' => '页面圖示',
	
	// Admin forum page
	'labels' => '主题标签',
	'new_label' => '新的标签',
	'no_labels_defined' => '尚未定義任何标签',
	'label_name' => '标签名稱',
	'label_type' => '标签類型',
	'label_forums' => 'Label Forums',
	'label_creation_error' => '标签建立失敗。请确认該标签的名字不超过 32 个字元，且选择了一个類型。',
	'confirm_label_deletion' => '你确定要刪除这个标签吗？',
	'editing_label' => '编辑标签',
	'label_creation_success' => '标签建立完毕',
	'label_edit_success' => '标签编辑完毕',
	'label_default' => '預設',
	'label_primary' => '主要',
	'label_success' => '成功',
	'label_info' => '资訊',
	'label_warning' => '警告',
	'label_danger' => '危險',
	'new_forum' => '新的帖子',
	'forum_layout' => '帖子樣式',
	'table_view' => '显示帖子列表',
	'latest_discussions_view' => '显示最新文章',
	'create_forum' => '建立帖子',
	'forum_name' => '帖子名稱',
	'forum_description' => '帖子描述',
	'delete_forum' => '刪除帖子',
	'move_topics_and_posts_to' => '將主题与文章移动至',
	'delete_topics_and_posts' => '刪除主题与文章',
	'parent_forum' => '父帖子',
	'has_no_parent' => '沒有父项',
	'forum_permissions' => '帖子权限',
	'can_view_forum' => '可以查看帖子',
	'can_create_topic' => '可以建立主题',
	'can_post_reply' => '可以发表回覆',
	'display_threads_as_news' => '將主题显示在首页上的新闻欄',
	'input_forum_title' => '输入一个帖子标签。',
	'input_forum_description' => '输入一个帖子描述（你可以使用 HTML 語法）。',
	'forum_name_minimum' => '帖子名稱的最小值為不小於 2 个字元。',
	'forum_description_minimum' => '帖子描述的最小值為不小於 2 个字元。',
	'forum_name_maximum' => '帖子名稱的最大值為不超过 150 个字元。',
	'forum_description_maximum' => '帖子描述的最大值為不超过 255 个字元。',
	'forum_type_forum' => '帖子',
	'forum_type_category' => '作為類別使用',
	
	// Admin Users and Groups page
	'users' => '使用者',
	'new_user' => '新的使用者',
	'created' => 'Created',
	'user_deleted' => '使用者已刪除',
	'validate_user' => '驗證这个使用者',
	'update_uuid' => '更新 UUID',
	'unable_to_update_uuid' => 'UUID 更新失敗。',
	'update_mc_name' => '更新 Minecraft 名稱',
	'reset_password' => '重設密碼',
	'punish_user' => '懲罰使用者',
	'delete_user' => '刪除使用者',
	'minecraft_uuid' => 'Minecraft UUID',
	'ip_address' => 'IP 位址',
	'ip' => 'IP 位址：',
	'other_actions' => '其他动作：',
	'disable_avatar' => '停用大頭照',
	'enable_avatar' => '啟用大頭照',
	'confirm_user_deletion' => '你确定要刪除使用者「{x}」吗？', // Don't replace "{x}"
	'groups' => '組別',
	'group' => '組別',
	'group' => '組別 2',
	'new_group' => '新的組別',
	'id' => 'ID',
	'name' => '名稱',
	'create_group' => '建立組別',
	'group_name' => '組別名稱',
	'group_html' => '組別 HTML',
	'group_html_lg' => '組別 HTML Large',
	'donor_group_id' => '贊助者商品 ID',
	'donor_group_id_help' => '<p>該組別的 Buycraft、MinecraftMarket 或 MCStock 商品 ID。</p><p>此處可以留空。</p>',
	'donor_group_instructions' => 	'<p>贊助者的組別必须以價格<strong>從小到大</strong>的順序依次建立。</p>
									<p>例如，一个 $100 新台幣的项目必须在一个 $200 新台幣的项目之前建立好。</p>',
	'delete_group' => '刪除組別',
	'confirm_group_deletion' => '你确定要刪除組別 {x} 吗？', // Don't replace "{x}"
	'group_staff' => '这是工作人員組別吗？',
	'group_modcp' => '这个組別可以查看 ModCP 吗？',
	'group_admincp' => '这个組別可以查看 AdminCP 吗？',
	'group_name_required' => '你必须填寫一个組別名稱。',
	'group_name_minimum' => '組別名稱最少要有 2 个字元。',
	'group_name_maximum' => '組別名稱最多不能超过 20 个字元。',
	'html_maximum' => '組別 HTML 最多不能超过 1024 个字元。',
	'select_user_group' => '該使用者必须在一个組別內。',
	'uuid_max_32' => 'UUID 最多不能超过 32 个字元。',
	'cant_delete_root_user' => '无法刪除 root 使用者！',
	'cant_modify_root_user' => '无法變更 root 使用者的組別.',
	
	// Admin Minecraft page
	'minecraft_settings' => 'Minecraft 設定',
	'use_plugin' => '啟用 Nameless API？',
	'force_avatars' => '強制使用 Minecraft 大頭照',
	'uuid_linking' => '啟用 UUID 連结',
	'use_plugin_help' => '啟用 API 与即將到來的服务器插件將讓你能夠同步 rank，且在游戲內注册本站的賬號，以及檢舉玩家。',
	'uuid_linking_help' => '如果停用这个選项，使用者賬號將不會与其 UUID 連结。強烈建議啟用此選项。',
	'plugin_settings' => '插件設定',
	'confirm_api_regen' => '你确定要產生一个新的 API 金鑰吗？',
	'servers' => '服务器',
	'new_server' => '新的服务器',
	'confirm_server_deletion' => '你确定要移除这个服务器吗？',
	'main_server' => '主服务器',
	'main_server_help' => '玩家連线的服务器。一般而言这个服务器會是个 BungeeCord 實例。',
	'choose_a_main_server' => '选择一个主服务器 ...',
	'external_query' => '使用外部查询',
	'external_query_help' => '使用外部 API 來查询 Minecraft 服务器。如果內建的查询功能无法使用再啟用此项，否則我们強烈建議停用此项。',
	'editing_server' => '正在编辑服务器 {x}', // Don't replace "{x}"
	'server_ip_with_port' => '服务器 IP 位址（含連线埠）（可為數字或網域名稱）',
	'server_ip_with_port_help' => '这是使用者會看到的 IP 位址，系统不會查询它。',
	'server_ip_numeric' => '服务器 IP 位址（含連线埠）（僅數字与小數點）',
	'server_ip_numeric_help' => '系统會查询这个 IP 位址，请确认它僅含數字与小數點。使用者不會看到此项。',
	'show_on_play_page' => '要显示在「游玩」页面上吗？',
	'pre_17' => 'Pre 1.7 Minecraft 版本',
	'server_name' => '服务器名稱',
	'invalid_server_id' => '服务器 ID 错误',
	'show_players' => '在「游玩」页面上显示玩家列表',
	'server_edited' => '服务器编辑完毕',
	'server_created' => '服务器建立完毕',
	'query_errors' => '查询发生的错误',
	'query_errors_info' => '你可以用以下的错误资訊來診斷內部服务器查询的問题。',
	'no_query_errors' => '沒有任何查询错误',
	'date' => '日期：',
	'port' => '連线埠：',
	'viewing_error' => 'Viewing Error',
	'confirm_error_deletion' => '你确定要刪除这个错误吗？',
	'display_server_status' => '显示服务器状态模組',
	'server_name_required' => '你必须输入一个服务器名稱。',
	'server_ip_required' => '你必须输入該服务器的 IP 位址。',
	'server_name_minimum' => '服务器名稱最少要有 2 个字元。',
	'server_ip_minimum' => '服务器 IP 位址最少要有 2 个字元。',
	'server_name_maximum' => '服务器名稱最最多可以有 20 个字元。',
	'server_ip_maximum' => '服务器 IP 位址最多可以有 64 个字元。',
	'purge_errors' => '清除错误',
	'confirm_purge_errors' => '你确定要清除所有查询错误吗？',
	'avatar_type' => '大頭照類型',
	'custom_usernames' => '強制使用 Minecraft 名稱',
	'mcassoc' => 'mcassoc',
	'use_mcassoc' => '使用 mcassoc',
	'use_mcassoc_help' => 'mcassoc 可以确保使用者擁有他们正用來注册本站賬號的 Minecraft 賬號',
	'mcassoc_key' => 'mcassoc 共享金鑰',
	'invalid_mcassoc_key' => 'mcassoc 金鑰不正确',
	'mcassoc_instance' => 'mcassoc Instance',
	'mcassoc_instance_help' => '在<a href="http://jsbin.com/jadofehoqu/1/" target="_blank">这里</a>建立一个 Instance 代碼',
	'mcassoc_key_help' => '在<a href="https://mcassoc.lukegb.com/" target="_blank">这里</a>取得你的 mcassoc 金鑰',
	'enable_name_history' => 'Enable profile username history?',
	
	// Admin Themes, Templates and Addons
	'themes' => '布景主题',
	'templates' => '模板',
	'installed_themes' => '已安裝的布景主题',
	'installed_templates' => '已安裝的模板',
	'installed_addons' => '已安裝的插件',
	'install_theme' => '安裝布景主题',
	'install_template' => '安裝模板',
	'install_addon' => '安裝插件',
	'install_a_theme' => '安裝一个布景主题',
	'install_a_template' => '安裝一个模板',
	'install_an_addon' => '安裝一个插件',
	'active' => '使用中',
	'activate' => '啟用',
	'deactivate' => '停用',
	'theme_install_instructions' => '请上傳布景主题到 <strong>styles/themes</strong>，然後點選下方的「掃描」按鈕。',
	'template_install_instructions' => '请上傳模板到 <strong>styles/templates</strong>，然後點選下方的「掃描」按鈕。',
	'addon_install_instructions' => '请上傳插件到 <strong>addons</strong>，然後點選下方的「掃描」按鈕。',
	'addon_install_warning' => '安裝插件有一定的風險，安裝前请備份你的檔案与资料庫',
	'scan' => '掃描',
	'theme_not_exist' => '找不到該布景主题。',
	'template_not_exist' => '找不到該模板。',
	'addon_not_exist' => '找不到該插件。',
	'style_scan_complete' => '完成，所有的新樣式都安裝好了。',
	'addon_scan_complete' => '完成，所有的新插件都安裝好了。',
	'theme_enabled' => '布景主题啟用完毕。',
	'template_enabled' => '模板啟用完毕。',
	'addon_enabled' => '插件啟用完毕。',
	'theme_deleted' => '布景主题刪除完毕。',
	'template_deleted' => '模板刪除完毕。',
	'addon_disabled' => '插件停用完毕。',
	'inverse_navbar' => '反轉導航列顏色',
	'confirm_theme_deletion' => '你确认要刪除布景主题 <strong>{x}</strong>吗？<br /><br />該布景主题將會自 <strong>styles/themes</strong> 刪除。', // Don't replace {x}
	'confirm_template_deletion' => '你确认要刪除模板 <strong>{x}</strong>吗？<br /><br />該模板將會自 <strong>styles/templates</strong> 刪除。', // Don't replace {x}
	'unable_to_enable_addon' => 'Could not enable addon. Please ensure it is a valid NamelessMC addon.',
	
	// Admin Misc page
	'other_settings' => '其他設定',
	'enable_error_reporting' => '显示错误',
	'error_reporting_description' => '这應該只拿來作除錯用，非常建議停用此项目。',
	'display_page_load_time' => '显示页面載入时间',
	'page_load_time_description' => '若啟用此项，页尾將會显示页面載入时间。',
	'reset_website' => '重設網站',
	'reset_website_info' => '这將會重設本站的設定。<strong>插件將會被停用，並不會被刪除，且他们的設定將不會被變更。</strong>你設定的 Minecraft 服务器资料也會被保留。',
	'confirm_reset_website' => '你确定要重設本站的設定吗？',
	
	// Admin Update page
	'installation_up_to_date' => '已經是最新版本。',
	'update_check_error' => '无法檢查更新，请稍後再重試。',
	'new_update_available' => '可以進行更新',
	'your_version' => '目前的版本：',
	'new_version' => '新的版本：',
	'download' => '下載',
	'update_warning' => '警告：请确认你已經下載了更新壓縮檔並已上傳了里面的资料！'
);

/*
 *  Navbar
 */
$navbar_language = array(
	// Text only
	'home' => '首页',
	'play' => '游戏',
	'forum' => '论坛',
	'more' => 'More',
	'staff_apps' => '申请成為工作人員',
	'view_messages' => '查看訊息',
	'view_alerts' => '查看通知',
	
	// Icons - will display before the text
	'home_icon' => '',
	'play_icon' => '',
	'forum_icon' => '',
	'staff_apps_icon' => ''
);

/*
 * User Related
 */
$user_language = array(
	// Registration
	'create_an_account' => '注册账号',
	'authme_password' => 'AuthMe 密碼',
	'username' => '用户名',
	'minecraft_username' => 'Minecraft 用户名',
	'email' => '电子邮件',
	'user_title' => 'Title',
	'email_address' => '電子郵件位址',
	'date_of_birth' => '生日',
	'location' => '所在地区',
	'password' => '密码',
	'confirm_password' => '确认密码',
	'i_agree' => '同意',
	'agree_t_and_c' => '当你点下<strong class="label label-primary">注册</strong>按钮，即表示您同意我们的<a href="#" data-toggle="modal" data-target="#t_and_c_m">服務條款</a>。',
	'register' => '注册',
	'sign_in' => '登录',
	'sign_out' => '退出',
	'terms_and_conditions' => '服务条款',
	'successful_signin' => '登入成功',
	'incorrect_details' => '错误的使用者名稱或密碼',
	'remember_me' => '記住我',
	'forgot_password' => '忘記密碼',
	'must_input_username' => '你必须输入使用者名稱。',
	'must_input_password' => '你必须输入密碼。',
	'inactive_account' => '你的賬號目前已被停用，你是不是有要求重設密碼？',
	'account_banned' => '你的賬號已被封锁。',
	'successfully_logged_out' => '登出成功。',
	'signature' => '簽名檔',
	'registration_check_email' => '请到你的電子信箱內寻找賬號啟用連结。在你點選該連结之前，你將无法登入。',
	'unknown_login_error' => '抱歉，將您登入時发生未知错误。请稍後再重試。',
	'validation_complete' => '感谢您的注册！您現在可以登入。',
	'validation_error' => '无法處理您的请求。请試著重新點選該連结。',
	'registration_error' => '请确认你填寫了所有的欄位，且你的使用者名稱的長度在 3 ~ 20 个字元之間，密碼長度在 6 ~ 30 个字元之間。',
	'username_required' => '请输入使用者名稱。',
	'password_required' => '请输入密碼。',
	'email_required' => '请输入電子郵件位址。',
	'mcname_required' => '请输入 Minecraft 名稱。',
	'accept_terms' => '你必须同意服務條款以繼續',
	'invalid_recaptcha' => 'reCAPTCHA 回應驗證失敗。',
	'username_minimum_3' => '你的使用者名稱最少要有 3 个字元。',
	'username_maximum_20' => '你的使用者名稱長度不能超过 20 个字元。',
	'mcname_minimum_3' => '你的 Minecraft 名稱最少要有 3 个字元。',
	'mcname_maximum_20' => '你的 Minecraft 名稱長度不能超过 20 个字元。',
	'password_minimum_6' => '你的密碼最少要有 6 个字元。',
	'password_maximum_30' => '你的密碼長度不能超过 20 个字元。',
	'passwords_dont_match' => '兩次输入的密碼不一致。',
	'username_mcname_email_exists' => '你的使用者名稱、Minecraft 名稱或電子郵件位址已被使用。你是不是已經注册过了？',
	'invalid_mcname' => '你输入的 Minecraft 名稱並不是一个合法的賬戶',
	'mcname_lookup_error' => '无法与 Mojang 服务器驗證您的賬戶，请稍後重試。',
	'signature_maximum_900' => '你的簽名檔長度不能超过 900 个字元。',
	'invalid_date_of_birth' => '请输入一个正确的生日。',
	'location_required' => '请输入所在地區。',
	'location_minimum_2' => '你的所在地區名稱長度至少要 2 个字元。',
	'location_maximum_128' => '你的所在地區名稱長度最多不可超过 128 个字元。',
	'verify_account' => '驗證賬號',
	'verify_account_help' => '请跟隨下方的指示以驗證我们认為您有問题的 Minecraft 賬號。',
	'verification_failed' => '驗證失敗，请稍後再試一次。',
	'verification_success' => '驗證完成！您現在可以登入。',
	'complete_signup' => '完成注册',
	'registration_disabled' => '注册功能目前已被停用。',
	
	// UserCP
	'user_cp' => '个人設定',
	'no_file_chosen' => '未选择任何檔案',
	'private_messages' => '私人訊息',
	'profile_settings' => '个人资料設定',
	'your_profile' => '你的主页',
	'topics' => '主题',
	'posts' => '文章',
	'reputation' => '声望',
	'friends' => '好友',
	'alerts' => '通知',
	
	// Messaging
	'new_message' => '新的訊息',
	'no_messages' => '沒有訊息',
	'and_x_more' => '还有 {x} 个', // Don't replace "{x}"
	'system' => '系统',
	'message_title' => '訊息标题',
	'message' => '訊息',
	'to' => 'To:',
	'separate_users_with_comma' => '以半形逗點來區隔使用者（「,」）',
	'viewing_message' => '正在查看訊息',
	'delete_message' => '刪除訊息',
	'confirm_message_deletion' => '你确定要刪除这个訊息吗？',
	
	// Profile settings
	'display_name' => '显示名稱',
	'upload_an_avatar' => '上傳一張大頭照（你只能上傳 jpg、png 或 gif 格式的圖片檔案）：',
	'use_gravatar' => '使用 Gravatar',
	'change_password' => '變更密碼',
	'current_password' => '現在的密碼',
	'new_password' => '新的密碼',
	'repeat_new_password' => '重複新的密碼',
	'password_changed_successfully' => '密碼重設完毕',
	'incorrect_password' => '現在的密碼输入错误',
	'update_minecraft_name_help' => '这將會把你在本站的使用者名稱變更為你現在的 Minecraft 使用者名稱。你每隔 30 天可以執行一次此动作。',
	'unable_to_update_mcname' => '无法更新 Minecraft 使用者名稱.',
	'display_age_on_profile' => '在个人资料上显示年齡',
	'two_factor_authentication' => '雙因素驗證',
	'enable_tfa' => '啟用雙因素驗證',
	'tfa_type' => '雙因素驗證類型：',
	'authenticator_app' => '雙因素驗證 App',
	'tfa_scan_code' => '请在你的雙因素驗證應用程式內掃描这个 QR code：',
	'tfa_code' => '如果你的設備沒有相機，或是你无法掃描 QR code，请手动输入这个代碼：',
	'tfa_enter_code' => '请將此代碼输入到你的雙因素驗證應用程式內：',
	'invalid_tfa' => '代碼错误，请重試。',
	'tfa_successful' => '雙因素驗證設定完毕。從現在開始，你每次登入我们都會要求你進行雙因素驗證。',
	'confirm_tfa_disable' => '你确定要停用雙因素驗證吗？',
	'tfa_disabled' => '雙因素驗證停用完毕。',
	'tfa_enter_email_code' => '我们已經傳送了一个驗證碼到你的電子郵件位址，请输入該驗證碼：',
	'tfa_email_contents' => '有人嘗試登入你的賬號。如果那是你，当你被要求输入雙因素驗證代碼時，请输入以下的代碼。如果那不是你，你可以忽略这封電子郵件，不过我们建議你重設你的密碼。这个代碼在十分钟內有效。',
	
	// Alerts
	'viewing_unread_alerts' => '正在查看未讀的通知。標記為<a href="/user/alerts/?view=read"><span class="label label-success">已讀</span></a>。',
	'viewing_read_alerts' => '正在查看已讀的通知。標記為<a href="/user/alerts/"><span class="label label-warning">未讀</span></a>。',
	'no_unread_alerts' => '你沒有未讀的通知。',
	'no_alerts' => '沒有通知',
	'no_read_alerts' => '你沒有已讀的通知。',
	'view' => 'View',
	'alert' => '通知',
	'when' => 'When',
	'delete' => 'Delete',
	'tag' => 'User Tag',
	'tagged_in_post' => '你在一則文章內被標記',
	'report' => 'Report',
	'deleted_alert' => '通知刪除完毕',
	
	// Warnings
	'you_have_received_a_warning' => 'You have received a warning from {x} dated {y}.', // Don't replace "{x}" or "{y}"
	'acknowledge' => '确认',
	
	// Forgot password
	'password_reset' => '密碼重設',
	'email_body' => '你因為请求重設密碼而受到了这封電子郵件。若你要重設你的密碼，请点击这个链接：', // Body for the password reset email
	'email_body_2' => '如果你沒有要重設你的密碼，直接忽略这封電子郵件即可。',
	'password_email_set' => '完成。请查看您的電子郵件以繼續。',
	'username_not_found' => '找不到这个使用者名稱。',
	'change_password' => '變更密碼',
	'your_password_has_been_changed' => '密碼變更完毕。',
	
	// Profile page
	'profile' => '主页',
	'player' => '玩家',
	'offline' => '离线',
	'online' => '在线上',
	'pf_registered' => '注册日期：',
	'pf_posts' => '文章數：',
	'pf_reputation' => '声望：',
	'user_hasnt_registered' => '这个人尚未在本站注册',
	'user_no_friends' => '这个人还沒有加任何好友',
	'send_message' => '傳送一个訊息',
	'remove_friend' => '刪除好友',
	'add_friend' => '添加好友',
	'last_online' => '最近一次上线：',
	'find_a_user' => '找一个人：',
	'user_not_following' => '这个人沒有追隨任何人。',
	'user_no_followers' => '沒有人追隨这个邊緣人。',
	'following' => 'FOLLOWING',
	'followers' => 'FOLLOWERS',
	'display_location' => '來自 {x}。', // Don't replace {x}, which will be the user's location
	'display_age_and_location' => '{x} 歲，來自 {y}。', // Don't replace {x} which will be the user's age, and {y} which will be their location
	'write_on_user_profile' => '在 {x} 的主页上寫些什麼吧 ...', // Don't replace {x}
	'write_on_own_profile' => '在你的主页上寫些什麼吧 ...',
	'profile_posts' => 'Profile Posts',
	'no_profile_posts' => 'No profile posts yet.',
	'invalid_wall_post' => 'Invalid wall post. Please ensure your post is between 2 and 2048 characters.',
	'about' => '关於',
	'reply' => '回覆',
	'x_likes' => '{x} 个讃', // Don't replace {x}
	'likes' => '讃數',
	'no_likes' => '沒有任何讃',
	'post_liked' => '给了該文章一个讃。',
	'post_unliked' => '收回了对該文章的讃。',
	'no_posts' => '沒有文章。',
	'last_5_posts' => '最新的五篇文章',
	'follow' => '追蹤',
	'unfollow' => '取消追蹤',
	'name_history' => 'Minecraft 名稱歷史',
	'changed_name_to' => '在 {y} 變更為 {x}', // Don't replace {x} or {y}
	'original_name' => '起初的名字：',
	'name_history_error' => '无法取得使用者名稱變更歷史。',
	
	// Staff applications
	'staff_application' => '工作人員申请',
	'application_submitted' => '表单提交完成。',
	'application_already_submitted' => '你已經提交了一个申请表单，前一个申请必须完成以提交另一个。',
	'not_logged_in' => '登入以繼續',
	'application_accepted' => '您的工作人員申请已被接受。',
	'application_rejected' => '您的工作人員申请已被回绝。'
);

/*
 *  Moderation related
 */
$mod_language = array(
	'mod_cp' => '工作人員後台',
	'overview' => '概览',
	'reports' => '举报',
	'punishments' => '惩罚',
	'staff_applications' => '工作人員申请表单',
	
	// Punishments
	'ban' => 'Ban',
	'unban' => '取消 Ban',
	'warn' => '警告',
	'search_for_a_user' => '搜寻使用者',
	'user' => '使用者：',
	'ip_lookup' => 'IP 位置查询：',
	'registered' => '注册时间',
	'reason' => '原因：',
	'cant_ban_root_user' => '无法處罰 root 使用者！',
	'invalid_reason' => '请输入一个 2 ~ 256 字元長的理由。',
	'punished_successfully' => '惩罚增加完毕。',
	
	// Reports
	'report_closed' => '举报已关闭',
	'new_comment' => '新的回覆',
	'comments' => '回覆',
	'only_viewed_by_staff' => '只有工作人員可以查看',
	'reported_by' => '檢舉人：',
	'close_issue' => '关闭問题',
	'report' => '举报：',
	'view_reported_content' => 'View reported content',
	'no_open_reports' => '沒有待受理的举报',
	'user_reported' => 'User Reported',
	'type' => '類型',
	'updated_by' => 'Updated By',
	'forum_post' => 'Forum Post',
	'user_profile' => '使用者主页',
	'comment_added' => '已新增回覆。',
	'new_report_submitted_alert' => '{x} 刚刚檢舉了 {y}', // Don't replace "{x}" or "{y}"
	'ingame_report' => '游戲內的檢舉',
	
	// Staff applications
	'comment_error' => '请确认您的回覆在 2 ~ 2048 个字元之內。',
	'viewing_open_applications' => '正在查看<span class="label label-info">待受理的</span>申请表单。<a href="/mod/applications/?view=accepted"><span class="label label-success">變更状态為接受</span></a>或<a href="/mod/applications/?view=declined"><span class="label label-danger">拒绝</span></a>.',
	'viewing_accepted_applications' => '正在查看<span class="label label-success">被接受的</span>申请表单。<a href="/mod/applications/"><span class="label label-info">變更状态為待受理</span></a>或<a href="/mod/applications/?view=declined"><span class="label label-danger">變更為拒绝</span></a>.',
	'viewing_declined_applications' => '正在查看<span class="label label-danger">被拒绝的</span>申请表单。<a href="/mod/applications/"><span class="label label-info">變更状态為待受理</span></a>或<a href="/mod/applications/?view=accepted"><span class="label label-success">變更為接受</span></a>.',
	'time_applied' => '申请时间',
	'no_applications' => '在此分類中沒有任何申请表单',
	'viewing_app_from' => 'Viewing application from {x}', // Don't replace "{x}"
	'open' => '待受理',
	'accepted' => '已接受',
	'declined' => '已拒绝',
	'accept' => '接受',
	'decline' => '拒绝',
	'new_app_submitted_alert' => '{x} 提交了新的申请表单' // Don't replace "{x}"
);

/* 
 *  General
 */
$general_language = array(
	// Homepage
	'news' => '新闻',
	'social' => '社群',
	'join' => '加入',
	
	// General terms
	'submit' => '提交',
	'close' => '关闭',
	'cookie_message' => '<strong>本站使用 Cookie 以提升您的體驗。</strong><p>若您繼續浏览或使用本站，我们將視您同意我们使用它们。</p>',
	'theme_not_exist' => '找不到你选择的布景主题。',
	'confirm' => '确认',
	'cancel' => '取消',
	'guest' => '访客',
	'guests' => '访客',
	'back' => '返回',
	'search' => '搜寻',
	'help' => '帮助',
	'success' => '成功',
	'error' => '错误',
	'view' => '查看',
	'info' => '资訊',
	'next' => 'Next',
	
	// Play page
	'connect_with' => '服务器的 IP 位址：{x}', // Don't replace {x}
	'online' => '在线上',
	'offline' => '离线',
	'status' => '状态：',
	'players_online' => '线上玩家數量：',
	'queried_in' => '查询所用时间：',
	'server_status' => '服务器状态',
	'no_players_online' => '目前沒有玩家在线上。',
	'1_player_online' => 'There is 1 player online.',
	'x_players_online' => '目前有 {x} 位玩家游玩当中。', // Don't replace {x}
	
	// Other
	'page_loaded_in' => '页面載入时间：{x} 秒', // Don't replace {x}; 's' stands for 'seconds'
	'none' => '无',
	'404' => '抱歉，我们找不到該页面。'
);

/* 
 *  Forum
 */
$forum_language = array(
	// Latest discussions view
	'forums' => '帖子',
	'discussion' => '讨论',
	'stats' => '统计资料',
	'last_reply' => '最新的回覆',
	'ago' => '之前',
	'by' => '作者：',
	'in' => '在',
	'views' => '次浏览',
	'posts' => '篇文章',
	'topics' => '个主题',
	'topic' => '主题',
	'statistics' => '统计',
	'overview' => '概览',
	'latest_discussions' => '最新的主题',
	'latest_posts' => '最新的文章',
	'users_registered' => '已注册的使用者：',
	'latest_member' => '最新注册的使用者：',
	'forum' => '帖子',
	'last_post' => '最新的文章',
	'no_topics' => '这里还沒有任何主题',
	'new_topic' => '新的主题',
	'subforums' => '子帖子：',
	
	// View topic view
	'home' => '主页',
	'topic_locked' => '主题已上锁',
	'new_reply' => '新的回覆',
	'mod_actions' => '管理动作',
	'lock_thread' => '锁定主题',
	'unlock_thread' => '解锁主题',
	'merge_thread' => '合并主题',
	'delete_thread' => '刪除主题',
	'confirm_thread_deletion' => '你确定要刪除这个主题吗？',
	'move_thread' => '移动主题',
	'sticky_thread' => '置頂主题',
	'report_post' => '举报文章',
	'quote_post' => '引用文章',
	'delete_post' => '刪除文章',
	'edit_post' => '编辑文章',
	'reputation' => '声望',
	'confirm_post_deletion' => '你确定要刪除此篇文章吗？',
	'give_reputation' => '给予声望',
	'remove_reputation' => '移除声望',
	'post_reputation' => 'Post Reputation',
	'no_reputation' => '这篇文章还沒獲得任何声望',
	're' => 'RE:',
	
	// Create post view
	'create_post' => '建立文章',
	'post_submitted' => '文章已提交',
	'creating_post_in' => 'Creating post in: ',
	'topic_locked_permission_post' => '此主题已被上锁，不过你还是有发文的权限。',
	
	// Edit post view
	'editing_post' => '正在编辑文章',
	
	// Sticky threads
	'thread_is_' => '主题',
	'now_sticky' => '置頂完成',
	'no_longer_sticky' => '取消置頂完成',
	
	// Create topic
	'topic_created' => '主题建立完毕。',
	'creating_topic_in_' => '正在建立主题至 ',
	'thread_title' => '主题标题',
	'confirm_cancellation' => '你确定吗？',
	'label' => '标签',
	
	// Reports
	'report_submitted' => '举报完成。',
	'view_post_content' => '查看文章內容',
	'report_reason' => '举报原因',
	
	// Move thread
	'move_to' => '移动至：',
	
	// Merge threads
	'merge_instructions' => '兩个要合并的主题<strong>必须</strong>在同个帖子下。Move a thread if necessary.',
	'merge_with' => '与 ... 合并：',
	
	// Other
	'forum_error' => '对不起，我们找不到相关的帖子或主题。',
	'are_you_logged_in' => '你登入了吗？',
	'online_users' => '本站线上使用者',
	'no_users_online' => '沒有使用者在线上',
	
	// Search
	'search_error' => '请输入一个 1 ~ 32 个字元長的搜寻关鍵字',
	'no_search_results' => '我们搜寻不到任何资料。',
	
	//Share on a social-media.
	'sm-share' => '分享',
	'sm-share-facebook' => '分享到 Facebook',
	'sm-share-twitter' => '分享到 Twitter',
);

/*
 *  Emails
 */
$email_language = array(
	// Registration email
	'greeting' => '嗨',
	'message' => '感谢你的注册！若要完成注册，请点击这个链接：',
	'thanks' => '谢谢您'
);

/*
 *  Time language, eg "1 minute ago"
 *  DON'T replace "{x}" in any translations
 */
$time_language = array(
	'seconds_short' => '秒', // Shortened "seconds", eg "s"
	'less_than_a_minute' => '刚刚',
	'1_minute' => '一分钟之前',
	'_minutes' => '{x} 分钟之前',
	'about_1_hour' => '约一个小時之前',
	'_hours' => '{x} 个小時之前',
	'1_day' => '昨天',
	'_days' => '{x} 天之前',
	'about_1_month' => '约一个月之前',
	'_months' => '{x} 个月之前',
	'about_1_year' => '约一年前',
	'over_x_years' => '超过 {x} 年之前'
);
 
/*
 *  Table language; used for "DataTables" Javascript tables
 */
$table_language = array(
	'display_records_per_page' => '每页显示 _MENU_ 项记录', // Don't replace "_MENU_"
	'nothing_found' => '找不到结果',
	'page_x_of_y' => '第 _PAGE_ 页（共 _PAGES_ 页面）', // Don't replace "_PAGE_" or "_PAGES_"
	'no_records' => '沒有相关记录',
	'filtered' => '（自共 _MAX_ 项记录中筛选而出）' // Don't replace "_MAX_"
);
 
/*
 *  API language
 */
$api_language = array(
	'register' => '完成注册'
);
 
?>
