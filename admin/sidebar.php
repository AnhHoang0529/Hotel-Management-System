<?php 
    session_start();
    include 'header.php';
    if (isset($_SESSION['id']) && isset($_SESSION['username'])){
?>
<nav class='sidebar'>
    <header><i class="fa fa-building"></i> VIRESORT</header>
    <div class='sidebar-content'>
    <ul>
        <li><a href="index.php?page=home"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="index.php?page=booked"><i class="fa fa-book"></i> Booked</a></li>
        <li><a href="index.php?page=check_in"><i class="fa fa-sign-in-alt"></i> Check In</a></li>
        <li><a href="index.php?page=check_out"><i class="fa fa-sign-out-alt"></i> Check Out</a></li>        
        <li><a href="index.php?page=customers"><i class="fa fa-users"></i> Customers</a></li>
        <li><a href="index.php?page=rooms"><i class="fa fa-bed"></i> Rooms</a></li>
        <?php if($_SESSION['login_type'] == 1): ?>
        <li><a href="index.php?page=users"><i class="fa fa-user"></i> Users</a></li>
        <?php endif; ?>
    </ul>
    </div>
    <div class='bottom-content'>
        <li><a href="logout.php" class="logout"> <?php echo $_SESSION['username'] ?> <i class="fa fa-power-off"></i></a></li>
    <?php
    }else{
        header("Location: login.php");
        exit();
    }
  ?>
    </div>
</nav>

<script>
	$('.nav-<?php
        $page = filter_input(INPUT_GET, 'page');
        echo isset($page) ? $page : '' ?>').addClass('active');
</script>

<style>
    *{
        margin:0;
        padding:0;
        list-style: none;
        text-decoration: none;
    }
    .sidebar{
        position: fixed;
        left: 0;
        width: 200px;
        height: 100%;
        background: #042331;
    }
    .sidebar header{
        font-size: 22px;
        color: white;
        text-align: center;
        line-height: 70px;
        background: #063146;
        user-select: none;
    }
    .sidebar-content ul a{
       height: 100%;
       width: 100%;
       line-height: 65px;
       font-size: 20px;
       color: white;
       padding-left: 40px;
    }
    .bottom-content a{
       height: 100%;
       width: 100%;
       line-height: 65px;
       font-size: 20px;
       color: white;
       padding-left: 40px;
    }
    .sidebar-content ul a i{
        margin-right: 5px;
    }
    .sidebar .bottom-content{
        position: fixed;
        bottom: 0;
    }
</style>