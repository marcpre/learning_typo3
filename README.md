# learning_typo3

## Install with composer

`composer create-project typo3/cms-base-distribution "YourNewProjectFolder`

--> Run Git-Console as Admin

[Typo3 Quickinstall](https://docs.typo3.org/typo3cms/InstallationGuide/QuickInstall/Composer/Index.html)

## Install by downloading `.zip*`

Download [typo3 zip file](https://typo3.org/download/) and the run the script `CREATE_SYMLINKS.sh`.

### Enable `normal` login

In the directory `` change from `rsa` to `normal`:

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
