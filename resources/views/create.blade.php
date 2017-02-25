<!DOCTYPE html>
<html>
  <head>
    <title>Enplace - Create</title>
    <meta name="description" content="Enplace - CMS for A-Frame">

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
      .create-header {
        padding: 10px 15px;
        font-size: 24px;
        border-bottom: 1px solid #e0e0e0;
        box-shadow: #cdcdcd 0px 0px 7px;
        margin-left: -0.75rem;
        margin-right: -0.75rem;
        text-align: center;
        background-color: #f0f0f0;
      }
      .enplace-title {
        font-weight: 300;
        text-transform: uppercase;
      }
      .create-container {
        height: 100%;
      }
      .create-container.row {
        margin-bottom: 0px;
      }
      .create-container .create-title {
        padding-bottom: 30px;
      }
      .create-container .create-links {
        padding-bottom: 10px;
      }
      .create-container .create-links input[type=text]:disabled+label {
        color: #9e9e9e;
      }
      .create-container .create-title, .create-container .create-links {
        border-bottom: 1px solid #cdcdcd;
      }
      .create-container .create-view {
        height: 100%;
        background-color: #333333;
        padding-left: 0!important;
        padding-right: 0!important;
      }
      .create-add .create-add-title {
        font-size: 18px;
        margin-bottom: 5px;
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

    <script>
      $(document).ready(function() {
        $('select').material_select();
      });
    </script>

    <div class="row create-container">
      <div class="col s12 m3">
        <div class="row create-header">
          <div class="enplace-title">Enplace</div>
        </div>
        <div class="row create-title">
          <div class="input-field col s12">
            <input id="title" type="text" name="scene_id">
            <label for="title">Title</label>
          </div>
          <div class="col s12 create-title-btn">
            <button class="btn waves-effect waves-light" type="submit" name="create">Save</button>
          </div>
        </div>
        <div class="row create-links">
          <div class="input-field col s12">
            <input disabled value="URL" id="disabled" type="text" class="validate">
            <label for="disabled">Share URL</label>
          </div>
          <div class="input-field col s12">
            <input disabled value="URL" id="disabled" type="text" class="validate">
            <label for="disabled">Edit URL - Keep secret, or not</label>
          </div>
        </div>
        <div class="row create-add">
          <div class="col s12 create-add-title">Add Element</div>
          <div class="input-field col s12">
            <textarea placeholder="Enter text here" id="content" name="value" class="materialize-textarea"></textarea>
            <label for="content">Content</label>
          </div>
          <!-- <div class="input-field col s12">
            <select>
              <option value="1" selected>Front</option>
              <option value="2">Left</option>
              <option value="3">Right</option>
              <option value="4">Behind</option>
            </select>
            <label>Direction</label>
          </div> -->
          <div class="input-field col s12">
            <select>
              <option value="" disabled selected>Choose</option>
              <option value="1">Top Left</option>
              <option value="2">Top Center</option>
              <option value="3">Top Right</option>
              <option value="4">Middle Left</option>
              <option value="5">Middle Center</option>
              <option value="6">Middle Right</option>
              <option value="7">Bottom Left</option>
              <option value="8">Bottom Center</option>
              <option value="9">Bottom Right</option>
            </select>
            <label>Postion</label>
          </div>
          <div class="input-field col s12">
            <select>
              <option value="1" selected>None</option>
              <option value="2">Tilt Up</option>
              <option value="3">Tilt Left</option>
              <option value="4">Tilt Right</option>
              <option value="5">Tilt Down</option>
            </select>
            <label>Rotate</label>
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
