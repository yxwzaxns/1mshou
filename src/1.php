<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title>404 Not Found</title>

<script src="js/404.js" type="text/javascript"></script>
  <style type="text/css">
      body {
          color: #666; 
          text-align: center; font-family: arial, sans-serif;
          height: 100%;
          overflow: hidden;
          background-image: -webkit-gradient(linear, 0 0%, 0 100%, from(#555555), to(#111111));
          background-image: -webkit-linear-gradient(top, #555555 0%, #111111 100%);
          background-image: -moz-linear-gradient(top, #555555 0%, #111111 100%);
          background-image: -ms-linear-gradient(top, #555555 0%, #111111 100%);
          background-image: -o-linear-gradient(top, #555555 0%, #111111 100%);
          background-image: linear-gradient(top, #555555 0%, #111111 100%);
      }

      .wrapper {
          position: absolute;
          top:50%;
          margin-top: -85px;
          left: 50%;
          margin-left: -160px;
      }

      .wrapper {
          width: 320px;

          line-height: 35px;
          -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.6), inset 1px 0px 0px rgba(255, 255, 255, 0.1), inset -1px 0px 0px rgba(255, 255, 255, 0.1), inset 0px -1px 0px rgba(255, 255, 255, 0.1);
          -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.6), inset 1px 0px 0px rgba(255, 255, 255, 0.1), inset -1px 0px 0px rgba(255, 255, 255, 0.1), inset 0px -1px 0px rgba(255, 255, 255, 0.1);
          box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.6), inset 1px 0px 0px rgba(255, 255, 255, 0.1), inset -1px 0px 0px rgba(255, 255, 255, 0.1), inset 0px -1px 0px rgba(255, 255, 255, 0.1);
          -webkit-border-radius: 5px;
          -moz-border-radius: 5px;
          -ms-border-radius: 5px;
          -o-border-radius: 5px;
          border-radius: 5px;
          border: 1px solid #1D1E21;
          background: #3B3B42;
          color: #fff;
          text-shadow: 0 1px black;
      }

      a {
          text-decoration: none;
          outline: none;
          color: white;
      }

  </style>
</head>

<body>
<script>
    var container, stats;
    var camera, scene, renderer, group, particle;
    var mouseX = 0, mouseY = 0;

    var windowHalfX = window.innerWidth / 2;
    var windowHalfY = window.innerHeight / 2;

    init();
    animate();

    function init() {

        container = document.createElement( 'div' );
        document.body.appendChild( container );

        camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 3000 );
        camera.position.z = 1000;

        scene = new THREE.Scene();

        var PI2 = Math.PI * 2;
        var program = function ( context ) {

            context.beginPath();
            context.arc( 0, 0, 1, 0, PI2, true );
            context.closePath();
            context.fill();

        }

        group = new THREE.Object3D();
        scene.add( group );

        for ( var i = 0; i < 100; i++ ) {

            particle = new THREE.Particle( new THREE.ParticleCanvasMaterial( { color: Math.random() * 0x808008 + 0x808080, program: program } ) );
            particle.position.x = Math.random() * 2000 - 1000;
            particle.position.y = Math.random() * 2000 - 1000;
            particle.position.z = Math.random() * 2000 - 1000;
            particle.scale.x = particle.scale.y = Math.random() * 10 + 5;
            group.add( particle );
        }

        renderer = new THREE.CanvasRenderer();
        renderer.setSize( window.innerWidth, window.innerHeight );
        container.appendChild( renderer.domElement );

        document.addEventListener( 'mousemove', onDocumentMouseMove, false );
        document.addEventListener( 'touchstart', onDocumentTouchStart, false );
        document.addEventListener( 'touchmove', onDocumentTouchMove, false );

        //

        window.addEventListener( 'resize', onWindowResize, false );

    }

    function onWindowResize() {

        windowHalfX = window.innerWidth / 2;
        windowHalfY = window.innerHeight / 2;

        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();

        renderer.setSize( window.innerWidth, window.innerHeight );

    }

    //

    function onDocumentMouseMove( event ) {

        mouseX = event.clientX - windowHalfX;
        mouseY = event.clientY - windowHalfY;
    }

    function onDocumentTouchStart( event ) {

        if ( event.touches.length === 1 ) {

            event.preventDefault();

            mouseX = event.touches[ 0 ].pageX - windowHalfX;
            mouseY = event.touches[ 0 ].pageY - windowHalfY;

        }

    }

    function onDocumentTouchMove( event ) {

        if ( event.touches.length === 1 ) {

            event.preventDefault();

            mouseX = event.touches[ 0 ].pageX - windowHalfX;
            mouseY = event.touches[ 0 ].pageY - windowHalfY;

        }

    }

    //

    function animate() {
        requestAnimationFrame( animate );
        render();
    }

    function render() {

        camera.position.x += ( mouseX - camera.position.x ) * 0.05;
        camera.position.y += ( - mouseY - camera.position.y ) * 0.05;
        camera.lookAt( scene.position );

        group.rotation.x += 0.01;
        group.rotation.y += 0.02;

        renderer.render( scene, camera );

    }
</script><div><canvas height="673" width="1304"></canvas></div>
<div class="wrapper">
  <div style="font-family:'΢���ź�';">����404</div>
  <div style="font-family:'΢���ź�';">��Ǹ����Ҫ�򿪵�ҳ��û������</div>
  <div style="font-family:'΢���ź�';"><a href="index.html">����˴���������ҳ��</a></div>
</div></body></html>