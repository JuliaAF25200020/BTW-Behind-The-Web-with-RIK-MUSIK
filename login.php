<?php 
include "header.php";
?>
<section class="container mt-5">
            <h2 class="section-title" >Form Login</h2>

    <form action="sv_login.php" method="post">
<input class="mb-3 form-control" type="text" placeholder="username" name="username">
<input class="mb-3 form-control" type="password"  name="password" placeholder="password">
<button class="form-control btn" type="submit" style="background-color: gold; font-weight: bold;">login</button>
    </form>
</section>