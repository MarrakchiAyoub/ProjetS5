<head>
    <style>
        table { border-collapse: collapse; }
    tr {
        height: 50px;
        }
    td {
        border: solid 2px;
        width: 180px;
    }
    .first {
        width: 80px;
    }
    </style>
</head>
<?php include 'lib/BDD.php'; ?>
<form>
    filiere:  <select name="fil">
  <option value="LSI">Cycle</option>
  <option value="GI">licence</option>
  <option value="SIAD">Master SIAD</option>
  <option value="SIR">master SIR</option>
</select> 

<table>
    <tr style="height:30px"><td class="first" style="border:none"></td><td><div style="float:left">8:30</div><div style="float:right">10:15</div></td><td><div style="float:left">10:30</div><div style="float:right">12:15</div></td><td><div style="float:left">1:30</div><div style="float:right">15:15</div></td><td><div style="float:left">15:30</div><div style="float:right">17:15</div></td></tr>
    <tr><td class="first">Lundi</td>
    <td>C1</td>
    <td>C2</td>
    <td>C3</td>
    <td>C4</td></tr>
    <tr><td class="first">Mardi</td>
    <td>C5</td>
    <td>C6</td>
    <td>C7</td>
    <td>C8</td></tr>
    <tr><td class="first">Mercredi</td>
    <td>C9</td>
    <td>C10</td>
    <td>C11</td
    ><td>C12</td></tr>
    <tr><td class="first">Jeudi</td>
    <td>C13</td>
    <td>C14</td>
    <td>C15</td>
    <td>C16</td></tr>
    <tr><td class="first">Vendredi</td>
    <td>C17</td>
    <td>C18</td>
    <td>C19</td>
    <td>C20</td></tr>
    <tr><td class="first">Samedi</td>
    <td>C21</td>
    <td>C22</td>
    <td>C23</td>
    <td>C24</td></tr>
</table>
<button type="submit" name="send"/>envoyer</button>
</form>