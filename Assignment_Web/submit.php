<?php
if (isset($_POST['score'])) {
?>
<form method="post" action="end.php" id="submitForm" style="visibility: hidden;">
    <input name="score" value="<?php echo $_POST['score'] ?>"></input>
    <div type="submit"></div>
</form>
    <script>
        const submitForm = document.getElementById('submitForm');
        submitForm.submit()
    </script>
<?php
}