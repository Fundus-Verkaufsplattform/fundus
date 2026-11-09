# Fundus

Moodle Plugin für die Fundus Plattform.

## Lokales Setup

Starte eine Moodle 5.3 Entwicklungsumgebung. Kopiere dieses Plugin nach
public/local/fundus und führe im Moodle Container
php admin/cli/upgrade.php aus.

## Lokal installieren (Ubuntu WSL)

Führe alle lokalen Installationsbefehle in Ubuntu (WSL), nicht in PowerShell, aus.
Docker Desktop muss laufen und die WSL-Integration für Ubuntu aktiviert sein.
Moodle 5.3 und Moodle-Docker müssen in WSL eingerichtet und gestartet sein.

Repository klonen:

```bash
mkdir -p ~/projects
cd ~/projects
git clone https://github.com/Fundus-Verkaufsplattform/fundus.git
```

Plugin nach Moodle kopieren:

```bash
export MOODLE_DOCKER_WWWROOT="$HOME/projects/moodle"
export MOODLE_DOCKER_DB=pgsql
mkdir -p "$MOODLE_DOCKER_WWWROOT/public/local/fundus"
cp -r ~/projects/fundus/* "$MOODLE_DOCKER_WWWROOT/public/local/fundus/"
```

Moodle-Plugin-Upgrade ausführen:

```bash
cd ~/projects/moodle-docker
bin/moodle-docker-compose exec webserver php admin/cli/upgrade.php
```
