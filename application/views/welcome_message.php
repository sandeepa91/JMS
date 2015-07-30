<?php $this->load->view('partial/header');
?>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">&nbsp;</div>
            <div class="col-lg-4 well">
                <form role="form" method="POST" action="<?php echo base_url(); ?>index.php/login">
                    <div class="form-group" >
                        <label>Username : </label>
                        <input class="form-control" type="text" name="uname" />
                    </div>
                    <div class="form-group" >
                        <label>Password : </label>
                        <input class="form-control" type="password" name="pass" />
                    </div>
                    <div class="form-group" >
                        <input class="form-control" type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>