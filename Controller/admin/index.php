<?php
require_once 'php/DBConnect.php';
$db = new DBConnect();
$db->checkAuth();

$invalid = NULL;
if(isset($_POST['loginBtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username == 'cse470'){
        if($password == 'cse470'){
            session_start();
            $_SESSION['username'] = $username;
            header("Location: http://localhost/BDManagement/admin/home.php");
        } else {
            $invalid = "Invalid Password!";
        }
    }else{
        $invalid = "Invalid username or password! Look at the hint carefully";
    }
}

$title="Admin Login";
include 'layout/_header.php'; 
include 'layout/adminNav.php';
    
?>

<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <?php if(isset($invalid)): ?>
        <div class="alert-danger" id="invalid"><?= $invalid; ?></div>
        <?php endif; ?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-4">
                    <img src="assets/security-icon.png" class="img img-responsive img-thumbnail">
                </div>
                <h3>Admin Login</h3>
            </div>
            <div class="panel-body">
                <form class="form-vertical" role="form" method="post" action="index.php">
                    <div class="form-group">
                        <input type="text" class="form-control" required="true" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" required="true" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group loginBtn">
                        <button type="submit" name="loginBtn" class="btn btn-primary btn-sm">Login</button>
                    </div>
                    <p class="text-danger">Username: cseX<br>
                       Password: cseX<br>
                       'X' is the course code, for example, if course code is 100 then,<br>
                       Username: cse100<br>
                       Password: cse100
                    </p>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>

<?php include 'layout/_footer.php'; ?>