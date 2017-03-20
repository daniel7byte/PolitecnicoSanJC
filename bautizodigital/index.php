<center>
  <p>
    <a href="http://www.politecnicosanjc.hol.es/"><img alt="Bautizo Digital/" src="bautizodigital/bautizodigital.jpg"/></a>
  </p>
  <form class="form-group" id="inscripciones" name="inscripciones" method="post" action="bautizodigital/insertar.php">
    <table width="200" border="">
      <tr>
        <th colspan="2"><h3>INSCRIPCIONES</h3></th>
      </tr>
      <tr>
        <td><div align="center">Nombre:</div></td>
        <td><input class="form-group" type="text" name="nombre" id="nombre" /></td>
      </tr>
      <tr>
        <td><div align="center">Interes:</div></td>
        <td><label for="interes"></label>
        <select name="interes" id="interes">
          <option value="---" selected="selected">---</option>
          <option value="Sistemas">Sistemas</option>
          <option value="Ingles">Ingles</option>
          <option value="Frances">Frances</option>
          <option value="F. Empresarial">Formacion Empresarial</option>
          <option value="S. Ocupacional">Salud Ocupacional</option>
          <option value="Atencion I. P. Infancia">Atencion Integral a la Primera Infancia</option>
          <option value="Otros">Otros</option>
        </select></td>
      </tr>
      <tr>
        <td><div align="center">Telefono:</div></td>
        <td><label for="tel"></label>
        <input class="form-group" type="text" name="tel" id="tel" /></td>
      </tr>
      <tr>
        <td><div align="center">Direccion / Ciudad:</div></td>
        <td><label for="direccion"></label>
        <input class="form-group" type="text" name="direccion" id="direccion" /></td>
      </tr>
      <tr>
        <td><div align="center">Correo:</div></td>
        <td><label for="mail"></label>
        <input class="form-group" type="email" name="mail" id="mail" /></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
        <input class="btn form-group" type="submit" name="enviar"id="enviar" value="Enviar" />
        <a class="form-group" href="bautizodigital/inscritos" class="btn">Inscritos</a>
        </div></td>
      </tr>
    </table>
  </form>
</center>