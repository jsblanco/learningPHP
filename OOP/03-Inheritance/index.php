<?php

require_once 'classes.php';

$person = new Person('Francis', 23, true);
$developer = new Developer('Gilfoyle', 32, true, 'PHP');
$webDev = new WebDeb('Augustus', 31, true, 'Typescript', false, true);
$account = new AccountManager('Rebecca', 27, false);

$developer->knowsLanguage('Java');
$developer->knowsLanguage('JS');
$developer->knowsLanguage('Lisp');
echo $developer->canCodeIn();

$webDev->knowsLanguage('PHP');
$webDev->knowsLanguage('Java');
echo $webDev->canCodeIn();
echo $webDev->getIsFrontEnd();
echo $webDev->getIsBackEnd();


echo $account->isMakingBudgets();
