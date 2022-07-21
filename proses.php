<?php
	$Username    = $_POST['Username'];
	$Alamat	     = $_POST['Alamat'];
	$NoHandphone = $_POST["NoHandphone"];
	$Jenis       = $_POST['Jenis'];
	$tanggal_awal = $_POST['tanggal_awal'];
	$tanggal_akhir= $_POST['tanggal_akhir'];

	echo "<head><title>orderan</head></title>";
	$fp = fopen("orderan.txt", "a+" );
	fputs($fp, "$Username|$Alamat|$NoHandphone|$Jenis|$tanggal_awal|$tanggal_akhir\n");
	fclose($fp);
?>
\<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<script lang="javaScript">
        function inputComment(){
            var komen = (document.fform.comment.value);
            alert("Comment Telah Berhasil!!!");
            document.fform.ocomment.value = komen;
        }
    </script>
		<p>Terimakasih Sudah Mengisi Format Registrasi</p>
		<p><a href=index.html> Kembali Ke Home </a></p>
		<p>Comments : </p>
                    <form name="fform">
                        <textarea name="ocomment" cols="100" rows="2" style="background-color:rgba(50, 50, 50, 0.2);"></textarea>
                        <br><br>
                        <textarea name="comment" class="comment" cols="100" rows="5" placeholder="Type your comment here..."></textarea>
                        <br>
                        <input type="button" value="Submit" style="height: 30px; width: 80px;" onclick="inputComment()">
                        <button style="height: 30px; width: 80px;">Cancel</button>
                    </form>
</body>
</html>