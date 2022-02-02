<?php
include('db.php');
?>
<h2 class="w3-wide w3-center">PROFILE</h2>
<h1 align='center'>Welcome</h1>

<?php
session_start();
if (isset($_POST['username'])) {
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($con, $sql);
?>
    <?php
    while ($rows = mysqli_fetch_array($result)) {
        $array = array();
    ?>
        <form action="" method="POST" id="signin" id="reg">
            <div id="reg-head" class="headrg">Your Profile</div>
            <table border="0" align="center" cellpadding="2" cellspacing="0">
                <tr id="lg-1">
                    <td class="tl-1">
                        <div align="left" id="tb-name">EmployeeId:</div>
                    </td>
                    <td class="tl-4"><?php echo $array['employee_id'] = $rows['employee_id']; ?></td>
                </tr>
                <tr id="lg-1">
                    <td class="tl-1">
                        <div align="left" id="tb-name">Username:</div>
                    </td>
                    <td class="tl-4"><?php echo $array['username'] = $rows['username']; ?></td>
                </tr>
                <tr id="lg-1">
                    <td class="tl-1">
                        <div align="left" id="tb-name">Email:</div>
                    </td>
                    <td class="tl-4"><?php echo $array['email'] = $rows['email']; ?></td>
                </tr>
                <tr id="lg-1">
                    <td class="tl-1">
                        <div align="left" id="tb-name">Type:</div>
                    </td>
                    <td class="tl-4"><?php echo $array['usertype'] = $rows['usertype']; ?></td>
                </tr>
            </table>
        </form>
<?php
    } // close while loop
}
?>
</br>
</form>
</div>