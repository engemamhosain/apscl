  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
    <script src='https://meet.jit.si/external_api.js'></script>

      <title>Home - Admin</title>
  <?php include 'includes/include_css.php';?>
</head>
<body class="has-fixed-sidenav">
  <header>
    <div class="navbar-fixed">
      <?php include 'includes/top-nav.php';?>
    </div>
    <ul id="sidenav-left" class="sidenav sidenav-fixed">
      <?php include 'includes/side-nav.php';?>
    </ul>
    <?php include 'includes/top-dropdown.php';?>
  </header>


 <div id="meet"></div>
  <script type="text/javascript">
        
            const domain = 'meet.jist.si';
            const options = {
                roomName: 'apsclapp',
                width: 700,
                height: 700,
                    parentNode: document.querySelector('#meet')
            };
            const api = new JitsiMeetExternalAPI(domain, options);
    </script>


  <?php include 'includes/footer-new.php';?>



