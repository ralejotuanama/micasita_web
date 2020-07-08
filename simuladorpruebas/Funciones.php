<link href="../css/micasita_01.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	width:95%;
	height:453px;
	z-index:1;
	top: 100px;
	text-align: center;
}
#apDiv2 {
	position: absolute;
	width:95%;
	height:94px;
	z-index:2;
	top: 05px;
}
#apDiv1 table {
	font-family: Tahoma, Geneva, sans-serif;
}
#apDiv1 table {
	font-size: 12px;
}
#apDiv1 table {
	color: #CCC;
}
#apDiv1 table {
	color: #FFF;
}
#apDiv1 table {
	color: #333;
}
table tr th {
	color: #FFF;
}
#apDiv1 table {
	text-align: center;
}
.Estilo1  {
	font-family: "Arial Black", Gadget, sans-serif;
	font-weight: bold;
	color: #009100;
	text-align: center;
	font-size: 13px;
}
.Estilo4 {
	font-family: "Arial Black", Gadget, sans-serif;
	font-weight: bold;
	color: #333;
	text-align: center;
	font-size: 11px;
}
.Estilo2 {
	 color: #FFF;
	font-weight: bold;
}
.Estilo3 {font-weight: bold;}
.Estilo5 {
	color: #333;
	font-family: Tahoma, Geneva, sans-serif;
	font-weight: bold;
	text-align: left;
	font-size: 11px;
}
.Estilo6 {
	font-family: Tahoma, Geneva, sans-serif;
	text-align: left;
	font-size: 11px;
}
-->
</style>
<?php 
/* Descripción:		Calculo de Cronograma
   Autor:			DE LA SERNA
   Fecha Creación:	07/01/2013
   Fecha Actual.:	07/01/2013
   Desc. Actual.:	Funciones para el Calculo de cronogramas de los  diferentes
                    productos de MiCasita Hipotecaria.  
*/



function pp_CargarEstructuraVenci()
{
   //******* Procedimiento de Carga de Vencimientos de hasta 420 cuotas desde el 2012 hasta el 2046
//   ReDim g_Arr_VenFechas(420)

   $g_Arr_VenFechas = array ( 	1 => array("vItem" => "1", "vFecha" => "31/01/2012", "vPeriodo" => "2012", "vMes" => "1"),
								2 => array( "vItem"=> "2", "vFecha" => "29/02/2012", "vPeriodo" => "2012", "vMes" => "2" ), 
								3 => array( "vItem"=> "3", "vFecha" => "30/03/2012", "vPeriodo" => "2012", "vMes" => "3" ), 
								4 => array( "vItem"=> "4", "vFecha" => "27/04/2012", "vPeriodo" => "2012", "vMes" => "4" ), 
								5 => array( "vItem"=> "5", "vFecha" => "31/05/2012", "vPeriodo" => "2012", "vMes" => "5" ), 
								6 => array( "vItem"=> "6", "vFecha" => "28/06/2012", "vPeriodo" => "2012", "vMes" => "6" ), 
								7 => array( "vItem"=> "7", "vFecha" => "31/07/2012", "vPeriodo" => "2012", "vMes" => "7" ), 
								8 => array( "vItem"=> "8", "vFecha" => "31/08/2012", "vPeriodo" => "2012", "vMes" => "8" ), 
								9 => array( "vItem"=> "9", "vFecha" => "28/09/2012", "vPeriodo" => "2012", "vMes" => "9" ), 
								10 => array( "vItem"=> "10", "vFecha" => "31/10/2012", "vPeriodo" => "2012", "vMes" => "10" ), 
								11 => array( "vItem"=> "11", "vFecha" => "30/11/2012", "vPeriodo" => "2012", "vMes" => "11" ), 
								12 => array( "vItem"=> "12", "vFecha" => "31/12/2012", "vPeriodo" => "2012", "vMes" => "12" ), 
								13 => array( "vItem"=> "13", "vFecha" => "31/01/2013", "vPeriodo" => "2013", "vMes" => "1" ), 
								14 => array( "vItem"=> "14", "vFecha" => "28/02/2013", "vPeriodo" => "2013", "vMes" => "2" ), 
								15 => array( "vItem"=> "15", "vFecha" => "27/03/2013", "vPeriodo" => "2013", "vMes" => "3" ), 
								16 => array( "vItem"=> "16", "vFecha" => "30/04/2013", "vPeriodo" => "2013", "vMes" => "4" ), 
								17 => array( "vItem"=> "17", "vFecha" => "31/05/2013", "vPeriodo" => "2013", "vMes" => "5" ), 
								18 => array( "vItem"=> "18", "vFecha" => "28/06/2013", "vPeriodo" => "2013", "vMes" => "6" ), 
								19 => array( "vItem"=> "19", "vFecha" => "31/07/2013", "vPeriodo" => "2013", "vMes" => "7" ), 
								20 => array( "vItem"=> "20", "vFecha" => "29/08/2013", "vPeriodo" => "2013", "vMes" => "8" ), 
								21 => array( "vItem"=> "21", "vFecha" => "30/09/2013", "vPeriodo" => "2013", "vMes" => "9" ), 
								22 => array( "vItem"=> "22", "vFecha" => "31/10/2013", "vPeriodo" => "2013", "vMes" => "10" ), 
								23 => array( "vItem"=> "23", "vFecha" => "29/11/2013", "vPeriodo" => "2013", "vMes" => "11" ), 
								24 => array( "vItem"=> "24", "vFecha" => "31/12/2013", "vPeriodo" => "2013", "vMes" => "12" ), 
								25 => array( "vItem"=> "25", "vFecha" => "31/01/2014", "vPeriodo" => "2014", "vMes" => "1" ), 
								26 => array( "vItem"=> "26", "vFecha" => "28/02/2014", "vPeriodo" => "2014", "vMes" => "2" ), 
								27 => array( "vItem"=> "27", "vFecha" => "31/03/2014", "vPeriodo" => "2014", "vMes" => "3" ), 
								28 => array( "vItem"=> "28", "vFecha" => "30/04/2014", "vPeriodo" => "2014", "vMes" => "4" ), 
								29 => array( "vItem"=> "29", "vFecha" => "30/05/2014", "vPeriodo" => "2014", "vMes" => "5" ), 
								30 => array( "vItem"=> "30", "vFecha" => "30/06/2014", "vPeriodo" => "2014", "vMes" => "6" ), 
								31 => array( "vItem"=> "31", "vFecha" => "31/07/2014", "vPeriodo" => "2014", "vMes" => "7" ), 
								32 => array( "vItem"=> "32", "vFecha" => "29/08/2014", "vPeriodo" => "2014", "vMes" => "8" ), 
								33 => array( "vItem"=> "33", "vFecha" => "30/09/2014", "vPeriodo" => "2014", "vMes" => "9" ), 
								34 => array( "vItem"=> "34", "vFecha" => "31/10/2014", "vPeriodo" => "2014", "vMes" => "10" ), 
								35 => array( "vItem"=> "35", "vFecha" => "28/11/2014", "vPeriodo" => "2014", "vMes" => "11" ), 
								36 => array( "vItem"=> "36", "vFecha" => "31/12/2014", "vPeriodo" => "2014", "vMes" => "12" ), 
								37 => array( "vItem"=> "37", "vFecha" => "30/01/2015", "vPeriodo" => "2015", "vMes" => "1" ), 
								38 => array( "vItem"=> "38", "vFecha" => "27/02/2015", "vPeriodo" => "2015", "vMes" => "2" ), 
								39 => array( "vItem"=> "39", "vFecha" => "31/03/2015", "vPeriodo" => "2015", "vMes" => "3" ), 
								40 => array( "vItem"=> "40", "vFecha" => "30/04/2015", "vPeriodo" => "2015", "vMes" => "4" ), 
								41 => array( "vItem"=> "41", "vFecha" => "29/05/2015", "vPeriodo" => "2015", "vMes" => "5" ), 
								42 => array( "vItem"=> "42", "vFecha" => "30/06/2015", "vPeriodo" => "2015", "vMes" => "6" ), 
								43 => array( "vItem"=> "43", "vFecha" => "31/07/2015", "vPeriodo" => "2015", "vMes" => "7" ), 
								44 => array( "vItem"=> "44", "vFecha" => "31/08/2015", "vPeriodo" => "2015", "vMes" => "8" ), 
								45 => array( "vItem"=> "45", "vFecha" => "30/09/2015", "vPeriodo" => "2015", "vMes" => "9" ), 
								46 => array( "vItem"=> "46", "vFecha" => "30/10/2015", "vPeriodo" => "2015", "vMes" => "10" ), 
								47 => array( "vItem"=> "47", "vFecha" => "30/11/2015", "vPeriodo" => "2015", "vMes" => "11" ), 
								48 => array( "vItem"=> "48", "vFecha" => "31/12/2015", "vPeriodo" => "2015", "vMes" => "12" ), 
								49 => array( "vItem"=> "49", "vFecha" => "29/01/2016", "vPeriodo" => "2016", "vMes" => "1" ), 
								50 => array( "vItem"=> "50", "vFecha" => "29/02/2016", "vPeriodo" => "2016", "vMes" => "2" ), 
								51 => array( "vItem"=> "51", "vFecha" => "31/03/2016", "vPeriodo" => "2016", "vMes" => "3" ), 
								52 => array( "vItem"=> "52", "vFecha" => "29/04/2016", "vPeriodo" => "2016", "vMes" => "4" ), 
								53 => array( "vItem"=> "53", "vFecha" => "31/05/2016", "vPeriodo" => "2016", "vMes" => "5" ), 
								54 => array( "vItem"=> "54", "vFecha" => "30/06/2016", "vPeriodo" => "2016", "vMes" => "6" ), 
								55 => array( "vItem"=> "55", "vFecha" => "27/07/2016", "vPeriodo" => "2016", "vMes" => "7" ), 
								56 => array( "vItem"=> "56", "vFecha" => "31/08/2016", "vPeriodo" => "2016", "vMes" => "8" ), 
								57 => array( "vItem"=> "57", "vFecha" => "30/09/2016", "vPeriodo" => "2016", "vMes" => "9" ), 
								58 => array( "vItem"=> "58", "vFecha" => "31/10/2016", "vPeriodo" => "2016", "vMes" => "10" ), 
								59 => array( "vItem"=> "59", "vFecha" => "30/11/2016", "vPeriodo" => "2016", "vMes" => "11" ), 
								60 => array( "vItem"=> "60", "vFecha" => "30/12/2016", "vPeriodo" => "2016", "vMes" => "12" ), 
								61 => array( "vItem"=> "61", "vFecha" => "31/01/2017", "vPeriodo" => "2017", "vMes" => "1" ), 
								62 => array( "vItem"=> "62", "vFecha" => "28/02/2017", "vPeriodo" => "2017", "vMes" => "2" ), 
								63 => array( "vItem"=> "63", "vFecha" => "31/03/2017", "vPeriodo" => "2017", "vMes" => "3" ), 
								64 => array( "vItem"=> "64", "vFecha" => "28/04/2017", "vPeriodo" => "2017", "vMes" => "4" ), 
								65 => array( "vItem"=> "65", "vFecha" => "31/05/2017", "vPeriodo" => "2017", "vMes" => "5" ), 
								66 => array( "vItem"=> "66", "vFecha" => "30/06/2017", "vPeriodo" => "2017", "vMes" => "6" ), 
								67 => array( "vItem"=> "67", "vFecha" => "31/07/2017", "vPeriodo" => "2017", "vMes" => "7" ), 
								68 => array( "vItem"=> "68", "vFecha" => "31/08/2017", "vPeriodo" => "2017", "vMes" => "8" ), 
								69 => array( "vItem"=> "69", "vFecha" => "29/09/2017", "vPeriodo" => "2017", "vMes" => "9" ), 
								70 => array( "vItem"=> "70", "vFecha" => "31/10/2017", "vPeriodo" => "2017", "vMes" => "10" ), 
								71 => array( "vItem"=> "71", "vFecha" => "30/11/2017", "vPeriodo" => "2017", "vMes" => "11" ), 
								72 => array( "vItem"=> "72", "vFecha" => "29/12/2017", "vPeriodo" => "2017", "vMes" => "12" ), 
								73 => array( "vItem"=> "73", "vFecha" => "31/01/2018", "vPeriodo" => "2018", "vMes" => "1" ), 
								74 => array( "vItem"=> "74", "vFecha" => "28/02/2018", "vPeriodo" => "2018", "vMes" => "2" ), 
								75 => array( "vItem"=> "75", "vFecha" => "28/03/2018", "vPeriodo" => "2018", "vMes" => "3" ), 
								76 => array( "vItem"=> "76", "vFecha" => "30/04/2018", "vPeriodo" => "2018", "vMes" => "4" ), 
								77 => array( "vItem"=> "77", "vFecha" => "31/05/2018", "vPeriodo" => "2018", "vMes" => "5" ), 
								78 => array( "vItem"=> "78", "vFecha" => "28/06/2018", "vPeriodo" => "2018", "vMes" => "6" ), 
								79 => array( "vItem"=> "79", "vFecha" => "31/07/2018", "vPeriodo" => "2018", "vMes" => "7" ), 
								80 => array( "vItem"=> "80", "vFecha" => "31/08/2018", "vPeriodo" => "2018", "vMes" => "8" ), 
								81 => array( "vItem"=> "81", "vFecha" => "28/09/2018", "vPeriodo" => "2018", "vMes" => "9" ), 
								82 => array( "vItem"=> "82", "vFecha" => "31/10/2018", "vPeriodo" => "2018", "vMes" => "10" ), 
								83 => array( "vItem"=> "83", "vFecha" => "30/11/2018", "vPeriodo" => "2018", "vMes" => "11" ), 
								84 => array( "vItem"=> "84", "vFecha" => "31/12/2018", "vPeriodo" => "2018", "vMes" => "12" ), 
								85 => array( "vItem"=> "85", "vFecha" => "31/01/2019", "vPeriodo" => "2019", "vMes" => "1" ), 
								86 => array( "vItem"=> "86", "vFecha" => "28/02/2019", "vPeriodo" => "2019", "vMes" => "2" ), 
								87 => array( "vItem"=> "87", "vFecha" => "29/03/2019", "vPeriodo" => "2019", "vMes" => "3" ), 
								88 => array( "vItem"=> "88", "vFecha" => "30/04/2019", "vPeriodo" => "2019", "vMes" => "4" ), 
								89 => array( "vItem"=> "89", "vFecha" => "31/05/2019", "vPeriodo" => "2019", "vMes" => "5" ), 
								90 => array( "vItem"=> "90", "vFecha" => "28/06/2019", "vPeriodo" => "2019", "vMes" => "6" ), 
								91 => array( "vItem"=> "91", "vFecha" => "31/07/2019", "vPeriodo" => "2019", "vMes" => "7" ), 
								92 => array( "vItem"=> "92", "vFecha" => "29/08/2019", "vPeriodo" => "2019", "vMes" => "8" ), 
								93 => array( "vItem"=> "93", "vFecha" => "30/09/2019", "vPeriodo" => "2019", "vMes" => "9" ), 
								94 => array( "vItem"=> "94", "vFecha" => "31/10/2019", "vPeriodo" => "2019", "vMes" => "10" ), 
								95 => array( "vItem"=> "95", "vFecha" => "29/11/2019", "vPeriodo" => "2019", "vMes" => "11" ), 
								96 => array( "vItem"=> "96", "vFecha" => "31/12/2019", "vPeriodo" => "2019", "vMes" => "12" ), 
								97 => array( "vItem"=> "97", "vFecha" => "31/01/2020", "vPeriodo" => "2020", "vMes" => "1" ), 
								98 => array( "vItem"=> "98", "vFecha" => "28/02/2020", "vPeriodo" => "2020", "vMes" => "2" ), 
								99 => array( "vItem"=> "99", "vFecha" => "31/03/2020", "vPeriodo" => "2020", "vMes" => "3" ), 
								100 => array( "vItem"=> "100", "vFecha" => "30/04/2020", "vPeriodo" => "2020", "vMes" => "4" ), 
								101 => array( "vItem"=> "101", "vFecha" => "29/05/2020", "vPeriodo" => "2020", "vMes" => "5" ), 
								102 => array( "vItem"=> "102", "vFecha" => "30/06/2020", "vPeriodo" => "2020", "vMes" => "6" ), 
								103 => array( "vItem"=> "103", "vFecha" => "31/07/2020", "vPeriodo" => "2020", "vMes" => "7" ), 
								104 => array( "vItem"=> "104", "vFecha" => "31/08/2020", "vPeriodo" => "2020", "vMes" => "8" ), 
								105 => array( "vItem"=> "105", "vFecha" => "30/09/2020", "vPeriodo" => "2020", "vMes" => "9" ), 
								106 => array( "vItem"=> "106", "vFecha" => "30/10/2020", "vPeriodo" => "2020", "vMes" => "10" ), 
								107 => array( "vItem"=> "107", "vFecha" => "30/11/2020", "vPeriodo" => "2020", "vMes" => "11" ), 
								108 => array( "vItem"=> "108", "vFecha" => "31/12/2020", "vPeriodo" => "2020", "vMes" => "12" ), 
								109 => array( "vItem"=> "109", "vFecha" => "29/01/2021", "vPeriodo" => "2021", "vMes" => "1" ), 
								110 => array( "vItem"=> "110", "vFecha" => "26/02/2021", "vPeriodo" => "2021", "vMes" => "2" ), 
								111 => array( "vItem"=> "111", "vFecha" => "31/03/2021", "vPeriodo" => "2021", "vMes" => "3" ), 
								112 => array( "vItem"=> "112", "vFecha" => "30/04/2021", "vPeriodo" => "2021", "vMes" => "4" ), 
								113 => array( "vItem"=> "113", "vFecha" => "31/05/2021", "vPeriodo" => "2021", "vMes" => "5" ), 
								114 => array( "vItem"=> "114", "vFecha" => "30/06/2021", "vPeriodo" => "2021", "vMes" => "6" ), 
								115 => array( "vItem"=> "115", "vFecha" => "30/07/2021", "vPeriodo" => "2021", "vMes" => "7" ), 
								116 => array( "vItem"=> "116", "vFecha" => "31/08/2021", "vPeriodo" => "2021", "vMes" => "8" ), 
								117 => array( "vItem"=> "117", "vFecha" => "30/09/2021", "vPeriodo" => "2021", "vMes" => "9" ), 
								118 => array( "vItem"=> "118", "vFecha" => "29/10/2021", "vPeriodo" => "2021", "vMes" => "10" ), 
								119 => array( "vItem"=> "119", "vFecha" => "30/11/2021", "vPeriodo" => "2021", "vMes" => "11" ), 
								120 => array( "vItem"=> "120", "vFecha" => "31/12/2021", "vPeriodo" => "2021", "vMes" => "12" ), 
								121 => array( "vItem"=> "121", "vFecha" => "31/01/2022", "vPeriodo" => "2022", "vMes" => "1" ), 
								122 => array( "vItem"=> "122", "vFecha" => "28/02/2022", "vPeriodo" => "2022", "vMes" => "2" ), 
								123 => array( "vItem"=> "123", "vFecha" => "31/03/2022", "vPeriodo" => "2022", "vMes" => "3" ), 
								124 => array( "vItem"=> "124", "vFecha" => "29/04/2022", "vPeriodo" => "2022", "vMes" => "4" ), 
								125 => array( "vItem"=> "125", "vFecha" => "31/05/2022", "vPeriodo" => "2022", "vMes" => "5" ), 
								126 => array( "vItem"=> "126", "vFecha" => "30/06/2022", "vPeriodo" => "2022", "vMes" => "6" ), 
								127 => array( "vItem"=> "127", "vFecha" => "27/07/2022", "vPeriodo" => "2022", "vMes" => "7" ), 
								128 => array( "vItem"=> "128", "vFecha" => "31/08/2022", "vPeriodo" => "2022", "vMes" => "8" ), 
								129 => array( "vItem"=> "129", "vFecha" => "30/09/2022", "vPeriodo" => "2022", "vMes" => "9" ), 
								130 => array( "vItem"=> "130", "vFecha" => "31/10/2022", "vPeriodo" => "2022", "vMes" => "10" ), 
								131 => array( "vItem"=> "131", "vFecha" => "30/11/2022", "vPeriodo" => "2022", "vMes" => "11" ), 
								132 => array( "vItem"=> "132", "vFecha" => "30/12/2022", "vPeriodo" => "2022", "vMes" => "12" ), 
								133 => array( "vItem"=> "133", "vFecha" => "31/01/2023", "vPeriodo" => "2023", "vMes" => "1" ), 
								134 => array( "vItem"=> "134", "vFecha" => "28/02/2023", "vPeriodo" => "2023", "vMes" => "2" ), 
								135 => array( "vItem"=> "135", "vFecha" => "31/03/2023", "vPeriodo" => "2023", "vMes" => "3" ), 
								136 => array( "vItem"=> "136", "vFecha" => "28/04/2023", "vPeriodo" => "2023", "vMes" => "4" ), 
								137 => array( "vItem"=> "137", "vFecha" => "31/05/2023", "vPeriodo" => "2023", "vMes" => "5" ), 
								138 => array( "vItem"=> "138", "vFecha" => "30/06/2023", "vPeriodo" => "2023", "vMes" => "6" ), 
								139 => array( "vItem"=> "139", "vFecha" => "31/07/2023", "vPeriodo" => "2023", "vMes" => "7" ), 
								140 => array( "vItem"=> "140", "vFecha" => "31/08/2023", "vPeriodo" => "2023", "vMes" => "8" ), 
								141 => array( "vItem"=> "141", "vFecha" => "29/09/2023", "vPeriodo" => "2023", "vMes" => "9" ), 
								142 => array( "vItem"=> "142", "vFecha" => "31/10/2023", "vPeriodo" => "2023", "vMes" => "10" ), 
								143 => array( "vItem"=> "143", "vFecha" => "30/11/2023", "vPeriodo" => "2023", "vMes" => "11" ), 
								144 => array( "vItem"=> "144", "vFecha" => "29/12/2023", "vPeriodo" => "2023", "vMes" => "12" ), 
								145 => array( "vItem"=> "145", "vFecha" => "31/01/2024", "vPeriodo" => "2024", "vMes" => "1" ), 
								146 => array( "vItem"=> "146", "vFecha" => "29/02/2024", "vPeriodo" => "2024", "vMes" => "2" ), 
								147 => array( "vItem"=> "147", "vFecha" => "27/03/2024", "vPeriodo" => "2024", "vMes" => "3" ), 
								148 => array( "vItem"=> "148", "vFecha" => "30/04/2024", "vPeriodo" => "2024", "vMes" => "4" ), 
								149 => array( "vItem"=> "149", "vFecha" => "31/05/2024", "vPeriodo" => "2024", "vMes" => "5" ), 
								150 => array( "vItem"=> "150", "vFecha" => "28/06/2024", "vPeriodo" => "2024", "vMes" => "6" ), 
								151 => array( "vItem"=> "151", "vFecha" => "31/07/2024", "vPeriodo" => "2024", "vMes" => "7" ), 
								152 => array( "vItem"=> "152", "vFecha" => "29/08/2024", "vPeriodo" => "2024", "vMes" => "8" ), 
								153 => array( "vItem"=> "153", "vFecha" => "30/09/2024", "vPeriodo" => "2024", "vMes" => "9" ), 
								154 => array( "vItem"=> "154", "vFecha" => "31/10/2024", "vPeriodo" => "2024", "vMes" => "10" ), 
								155 => array( "vItem"=> "155", "vFecha" => "29/11/2024", "vPeriodo" => "2024", "vMes" => "11" ), 
								156 => array( "vItem"=> "156", "vFecha" => "31/12/2024", "vPeriodo" => "2024", "vMes" => "12" ), 
								157 => array( "vItem"=> "157", "vFecha" => "31/01/2025", "vPeriodo" => "2025", "vMes" => "1" ), 
								158 => array( "vItem"=> "158", "vFecha" => "28/02/2025", "vPeriodo" => "2025", "vMes" => "2" ), 
								159 => array( "vItem"=> "159", "vFecha" => "31/03/2025", "vPeriodo" => "2025", "vMes" => "3" ), 
								160 => array( "vItem"=> "160", "vFecha" => "30/04/2025", "vPeriodo" => "2025", "vMes" => "4" ), 
								161 => array( "vItem"=> "161", "vFecha" => "30/05/2025", "vPeriodo" => "2025", "vMes" => "5" ), 
								162 => array( "vItem"=> "162", "vFecha" => "30/06/2025", "vPeriodo" => "2025", "vMes" => "6" ), 
								163 => array( "vItem"=> "163", "vFecha" => "31/07/2025", "vPeriodo" => "2025", "vMes" => "7" ), 
								164 => array( "vItem"=> "164", "vFecha" => "29/08/2025", "vPeriodo" => "2025", "vMes" => "8" ), 
								165 => array( "vItem"=> "165", "vFecha" => "30/09/2025", "vPeriodo" => "2025", "vMes" => "9" ), 
								166 => array( "vItem"=> "166", "vFecha" => "31/10/2025", "vPeriodo" => "2025", "vMes" => "10" ), 
								167 => array( "vItem"=> "167", "vFecha" => "28/11/2025", "vPeriodo" => "2025", "vMes" => "11" ), 
								168 => array( "vItem"=> "168", "vFecha" => "31/12/2025", "vPeriodo" => "2025", "vMes" => "12" ), 
								169 => array( "vItem"=> "169", "vFecha" => "30/01/2026", "vPeriodo" => "2026", "vMes" => "1" ), 
								170 => array( "vItem"=> "170", "vFecha" => "27/02/2026", "vPeriodo" => "2026", "vMes" => "2" ), 
								171 => array( "vItem"=> "171", "vFecha" => "31/03/2026", "vPeriodo" => "2026", "vMes" => "3" ), 
								172 => array( "vItem"=> "172", "vFecha" => "30/04/2026", "vPeriodo" => "2026", "vMes" => "4" ), 
								173 => array( "vItem"=> "173", "vFecha" => "29/05/2026", "vPeriodo" => "2026", "vMes" => "5" ), 
								174 => array( "vItem"=> "174", "vFecha" => "30/06/2026", "vPeriodo" => "2026", "vMes" => "6" ), 
								175 => array( "vItem"=> "175", "vFecha" => "31/07/2026", "vPeriodo" => "2026", "vMes" => "7" ), 
								176 => array( "vItem"=> "176", "vFecha" => "31/08/2026", "vPeriodo" => "2026", "vMes" => "8" ), 
								177 => array( "vItem"=> "177", "vFecha" => "30/09/2026", "vPeriodo" => "2026", "vMes" => "9" ), 
								178 => array( "vItem"=> "178", "vFecha" => "30/10/2026", "vPeriodo" => "2026", "vMes" => "10" ), 
								179 => array( "vItem"=> "179", "vFecha" => "30/11/2026", "vPeriodo" => "2026", "vMes" => "11" ), 
								180 => array( "vItem"=> "180", "vFecha" => "31/12/2026", "vPeriodo" => "2026", "vMes" => "12" ), 
								181 => array( "vItem"=> "181", "vFecha" => "29/01/2027", "vPeriodo" => "2027", "vMes" => "1" ), 
								182 => array( "vItem"=> "182", "vFecha" => "26/02/2027", "vPeriodo" => "2027", "vMes" => "2" ), 
								183 => array( "vItem"=> "183", "vFecha" => "31/03/2027", "vPeriodo" => "2027", "vMes" => "3" ), 
								184 => array( "vItem"=> "184", "vFecha" => "30/04/2027", "vPeriodo" => "2027", "vMes" => "4" ), 
								185 => array( "vItem"=> "185", "vFecha" => "31/05/2027", "vPeriodo" => "2027", "vMes" => "5" ), 
								186 => array( "vItem"=> "186", "vFecha" => "30/06/2027", "vPeriodo" => "2027", "vMes" => "6" ), 
								187 => array( "vItem"=> "187", "vFecha" => "30/07/2027", "vPeriodo" => "2027", "vMes" => "7" ), 
								188 => array( "vItem"=> "188", "vFecha" => "31/08/2027", "vPeriodo" => "2027", "vMes" => "8" ), 
								189 => array( "vItem"=> "189", "vFecha" => "30/09/2027", "vPeriodo" => "2027", "vMes" => "9" ), 
								190 => array( "vItem"=> "190", "vFecha" => "29/10/2027", "vPeriodo" => "2027", "vMes" => "10" ), 
								191 => array( "vItem"=> "191", "vFecha" => "30/11/2027", "vPeriodo" => "2027", "vMes" => "11" ), 
								192 => array( "vItem"=> "192", "vFecha" => "31/12/2027", "vPeriodo" => "2027", "vMes" => "12" ), 
								193 => array( "vItem"=> "193", "vFecha" => "31/01/2028", "vPeriodo" => "2028", "vMes" => "1" ), 
								194 => array( "vItem"=> "194", "vFecha" => "29/02/2028", "vPeriodo" => "2028", "vMes" => "2" ), 
								195 => array( "vItem"=> "195", "vFecha" => "31/03/2028", "vPeriodo" => "2028", "vMes" => "3" ), 
								196 => array( "vItem"=> "196", "vFecha" => "28/04/2028", "vPeriodo" => "2028", "vMes" => "4" ), 
								197 => array( "vItem"=> "197", "vFecha" => "31/05/2028", "vPeriodo" => "2028", "vMes" => "5" ), 
								198 => array( "vItem"=> "198", "vFecha" => "30/06/2028", "vPeriodo" => "2028", "vMes" => "6" ), 
								199 => array( "vItem"=> "199", "vFecha" => "31/07/2028", "vPeriodo" => "2028", "vMes" => "7" ), 
								200 => array( "vItem"=> "200", "vFecha" => "31/08/2028", "vPeriodo" => "2028", "vMes" => "8" ), 
								201 => array( "vItem"=> "201", "vFecha" => "29/09/2028", "vPeriodo" => "2028", "vMes" => "9" ), 
								202 => array( "vItem"=> "202", "vFecha" => "31/10/2028", "vPeriodo" => "2028", "vMes" => "10" ), 
								203 => array( "vItem"=> "203", "vFecha" => "30/11/2028", "vPeriodo" => "2028", "vMes" => "11" ), 
								204 => array( "vItem"=> "204", "vFecha" => "29/12/2028", "vPeriodo" => "2028", "vMes" => "12" ), 
								205 => array( "vItem"=> "205", "vFecha" => "31/01/2029", "vPeriodo" => "2029", "vMes" => "1" ), 
								206 => array( "vItem"=> "206", "vFecha" => "28/02/2029", "vPeriodo" => "2029", "vMes" => "2" ), 
								207 => array( "vItem"=> "207", "vFecha" => "28/03/2029", "vPeriodo" => "2029", "vMes" => "3" ), 
								208 => array( "vItem"=> "208", "vFecha" => "30/04/2029", "vPeriodo" => "2029", "vMes" => "4" ), 
								209 => array( "vItem"=> "209", "vFecha" => "31/05/2029", "vPeriodo" => "2029", "vMes" => "5" ), 
								210 => array( "vItem"=> "210", "vFecha" => "28/06/2029", "vPeriodo" => "2029", "vMes" => "6" ), 
								211 => array( "vItem"=> "211", "vFecha" => "31/07/2029", "vPeriodo" => "2029", "vMes" => "7" ), 
								212 => array( "vItem"=> "212", "vFecha" => "31/08/2029", "vPeriodo" => "2029", "vMes" => "8" ), 
								213 => array( "vItem"=> "213", "vFecha" => "28/09/2029", "vPeriodo" => "2029", "vMes" => "9" ), 
								214 => array( "vItem"=> "214", "vFecha" => "31/10/2029", "vPeriodo" => "2029", "vMes" => "10" ), 
								215 => array( "vItem"=> "215", "vFecha" => "30/11/2029", "vPeriodo" => "2029", "vMes" => "11" ), 
								216 => array( "vItem"=> "216", "vFecha" => "31/12/2029", "vPeriodo" => "2029", "vMes" => "12" ), 
								217 => array( "vItem"=> "217", "vFecha" => "31/01/2030", "vPeriodo" => "2030", "vMes" => "1" ), 
								218 => array( "vItem"=> "218", "vFecha" => "28/02/2030", "vPeriodo" => "2030", "vMes" => "2" ), 
								219 => array( "vItem"=> "219", "vFecha" => "29/03/2030", "vPeriodo" => "2030", "vMes" => "3" ), 
								220 => array( "vItem"=> "220", "vFecha" => "30/04/2030", "vPeriodo" => "2030", "vMes" => "4" ), 
								221 => array( "vItem"=> "221", "vFecha" => "31/05/2030", "vPeriodo" => "2030", "vMes" => "5" ), 
								222 => array( "vItem"=> "222", "vFecha" => "28/06/2030", "vPeriodo" => "2030", "vMes" => "6" ), 
								223 => array( "vItem"=> "223", "vFecha" => "31/07/2030", "vPeriodo" => "2030", "vMes" => "7" ), 
								224 => array( "vItem"=> "224", "vFecha" => "29/08/2030", "vPeriodo" => "2030", "vMes" => "8" ), 
								225 => array( "vItem"=> "225", "vFecha" => "30/09/2030", "vPeriodo" => "2030", "vMes" => "9" ), 
								226 => array( "vItem"=> "226", "vFecha" => "31/10/2030", "vPeriodo" => "2030", "vMes" => "10" ), 
								227 => array( "vItem"=> "227", "vFecha" => "29/11/2030", "vPeriodo" => "2030", "vMes" => "11" ), 
								228 => array( "vItem"=> "228", "vFecha" => "31/12/2030", "vPeriodo" => "2030", "vMes" => "12" ), 
								229 => array( "vItem"=> "229", "vFecha" => "31/01/2031", "vPeriodo" => "2031", "vMes" => "1" ), 
								230 => array( "vItem"=> "230", "vFecha" => "28/02/2031", "vPeriodo" => "2031", "vMes" => "2" ), 
								231 => array( "vItem"=> "231", "vFecha" => "31/03/2031", "vPeriodo" => "2031", "vMes" => "3" ), 
								232 => array( "vItem"=> "232", "vFecha" => "30/04/2031", "vPeriodo" => "2031", "vMes" => "4" ), 
								233 => array( "vItem"=> "233", "vFecha" => "30/05/2031", "vPeriodo" => "2031", "vMes" => "5" ), 
								234 => array( "vItem"=> "234", "vFecha" => "30/06/2031", "vPeriodo" => "2031", "vMes" => "6" ), 
								235 => array( "vItem"=> "235", "vFecha" => "31/07/2031", "vPeriodo" => "2031", "vMes" => "7" ), 
								236 => array( "vItem"=> "236", "vFecha" => "29/08/2031", "vPeriodo" => "2031", "vMes" => "8" ), 
								237 => array( "vItem"=> "237", "vFecha" => "30/09/2031", "vPeriodo" => "2031", "vMes" => "9" ), 
								238 => array( "vItem"=> "238", "vFecha" => "31/10/2031", "vPeriodo" => "2031", "vMes" => "10" ), 
								239 => array( "vItem"=> "239", "vFecha" => "28/11/2031", "vPeriodo" => "2031", "vMes" => "11" ), 
								240 => array( "vItem"=> "240", "vFecha" => "31/12/2031", "vPeriodo" => "2031", "vMes" => "12" ), 
								241 => array( "vItem"=> "241", "vFecha" => "30/01/2032", "vPeriodo" => "2032", "vMes" => "1" ), 
								242 => array( "vItem"=> "242", "vFecha" => "27/02/2032", "vPeriodo" => "2032", "vMes" => "2" ), 
								243 => array( "vItem"=> "243", "vFecha" => "31/03/2032", "vPeriodo" => "2032", "vMes" => "3" ), 
								244 => array( "vItem"=> "244", "vFecha" => "30/04/2032", "vPeriodo" => "2032", "vMes" => "4" ), 
								245 => array( "vItem"=> "245", "vFecha" => "31/05/2032", "vPeriodo" => "2032", "vMes" => "5" ), 
								246 => array( "vItem"=> "246", "vFecha" => "30/06/2032", "vPeriodo" => "2032", "vMes" => "6" ), 
								247 => array( "vItem"=> "247", "vFecha" => "30/07/2032", "vPeriodo" => "2032", "vMes" => "7" ), 
								248 => array( "vItem"=> "248", "vFecha" => "31/08/2032", "vPeriodo" => "2032", "vMes" => "8" ), 
								249 => array( "vItem"=> "249", "vFecha" => "30/09/2032", "vPeriodo" => "2032", "vMes" => "9" ), 
								250 => array( "vItem"=> "250", "vFecha" => "29/10/2032", "vPeriodo" => "2032", "vMes" => "10" ), 
								251 => array( "vItem"=> "251", "vFecha" => "30/11/2032", "vPeriodo" => "2032", "vMes" => "11" ), 
								252 => array( "vItem"=> "252", "vFecha" => "31/12/2032", "vPeriodo" => "2032", "vMes" => "12" ), 
								253 => array( "vItem"=> "253", "vFecha" => "31/01/2033", "vPeriodo" => "2033", "vMes" => "1" ), 
								254 => array( "vItem"=> "254", "vFecha" => "28/02/2033", "vPeriodo" => "2033", "vMes" => "2" ), 
								255 => array( "vItem"=> "255", "vFecha" => "31/03/2033", "vPeriodo" => "2033", "vMes" => "3" ), 
								256 => array( "vItem"=> "256", "vFecha" => "29/04/2033", "vPeriodo" => "2033", "vMes" => "4" ), 
								257 => array( "vItem"=> "257", "vFecha" => "31/05/2033", "vPeriodo" => "2033", "vMes" => "5" ), 
								258 => array( "vItem"=> "258", "vFecha" => "30/06/2033", "vPeriodo" => "2033", "vMes" => "6" ), 
								259 => array( "vItem"=> "259", "vFecha" => "27/07/2033", "vPeriodo" => "2033", "vMes" => "7" ), 
								260 => array( "vItem"=> "260", "vFecha" => "31/08/2033", "vPeriodo" => "2033", "vMes" => "8" ), 
								261 => array( "vItem"=> "261", "vFecha" => "30/09/2033", "vPeriodo" => "2033", "vMes" => "9" ), 
								262 => array( "vItem"=> "262", "vFecha" => "31/10/2033", "vPeriodo" => "2033", "vMes" => "10" ), 
								263 => array( "vItem"=> "263", "vFecha" => "30/11/2033", "vPeriodo" => "2033", "vMes" => "11" ), 
								264 => array( "vItem"=> "264", "vFecha" => "30/12/2033", "vPeriodo" => "2033", "vMes" => "12" ), 
								265 => array( "vItem"=> "265", "vFecha" => "31/01/2034", "vPeriodo" => "2034", "vMes" => "1" ), 
								266 => array( "vItem"=> "266", "vFecha" => "28/02/2034", "vPeriodo" => "2034", "vMes" => "2" ), 
								267 => array( "vItem"=> "267", "vFecha" => "31/03/2034", "vPeriodo" => "2034", "vMes" => "3" ), 
								268 => array( "vItem"=> "268", "vFecha" => "28/04/2034", "vPeriodo" => "2034", "vMes" => "4" ), 
								269 => array( "vItem"=> "269", "vFecha" => "31/05/2034", "vPeriodo" => "2034", "vMes" => "5" ), 
								270 => array( "vItem"=> "270", "vFecha" => "30/06/2034", "vPeriodo" => "2034", "vMes" => "6" ), 
								271 => array( "vItem"=> "271", "vFecha" => "31/07/2034", "vPeriodo" => "2034", "vMes" => "7" ), 
								272 => array( "vItem"=> "272", "vFecha" => "31/08/2034", "vPeriodo" => "2034", "vMes" => "8" ), 
								273 => array( "vItem"=> "273", "vFecha" => "29/09/2034", "vPeriodo" => "2034", "vMes" => "9" ), 
								274 => array( "vItem"=> "274", "vFecha" => "31/10/2034", "vPeriodo" => "2034", "vMes" => "10" ), 
								275 => array( "vItem"=> "275", "vFecha" => "30/11/2034", "vPeriodo" => "2034", "vMes" => "11" ), 
								276 => array( "vItem"=> "276", "vFecha" => "29/12/2034", "vPeriodo" => "2034", "vMes" => "12" ), 
								277 => array( "vItem"=> "277", "vFecha" => "31/01/2035", "vPeriodo" => "2035", "vMes" => "1" ), 
								278 => array( "vItem"=> "278", "vFecha" => "28/02/2035", "vPeriodo" => "2035", "vMes" => "2" ), 
								279 => array( "vItem"=> "279", "vFecha" => "30/03/2035", "vPeriodo" => "2035", "vMes" => "3" ), 
								280 => array( "vItem"=> "280", "vFecha" => "30/04/2035", "vPeriodo" => "2035", "vMes" => "4" ), 
								281 => array( "vItem"=> "281", "vFecha" => "31/05/2035", "vPeriodo" => "2035", "vMes" => "5" ), 
								282 => array( "vItem"=> "282", "vFecha" => "28/06/2035", "vPeriodo" => "2035", "vMes" => "6" ), 
								283 => array( "vItem"=> "283", "vFecha" => "31/07/2035", "vPeriodo" => "2035", "vMes" => "7" ), 
								284 => array( "vItem"=> "284", "vFecha" => "31/08/2035", "vPeriodo" => "2035", "vMes" => "8" ), 
								285 => array( "vItem"=> "285", "vFecha" => "28/09/2035", "vPeriodo" => "2035", "vMes" => "9" ), 
								286 => array( "vItem"=> "286", "vFecha" => "31/10/2035", "vPeriodo" => "2035", "vMes" => "10" ), 
								287 => array( "vItem"=> "287", "vFecha" => "30/11/2035", "vPeriodo" => "2035", "vMes" => "11" ), 
								288 => array( "vItem"=> "288", "vFecha" => "31/12/2035", "vPeriodo" => "2035", "vMes" => "12" ), 
								289 => array( "vItem"=> "289", "vFecha" => "31/01/2036", "vPeriodo" => "2036", "vMes" => "1" ), 
								290 => array( "vItem"=> "290", "vFecha" => "29/02/2036", "vPeriodo" => "2036", "vMes" => "2" ), 
								291 => array( "vItem"=> "291", "vFecha" => "31/03/2036", "vPeriodo" => "2036", "vMes" => "3" ), 
								292 => array( "vItem"=> "292", "vFecha" => "30/04/2036", "vPeriodo" => "2036", "vMes" => "4" ), 
								293 => array( "vItem"=> "293", "vFecha" => "30/05/2036", "vPeriodo" => "2036", "vMes" => "5" ), 
								294 => array( "vItem"=> "294", "vFecha" => "30/06/2036", "vPeriodo" => "2036", "vMes" => "6" ), 
								295 => array( "vItem"=> "295", "vFecha" => "31/07/2036", "vPeriodo" => "2036", "vMes" => "7" ), 
								296 => array( "vItem"=> "296", "vFecha" => "29/08/2036", "vPeriodo" => "2036", "vMes" => "8" ), 
								297 => array( "vItem"=> "297", "vFecha" => "30/09/2036", "vPeriodo" => "2036", "vMes" => "9" ), 
								298 => array( "vItem"=> "298", "vFecha" => "31/10/2036", "vPeriodo" => "2036", "vMes" => "10" ), 
								299 => array( "vItem"=> "299", "vFecha" => "28/11/2036", "vPeriodo" => "2036", "vMes" => "11" ), 
								300 => array( "vItem"=> "300", "vFecha" => "31/12/2036", "vPeriodo" => "2036", "vMes" => "12" ), 
								301 => array( "vItem"=> "301", "vFecha" => "31/01/2037", "vPeriodo" => "2037", "vMes" => "1" ), 
								302 => array( "vItem"=> "302", "vFecha" => "27/02/2037", "vPeriodo" => "2037", "vMes" => "2" ), 
								303 => array( "vItem"=> "303", "vFecha" => "31/03/2037", "vPeriodo" => "2037", "vMes" => "3" ), 
								304 => array( "vItem"=> "304", "vFecha" => "30/04/2037", "vPeriodo" => "2037", "vMes" => "4" ), 
								305 => array( "vItem"=> "305", "vFecha" => "29/05/2037", "vPeriodo" => "2037", "vMes" => "5" ), 
								306 => array( "vItem"=> "306", "vFecha" => "30/06/2037", "vPeriodo" => "2037", "vMes" => "6" ), 
								307 => array( "vItem"=> "307", "vFecha" => "31/07/2037", "vPeriodo" => "2037", "vMes" => "7" ), 
								308 => array( "vItem"=> "308", "vFecha" => "31/08/2037", "vPeriodo" => "2037", "vMes" => "8" ), 
								309 => array( "vItem"=> "309", "vFecha" => "30/09/2037", "vPeriodo" => "2037", "vMes" => "9" ), 
								310 => array( "vItem"=> "310", "vFecha" => "30/10/2037", "vPeriodo" => "2037", "vMes" => "10" ), 
								311 => array( "vItem"=> "311", "vFecha" => "30/11/2037", "vPeriodo" => "2037", "vMes" => "11" ), 
								312 => array( "vItem"=> "312", "vFecha" => "31/12/2037", "vPeriodo" => "2037", "vMes" => "12" ), 
								313 => array( "vItem"=> "313", "vFecha" => "29/01/2038", "vPeriodo" => "2038", "vMes" => "1" ), 
								314 => array( "vItem"=> "314", "vFecha" => "26/02/2038", "vPeriodo" => "2038", "vMes" => "2" ), 
								315 => array( "vItem"=> "315", "vFecha" => "31/03/2038", "vPeriodo" => "2038", "vMes" => "3" ), 
								316 => array( "vItem"=> "316", "vFecha" => "30/04/2038", "vPeriodo" => "2038", "vMes" => "4" ), 
								317 => array( "vItem"=> "317", "vFecha" => "31/05/2038", "vPeriodo" => "2038", "vMes" => "5" ), 
								318 => array( "vItem"=> "318", "vFecha" => "30/06/2038", "vPeriodo" => "2038", "vMes" => "6" ), 
								319 => array( "vItem"=> "319", "vFecha" => "30/07/2038", "vPeriodo" => "2038", "vMes" => "7" ), 
								320 => array( "vItem"=> "320", "vFecha" => "31/08/2038", "vPeriodo" => "2038", "vMes" => "8" ), 
								321 => array( "vItem"=> "321", "vFecha" => "30/09/2038", "vPeriodo" => "2038", "vMes" => "9" ), 
								322 => array( "vItem"=> "322", "vFecha" => "29/10/2038", "vPeriodo" => "2038", "vMes" => "10" ), 
								323 => array( "vItem"=> "323", "vFecha" => "30/11/2038", "vPeriodo" => "2038", "vMes" => "11" ), 
								324 => array( "vItem"=> "324", "vFecha" => "31/12/2038", "vPeriodo" => "2038", "vMes" => "12" ), 
								325 => array( "vItem"=> "325", "vFecha" => "31/01/2039", "vPeriodo" => "2039", "vMes" => "1" ), 
								326 => array( "vItem"=> "326", "vFecha" => "28/02/2039", "vPeriodo" => "2039", "vMes" => "2" ), 
								327 => array( "vItem"=> "327", "vFecha" => "31/03/2039", "vPeriodo" => "2039", "vMes" => "3" ), 
								328 => array( "vItem"=> "328", "vFecha" => "29/04/2039", "vPeriodo" => "2039", "vMes" => "4" ), 
								329 => array( "vItem"=> "329", "vFecha" => "31/05/2039", "vPeriodo" => "2039", "vMes" => "5" ), 
								330 => array( "vItem"=> "330", "vFecha" => "30/06/2039", "vPeriodo" => "2039", "vMes" => "6" ), 
								331 => array( "vItem"=> "331", "vFecha" => "27/07/2039", "vPeriodo" => "2039", "vMes" => "7" ), 
								332 => array( "vItem"=> "332", "vFecha" => "31/08/2039", "vPeriodo" => "2039", "vMes" => "8" ), 
								333 => array( "vItem"=> "333", "vFecha" => "30/09/2039", "vPeriodo" => "2039", "vMes" => "9" ), 
								334 => array( "vItem"=> "334", "vFecha" => "31/10/2039", "vPeriodo" => "2039", "vMes" => "10" ), 
								335 => array( "vItem"=> "335", "vFecha" => "30/11/2039", "vPeriodo" => "2039", "vMes" => "11" ), 
								336 => array( "vItem"=> "336", "vFecha" => "30/12/2039", "vPeriodo" => "2039", "vMes" => "12" ), 
								337 => array( "vItem"=> "337", "vFecha" => "31/01/2040", "vPeriodo" => "2040", "vMes" => "1" ), 
								338 => array( "vItem"=> "338", "vFecha" => "29/02/2040", "vPeriodo" => "2040", "vMes" => "2" ), 
								339 => array( "vItem"=> "339", "vFecha" => "30/03/2040", "vPeriodo" => "2040", "vMes" => "3" ), 
								340 => array( "vItem"=> "340", "vFecha" => "30/04/2040", "vPeriodo" => "2040", "vMes" => "4" ), 
								341 => array( "vItem"=> "341", "vFecha" => "31/05/2040", "vPeriodo" => "2040", "vMes" => "5" ), 
								342 => array( "vItem"=> "342", "vFecha" => "28/06/2040", "vPeriodo" => "2040", "vMes" => "6" ), 
								343 => array( "vItem"=> "343", "vFecha" => "31/07/2040", "vPeriodo" => "2040", "vMes" => "7" ), 
								344 => array( "vItem"=> "344", "vFecha" => "31/08/2040", "vPeriodo" => "2040", "vMes" => "8" ), 
								345 => array( "vItem"=> "345", "vFecha" => "28/09/2040", "vPeriodo" => "2040", "vMes" => "9" ), 
								346 => array( "vItem"=> "346", "vFecha" => "31/10/2040", "vPeriodo" => "2040", "vMes" => "10" ), 
								347 => array( "vItem"=> "347", "vFecha" => "30/11/2040", "vPeriodo" => "2040", "vMes" => "11" ), 
								348 => array( "vItem"=> "348", "vFecha" => "31/12/2040", "vPeriodo" => "2040", "vMes" => "12" ), 
								349 => array( "vItem"=> "349", "vFecha" => "31/01/2041", "vPeriodo" => "2041", "vMes" => "1" ), 
								350 => array( "vItem"=> "350", "vFecha" => "28/02/2041", "vPeriodo" => "2041", "vMes" => "2" ), 
								351 => array( "vItem"=> "351", "vFecha" => "29/03/2041", "vPeriodo" => "2041", "vMes" => "3" ), 
								352 => array( "vItem"=> "352", "vFecha" => "30/04/2041", "vPeriodo" => "2041", "vMes" => "4" ), 
								353 => array( "vItem"=> "353", "vFecha" => "31/05/2041", "vPeriodo" => "2041", "vMes" => "5" ), 
								354 => array( "vItem"=> "354", "vFecha" => "28/06/2041", "vPeriodo" => "2041", "vMes" => "6" ), 
								355 => array( "vItem"=> "355", "vFecha" => "31/07/2041", "vPeriodo" => "2041", "vMes" => "7" ), 
								356 => array( "vItem"=> "356", "vFecha" => "29/08/2041", "vPeriodo" => "2041", "vMes" => "8" ), 
								357 => array( "vItem"=> "357", "vFecha" => "30/09/2041", "vPeriodo" => "2041", "vMes" => "9" ), 
								358 => array( "vItem"=> "358", "vFecha" => "31/10/2041", "vPeriodo" => "2041", "vMes" => "10" ), 
								359 => array( "vItem"=> "359", "vFecha" => "29/11/2041", "vPeriodo" => "2041", "vMes" => "11" ), 
								360 => array( "vItem"=> "360", "vFecha" => "31/12/2041", "vPeriodo" => "2041", "vMes" => "12" ), 
								361 => array( "vItem"=> "361", "vFecha" => "31/01/2042", "vPeriodo" => "2042", "vMes" => "1" ), 
								362 => array( "vItem"=> "362", "vFecha" => "28/02/2042", "vPeriodo" => "2042", "vMes" => "2" ), 
								363 => array( "vItem"=> "363", "vFecha" => "31/03/2042", "vPeriodo" => "2042", "vMes" => "3" ), 
								364 => array( "vItem"=> "364", "vFecha" => "30/04/2042", "vPeriodo" => "2042", "vMes" => "4" ), 
								365 => array( "vItem"=> "365", "vFecha" => "31/05/2042", "vPeriodo" => "2042", "vMes" => "5" ), 
								366 => array( "vItem"=> "366", "vFecha" => "30/06/2042", "vPeriodo" => "2042", "vMes" => "6" ), 
								367 => array( "vItem"=> "367", "vFecha" => "31/07/2042", "vPeriodo" => "2042", "vMes" => "7" ), 
								368 => array( "vItem"=> "368", "vFecha" => "29/08/2042", "vPeriodo" => "2042", "vMes" => "8" ), 
								369 => array( "vItem"=> "369", "vFecha" => "30/09/2042", "vPeriodo" => "2042", "vMes" => "9" ), 
								370 => array( "vItem"=> "370", "vFecha" => "31/10/2042", "vPeriodo" => "2042", "vMes" => "10" ), 
								371 => array( "vItem"=> "371", "vFecha" => "28/11/2042", "vPeriodo" => "2042", "vMes" => "11" ), 
								372 => array( "vItem"=> "372", "vFecha" => "31/12/2042", "vPeriodo" => "2042", "vMes" => "12" ), 
								373 => array( "vItem"=> "373", "vFecha" => "30/01/2043", "vPeriodo" => "2043", "vMes" => "1" ), 
								374 => array( "vItem"=> "374", "vFecha" => "27/02/2043", "vPeriodo" => "2043", "vMes" => "2" ), 
								375 => array( "vItem"=> "375", "vFecha" => "31/03/2043", "vPeriodo" => "2043", "vMes" => "3" ), 
								376 => array( "vItem"=> "376", "vFecha" => "30/04/2043", "vPeriodo" => "2043", "vMes" => "4" ), 
								377 => array( "vItem"=> "377", "vFecha" => "29/05/2043", "vPeriodo" => "2043", "vMes" => "5" ), 
								378 => array( "vItem"=> "378", "vFecha" => "30/06/2043", "vPeriodo" => "2043", "vMes" => "6" ), 
								379 => array( "vItem"=> "379", "vFecha" => "31/07/2043", "vPeriodo" => "2043", "vMes" => "7" ), 
								380 => array( "vItem"=> "380", "vFecha" => "31/08/2043", "vPeriodo" => "2043", "vMes" => "8" ), 
								381 => array( "vItem"=> "381", "vFecha" => "30/09/2043", "vPeriodo" => "2043", "vMes" => "9" ), 
								382 => array( "vItem"=> "382", "vFecha" => "30/10/2043", "vPeriodo" => "2043", "vMes" => "10" ), 
								383 => array( "vItem"=> "383", "vFecha" => "30/11/2043", "vPeriodo" => "2043", "vMes" => "11" ), 
								384 => array( "vItem"=> "384", "vFecha" => "31/12/2043", "vPeriodo" => "2043", "vMes" => "12" ), 
								385 => array( "vItem"=> "385", "vFecha" => "29/01/2044", "vPeriodo" => "2044", "vMes" => "1" ), 
								386 => array( "vItem"=> "386", "vFecha" => "29/02/2044", "vPeriodo" => "2044", "vMes" => "2" ), 
								387 => array( "vItem"=> "387", "vFecha" => "31/03/2044", "vPeriodo" => "2044", "vMes" => "3" ), 
								388 => array( "vItem"=> "388", "vFecha" => "29/04/2044", "vPeriodo" => "2044", "vMes" => "4" ), 
								389 => array( "vItem"=> "389", "vFecha" => "31/05/2044", "vPeriodo" => "2044", "vMes" => "5" ), 
								390 => array( "vItem"=> "390", "vFecha" => "30/06/2044", "vPeriodo" => "2044", "vMes" => "6" ), 
								391 => array( "vItem"=> "391", "vFecha" => "27/07/2044", "vPeriodo" => "2044", "vMes" => "7" ), 
								392 => array( "vItem"=> "392", "vFecha" => "31/08/2044", "vPeriodo" => "2044", "vMes" => "8" ), 
								393 => array( "vItem"=> "393", "vFecha" => "30/09/2044", "vPeriodo" => "2044", "vMes" => "9" ), 
								394 => array( "vItem"=> "394", "vFecha" => "31/10/2044", "vPeriodo" => "2044", "vMes" => "10" ), 
								395 => array( "vItem"=> "395", "vFecha" => "30/11/2044", "vPeriodo" => "2044", "vMes" => "11" ), 
								396 => array( "vItem"=> "396", "vFecha" => "30/12/2044", "vPeriodo" => "2044", "vMes" => "12" ), 
								397 => array( "vItem"=> "397", "vFecha" => "31/01/2045", "vPeriodo" => "2045", "vMes" => "1" ), 
								398 => array( "vItem"=> "398", "vFecha" => "28/02/2045", "vPeriodo" => "2045", "vMes" => "2" ), 
								399 => array( "vItem"=> "399", "vFecha" => "31/03/2045", "vPeriodo" => "2045", "vMes" => "3" ), 
								400 => array( "vItem"=> "400", "vFecha" => "28/04/2045", "vPeriodo" => "2045", "vMes" => "4" ), 
								401 => array( "vItem"=> "401", "vFecha" => "31/05/2045", "vPeriodo" => "2045", "vMes" => "5" ), 
								402 => array( "vItem"=> "402", "vFecha" => "30/06/2045", "vPeriodo" => "2045", "vMes" => "6" ), 
								403 => array( "vItem"=> "403", "vFecha" => "27/07/2045", "vPeriodo" => "2045", "vMes" => "7" ), 
								404 => array( "vItem"=> "404", "vFecha" => "31/08/2045", "vPeriodo" => "2045", "vMes" => "8" ), 
								405 => array( "vItem"=> "405", "vFecha" => "29/09/2045", "vPeriodo" => "2045", "vMes" => "9" ), 
								406 => array( "vItem"=> "406", "vFecha" => "31/10/2045", "vPeriodo" => "2045", "vMes" => "10" ), 
								407 => array( "vItem"=> "407", "vFecha" => "30/11/2045", "vPeriodo" => "2045", "vMes" => "11" ), 
								408 => array( "vItem"=> "408", "vFecha" => "29/12/2045", "vPeriodo" => "2045", "vMes" => "12" ), 
								409 => array( "vItem"=> "409", "vFecha" => "31/01/2046", "vPeriodo" => "2046", "vMes" => "1" ), 
								410 => array( "vItem"=> "410", "vFecha" => "28/02/2046", "vPeriodo" => "2046", "vMes" => "2" ), 
								411 => array( "vItem"=> "411", "vFecha" => "30/03/2046", "vPeriodo" => "2046", "vMes" => "3" ), 
								412 => array( "vItem"=> "412", "vFecha" => "30/04/2046", "vPeriodo" => "2046", "vMes" => "4" ), 
								413 => array( "vItem"=> "413", "vFecha" => "31/05/2046", "vPeriodo" => "2046", "vMes" => "5" ), 
								414 => array( "vItem"=> "414", "vFecha" => "28/06/2046", "vPeriodo" => "2046", "vMes" => "6" ), 
								415 => array( "vItem"=> "415", "vFecha" => "27/07/2046", "vPeriodo" => "2046", "vMes" => "7" ), 
								416 => array( "vItem"=> "416", "vFecha" => "31/08/2046", "vPeriodo" => "2046", "vMes" => "8" ), 
								417 => array( "vItem"=> "417", "vFecha" => "28/09/2046", "vPeriodo" => "2046", "vMes" => "9" ), 
								418 => array( "vItem"=> "418", "vFecha" => "31/10/2046", "vPeriodo" => "2046", "vMes" => "10" ), 
								419 => array( "vItem"=> "419", "vFecha" => "30/11/2046", "vPeriodo" => "2046", "vMes" => "11" ), 
								420 => array( "vItem"=> "420", "vFecha" => "31/12/2046", "vPeriodo" => "2046", "vMes" => "12" )							  
							 );


   $_SESSION["g_Arr_VenFechas"] = $g_Arr_VenFechas;

   //return $g_Arr_VenFechas;
}



function pp_Cli_1CargarPG($xGracia , $xnPrestamo , $xDesembolso , $xDiaPeriocidad , $g_Dbl_IntFijo , $g_Dbl_ProductoPG , $g_Dbl_Portes , $g_Dbl_TotValAse , $g_Dbl_IntInm)
{
//*** Declarar Variables Locales
   
   //****************************************************************************************
   //****************************************************************************************
   //'*** Cuerpo del Procedimiento
   $r_Int_pnDD = 0 ;
   $r_Fec_NewDesembolso = fp_UltimoDia($xDesembolso);
   $r_Fec_NewDesembolso = f_f_AumentarDia2(31, $r_Fec_NewDesembolso);
   
   //'*** Iniciar Valores en la Estructura en item=0
   $l_Arr_PerGracia = array ( 	0 => array("PeriodoGra_Item" => "0", "PeriodoGra_Venci" => $xDesembolso, "PeriodoGra_Dias" => $r_Int_pnDD, "PeriodoGra_DeudaIni" => "0", "PeriodoGra_Capital" => "0", "PeriodoGra_Interes" => "0", "PeriodoGra_Desgra" => "0", "PeriodoGra_SegInm" => "0", "PeriodoGra_Portes" => "0", "PeriodoGra_DeudaFin" => floatval(number_format($xnPrestamo, 2,'.',''))  )	) ;
							  	
   
   $r_Dbl_pnSegInmo = number_format($g_Dbl_TotValAse * $g_Dbl_IntInm, 2,'.','') ; 
   $r_Dbl_pnNewTNC = $xnPrestamo;
   $r_Fec_NewDesembolso = fp_UltimoDia($xDesembolso);
   $r_Int_DiasPrimerMes = 0;
   
    
   
   //Reemplazamos DateDiff por f_f_RestaFechas
   //$r_Int_DiasTotal = DateDiff("D", xDesembolso, r_Fec_NewDesembolso) + xDiaPeriocidad;
   $r_Int_DiasTotal = f_f_RestaFechas($xDesembolso, $r_Fec_NewDesembolso) + $xDiaPeriocidad;
     
   //*** Calcular el vencimiento del Primer Mes: r_Fec_NewDesembolso
   if ( $r_Int_DiasTotal >= 30 && $r_Int_DiasTotal <= 31 ){
      $r_Int_DiasPrimerMes = $r_Int_DiasTotal;
      $r_Int_pnDD = 0;
	  $r_Dbl_pnInteres = 0;
	  $r_Dbl_pnDesgra = 0;
      $r_Fec_NewDesembolso = $xDesembolso;
   }else{
      if ( f_f_RestaFechas($xDesembolso, $r_Fec_NewDesembolso) < 30 ){
		  $dia1=f_f_ExtraerDia($r_Fec_NewDesembolso);
		  $mes1=f_f_ExtraerMes($r_Fec_NewDesembolso);
		  $anio1=f_f_ExtraerAnio($r_Fec_NewDesembolso);
         //r_Fec_NewDesembolso = DateAdd("D", 1, r_Fec_NewDesembolso);
		 $r_Fec_NewDesembolso = f_f_AumentarDia($dia1,$mes1,$anio1);
         $r_Fec_NewDesembolso = fp_PeriocidadDia($r_Fec_NewDesembolso, $xDiaPeriocidad);
		 
		  
         if ( f_f_RestaFechas($xDesembolso, $r_Fec_NewDesembolso) > 30 ){
			$dia1=f_f_ExtraerDia($r_Fec_NewDesembolso);
			$mes1=f_f_ExtraerMes($r_Fec_NewDesembolso);
			$anio1=f_f_ExtraerAnio($r_Fec_NewDesembolso);
            $r_Fec_NewDesembolso = f_f_DisminuirMes($dia1,$mes1,$anio1);
		 }
	  }
   }

   
   //*** Generar el cronograma para calcular el nuevo monto del prestamos
   for ($i = 1; $i <= intval($xGracia); $i++) { 
      //*** Calcular Montos para cada registro
	  //$dia1=f_f_ExtraerDia($r_Fec_NewDesembolso);
//	  $mes1=f_f_ExtraerMes($r_Fec_NewDesembolso);
//	  $anio1=f_f_ExtraerAnio($r_Fec_NewDesembolso);
      $r_Str_pdVenci = fp_PeriocidadDia(f_f_AumentarMes2($i,$r_Fec_NewDesembolso), $xDiaPeriocidad);
      $r_Int_pnDD = f_f_RestaFechas($l_Arr_PerGracia[$i-1]['PeriodoGra_Venci'], $r_Str_pdVenci);
      $r_Dbl_pnInteres = number_format( ($r_Dbl_pnNewTNC * ( pow( (1 + $g_Dbl_IntFijo) , $r_Int_pnDD ) ) - $r_Dbl_pnNewTNC) ,2,'.','');
      $r_Dbl_pnDesgra = 0 ;
      $r_Dbl_pnDesgra = number_format(($r_Dbl_pnNewTNC * ( pow( (1 + $g_Dbl_ProductoPG) , ($r_Int_pnDD / 30) ) ) - $r_Dbl_pnNewTNC), 2 ,'.','');
      $r_Dbl_pnTotalReg = ($r_Dbl_pnInteres) + ($r_Dbl_pnDesgra) + ($r_Dbl_pnSegInmo) + ($g_Dbl_Portes);
	  

	  
	 $l_Arr_PerGracia[$i]['PeriodoGra_Item'] = $i; 
	 $l_Arr_PerGracia[$i]['PeriodoGra_Venci'] = $r_Str_pdVenci; 
	 $l_Arr_PerGracia[$i]['PeriodoGra_Dias'] = $r_Int_pnDD; 
	 $l_Arr_PerGracia[$i]['PeriodoGra_DeudaIni'] = $r_Dbl_pnNewTNC; 
	 $l_Arr_PerGracia[$i]['PeriodoGra_Capital'] = "0"; 
	 $l_Arr_PerGracia[$i]['PeriodoGra_Interes'] = number_format($r_Dbl_pnInteres, 2 ,'.',''); 
	 $l_Arr_PerGracia[$i]['PeriodoGra_Desgra']  = number_format($r_Dbl_pnDesgra, 2 ,'.',''); 
	 $l_Arr_PerGracia[$i]['PeriodoGra_SegInm']  = number_format($r_Dbl_pnSegInmo, 2 ,'.',''); 
	 $l_Arr_PerGracia[$i]['PeriodoGra_Portes']  = number_format($g_Dbl_Portes, 2 ,'.',''); 
	 $l_Arr_PerGracia[$i]['PeriodoGra_DeudaFin'] = number_format($r_Dbl_pnNewTNC + $r_Dbl_pnTotalReg, 2 ,'.','') ;
																																																																																			
      
      //*** Calcular el nuevo Valor del prestamo
      $r_Dbl_pnNewTNC = $r_Dbl_pnNewTNC + $r_Dbl_pnTotalReg;
	  
	  
   }
//   
   $g_Dbl_MasTnC = $r_Dbl_pnNewTNC - $xnPrestamo ;
      
   $_SESSION["l_Arr_PerGracia"] = $l_Arr_PerGracia;
   
   return $g_Dbl_MasTnC;

}












//*****************************************************************
//*****************************************************************
function pp_Cli_2GenerarTNC($xnPrestamo ,$xnTNC , $xDesembolso ,$xDiaPeriocidad, $g_Dbl_TotValAse , $g_Dbl_IntInm , $g_Int_NroCuotas, $g_Dbl_IntFijo, $g_Dbl_Desgra, $g_Int_PeriodoGra, $g_Int_PasoAjuste , $g_Int_TopeAjuste, $g_Int_TipoDesgra, $g_Dbl_MasTnC, $g_Dbl_Portes, $g_Dbl_IntProducto, $g_Dbl_NewPrestamo, $g_Int_Dobles)
//function pp_Cli_2GenerarTNC($xnPrestamo ,$xnTNC , $xDesembolso ,$xDiaPeriocidad)
{
   //'*** ReDefinir esta Matriz TNC
   //ReDim g_Arr_TNC_Cli(g_Int_NroCuotas)
   
   //'****************************************************************************************
   //'****************************************************************************************
   //'*** Cuerpo del Procedimiento
     
   //'*** Calcular Datos Iniciales
   $r_Fec_Primer = fp_PrimerVenci(1, $xDesembolso, $xDiaPeriocidad) ;
   $r_Int_Primer = f_f_RestaFechas($xDesembolso, $r_Fec_Primer);
   $r_dbl_tDeudaInicial = $xnTNC;
   $r_int_DiasIncremento = 0;

   
   if ( $r_Int_Primer <= 40 )
     { 
      //'ULTIMO AJUSTE
      $r_Fec_tNewDesembolso = fp_UltimoDia($xDesembolso);
      $r_Int_tlnDD = 0;
      $r_int_DiasIncremento = f_f_RestaFechas($xDesembolso, $r_Fec_tNewDesembolso);
      $r_int_tlnDA = $r_Int_tlnDD;
      $r_Dbl_tInteres = 0;
      $r_Dbl_tInteres0 = 0;
      $r_Dbl_tfnDesgra = 0;
      $r_Dbl_tfnDesgra0 = 0;
      
      $g_Dbl_SegInm = (number_format($g_Dbl_TotValAse * $g_Dbl_IntInm, 2 ,'.',''));
      $g_Dbl_SegInm = $g_Dbl_TotValAse * $g_Dbl_IntInm;
      $r_Dbl_tSegInmotiTa = 0; 		//'g_Dbl_SegInm
      $r_Dbl_tTotalReg = 0;
      $r_Dbl_tSaldo = $r_Dbl_tTotalReg;
      $r_Dbl_tMontoCero = $r_Dbl_tSaldo;
      $r_Fec_tNewDesembolso = fp_UltimoDia($xDesembolso);
      $r_Int_nPrimerMes = 0;
      $r_int_xTotDias = f_f_RestaFechas($xDesembolso, $r_Fec_tNewDesembolso) + $xDiaPeriocidad;
	  

      
	 }else{
   
		  $r_Fec_tNewDesembolso = fp_UltimoDia($xDesembolso);
		  if ( !empty($g_Str_PrimerVenci) ){
			 $r_Fec_tNewDesembolso = f_f_DisminuirMes($g_Str_PrimerVenci);
			 $r_Fec_tNewDesembolso = fp_UltimoDia($r_Fec_tNewDesembolso);
		  }else{
			 $r_Fec_tNewDesembolso = fp_UltimoDia($xDesembolso);
		  }
		  $r_Int_tlnDD = f_f_RestaFechas($xDesembolso, $r_Fec_tNewDesembolso);
		  $r_int_DiasIncremento = 0;
		  $r_int_tlnDA = $r_Int_tlnDD;
		  $r_Dbl_tInteres = number_format(($xnTNC * ( pow( (1 + $g_Dbl_IntFijo) , $r_Int_tlnDD) ) - $xnTNC), 2 ,'.','');
		  //Se adiciona para que capitalize hasta la fecha de vencimiento 17/12/2013
		  $r_Dbl_tInteres = ( ($r_Dbl_tInteres) * pow( (1 + $g_Dbl_IntFijo) , ($r_Int_Primer - $r_Int_tlnDD)) );
		  
		  $r_Dbl_tInteres0 = ($r_Dbl_tInteres);
		  $r_Dbl_tfnDesgra = 0;
		  $r_Dbl_tfnDesgra0 = 0;
		  
		  if ($g_Int_TipoDesgra <= 2 ){
			 $r_Dbl_tfnDesgra = number_format(($xnTNC * ( pow( (1 + $g_Dbl_IntProducto) , $r_Int_tlnDD) ) - $xnTNC), 2 ,'.','');
			 $r_Dbl_tfnDesgra0 = $r_Dbl_tfnDesgra;
		  }
	   
		  $g_Dbl_SegInm = ( number_format($g_Dbl_TotValAse * $g_Dbl_IntInm, 2 ,'.','') );
		  $g_Dbl_SegInm = $g_Dbl_TotValAse * $g_Dbl_IntInm;
		  $r_Dbl_tSegInmotiTa = $g_Dbl_SegInm;
		  
		  if(empty($r_Dbl_tCapital)){ $r_Dbl_tCapital=0; } //Agregado en caso este vacio - MDLS
		  
		  $r_Dbl_tTotalReg = ($r_Dbl_tCapital) + ($r_Dbl_tInteres) + ($r_Dbl_tfnDesgra) + ($g_Dbl_SegInm);
		  $r_Dbl_tSaldo = $r_Dbl_tTotalReg;
		  $r_Dbl_tMontoCero = $r_Dbl_tSaldo;
		  $r_Int_nPrimerMes = 0;
		  $r_int_xTotDias = f_f_RestaFechas($xDesembolso, $r_Fec_tNewDesembolso) + $xDiaPeriocidad;
		   

	 }
 
	 
   //'*** Iniciar Valores en la Estructura en item=0   
   $g_Arr_TNC_Cli = array ( 	0 => array("tnc_Item" => "0", "tnc_nDD" => $r_Int_tlnDD, "tnc_nDA" => $r_int_tlnDA, "tnc_FactorM" => "0", "tnc_FactorJ" => "0", "tnc_FactorD" => "0", "tnc_Mes" => "0", "tnc_Multi" => "0", "tnc_mSegInm" => "0", "tnc_mInteres" => "0", "tnc_mDesgra" => "0", "tnc_mPortes" => "0"  )	) ;
		
   
   if ( ($r_int_xTotDias >= 30 && $r_int_xTotDias <= 31) || ($r_Int_Primer >= 30 && $r_Int_Primer <= 40) ) //if n°1
    {
      $r_Fec_tNewDesembolso = $xDesembolso;
      if ( $r_int_xTotDias >= 30 ){
         $r_Int_nPrimerMes = $r_int_xTotDias;

         $r_Fec_DiaUtil = f_f_DisminuirDia( fp_PeriocidadDia($r_Fec_tNewDesembolso, "1") );
		 
	  }else{
         $r_Int_nPrimerMes = $r_Int_Primer;
         $r_Fec_DiaUtil = fp_UltimoDia($xDesembolso);
		 $dia1=f_f_ExtraerDia($xDesembolso);
		 $mes1=f_f_ExtraerMes($xDesembolso);
		 $anio1=f_f_ExtraerAnio($xDesembolso);
         $r_Fec_tNewDesembolso = f_f_AumentarMes($dia1,$mes1,$anio1);
		 
	  }
      $r_Int_tlnDD = 0;
	  $r_int_tlnDA = 0;
	  $r_Dbl_tInteres = 0;
	  $r_Dbl_tfnDesgra = 0;
	  $r_Dbl_tSaldo = 0;
      	  
	  //$g_Arr_TNC_Cli = array ( 	0 => array("tnc_mDeudaIni" => $r_dbl_tDeudaInicial, "tnc_mDeudaFin" => $r_dbl_tDeudaInicial, "tnc_fVenci" => $r_Fec_tNewDesembolso, "tnc_fUtil" => fp_HallarDiaUtil(substr($r_Fec_DiaUtil,6,4), substr($r_Fec_DiaUtil,3,2)), "tnc_mSegInm" => "0"  )	) ;
	  
	  $g_Arr_TNC_Cli[0]['tnc_mDeudaIni'] = $r_dbl_tDeudaInicial;
	  $g_Arr_TNC_Cli[0]['tnc_mDeudaFin'] = $r_dbl_tDeudaInicial;
	  $g_Arr_TNC_Cli[0]['tnc_fVenci'] = $r_Fec_tNewDesembolso;
	  $g_Arr_TNC_Cli[0]['tnc_fUtil'] = fp_HallarDiaUtil(substr($r_Fec_DiaUtil,6,4), substr($r_Fec_DiaUtil,3,2));
	  $g_Arr_TNC_Cli[0]['tnc_mSegInm'] = "0"  ;
      
	}else{
   
      if ( intval($g_Int_PeriodoGra) != 0 ){
         $r_Dbl_tfnDesgra = 0;
		}
		
		$fp_PeriocidadDia = fp_PeriocidadDia($r_Fec_tNewDesembolso, "1");
		$r_Fec_DiaUtil = f_f_DisminuirDia( $fp_PeriocidadDia );
		if($r_int_DiasIncremento == 0){ $tnc_mSegInm = $g_Dbl_SegInm ;}else{ $tnc_mSegInm = 0 ;}
		$tnc_fUtil = fp_HallarDiaUtil(substr($r_Fec_DiaUtil,6,4), substr($r_Fec_DiaUtil,3,2));
		//$g_Arr_TNC_Cli = array ( 	0 => array("tnc_fVenci" => $r_Fec_tNewDesembolso, 
//											   "tnc_fUtil" => $tnc_fUtil, 
//											   "tnc_mSegInm" => $tnc_mSegInm,
//											   "tnc_mInteres" => $r_Dbl_tInteres,
//											   "tnc_mDesgra" => $r_Dbl_tfnDesgra,
//											   "tnc_mTotalReg" => $r_Dbl_tTotalReg  ) ) ;
		
		$g_Arr_TNC_Cli[0]['tnc_fVenci'] = $r_Fec_tNewDesembolso;
		$g_Arr_TNC_Cli[0]['tnc_fUtil'] = $tnc_fUtil;
		$g_Arr_TNC_Cli[0]['tnc_mSegInm'] = $tnc_mSegInm;
		$g_Arr_TNC_Cli[0]['tnc_mInteres'] = $r_Dbl_tInteres;
		$g_Arr_TNC_Cli[0]['tnc_mDesgra'] = $r_Dbl_tfnDesgra;
		$g_Arr_TNC_Cli[0]['tnc_mTotalReg'] = $r_Dbl_tTotalReg;

	
      if ( f_f_RestaFechas($xDesembolso, $r_Fec_tNewDesembolso) < 30 ){
		 $dia1=f_f_ExtraerDia($r_Fec_tNewDesembolso);
		 $mes1=f_f_ExtraerMes($r_Fec_tNewDesembolso);
		 $anio1=f_f_ExtraerAnio($r_Fec_tNewDesembolso);
         $r_Fec_tNewDesembolso = f_f_AumentarDia($dia1,$mes1,$anio1);
         $r_Fec_tNewDesembolso = fp_PeriocidadDia($r_Fec_tNewDesembolso, $xDiaPeriocidad);
         if ( f_f_RestaFechas( $xDesembolso, $r_Fec_tNewDesembolso) > 30 ){
			 $dia1=f_f_ExtraerDia($r_Fec_tNewDesembolso);
			 $mes1=f_f_ExtraerMes($r_Fec_tNewDesembolso);
			 $anio1=f_f_ExtraerAnio($r_Fec_tNewDesembolso);
            $r_Fec_tNewDesembolso = f_f_DisminuirMes($dia1, $mes1, $anio1);
		 }
		 
	  }
	  
	}	//if n°1
   
   
   //'*** Finalizando los datos de la Estructura=0
   
   //$g_Arr_TNC_Cli = array ( 	0 => array("tnc_mDeudaFin" => $r_dbl_tDeudaInicial, 
				//							"tnc_mDeudaIni" => $r_dbl_tDeudaInicial ) ) ;
	$g_Arr_TNC_Cli[0]['tnc_mDeudaFin'] = $r_dbl_tDeudaInicial;
	$g_Arr_TNC_Cli[0]['tnc_mDeudaIni'] = $r_dbl_tDeudaInicial;
    
   if( $r_int_DiasIncremento == 0){
	   $r_Dbl_tMontoCero = $g_Dbl_SegInm;
   }else{
	   $r_Dbl_tMontoCero = 0;
   }
   $r_dbl_TotFac1 = 0;
   $r_Dbl_TotFac2 = 0;
   $r_Dbl_TotFac3 = 0;
   $r_Dbl_tCapital = 0;
   $r_int_tlnDA = 0;
   $r_Dbl_tNewTNC = $xnTNC;
   $r_dbl_RealNewTNC = $xnTNC;
   if ( !empty($g_Str_PrimerVenci) ){
	  $dia1=f_f_ExtraerDia($g_Fec_PrimerVenci);
	 $mes1=f_f_ExtraerMes($g_Fec_PrimerVenci);
	 $anio1=f_f_ExtraerAnio($g_Fec_PrimerVenci);
     $r_Fec_tNewDesembolso = f_f_DisminuirMes( $dia1, $mes1, $anio1 );
   }
   
   
   //'*** Recorre todas las cuotas para establecer los DD, DA y Factores (FactorMensual, FactorJulio, FactorDic y F.Vencimiento)
    for ($i = 1; $i <= intval($g_Int_NroCuotas); $i++) {   
      $r_Dbl_FacJul = 0;
	  $r_Dbl_FacDic = 0;
	  $r_Dbl_FacMes = 0;
	  $r_Int_tlnDD = 0;
      $fdVenci = fp_PeriocidadDia(f_f_AumentarMes2($i, $r_Fec_tNewDesembolso), $xDiaPeriocidad);
      		 
      if ( $g_Int_PeriodoGra < $i || $g_Int_PeriodoGra == 1 ){
         if ( $i == 1 ){
            if ( !empty($g_Str_PrimerVenci) ){
				$f_f_AumentarMes2 = f_f_AumentarMes2( $i, $r_Fec_tNewDesembolso);
				$fp_PeriocidadDia = fp_PeriocidadDia( $f_f_AumentarMes2 , $xDiaPeriocidad);
				$fp_UltimoDia = fp_UltimoDia($r_Fec_tNewDesembolso);
               $r_Int_tlnDD = f_f_RestaFechas( $fp_UltimoDia , $fp_PeriocidadDia ) + $r_int_DiasIncremento;
			}else{
				$f_f_AumentarMes2 = f_f_AumentarMes2($i, $r_Fec_tNewDesembolso);
				$fp_PeriocidadDia = fp_PeriocidadDia( $f_f_AumentarMes2 , $xDiaPeriocidad);
				$fp_UltimoDia = fp_UltimoDia($xDesembolso);
               $r_Int_tlnDD = f_f_RestaFechas( $fp_UltimoDia , $fp_PeriocidadDia ) + $r_int_DiasIncremento;
			}
            if ( $r_Int_nPrimerMes >= 30 ){
               $r_Int_tlnDD = $r_Int_nPrimerMes;
			}
            	$r_int_tlnDA = 0;
				
		 
		 }else{
            if ( $g_Int_PeriodoGra == 0 ){
				$f_f_AumentarMes2_1 = f_f_AumentarMes2($i - 1, $r_Fec_tNewDesembolso);
				$fp_PeriocidadDia_1 = fp_PeriocidadDia( $f_f_AumentarMes2_1 , $xDiaPeriocidad);
				$f_f_AumentarMes2_2 = f_f_AumentarMes2($i, $r_Fec_tNewDesembolso);
				$fp_PeriocidadDia_2 = fp_PeriocidadDia($f_f_AumentarMes2_2, $xDiaPeriocidad);
               $r_Int_tlnDD = f_f_RestaFechas( $fp_PeriocidadDia_1 , $fp_PeriocidadDia_2 ) + $r_int_DiasIncremento;

			}else{
				$f_f_AumentarMes2_1 = f_f_AumentarMes2($i - 1, $r_Fec_tNewDesembolso);
				$fp_PeriocidadDia_1 = fp_PeriocidadDia( $f_f_AumentarMes2_1 , $xDiaPeriocidad);
				$f_f_AumentarMes2_2 = f_f_AumentarMes2($i, $r_Fec_tNewDesembolso);
				$fp_PeriocidadDia_2 = fp_PeriocidadDia($f_f_AumentarMes2_2, $xDiaPeriocidad);
               $r_Int_tlnDD = f_f_RestaFechas( $fp_PeriocidadDia_1 , $fp_PeriocidadDia_2);
			}
		 
		 }
		 
		 //echo "r_Int_tlnDD:		".$r_Int_tlnDD."<br>"; 
		 
         $r_int_tlnDA = $r_int_tlnDA + $r_Int_tlnDD;
         if ( $g_Int_TipoDesgra <= 2 ){
            $r_Dbl_FacMes = number_format( pow ( (1 + $g_Dbl_Desgra) , ($r_int_tlnDA * (-1) ) ) , 15,'.','');
		 }else{
            $r_Dbl_FacMes = number_format( pow( (1 + $g_Dbl_IntFijo) , ($r_int_tlnDA * (-1) ) ) , 15,'.','');
		 }
         $r_Dbl_FacMes = number_format($r_Dbl_FacMes, 10,'.','');
		 	 
		          
         //'*** Calculando factores
         $r_Dbl_FacAux = number_format( pow( (1 + $g_Dbl_IntFijo) , ($r_int_tlnDA * (-1) ) ) , 15,'.','');

		 $mes1=f_f_ExtraerMes($fdVenci);
			switch ( $mes1 ) {
			case 7:		//'Julio
				if ($g_Int_Dobles == 2 || $g_Int_Dobles == 4){
					$r_Dbl_FacJul = $r_Dbl_FacAux;
				}else{
					$r_Dbl_FacJul = 0;
				}
				break;
			
			case 12:	//'Diciembre
				if ( $g_Int_Dobles >= 3 ){
					$r_Dbl_FacDic = $r_Dbl_FacAux;
				}else{
					$r_Dbl_FacDic = 0;
				}
				break;
			}	//switch

         $r_dbl_TotFac1 = $r_dbl_TotFac1 + $r_Dbl_FacMes;
         $r_Dbl_TotFac2 = number_format( $r_Dbl_TotFac2 + $r_Dbl_FacJul, 15,'.','');
         $r_Dbl_TotFac3 = number_format( $r_Dbl_TotFac3 + $r_Dbl_FacDic, 15,'.','');
         $r_int_DiasIncremento = 0;
         $r_Int_nPrimerMes = 0;
		 
	  }
      
	  
      $r_Int_FlatGrat = fp_MarcarGrati($fdVenci , $g_Int_Dobles);
      $g_Arr_TNC_Cli[$i]['tnc_Item'] = $i;
      $g_Arr_TNC_Cli[$i]['tnc_nDD'] = $r_Int_tlnDD;
      $g_Arr_TNC_Cli[$i]['tnc_nDA'] = $r_int_tlnDA;
      $g_Arr_TNC_Cli[$i]['tnc_FactorM'] = $r_Dbl_FacMes;
      $g_Arr_TNC_Cli[$i]['tnc_FactorJ'] = $r_Dbl_FacJul;
      $g_Arr_TNC_Cli[$i]['tnc_FactorD'] = $r_Dbl_FacDic;
      $g_Arr_TNC_Cli[$i]['tnc_fVenci'] = $fdVenci;
      $r_Fec_DiaUtil = f_f_DisminuirDia(fp_PeriocidadDia($r_Fec_tNewDesembolso, "1"));
	  $f_f_ExtraerAnio = f_f_ExtraerAnio($r_Fec_DiaUtil);
	  $f_f_ExtraerMes = f_f_ExtraerMes($r_Fec_DiaUtil);
      $g_Arr_TNC_Cli[$i]['tnc_fUtil'] = fp_HallarDiaUtil($f_f_ExtraerAnio , $f_f_ExtraerMes);
      $g_Arr_TNC_Cli[$i]['tnc_mPortes'] = $g_Dbl_Portes;
      $g_Arr_TNC_Cli[$i]['tnc_Mes'] = f_f_ExtraerMes($fdVenci);
      $g_Arr_TNC_Cli[$i]['tnc_Multi'] = $r_Int_FlatGrat;
	  
	 // $g_Arr_TNC_Cli = array ( 	$i => array("tnc_Item" => $i, "tnc_nDD" => $r_Int_tlnDD, "tnc_nDA" => $r_int_tlnDA, "tnc_FactorM" => $r_Dbl_FacMes, "tnc_FactorJ" => $r_Dbl_FacJul, "tnc_FactorD" => $r_Dbl_FacDic, "tnc_fVenci" => $fdVenci, "tnc_fUtil" => fp_HallarDiaUtil(f_f_ExtraerAnio($r_Fec_DiaUtil), f_f_ExtraerMes($r_Fec_DiaUtil)), "tnc_Mes" => f_f_ExtraerMes($fdVenci), "tnc_Multi" => $r_Int_FlatGrat, "tnc_mPortes" => $g_Dbl_Portes  )	) ;
	  
      //r_Int_nPrimerMes = 0
	  

	}//fin For1

   //'***** Establecer los Datos de la Cuota y Cuotita Con Incremento de la variable Global
   $r_dbl_TotFactor = number_format( $r_dbl_TotFac1 + $r_Dbl_TotFac2 + $r_Dbl_TotFac3, 15,'.','');
   $r_Dbl_tCuotiTa = number_format( ($xnPrestamo + $g_Dbl_MasTnC) / $r_dbl_TotFactor , 15,'.','');
   $r_Dbl_tCuota = ( number_format($r_Dbl_tCuotiTa, 2,'.','')) + $g_Dbl_Portes + $g_Dbl_SegInm; 		//'PERFECTO
   $r_Dbl_tCuota = ( number_format($r_Dbl_tCuota, 3,'.',''));	 //'PERFECTO
   $r_Dbl_tSegInm = number_format($g_Dbl_TotValAse * $g_Dbl_IntInm, 2,'.','');
   

   //'*** Recorrer todas las cuotas y calcular Interes,portes, cuota, Desgra, capital
   $r_bol_Cuota1 = "True"; //' Variable que indica la primera vez que pasa a una cuota
 
	//For2
   for ($i = 1; $i <= intval($g_Int_NroCuotas); $i++) {  
      $r_Int_fMulti = $g_Arr_TNC_Cli[$i]['tnc_Multi'];
      $r_Int_tlnDD = $g_Arr_TNC_Cli[$i]['tnc_nDD'];
      $r_Dbl_tInteres = 0;
      $r_Dbl_tfnDesgra = 0;
      $r_Dbl_tSegInm = 0;
      $r_Dbl_tSubTotal = 0;
      $r_Dbl_tTotalReg = 0;
      $r_Dbl_tPortes = 0;
      $r_Dbl_tCapital = 0;
      $r_Dbl_tSaldoX = 0;
      $g_Arr_TNC_Cli[$i]['tnc_mDeudaIni'] = number_format($r_Dbl_tNewTNC, 2,'.','');
	  

      
      if ( $g_Int_PeriodoGra < $i ){
         $r_Dbl_tPortes = $g_Dbl_Portes;
         $r_Dbl_tSegInm = 0;
         $r_Dbl_tSegInm = $g_Dbl_SegInm;
         $r_Dbl_tSubTotal = ($g_Dbl_Portes + $r_Dbl_tSegInm);
         $r_Dbl_tSaldoX = $r_Dbl_tSaldo;
         $r_Dbl_tInteres = (number_format(( ($r_Dbl_tNewTNC * ( pow( (1 + $g_Dbl_IntFijo) , $r_Int_tlnDD ) )) - $r_Dbl_tNewTNC), 2 ,'.','' ));
		 

         if ( $g_Int_TipoDesgra <= 2 ){
            $r_Dbl_tfnDesgra = ( number_format( ( ($r_Dbl_tNewTNC * ( pow( (1 + $g_Dbl_IntProducto) , $r_Int_tlnDD) )  ) - $r_Dbl_tNewTNC), 2 ,'.',''));
		 
		 }
         if ( $r_Dbl_tSaldo == 0 ){
            if ( $g_Int_PeriodoGra == 0 ){
               //'*** Caso Exepcional Primera Cuota  en donde hay diferencia de Dia[30,31]
			   if ( $r_Int_tlnDD >= 30 && $r_Int_tlnDD <= 31 && $r_bol_Cuota1 == "True" ){
                  //'No se considera el Desgravamen
                  if ( $r_Int_Primer >= 30 ){ //'Cuando esta validad hasta 40 dias en calculo
                     //'r_Dbl_tTotalReg = (r_Dbl_tCuota)  //'Original
                     $r_Dbl_tTotalReg = number_format( $r_Dbl_tCuota * $r_Int_fMulti , 9 ,'.',''); 
				  }else{
                     $r_Dbl_tTotalReg = number_format( $r_Dbl_tCuota - $r_Dbl_tfnDesgra , 9 ,'.','');
				  }
			   }else{
                  $r_Dbl_tTotalReg = number_format( ($r_Int_fMulti * (number_format($r_Dbl_tCuotiTa, 2 ,'.',''))) + ($r_Int_fMulti * $r_Dbl_tSubTotal) + $r_Dbl_tSaldo + $r_Dbl_tSegInmotiTa  , 9 ,'.','');

			   }
			}else{
               $r_Dbl_tTotalReg = number_format( $r_Dbl_tCuota * $r_Int_fMulti , 9 ,'.','');
			}
		 }else{
            if ( $g_Int_PeriodoGra == 0 ){
               if ( !empty($g_Str_PrimerVenci) && $i == 1 ){
                  $r_Dbl_tTotalReg = number_format( $r_Dbl_tInteres + $r_Dbl_tfnDesgra + $r_Dbl_tSubTotal + $r_Dbl_tSaldo , 9 ,'.','');
			   }else{
                  $r_Dbl_tTotalReg = number_format( ($r_Int_fMulti * $r_Dbl_tCuotiTa) + $r_Dbl_tSubTotal + $r_Dbl_tSaldo + $r_Dbl_tSegInmotiTa , 9 ,'.','');
			   }
			}else{
               $r_Dbl_tTotalReg = number_format($r_Int_fMulti * $r_Dbl_tCuota, 9 ,'.','');
			}
		 }
         $g_Arr_TNC_Cli[$i]['tnc_mTotalReg'] = $r_Dbl_tTotalReg - $r_Dbl_tSaldo;
         $r_Dbl_tTotalReg = (number_format($r_Dbl_tTotalReg, 2 ,'.','' ));
		 

         if ( $r_Dbl_tSaldo > 0 && $r_Int_fMulti == 2 ){
            //'*** Caso exepcional Primera Cuota multiplo de 2 con bonificacion
            if ( $g_Int_PeriodoGra == 0 ){
               $r_Dbl_tCapital = number_format(($r_Dbl_tTotalReg - ($r_Dbl_tInteres + $r_Dbl_tInteres0 + $r_Dbl_tfnDesgra + $r_Dbl_tfnDesgra0)), 2 ,'.','');
               $r_Dbl_RealCapital = $r_Dbl_tTotalReg - ($r_Dbl_tInteres + $r_Dbl_tInteres0 + $r_Dbl_tfnDesgra + $r_Dbl_tfnDesgra0);
			}else{
               $r_Dbl_tCapital = number_format(($r_Dbl_tTotalReg - ($r_Dbl_tInteres + $r_Dbl_tSubTotal + $r_Dbl_tfnDesgra)), 2 ,'.','');
               $r_dbl_RealCapital = $r_Dbl_tTotalReg - (($r_Dbl_tInteres) - $r_Dbl_tSubTotal);
			}
		 }else{
			 
            if ( $r_Dbl_tTotalReg < ($r_Dbl_tInteres + $r_Dbl_tInteres0) ){
               if ( $r_Dbl_tTotalReg < ($r_Dbl_tInteres - $r_Dbl_tSubTotal) ){
				   
				   
				   
                  $r_Dbl_tCapital = 0;
			   }else{
                  if ( $g_Int_PeriodoGra == 0 ){
                     $r_Dbl_tCapital = number_format(($r_Dbl_tTotalReg - (($r_Dbl_tInteres)) - $r_Dbl_tSubTotal), 2 ,'.','');
                     $r_dbl_RealCapital = $r_Dbl_tTotalReg - (($r_Dbl_tInteres) - $r_Dbl_tSubTotal);
				  }else{
					  //aqui modificado. aumentado number format
                     //$r_Dbl_tCapital = number_format($r_Dbl_tCuota - ($r_Dbl_tInteres + $r_Dbl_tPortes + $r_Dbl_tfnDesgra + $r_Dbl_tSegInm) , 2 ,'.','');
					 $r_Dbl_tCapital = ($r_Dbl_tCuota - ($r_Dbl_tInteres + $r_Dbl_tPortes + $r_Dbl_tfnDesgra + $r_Dbl_tSegInm) );
                     $r_dbl_RealCapital = $r_Dbl_tCuota - ($r_Dbl_tInteres + $r_Dbl_tPortes + $r_Dbl_tfnDesgra + $r_Dbl_tSegInm);
					 

				  }
                  if ( $r_Dbl_tTotalReg > ($r_Dbl_tCuotiTa + $r_Dbl_tSubTotal + $r_Dbl_tSegInmotiTa) ){
                     $r_Dbl_tCapital = 0;
                     $r_dbl_RealCapital = 0;
				  }else{
                     if ( $r_Dbl_tCapital == 0 ){
                        $r_Dbl_tCapital = number_format(($r_Dbl_tTotalReg - ($r_Dbl_tInteres) - $r_Dbl_tSubTotal), 2 ,'.','');
                        $r_dbl_RealCapital = ($r_Dbl_tTotalReg - ($r_Dbl_tInteres) - $r_Dbl_tSubTotal);
					 }
				  }
			   }
			}else{
               if ( $r_Dbl_tSaldo == 0 ){
                  //'*** Caso exepcional Primera Cuota sin saldo Inicial M
                  if ( $g_Int_PeriodoGra == 0 ){
                     $r_Dbl_tCapital = number_format(($r_Dbl_tTotalReg - (($r_Dbl_tInteres) + $r_Dbl_tInteres0) - $r_Dbl_tSubTotal - $r_Dbl_tfnDesgra), 2 ,'.','');
                     $r_dbl_RealCapital = ($r_Dbl_tTotalReg - (($r_Dbl_tInteres) + $r_Dbl_tInteres0) - $r_Dbl_tSubTotal - $r_Dbl_tfnDesgra);
				  }else{
                     $r_Dbl_tCapital = number_format(($r_Dbl_tTotalReg - (($r_Dbl_tInteres)) - $r_Dbl_tSubTotal - $r_Dbl_tfnDesgra), 2 ,'.','');
                     $r_dbl_RealCapital = ($r_Dbl_tTotalReg - (($r_Dbl_tInteres)) - $r_Dbl_tSubTotal - $r_Dbl_tfnDesgra);
					 

				  }
			   }else{
                  if ( $g_Int_PeriodoGra == 0 ){
                     if ( floatval($r_Dbl_tInteres0) == 0 ){
                        $r_Dbl_tCapital = number_format(($r_Dbl_tTotalReg - (($r_Dbl_tInteres) + $r_Dbl_tInteres0) - $r_Dbl_tfnDesgra), 2 ,'.','');
                        $r_dbl_RealCapital = ($r_Dbl_tTotalReg - (($r_Dbl_tInteres) + $r_Dbl_tInteres0) - $r_Dbl_tfnDesgra);
					 }else{
                        if ( $r_Int_fMulti == 1 ){
                           if ( !empty($g_Str_PrimerVenci) && $i == 1 ){
                               //e modificado, si deseas quitas esta linea y vuelves a la anterior
							  //$r_Dbl_tCapital = number_format( ($r_Dbl_tTotalReg) - ($r_Dbl_tInteres + $r_Dbl_tfnDesgra + $r_Dbl_tSegInm + $r_Dbl_tPortes + $r_Dbl_tSaldo) , 2 ,'.','' );
							  $r_Dbl_tCapital = ( ($r_Dbl_tTotalReg) - ($r_Dbl_tInteres + $r_Dbl_tfnDesgra + $r_Dbl_tSegInm + $r_Dbl_tPortes + $r_Dbl_tSaldo)  );
                              $r_dbl_RealCapital = ($r_Dbl_tTotalReg) - ($r_Dbl_tInteres + $r_Dbl_tfnDesgra + $r_Dbl_tSegInm + $r_Dbl_tPortes + $r_Dbl_tSaldo);
						   }else{
							  //e modificado, si deseas quitas esta linea y vuelves a la anterior
							  //$r_Dbl_tCapital = number_format( ( ($r_Dbl_tCuotiTa) + ($r_Dbl_tSegInm * 2) + $r_Dbl_tPortes) - ($r_Dbl_tInteres + $r_Dbl_tfnDesgra + $r_Dbl_tSegInm + $r_Dbl_tPortes) , 2 ,'.','');
							  $r_Dbl_tCapital = ( ( ($r_Dbl_tCuotiTa) + ($r_Dbl_tSegInm * 2) + $r_Dbl_tPortes) - ($r_Dbl_tInteres + $r_Dbl_tfnDesgra + $r_Dbl_tSegInm + $r_Dbl_tPortes) );
                              $r_dbl_RealCapital = (($r_Dbl_tCuotiTa) + ($r_Dbl_tSegInm * 2) + $r_Dbl_tPortes) - ($r_Dbl_tInteres + $r_Dbl_tfnDesgra + $r_Dbl_tSegInm + $r_Dbl_tPortes);
						   }
						}else{
                           //$r_Dbl_tCapital = ($r_Dbl_tTotalReg) - ($r_Dbl_tInteres + $r_Dbl_tInteres0);
						   //e modificado, si deseas quitas esta linea y vuelves a la anterior
						   //$r_Dbl_tCapital = number_format( ($r_Dbl_tTotalReg) - ($r_Dbl_tInteres + $r_Dbl_tInteres0) , 2 ,'.','');
						   $r_Dbl_tCapital = ( ($r_Dbl_tTotalReg) - ($r_Dbl_tInteres + $r_Dbl_tInteres0) );
                           $r_dbl_RealCapital = ($r_Dbl_tTotalReg) - ($r_Dbl_tInteres + $r_Dbl_tInteres0);
						}
					 }
                     if ( empty($g_Str_PrimerVenci) ){
                        $r_Dbl_tTotalReg = $r_Dbl_tCapital + $r_Dbl_tInteres + $r_Dbl_tfnDesgra + $r_Dbl_tSegInm + $r_Dbl_tPortes + $r_Dbl_tSaldo;
					 }
				  }else{
                     $r_Dbl_tCapital = number_format(($r_Dbl_tTotalReg - (($r_Dbl_tInteres) + ($r_Dbl_tfnDesgra + $r_Dbl_tPortes + $r_Dbl_tSegInm))), 2 ,'.','');
                     $r_dbl_RealCapital = ($r_Dbl_tTotalReg - (($r_Dbl_tInteres) + ($r_Dbl_tfnDesgra + $r_Dbl_tPortes + $r_Dbl_tSegInm)));
				  }
			   }
			}
		 }
         
         if ( floatval($r_Dbl_tCapital) < 0 ){
            $r_Dbl_tCapital = 0;
            $r_dbl_RealCapital = 0;
            $r_Dbl_tTotalReg = ($r_Dbl_tInteres) + ($r_Dbl_tfnDesgra) + ($r_Dbl_tPortes) + ($r_Dbl_tSegInm);
		 }
		 
		 //Log
		 if ( empty($r_dbl_RealCapital) ){
            $r_dbl_RealCapital = 0;
		}

         $r_Dbl_tNewTNC = (number_format($r_Dbl_tNewTNC - $r_Dbl_tCapital, 2 ,'.',''));
         $r_dbl_RealNewTNC = ($r_dbl_RealNewTNC - $r_dbl_RealCapital);
         $r_Dbl_tSaldo = 0;
         $r_Dbl_tSegInmotiTa = 0;
         $r_Dbl_tInteres0 = 0;
         $r_bol_Cuota1 = "False";
		 		 

	  } //if ( $g_Int_PeriodoGra < $i ){
      
      $g_Arr_TNC_Cli[$i]['tnc_mInteres'] = $r_Dbl_tInteres;
      $g_Arr_TNC_Cli[$i]['tnc_mDesgra'] = $r_Dbl_tfnDesgra;
      $g_Arr_TNC_Cli[$i]['tnc_mSegInm'] = $r_Dbl_tSegInm;
      $g_Arr_TNC_Cli[$i]['tnc_mPortes'] = $r_Dbl_tPortes;
      $g_Arr_TNC_Cli[$i]['tnc_mCapital'] = $r_Dbl_tCapital;
      $g_Arr_TNC_Cli[$i]['tnc_mCuota'] = $r_Dbl_tTotalReg;
      $g_Arr_TNC_Cli[$i]['tnc_mDeudaFin'] = $r_Dbl_tNewTNC;
	  //$g_Arr_TNC_Cli[$i][tnc_mDeudaIni] = ($r_Dbl_tNewTNC);
	  
	  
   }	//For
   
   
   //'*** Calcular el Sobrante de la Ultima Cuota para la Siguiente iteracion
   $r_dbl_Sobrante = $g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mDeudaFin'] ;

   if ( $g_Int_TipoDesgra <= 2 ){
      //$r_dbl_ReAjuste = $r_dbl_Sobrante * (1 + $g_Dbl_Desgra) ^ -$r_int_tlnDA ;
	  $valor1 = ( (1 + $g_Dbl_Desgra));
	  
	  //$r_dbl_ReAjuste = number_format( $r_dbl_Sobrante * pow( $valor1 , -$r_int_tlnDA ) , 15 ,'.','');
	  $r_dbl_ReAjuste = ( $r_dbl_Sobrante * pow( $valor1 , -$r_int_tlnDA ) );
   }else{
	  $valor1 = ((1 + $g_Dbl_IntFijo));
	  
      //$r_dbl_ReAjuste = number_format( $r_dbl_Sobrante * pow( $valor1 , -$r_int_tlnDA  ) , 15 ,'.','');
	  $r_dbl_ReAjuste = ( $r_dbl_Sobrante * pow( $valor1 , -$r_int_tlnDA  ) );
   }



   if ( $g_Int_PasoAjuste < $g_Int_TopeAjuste ){
      //'Importante para el TNC Cofide
      //'No descontar en la ultima Vuelta
      //'Ese Valor queda pendiente para el TNC Cofide
      $g_Dbl_MontoSobrante = $r_dbl_ReAjuste;
	  
      if ( $r_dbl_ReAjuste <= 0 ){
         $r_dbl_ReAjuste = $r_dbl_ReAjuste * (-1);
         //$g_Dbl_NewPrestamo = number_format( $g_Dbl_NewPrestamo - $r_dbl_ReAjuste , 15 ,'.','');
		 $g_Dbl_NewPrestamo = ( $g_Dbl_NewPrestamo - $r_dbl_ReAjuste );
	  }else{
         //$g_Dbl_NewPrestamo = number_format( $g_Dbl_NewPrestamo + $r_dbl_ReAjuste , 15 ,'.','');
		 $g_Dbl_NewPrestamo = ( $g_Dbl_NewPrestamo + $r_dbl_ReAjuste );
	  }
	  
   }

	$_SESSION["g_Arr_TNC_Cli"] = $g_Arr_TNC_Cli;

	return $g_Dbl_NewPrestamo;

}
//fin pp_Cli_2GenerarTNC
//***********************************************************
//***********************************************************



















//*****************************************************************************
function pp_AjustarLimiteTNC($g_Int_NroCuotas,$g_Int_PeriodoGra){
   $g_Arr_TNC_Cli = $_SESSION["g_Arr_TNC_Cli"];
   //$g_Dbl_MontoSobrante = $g_Arr_TNC_Cli[$g_Int_NroCuotas-1][tnc_mDeudaFin];
   $g_Dbl_MontoSobrante = $g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mDeudaFin'];

   switch ( $g_Dbl_MontoSobrante ) {
		case 0:	break;		
		case $g_Dbl_MontoSobrante < 0 :	
			$g_Dbl_MontoSobrante = $g_Dbl_MontoSobrante * (-1);
			 $g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mCapital'] = $g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mCapital'] - $g_Dbl_MontoSobrante;
			 $g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mCuota'] = $g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mCuota'] - $g_Dbl_MontoSobrante;
			 $g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mDeudaFin'] = 0;
			break;
		case $g_Dbl_MontoSobrante > 0 :	
			$g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mCapital'] = $g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mCapital'] + $g_Dbl_MontoSobrante;
			 $g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mCuota'] = $g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mCuota'] + $g_Dbl_MontoSobrante;
			 $g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mDeudaFin'] = 0;
			break;
		}	//switch
   
   if ( $g_Int_PeriodoGra == 0 ){
      $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mCapital'] = $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mCapital'] + $g_Arr_TNC_Cli[0]['tnc_mCapital'];
      $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mInteres'] = $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mInteres'] + $g_Arr_TNC_Cli[0]['tnc_mInteres'];
      //$g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mInteres'] = $g_Arr_TNC_Cli[0]['tnc_mInteres'];
      
      $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mDesgra'] = $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mDesgra'] + $g_Arr_TNC_Cli[0]['tnc_mDesgra'];
      $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mSegInm'] = $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mSegInm'] + $g_Arr_TNC_Cli[0]['tnc_mSegInm'];
      $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mPortes'] = $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mPortes'] + $g_Arr_TNC_Cli[0]['tnc_mPortes'];
      $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mCuota'] = $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mCapital'] + $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mInteres'] + $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mDesgra'] + $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mSegInm'] + $g_Arr_TNC_Cli[1 + $g_Int_PeriodoGra]['tnc_mPortes'];
   
   //echo "g_Arr_TNC_Cli[0][tnc_mInteres]  :".$g_Arr_TNC_Cli[0][tnc_mInteres]."<br><br>";
   }
   
   $_SESSION["g_Arr_TNC_Cli"] = $g_Arr_TNC_Cli;

}



function pp_Cof_1CargarPG($xGracia , $xnPrestamo , $xDesembolso , $xDiaPeriocidad , $g_Dbl_TasaFMVDia, $g_Dbl_TasaFMVAdi){

//'*** Declarar Variables Tipo Array

$l_Arr_PerGracia = $_SESSION["l_Arr_PerGracia"];

   //'****************************************************************************************
   //'****************************************************************************************
   //'*** Cuerpo del Procedimiento
   $r_Int_pnDD = 0;
   $r_Fec_NewDesembolso = fp_UltimoDia($xDesembolso);
   $r_Fec_NewDesembolso = f_f_AumentarDia2(31, $r_Fec_NewDesembolso);
      
   //'*** Iniciar Valores en la Estructura en item=0
   $l_Arr_PerGracia[0]['PeriodoGra_Item'] = 0;
   $l_Arr_PerGracia[0]['PeriodoGra_Venci'] = $xDesembolso;
   $l_Arr_PerGracia[0]['PeriodoGra_Dias'] = $r_Int_pnDD;
   $l_Arr_PerGracia[0]['PeriodoGra_DeudaIni'] = 0;
   $l_Arr_PerGracia[0]['PeriodoGra_Capital'] = 0;
   $l_Arr_PerGracia[0]['PeriodoGra_Interes'] = 0;
   $l_Arr_PerGracia[0]['PeriodoGra_Comision'] = 0;
   $l_Arr_PerGracia[0]['PeriodoGra_Cuota'] = 0;
   $l_Arr_PerGracia[0]['PeriodoGra_DeudaFin'] = number_format($xnPrestamo, 2, '.', '');
   $r_Dbl_pnNewTNC = $xnPrestamo;

   
   //'*** Calcular el vencimiento del Primer Mes: $r_Fec_NewDesembolso
   //'*** Generar el cronograma para calcular el nuevo monto del prestamos
   for($i = 1; $i <= $xGracia; $i++){
      //'*** Calcular Montos para cada registro
      $r_Str_pdVenci = f_f_AumentarMes2($i, $xDesembolso);
      $r_Str_pdVenci = fp_HallarDiaUtil(f_f_ExtraerAnio($r_Str_pdVenci), f_f_ExtraerMes($r_Str_pdVenci));
      $l_Arr_PerGracia[$i]['PeriodoGra_Venci'] = $r_Str_pdVenci;
      $r_Int_pnDD = f_f_RestaFechas( $l_Arr_PerGracia[$i - 1]['PeriodoGra_Venci'], $r_Str_pdVenci);
      $r_Dbl_pnComision = number_format( ($r_Dbl_pnNewTNC * pow( (1 + $g_Dbl_TasaFMVDia) , $r_Int_pnDD) - $r_Dbl_pnNewTNC), 2, '.', '');
      $r_Dbl_pnInteres = number_format( ($r_Dbl_pnNewTNC * pow( (1 + $g_Dbl_TasaFMVAdi) , $r_Int_pnDD) - $r_Dbl_pnNewTNC), 2, '.', '');
      
      $r_Dbl_pnTotalReg = ($r_Dbl_pnInteres) + ($r_Dbl_pnComision);
      $r_Dbl_pnNewTNC = $r_Dbl_pnNewTNC + $r_Dbl_pnTotalReg;
	     
   }
   
   $g_Dbl_MasTnC = $r_Dbl_pnNewTNC - $xnPrestamo;
   
   $_SESSION["l_Arr_PerGracia"] = $l_Arr_PerGracia;
      
   return $g_Dbl_MasTnC;
}





//*****************************************************************************
function pp_Cof_2GenerarTNC( $xnPrestamo , $xnTNC , $xDesembolso , $xDiaPeriocidad , $g_Int_NroCuotas, $g_Dbl_TasaFMVAdi, $g_Dbl_TasaFMVDia, $g_Dbl_TasaFMVSumaX, $g_Int_PeriodoGra, $g_Int_Dobles, $g_Int_PasoAjuste , $g_Int_TopeAjuste)
{
//   '******* ReDefinir esta Matriz TNC
//   ReDim g_Arr_TNC_Cof(g_Int_NroCuotas)
   
   //'****************************************************************************************
   $g_Arr_TNC_Cli = $_SESSION["g_Arr_TNC_Cli"];
   $r_Fec_Primer = fp_PrimerVenci(2, $xDesembolso, $xDiaPeriocidad);
   $r_Int_Primer = f_f_RestaFechas( $xDesembolso, $r_Fec_Primer);
   $g_Arr_TNC_Cof[0]['tnc_Item'] = 0;
   $g_Arr_TNC_Cof[0]['tnc_fVenci'] = $xDesembolso;

   $r_Fec_apoyo = fp_UltimoDia($xDesembolso);
   $g_Arr_TNC_Cof[0]['tnc_fUtil'] = fp_UltimoDia($xDesembolso);
   $g_Arr_TNC_Cof[0]['tnc_nDA'] = f_f_RestaFechas( $g_Arr_TNC_Cof[0]['tnc_fVenci'] , $g_Arr_TNC_Cof[0]['tnc_fUtil']);
   
   $g_Arr_TNC_Cof[0]['tnc_mDeudaIni'] = $xnTNC;
   $r_dbl_TotFactor = 0;
   $r_Int_tlnDD = 0;
   $r_Int_tlnDA2 = 0;
   $r_int_tlnDA = 0;
      
   for($i = 1; $i <= $g_Int_NroCuotas; $i++){
      $g_Arr_TNC_Cof[$i]['tnc_Item'] = $i;
      $fdVenci = f_f_AumentarMes2( $i, $xDesembolso);
      $g_Arr_TNC_Cof[$i]['tnc_fVenci'] = $fdVenci;
      $g_Arr_TNC_Cof[$i]['tnc_fUtil'] = fp_HallarDiaUtil(f_f_ExtraerAnio($fdVenci), f_f_ExtraerMes($fdVenci));
      //'r_Int_FlatGrat = 1

      $r_Dbl_FacJul = 0;
	  $r_Dbl_FacDic = 0;
	  $r_Dbl_FacMes = 0;
	  $r_int_tlnDA = 0;
	  
      if ( $i > $g_Int_PeriodoGra )
	  {
		  
         $g_Arr_TNC_Cof[$i]['tnc_fVenci'] = fp_HallarDiaUtil(f_f_ExtraerAnio($fdVenci), f_f_ExtraerMes($fdVenci));
         $r_Int_tlnDA2 = f_f_RestaFechas( $g_Arr_TNC_Cof[$i - 1]['tnc_fUtil'], $g_Arr_TNC_Cof[$i]['tnc_fUtil'] );
		 

         if ( ($i - $g_Int_PeriodoGra) == 1 ){
            if (  $g_Int_PeriodoGra == 0 ){
               $r_int_tlnDA = f_f_RestaFechas( $xDesembolso, $g_Arr_TNC_Cof[$i]['tnc_fUtil']);
			}else{
               $r_int_tlnDA = f_f_RestaFechas( $g_Arr_TNC_Cof[$i - 1]['tnc_fUtil'] , $g_Arr_TNC_Cof[$i]['tnc_fUtil'] );
			}
		 }else{
            $r_int_tlnDA = f_f_RestaFechas( $g_Arr_TNC_Cof[$i - 1]['tnc_fUtil'] , $g_Arr_TNC_Cof[$i]['tnc_fUtil'] );
		 }

         $r_Int_tlnDD = $r_Int_tlnDD + $r_Int_tlnDA2;
         $r_Dbl_FacMes = (number_format(( pow( (1 + $g_Dbl_TasaFMVSumaX) , ($r_Int_tlnDD * (-1) ) ) ), 15, '.', '') );	 //' Fomateado con 15 decimales
         

		//'Calculando factores
         //if ( $i == 100 || $i == 200 ){
//           // 'Debug.Print "Detener"
//           // 'Debug.Print 1 + g_Dbl_TasaFMVSumaX
//		 }
         
         $r_Dbl_FacAux = pow( (1 + $g_Dbl_TasaFMVAdi) , ($r_int_tlnDA * (-1) ) );

		switch ( intval(f_f_ExtraerMes($fdVenci)) ) {	
		case 7 :	//'Julio
			 if($g_Int_Dobles == 2 || $g_Int_Dobles == 4 ){
				 $r_Dbl_FacJul = $r_Dbl_FacAux;
			 }else{
				 $r_Dbl_FacJul =0;				 
			 }
			break;
		case 12 :	//'Diciembre
			 if($g_Int_Dobles >= 3){
				 $r_Dbl_FacDic = $r_Dbl_FacAux;
			 }else{
				 $r_Dbl_FacDic = 0;
			 }
			break;
		}	//switch
	  
	  
	  }
      
      $g_Arr_TNC_Cof[$i]['tnc_nDA'] = $r_Int_tlnDA2;
      $g_Arr_TNC_Cof[$i]['tnc_nDD'] = $r_Int_tlnDA2;
      $r_dbl_TotFactor = $r_dbl_TotFactor + ($r_Dbl_FacMes + $r_Dbl_FacJul + $r_Dbl_FacDic);
      $g_Arr_TNC_Cof[$i]['tnc_FactorM'] = $r_Dbl_FacMes;
      $g_Arr_TNC_Cof[$i]['tnc_mDeudaIni'] = $g_Arr_TNC_Cli[0]['tnc_mDeudaIni'];
      $r_Int_FlatGrat = fp_MarcarGrati(f_f_AumentarMes2( 1, $g_Arr_TNC_Cof[$i]['tnc_fUtil']), $g_Int_Dobles);
      $g_Arr_TNC_Cof[$i]['tnc_Multi'] = $r_Int_FlatGrat;

   }
   
   $r_Int_tlnDD2 = $r_Int_tlnDD; 		//'apoyandome del  r_Int_tlnDD
   $r_dbl_TotFactor = number_format($r_dbl_TotFactor, 11, '.', '') ; 	//' Fomateado con 11 decimales
   $r_Dbl_tCuota = $xnPrestamo / $r_dbl_TotFactor;
   $r_Dbl_tCuota = number_format($r_Dbl_tCuota, 2, '.', ''); 	//'PERFECTO
   $g_Arr_TNC_Cof[0]['tnc_nDA'] = f_f_RestaFechas( $g_Arr_TNC_Cof[0]['tnc_fVenci'], $g_Arr_TNC_Cof[0]['tnc_fUtil'] );
   
   //'Interes de la Cuota 0M
   $r_dbl_tInteres0 = (number_format((number_format(($g_Arr_TNC_Cof[0]['tnc_mDeudaIni'] * (pow((1 + $g_Dbl_TasaFMVAdi) , $g_Arr_TNC_Cof[0]['tnc_nDA'] )) - $g_Arr_TNC_Cof[0]['tnc_mDeudaIni']), 2, '.', '') * ( (pow( (1 + $g_Dbl_TasaFMVAdi) , $g_Arr_TNC_Cof[1]['tnc_nDA'] )) )), 2, '.', ''));
   $r_Dbl_tComision0 = (number_format((number_format(($g_Arr_TNC_Cof[0]['tnc_mDeudaIni'] * (pow( (1 + $g_Dbl_TasaFMVDia) , $g_Arr_TNC_Cof[0]['tnc_nDA'] )) - $g_Arr_TNC_Cof[0]['tnc_mDeudaIni'] ), 2, '.', '') * ( (pow( (1 + $g_Dbl_TasaFMVDia) , $g_Arr_TNC_Cof[1]['tnc_nDA'] )) ) ), 2, '.', ''));
   
   //'***** Recorrer todas las cuotas y calcular Interes,portes, cuota, Desgra, capital
   $r_Dbl_tNewTNC = $xnTNC;
   
   
   $r_bol_Cuota1 = "True";
   for($i = 1; $i <= $g_Int_NroCuotas; $i++){
      //'r_Int_fMulti = $g_Arr_TNC_Cli[I][tnc_Multi
//      'r_Int_FlatGrat = fp_MarcarGrati($g_Arr_TNC_Cof[I][tnc_fUtil)
      $r_Int_fMulti = ( fp_MarcarGrati($g_Arr_TNC_Cof[$i]['tnc_fUtil'], $g_Int_Dobles) );
      $r_int_tlnDA = $g_Arr_TNC_Cof[$i]['tnc_nDA'];
      $r_Int_tlnDD = $g_Arr_TNC_Cof[$i]['tnc_nDD'];
      $g_Arr_TNC_Cof[$i]['tnc_mDeudaIni'] = (number_format($r_Dbl_tNewTNC, 2, '.', '' ));
      $r_dbl_tInteres = 0;
	  $r_Dbl_tComision = 0;
	  $r_Dbl_tTotalReg = 0;
	  $r_Dbl_tCapital = 0;
      
      if ( $i > $g_Int_PeriodoGra ){
         $r_dbl_tInteres = (number_format(($r_Dbl_tNewTNC *  (pow( (1 + $g_Dbl_TasaFMVAdi) , $r_int_tlnDA )) - $r_Dbl_tNewTNC) + $r_dbl_tInteres0, 2, '.', '' ));
         $r_Dbl_tComision = (number_format(($r_Dbl_tNewTNC * (pow( (1 + $g_Dbl_TasaFMVDia) , $r_Int_tlnDD )) - $r_Dbl_tNewTNC) + $r_Dbl_tComision0, 2, '.', '' ));
         $r_Dbl_tTotalReg = ($r_Dbl_tCuota * $r_Int_fMulti) + $r_dbl_tInteres0 + $r_Dbl_tComision0 ;		//' con bonificacion
         $r_Dbl_tCapital = $r_Dbl_tTotalReg - ($r_dbl_tInteres + $r_Dbl_tComision);
         if ( $r_Dbl_tCapital < 0 ){
            $r_Dbl_tCapital = 0;
            $r_Dbl_tTotalReg = $r_dbl_tInteres + $r_Dbl_tComision;
		 }
         $r_Dbl_tNewTNC = $r_Dbl_tNewTNC - $r_Dbl_tCapital;
         $r_dbl_tInteres0 = 0;
         $r_Dbl_tComision0 = 0;
	  }
      
      $g_Arr_TNC_Cof[$i]['tnc_mCapital'] = (number_format($r_Dbl_tCapital, 2, '.', '' ));
      $g_Arr_TNC_Cof[$i]['tnc_mInteres'] = (number_format($r_dbl_tInteres, 2, '.', '' ));
      $g_Arr_TNC_Cof[$i]['tnc_mComision'] = (number_format($r_Dbl_tComision, 2, '.', '' ));
      $g_Arr_TNC_Cof[$i]['tnc_mCuota'] = (number_format($r_Dbl_tTotalReg, 2, '.', '' ));
      $g_Arr_TNC_Cof[$i]['tnc_mDeudaFin'] = (number_format($r_Dbl_tNewTNC, 2, '.', '' ));
	  
   }
            
   $r_Dbl_MontoSobrante = $g_Arr_TNC_Cof[$g_Int_NroCuotas]['tnc_mDeudaFin'];
   $r_dbl_ReAjuste = $r_Dbl_MontoSobrante * pow ( (1 + ($g_Dbl_TasaFMVAdi + $g_Dbl_TasaFMVDia)) , -$r_Int_tlnDD2 );
   
   if(empty($g_Dbl_NewPrestamo)){$g_Dbl_NewPrestamo =0;}//Error_log
   
   if ( $g_Int_PasoAjuste < $g_Int_TopeAjuste ){
      //'Importantee para el TNC Cofide
      //'No descontar en la ultima Vuelta
      //'Ese Valor queda pendiente para el TNC Cofide
      $g_Dbl_MontoSobrante = $r_dbl_ReAjuste;
      if ( $r_dbl_ReAjuste <= 0 ){
         $r_dbl_ReAjuste = $r_dbl_ReAjuste * (-1);
         $g_Dbl_NewPrestamo = $g_Dbl_NewPrestamo - $r_dbl_ReAjuste;
	  }else{
         $g_Dbl_NewPrestamo = $g_Dbl_NewPrestamo + $r_dbl_ReAjuste;
	  }
   }
   
   
   $_SESSION["g_Arr_TNC_Cof"] = $g_Arr_TNC_Cof;
   
   return $g_Dbl_NewPrestamo;
   
}






//*****************************************************************************
function fp_CargarTNC_Cli($g_Int_NroCuotas){

   $g_Arr_TNC_Cli = $_SESSION["g_Arr_TNC_Cli"];
   
	$tot_tnc_mCapital=0;
	$tot_tnc_mInteres=0;
	$tot_tnc_mDesgra=0;
	$tot_tnc_mSegInm=0;
	$tot_tnc_mPortes=0;
	$tot_tnc_cuotat=0;
   
   //'*** Recorriendo la Estructura y cargando la Matriz
   for($i = 1; $i <= $g_Int_NroCuotas; $i++){
      $r_Arr_DatosTNC_Cli[$i][1] = str_repeat("0",3 - strlen($g_Arr_TNC_Cli[$i]['tnc_Item'])).$g_Arr_TNC_Cli[$i]['tnc_Item'];		//CUOTA
      $r_Arr_DatosTNC_Cli[$i][2] = $g_Arr_TNC_Cli[$i]['tnc_fVenci'];		//F. VCTO    
      $r_Arr_DatosTNC_Cli[$i][3] = number_format($g_Arr_TNC_Cli[$i]['tnc_mCapital'], 2 ,'.',',');		//CAPITAL
      $r_Arr_DatosTNC_Cli[$i][4] = number_format($g_Arr_TNC_Cli[$i]['tnc_mInteres'], 2 ,'.',',');	//INTERÉS
      $r_Arr_DatosTNC_Cli[$i][5] = number_format($g_Arr_TNC_Cli[$i]['tnc_mDesgra'], 2 ,'.',',');		//SEG. PREST.
      $r_Arr_DatosTNC_Cli[$i][6] = number_format($g_Arr_TNC_Cli[$i]['tnc_mSegInm'], 2 ,'.',',');		//SEG. VIVIENDA
      $r_Arr_DatosTNC_Cli[$i][7] = number_format($g_Arr_TNC_Cli[$i]['tnc_mPortes'], 2 ,'.',',');		//PORTES
      //$r_Arr_DatosTNC_Cli[$i][8] = number_format($g_Arr_TNC_Cli[$i][tnc_mCapital] + $g_Arr_TNC_Cli[$i][tnc_mInteres] + $g_Arr_TNC_Cli[$i][tnc_mDesgra] + $g_Arr_TNC_Cli[$i][tnc_mSegInm] + $g_Arr_TNC_Cli[$i][tnc_mPortes] , 2 ,'.','');						//TOTAL CUOTA
	  $r_Arr_DatosTNC_Cli[$i][8] = $g_Arr_TNC_Cli[$i]['tnc_mCapital'] + $g_Arr_TNC_Cli[$i]['tnc_mInteres'] + $g_Arr_TNC_Cli[$i]['tnc_mDesgra'] + $g_Arr_TNC_Cli[$i]['tnc_mSegInm'] + $g_Arr_TNC_Cli[$i]['tnc_mPortes'] ;						//TOTAL CUOTA
	  $r_Arr_DatosTNC_Cli[$i][9] = $g_Arr_TNC_Cli[$i]['tnc_mDeudaIni'];	
      $r_Arr_DatosTNC_Cli[$i][10] = number_format($g_Arr_TNC_Cli[$i]['tnc_mDeudaFin'], 2 ,'.',',');	//SALDO CAPITAL
      $r_Arr_DatosTNC_Cli[$i][11] = $g_Arr_TNC_Cli[$i]['tnc_nDA'];
      $r_Arr_DatosTNC_Cli[$i][12] = $g_Arr_TNC_Cli[$i]['tnc_nDD'];
	  
	  $tot_tnc_mCapital=$tot_tnc_mCapital+ $g_Arr_TNC_Cli[$i]['tnc_mCapital'];
	  $tot_tnc_mInteres=$tot_tnc_mInteres+ $g_Arr_TNC_Cli[$i]['tnc_mInteres'];
	  $tot_tnc_mDesgra=$tot_tnc_mDesgra+ $g_Arr_TNC_Cli[$i]['tnc_mDesgra'];
	  $tot_tnc_mSegInm=$tot_tnc_mSegInm+ $g_Arr_TNC_Cli[$i]['tnc_mSegInm'];
	  $tot_tnc_mPortes=$tot_tnc_mPortes+ $g_Arr_TNC_Cli[$i]['tnc_mPortes'];
	  $tot_tnc_cuotat=$tot_tnc_cuotat+ $g_Arr_TNC_Cli[$i]['tnc_mCapital'] + $g_Arr_TNC_Cli[$i]['tnc_mInteres'] + $g_Arr_TNC_Cli[$i]['tnc_mDesgra'] + $g_Arr_TNC_Cli[$i]['tnc_mSegInm'] + $g_Arr_TNC_Cli[$i]['tnc_mPortes'];
	  
	  	$r_Arr_DatosTNC_Cli[$i][13] = 0;
		$r_Arr_DatosTNC_Cli[$i][14] = 0;
		$r_Arr_DatosTNC_Cli[$i][15] = 0;
		$r_Arr_DatosTNC_Cli[$i][16] = 0;
		$r_Arr_DatosTNC_Cli[$i][17] = 0;
		$r_Arr_DatosTNC_Cli[$i][18] = 0;
		
   }
   
   	$r_Arr_DatosTNC_Cli[$g_Int_NroCuotas][13] = number_format($tot_tnc_mCapital, 2 ,'.',',');
    $r_Arr_DatosTNC_Cli[$g_Int_NroCuotas][14] = number_format($tot_tnc_mInteres, 2 ,'.',',');
	$r_Arr_DatosTNC_Cli[$g_Int_NroCuotas][15] = number_format($tot_tnc_mDesgra, 2 ,'.',',');
    $r_Arr_DatosTNC_Cli[$g_Int_NroCuotas][16] = number_format($tot_tnc_mSegInm, 2 ,'.',',');
	$r_Arr_DatosTNC_Cli[$g_Int_NroCuotas][17] = number_format($tot_tnc_mPortes, 2 ,'.',',');
	$r_Arr_DatosTNC_Cli[$g_Int_NroCuotas][18] = number_format($tot_tnc_cuotat, 2 ,'.',',');

   
   //return $r_Arr_DatosTNC_Cli;
   $_SESSION["p_Arr_xmTNC_Cli"] = $r_Arr_DatosTNC_Cli;
   
   
}





//*****************************************************************************
function fp_CargarTNC_Cof($g_Int_NroCuotas){
   
   $g_Arr_TNC_Cof = $_SESSION["g_Arr_TNC_Cof"];
   
   //'*** Recorriendo la Estructura y cargando la Matriz
   for($i = 1; $i <= $g_Int_NroCuotas; $i++){
      $r_Arr_DatosTNC_Cof[$i][1] = $g_Arr_TNC_Cof[$i]['tnc_Item'];
      $r_Arr_DatosTNC_Cof[$i][2] = $g_Arr_TNC_Cof[$i]['tnc_fVenci'];
      $r_Arr_DatosTNC_Cof[$i][3] = $g_Arr_TNC_Cof[$i]['tnc_mDeudaIni'];
      $r_Arr_DatosTNC_Cof[$i][4] = $g_Arr_TNC_Cof[$i]['tnc_mCapital'];
      $r_Arr_DatosTNC_Cof[$i][5] = $g_Arr_TNC_Cof[$i]['tnc_mInteres'];
      $r_Arr_DatosTNC_Cof[$i][6] = $g_Arr_TNC_Cof[$i]['tnc_mComision'];
      $r_Arr_DatosTNC_Cof[$i][7] = $g_Arr_TNC_Cof[$i]['tnc_mCuota'];
      $r_Arr_DatosTNC_Cof[$i][8] = $g_Arr_TNC_Cof[$i]['tnc_mDeudaFin'];
	  
   }
   
   //return $r_Arr_DatosTNC_Cof;
   $_SESSION["p_Arr_xmTNC_Cof"] = $r_Arr_DatosTNC_Cof;
}








//*****************************************************************************
function pp_Cof_3GenerarTC( $p_Dbl_xTc , $p_Dbl_xNewTc , $p_fec_xDesembolso , $p_Int_xDiaPeriocidad, $g_Dbl_TasaFMVDia, $g_Dbl_TasaFMVAdi , $g_Int_NroCuotas, $g_Int_PeriodoGra , $g_Dbl_TasaFMV, $g_Dbl_NewtC, $g_Dbl_TasaFMVSumaX)
{

	$g_Arr_TNC_Cli = $_SESSION["g_Arr_TNC_Cli"];
	$g_Arr_TNC_Cof = $_SESSION["g_Arr_TNC_Cof"];
	
   //'*** Calcular Nuevo Numero de cuotas cada 6 meses para el TC
   $g_Dbl_CuotasTC = ($g_Int_NroCuotas - $g_Int_PeriodoGra) / 6;
        
   if ( ($g_Dbl_CuotasTC - intval($g_Dbl_CuotasTC)) > 0 ){
      $g_Dbl_CuotasTC = intval($g_Dbl_CuotasTC) + 1;
   }

   
   //'****************************************************************************************
   //'****************************************************************************************
   //'******* Cuerpo del Procedimiento
   $r_Dbl_tcNewTC = $p_Dbl_xTc;
   $r_Fec_tcNewDesembolso = fp_UltimoDia($p_fec_xDesembolso);
   $r_Int_tcVeDD = f_f_RestaFechas( $p_fec_xDesembolso, $r_Fec_tcNewDesembolso);
   $r_Int_tcRestoDDv = $r_Int_tcVeDD;
   
   $r_Int_r_Int_nPrimerMes = 0;
   $r_Int_r_Int_xTotDias = f_f_RestaFechas( $p_fec_xDesembolso, $r_Fec_tcNewDesembolso) + $p_Int_xDiaPeriocidad;
   //'******* Calcular el vencimiento del Primer Mes: r_Fec_NewDesembolso
   
   //'******* Iniciar Valores en la Estructura en item=0
   $g_Arr_TC_Cli[0]['tc_Item'] = 0;
   $g_Arr_TC_Cli[0]['tc_vDD'] = 0;
   $g_Arr_TC_Cli[0]['tc_vDA'] = 0;
   $g_Arr_TC_Cli[0]['tc_vFactor'] = 0;
   $g_Arr_TC_Cli[0]['tc_uDD'] = 0;
   $g_Arr_TC_Cli[0]['tc_uDA'] = 0;
   $g_Arr_TC_Cli[0]['tc_uFactor'] = 0;
   //$g_Arr_TC_Cli[0][tc_DeudaIni] = (number_format($p_Dbl_xTc, "#######.00"))
   $g_Arr_TC_Cli[0]['tc_DeudaIni'] = (number_format($p_Dbl_xTc, 2, '.', ''));
   $g_Arr_TC_Cli[0]['tc_Capital'] = 0;
   $g_Arr_TC_Cli[0]['tc_Interes'] = 0;
   $g_Arr_TC_Cli[0]['tc_Cuota'] = 0;
   //$g_Arr_TC_Cli[0][tc_DeudaFin] = (number_format($p_Dbl_xTc, "#######.00"))
   $g_Arr_TC_Cli[0]['tc_DeudaFin'] = (number_format($p_Dbl_xTc, 2, '.', ''));

   //'*** Iniciar Valores en la Estructura en item=0 para las Fechas
   if ( $g_Int_PeriodoGra == 0 ){
      $g_Arr_TC_Cli[0]['tc_Venci'] = $p_fec_xDesembolso;
      $g_Arr_TC_Cli[0]['tc_Util'] = $p_fec_xDesembolso;
   }else{
      //'r_Fec_tcNewDesembolso = DateAdd("m", g_Int_PeriodoGra - 1, r_Fec_tcNewDesembolso)
      $r_Fec_tcNewDesembolso = $g_Arr_TNC_Cli[$g_Int_PeriodoGra]['tnc_fVenci'];
      $g_Arr_TC_Cli[0]['tc_Venci'] = $r_Fec_tcNewDesembolso;
      $g_Arr_TC_Cli[0]['tc_Util'] = $r_Fec_tcNewDesembolso;
   }
 

 
   //'*** Recorrer la estructura y colocar las fechas vencimiento y VenciUtil
   for($i = 1; $i <= $g_Dbl_CuotasTC; $i++){
      $r_Int_NewCuota = ($i * 6) + $g_Int_PeriodoGra;
      if ( $r_Int_NewCuota > $g_Int_NroCuotas ){
         $r_Int_NewCuota = $g_Int_NroCuotas;
	  }
      
      $r_Fec_tcVenci = $g_Arr_TNC_Cli[$r_Int_NewCuota]['tnc_fVenci'];
      $r_Fec_tcUtil = $g_Arr_TNC_Cof[$r_Int_NewCuota]['tnc_fVenci'];
      $g_Arr_TC_Cli[$i]['tc_Item'] = $i;
      $g_Arr_TC_Cli[$i]['tc_Venci'] = $r_Fec_tcVenci;
      $g_Arr_TC_Cli[$i]['tc_Util'] = $r_Fec_tcUtil;
   }
   
   
   
   
   $r_Dbl_tcVeFac = 0;
   $r_Int_tcVeDD = 0;
   $r_Int_tcVeDA = 0;
   $r_Int_tcUtilDA = 0;
   $r_Dbl_tcUTilFacTot = 0;
   
   //'****** Restar fechas actual con anterior FECHAS DE VENCIMIENTO y Util para calcular DD,DA y Factor
   //if ( $g_Int_PasoAjuste >= 14 ){
//      Debug.Print "00"
//   }
   
   if(empty($r_Dbl_tcVeFacTot)){$r_Dbl_tcVeFacTot = 0;}//En caso llegue vacio - Error_log
   
   for($i = 1; $i <= $g_Dbl_CuotasTC; $i++){
      //'Recojo de Datos TC-Cliente
      $r_Int_tcVeDD = f_f_RestaFechas( $g_Arr_TC_Cli[$i - 1]['tc_Venci'], $g_Arr_TC_Cli[$i]['tc_Venci']);
      $r_Int_tcVeDA = $r_Int_tcVeDA + $r_Int_tcVeDD;
      $r_Dbl_tcVeFac = pow ( (1 + $g_Dbl_TasaFMV) , ($r_Int_tcVeDA * (-1) ) );	
      $r_Dbl_tcVeFacTot = $r_Dbl_tcVeFacTot + $r_Dbl_tcVeFac;
      $g_Arr_TC_Cli[$i]['tc_vDD'] = $r_Int_tcVeDD;
      $g_Arr_TC_Cli[$i]['tc_vDA'] = $r_Int_tcVeDA;
      $g_Arr_TC_Cli[$i]['tc_vFactor'] = number_format($r_Dbl_tcVeFac, 2, '.', '');
      $r_Int_tcRestoDDv = 0;

 
      //'Recojo de Datos TC-Cofide
      $r_Int_tcUtilDD = f_f_RestaFechas( $g_Arr_TC_Cli[$i - 1]['tc_Util'], $g_Arr_TC_Cli[$i]['tc_Util'] );
      $r_Int_tcUtilDA = $r_Int_tcUtilDA + $r_Int_tcUtilDD;
      $r_Dbl_tcUTilFac = pow( (1 + $g_Dbl_TasaFMVSumaX) , ($r_Int_tcUtilDA * (-1) ) );
      $r_Dbl_tcUTilFac = (number_format($r_Dbl_tcUTilFac, 15, '.', ''));
      $r_Dbl_tcUTilFacTot = $r_Dbl_tcUTilFacTot + $r_Dbl_tcUTilFac;
      $g_Arr_TC_Cli[$i]['tc_uDD'] = $r_Int_tcUtilDD;
      $g_Arr_TC_Cli[$i]['tc_uDA'] = $r_Int_tcUtilDA;
      $g_Arr_TC_Cli[$i]['tc_uFactor'] = number_format($r_Dbl_tcUTilFac, 2, '.', '');
      $r_Int_tcRestoDDv = 0;
	  	  
   }
   
   

   $r_Dbl_tcCuota = $p_Dbl_xNewTc / $r_Dbl_tcUTilFacTot;
   $r_Dbl_tcCuota = (number_format($r_Dbl_tcCuota, 2, '.', ''));
   $r_Dbl_tcNewTC = $p_Dbl_xNewTc;
   $r_Dbl_tcNewTC = $p_Dbl_xTc;


   //'****** Calcular los Montos del TC para solo perpetuar el CAPITAL
   for($i = 1; $i <= $g_Dbl_CuotasTC; $i++){
      $r_Int_tcUtilDD = $g_Arr_TC_Cli[$i]['tc_uDD'];
      $r_Dbl_tcComision = (number_format(($r_Dbl_tcNewTC * pow( (1 + $g_Dbl_TasaFMVDia) , ($r_Int_tcUtilDD) ) - $r_Dbl_tcNewTC), 2, '.', ''));
      $r_Dbl_tcInteres = (number_format(($r_Dbl_tcNewTC * pow( (1 + $g_Dbl_TasaFMVAdi) , ($r_Int_tcUtilDD) ) - $r_Dbl_tcNewTC), 2, '.', ''));
      $g_Arr_TC_Cli[$i]['tc_DeudaIni'] = $r_Dbl_tcNewTC;

   
      if ( ($r_Dbl_tcInteres + $r_Dbl_tcComision) > $r_Dbl_tcCuota ){
         $r_Dbl_tcCapital = 0;
	  }else{
         $r_Dbl_tcCapital = $r_Dbl_tcCuota - ($r_Dbl_tcInteres + $r_Dbl_tcComision);
		 
	  }
	  
      $g_Arr_TC_Cli[$i]['tc_Interes'] = number_format($r_Dbl_tcInteres, 2, '.', '');
      $g_Arr_TC_Cli[$i]['tc_Comision'] = number_format($r_Dbl_tcComision, 2, '.', '');
      $g_Arr_TC_Cli[$i]['tc_Cuota'] = number_format($r_Dbl_tcCuota, 2, '.', '');
      $g_Arr_TC_Cli[$i]['tc_Capital'] = number_format($r_Dbl_tcCapital, 2, '.', '');
      $r_Dbl_tcNewTC = number_format($r_Dbl_tcNewTC - $g_Arr_TC_Cli[$i]['tc_Capital'], 6, '.', '');
      $g_Arr_TC_Cli[$i]['tc_DeudaFin'] = $r_Dbl_tcNewTC;

   }
   
   //'***** Calculamos el Sobrante y Reajuste para el siguiente TC
   $r_dbl_Sobrante = $g_Arr_TC_Cli[$g_Dbl_CuotasTC]['tc_DeudaFin'];
   
   //'r_Dbl_ReAjuste = r_Dbl_Sobrante * (1 + (g_Dbl_TasaFMVSuma)) ^ -r_Int_tcVeDA
   $r_dbl_ReAjuste = $r_dbl_Sobrante *  pow( (1 + ($g_Dbl_TasaFMVSumaX)) , -$r_Int_tcVeDA ) ;
   $g_Dbl_MontoSobrante = $r_dbl_ReAjuste;
   if ( $r_dbl_ReAjuste <= 0 ){
      $r_dbl_ReAjuste = $r_dbl_ReAjuste * (-1);
      $g_Dbl_NewtC = (number_format($g_Dbl_NewtC, 2, '.', '')) - $r_dbl_ReAjuste; 	//'-
   }else{
      $g_Dbl_NewtC = (number_format($g_Dbl_NewtC, 2, '.', '')) + $r_dbl_ReAjuste; 	//'+
   }
   
   $_SESSION["g_Arr_TC_Cli"] = $g_Arr_TC_Cli;
   $_SESSION["g_Dbl_CuotasTC"] = $g_Dbl_CuotasTC;
   
   return $g_Dbl_NewtC;

}




//*****************************************************************************

function pp_AjustarLimiteTc($p_Dbl_xTc , $xNewTc , $xDesembolso , $xDiaPeriocidad ){
//'*** Declarar Variables Locales

   $g_Arr_TC_Cli = $_SESSION["g_Arr_TC_Cli"];
   $g_Dbl_CuotasTC = $_SESSION["g_Dbl_CuotasTC"];
   $r_Dbl_tcaNewTC = $p_Dbl_xTc;
   $r_Fec_TCaDesembolso = fp_UltimoDia($xDesembolso);
   $r_Dbl_tcaDD = f_f_RestaFechas( $xDesembolso, $r_Fec_TCaDesembolso);
   $r_Dbl_tcaResto = $r_Dbl_tcaDD;
   $r_Dbl_tcaDA = 0;
   $r_Dbl_tcaFacTot = 0;
   
   //'*** Hallar el sobrante de la deuda final y se ajusta el ultimo registro de la estructura TC
   $r_Dbl_nCachito = $g_Arr_TC_Cli[$g_Dbl_CuotasTC]['tc_DeudaFin'];

   switch ( $r_Dbl_nCachito ) {	
   		case 0:	break;
		case $r_Dbl_nCachito < 0 :	
			 $r_Dbl_nCachito = $r_Dbl_nCachito * (-1);
			 $g_Arr_TC_Cli[$g_Dbl_CuotasTC]['tc_Capital'] = $g_Arr_TC_Cli[$g_Dbl_CuotasTC]['tc_Capital'] - $r_Dbl_nCachito;
			 $g_Arr_TC_Cli[$g_Dbl_CuotasTC]['tc_Cuota'] = $g_Arr_TC_Cli[$g_Dbl_CuotasTC]['tc_Cuota'] - $r_Dbl_nCachito;
			 $g_Arr_TC_Cli[$g_Dbl_CuotasTC]['tc_DeudaFin'] = 0;
			break;
		case $r_Dbl_nCachito > 0 :	
			 $g_Arr_TC_Cli[$g_Dbl_CuotasTC]['tc_Capital'] = $g_Arr_TC_Cli[$g_Dbl_CuotasTC]['tc_Capital'] + $r_Dbl_nCachito;
			 $g_Arr_TC_Cli[$g_Dbl_CuotasTC]['tc_Cuota'] = $g_Arr_TC_Cli[$g_Dbl_CuotasTC]['tc_Cuota'] + $r_Dbl_nCachito;
			 $g_Arr_TC_Cli[$g_Dbl_CuotasTC]['tc_DeudaFin'] = 0;
			break;
		}	//switch
		
		$_SESSION["g_Arr_TC_Cli"] = $g_Arr_TC_Cli;
}







//*****************************************************************************

function fp_CargarTC($xxTipo){
	
	
	$g_Arr_TC_Cli = $_SESSION["g_Arr_TC_Cli"];
	$g_Dbl_CuotasTC = $_SESSION["g_Dbl_CuotasTC"];
	
	$tot_tc_Cuota=0;
	$tot_tc_Capital=0;
	$tot_tc_Interes=0;

   //'*** Recorriendo la Estructura y cargando la Matriz
   if ( $g_Dbl_CuotasTC > 0 ){
	  for($i = 0; $i <= $g_Dbl_CuotasTC; $i++){
         $r_Arr_DatosTC_Cli[$i][1] = str_repeat("0",3 - strlen($g_Arr_TC_Cli[$i]['tc_Item'])).$g_Arr_TC_Cli[$i]['tc_Item'];		 
         if($xxTipo == 2){
			 $r_Arr_DatosTC_Cli[$i][2] = $g_Arr_TC_Cli[$i]['tc_Util'];
		 }else{
			 $r_Arr_DatosTC_Cli[$i][2] = $g_Arr_TC_Cli[$i]['tc_Venci'];
		 }
         $r_Arr_DatosTC_Cli[$i][3] = number_format($g_Arr_TC_Cli[$i]['tc_DeudaIni'], 2, '.', ',');
         $r_Arr_DatosTC_Cli[$i][4] = number_format($g_Arr_TC_Cli[$i]['tc_Capital'], 2, '.', ',');
         $r_Arr_DatosTC_Cli[$i][5] = number_format($g_Arr_TC_Cli[$i]['tc_Interes'], 2, '.', ',');
         $r_Arr_DatosTC_Cli[$i][6] = number_format($g_Arr_TC_Cli[$i]['tc_Comision'], 2, '.', ',');
         $r_Arr_DatosTC_Cli[$i][7] = number_format($g_Arr_TC_Cli[$i]['tc_Cuota'], 2, '.', ',');
         $r_Arr_DatosTC_Cli[$i][8] = number_format($g_Arr_TC_Cli[$i]['tc_DeudaFin'], 2, '.', ',');

		$tot_tc_Cuota=$tot_tc_Cuota+ $g_Arr_TC_Cli[$i]['tc_Cuota'];
		$tot_tc_Capital=$tot_tc_Capital+ $g_Arr_TC_Cli[$i]['tc_Capital'];
		$tot_tc_Interes=$tot_tc_Interes+ $g_Arr_TC_Cli[$i]['tc_Interes'];
		
		$r_Arr_DatosTC_Cli[$i][9] = 0;
        $r_Arr_DatosTC_Cli[$i][10] = 0;
        $r_Arr_DatosTC_Cli[$i][11] = 0;
		 
   	}
		 $r_Arr_DatosTC_Cli[$g_Dbl_CuotasTC][9] = number_format($tot_tc_Interes, 2, '.', ',');
         $r_Arr_DatosTC_Cli[$g_Dbl_CuotasTC][10] = number_format($tot_tc_Capital, 2, '.', ',');
         $r_Arr_DatosTC_Cli[$g_Dbl_CuotasTC][11] = number_format($tot_tc_Cuota, 2, '.', ',');
   }
   //return $r_Arr_DatosTC_Cli;
   $_SESSION["p_Arr_xmTC_Cli"] = $r_Arr_DatosTC_Cli;
}





//*****************************************************************************

function pp_Cli_3GenerarTC($p_Dbl_xTc , $xNewTc , $xDesembolso , $xDiaPeriocidad , $g_Dbl_IntFijo){

   $g_Arr_TC_Cli = $_SESSION["g_Arr_TC_Cli"];
   $g_Dbl_CuotasTC = $_SESSION["g_Dbl_CuotasTC"];
   $r_Dbl_tcaNewTC = $p_Dbl_xTc;
   $r_Fec_TCaDesembolso = fp_UltimoDia($xDesembolso);
   $r_Dbl_tcaDD = f_f_RestaFechas( $xDesembolso, $r_Fec_TCaDesembolso);
   $r_Dbl_tcaResto = $r_Dbl_tcaDD;
   $r_Dbl_tcaDA = 0;
   $r_Dbl_tcaFacTot = 0;

   //'****************************************************************************************
   //'****************************************************************************************
   //'*** Cuerpo del Procedimiento

//echo "g_Dbl_CuotasTC	: "."{$g_Dbl_CuotasTC}<br>";

	//'*** Recorriendo la Estructura TC para calcular el interes pero el CAPITAL SE MANTIENE SE RECALCULA LO DEMAS
   for($i = 1; $i <= $g_Dbl_CuotasTC; $i++){
       $r_Dbl_tcaDD = $g_Arr_TC_Cli[$i]['tc_vDD'];
       $r_Dbl_tcaInteres = number_format(($r_Dbl_tcaNewTC * ( pow( (1 + $g_Dbl_IntFijo) , $r_Dbl_tcaDD) ) - $r_Dbl_tcaNewTC), 2, '.', '' );
       $g_Arr_TC_Cli[$i]['tc_DeudaIni'] = number_format($r_Dbl_tcaNewTC, 2, '.', '' );
       $g_Arr_TC_Cli[$i]['tc_Comision'] = 0;
       $r_Dbl_tcaNewTC = $r_Dbl_tcaNewTC - $g_Arr_TC_Cli[$i]['tc_Capital'];
       $g_Arr_TC_Cli[$i]['tc_Interes'] = number_format($r_Dbl_tcaInteres, 2, '.', '' );
       $g_Arr_TC_Cli[$i]['tc_Cuota'] = number_format($g_Arr_TC_Cli[$i]['tc_Capital'] + $g_Arr_TC_Cli[$i]['tc_Interes'], 2, '.', '' );
       $g_Arr_TC_Cli[$i]['tc_DeudaFin'] = number_format($r_Dbl_tcaNewTC, 2, '.', '' );
	   
   }
   
   $_SESSION["g_Arr_TC_Cli"] = $g_Arr_TC_Cli;
   
}








//*****************************************************************************

//'*** Funcion para el marcar cada mes de Bonificacion o Grati
function fp_MarcarGrati( $p_Fec_xFecha , $g_Int_Dobles ){
   $fp_MarcarGrati = 1;
   $p_Fec_xFecha=f_f_ExtraerMes($p_Fec_xFecha);

   switch ( $g_Int_Dobles ) {
    case 1:
        $fp_MarcarGrati = 1;
        break;
    case 2:
		if($p_Fec_xFecha == 7){
			$fp_MarcarGrati = 2;
		}else{
			$fp_MarcarGrati = 1;
		}
        break;
	case 3:
		if($p_Fec_xFecha == 12){
			$fp_MarcarGrati = 2;
		}else{
			$fp_MarcarGrati = 1;
		}
        break;
    case 4:
			switch ( $p_Fec_xFecha ) {
			case 7:
				$fp_MarcarGrati = 2;
				break;
			case 12:
				$fp_MarcarGrati = 2;
				break;
			}
        break;
	}
	
	return $fp_MarcarGrati;
}





//******************************************************
//'*** Funcion para el devolver el primer vencimiento
function fp_PrimerVenci($xTipo , $p_Fec_xFecha , $p_Int_xDia )
{   

	$dia1=f_f_ExtraerDia($p_Fec_xFecha);
	$mes1=f_f_ExtraerMes($p_Fec_xFecha);
	$anio1=f_f_ExtraerAnio($p_Fec_xFecha);
	$p_Fec_xFechax = f_f_AumentarMes($dia1,$mes1,$anio1);
	$r_Str_Fecha = ($p_Int_xDia)."/".(substr($p_Fec_xFechax,3,2))."/".(substr($p_Fec_xFechax,6,4));
		
	if ( $xTipo == 1 ){
		if ( f_f_RestaFechas($p_Fec_xFecha, $r_Str_Fecha) < 30 ){
			$dia1=f_f_ExtraerDia($p_Fec_xFechax);
			$mes1=f_f_ExtraerMes($p_Fec_xFechax);
			$anio1=f_f_ExtraerAnio($p_Fec_xFechax);
		   $p_Fec_xFechax = f_f_AumentarMes($dia1,$mes1,$anio1);
		   $r_Str_Fecha = ($p_Int_xDia)."/".(substr($p_Fec_xFechax,3,2))."/".(substr($p_Fec_xFechax,6,4));
		   
		}
	else
		if ( f_f_RestaFechas($p_Fec_xFecha, $r_Str_Fecha) <= 30 ){
			$dia1=f_f_ExtraerDia($p_Fec_xFechax);
			$mes1=f_f_ExtraerMes($p_Fec_xFechax);
			$anio1=f_f_ExtraerAnio($p_Fec_xFechax);
		   $p_Fec_xFechax = f_f_AumentarMes($dia1,$mes1,$anio1);
		   $r_Str_Fecha = ($p_Int_xDia)."/".(substr($p_Fec_xFechax,3,2))."/".(substr($p_Fec_xFechax,6,4));
		   
		}
	}
	
	
	if ( !empty($g_Str_PrimerVenci) ){
	   $r_Str_Fecha = $g_Str_PrimerVenci;
	}
	if ( $xTipo == 2 ){
		$dia1=f_f_ExtraerDia($p_Fec_xFecha);
		$mes1=f_f_ExtraerMes($p_Fec_xFecha);
		$anio1=f_f_ExtraerAnio($p_Fec_xFecha);
	   $r_Str_Fecha = f_f_AumentarMes($dia1,$mes1,$anio1);
	   $r_Str_Fecha = fp_HallarDiaUtil(substr($r_Str_Fecha,6,4), substr($r_Str_Fecha,3,2));
	}
	
	//$fp_PrimerVenci = $r_Str_Fecha;
	return $r_Str_Fecha;
}

//'*** Funcion para Hallar ultimo dia Util de cada mes segun la matriz $g_Arr_VenFechas
function fp_HallarDiaUtil( $p_Int_xPeriodo , $p_Int_xMes )
{
	$fp_HallarDiaUtil = "01/01/2000";
	//$g_Arr_VenFechas=pp_CargarEstructuraVenci();
	$g_Arr_VenFechas = $_SESSION["g_Arr_VenFechas"];
	
	for ($r_Int_Salto = 1; $r_Int_Salto <= 420; $r_Int_Salto++) { 
	
       if ( $g_Arr_VenFechas[$r_Int_Salto]['vPeriodo'] == $p_Int_xPeriodo && $g_Arr_VenFechas[$r_Int_Salto]['vMes'] == $p_Int_xMes ){
           $fp_HallarDiaUtil = $g_Arr_VenFechas[$r_Int_Salto]['vFecha'];
		   
           $r_Int_Salto = 420;
		   
	   }
	}
   
   return $fp_HallarDiaUtil;
}


//*** Funcion para Devolver el Ultimo Dia de cualquier Mes
function fp_UltimoDia( $p_Fec_xFecha ) 
{
	$p_Fec = intval( substr($p_Fec_xFecha,3,2) );
	//$p_Fec =	$p_Fec + 1 ;
	switch ( $p_Fec ) {
    case ($p_Fec==1 || $p_Fec==3 || $p_Fec==5 || $p_Fec==7 || $p_Fec==8 || $p_Fec==10 || $p_Fec==12 ):
        $r_Int_Dia = 31;
        break;
    case 2:
		$p_Fec2 = intval(substr($p_Fec_xFecha,6,4)) - 2008 ;
        if ( $p_Fec2 % 4 == 0 ){
               //Año bisiesto 2008, 2012,2016, 2020...etc
               $r_Int_Dia = 29;
		}else{
               $r_Int_Dia = 28;
		}
        break;
    case ($p_Fec==4 || $p_Fec==6 || $p_Fec==9 || $p_Fec==11):
        $r_Int_Dia = 30 ;
        break;
	}
   
   if (strlen($p_Fec)==1){
		$p_Fec= "0".$p_Fec ;
   }
   
   $fp_UltimoDia = $r_Int_Dia."/".$p_Fec."/".substr($p_Fec_xFecha,6,4) ;

   return $fp_UltimoDia;
}

//*************************************************
function f_f_AumentarDia($dia,$mes,$ano){
    $ultimo_dia=$dia+1;
	
	//while (checkdate($mes,$ultimo_dia + 1,$ano)){
	
	$mes = intval( $mes );
		switch ( $mes ) {
		case ($mes==1 || $mes==3 || $mes==5 || $mes==7 || $mes==8 || $mes==10 || $mes==12 ):
			if ($ultimo_dia > 31){
				$ultimo_dia=1;
				$mes++;
			}
			break;
		case 2:
			$ano2 = intval($ano - 2008 );
			if ($ultimo_dia > 28){
				if ( $ano2 % 4 == 0 ){
					   //Año bisiesto 2008, 2012,2016, 2020...etc
					   $ultimo_dia = 29;
				}else{
					   $ultimo_dia = 1;
					   $mes++;
				}
			}
			break;
		case ($mes==4 || $mes==6 || $mes==9 || $mes==11):
			if ($ultimo_dia > 30){
				$ultimo_dia=1;
				$mes++;
			}
			break;
		}	//switch
		
		if ($mes == 13){
				$mes=1;
				$ano++;
		}
			
		//$ultimo_dia++;
		
	//}	//while
	
	if (strlen($mes)==1){
		$mes= "0".$mes ;
   }
   if (strlen($ultimo_dia)==1){
		$ultimo_dia= "0".$ultimo_dia ;
   }
   
	$fechanueva=$ultimo_dia."/".$mes."/".$ano;
	
    return $fechanueva;
}




//*************************************************
//DateAdd("D", 31,
function f_f_AumentarDia2($i,$fechanueva){
	
	$dia=f_f_ExtraerDia($fechanueva);
	$mes=f_f_ExtraerMes($fechanueva);
	$anio=f_f_ExtraerAnio($fechanueva);
	$ano=$anio;
    $ultimo_dia=$dia+$i;
	
	
	do{
		
	$mes = intval( $mes );
		switch ( $mes ) {
		case ($mes==1 || $mes==3 || $mes==5 || $mes==7 || $mes==8 || $mes==10 || $mes==12 ):
			if ($ultimo_dia > 31){
				$ultimo_dia=$ultimo_dia - 31;
				$mes++;
				
			}
			break;
		case 2:
			$ano2 = intval($ano - 2008 );
			if ($ultimo_dia > 28){
				if ( $ano2 % 4 == 0 ){
					   //Año bisiesto 2008, 2012,2016, 2020...etc
					   $ultimo_dia=$ultimo_dia - 29;
				}else{
					   $ultimo_dia=$ultimo_dia - 28;					   
				}
				$mes++;
			}
			break;
		case ($mes==4 || $mes==6 || $mes==9 || $mes==11):
			if ($ultimo_dia > 30){
				$ultimo_dia=$ultimo_dia - 30;
				$mes++;
			}
			break;
		}	//switch
		
		if ($mes == 13){
				$mes=1;
				$ano++;
		}
	
	
	}while ( !checkdate($mes,$ultimo_dia,$ano) );
		
	
	if (strlen($mes)==1){
		$mes= "0".$mes ;
   }
   if (strlen($ultimo_dia)==1){
		$ultimo_dia= "0".$ultimo_dia ;
   }
   
	$fechanueva=$ultimo_dia."/".$mes."/".$ano;
	
    return $fechanueva;
}






//*******************************************
//DateAdd("d", -1,
function f_f_DisminuirDia($fechanueva){
	
	$dia=f_f_ExtraerDia($fechanueva);
	$mes=f_f_ExtraerMes($fechanueva);
	$anio=f_f_ExtraerAnio($fechanueva);
	$ano=$anio;
    $ultimo_dia=$dia-1;
	
	if ($ultimo_dia == 0){
		$ultimo_dia=31;
		$mes--;
			if ($mes == 0){
			$mes=12;
			$ano--;
			}
		}

	$mes = intval( $mes );
		switch ( $mes ) {
		case ($mes==1 || $mes==3 || $mes==5 || $mes==7 || $mes==8 || $mes==10 || $mes==12 ):
			if ($ultimo_dia > 31){
				$ultimo_dia=31;
				
			}
			break;
		case 2:
			$ano2 = intval($ano - 2008 );
			if ($ultimo_dia > 28){
				if ( $ano2 % 4 == 0 ){
					   //Año bisiesto 2008, 2012,2016, 2020...etc
					   $ultimo_dia = 29;
				}else{
					   $ultimo_dia = 28;
					   
				}
			}
			break;
		case ($mes==4 || $mes==6 || $mes==9 || $mes==11):
			if ($ultimo_dia > 30){
				$ultimo_dia=30;
				
			}
			break;
		}	//switch

	
	if (strlen($mes)==1){
		$mes= "0".$mes ;
   }
   if (strlen($ultimo_dia)==1){
		$ultimo_dia= "0".$ultimo_dia ;
   }
   
	$fechanueva=$ultimo_dia."/".$mes."/".$ano;
	
    return $fechanueva;
}

		  

function fp_PeriocidadDia($p_Fec_xFecha , $p_Int_xDia){
	
	if (strlen($p_Int_xDia)==1){
		$p_Int_xDia= "0".$p_Int_xDia ;
   }
	
   $r_Str_Fecha = $p_Int_xDia."/".substr($p_Fec_xFecha,3,7);
   return $r_Str_Fecha;
}


function f_f_DisminuirMes($dia,$mes,$ano){
    
	$mes=intval($mes-1);
	if ($mes == 0){
		$mes=12;
		$ano--;
	}
	
		switch ( $mes ) {
		case 2:
			$ano2 = intval($ano - 2008 );
			if ($dia > 28){
				if ( $ano2 % 4 == 0 ){
					   //Año bisiesto 2008, 2012,2016, 2020...etc
					   $dia = 29;
				}else{
					   $dia = 28;
				}
			}
			break;
		case ($mes==4 || $mes==6 || $mes==9 || $mes==11):
			if ($dia > 30){
				$dia=30;
			}
			break;
		}	
	
	if (strlen($mes)==1){
		$mes= "0".$mes ;
   }
   if (strlen($dia)==1){
		$dia= "0".$dia ;
   }
   
	$fechanueva=$dia."/".$mes."/".$ano;
	
    return $fechanueva;
}

//DateAdd("M", I,
function f_f_AumentarMes($dia,$mes,$ano){
    
	$mes=intval($mes+1);
	if ($mes == 13){
		$mes=1;
		$ano++;
	}
	
		switch ( $mes ) {
		case ($mes==1 || $mes==3 || $mes==5 || $mes==7 || $mes==8 || $mes==10 || $mes==12 ):
			if ($dia > 31){
				$dia=31;
			}
			break;
		case 2:
			$ano2 = intval($ano - 2008 );
			if ($dia > 28){
				if ( $ano2 % 4 == 0 ){
					   //Año bisiesto 2008, 2012,2016, 2020...etc
					   $dia = 29;
				}else{
					   $dia = 28;
				}
			}
			break;
		case ($mes==4 || $mes==6 || $mes==9 || $mes==11):
			if ($dia > 30){
				$dia=30;
			}
			break;
		}	
	
	if (strlen($mes)==1){
		$mes= "0".$mes ;
   }
   if (strlen($dia)==1){
		$dia= "0".$dia ;
   }
   
	$fechanueva=$dia."/".$mes."/".$ano;
	
    return $fechanueva;
}


//DateAdd("M", I,
function f_f_AumentarMes2($i,$fechanueva){
    
	$dia=f_f_ExtraerDia($fechanueva);
	$ultimo_dia=$dia;
	$mes=f_f_ExtraerMes($fechanueva);
	$anio=f_f_ExtraerAnio($fechanueva);
	$mes=intval($mes+$i);
	$residuo=$mes%12;
	$cociente=floor($mes/12);
	$ano=$anio;
	
	if ($residuo == 0){
		$mes=12;	
		$ano=$anio+$cociente-1;
	}else{
		$mes=$residuo;	
		$ano=$anio+$cociente;
	}
	
		switch ( $mes ) {
		case ($mes==1 || $mes==3 || $mes==5 || $mes==7 || $mes==8 || $mes==10 || $mes==12 ):
			if ($ultimo_dia > 31){
				$ultimo_dia=31;
			}
			break;
		case 2:
			$ano2 = intval($ano - 2008 );
			if ($dia > 28){
				if ( $ano2 % 4 == 0 ){
					   //Año bisiesto 2008, 2012,2016, 2020...etc
					   $dia = 29;
				}else{
					   $dia = 28;
				}
			}
			break;
		case ($mes==4 || $mes==6 || $mes==9 || $mes==11):
			if ($dia > 30){
				$dia=30;
			}
			break;
		}	
	
	if (strlen($mes)==1){
		$mes= "0".$mes ;
   }
   if (strlen($dia)==1){
		$dia= "0".$dia ;
   }
   
	$fechanueva=$dia."/".$mes."/".$ano;
	
    return $fechanueva;
}



//*********************************************************
/*Descripción:		Funcion que resta dos Fechas
	  Autor:			DE LA SERNA
	  Fecha Creación:	08/02/2013
	  Fecha Actual.:	08/02/2013

    */  

//DateDiff("D",
function f_f_RestaFechas($p_FecIni, $p_FecFin) {

	
	$anio2=f_f_ExtraerAnio($p_FecFin);
	
	$suma = 0;
	$dia= 0;
	
	if($anio2 < 2037 ){
			$p_FecIni=str_replace("/","",$p_FecIni);
		     $p_FecFin=str_replace("/","",$p_FecFin);
		     ereg( "([0-9]{1,2})([0-9]{1,2})([0-9]{2,4})", $p_FecIni, $r_FecIni);
		     ereg( "([0-9]{1,2})([0-9]{1,2})([0-9]{2,4})", $p_FecFin, $r_FecFin);
		     $r_date1=mktime(0,0,0,$r_FecIni[2], $r_FecIni[1], $r_FecIni[3]);
		     $r_date2=mktime(0,0,0,$r_FecFin[2], $r_FecFin[1], $r_FecFin[3]);
		     $suma = round(($r_date2 - $r_date1) / (60 * 60 * 24));
			 
	}else{
		
		$dia1=f_f_ExtraerDia($p_FecIni);
		$mes=f_f_ExtraerMes($p_FecIni);
		//$anio1=f_f_ExtraerAnio($p_FecIni);
		$dia2=f_f_ExtraerDia($p_FecFin);
		 
		
		switch ( $mes ) {
			case ($mes==1 || $mes==3 || $mes==5 || $mes==7 || $mes==8 || $mes==10 || $mes==12 ):
					$dia=31-$dia1;
				break;
			case 2:
				$aniobi = intval($anio2 - 2008 );

					if ( $aniobi % 4 == 0 ){  //Año bisiesto 2008, 2012,2016, 2020...etc
						   $dia = 29-$dia1;
					}else{
						   $dia = 28-$dia1;
					}

				break;
			case ($mes==4 || $mes==6 || $mes==9 || $mes==11):
					$dia=30-$dia1;
				break;
			}	
			
				$suma = $dia + $dia2;
	
	
	
	}
	
	return $suma;
 
 }
 
 
 
 
 //------------  Extraer Dia   --------------
 //   Descripci?n:     Funcion que extrae el dia
 function f_f_ExtraerDia($variable){
        $r_ex_dia=substr($variable,0,2);
    return $r_ex_dia;	
}
//------------  Extraer Mes   --------------
 //   Descripci?n:     Funcion que extrae el Mes
function f_f_ExtraerMes($variable){
    $r_ex_mes=substr($variable,3,2); 
    return ($r_ex_mes);
}
//------------  Extraer Año   --------------
 //   Descripci?n:     Funcion que extrae el año
function f_f_ExtraerAnio($variable){
       $r_ex_anio=substr($variable,6,4);  
	    return $r_ex_anio;
}

//*********************************************************
 
 


function gf_Cronog_CosEfe($p_TasInt , $p_MtoPre ){
  
   $p_Arr_xmTNC_Cli	=	$_SESSION["p_Arr_xmTNC_Cli"] ;
   $gf_Cronog_CosEfe = 0;
   $r_dbl_CuoAcu = $p_MtoPre;
      
   for( $i = 0.01 ; $i <= 0.2 ; $i=$i + 0.0001 ){
      $r_dbl_CuoAcu = 0;
      
      for( $r_int_Contad = 1; $r_int_Contad <= sizeof($p_Arr_xmTNC_Cli) ; $r_int_Contad++ ){
         $r_dbl_CuoAcu = $r_dbl_CuoAcu + number_format( ( $p_Arr_xmTNC_Cli[$r_int_Contad][8] ) / ( pow( (1 + $i) , (     $p_Arr_xmTNC_Cli[$r_int_Contad][11] / 360) ) ), 2, '.', '') ;		 
		}
      
      if ( $r_dbl_CuoAcu < $p_MtoPre ){
		 $val = $i;
         $i = 0.3;
	  }
	}
      
   //$gf_Cronog_CosEfe = CDbl(Format(i * 100, "##0.0000"))
   
   return number_format($val * 100, 4, '.', '') ;
}


//***********************************************************************
//MOSTRAR DATOS
//***********************************************************************
function cargaresultados( $g_Int_NroCuotas,$int_Produc, $r_MontoCon, $r_Productomostrar, $r_Fechasimulacion, $r_moneda, $r_valorInmueble, $cuotainicial, $r_montoCredito, $r_plazomes, $mostrarportes, $tsegurodesg, $tsegurovivi, $tinteres, $r_periodoGracia, $r_diavencim, $r_nomseguro, $r_nomcuoDobles, $r_cuoDobles,$r_Producto){
$p_Arr_xmTNC_Cli	=	$_SESSION["p_Arr_xmTNC_Cli"] ;
$p_Arr_xmTC_Cli	=	$_SESSION["p_Arr_xmTC_Cli"] ;
//$p_Arr_xmTNC_Cof	=	$_SESSION["p_Arr_xmTNC_Cof"];

	//'Calcula cuota mensual
   //$cuotamensual = number_format( l_Arr_TNC_Cli[intval($r_periodoGracia)) + 2][9] , 2, '.', '') ) ;
	//$pnl_CuoMen = number_format( $p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][8] , 2, '.', '') ;
	
	//'Determina cuota mensual TNC
	switch ( $r_cuoDobles ) {
			case 1:
				$pnl_CuoMen = number_format( $p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][8], 2, '.', '') ;
				break;
			case 2:
				if ( intval(f_f_ExtraerMes($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][2])) <> 7 ){
					$pnl_CuoMen = number_format($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][8], 2, '.', '') ;
				}else{
					$pnl_CuoMen = number_format($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 3][8], 2, '.', '') ;
				}
				break;
			case 3:
				if ( intval(f_f_ExtraerMes($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][2])) <> 12 ){
					$pnl_CuoMen = number_format($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][8], 2, '.', '') ;
				 }else{
					$pnl_CuoMen = number_format($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 3][8], 2, '.', '') ;
				 }
				break;
			case 4:
				if ( (intval(f_f_ExtraerMes($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][2])) <> 7) && (intval(f_f_ExtraerMes($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][2])) <> 12) ){
					$pnl_CuoMen = number_format($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][8], 2, '.', '') ;
				 }else{
					$pnl_CuoMen = number_format($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 3][8], 2, '.', '') ;
				 }
				break;
			}	   

   //'Calcula ingreso requerido    
	   if ($int_Produc == 1 ){ 
			 $impTC = (float)str_replace(',', '', $p_Arr_xmTC_Cli[1][7]);
		     $pnl_CuoMen_PBP = number_format($pnl_CuoMen + ($impTC / 6), 2, '.', '') ;
		     if($r_Producto == 7){
		     	  //NUEVO MI VIVIENDA
		        $pnl_IngReq = number_format(($pnl_CuoMen_PBP / 40) * 100 , 2, '.', ',') ;		  	
		     }
			 else
			 {
		     	//PERUANOS EN EL EXTRANJERO
                $pnl_IngReq = number_format(($pnl_CuoMen_PBP / 30) * 100 , 2, '.', ',') ;		  		  	
		     }		    	     
	      }
	   if ($int_Produc == 2 )
	      { //MI CASITA
	   	  if (($pnl_CuoMen) <= 600 )
		  {  
	   	     $pnl_IngReq = number_format(($pnl_CuoMen /30) * 100, 2, '.', ',') ;
	   	  }
		  else
		  {
			if (($pnl_CuoMen) <= 1400 ){
			    $pnl_IngReq = number_format(($pnl_CuoMen / 35) * 100, 2, '.', ',') ;
				}else{
				$pnl_IngReq = number_format(($pnl_CuoMen / 40) * 100, 2, '.', ',') ;
		        }
	      }
	   }
	   if ($int_Produc == 3 ){
	   	  if($r_Producto == 19){
  		   	  //MICASITAMAS
	   	     $pnl_IngReq = number_format(($pnl_CuoMen / 40) * 100, 2, '.', ',') ;
	   	  }
	   	  if($r_Producto == 20){
	   	  	 //COFICASA
	   	     $pnl_IngReq = number_format(($pnl_CuoMen / 40) * 100, 2, '.', ',') ;
	   	  }
	   	  if($r_Producto == 21){
	   	  	 //NUEVA MIVIVIENDA MAS -BBP
	   	     $pnl_IngReq = number_format(($pnl_CuoMen / 40) * 100, 2, '.', ',') ;
	   	  }	   	  
	   	  if($r_Producto == 22){
	   	  	 //NUEVA MIVIVIENDA MAS -BBP 
	   	     $pnl_IngReq = number_format(($pnl_CuoMen / 40) * 100, 2, '.', ',') ;
	   	  }	   	  
	   }
   
   //'Costo efectivo anual
   $pnl_CosEfe = number_format( gf_Cronog_CosEfe( $tinteres , $r_montoCredito) , 2, '.', ',') ;
   
   $cuotainicial= number_format( $cuotainicial , 2, '.', ',') ;
   $r_valorInmueble = number_format( $r_valorInmueble , 2, '.', ',');   
   $pnl_CuoMen = number_format( $pnl_CuoMen , 2, '.', ',') ;
   $r_saldofin = ($r_montoCredito - $r_MontoCon);
   $r_saldofin = number_format( $r_saldofin , 2, '.', ',');
   $r_montoCredito = number_format( $r_montoCredito , 2, '.', ',');
   $r_MontoCon = number_format( $r_MontoCon , 2, '.', ',');
   
   
   
  
if($r_Producto==11){
echo"
  <div style='position: absolute;' id='apDiv1'>
  <p><span class='Estilo1'><u>SIMULACI&OacuteN DE CR&EacuteDITOS HIPOTECARIOS</u></span></p>
  <table width='720' border='1' bordercolor='silver' cellspacing='0' align='center'>
    <tr>
      <td width='25%' class='Estilo5'>Producto:</td>
      <td width='25%' class='Estilo6'>$r_Productomostrar</td>
      <td width='25%' class='Estilo5'>Fecha de Simulaci&oacuten:</td>
      <td width='25%' class='Estilo6'>$r_Fechasimulacion</td>
    </tr>
    <tr>
      <td width='25%' class='Estilo5'>Moneda:</td>
      <td width='25%' class='Estilo6'>$r_moneda</td>
      <td width='25%' class='Estilo5'>Ingreso Requerido:</td>
      <td width='25%'class='Estilo6'>$pnl_IngReq</td>
    </tr>
    <tr>
      <td width='25%' class='Estilo5'>Valor de Compra-Venta:</td>
      <td width='25%' class='Estilo6'>$r_valorInmueble </td>
      <td width='25%' class='Estilo5'>Cuota Mensual:</td>
      <td width='25%' class='Estilo6'>$pnl_CuoMen</td>
    </tr>
    <tr>
      <td width='25%' class='Estilo5'>Cuota Inicial:</td>
      <td width='25%' class='Estilo6'>$cuotainicial</td>
      <td width='25%' class='Estilo5'>Costo Efectivo Anual:</td>
      <td width='25%' class='Estilo6'>$pnl_CosEfe %</td>
    </tr>
    <tr>
      <td width='25%' class='Estilo5'>Monto Pr&eacutestamo:</td>
      <td width='25%' class='Estilo6'>$r_montoCredito</td>
      <td width='25%' class='Estilo5'>T. Inter&eacutes:</td>
      <td width='25%' class='Estilo6'>$tinteres %</td>
    </tr>
    <tr>
      <td width='25%' class='Estilo5'>Portes:</td>
      <td width='25%' class='Estilo6'>$mostrarportes</td>
      <td width='25%' class='Estilo5'>T. Seguro Desgravamen:</td>
      <td width='25%' class='Estilo6'>$tsegurodesg %</td>
    </tr>
    <tr>
      <td width='25%' class='Estilo5'>Nro. Cuotas:</td>
      <td width='25%' class='Estilo6'>$r_plazomes</td>
      <td width='25%' class='Estilo5'>T. Seguro Vivivienda:</td>
      <td width='25%' class='Estilo6'>$tsegurovivi %</td>
    </tr>
	<tr>
      <td width='25%' class='Estilo5'>Periodo de Gracia:</td>
      <td width='25%' class='Estilo6'>$r_periodoGracia</td>
      <td width='25%' class='Estilo5'>D&iacutea Vcto.:</td>
      <td width='25%' class='Estilo6'>$r_diavencim</td>
    </tr>
    <tr>
      <td width='25%' class='Estilo5'>Seguro Desgravamen:</td>
      <td width='25%' class='Estilo6'>$r_nomseguro</td>
      <td width='25%' class='Estilo5'>Cuotas Dobles:</td>
      <td width='25%' class='Estilo6'>$r_nomcuoDobles</td>
    </tr>
    
  </table>";
}
else{
echo"
  <div style='position: absolute;' id='apDiv1'>
  <p><span class='Estilo1'><u>SIMULACI&OacuteN DE CR&EacuteDITOS HIPOTECARIOS</u></span></p>
  <table width='720' border='1' bordercolor='silver' cellspacing='0' align='center'>
    <tr>
      <td width='25%' class='Estilo5'>Producto:</td>
      <td width='25%' class='Estilo6'>$r_Productomostrar</td>
      <td width='25%' class='Estilo5'>Fecha de Simulaci&oacuten:</td>
      <td width='25%' class='Estilo6'>$r_Fechasimulacion</td>
    </tr><div style='position: absolute;' id='apDiv1'>  
  
    <tr>
      <td width='25%' class='Estilo5'>Moneda:</td>
      <td width='25%' class='Estilo6'>$r_moneda</td>
      <td width='25%' class='Estilo5'>Ingreso Requerido:</td>
      <td width='25%'class='Estilo6'>$pnl_IngReq</td>
    </tr>
    <tr>
      <td width='25%' class='Estilo5'>Valor de Compra-Venta:</td>
      <td width='25%' class='Estilo6'>$r_valorInmueble </td>
      <td width='25%' class='Estilo5'>Cuota Mensual:</td>
      <td width='25%' class='Estilo6'>$pnl_CuoMen</td>
    </tr>
    <tr>
      <td width='25%' class='Estilo5'>Cuota Inicial:</td>
      <td width='25%' class='Estilo6'>$cuotainicial</td>
      <td width='25%' class='Estilo5'>Costo Efectivo Anual:</td>
      <td width='25%' class='Estilo6'>$pnl_CosEfe %</td>
    </tr>
    <tr>
      <td width='25%' class='Estilo5'>Monto Pr&eacutestamo:</td>
      <td width='25%' class='Estilo6'>$r_montoCredito</td>
      <td width='25%' class='Estilo5'>T. Inter&eacutes:</td>
      <td width='25%' class='Estilo6'>$tinteres %</td>
    </tr>
	
	<tr>
      <td width='25%' class='Estilo5'>Bono a Buen Pagador:</td>
      <td width='25%' class='Estilo6'>$r_MontoCon</td>
	  <td width='25%' class='Estilo5'>Seguro Desgravamen:</td>
      <td width='25%' class='Estilo6'>$r_nomseguro</td>	  
    </tr>
	
	<tr>
	  <td width='25%' class='Estilo5'>Saldo a Financiar:</td>
      <td width='25%' class='Estilo6'>$r_saldofin</td>
	  <td width='25%' class='Estilo5'>T. Seguro Desgravamen:</td>
      <td width='25%' class='Estilo6'>$tsegurodesg %</td>      
	</tr>
	
    <tr>
      <td width='25%' class='Estilo5'>Portes:</td>
      <td width='25%' class='Estilo6'>$mostrarportes</td>
	  <td width='25%' class='Estilo5'>T. Seguro Vivivienda:</td>
      <td width='25%' class='Estilo6'>$tsegurovivi %</td>
      
    </tr>
    <tr>
      <td width='25%' class='Estilo5'>Nro. Cuotas:</td>
      <td width='25%' class='Estilo6'>$r_plazomes</td>
	  <td width='25%' class='Estilo5'>D&iacutea Vcto.:</td>
      <td width='25%' class='Estilo6'>$r_diavencim</td>      
    </tr>
	
	<tr>
      <td width='25%' class='Estilo5'>Periodo de Gracia:</td>
      <td width='25%' class='Estilo6'>$r_periodoGracia</td>
	  <td width='25%' class='Estilo5'>Cuotas Dobles:</td>
      <td width='25%' class='Estilo6'>$r_nomcuoDobles</td>      
    </tr>
	</table>";
};

echo"
  <br><br>
  
  <table width='75%' align='center' border='1' bordercolor='silver' cellspacing='0'>
  <tr>
      <th colspan='9' bgcolor='#009100' scope='col'>TRAMO NO CONCESIONAL</th>
    </tr>
    <tr>
      <th bgcolor='#009100' scope='col'>CUOTA</th>
      <th bgcolor='#009100' scope='col'>F. VCTO</th>
      <th bgcolor='#009100' scope='col'>CAPITAL</th>
      <th bgcolor='#009100' scope='col'>INTER&EacuteS</th>
      <th bgcolor='#009100' scope='col'>SEG. PREST.</th>
      <th bgcolor='#009100' scope='col'>SEG. VIVIENDA</th>
      <th bgcolor='#009100' scope='col'>PORTES</th>
      <th bgcolor='#009100' scope='col'>TOTAL CUOTA</th>
      <th bgcolor='#009100' scope='col'>SALDO CAPITAL</th>
    </tr>";
	$bgcolor1="#FFFFFF";
	$bgcolor2="#E6F4D7";
	for($i = 1; $i <= $g_Int_NroCuotas; $i++){
		$j=($i%2)+1;
		if ($j==1){
			$j2="#FFFFFF";
		}else{
			$j2="#E6F4D7";
		};
		echo "
    <tr bgcolor="; echo $j2; echo">
	
		<!--Número de Cuota-->
        <td>";
		echo $p_Arr_xmTNC_Cli[$i][1]; 
		echo "
		</td>
		
        <!--Fecha de Vencimiento-->
        <td>";
		echo $p_Arr_xmTNC_Cli[$i][2];
        echo "
        </td>
		
		
        <!--Capital-->
        <td>";
		echo $p_Arr_xmTNC_Cli[$i][3]; 
        echo "		
		</td>
		
		
        <!--Interes-->
        <td>";
		echo $p_Arr_xmTNC_Cli[$i][4]; 
        echo "		
		</td>
		
		
        <!--Seguro Desgravamen-->
        <td>";
		echo $p_Arr_xmTNC_Cli[$i][5];
        echo "		
		</td>
		
		
        <!--Seguro Vivienda-->
        <td>";
		echo $p_Arr_xmTNC_Cli[$i][6]; 
        echo "		
		</td>
		
		
        <!--Otros Cargos-->
        <td>";
		echo $p_Arr_xmTNC_Cli[$i][7]; 
        echo "		
		</td>
		
		
        <!--Valor Cuota-->
        <td>";
		echo number_format( $p_Arr_xmTNC_Cli[$i][8], 2 ,'.',',');
        echo "		
		</td>
		
		
        <!--Saldo Capital-->
        <td>";
		echo $p_Arr_xmTNC_Cli[$i][10];
        echo "		
		</td>
    </tr>";
	}
	echo "	
	 <tr bgcolor='#FFFFFF'>
      <td colspan='2' bgcolor='#009100' class='Estilo2'>TOTALES</td>
      <td bgcolor='#FDC6CF' class='Estilo3'>"; echo $p_Arr_xmTNC_Cli[$g_Int_NroCuotas][13]; echo "</td>
      <td bgcolor='#FDC6CF' class='Estilo3'>"; echo $p_Arr_xmTNC_Cli[$g_Int_NroCuotas][14]; echo "</td>
      <td bgcolor='#FDC6CF' class='Estilo3'>"; echo $p_Arr_xmTNC_Cli[$g_Int_NroCuotas][15]; echo "</td>
      <td bgcolor='#FDC6CF' class='Estilo3'>"; echo $p_Arr_xmTNC_Cli[$g_Int_NroCuotas][16]; echo "</td>
      <td bgcolor='#FDC6CF' class='Estilo3'>"; echo $p_Arr_xmTNC_Cli[$g_Int_NroCuotas][17]; echo "</td>
      <td bgcolor='#FDC6CF' class='Estilo3'>"; echo $p_Arr_xmTNC_Cli[$g_Int_NroCuotas][18]; echo "</td>
      <td ></td>
    </tr>
	
  </table>";

if($int_Produc == 1){		//MIVIVIENDA

$p_Arr_xmTC_Cli	=	$_SESSION["p_Arr_xmTC_Cli"] ;
$g_Dbl_CuotasTC = $_SESSION["g_Dbl_CuotasTC"];
	  	
	echo "
	<br><br>
  <table width='75%' align='center' border='1' bordercolor='silver' cellspacing='0'>
  <tr>
      <th colspan='9' bgcolor='#009100' scope='col'>TRAMO CONCESIONAL</th>
    </tr>
    <tr>
      <th width='11%' bgcolor='#009100' scope='col'>CUOTA</th>
      <th width='12%' bgcolor='#009100' scope='col'>F. VCTO</th>
      <th width='14%' bgcolor='#009100' scope='col'>CAPITAL</th>
      <th width='13%' bgcolor='#009100' scope='col'>INTER&EacuteS</th>
      <th width='22%' bgcolor='#009100' scope='col'>TOTAL CUOTA</th>
      <th width='28%' bgcolor='#009100' scope='col'>SALDO CAPITAL</th>
    </tr>";
	$bgcolor1="#FFFFFF";
	$bgcolor2="#E6F4D7";
	for($i = 1; $i <= $g_Dbl_CuotasTC; $i++){
		$j=($i%2)+1;
		if ($j==1){
			$j2="#FFFFFF";
		}else{
			$j2="#E6F4D7";
		};
		echo "
    <tr bgcolor="; echo $j2; echo">
    
		<!--Número de Cuota-->
		<td>";
		echo $p_Arr_xmTC_Cli[$i][1];
        echo "
		</td>
		
		<!--Fecha de Vencimiento-->
	 	<td>";
		echo $p_Arr_xmTC_Cli[$i][2];
        echo "
		</td>
		
		<!--Capital-->
	  	<td>";
		echo $p_Arr_xmTC_Cli[$i][4]; 
        echo "
		</td>
		
		<!--Interes-->
	  	<td>";
		echo $p_Arr_xmTC_Cli[$i][5]; 
        echo "
		</td>
		
	  	<!--Valor Cuota-->
	  	<td>";
		echo $p_Arr_xmTC_Cli[$i][7]; 
        echo "
		</td>
		
		<!--Saldo Capital-->
	  <td>";
		echo $p_Arr_xmTC_Cli[$i][8]; 
        echo "
		</td>
	  
    </tr>";
	}
	echo"
    <tr bgcolor='#FFFFFF'>
      <td colspan='2' bgcolor='#009100' class='Estilo2'>TOTALES</td>
      <td bgcolor='#FDC6CF' class='Estilo3'>"; echo $p_Arr_xmTC_Cli[$g_Dbl_CuotasTC][10]; echo "</td>
      <td bgcolor='#FDC6CF' class='Estilo3'>"; echo $p_Arr_xmTC_Cli[$g_Dbl_CuotasTC][9]; echo "</td>
      <td bgcolor='#FDC6CF' class='Estilo3'>"; echo $p_Arr_xmTC_Cli[$g_Dbl_CuotasTC][11]; echo "</td>
      <td ></td>
    </tr>
    
  </table>";
  
}

	echo "
  <table width='74%' border='0' align='center' cellpadding='12' cellspacing='2'>
    
    
    <tr>
      <td colspan='9' class=smalltext_01C align=left><div align=justify>
        <p>NOTA .- El presente documento es referencial y puede estar sujeto a variaciones.No implica la aprobaci&oacute;n del cliente por parte de MICASITA HIPOTECARIA para acceder a un Cr&eacute;dito Hipotecario.MICASITA HIPOTECARIA no asume ninguna responsabilidad por los adelantos o contratos de arras que pudiesen celebrarse sin su expresa autorizaci&oacute;n escrita o por la entrega de suma alguna a un Consejero Hipotecario u otro funcionario de MICASITA HIPOTECARIA. </p>
</div></td>
    </tr>
  </table>
  
</div>
<div id='apDiv2'>
  <table width='75%' height='65' border='0' align='center'>
    <tr>
      <th width='33%' align='left' scope='col'> 
	  </th>
      <th width='67%' scope='col'><table width='40%' border='0' align='right'>
        <tr>
          <th scope='col'><a class=sinborde href=javascript:window.print()>Imprimir</a></th>
        </tr>
      </table></th>
    </tr>
  </table>
</div>
";


session_destroy();

}




?>
