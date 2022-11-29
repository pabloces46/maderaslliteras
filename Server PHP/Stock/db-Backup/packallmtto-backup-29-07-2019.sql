CREATE DATABASE IF NOT EXISTS `packallmtto`;

USE packallmtto;

DROP TABLE IF EXISTS `equipos`;

CREATE TABLE `equipos` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `EQUIPO` varchar(50) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `FECHA` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `equipos` VALUES("1","171660","Calo lleva motor para reparar ya que se caen las vueltas cuando se pone en funcionamiento.","13-10-2017");
INSERT INTO `equipos` VALUES("5","171631","Se cambio retenes, y se coloco aceite EP460","27-09-2017");
INSERT INTO `equipos` VALUES("6","171631","Se coloco en Winder A de L4","19-10-2017");
INSERT INTO `equipos` VALUES("7","171653","Se colocan 2 rodamientos nuevos 6009 y 2 retenes nuevos 40-55-8. Se arma con corona de bornce nueva.","19-10-2017");



DROP TABLE IF EXISTS `inventario`;

CREATE TABLE `inventario` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `CODIGO` varchar(10) NOT NULL,
  `REPUESTO` text NOT NULL,
  `TIPO` varchar(20) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `USO` text NOT NULL,
  `CANTIDAD` int(100) NOT NULL,
  `CANTMIN` int(10) NOT NULL,
  `UBICACION` varchar(10) NOT NULL,
  `ESTADO` varchar(200) NOT NULL DEFAULT 'activo',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=452 DEFAULT CHARSET=utf8;

INSERT INTO `inventario` VALUES("247","R00001205","Rodamiento 1205","Mecanico","","","2","2","R2-A","activo");
INSERT INTO `inventario` VALUES("248","R00002200","Rodamiento 2200","Mecanico","","","2","2","R3-A","activo");
INSERT INTO `inventario` VALUES("249","R00002202","Rodamiento 2202","Mecanico","","","6","2","R4-A","activo");
INSERT INTO `inventario` VALUES("250","R00002207","Rodamiento 2207","Mecanico","","","3","2","R5-A","activo");
INSERT INTO `inventario` VALUES("251","R00002208","Rodamiento 2208","Mecanico","","","3","2","R6-A","activo");
INSERT INTO `inventario` VALUES("252","R00002209","Rodamiento 2209","Mecanico","Rolo ranurado L3","","3","2","R7-A","activo");
INSERT INTO `inventario` VALUES("253","R00002210","Rodamiento 2210","Mecanico","","","3","2","R9-A","activo");
INSERT INTO `inventario` VALUES("254","R00002211","Rodamiento 2211","Mecanico","","","4","2","R10-A","activo");
INSERT INTO `inventario` VALUES("255","R00002212","Rodamiento 2212","Mecanico","","","1","2","R11-A","activo");
INSERT INTO `inventario` VALUES("256","R00002310","Rodamiento 2310","Mecanico","","","4","2","R12-A","activo");
INSERT INTO `inventario` VALUES("257","R00002710","Rodamiento 2710","Mecanico","","","0","2","R13-A","activo");
INSERT INTO `inventario` VALUES("258","R00003204","Rodamiento 3204","Mecanico","Reemplazo 5204","Portatubos L3","8","2","R14-A","activo");
INSERT INTO `inventario` VALUES("259","R00003205","Rodamiento 3205","Mecanico","","","3","2","R15-A","activo");
INSERT INTO `inventario` VALUES("260","R00003308","Rodamiento 3308","Mecanico","","","8","2","R16-A","activo");
INSERT INTO `inventario` VALUES("261","R00003310","Rodamiento 3310","Mecanico","","","6","2","R17-A","activo");
INSERT INTO `inventario` VALUES("262","R00004208","Rodamiento 4208","Mecanico","","","3","2","R1-B","activo");
INSERT INTO `inventario` VALUES("263","R00004312","Rodamiento 4312","Mecanico","","","0","2","R2-B","activo");
INSERT INTO `inventario` VALUES("264","R00005205","Rodamiento 5205","Mecanico","","","2","2","R3-B","activo");
INSERT INTO `inventario` VALUES("265","R00006000","Rodamiento 6000","Mecanico","","","1","2","R4-B","activo");
INSERT INTO `inventario` VALUES("266","R00006001","Rodamiento 6001","Mecanico","","","23","2","R4-B","activo");
INSERT INTO `inventario` VALUES("267","R00006002","Rodamiento 6002","Mecanico","","","12","2","R5-B","activo");
INSERT INTO `inventario` VALUES("268","R00006003","Rodamiento 6003","Mecanico","","","3","2","R6-B","activo");
INSERT INTO `inventario` VALUES("269","R00006004","Rodamiento 6004","Mecanico","","","9","2","R6-B","activo");
INSERT INTO `inventario` VALUES("270","R00006005","Rodamiento 6005","Mecanico","","","6","2","R7-B","activo");
INSERT INTO `inventario` VALUES("271","R00006006","Rodamiento 6006","Mecanico","","","4","2","R7-B","activo");
INSERT INTO `inventario` VALUES("272","R00006007","Rodamiento 6007","Mecanico","","","6","2","R8-B","activo");
INSERT INTO `inventario` VALUES("273","R00006008","Rodamiento 6008","Mecanico","","","6","2","R9-B","activo");
INSERT INTO `inventario` VALUES("274","R00006010","Rodamiento 6010","Mecanico","","Rotomac ","16","2","R10-B","activo");
INSERT INTO `inventario` VALUES("275","R00006011","Rodamiento 6011","Mecanico","","","3","2","R11-B","activo");
INSERT INTO `inventario` VALUES("276","R00006012","Rodamiento 6012","Mecanico","","","6","2","R1-C","activo");
INSERT INTO `inventario` VALUES("277","R00006014","Rodamiento 6014","Mecanico","","","3","2","R2-C","activo");
INSERT INTO `inventario` VALUES("278","R00006015","Rodamiento 6015","Mecanico","","","4","2","R3-C","activo");
INSERT INTO `inventario` VALUES("279","R00006016","Rodamiento 6016","Mecanico","","","3","2","R4-C","activo");
INSERT INTO `inventario` VALUES("280","R00006029","Rodamiento 6029","Mecanico","","","0","2","R5-C","activo");
INSERT INTO `inventario` VALUES("281","R00006200","Rodamiento 6200","Mecanico","","","4","2","R5-C","activo");
INSERT INTO `inventario` VALUES("282","R00006201","Rodamiento 6201","Mecanico","","","5","2","R6-C","activo");
INSERT INTO `inventario` VALUES("283","R00006202","Rodamiento 6202","Mecanico","","","7","2","R6-C","activo");
INSERT INTO `inventario` VALUES("284","R00006203","Rodamiento 6203","Mecanico","","","6","2","R7-C","activo");
INSERT INTO `inventario` VALUES("285","R00006204","Rodamiento 6204","Mecanico","","","6","2","R7-C","activo");
INSERT INTO `inventario` VALUES("286","R00006205","Rodamiento 6205","Mecanico","","","4","2","R8-C","activo");
INSERT INTO `inventario` VALUES("287","R00006206","Rodamiento 6206","Mecanico","","","4","2","R8-C","activo");
INSERT INTO `inventario` VALUES("288","R00006207","Rodamiento 6207","Mecanico","","","4","2","R9-C","activo");
INSERT INTO `inventario` VALUES("289","R00006208","Rodamiento 6208","Mecanico","","","6","2","R10-C","activo");
INSERT INTO `inventario` VALUES("290","R00006209","Rodamiento 6209","Mecanico","","","4","2","R11-C","activo");
INSERT INTO `inventario` VALUES("291","R00006210","Rodamiento 6210","Mecanico","","","6","2","R1-D","activo");
INSERT INTO `inventario` VALUES("292","R00006211","Rodamiento 6211","Mecanico","","","3","2","R2-D","activo");
INSERT INTO `inventario` VALUES("293","R00006212","Rodamiento 6212","Mecanico","","","5","2","R3-D","activo");
INSERT INTO `inventario` VALUES("294","R00006213","Rodamiento 6213","Mecanico","","Picadora A","5","2","R4-D","activo");
INSERT INTO `inventario` VALUES("295","R00006215","Rodamiento 6215","Mecanico","","","2","2","R5-D","activo");
INSERT INTO `inventario` VALUES("296","R00006304","Rodamiento 6304","Mecanico","","","4","2","R6-D","activo");
INSERT INTO `inventario` VALUES("297","R00006305","Rodamiento 6305","Mecanico","","","4","2","R6-D","activo");
INSERT INTO `inventario` VALUES("298","R00006306","Rodamiento 6306","Mecanico","","","3","2","R7-D","activo");
INSERT INTO `inventario` VALUES("299","R00006307","Rodamiento 6307","Mecanico","","","3","2","R8-D","activo");
INSERT INTO `inventario` VALUES("300","R00006308","Rodamiento 6308","Mecanico","","","2","2","R9-D","activo");
INSERT INTO `inventario` VALUES("301","R00006309","Rodamiento 6309","Mecanico","","","2","2","R10-D","activo");
INSERT INTO `inventario` VALUES("302","R00006310","Rodamiento 6310","Mecanico","","","4","2","R11-D","activo");
INSERT INTO `inventario` VALUES("303","R00006313","Rodamiento 6313","Mecanico","","","4","2","R1-E","activo");
INSERT INTO `inventario` VALUES("304","R00006315","Rodamiento 6315","Mecanico","","","3","2","R2-E","activo");
INSERT INTO `inventario` VALUES("305","R00006316","Rodamiento 6316","Mecanico","","","4","2","R3-E","activo");
INSERT INTO `inventario` VALUES("306","R00006801","Rodamiento 6801","Mecanico","","","2","2","R4-E","activo");
INSERT INTO `inventario` VALUES("307","R00006803","Rodamiento 6803","Mecanico","","","10","2","R4-E","activo");
INSERT INTO `inventario` VALUES("308","R00006804","Rodamiento 6804","Mecanico","","","23","2","R5-E","activo");
INSERT INTO `inventario` VALUES("309","R00006901","Rodamiento 6901","Mecanico","","","19","2","R5-E","activo");
INSERT INTO `inventario` VALUES("310","R00007208","Rodamiento 7208","Mecanico","","","3","2","R6-E","activo");
INSERT INTO `inventario` VALUES("311","R00007209","Rodamiento 7209","Mecanico","","","2","2","R7-E","activo");
INSERT INTO `inventario` VALUES("312","R00007309","Rodamiento 7309","Mecanico","","","2","2","R8-E","activo");
INSERT INTO `inventario` VALUES("313","R00016005","Rodamiento 16005","Mecanico","","","4","2","R9-E","activo");
INSERT INTO `inventario` VALUES("314","R00016006","Rodamiento 16006","Mecanico","","","1","2","R9-E","activo");
INSERT INTO `inventario` VALUES("315","R00021311","Rodamiento 21311","Mecanico","","","1","2","R10-E","activo");
INSERT INTO `inventario` VALUES("316","R00022211","Rodamiento 22211","Mecanico","","","4","2","R10-E","activo");
INSERT INTO `inventario` VALUES("317","R00022212","Rodamiento 22212","Mecanico","","","4","2","R11-E","activo");
INSERT INTO `inventario` VALUES("318","R00022213","Rodamiento 22213","Mecanico","","","3","2","R12-E","activo");
INSERT INTO `inventario` VALUES("319","R00029685","Rodamiento 29685","Mecanico","","","4","2","R13-E","activo");
INSERT INTO `inventario` VALUES("320","R00030210","Rodamiento 30210","Mecanico","","","8","2","R14-E","activo");
INSERT INTO `inventario` VALUES("321","R00030305","Rodamiento 30305","Mecanico","","","5","2","R15-E","activo");
INSERT INTO `inventario` VALUES("322","R00030306","Rodamiento 30306","Mecanico","","","1","2","R15-E","activo");
INSERT INTO `inventario` VALUES("323","R00032006","Rodamiento 32006","Mecanico","","","3","2","R16-E","activo");
INSERT INTO `inventario` VALUES("324","R00032007","Rodamiento 32007","Mecanico","","","6","2","R16-E","activo");
INSERT INTO `inventario` VALUES("325","R00032008","Rodamiento 32008","Mecanico","","","4","2","R17-E","activo");
INSERT INTO `inventario` VALUES("326","R00032010","Rodamiento 32010","Mecanico","","","4","2","R17-E","activo");
INSERT INTO `inventario` VALUES("327","R00032207","Rodamiento 32207","Mecanico","","","2","2","R1-F","activo");
INSERT INTO `inventario` VALUES("328","R00032210","Rodamiento 32210","Mecanico","","","1","2","R2-F","activo");
INSERT INTO `inventario` VALUES("329","R00032213","Rodamiento 32213","Mecanico","","","3","2","R3-F","activo");
INSERT INTO `inventario` VALUES("330","R00033010","Rodamiento 33010","Mecanico","","","3","2","R4-F","activo");
INSERT INTO `inventario` VALUES("331","R00034293","Rodamiento 34293","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("332","R00051108","Rodamiento 51108","Mecanico","","","1","2","R6-F","activo");
INSERT INTO `inventario` VALUES("333","R00051117","Rodamiento 51117","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("334","R00060002","Rodamiento 60002","Mecanico","","","4","2","R7-F","activo");
INSERT INTO `inventario` VALUES("335","R00062206","Rodamiento 62206","Mecanico","","","7","2","R7-F","activo");
INSERT INTO `inventario` VALUES("336","R1308ETN9","Rodamiento 1308-ETN9","Mecanico","","","2","2","R1-A","activo");
INSERT INTO `inventario` VALUES("337","R002N1010","Rodamiento 2N1010","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("338","R000ES17M","Rodamiento ES-17-M","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("339","R000NJ308","Rodamiento NJ308","Mecanico","","","3","2","","activo");
INSERT INTO `inventario` VALUES("340","R000NU209","Rodamiento NU209","Mecanico","","","1","2","R9-F","activo");
INSERT INTO `inventario` VALUES("341","R00NU210E","Rodamiento NU210E","Mecanico","","","3","2","R10-F","activo");
INSERT INTO `inventario` VALUES("342","R00NU215E","Rodamiento NU215E","Mecanico","","","3","2","R11-F","activo");
INSERT INTO `inventario` VALUES("343","R000NU217","Rodamiento NU217","Mecanico","","","6","2","R12-B","activo");
INSERT INTO `inventario` VALUES("344","R0NU217IN","Rodamiento NU217 Inner","Mecanico","Pista Interna","","3","2","R12-B","activo");
INSERT INTO `inventario` VALUES("345","R000NU308","Rodamiento NU308","Mecanico","","","0","2","R8-F","activo");
INSERT INTO `inventario` VALUES("346","R0000R8ZZ","Rodamiento R8ZZ","Mecanico","","Rolito Tiras - PuntaTurret PRO","8","8","R13-B","activo");
INSERT INTO `inventario` VALUES("347","R000R8LLU","Rodamiento R8LLU","Mecanico","","Rolito Tiras - PuntaTurret PRO","12","2","R13-B","inactivo");
INSERT INTO `inventario` VALUES("348","R00000RL5","Rodamiento RLS5","Mecanico","","","6","2","R13-B","activo");
INSERT INTO `inventario` VALUES("349","R000UC204","Rodamiento UC204","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("350","R000UC205","Rodamiento UC205","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("351","R000UC206","Rodamiento UC206","Mecanico","","","1","2","R14-B","activo");
INSERT INTO `inventario` VALUES("352","R000UC207","Rodamiento UC207","Mecanico","","","5","2","R12-C","activo");
INSERT INTO `inventario` VALUES("353","R000UC212","Rodamiento UC212","Mecanico","","","4","2","R13-C","activo");
INSERT INTO `inventario` VALUES("354","R000UC214","Rodamiento UC214","Mecanico","","","4","2","R14-C","activo");
INSERT INTO `inventario` VALUES("355","R00YAR203","Rodamiento YAR203","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("356","R00YAR204","Rodamiento YAR204","Mecanico","","","2","2","R15-C","activo");
INSERT INTO `inventario` VALUES("357","R00YAR205","Rodamiento YAR205","Mecanico","","","3","2","R15-C","activo");
INSERT INTO `inventario` VALUES("358","R00YAR206","Rodamiento YAR206","Mecanico","","","4","2","R15-C","activo");
INSERT INTO `inventario` VALUES("359","R00YAR207","Rodamiento YAR207","Mecanico","YAR 207-104-2F (d. interior 31.75 mm) - \n\nYAR 207-2F (d. interior 35 mm)","207-104 Rolo Trimpuller","7","2","R16-C","activo");
INSERT INTO `inventario` VALUES("360","R00YAR209","Rodamiento YAR209","Mecanico","","","2","2","R13-D","activo");
INSERT INTO `inventario` VALUES("361","R00YAR212","Rodamiento YAR212","Mecanico","","","2","2","R14-D","activo");
INSERT INTO `inventario` VALUES("362","R00YAR214","Rodamiento YAR214","Mecanico","","","4","2","R15-D","activo");
INSERT INTO `inventario` VALUES("363","R00YET208","Rodamiento YET208","Mecanico","","","4","2","R12-D","activo");
INSERT INTO `inventario` VALUES("364","R00029620","Rodamiento 29620","Mecanico","Pista Interior","","3","2","R13-E","activo");
INSERT INTO `inventario` VALUES("365","R00034478","Rodamiento 34478","Mecanico","Pista Interior","","4","2","R5-F","activo");
INSERT INTO `inventario` VALUES("366","R0000H311","Rodamiento H311","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("367","R000H2311","Rodamiento H2311","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("368","MP000040","Manguera de presion ","Mecanico","40 cm","","8","2","","activo");
INSERT INTO `inventario` VALUES("369","MP000045","Manguera de presion ","Mecanico","45 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("370","MP000050","Manguera de presion ","Mecanico","50 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("371","MP000055","Manguera de presion ","Mecanico","55 cm","","1","2","","activo");
INSERT INTO `inventario` VALUES("372","MP000070","Manguera de presion ","Mecanico","70 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("373","MP000073","Manguera de presion ","Mecanico","73 cm","","3","2","","activo");
INSERT INTO `inventario` VALUES("374","MP000082","Manguera de presion ","Mecanico","82 cm","","1","2","","activo");
INSERT INTO `inventario` VALUES("375","MP000112","Manguera de presion ","Mecanico","112 cm","","4","2","","activo");
INSERT INTO `inventario` VALUES("376","MP000114","Manguera de presion ","Mecanico","114 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("377","MP000116","Manguera de presion ","Mecanico","116 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("378","MP000128","Manguera de presion ","Mecanico","128 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("379","MP000170","Manguera de presion ","Mecanico","170 cm","","1","2","","activo");
INSERT INTO `inventario` VALUES("380","MP000186","Manguera de presion ","Mecanico","186 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("381","MP000210","Manguera de presion ","Mecanico","210 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("382","MP000220","Manguera de presion ","Mecanico","220 cm","","1","2","","activo");
INSERT INTO `inventario` VALUES("383","R00006214","Rodamiento 6214","Mecanico","","Picadora C","4","1","R15-B","activo");
INSERT INTO `inventario` VALUES("384","C00000B62","Correa B62","Mecanico","","Soplador Pulpo L5","7","2","C36","activo");
INSERT INTO `inventario` VALUES("385","C00000A28","Correa A28","Mecanico","","","10","2","C1","activo");
INSERT INTO `inventario` VALUES("386","C00000A79","Correa A79","Mecanico","","","9","2","C2","activo");
INSERT INTO `inventario` VALUES("387","C00000B28","Correa B28","Mecanico","","","6","2","C2","activo");
INSERT INTO `inventario` VALUES("388","C00000B60","Correa B60","Mecanico","","","6","2","C3","activo");
INSERT INTO `inventario` VALUES("389","C00000B69","Correa B69","Mecanico","","","5","2","C3","activo");
INSERT INTO `inventario` VALUES("390","C00000B70","Correa B70","Mecanico","","","20","2","C4","activo");
INSERT INTO `inventario` VALUES("391","C00000A40","Correa A40","Mecanico","","","2","1","C5","activo");
INSERT INTO `inventario` VALUES("392","C00000A42","Correa A42","Mecanico","","","10","2","C5","activo");
INSERT INTO `inventario` VALUES("393","C00000B42","Correa B42","Mecanico","","","8","2","C6","activo");
INSERT INTO `inventario` VALUES("394","C00000A61","Correa A61","Mecanico","","","7","2","C7","activo");
INSERT INTO `inventario` VALUES("396","C00000A82","Correa A82","Mecanico","","","4","2","C8","activo");
INSERT INTO `inventario` VALUES("397","C00000A83","Correa A83","Mecanico","","","6","2","C8","activo");
INSERT INTO `inventario` VALUES("398","C00000B54","Correa B54","Mecanico","","","4","2","C8","activo");
INSERT INTO `inventario` VALUES("399","C00000B53","Correa B53","Mecanico","","Trimpuller Winder L6","8","2","C9","activo");
INSERT INTO `inventario` VALUES("400","C00DH1000","Correa DH1000","Mecanico","","","3","1","C10","activo");
INSERT INTO `inventario` VALUES("401","C000DH750","Correa DH750","Mecanico","","","4","1","C11","activo");
INSERT INTO `inventario` VALUES("402","C0000H750","Correa H750","Mecanico","","","2","1","C12","activo");
INSERT INTO `inventario` VALUES("403","C0000H900","Correa H900","Mecanico","","","4","1","C12","activo");
INSERT INTO `inventario` VALUES("404","C0000H510","Correa H510","Mecanico","","","9","1","C13","activo");
INSERT INTO `inventario` VALUES("405","C0000H480","Correa H480","Mecanico","","","7","2","C14","activo");
INSERT INTO `inventario` VALUES("406","C0000H540","Correa H540","Mecanico","","","6","2","C16","activo");
INSERT INTO `inventario` VALUES("407","C0000B148","Correa B148","Mecanico","","","12","2","C17","activo");
INSERT INTO `inventario` VALUES("408","C00000B39","Correa B39","Mecanico","","","4","2","C18","activo");
INSERT INTO `inventario` VALUES("409","C00000B56","Correa B56","Mecanico","","","6","2","C19","activo");
INSERT INTO `inventario` VALUES("410","C05VX1120","Correa 5VX1120","Mecanico","","Picadora Grande","8","2","C20","activo");
INSERT INTO `inventario` VALUES("411","C005V1120","Correa 5V1120","Mecanico","","Picadora Grande","16","8","C20","activo");
INSERT INTO `inventario` VALUES("412","C005VX950","Correa 5VX950","Mecanico","","","12","2","C21","activo");
INSERT INTO `inventario` VALUES("413","C005VX900","Correa 5VX900","Mecanico","","","6","2","C22","activo");
INSERT INTO `inventario` VALUES("414","C0005V900","Correa 5V900","Mecanico","","","6","2","C22","activo");
INSERT INTO `inventario` VALUES("415","C00000B31","Correa B31","Mecanico","","Alimentacion L5","1","4","C23","activo");
INSERT INTO `inventario` VALUES("416","C00000C94","Correa C94","Mecanico","","","5","2","C24","activo");
INSERT INTO `inventario` VALUES("417","C00000A85","Correa A85","Mecanico","","Extractor Humo L3","1","2","C8","activo");
INSERT INTO `inventario` VALUES("418","C0000B128","Correa B128","Mecanico","","Motor Extrusor L3","1","6","C25","activo");
INSERT INTO `inventario` VALUES("419","C00000B36","Correa B36","Mecanico","","Alimentacion L4","10","2","C29","activo");
INSERT INTO `inventario` VALUES("420","C003VX800","Correa 3VX800","Mecanico","","","14","2","C30","activo");
INSERT INTO `inventario` VALUES("421","C0003V800","Correa 3V800","Mecanico","","","5","2","C30","activo");
INSERT INTO `inventario` VALUES("422","C00000C99","Correa C99","Mecanico","","","11","2","C29","activo");
INSERT INTO `inventario` VALUES("423","C00000A53","Correa A53","Mecanico","","","4","2","C31","activo");
INSERT INTO `inventario` VALUES("424","C003VX400","Correa 3VX400","Mecanico","","","9","2","C32","activo");
INSERT INTO `inventario` VALUES("425","C0003V400","Correa 3V400","Mecanico","","","9","2","C32","activo");
INSERT INTO `inventario` VALUES("426","C005V1000","Correa 5V1000","Mecanico","","","9","2","C33","activo");
INSERT INTO `inventario` VALUES("427","C05VX1000","Correa 5VX1000","Mecanico","","","4","2","C33","activo");
INSERT INTO `inventario` VALUES("428","C005V1500","Correa 5V1500","Mecanico","","","16","2","C34","activo");
INSERT INTO `inventario` VALUES("430","C00000B83","Correa B83","Mecanico","","","11","2","C35","activo");
INSERT INTO `inventario` VALUES("431","C00000B61","Correa B61","Mecanico","","","6","2","C36","activo");
INSERT INTO `inventario` VALUES("432","C0005V850","Correa 5V850","Mecanico","","","7","2","C37","activo");
INSERT INTO `inventario` VALUES("433","C0000195L","Correa 195L","Mecanico","","","2","2","C38","activo");
INSERT INTO `inventario` VALUES("434","C0000255L","Correa 255L","Mecanico","","","4","2","C38","activo");
INSERT INTO `inventario` VALUES("435","C003VX750","Correa 3VX750","Mecanico","","","4","2","C38","activo");
INSERT INTO `inventario` VALUES("436","C0003V560","Correa 3V560","Mecanico","","","3","2","C38","activo");
INSERT INTO `inventario` VALUES("437","C003VX560","Correa 3VX560","Mecanico","","","2","2","C38","activo");
INSERT INTO `inventario` VALUES("438","C0000B173","Correa B173","Mecanico","","Paletizadora","7","2","C39","activo");
INSERT INTO `inventario` VALUES("439","C0000C128","Correa C128","Mecanico","","","1","2","C40","activo");
INSERT INTO `inventario` VALUES("440","C0000B174","Correa B174","Mecanico","","","6","2","C41","activo");
INSERT INTO `inventario` VALUES("441","C0005V710","Correa 5V710","Mecanico","","","6","2","C26","activo");
INSERT INTO `inventario` VALUES("442","C005VX710","Correa 5VX710","Mecanico","","","8","2","C26","activo");
INSERT INTO `inventario` VALUES("443","C00002990","Correa 2990","Mecanico","","","8","2","C42","activo");
INSERT INTO `inventario` VALUES("444","C005VX750","Correa 5VX750","Mecanico","","","10","2","C27","activo");
INSERT INTO `inventario` VALUES("445","R00032012","Rodamiento 32012","Mecanico","","Husillo Refiladora","1","1","R17-E","activo");
INSERT INTO `inventario` VALUES("446","C0000H450","Correa H450","Mecanico","","","6","2","C15","activo");
INSERT INTO `inventario` VALUES("447","C0000H390","Correa H390","Mecanico","","","2","2","C15","activo");
INSERT INTO `inventario` VALUES("448","C0000H330","Correa H330","Mecanico","","Alimentacion L7","3","2","C15","activo");
INSERT INTO `inventario` VALUES("449","C00000A38","Correa A38","Mecanico","","Aspiradora","3","2","","activo");
INSERT INTO `inventario` VALUES("450","R00005204","Rodamiento 5204","Mecanico","","","0","2","R2-B","activo");
INSERT INTO `inventario` VALUES("451","R00034293","Rodamiento 34293","Mecanico","","Rolos Primario e Intermiedio","4","2","R1-G","activo");



DROP TABLE IF EXISTS `listaequipos`;

CREATE TABLE `listaequipos` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `EQUIPO` varchar(50) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `listaequipos` VALUES("1","171660","Motor 20Hp Bomba de Vacio Aux");
INSERT INTO `listaequipos` VALUES("8","171631","Reductor para Winder");
INSERT INTO `listaequipos` VALUES("9","161556","Reductor Husillo Refiladora");
INSERT INTO `listaequipos` VALUES("10","171653","Reductor Para Winders");



DROP TABLE IF EXISTS `movimientos`;

CREATE TABLE `movimientos` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `FECHA` varchar(10) NOT NULL,
  `CODIGO` varchar(20) NOT NULL,
  `REPUESTO` text NOT NULL,
  `ESTADO` varchar(10) NOT NULL,
  `CANTIDAD` int(100) NOT NULL,
  `USER` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=392 DEFAULT CHARSET=utf8;

INSERT INTO `movimientos` VALUES("124","14-03-2017","R00001205","Rodamiento 1205","Ingreso","2","");
INSERT INTO `movimientos` VALUES("125","14-03-2025","R00002212","Rodamiento 2212","Ingreso","1","");
INSERT INTO `movimientos` VALUES("126","14-03-2035","R00006000","Rodamiento 6000","Ingreso","1","");
INSERT INTO `movimientos` VALUES("127","14-03-2043","R00006008","Rodamiento 6008","Ingreso","1","");
INSERT INTO `movimientos` VALUES("128","14-03-2084","R00016006","Rodamiento 16006","Ingreso","1","");
INSERT INTO `movimientos` VALUES("129","14-03-2085","R00021311","Rodamiento 21311","Ingreso","1","");
INSERT INTO `movimientos` VALUES("130","14-03-2092","R00030306","Rodamiento 30306","Ingreso","1","");
INSERT INTO `movimientos` VALUES("131","14-03-2102","R00051108","Rodamiento 51108","Ingreso","1","");
INSERT INTO `movimientos` VALUES("132","14-03-2110","R000NU209","Rodamiento NU209","Ingreso","1","");
INSERT INTO `movimientos` VALUES("133","14-03-2121","R000UC206","Rodamiento UC206","Ingreso","1","");
INSERT INTO `movimientos` VALUES("134","14-03-2130","R00YAR209","Rodamiento YAR209","Ingreso","1","");
INSERT INTO `movimientos` VALUES("135","14-03-2034","R00005205","Rodamiento 5205","Ingreso","2","");
INSERT INTO `movimientos` VALUES("136","14-03-2060","R00006209","Rodamiento 6209","Ingreso","2","");
INSERT INTO `movimientos` VALUES("137","14-03-2065","R00006215","Rodamiento 6215","Ingreso","2","");
INSERT INTO `movimientos` VALUES("138","14-03-2070","R00006308","Rodamiento 6308","Ingreso","2","");
INSERT INTO `movimientos` VALUES("139","14-03-2071","R00006309","Rodamiento 6309","Ingreso","2","");
INSERT INTO `movimientos` VALUES("140","14-03-2076","R00006801","Rodamiento 6801","Ingreso","2","");
INSERT INTO `movimientos` VALUES("141","14-03-2081","R00007209","Rodamiento 7209","Ingreso","2","");
INSERT INTO `movimientos` VALUES("142","14-03-2082","R00007309","Rodamiento 7309","Ingreso","2","");
INSERT INTO `movimientos` VALUES("143","14-03-2097","R00032207","Rodamiento 32207","Ingreso","2","");
INSERT INTO `movimientos` VALUES("144","14-03-2106","R1308ETN9","Rodamiento 1308-ETN9","Ingreso","2","");
INSERT INTO `movimientos` VALUES("145","14-03-2117","R000R8LLU","Rodamiento R8LLU","Ingreso","2","");
INSERT INTO `movimientos` VALUES("146","14-03-2126","R00YAR204","Rodamiento YAR204","Ingreso","2","");
INSERT INTO `movimientos` VALUES("147","14-03-2131","R00YAR212","Rodamiento YAR212","Ingreso","2","");
INSERT INTO `movimientos` VALUES("148","14-03-2018","R00002200","Rodamiento 2200","Ingreso","3","");
INSERT INTO `movimientos` VALUES("149","14-03-2020","R00002207","Rodamiento 2207","Ingreso","3","");
INSERT INTO `movimientos` VALUES("150","14-03-2021","R00002208","Rodamiento 2208","Ingreso","3","");
INSERT INTO `movimientos` VALUES("151","14-03-2023","R00002210","Rodamiento 2210","Ingreso","3","");
INSERT INTO `movimientos` VALUES("152","14-03-2029","R00003205","Rodamiento 3205","Ingreso","3","");
INSERT INTO `movimientos` VALUES("153","14-03-2031","R00003310","Rodamiento 3310","Ingreso","3","");
INSERT INTO `movimientos` VALUES("154","14-03-2032","R00004208","Rodamiento 4208","Ingreso","3","");
INSERT INTO `movimientos` VALUES("155","14-03-2038","R00006003","Rodamiento 6003","Ingreso","3","");
INSERT INTO `movimientos` VALUES("156","14-03-2045","R00006011","Rodamiento 6011","Ingreso","3","");
INSERT INTO `movimientos` VALUES("157","14-03-2047","R00006014","Rodamiento 6014","Ingreso","3","");
INSERT INTO `movimientos` VALUES("158","14-03-2049","R00006016","Rodamiento 6016","Ingreso","3","");
INSERT INTO `movimientos` VALUES("159","14-03-2062","R00006211","Rodamiento 6211","Ingreso","3","");
INSERT INTO `movimientos` VALUES("160","14-03-2068","R00006306","Rodamiento 6306","Ingreso","3","");
INSERT INTO `movimientos` VALUES("161","14-03-2069","R00006307","Rodamiento 6307","Ingreso","3","");
INSERT INTO `movimientos` VALUES("162","14-03-2074","R00006315","Rodamiento 6315","Ingreso","3","");
INSERT INTO `movimientos` VALUES("163","14-03-2080","R00007208","Rodamiento 7208","Ingreso","3","");
INSERT INTO `movimientos` VALUES("164","14-03-2088","R00022213","Rodamiento 22213","Ingreso","3","");
INSERT INTO `movimientos` VALUES("165","14-03-2093","R00032006","Rodamiento 32006","Ingreso","3","");
INSERT INTO `movimientos` VALUES("166","14-03-2099","R00032213","Rodamiento 32213","Ingreso","3","");
INSERT INTO `movimientos` VALUES("167","14-03-2100","R00033010","Rodamiento 33010","Ingreso","3","");
INSERT INTO `movimientos` VALUES("168","14-03-2109","R000NJ308","Rodamiento NJ308","Ingreso","3","");
INSERT INTO `movimientos` VALUES("169","14-03-2111","R00NU210E","Rodamiento NU210E","Ingreso","3","");
INSERT INTO `movimientos` VALUES("170","14-03-2112","R00NU215E","Rodamiento NU215E","Ingreso","3","");
INSERT INTO `movimientos` VALUES("171","14-03-2114","R0NU217IN","Rodamiento NU217 Inner","Ingreso","3","");
INSERT INTO `movimientos` VALUES("172","14-03-2127","R00YAR205","Rodamiento YAR205","Ingreso","3","");
INSERT INTO `movimientos` VALUES("173","14-03-2134","R00029620","Rodamiento 29620","Ingreso","3","");
INSERT INTO `movimientos` VALUES("174","14-03-2022","R00002209","Rodamiento 2209","Ingreso","4","");
INSERT INTO `movimientos` VALUES("175","14-03-2024","R00002211","Rodamiento 2211","Ingreso","4","");
INSERT INTO `movimientos` VALUES("176","14-03-2026","R00002310","Rodamiento 2310","Ingreso","4","");
INSERT INTO `movimientos` VALUES("177","14-03-2048","R00006015","Rodamiento 6015","Ingreso","4","");
INSERT INTO `movimientos` VALUES("178","14-03-2057","R00006206","Rodamiento 6206","Ingreso","4","");
INSERT INTO `movimientos` VALUES("179","14-03-2058","R00006207","Rodamiento 6207","Ingreso","4","");
INSERT INTO `movimientos` VALUES("180","14-03-2066","R00006304","Rodamiento 6304","Ingreso","4","");
INSERT INTO `movimientos` VALUES("181","14-03-2072","R00006310","Rodamiento 6310","Ingreso","4","");
INSERT INTO `movimientos` VALUES("182","14-03-2073","R00006313","Rodamiento 6313","Ingreso","4","");
INSERT INTO `movimientos` VALUES("183","14-03-2075","R00006316","Rodamiento 6316","Ingreso","4","");
INSERT INTO `movimientos` VALUES("184","14-03-2083","R00016005","Rodamiento 16005","Ingreso","4","");
INSERT INTO `movimientos` VALUES("185","14-03-2086","R00022211","Rodamiento 22211","Ingreso","4","");
INSERT INTO `movimientos` VALUES("186","14-03-2087","R00022212","Rodamiento 22212","Ingreso","4","");
INSERT INTO `movimientos` VALUES("187","14-03-2089","R00029685","Rodamiento 29685","Ingreso","4","");
INSERT INTO `movimientos` VALUES("188","14-03-2095","R00032008","Rodamiento 32008","Ingreso","4","");
INSERT INTO `movimientos` VALUES("189","14-03-2096","R00032010","Rodamiento 32010","Ingreso","4","");
INSERT INTO `movimientos` VALUES("190","14-03-2104","R00060002","Rodamiento 60002","Ingreso","4","");
INSERT INTO `movimientos` VALUES("191","14-03-2122","R000UC207","Rodamiento UC207","Ingreso","4","");
INSERT INTO `movimientos` VALUES("192","14-03-2123","R000UC212","Rodamiento UC212","Ingreso","4","");
INSERT INTO `movimientos` VALUES("193","14-03-2124","R000UC214","Rodamiento UC214","Ingreso","4","");
INSERT INTO `movimientos` VALUES("194","14-03-2128","R00YAR206","Rodamiento YAR206","Ingreso","4","");
INSERT INTO `movimientos` VALUES("195","14-03-2132","R00YAR214","Rodamiento YAR214","Ingreso","4","");
INSERT INTO `movimientos` VALUES("196","14-03-2133","R00YET208","Rodamiento YET208","Ingreso","4","");
INSERT INTO `movimientos` VALUES("197","14-03-2135","R00034478","Rodamiento 34478","Ingreso","4","");
INSERT INTO `movimientos` VALUES("198","14-03-2041","R00006006","Rodamiento 6006","Ingreso","5","");
INSERT INTO `movimientos` VALUES("199","14-03-2052","R00006201","Rodamiento 6201","Ingreso","5","");
INSERT INTO `movimientos` VALUES("200","14-03-2063","R00006212","Rodamiento 6212","Ingreso","5","");
INSERT INTO `movimientos` VALUES("201","14-03-2091","R00030305","Rodamiento 30305","Ingreso","5","");
INSERT INTO `movimientos` VALUES("202","14-03-2019","R00002202","Rodamiento 2202","Ingreso","6","");
INSERT INTO `movimientos` VALUES("203","14-03-2028","R00003204","Rodamiento 3204","Ingreso","6","");
INSERT INTO `movimientos` VALUES("204","14-03-2042","R00006007","Rodamiento 6007","Ingreso","6","");
INSERT INTO `movimientos` VALUES("205","14-03-2055","R00006204","Rodamiento 6204","Ingreso","6","");
INSERT INTO `movimientos` VALUES("206","14-03-2059","R00006208","Rodamiento 6208","Ingreso","6","");
INSERT INTO `movimientos` VALUES("207","14-03-2061","R00006210","Rodamiento 6210","Ingreso","6","");
INSERT INTO `movimientos` VALUES("208","14-03-2067","R00006305","Rodamiento 6305","Ingreso","6","");
INSERT INTO `movimientos` VALUES("209","14-03-2094","R00032007","Rodamiento 32007","Ingreso","6","");
INSERT INTO `movimientos` VALUES("210","14-03-2113","R000NU217","Rodamiento NU217","Ingreso","6","");
INSERT INTO `movimientos` VALUES("211","14-03-2118","R00000RL5","Rodamiento RLS5","Ingreso","6","");
INSERT INTO `movimientos` VALUES("212","14-03-2129","R00YAR207","Rodamiento YAR207","Ingreso","6","");
INSERT INTO `movimientos` VALUES("213","14-03-2040","R00006005","Rodamiento 6005","Ingreso","7","");
INSERT INTO `movimientos` VALUES("214","14-03-2046","R00006012","Rodamiento 6012","Ingreso","7","");
INSERT INTO `movimientos` VALUES("215","14-03-2053","R00006202","Rodamiento 6202","Ingreso","7","");
INSERT INTO `movimientos` VALUES("216","14-03-2054","R00006203","Rodamiento 6203","Ingreso","7","");
INSERT INTO `movimientos` VALUES("217","14-03-2064","R00006213","Rodamiento 6213","Ingreso","7","");
INSERT INTO `movimientos` VALUES("218","14-03-2105","R00062206","Rodamiento 62206","Ingreso","7","");
INSERT INTO `movimientos` VALUES("219","14-03-2030","R00003308","Rodamiento 3308","Ingreso","8","");
INSERT INTO `movimientos` VALUES("220","14-03-2056","R00006205","Rodamiento 6205","Ingreso","8","");
INSERT INTO `movimientos` VALUES("221","14-03-2090","R00030210","Rodamiento 30210","Ingreso","8","");
INSERT INTO `movimientos` VALUES("222","14-03-2039","R00006004","Rodamiento 6004","Ingreso","9","");
INSERT INTO `movimientos` VALUES("223","14-03-2037","R00006002","Rodamiento 6002","Ingreso","10","");
INSERT INTO `movimientos` VALUES("224","14-03-2077","R00006803","Rodamiento 6803","Ingreso","10","");
INSERT INTO `movimientos` VALUES("225","14-03-2044","R00006010","Rodamiento 6010","Ingreso","17","");
INSERT INTO `movimientos` VALUES("226","14-03-2079","R00006901","Rodamiento 6901","Ingreso","19","");
INSERT INTO `movimientos` VALUES("227","14-03-2036","R00006001","Rodamiento 6001","Ingreso","23","");
INSERT INTO `movimientos` VALUES("228","14-03-2078","R00006804","Rodamiento 6804","Ingreso","23","");
INSERT INTO `movimientos` VALUES("229","14-03-2017","MP000040","Manguera de presion ","Ingreso","8","");
INSERT INTO `movimientos` VALUES("230","14-03-2018","MP000045","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("231","14-03-2019","MP000050","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("232","14-03-2020","MP000055","Manguera de presion ","Ingreso","1","");
INSERT INTO `movimientos` VALUES("233","14-03-2021","MP000070","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("234","14-03-2022","MP000073","Manguera de presion ","Ingreso","3","");
INSERT INTO `movimientos` VALUES("235","14-03-2023","MP000082","Manguera de presion ","Ingreso","1","");
INSERT INTO `movimientos` VALUES("236","14-03-2024","MP000112","Manguera de presion ","Ingreso","4","");
INSERT INTO `movimientos` VALUES("237","14-03-2025","MP000114","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("238","14-03-2026","MP000116","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("239","14-03-2027","MP000128","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("240","14-03-2028","MP000170","Manguera de presion ","Ingreso","1","");
INSERT INTO `movimientos` VALUES("241","14-03-2029","MP000186","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("242","14-03-2030","MP000210","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("243","14-03-2031","MP000220","Manguera de presion ","Ingreso","1","");
INSERT INTO `movimientos` VALUES("244","31-03-2017","R00006214","Rodamiento 6214","Ingreso","1","pescriba");
INSERT INTO `movimientos` VALUES("245","29-03-2017","R00003204","Rodamiento 3204","Egreso","2","msantillan");
INSERT INTO `movimientos` VALUES("246","31-03-2017","R00006214","Rodamiento 6214","Egreso","1","agomez");
INSERT INTO `movimientos` VALUES("247","10-04-2017","R00003310","Rodamiento 3310","Ingreso","3","dpino");
INSERT INTO `movimientos` VALUES("248","10-04-2017","R00006214","Rodamiento 6214","Ingreso","2","dpino");
INSERT INTO `movimientos` VALUES("249","10-04-2017","R00006203","Rodamiento 6203","Ingreso","1","DPINO");
INSERT INTO `movimientos` VALUES("250","10-04-2017","R00006008","Rodamiento 6008","Ingreso","5","DPINO");
INSERT INTO `movimientos` VALUES("251","10-04-2017","R0000R8ZZ","Rodamiento R8ZZ","Ingreso","2","DPINO");
INSERT INTO `movimientos` VALUES("252","10-04-2017","R000UC207","Rodamiento UC207","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("253","10-04-2017","R000UC207","Rodamiento UC207","Ingreso","1","pescriba");
INSERT INTO `movimientos` VALUES("254","10-04-2017","R00006002","Rodamiento 6002","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("255","10-04-2017","r00006205","Rodamiento 6205","Egreso","2","pescriba");
INSERT INTO `movimientos` VALUES("256","10-04-2017","r00006205","Rodamiento 6205","Egreso","2","pescriba");
INSERT INTO `movimientos` VALUES("257","10-04-2017","R00YAR207","Rodamiento YAR207","Egreso","2","gsaavedra");
INSERT INTO `movimientos` VALUES("258","11-04-2017","R00006006","Rodamiento 6006","Ingreso","1","pescriba");
INSERT INTO `movimientos` VALUES("259","11-04-2017","C00000B62","Correa B62","Ingreso","9","pescriba");
INSERT INTO `movimientos` VALUES("260","11-04-2017","C00000A28","Correa A28","Ingreso","10","pescriba");
INSERT INTO `movimientos` VALUES("261","11-04-2017","C00000A79","Correa A79","Ingreso","9","pescriba");
INSERT INTO `movimientos` VALUES("262","11-04-2017","C00000B28","Correa B28","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("263","11-04-2017","C00000B60","Correa B60","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("264","11-04-2017","C00000B69","Correa B69","Ingreso","5","pescriba");
INSERT INTO `movimientos` VALUES("265","11-04-2017","C00000B70","Correa B70","Ingreso","20","pescriba");
INSERT INTO `movimientos` VALUES("266","11-04-2017","C00000A40","Correa A40","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("267","11-04-2017","C00000A42","Correa A42","Ingreso","10","pescriba");
INSERT INTO `movimientos` VALUES("268","11-04-2017","C00000B42","Correa B42","Ingreso","8","pescriba");
INSERT INTO `movimientos` VALUES("269","11-04-2017","C00000A61","Correa A61","Ingreso","7","pescriba");
INSERT INTO `movimientos` VALUES("270","11-04-2017","C00000B54","Correa B54","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("271","11-04-2017","C00000A82","Correa A82","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("272","11-04-2017","C00000A83","Correa A83","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("274","11-04-2017","C00000B53","Correa B53","Ingreso","14","pescriba");
INSERT INTO `movimientos` VALUES("275","11-04-2017","C00DH1000","Correa DH1000","Ingreso","3","pescriba");
INSERT INTO `movimientos` VALUES("276","11-04-2017","C000DH750","Correa DH750","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("277","11-04-2017","C0000H750","Correa H750","Ingreso","3","pescriba");
INSERT INTO `movimientos` VALUES("278","11-04-2017","C0000H900","Correa H900","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("279","11-04-2017","C0000H510","Correa H510","Ingreso","10","pescriba");
INSERT INTO `movimientos` VALUES("280","11-04-2017","C0000H480","Correa H480","Ingreso","7","pescriba");
INSERT INTO `movimientos` VALUES("281","11-04-2017","C0000H540","Correa H540","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("282","11-04-2017","C0000B148","Correa B148","Ingreso","12","pescriba");
INSERT INTO `movimientos` VALUES("283","11-04-2017","C00000B39","Correa B39","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("284","11-04-2017","C00000B56","Correa B56","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("285","11-04-2017","C05VX1120","Correa 5VX1120","Ingreso","8","pescriba");
INSERT INTO `movimientos` VALUES("286","11-04-2017","C005V1120","Correa 5V1120","Ingreso","16","pescriba");
INSERT INTO `movimientos` VALUES("287","11-04-2017","C005VX950","Correa 5VX950","Ingreso","10","pescriba");
INSERT INTO `movimientos` VALUES("288","11-04-2017","C005VX900","Correa 5VX900","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("289","11-04-2017","C0005V900","Correa 5V900","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("290","11-04-2017","C005VX950","Correa 5VX950","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("291","11-04-2017","C00000B31","Correa B31","Ingreso","7","pescriba");
INSERT INTO `movimientos` VALUES("292","11-04-2017","C00000C94","Correa C94","Ingreso","5","pescriba");
INSERT INTO `movimientos` VALUES("293","11-04-2017","C00000A85","Correa A85","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("294","11-04-2017","c00000a85","Correa A85","Egreso","1","agomez");
INSERT INTO `movimientos` VALUES("295","12-04-2017","C00000B62","Correa B62","Egreso","2","agomez");
INSERT INTO `movimientos` VALUES("296","13-04-2017","C0000B128","Correa B128","Ingreso","7","pescriba");
INSERT INTO `movimientos` VALUES("297","13-04-2017","C00000B36","Correa B36","Ingreso","12","pescriba");
INSERT INTO `movimientos` VALUES("298","13-04-2017","C003VX800","Correa 3VX800","Ingreso","14","pescriba");
INSERT INTO `movimientos` VALUES("299","13-04-2017","C0003V800","Correa 3V800","Ingreso","5","pescriba");
INSERT INTO `movimientos` VALUES("300","13-04-2017","C00000C99","Correa C99","Ingreso","11","pescriba");
INSERT INTO `movimientos` VALUES("301","13-04-2017","C00000A53","Correa A53","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("302","13-04-2017","C003VX400","Correa 3VX400","Ingreso","9","pescriba");
INSERT INTO `movimientos` VALUES("303","13-04-2017","C0003V400","Correa 3V400","Ingreso","9","pescriba");
INSERT INTO `movimientos` VALUES("304","13-04-2017","C005V1000","Correa 5V1000","Ingreso","9","pescriba");
INSERT INTO `movimientos` VALUES("305","13-04-2017","C05VX1000","Correa 5VX1000","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("306","13-04-2017","C005V1500","Correa 5V1500","Ingreso","16","pescriba");
INSERT INTO `movimientos` VALUES("308","13-04-2017","C00000B83","Correa B83","Ingreso","11","pescriba");
INSERT INTO `movimientos` VALUES("309","13-04-2017","C00000B61","Correa B61","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("310","13-04-2017","C0005V850","Correa 5V850","Ingreso","7","pescriba");
INSERT INTO `movimientos` VALUES("311","13-04-2017","C0000195L","Correa 195L","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("312","13-04-2017","C0000255L","Correa 255L","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("313","13-04-2017","C003VX750","Correa 3VX750","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("314","13-04-2017","C0003V560","Correa 3V560","Ingreso","3","pescriba");
INSERT INTO `movimientos` VALUES("315","13-04-2017","C003VX560","Correa 3VX560","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("316","13-04-2017","C0000B173","Correa B173","Ingreso","8","pescriba");
INSERT INTO `movimientos` VALUES("317","13-04-2017","C0000C128","Correa C128","Ingreso","1","pescriba");
INSERT INTO `movimientos` VALUES("318","13-04-2017","C0000B174","Correa B174","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("319","13-04-2017","C0005V710","Correa 5V710","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("320","13-04-2017","C005VX710","Correa 5VX710","Ingreso","8","pescriba");
INSERT INTO `movimientos` VALUES("321","13-04-2017","C00002990","Correa 2990","Ingreso","8","pescriba");
INSERT INTO `movimientos` VALUES("322","13-04-2017","C005VX750","Correa 5VX750","Ingreso","10","pescriba");
INSERT INTO `movimientos` VALUES("323","13-04-2017","C0000B173","Correa B173","Egreso","1","agomez");
INSERT INTO `movimientos` VALUES("324","18-04-2017","R00006214","Rodamiento 6214","Ingreso","2","dpino");
INSERT INTO `movimientos` VALUES("325","20-04-2017","C0000B128","Correa B128","Egreso","2","dpino");
INSERT INTO `movimientos` VALUES("326","20-04-2017","C0000B128","Correa B128","Egreso","4","dpino");
INSERT INTO `movimientos` VALUES("327","24-04-2017","C00000B36","Correa B36","Egreso","2","dpino");
INSERT INTO `movimientos` VALUES("328","25-04-2017","R00006005","Rodamiento 6005","Egreso","1","fdelgado");
INSERT INTO `movimientos` VALUES("329","25-04-2017","R00006006","Rodamiento 6006","Egreso","2","fdelgado");
INSERT INTO `movimientos` VALUES("330","28-04-2017","R00006305","Rodamiento 6305","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("331","28-04-2017","R00006305","Rodamiento 6305","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("332","28-04-2017","C0000H750","Correa H750","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("333","01-05-2017","C00000B53","Correa B53","Egreso","2","fdelgado");
INSERT INTO `movimientos` VALUES("334","02-05-2017","C00000B53","Correa B53","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("335","02-05-2017","C00000B53","Correa B53","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("336","02-05-2017","C00000B53","Correa B53","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("337","09-05-2017","R00003204","Rodamiento 3204","Egreso","2","fdelgado");
INSERT INTO `movimientos` VALUES("338","09-05-2017","R00006012","Rodamiento 6012","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("339","09-05-2017","R00003204","Rodamiento 3204","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("340","10-05-2017","R00003204","Rodamiento 3204","Ingreso","3","dpino");
INSERT INTO `movimientos` VALUES("341","10-05-2017","R0000R8ZZ","Rodamiento R8ZZ","Ingreso","10","dpino");
INSERT INTO `movimientos` VALUES("342","18-05-2017","R00002209","Rodamiento 2209","Egreso","2","agomez");
INSERT INTO `movimientos` VALUES("343","27-05-2017","R00002209","Rodamiento 2209","Egreso","1","fdelgado");
INSERT INTO `movimientos` VALUES("344","26-05-2017","R00032012","Rodamiento 32012","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("345","27-05-2017","R00032012","Rodamiento 32012","Egreso","1","hmanrrique");
INSERT INTO `movimientos` VALUES("346","30-05-2017","R000R8LLU","Rodamiento R8LLU","Ingreso","1","dpino");
INSERT INTO `movimientos` VALUES("347","30-05-2017","R000R8LLU","Rodamiento R8LLU","Ingreso","11","dpino");
INSERT INTO `movimientos` VALUES("348","30-05-2017","R00YAR209","Rodamiento YAR209","Ingreso","2","dpino");
INSERT INTO `movimientos` VALUES("349","30-05-2017","R00YAR209","Rodamiento YAR209","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("350","30-05-2017","R00YAR212","Rodamiento YAR212","Egreso","2","pescriba");
INSERT INTO `movimientos` VALUES("351","31-05-2017","C00000B31","Correa B31","Egreso","2","agomez");
INSERT INTO `movimientos` VALUES("352","31-05-2017","C0000H450","Correa H450","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("353","31-05-2017","C0000H390","Correa H390","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("354","31-05-2017","C0000H330","Correa H330","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("355","31-05-2017","c0000h330","Correa H330","Egreso","1","pescriba");
INSERT INTO `movimientos` VALUES("356","01-06-2017","R00006200","Rodamiento 6200","Ingreso","4","dpino");
INSERT INTO `movimientos` VALUES("357","01-06-2017","R00002209","Rodamiento 2209","Ingreso","3","dpino");
INSERT INTO `movimientos` VALUES("358","01-06-2017","R00032210","Rodamiento 32210","Ingreso","1","dpino");
INSERT INTO `movimientos` VALUES("360","01-06-2017","R00YAR212","Rodamiento YAR212","Ingreso","1","dpino");
INSERT INTO `movimientos` VALUES("361","01-06-2017","R00YAR212","Rodamiento YAR212","Ingreso","1","dpino");
INSERT INTO `movimientos` VALUES("362","01-06-2017","R00002209","Rodamiento 2209","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("364","02-06-2017","C00000A38","Correa A38","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("365","02-06-2017","C00000A38","Correa A38","Egreso","3","pescriba");
INSERT INTO `movimientos` VALUES("366","02-06-2017","R00006209","Rodamiento 6209","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("367","08-06-2017","R00005204","Rodamiento 5204","Ingreso","3","pescriba");
INSERT INTO `movimientos` VALUES("368","08-06-2017","R00034293","Rodamiento 34293","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("369","11-06-2017","R00006203","Rodamiento 6203","Egreso","1","fdelgado");
INSERT INTO `movimientos` VALUES("370","11-06-2017","R00006203","Rodamiento 6203","Egreso","1","fdelgado");
INSERT INTO `movimientos` VALUES("371","13-06-2017","R00006010","Rodamiento 6010","Egreso","1","DPINO");
INSERT INTO `movimientos` VALUES("372","27-06-2017","R000R8LLU","Rodamiento R8LLU","Egreso","2","fdelgado");
INSERT INTO `movimientos` VALUES("373","28-06-2017","C00000B31","Correa B31","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("374","28-06-2017","C00000B31","Correa B31","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("375","28-06-2017","C00000B31","Correa B31","Egreso","2","agomez");
INSERT INTO `movimientos` VALUES("376","28-06-2017","R00006213","Rodamiento 6213","Egreso","2","hmanrique");
INSERT INTO `movimientos` VALUES("377","28-06-2017","R00002209","Rodamiento 2209","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("378","04-07-2017","R00002209","Rodamiento 2209","Egreso","2","hmanrique");
INSERT INTO `movimientos` VALUES("379","05-07-2017","C00000B53","Correa B53","Egreso","1","hmanrique");
INSERT INTO `movimientos` VALUES("380","27-06-2017","R0000R8ZZ","Rodamiento R8ZZ","Egreso","2","fdelgado");
INSERT INTO `movimientos` VALUES("381","07-07-2017","R0000R8ZZ","Rodamiento R8ZZ","Egreso","2","gsaavedra");
INSERT INTO `movimientos` VALUES("383","28-06-2017","C0000H510","Correa H510","Egreso","1","msantillan");
INSERT INTO `movimientos` VALUES("384","11-06-2017","R00005204","Rodamiento 5204","Egreso","1","msantillan");
INSERT INTO `movimientos` VALUES("385","23-06-2017","R00005204","Rodamiento 5204","Egreso","1","gsaavedra");
INSERT INTO `movimientos` VALUES("386","13-06-2017","R00002200","Rodamiento 2200","Egreso","1","hmanrique");
INSERT INTO `movimientos` VALUES("387","07-07-2017","R000UC207","Rodamiento UC207","Egreso","2","wpino");
INSERT INTO `movimientos` VALUES("388","11-07-2017","R00005204","Rodamiento 5204","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("389","11-07-2017","R00003204","Rodamiento 3204","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("390","11-07-2017","R00YAR207","Rodamiento YAR207","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("391","11-07-2017","R00YAR207","Rodamiento YAR207","Ingreso","4","pescriba");



DROP TABLE IF EXISTS `ot`;

CREATE TABLE `ot` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `OT` int(10) NOT NULL,
  `MOTIVO` varchar(50) NOT NULL,
  `SECTOR` varchar(50) NOT NULL,
  `PARTE` text NOT NULL,
  `HACCP` varchar(2) NOT NULL,
  `TAREA` text NOT NULL,
  `RESPUESTA` text NOT NULL,
  `MATERIALES` text NOT NULL,
  `ANULACION` text NOT NULL,
  `LUBRICANTE` varchar(50) NOT NULL,
  `LOTE` varchar(50) NOT NULL,
  `PERSONAL` text NOT NULL,
  `HORAS` int(3) NOT NULL,
  `FINICIO` varchar(10) NOT NULL,
  `FFIN` varchar(10) NOT NULL,
  `ANO` varchar(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

INSERT INTO `ot` VALUES("1","0","","","","","","","","","","","0","0","","","");
INSERT INTO `ot` VALUES("6","1","","L5","","NO","Cambiar correas de alimentacion","Realizado OK","","","Ninguno","","0","1","14-08-2017","19-10-2017","2017");
INSERT INTO `ot` VALUES("7","2","","Mezcladora","Conjunto Primario","NO","Engrasar Rolo de Goma de Primaria","Realizado OK","","","Nevastane XMF2","25035"," F.Delgado A.Gomez","1","14-08-2017","19-10-2017","2017");
INSERT INTO `ot` VALUES("8","2","","L4","Conjunto Primario","NO","Engrasar Rolo de Goma de Primaria","Realizado OK","","","Nevastane XMF2","25035"," F.Delgado A.Gomez","1","14-08-2017","19-10-2017","2017");
INSERT INTO `ot` VALUES("9","2","","L4","Conjunto Primario","NO","Engrasar Rolo de Goma de Primaria","Realizado OK","","","Nevastane XMF2","25035"," G.Saavedra A.Gomez","1","14-08-2017","19-10-2017","2017");
INSERT INTO `ot` VALUES("10","3","Preventivo","L5","","NO","Cambiar correas de alimentacion","Realizado OK","","","Ninguno",""," G.Saavedra A.Gomez","1","14-08-2017","19-10-2017","2017");
INSERT INTO `ot` VALUES("11","4","Correctivo No Programado","","Winder A","NO","Se cambio rolito de aluminio","Realizado OK","2 Rodamientos yar 205-100","","Nevastane XMF2",""," M.Santillan H.Manrique","1","20-10-2017","20-10-2017","2017");
INSERT INTO `ot` VALUES("12","5","Correctivo No Programado","L7","Matriz","NO","Nada","Realizado OK","","","Ninguno",""," A.Gomez","1","20-10-2017","20-10-2017","2017");
INSERT INTO `ot` VALUES("13","6","Correctivo No Programado","L3","Primario","NO","","Realizado OK","","","Ninguno","","","1","20-10-2017","20-10-2017","2017");
INSERT INTO `ot` VALUES("14","7","Correctivo No Programado","L3","Primario","NO","","Realizado OK","","","Ninguno","","","1","20-10-2017","20-10-2017","2017");
INSERT INTO `ot` VALUES("15","8","Correctivo No Programado","L3","Primario","NO","","Realizado OK","","","Ninguno","","","1","20-10-2017","20-10-2017","2017");
INSERT INTO `ot` VALUES("16","9","Correctivo No Programado","L3","5","NO","","Realizado OK","","","Ninguno","","","1","20-10-2017","20-10-2017","2017");
INSERT INTO `ot` VALUES("17","10","Preventivo","Bobinadora","","NO","Engrasar la bobinadora completa","Realizado OK","","","Ninguno",""," M.Santillan H.Manrique","1","20/10/2017","23-10-2017","2017");



DROP TABLE IF EXISTS `pedidodecompra`;

CREATE TABLE `pedidodecompra` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `FECHA` varchar(10) NOT NULL,
  `PEDIDO` varchar(10) NOT NULL,
  `CODIGO` varchar(10) NOT NULL,
  `PRODUCTO` text NOT NULL,
  `TIPO` varchar(20) NOT NULL,
  `OBSERVACION` text NOT NULL,
  `CANTIDAD` int(3) NOT NULL,
  `CAN.ENTREGADA` int(11) NOT NULL,
  `ENTREGADO` varchar(10) NOT NULL,
  `INICIADOR` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS `pedidos`;

CREATE TABLE `pedidos` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `PEDIDO` text NOT NULL,
  `SECTOR` varchar(50) NOT NULL,
  `FINICIO` varchar(10) NOT NULL,
  `FFIN` varchar(10) NOT NULL,
  `PERSONA` varchar(20) NOT NULL,
  `REALIZADO` varchar(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf32;

INSERT INTO `pedidos` VALUES("1","Colocar tapa correa en L3","L3","09-08-2017","0000-00-00","F. Urbina","NO");
INSERT INTO `pedidos` VALUES("2","Colocar tapa correa en L5","L5","09-08-2017","0000-00-00","F. Urbina","SI");
INSERT INTO `pedidos` VALUES("5","Poner tapa de correa de extrusor","L3","15/08/2017","","Guzman","NO");
INSERT INTO `pedidos` VALUES("6","Reparar Cuadro","Rotomac","29/09/2017","29/09/2017","P. Escriba","SI");
INSERT INTO `pedidos` VALUES("7","Cambiar correa de Alimentacion","L7","23/10/2017","23/10/2017","O. Guzman","SI");



DROP TABLE IF EXISTS `tareas`;

CREATE TABLE `tareas` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `TAREA` text NOT NULL,
  `SECTOR` varchar(50) NOT NULL,
  `PARTE` varchar(50) NOT NULL,
  `FINICIO` varchar(10) NOT NULL,
  `FFIN` varchar(10) NOT NULL,
  `TIPO` text NOT NULL,
  `REALIZADO` varchar(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf32;

INSERT INTO `tareas` VALUES("1","Cambiar correas de alimentacion","L5","","14-08-2017","19-10-2017","Preventivo","SI");
INSERT INTO `tareas` VALUES("2","Engrasar Rolo de Goma de Primaria","L4","","14-08-2017","19-10-2017","Correctivo Programado","SI");
INSERT INTO `tareas` VALUES("3","Engrasar la bobinadora completa","L3","Bobinadora","20/10/2017","23-10-2017","Preventivo","SI");



DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `USER` varchar(20) NOT NULL,
  `PWD` varchar(12) NOT NULL,
  `PERMISOS` int(1) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` VALUES("1","admin","admin","0","");
INSERT INTO `usuarios` VALUES("2","jvalverde","1234","0","");
INSERT INTO `usuarios` VALUES("3","pescriba","1234","0","");
INSERT INTO `usuarios` VALUES("4","gsanchez","1234","0","");
INSERT INTO `usuarios` VALUES("5","asilva","1234","0","");
INSERT INTO `usuarios` VALUES("6","dpino","1234","1","");
INSERT INTO `usuarios` VALUES("7","wpino","1234","2","");
INSERT INTO `usuarios` VALUES("8","agomez","1234","2","");
INSERT INTO `usuarios` VALUES("9","hmanrique","1234","2","");
INSERT INTO `usuarios` VALUES("10","fdelgado","1234","2","");
INSERT INTO `usuarios` VALUES("11","gsaavedra","1234","2","");
INSERT INTO `usuarios` VALUES("12","msantillan","1234","2","");
INSERT INTO `usuarios` VALUES("13","rurbano","1234","2","");
INSERT INTO `usuarios` VALUES("14","srodriguez","1234","0","");
INSERT INTO `usuarios` VALUES("15","fcallens","1234","0","");



DROP TABLE IF EXISTS `usuariostareas`;

CREATE TABLE `usuariostareas` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `USER` varchar(20) NOT NULL,
  `PWD` varchar(12) NOT NULL,
  `PERMISOS` int(1) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf32;

INSERT INTO `usuariostareas` VALUES("1","oguzman","1234","0","O. Guzman");
INSERT INTO `usuariostareas` VALUES("2","furbina","1234","0","F. Urbina");
INSERT INTO `usuariostareas` VALUES("3","pescriba","1234","1","P. Escriba");
INSERT INTO `usuariostareas` VALUES("4","Supervisor","1234","0","Supervisor");
INSERT INTO `usuariostareas` VALUES("5","Mantenimiento","1234","1","Mantenimiento");
CREATE DATABASE IF NOT EXISTS `packallmtto`;

USE packallmtto;

DROP TABLE IF EXISTS `equipos`;

CREATE TABLE `equipos` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `EQUIPO` varchar(50) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `FECHA` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `equipos` VALUES("1","171660","Calo lleva motor para reparar ya que se caen las vueltas cuando se pone en funcionamiento.","13-10-2017");
INSERT INTO `equipos` VALUES("5","171631","Se cambio retenes, y se coloco aceite EP460","27-09-2017");
INSERT INTO `equipos` VALUES("6","171631","Se coloco en Winder A de L4","19-10-2017");
INSERT INTO `equipos` VALUES("7","171653","Se colocan 2 rodamientos nuevos 6009 y 2 retenes nuevos 40-55-8. Se arma con corona de bornce nueva.","19-10-2017");



DROP TABLE IF EXISTS `inventario`;

CREATE TABLE `inventario` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `CODIGO` varchar(10) NOT NULL,
  `REPUESTO` text NOT NULL,
  `TIPO` varchar(20) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `USO` text NOT NULL,
  `CANTIDAD` int(100) NOT NULL,
  `CANTMIN` int(10) NOT NULL,
  `UBICACION` varchar(10) NOT NULL,
  `ESTADO` varchar(200) NOT NULL DEFAULT 'activo',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=452 DEFAULT CHARSET=utf8;

INSERT INTO `inventario` VALUES("247","R00001205","Rodamiento 1205","Mecanico","","","2","2","R2-A","activo");
INSERT INTO `inventario` VALUES("248","R00002200","Rodamiento 2200","Mecanico","","","2","2","R3-A","activo");
INSERT INTO `inventario` VALUES("249","R00002202","Rodamiento 2202","Mecanico","","","6","2","R4-A","activo");
INSERT INTO `inventario` VALUES("250","R00002207","Rodamiento 2207","Mecanico","","","3","2","R5-A","activo");
INSERT INTO `inventario` VALUES("251","R00002208","Rodamiento 2208","Mecanico","","","3","2","R6-A","activo");
INSERT INTO `inventario` VALUES("252","R00002209","Rodamiento 2209","Mecanico","Rolo ranurado L3","","3","2","R7-A","activo");
INSERT INTO `inventario` VALUES("253","R00002210","Rodamiento 2210","Mecanico","","","3","2","R9-A","activo");
INSERT INTO `inventario` VALUES("254","R00002211","Rodamiento 2211","Mecanico","","","4","2","R10-A","activo");
INSERT INTO `inventario` VALUES("255","R00002212","Rodamiento 2212","Mecanico","","","1","2","R11-A","activo");
INSERT INTO `inventario` VALUES("256","R00002310","Rodamiento 2310","Mecanico","","","4","2","R12-A","activo");
INSERT INTO `inventario` VALUES("257","R00002710","Rodamiento 2710","Mecanico","","","0","2","R13-A","activo");
INSERT INTO `inventario` VALUES("258","R00003204","Rodamiento 3204","Mecanico","Reemplazo 5204","Portatubos L3","8","2","R14-A","activo");
INSERT INTO `inventario` VALUES("259","R00003205","Rodamiento 3205","Mecanico","","","3","2","R15-A","activo");
INSERT INTO `inventario` VALUES("260","R00003308","Rodamiento 3308","Mecanico","","","8","2","R16-A","activo");
INSERT INTO `inventario` VALUES("261","R00003310","Rodamiento 3310","Mecanico","","","6","2","R17-A","activo");
INSERT INTO `inventario` VALUES("262","R00004208","Rodamiento 4208","Mecanico","","","3","2","R1-B","activo");
INSERT INTO `inventario` VALUES("263","R00004312","Rodamiento 4312","Mecanico","","","0","2","R2-B","activo");
INSERT INTO `inventario` VALUES("264","R00005205","Rodamiento 5205","Mecanico","","","2","2","R3-B","activo");
INSERT INTO `inventario` VALUES("265","R00006000","Rodamiento 6000","Mecanico","","","1","2","R4-B","activo");
INSERT INTO `inventario` VALUES("266","R00006001","Rodamiento 6001","Mecanico","","","23","2","R4-B","activo");
INSERT INTO `inventario` VALUES("267","R00006002","Rodamiento 6002","Mecanico","","","12","2","R5-B","activo");
INSERT INTO `inventario` VALUES("268","R00006003","Rodamiento 6003","Mecanico","","","3","2","R6-B","activo");
INSERT INTO `inventario` VALUES("269","R00006004","Rodamiento 6004","Mecanico","","","9","2","R6-B","activo");
INSERT INTO `inventario` VALUES("270","R00006005","Rodamiento 6005","Mecanico","","","6","2","R7-B","activo");
INSERT INTO `inventario` VALUES("271","R00006006","Rodamiento 6006","Mecanico","","","4","2","R7-B","activo");
INSERT INTO `inventario` VALUES("272","R00006007","Rodamiento 6007","Mecanico","","","6","2","R8-B","activo");
INSERT INTO `inventario` VALUES("273","R00006008","Rodamiento 6008","Mecanico","","","6","2","R9-B","activo");
INSERT INTO `inventario` VALUES("274","R00006010","Rodamiento 6010","Mecanico","","Rotomac ","16","2","R10-B","activo");
INSERT INTO `inventario` VALUES("275","R00006011","Rodamiento 6011","Mecanico","","","3","2","R11-B","activo");
INSERT INTO `inventario` VALUES("276","R00006012","Rodamiento 6012","Mecanico","","","6","2","R1-C","activo");
INSERT INTO `inventario` VALUES("277","R00006014","Rodamiento 6014","Mecanico","","","3","2","R2-C","activo");
INSERT INTO `inventario` VALUES("278","R00006015","Rodamiento 6015","Mecanico","","","4","2","R3-C","activo");
INSERT INTO `inventario` VALUES("279","R00006016","Rodamiento 6016","Mecanico","","","3","2","R4-C","activo");
INSERT INTO `inventario` VALUES("280","R00006029","Rodamiento 6029","Mecanico","","","0","2","R5-C","activo");
INSERT INTO `inventario` VALUES("281","R00006200","Rodamiento 6200","Mecanico","","","4","2","R5-C","activo");
INSERT INTO `inventario` VALUES("282","R00006201","Rodamiento 6201","Mecanico","","","5","2","R6-C","activo");
INSERT INTO `inventario` VALUES("283","R00006202","Rodamiento 6202","Mecanico","","","7","2","R6-C","activo");
INSERT INTO `inventario` VALUES("284","R00006203","Rodamiento 6203","Mecanico","","","6","2","R7-C","activo");
INSERT INTO `inventario` VALUES("285","R00006204","Rodamiento 6204","Mecanico","","","6","2","R7-C","activo");
INSERT INTO `inventario` VALUES("286","R00006205","Rodamiento 6205","Mecanico","","","4","2","R8-C","activo");
INSERT INTO `inventario` VALUES("287","R00006206","Rodamiento 6206","Mecanico","","","4","2","R8-C","activo");
INSERT INTO `inventario` VALUES("288","R00006207","Rodamiento 6207","Mecanico","","","4","2","R9-C","activo");
INSERT INTO `inventario` VALUES("289","R00006208","Rodamiento 6208","Mecanico","","","6","2","R10-C","activo");
INSERT INTO `inventario` VALUES("290","R00006209","Rodamiento 6209","Mecanico","","","4","2","R11-C","activo");
INSERT INTO `inventario` VALUES("291","R00006210","Rodamiento 6210","Mecanico","","","6","2","R1-D","activo");
INSERT INTO `inventario` VALUES("292","R00006211","Rodamiento 6211","Mecanico","","","3","2","R2-D","activo");
INSERT INTO `inventario` VALUES("293","R00006212","Rodamiento 6212","Mecanico","","","5","2","R3-D","activo");
INSERT INTO `inventario` VALUES("294","R00006213","Rodamiento 6213","Mecanico","","Picadora A","5","2","R4-D","activo");
INSERT INTO `inventario` VALUES("295","R00006215","Rodamiento 6215","Mecanico","","","2","2","R5-D","activo");
INSERT INTO `inventario` VALUES("296","R00006304","Rodamiento 6304","Mecanico","","","4","2","R6-D","activo");
INSERT INTO `inventario` VALUES("297","R00006305","Rodamiento 6305","Mecanico","","","4","2","R6-D","activo");
INSERT INTO `inventario` VALUES("298","R00006306","Rodamiento 6306","Mecanico","","","3","2","R7-D","activo");
INSERT INTO `inventario` VALUES("299","R00006307","Rodamiento 6307","Mecanico","","","3","2","R8-D","activo");
INSERT INTO `inventario` VALUES("300","R00006308","Rodamiento 6308","Mecanico","","","2","2","R9-D","activo");
INSERT INTO `inventario` VALUES("301","R00006309","Rodamiento 6309","Mecanico","","","2","2","R10-D","activo");
INSERT INTO `inventario` VALUES("302","R00006310","Rodamiento 6310","Mecanico","","","4","2","R11-D","activo");
INSERT INTO `inventario` VALUES("303","R00006313","Rodamiento 6313","Mecanico","","","4","2","R1-E","activo");
INSERT INTO `inventario` VALUES("304","R00006315","Rodamiento 6315","Mecanico","","","3","2","R2-E","activo");
INSERT INTO `inventario` VALUES("305","R00006316","Rodamiento 6316","Mecanico","","","4","2","R3-E","activo");
INSERT INTO `inventario` VALUES("306","R00006801","Rodamiento 6801","Mecanico","","","2","2","R4-E","activo");
INSERT INTO `inventario` VALUES("307","R00006803","Rodamiento 6803","Mecanico","","","10","2","R4-E","activo");
INSERT INTO `inventario` VALUES("308","R00006804","Rodamiento 6804","Mecanico","","","23","2","R5-E","activo");
INSERT INTO `inventario` VALUES("309","R00006901","Rodamiento 6901","Mecanico","","","19","2","R5-E","activo");
INSERT INTO `inventario` VALUES("310","R00007208","Rodamiento 7208","Mecanico","","","3","2","R6-E","activo");
INSERT INTO `inventario` VALUES("311","R00007209","Rodamiento 7209","Mecanico","","","2","2","R7-E","activo");
INSERT INTO `inventario` VALUES("312","R00007309","Rodamiento 7309","Mecanico","","","2","2","R8-E","activo");
INSERT INTO `inventario` VALUES("313","R00016005","Rodamiento 16005","Mecanico","","","4","2","R9-E","activo");
INSERT INTO `inventario` VALUES("314","R00016006","Rodamiento 16006","Mecanico","","","1","2","R9-E","activo");
INSERT INTO `inventario` VALUES("315","R00021311","Rodamiento 21311","Mecanico","","","1","2","R10-E","activo");
INSERT INTO `inventario` VALUES("316","R00022211","Rodamiento 22211","Mecanico","","","4","2","R10-E","activo");
INSERT INTO `inventario` VALUES("317","R00022212","Rodamiento 22212","Mecanico","","","4","2","R11-E","activo");
INSERT INTO `inventario` VALUES("318","R00022213","Rodamiento 22213","Mecanico","","","3","2","R12-E","activo");
INSERT INTO `inventario` VALUES("319","R00029685","Rodamiento 29685","Mecanico","","","4","2","R13-E","activo");
INSERT INTO `inventario` VALUES("320","R00030210","Rodamiento 30210","Mecanico","","","8","2","R14-E","activo");
INSERT INTO `inventario` VALUES("321","R00030305","Rodamiento 30305","Mecanico","","","5","2","R15-E","activo");
INSERT INTO `inventario` VALUES("322","R00030306","Rodamiento 30306","Mecanico","","","1","2","R15-E","activo");
INSERT INTO `inventario` VALUES("323","R00032006","Rodamiento 32006","Mecanico","","","3","2","R16-E","activo");
INSERT INTO `inventario` VALUES("324","R00032007","Rodamiento 32007","Mecanico","","","6","2","R16-E","activo");
INSERT INTO `inventario` VALUES("325","R00032008","Rodamiento 32008","Mecanico","","","4","2","R17-E","activo");
INSERT INTO `inventario` VALUES("326","R00032010","Rodamiento 32010","Mecanico","","","4","2","R17-E","activo");
INSERT INTO `inventario` VALUES("327","R00032207","Rodamiento 32207","Mecanico","","","2","2","R1-F","activo");
INSERT INTO `inventario` VALUES("328","R00032210","Rodamiento 32210","Mecanico","","","1","2","R2-F","activo");
INSERT INTO `inventario` VALUES("329","R00032213","Rodamiento 32213","Mecanico","","","3","2","R3-F","activo");
INSERT INTO `inventario` VALUES("330","R00033010","Rodamiento 33010","Mecanico","","","3","2","R4-F","activo");
INSERT INTO `inventario` VALUES("331","R00034293","Rodamiento 34293","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("332","R00051108","Rodamiento 51108","Mecanico","","","1","2","R6-F","activo");
INSERT INTO `inventario` VALUES("333","R00051117","Rodamiento 51117","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("334","R00060002","Rodamiento 60002","Mecanico","","","4","2","R7-F","activo");
INSERT INTO `inventario` VALUES("335","R00062206","Rodamiento 62206","Mecanico","","","7","2","R7-F","activo");
INSERT INTO `inventario` VALUES("336","R1308ETN9","Rodamiento 1308-ETN9","Mecanico","","","2","2","R1-A","activo");
INSERT INTO `inventario` VALUES("337","R002N1010","Rodamiento 2N1010","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("338","R000ES17M","Rodamiento ES-17-M","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("339","R000NJ308","Rodamiento NJ308","Mecanico","","","3","2","","activo");
INSERT INTO `inventario` VALUES("340","R000NU209","Rodamiento NU209","Mecanico","","","1","2","R9-F","activo");
INSERT INTO `inventario` VALUES("341","R00NU210E","Rodamiento NU210E","Mecanico","","","3","2","R10-F","activo");
INSERT INTO `inventario` VALUES("342","R00NU215E","Rodamiento NU215E","Mecanico","","","3","2","R11-F","activo");
INSERT INTO `inventario` VALUES("343","R000NU217","Rodamiento NU217","Mecanico","","","6","2","R12-B","activo");
INSERT INTO `inventario` VALUES("344","R0NU217IN","Rodamiento NU217 Inner","Mecanico","Pista Interna","","3","2","R12-B","activo");
INSERT INTO `inventario` VALUES("345","R000NU308","Rodamiento NU308","Mecanico","","","0","2","R8-F","activo");
INSERT INTO `inventario` VALUES("346","R0000R8ZZ","Rodamiento R8ZZ","Mecanico","","Rolito Tiras - PuntaTurret PRO","8","8","R13-B","activo");
INSERT INTO `inventario` VALUES("347","R000R8LLU","Rodamiento R8LLU","Mecanico","","Rolito Tiras - PuntaTurret PRO","12","2","R13-B","inactivo");
INSERT INTO `inventario` VALUES("348","R00000RL5","Rodamiento RLS5","Mecanico","","","6","2","R13-B","activo");
INSERT INTO `inventario` VALUES("349","R000UC204","Rodamiento UC204","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("350","R000UC205","Rodamiento UC205","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("351","R000UC206","Rodamiento UC206","Mecanico","","","1","2","R14-B","activo");
INSERT INTO `inventario` VALUES("352","R000UC207","Rodamiento UC207","Mecanico","","","5","2","R12-C","activo");
INSERT INTO `inventario` VALUES("353","R000UC212","Rodamiento UC212","Mecanico","","","4","2","R13-C","activo");
INSERT INTO `inventario` VALUES("354","R000UC214","Rodamiento UC214","Mecanico","","","4","2","R14-C","activo");
INSERT INTO `inventario` VALUES("355","R00YAR203","Rodamiento YAR203","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("356","R00YAR204","Rodamiento YAR204","Mecanico","","","2","2","R15-C","activo");
INSERT INTO `inventario` VALUES("357","R00YAR205","Rodamiento YAR205","Mecanico","","","3","2","R15-C","activo");
INSERT INTO `inventario` VALUES("358","R00YAR206","Rodamiento YAR206","Mecanico","","","4","2","R15-C","activo");
INSERT INTO `inventario` VALUES("359","R00YAR207","Rodamiento YAR207","Mecanico","YAR 207-104-2F (d. interior 31.75 mm) - \n\nYAR 207-2F (d. interior 35 mm)","207-104 Rolo Trimpuller","7","2","R16-C","activo");
INSERT INTO `inventario` VALUES("360","R00YAR209","Rodamiento YAR209","Mecanico","","","2","2","R13-D","activo");
INSERT INTO `inventario` VALUES("361","R00YAR212","Rodamiento YAR212","Mecanico","","","2","2","R14-D","activo");
INSERT INTO `inventario` VALUES("362","R00YAR214","Rodamiento YAR214","Mecanico","","","4","2","R15-D","activo");
INSERT INTO `inventario` VALUES("363","R00YET208","Rodamiento YET208","Mecanico","","","4","2","R12-D","activo");
INSERT INTO `inventario` VALUES("364","R00029620","Rodamiento 29620","Mecanico","Pista Interior","","3","2","R13-E","activo");
INSERT INTO `inventario` VALUES("365","R00034478","Rodamiento 34478","Mecanico","Pista Interior","","4","2","R5-F","activo");
INSERT INTO `inventario` VALUES("366","R0000H311","Rodamiento H311","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("367","R000H2311","Rodamiento H2311","Mecanico","","","0","2","","activo");
INSERT INTO `inventario` VALUES("368","MP000040","Manguera de presion ","Mecanico","40 cm","","8","2","","activo");
INSERT INTO `inventario` VALUES("369","MP000045","Manguera de presion ","Mecanico","45 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("370","MP000050","Manguera de presion ","Mecanico","50 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("371","MP000055","Manguera de presion ","Mecanico","55 cm","","1","2","","activo");
INSERT INTO `inventario` VALUES("372","MP000070","Manguera de presion ","Mecanico","70 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("373","MP000073","Manguera de presion ","Mecanico","73 cm","","3","2","","activo");
INSERT INTO `inventario` VALUES("374","MP000082","Manguera de presion ","Mecanico","82 cm","","1","2","","activo");
INSERT INTO `inventario` VALUES("375","MP000112","Manguera de presion ","Mecanico","112 cm","","4","2","","activo");
INSERT INTO `inventario` VALUES("376","MP000114","Manguera de presion ","Mecanico","114 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("377","MP000116","Manguera de presion ","Mecanico","116 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("378","MP000128","Manguera de presion ","Mecanico","128 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("379","MP000170","Manguera de presion ","Mecanico","170 cm","","1","2","","activo");
INSERT INTO `inventario` VALUES("380","MP000186","Manguera de presion ","Mecanico","186 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("381","MP000210","Manguera de presion ","Mecanico","210 cm","","2","2","","activo");
INSERT INTO `inventario` VALUES("382","MP000220","Manguera de presion ","Mecanico","220 cm","","1","2","","activo");
INSERT INTO `inventario` VALUES("383","R00006214","Rodamiento 6214","Mecanico","","Picadora C","4","1","R15-B","activo");
INSERT INTO `inventario` VALUES("384","C00000B62","Correa B62","Mecanico","","Soplador Pulpo L5","7","2","C36","activo");
INSERT INTO `inventario` VALUES("385","C00000A28","Correa A28","Mecanico","","","10","2","C1","activo");
INSERT INTO `inventario` VALUES("386","C00000A79","Correa A79","Mecanico","","","9","2","C2","activo");
INSERT INTO `inventario` VALUES("387","C00000B28","Correa B28","Mecanico","","","6","2","C2","activo");
INSERT INTO `inventario` VALUES("388","C00000B60","Correa B60","Mecanico","","","6","2","C3","activo");
INSERT INTO `inventario` VALUES("389","C00000B69","Correa B69","Mecanico","","","5","2","C3","activo");
INSERT INTO `inventario` VALUES("390","C00000B70","Correa B70","Mecanico","","","20","2","C4","activo");
INSERT INTO `inventario` VALUES("391","C00000A40","Correa A40","Mecanico","","","2","1","C5","activo");
INSERT INTO `inventario` VALUES("392","C00000A42","Correa A42","Mecanico","","","10","2","C5","activo");
INSERT INTO `inventario` VALUES("393","C00000B42","Correa B42","Mecanico","","","8","2","C6","activo");
INSERT INTO `inventario` VALUES("394","C00000A61","Correa A61","Mecanico","","","7","2","C7","activo");
INSERT INTO `inventario` VALUES("396","C00000A82","Correa A82","Mecanico","","","4","2","C8","activo");
INSERT INTO `inventario` VALUES("397","C00000A83","Correa A83","Mecanico","","","6","2","C8","activo");
INSERT INTO `inventario` VALUES("398","C00000B54","Correa B54","Mecanico","","","4","2","C8","activo");
INSERT INTO `inventario` VALUES("399","C00000B53","Correa B53","Mecanico","","Trimpuller Winder L6","8","2","C9","activo");
INSERT INTO `inventario` VALUES("400","C00DH1000","Correa DH1000","Mecanico","","","3","1","C10","activo");
INSERT INTO `inventario` VALUES("401","C000DH750","Correa DH750","Mecanico","","","4","1","C11","activo");
INSERT INTO `inventario` VALUES("402","C0000H750","Correa H750","Mecanico","","","2","1","C12","activo");
INSERT INTO `inventario` VALUES("403","C0000H900","Correa H900","Mecanico","","","4","1","C12","activo");
INSERT INTO `inventario` VALUES("404","C0000H510","Correa H510","Mecanico","","","9","1","C13","activo");
INSERT INTO `inventario` VALUES("405","C0000H480","Correa H480","Mecanico","","","7","2","C14","activo");
INSERT INTO `inventario` VALUES("406","C0000H540","Correa H540","Mecanico","","","6","2","C16","activo");
INSERT INTO `inventario` VALUES("407","C0000B148","Correa B148","Mecanico","","","12","2","C17","activo");
INSERT INTO `inventario` VALUES("408","C00000B39","Correa B39","Mecanico","","","4","2","C18","activo");
INSERT INTO `inventario` VALUES("409","C00000B56","Correa B56","Mecanico","","","6","2","C19","activo");
INSERT INTO `inventario` VALUES("410","C05VX1120","Correa 5VX1120","Mecanico","","Picadora Grande","8","2","C20","activo");
INSERT INTO `inventario` VALUES("411","C005V1120","Correa 5V1120","Mecanico","","Picadora Grande","16","8","C20","activo");
INSERT INTO `inventario` VALUES("412","C005VX950","Correa 5VX950","Mecanico","","","12","2","C21","activo");
INSERT INTO `inventario` VALUES("413","C005VX900","Correa 5VX900","Mecanico","","","6","2","C22","activo");
INSERT INTO `inventario` VALUES("414","C0005V900","Correa 5V900","Mecanico","","","6","2","C22","activo");
INSERT INTO `inventario` VALUES("415","C00000B31","Correa B31","Mecanico","","Alimentacion L5","1","4","C23","activo");
INSERT INTO `inventario` VALUES("416","C00000C94","Correa C94","Mecanico","","","5","2","C24","activo");
INSERT INTO `inventario` VALUES("417","C00000A85","Correa A85","Mecanico","","Extractor Humo L3","1","2","C8","activo");
INSERT INTO `inventario` VALUES("418","C0000B128","Correa B128","Mecanico","","Motor Extrusor L3","1","6","C25","activo");
INSERT INTO `inventario` VALUES("419","C00000B36","Correa B36","Mecanico","","Alimentacion L4","10","2","C29","activo");
INSERT INTO `inventario` VALUES("420","C003VX800","Correa 3VX800","Mecanico","","","14","2","C30","activo");
INSERT INTO `inventario` VALUES("421","C0003V800","Correa 3V800","Mecanico","","","5","2","C30","activo");
INSERT INTO `inventario` VALUES("422","C00000C99","Correa C99","Mecanico","","","11","2","C29","activo");
INSERT INTO `inventario` VALUES("423","C00000A53","Correa A53","Mecanico","","","4","2","C31","activo");
INSERT INTO `inventario` VALUES("424","C003VX400","Correa 3VX400","Mecanico","","","9","2","C32","activo");
INSERT INTO `inventario` VALUES("425","C0003V400","Correa 3V400","Mecanico","","","9","2","C32","activo");
INSERT INTO `inventario` VALUES("426","C005V1000","Correa 5V1000","Mecanico","","","9","2","C33","activo");
INSERT INTO `inventario` VALUES("427","C05VX1000","Correa 5VX1000","Mecanico","","","4","2","C33","activo");
INSERT INTO `inventario` VALUES("428","C005V1500","Correa 5V1500","Mecanico","","","16","2","C34","activo");
INSERT INTO `inventario` VALUES("430","C00000B83","Correa B83","Mecanico","","","11","2","C35","activo");
INSERT INTO `inventario` VALUES("431","C00000B61","Correa B61","Mecanico","","","6","2","C36","activo");
INSERT INTO `inventario` VALUES("432","C0005V850","Correa 5V850","Mecanico","","","7","2","C37","activo");
INSERT INTO `inventario` VALUES("433","C0000195L","Correa 195L","Mecanico","","","2","2","C38","activo");
INSERT INTO `inventario` VALUES("434","C0000255L","Correa 255L","Mecanico","","","4","2","C38","activo");
INSERT INTO `inventario` VALUES("435","C003VX750","Correa 3VX750","Mecanico","","","4","2","C38","activo");
INSERT INTO `inventario` VALUES("436","C0003V560","Correa 3V560","Mecanico","","","3","2","C38","activo");
INSERT INTO `inventario` VALUES("437","C003VX560","Correa 3VX560","Mecanico","","","2","2","C38","activo");
INSERT INTO `inventario` VALUES("438","C0000B173","Correa B173","Mecanico","","Paletizadora","7","2","C39","activo");
INSERT INTO `inventario` VALUES("439","C0000C128","Correa C128","Mecanico","","","1","2","C40","activo");
INSERT INTO `inventario` VALUES("440","C0000B174","Correa B174","Mecanico","","","6","2","C41","activo");
INSERT INTO `inventario` VALUES("441","C0005V710","Correa 5V710","Mecanico","","","6","2","C26","activo");
INSERT INTO `inventario` VALUES("442","C005VX710","Correa 5VX710","Mecanico","","","8","2","C26","activo");
INSERT INTO `inventario` VALUES("443","C00002990","Correa 2990","Mecanico","","","8","2","C42","activo");
INSERT INTO `inventario` VALUES("444","C005VX750","Correa 5VX750","Mecanico","","","10","2","C27","activo");
INSERT INTO `inventario` VALUES("445","R00032012","Rodamiento 32012","Mecanico","","Husillo Refiladora","1","1","R17-E","activo");
INSERT INTO `inventario` VALUES("446","C0000H450","Correa H450","Mecanico","","","6","2","C15","activo");
INSERT INTO `inventario` VALUES("447","C0000H390","Correa H390","Mecanico","","","2","2","C15","activo");
INSERT INTO `inventario` VALUES("448","C0000H330","Correa H330","Mecanico","","Alimentacion L7","3","2","C15","activo");
INSERT INTO `inventario` VALUES("449","C00000A38","Correa A38","Mecanico","","Aspiradora","3","2","","activo");
INSERT INTO `inventario` VALUES("450","R00005204","Rodamiento 5204","Mecanico","","","0","2","R2-B","activo");
INSERT INTO `inventario` VALUES("451","R00034293","Rodamiento 34293","Mecanico","","Rolos Primario e Intermiedio","4","2","R1-G","activo");



DROP TABLE IF EXISTS `listaequipos`;

CREATE TABLE `listaequipos` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `EQUIPO` varchar(50) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `listaequipos` VALUES("1","171660","Motor 20Hp Bomba de Vacio Aux");
INSERT INTO `listaequipos` VALUES("8","171631","Reductor para Winder");
INSERT INTO `listaequipos` VALUES("9","161556","Reductor Husillo Refiladora");
INSERT INTO `listaequipos` VALUES("10","171653","Reductor Para Winders");



DROP TABLE IF EXISTS `movimientos`;

CREATE TABLE `movimientos` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `FECHA` varchar(10) NOT NULL,
  `CODIGO` varchar(20) NOT NULL,
  `REPUESTO` text NOT NULL,
  `ESTADO` varchar(10) NOT NULL,
  `CANTIDAD` int(100) NOT NULL,
  `USER` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=392 DEFAULT CHARSET=utf8;

INSERT INTO `movimientos` VALUES("124","14-03-2017","R00001205","Rodamiento 1205","Ingreso","2","");
INSERT INTO `movimientos` VALUES("125","14-03-2025","R00002212","Rodamiento 2212","Ingreso","1","");
INSERT INTO `movimientos` VALUES("126","14-03-2035","R00006000","Rodamiento 6000","Ingreso","1","");
INSERT INTO `movimientos` VALUES("127","14-03-2043","R00006008","Rodamiento 6008","Ingreso","1","");
INSERT INTO `movimientos` VALUES("128","14-03-2084","R00016006","Rodamiento 16006","Ingreso","1","");
INSERT INTO `movimientos` VALUES("129","14-03-2085","R00021311","Rodamiento 21311","Ingreso","1","");
INSERT INTO `movimientos` VALUES("130","14-03-2092","R00030306","Rodamiento 30306","Ingreso","1","");
INSERT INTO `movimientos` VALUES("131","14-03-2102","R00051108","Rodamiento 51108","Ingreso","1","");
INSERT INTO `movimientos` VALUES("132","14-03-2110","R000NU209","Rodamiento NU209","Ingreso","1","");
INSERT INTO `movimientos` VALUES("133","14-03-2121","R000UC206","Rodamiento UC206","Ingreso","1","");
INSERT INTO `movimientos` VALUES("134","14-03-2130","R00YAR209","Rodamiento YAR209","Ingreso","1","");
INSERT INTO `movimientos` VALUES("135","14-03-2034","R00005205","Rodamiento 5205","Ingreso","2","");
INSERT INTO `movimientos` VALUES("136","14-03-2060","R00006209","Rodamiento 6209","Ingreso","2","");
INSERT INTO `movimientos` VALUES("137","14-03-2065","R00006215","Rodamiento 6215","Ingreso","2","");
INSERT INTO `movimientos` VALUES("138","14-03-2070","R00006308","Rodamiento 6308","Ingreso","2","");
INSERT INTO `movimientos` VALUES("139","14-03-2071","R00006309","Rodamiento 6309","Ingreso","2","");
INSERT INTO `movimientos` VALUES("140","14-03-2076","R00006801","Rodamiento 6801","Ingreso","2","");
INSERT INTO `movimientos` VALUES("141","14-03-2081","R00007209","Rodamiento 7209","Ingreso","2","");
INSERT INTO `movimientos` VALUES("142","14-03-2082","R00007309","Rodamiento 7309","Ingreso","2","");
INSERT INTO `movimientos` VALUES("143","14-03-2097","R00032207","Rodamiento 32207","Ingreso","2","");
INSERT INTO `movimientos` VALUES("144","14-03-2106","R1308ETN9","Rodamiento 1308-ETN9","Ingreso","2","");
INSERT INTO `movimientos` VALUES("145","14-03-2117","R000R8LLU","Rodamiento R8LLU","Ingreso","2","");
INSERT INTO `movimientos` VALUES("146","14-03-2126","R00YAR204","Rodamiento YAR204","Ingreso","2","");
INSERT INTO `movimientos` VALUES("147","14-03-2131","R00YAR212","Rodamiento YAR212","Ingreso","2","");
INSERT INTO `movimientos` VALUES("148","14-03-2018","R00002200","Rodamiento 2200","Ingreso","3","");
INSERT INTO `movimientos` VALUES("149","14-03-2020","R00002207","Rodamiento 2207","Ingreso","3","");
INSERT INTO `movimientos` VALUES("150","14-03-2021","R00002208","Rodamiento 2208","Ingreso","3","");
INSERT INTO `movimientos` VALUES("151","14-03-2023","R00002210","Rodamiento 2210","Ingreso","3","");
INSERT INTO `movimientos` VALUES("152","14-03-2029","R00003205","Rodamiento 3205","Ingreso","3","");
INSERT INTO `movimientos` VALUES("153","14-03-2031","R00003310","Rodamiento 3310","Ingreso","3","");
INSERT INTO `movimientos` VALUES("154","14-03-2032","R00004208","Rodamiento 4208","Ingreso","3","");
INSERT INTO `movimientos` VALUES("155","14-03-2038","R00006003","Rodamiento 6003","Ingreso","3","");
INSERT INTO `movimientos` VALUES("156","14-03-2045","R00006011","Rodamiento 6011","Ingreso","3","");
INSERT INTO `movimientos` VALUES("157","14-03-2047","R00006014","Rodamiento 6014","Ingreso","3","");
INSERT INTO `movimientos` VALUES("158","14-03-2049","R00006016","Rodamiento 6016","Ingreso","3","");
INSERT INTO `movimientos` VALUES("159","14-03-2062","R00006211","Rodamiento 6211","Ingreso","3","");
INSERT INTO `movimientos` VALUES("160","14-03-2068","R00006306","Rodamiento 6306","Ingreso","3","");
INSERT INTO `movimientos` VALUES("161","14-03-2069","R00006307","Rodamiento 6307","Ingreso","3","");
INSERT INTO `movimientos` VALUES("162","14-03-2074","R00006315","Rodamiento 6315","Ingreso","3","");
INSERT INTO `movimientos` VALUES("163","14-03-2080","R00007208","Rodamiento 7208","Ingreso","3","");
INSERT INTO `movimientos` VALUES("164","14-03-2088","R00022213","Rodamiento 22213","Ingreso","3","");
INSERT INTO `movimientos` VALUES("165","14-03-2093","R00032006","Rodamiento 32006","Ingreso","3","");
INSERT INTO `movimientos` VALUES("166","14-03-2099","R00032213","Rodamiento 32213","Ingreso","3","");
INSERT INTO `movimientos` VALUES("167","14-03-2100","R00033010","Rodamiento 33010","Ingreso","3","");
INSERT INTO `movimientos` VALUES("168","14-03-2109","R000NJ308","Rodamiento NJ308","Ingreso","3","");
INSERT INTO `movimientos` VALUES("169","14-03-2111","R00NU210E","Rodamiento NU210E","Ingreso","3","");
INSERT INTO `movimientos` VALUES("170","14-03-2112","R00NU215E","Rodamiento NU215E","Ingreso","3","");
INSERT INTO `movimientos` VALUES("171","14-03-2114","R0NU217IN","Rodamiento NU217 Inner","Ingreso","3","");
INSERT INTO `movimientos` VALUES("172","14-03-2127","R00YAR205","Rodamiento YAR205","Ingreso","3","");
INSERT INTO `movimientos` VALUES("173","14-03-2134","R00029620","Rodamiento 29620","Ingreso","3","");
INSERT INTO `movimientos` VALUES("174","14-03-2022","R00002209","Rodamiento 2209","Ingreso","4","");
INSERT INTO `movimientos` VALUES("175","14-03-2024","R00002211","Rodamiento 2211","Ingreso","4","");
INSERT INTO `movimientos` VALUES("176","14-03-2026","R00002310","Rodamiento 2310","Ingreso","4","");
INSERT INTO `movimientos` VALUES("177","14-03-2048","R00006015","Rodamiento 6015","Ingreso","4","");
INSERT INTO `movimientos` VALUES("178","14-03-2057","R00006206","Rodamiento 6206","Ingreso","4","");
INSERT INTO `movimientos` VALUES("179","14-03-2058","R00006207","Rodamiento 6207","Ingreso","4","");
INSERT INTO `movimientos` VALUES("180","14-03-2066","R00006304","Rodamiento 6304","Ingreso","4","");
INSERT INTO `movimientos` VALUES("181","14-03-2072","R00006310","Rodamiento 6310","Ingreso","4","");
INSERT INTO `movimientos` VALUES("182","14-03-2073","R00006313","Rodamiento 6313","Ingreso","4","");
INSERT INTO `movimientos` VALUES("183","14-03-2075","R00006316","Rodamiento 6316","Ingreso","4","");
INSERT INTO `movimientos` VALUES("184","14-03-2083","R00016005","Rodamiento 16005","Ingreso","4","");
INSERT INTO `movimientos` VALUES("185","14-03-2086","R00022211","Rodamiento 22211","Ingreso","4","");
INSERT INTO `movimientos` VALUES("186","14-03-2087","R00022212","Rodamiento 22212","Ingreso","4","");
INSERT INTO `movimientos` VALUES("187","14-03-2089","R00029685","Rodamiento 29685","Ingreso","4","");
INSERT INTO `movimientos` VALUES("188","14-03-2095","R00032008","Rodamiento 32008","Ingreso","4","");
INSERT INTO `movimientos` VALUES("189","14-03-2096","R00032010","Rodamiento 32010","Ingreso","4","");
INSERT INTO `movimientos` VALUES("190","14-03-2104","R00060002","Rodamiento 60002","Ingreso","4","");
INSERT INTO `movimientos` VALUES("191","14-03-2122","R000UC207","Rodamiento UC207","Ingreso","4","");
INSERT INTO `movimientos` VALUES("192","14-03-2123","R000UC212","Rodamiento UC212","Ingreso","4","");
INSERT INTO `movimientos` VALUES("193","14-03-2124","R000UC214","Rodamiento UC214","Ingreso","4","");
INSERT INTO `movimientos` VALUES("194","14-03-2128","R00YAR206","Rodamiento YAR206","Ingreso","4","");
INSERT INTO `movimientos` VALUES("195","14-03-2132","R00YAR214","Rodamiento YAR214","Ingreso","4","");
INSERT INTO `movimientos` VALUES("196","14-03-2133","R00YET208","Rodamiento YET208","Ingreso","4","");
INSERT INTO `movimientos` VALUES("197","14-03-2135","R00034478","Rodamiento 34478","Ingreso","4","");
INSERT INTO `movimientos` VALUES("198","14-03-2041","R00006006","Rodamiento 6006","Ingreso","5","");
INSERT INTO `movimientos` VALUES("199","14-03-2052","R00006201","Rodamiento 6201","Ingreso","5","");
INSERT INTO `movimientos` VALUES("200","14-03-2063","R00006212","Rodamiento 6212","Ingreso","5","");
INSERT INTO `movimientos` VALUES("201","14-03-2091","R00030305","Rodamiento 30305","Ingreso","5","");
INSERT INTO `movimientos` VALUES("202","14-03-2019","R00002202","Rodamiento 2202","Ingreso","6","");
INSERT INTO `movimientos` VALUES("203","14-03-2028","R00003204","Rodamiento 3204","Ingreso","6","");
INSERT INTO `movimientos` VALUES("204","14-03-2042","R00006007","Rodamiento 6007","Ingreso","6","");
INSERT INTO `movimientos` VALUES("205","14-03-2055","R00006204","Rodamiento 6204","Ingreso","6","");
INSERT INTO `movimientos` VALUES("206","14-03-2059","R00006208","Rodamiento 6208","Ingreso","6","");
INSERT INTO `movimientos` VALUES("207","14-03-2061","R00006210","Rodamiento 6210","Ingreso","6","");
INSERT INTO `movimientos` VALUES("208","14-03-2067","R00006305","Rodamiento 6305","Ingreso","6","");
INSERT INTO `movimientos` VALUES("209","14-03-2094","R00032007","Rodamiento 32007","Ingreso","6","");
INSERT INTO `movimientos` VALUES("210","14-03-2113","R000NU217","Rodamiento NU217","Ingreso","6","");
INSERT INTO `movimientos` VALUES("211","14-03-2118","R00000RL5","Rodamiento RLS5","Ingreso","6","");
INSERT INTO `movimientos` VALUES("212","14-03-2129","R00YAR207","Rodamiento YAR207","Ingreso","6","");
INSERT INTO `movimientos` VALUES("213","14-03-2040","R00006005","Rodamiento 6005","Ingreso","7","");
INSERT INTO `movimientos` VALUES("214","14-03-2046","R00006012","Rodamiento 6012","Ingreso","7","");
INSERT INTO `movimientos` VALUES("215","14-03-2053","R00006202","Rodamiento 6202","Ingreso","7","");
INSERT INTO `movimientos` VALUES("216","14-03-2054","R00006203","Rodamiento 6203","Ingreso","7","");
INSERT INTO `movimientos` VALUES("217","14-03-2064","R00006213","Rodamiento 6213","Ingreso","7","");
INSERT INTO `movimientos` VALUES("218","14-03-2105","R00062206","Rodamiento 62206","Ingreso","7","");
INSERT INTO `movimientos` VALUES("219","14-03-2030","R00003308","Rodamiento 3308","Ingreso","8","");
INSERT INTO `movimientos` VALUES("220","14-03-2056","R00006205","Rodamiento 6205","Ingreso","8","");
INSERT INTO `movimientos` VALUES("221","14-03-2090","R00030210","Rodamiento 30210","Ingreso","8","");
INSERT INTO `movimientos` VALUES("222","14-03-2039","R00006004","Rodamiento 6004","Ingreso","9","");
INSERT INTO `movimientos` VALUES("223","14-03-2037","R00006002","Rodamiento 6002","Ingreso","10","");
INSERT INTO `movimientos` VALUES("224","14-03-2077","R00006803","Rodamiento 6803","Ingreso","10","");
INSERT INTO `movimientos` VALUES("225","14-03-2044","R00006010","Rodamiento 6010","Ingreso","17","");
INSERT INTO `movimientos` VALUES("226","14-03-2079","R00006901","Rodamiento 6901","Ingreso","19","");
INSERT INTO `movimientos` VALUES("227","14-03-2036","R00006001","Rodamiento 6001","Ingreso","23","");
INSERT INTO `movimientos` VALUES("228","14-03-2078","R00006804","Rodamiento 6804","Ingreso","23","");
INSERT INTO `movimientos` VALUES("229","14-03-2017","MP000040","Manguera de presion ","Ingreso","8","");
INSERT INTO `movimientos` VALUES("230","14-03-2018","MP000045","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("231","14-03-2019","MP000050","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("232","14-03-2020","MP000055","Manguera de presion ","Ingreso","1","");
INSERT INTO `movimientos` VALUES("233","14-03-2021","MP000070","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("234","14-03-2022","MP000073","Manguera de presion ","Ingreso","3","");
INSERT INTO `movimientos` VALUES("235","14-03-2023","MP000082","Manguera de presion ","Ingreso","1","");
INSERT INTO `movimientos` VALUES("236","14-03-2024","MP000112","Manguera de presion ","Ingreso","4","");
INSERT INTO `movimientos` VALUES("237","14-03-2025","MP000114","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("238","14-03-2026","MP000116","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("239","14-03-2027","MP000128","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("240","14-03-2028","MP000170","Manguera de presion ","Ingreso","1","");
INSERT INTO `movimientos` VALUES("241","14-03-2029","MP000186","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("242","14-03-2030","MP000210","Manguera de presion ","Ingreso","2","");
INSERT INTO `movimientos` VALUES("243","14-03-2031","MP000220","Manguera de presion ","Ingreso","1","");
INSERT INTO `movimientos` VALUES("244","31-03-2017","R00006214","Rodamiento 6214","Ingreso","1","pescriba");
INSERT INTO `movimientos` VALUES("245","29-03-2017","R00003204","Rodamiento 3204","Egreso","2","msantillan");
INSERT INTO `movimientos` VALUES("246","31-03-2017","R00006214","Rodamiento 6214","Egreso","1","agomez");
INSERT INTO `movimientos` VALUES("247","10-04-2017","R00003310","Rodamiento 3310","Ingreso","3","dpino");
INSERT INTO `movimientos` VALUES("248","10-04-2017","R00006214","Rodamiento 6214","Ingreso","2","dpino");
INSERT INTO `movimientos` VALUES("249","10-04-2017","R00006203","Rodamiento 6203","Ingreso","1","DPINO");
INSERT INTO `movimientos` VALUES("250","10-04-2017","R00006008","Rodamiento 6008","Ingreso","5","DPINO");
INSERT INTO `movimientos` VALUES("251","10-04-2017","R0000R8ZZ","Rodamiento R8ZZ","Ingreso","2","DPINO");
INSERT INTO `movimientos` VALUES("252","10-04-2017","R000UC207","Rodamiento UC207","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("253","10-04-2017","R000UC207","Rodamiento UC207","Ingreso","1","pescriba");
INSERT INTO `movimientos` VALUES("254","10-04-2017","R00006002","Rodamiento 6002","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("255","10-04-2017","r00006205","Rodamiento 6205","Egreso","2","pescriba");
INSERT INTO `movimientos` VALUES("256","10-04-2017","r00006205","Rodamiento 6205","Egreso","2","pescriba");
INSERT INTO `movimientos` VALUES("257","10-04-2017","R00YAR207","Rodamiento YAR207","Egreso","2","gsaavedra");
INSERT INTO `movimientos` VALUES("258","11-04-2017","R00006006","Rodamiento 6006","Ingreso","1","pescriba");
INSERT INTO `movimientos` VALUES("259","11-04-2017","C00000B62","Correa B62","Ingreso","9","pescriba");
INSERT INTO `movimientos` VALUES("260","11-04-2017","C00000A28","Correa A28","Ingreso","10","pescriba");
INSERT INTO `movimientos` VALUES("261","11-04-2017","C00000A79","Correa A79","Ingreso","9","pescriba");
INSERT INTO `movimientos` VALUES("262","11-04-2017","C00000B28","Correa B28","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("263","11-04-2017","C00000B60","Correa B60","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("264","11-04-2017","C00000B69","Correa B69","Ingreso","5","pescriba");
INSERT INTO `movimientos` VALUES("265","11-04-2017","C00000B70","Correa B70","Ingreso","20","pescriba");
INSERT INTO `movimientos` VALUES("266","11-04-2017","C00000A40","Correa A40","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("267","11-04-2017","C00000A42","Correa A42","Ingreso","10","pescriba");
INSERT INTO `movimientos` VALUES("268","11-04-2017","C00000B42","Correa B42","Ingreso","8","pescriba");
INSERT INTO `movimientos` VALUES("269","11-04-2017","C00000A61","Correa A61","Ingreso","7","pescriba");
INSERT INTO `movimientos` VALUES("270","11-04-2017","C00000B54","Correa B54","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("271","11-04-2017","C00000A82","Correa A82","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("272","11-04-2017","C00000A83","Correa A83","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("274","11-04-2017","C00000B53","Correa B53","Ingreso","14","pescriba");
INSERT INTO `movimientos` VALUES("275","11-04-2017","C00DH1000","Correa DH1000","Ingreso","3","pescriba");
INSERT INTO `movimientos` VALUES("276","11-04-2017","C000DH750","Correa DH750","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("277","11-04-2017","C0000H750","Correa H750","Ingreso","3","pescriba");
INSERT INTO `movimientos` VALUES("278","11-04-2017","C0000H900","Correa H900","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("279","11-04-2017","C0000H510","Correa H510","Ingreso","10","pescriba");
INSERT INTO `movimientos` VALUES("280","11-04-2017","C0000H480","Correa H480","Ingreso","7","pescriba");
INSERT INTO `movimientos` VALUES("281","11-04-2017","C0000H540","Correa H540","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("282","11-04-2017","C0000B148","Correa B148","Ingreso","12","pescriba");
INSERT INTO `movimientos` VALUES("283","11-04-2017","C00000B39","Correa B39","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("284","11-04-2017","C00000B56","Correa B56","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("285","11-04-2017","C05VX1120","Correa 5VX1120","Ingreso","8","pescriba");
INSERT INTO `movimientos` VALUES("286","11-04-2017","C005V1120","Correa 5V1120","Ingreso","16","pescriba");
INSERT INTO `movimientos` VALUES("287","11-04-2017","C005VX950","Correa 5VX950","Ingreso","10","pescriba");
INSERT INTO `movimientos` VALUES("288","11-04-2017","C005VX900","Correa 5VX900","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("289","11-04-2017","C0005V900","Correa 5V900","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("290","11-04-2017","C005VX950","Correa 5VX950","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("291","11-04-2017","C00000B31","Correa B31","Ingreso","7","pescriba");
INSERT INTO `movimientos` VALUES("292","11-04-2017","C00000C94","Correa C94","Ingreso","5","pescriba");
INSERT INTO `movimientos` VALUES("293","11-04-2017","C00000A85","Correa A85","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("294","11-04-2017","c00000a85","Correa A85","Egreso","1","agomez");
INSERT INTO `movimientos` VALUES("295","12-04-2017","C00000B62","Correa B62","Egreso","2","agomez");
INSERT INTO `movimientos` VALUES("296","13-04-2017","C0000B128","Correa B128","Ingreso","7","pescriba");
INSERT INTO `movimientos` VALUES("297","13-04-2017","C00000B36","Correa B36","Ingreso","12","pescriba");
INSERT INTO `movimientos` VALUES("298","13-04-2017","C003VX800","Correa 3VX800","Ingreso","14","pescriba");
INSERT INTO `movimientos` VALUES("299","13-04-2017","C0003V800","Correa 3V800","Ingreso","5","pescriba");
INSERT INTO `movimientos` VALUES("300","13-04-2017","C00000C99","Correa C99","Ingreso","11","pescriba");
INSERT INTO `movimientos` VALUES("301","13-04-2017","C00000A53","Correa A53","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("302","13-04-2017","C003VX400","Correa 3VX400","Ingreso","9","pescriba");
INSERT INTO `movimientos` VALUES("303","13-04-2017","C0003V400","Correa 3V400","Ingreso","9","pescriba");
INSERT INTO `movimientos` VALUES("304","13-04-2017","C005V1000","Correa 5V1000","Ingreso","9","pescriba");
INSERT INTO `movimientos` VALUES("305","13-04-2017","C05VX1000","Correa 5VX1000","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("306","13-04-2017","C005V1500","Correa 5V1500","Ingreso","16","pescriba");
INSERT INTO `movimientos` VALUES("308","13-04-2017","C00000B83","Correa B83","Ingreso","11","pescriba");
INSERT INTO `movimientos` VALUES("309","13-04-2017","C00000B61","Correa B61","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("310","13-04-2017","C0005V850","Correa 5V850","Ingreso","7","pescriba");
INSERT INTO `movimientos` VALUES("311","13-04-2017","C0000195L","Correa 195L","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("312","13-04-2017","C0000255L","Correa 255L","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("313","13-04-2017","C003VX750","Correa 3VX750","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("314","13-04-2017","C0003V560","Correa 3V560","Ingreso","3","pescriba");
INSERT INTO `movimientos` VALUES("315","13-04-2017","C003VX560","Correa 3VX560","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("316","13-04-2017","C0000B173","Correa B173","Ingreso","8","pescriba");
INSERT INTO `movimientos` VALUES("317","13-04-2017","C0000C128","Correa C128","Ingreso","1","pescriba");
INSERT INTO `movimientos` VALUES("318","13-04-2017","C0000B174","Correa B174","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("319","13-04-2017","C0005V710","Correa 5V710","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("320","13-04-2017","C005VX710","Correa 5VX710","Ingreso","8","pescriba");
INSERT INTO `movimientos` VALUES("321","13-04-2017","C00002990","Correa 2990","Ingreso","8","pescriba");
INSERT INTO `movimientos` VALUES("322","13-04-2017","C005VX750","Correa 5VX750","Ingreso","10","pescriba");
INSERT INTO `movimientos` VALUES("323","13-04-2017","C0000B173","Correa B173","Egreso","1","agomez");
INSERT INTO `movimientos` VALUES("324","18-04-2017","R00006214","Rodamiento 6214","Ingreso","2","dpino");
INSERT INTO `movimientos` VALUES("325","20-04-2017","C0000B128","Correa B128","Egreso","2","dpino");
INSERT INTO `movimientos` VALUES("326","20-04-2017","C0000B128","Correa B128","Egreso","4","dpino");
INSERT INTO `movimientos` VALUES("327","24-04-2017","C00000B36","Correa B36","Egreso","2","dpino");
INSERT INTO `movimientos` VALUES("328","25-04-2017","R00006005","Rodamiento 6005","Egreso","1","fdelgado");
INSERT INTO `movimientos` VALUES("329","25-04-2017","R00006006","Rodamiento 6006","Egreso","2","fdelgado");
INSERT INTO `movimientos` VALUES("330","28-04-2017","R00006305","Rodamiento 6305","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("331","28-04-2017","R00006305","Rodamiento 6305","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("332","28-04-2017","C0000H750","Correa H750","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("333","01-05-2017","C00000B53","Correa B53","Egreso","2","fdelgado");
INSERT INTO `movimientos` VALUES("334","02-05-2017","C00000B53","Correa B53","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("335","02-05-2017","C00000B53","Correa B53","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("336","02-05-2017","C00000B53","Correa B53","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("337","09-05-2017","R00003204","Rodamiento 3204","Egreso","2","fdelgado");
INSERT INTO `movimientos` VALUES("338","09-05-2017","R00006012","Rodamiento 6012","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("339","09-05-2017","R00003204","Rodamiento 3204","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("340","10-05-2017","R00003204","Rodamiento 3204","Ingreso","3","dpino");
INSERT INTO `movimientos` VALUES("341","10-05-2017","R0000R8ZZ","Rodamiento R8ZZ","Ingreso","10","dpino");
INSERT INTO `movimientos` VALUES("342","18-05-2017","R00002209","Rodamiento 2209","Egreso","2","agomez");
INSERT INTO `movimientos` VALUES("343","27-05-2017","R00002209","Rodamiento 2209","Egreso","1","fdelgado");
INSERT INTO `movimientos` VALUES("344","26-05-2017","R00032012","Rodamiento 32012","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("345","27-05-2017","R00032012","Rodamiento 32012","Egreso","1","hmanrrique");
INSERT INTO `movimientos` VALUES("346","30-05-2017","R000R8LLU","Rodamiento R8LLU","Ingreso","1","dpino");
INSERT INTO `movimientos` VALUES("347","30-05-2017","R000R8LLU","Rodamiento R8LLU","Ingreso","11","dpino");
INSERT INTO `movimientos` VALUES("348","30-05-2017","R00YAR209","Rodamiento YAR209","Ingreso","2","dpino");
INSERT INTO `movimientos` VALUES("349","30-05-2017","R00YAR209","Rodamiento YAR209","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("350","30-05-2017","R00YAR212","Rodamiento YAR212","Egreso","2","pescriba");
INSERT INTO `movimientos` VALUES("351","31-05-2017","C00000B31","Correa B31","Egreso","2","agomez");
INSERT INTO `movimientos` VALUES("352","31-05-2017","C0000H450","Correa H450","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("353","31-05-2017","C0000H390","Correa H390","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("354","31-05-2017","C0000H330","Correa H330","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("355","31-05-2017","c0000h330","Correa H330","Egreso","1","pescriba");
INSERT INTO `movimientos` VALUES("356","01-06-2017","R00006200","Rodamiento 6200","Ingreso","4","dpino");
INSERT INTO `movimientos` VALUES("357","01-06-2017","R00002209","Rodamiento 2209","Ingreso","3","dpino");
INSERT INTO `movimientos` VALUES("358","01-06-2017","R00032210","Rodamiento 32210","Ingreso","1","dpino");
INSERT INTO `movimientos` VALUES("360","01-06-2017","R00YAR212","Rodamiento YAR212","Ingreso","1","dpino");
INSERT INTO `movimientos` VALUES("361","01-06-2017","R00YAR212","Rodamiento YAR212","Ingreso","1","dpino");
INSERT INTO `movimientos` VALUES("362","01-06-2017","R00002209","Rodamiento 2209","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("364","02-06-2017","C00000A38","Correa A38","Ingreso","6","pescriba");
INSERT INTO `movimientos` VALUES("365","02-06-2017","C00000A38","Correa A38","Egreso","3","pescriba");
INSERT INTO `movimientos` VALUES("366","02-06-2017","R00006209","Rodamiento 6209","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("367","08-06-2017","R00005204","Rodamiento 5204","Ingreso","3","pescriba");
INSERT INTO `movimientos` VALUES("368","08-06-2017","R00034293","Rodamiento 34293","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("369","11-06-2017","R00006203","Rodamiento 6203","Egreso","1","fdelgado");
INSERT INTO `movimientos` VALUES("370","11-06-2017","R00006203","Rodamiento 6203","Egreso","1","fdelgado");
INSERT INTO `movimientos` VALUES("371","13-06-2017","R00006010","Rodamiento 6010","Egreso","1","DPINO");
INSERT INTO `movimientos` VALUES("372","27-06-2017","R000R8LLU","Rodamiento R8LLU","Egreso","2","fdelgado");
INSERT INTO `movimientos` VALUES("373","28-06-2017","C00000B31","Correa B31","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("374","28-06-2017","C00000B31","Correa B31","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("375","28-06-2017","C00000B31","Correa B31","Egreso","2","agomez");
INSERT INTO `movimientos` VALUES("376","28-06-2017","R00006213","Rodamiento 6213","Egreso","2","hmanrique");
INSERT INTO `movimientos` VALUES("377","28-06-2017","R00002209","Rodamiento 2209","Ingreso","2","pescriba");
INSERT INTO `movimientos` VALUES("378","04-07-2017","R00002209","Rodamiento 2209","Egreso","2","hmanrique");
INSERT INTO `movimientos` VALUES("379","05-07-2017","C00000B53","Correa B53","Egreso","1","hmanrique");
INSERT INTO `movimientos` VALUES("380","27-06-2017","R0000R8ZZ","Rodamiento R8ZZ","Egreso","2","fdelgado");
INSERT INTO `movimientos` VALUES("381","07-07-2017","R0000R8ZZ","Rodamiento R8ZZ","Egreso","2","gsaavedra");
INSERT INTO `movimientos` VALUES("383","28-06-2017","C0000H510","Correa H510","Egreso","1","msantillan");
INSERT INTO `movimientos` VALUES("384","11-06-2017","R00005204","Rodamiento 5204","Egreso","1","msantillan");
INSERT INTO `movimientos` VALUES("385","23-06-2017","R00005204","Rodamiento 5204","Egreso","1","gsaavedra");
INSERT INTO `movimientos` VALUES("386","13-06-2017","R00002200","Rodamiento 2200","Egreso","1","hmanrique");
INSERT INTO `movimientos` VALUES("387","07-07-2017","R000UC207","Rodamiento UC207","Egreso","2","wpino");
INSERT INTO `movimientos` VALUES("388","11-07-2017","R00005204","Rodamiento 5204","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("389","11-07-2017","R00003204","Rodamiento 3204","Ingreso","4","pescriba");
INSERT INTO `movimientos` VALUES("390","11-07-2017","R00YAR207","Rodamiento YAR207","Egreso","1","dpino");
INSERT INTO `movimientos` VALUES("391","11-07-2017","R00YAR207","Rodamiento YAR207","Ingreso","4","pescriba");



DROP TABLE IF EXISTS `ot`;

CREATE TABLE `ot` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `OT` int(10) NOT NULL,
  `MOTIVO` varchar(50) NOT NULL,
  `SECTOR` varchar(50) NOT NULL,
  `PARTE` text NOT NULL,
  `HACCP` varchar(2) NOT NULL,
  `TAREA` text NOT NULL,
  `RESPUESTA` text NOT NULL,
  `MATERIALES` text NOT NULL,
  `ANULACION` text NOT NULL,
  `LUBRICANTE` varchar(50) NOT NULL,
  `LOTE` varchar(50) NOT NULL,
  `PERSONAL` text NOT NULL,
  `HORAS` int(3) NOT NULL,
  `FINICIO` varchar(10) NOT NULL,
  `FFIN` varchar(10) NOT NULL,
  `ANO` varchar(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

INSERT INTO `ot` VALUES("1","0","","","","","","","","","","","0","0","","","");
INSERT INTO `ot` VALUES("6","1","","L5","","NO","Cambiar correas de alimentacion","Realizado OK","","","Ninguno","","0","1","14-08-2017","19-10-2017","2017");
INSERT INTO `ot` VALUES("7","2","","Mezcladora","Conjunto Primario","NO","Engrasar Rolo de Goma de Primaria","Realizado OK","","","Nevastane XMF2","25035"," F.Delgado A.Gomez","1","14-08-2017","19-10-2017","2017");
INSERT INTO `ot` VALUES("8","2","","L4","Conjunto Primario","NO","Engrasar Rolo de Goma de Primaria","Realizado OK","","","Nevastane XMF2","25035"," F.Delgado A.Gomez","1","14-08-2017","19-10-2017","2017");
INSERT INTO `ot` VALUES("9","2","","L4","Conjunto Primario","NO","Engrasar Rolo de Goma de Primaria","Realizado OK","","","Nevastane XMF2","25035"," G.Saavedra A.Gomez","1","14-08-2017","19-10-2017","2017");
INSERT INTO `ot` VALUES("10","3","Preventivo","L5","","NO","Cambiar correas de alimentacion","Realizado OK","","","Ninguno",""," G.Saavedra A.Gomez","1","14-08-2017","19-10-2017","2017");
INSERT INTO `ot` VALUES("11","4","Correctivo No Programado","","Winder A","NO","Se cambio rolito de aluminio","Realizado OK","2 Rodamientos yar 205-100","","Nevastane XMF2",""," M.Santillan H.Manrique","1","20-10-2017","20-10-2017","2017");
INSERT INTO `ot` VALUES("12","5","Correctivo No Programado","L7","Matriz","NO","Nada","Realizado OK","","","Ninguno",""," A.Gomez","1","20-10-2017","20-10-2017","2017");
INSERT INTO `ot` VALUES("13","6","Correctivo No Programado","L3","Primario","NO","","Realizado OK","","","Ninguno","","","1","20-10-2017","20-10-2017","2017");
INSERT INTO `ot` VALUES("14","7","Correctivo No Programado","L3","Primario","NO","","Realizado OK","","","Ninguno","","","1","20-10-2017","20-10-2017","2017");
INSERT INTO `ot` VALUES("15","8","Correctivo No Programado","L3","Primario","NO","","Realizado OK","","","Ninguno","","","1","20-10-2017","20-10-2017","2017");
INSERT INTO `ot` VALUES("16","9","Correctivo No Programado","L3","5","NO","","Realizado OK","","","Ninguno","","","1","20-10-2017","20-10-2017","2017");
INSERT INTO `ot` VALUES("17","10","Preventivo","Bobinadora","","NO","Engrasar la bobinadora completa","Realizado OK","","","Ninguno",""," M.Santillan H.Manrique","1","20/10/2017","23-10-2017","2017");



DROP TABLE IF EXISTS `pedidodecompra`;

CREATE TABLE `pedidodecompra` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `FECHA` varchar(10) NOT NULL,
  `PEDIDO` varchar(10) NOT NULL,
  `CODIGO` varchar(10) NOT NULL,
  `PRODUCTO` text NOT NULL,
  `TIPO` varchar(20) NOT NULL,
  `OBSERVACION` text NOT NULL,
  `CANTIDAD` int(3) NOT NULL,
  `CAN.ENTREGADA` int(11) NOT NULL,
  `ENTREGADO` varchar(10) NOT NULL,
  `INICIADOR` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS `pedidos`;

CREATE TABLE `pedidos` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `PEDIDO` text NOT NULL,
  `SECTOR` varchar(50) NOT NULL,
  `FINICIO` varchar(10) NOT NULL,
  `FFIN` varchar(10) NOT NULL,
  `PERSONA` varchar(20) NOT NULL,
  `REALIZADO` varchar(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf32;

INSERT INTO `pedidos` VALUES("1","Colocar tapa correa en L3","L3","09-08-2017","0000-00-00","F. Urbina","NO");
INSERT INTO `pedidos` VALUES("2","Colocar tapa correa en L5","L5","09-08-2017","0000-00-00","F. Urbina","SI");
INSERT INTO `pedidos` VALUES("5","Poner tapa de correa de extrusor","L3","15/08/2017","","Guzman","NO");
INSERT INTO `pedidos` VALUES("6","Reparar Cuadro","Rotomac","29/09/2017","29/09/2017","P. Escriba","SI");
INSERT INTO `pedidos` VALUES("7","Cambiar correa de Alimentacion","L7","23/10/2017","23/10/2017","O. Guzman","SI");



DROP TABLE IF EXISTS `tareas`;

CREATE TABLE `tareas` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `TAREA` text NOT NULL,
  `SECTOR` varchar(50) NOT NULL,
  `PARTE` varchar(50) NOT NULL,
  `FINICIO` varchar(10) NOT NULL,
  `FFIN` varchar(10) NOT NULL,
  `TIPO` text NOT NULL,
  `REALIZADO` varchar(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf32;

INSERT INTO `tareas` VALUES("1","Cambiar correas de alimentacion","L5","","14-08-2017","19-10-2017","Preventivo","SI");
INSERT INTO `tareas` VALUES("2","Engrasar Rolo de Goma de Primaria","L4","","14-08-2017","19-10-2017","Correctivo Programado","SI");
INSERT INTO `tareas` VALUES("3","Engrasar la bobinadora completa","L3","Bobinadora","20/10/2017","23-10-2017","Preventivo","SI");



DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `USER` varchar(20) NOT NULL,
  `PWD` varchar(12) NOT NULL,
  `PERMISOS` int(1) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` VALUES("1","admin","admin","0","");
INSERT INTO `usuarios` VALUES("2","jvalverde","1234","0","");
INSERT INTO `usuarios` VALUES("3","pescriba","1234","0","");
INSERT INTO `usuarios` VALUES("4","gsanchez","1234","0","");
INSERT INTO `usuarios` VALUES("5","asilva","1234","0","");
INSERT INTO `usuarios` VALUES("6","dpino","1234","1","");
INSERT INTO `usuarios` VALUES("7","wpino","1234","2","");
INSERT INTO `usuarios` VALUES("8","agomez","1234","2","");
INSERT INTO `usuarios` VALUES("9","hmanrique","1234","2","");
INSERT INTO `usuarios` VALUES("10","fdelgado","1234","2","");
INSERT INTO `usuarios` VALUES("11","gsaavedra","1234","2","");
INSERT INTO `usuarios` VALUES("12","msantillan","1234","2","");
INSERT INTO `usuarios` VALUES("13","rurbano","1234","2","");
INSERT INTO `usuarios` VALUES("14","srodriguez","1234","0","");
INSERT INTO `usuarios` VALUES("15","fcallens","1234","0","");



DROP TABLE IF EXISTS `usuariostareas`;

CREATE TABLE `usuariostareas` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `USER` varchar(20) NOT NULL,
  `PWD` varchar(12) NOT NULL,
  `PERMISOS` int(1) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf32;

INSERT INTO `usuariostareas` VALUES("1","oguzman","1234","0","O. Guzman");
INSERT INTO `usuariostareas` VALUES("2","furbina","1234","0","F. Urbina");
INSERT INTO `usuariostareas` VALUES("3","pescriba","1234","1","P. Escriba");
INSERT INTO `usuariostareas` VALUES("4","Supervisor","1234","0","Supervisor");
INSERT INTO `usuariostareas` VALUES("5","Mantenimiento","1234","1","Mantenimiento");
