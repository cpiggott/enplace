<html>
  <head>
    <title>Text</title>
    <meta name="description" content="Enplace - CMS for A-Frame">
    <script src="https://aframe.io/releases/0.5.0/aframe.min.js"></script>
  </head>
  <body>
      <a-scene>

      @if(count($scene->entities) == 0)
      <a-entity position="0 0 -1"
                text="anchor: center; color: white; value: Add an element in the side panel. You can set the position and what it says. This is a 3D area, so feel free to move around with around with the arrow keys and drag with your mouse.">
      </a-entity>
      @endif

      @foreach($scene->entities as $entity)
      <!-- Anchors. -->
          <a-entity position="{{ $entity->position }}"
                    text="anchor: center; color: white; value: {{ $entity->value }}">
          </a-entity>
      @endforeach

      <a-sky color="#333"></a-sky>
      <a-entity position="0 0 0">
        <a-entity camera look-controls wasd-controls></a-entity>
      </a-entity>
    </a-scene>
  </body>
</html>
