<?php
        if (isset($_GET['send'])){
            switch ($_GET['action'])
            {
                case 'report' :
                header('location: report.php');
                break;
                case 'modif' :
                header('location: modifier.php');
                break;
                case 'ajout' :
                header('location: Ajoute.php');
            }
        }
        ?>