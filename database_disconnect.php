<?php
session_start();
session_destroy();
?>
<script>
    alert("Disconnected successfully");
    window.open("index.php","_self");
</script>