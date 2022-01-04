<title>
  Ufuk Kilavuz
</title>
<style>
    body {
  font-family: system-ui, -apple-system, 'Segoe UI', sans-serif;
  color: #333;
  background: #EEE;
  padding-bottom: 120px;
}

.container {
  max-width: 600px;
  margin: 0 auto;
}

a {
  text-decoration: none;
  color: #15E;
}
a:visited { color: #818;}
a:hover { color: #038;}


table {
  width: 100%;
  border-collapse: collapse;
}


tr:first-child { display: none; }

td:nth-child(1) {
  width: 24px;
  vertical-align: middle;
}

td:nth-child(1) a { display: block; }


td:nth-child(2) {
  width: 100%;
}

td:nth-child(2) a {
  display: block;
  padding: 8px 10px;
  border-radius: 4px;
  position: relative;
}

td:nth-child(2) a[href$="/"]:after {
  content: '';
  display: block;
  width: 9px;
  height: 9px;
  position: absolute;
  right: 15px;
  top: 11px;
  transform: rotate(45deg);
  border-style: solid;
  border-width: 3px 3px 0 0;
  border-color: #08F;
}


td:nth-child(2) a[href^="/"][href$="/"]:after {
  border-width:  0 0 3px 3px;
  border-color: #AAA;
  right: 11px
}

td:nth-child(2) a:hover {
  background: #CDF;
}


td:nth-child(3) {
  color: #888;
  font-size: 0.9rem;
}

</style>
<div class="container">

<h1>dizin listeleme</h1>
<table>
  <tr>
    <th valign="top">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" alt="[ICO]" width="24" height="24">
</svg>
    </th>
  </tr>


    <?php
    $fileList = glob('*');

    foreach($fileList as $filename){
    
        if(is_file($filename)){
            echo "<td valign='top'><a href='#'>"; 
            echo "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 48 48' width='24' height='24'>";
            echo "<path d='M39.4,9.6l-7-7A8.9,8.9,0,0,0,26,0H9A3,3,0,0,0,6,3V45a3,3,0,0,0,3,3H39a3,3,0,0,0,3-3V16A8.9,8.9,0,0,0,39.4,9.6ZM36,42H12V6h9a3,3,0,0,1,3,3v6a3,3,0,0,0,3,3h6a3,3,0,0,1,3,3Z' fill='#888'/>";
            echo "</svg>";
            echo "</a></td>";
            echo "<td><a href='". $filename."'>";
            echo $filename; 
            echo "</a></td></tr>";
        }
        else{
          echo "<td valign='top'><a href='#'>"; 
          echo "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 48 48' width='24' height='24'>";
          echo "<path d='M47.4,13.2A3,3,0,0,0,45,12H18V10.5A4.5,4.5,0,0,0,13.5,6h-9A4.5,4.5,0,0,0,0,10.5V36.8A5.3,5.3,0,0,0,5.3,42H36.7a6,6,0,0,0,5.8-4.5l5.4-21.7A3,3,0,0,0,47.4,13.2ZM36.7,36H9.8l4.5-18H41.2Z' fill='#08f'/>";
          echo "</svg>";
          echo "</a></td>";
          echo "<td><a href='". $filename."'>";
          echo $filename; 
          echo "</a></td></tr>";
      }    
    }    
    ?>

</table>
</div>
