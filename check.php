<?php
session_start();
include 'database.php';

$faculty = array('ad','ar','aj','am','as','dm','md','mg','nk','pg','pm','rj','sb','ss','st');

$input= array('','','','','','','','','','','','','','','','','','','');
?>
<?php
for ($i=0; $i < count($faculty); $i++) { 
	$sql= "select name FROM `$faculty[$i]` where DAY ='mon' and (I='' or I is NULL);";
	$res=mysqli_query($conn,$sql);
	if ($res) {
		$row= mysqli_fetch_array($res);
		$input[$i]=$row['name'];
	}
	
}




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>asd
asd
asd
asd
as</p>
<input type="checkbox" id="yourBox" />
	<select class="browser-default custom-select mb-4" id="yourText1" disabled>
        <option value="" active>Choose option</option>
   		<?php 
   			for ($i=0; $i < count($input); $i++) {
   				?>

			<option value="<?php  if($input[$i]){echo $input[$i];} else if ($input[$i]=='') {
				continue;} ?>">
				<?php if(!$input[$i]==''){echo $input[$i];} ?> 
		</option>  
			<?php	
			}
			?>
			</select>




<script >
    document.getElementById('yourBox').onchange = function() {

    document.getElementById('yourText1').disabled = !this.checked;
};
</script>



<p>asd
asd
asd
asd
as</p>

</body>
</html>