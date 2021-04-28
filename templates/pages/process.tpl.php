<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text'])) {
    $datenow=date("Y-m-d");
    $timenow=date("H:i:s");

    if((strlen($_POST['name'])) < 5 || (strlen($_POST['name'])) > 45)
        $name="Wrong!";
    else
        $name="Correct";

    $re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
    if(!preg_match($re,$_POST['email']))
        $email="Wrong!";
    else
        $email="Correct";

    if(strlen(($_POST['text'])) < 1 || strlen(($_POST['text'])) > 100)
        $text="Wrong!";
    else
        $text="Correct";
}
else {    
        $again=true;
        $message="You didn't send message for us, please use link for send message: ";
}

?>
<div style="min-height:100%;">
    <?php if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text'])) { ?>
        <table>
            <tr>
                <td>Name: <?= $_POST['name']."   "?></td>
                <td><?= $name?><br></td>
            </tr>
            <tr>
                <td>E-mail: <?= $_POST['email']."   "?></td>
                <td><?= $email?><br></td>
            </tr>
            <tr>
                <td>Message: <?= $_POST['text']."   "?></td>
                <td><?= $text?><br></td>
            </tr>
            <tr>
                <td>Date: <?= $datenow ?></td>
            </tr>
            <tr>
                <td>Time: <?= $timenow ?></td>
            </tr>
        </table>
        <?php } ?>
        <?php if(isset($message)) { ?>
        <h1><?= $message ?></h1>
        <?php if($again) { ?>
            <a href="?page=contact">New message</a>
        <?php } ?>
    <?php } ?>
</div>