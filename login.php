<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Meditory</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/ico" href="favicon.ico" />
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />

    <script
      type="text/javascript"
      src="js/plugins/jquery/jquery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="js/plugins/jquery/jquery-ui.min.js"
    ></script>
    <script
      type="text/javascript"
      src="js/plugins/jquery/jquery-migrate.min.js"
    ></script>
    <script
      type="text/javascript"
      src="js/plugins/jquery/globalize.js"
    ></script>
    <script
      type="text/javascript"
      src="js/plugins/bootstrap/bootstrap.min.js"
    ></script>

    <script
      type="text/javascript"
      src="js/plugins/uniform/jquery.uniform.min.js"
    ></script>

    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
    <script type="text/javascript" src="js/settings.js"></script>
  </head>
  <body class="bg-img-num1">
    <div class="container">
      <div class="login-block">
        <div class="block block-transparent">
          <div class="head">
            <!--<div class="user">-->
            <!--  <div class="info">-->
            <!--    <img-->
            <!--      src="img/example/user/dmitry_b.jpg"-->
            <!--      class="img-circle img-thumbnail"-->
            <!--    />-->
            <!--    <div class="user-change-button">-->
            <!--      <span class="icon-off"></span>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
          </div>
          <div class="content controls npt">
             <form method="post"  id="signform">
            <div class="form-row">
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-addon">
                    <span class="icon-user"></span>
                  </div>
                  <input
                  name="email"
                  id="email"
                    type="email"
                    class="form-control"
                    placeholder="Email"
                  />
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-addon">
                    <span class="icon-key"></span>
                  </div>
                  <input
                  name="password"
                  id="password"
                    type="password"
                    class="form-control"
                    placeholder="Password"
                  />
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <a href="#" class="btn btn-default btn-block btn-clean"
                  >Register</a
                >
              </div>
              <div class="col-md-6">
                 <input type="submit" value="login" class="btn btn-default btn-block btn-clean">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12">
                <a href="#" class="btn btn-link btn-block"
                  >Forgot your password?</a
                >
              </div>
            </div>
            </form>

          </div>
        </div>
      </div>
    </div>
    <script src="data.js"></script>
  </body>
</html>
