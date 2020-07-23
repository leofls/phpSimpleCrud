<?php
session_start();
if(isset($_SESSION['menssagem'])){ ?>

    
    <script>
        // menssagem 
        window.onload = function (){
            M.toast({html: '<?php echo $_SESSION['menssagem']; ?>'});
        };
    </script>
<?php
}
session_unset();
?>