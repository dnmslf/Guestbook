<?php
/**
 * Created by PhpStorm.
 * User: dnmslf
 * Date: 26.07.2017
 * Time: 00:22
 */

session_start();
unset($_SESSION['email']);
session_destroy(); ?>
<script>history.back(-1);</script><php

?>