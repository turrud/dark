<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <script src="https://rawgit.com/aframevr/aframe/master/dist/aframe-master.min.js"></script>

    <a-assets>
    <video id='vid' src="videos/2.mp4" crossorigin="anonymous" />
    </a-assets>
    <a-scene>
    <a-sky rotation="0 -90 0" src="#vid"></a-sky>
    </a-scene>

    <script>
    window.addEventListener('click', function () {
    var v = document.querySelector('#vid');
    v.play();
    });
    </script>

</body>
</html>
