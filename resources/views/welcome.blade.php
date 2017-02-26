<!DOCTYPE html>
<html>
  <head>
    <title>Enplace</title>
    <meta name="description" content="Enplace - CMS for A-Frame">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <style>
      html, body {
        height: 100%;
      }
      body {
        font-family: Roboto;
        color: #484848;
      }
      .home-title {
        position: absolute;
        top: 0px;
        left: 25px;
        font-weight: 300;
        text-transform: uppercase;
      }
      .home-top {
        height: 100%;
        margin-bottom: 0px;
      }
      .home-top-right {
        height: 100%;
        background-color: #333333;
      }
      .home-top-left {
        font-weight: 100;
      }
      .home-top-left .home-top-left-copy {
        color: #acacac;
        font-size: 32px;
        text-align: center;
        margin-bottom: 120px;
      }
      .home-top-left input[type=email] {
        font-size: 1.3rem;
        height: 2.7rem;
      }
      .home-top-left .input-field label:not(.label-icon).active {
        font-size: 1rem;
      }
      .home-top-left .input-field label {
        font-size: 1.3rem;
      }
      .home-top-left .home-top-left-create-btn {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

    <h3 class="home-title">Enplace</h3>
    <div class="row home-top valign-wrapper">
      <div class="col s12 m6 home-top-left">
        <div class="row valign">
          <div class="col s10 offset-s1 m8 offset-m2 home-top-left-copy">
            Create a VR scene in seconds, with your content.
          </div>
          <form action="{{ url('scene') }}" method="POST" >
              <div class="input-field col s10 offset-s1 m6 offset-m3">
                <input id="email" type="email" name="email" class="validate">
                <label for="email" data-error="invalid" data-success="ok">Email</label>
              </div>
              <div class="col s12 home-top-left-create-btn">
                <button class="btn waves-effect waves-light" type="submit" name="create">Create
                  <i class="material-icons right">input</i>
                </button>
              </div>
          </form>

        </div>
      </div>
      <div class="col s12 m6 home-top-right">

      </div>
    </div>

  </body>
</html>
