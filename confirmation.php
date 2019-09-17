<?php
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

