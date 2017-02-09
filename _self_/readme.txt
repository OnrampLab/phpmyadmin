
remove 

    rm -rf example/
    rm -rf setup/

install

    cp _self_/config.inc.php config.inc.php
    vi config.inc.php
    chmod 644 config.inc.php

setting

    vi .htaccess

安裝須知

    - 要啟動 mod rewrite
        - a2enmod rewrite
    - php install extend
        - sudo apt-get install -y php-mbstring
    - 如果無法正常啓用 或 出現 HTTP ERROR 500 可以査看 error log
    - error log
        tail -f /var/log/apache2/error.log

