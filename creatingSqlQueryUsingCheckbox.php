    <form action="#" method="post">
 <input type="checkbox" name="check_list[]" value="uid"><label>uid</label>
<input type="checkbox" name="check_list[]" value="name"><label>name</label>
<input type="checkbox" name="check_list[]" value="block"><label>block</label>....and so more
 <input type="submit" name="submit" value="Submit"/>
</form>

<?php 


if(isset($_POST['submit'])){
    $sql1 = "select ";
    $sql2 = "";
    $checklist = $_POST['check_list'];
    $count = count($checklist);
    if($count!=1){
    	$count = $count-1;
	    for ($i=0; $i < $count ; $i++) { 
	    	$sql2 = $sql2.$checklist[$i].",";
	    }
	    $sql2 = $sql2.$checklist[$count];
    } else{
    	$sql2 = $checklist[0];
    }
    $sql3= " from emitra_basic LIMIT 5";
    $totalSql =  $sql1.$sql2.$sql3;
    echo $totalSql;
	 if ($result=mysqli_query($conn,$totalSql))
	     { while ($row=mysqli_fetch_row($result))
	     { echo "id".$row['uid']."<br/>";
	echo "name".$row['name']."<br/>";}}
}   
