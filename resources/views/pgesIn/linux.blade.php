@extends('layouts.main')

@section('content')
	      <h1>LINUX</h1>
		<table class="table" >
		  <tr>
		    <td>-> Estandar <b>FHS</b> (FileSystem Herarchy Standar)</td>
		  </tr>
		  <tr>
		    <td>
		       &bull; Este estandar es refierido a la creación y nombrado de carpetas para el guardado de de archivos separados por tipo y utilidad. 
		    </td>
		  </tr>
		</table>

		<table class="table" >
		  <tr>
		    <td>
		      	<ul>
			<!-------------------->	
			  <li>
			    <b>/bin</b> ::
			    <ul>
			      	<li>
				   Utiliddad de base.
				</li>	
		  		<li>
				   Programam usados por los usuarios.
				</li>	
                                 <li>
				   Comnados basicos.
				</li>	
                                 <li>
				   Scripts y aplicaciones SHELLS.
				</li>	

			    </ul>
			  </li>
			<!-------------------->	
			  <li>
			    <b>/boot</b> ::
			    <ul>
			      <li>
				Archivos necesarios durante el arranque del sistema.
			      </li>
			    </ul>
			  </li>
			<!-------------------->	
			  <li>
			    <b>/dev</b> ::
			    <ul>
			      <li>
				Archivos especiales que representan los dispositivos posibles en el sistema.
			      </li>
			      <li>
				Acceso a los perifericos  en el sistema UNIX.			      
				<ul>
				  <li>- dev/console</li>
				  <li>- dev/modem</li>
				  <li>- dev/mouse</li>	
				  <li>- Dispositivos especificos del tipo conotrolador ó interfaz. </li>
				</ul>
			      </li>
			    </ul>
			  </li>
			  <!---------------->
			  <li>
			    <b>/etc</b> ::
			    <ul>
			      <li>
				Ficheros de configuración.
			      </li>
			      <li>
				Contiene la información de las cuentas de usuarios del sistema.
			      </li>
			    </ul>
			  </li>
			  <!---------------->
			  <li>
			    <b>/home</b> :: 
			    <ul>
			      <li>
				Contiene las carpetas de cada usuarios
			      </li>
			    </ul>
			  </li>
			  <!--------------->
			  <li>
			    <b>/lib</b> ::
			    <ul>
			      <li>
				Bibliotecas del sistema, compartidas por los programas de los usuarios. <br>
				<b>-C</b>, <b>- lib.so</b> ó <b>- libc.a</b>
			      </li>
			    </ul>
			  </li>
			  <!----------------> 
			  <li>
			    <b>/mnt</b> ::
			    <ul>
			      <li>
				 Punto de montar sistema de ficheros extraibles. <br>
				 <b>- mnt/cdroom</b> para montar el el lector de CD-ROOM
			      </li>
			    </ul>
			  </li>
			<!----------------->
			<li>
			  <b>/opt</b> ::
			  <ul>
			    <li>
			      Software  añadido al sistema posterior a la instalación.
			    </li>
			  </ul>
			</li>
			<!------------------->
			<li>
			  <b>/sbin</b> ::
			  <ul>
			    <li>Utilidades de base del sistema <b>(Comandos reservados para ROOT)</b></li>
			  </ul>
			</li>
			<!-------------------->
			<li>
			  <b>/tmp</b> ::
			  <ul>
			    <li>
			      Ficheros temporales de las aplicaciones o del sistema.
			    </li>
			  </ul>
			</li>
			<!--------------------->
			<li>
			  <b>/usr</b> :: 
			  <ul>
			    <li>
			      Diferentes elementos instalados en el sistema. 
			    </li>
			  </ul>
			</li>
			<!----------------------->
			<li>
			  <b>/var</b> ::
			  <ul>
			    <li>
			      Ficheros de registro de sessión ó de estado. <br>
			      <b>- logs de errores, mails, impresiones </b>
			    </li>
			  </ul>
			</li>

			</ul>
		    </td>
		  </tr>
		</table>
@endsection


