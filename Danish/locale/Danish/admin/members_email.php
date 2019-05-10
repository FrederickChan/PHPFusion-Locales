<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/admin/members_email.php
| Authors: Jan Mølgaard (janmol) & Helmuth Mikkelsen (helmuth)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
$locale['email_create_subject'] = "En brugerkonto er oprettet på [SITENAME]";
$locale['email_create_message'] = "Hej [USER_NAME],<br/>\r\n
Din brugerkonto på [SITENAME] er blevet oprettet.<br/>Du kan nu logge ind med følgende oplysninger:<br/>\r\n
brugernavn: [USER_NAME]<br/>\r\nkodeord: [PASSWORD]<br/>\r\nVenlig hilsen,<br/>\r\n[SITEUSERNAME]";

$locale['email_activate_subject'] = "Din konto er blevet aktiveret på [SITENAME]";
$locale['email_activate_message'] = "Hej [USER_NAME],<br/>\r\nDin konto på [SITENAME] er nu blevet aktiveret.<br/>\r\n
Derfor kan du nu logge på siden med det brugernavn og det kodeord, du valgte ved oprettelsen.<br/>Venlig hilsen,<br/>\r\n[SITEUSERNAME]";

$locale['email_deactivate_subject'] = "Det er nødvendigt at genaktivere kontoen på [SITENAME]";
$locale['email_deactivate_message'] = "Hej [USER_NAME],<br/>\r\nDer er gået [DEACTIVATION_PERIOD] dag(e) siden du sidst loggede ind på [SITENAME]. Din konto er derfor blevet sat som inaktiv, men alle oplysninger og alt indhold er intakt.<br/>\r\n
For at genaktivere din konto, skal du ganske enkelt klikke på følgende link: [REACTIVATION_LINK]<br/>\r\nVenlig hilsen,<br/>\r\n[SITEUSERNAME]";

$locale['email_ban_subject'] = "Din konto på [SITENAME] er blevet udelukket";
$locale['email_ban_message'] = "Hej [USER_NAME],<br/>\r\nDin konto på [SITENAME] er blevet udelukket af [ADMIN_USERNAME] af følgende årsag:<br/>\r\n
[REASON]\r\nHvis du vil have yderligere information om udelukkelsen, kan du kontakte en administrator på [SITENAME].<br/>\r\nVenlig hilsen,\r\n[SITEUSERNAME]";

$locale['email_secban_subject'] = "Din konto på [SITENAME] er blevet udelukket";
$locale['email_secban_message'] = "Hej [USER_NAME],<br/>\r\nDin konto på [SITENAME] er blevet udelukket af [ADMIN_USERNAME] på grund af at aktiviteter, du har udført eller aktiviteter knyttet til din konto betragtes som en sikkerhedsrisiko for siden.<br/>\r\n
Hvis du vil vide mere om denne sikkerhedsudelukkelse, kan du kontakte en administrator på [SITENAME].<br/>\r\nVenlig hilsen,<br/>\r\n[SITEUSERNAME]";

$locale['email_suspend_subject'] = "Din konto på [SITENAME] er blevet suspenderet";
$locale['email_suspend_message'] = "Hej [USER_NAME],<br/>\r\n
Din konto på [SITENAME] er blevet suspenderet af [ADMIN_USERNAME] indtil [DATE] (sidens tidszone) af følgende årsag:<br/>\r\n
[REASON]<br/>\r\nHvis du vil vide mere om denne suspendering, så kontakt en administrator på [SITENAME].<br/>\r\nVenlig hilsen,<br/>\r\n[SITEUSERNAME]";

$locale['email_resend_subject'] = "Gensendt aktiveringslink - [SITENAME]";
$locale['email_resend_message'] = "Hej [USER_NAME],<br/>\r\n
Du har modtaget denne mail fordi du ikke har aktiveret din mailadresse på hjemmesiden - [SITENAME].<br/>\r\nHvis du ikke aktiverer mailadressen indenfor et døgn, vil din registrering blive afvist<br/>\r\n
Du er blevet registreret med følgende information:<br/>\r\nBrugernavn: [USER_NAME]<br/>\r\n
Du kan aktivere kontoen på dette link:<br/>\r\n[ACTIVATION_LINK]<br/>\r\nMed venlig hilsen,<br/>\r\n[SITENAME]";