<?php
  require './connect.php';

    // Filter the excel data 
    function filterData(&$str){ 
        $str = preg_replace("/\t/", "\\t", $str); 
        $str = preg_replace("/\r?\n/", "\\n", $str); 
        if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
    } 
    
    // Excel file name for download 
    $fileName = "kbyt.xls"; 
    
    // Column names 
    $fields = array('Họ tên', 'Giới tính', 'SĐT', 'Email', 'CMND', 'Quận/huyện', 'Tỉnh/thành phố', 'Câu hỏi 1','Câu hỏi 2','Khai báo gần nhất'); 
    
    // Display column names as first row 
    $excelData = implode("\t", array_values($fields)) . "\n"; 
    
    // Fetch records from database 
    $sql = "SELECT * FROM kbyt,(SELECT username, MAX(id) as maxid 
            FROM kbyt GROUP BY(username)) AS A 
                WHERE kbyt.id = A.maxid";
    $query = mysqli_query($connect,$sql);

    if($query->num_rows > 0){ 
        // Output each row of the data 
        while($row = mysqli_fetch_assoc($query)){ 
            // $status = ($row['status'] == 1)?'Active':'Inactive'; 
            $lineData = array($row['name'], $row['sex'], $row['phone'], $row['email'], $row['CMND'], $row['district'], $row['city'], $row['question1'], $row['question2'], $row['createdDate']); 
            array_walk($lineData, 'filterData'); 
            $excelData .= implode("\t", array_values($lineData)) . "\n"; 
        } 
    }else{ 
        $excelData .= 'No records found...'. "\n"; 
    } 
    
    // Headers for download 
    header("Content-Type: application/vnd-ms-excel"); 
    header("Content-Disposition: attachment; filename=\"$fileName\"");
    header("Cache-Control: must-revalidate");
    header("Pragma: no-cache"); 
    header("Expires: 0");
    // Render excel data 
    echo $excelData; 
    
    exit;
?>