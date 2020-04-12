<?php
    $status = $_GET['status'];
if($status == 'student'){
    echo '老师注册...';
}else{
    echo '学生注册...';
}