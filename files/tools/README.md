# Prestashop

Backup and restore scripts

## Initialisation

```bash
cd prestashop_project
chmod +x tools/database/backup.php
chmod +x tools/database/restore.php
```

## Backup

### For developers

#### Backup on the development server

To backup your database:

On argent:

```bash
cd prestashop_project
tools/database/backup.php --root . --dump build/database
```

#### Download the dump files

With PhpStorm, by clicking on "Download from argent" on the `build/database` folder.

#### Version your changes

On your local workstation, to version your change, select only that you need, using:

```bash
git add -p build/database
```

### For CI

To backup your database:

```bash
cd prestashop_project
tools/database/backup.php --root . --dump build/database
git add build/database
```

## Restore

To restore (drop your actual tables):
```bash
cd prestashop_project
tools/database/restore.php --root . --dump build/database --domain gcforex.test.antidot.be
```
Of course, replace `gcforex.test.antidot.be` by your domain.
