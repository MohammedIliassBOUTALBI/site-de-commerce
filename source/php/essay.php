
<?php

$query = "SELECT * FROM `articleshomme` ORDER BY Model ASC";
$result = mysqli_query($connect, $query);
$h = $i + 4;
if(mysqli_num_rows($result > 0))
{
	while($row = mysqli_fetch_array($result) && $i <$h)
	{
		$i++;
	?>
			<div class="col-4">
				<img src="<?php echo $row["images"]; ?>" />
				<h4><?php echo $row["Model"]; ?></h4>
				<p><?php echo $row["Prix"]; ?></p>
			</div>

	<?php
	}
}
?>