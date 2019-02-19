<?php 

include('connection.php');

$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
// deklarasi variabel formguru
$errors = array(); 
// REGISTER GURU
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $namaguru = $_POST['namaguru'];
  $alamatguru = $_POST['alamatguru'];
  $kelurahanguru = $_POST['kelurahanguru'];
  $kecamatanguru = $_POST['kecamatanguru'];
  $kabkotaguru = $_POST['kabkotaguru'];
  $provinsiguru = $_POST['provinsiguru'];
  $alamatskrg = $_POST['alamatskrg'];
  $kelurahanskrg = $_POST['kelurahanskrg'];
  $kecamatanskrg = $_POST['kecamatanskrg'];
  $kabkotaskrg = $_POST['kabkotaskrg'];
  $provinsiskrg = $_POST['provinsiskrg'];
  $nohpguru = $_POST['nohpguru'];
  $emailguru = $_POST['emailguru'];
  $pendidikanguru = $_POST['pendidikanguru'];
  $angkapengalaman = $_POST['angkapengalaman'];
  $pengalaman = $_POST['pengalaman'];
  $jenjang = $_POST['jenjang'];
  $bidangstudi = $_POST['bidangstudi'];
  $selfmail = 'chandrasyahputra14@gmail.com';
  
  // Check whether submitted data is not empty
if(!empty($emailguru) && !empty($namaguru)){
        
  // Validate email
  if(filter_var($emailguru, FILTER_VALIDATE_EMAIL) === false){
    $statusMsg = 'Please enter your valid email.';
  }else{
    $uploadStatus = 1;
      
    // Upload attachment file
    if(!empty($_FILES["fotoktp"]["name"])){
          
        // File path config
        $targetDir = "uploads/";
        $fileName = basename($_FILES["fotoktp"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
          
        // Allow certain file formats
        $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
        if(in_array($fileType, $allowTypes)){
            // Upload file to the server
            if(move_uploaded_file($_FILES["fotoktp"]["tmp_name"], $targetFilePath)){
                $uploadedFile = $targetFilePath;
            }else{
                $uploadStatus = 0;
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
            $uploadStatus = 0;
            $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
        }
    }
    
    if($uploadStatus == 1){
          
        // Recipient
        $toEmail = $selfmail;
         // Sender
        $from = $emailguru;
        $fromName = 'CodexWorld';
        
        // Subject
        $emailSubject = 'Contact Request Submitted by '.$namaguru;
        
        // Message 
        $htmlContent =
        '<h2>Contact Request Submitted</h2>
            <p><b>Nama:</b> '.$namaguru.'</p>
            <p><b>Nomor HP:</b> '.$nohpguru.'</p>
            <p><b>Email:</b> '.$namaguru.'</p>
            <p><b>Alamat:</b> '.$alamatguru.'</p>
            <p><b>Pendidikan:</b> '.$pendidikanguru.'</p>
            <p><b>Kelurahan:</b> '.$kelurahanguru.'</p>
            <p><b>Kecamatan:</b> '.$kecamatanguru.'</p>
            <p><b>Kabupaten:</b> '.$kabkotaguru.'</p>
            <p><b>Provinsi:</b> '.$provinsiguru.'</p>
            <p><b>Kelurahan Sekarang:</b> '.$kelurahanskrg.'</p>
            <p><b>Kecamatan Sekarang:</b> '.$kecamatanskrg.'</p>
            <p><b>Kabupaten Sekarang:</b> '.$kabkotaskrg.'</p>
            <p><b>Provinsi Sekarang:</b> '.$provinsiskrg.'</p>
            <p><b>Pengalaman:</b> '.$angkapengalaman.' '.$pengalaman.'</p>
            <p><b>Jenjang Sekolah Yang Diajar:</b>';
            foreach($_POST['jenjang'] as $selected){
                $bisalurus = $lurusin[] = $selected;
                $htmlContent .= '<p>'.$bisalurus.'</p>';
            }
                $htmlContent .= '<p><b>Bidang Studi Yang Diajar:</b>';
            foreach($_POST['bidangstudi'] as $choosen){
                $htmlContent .= '<p>'.$choosen.'</p>';
            }
        // Header for sender info
        $headers = "From: $fromName"." <".$from.">";
        if(!empty($uploadedFile) && file_exists($uploadedFile)){
            
            // Boundary 
            $semi_rand = md5(time()); 
            $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
            
            // Headers for attachment 
            $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
            
            // Multipart boundary 
            $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
            
            // Preparing attachment
            if(is_file($uploadedFile)){
                $message .= "--{$mime_boundary}\n";
                $fp =    @fopen($uploadedFile,"rb");
                $data =  @fread($fp,filesize($uploadedFile));
                @fclose($fp);
                $data = chunk_split(base64_encode($data));
                $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" . 
                "Content-Description: ".basename($uploadedFile)."\n" .
                "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            }
            
            $message .= "--{$mime_boundary}--";
            $returnpath = "-f" . $selfmail;
            
            // Send email
            $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
            
            // Delete attachment file from the server
            @unlink($uploadedFile);
        }else{
            // Set content-type header for sending HTML email
            $headers .= "\r\n". "MIME-Version: 1.0";
            $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
            
            // Send email
            $mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 
        }
          
        // If mail sent
        if($mail){
            $statusMsg = 'Your contact request has been submitted successfully !';
            $msgClass = 'succdiv';
            
            $postData = '';
        }else{
            $statusMsg = 'Your contact request submission failed, please try again.';
        }
    }
}
}else{
  $statusMsg = 'Please fill all the fields.';
}

$name = $_FILES['fotoktp']['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fotoktp"]["name"]);

// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType,$extensions_arr) ){
    
    // Convert to base64 

    $image = $imageFileType.';base64,';

    // Upload file
    move_uploaded_file($_FILES['fotoktp']['tmp_name'],'upload/'.$name);

}
$checkbox1 = implode(',', $_POST['jenjang']);
$checkbox2 = implode(',', $_POST['bidangstudi']);

$check = mysqli_num_rows(mysqli_query($db, "SELECT emailguru FROM formguru WHERE emailguru='$emailguru'"));
if ($check > 0) {

?>
   <script language="JavaScript">
    alert('Email telah digunakan, harap gunakan alamat email yang lain');
    document.location='formguru.php?email=""';
    </script>
<?php
  }
  else {
    $query = mysqli_query($db,"INSERT INTO formguru (namaguru, alamatguru, kelurahanguru, kecamatanguru, 
      kabkotaguru, provinsiguru, alamatskrg, kelurahanskrg, kecamatanskrg, kabkotaskrg, provinsiskrg, 
      nohpguru, emailguru, pendidikanguru, angkapengalaman, pengalaman, jenjang, bidangstudi, fotoktp) 
          VALUES('$namaguru', '$alamatguru', '$kelurahanguru', '$kecamatanguru', '$kabkotaguru', 
          '$provinsiguru', '$alamatskrg', '$kelurahanskrg', '$kecamatanskrg', '$kabkotaskrg', 
          '$provinsiskrg', '$nohpguru', '$emailguru', '$pendidikanguru', '$angkapengalaman', '$pengalaman', '$checkbox1', 
          '$checkbox2','$image')");
  }
  if($query) {
    ?>
    <script language="JavaScript">
    alert('Terima kasih telah mempercayakan kalampena sebagai pusat belajar. Untuk info lebih lanjut hubungi WA: +62812-9366-4939');
    document.location='index.php';
    </script>
<?php
  }
  else ?> 
  {
    <script language="JavaScript">
      alert('Data yang anda masukkan salah silahkan ulangi kembali');
      document.location='formguru.php';
    </script>
<?php

  }
mysqli_close($db);
?>


