<?php 
function waktu(){
echo "
<script type='text/javascript' language='javascript'>
function jam(){
var waktu = new Date();
var jam = waktu.getHours();
var menit = waktu.getMinutes();
var detik = waktu.getSeconds();

if (jam < 10){
jam = '0' + jam;
}
if (menit < 10){
menit = '0' + menit;
}
if (detik < 10){
detik = '0' + detik;
}
var jam_div = document.getElementById('jam');
jam_div.innerHTML = jam + ':' + menit + ':' + detik;
setTimeout('jam()', 1000);
}
jam();

</script>
";
};
?>