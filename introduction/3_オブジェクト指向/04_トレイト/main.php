<?php

// 写経
declare(strict_types=1);
require_once dirname(__FILE__) . "/MemberModel.php";

$memberModel = new MemberModel();
$memberModel->create("111");
$memberModel->delete("124");
echo file_get_contents("MemberModel.log");
