<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
$errors=[];
$old_data=[];
if(empty($_REQUEST['firstName'] )){
    $errors['firstName']="First Name is required";
}else{
    $old_data['firstName']=$_REQUEST['firstName'];
}
if(empty($_REQUEST['lastName'] )){
    $errors['lastName']="Last Name is required";
}else{
    $old_data['lastName']=$_REQUEST['lastName'];
}
if(empty($_REQUEST['username'] )){
    $errors['username']="User Name is required";
}else{
    $old_data['username']=$_REQUEST['username'];
}
if(empty($_REQUEST['gender'] )){
    $errors['gender']="Gender is required";
}else{
    $old_data['gender']=$_REQUEST['gender'];
}
if ($errors){
    $errors=json_encode($errors);
    $url="Location: registerform.php?errors={$errors}";
  
if($old_data){
    $old_data=json_encode($old_data);
    $url.="&old_data={$old_data}";
}
    header($url);
}else{
    $old_id=file_get_contents('ids.txt');
    $old_id=(int)$old_id;
    $id=$old_id+1;
    file_put_contents('ids.txt',$id);
    $data="{$id}:{$_REQUEST['firstName']}:{$_REQUEST['lastName']}:{$_REQUEST['username']}:{$_REQUEST['password']}\n";
    $customerfile=fopen('customer.txt','a');
    fwrite($customerfile,"{$data}");
    fclose($customerfile);
    header("Location: customertable.php")
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Thank You!</h2>
            <p class="text-center">
                Thanks
                <?php if ($_REQUEST["gender"] === "male") {
                    echo "Mr. ";
                } else {
                    echo "Ms. ";
                } 
                echo $_REQUEST['firstName'].' '.$_REQUEST['lastName'] ."<br>"?>
            </p>
            <p class="text-center">Please review your information below:</p>
            <div class="border p-3">
                <div class="mb-2">
                    <strong>Name:</strong> <?php echo $_REQUEST["username"] ?>
                </div>
                <!-- <div class="mb-2">
                    <strong>Address:</strong> <?php echo $_REQUEST["address"] ?>
                </div>
                <div class="mb-2">
                    <strong>Skills:</strong>
                    <?php
                    if($_REQUEST['skills']){
                         foreach($_REQUEST['skills'] as $skill){
                             echo "<span class='badge bg-success me-1'>$skill</span> ";
                    }}else{
                        echo "no skills yet";
                    } ?>
                </div>
                <div class="mb-2">
                    <strong>Department:</strong> <?php echo $_REQUEST["department"] ?>
                </div> -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php } ?>
