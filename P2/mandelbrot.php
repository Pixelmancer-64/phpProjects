<?php
$page = array('title'=>'HTML5 Canvas Mandlebrot Set Explorer.', 'sidebar' => 'mandelside.php');
$addToHead = '<script type = "text/javascript" src = "mandeljs.js" defer="true"></script>';
 include("../header.php"); ?>
 <h3 style = "text-align: center;">Mandelbrot Set Explorer</h3>
 <h4 style="text-align: center;font-style: italic;">(And other fractals)</h4><br />
<canvas id = "canvas" style = "width:100%; border: 1px solid black;"></canvas><br />
<a onclick = "openImg();">Download this image</a>
<form id = "controls">
<table style="width:100%">
<tr><td style="width:200px"><label for="lx">Left X:</label></td><td><input style="width:100%" type = "text" name = "lx" value="-2.5" /></td></tr>
<tr><td><label for="ty">Top Y:</label></td><td><input style="width:100%" type = "text" name = "ty" value="1" /></td></tr>
<tr><td><label for="rx">Right X:</label></td><td><input style="width:100%" type = "text" name = "rx" value="1.5" /></td></tr>
<tr><td><label for="by">Bottom Y:</label></td><td><input style="width:100%" type = "text" name = "by" value="-1" /></td></tr>
<tr><td><label for="eq">Equation:</label></td><td><input style="width:100%" type = "text" name = "eq" value="n = n.multiply(n); n = n.add(c)" /><span id = "equerror" style="color:red;"></span></td></tr>
<tr><td><label for="escape">Escape Equation:</label></td><td><input style="width:100%" type = "text" name = "escape" value="return n.magnitude() > 2" /><span id = "escerror" style="color:red;"></span></td></tr>
<tr><td><label for="update">Lines per refresh:</label></td><td><input style="width:100%" type = "text" name = "update" value="10" /></td></tr>
<tr><td><label for="threads">Worker Threads:</label></td><td><input style="width:100%" type = "text" name = "threads" value="4" /></td></tr>
<tr><td><label for="it">Max iterations:</label></td><td><input style="width:100%" type = "text" name = "it" value="20" /></tr>
<tr><td><label for="itauto">Auto iteration change?<br /> (Unimplemtented)</label></td><td> <input type = "checkbox" name='itauto' value = "checked" /></tr>
<tr><td colspan="2" id="renderwarning"></td></tr>
<tr><td><label for="renauto">Redraw when settings changed</label></td><td> <input type = "checkbox" name='renauto' value = "checked" checked="true" /> <a onclick = "updateURL()">Render</a></tr>
</table>
<br />
<h5>Gradient Stops</h5>
<table style="width:100%" id = "grads">
<tr><td>Repeat all non-set grads?</td><td><input name = "rep" type = "checkbox"/></td><td>Every <input name = "repeatFreq" value = "100" /> iterations</td>
<tr><th style="width:200px">Gradient point</th><th>Iteration No.</th><th>Color</th></tr>
<tr><td>Part of set</td><td><input name = "gp0" value = "-0" disabled = "true" /></td><td><input name = "gc0" value = "#000" /></td>
<tr><td>Escapes on 1st iteration</td><td><input name = "gp1" value = "0" disabled = "true"/></td><td><input name = "gc1" value = "#FF0" /></td>
</table>
<input type = "button" value = "Add gradient" onclick = "addGradient();"/>
</form>
<canvas id = "grad_canvas" style = "height:50px; width:100%;border: 1px solid black;"></canvas>
<?php include("../footer.php"); ?>
