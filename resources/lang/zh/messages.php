<?php

return [

    /*
    |--------------------------------------------------------------------------
    | All Titles and static string in blade files - English Language
    |--------------------------------------------------------------------------
    |
    */
    //menu.blade keys
    'select_payment_type'       => '選擇支付網關',
    'make_appointment'          => '約個時間',
    'enquiry'                   => '查詢',
    'enquiry_detail'            => '查詢詳情',
    'dashboard'                 => '儀表板',
    'users'                     => '用戶',
    'vcards'                    => '電子名片',
    'plans'                     => '計劃',
    'settings'                  => '設置',
    'roles'                     => '角色',
    'reset_password'            => '重設密碼',
    'sign_out'                  => '登出',
    'email_password_reset_link' => '郵箱密碼重置鏈接',
    'resend_verification_email' => '重新發送驗證電子郵件',
    'language'                  => '語',
    'vcards_templates'          => '名片模板',
    'features'                  => '特徵',
    'subscriptions'             => '訂閱',
    'testimonial'               => '感言',
    'no_matching_records_found' => '沒有找到匹配的記錄',
    'allowed_file_types'        => '允許的文件類型：png、jpg、jpeg。',
    'made_by'                   => '由製成',
    'appointments'              => '約會',
    'date'                      => '日期',
    'from_time'                 => '從時間',
    'to_time'                   => '到時間',
    'hour'                      => '小時',
    'make_appointments'         => '預約',
    'no_data'                   => '無可用數據',
    'deactivate'                => '停用',
    'your'                      => '您的',
    'plan_expire'               => '計劃已過期。請選擇一個計劃以繼續服務。',
    'expire_in'                 => '計劃即將到期',
    'payment_type'              => '支付方式',
    'cash_payment'              => '現金支付',
    'plan_expire_notification'  => '計劃到期通知（以天為單位）',
    'subscribed_user'           => '訂閱的用戶計劃',
    'payment_method'            => '付款方法',
    'edit_subscription'         => '編輯訂閱計劃',

    'flash' => [
        'vcard_create'             => 'VCard 創建成功。',
        'vcard_update'             => '更新成功.',
        'vcard_status'             => 'VCard狀態更新成功',
        'vcard_retrieve'           => 'VCard 檢索成功',
        'vcard_delete'             => 'VCard 刪除成功.',
        'create_service'           => 'VCard 服務創建成功.',
        'update_service'           => 'VCard 服務更新成功.',
        'create_testimonial'       => 'VCard 見證創建成功.',
        'update_testimonial'       => 'VCard 見證更新成功.',
        'create_product'           => 'VCard 產品創建成功。',
        'update_product'           => 'VCard 產品更新成功。',
        'user_create'              => '用戶創建成功.',
        'verified_email'           => '郵箱驗證成功',
        'user_status'              => '用戶狀態更新成功',
        'user_update'              => '用戶更新成功.',
        'user_profile'             => '用戶資料更新成功.',
        'current_invalid'          => '當前密碼無效.',
        'password_update'          => '密碼更新成功。',
        'language_update'          => '語言更新成功.',
        'plan_create'              => '計劃創建成功.',
        'plan_update'              => '計劃更新成功.',
        'plan_status'              => '計劃狀態更新成功',
        'plan_default'             => '默認計劃更改成功。',
        'country_create'           => '國家/地區保存成功.',
        'country_update'           => '國家/地區更新成功.',
        'country_used'             => '已在使用的國家/地區',
        'state_create'             => '狀態保存成功.',
        'state_update'             => '狀態更新成功。',
        'state_used'               => '狀態已在使用',
        'city_create'              => '城市保存成功。',
        'city_update'              => '城市更新成功。',
        'about_us_create'          => '關於我們已成功保存。',
        'feature_update'           => '功能更新成功。',
        'create_front_testimonial' => '推薦信創建成功。',
        'update_front_testimonial' => '見證更新成功。',
        'setting_update'           => '設置更新成功。',
        'front_cms'                => '前台 CMS 更新成功.',
    ],

    'form' => [
        'my_vcard_url'      => '我的電子名片頁面網址',
        'vcard_name'        => '輸入 VC 卡名稱',
        'description'       => '輸入您的 VCard 的描述',
        'occupation'        => '輸入職業',
        'f_name'            => '輸入名字',
        'l_name'            => '輸入姓氏',
        'email'             => '輸入電郵地址',
        'phone'             => '輸入電話號碼',
        'location'          => '輸入您的位置',
        'location_url'      => '輸入您的位置 URL',
        'DOB'               => '輸入出生日期',
        'company'           => '輸入公司名稱',
        'job'               => '輸入職位',
        'website'           => '網址',
        'twitter'           => '推特網址',
        'facebook'          => '臉書網址',
        'instagram'         => 'Instagram 網址',
        'reddit'            => 'Reddit 網址',
        'tumblr'            => '豆瓣網址',
        'youtube'           => '優酷網址',
        'linkedin'          => '領英網址',
        'whatsapp'          => 'WhatsApp 網址',
        'pinterest'         => 'Pinterest 網址',
        'tiktok'            => '點擊網址',
        'password'          => '密碼',
        'css'               => '輸入自定義 CSS',
        'js'                => '輸入自定義 Js',
        'first_name'        => '名',
        'last_name'         => '姓',
        'mail'              => '電子郵件',
        'contact'           => '電話號碼r',
        'c_password'        => '確認密碼',
        'plan_name'         => '進入計劃南e',
        'price'             => '輸入價格',
        'allowed_vcard'     => '輸入允許的電子名片數量',
        'enter_trial'       => '輸入試用天數',
        'select_currency'   => '選擇貨幣',
        'testimonial'       => '輸入推薦名稱',
        'short_description' => '輸入簡短描述',
        'pick_date'         => '選擇一個日期',
        'enter_name'        => '輸入名字',
        'enter_email'       => '輸入電子郵件',
        'enter_phone'       => '輸入電話',
        'your_name'         => '你的名字',
        'your_email'        => '電子郵件地址',
        'type_message'      => '在此處輸入消息...',
        'service'           => '輸入服務名稱',
        'product'           => '輸入產品名稱',
        'select_country'    => '選擇國家',
        'select_state'      => '選擇州',
        'meta_keyword'      => '輸入元關鍵字',
        'meta_description'  => '輸入元描述',
        'site_title'        => '輸入網站標題',
        'home_title'        => '輸入主頁標題',
        'google_analytics'  => '谷歌分析代碼',
    ],

    'analytics' => [
        'countries' => '國家',
        "view_more" => '查看更多',
        'devices'   => '設備',
        'os'        => '操作系統',
        'browsers'  => '瀏覽器',
        'languages' => '語言',
        'overview'  => '概述',
        'visitors'  => '訪客',
    ],

    'sadmin_dashboard' => [
        'day'                       => '日',
        'week'                      => '星期',
        'month'                     => '月',
        'name'                      => '名稱',
        'email'                     => '電子郵件',
        'registered_on'             => '註冊時間',
        'recent_users_registration' => '最近用戶註冊',
        'contact'                   => '聯繫方式',
    ],

    'common' => [
        'are_you_sure'            => '你確定要刪除這個 ',
        'no'                      => '不，取消',
        'yes'                     => '是的，刪除',
        'has_been_deleted'        => ' 已被刪除.',
        'deleted'                 => '已刪除',
        'today_appointments'      => '今天的約會',
        'notUsed'                 => '還沒用',
        'infyvcard'               => '電子名片',
        'no_data_available'       => '無可用數據',
        'inactive'                => '不活躍',
        'login'                   => '登錄',
        'logout'                  => '登出',
        'total_users'             => '總用戶',
        'total_vcards'            => '電子名片總數',
        'total_plans'             => '總計劃',
        'today_enquiry'           => '今日查詢',
        'remember_me'             => '記得我',
        'create_an_account'       => '創建一個帳戶',
        'new_here'                => '新來的',
        'forgot_your_password'    => '忘記密碼了嗎',
        'already_have_an_account' => '已有賬號',
        'forgot_password'         => '忘記密碼',
        'sign_in_here'            => '在這裡登錄',
        'register'                => '登記',
        'save'                    => '保存',
        'submit'                  => '提交',
        'cancel'                  => '取消',
        'discard'                 => '丟棄',
        'please_wait'             => '請稍等...',
        'back'                    => '後退',
        'back_subscription'       => '返回訂閱',
        'action'                  => '行動',
        'add'                     => '添加',
        'edit'                    => '編輯',
        'subject'                 => '主題',
        'delete'                  => '刪除',
        'name'                    => '名稱',
        'email'                   => '電子郵件',
        'phone'                   => '電話',
        'message'                 => '信息',
        'details'                 => '細節',
        'is_active'               => '活躍',
        'active'                  => '積極的',
        'closed'                  => '關閉',
        'status'                  => '地位',
        'description'             => '描述',
        'price'                   => 'Price',
        'loading'                 => '正在加載...',
        'ok'                      => '行',
        'enquiry'                 => '查詢',
        'view'                    => '看法',
        'icon'                    => '圖標',
        'link'                    => '關聯',
        'type'                    => '類型',
    ],

    'user' => [
        'theme_change'     => '主題模式更改',
        'profile_details'  => '個人資料詳情',
        'avatar'           => '阿凡達',
        'full_name'        => '全名',
        'email'            => '電子郵件',
        'phone'            => '電話',
        'contact_number'   => '聯繫電話',
        'save_changes'     => '保存更改',
        'setting'          => '環境',
        'account_setting'  => '帳號設定',
        'change_password'  => '更改密碼',
        'current_password' => '當前密碼',
        'new_password'     => '新密碼',
        'confirm_password' => '確認密碼',
        'account'          => '帳戶',
        'add_user'         => '添加用戶',
        'first_name'       => '名',
        'last_name'        => '姓',
        'contact_no'       => '聯繫方式',
        'password'         => '密碼',
        'male'             => '男性',
        'female'           => '女性',
        'profile'          => '輪廓',
        'edit_user'        => '編輯用戶',
        'user_details'     => '用戶詳情',
        'email_verified'   => '電子郵件已驗證',
        'impersonate'      => '模仿',
        'return_to_admin'  => '返回管理員',
        'location'         => '地點',
        'overview'         => '概述',
        'registered_date'  => '註冊日期',
        'change_language'  => '改變語言',
        'your_name'        => '你的名字',
        'your_message'     => '您的留言',
    ],

    'subscription' => [
        'current_expire'              => '當前過期計劃',
        'manage_subscription'         => '管理訂閱',
        'cancel_subscription'         => '取消訂閱',
        'active_until'                => '活動至',
        'active_until_unlimited'      => '活動至無限',
        'expired'                     => '計劃已過期',
        'upgrade_plan'                => '升級計劃',
        'choose_plan'                 => '选择计划',
        'no_plan_available'           => '沒有可用的計劃',
        'purchase'                    => '購買',
        'current_plan'                => '當前計劃',
        'trial_plan'                  => '試用計劃',
        'remaining'                   => '其餘的',
        'subscribed_date'             => '訂閱日期',
        'expired_date'                => '過期日期',
        'free'                        => '自由',
        'history'                     => '訂閱歷史',
        'plan_name'                   => '計劃名稱',
        'plan_price'                  => '計劃價格',
        'start_date'                  => '開始日期',
        'end_date'                    => '結束日期',
        'used_days'                   => '使用天數',
        'remaining_days'              => '剩余天數',
        'used_balance'                => '用過的餘額',
        'remaining_balance'           => '保持平衡',
        'total_days'                  => '總天數',
        'payable_amount'              => '應付金額',
        'amount'                      => '數量',
        'currently_active'            => '目前活躍',
        'renew_plan'                  => '續訂計劃',
        'renew_free_plan'             => '免費計劃無法續訂/再次選擇',
        'proceed_to_payment'          => '繼續付款',
        'switch_plan'                 => '切換計劃',
        'pay_or_switch_plan'          => '付費/切換計劃',
        'has_been_subscribed'         => '已訂閱',
        'has_already_been_subscribed' => '已訂閱',
        'payment'                     => '支付',
    ],

    'contact_us' => [
        'contact_us'   => '查詢',
        'contact'      => '聯繫我們',
        'message'      => '信息',
        'send_message' => '發信息',
    ],

    'payment' => [
        'payment_cancel'     => '付款取消',
        'payment_success'    => '付款成功',
        'payment_successful' => '支付成功',
        'payment'            => '支付',
        'cancelled'          => '取消',
    ],

    'notification'    => [
        'notifications'                       => '通知',
        'mark_all_as_read'                    => '標記為已讀',
        'you_don`t_have_any_new_notification' => '您沒有任何新通知',
    ],
    'vcards_template' => [
        'image'      => 'Image',
        'used_count' => '使用次數',
    ],

    'vcard' => [
        'stats'               => '統計數據',
        'new_vcard'           => '新電子名片',
        'edit_vcard'          => '編輯電子名片',
        'url_alias'           => '別名網址',
        'occupation'          => '職業',
        'description'         => '描述',
        'profile_image'       => '個人資料圖片',
        'cover_image'         => '封面圖片',
        'basic_details'       => '基本細節s',
        'template'            => '名片模板',
        'vcard'               => '電子名片',
        'vcard_details'       => '名片詳情',
        'services'            => '服務',
        'gallery'             => '画廊',
        'products'            => '產品',
        'product'             => '產品',
        'add_product'         => '添加產品',
        'new_product'          => '新產品',
        'edit_product'         => '編輯產品',
        'product_icon'         => '產品圖標',
        'product_details'      => '產品詳情',
        'vcard_service'        => '名片服務',
        'add_gallery'          => '添加画廊',
        'add_service'          => '添加服務',
        'new_service'          => '新服務',
        'new_gallery'          => '新画廊',
        'edit_service'         => '編輯服務',
        'edit_gallery'         => '编辑画廊',
        'service_icon'         => '服務圖標',
        'service_details'      => '服務詳情',
        'testimonial_details'  => '推薦細節',
        'testimonials'         => '感言',
        'testimonial'          => '見證',
        'add_testimonial'      => '添加推薦',
        'new_testimonial'      => '新證言',
        'edit_testimonial'     => '編輯推薦',
        'image'                => '圖片',
        'advanced'             => '先進的',
        'display_share_button' => '顯示分享按鈕',
        'vcard_is_active'      => '電子名片處於活動狀態',
        'select_template'      => '選擇模板',
        'first_name'           => '名',
        'last_name'            => '姓',
        'company'              => '公司',
        'job_title'            => '職稱',
        'date_of_birth'        => '出生日期',
        'vcard_name'           => '名片名稱',
        'meta_keyword'         => '元關鍵字',
        'meta_description'     => '元描述',
        'google_analytics'     => '谷歌分析',
        'seo'                  => '搜索引擎優化',
        'site_title'           => '網站標題',
        'home_title'           => '主頁標題',
        'preview_url'          => '預覽網址',
        'created_on'           => '創建於',
        'created_at'           => '創建於',
        'user'                 => '用戶',
        'user_name'            => '用戶名',
        'remove_branding'     => '刪除品牌',
        'custom_css'          => '自定義 CSS',
        'custom_js'           => '自定義 JS',
        'enter_password'      => '輸入密碼',
        'our_service'         => '我們的服務',
        'status'              => '地位',
        'business_hours'      => '營業時間',
        'social_links'        => '社交鏈接',
        'custom_fonts'        => '字體',
        'qr_code'             => '二維碼',
        'download_my_qr_code' => '下載我的二維碼',
        'email_address'       => '電子郵件地址',
        'mobile_number'       => '手機號碼',
        'dob'                 => '出生日期',
        'location'            => '地點',
        'send_message'        => '發信息',
        'buisness_hours'      => '營業時間',
        'download_vcard'      => '下載電子名片',
        'share_my_vcard'      => '分享我的電子名片',
        'share'               => '分享',
        'appointments'        => '約會',
    ],

    'business' => [
        'business_hours' => '營業時間',
        'start_time'     => '開始時間',
        'end_time'       => '時間結束',
        'mon'            => '星期一',
        'tue'            => '週二',
        'wed'            => '星期三',
        'thu'            => '蒐集',
        'fri'            => '週五',
        'sat'            => '星期六',
        'sun'            => '太陽',
    ],

    'font' => [
        'fonts'       => '字體',
        'font_family' => '字體系列',
        'font_size'   => '字體大小',
        'px'          => '像素',
    ],

    'gallery' => [
        'gallery_name' => '画廊',
        'type'         => '类型',
        'image'        => '图像',
        'youtube'      => 'Youtube',
    ],

    'social' => [
        'social_links' => '社交鏈接 - 網站',
        'Facebook'     => 'Facebook',
        'Instagram'    => 'Instagram',
        'Youtube'      => 'Youtube',
        'Linkedin'     => '領英',
        'Twitter'      => '推特',
        'Reddit'       => '紅迪網',
        'Whatsapp'     => 'Whatsapp',
        'Pinterest'    => 'Pinterest',
        'Tumblr'       => '棒棒噠',
        'website'      => '網站',
        'map'          => '地圖',
    ],

    'plan' => [
        'default_Plan'               => '默認計劃',
        'new_plan'                   => '新計劃',
        'edit_plan'                  => '編輯計劃',
        'description'                => '描述',
        'duration'                   => '期間',
        'duration_months'            => '持續時間月',
        'duration_years'             => '持續時間年',
        'valid_upto'                 => '有效Upto',
        'days'                       => '天',
        'remaining_balance'          => '上一个计划的余额',
        'yearly'                     => '每年',
        'monthly'                    => '月刊',
        'months'                     => '幾個月',
        'years'                      => '年',
        'unlimited'                  => '無限',
        'currency'                   => '貨幣',
        'no_of_vcards'               => '電子名片數量',
        'total_custom_domains_limit' => '自定義域總數限制',
        'features'                   => '特徵',
        'select_all_feature'         => '選擇所有功能',
        'multi_templates'            => '多模板',
        'custom_fields'              => '自定義字段',
        'services'                   => '服務',
        'products'                   => '產品',
        'products_&_services'        => '產品與服務',
        'portfolio'                  => '文件夾',
        'gallery'                    => '畫廊',
        'qrcode'                     => '二維碼',
        'testimonials'               => '感言',
        'hide_branding'              => '隱藏品牌',
        'enquiry_form'               => '查詢表格',
        'additional_domains'         => '附加域',
        'analytics'                  => '分析',
        'seo'                        => '搜索引擎優化',
        'password_protection'        => '密碼保護',
        'custom_css'                 => '自定義 CSS',
        'custom_js'                  => '自定義 JS',
        'price'                      => '價格',
        'domains_limit'              => '域限制',
        'plan_type'                  => '計劃類型',
        'is_trial'                   => '正在試用',
        'trial_days'                 => '試用天數',
        'make_default'               => '使默認',
        'frequency'                  => '頻率',
        'plan'                       => '計劃',

        'feature' => [
            'products_services' => '服務',
            'gallery'           => '畫廊',
            'testimonials'      => '感言',
            'hide_branding'     => '隱藏品牌',
            'enquiry_form'      => '查詢表格',
            'analytics'         => '分析',
            'password'          => '密碼保護',
            'custom_css'        => '自定義 CSS',
            'custom_js'         => '自定義 JS',
            'custom_fonts'      => '自定義字體',
            'social_links'      => '社交鏈接',
            'products'          => '產品',
            'appointments'      => '約會',
            'seo'               => '搜索引擎優化'
        ],
    ],

    'currency' => [
        'currencies'    => '貨幣',
        'currency_icon' => '貨幣圖標',
        'currency_code' => '貨幣代碼',
    ],

    'country' => [
        'short_code'           => '短鱈魚e',
        'phone_code'           => '電話代碼',
        'countries'            => '國家',
        'new_country'          => '新國家',
        'edit_country'         => '編輯國家',
        'country_name'         => '國家的名字',
        'no_country_found'     => '未找到國家',
        'no_country_available' => '沒有可用的國家',
        'country'              => '國家',
    ],

    'state' => [
        'states'             => '狀態',
        'new_state'          => '新州',
        'edit_state'         => '編輯狀態',
        'state_name'         => '州名',
        'country_name'       => '國家的名字',
        'no_state_found'     => '未找到狀態',
        'no_state_available' => '無可用狀態',
        'state'              => '狀態',
    ],

    'city' => [
        'cities'            => '城市',
        'new_city'          => '新城市',
        'edit_city'         => '編輯城市',
        'city_name'         => '城市名',
        'state_name'        => '州名',
        'no_city_found'     => '未找到城市',
        'no_city_available' => '沒有可用的城市',
        'city'              => '城市',
    ],

    'role' => [
        'new_role'               => '新角色',
        'edit_role'              => '編輯角色',
        'name'                   => '名稱',
        'permissions'            => '權限',
        'role_permissions'       => '角色權限',
        'select_all_permissions' => '選擇所有權限',
    ],

    'feature' => [
        'edit_feature'  => '編輯特徵',
        'name'          => '名稱',
        'description'   => '描述',
        'image'         => '圖片',
        'feature_image' => '特色圖片',
    ],

    'front_cms' => [
        'front_cms'   => '前台CMS',
        'title'       => '標題',
        'banner'      => '橫幅圖片',
        'description' => '描述',
    ],

    'about_us' => [
        'about_us'    => '關於我們',
        'title'       => '標題',
        'image'       => '關於形象',
        'description' => '描述',
    ],

    'setting' => [
        'setting'             => '環境',
        'general'             => '一般的',
        'app_name'            => '應用名稱',
        'app_logo'            => '應用程序徽標',
        'favicon'             => '網站圖標',
        'contact_information' => '聯繫信息',
        'currency_settings'   => '貨幣設置',
        'general_details'     => '一般細節',
        'clinic_name'         => '診所名稱',
        'specialities'        => '特產',
        'currency'            => '貨幣',
        'prefix'              => '字首',
        'address'             => '地址',
        'postal_code'         => '郵政編碼',
        'location_url'        => '位置網址',
    ],

    'tooltip' => [
        'the_main_url'        => '可以從中訪問您的 vcard 的主要 URL。',
        'remove_branding'     => "如果啟用，電子名片將不會顯示我們網站的品牌。",
        'allowed_image'       => '允許的文件類型：png、jpg、jpeg。',
        'hide_branding'       => '啟用對 VCard 隱藏品牌的能力。',
        'password_protection' => '啟用對密碼保護 VCard 的訪問.',
        'custom_css'          => '啟用為每個 VCard 添加自定義 CSS 的功能。',
        'custom_js'           => '啟用為每個 VCard 添加自定義 js 的功能.',
        'custom_fonts'        => '啟用為每個 VCard 添加自定義字體的功能.',
        'app_logo'            => '圖像必須為 90 x 60 像素',
        'change_app_logo'     => '更改應用程序徽標',
        'cancel_app_logo'     => '取消應用徽標',
        'change_favicon_logo' => '更改網站圖標',
        'cancel_favicon_logo' => '取消網站圖標',
        'cancel_profile'      => '取消個人資料',
        'cancel_cover'        => '取消封面',
        'favicon_logo'        => '圖像必須為 16 x 16 像素',
        'home_image'          => '此配置文件的最佳分辨率為 1200x376',
        'banner_title'        => '最多允許 34 個字符',
        'about_title'         => '最多允許 100 個字符',
        'about_description'   => '最多允許 500 個字符',
        'copy'                => '複製到剪貼板',
        'profile'             => '更改配置文件',
        'cover'               => '更換封面',
        'script'              => '添加不帶腳本標籤的自定義 JS 代碼',
        'product_image'       => '此配置文件的最佳分辨率為 250x250',
        'light_mode'          => '切換到燈光模式',
        'dark_mode'           => '切換到深色模式',
    ],

    'front' => [
        'enter_your_name'    => '输入你的名字',
        'enter_your_email'   => '输入你的电子邮箱',
        'enter_your_message' => '输入您的信息',
        'your_email_address' => '您的电子邮件地址',
    ],

    'analytic' => [
        'vcard_analytic' => '电子名片分析'
    ]
];