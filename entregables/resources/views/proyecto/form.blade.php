@extends('proyecto.dashboard')
@section('cabezal')



@section('archivo')
<center>

 <h1>Formularios</h1>

        <fieldset>
          <legend><span class="number">1</span>ingresa los datos</legend>
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="user_name">

          <label for="mail">Correo:</label>
          <input type="email" id="mail" name="user_email">

          <label for="password">telefono</label>
          <input type="password" id="password" name="user_password">

          <label>sexo:</label>
          <input type="radio" id="hombre" value="hombre" name="user_age"><label for="hombre" class="light">hombre</label><br>
          <input type="radio" id="mujer" value="hombre" name="user_age"><label for="mujer" class="light">mujer</label>
        </fieldset>


        <label for="job">ocupacion:</label>
        <select id="job" name="user_job">
          <optgroup label="maestros">
            <option value="frontend_developer">maestro 1</option>

          </optgroup>
          <optgroup label="piloto">
            <option value="Android_developer">piloto 1</option>

          </optgroup>
          <optgroup label="Empresario">
            <option value="business_owner">empresario 1</option>

          </optgroup>
          <optgroup label="Otro">
            <option value="secretary">Secretaria</option>

          </optgroup>
        </select>

          <label>enfermedades:</label>
          <input type="checkbox" id="diabestes" value="diabestes" name="interes"><label class="light" for="development">diabestes</label><br>
            <input type="checkbox" id="cancer" value="cancer" name="interes"><label class="light" for="design">cancer</label><br>


       
        <button type="submit">Sign Up</button>
      



</center>




@stop