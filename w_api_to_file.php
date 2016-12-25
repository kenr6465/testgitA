    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $my_api_fp = $_POST['api_fp']; 
            $my_local_fp = $_POST['local_fp'];
            if (!empty($my_local_fp) && !empty($my_api_fp)) {
                $myData = file_get_contents($my_api_fp);
                file_put_contents($my_local_fp, $myData);
                echo "success";
            } else {
                echo "Something is wrong. No file saved. \n";
            }
        }
    ?>