<nav id="top_menu">

		<ul>
			<li>
				<a href="../inicio/inicio.php"><div class="contenedor_general">

					<div class="contenedor_uno">
						<p class="texto_uno"><img src="../images/iconos_menu/home.png">INICIO</p>
					</div>

					<div class="contenedor_dos">
          	<p class="texto_uno"><img src="../images/iconos_menu/home.png">INICIO</p>
          </div>

				</div></a>
			</li>




			<li>
				<a href="../tienda/tienda.php"><div class="contenedor_general">

					<div class="contenedor_uno">
						<p class="texto_uno"><img src="../images/iconos_menu/tienda_black.PNG">TIENDA</p>
					</div>

					<div class="contenedor_dos">
                        <p class="texto_dos"><img src="../images/iconos_menu/tienda_black.PNG">TIENDA</p>
					</div>

                    </div></a>
			</li>
			<li>
				<a href="../catalogo/catalogo.php"><div class="contenedor_general">

					<div class="contenedor_uno">
						<p class="texto_uno"><img src="../images/iconos_menu/catalogo_black.PNG">CATÁLOGO</p>
					</div>

					<div class="contenedor_dos">
                        <p class="texto_dos"><img src="../images/iconos_menu/catalogo_black.PNG">CATÁLOGO</p>
					</div>

                    </div></a>
			</li>
			<?php
			if(isset($_SESSION["user"])){
				echo '<li>
					<a href="../tienda/ver_pedidos.php"><div class="contenedor_general">

						<div class="contenedor_uno">
							<p class="texto_uno"><img src="../images/iconos_menu/catalogo_black.PNG">PEDIDOS</p>
						</div>

						<div class="contenedor_dos">
	                        <p class="texto_dos"><img src="../images/iconos_menu/catalogo_black.PNG">PEDIDOS</p>
						</div>

	                    </div></a>
				</li>';


			}
				?>





			<li>
				<a href="../aboutus/aboutus.php"><div id ="excep" class="contenedor_general">

					<div class="contenedor_uno">
						<p class="texto_uno"><img src="../images/iconos_menu/aboutus_black.PNG">SOBRE NOSOTROS</p>
					</div>

					<div class="contenedor_dos">
                        <p class="texto_dos"><img src="../images/iconos_menu/aboutus_black.PNG">SOBRE NOSOTROS</p>
					</div>

                </div></a>
			</li>


			<li>
				<a href="../contacto/contacto.php"><div class="contenedor_general">

					<div class="contenedor_uno">
						<p class="texto_uno"><img src="../images/iconos_menu/contac_black.png">CONTACTO</p>
					</div>

					<div class="contenedor_dos">
                        <p class="texto_dos"><img src="../images/iconos_menu/contac_black.png">CONTACTO</p>
					</div>

                </div></a>
			</li>



		</ul>



	</nav>
