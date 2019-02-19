<?php
include('connection.php');

// REGISTER USER
if (isset($_POST['daftar'])) {
  // receive all input values from the form
  $nama = $_POST['nama'];
  $nm_ortu = $_POST['nm_ortu'];
  $kerja = $_POST['kerja'];
  $pend_bpk = $_POST['pend_bpk'];
  $pend_ibu = $_POST['pend_ibu'];
  $alamat = $_POST['alamat'];
  $kelurahan = $_POST['kelurahan'];
  $kecamatan = $_POST['kecamatan'];
  $kab = $_POST['kab'];
  $kodepos = $_POST['kodepos'];
  $nohp = $_POST['nohp'];
  $email = $_POST['email'];
  $pendidikan = $_POST['pendidikan'];
  $nm_sekolah = $_POST['nm_sekolah'];
  $harapan = $_POST['harapan'];
  $selfmail = 'chandrasyahputra14@gmail.com';

  if(!empty($email) && !empty($nama)){
        
    // Validate email
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
      $statusMsg = 'Please enter your valid email.';
    }else{
      $uploadStatus = 1;
        
      // Upload attachment file
      if(!empty($_FILES[""]["name"])){
            
          // File path config
          $targetDir = "uploads/";
          $fileName = basename($_FILES[""]["name"]);
          $targetFilePath = $targetDir . $fileName;
          $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            
          // Allow certain file formats
          $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
          if(in_array($fileType, $allowTypes)){
              // Upload file to the server
              if(move_uploaded_file($_FILES[""]["tmp_name"], $targetFilePath)){
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
          $from = $email;
          $fromName = 'CodexWorld';
          
          // Subject
          $emailSubject = 'Contact Request Submitted by '.$nama;
          
          // Message 
          $htmlContent =
            '<h2>Contact Request Submitted</h2>
          <p><b>Nama Siswa:</b> '.$nama.'</p>
          <p><b>Nama Orang Tua:</b> '.$nm_ortu.'</p>
          <p><b>Pekerjaan Orangtau:</b> '.$kerja.'</p>
          <p><b>Pendidikan Bapak:</b> '.$pend_bpk.'</p>
          <p><b>Pendidikan Ibu:</b> '.$pend_ibu.'</p>
          <p><b>Alamat Rumah:</b> '.$alamat.'</p>
          <p><b>Kelurahan:</b> '.$kelurahan.'</p>
          <p><b>Kecamatan:</b> '.$kecamatan.'</p>
          <p><b>Kabupaten/Kota:</b> '.$kab.'</p>
          <p><b>Kode Pos:</b> '.$kodepos.'</p>
          <p><b>No. HP:</b> '.$nohp.'</p>
          <p><b>Email:</b> '.$email.'</p>
          <p><b>Tingkat Satuan Pendidikan:</b> '.$pendidikan.'</p>
          <p><b>Nama Sekolah:</b> '.$nm_sekolah.'</p>
          <p><b>Harapan Orang Tua:</b> '.$harapan.'</p>';
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
  
  $cek=mysqli_num_rows (mysqli_query($db, "SELECT email FROM formsiswa WHERE email='$email'"));
  if ($cek > 0) {
?>
    <script language="JavaScript">
    alert('Email telah digunakan, harap gunakan alamat email yang lain');
    </script>
    <?php
  }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $query = mysqli_query($db,"INSERT INTO formsiswa (nama, nm_ortu, kerja, pend_bpk, pend_ibu, alamat, kelurahan, kecamatan, kab, kodepos, nohp, email, pendidikan, nm_sekolah, harapan) VALUES('$nama', '$nm_ortu', '$kerja', '$pend_bpk', '$pend_ibu', '$alamat', '$kelurahan', '$kecamatan', '$kab', '$kodepos', '$nohp', '$email', '$pendidikan', '$nm_sekolah', '$harapan')");

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
      document.location='formsiswa.php';
    </script>
<?php
}
mysqli_close($db);
?>
