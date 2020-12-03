<?php
session_start();

?>
<script>
    var msg = "<?=$_SESSION['msg']?>";
    if(msg) {
        alert(msg);
    }
    <?php
        $_SESSION['msg'] = "";
    ?>
</script>