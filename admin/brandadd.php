<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/brand.php';?>
<?php
    $brand=new Brand();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $brandName=$_POST["brandName"];
        $insertbrand=$brand->brandInsert($brandName);
    }
?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Brand</h2>
                <div class="block copyblock"> 
                 <?php
                    if(isset($insertbrand)){
                        echo  $insertbrand;
                    }
                ?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Brand Name</label>
                                <input type="text" name="brandName"placeholder="Enter Brand Name..." class="medium" />
                            </td>
                        </tr>
                        <!-- <tr>
                            <td>
                                <label>Brand Logo</label>
                                <input type="file" name="logo" class="medium" />
                            </td>
                        </tr> -->
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>