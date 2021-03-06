# learning_typo3

## Install with composer

`composer create-project typo3/cms-base-distribution "YourNewProjectFolder`

--> Run Git-Console as Admin

[Typo3 Quickinstall](https://docs.typo3.org/typo3cms/InstallationGuide/QuickInstall/Composer/Index.html)

## Install by downloading `.zip*`

Download [typo3 zip file](https://typo3.org/download/) and the run the script `CREATE_SYMLINKS.sh`(UNIX) or `CREATE_SYMLINKS.bat`(Windows) as administrator.

### Enable `normal` login

In the directory `C:\xampp\htdocs\site\typo3conf \LocalConfiguration.php` change from `rsa` to `normal`:

```
<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$pbkdf2-sha256$25000$XlPT0aYsKA8A0KeH/80CzA$0Pp.ct5AoQMxOwF2nXCJ/pbps7lxCkBQYudoP4s1vtg',
        'loginSecurityLevel' => 'normal',
    ],
```
[Typo3 RSA to Normal](https://www.pagemachine.de/blog/tutorial-update-typo3-8-7-als-testsystem-unter-windows-installieren/)
