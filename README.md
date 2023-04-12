# Skin FedoraFrVector

[![Tests](https://github.com/Fedora-Fr/mw-fedora-fr-skin/actions/workflows/qa.yaml/badge.svg)](https://github.com/Fedora-Fr/mw-fedora-fr-skin/actions/workflows/qa.yaml)

This MediaWiki skin is based on Vector.

## Installation

```php
## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = 'vector-2022';
$wgVectorResponsive = true;
$wgVectorDefaultSkinVersion = '2';
$wgVectorDefaultSkinVersionForExistingAccounts = '2';
wfLoadSkin( 'FedoraFrVector' );
```
