<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'הגדרות',
    'settings_save' => 'שמור הגדרות',
    'settings_save_success' => 'ההגדרות נשמרו',

    // App Settings
    'app_customization' => 'התאמה אישית',
    'app_features_security' => 'מאפיינים ואבטחה',
    'app_name' => 'שם היישום',
    'app_name_desc' => 'השם הזה יופיע בכותרת ובכל אי-מייל הנשלח מהמערכת',
    'app_name_header' => 'הצג שם בחלק העליון',
    'app_public_access' => 'גישה ציבורית',
    'app_public_access_desc' => 'הפעלת אפשרות זו תאפשר למשתמשים אשר אינם רשומים לגשת לתוכן שלך',
    'app_public_access_desc_guest' => 'הגדרות הרשאה למשתמשים ציבוריים ניתנות לשינוי דרך משתמש מסוג ״אורח״',
    'app_public_access_toggle' => 'אפשר גישה ציבורית',
    'app_public_viewing' => 'לאפשר גישה ציבורית?',
    'app_secure_images' => 'העלאת תמונות מאובטחת',
    'app_secure_images_toggle' => 'אפשר העלאת תמונות מאובטחת',
    'app_secure_images_desc' => 'משיקולי ביצועים, כל התמונות הינן ציבוריות. אפשרות זו מוסיפה מחרוזת אקראית שקשה לנחש לכל כתובת של תמונה. אנא ודא שאפשרות הצגת תוכן התיקייה מבוטל.',
    'app_editor' => 'עורך הדפים',
    'app_editor_desc' => 'בחר באמצעות איזה עורך תתבצע עריכת הדפים',
    'app_custom_html' => 'HTML מותאם אישית לחלק העליון',
    'app_custom_html_desc' => 'כל קוד שיתווסף כאן, יופיע בתחתית תגית ה head של כל דף. חלק זה שימושי על מנת להגדיר עיצובי CSS והתקנת קוד Analytics',
    'app_custom_html_disabled_notice' => 'קוד HTML מותאם מבוטל בדף ההגדרות על מנת לוודא ששינויים שגורמים לבעיה יוכלו להיות מבוטלים לאחר מכן',
    'app_logo' => 'לוגו היישום',
    'app_logo_desc' => 'תמונה זו צריכה להיות בגובה 43 פיקסלים. תמונות גדולות יותר יוקטנו.',
    'app_primary_color' => 'צבע עיקרי ליישום',
    'app_primary_color_desc' => 'ערך זה צריך להיות מסוג hex. <br> יש להשאיר ריק לשימוש בצבע ברירת המחדל',
    'app_homepage' => 'דף הבית של היישום',
    'app_homepage_desc' => 'אנא בחר דף להצגה בדף הבית במקום דף ברירת המחדל. הרשאות הדף לא יחולו בדפים הנבחרים.',
    'app_homepage_select' => 'בחר דף',
    'app_footer_links' => 'קישורים בתחתית הדף',
    'app_footer_links_desc' => 'הוסיפו קישורים שיוצגו בתחתית האתר. קישורים אלה יוצגו בתחתית רוב הדפים, לרבות אלה שלא מצריכים התחברות. תוכלו להשתמש בתווית "trans::<key>" כדי להשתמש בתרגומים המוגדרים על ידי המערכת. לדוגמה: שימוש ב"trans::common.privacy_policy" יספק את הטקסט המתורגם "מדיניות פרטיות" ו"trans::common.terms_of_service" יספק את הטקסט המתורגם "תנאי השימוש".',
    'app_footer_links_label' => 'תווית הקישור',
    'app_footer_links_url' => 'כתובת ה-URL של הקישור',
    'app_footer_links_add' => 'הוספת קישור בתחתית הדף',
    'app_disable_comments' => 'ביטול תגובות',
    'app_disable_comments_toggle' => 'בטל תגובות',
    'app_disable_comments_desc' => 'מבטל את התגובות לאורך כל היישום, תגובות קיימות לא יוצגו.',

    // Color settings
    'content_colors' => 'צבעי התוכן',
    'content_colors_desc' => 'מגדיר צבעים לכל האלמנטים בהיררכיה הארגונית של הדף. לחווית קריאה מיטבית, מומלץ לבחור צבעים בבהירות הדומה לצבעי ברירת המחדל.',
    'bookshelf_color' => 'צבע המדף',
    'book_color' => 'צבע הספר',
    'chapter_color' => 'צבע הפרק',
    'page_color' => 'צבע העמוד',
    'page_draft_color' => 'צבע טיוטת העמוד',

    // Registration Settings
    'reg_settings' => 'הרשמה',
    'reg_enable' => 'אפשר הרשמה',
    'reg_enable_toggle' => 'אפשר להרשם',
    'reg_enable_desc' => 'כאשר אפשר להרשם משתמשים יוכלו להכנס באופן עצמאי. בעת ההרשמה המשתמש יקבל הרשאה יחידה כברירת מחדל.',
    'reg_default_role' => 'הרשאה כברירת מחדל',
    'reg_enable_external_warning' => 'האפשרות לעיל חסרת השפעה כאשר מתבצע שימוש באותנטיקציה חיצונית מסוג LDAP או SAML. חשבונות משתמש לחברים לא קיימים יווצרו באופן אוטומטי במידה ואותנטיקציה, הנוגדת את המערכת החיצונית בשימוש, מצליחה.',
    'reg_email_confirmation' => 'אימות כתובת אי-מייל',
    'reg_email_confirmation_toggle' => 'יש לאמת את כתובת המייל',
    'reg_confirm_email_desc' => 'אם מופעלת הגבלה לדומיין ספציפי אז אימות המייל לא יבוצע',
    'reg_confirm_restrict_domain' => 'הגבלה לדומיין ספציפי',
    'reg_confirm_restrict_domain_desc' => 'הכנס דומיינים מופרדים בפסיק אשר עבורם תוגבל ההרשמה. משתמשים יקבלו אי-מייל על מנת לאמת את כתובת המייל שלהם. <br> לתשומת לבך: משתמש יוכל לשנות את כתובת המייל שלו לאחר ההרשמה',
    'reg_confirm_restrict_domain_placeholder' => 'אין הגבלה לדומיין',

    // Maintenance settings
    'maint' => 'תחזוקה',
    'maint_image_cleanup' => 'ניקוי תמונות',
    'maint_image_cleanup_desc' => 'סורק את הדפים והגרסאות על מנת למצוא אילו תמונות לא בשימוש. יש לוודא גיבוי מלא של מסד הנתונים והתמונות לפני הרצה',
    'maint_delete_images_only_in_revisions' => 'מחק בנוסף תמונות שקיימות בגרסאות ישנות של הדף בלבד',
    'maint_image_cleanup_run' => 'הפעל ניקוי תמונות',
    'maint_image_cleanup_warning' => 'נמצאו כ :count תמונות אשר לא בשימוש האם ברצונך להמשיך?',
    'maint_image_cleanup_success' => ':count תמונות שלא בשימוש נמחקו',
    'maint_image_cleanup_nothing_found' => 'לא נמצאו תמונות אשר לא בשימוש, לא נמחקו קבצים כלל.',
    'maint_send_test_email' => 'שלח דוא"ל ניסיוני',
    'maint_send_test_email_desc' => 'שולח דוא"ל ניסיוני לכתובת הדוא"ל המצוינת בפרופיל שלך.',
    'maint_send_test_email_run' => 'שלח דוא"ל ניסיוני',
    'maint_send_test_email_success' => 'דוא"ל נשלח לכתובת :address',
    'maint_send_test_email_mail_subject' => 'דוא"ל ניסיוני',
    'maint_send_test_email_mail_greeting' => 'נראה ששליחת דוא"ל עובדת!',
    'maint_send_test_email_mail_text' => 'ברכות! מאחר וקיבלת התראת דוא"ל זו, נראה שהגדרות הדוא"ל שלך הוגדרו כמו שצריך.',
    'maint_recycle_bin_desc' => 'מדפים, ספרים, פרקים חדשים שנמחקו נשלחים לסל המיחזור, כדי שתוכלו לאחזר אותם או למחוק אותם לצמיתות. ייתכן שפריטים ישנים יותר בסל המיחזור יימחקו באופן אוטומטי לאחר זמן-מה, בהסתמך על הגדרות המערכת.',
    'maint_recycle_bin_open' => 'פתח את סל המיחזור',

    // Recycle Bin
    'recycle_bin' => 'סל המיחזור',
    'recycle_bin_desc' => 'כאן תוכלו לאחזר פריטים שנמחקו או לבחור למחוק אותם מהמערכת לצמיתות. רשימה זו לא מסוננת, בשונה מרשימות פעילות דומות במערכת, בהן מוחלים מסנני הרשאות.',
    'recycle_bin_deleted_item' => 'פריט שנמחק',
    'recycle_bin_deleted_parent' => 'הורה',
    'recycle_bin_deleted_by' => 'נמחק על ידי',
    'recycle_bin_deleted_at' => 'זמן המחיקה',
    'recycle_bin_permanently_delete' => 'מחק לצמיתות',
    'recycle_bin_restore' => 'אחזר',
    'recycle_bin_contents_empty' => 'סל המיחזור כרגע ריק',
    'recycle_bin_empty' => 'רוקן את סל המיחזור',
    'recycle_bin_empty_confirm' => 'פעולה זו תשמיד לצמיתות את כל הפריטים בסל המיחזור, לרבות התוכן בכל פריט. אתם בטוחים שאתם מעוניינים לרוקן את סל המיחזור?',
    'recycle_bin_destroy_confirm' => 'פעולה זו תמחק מהמערכת לצמיתות פריט זה, יחד עם כל פריטי-הבן ברשימה להלן, ולא תוכלו לאחזר תוכל זה. אתם בטוחים שברצונכם למחוק לצמיתות פריט זה?',
    'recycle_bin_destroy_list' => 'פריטים שיושמדו',
    'recycle_bin_restore_list' => 'פריטים שיאוחזרו',
    'recycle_bin_restore_confirm' => 'פעולה זו תאחזר את הפריט שנמחק, לרבות רכיבי-הבן שלו, למיקומו המקורי. אם המיקום המקורי נמחק מאז, וכעת נמצא בסל המיחזור, יש לאחזר גם את פריט-האב.',
    'recycle_bin_restore_deleted_parent' => 'פריט-האב של פריט זה נמחק. פריטים אלה יישארו מחוקים עד שפריט-אב זה יאוחזר.',
    'recycle_bin_restore_parent' => 'Restore Parent',
    'recycle_bin_destroy_notification' => 'נמחקו בסה"כ :count פריטים מסל המיחזור.',
    'recycle_bin_restore_notification' => 'אוחזרו בסה"כ :count פריטים מסל המיחזור.',

    // Audit Log
    'audit' => 'לוג בדיקה',
    'audit_desc' => 'לוג בדיקה זה מציג רשימה של פעילויות שנוטרו במערכת. רשימה זו לא מסוננת, בשונה מרשימות פעילות דומות במערכת בהן מוחלים מסנני הרשאות.',
    'audit_event_filter' => 'מסנן אירועים',
    'audit_event_filter_no_filter' => 'ללא סינון',
    'audit_deleted_item' => 'פריט שנמחק',
    'audit_deleted_item_name' => 'שם: :name',
    'audit_table_user' => 'משתמש',
    'audit_table_event' => 'אירוע',
    'audit_table_related' => 'פריט או פרט קשור',
    'audit_table_ip' => 'IP Address',
    'audit_table_date' => 'זמן הפעילות',
    'audit_date_from' => 'טווח תאריכים החל מ...',
    'audit_date_to' => 'טווח תאריכים עד ל...',

    // Role Settings
    'roles' => 'תפקידים',
    'role_user_roles' => 'תפקידי משתמשים',
    'role_create' => 'צור תפקיד משתמש חדש',
    'role_create_success' => 'התפקיד נוצר בהצלחה',
    'role_delete' => 'מחק תפקיד',
    'role_delete_confirm' => 'פעולה זו תמחק את התפקיד: :roleName',
    'role_delete_users_assigned' => 'לתפקיד :userCount יש משתמשים אשר משויכים אליו. אם ברצונך להעבירם לתפקיד אחר אנא בחר תפקיד מלמטה',
    'role_delete_no_migration' => "אל תעביר משתמשים לתפקיד",
    'role_delete_sure' => 'האם אתה בטוח שברצונך למחוק את התפקיד?',
    'role_delete_success' => 'התפקיד נמחק בהצלחה',
    'role_edit' => 'ערוך תפקיד',
    'role_details' => 'פרטי תפקיד',
    'role_name' => 'שם התפקיד',
    'role_desc' => 'תיאור קצר של התפקיד',
    'role_mfa_enforced' => 'Requires Multi-Factor Authentication',
    'role_external_auth_id' => 'ID-י אותנטיקציה חיצוניים',
    'role_system' => 'הרשאות מערכת',
    'role_manage_users' => 'ניהול משתמשים',
    'role_manage_roles' => 'ניהול תפקידים והרשאות תפקידים',
    'role_manage_entity_permissions' => 'נהל הרשאות ספרים, פרקים ודפים',
    'role_manage_own_entity_permissions' => 'נהל הרשאות על ספרים, פרקים ודפים בבעלותך',
    'role_manage_page_templates' => 'נהל תבניות דפים',
    'role_access_api' => 'גש ל-API המערכת',
    'role_manage_settings' => 'ניהול הגדרות יישום',
    'role_export_content' => 'Export content',
    'role_asset' => 'הרשאות משאבים',
    'roles_system_warning' => 'שימו לב לכך שגישה לכל אחת משלושת ההרשאות הנ"ל יכולה לאפשר למשתמש לשנות את הפריווילגיות שלהם או של אחרים במערכת. הגדירו תפקידים להרשאות אלה למשתמשים בהם אתם בוטחים בלבד.',
    'role_asset_desc' => 'הרשאות אלו שולטות בגישת ברירת המחדל למשאבים בתוך המערכת. הרשאות של ספרים, פרקים ודפים יגברו על הרשאות אלו.',
    'role_asset_admins' => 'מנהלים מקבלים הרשאה מלאה לכל התוכן אך אפשרויות אלו עלולות להציג או להסתיר אפשרויות בממשק',
    'role_all' => 'הכל',
    'role_own' => 'שלי',
    'role_controlled_by_asset' => 'נשלטים על ידי המשאב אליו הועלו',
    'role_save' => 'שמור תפקיד',
    'role_update_success' => 'התפקיד עודכן בהצלחה',
    'role_users' => 'משתמשים משוייכים לתפקיד זה',
    'role_users_none' => 'אין משתמשים המשוייכים לתפקיד זה',

    // Users
    'users' => 'משתמשים',
    'user_profile' => 'פרופיל משתמש',
    'users_add_new' => 'הוסף משתמש חדש',
    'users_search' => 'חפש משתמשים',
    'users_latest_activity' => 'פעילות אחרונה',
    'users_details' => 'פרטי משתמש',
    'users_details_desc' => 'הגדר שם לתצוגה ומייל עבור משתמש זה. כתובת המייל תשמש על מנת להתחבר למערכת',
    'users_details_desc_no_email' => 'הגדר שם לתצוגה כדי שאחרים יוכלו לזהות',
    'users_role' => 'תפקידי משתמשים',
    'users_role_desc' => 'בחר אילו תפקידים ישויכו למשתמש זה. אם המשתמש משוייך למספר תפקידים, ההרשאות יהיו כלל ההרשאות של כל התפקידים',
    'users_password' => 'סיסמא',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 8 characters long.',
    'users_send_invite_text' => 'תוכלו לבחור לשלוח למשתמש זה דוא"ל הזמנה, המאפשר להם להגדיר סיסמה משלהם. אחרת, תוכלו להגדיר את סיסמתם בעצמכם.',
    'users_send_invite_option' => 'שלח דוא"ל הזמנה למשתמש',
    'users_external_auth_id' => 'זיהוי חיצוני - ID',
    'users_external_auth_id_desc' => 'זיהוי זה יהיה בשימוש מול מערכת ה LDAP שלך',
    'users_password_warning' => 'יש למלא רק אם ברצונך לשנות את הסיסמא.',
    'users_system_public' => 'משתמש זה מייצג את כל האורחים שלא מזוהים אשר משתמשים במערכת. לא ניתן להתחבר למשתמש זה אך הוא מוגדר כברירת מחדל',
    'users_delete' => 'מחק משתמש',
    'users_delete_named' => 'מחק משתמש :userName',
    'users_delete_warning' => 'פעולה זו תמחק את המשתמש \':userName\' מהמערכת',
    'users_delete_confirm' => 'האם ברצונך למחוק משתמש זה?',
    'users_migrate_ownership' => 'העבר בעלות',
    'users_migrate_ownership_desc' => 'בחרו משתמש כאן במידה ואתם מעוניינים שמשתמש אחר יהפוך לבעלים של כל הפריטים שכרגע בבעלות משתמש זה.',
    'users_none_selected' => 'לא נבחר משתמש',
    'users_edit' => 'עריכת משתמש',
    'users_edit_profile' => 'עריכת פרופיל',
    'users_avatar' => 'תמונת משתמש',
    'users_avatar_desc' => 'בחר תמונה אשר תייצג את המשתמש. על התמונה להיות ריבוע של 256px',
    'users_preferred_language' => 'שפה מועדפת',
    'users_preferred_language_desc' => 'אפשרות זו תשנע את השפה אשר מוצגת בממשק המערכת. פעולה זו לא תשנה את התוכן אשר נכתב על ידי המשתמשים.',
    'users_social_accounts' => 'רשתות חברתיות',
    'users_social_accounts_info' => 'כן ניתן לשייך חשבונות אחרים שלך לחיבור וזיהוי קל ומהיר. ניתוק חשבון אינו מנתק גישה קיימת למערכת. לביצוע ניתוק יש לשנות את ההגדרה בהגדרות של חשבון הרשת החברתית',
    'users_social_connect' => 'חיבור החשבון',
    'users_social_disconnect' => 'ניתוק חשבון',
    'users_social_connected' => 'חשבון :socialAccount חובר בהצלחה לחשבון שלך',
    'users_social_disconnected' => ':socialAccount נותק בהצלחה מהחשבון שלך',
    'users_api_tokens' => 'אסימוני API',
    'users_api_tokens_none' => 'לא נוצרו אסימוני API למשתמש זה',
    'users_api_tokens_create' => 'צור אסימון',
    'users_api_tokens_expires' => 'פג',
    'users_api_tokens_docs' => 'תיעוד API',
    'users_mfa' => 'Multi-Factor Authentication',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'צור אסימון API',
    'user_api_token_name' => 'שם',
    'user_api_token_name_desc' => 'תנו לאסימון שלכם שם קריא, כתזכורת עתידית למטרה המיועדת שלו.',
    'user_api_token_expiry' => 'תאריך תפוגה',
    'user_api_token_expiry_desc' => 'הגדירו תאריך בו יפוג תוקף אסימון זה. לאחר תאריך זה, בקשות שיעשו באמצעות אסימון זה לא יעבדו יותר. במידה ושדה זה יושאר ריק, תאריך התפוגה יוגדר לבעוד 100 שנים.',
    'user_api_token_create_secret_message' => 'מיד לאחר יצירת אסימון זה, יווצרו ויוצגו "ID אסימון" ו"סוד אסימון". הסוד יוצג פעם אחת בלבד, לכן וודאו להעתיק את הערך למקום שמור ובטוח לפני שתמשיכו הלאה.',
    'user_api_token_create_success' => 'אסימון API נוצר בהצלחה',
    'user_api_token_update_success' => 'אסימון API עודכן בהצלחה',
    'user_api_token' => 'אסימון API',
    'user_api_token_id' => 'ID האסימון',
    'user_api_token_id_desc' => 'זהו מזהה בלתי ניתן לעריכה לאסימון זה הנוצר על ידי המערכת, אשר יסופק בבקשות API.',
    'user_api_token_secret' => 'סוד האסימון',
    'user_api_token_secret_desc' => 'זהו סוד המיוצר על ידי המערכת לאסימון זה, אשר יסופק בבקשות API. סוד זה יוצג פעם אחת בלבד, לכן וודאו להעתיק ערך זה למקום שמור ובטוח.',
    'user_api_token_created' => 'אסימון נוצר :timeAgo',
    'user_api_token_updated' => 'אסימון עודכן :timeAgo',
    'user_api_token_delete' => 'מחק אסימון',
    'user_api_token_delete_warning' => 'פעולה זו תמחק לחלוטין את אסימון ה-API בשם \':tokenName\' מהמערכת.',
    'user_api_token_delete_confirm' => 'האם אתם בטוחים שאתם מעוניינים למחוק אסימון API זה?',
    'user_api_token_delete_success' => 'אסימון API נמחק בהצלחה',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_create' => 'Create New Webhook',
    'webhooks_none_created' => 'No webhooks have yet been created.',
    'webhooks_edit' => 'Edit Webhook',
    'webhooks_save' => 'Save Webhook',
    'webhooks_details' => 'Webhook Details',
    'webhooks_details_desc' => 'Provide a user friendly name and a POST endpoint as a location for the webhook data to be sent to.',
    'webhooks_events' => 'Webhook Events',
    'webhooks_events_desc' => 'Select all the events that should trigger this webhook to be called.',
    'webhooks_events_warning' => 'Keep in mind that these events will be triggered for all selected events, even if custom permissions are applied. Ensure that use of this webhook won\'t expose confidential content.',
    'webhooks_events_all' => 'All system events',
    'webhooks_name' => 'Webhook Name',
    'webhooks_timeout' => 'Webhook Request Timeout (Seconds)',
    'webhooks_endpoint' => 'Webhook Endpoint',
    'webhooks_active' => 'Webhook Active',
    'webhook_events_table_header' => 'Events',
    'webhooks_delete' => 'Delete Webhook',
    'webhooks_delete_warning' => 'This will fully delete this webhook, with the name \':webhookName\', from the system.',
    'webhooks_delete_confirm' => 'Are you sure you want to delete this webhook?',
    'webhooks_format_example' => 'Webhook Format Example',
    'webhooks_format_example_desc' => 'Webhook data is sent as a POST request to the configured endpoint as JSON following the format below. The "related_item" and "url" properties are optional and will depend on the type of event triggered.',
    'webhooks_status' => 'Webhook Status',
    'webhooks_last_called' => 'Last Called:',
    'webhooks_last_errored' => 'Last Errored:',
    'webhooks_last_error_message' => 'Last Error Message:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
