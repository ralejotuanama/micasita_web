<?php   
/* Descripción:		Calculo de Cronograma
   Autor:			DE LA SERNA
   Fecha Creación:	07/01/2013
   Fecha Actual.:	07/01/2013
   Desc. Actual.:	Calculo de cronogramas de los  diferentes
                    productos de MiCasita Hipotecaria.  
*/
		
		set_time_limit(0);
		
		//includes 
		session_start();
		
		//if(!isset($_SESSION)) 
//		{ 
//			session_start(); 
//		}
//		else
//		{
//			session_destroy();
//			session_start(); 
//		}

//if (!isset ($_COOKIE[ini_get('session.name')])){
//    session_start();
//}

		require("Funciones.php");
		
		//global $g_Dbl_NewPrestamo;
//		global $g_Dbl_TotValAse ;
//		global $g_Dbl_IntInm ;
//		global $g_Int_NroCuotas;
//		global $g_Dbl_IntFijo;
//		global $g_Dbl_Desgra;
//		global $g_Int_PeriodoGra;
//		global $g_Int_PasoAjuste ;
//		global $g_Int_TopeAjuste;
//		global $g_Int_TipoDesgra;
//		global $g_Dbl_MasTnC;
//		global $g_Dbl_Portes;
//		global $g_Dbl_IntProducto;
		
	
		//valores del registro de datos del formulario simuladorv1.0.php
		$r_Producto= $_POST['codigoprod'];	
		$r_montoCredito=$_POST['montoCred'];
		$r_valorInmueble= $_POST['valorIm']; 
		$r_moneda=$_POST['moneda']; 
		$r_Monedamostrar= "S/.";
		$r_plazomes=$_POST['plazoMes']; 
		$r_cuoDobles=$_POST['cuoDobles']; 
		$r_periodoGracia=$_POST['periodoGracia']; 
		$r_tiposeguro=$_POST['TipSeguro']; 
		$r_diavencim=$_POST['cboDiaVenci'];
		$cuotainicial=$r_valorInmueble-$r_montoCredito;
		
		//variable que captura la fecha
		//Cambiar $fecha por $r_Fechasimulacion
		//$r_Fechasimulacion= date(d."/".m."/".Y);
		$r_Fechasimulacion= date("d/m/Y");
		//$r_Fechasimulacion= "28/01/2013";
		$r_anio=date("Y");
		$r_mes=date("m");
		
		//Tipo de Seguro
		if($r_tiposeguro==1){
			$tsegurodesg='0.040000';
			$tsegurovivi='0.023000';
			$r_nomseguro='INDIVIDUAL';
			}
		if($r_tiposeguro==2){
			$tsegurodesg='0.070000';
			$tsegurovivi='0.023000';
			$r_nomseguro='MANCOMUNADO';
			}
		if($r_tiposeguro==3){
			$tsegurodesg='0.000000';
			$tsegurovivi='0.023000';
			$r_nomseguro='ENDOSADO';
			}
		
		
		//Cuotas Dobles
		if($r_cuoDobles==1){
			$r_nomcuoDobles='NO';
			}
		if($r_cuoDobles==2){
			$r_nomcuoDobles='JULIO';
			}
		if($r_cuoDobles==3){
			$r_nomcuoDobles='DICIEMBRE';
			}
		if($r_cuoDobles==4){
			$r_nomcuoDobles='JULIO Y DICIEMBRE';
			}
		
		
		//******************* Grupo MC
		//Producto MiCasita Nuevos Soles
		if($r_Producto==11){  
			$r_Productomostrar="MiCasita Soles";
			//$portes=9.00;
			$portes=0.00;
			//$mostrarportes='S/. 9.00';
			$mostrarportes='S/. 0.00';
			
			if($r_montoCredito>= 30000 && $r_montoCredito<= 108000){
				$tinteres=floatval(10.65);
			}
			if($r_montoCredito> 108000 && $r_montoCredito<= 189000){
				$tinteres=floatval(10.10);
			}
			if($r_montoCredito> 189000 && $r_montoCredito<= 270000){
				$tinteres=floatval(9.57);
			}
			if($r_montoCredito> 270000 && $r_montoCredito<= 405000){
				$tinteres=floatval(9.05);
			}
		}
		
		//Producto UNION ANDINA Peruanos en el Extranjero
		if($r_Producto==12){  
			$r_Productomostrar="UNION ANDINA - Peruanos en el Extranjero";
			//$tinteres=floatval(12.75);
			$tinteres=floatval(13.00);
			//$portes=9.00;
			$portes=0.00;
			//$mostrarportes='S/. 9.00';
			$mostrarportes='S/. 0.00';
		}
		//******************* Grupo MC
		
		
		//******************* Grupo FMV		
		//Producto MiVivienda
		if($r_Producto==7){
			$r_Productomostrar="FMV Nuevo MiVivienda";
			//$portes=9.00;
			$portes=0.00;
			//$mostrarportes='S/. 9.00';
			$mostrarportes='S/. 0.00';
			if($r_montoCredito>= 37730 && $r_montoCredito<= 53900){
				$tinteres=floatval(10.75);
			}
			if($r_montoCredito> 53900 && $r_montoCredito<= 100100){
				$tinteres=floatval(10.35);
			}
			if($r_montoCredito> 100100 && $r_montoCredito<= 242550){
				$tinteres=floatval(9.90);
			}
		}
		
		//Producto FMV - Union Andina
		if($r_Producto==9){  
			$r_Productomostrar="FMV - Union Andina";
			//$tinteres=floatval(12.50);
			$tinteres=floatval(13.00);
			//$portes=9.00;
			$portes=0.00; 
			//$mostrarportes='S/. 9.00';
			$mostrarportes='S/. 0.00';
		}
		
		//Producto FMV - Peruanos en el Extranjero
		if($r_Producto==10){  
			$r_Productomostrar="FMV Peruanos en el Extranjero";
			//$tinteres='11.00 %';
			//$tinteres=floatval(12.50);
			$tinteres=floatval(11.50);
			//$portes=9.00;
			$portes=0.00;
			//$mostrarportes='S/. 9.00';
			$mostrarportes='S/. 0.00';
		}
		//******************* Grupo FMV		
		
		
	   //rutina de generacion de cronogramas
		//obj_Cronog_Listar(l_Arr_TNC_Cli(), l_Arr_TC_Cli(), l_Arr_TNC_Cof(), l_Arr_TC_Cof(), int_Produc, int_CuoDbl, dbl_ValInm, dbl_CuoIni, dbl_MtoCon, 0, int_PlaPre, dbl_TasInt, dbl_TasCof, dbl_ComCof, dat_FecDes, int_DiaVct, str_PriVct, int_PerGra, dbl_Portes, dbl_SegViv, int_TipSDe, dbl_SegDes)
   
   //carga de cronogramas
   //Call fs_Carga_CronogramaTNC(int_Produc)
		
		
//'*****************************************************************************************************************
//'******* Parametros de entrada
//'01- p_Arr_xmTNC_Cli()     : Variable Tipo Matriz que recibira el cronograma TNC Cliente
//'02- p_Arr_xmTC_Cli()      : Variable Tipo Matriz que recibira el cronograma TC Cliente
//'03- p_Arr_xmTNC_Cof()     : Variable Tipo Matriz que recibira el Cronograma TNC Cofide
//'04- p_Arr_xmTC_Cof()      : Variable Tipo Matriz que recibira el cronograma TC Cofide
//'05- p_Int_TipoProducto    : 1-MiVivienda, 2-MiCasita
//'06- p_Int_xnDobles        : 0-No, 1-Julio, 2-Dic, 3-Jul-Dic
//'07- p_Dbl_xvInmueble      : Parametro del Valor del inmueble
//'08- p_Dbl_xcInicial       : Monto de la Cuota Inicial
//'09- p_Dbl_lnTC            : Monto del Tramo Concesional(TC) 0, 5000, 12500
//'10- p_Dbl_xvTasacion      : Monto de la Tasacion
//'11- p_Int_CuotasCroNo     : Parametro de la Cantidad de Cuotas del Cronograma
//'12- p_Dbl_TasaInt         : Parametro de la Tasa
//'13- p_Dbl_xnFMV           : Parametro de FMV
//'14- p_Dbl_xnFMVDia        : Parametro de FMVDia
//'15- p_Fec_xDesembolso     : Fecha de Desembolso
//'16- p_Int_DiaPeriocidad   : Dia de Pago o Periocidad
//'17- p_Fec_xVenci          : Fecha de Desembolso
//'18- xPeriodoG             : Parametro de Periodo de Gracia
//'19- p_Dbl_xPortes         : Parametro de portes (9.00)
//'20- p_Dbl_xnSegInmueble   : Parametro seguro del Inmueble
//'21- p_Int_xTipoDesgra     : 1-Individual, 2-Mancomunado, 3-Endosado
//'22- xSegDesgra            : Parametro de SegDesgravamen
//'*****************************************************************************************************************


//inicializacion de variables
		
	//$int_CuoDbl = $r_cuoDobles ;
	//$dbl_ValInm = $r_valorInmueble ;
	//$dbl_CuoIni = $cuotainicial ;
	//$dat_FecDes = $r_Fechasimulacion;
	//$int_DiaVct = $r_diavencim;
	//$int_PerGra = $r_periodoGracia;
	//$dbl_Portes = $portes;
	//$dbl_SegViv = $tsegurovivi;
	//$int_TipSDe = $r_tiposeguro;
	//$dbl_SegDes = $tsegurodesg;
   
   if($r_Producto==7 || $r_Producto==9 || $r_Producto==10){
	$int_Produc = 1 ;   //MIVIVIENDA
	}else{
	$int_Produc = 2 ;   //MICASITA
	}
   if($int_Produc==1){
		if($r_valorInmueble>192500){ $dbl_MtoCon = 5000 ; }else{ $dbl_MtoCon = 12500; }
	}else{
		$dbl_MtoCon = 0;
	}
	
   $dbl_TasCof = 6.6;
   $dbl_ComCof = 0.25;
   $p_Dbl_xvTasacion=0;
   $str_PriVct = "";
            
   //----------------------------------------------
   //MisVariables
   $g_Dbl_PorValAse = 0.72 ;        //CONSTANTE   
   //Variables para la iteracion del ajuste Saldo mas cercano a Cero(0)
   $g_Int_TopeAjuste = 15;
   $g_Dbl_MontoSobrante = 0;
   $g_Int_PeriodoGra = 0;
   $g_Int_PasoAjuste = 0;
   //$g_Arr_VenFechas=pp_CargarEstructuraVenci(); //va ser utilizado con fp_HallarDiaUtil que esta dentro de pp_Cli_2GenerarTNC
   //-----------------------------------------------
   
   	
   
   $p_Arr_xmTC_Cli = "";
   $p_Arr_xmTC_Cof = "";
   
   
   //**************************************************************************************************************
   //=== Paso 01: Asignar Valores a variables Globales
   
   switch ($r_diavencim) {
    case 0:
        $r_Int_DiaPeriocidad = 1;
        break;
    case $r_diavencim > 28:
        $r_Int_DiaPeriocidad = 28;
        break;
    default:
        $r_Int_DiaPeriocidad = $r_diavencim ;
        break;
	}
   
   $g_Dbl_Portes = $portes;
   $g_Int_PeriodoGra = $r_periodoGracia;
   $g_Int_Dobles =$r_cuoDobles ;
   $g_Int_NroCuotas = $r_plazomes;
   $g_Int_TipoDesgra = $r_tiposeguro;
   $g_Dbl_ProductoPG = ($tsegurodesg / 100);
   $g_Dbl_SegInm = $tsegurovivi;
   $g_Dbl_IntInm = ($tsegurovivi / 100);
   //$g_Dbl_IntFijo = floatval( number_format((1 + ( floatval($tinteres) / 100)) ^ (1 / 360) - 1 , "0.00"));  // Redondeo de 10
   $g_Dbl_IntFijo = number_format( pow( (1 + ( ($tinteres) / 100)) , (1 / 360) ) - 1 , 10, '.', '');	// Redondeo de 10
   
   if($p_Dbl_xvTasacion > 0){
		$g_Dbl_TotValAse = $p_Dbl_xvTasacion;
	}else{
		$g_Dbl_TotValAse = $r_valorInmueble * $g_Dbl_PorValAse;
	}
	
	 
   //*** Nuevos calculos en funcion de la Fecha de Vencimiento
   $g_Str_PrimerVenci = trim($str_PriVct) ;
   //if ( IsDate($str_PriVct) ){
//      $g_Fec_PrimerVenci = $str_PriVct;
//      $r_Int_DiaPeriocidad = Day($g_Fec_PrimerVenci);
//      $g_Int_PeriodoGra = 0;
//   }else{
//      $g_Str_PrimerVenci = "";
//   }
   
   
   //**************************************************************************************************************
   //=== Paso 02: Calculando los Interes para FMV
   $r_Dbl_FMMv = $dbl_TasCof + $dbl_ComCof ;
   $g_Dbl_TasaFMV = number_format(  (pow( (1 + ($r_Dbl_FMMv / 100)) , (1 / 360) ) - 1 )  , 10, '.', '');		// Redondeo de 10
   $g_Dbl_TasaFMVAdi = number_format(  (pow( (1 + ($dbl_TasCof / 100)) , (1 / 360) ) - 1 )  , 10, '.', '');     // Redondeo de 10
   $g_Dbl_TasaFMVDia = pow( (1 + ($dbl_ComCof / 100)) , (1 / 360) ) - 1 ;
   $g_Dbl_TasaFMVSuma = number_format( $g_Dbl_TasaFMV + $g_Dbl_TasaFMVDia , 10, '.', '');			// Redondeo de 10
   $g_Dbl_TasaFMVSumaX = $g_Dbl_TasaFMVAdi + $g_Dbl_TasaFMVDia ;
   
   //echo "r_Dbl_FMMv:	".$r_Dbl_FMMv."<br>";
//   echo "g_Dbl_TasaFMV:	".$g_Dbl_TasaFMV."<br>";
//   echo "g_Dbl_TasaFMVAdi:	".$g_Dbl_TasaFMVAdi."<br>";
//   echo "g_Dbl_TasaFMVDia:	".$g_Dbl_TasaFMVDia."<br>";
//   echo "g_Dbl_TasaFMVSuma:	".$g_Dbl_TasaFMVSuma."<br>";
//   echo "g_Dbl_TasaFMVSumaX:	".$g_Dbl_TasaFMVSumaX."<br>";
   
   //**************************************************************************************************************
   //=== Paso 03: Hallar el lnTC, lnPrestamo
   $r_Dbl_lnTC = 0 ;
   if ( $int_Produc == 1 ){ 
       $r_Dbl_lnTC = $dbl_MtoCon;
   }
   $lnPrestamo = ($r_valorInmueble - $cuotainicial);
   
   
   //**************************************************************************************************************
   //=== Paso 04: Calcular Interes extras por Periodo de Gracia
   $g_Dbl_MasTnC = 0 ;
   if ( $g_Int_PeriodoGra > 0 ){
      $g_Dbl_MasTnC = pp_Cli_1CargarPG($g_Int_PeriodoGra, $lnPrestamo, $r_Fechasimulacion, $r_Int_DiaPeriocidad, $g_Dbl_IntFijo, $g_Dbl_ProductoPG, $g_Dbl_Portes, $g_Dbl_TotValAse, $g_Dbl_IntInm);
   }
      
   $g_Dbl_MasTnC = (number_format($g_Dbl_MasTnC, 2 ,'.','')) ;  //Hallando el adicional al TnC por periodo de Gracia

   //echo "g_Dbl_MasTnC:	".$g_Dbl_MasTnC."<br>";
   
   //**************************************************************************************************************
   //=== Paso 05: Calcular g_Dbl_tC=prestamo-TC+InteresxPG y g_Dbl_PorTnC
   $g_Dbl_tC = (number_format(($lnPrestamo - $r_Dbl_lnTC) + $g_Dbl_MasTnC, 2, '.', '') ) ;
   $g_Dbl_PorTnC = $g_Dbl_tC / ($lnPrestamo + $g_Dbl_MasTnC) ;
   
    //echo "r_Dbl_lnTC :	 ".$r_Dbl_lnTC."<br>";
//   echo "g_Dbl_tC:	".$g_Dbl_tC."<br>";
   
   //**************************************************************************************************************
   //=== Paso 06: Calcular g_Dbl_Desgra y g_Dbl_IntProducto
   switch ($int_Produc) {
    case 1:			//---> MI VIVIENDA
        $g_Dbl_Desgra = $g_Dbl_ProductoPG / $g_Dbl_PorTnC ;
        break;
    case 2:			//---> Mi CASITA
        $g_Dbl_Desgra = $g_Dbl_ProductoPG ;
        break;
	}
   $g_Dbl_IntProducto = pow ( (1 + $g_Dbl_Desgra) , (1 / 30) ) - 1 ;
   $g_Dbl_Desgra = $g_Dbl_IntProducto + $g_Dbl_IntFijo ;
   
   
   //**************************************************************************************************************
   //=== Paso 07: Paso de 15 vueltas de Ajuste TNC Cliente
   $g_Dbl_NewPrestamo = (number_format(($lnPrestamo - $r_Dbl_lnTC), 2, '.', '') ) ;
   if ( $g_Int_PeriodoGra > 0 ){
      $g_Dbl_NewPrestamo = $g_Dbl_tC ;
      $g_Dbl_MasTnC = 0 ;
   }
   
   //Cargamos la matriz $g_Arr_VenFechas
    pp_CargarEstructuraVenci(); //Se agregó para disminuir tiempo
    
	  // $dat_FecDes = $r_Fechasimulacion;
	  //$int_DiaVct = $r_Int_DiaPeriocidad;
    //Ajustar el TNC Cliente Dando las 15 Vueltas hasta un ajuste mas Cercano a cero     
   do {
    	$g_Dbl_NewPrestamo=pp_Cli_2GenerarTNC($g_Dbl_NewPrestamo, $g_Dbl_tC, $r_Fechasimulacion, $r_Int_DiaPeriocidad, $g_Dbl_TotValAse , $g_Dbl_IntInm, $g_Int_NroCuotas, $g_Dbl_IntFijo,$g_Dbl_Desgra, $g_Int_PeriodoGra, $g_Int_PasoAjuste , $g_Int_TopeAjuste , $g_Int_TipoDesgra, $g_Dbl_MasTnC, $g_Dbl_Portes, $g_Dbl_IntProducto, $g_Dbl_NewPrestamo, $g_Int_Dobles);
      
      	$g_Int_PasoAjuste = $g_Int_PasoAjuste + 1;
	} while ( $g_Int_PasoAjuste <= $g_Int_TopeAjuste );
   
   //***********Por el Momento***************
   //****************************************
   //alert("Debe seleccionar el tipo de producto");
      
   //Ajusta los limites primer y ultimo registro del TNC cliente
   pp_AjustarLimiteTNC($g_Int_NroCuotas,$g_Int_PeriodoGra);
   
  
   //**************************************************************************************************************
   //=== Paso 08: Ajuste del TC Cofide
   $g_Dbl_MasTnC = 0;
   if ( $g_Int_PeriodoGra > 0 ){ 	//Ingresa cuando es Periodo de Gracia
      $g_Dbl_MasTnC = pp_Cof_1CargarPG($g_Int_PeriodoGra, $lnPrestamo, $r_Fechasimulacion, $r_Int_DiaPeriocidad , $g_Dbl_TasaFMVDia, $g_Dbl_TasaFMVAdi);
   }
   $g_Dbl_MasTnC = floatval(number_format($g_Dbl_MasTnC, 2, '.', '') ) ;	//Hallando el adicional al TnC por periodo de Gracia
   
   $g_Dbl_tC = floatval(number_format( ($lnPrestamo + $g_Dbl_MasTnC) - $r_Dbl_lnTC , 2, '.', '') ) ;
      
   $g_Dbl_NewPrestamo = $g_Dbl_tC ;
   
   $g_Int_PasoAjuste = 0 ;  
   do {
    	$g_Dbl_NewPrestamo = pp_Cof_2GenerarTNC($g_Dbl_NewPrestamo, $g_Dbl_tC, $r_Fechasimulacion, $r_Int_DiaPeriocidad, $g_Int_NroCuotas, $g_Dbl_TasaFMVAdi, $g_Dbl_TasaFMVDia, $g_Dbl_TasaFMVSumaX, $g_Int_PeriodoGra, $g_Int_Dobles, $g_Int_PasoAjuste , $g_Int_TopeAjuste);
      	$g_Int_PasoAjuste = $g_Int_PasoAjuste + 1 ;
	} while ($g_Int_PasoAjuste <= $g_Int_TopeAjuste);
	
	$g_Arr_TNC_Cof = $_SESSION["g_Arr_TNC_Cof"];
	
   
   $r_Dbl_MontoSobrante = $g_Arr_TNC_Cof[$g_Int_NroCuotas]['tnc_mDeudaFin'];
   
   switch ($r_Dbl_MontoSobrante) {
    case 0:			
        break;
    case $r_Dbl_MontoSobrante < 0:			
        $r_Dbl_MontoSobrante = $r_Dbl_MontoSobrante * (-1);
        $g_Arr_TNC_Cof[$g_Int_NroCuotas]['tnc_mCapital'] = $g_Arr_TNC_Cof[$g_Int_NroCuotas]['tnc_mCapital'] - $r_Dbl_MontoSobrante;
        $g_Arr_TNC_Cof[$g_Int_NroCuotas]['tnc_mCuota'] = $g_Arr_TNC_Cof[$g_Int_NroCuotas]['tnc_mCuota'] - $r_Dbl_MontoSobrante;
        $g_Arr_TNC_Cof[$g_Int_NroCuotas]['tnc_mDeudaFin'] = 0;
        break;
	case $r_Dbl_MontoSobrante > 0:			
        $g_Arr_TNC_Cof[$g_Int_NroCuotas]['tnc_mCapital'] = $g_Arr_TNC_Cof[$g_Int_NroCuotas]['tnc_mCapital'] + $r_Dbl_MontoSobrante;
        $g_Arr_TNC_Cof[$g_Int_NroCuotas]['tnc_mCuota'] = $g_Arr_TNC_Cof[$g_Int_NroCuotas]['tnc_mCuota'] + $r_Dbl_MontoSobrante;
        $g_Arr_TNC_Cof[$g_Int_NroCuotas]['tnc_mDeudaFin'] = 0;
        break;
	}
   
   
   //**************************************************************************************************************
   //=== Paso 09: Cargar Matrices TNC del cliente y cofide

   fp_CargarTNC_Cli($g_Int_NroCuotas);
   fp_CargarTNC_Cof($g_Int_NroCuotas);

   //**************************************************************************************************************
   //=== Paso 10: Generar TC
   //Ajustar el TC Dando las 15 Vueltas hasta un ajuste mas Cercano a cero y g_Int_PasoAjuste = 0 preparandole para el TNC
   $g_Dbl_NewtC = $r_Dbl_lnTC;
   if ( $r_Dbl_lnTC > 0 ){
   
      if ( $int_Produc == 1 ){	//MIVIVIENDA
         $g_Int_PasoAjuste = 0;
         
		 do {
			 	$g_Dbl_NewtC=pp_Cof_3GenerarTC($r_Dbl_lnTC, $g_Dbl_NewtC, $r_Fechasimulacion, $r_Int_DiaPeriocidad, $g_Dbl_TasaFMVDia, $g_Dbl_TasaFMVAdi, $g_Int_NroCuotas, $g_Int_PeriodoGra, $g_Dbl_TasaFMV, $g_Dbl_NewtC, $g_Dbl_TasaFMVSumaX);
            	$g_Int_PasoAjuste = $g_Int_PasoAjuste + 1;
		} while ($g_Int_PasoAjuste <= $g_Int_TopeAjuste);
   
         pp_AjustarLimiteTc($r_Dbl_lnTC, $g_Dbl_NewtC, $r_Fechasimulacion, $r_Int_DiaPeriocidad);
         
         //IMPORTANTE Cargar todo el cronograma cofide del TC Original
         //*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*
         //$p_Arr_xmTC_Cof = fp_CargarTC(2,$g_Dbl_CuotasTC);
		 fp_CargarTC(2);
         //*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*
         
         //Ajustar el otro cronograma cliente
         pp_Cli_3GenerarTC($r_Dbl_lnTC, $g_Dbl_NewtC, $r_Fechasimulacion, $r_Int_DiaPeriocidad, $g_Dbl_IntFijo);
         $g_Int_PasoAjuste = 0;
      }
   }

   if ( $int_Produc == 1 ){
       //$p_Arr_xmTC_Cli = fp_CargarTC(1,$g_Dbl_CuotasTC);
	   fp_CargarTC(1);
   }
   
   //*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*
   
	//**************************************************************************************************************
	//=== Paso 11: Cargar TNC - TC
	
		cargaresultados($g_Int_NroCuotas,$int_Produc, $dbl_MtoCon, $r_Productomostrar, $r_Fechasimulacion, $r_moneda, $r_valorInmueble, $cuotainicial, $r_montoCredito, $r_plazomes, $mostrarportes, $tsegurodesg, $tsegurovivi, $tinteres, $r_periodoGracia, $r_diavencim, $r_nomseguro, $r_nomcuoDobles, $r_cuoDobles,$r_Producto);


		
?>


