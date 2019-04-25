<?php
include("./model/database.php");
?>                               


<?php
	function printCompanyList(){
?>
							<div class="form-group">
                                <label for="companyName">Minimum Input </label>
                                 	<select class="selectpicker form-control" data-live-search="true" id="companyName" name="companyName" style="background-color: white">
<?php
		$sql = getAllCompany();
		while($res = mysqli_fetch_array($sql)){
			echo " <option value='".$res['companyName']."'>".$res['companyName']."</option>";
		}
?>
                    				</select>
                                </div>

<?php 
} 
?>