<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="https://xyzdsa.000webhostapp.com/assets/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex " id="wrapper">
   
    <!-- Sidebar -->
    <div class="shadow shadow-expand-lg " id="sidebar-wrapper">
    <div class="sidebar"><svg height="130" width="200">
      <defs>
        <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
          <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
        </linearGradient>
      </defs>
      <ellipse cx="100" cy="70" rx="85" ry="55" fill="#192a56" />
      <text fill="#ffffff" font-size="20" font-family="Verdana" x="35" y="85">S.A Collection</text>
    </svg></div>
      <div class="list-group list-group-flush">
        <a href="dashboard.php" class="list-group-item list-group-item-action ">Dashboard</a>
        <a href="tables.php" class="list-group-item list-group-item-action ">Database</a>
        <a href="upload.html" class="list-group-item list-group-item-action ">Uploading</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light ">
        
    

        <button class="btn " type="button" id="menu-toggle">
          <span ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22" style="color: aliceblue;"></path></svg></span>
        </button>
        <div class="row">
          <div class="col-lg col-sm-4 col-md rounded dashboard">Dashboard</div>
        </div>
      
      </nav>

    <div class="d-flex justify-content-center shadow-expand-lg shadow bg-white py-3" id="error"><?= $fail ?></div>
    <div class="row my-4 mx-5">
     
    
    <div class="col-lg-5 col-sm-12 col-md-12 shadow shadow-expand-lg rounded my-5 mx-2 kurti-section">
        <form action="<?= base_url().'/products/Admin'?>" method="post" enctype="multipart/form-data">
      <div class="row">
      <div class="col kurti-head bg-primary">Trouser Uploading</div></div>
      
      <div class="col my-4"><div class="form-group">
          
        <input type="text" class="form-control" placeholder="Product title" name="title"></div></div>

        <div class="col"><div class="form-group">
          <input type="text" class="form-control" placeholder="Description" name="description"></div></div>

          <div class="col"><div class="form-group">
            <input type="num" class="form-control" placeholder="Amount" name="amount"></div></div>

            <div class="col py-3">
            <input type="file" name="upload-file"></div>

            <div class="col-8 py-3"><button type="submit" class="btn btn-dark" name="submit">Post</button></div>
            <div class="col py-3"><?= $status ?></div>
            </form>
    </div>



    <div class="col-lg-5 col-sm-12 col-md-12 shadow shadow-expand-lg rounded my-5 mx-2 trouser-section">
      <div class="row">
      <div class="col-sm-12 kurti-head bg-primary">Kurti Uploading</div></div>

      <div class="col my-4"><div class="form-group">
        <input type="text" class="form-control" placeholder="Product title"></div></div>

        <div class="col"><div class="form-group">
          <input type="text" class="form-control" placeholder="Description"></div></div>

          <div class="col"><div class="form-group">
            <input type="text" class="form-control" placeholder="Description"></div></div>

            <div class="col-10 py-3 ">
            <input type="file" enctype="multipart/form-data" id="upload"></div>

            <div class="col py-3"><button type="submit" class="btn btn-dark">Post</button></div>
    </div>


    </div>

    



<div class="row">
<div class="col-xl-10 col-lg-10 col-sm-10 shadow col-md-10 shadow-expand-lg rounded my-1 mx-5">
  <div class="col-12 bg-primary kurti-head">Tise Uploading</div>
  <div class="row my-2">
    <div class="col-12">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Product title"></div>
    </div>  
</div>

<div class="row">
  <div class="col-12"><div class="form-group">
    <input type="text" class="form-control" placeholder="Description"></div></div>
</div>
<div class="row">
  <div class="col-12"><div class="form-group">
    <input type="text" class="form-control" placeholder="Amount"></div></div>
    <div class="col-12"><input type="file" enctype="multipar/form-data"></div>
    <div class="col-6 mt-3"><button type="submit" class="btn btn-dark">Post</button></div>
</div>
</div>
</div>




  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
  <script src="<?= base_url('assets/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
