<!-- <html>
<head>
<title>Upload Form</title>
</head>
<body> -->
<div class="main-content">
  <section class="section">
    <div class="section-header section-header-custom">
      <h1>Image Upload</h1>
    </div>

    <h3>Your image was successfully uploaded!</h3>

    <ul>
      <?php foreach ($upload_data as $item => $value):?>
        <li><?php echo $item;?>: <?php echo $value;?></li>
      <?php endforeach; ?>
    </ul>

  </section>
</div>

<!-- <p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

</body>
</html> -->
