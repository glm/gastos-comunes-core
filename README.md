Gastos Comunes Core
========================

1) Descargar
--------------------------------

    git clone http://github.com/glm/gastos-comunes-core.git
    cd gastos-comunes-core
    rm -rf .git

2) Installation
---------------

Este proyecto está basado en symfony2 standard edition, por lo tanto los pasos para 
su instalación son identicos.

### a) Verificar la configuración del sistema

    php app/check.php

### b) Install the Vendor Libraries

El proyecto se publica sin "vendors" por lo tanto necesita instalarlos.

    php bin/vendors install

### Verificar permisos
El sistema necesita poder crear y escribir en las carpetas app/cache y app/logs,
si tiene problemas con esto vea como lo hacen en symfony :)
http://symfony.com/doc/current/book/installation.html

### Conectar a la Base de datos

Cree el archivo parameters.ini a partir de la plantilla parameters.ini.dist y 
coloque en él los parámetros de su db

### c) Aceda al App via Browser

    http://localhost/gastos-comunes-core/web/app_dev.php

