function changeSubcat(){
	
	var value = document.getElementById("Cat").value;
	var Subcat = document.getElementById("SubCat");
	
	
	if(value == 'A'){
		Subcat.options.length = 0;//remove all options
		Subcat.add(new Option("", ""));
		Subcat.add(new Option("A01 - Engranajes", "A01"));
		Subcat.add(new Option("A02 - Rodamientos", "A02"));
		Subcat.add(new Option("A03 - Correas y Bandas", "A03"));
		Subcat.add(new Option("A04 - Orings, sellos y juntas", "A04"));
		Subcat.add(new Option("A05 - Pieza Mecanica", "A05"));
		Subcat.add(new Option("A06 - Rodillos", "A06"));
		Subcat.add(new Option("A07 - Filtros", "A07"));
		Subcat.add(new Option("A08 - Mangueras", "A08"));
		Subcat.add(new Option("A09 - Reductores", "A09"));
		Subcat.add(new Option("A10 - Embragues", "A10"));
		Subcat.add(new Option("A11 - Cadenas", "A11"));
		Subcat.add(new Option("A12 - Poleas", "A12"));
		Subcat.add(new Option("A13 - Cuchillas", "A13"));
		Subcat.add(new Option("A14 - Resortes", "A14"));
		Subcat.add(new Option("A15 - Otros", "A15"));

	}
	
	if(value == 'B'){
		Subcat.options.length = 0;//remove all options
		Subcat.add(new Option("", ""));
		Subcat.add(new Option("B01 - Sensores", "B01"));
		Subcat.add(new Option("B02 - Contactores y Auxiliares", "B02"));
		Subcat.add(new Option("B03 - Reles", "B03"));
		Subcat.add(new Option("B04 - Modulos Electronicos", "B04"));
		Subcat.add(new Option("B05 - Motores y Motoreductores", "B05"));
		Subcat.add(new Option("B06 - Resistencias", "B06"));
		Subcat.add(new Option("B07 - Lamparas", "B07"));
		Subcat.add(new Option("B08 - Pulsadores", "B08"));
		Subcat.add(new Option("B09 - Fusibles", "B09"));
		Subcat.add(new Option("B10 - Fuentes", "B10"));
		Subcat.add(new Option("B11 - Termicas y Guardamotores", "B11"));
		Subcat.add(new Option("B12 - Carbones", "B12"));
		Subcat.add(new Option("B13 - Cables y Fichas", "B13"));
		Subcat.add(new Option("B14 - Displays", "B14"));
		Subcat.add(new Option("B15 - Variadores de Velocidad", "B15"));
		Subcat.add(new Option("B16 - Solenoides", "B16"));
		Subcat.add(new Option("B17 - Transformadores", "B17"));
		Subcat.add(new Option("B18 - Capacitores", "B18"));
		Subcat.add(new Option("B19 - Otros", "B19"));

	}

	if(value == 'C'){
		Subcat.options.length = 0;//remove all options
		Subcat.add(new Option("", ""));
		Subcat.add(new Option("C01 - Actuadores", "C01"));
		Subcat.add(new Option("C02 - Valvulas", "C02"));
		Subcat.add(new Option("C03 - Racors", "C03"));
		Subcat.add(new Option("C04 - Silenciadores", "C04"));
		Subcat.add(new Option("C05 - Tubos", "C05"));
		Subcat.add(new Option("C06 - Racks", "C06"));
		Subcat.add(new Option("C07 - Otros", "C07"));
	}

	if(value == 'D'){
		Subcat.options.length = 0;//remove all options
		Subcat.add(new Option("", ""));
		Subcat.add(new Option("D01 - Tornillos y Tuercas", "D01"));
		Subcat.add(new Option("D02 - Arandelas", "D02"));
		Subcat.add(new Option("D03 - Espigas", "D03"));
		Subcat.add(new Option("D04 - Seguros", "D04"));
		Subcat.add(new Option("D05 - Reducciones y Conectores", "D05"));
		Subcat.add(new Option("D06 - Otros", "D06"));
	}

	if(value == 'E'){
		Subcat.options.length = 0;//remove all options
		Subcat.add(new Option("", ""));
		Subcat.add(new Option("E01 - Equipos de Medicion", "E01"));
		Subcat.add(new Option("E02 - Patrones de Medicion", "E02"));
		Subcat.add(new Option("E03 - Equipos Electronicos", "E03"));

	}

	if(value == 'F'){
		Subcat.options.length = 0;//remove all options
		Subcat.add(new Option("", ""));
		Subcat.add(new Option("F01 - Soft para PC", "F01"));
		Subcat.add(new Option("F02 - Llaves para Soft", "F02"));
		Subcat.add(new Option("F03 - CPU", "F03"));
		Subcat.add(new Option("F04 - Disco Rigido", "F04"));
		Subcat.add(new Option("F05 - Placas de PC", "F05"));
		Subcat.add(new Option("F06 - Otros", "F06"));
	}

	if(value == 'G'){
		Subcat.options.length = 0;//remove all options
		Subcat.add(new Option("", ""));
		Subcat.add(new Option("G01 - Aceites", "G01"));
		Subcat.add(new Option("G02 - Grasas", "G02"));
		Subcat.add(new Option("G03 - Otros", "G03"));

	}
	
}
