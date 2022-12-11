<!DOCTYPE html>
    <html lang="vi">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="author" content="Nạp thẻ Free Fire">

    <link rel="icon" type="image/png" href="images/favicon.ico">

    <title>Free Fire - Trung tâm nạp thẻ Garena</title>
    
    <meta name="description" content="Trang nạp kim cương Free Fire là đối tác chính thức của nhà phát hành Garena" />
    <meta name="keywords" content="nạp free fire, nạp thẻ free fire, nạp kim cương free fire, nạp game free fire, nạp tiền vào free fire, nạp kim cương free fire miễn phí, nạp free fire vn, nạp free fire x5 kim cương, nạp kim cương free fire giá rẻ, shop nạp kim cương free fire, nạp kim cương free fire x10, nạp kim cương free fire 20k, nạp kim cương free fire 10k, shop nạp kim cương free fire uy tín, nạp kim cương free fire giá rẻ 10k, nạp kim cương free fire giá rẻ, nạp kim cương free fire bằng thẻ viettel, nạp kim cương vào game free fire, ... thì napgameauto.com chính là lựa chọn của bạn.">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/napthe1.css">
    <link href="css/style.css" rel="stylesheet">


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom1.js"></script>

</head>
<?php
include "pages/header.php";
?>

<section>
<div class="container">

<?php
include "pages/banner.php";
?>

<div class="main-section__title"><div class="main-section__title-txt main-section__title-channel"><img src="https://cdngarenanow-a.akamaihd.net/gop/app/0000/100/067/icon.png" style="width:25px;height:25px;"> &nbsp; Free Fire</div></div>

<div class="alert alert-info">Nhận ngay <b><font color="red">SCAR Cá mập đen</font></b> khi nạp thẻ <b>lần đầu</b> có mệnh giá từ <span style="color:#ff0000;"><b>200.000</b>đ</span> trở lên.<br/><div style="padding:3px;"></div><span style="font-style: italic; font-size: 13px; margin-top:15px;color:#008000;">(Chú ý: Mỗi IP chỉ được hưởng ưu đãi một lần. Hệ thống nhận thấy địa chỉ IP của bạn chưa từng nạp thẻ)</span></div>

<div class="row">
<div class="col-md-6">
<div class="form-thanh-toan">

<form action="" method="POST"> 

<div>
<label for="mathe">UID tài khoản Free Fire</label>
<input type="text" class="form-control" value="" name="account" placeholder="Nhập UID tài khoản cần nạp">
</div>


<div>
<label>Loại thẻ:</label>
<br/>
<input type="hidden" name="loaithe" value="">
<img class="loai-the" src="images/viettel.png" title="Nạp thẻ Free Fire bằng thẻ Viettel" alt="VIETTEL" value="Viettel">          
<img class="loai-the" src="images/mobifone.png" title="Nạp thẻ Free Fire bằng thẻ Mobifone" alt="MOBIFONE" value="MobiFone">         
<img class="loai-the" src="images/vinaphone.png" title="Nạp thẻ Free Fire bằng thẻ Vinaphone" alt="VINAPHONE" value="VinaPhone">
<img class="loai-the" src="images/vietnamobile.png" title="Nạp thẻ Free Fire bằng thẻ Garena" alt="VNMOBI" value="Vietnamobile">
<img class="loai-the" src="images/gate.png" title="Nạp thẻ Free Fire bằng thẻ GATE" alt="GATE" value="Gate">
</div>

<div>
<label for="menhgia">Mệnh giá thẻ:</label> <span style="font-style: italic; font-size: 13px; margin-top:15px;color:red;">(Chú ý: nếu chọn sai mệnh giá sẽ bị mất thẻ)</span>
<select name="menhgia" id="menhgia" class="form-control" required="required">
<option value="0" selected="selected">- Chọn mệnh giá -</option>
<option value="50000">50.000đ</option>
<option value="100000">100.000đ</option>
<option value="200000">200.000đ</option>
<option value="500000">500.000đ</option>
<option value="1000000">1.000.000đ</option>
</select>				
</div>

<div>
<label for="mathe">Mã thẻ:</label>
<input type="text" class="form-control" name="mathe" id="mathe" placeholder="Nhập mã dưới lớp tráng bạc ...">
</div>

<div>
<label for="seri">Số seri:</label>
<input type="text" class="form-control" name="seri" id="seri" placeholder="Nhập số seri in trên thẻ ...">
</div>


<p style="font-style: italic;font-size: 13px; margin-top:15px;">* Bằng cách nhấn "NẠP THẺ" đồng nghĩa bạn đã chấp nhận điều khoản của trang web.</p>

<div class="error-msg thongbaoloi hide"></div>  <!--- Thông báo lỗi nhập thiếu -->

<?php
include "checking.php";
?>

<div style="padding-top: 8px;"><button type="submit" id="napthe" name="napthe" class="btn btn-danger btn-block" data-loading-text="<i class='fa fa-spinner fa-spin'></i> ĐANG NẠP THẺ">NẠP THẺ</button></div></form>

</div>
</div>

<div class="col-md-offset-1 col-md-5" >
<h2 class="table-title" style="padding-top: 10px;"><b>Bảng giá quy đổi Kim cương</b></h2>
<div class="alert alert-info">Ưu đãi nhận thêm <b><font color="red">200%</font></b> giá trị thẻ cào khi nạp <strong>kim cương</strong> bằng thẻ <span style="color:#ff0000;"><b>Viettel Telecom</b></span>.</div>
<table class="table table-hover" style="-webkit-box-shadow: 0 0 20px 0 rgb(0 0 0 / 10%);box-shadow: 0 0 20px 0 rgb(0 0 0 / 10%);">
<thead>
<tr>
<th class="text-danger" style="border: 1px solid #e1e1e1; text-align: center;">Mệnh giá</th>
<th class="text-danger" style="border: 1px solid #e1e1e1;  text-align: center;">Kim cương</th>
</tr>
</thead>
<tbody>
<tr>
<td style="border: 1px solid #e1e1e1; text-align: center;">10 000 VNĐ</td>
<td style="border: 1px solid #e1e1e1;  text-align: center;">Không hỗ trợ</td>
</tr>
<tr>
<td style="border: 1px solid #e1e1e1; text-align: center;">20 000 VNĐ</td>
<td style="border: 1px solid #e1e1e1;  text-align: center;">Không hỗ trợ</td>
</tr>
<tr>
<td style="border: 1px solid #e1e1e1; text-align: center;">50 000 VNĐ</td>
<td style="border: 1px solid #e1e1e1;  text-align: center;">💎 × 580 <span style="color:#008000;">(+ 1 160)</span></td>
</tr>
<tr>
<td style="border: 1px solid #e1e1e1; text-align: center;">100 000 VNĐ</td>
<td style="border: 1px solid #e1e1e1;  text-align: center;">💎 × 1 190 <span style="color:#008000;">(+ 2 380)</span></td>
</tr>
<tr>
<td style="border: 1px solid #e1e1e1; text-align: center;">200 000 VNĐ</td>
<td style="border: 1px solid #e1e1e1;  text-align: center;">💎 × 3 050 <span style="color:#008000;">(+ 7 100)</span></td>
</tr>
<tr>
<td style="border: 1px solid #e1e1e1; text-align: center;">500 000 VNĐ</td>
<td style="border: 1px solid #e1e1e1;  text-align: center;">💎  × 6 100 <span style="color:#008000;">(+ 12 200)</span></td>
</tr>
<td style="border: 1px solid #e1e1e1; text-align: center;">1 000 000 VNĐ</td>
<td style="border: 1px solid #e1e1e1;  text-align: center;">💎  × 12 200 <span style="color:#008000;">(+ 24 400)</span></td>
</tr>
</tbody>
</table>
</div>
</div>
<hr/>

<h4>Giới thiệu</h4>
    <ul>
        <li>Được phát triển bởi đội ngũ quản trị viên thuộc nhà phát hành Garena. <strong><a style="color: #C9302C;" href="https://napgarena.vn">napgarena.vn</a></strong> luôn cho khách hàng sự tin tưởng và ưu đãi nhiều nhất khi <strong>nạp thẻ Free Fire</strong> tại <strong><a style="color: #C9302C;" href="https://napgarena.vn">napgarena.vn</a></strong>.</li>
        <li>Là trang nạp thẻ được cấp phép bởi nhà phát hành nên các hành động nạp thẻ trên hệ thống của chúng tôi đảm bảo <strong>an toàn</strong> tuyệt đối cho tài khoản của khách hàng.</li>
        <li><strong>Kim cương Free Fire</strong> sẽ được chuyển ngay lập tức vào tài khoản sau khi nạp thẻ.</li>
        <li>Khách hàng có thể yên tâm sử dụng dịch vụ của chúng tôi mà không cần lo ngại về vấn đề bảo mật.</li>
    </ul>

<hr/>

<h4>Hướng dẫn nạp thẻ</h4>
<ol>
    <li>Khách hàng cần chuẩn bị thẻ cào hợp lệ được cung cấp trên hệ thống. Các thẻ cào hợp lệ như <strong>Viettel</strong>, <strong>Vinaphone</strong>, <strong>Mobifone</strong>, <strong>Vietnamobile</strong> và <strong>GATE</strong>.</li>
    <li>Khách hàng nhập đầy đủ thông tin vào bảng nạp thẻ bao gồm: UID tài khoản <strong>Free Fire</strong>, chọn loại thẻ cần nạp, chọn mệnh giá của thẻ cào, điền số seri và mã thẻ cần nạp.</li>
    <li>Sau khi điền đầy đủ thông tin, khách hàng cần kiểm tra lại kỹ thông tin của mình để tránh trường hợp nhập sai dẫn đến bị mất thẻ.</li>
    <li>Khi đã kiểm tra thông tin điền vào bảng là chính xác. Khách hàng bấm vào nút <strong>"NẠP THẺ"</strong>.</li>
    <li>Sau khi bấm nút <strong>"NẠP THẺ"</strong> quý khách hàng vui lòng đợi hệ thống kiểm tra. Hệ thống kiểm tra hoàn tất quý khách hàng vui lòng đăng nhập vào game để nhận Kim cương và phần thưởng.</li>
</ol>

<?php
include "pages/footer.php";
?>

<script>
function getRecaptcha() {

}
</script>

</body>
</html>