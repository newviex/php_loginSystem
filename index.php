<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our First Php Script</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<body>
  <header>
    <div class="header">
        <?php
            echo"My first PHP Script";
        ?>
    </div>
  </header>
    <section>
        <h2>What is PHP?</h2>
        <ul>
            <li>Php is an acronym for Hypertext Preprocessor</li>
            <li>It is widely used and an open source scripting language</li>
            <li>Php scripts are executed on the server</li>
            <li>Php is free to download and use</li>
        </ul>
    </section>

    <div id="mydiv"></div>

    <script type="text/babel">
      function Hello() {
        return <h1>Hello World!</h1>;
      }

      ReactDOM.render(<Hello />, document.getElementById('mydiv'))
    </script>

</body>
</html>