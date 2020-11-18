<?php
$locale['email_create_subject'] = "Účet vytvorený na [SITENAME]";
$locale['email_create_message'] = "Ahoj [USER_NAME],<br/>
Váš účet na [SITENAME] bol vytvorený.<br/>Pre prihlásenie použite nasledovné údaje:<br/>
Užívateľské meno: [USER_NAME]<br/>Heslo: [PASSWORD]<br/>S pozdravom,<br/>[SITEUSERNAME]";

$locale['email_activate_subject'] = "Účet aktivovaný na [SITENAME]";
$locale['email_activate_message'] = "Ahoj [USER_NAME],<br/>Váš účet na [SITENAME] bol aktivovaný.<br/>
Teraz sa môžete prihlásiť pomocou zvoleného mena a hesla.<br/>S pozdravom,<br/>[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Vyžaduje sa reaktivácia účtu na [SITENAME]";
$locale['email_deactivate_message'] = "Ahoj [USER_NAME],<br/>Uplynulo [DEACTIVATION_PERIOD] dní od vášho posledného prihlásenia na [SITENAME]. Boli ste označený ako neaktívny, ale údaje vášho účtu ostávajú nezmenené.<br/>
Na reaktiváciu vášho účtu kliknite na tento odkaz: [REACTIVATION_LINK]<br/>S pozdravom,<br/>[SITEUSERNAME]";

$locale['email_ban_subject'] = "Váš účet na [SITENAME] bol zabanovaný";
$locale['email_ban_message'] = "Ahoj [USER_NAME],<br/>Váš účet na [SITENAME] bol zabanovaný od [ADMIN_USERNAME] z tohto dôvodu:<br/>
[REASON]<br/>Ak chcete získať viac informácií o tomto zákaze, kontaktujte správcu webu na [SITENAME].<br/>S pozdravom,<br/>[SITEUSERNAME]";

$locale['email_secban_subject'] = "Váš účet na [SITENAME] bol zabanovaný";
$locale['email_secban_message'] = "Ahoj [USER_NAME],<br/>Váš účet na [SITENAME] bol zabanovaný od [ADMIN_USERNAME] pretože niektoré vami vykonané akcie boli považované za bezpečnostnú hrozbu pre web.<br/>
Ak chcete získať ďalšie informácie o tomto bezpečnostnom zákaze, kontaktujte správcu webu na [SITENAME].<br/>S pozdravom,<br/>[SITEUSERNAME]";

$locale['email_suspend_subject'] = "Váš účet na [SITENAME] bol pozastavený";
$locale['email_suspend_message'] = "Ahoj [USER_NAME],<br/>
Váš účet na [SITENAME] bol zabanovaný od [ADMIN_USERNAME] od [DATE] (čas stránky) z týchto dôvodov:<br/>
[REASON]<br/>Ak chcete získať ďalšie informácie o tomto pozastavení, obráťte sa na správcu webu na [SITENAME].<br/>S pozdravom,<br/>[SITEUSERNAME]";

$locale['email_resend_subject'] = "Znova odoslaný aktivačný link - [SITENAME]";
$locale['email_resend_message'] = "Ahoj [USER_NAME],<br/>
Tento e-mail ste dostali, pretože ste neaktivovali e-mail na našich stránkach - [SITENAME].<br/>Ak v priebehu jedného dňa neaktivujete e-mail, vaša žiadosť o registráciu bude zrušená.<br/>
Zaregistrovali ste sa s nasledujúcími údajmi:<br/>Užívateľské meno: [USER_NAME]<br/>
Môžete aktivovať účet s nasledujúcim odkazom:<br/>[ACTIVATION_LINK]<br/>S pozdravom,<br/>[SITENAME]";
