<?php
// smarty-test.php

// Smartyのinclude
require_once( __DIR__ . '/vendor/smarty-3.1.30/libs/Smarty.class.php');

// Smartyの初期設定
$smarty_obj = new Smarty();
// var_dump($smarty_obj);
$smarty_obj->setTemplateDir( __DIR__ . '/../smarty/templates/');
$smarty_obj->setCompileDir( __DIR__ . '/../smarty/templates_c/');

// Smartyへのデータの入力
$s = 'データ入力テスト';
$smarty_obj->assign('val', $s);
//
$awk['a'] = '配列のa';
$awk['b'] = '配列のb';
$smarty_obj->assign('ar', $awk);

// テンプレートを指定して出力
$smarty_obj->display('smarty_test.tpl');