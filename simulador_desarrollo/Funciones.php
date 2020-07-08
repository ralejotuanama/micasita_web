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
/* Descripci�n:		Calculo de Cronograma
   Autor:		MICASITA HIPOTECRAIA
   Fecha Creaci�n:	07/01/2013
   Fecha Actual.:	10/07/2019
   Desc. Actual.:	Funciones para el Calculo de cronogramas de los  diferentes
                        productos de MiCasita Hipotecaria.  
*/


//Cargar Feriados Fijos 
function pp_CargarEstructuraFeriados_Fijos()
{
    //******* Procedimiento de Carga de Feriados Fijos
    //   ReDim g_Arr_Feriados(10)
        
        $g_Arr_Feriados = array (   1 => array( "vItem" =>"1", "vFecha" => "01/01/2019", "vDia" => "1", "vMes" => "1", "vDescrip" => "Primer d�a del a�o"),
                                    2 => array( "vItem"=> "2", "vFecha" => "01/05/2019", "vDia" => "1", "vMes" => "5", "vDescrip" => "D�a del trabajo" ), 
                                    3 => array( "vItem"=> "3", "vFecha" => "29/06/2016", "vDia" => "29", "vMes" => "6", "vDescrip" => "D�a de San Pedro y San Pablo" ), 
                                    4 => array( "vItem"=> "4", "vFecha" => "28/07/2016", "vDia" => "28", "vMes" => "7", "vDescrip" => "Fiestas Patrias" ), 
                                    5 => array( "vItem"=> "5", "vFecha" => "29/07/2016", "vDia" => "29", "vMes" => "7", "vDescrip" => "Fiestas Patrias" ), 
                                    6 => array( "vItem"=> "6", "vFecha" => "30/08/2016", "vDia" => "30", "vMes" => "8", "vDescrip" => "D�a de Santa Rosa de Lima" ), 
                                    7 => array( "vItem"=> "7", "vFecha" => "08/10/2016", "vDia" => "8", "vMes" => "10", "vDescrip" => "Combate de Angamos" ), 
                                    8 => array( "vItem"=> "8", "vFecha" => "01/11/2016", "vDia" => "1", "vMes" => "11", "vDescrip" => "D�a de Todos los Santos" ), 
                                    9 => array( "vItem"=> "9", "vFecha" => "08/12/2016", "vDia" => "8", "vMes" => "12", "vDescrip" => "D�a de la Inmaculada Concepci�n" ), 
                                    10 => array( "vItem"=> "10", "vFecha" => "25/12/2016", "vDia" => "25", "vMes" => "12", "vDescrip" => "Navidad" ) 
							);
	$_SESSION["g_Arr_Feriados"] = $g_Arr_Feriados;

}							

//Cargar Feriados Semana Santa 
function pp_CargarEstructuraFeriados_SemanaSanta()
{
//******* Procedimiento de Carga de Feriados por Semana Santa
        //   ReDim g_Arr_FerSemSta(100)

        $g_Arr_FerSemSta = array (    1  => array( "vItem" => "1", "vFecha" => "24/03/2016", "vPeriodo" => "2016", "vMes" => "3", "vDia" => "24", "vDescrip" => "Jueves Santo" ),
                                      2  => array( "vItem" => "2", "vFecha" => "25/03/2016", "vPeriodo" => "2016", "vMes" => "3", "vDia" => "25", "vDescrip" => "Viernes Santo"),
                                      3  => array( "vItem" => "3", "vFecha" => "13/04/2017", "vPeriodo" => "2017", "vMes" => "4", "vDia" => "13", "vDescrip" => "Jueves Santo" ),
                                      4  => array( "vItem" => "4", "vFecha" => "14/04/2017", "vPeriodo" => "2017", "vMes" => "4", "vDia" => "14", "vDescrip" => "Viernes Santo"),
                                      5  => array( "vItem" => "5", "vFecha" => "29/03/2018", "vPeriodo" => "2018", "vMes" => "3", "vDia" => "29", "vDescrip" => "Jueves Santo" ),
                                      6  => array( "vItem" => "6", "vFecha" => "30/03/2018", "vPeriodo" => "2018", "vMes" => "3", "vDia" => "30", "vDescrip" => "Viernes Santo"),
                                      7  => array( "vItem" => "7", "vFecha" => "18/04/2019", "vPeriodo" => "2019", "vMes" => "4", "vDia" => "18", "vDescrip" => "Jueves Santo" ),
                                      8  => array( "vItem" => "8", "vFecha" => "19/04/2019", "vPeriodo" => "2019", "vMes" => "4", "vDia" => "19", "vDescrip" => "Viernes Santo"),
                                      9  => array( "vItem" => "9", "vFecha" => "09/04/2020", "vPeriodo" => "2020", "vMes" => "4", "vDia" => "9" , "vDescrip" => "Jueves Santo" ),
                                      10 => array( "vItem" => "10", "vFecha" =>"10/04/2020", "vPeriodo" => "2020", "vMes" => "4", "vDia" => "10", "vDescrip" => "Viernes Santo"),
                                      11 => array( "vItem" => "11", "vFecha" =>"25/03/2021", "vPeriodo" => "2021", "vMes" => "3", "vDia" => "25", "vDescrip" => "Jueves Santo" ),
                                      12 => array( "vItem" => "12", "vFecha" =>"26/03/2021", "vPeriodo" => "2021", "vMes" => "3", "vDia" => "26", "vDescrip" => "Viernes Santo"),
                                      13 => array( "vItem" => "13", "vFecha" =>"14/04/2022", "vPeriodo" => "2022", "vMes" => "4", "vDia" => "14", "vDescrip" => "Jueves Santo" ),
                                      14 => array( "vItem" => "14", "vFecha" =>"15/04/2022", "vPeriodo" => "2022", "vMes" => "4", "vDia" => "15", "vDescrip" => "Viernes Santo"),
                                      15 => array( "vItem" => "15", "vFecha" =>"06/04/2023", "vPeriodo" => "2023", "vMes" => "4", "vDia" => "6",  "vDescrip" => "Jueves Santo" ),
                                      16 => array( "vItem" => "16", "vFecha" =>"07/04/2023", "vPeriodo" => "2023", "vMes" => "4", "vDia" => "7",  "vDescrip" => "Viernes Santo"),
                                      17 => array( "vItem" => "17", "vFecha" =>"28/03/2024", "vPeriodo" => "2024", "vMes" => "3", "vDia" => "28", "vDescrip" => "Jueves Santo" ),
                                      18 => array( "vItem" => "18", "vFecha" =>"29/03/2024", "vPeriodo" => "2024", "vMes" => "3", "vDia" => "29", "vDescrip" => "Viernes Santo"),
                                      19 => array( "vItem" => "19", "vFecha" =>"10/04/2025", "vPeriodo" => "2025", "vMes" => "3", "vDia" => "10", "vDescrip" => "Jueves Santo" ),
                                      20 => array( "vItem" => "20", "vFecha" =>"11/04/2025", "vPeriodo" => "2025", "vMes" => "4", "vDia" => "11", "vDescrip" => "Viernes Santo"),
                                      21 => array( "vItem" => "21", "vFecha" =>"02/04/2026", "vPeriodo" => "2026", "vMes" => "4", "vDia" => "2",  "vDescrip" => "Jueves Santo" ),
                                      22 => array( "vItem" => "22", "vFecha" =>"03/04/2026", "vPeriodo" => "2026", "vMes" => "4", "vDia" => "3",  "vDescrip" => "Viernes Santo"),
                                      23 => array( "vItem" => "23", "vFecha" =>"25/03/2027", "vPeriodo" => "2027", "vMes" => "3", "vDia" => "25", "vDescrip" => "Jueves Santo" ),
                                      24 => array( "vItem" => "24", "vFecha" =>"26/03/2027", "vPeriodo" => "2027", "vMes" => "3", "vDia" => "26", "vDescrip" => "Viernes Santo"),
                                      25 => array( "vItem" => "25", "vFecha" =>"13/04/2028", "vPeriodo" => "2028", "vMes" => "4", "vDia" => "13", "vDescrip" => "Jueves Santo" ),
                                      26 => array( "vItem" => "26", "vFecha" =>"14/04/2028", "vPeriodo" => "2028", "vMes" => "4", "vDia" => "14", "vDescrip" => "Viernes Santo"),
                                      27 => array( "vItem" => "27", "vFecha" =>"29/03/2029", "vPeriodo" => "2029", "vMes" => "3", "vDia" => "29", "vDescrip" => "Jueves Santo" ),
                                      28 => array( "vItem" => "28", "vFecha" =>"30/03/2029", "vPeriodo" => "2029", "vMes" => "3", "vDia" => "30", "vDescrip" => "Viernes Santo"),
                                      29 => array( "vItem" => "29", "vFecha" =>"18/04/2030", "vPeriodo" => "2030", "vMes" => "4", "vDia" => "18", "vDescrip" => "Jueves Santo" ),
                                      30 => array( "vItem" => "30", "vFecha" =>"19/04/2030", "vPeriodo" => "2030", "vMes" => "4", "vDia" => "19", "vDescrip" => "Viernes Santo"),
                                      31 => array( "vItem" => "31", "vFecha" =>"10/04/2031", "vPeriodo" => "2031", "vMes" => "4", "vDia" => "10", "vDescrip" => "Jueves Santo" ),
                                      32 => array( "vItem" => "32", "vFecha" =>"11/04/2031", "vPeriodo" => "2031", "vMes" => "4", "vDia" => "11", "vDescrip" => "Viernes Santo"),
                                      33 => array( "vItem" => "33", "vFecha" =>"25/03/2032", "vPeriodo" => "2032", "vMes" => "3", "vDia" => "25", "vDescrip" => "Jueves Santo" ),
                                      34 => array( "vItem" => "34", "vFecha" =>"26/03/2032", "vPeriodo" => "2032", "vMes" => "3", "vDia" => "26", "vDescrip" => "Viernes Santo"),
                                      35 => array( "vItem" => "35", "vFecha" =>"14/04/2033", "vPeriodo" => "2033", "vMes" => "4", "vDia" => "14", "vDescrip" => "Jueves Santo" ),
                                      36 => array( "vItem" => "36", "vFecha" =>"15/04/2033", "vPeriodo" => "2033", "vMes" => "4", "vDia" => "15", "vDescrip" => "Viernes Santo"),
                                      37 => array( "vItem" => "37", "vFecha" =>"06/04/2034", "vPeriodo" => "2034", "vMes" => "4", "vDia" => "6",  "vDescrip" => "Jueves Santo" ),
                                      38 => array( "vItem" => "38", "vFecha" =>"07/04/2034", "vPeriodo" => "2034", "vMes" => "4", "vDia" => "7",  "vDescrip" => "Viernes Santo"),
                                      39 => array( "vItem" => "39", "vFecha" =>"22/03/2035", "vPeriodo" => "2035", "vMes" => "3", "vDia" => "22", "vDescrip" => "Jueves Santo" ),
                                      40 => array( "vItem" => "40", "vFecha" =>"23/03/2035", "vPeriodo" => "2035", "vMes" => "3", "vDia" => "23", "vDescrip" => "Viernes Santo"),
                                      41 => array( "vItem" => "41", "vFecha" =>"10/04/2036", "vPeriodo" => "2036", "vMes" => "4", "vDia" => "10", "vDescrip" => "Jueves Santo" ),
                                      42 => array( "vItem" => "42", "vFecha" =>"11/04/2036", "vPeriodo" => "2036", "vMes" => "4", "vDia" => "11", "vDescrip" => "Viernes Santo"),
                                      43 => array( "vItem" => "43", "vFecha" =>"02/04/2037", "vPeriodo" => "2037", "vMes" => "4", "vDia" => "2",  "vDescrip" => "Jueves Santo" ),
                                      44 => array( "vItem" => "44", "vFecha" =>"03/04/2037", "vPeriodo" => "2037", "vMes" => "4", "vDia" => "3",  "vDescrip" => "Viernes Santo"),
                                      45 => array( "vItem" => "45", "vFecha" =>"22/04/2038", "vPeriodo" => "2038", "vMes" => "4", "vDia" => "22", "vDescrip" => "Jueves Santo" ),
                                      46 => array( "vItem" => "46", "vFecha" =>"23/04/2038", "vPeriodo" => "2038", "vMes" => "4", "vDia" => "23", "vDescrip" => "Viernes Santo"),
                                      47 => array( "vItem" => "47", "vFecha" =>"07/04/2039", "vPeriodo" => "2039", "vMes" => "4", "vDia" => "7", "vDescrip" => "Jueves Santo" ),
                                      48 => array( "vItem" => "48", "vFecha" =>"08/04/2039", "vPeriodo" => "2039", "vMes" => "4", "vDia" => "8",  "vDescrip" => "Viernes Santo"),
                                      49 => array( "vItem" => "49", "vFecha" =>"29/03/2040", "vPeriodo" => "2040", "vMes" => "3", "vDia" => "29", "vDescrip" => "Jueves Santo" ),
                                      50 => array( "vItem" => "50", "vFecha" =>"30/03/2040", "vPeriodo" => "2040", "vMes" => "3", "vDia" => "30", "vDescrip" => "Viernes Santo"),
                                      51 => array( "vItem" => "51", "vFecha" =>"18/04/2041", "vPeriodo" => "2041", "vMes" => "4", "vDia" => "18", "vDescrip" => "Jueves Santo" ),
                                      52 => array( "vItem" => "52", "vFecha" =>"19/04/2041", "vPeriodo" => "2041", "vMes" => "4", "vDia" => "19", "vDescrip" => "Viernes Santo"),
                                      53 => array( "vItem" => "53", "vFecha" =>"03/04/2042", "vPeriodo" => "2042", "vMes" => "4", "vDia" => "3",  "vDescrip" => "Jueves Santo" ),
                                      54 => array( "vItem" => "54", "vFecha" =>"04/04/2042", "vPeriodo" => "2042", "vMes" => "4", "vDia" => "4",  "vDescrip" => "Viernes Santo"),
                                      55 => array( "vItem" => "55", "vFecha" =>"26/03/2043", "vPeriodo" => "2043", "vMes" => "3", "vDia" => "26", "vDescrip" => "Jueves Santo" ),
                                      56 => array( "vItem" => "56", "vFecha" =>"27/03/2043", "vPeriodo" => "2043", "vMes" => "3", "vDia" => "27", "vDescrip" => "Viernes Santo"),
                                      57 => array( "vItem" => "57", "vFecha" =>"14/04/2044", "vPeriodo" => "2044", "vMes" => "4", "vDia" => "14", "vDescrip" => "Jueves Santo" ),
                                      58 => array( "vItem" => "58", "vFecha" =>"15/04/2044", "vPeriodo" => "2044", "vMes" => "4", "vDia" => "15", "vDescrip" => "Viernes Santo"),
                                      59 => array( "vItem" => "59", "vFecha" =>"30/03/2045", "vPeriodo" => "2045", "vMes" => "3", "vDia" => "30", "vDescrip" => "Jueves Santo" ),
                                      60 => array( "vItem" => "60", "vFecha" =>"31/03/2045", "vPeriodo" => "2045", "vMes" => "3", "vDia" => "31", "vDescrip" => "Viernes Santo"),
                                      61 => array( "vItem" => "61", "vFecha" =>"22/03/2046", "vPeriodo" => "2046", "vMes" => "3", "vDia" => "22", "vDescrip" => "Jueves Santo" ),
                                      62 => array( "vItem" => "62", "vFecha" =>"23/03/2046", "vPeriodo" => "2046", "vMes" => "3", "vDia" => "23", "vDescrip" => "Viernes Santo"),
                                      63 => array( "vItem" => "63", "vFecha" =>"11/04/2047", "vPeriodo" => "2047", "vMes" => "4", "vDia" => "11", "vDescrip" => "Jueves Santo" ),
                                      64 => array( "vItem" => "64", "vFecha" =>"12/04/2047", "vPeriodo" => "2047", "vMes" => "4", "vDia" => "12", "vDescrip" => "Viernes Santo"),
                                      65 => array( "vItem" => "65", "vFecha" =>"02/04/2048", "vPeriodo" => "2048", "vMes" => "4", "vDia" => "2",  "vDescrip" => "Jueves Santo" ),
                                      66 => array( "vItem" => "66", "vFecha" =>"03/04/2048", "vPeriodo" => "2048", "vMes" => "4", "vDia" => "3",  "vDescrip" => "Viernes Santo"),
                                      67 => array( "vItem" => "67", "vFecha" =>"15/04/2049", "vPeriodo" => "2049", "vMes" => "4", "vDia" => "15", "vDescrip" => "Jueves Santo" ),
                                      68 => array( "vItem" => "68", "vFecha" =>"16/04/2049", "vPeriodo" => "2049", "vMes" => "4", "vDia" => "16", "vDescrip" => "Viernes Santo"),
                                      69 => array( "vItem" => "69", "vFecha" =>"07/04/2050", "vPeriodo" => "2050", "vMes" => "4", "vDia" => "7",  "vDescrip" => "Jueves Santo" ),
                                      70 => array( "vItem" => "70", "vFecha" =>"08/04/2050", "vPeriodo" => "2050", "vMes" => "4", "vDia" => "8",  "vDescrip" => "Viernes Santo"),
                                      71 => array( "vItem" => "71", "vFecha" =>"30/03/2051", "vPeriodo" => "2051", "vMes" => "3", "vDia" => "30", "vDescrip" => "Jueves Santo" ),
                                      72 => array( "vItem" => "72", "vFecha" =>"31/03/2051", "vPeriodo" => "2051", "vMes" => "3", "vDia" => "31", "vDescrip" => "Viernes Santo"),
                                      73 => array( "vItem" => "73", "vFecha" =>"11/04/2052", "vPeriodo" => "2052", "vMes" => "4", "vDia" => "11", "vDescrip" => "Jueves Santo" ),
                                      74 => array( "vItem" => "74", "vFecha" =>"12/04/2052", "vPeriodo" => "2052", "vMes" => "4", "vDia" => "12", "vDescrip" => "Viernes Santo"),
                                      75 => array( "vItem" => "75", "vFecha" =>"03/04/2053", "vPeriodo" => "2053", "vMes" => "4", "vDia" => "3",  "vDescrip" => "Jueves Santo" ),
                                      76 => array( "vItem" => "76", "vFecha" =>"04/04/2053", "vPeriodo" => "2053", "vMes" => "4", "vDia" => "4",  "vDescrip" => "Viernes Santo"),
                                      77 => array( "vItem" => "77", "vFecha" =>"26/03/2054", "vPeriodo" => "2054", "vMes" => "3", "vDia" => "26", "vDescrip" => "Jueves Santo" ),
                                      78 => array( "vItem" => "78", "vFecha" =>"27/03/2054", "vPeriodo" => "2054", "vMes" => "3", "vDia" => "27", "vDescrip" => "Viernes Santo"),
                                      79 => array( "vItem" => "79", "vFecha" =>"08/04/2055", "vPeriodo" => "2055", "vMes" => "4", "vDia" => "8",  "vDescrip" => "Jueves Santo" ),
                                      80 => array( "vItem" => "80", "vFecha" =>"09/04/2055", "vPeriodo" => "2055", "vMes" => "4", "vDia" => "9",  "vDescrip" => "Viernes Santo"),
                                      81 => array( "vItem" => "81", "vFecha" =>"30/03/2056", "vPeriodo" => "2056", "vMes" => "3", "vDia" => "30", "vDescrip" => "Jueves Santo" ),
                                      82 => array( "vItem" => "82", "vFecha" =>"31/03/2056", "vPeriodo" => "2056", "vMes" => "3", "vDia" => "31", "vDescrip" => "Viernes Santo"),
                                      83 => array( "vItem" => "83", "vFecha" =>"19/04/2057", "vPeriodo" => "2057", "vMes" => "4", "vDia" => "19", "vDescrip" => "Jueves Santo" ),
                                      84 => array( "vItem" => "84", "vFecha" =>"20/04/2057", "vPeriodo" => "2057", "vMes" => "4", "vDia" => "20", "vDescrip" => "Viernes Santo"),
                                      85 => array( "vItem" => "85", "vFecha" =>"11/04/2058", "vPeriodo" => "2058", "vMes" => "4", "vDia" => "11", "vDescrip" => "Jueves Santo" ),
                                      86 => array( "vItem" => "86", "vFecha" =>"12/04/2058", "vPeriodo" => "2058", "vMes" => "4", "vDia" => "12", "vDescrip" => "Viernes Santo"),
                                      87 => array( "vItem" => "87", "vFecha" =>"27/03/2059", "vPeriodo" => "2059", "vMes" => "3", "vDia" => "27", "vDescrip" => "Jueves Santo" ),
                                      88 => array( "vItem" => "88", "vFecha" =>"28/03/2059", "vPeriodo" => "2059", "vMes" => "3", "vDia" => "28", "vDescrip" => "Viernes Santo"),
                                      89 => array( "vItem" => "89", "vFecha" =>"15/04/2060", "vPeriodo" => "2060", "vMes" => "4", "vDia" => "15", "vDescrip" => "Jueves Santo" ),
                                      90 => array( "vItem" => "90", "vFecha" =>"16/04/2060", "vPeriodo" => "2060", "vMes" => "4", "vDia" => "16", "vDescrip" => "Viernes Santo"),
                                      91 => array( "vItem" => "91", "vFecha" =>"07/04/2061", "vPeriodo" => "2061", "vMes" => "4", "vDia" => "7",  "vDescrip" => "Jueves Santo" ),
                                      92 => array( "vItem" => "92", "vFecha" =>"08/04/2061", "vPeriodo" => "2061", "vMes" => "4", "vDia" => "8",  "vDescrip" => "Viernes Santo"),
                                      93 => array( "vItem" => "93", "vFecha" =>"23/03/2062", "vPeriodo" => "2062", "vMes" => "3", "vDia" => "23", "vDescrip" => "Jueves Santo" ),
                                      94 => array( "vItem" => "94", "vFecha" =>"24/03/2062", "vPeriodo" => "2062", "vMes" => "3", "vDia" => "24", "vDescrip" => "Viernes Santo"),
                                      95 => array( "vItem" => "95", "vFecha" =>"12/04/2063", "vPeriodo" => "2063", "vMes" => "4", "vDia" => "12", "vDescrip" => "Jueves Santo" ),
                                      96 => array( "vItem" => "96", "vFecha" =>"13/04/2063", "vPeriodo" => "2063", "vMes" => "4", "vDia" => "13", "vDescrip" => "Viernes Santo"),
                                      97 => array( "vItem" => "97", "vFecha" =>"03/04/2064", "vPeriodo" => "2064", "vMes" => "4", "vDia" => "3",  "vDescrip" => "Jueves Santo" ),
                                      98 => array( "vItem" => "98", "vFecha" =>"04/04/2064", "vPeriodo" => "2064", "vMes" => "4", "vDia" => "4",  "vDescrip" => "Viernes Santo"),
                                      99 => array( "vItem" => "99", "vFecha" =>"19/03/2065", "vPeriodo" => "2065", "vMes" => "3", "vDia" => "19", "vDescrip" => "Jueves Santo" ),
                                      100=> array( "vItem" => "100","vFecha" =>"20/03/2065", "vPeriodo" => "2065", "vMes" => "3", "vDia" => "20", "vDescrip" => "Viernes Santo")
								  );
 $_SESSION["g_Arr_FerSemSta"] = $g_Arr_FerSemSta;

}	

function fs_ObtieneNomDia($fecha){
        $fechats = str_replace("/","-",$fecha);
        $fechats = date("Y-m-d", strtotime($fechats));
        $dias = array('','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
        $fechats = $dias[date('N',strtotime($fechats))];

        return $fechats;
}

function fs_ObtieneDesDia($p_PerDia, $p_PerMes, $p_PerAno)
{
	$fs_DesDia="";
	
	$g_Arr_Feriados = $_SESSION["g_Arr_Feriados"];
	$g_Arr_FerSemSta = $_SESSION["g_Arr_FerSemSta"];
	
   	for ($r_int_Contad = 1; $r_int_Contad <= count($g_Arr_Feriados); $r_int_Contad++) {
		
            if ($g_Arr_Feriados[$r_int_Contad]['vDia'] == $p_PerDia && $g_Arr_Feriados[$r_int_Contad]['vMes'] == $p_PerMes){
                $fs_DesDia = $g_Arr_Feriados[$r_int_Contad]['vDescrip'];
            }
   	}//for
   
   	if ($fs_DesDia == ""){
            for ($r_int_Contad = 1; $r_int_Contad <= count($g_Arr_FerSemSta); $r_int_Contad++) { 
                if ($g_Arr_FerSemSta[$r_int_Contad]['vDia'] == $p_PerDia && $g_Arr_FerSemSta[$r_int_Contad]['vMes'] == $p_PerMes && $g_Arr_FerSemSta[$r_int_Contad]['vPeriodo'] == $p_PerAno) {
                    $fs_DesDia = $g_Arr_FerSemSta[$r_int_Contad]['vDescrip'];
                }
            }//for
   	}
	return $fs_DesDia;
}

function fs_ObtieneSumas($p_DiaFer, $p_NomDia)
{ 
   	$fs_ObtSuma = "";
	if (($p_DiaFer <> "") and ($p_DiaFer <> "Jueves Santo") and ($p_DiaFer != "Viernes Santo") and ($p_DiaFer != "Fiestas Patrias 28 de Julio") and ($p_DiaFer != "Fiestas Patrias 29 de Julio") and ($p_NomDia == "Lunes")) {
            $fs_ObtSuma = "+1";

   	}elseif (($p_DiaFer != "") and ($p_DiaFer != "Jueves Santo") and ($p_DiaFer != "Viernes Santo") and ($p_DiaFer != "Fiestas Patrias 28 de Julio") and ($p_DiaFer != "Fiestas Patrias 29 de Julio") and ($p_NomDia == "Martes")){
            $fs_ObtSuma = "+1";

   	}elseif (($p_DiaFer != "") and ($p_DiaFer != "Jueves Santo") and ($p_DiaFer != "Viernes Santo") and ($p_DiaFer != "Fiestas Patrias 28 de Julio") and ($p_DiaFer != "Fiestas Patrias 29 de Julio") and ($p_NomDia == "Miercoles") ) {
            $fs_ObtSuma = "+1";

   	}elseif (($p_DiaFer != "") and ($p_DiaFer != "Jueves Santo") and ($p_DiaFer != "Viernes Santo") and ($p_DiaFer != "Fiestas Patrias 28 de Julio") and ($p_DiaFer != "Fiestas Patrias 29 de Julio") and ($p_NomDia == "Jueves" )) {
            $fs_ObtSuma = "+1";

   	}elseif (($p_DiaFer != "") and ($p_DiaFer != "Jueves Santo") and ($p_DiaFer != "Viernes Santo") and ($p_DiaFer != "Fiestas Patrias 28 de Julio") and ($p_DiaFer != "Fiestas Patrias 29 de Julio") and ($p_NomDia == "Viernes")){
            $fs_ObtSuma = "+1";

   	}elseif (($p_DiaFer != "") and ($p_DiaFer != "Jueves Santo") and ($p_DiaFer != "Viernes Santo") and ($p_DiaFer != "Fiestas Patrias 28 de Julio") and ($p_DiaFer != "Fiestas Patrias 29 de Julio") and ($p_NomDia == "Sabado")) {
            $fs_ObtSuma = "+2";

   	}elseif(($p_DiaFer != "Jueves Santo") and ($p_DiaFer != "Viernes Santo") and ($p_DiaFer != "Fiestas Patrias 28 de Julio") and ($p_DiaFer != "Fiestas Patrias 29 de Julio") and ($p_NomDia == "Domingo")){
            $fs_ObtSuma = "+1";

   	}elseif ($p_DiaFer == "Jueves Santo"){
            $fs_ObtSuma = "+2";

   	}elseif ($p_DiaFer == "Viernes Santo"){
            $fs_ObtSuma = "+1";

   	}elseif (($p_DiaFer == "Fiestas Patrias 28 de Julio") and ($p_NomDia == "Lunes")){
            $fs_ObtSuma = "+2";

   	}elseif (($p_DiaFer == "Fiestas Patrias 28 de Julio") and ($p_NomDia == "Martes")){
            $fs_ObtSuma = "+2";

   	}elseif (($p_DiaFer == "Fiestas Patrias 28 de Julio") and ($p_NomDia == "Miercoles")){
            $fs_ObtSuma = "+2";

   	}elseif (($p_DiaFer == "Fiestas Patrias 28 de Julio") and ($p_NomDia == "Jueves")){
            $fs_ObtSuma = "+2";

   	}elseif (($p_DiaFer == "Fiestas Patrias 28 de Julio") and ($p_NomDia == "Sabado")){
            $fs_ObtSuma = "+2";

   	}elseif (($p_DiaFer == "Fiestas Patrias 28 de Julio") and ($p_NomDia == "Domingo")){
            $fs_ObtSuma = "+2";

   	}elseif (($p_DiaFer == "Fiestas Patrias 28 de Julio") and ($p_NomDia == "Viernes")){
            $fs_ObtSuma = "+3";

   	}elseif (($p_DiaFer == "Fiestas Patrias 29 de Julio") and($p_NomDia == "Lunes")){
            $fs_ObtSuma = "+1";

   	}elseif (($p_DiaFer == "Fiestas Patrias 29 de Julio") and ($p_NomDia == "Martes")){
            $fs_ObtSuma = "+1";

   	}elseif (($p_DiaFer == "Fiestas Patrias 29 de Julio") and ($p_NomDia == "Miercoles")){
            $fs_ObtSuma = "+1";

   	}elseif (($p_DiaFer == "Fiestas Patrias 29 de Julio") and ($p_NomDia == "Jueves")){
            $fs_ObtSuma = "+1";

   	}elseif (($p_DiaFer == "Fiestas Patrias 29 de Julio") and ($p_NomDia == "Viernes")){
            $fs_ObtSuma = "+1";

   	}elseif (($p_DiaFer == "Fiestas Patrias 29 de Julio") and ($p_NomDia == "Domingo")){
            $fs_ObtSuma = "+1";

    }

	return $fs_ObtSuma;
}

function fs_FechaEfectiva($fecha)
{
    //Calcula el �ltimo d�a habil del mes
    $UltimoHabil =  fp_UltimoDia ($fecha); 					
    $DiaSemana = date('N', strtotime($UltimoHabil)); 		  

    //Si es s�bado o domingo le resto los d�as que pasen del viernes
    if ($DiaSemana >= 6){
        $UltimoHabil = strtotime($UltimoHabil . '+ '.(int)(5 - $DiaSemana).'days');
    }

    return $UltimoHabil;
}

function pp_CargarEstructuraFeriados_Plazo($p_Fecha , $p_Plazo , $p_Tipo, $g_Int_PeriodoGra)
{
        $g_Bol_FecDob = false;
        
        if ($p_Tipo == 1){
            $r_dat_Fecha = $p_Fecha;
        }else{
            $r_dat_Fecha = fs_FechaEfectiva($p_Fecha);
        }
   
        $p_Plazo = $p_Plazo; //* 2

	/*unset($g_Arr_FecPla1[0]); 
	unset($g_Arr_FecPla2[0]); 
	unset($g_Arr_FecPla3[0]); 
	unset($g_Arr_FecPla4[0]); 
	unset($g_Arr_FecPla5[0]); 
	
	unset($g_Arr_FecPla1[$p_Plazo]);*/
   
   	for ($r_int_Contad = 0; $r_int_Contad <= $p_Plazo - 1; $r_int_Contad++) { 
      
            if ($r_int_Contad > 0) {//= 1
                $r_dat_Fecha = f_f_AumentarMes2 (1,$r_dat_Fecha);//date("d/m/Y",strtotime('+ 1 month', strtotime($r_dat_Fecha))); //strtotime($r_dat_Fecha."+ 1 months"); 
			
                if ($p_Tipo == 2){
                    $r_dat_Fecha = fs_FechaEfectiva($r_dat_Fecha);
                                 }
            }else{
                if ($g_Int_PeriodoGra > 0){
                    $r_dat_Fecha =  f_f_AumentarMes2 ($g_Int_PeriodoGra,$r_dat_Fecha);//date("d/m/Y",strtotime('+ '.$g_Int_PeriodoGra.' months', strtotime($r_dat_Fecha))); // strtotime($r_dat_Fecha . '+ '.$g_Int_PeriodoGra.' months'); 
			  		  }
            }
      	     
            $r_int_Ano = f_f_ExtraerAnio($r_dat_Fecha);
            $r_int_Mes = f_f_ExtraerMes($r_dat_Fecha);
            $r_int_Dia = f_f_ExtraerDia($r_dat_Fecha);

            $r_str_NomDia = fs_ObtieneNomDia($r_dat_Fecha); 
            $r_str_DiaFer = fs_ObtieneDesDia($r_int_Dia, $r_int_Mes, $r_int_Ano);
            $r_str_Sumas = fs_ObtieneSumas($r_str_DiaFer, $r_str_NomDia);

            if ($r_str_Sumas == "") { 
                $r_str_Sumas = 0;	}

            $g_Arr_FecPla1[$r_int_Contad + 1]['vItem'] = $r_int_Contad + 1;   
            $g_Arr_FecPla1[$r_int_Contad + 1]['vNombre'] = $r_str_NomDia;
            $g_Arr_FecPla1[$r_int_Contad + 1]['vPeriodo'] = $r_int_Ano;
            $g_Arr_FecPla1[$r_int_Contad + 1]['vMes'] = $r_int_Mes;
            $g_Arr_FecPla1[$r_int_Contad + 1]['vDia'] = $r_int_Dia;
            $g_Arr_FecPla1[$r_int_Contad + 1]['vDiaFer'] = $r_str_DiaFer;
            $g_Arr_FecPla1[$r_int_Contad + 1]['vSuma'] = $r_str_Sumas;

            if ($r_str_Sumas <> "") {
                $g_Arr_FecPla1[$r_int_Contad + 1]['vFecha1'] = f_f_AumentarDia2($r_str_Sumas,$r_dat_Fecha);
            }else{
                $g_Arr_FecPla1[$r_int_Contad + 1]['vFecha1'] = $r_dat_Fecha;
            }

            if ($r_int_Contad > 0 ) {
                if ( f_f_ExtraerMes($g_Arr_FecPla1[$r_int_Contad + 1]['vFecha1']) ==(((f_f_ExtraerMes($g_Arr_FecPla1[$r_int_Contad]['vFecha1']) + 1) == 13)?1:f_f_ExtraerMes($g_Arr_FecPla1[$r_int_Contad]['vFecha1']) + 1) ) {
                    $g_Arr_FecPla1[$r_int_Contad + 1]['vValida'] = "CHECK";
                }else {
                    if (f_f_ExtraerAnio($g_Arr_FecPla1[$r_int_Contad + 1]['vFecha1'])==f_f_ExtraerMes($g_Arr_FecPla1[$r_int_Contad]['vFecha1']) + 1) {
                        $g_Arr_FecPla1[$r_int_Contad + 1]['vValida'] = "CHECK";
                    }else {
                        $g_Arr_FecPla1[$r_int_Contad + 1]['vValida'] = "DOBLE FECHA";
                    }
                }
            }else{
                $g_Arr_FecPla1[$r_int_Contad + 1]['vValida'] = "";
            }
				
	}// for
		
   	$g_int_NumArr = 1;
		
	for ($r_int_Contad = 1; $r_int_Contad <= count($g_Arr_FecPla1); $r_int_Contad++) {
   
            if ((int) ($r_int_Contad + 1) < count($g_Arr_FecPla1)){
			
		if (f_f_ExtraerMes($g_Arr_FecPla1[$r_int_Contad]['vFecha1']) == f_f_ExtraerMes($g_Arr_FecPla1[$r_int_Contad + 1]['vFecha1'])) {
                    $g_Arr_FecPla1[$r_int_Contad]['vFecApt'] = f_f_DisminuirDia($g_Arr_FecPla1[$r_int_Contad]['vFecha1']);
                    $g_Arr_FecPla1[$r_int_Contad]['vFecApt'] = f_f_DisminuirDia($g_Arr_FecPla1[$r_int_Contad]['vFecApt']);
		}else{
                    $g_Arr_FecPla1[$r_int_Contad]['vFecApt'] = $g_Arr_FecPla1[$r_int_Contad]['vFecha1'];
		}
            }else{
                $g_Arr_FecPla1[$r_int_Contad]['vFecApt'] = $g_Arr_FecPla1[$r_int_Contad]['vFecha1'];
            }
            
	}// for
		
	$_SESSION["g_Arr_FecPla1"] = $g_Arr_FecPla1;
	//TERMINA $g_Arr_FecPla1 
	
	for ($r_int_Contad = 1; $r_int_Contad <= count($g_Arr_FecPla1); $r_int_Contad++) {             
            if ($g_Arr_FecPla1[$r_int_Contad]['vValida'] == "DOBLE FECHA"){
                $g_Arr_FecPla2 = pp_CargarEstructuraFechasAptas($g_Arr_FecPla1);
		$g_Bol_FecDob = true;
		$g_int_NumArr = 2;
                break;
            }

	} //for
        
	if(isset($g_Arr_FecPla2)){
            $_SESSION["g_Arr_FecPla2"] = $g_Arr_FecPla2;  
        }
	
        //TERMINA $g_Arr_FecPla2
	
	if ($g_Bol_FecDob == true){
            for ($r_int_Contad = 1; $r_int_Contad <= count($g_Arr_FecPla2); $r_int_Contad++) { 
                $g_Bol_FecDob = false;
                
                if ($g_Arr_FecPla2[$r_int_Contad]['vValida'] == "DOBLE FECHA"){
                    $g_Arr_FecPla3 = pp_CargarEstructuraFechasAptas($g_Arr_FecPla2);
                    $g_Bol_FecDob = true;
                    $g_int_NumArr = 3;
                    break; 
                }
            }//for
	}
	if(isset($g_Arr_FecPla3)){
            $_SESSION["g_Arr_FecPla3"] = $g_Arr_FecPla3;  
        }
        
        if ($g_Bol_FecDob == true) {
            for ($r_int_Contad = 1; $r_int_Contad <= count($g_Arr_FecPla3); $r_int_Contad++) {
                $g_Bol_FecDob = false;
         	
                if($g_Arr_FecPla3[$r_int_Contad]['vValida'] == "DOBLE FECHA"){
                    $g_Arr_FecPla4 = pp_CargarEstructuraFechasAptas($g_Arr_FecPla3);
                    $g_Bol_FecDob = true;
                    $g_int_NumArr = 4;
                    break;
		}
            }//for
	}
        
        if(isset($g_Arr_FecPla4)){
            $_SESSION["g_Arr_FecPla4"] = $g_Arr_FecPla4; 
        }

        
	if ($g_Bol_FecDob == true) {
            for ($r_int_Contad = 1; $r_int_Contad <= count($g_Arr_FecPla4); $r_int_Contad++) { 
                $g_Bol_FecDob = false;
                if($g_Arr_FecPla4[$r_int_Contad]['vValida'] == "DOBLE FECHA"){
                    $g_Arr_FecPla5 = pp_CargarEstructuraFechasAptas($g_Arr_FecPla4); 
                    $g_Bol_FecDob = true;
                    $g_int_NumArr = 5;
                    break;
                }
            }//for
   	}  
        
	if(isset($g_Arr_FecPla5)){
            $_SESSION["g_Arr_FecPla5"] = $g_Arr_FecPla5;
        }	
        
	$_SESSION["g_int_NumArr"] = $g_int_NumArr;

}


function pp_CargarEstructuraFechasAptas($p_Arr_FecPla) // $p_Arr_Aux   ($p_Arr_FecPla() As g_Est_FecPlazo, $p_Arr_Aux() As g_Est_FecPlazo)
{
	//$p_Arr_Aux = $_SESSION["g_Arr_FecPla1"];
   	//$p_Arr_Aux = $_SESSION["p_Arr_Aux"];
	 
   	//unset($p_Arr_Aux[count($p_Arr_FecPla)]); 
   
	for ($r_int_Contad = 0; $r_int_Contad <= count($p_Arr_FecPla) - 1; $r_int_Contad++) { 
      
            $r_dat_Fecha = $p_Arr_FecPla[$r_int_Contad + 1]['vFecApt'];
		 
            $r_int_Ano = f_f_ExtraerAnio($r_dat_Fecha);
            $r_int_Mes = f_f_ExtraerMes($r_dat_Fecha);
            $r_int_Dia = f_f_ExtraerDia($r_dat_Fecha);
      	
            $r_str_NomDia = fs_ObtieneNomDia($r_dat_Fecha); 
            $r_str_DiaFer = fs_ObtieneDesDia($r_int_Dia, $r_int_Mes, $r_int_Ano);
            $r_str_Sumas = fs_ObtieneSumas($r_str_DiaFer, $r_str_NomDia);

            if ($r_str_Sumas == "") { 
                $r_str_Sumas = 0;	}
      
            $p_Arr_Aux[$r_int_Contad + 1]['vItem'] = $r_int_Contad + 1;   
            $p_Arr_Aux[$r_int_Contad + 1]['vNombre'] = $r_str_NomDia;
            $p_Arr_Aux[$r_int_Contad + 1]['vPeriodo'] = $r_int_Ano;
            $p_Arr_Aux[$r_int_Contad + 1]['vMes'] = $r_int_Mes;
            $p_Arr_Aux[$r_int_Contad + 1]['vDia'] = $r_int_Dia;
            $p_Arr_Aux[$r_int_Contad + 1]['vDiaFer'] = $r_str_DiaFer;
            $p_Arr_Aux[$r_int_Contad + 1]['vSuma'] = $r_str_Sumas;
	  
            if ($r_str_Sumas <> "") {
	  	$p_Arr_Aux[$r_int_Contad + 1]['vFecha1'] = f_f_AumentarDia2($r_str_Sumas,$r_dat_Fecha);
            }else{
		$p_Arr_Aux[$r_int_Contad + 1]['vFecha1'] = $r_dat_Fecha;
            }
					
            if ($r_int_Contad > 0 ) {
			
		if ( f_f_ExtraerMes($p_Arr_Aux[$r_int_Contad + 1]['vFecha1']) ==(((f_f_ExtraerMes($p_Arr_Aux[$r_int_Contad]['vFecha1']) + 1) == 13)?1:f_f_ExtraerMes($p_Arr_Aux[$r_int_Contad]['vFecha1']) + 1) ) {
                    $p_Arr_Aux[$r_int_Contad + 1]['vValida'] = "CHECK";
		}else {
                    if (f_f_ExtraerAnio($p_Arr_Aux[$r_int_Contad + 1]['vFecha1'])==f_f_ExtraerMes($p_Arr_Aux[$r_int_Contad]['vFecha1']) + 1) {
			$p_Arr_Aux[$r_int_Contad + 1]['vValida'] = "CHECK";
                    }else {
			$p_Arr_Aux[$r_int_Contad + 1]['vValida'] = "DOBLE FECHA";
                    }
		}
            }else{
		$p_Arr_Aux[$r_int_Contad + 1]['vValida'] = "";
            }
            
   	}//for
     
	for ($r_int_Contad = 1; $r_int_Contad <= count($p_Arr_FecPla); $r_int_Contad++) {
   
            if ((int) ($r_int_Contad + 1) < count($p_Arr_Aux)){
			
		if (f_f_ExtraerMes($p_Arr_Aux[$r_int_Contad]['vFecha1']) == f_f_ExtraerMes($p_Arr_Aux[$r_int_Contad + 1]['vFecha1'])) {
                    $p_Arr_Aux[$r_int_Contad]['vFecApt'] = f_f_DisminuirDia($p_Arr_Aux[$r_int_Contad]['vFecha1']);
                    $p_Arr_Aux[$r_int_Contad]['vFecApt'] = f_f_DisminuirDia($p_Arr_Aux[$r_int_Contad]['vFecApt']);
                }else{
                    $p_Arr_Aux[$r_int_Contad]['vFecApt'] = $p_Arr_Aux[$r_int_Contad]['vFecha1'];
		}
            }else{
          	$p_Arr_Aux[$r_int_Contad]['vFecApt'] = $p_Arr_Aux[$r_int_Contad]['vFecha1'];
            }
		
	}// for

	
	return $p_Arr_Aux;

}



function pp_Cli_2GenerarTNC($xnPrestamo ,$xnTNC , $xDesembolso ,$xDiaPeriocidad, $g_Dbl_TotValAse , $g_Dbl_IntInm , $g_Int_NroCuotas, $g_Int_PeriodoGra, $g_Int_PasoAjuste , $g_Int_TopeAjuste, $g_Dbl_Portes, $g_Dbl_NewPrestamo, $g_Int_Dobles, $g_Dbl_ProductoPG, $g_Dbl_TasInt, $g_int_TipoProducto)

{
   //'*** ReDefinir esta Matriz TNC
  // unset($g_Arr_TNC_Cli[count($g_Int_NroCuotas)]); //ReDim g_Arr_TNC_Cli(g_Int_NroCuotas)
   
   //'****************************************************************************************
   //'*** Cuerpo del Procedimiento
     
        //'*** Calcular Datos Iniciales
        $g_Dbl_SegInm = (number_format($g_Dbl_TotValAse * $g_Dbl_IntInm, 2 ,'.',''));
        $r_Fec_Primer = fp_PrimerVenci(1, $xDesembolso, $xDiaPeriocidad) ;

        if ($g_int_TipoProducto == 2 ){
           $r_dbl_PorItf = 0.005; }
        else{
           $r_dbl_PorItf = 0;
        }
        
	pp_CargarEstructuraFeriados_Plazo($r_Fec_Primer, $g_Int_NroCuotas, 1, $g_Int_PeriodoGra);
   
   	//*** Iniciar Valores en la Estructura en item=0
   	$g_Arr_TNC_Cli[0]['tnc_Item'] = 0;
   	$g_Arr_TNC_Cli[0]['tnc_nDD'] = 0;
   	$g_Arr_TNC_Cli[0]['tnc_fVenci'] = $xDesembolso;
   	$g_Arr_TNC_Cli[0]['tnc_mCapital'] = $xnTNC;
   	$g_Arr_TNC_Cli[0]['tnc_mInteres'] = 0;
   	$g_Arr_TNC_Cli[0]['tnc_mDeudaFin'] = $xnTNC;
   	$g_Arr_TNC_Cli[0]['tnc_mDesgra'] = 0;
   	$g_Arr_TNC_Cli[0]['tnc_mvTc'] = 0;
   	$g_Arr_TNC_Cli[0]['tnc_mCuota'] = 0;
   	$g_Arr_TNC_Cli[0]['tnc_mSegInm'] = 0;
   	$g_Arr_TNC_Cli[0]['tnc_mPortes'] = 0;
   	$g_Arr_TNC_Cli[0]['tnc_mComision'] = 0;
   	$g_Arr_TNC_Cli[0]['tnc_mItf'] = 0;
   	$g_Arr_TNC_Cli[0]['tnc_mTotal'] = 0;
	  	  
   	$r_Dbl_tSaldo = $xnTNC;
   	$r_Dbl_tCuota = 0;
   	$x = 0;
   	$r_int_PasAju = 0;
	$fdVenci="";
	$pasada=0;
   	
	$_SESSION["g_Dbl_NewPrestamo"] = $g_Dbl_NewPrestamo;
	$_SESSION["g_Int_NroCuotas"] = $g_Int_NroCuotas;
	
	$g_int_NumArr = $_SESSION["g_int_NumArr"];
	$g_Arr_FecPla1 = $_SESSION["g_Arr_FecPla1"];
	
        if(isset($_SESSION["g_Arr_FecPla2"])){
            $g_Arr_FecPla2 = $_SESSION["g_Arr_FecPla2"];
        }
        if(isset($_SESSION["g_Arr_FecPla3"])){
            $g_Arr_FecPla3 = $_SESSION["g_Arr_FecPla3"]; 
        }
	if(isset($_SESSION["g_Arr_FecPla4"])){
            $g_Arr_FecPla4 = $_SESSION["g_Arr_FecPla4"];
        }
	if(isset($_SESSION["g_Arr_FecPla5"])){
            $g_Arr_FecPla5 = $_SESSION["g_Arr_FecPla5"];
        }
		
	//Inicio--> Para encontrar la cuota fija
	do {
		if(isset($_SESSION["p_tCuota"])){
			$r_Dbl_tCuota = $_SESSION["p_tCuota"];
		}else{
			$r_Dbl_tCuota = 0;
		}
			
		if(isset($_SESSION["p_Iterac"])){
			$r_int_PasAju = $_SESSION["p_Iterac"];
		}else{
			$r_int_PasAju = 0;
		}

		for ($i = 1; $i <= $g_Int_NroCuotas; $i++){
         
                    if ($g_int_NumArr == 1){
                        $fdVenci = $g_Arr_FecPla1[$i]['vFecApt']; 
                    }elseif ($g_int_NumArr == 2){
                        $fdVenci = $g_Arr_FecPla2[$i]['vFecApt'];
                    }elseif ($g_int_NumArr == 3){
                        $fdVenci = $g_Arr_FecPla3[$i]['vFecApt'];
                    }elseif ($g_int_NumArr == 4){
                        $fdVenci = $g_Arr_FecPla4[$i]['vFecApt'];
                    }elseif ($g_int_NumArr == 5){
                        $fdVenci = $g_Arr_FecPla5[$i]['vFecApt'];
                    }

                    $r_Int_tlnDD = f_f_RestaFechas($g_Arr_TNC_Cli[$i - 1]['tnc_fVenci'],$fdVenci);
                    $valor1 = (1 + ($g_Dbl_TasInt / 100));
                    $valor2 = ($r_Int_tlnDD / 360);
                    $r_dbl_tInteres = number_format(($g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'] * pow ($valor1, $valor2 )) - $g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'], 15, '.','');

                    $valor3 = (1 + $g_Dbl_ProductoPG);
                    $valor4 = ($r_Int_tlnDD / 30);
                    $r_Dbl_tfnDesgra = number_format(($g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'] * pow ($valor3, $valor4 )) - $g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'], 15, '.','');

                    $valor5 = $r_dbl_tInteres;
                    $r_dbl_tInteres = fs_numero_formato_decimal($valor5);
                    $valor6 = $r_Dbl_tfnDesgra;
                    $r_Dbl_tfnDesgra = fs_numero_formato_decimal($valor6);
                    $g_Arr_TNC_Cli[$i]['tnc_Item'] = $i;

                    $g_Arr_TNC_Cli[$i]['tnc_nDD'] = $g_Arr_TNC_Cli[$i - 1]['tnc_nDD'] + $r_Int_tlnDD;

                    $g_Arr_TNC_Cli[$i]['tnc_fVenci'] = $fdVenci;
                    $g_Arr_TNC_Cli[$i]['tnc_mInteres'] = $r_dbl_tInteres;
                    $g_Arr_TNC_Cli[$i]['tnc_mDesgra'] = $r_Dbl_tfnDesgra;

                    if ($g_Int_Dobles == 1){                                	//'Sin Cuotas Dobles
                        $g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 1;
                    }elseif ($g_Int_Dobles == 2){                               //'Julio
                        if (f_f_ExtraerMes($fdVenci) == 7) {			
                            $g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 2;
                        }else{
                            $g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 1;
                        }
                    }elseif ($g_Int_Dobles == 3){                               //'Diciembre
                        if (f_f_ExtraerMes($fdVenci) == 12 ){			
                            $g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 2;
                        }else{
                            $g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 1;
                        }
                    }elseif ($g_Int_Dobles == 4){                               //'Julio y Diciembre
                        if (f_f_ExtraerMes($fdVenci) == 7 or f_f_ExtraerMes($fdVenci) == 12){
                            $g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 2;
                        }else{
                            $g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 1; 
                        }
                    }

                    $capital = $r_Dbl_tCuota * $g_Arr_TNC_Cli[$i]['tnc_mvTc'] - $g_Arr_TNC_Cli[$i]['tnc_mInteres'] - $g_Arr_TNC_Cli[$i]['tnc_mDesgra'];
                    $g_Arr_TNC_Cli[$i]['tnc_mCapital'] = $capital ; 
                    
                    $deudafin = $g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'] - $g_Arr_TNC_Cli[$i]['tnc_mCapital'];
                    $g_Arr_TNC_Cli[$i]['tnc_mDeudaFin'] = $deudafin; 
                    
                    $cuota = $r_Dbl_tCuota * $g_Arr_TNC_Cli[$i]['tnc_mvTc']; 
                    $g_Arr_TNC_Cli[$i]['tnc_mCuota'] = $cuota; 

                    $seginm = $g_Dbl_SegInm;
                    $g_Arr_TNC_Cli[$i]['tnc_mSegInm'] = $seginm;
                    
                    $g_Arr_TNC_Cli[$i]['tnc_mPortes'] = 0;
                    $g_Arr_TNC_Cli[$i]['tnc_mComision'] = 0;

                    $itf = ($r_dbl_PorItf / 100) * $g_Arr_TNC_Cli[$i]['tnc_mCuota'] * 2; 
                    $g_Arr_TNC_Cli[$i]['tnc_mItf'] = $itf; 

                    $total = $g_Arr_TNC_Cli[$i]['tnc_mCuota'] + $g_Arr_TNC_Cli[$i]['tnc_mItf'] + $g_Arr_TNC_Cli[$i]['tnc_mSegInm'];
                    $g_Arr_TNC_Cli[$i]['tnc_mTotal'] = $total;

	  	} //for
		$_SESSION["p_VarAux"] = $x; 
		$r_Dbl_tSaldo = fs_numero_formato_decimal(number_format($g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mDeudaFin'], 15, '.',''));
                pp_IteraCuota($r_Dbl_tSaldo, $r_Dbl_tCuota, $r_int_PasAju); //, $x
                /* echo "<br>";
                 echo $r_Dbl_tSaldo;
                 echo "<br>";
                 echo $pasada;
                 echo "<br>";
                 echo $r_Dbl_tCuota;*/
	      	 	  
	} while ($r_Dbl_tSaldo >= 0 );
	//Fin --> Encuentra el monto fijo de la cuota.
	

	//Inicio--> Para encontrar los decimales de la cuota
 	for ($y=1;$y<=15;$y++){
		
		if ($r_Dbl_tSaldo < 0.000000009){
	
			///**************************
			if(isset($_SESSION["p_tCuota"])){
				$r_Dbl_tCuota = $_SESSION["p_tCuota"];
			}else{
				$r_Dbl_tCuota = 0;
			}
			if(isset($_SESSION["p_Iterac"])){
				$r_int_PasAju = $_SESSION["p_Iterac"];
			}else{
				$r_int_PasAju = 0;
			}
						
			for ($i = 1; $i <= $g_Int_NroCuotas; $i++){
				 
				if ($g_int_NumArr == 1){
					$fdVenci = $g_Arr_FecPla1[$i]['vFecApt']; 
				}elseif ($g_int_NumArr == 2){
					$fdVenci = $g_Arr_FecPla2[$i]['vFecApt'];
				}elseif ($g_int_NumArr == 3){
					$fdVenci = $g_Arr_FecPla3[$i]['vFecApt'];
				}elseif ($g_int_NumArr == 4){
					$fdVenci = $g_Arr_FecPla4[$i]['vFecApt'];
				}elseif ($g_int_NumArr == 5){
					$fdVenci = $g_Arr_FecPla5[$i]['vFecApt'];
				}
												
				$r_Int_tlnDD = f_f_RestaFechas($g_Arr_TNC_Cli[$i - 1]['tnc_fVenci'],$fdVenci);
				$valor1 = (1 + ($g_Dbl_TasInt / 100));
				$valor2 = ($r_Int_tlnDD / 360);
				$r_dbl_tInteres = number_format(($g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'] * pow ($valor1, $valor2 )), 15, '.','') - number_format($g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'], 15, '.','');
				$r_dbl_tInteres = fs_numero_formato_decimal($r_dbl_tInteres);
				
				$valor3 = (1 + $g_Dbl_ProductoPG);
				$valor4 = ($r_Int_tlnDD / 30);
				$r_Dbl_tfnDesgra = number_format(($g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'] * pow ($valor3, $valor4 )), 15, '.','') - number_format($g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'], 15, '.','');
				$r_Dbl_tfnDesgra = fs_numero_formato_decimal($r_Dbl_tfnDesgra);	 
				
				$g_Arr_TNC_Cli[$i]['tnc_Item'] = $i;

 				$g_Arr_TNC_Cli[$i]['tnc_nDD'] = $g_Arr_TNC_Cli[$i - 1]['tnc_nDD'] + $r_Int_tlnDD;

				$g_Arr_TNC_Cli[$i]['tnc_fVenci'] = $fdVenci;
				$g_Arr_TNC_Cli[$i]['tnc_mInteres'] = $r_dbl_tInteres;
				$g_Arr_TNC_Cli[$i]['tnc_mDesgra'] = $r_Dbl_tfnDesgra;
				 
				if ($g_Int_Dobles == 1){                                 
					$g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 1;
				}elseif ($g_Int_Dobles == 2){                           
					if (f_f_ExtraerMes($fdVenci) == 7) {			
						$g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 2;
					}else{
						$g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 1;
					}
				}elseif ($g_Int_Dobles == 3){                           
					if (f_f_ExtraerMes($fdVenci) == 12 ){			
						$g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 2;
					}else{
						$g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 1;
					}
				}elseif ($g_Int_Dobles == 4){                            
					if (f_f_ExtraerMes($fdVenci) == 7 or f_f_ExtraerMes($fdVenci) == 12){ 
						$g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 2;
					}else{
						$g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 1; 
					}
				}
				$capital = $r_Dbl_tCuota * $g_Arr_TNC_Cli[$i]['tnc_mvTc'] - $g_Arr_TNC_Cli[$i]['tnc_mInteres'] - $g_Arr_TNC_Cli[$i]['tnc_mDesgra'];
				$g_Arr_TNC_Cli[$i]['tnc_mCapital'] = $capital; 
				
				$deudafin =  $g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'] - $g_Arr_TNC_Cli[$i]['tnc_mCapital']; 
				$g_Arr_TNC_Cli[$i]['tnc_mDeudaFin'] = $deudafin ;
				
				$cuota = $r_Dbl_tCuota * $g_Arr_TNC_Cli[$i]['tnc_mvTc']; 
				$g_Arr_TNC_Cli[$i]['tnc_mCuota'] = $cuota;
				
				$seginm = $g_Dbl_SegInm; 
				$g_Arr_TNC_Cli[$i]['tnc_mSegInm'] = $seginm; 
				$g_Arr_TNC_Cli[$i]['tnc_mPortes'] = 0;
				$g_Arr_TNC_Cli[$i]['tnc_mComision'] = 0;
				
				$itf = ($r_dbl_PorItf / 100) * $g_Arr_TNC_Cli[$i]['tnc_mCuota'] * 2;
				$g_Arr_TNC_Cli[$i]['tnc_mItf'] = $itf;
				
				$total = $g_Arr_TNC_Cli[$i]['tnc_mCuota'] + $g_Arr_TNC_Cli[$i]['tnc_mItf'] + $g_Arr_TNC_Cli[$i]['tnc_mSegInm'];
				$g_Arr_TNC_Cli[$i]['tnc_mTotal'] = $total;
							
			} //for
			$_SESSION["p_VarAux"] = $x; 
			$r_Dbl_tSaldo = $g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mDeudaFin'];
			pp_IteraCuota($r_Dbl_tSaldo, $r_Dbl_tCuota, $r_int_PasAju, $x);
			
			/*echo "<br>";
			echo $r_Dbl_tSaldo;
			echo "<br>";
			echo $r_Dbl_tCuota;
			echo "<br>";
			echo $r_int_PasAju;
			echo "<br>";
			echo $x;
			echo "<br>";
			echo "<br>";*/
			
			if ($r_Dbl_tSaldo >= 0){
	
				do {
					if(isset($_SESSION["p_tCuota"])){
						$r_Dbl_tCuota = $_SESSION["p_tCuota"];
					}else{
						$r_Dbl_tCuota = 0;
					}
						
					if(isset($_SESSION["p_Iterac"])){
						$r_int_PasAju = $_SESSION["p_Iterac"];
					}else{
						$r_int_PasAju = 0;
						}
					
					for ($i = 1; $i <= $g_Int_NroCuotas; $i++){
					 
						if ($g_int_NumArr == 1){
							$fdVenci = $g_Arr_FecPla1[$i]['vFecApt']; 
						}elseif ($g_int_NumArr == 2){
							$fdVenci = $g_Arr_FecPla2[$i]['vFecApt'];
						}elseif ($g_int_NumArr == 3){
							$fdVenci = $g_Arr_FecPla3[$i]['vFecApt'];
						}elseif ($g_int_NumArr == 4){
							$fdVenci = $g_Arr_FecPla4[$i]['vFecApt'];
						}elseif ($g_int_NumArr == 5){
							$fdVenci = $g_Arr_FecPla5[$i]['vFecApt'];
						}
													
						$r_Int_tlnDD = f_f_RestaFechas($g_Arr_TNC_Cli[$i - 1]['tnc_fVenci'],$fdVenci);
						$valor1 = (1 + ($g_Dbl_TasInt / 100));
						$valor2 = ($r_Int_tlnDD / 360);
						$r_dbl_tInteres = number_format(($g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'] * pow ($valor1, $valor2 )), 15, '.','') - number_format($g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'], 15, '.','');
						$r_dbl_tInteres = fs_numero_formato_decimal($r_dbl_tInteres);
						
						$valor3 = (1 + $g_Dbl_ProductoPG);
						$valor4 = ($r_Int_tlnDD / 30);
						$r_Dbl_tfnDesgra = number_format(($g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'] * pow ($valor3, $valor4 )), 15, '.','') - number_format($g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'], 15, '.','');
					 	$r_Dbl_tfnDesgra = fs_numero_formato_decimal($r_Dbl_tfnDesgra);
						
						$g_Arr_TNC_Cli[$i]['tnc_Item'] = $i;
						$g_Arr_TNC_Cli[$i]['tnc_nDD'] = $g_Arr_TNC_Cli[$i - 1]['tnc_nDD'] + $r_Int_tlnDD;
						$g_Arr_TNC_Cli[$i]['tnc_fVenci'] = $fdVenci;
						$g_Arr_TNC_Cli[$i]['tnc_mInteres'] = $r_dbl_tInteres;
						$g_Arr_TNC_Cli[$i]['tnc_mDesgra'] = $r_Dbl_tfnDesgra;
					 
						if ($g_Int_Dobles == 1){                                 //'Sin Cuotas Dobles
							$g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 1;
						}elseif ($g_Int_Dobles == 2){                             //'Julio
							if (f_f_ExtraerMes($fdVenci) == 7) {			
								$g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 2;
							}else{
								$g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 1;
							}
						}elseif ($g_Int_Dobles == 3){                             //'Diciembre
							if (f_f_ExtraerMes($fdVenci) == 12 ){			
								$g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 2;
							}else{
								$g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 1;
							}
						}elseif ($g_Int_Dobles == 4){                             //'Julio y Diciembre
							if (f_f_ExtraerMes($fdVenci) == 7 or f_f_ExtraerMes($fdVenci) == 12){ 
								$g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 2;
							}else{
								$g_Arr_TNC_Cli[$i]['tnc_mvTc'] = 1; 
							}
						}
						$capital =  $r_Dbl_tCuota * $g_Arr_TNC_Cli[$i]['tnc_mvTc'] - $g_Arr_TNC_Cli[$i]['tnc_mInteres'] - $g_Arr_TNC_Cli[$i]['tnc_mDesgra'];
						$g_Arr_TNC_Cli[$i]['tnc_mCapital'] = $capital; 
						
						$deudafin = $g_Arr_TNC_Cli[$i - 1]['tnc_mDeudaFin'] - $g_Arr_TNC_Cli[$i]['tnc_mCapital'];
						$g_Arr_TNC_Cli[$i]['tnc_mDeudaFin'] = $deudafin;
						
						$cuota = $r_Dbl_tCuota * $g_Arr_TNC_Cli[$i]['tnc_mvTc'];
						$g_Arr_TNC_Cli[$i]['tnc_mCuota'] = $cuota; 
						
						$seginm = $g_Dbl_SegInm; 
						$g_Arr_TNC_Cli[$i]['tnc_mSegInm'] = $seginm;
						$g_Arr_TNC_Cli[$i]['tnc_mPortes'] = 0;
						$g_Arr_TNC_Cli[$i]['tnc_mComision'] = 0;
						
						$itf = ($r_dbl_PorItf / 100) * $g_Arr_TNC_Cli[$i]['tnc_mCuota'] * 2; 
						$g_Arr_TNC_Cli[$i]['tnc_mItf'] = $itf; 
						
						$total = $g_Arr_TNC_Cli[$i]['tnc_mCuota'] + $g_Arr_TNC_Cli[$i]['tnc_mItf'] + $g_Arr_TNC_Cli[$i]['tnc_mSegInm'];
						$g_Arr_TNC_Cli[$i]['tnc_mTotal'] = $total;
								
					} //for
					
					$_SESSION["p_VarAux"] = $x; 
					$r_Dbl_tSaldo = $g_Arr_TNC_Cli[$g_Int_NroCuotas]['tnc_mDeudaFin'];
					pp_IteraCuota($r_Dbl_tSaldo, $r_Dbl_tCuota, $r_int_PasAju); //, $x
					/*echo "<br>";
					echo "<br>";
					echo $r_Dbl_tSaldo;
					echo "<br>";
					echo $r_Dbl_tCuota;
					echo "<br>";
					echo $r_int_PasAju;
					echo "<br>";
					echo $x;
					echo "<br>";
					echo "<br>";*/
					
					if ($r_Dbl_tSaldo < 0.000000009){
                                            $num_decimales = strlen(strrchr($r_Dbl_tCuota,"."))-1; 
                                            if ($num_decimales >= 10) {
                                                break 2;
                                            }else{
                                                break 1;}
                                            
					}
				} while ($r_Dbl_tSaldo >= 0);

			}//fin if ($r_Dbl_tSaldo >= 0 && $y == 0){
                        
		}//fin if ($r_Dbl_tSaldo <= 0.000000009){
                
	}//FOR 25 PASADAS
  
	
	$_SESSION["g_Arr_TNC_Cli"] = $g_Arr_TNC_Cli;
}

function fs_numero_formato_decimal($numero){

	$num_decimales = strlen(strrchr($numero,"."))-1; 			
	
	if ($num_decimales == -1) { $num_decimales = 0; }
		$num_enteros = strlen(substr($numero, 0 , strpos($numero,"."))); 				
		$total = $num_decimales + $num_enteros + 1;
		$parteentera = substr($numero, 0 , strpos($numero,"."));
		$partedecimal = strrchr($numero,".");
		$digitos1 = 16 - $num_enteros + 1; //11
	
	if ($total <=16 ){
		return $numero;
	}else{
		if ($digitos1 < $num_decimales) {
		}
		 $num = $parteentera . substr($partedecimal, 0 , $digitos1); 
		 $num = number_format((float) str_replace(',', '',$num), $digitos1 - 2, '.','');
		 return $num;
	}
}

function pp_IteraCuota($p_tSaldo , $p_tCuota , $p_Iterac)
{

	$p_VarAux = $_SESSION["p_VarAux"];

   	if ($p_Iterac == 0){
            if ($p_tSaldo < 0){
        	$p_Iterac = $p_Iterac + 1;
         	$p_tCuota = $p_tCuota - 1;
         	$p_VarAux = 0;
            }else{
        	$p_tCuota = $p_tCuota + 1;
	  	}
   	}else {
            if ($p_tSaldo < 0){
                $valor1 = 10;
                $valor2 = (-1) * $p_Iterac;
                $r_dbl_Factor = 1 * pow($valor1, $valor2); 
         	if ($p_VarAux == 1){
                    $p_tCuota = $p_tCuota + $r_dbl_Factor * $p_VarAux;
		}else{
                    $valor1 = 10;
                    $valor2 = (-1) * $p_Iterac;
                    $r_dbl_Factor = 1 * pow($valor1, $valor2); 
                    $p_VarAux = $p_VarAux + 1;
                    $p_tCuota = $p_tCuota - $r_dbl_Factor;
                    $p_Iterac = $p_Iterac + 1;
                    $p_VarAux = 0;
		}
            }else{
		$valor1 = 10;
		$valor2 = (-1) * $p_Iterac;
         	$r_dbl_Factor = 1 * pow($valor1, $valor2); 
         	$p_VarAux = $p_VarAux + 1;
         	$p_tCuota = $p_tCuota + $r_dbl_Factor;
            }
	}
	
   	$_SESSION["p_tCuota"] = $p_tCuota;
	$_SESSION["p_Iterac"] = $p_Iterac;

}

//fin pp_Cli_2GenerarTNC
//***********************************************************

//*****************************************************************************
function pp_Cof_2GenerarTNC( $xnPrestamo , $xnTNC , $xDesembolso , $xDiaPeriocidad , $g_Int_NroCuotas, $g_Dbl_TasaFMVAdi, $g_Dbl_TasaFMVDia, $g_Dbl_TasaFMVSumaX, $g_Int_PeriodoGra, $g_Int_Dobles, $g_Int_PasoAjuste , $g_Int_TopeAjuste)
{

   //'*** ReDefinir esta Matriz TNC
    unset($g_Arr_TNC_Cof[count($g_Int_NroCuotas)]); 
   
   //'****************************************************************************************
   //'*** Calcular Datos Iniciales
   	$r_Fec_Primer = fp_PrimerVenci(2, $xDesembolso, $xDiaPeriocidad);

   //'Se Obtiene las Fechas V�lidas para el Cronograma Cofide - �ltimos d�as h�biles de mes
   	pp_CargarEstructuraFeriados_Plazo($r_Fec_Primer, $g_Int_NroCuotas, 2, $g_Int_PeriodoGra);

   //'*** Iniciar Valores en la Estructura en item=0
   	$g_Arr_TNC_Cof[0]['tnc_Item'] = 0;
   	$g_Arr_TNC_Cof[0]['tnc_fVenci'] = $xDesembolso;
   	$g_Arr_TNC_Cof[0]['tnc_mCapital'] = $xnTNC;
   	$g_Arr_TNC_Cof[0]['tnc_mInteres'] = 0;
   	$g_Arr_TNC_Cof[0]['tnc_mDeudaFin'] = $xnTNC;
   	$g_Arr_TNC_Cof[0]['tnc_mDesgra'] = 0;
   	$g_Arr_TNC_Cof[0]['tnc_mvTc'] = 0;
   	$g_Arr_TNC_Cof[0]['tnc_mCuota'] = 0;
   	$g_Arr_TNC_Cof[0]['tnc_mSegInm'] = 0;
   	$g_Arr_TNC_Cof[0]['tnc_mPortes'] = 0;
   	$g_Arr_TNC_Cof[0]['tnc_mComision'] = 0;
   	$g_Arr_TNC_Cof[0]['tnc_mItf'] = 0;
   	$g_Arr_TNC_Cof[0]['tnc_mTotal'] = 0;
   
   	$r_Dbl_tSaldo = $xnTNC;
   	$r_Dbl_tCuota = 0;
   	$x = 0;
   	$r_int_PasAju = 0;
   	$Factor = 0;
   	
	$g_Arr_FecPla1 = $_SESSION["g_Arr_FecPla1"];
	$g_int_NumArr = $_SESSION["g_int_NumArr"];
	
   	do {
		
		for ($i = 1; $i <= $g_Int_NroCuotas; $i++){
			if ($g_int_NumArr == 1){
            	$fdVenci = $g_Arr_FecPla1[$i]['vFecApt'];
			}/*elseif ($g_int_NumArr == 2){
            	$fdVenci = $g_Arr_FecPla2[$i]['vFecApt'];
		 	}elseif ($g_int_NumArr == 3){
            	$fdVenci = $g_Arr_FecPla3[$i]['vFecApt'];
	     	}elseif ($g_int_NumArr == 4){
            	$fdVenci = $g_Arr_FecPla4[$i]['vFecApt'];
		 	}elseif ($g_int_NumArr == 5){
            	$fdVenci = $g_Arr_FecPla5[$i]['vFecApt'];
   		 	}*/

         	$r_Int_tlnDD = date_diff (date_create($g_Arr_TNC_Cof[$i - 1]['tnc_fVenci']), date_create($fdVenci));
         	$r_dbl_tInteres = number_format(($g_Arr_TNC_Cof[$i - 1]['tnc_mDeudaFin'] * ((1 + $g_Dbl_TasInt / 100) * pow(($r_Int_tlnDD / 360))) - $g_Arr_TNC_Cof[$i - 1]['tnc_mDeudaFin']), 10, '.','');
         	$r_Dbl_tfnDesgra = 0;
         	$r_Dbl_SegInm = 0;
         	$r_Dbl_tComision = number_format(($g_Arr_TNC_Cof[$i - 1]['tnc_mDeudaFin'] * ((1 + $g_Dbl_TasaFMVDia) * pow(($r_Int_tlnDD / 30))) - $g_Arr_TNC_Cof[$i - 1]['tnc_mDeudaFin']), 10, '.','');
         
         	$g_Arr_TNC_Cof[$i]['tnc_Item'] = $i;
         	$g_Arr_TNC_Cof[$i]['tnc_fVenci'] = $fdVenci;
         	$g_Arr_TNC_Cof[$i]['tnc_mInteres'] = $r_dbl_tInteres;
         	$g_Arr_TNC_Cof[$i]['tnc_mDesgra'] = 0;
		 
		 	if ($g_Int_Dobles = 1){                                    //'Sin Cuotas Dobles
            	$g_Arr_TNC_Cof[$i]['tnc_mvTc'] = 1;
		 	}elseif ($g_Int_Dobles = 2){                               //'Julio
         		if (date("m" , strtotime($fdVenci)) == 7) {		
            		$g_Arr_TNC_Cof[$i]['tnc_mvTc'] = 2;
				}else{
             		$g_Arr_TNC_Cof[$i]['tnc_mvTc'] = 1;
				}
			 }elseif ($g_Int_Dobles = 3){                             //'Diciembre
          		if (date("m" , strtotime($fdVenci)) == 12 ){			
           			$g_Arr_TNC_Cof[$i]['tnc_mvTc'] = 2;
				}else{
            		$g_Arr_TNC_Cof[$i]['tnc_mvTc'] = 1;
				}
		 	}elseif ($g_Int_Dobles = 4){                             //'Julio y Diciembre
           		if (date("m" , strtotime($fdVenci)) == 7 or date("m" , strtotime($fdVenci)) == 12){ 
           			$g_Arr_TNC_Cof[$i]['tnc_mvTc'] = 2;
				}else{
           			$g_Arr_TNC_Cof[$i]['tnc_mvTc'] = 1; 
				}
			}
			         
         	$g_Arr_TNC_Cof[$i]['tnc_mCapital'] = ($r_Dbl_tCuota * $g_Arr_TNC_Cof[$i]['tnc_mvTc']) - $g_Arr_TNC_Cof[$i]['tnc_mInteres'] - $g_Arr_TNC_Cof[$i]['tnc_mDesgra'];
         	$g_Arr_TNC_Cof[$i]['tnc_mDeudaFin'] = $g_Arr_TNC_Cof[$i - 1]['tnc_mDeudaFin'] - $g_Arr_TNC_Cof[$i]['tnc_mCapital'];
         	$g_Arr_TNC_Cof[$i]['tnc_mCuota'] = $r_Dbl_tCuota * $g_Arr_TNC_Cof[$i]['tnc_mvTc'];
         	$g_Arr_TNC_Cof[$i]['tnc_mSegInm'] = $r_Dbl_SegInm;
         	$g_Arr_TNC_Cof[$i]['tnc_mPortes'] = 0;
         	$g_Arr_TNC_Cof[$i]['tnc_mComision'] = $r_Dbl_tComision;
         	$g_Arr_TNC_Cof[$i]['tnc_mItf'] = (0.005 / 100) * $g_Arr_TNC_Cof[$i]['tnc_mCuota'] * 2;
         	$g_Arr_TNC_Cof[$i]['tnc_mTotal'] = $g_Arr_TNC_Cof[$i]['tnc_mCuota'] + $g_Arr_TNC_Cof[$i]['tnc_mItf'] + $g_Arr_TNC_Cof[$i]['tnc_mSegInm'];
	  	} // for
      
      	$r_Dbl_tSaldo = $g_Arr_TNC_Cof[$g_Int_NroCuotas]['tnc_mDeudaFin'];
      
      	pp_IteraCuota($r_Dbl_tSaldo, $r_Dbl_tCuota, $r_int_PasAju, $x);
  
  	}while ($r_Dbl_tSaldo >= 0 && $r_Dbl_tSaldo < 0.000000009);
   
	$_SESSION["g_Arr_TNC_Cof"] = $g_Arr_TNC_Cof;
    
}


//*****************************************************************************
function fp_CargarTNC_Cli($g_Int_NroCuotas)
{

   	$g_Arr_TNC_Cli = $_SESSION["g_Arr_TNC_Cli"];
	
	$tot_tnc_mCapital=0;
	$tot_tnc_mInteres=0;
	$tot_tnc_mDesgra=0;
	$tot_tnc_mSegInm=0;
	$tot_tnc_mPortes=0;
	$tot_tnc_cuotat=0;
   
   //'*** Recorriendo la Estructura y cargando la Matriz
    for($i = 0; $i <= $g_Int_NroCuotas; $i++){
	   
        $r_Arr_DatosTNC_Cli[$i][1] = str_repeat("0",3 - strlen($g_Arr_TNC_Cli[$i]['tnc_Item'])).$g_Arr_TNC_Cli[$i]['tnc_Item'];		//CUOTA
        $r_Arr_DatosTNC_Cli[$i][2] = $g_Arr_TNC_Cli[$i]['tnc_fVenci'];																 //F. VCTO    
        // $r_Arr_DatosTNC_Cli[$i][3] = number_format($g_Arr_TNC_Cli[$i]['tnc_mDeudaIni'], 2 ,'.',',');	

        $r_Arr_DatosTNC_Cli[$i][5] = number_format($g_Arr_TNC_Cli[$i]['tnc_mInteres'], 2 ,'.',',');					//INTER�S
        $r_Arr_DatosTNC_Cli[$i][6] = number_format($g_Arr_TNC_Cli[$i]['tnc_mDesgra'], 2 ,'.',',');			 		//SEG. PREST.
        $r_Arr_DatosTNC_Cli[$i][7] = number_format($g_Arr_TNC_Cli[$i]['tnc_mSegInm'], 2 ,'.',',');					//SEG. VIVIENDA
        $r_Arr_DatosTNC_Cli[$i][8] = number_format($g_Arr_TNC_Cli[$i]['tnc_mPortes'], 2 ,'.',',');			 		//PORTES
    
	$r_Arr_DatosTNC_Cli[$i][9] = number_format($g_Arr_TNC_Cli[$i]['tnc_mCuota'], 2 ,'.','') + 
	  							   number_format($g_Arr_TNC_Cli[$i]['tnc_mItf'], 2 ,'.','') + 
								   number_format($g_Arr_TNC_Cli[$i]['tnc_mSegInm'], 2 ,'.','') + 
								   number_format($g_Arr_TNC_Cli[$i]['tnc_mPortes'], 2 ,'.','');         //TOTAL CUOTA	
								   	  
        $r_Arr_DatosTNC_Cli[$i][10] = number_format($g_Arr_TNC_Cli[$i]['tnc_mDeudaFin'], 2 ,'.',',');					//SALDO CAPITAL
        $r_Arr_DatosTNC_Cli[$i][11] = $g_Arr_TNC_Cli[$i]['tnc_nDD'];

        $valor1 = number_format($g_Arr_TNC_Cli[$i]['tnc_mCuota'], 2 ,'.','');
        $valor2 = number_format($g_Arr_TNC_Cli[$i]['tnc_mCapital'], 2 ,'.','') + 
                            number_format($g_Arr_TNC_Cli[$i]['tnc_mInteres'], 2 ,'.','') + 
                            number_format($g_Arr_TNC_Cli[$i]['tnc_mDesgra'], 2 ,'.','') +
                            number_format($g_Arr_TNC_Cli[$i]['tnc_mPortes'], 2 ,'.','');
								   
        if ($valor1 == $valor2){
            $r_Arr_DatosTNC_Cli[$i][4] = number_format($g_Arr_TNC_Cli[$i]['tnc_mCapital'], 2 ,'.',',');
	}else{
            $r_Arr_DatosTNC_Cli[$i][4] = number_format(number_format($g_Arr_TNC_Cli[$i]['tnc_mCuota'], 2 ,'.','') - number_format($g_Arr_TNC_Cli[$i]['tnc_mInteres'], 2 ,'.','') - number_format($g_Arr_TNC_Cli[$i]['tnc_mDesgra'], 2 ,'.',''), 2 ,'.',',');
	}
      
        if ($i == $g_Int_NroCuotas ) { 
	  	$r_dbl_UltCap = (float)str_replace(',', '',$r_Arr_DatosTNC_Cli[$i][4]);
	}
        $r_Arr_DatosTNC_Cli[$i][13] = 0;
        $r_Arr_DatosTNC_Cli[$i][14] = 0;
        $r_Arr_DatosTNC_Cli[$i][15] = 0;
        $r_Arr_DatosTNC_Cli[$i][16] = 0;
        $r_Arr_DatosTNC_Cli[$i][17] = 0;
        $r_Arr_DatosTNC_Cli[$i][18] = 0;

        $r_Arr_DatosTNC_Cli[$i][19] = $g_Arr_TNC_Cli[$i]['tnc_mCuota'];
        $r_Arr_DatosTNC_Cli[$i][20] = $g_Arr_TNC_Cli[$i]['tnc_mItf'];
    }
   
	
    fs_Validar_MtoPrestamo($r_Arr_DatosTNC_Cli, $g_Int_NroCuotas); 

    $r_dbl_TotPre = $_SESSION["p_MtoPre"];
    $r_dbl_Diferencia = $_SESSION["p_Difer"];
		
    do {
	
	if ($r_dbl_Diferencia <> 0 ) {
            //�ltima Fila del Cronograma
            for($i = $g_Int_NroCuotas; $i <= $g_Int_NroCuotas; $i++){       
                $r_Arr_DatosTNC_Cli[$i][1] = $r_Arr_DatosTNC_Cli[$i][1];
                $r_Arr_DatosTNC_Cli[$i][2] = $r_Arr_DatosTNC_Cli[$i][2];

                $r_Arr_DatosTNC_Cli[$i][4] = $r_dbl_UltCap + $r_dbl_Diferencia;									//Capital
                $r_Arr_DatosTNC_Cli[$i][5] = $r_Arr_DatosTNC_Cli[$i][5];									//Interes
                $r_Arr_DatosTNC_Cli[$i][6] = number_format($r_Arr_DatosTNC_Cli[$i][6], 2 ,'.',',');						//Seg. Desgra.
                $r_Arr_DatosTNC_Cli[$i][7] = number_format($r_Arr_DatosTNC_Cli[$i][7], 2 ,'.',',');						//Seg. Inm.
                $r_Arr_DatosTNC_Cli[$i][8] = number_format($r_Arr_DatosTNC_Cli[$i][8], 2 ,'.',',');						//Portes

                $r_Arr_DatosTNC_Cli[$i][9] = round($r_Arr_DatosTNC_Cli[$i][19], 2) + round($r_Arr_DatosTNC_Cli[$i][7], 2) +  
                                             round($r_Arr_DatosTNC_Cli[$i][20], 2) + round($r_Arr_DatosTNC_Cli[$i][8], 2) + round($r_dbl_Diferencia, 2);										//Cuota Total
                $r_Arr_DatosTNC_Cli[$i][10] = number_format($r_Arr_DatosTNC_Cli[$i][10], 2 ,'.','');						//Deuda Fin
                $r_Arr_DatosTNC_Cli[$i][11] = number_format($r_Arr_DatosTNC_Cli[$i][11], 2 ,'.','');						//num dias
                
                      }

                $r_dbl_TotPre = 0;
                $r_dbl_Diferencia = 0;

                fs_Validar_MtoPrestamo($r_Arr_DatosTNC_Cli, $g_Int_NroCuotas);

                $r_dbl_TotPre = $_SESSION["p_MtoPre"];
                $r_dbl_Diferencia = $_SESSION["p_Difer"];			
            }
	     
    }while ($r_dbl_Diferencia = 0);
	  
    for($i = 1; $i <= $g_Int_NroCuotas; $i++){ 
   
        $difer = (float)str_replace(',', '',$r_Arr_DatosTNC_Cli[$i - 1][10]) - (float)str_replace(',', '',$r_Arr_DatosTNC_Cli[$i][10]) - (float)str_replace(',', '',$r_Arr_DatosTNC_Cli[$i][4]); //r_Arr_DatosTNC_Cli[$i][12]
        $difer = number_format($difer, 2 ,'.',',');

        if ($difer != 0){
            $valorsaldo = (float)str_replace(',', '',$r_Arr_DatosTNC_Cli[$i][10]) + (float)str_replace(',', '',$difer);
            $r_Arr_DatosTNC_Cli[$i][10] =  number_format($valorsaldo, 2 ,'.',',');
        }

        $mCapital = (float)str_replace(',', '',$r_Arr_DatosTNC_Cli[$i][4]);
        $tot_tnc_mCapital= $tot_tnc_mCapital + $mCapital; 											//CAPITAL		
        $mInteres = (float)str_replace(',', '',$r_Arr_DatosTNC_Cli[$i][5]);
        $tot_tnc_mInteres= $tot_tnc_mInteres + $mInteres;																//INTERESES
        $tot_tnc_mDesgra=$tot_tnc_mDesgra+ $r_Arr_DatosTNC_Cli[$i][6];	  				  					//SEGURO DESG.
        $tot_tnc_mSegInm=$tot_tnc_mSegInm+ $r_Arr_DatosTNC_Cli[$i][7];		  			  					//SEGURO INM.
        $tot_tnc_mPortes=$tot_tnc_mPortes+ $r_Arr_DatosTNC_Cli[$i][8];                                                                          //PORTES
        $tot_tnc_cuotat=$tot_tnc_cuotat+ $r_Arr_DatosTNC_Cli[$i][9];

        $r_Arr_DatosTNC_Cli[$g_Int_NroCuotas][13] = number_format($tot_tnc_mCapital, 2 ,'.',',');
        $r_Arr_DatosTNC_Cli[$g_Int_NroCuotas][14] = number_format($tot_tnc_mInteres, 2 ,'.',',');
        $r_Arr_DatosTNC_Cli[$g_Int_NroCuotas][15] = number_format($tot_tnc_mDesgra, 2 ,'.',',');
        $r_Arr_DatosTNC_Cli[$g_Int_NroCuotas][16] = number_format($tot_tnc_mSegInm, 2 ,'.',',');
        $r_Arr_DatosTNC_Cli[$g_Int_NroCuotas][17] = number_format($tot_tnc_mPortes, 2 ,'.',',');
        $r_Arr_DatosTNC_Cli[$g_Int_NroCuotas][18] = number_format($tot_tnc_cuotat, 2 ,'.',',');
        
   }
   
    if ($r_dbl_Diferencia == 0){
        $_SESSION["p_Arr_xmTNC_Cli"] = $r_Arr_DatosTNC_Cli; 
    }
}

function fs_Validar_MtoPrestamo($p_ArrTNC, $NroCuotas){
    $r_int_Contad=0;
    $p_MtoPre = 0;

    $g_Dbl_NewPrestamo = $_SESSION["g_Dbl_NewPrestamo"];

    for ($r_int_Contad = 1; $r_int_Contad <= $NroCuotas; $r_int_Contad++){ 
        $capital = str_replace(',', '',$p_ArrTNC[$r_int_Contad][4]);
        $p_MtoPre = $p_MtoPre + $capital;
    }

    $p_Difer = $g_Dbl_NewPrestamo - $p_MtoPre;
    $p_Difer = round($p_Difer, 2 );

    $_SESSION["p_MtoPre"] = $p_MtoPre;
    $_SESSION["p_Difer"] = $p_Difer;
}


//*****************************************************************************
function fp_CargarTNC_Cof($g_Int_NroCuotas)
{
 
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


//******************************************************
//'*** Funcion para el devolver el primer vencimiento
function fp_PrimerVenci($xTipo , $p_Fec_xFecha , $p_Int_xDia )
{   

    $dia1=f_f_ExtraerDia($p_Fec_xFecha);
    $mes1=f_f_ExtraerMes($p_Fec_xFecha);
    $anio1=f_f_ExtraerAnio($p_Fec_xFecha);
	
    if ($mes1 == 2 and $p_Int_xDia > 28){
        if ((($anio1 - 2008) % 4) == 0){
            $r_Str_Fecha = "29" ."/".$mes1."/".$anio1;
	}else{
            if (strlen($p_Int_xDia)==1){
                $r_Str_Fecha = "0".($p_Int_xDia) ."/".($mes1 + 1)."/".$anio1;
            }else{
                $r_Str_Fecha = $p_Int_xDia ."/".($mes1 + 1)."/".$anio1;
            }
	}
    }else{
        if (strlen($p_Int_xDia)==1){
            $r_Str_Fecha = "0".($p_Int_xDia)."/". ($mes1) ."/".($anio1);
        }else{
            $r_Str_Fecha = ($p_Int_xDia)."/". ($mes1) ."/".($anio1);
        }
        
    }
   
    $p_Fec_xFechax = f_f_AumentarMes($dia1,$mes1,$anio1);
    if (strlen($p_Int_xDia)==1){
        $r_Str_Fecha = "0".($p_Int_xDia)."/".(substr($p_Fec_xFechax,3,2))."/".(substr($p_Fec_xFechax,6,4));
    }else{
        $r_Str_Fecha = ($p_Int_xDia)."/".(substr($p_Fec_xFechax,3,2))."/".(substr($p_Fec_xFechax,6,4));
    }
    $date1 = $p_Fec_xFecha;
    $date2 = $r_Str_Fecha;
	
    $diff = f_f_RestaFechas($date1,$date2);
	
    if ( $xTipo == 1 ){
            if ( $diff < 30 ){   
                    $dia1=f_f_ExtraerDia($p_Fec_xFechax);
                    $mes1=f_f_ExtraerMes($p_Fec_xFechax);
                    $anio1=f_f_ExtraerAnio($p_Fec_xFechax);
               $p_Fec_xFechax = f_f_AumentarMes($dia1,$mes1,$anio1);
               if (strlen($p_Int_xDia)==1){
                    $r_Str_Fecha = "0".($p_Int_xDia)."/".(substr($p_Fec_xFechax,3,2))."/".(substr($p_Fec_xFechax,6,4));   
               }else{
                    $r_Str_Fecha = ($p_Int_xDia)."/".(substr($p_Fec_xFechax,3,2))."/".(substr($p_Fec_xFechax,6,4));   
               }
            }
            else
                if ($diff <= 30 ){	
                        $dia1=f_f_ExtraerDia($p_Fec_xFechax);
                        $mes1=f_f_ExtraerMes($p_Fec_xFechax);
                        $anio1=f_f_ExtraerAnio($p_Fec_xFechax);
                   $p_Fec_xFechax = f_f_AumentarMes($dia1,$mes1,$anio1);
                    if (strlen($p_Int_xDia)==1){
                        $r_Str_Fecha = "0".($p_Int_xDia)."/".(substr($p_Fec_xFechax,3,2))."/".(substr($p_Fec_xFechax,6,4));
                    }else{
                        $r_Str_Fecha = ($p_Int_xDia)."/".(substr($p_Fec_xFechax,3,2))."/".(substr($p_Fec_xFechax,6,4));
                    }
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
    }
    //$fp_PrimerVenci = $r_Str_Fecha;
    return $r_Str_Fecha;
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
               //A�o bisiesto 2008, 2012,2016, 2020...etc
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
					   //A�o bisiesto 2008, 2012,2016, 2020...etc
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
					   //A�o bisiesto 2008, 2012,2016, 2020...etc
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
					   //A�o bisiesto 2008, 2012,2016, 2020...etc
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
					   //A�o bisiesto 2008, 2012,2016, 2020...etc
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
					   //A�o bisiesto 2008, 2012,2016, 2020...etc
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
					   //A�o bisiesto 2008, 2012,2016, 2020...etc
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
/*Descripci�n:		Funcion que resta dos Fechas
	  Autor:			MICASITA
	  Fecha Creaci�n:	08/02/2013
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
		     preg_match( "/([0-9]{1,2})([0-9]{1,2})([0-9]{2,4})/", $p_FecIni, $r_FecIni);
		     preg_match( "/([0-9]{1,2})([0-9]{1,2})([0-9]{2,4})/", $p_FecFin, $r_FecFin);
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

					if ( $aniobi % 4 == 0 ){  //A�o bisiesto 2008, 2012,2016, 2020...etc
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
//------------  Extraer A�o   --------------
 //   Descripci?n:     Funcion que extrae el a�o
function f_f_ExtraerAnio($variable){
       $r_ex_anio=substr($variable,6,4);  
	    return $r_ex_anio;
}

//*********************************************************
 
function gf_Cronog_CosEfe($p_TasInt , $p_MtoPre ){
  	
   $p_Arr_xmTNC_Cli	=	$_SESSION["p_Arr_xmTNC_Cli"] ;
   $gf_Cronog_CosEfe = 0;
   $val=0;
   $r_dbl_CuoAcu = $p_MtoPre;
   
   for( $i = 0.01 ; $i <= 0.2 ; $i=$i + 0.0001 ){
      $r_dbl_CuoAcu = 0;
      
      for( $r_int_Contad = 1; $r_int_Contad <= sizeof($p_Arr_xmTNC_Cli) - 1 ; $r_int_Contad++ ){
           $r_dbl_CuoAcu = $r_dbl_CuoAcu + number_format( ( $p_Arr_xmTNC_Cli[$r_int_Contad][9] ) / ( pow((1 + $i) , ($p_Arr_xmTNC_Cli[$r_int_Contad][11] / 360) ) ), 2, '.', '') ;		 
		}

      if ( $r_dbl_CuoAcu < $p_MtoPre ){
			$val = $i;
			break;
	  }
	}
   
   return number_format($val * 100, 4, '.', '') ;
}


//***********************************************************************
//MOSTRAR DATOS
//***********************************************************************
function cargaresultados( $g_Int_NroCuotas,$int_Produc, $r_MontoCon, $r_Productomostrar, $r_Fechasimulacion, $r_moneda, $r_valorInmueble, $cuotainicial, $r_montoCredito, $r_plazomes, $mostrarportes, $tsegurodesg, $tsegurovivi, $tinteres, $r_periodoGracia, $r_diavencim, $r_nomseguro, $r_nomcuoDobles, $r_cuoDobles,$r_Producto, $r_dbl_FmvBBP){

$p_Arr_xmTNC_Cli   =	$_SESSION["p_Arr_xmTNC_Cli"] ;
//$p_Arr_xmTNC_Cof	=	$_SESSION["p_Arr_xmTNC_Cof"];

	//'Calcula cuota mensual
   //$cuotamensual = number_format( l_Arr_TNC_Cli[intval($r_periodoGracia)) + 2][9] , 2, '.', '') ) ;
	//$pnl_CuoMen = number_format( $p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][8] , 2, '.', '') ;
	
	//'Determina cuota mensual TNC
	switch ( $r_cuoDobles ) {
			case 1:
				$pnl_CuoMen = number_format( $p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][9], 2, '.', '') ;
				break;
			case 2:
				if ( intval(f_f_ExtraerMes($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][2])) <> 7 ){
					$pnl_CuoMen = number_format($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][9], 2, '.', '') ;
				}else{
					$pnl_CuoMen = number_format($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 3][9], 2, '.', '') ;
				}
				break;
			case 3:
				if ( intval(f_f_ExtraerMes($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][2])) <> 12 ){
					$pnl_CuoMen = number_format($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][9], 2, '.', '') ;
				 }else{
					$pnl_CuoMen = number_format($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 3][9], 2, '.', '') ;
				 }
				break;
			case 4:
				if ( (intval(f_f_ExtraerMes($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][2])) <> 7) && (intval(f_f_ExtraerMes($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][2])) <> 12) ){
					$pnl_CuoMen = number_format($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 2][9], 2, '.', '') ;
				 }else{
					$pnl_CuoMen = number_format($p_Arr_xmTNC_Cli[intval($r_periodoGracia) + 3][9], 2, '.', '') ;
				 }
				break;
			}	   

   //'Calcula ingreso requerido    
	   if ($int_Produc == 1 ){ 
			 $impTC = (float)str_replace(',', '', $p_Arr_xmTNC_Cli[1][7]); //p_Arr_xmTC_Cli
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
		   
		  if($r_Producto == 7){
  		   	  //MI VIVIENDA - PBP
	   	     $pnl_IngReq = number_format(($pnl_CuoMen / 40) * 100, 2, '.', ',') ;
	   	  }
		  
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
		  if($r_Producto == 24){
	   	  	 //TECHO PROPIO 
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
   $r_dbl_FmvBBP= number_format( $r_dbl_FmvBBP , 2, '.', ',');
   
   
  
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
      <td width='25%' class='Estilo5'>Bono (BBP/PBP):</td>
      <td width='25%' class='Estilo6'>$r_dbl_FmvBBP</td> 
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
	
		<!--N�mero de Cuota-->
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
		echo $p_Arr_xmTNC_Cli[$i][4]; 
        echo "		
		</td>
		
		
        <!--Interes-->
        <td>";
		echo $p_Arr_xmTNC_Cli[$i][5]; 
        echo "		
		</td>
		
		
        <!--Seguro Desgravamen-->
        <td>";
		echo $p_Arr_xmTNC_Cli[$i][6];
        echo "		
		</td>
		
		
        <!--Seguro Vivienda-->
        <td>";
		echo $p_Arr_xmTNC_Cli[$i][7]; 
        echo "		
		</td>
		
		
        <!--Otros Cargos-->
        <td>";
		echo $p_Arr_xmTNC_Cli[$i][8]; 
        echo "		
		</td>
		
		
        <!--Valor Cuota-->
        <td>";
		echo number_format( $p_Arr_xmTNC_Cli[$i][9], 2 ,'.',',');
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
/*
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
    
		<!--N�mero de Cuota-->
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
*/
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