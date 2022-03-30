<?php

// We only store config values here, that are different to the default ones.
// See ./config-dist.php for default values and more information on specific
// values.
//
// For sensitive information like passwords we use the /settingoverrides
// feature but we still define them here with example values to keep track
// of config values that we override.

Setting('DEFAULT_LOCALE', 'de');
Setting('CURRENCY', 'EUR');
Setting('AUTH_CLASS', 'Grocy\Middleware\LdapAuthMiddleware');

// Overwritten in /settingoverrides
Setting('LDAP_ADDRESS', ''); // Example value "ldap://vm-dc2019.local.berrnd.net"
Setting('LDAP_BASE_DN', ''); // Example value "DC=local,DC=berrnd,DC=net"
Setting('LDAP_BIND_DN', ''); // Example value "CN=grocy_bind_account,OU=service_accounts,DC=local,DC=berrnd,DC=net"
Setting('LDAP_BIND_PW', ''); // Password for the above account
Setting('LDAP_UID_ATTR', ''); // Windows AD: "sAMAccountName", OpenLDAP: "uid", GLAuth: "cn"
Setting('LDAP_USER_FILTER', ''); // Example value "(OU=grocy_users)"