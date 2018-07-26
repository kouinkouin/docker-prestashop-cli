# Prestashop

Backup and restore scripts

## Backup

### For developers

#### Backup on the development server

To backup your database in folder `build/database`:

```bash
/srv/tools/ps-backup --root prestashop_project
```

## Restore

To restore your database from folder `build/database`:

### By dropping actual tables

```bash
cd prestashop_project
tools/database/restore.php --root prestashop_project --domain gcforex.test.antidot.be
```

### By keeping actual tables

```bash
cd prestashop_project
tools/database/restore.php --root prestashop_project --domain gcforex.test.antidot.be --keep-db
```
