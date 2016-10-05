<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
    $dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
    $dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
    $dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
    $dbName = 'index';
    
    $array = array("first_name", "last_name", "birth", "email", "phone", "weight", "height", "waist", "hip", "chest", "abdomen", "thigh", "waist_to_hip", 
            "bmi", "heart_rate", "blood_pressure", "body_fat", "sit_reach", "v_sit_reach", "push_ups", "sit_ups");

    //$allColumns = "(firstname, lastname, birth, phone, email, weight, height, waist, hip, chest, abdomen, thigh, waist_to_hip, bmi, heart_rate, blood_pressure, body_fat, sit_reach, v_sit_reach, push_ups, sit_ups)";
    //$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    function createBeforeTable() {
        // sql to create table
        $mysql = "CREATE TABLE Testing (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP
            )";
        return $mysql;
    }

$createsql = "CREATE TABLE people (
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        birth VARCHAR(30) NOT NULL,
        phone VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        weight VARCHAR(10) NOT NULL,
        height VARCHAR(10) NOT NULL,
        waist VARCHAR(10) NOT NULL,
        hip VARCHAR(10) NOT NULL,
        chest VARCHAR(10) NOT NULL,
        abdomen VARCHAR(10) NOT NULL,
        thigh VARCHAR(10) NOT NULL,
        waist_to_hip VARCHAR(10) NOT NULL,
        bmi VARCHAR(10) NOT NULL,
        heart_rate VARCHAR(10) NOT NULL,
        blood_pressure VARCHAR(10) NOT NULL,
        body_fat VARCHAR(10) NOT NULL,
        sit_reach VARCHAR(10) NOT NULL,
        v_sit_reach VARCHAR(10) NOT NULL,
        push_ups VARCHAR(10) NOT NULL,
        sit_ups VARCHAR(10) NOT NULL
        )";


?>

