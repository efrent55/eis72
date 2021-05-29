<!DOCTYPE html>
<html>
<head>
<title>Laravel 5.8 Generate QR Code Tutorial with Example - W3Adda</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>HTG Equipment Information System</h2>
<br>
<br>
    <div class="row">
        
 <div class="col-md-4">
     <h5>Equipment Qr Code --> <?php echo e($content); ?> </h5>
    
    <?php echo QrCode::size(200)->generate( $content);; ?>


 </div>

 


 </div>
 
</div>
 
</body>
 
</html><?php /**PATH C:\xampp\htdocs\EIS72\resources\views/admin/QrCodeViewer.blade.php ENDPATH**/ ?>