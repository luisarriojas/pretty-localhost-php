<!--
Pretty Localhost PHP
Copyright (C) 2013 Luis Enrique Arriojas Catalini

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<?php
    $phpmyadmin_url="/phpmyadmin/";
?>
<!doctype html>
<head>
    <!--my css-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>
<div id="wallpaper"></div>

<div id="window">
    <div id="header">
        Pretty Localhost v1.0
    </div>

    <div id="links">
        <a href="<?php echo $phpmyadmin_url; ?>">phpMyAdmin</a>
        <br/>
        <a href="phpinfo.php">PHP information</a>
    </div>

    <div id="footer">
        <?php
        //apache version
        echo apache_get_version() . "<br />";

        //mysql version
        $mysqli = new mysqli("localhost", "root", "root");
        if (!mysqli_connect_errno()) {
            printf("MySQL %s<br />", $mysqli->server_info);
            $mysqli->close();
        }
        ?>
    </div>

    <div id="credit">
        <img src="img/agplv3.png"/>
        <br/>
        Developed by <a href="http://www.luisarriojas.com" target="_blank" title="Senior Web Engineer">Luis Arriojas</a> and licensed under <a
            href="LICENSE" target="_blank">AGPLv3</a>.
        <br/>
        Forked on <a href="https://github.com/luisarriojas/pretty-localhost-php">GitHub</a>.
    </div>
</div>
</body>