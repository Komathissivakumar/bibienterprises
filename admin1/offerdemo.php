<?php
$con=mysqli_connect("localhost","root","","project");

$countryResult = mysqli_query("SELECT DISTINCT product_name FROM product ");
?>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Multiselect Dropdown Filter</title>
</head>
<body>
    <h2>Multiselect Dropdown Filter</h2>
    <form method="POST" name="search" >
        <div id="demo-grid">
            <div class="search-box">
                <select id="Place" name="product_name[]" multiple="multiple">
                    <option value="0" selected="selected">Select product_name</option>
                        <?php
                        if (! empty($countryResult)) {
                            foreach ($countryResult as $key => $value) {
                                echo '<option value="' . $countryResult[$key]['product_name'] . '">' . $countryResult[$key]['product_name'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br>
                <button id="Filter">Search</button>
            </div>
            
                <?php
                if (! empty($_POST['product_name'])) {
                    ?>
                    <table cellpadding="10" cellspacing="1">

                <thead>
                    <tr>
                        <th><strong>Name</strong></th>
                        <th><strong>Gender</strong></th>
                        <th><strong>product_name</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from producr";
                    $i = 0;
                    $selectedOptionCount = count($_POST['product_name']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['product_name'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE product_name in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['Name']; ?></div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['Gender']; ?> </div></td>
                        <td><div class="col" id="user_data_3"><?php echo $result[$key]['product_name']; ?> </div></td>
                    </tr>
                <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>
</body>
</html>