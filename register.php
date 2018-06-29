<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="jquery.3.3.1.min.js"></script>
      <script src="bootstrap.min.js"></script>
      <link href="bootstrap.min.css"  rel="stylesheet"/>
      <style media="screen">
        .panel-heading{
          background-color:#f5f5f5;
          color: #333;
          border-color: #ddd;
          border-width: 1px;
        }
        .reg_head
        {
          font-size: x-large;
          padding: 15px;
          font-family: serif;
        }
      </style>
  </head>
  <body>

<div class="reg_head">
  Student Registration
</div><hr>

    <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
    <div class="panel-heading">
      <h4 class="panel-title">
        Basic Information
      </h4>
    </div>
    </a>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>



  <div class="panel panel-default">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
    <div class="panel-heading">
      <h4 class="panel-title">
        Academic details
      </h4>
    </div></a>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>



  <div class="panel panel-default">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
    <div class="panel-heading">
      <h4 class="panel-title">

        Other details

      </h4>
    </div></a>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>
</div>
  </body>
</html>
