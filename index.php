<?php
include 'connect.php';
include 'library.php';

  
$result = ('SELECT * FROM buku LIMIT 6');
$query = mysqli_query ($db_link, $result);

$result2 = ("SELECT * FROM buku WHERE id_kategori = 'KAT001';");
$hukum = mysqli_query($db_link,$result2);
?>
<!DOCTYPE html>
<html>
<head>

    <link rel="icon" type="image/png" sizes="16x16" href="book/amrela1.png">
    <title>Amrela Bookstore</title>
</head>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <script src="css/bootstrap.min.js"></script>
<body>
<script type = "text/javascript">
$(document).ready(function(){
    $('#s-results').load('search.php').show();
    
    
    $('#keyword').click(function(){
        showValues();
    });
    
    $(function() {
        $('form').bind('submit',function(){
            showValues(); 
            return false; 
        });
    });
        
    function showValues() {
        $('#s-results').html('<img src="images/loading.gif" />');  
        
        $.post('search.php', { name: form.name.value },
        
        function(result){
            $('#s-results').html(result).show();
        });
    }
        
});
</script>

<?php

	include('bs.php');
	if ($_SESSION['id_level'] == 1 || $_SESSION['id_level'] == 2) {
	
	echo "<script>location='admin/home.php';</script>";
}

?>

<div class="container" style="margin-left: 15%;margin-right: 15%; width: 70%;padding: 0px;">
 <?php
 include 'container.php';
 ?>
  </div>
  <?php
include 'footer-with-social-icons.html';
  ?>
<script src="js/jquery.min.js"></script>
</body>
</html>
