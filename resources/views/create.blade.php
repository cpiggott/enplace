<!DOCTYPE html>
<html>
  <head>
    <title>Enplace</title>
    <meta name="description" content="Enplace - CMS for A-Frame">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <script src="https://aframe.io/releases/0.5.0/aframe.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <style>
      html, body {
        height: 100%;
      }
      body {
        font-family: Roboto;
        color: #484848;
      }
      .input-field {
        margin-top: 5px;
      }
      .create-header {
        padding: 10px 15px;
        font-size: 24px;
        border-bottom: 1px solid #cdcdcd;
        margin-left: -0.75rem;
        margin-right: -0.75rem;
      }
      .enplace-title {
        font-weight: 300;
        text-transform: uppercase;
      }
      .create-container {
        height: 100%;
      }
      .create-container .row {
        margin-bottom: 5px;
      }
      .create-container.row {
        margin-bottom: 0px;
      }
      .create-container .create-title {
        padding-bottom: 30px;
        border-bottom: 1px solid #cdcdcd;
      }
      .create-container .create-view {
        height: 100%;
        background-color: #333333;
      }
      .create-title-btn, .create-add-btn {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>


    <div class="row create-container">
      <div class="col s12 m3">
        <div class="row create-header">
          <div class="enplace-title">Enplace</div>
        </div>
        <div class="row create-title">
          <div class="input-field col s10 offset-s1">
            <input id="title" type="text" name="scene_id" class="validate">
          <label for="title">Title</label>
          </div>
          <div class="col s12 create-title-btn">
            <button class="btn waves-effect waves-light" type="submit" name="create">Save</button>
          </div>
        </div>
        <div class="row create-add">
          <div class="input-field col s10 offset-s1">
            <textarea id="content" name="value" class="materialize-textarea"></textarea>
            <label for="contect">Content</label>
          </div>
          <div class="col s12 create-add-btn">
            <button class="btn waves-effect waves-light" type="submit" name="create">Add
              <i class="material-icons right">done</i>
            </button>
          </div>
        </div>
      </div>
      <div class="col s12 m9 create-view">
      <a-scene embedded>
      <a-assets>
        <a-mixin
          id="marker"
          geometry="primitive: plane; width: 0.02; height: 0.02"
          material="color: red"
        ></a-mixin>
      </a-assets>



      <!-- Anchors. -->
      <a-entity position="0 0 0"
                text="anchor: center; width: 1.5; color: white; value: [LEFT ANCHOR] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam">
      </a-entity>



      <a-sky color="#333"></a-sky>
      <a-entity position="0 0 2">
        <a-entity camera look-controls wasd-controls></a-entity>
      </a-entity>
    </a-scene>

      </div>
    </div>

  </body>
</html>
