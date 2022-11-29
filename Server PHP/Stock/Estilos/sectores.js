function Opciones(){
	
	var value = document.getElementById("Sector").value;
	var select = document.getElementById("Parte");
	var Categ = document.getElementById("Cat");
	var Subcat = document.getElementById("Subcat");
	
	if(Subcat != null){
		Opciones3();
	}
	

	

	if(value == 'CHAMBOOS'){
		select.options.length = 0;//remove all options
		select.add(new Option("", ""));
		select.add(new Option("CHAMBOSS 1", "CHA 1"));
		select.add(new Option("CHAMBOSS 2", "CHA 2"));
		select.add(new Option("CHAMBOSS 3", "CHA 3"));
		select.add(new Option("TODOS", "TODOS"));

		Categ.options.length = 0;//remove all options
		Categ.add(new Option("", ""));
		Categ.add(new Option("TOLVA", "TOLVA"));
		Categ.add(new Option("ALIMENTADOR", "ALIMENTADOR"));
		Categ.add(new Option("GARGANTA", "GARGANTA"));
		Categ.add(new Option("PECHADOR", "PECHADOR"));
		Categ.add(new Option("CADENA", "CADENA"));
		Categ.add(new Option("PIEDRA INFERIOR", "PIEDRA INFERIOR"));
		Categ.add(new Option("PIEDRA SUPERIOR", "PIEDRA SUPERIOR"));
		Categ.add(new Option("MELETAS", "MELETAS"));
		Categ.add(new Option("NEUMATICA", "NEUMATICA"));
		Categ.add(new Option("ASPIRACION", "ASPIRACION"));
		Categ.add(new Option("OTROS", "OTROS"));

	}

	if(value == 'EXTRUSION'){
		select.options.length = 0;//remove all options
		select.add(new Option("", ""));
		select.add(new Option("EXTRUSORA 1", "EXT 1"));
		select.add(new Option("TODOS", "TODOS"));
		Categ.options.length = 0;//remove all options
		Categ.add(new Option("", ""));
		Categ.add(new Option("BLENDER PRIMARIO", "BLENDER PRIMARIO"));
		Categ.add(new Option("BLENDER SECUNDARIO", "BLENDER SECUNDARIO"));
		Categ.add(new Option("BOMBA DE VACIO", "BOMBA DE VACIO"));
		Categ.add(new Option("EXTRUSOR PRIMARIO", "EXTRUSOR PRIMARIO"));
		Categ.add(new Option("EXTRUSOR SECUNDARIO", "EXTRUSOR SECUNDARIO"));
		Categ.add(new Option("WATHER BATH 1", "WATHER BATH 1"));
		Categ.add(new Option("PULLER 1", "PULLER 1"));
		Categ.add(new Option("WATHER BATH 2", "WATHER BATH 2"));
		Categ.add(new Option("PULLER 2", "PULLER 2"));
		Categ.add(new Option("CORTADORA", "CORTADORA"));
		Categ.add(new Option("CONVEYOR", "CONVEYOR"));
		Categ.add(new Option("NEUMATICA", "NEUMATICA"));
		Categ.add(new Option("TABLERO ELECTRICO", "TABLERO ELECTRICO"));
		Categ.add(new Option("OTROS", "OTROS"));

	}

	if(value == 'IMPRESION'){
		select.options.length = 0;//remove all options
		

		select.add(new Option("", ""));
		select.add(new Option("IMPRESORA 1", "IMP 1"));
		select.add(new Option("IMPRESORA 2", "IMP 2"));
		select.add(new Option("IMPRESORA 3", "IMP 3"));
		select.add(new Option("IMPRESORA 4", "IMP 4"));
	    select.add(new Option("IMPRESORA 5", "IMP 5"));
	    select.add(new Option("IMPRESORA 6", "IMP 6"));
	    select.add(new Option("TODOS", "TODOS"));

	    Categ.options.length = 0;//remove all options
	    Categ.add(new Option("", ""));
	    Categ.add(new Option("TOLVA", "TOLVA"));
	    Categ.add(new Option("ALIMENTADOR LINEAL", "ALIMENTADOR LINEAL"));
		Categ.add(new Option("WEBER", "WEBER"));
		Categ.add(new Option("JIRAFA", "JIRAFA"));
		Categ.add(new Option("FEEDER", "FEEDER"));
		Categ.add(new Option("CARROUSEL", "CARROUSEL"));
		Categ.add(new Option("SISTEMA DE ENTINTADO", "SISTEMA DE ENTINTADO"));
		Categ.add(new Option("SPINING", "SPINING"));
		Categ.add(new Option("UV", "UV"));
		Categ.add(new Option("CORONA", "CORONA"));
		Categ.add(new Option("EXTRACTORES", "EXTRACTORES"));
		Categ.add(new Option("OTROS", "OTROS"));
	}

	if(value == 'TRATAMIENTO'){
		select.options.length = 0;//remove all options
		select.add(new Option("", ""));
		select.add(new Option("TRA 1", "TRATAMIENTO"));
		Categ.options.length = 0;//remove all options
		Categ.add(new Option("", ""));
		Categ.add(new Option("ELEVADOR", "ELEVADOR"));
		Categ.add(new Option("TOLVA 1", "TOLVA 1"));
		Categ.add(new Option("TMK", "TMK"));
		Categ.add(new Option("TOLVA 2", "TOLVA 2"));
		Categ.add(new Option("CONTADOR", "CONTADOR"));
		Categ.add(new Option("CINTA", "CINTA"));
		Categ.add(new Option("SELLADORA", "SELLADORA"));
		Categ.add(new Option("SELLADORA NITROGENO", "SELLADORA NITROGENO"));
		Categ.add(new Option("OTROS", "OTROS"));
	}

	if(value == 'SERVICIOS'){
		select.options.length = 0;//remove all options
		select.add(new Option("", ""));
		select.add(new Option("COMPRESORES", "COMPRESORES"));
		select.add(new Option("CHILLER", "CHILLER"));
		select.add(new Option("PRINTER FEEDER", "PRINTER FEEDER"));
		select.add(new Option("IT", "IT"));
		Categ.options.length = 0;//remove all options
		Opciones2();

	}

	if (value == 'EDILICIO' || value == 'AUTOELEVADORES' || value == 'OTROS' || value == 'TODOS'){
		select.options.length = 0;//remove all options
		select.add(new Option("", ""));
		select.add(new Option(value, value));
		Categ.options.length = 0;//remove all options
		Categ.add(new Option("", ""));
		Categ.add(new Option("OTROS", "OTROS"));
	}

	
}

function Opciones2(){

	var select = document.getElementById("Parte").value;
	var Categ = document.getElementById("Cat");

	if(select == 'COMPRESORES'){
		Categ.options.length = 0;//remove all options
		Categ.add(new Option("", ""));
		Categ.add(new Option("COMPRESOR 5507", "COMPRESOR 5507"));
		Categ.add(new Option("COMPRESOR 2207", "COMPRESOR 2207"));
		Categ.add(new Option("SECADOR GDE", "SECADOR GDE"));
		Categ.add(new Option("SECADOR CHICO", "SECADOR CHICO"));
		Categ.add(new Option("OTROS", "OTROS"));

	}

	if(select == 'CHILLER'){
		Categ.options.length = 0;//remove all options
		Categ.add(new Option("", ""));
		Categ.add(new Option("CHILLER", "CHILLER"));
		Categ.add(new Option("BOMBAS", "BOMBAS"));
		Categ.add(new Option("CAÑERIA", "CAÑERIA"));
		Categ.add(new Option("TANQUES", "TANQUES"));
		Categ.add(new Option("OTROS", "OTROS"));
	}

	if(select == 'PRINTER FEEDER'){
		Categ.options.length = 0;//remove all options
		Categ.add(new Option("", ""));
		Categ.add(new Option("ELEVADOR", "ELEVADOR"));
		Categ.add(new Option("TOLVA", "TOLVA"));
		Categ.add(new Option("REVOLVER", "REVOLVER"));
		Categ.add(new Option("CAÑERIA", "CAÑERIA"));
		Categ.add(new Option("OTROS", "OTROS"));
	}

	if(select == 'IT'){
		Categ.options.length = 0;//remove all options
		Categ.add(new Option("", ""));
		Categ.add(new Option("OTROS", "OTROS"));
	}

}

function Opciones3(){

	//var Categ = document.getElementById("Cat").value;
	Subcat.options.length = 0;//remove all option
	Subcat.add(new Option("-", "-"));
}