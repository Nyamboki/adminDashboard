<?php
$server= "localhost";
$username="root";
$password="";
$database="web2";

$conn= mysqli_connect($server, $username,$password,$database);

$sqlQuery=mysqli_Query($conn, "SELECT * FROM enrollment");
//$fetchRecords= mysqli_fetch_array($sqlQuery);


while ($fetchRecords=mysqli_fetch_array($sqlQuery)) {
    echo $fetchRecords["fullname"].''.$fetchRecords["phonenumber"].''. $fetchRecords["emailaddress"].''.$fetchRecords["gender"].''.$fetchRecords["course"].'<br>';
    # code...
}

?>
<tr>
                                <td>1.</td>
                                <td>Daniel Lewis</td>
                                <td>+25441185868</td>
                                <td>nyambokilewis4@gmail.com</td>
                                <td>Male</td>
                                <td>Web Development</td>
                                <td>23rd August 2022</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-info btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>