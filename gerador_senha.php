<?php 

$senha = 'igor1101';

$hash = password_hash($senha, PASSWORD_DEFAULT);

echo "O hash gerado é $hash";