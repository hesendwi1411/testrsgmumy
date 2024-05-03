<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-03 11:39:19 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\MAMP\htdocs\company\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2024-05-03 11:39:19 --> Unable to connect to the database
ERROR - 2024-05-03 12:42:21 --> Severity: Notice --> Undefined index: username C:\MAMP\htdocs\company\application\modules\login\controllers\Login.php 42
ERROR - 2024-05-03 12:45:14 --> Severity: Notice --> Undefined index: username C:\MAMP\htdocs\company\application\modules\login\controllers\Login.php 42
ERROR - 2024-05-03 12:52:39 --> Severity: Notice --> Undefined index: username C:\MAMP\htdocs\company\application\modules\login\controllers\Login.php 42
ERROR - 2024-05-03 17:50:05 --> Severity: Notice --> Undefined index: username C:\MAMP\htdocs\company\application\modules\login\controllers\Login.php 42
ERROR - 2024-05-03 18:32:47 --> 404 Page Not Found: /index
ERROR - 2024-05-03 18:33:18 --> Severity: Notice --> Undefined property: CI::$m_mst_user C:\MAMP\htdocs\company\application\third_party\MX\Controller.php 59
ERROR - 2024-05-03 18:33:18 --> Severity: error --> Exception: Call to a member function get_data() on null C:\MAMP\htdocs\company\application\modules\nilai\controllers\Nilai.php 19
ERROR - 2024-05-03 18:40:26 --> Severity: Notice --> Undefined property: CI::$m_mst_user C:\MAMP\htdocs\company\application\third_party\MX\Controller.php 59
ERROR - 2024-05-03 18:40:26 --> Severity: error --> Exception: Call to a member function get_data() on null C:\MAMP\htdocs\company\application\modules\nilai\controllers\Nilai.php 19
ERROR - 2024-05-03 18:41:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.' at line 10 - Invalid query: 
            SELECT
                a.`user_id` AS `id`,
                b.`mahasiswa_nim`AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:41:39 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:43:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim`AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:43:01 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:43:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim`AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:43:04 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:43:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim`AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:43:05 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:43:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim`AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:43:05 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:43:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim`AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:43:28 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:43:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim`AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:43:29 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:45:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:45:04 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:45:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:45:05 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:45:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:45:05 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:45:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:45:40 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:47:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:47:26 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:52:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:52:46 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:53:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:53:00 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:53:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:53:01 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:53:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:53:01 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:53:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:53:02 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:53:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:53:02 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:55:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:55:01 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:55:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:55:17 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:55:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:55:19 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:55:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:55:19 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:55:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:55:19 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:55:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:55:19 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 18:55:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id' at line 10 - Invalid query: 
            SELECT
                a.`nilai_id` AS `id`,
                b.`mahasiswa_nim` AS `nim`,
                b.`mahasiswa_nama` AS `nama`,
                a.`nilai_ujian_a`,
                a.`nilai_ujian_b`,
                a.`nilai_total` AS `total`,
                a.`nilai_rata_rata` AS `rata_rata`,
                a.`nilai_grade` AS `grade`,
            FROM trx_nilai a
            LEFT JOIN mst_mahasiswa b ON a.`nilai_mahasiswa_id` = b.`mahasiswa_id`
            WHERE 1 = 1
        
ERROR - 2024-05-03 18:55:59 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2024-05-03 18:55:59 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\MAMP\htdocs\company\application\modules\nilai\models\M_nilai.php 28
ERROR - 2024-05-03 19:01:12 --> Severity: Notice --> Undefined index: id C:\MAMP\htdocs\company\application\modules\nilai\views\v_index.php 70
ERROR - 2024-05-03 19:01:12 --> Severity: Notice --> Undefined index: id C:\MAMP\htdocs\company\application\modules\nilai\views\v_index.php 75
ERROR - 2024-05-03 19:01:12 --> Severity: Notice --> Undefined index: id C:\MAMP\htdocs\company\application\modules\nilai\views\v_index.php 80
ERROR - 2024-05-03 19:47:38 --> Severity: error --> Exception: Call to undefined method M_nilai::get_list_mst_mahasiswa() C:\MAMP\htdocs\company\application\modules\nilai\controllers\Nilai.php 37
ERROR - 2024-05-03 19:48:07 --> Severity: error --> Exception: Call to undefined method M_nilai::get_list_mst_mahasiswa() C:\MAMP\htdocs\company\application\modules\nilai\controllers\Nilai.php 37
ERROR - 2024-05-03 19:49:05 --> Severity: error --> Exception: Call to undefined method M_nilai::get_list_mst_mahasiswa() C:\MAMP\htdocs\company\application\modules\nilai\controllers\Nilai.php 37
ERROR - 2024-05-03 19:49:08 --> Severity: error --> Exception: Call to undefined method M_nilai::get_list_mst_mahasiswa() C:\MAMP\htdocs\company\application\modules\nilai\controllers\Nilai.php 37
