@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../../../../../../../../vendor/symfony/error-handler/Resources/bin/patch-type-declarations
php "%BIN_TARGET%" %*
