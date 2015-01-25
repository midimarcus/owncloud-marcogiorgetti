<?php
print_unescaped($l->t("Ehilà,\n\nti informiamo che %s ha condiviso %s con te.\nAprilo! %s\n\n", array($_['user_displayname'], $_['filename'], $_['link'])));
if ( isset($_['expiration']) ) {
	print_unescaped($l->t("La condivisione terminerà il %s.", array($_['expiration'])));
	print_unescaped('\n\n');
}
p($l->t("A presto!!"));
?>

--
<?php p($theme->getName() . ' - ' . $theme->getSlogan()); ?>
<?php print_unescaped("\n".$theme->getBaseUrl());
