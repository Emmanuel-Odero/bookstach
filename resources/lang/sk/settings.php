<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Nastavenia',
    'settings_save' => 'Uložiť nastavenia',
    'settings_save_success' => 'Nastavenia uložené',

    // App Settings
    'app_customization' => 'Prispôsobenia',
    'app_features_security' => 'Funkcie a bezpečnosť',
    'app_name' => 'Názov aplikácia',
    'app_name_desc' => 'Tento názov sa zobrazuje v hlavičke a v emailoch.',
    'app_name_header' => 'Zobraziť názov aplikácie v hlavičke?',
    'app_public_access' => 'Verejný prístup',
    'app_public_access_desc' => 'Povolenie tejto možnosti umožní návštevníkom, ktorí nie sú prihlásení, prístup k obsahu vo vašej inštancii BookStack.',
    'app_public_access_desc_guest' => 'Prístup pre verejných návštevníkov je možné ovládať prostredníctvom používateľa "Hosť".',
    'app_public_access_toggle' => 'Povoliť verejný prístup',
    'app_public_viewing' => 'Povoliť verejné zobrazenie?',
    'app_secure_images' => 'Povoliť nahrávanie súborov so zvýšeným zabezpečením?',
    'app_secure_images_toggle' => 'Povoliť nahrávanie obrázkov s vyšším zabezpečením',
    'app_secure_images_desc' => 'Kvôli výkonu sú všetky obrázky verejné. Táto možnosť pridá pred URL obrázka náhodný, ťažko uhádnuteľný reťazec. Aby ste zabránili jednoduchému prístupu, uistite sa, že indexy priečinkov nie sú povolené.',
    'app_editor' => 'Editor stránky',
    'app_editor_desc' => 'Vyberte editor, ktorý bude používaný všetkými používateľmi na editáciu stránok.',
    'app_custom_html' => 'Vlastný HTML obsah hlavičky',
    'app_custom_html_desc' => 'Všetok text pridaný sem bude vložený naspodok <head> sekcie na každej stránke. Môže sa to zísť pri zmene štýlu alebo pre pridanie analytického kódu.',
    'app_custom_html_disabled_notice' => 'Vlastný obsah hlavičky HTML je na tejto stránke s nastaveniami zakázaný, aby sa zabezpečilo, že sa dajú vrátiť zmeny, ktoré nastali.',
    'app_logo' => 'Logo aplikácie',
    'app_logo_desc' => 'Tento obrázok by mal mať 43px na výšku. <br>Veľké obrázky budú preškálované na menší rozmer.',
    'app_primary_color' => 'Primárna farba pre aplikáciu',
    'app_primary_color_desc' => 'Toto by mala byť hodnota v hex tvare. <br>Nechajte prázdne ak chcete použiť prednastavenú farbu.',
    'app_homepage' => 'Domovská stránka aplikácie',
    'app_homepage_desc' => 'Vyberte zobrazenie, ktoré sa má zobraziť na domovskej stránke namiesto predvoleného zobrazenia. Povolenia stránky sa pre vybraté stránky ignorujú.',
    'app_homepage_select' => 'Vybrať stránku',
    'app_footer_links' => 'Odkazy v pätičke',
    'app_footer_links_desc' => 'Pridajte odkazy, ktoré sa majú zobraziť v päte lokality. Tieto sa zobrazia v spodnej časti väčšiny stránok, vrátane tých, ktoré nevyžadujú prihlásenie. Ak chcete použiť preklady definované systémom, môžete použiť označenie "trans::<key>". Napríklad: Použitie „trans::common.privacy_policy“ poskytne preložený text „Zásady ochrany osobných údajov“ a „trans::common.terms_of_service“ poskytne preložený text „Zmluvné podmienky“.',
    'app_footer_links_label' => 'Označenie odkazu',
    'app_footer_links_url' => 'URL odkaz',
    'app_footer_links_add' => 'Pridať odkaz na pätu',
    'app_disable_comments' => 'Zakázať komentáre',
    'app_disable_comments_toggle' => 'Vypnúť komentáre',
    'app_disable_comments_desc' => 'Zakázať komentáre na všetkých stránkach aplikácie. Existujúce komentáre sa nezobrazujú.',

    // Color settings
    'content_colors' => 'Farby obsahu',
    'content_colors_desc' => 'Nastaví farby pre všetky prvky v hierarchii organizácie stránky. Kvôli čitateľnosti sa odporúča vybrať farby s podobným jasom ako predvolené farby.',
    'bookshelf_color' => 'Farba police',
    'book_color' => 'Farba knihy',
    'chapter_color' => 'Farba kapitoly',
    'page_color' => 'Farba stránky',
    'page_draft_color' => 'Farba konceptu stránky',

    // Registration Settings
    'reg_settings' => 'Nastavenia registrácie',
    'reg_enable' => 'Povolenie registrácie',
    'reg_enable_toggle' => 'Povoliť registrácie',
    'reg_enable_desc' => 'Keď je registrácia povolená, používateľ sa bude môcť prihlásiť ako používateľ aplikácie. Po registrácii dostane predvolenú používateľskú rolu.',
    'reg_default_role' => 'Prednastavená používateľská rola po registrácii',
    'reg_enable_external_warning' => 'Ak je aktívna externá autentifikácia LDAP alebo SAML, možnosť vyššie sa ignoruje. Používateľské účty pre neexistujúcich členov sa vytvoria automaticky, ak je overenie proti používanému externému systému úspešné.',
    'reg_email_confirmation' => 'Potvrdenie e-mailom',
    'reg_email_confirmation_toggle' => 'Vyžadovať potvrdenie e-mailom',
    'reg_confirm_email_desc' => 'Ak je použité obmedzenie domény, potom bude vyžadované overenie emailu a hodnota nižšie bude ignorovaná.',
    'reg_confirm_restrict_domain' => 'Obmedziť registráciu na doménu',
    'reg_confirm_restrict_domain_desc' => 'Zadajte zoznam domén, pre ktoré chcete povoliť registráciu oddelených čiarkou. Používatelia dostanú email kvôli overeniu adresy predtým ako im bude dovolené používať aplikáciu. <br> Používatelia si budú môcť po úspešnej registrácii zmeniť svoju emailovú adresu.',
    'reg_confirm_restrict_domain_placeholder' => 'Nie sú nastavené žiadne obmedzenia',

    // Maintenance settings
    'maint' => 'Údržba',
    'maint_image_cleanup' => 'Prečistenie obrázkov',
    'maint_image_cleanup_desc' => 'Skenovať obsah stránky a revízie, aby sa skontrolovalo, ktoré obrázky a návrhy sa momentálne používajú a ktoré obrázky sú nadbytočné. Pred spustením sa uistite, že ste vytvorili úplnú zálohu obrazu a databázy.',
    'maint_delete_images_only_in_revisions' => 'Odstráňte aj obrázky, ktoré existujú iba v starých revíziách stránok',
    'maint_image_cleanup_run' => 'Spustiť prečistenie',
    'maint_image_cleanup_warning' => ':count nájdených potenciálne nepoužitých obrázkov. Naozaj chcete odstrániť tieto obrázky?',
    'maint_image_cleanup_success' => ':count potenciálne nepoužité obrázky boli nájdené a odstránené!',
    'maint_image_cleanup_nothing_found' => 'Žiadne nepoužit obrázky neboli nájdené. Nič sa nezmazalo!',
    'maint_send_test_email' => 'Odoslať testovací email',
    'maint_send_test_email_desc' => 'Týmto sa odošle testovací e-mail na vašu e-mailovú adresu uvedenú vo vašom profile.',
    'maint_send_test_email_run' => 'Odoslať testovací email',
    'maint_send_test_email_success' => 'Email odoslaný na :address',
    'maint_send_test_email_mail_subject' => 'Testovací email',
    'maint_send_test_email_mail_greeting' => 'Zdá sa, že doručovanie e-mailov funguje!',
    'maint_send_test_email_mail_text' => 'Gratulujeme! Keď ste dostali toto e-mailové upozornenie, zdá sa, že vaše nastavenia e-mailu sú nakonfigurované správne.',
    'maint_recycle_bin_desc' => 'Vymazané police, knihy, kapitoly a strany sa odošlú do koša, aby sa dali obnoviť alebo natrvalo odstrániť. Staršie položky z koša môžu byť po chvíli automaticky odstránené v závislosti od konfigurácie systému.',
    'maint_recycle_bin_open' => 'Otvoriť kôš',

    // Recycle Bin
    'recycle_bin' => 'Kôš',
    'recycle_bin_desc' => 'Tu môžete obnoviť položky, ktoré boli odstránené, alebo zvoliť ich trvalé odstránenie zo systému. Tento zoznam je nefiltrovaný na rozdiel od podobných zoznamov aktivít v systéme, kde sa používajú filtre povolení.',
    'recycle_bin_deleted_item' => 'Odstránené položky',
    'recycle_bin_deleted_parent' => 'Nadradené',
    'recycle_bin_deleted_by' => 'Zmazal(a)',
    'recycle_bin_deleted_at' => 'Čas odstránenia',
    'recycle_bin_permanently_delete' => 'Natrvalo odstrániť',
    'recycle_bin_restore' => 'Obnoviť',
    'recycle_bin_contents_empty' => 'Kôš je aktuálne prázdny',
    'recycle_bin_empty' => 'Vyprázdniť Kôš',
    'recycle_bin_empty_confirm' => 'Tým sa natrvalo odstránia všetky položky v koši vrátane obsahu obsiahnutého v každej položke. Naozaj chcete vyprázdniť kôš?',
    'recycle_bin_destroy_confirm' => 'Táto akcia natrvalo odstráni túto položku spolu so všetkými podriadenými prvkami uvedenými nižšie zo systému a tento obsah nebudete môcť obnoviť. Naozaj chcete natrvalo odstrániť túto položku?',
    'recycle_bin_destroy_list' => 'Položky, ktoré budú odstránené',
    'recycle_bin_restore_list' => 'Položky, ktoré budú obnovené',
    'recycle_bin_restore_confirm' => 'Táto akcia obnoví odstránenú položku vrátane všetkých podradených prvkov na ich pôvodné miesto. Ak bolo pôvodné umiestnenie medzitým odstránené a teraz je v koši, bude potrebné obnoviť aj nadradenú položku.',
    'recycle_bin_restore_deleted_parent' => 'Nadradená položka tejto položky bola tiež odstránená. Položka zostane odstránená, kým nebude obnovený aj nadradená položka.',
    'recycle_bin_restore_parent' => 'Obnoviť nadradenú položku',
    'recycle_bin_destroy_notification' => 'Vymazané :count položky z koša.',
    'recycle_bin_restore_notification' => 'Obnovené :count položky z koša.',

    // Audit Log
    'audit' => 'Denník auditu',
    'audit_desc' => 'Tento denník auditu zobrazuje zoznam aktivít sledovaných v systéme. Tento zoznam je nefiltrovaný na rozdiel od podobných zoznamov aktivít v systéme, kde sa používajú filtre povolení.',
    'audit_event_filter' => 'Filter udalostí',
    'audit_event_filter_no_filter' => 'Žiadny filter',
    'audit_deleted_item' => 'Odstránená položka',
    'audit_deleted_item_name' => 'Názov :name',
    'audit_table_user' => 'Užívateľ',
    'audit_table_event' => 'Udalosť',
    'audit_table_related' => 'Súvisiaca položka alebo detail',
    'audit_table_ip' => 'IP adresa',
    'audit_table_date' => 'Dátum aktivity',
    'audit_date_from' => 'Časový interval od',
    'audit_date_to' => 'Časový interval',

    // Role Settings
    'roles' => 'Roly',
    'role_user_roles' => 'Používateľské roly',
    'role_create' => 'Vytvoriť novú rolu',
    'role_create_success' => 'Rola úspešne vytvorená',
    'role_delete' => 'Zmazať rolu',
    'role_delete_confirm' => 'Toto zmaže rolu menom \':roleName\'.',
    'role_delete_users_assigned' => 'Túto rolu má priradenú :userCount používateľov. Ak chcete premigrovať používateľov z tejto roly, vyberte novú rolu nižšie.',
    'role_delete_no_migration' => "Nemigrovať používateľov",
    'role_delete_sure' => 'Ste si istý, že chcete zmazať túto rolu?',
    'role_delete_success' => 'Rola úspešne zmazaná',
    'role_edit' => 'Upraviť rolu',
    'role_details' => 'Detaily roly',
    'role_name' => 'Názov roly',
    'role_desc' => 'Krátky popis roly',
    'role_mfa_enforced' => 'Vyžadovať viacfaktorové overenie',
    'role_external_auth_id' => 'Externé autentifikačné ID',
    'role_system' => 'Systémové oprávnenia',
    'role_manage_users' => 'Spravovať používateľov',
    'role_manage_roles' => 'Spravovať role a oprávnenia rolí',
    'role_manage_entity_permissions' => 'Spravovať všetky oprávnenia kníh, kapitol a stránok',
    'role_manage_own_entity_permissions' => 'Spravovať oprávnenia vlastných kníh, kapitol a stránok',
    'role_manage_page_templates' => 'Spravovať šablóny',
    'role_access_api' => 'API prístupového systému',
    'role_manage_settings' => 'Spravovať nastavenia aplikácie',
    'role_export_content' => 'Exportovať obsah',
    'role_asset' => 'Oprávnenia majetku',
    'roles_system_warning' => 'Uvedomte si, že prístup ku ktorémukoľvek z vyššie uvedených troch povolení môže používateľovi umožniť zmeniť svoje vlastné privilégiá alebo privilégiá ostatných v systéme. Roly s týmito povoleniami priraďujte iba dôveryhodným používateľom.',
    'role_asset_desc' => 'Tieto oprávnenia regulujú prednastavený prístup k zdroju v systéme. Oprávnenia pre knihy, kapitoly a stránky majú vyššiu prioritu.',
    'role_asset_admins' => 'Správcovia majú automaticky prístup ku všetkému obsahu, ale tieto možnosti môžu zobraziť alebo skryť možnosti používateľského rozhrania.',
    'role_all' => 'Všetko',
    'role_own' => 'Vlastné',
    'role_controlled_by_asset' => 'Regulované zdrojom, do ktorého sú nahrané',
    'role_save' => 'Uložiť rolu',
    'role_update_success' => 'Roly úspešne aktualizované',
    'role_users' => 'Používatelia s touto rolou',
    'role_users_none' => 'Žiadni používatelia nemajú priradenú túto rolu',

    // Users
    'users' => 'Používatelia',
    'user_profile' => 'Profil používateľa',
    'users_add_new' => 'Pridať nového používateľa',
    'users_search' => 'Hľadať medzi používateľmi',
    'users_latest_activity' => 'Nedávna aktivita',
    'users_details' => 'Údaje o používateľovi',
    'users_details_desc' => 'Nastavte zobrazované meno a e-mailovú adresu pre tohto používateľa. E-mailová adresa bude slúžiť na prihlásenie do aplikácie.',
    'users_details_desc_no_email' => 'Nastavte zobrazované meno pre tohto používateľa, aby ho ostatní mohli rozpoznať.',
    'users_role' => 'Používateľské roly',
    'users_role_desc' => 'Vyberte, ku ktorým rolám bude tento používateľ priradený. Ak je používateľ priradený k viacerým rolám, povolenia z týchto rolí sa nahromadia a získajú všetky schopnosti priradených rolí.',
    'users_password' => 'Heslo používateľa',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 8 characters long.',
    'users_send_invite_text' => 'Môžete sa rozhodnúť poslať tomuto používateľovi e-mail s pozvánkou, ktorý mu umožní nastaviť si vlastné heslo, v opačnom prípade mu ho môžete nastaviť sami.',
    'users_send_invite_option' => 'Odoslať e-mail s pozvánkou pre používateľa',
    'users_external_auth_id' => 'Externé autentifikačné ID',
    'users_external_auth_id_desc' => 'Toto je ID používané na priradenie tohto používateľa pri komunikácii s vaším externým autentifikačným systémom.',
    'users_password_warning' => 'Pole nižšie vyplňte iba ak chcete zmeniť heslo:',
    'users_system_public' => 'Tento účet reprezentuje každého hosťovského používateľa, ktorý navštívi Vašu inštanciu. Nedá sa pomocou neho prihlásiť a je priradený automaticky.',
    'users_delete' => 'Zmazať používateľa',
    'users_delete_named' => 'Zmazať používateľa :userName',
    'users_delete_warning' => ' Toto úplne odstráni používateľa menom \':userName\' zo systému.',
    'users_delete_confirm' => 'Ste si istý, že chcete zmazať tohoto používateľa?',
    'users_migrate_ownership' => 'Migrovať vlastníctvo',
    'users_migrate_ownership_desc' => 'Tu vyberte používateľa, ak chcete, aby sa vlastníkom všetkých položiek aktuálne vlastnených týmto používateľom stal iný používateľ.',
    'users_none_selected' => 'Nie je vybratý žiadny používateľ',
    'users_delete_success' => 'Používateľ úspešne zmazaný',
    'users_edit' => 'Upraviť používateľa',
    'users_edit_profile' => 'Upraviť profil',
    'users_edit_success' => 'Používateľ úspešne upravený',
    'users_avatar' => 'Avatar používateľa',
    'users_avatar_desc' => 'Tento obrázok by mal byť štvorec s rozmerom približne 256px.',
    'users_preferred_language' => 'Preferovaný jazyk',
    'users_preferred_language_desc' => 'Táto možnosť zmení jazyk používaný pre používateľské rozhranie aplikácie. Neovplyvní to žiadny obsah vytvorený používateľmi.',
    'users_social_accounts' => 'Sociálne účty',
    'users_social_accounts_info' => 'Tu si môžete pripojiť iné účty pre rýchlejšie a jednoduchšie prihlásenie. Disconnecting an account here does not previously authorized access. Revoke access from your profile settings on the connected social account.',
    'users_social_connect' => 'Pripojiť účet',
    'users_social_disconnect' => 'Odpojiť účet',
    'users_social_connected' => ':socialAccount účet bol úspešne pripojený k Vášmu profilu.',
    'users_social_disconnected' => ':socialAccount účet bol úspešne odpojený od Vášho profilu.',
    'users_api_tokens' => 'API Kľúče',
    'users_api_tokens_none' => 'Pre tohto používateľa neboli vytvorené žiadne tokeny API',
    'users_api_tokens_create' => 'Vytvoriť token',
    'users_api_tokens_expires' => 'Platnosť do',
    'users_api_tokens_docs' => 'Dokumentácia API',
    'users_mfa' => 'Viacstupňové overovanie',
    'users_mfa_desc' => 'Pre vyššiu úroveň bezpečnosti si nastavte viacúrovňové prihlasovanie.',
    'users_mfa_x_methods' => ':count nakonfigurované metódy|:count nakonfigurovaných metód',
    'users_mfa_configure' => 'Konfigurovať metódy',

    // API Tokens
    'user_api_token_create' => 'Vytvoriť API token',
    'user_api_token_name' => 'Názov',
    'user_api_token_name_desc' => 'Dajte svojmu tokenu čitateľný názov ako budúcu pripomienku jeho zamýšľaného účelu.',
    'user_api_token_expiry' => 'Dátum expirácie',
    'user_api_token_expiry_desc' => 'Nastavte dátum, kedy platnosť tohto tokenu vyprší. Po tomto dátume už žiadosti uskutočnené pomocou tohto tokenu nebudú fungovať. Ak toto pole ponecháte prázdne, nastaví sa uplynutie platnosti o 100 rokov do budúcnosti.',
    'user_api_token_create_secret_message' => 'Ihneď po vytvorení tohto tokenu sa vygeneruje a zobrazí "Token ID" a "Token Secret". Kľúč sa zobrazí iba raz, takže pred pokračovaním nezabudnite skopírovať hodnotu na bezpečné a zabezpečené miesto.',
    'user_api_token_create_success' => 'Kľúč rozhrania API bol úspešne vytvorený',
    'user_api_token_update_success' => 'Kľúč rozhrania API bol úspešne upravený',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Toto je neupraviteľný identifikátor vygenerovaný systémom pre tento token, ktorý bude potrebné poskytnúť v žiadostiach API.',
    'user_api_token_secret' => 'Kľúč',
    'user_api_token_secret_desc' => 'Toto je systémom vygenerovaný kľúč pre tento token, ktorý bude potrebné poskytnúť v žiadostiach API. Toto sa zobrazí iba raz, takže túto hodnotu skopírujte na bezpečné a bezpečné miesto.',
    'user_api_token_created' => 'Token vytvorený :timeAgo',
    'user_api_token_updated' => 'Token upravený :timeAgo',
    'user_api_token_delete' => 'Zmazať Token',
    'user_api_token_delete_warning' => 'Týmto sa tento token API s názvom \':tokenName\' úplne odstráni zo systému.',
    'user_api_token_delete_confirm' => 'Určite chcete odstrániť tento token?',
    'user_api_token_delete_success' => 'Kľúč rozhrania API bol úspešne odstránený',

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