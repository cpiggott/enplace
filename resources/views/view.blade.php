<html>
  <head>
    <title>Text</title>
    <meta name="description" content="Enplace - CMS for A-Frame">
    <script src="https://aframe.io/releases/0.5.0/aframe.min.js"></script>
  </head>
  <body>
      <a-scene>

      @if(count($scene->entities) == 0)
      <a-entity position="0 0 -1.5"
      geometry='primitive: plane; width: 0.95; height: 0.95;'
      material='color: white'
                text="width: 0.8; align: center; wordCount: 25; anchor: center; color: #484848; value: This is an element, in your VR scene! Use Add Element in the left sidebar to create with your own content. Show what you make to anyone with the Share URL.">
      </a-entity>
      @endif

      @foreach($scene->entities as $entity)
      <!-- Anchors. -->
          <a-entity position="{{ $entity->position }}"
              geometry='primitive: plane; width: 0.95; height: 0.95;'
              material='color: white'
                    text="width: 0.8; align: center; wordCount: 25; anchor: center; color: #484848; value: {{ $entity->value }}">
          </a-entity>
      @endforeach

      <a-sky color="#333"></a-sky>
      <a-entity position="0 0 0">
        <a-entity camera look-controls wasd-controls></a-entity>
      </a-entity>
    </a-scene>
  </body>
</html>
