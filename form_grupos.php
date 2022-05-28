<?php require_once 'templates/header.php'; ?>   
	<body>

    	<ul class="nav">
    		<li tabindex="0" class="active"><i class="bi bi-house-fill"></i> Inicio </li>
    		<li tabindex="0"><i class="bi bi-people-fill"></i>Créditos</li>
    		<li tabindex="0"><i class="bi bi-door-open-fill"></i>Cerrar sesión</li>
    	</ul>
		<div class="flex flex-col justify-center items-center mt-5 mb-5">
			<div class="rounded shadow-lg overflow-hidden w-6/12 flex flex-col p-5">
				<h1 class="uppercase text-indigo-600 font-bold text-4xl mb-5">Formulario para registro de grupos</h1>
				<form id="formulario">
					<div class="w-full flex flex-col mb-5">
						<label for="nombre" class="text-gray-700 uppercase font-bold">Nombre: </label>
						<input type="text" name="nombre" id="nombre" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
					</div>
					<div class="w-full flex flex-col mb-5">
						<label for="pais_origen" class="text-gray-700 uppercase font-bold">Pais de Origen: </label>
						<input type="text" name="pais_origen" id="pais_origen" class="border-2 w-full p-2 mt-2 placeholder-gray-400 rounded-md">
					</div>
						
					<button type="submit" id="enviar" class="bg-indigo-700 w-full py-3 px-10 rounded-xl text-white uppercase font-bold mt-5 hover: cursor-pointer hover:bg-indigo-800 md:w-auto">Confirmar</button>
				</form>
			</div>
		</div>
    	<?php require_once 'templates/footer.php'; ?>