install

    啟動 mod rewrite
        a2enmod rewrite

    php install extend
        sudo apt-get install -y php-mbstring

    設定檔
        cp _self_/config.inc.php config.inc.php
        vi config.inc.php
        chmod 644 config.inc.php

    建立 phpmyadmin table
        import from "sql/create_tables.sql"

    security setting
        vi .htaccess


phpmyadmin version

    4.6.6


phpmyadmin self upgrade

    delete source code
    add source code

    rm -rf setup/


錯誤查詢

    如果無法正常啓用
    或 出現 HTTP ERROR 500
    可以査看 error log
        tail -f /var/log/apache2/error.log

