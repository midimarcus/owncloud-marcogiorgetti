<?php
/* Copyright (c) 2014, Joas Schilling nickvergessen@owncloud.com
 * This file is licensed under the Affero General Public License version 3
 * or later. See the COPYING-README file. */

/** @var OC_L10N $l */
/** @var array $_ */

p($l->t('Ciao %s,', array($_['username'])));
p("\n");
p("\n");

if ($_['timeframe'] == \OCA\Activity\UserSettings::EMAIL_SEND_HOURLY) {
	p($l->t("Stai ricevendo questa email perché nell'ultima ora sono state fatte le seguenti attività su %s", array($_['owncloud_installation'])));
} else if ($_['timeframe'] == \OCA\Activity\UserSettings::EMAIL_SEND_DAILY) {
	p($l->t("Stai ricevendo questa email perché nell'ultimo giorno sono state fatte le seguenti attività su %s", array($_['owncloud_installation'])));
} else {
	p($l->t("Stai ricevendo questa email perché nell'ultima settimana sono state fatte le seguenti attività su %s", array($_['owncloud_installation'])));
}
p("\n");
p("\n");

foreach ($_['activities'] as $activity) {
	print_unescaped($l->t('* %1$s - %2$s', $activityData));
	p("\n");
}
p("\n");
