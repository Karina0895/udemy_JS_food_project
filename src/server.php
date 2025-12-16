<?php
$_POST = json_decode(file_get_contents("php://input"), true); //конструкція для роботи з json даними
echo var_dump($_POST); //ця команда бере дані, які прийшли з клієнта, перетворює їх у рядок і показує їх знову на клієнті
