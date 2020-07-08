<?php   
/* Descripción:		Calculo de Cronograma
   Autor:			MiCasita
   Fecha Creación:	07/01/2013
   Fecha Actual.:	07/01/2013
   Desc. Actual.:	Calculo de cronogramas de los  diferentes
                    productos de MiCasita Hipotecaria.  
*/
	set_time_limit(0);

        session_start();

        require("Funciones.php");
			
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

        $r_dbl_ValorUIT = 4200;
		
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
                $portes=0.00;						 //$portes=9.00;
                $mostrarportes='S/. 0.00';			//$mostrarportes='S/. 9.00';
                $g_dbl_FmvBBP = 0;
                if($r_montoCredito>= 30000 && $r_montoCredito<= 108000){
                        $tinteres=floatval(11.75); 		
                }
                if($r_montoCredito> 108000 && $r_montoCredito<= 189000){
                        $tinteres=floatval(11.75); 		
                }
                if($r_montoCredito> 189000 && $r_montoCredito<= 270000){
                        $tinteres=floatval(11.75);		
                }
                if($r_montoCredito> 270000 && $r_montoCredito<= 405000){
                        $tinteres=floatval(11.75);		
                }
        }
		
        //Producto UNION ANDINA Peruanos en el Extranjero
        /*	if($r_Producto==12){  
        $r_Productomostrar="UNION ANDINA - Peruanos en el Extranjero";
        //$tinteres=floatval(12.75);
        $tinteres=floatval(13.00);
        //$portes=9.00;
        $portes=0.00;
        //$mostrarportes='S/. 9.00';
        $mostrarportes='S/. 0.00';
        }*/
        //******************* Grupo MC


        //******************* Grupo FMV		
        //Producto MiVivienda
		
        if($r_Producto==7){
                $r_Productomostrar="FMV Nuevo MiVivienda";
                $portes=0.00;						 //$portes=9.00;
                $mostrarportes='S/. 0.00';			//$mostrarportes='S/. 9.00';

                //BBP
                if($r_valorInmueble>= 58800 && $r_valorInmueble<= 84100){
                        $tinteres=floatval(10.5); 		
                        $g_dbl_FmvBBP = 17700;
                }
                if($r_valorInmueble> 84100 && $r_valorInmueble<= 125900){
                        $tinteres=floatval(10.5);		
                        $g_dbl_FmvBBP = 14600;
                }
                if($r_valorInmueble> 125900 && $r_valorInmueble<= 209800){
                        $tinteres=floatval(10.3);		
                        $g_dbl_FmvBBP = 13000;
                }
                if($r_valorInmueble> 209800 && $r_valorInmueble<= 310800){
                        $tinteres=floatval(10);		
                        $g_dbl_FmvBBP = 6400;
                }
                // PBP
                if($r_valorInmueble> 310800 && $r_valorInmueble<= 419600){
                        if ($r_valorInmueble > 0) {
                                if ($r_valorInmueble >= (14 * $r_dbl_ValorUIT) && $r_valorInmueble <= (20 * $r_dbl_ValorUIT)){
                                        $tinteres = floatval(11);
                                }elseif ($r_valorInmueble > (38 * $r_dbl_ValorUIT) && $r_valorInmueble <= (50 * $r_dbl_ValorUIT)){
                                        $tinteres = floatval(10.1);
                                }elseif ($r_valorInmueble > (50 * $r_dbl_ValorUIT) && $r_valorInmueble <= (100 * $r_dbl_ValorUIT)){
                                        $tinteres = floatval(10);
                                }else{
                                    $tinteres = floatval(11);
                                }
                        }else {
                                        $tinteres = floatval(11);
                        }
                        $g_dbl_FmvBBP = 0;
                }
        }
		
        //******************* Grupo FMV			

        //Techo Propio
        if($r_Producto==24){  
                $r_Productomostrar="Techo Propio";
                $g_dbl_FmvBBP = 0;
                $tinteres=floatval(13);
                $portes=0.00;
                $mostrarportes='S/. 0.00';
                if ($r_valorInmueble > 0) {
                        if ($r_valorInmueble >= (5.5 * $r_dbl_ValorUIT) && $r_valorInmueble <= (13.9 * $r_dbl_ValorUIT)){//if($r_valorInmueble>= 23100 && $r_valorInmueble<= 58380){
                                $tinteres=floatval(13); 
                                $g_dbl_FmvBBP = 33600;
                        }
                        elseif ($r_valorInmueble >= (13.9 * $r_dbl_ValorUIT) && $r_valorInmueble <= (25 * $r_dbl_ValorUIT)){ //if($r_valorInmueble> 58380  && $r_valorInmueble<= 105000 ){
                                $tinteres=floatval(13);
                                $g_dbl_FmvBBP = 33600;
                        }else{
                                $g_dbl_FmvBBP = 0;
                        }
                }else {
                                $tinteres = floatval(11);
                                $g_dbl_FmvBBP = 0;
                }
        }
        //Producto FMV - Union Andina
        /*if($r_Producto==9){  
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
        }*/

	
	
//'*****************************************************************************************************************
//Function Listar_2(ByRef l_Arr_TNC_Cli() As String, ByRef l_Arr_TC_Cli() As String, ByRef l_Arr_TNC_Cof() As String, l_Arr_TC_Cof() As String, ByVal p_int_TipoProducto As Integer, ByVal p_int_xnDobles As Integer, ByVal p_dbl_xvInmueble As Double, ByVal p_dbl_xcInicial As Double, ByVal p_dbl_lnTC As Double, ByVal p_Dbl_xvTasacion As Double, ByVal p_int_CuotasCroNo As Integer, ByVal p_dbl_TasaInt As Double, ByVal p_dbl_xnFMV As Double, ByVal p_dbl_xnFMVDia As Double, ByVal p_fec_xDesembolso As Date, ByVal p_fec_xDesemb_Cof As Date, ByVal p_int_DiaPeriocidad As Integer, ByVal p_fec_xVenci As String, ByVal xPeriodoG As Integer, ByVal p_dbl_xPortes As Double, ByVal p_dbl_xnSegInmueble As Double, ByVal p_int_xTipoDesgra As Integer, ByVal xSegDesgra As Double)

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
   	if($r_Producto == 7 ){ //|| $r_Producto==9 || $r_Producto==10
		if($r_valorInmueble> 209800 && $r_valorInmueble<= 310800){ //MIVIVIENDA - PBP
			$int_Produc = 3 ;
		} else {
			$int_Produc = 1 ;										//MIVIVIENDA - BBP
		}   												
	}elseif ($r_Producto == 24){
		$int_Produc = 3 ;											//TECHO PROPIO
	}else{
		$int_Produc = 2 ;   										//MICASITA
	}
        
        if($int_Produc == 1){
		$dbl_MtoCon = 0;											//if($r_valorInmueble> $r_dbl_ValorUIT * 50){ $dbl_MtoCon = 5000 ; }else{ $dbl_MtoCon = 12500; } //192500
	}else{
		$dbl_MtoCon = 0;
	}
		
   $dbl_TasCof = 7.2; 
   $dbl_ComCof = 0.25;
   $p_Dbl_xvTasacion=0;
   $str_PriVct = "";
            
   //----------------------------------------------
   //MisVariables
   $g_Dbl_PorValAse = 0.92; // 0.72 ;        //CONSTANTE   
   //Variables para la iteracion del ajuste Saldo mas cercano a Cero(0)
   $g_Int_TopeAjuste = 15;
   $g_Dbl_MontoSobrante = 0;
   $g_Int_PeriodoGra = 0;
   $g_Int_PasoAjuste = 0;
   //-----------------------------------------------
      
   $p_Arr_xmTC_Cli = "";
   $p_Arr_xmTC_Cof = "";
   
    //Cargamos la matriz $g_Arr_VenFechas
    pp_CargarEstructuraFeriados_Fijos();
    pp_CargarEstructuraFeriados_SemanaSanta();
     
   //**************************************************************************************************************
   //=== Paso 01: Asignar Valores a variables Globales
   
    switch ($r_diavencim) {
        case 0:
            $r_Int_DiaPeriocidad = 1;
            break;
        //case $r_diavencim > 28:
        //    $r_Int_DiaPeriocidad = 28;
        //    break;
        default:
            $r_Int_DiaPeriocidad = $r_diavencim ;
            break;
    }
    $g_int_TipoProducto=$int_Produc;
    $g_Dbl_Portes = $portes;
    $g_Int_PeriodoGra = $r_periodoGracia;
    $g_Int_Dobles =$r_cuoDobles ;
    $g_Int_NroCuotas = $r_plazomes;
    $g_Dbl_ProductoPG = ($tsegurodesg / 100);
    //$g_Dbl_SegInm = $tsegurovivi;
    $g_Dbl_IntInm = ($tsegurovivi / 100);
    $g_Dbl_TasInt = $tinteres;
 
    if($p_Dbl_xvTasacion > 0){
        $g_Dbl_TotValAse = $p_Dbl_xvTasacion;
    }else{
	$g_Dbl_TotValAse = $r_valorInmueble * $g_Dbl_PorValAse;
    }
	  
    //    '=== Paso 02: Calculando Intereses y Comisión para FMV
    $g_Dbl_TasaFMV = ($dbl_TasCof/ 100);
    $g_Dbl_TasaFMVDia = ($dbl_ComCof /100);

    //**************************************************************************************************************
    //=== Paso 03: Hallar el lnTC, lnPrestamo
    $r_Dbl_lnTC = 0 ;
    if ( $int_Produc == 1 ){ 
       $r_Dbl_lnTC = $dbl_MtoCon;
    }
    $lnPrestamo = ($r_valorInmueble - $cuotainicial);

    
    //**************************************************************************************************************
    //=== Paso 04: Calcular g_Dbl_tC = prestamo-TC+InteresxPG  y  g_Dbl_PorTnC
    $g_Dbl_MasTnC = 0;
    $g_Dbl_tC = (number_format(($lnPrestamo - $r_Dbl_lnTC) + $g_Dbl_MasTnC, 2, '.', '') ) ;
    
    //**************************************************************************************************************
    //=== Paso 05: Generar TNC Cliente
    $g_Dbl_NewPrestamo = (number_format(($lnPrestamo - $r_Dbl_lnTC), 2, '.', '') ) ;
    $g_Dbl_NewPrestamo=pp_Cli_2GenerarTNC($g_Dbl_NewPrestamo, $g_Dbl_tC, $r_Fechasimulacion, $r_Int_DiaPeriocidad, $g_Dbl_TotValAse , $g_Dbl_IntInm, $g_Int_NroCuotas, $g_Int_PeriodoGra, $g_Int_PasoAjuste, $g_Int_TopeAjuste,$g_Dbl_Portes, $g_Dbl_NewPrestamo, $g_Int_Dobles, $g_Dbl_ProductoPG,$g_Dbl_TasInt, $g_int_TipoProducto);
   
  
    //**************************************************************************************************************
    //=== Paso 05: Generar del TNC Cofide
    /*  $g_Dbl_NewPrestamo = (number_format(($lnPrestamo - $r_Dbl_lnTC), 2, '.', '') ) ;
    $g_Dbl_NewPrestamo = pp_Cof_2GenerarTNC($g_Dbl_NewPrestamo, $g_Dbl_tC, $r_Fechasimulacion, $r_Int_DiaPeriocidad, $g_Int_NroCuotas, $g_Dbl_TasaFMVAdi, $g_Dbl_TasaFMVDia, $g_Dbl_TasaFMVSumaX, $g_Int_PeriodoGra, $g_Int_Dobles, 	
	$g_Arr_TNC_Cof = $_SESSION["g_Arr_TNC_Cof"];*/
  
   
    //**************************************************************************************************************
    //=== Paso 06: Cargar Matrices TNC del cliente y cofide
    fp_CargarTNC_Cli($g_Int_NroCuotas);
    // fp_CargarTNC_Cof($g_Int_NroCuotas);
    
    //*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*.*==*
   
    //**************************************************************************************************************
    //=== Paso 07: Cargar TNC - TC
	
    cargaresultados($g_Int_NroCuotas,$int_Produc, $dbl_MtoCon, $r_Productomostrar, $r_Fechasimulacion, $r_moneda, $r_valorInmueble, $cuotainicial, $r_montoCredito, $r_plazomes, $mostrarportes, $tsegurodesg, $tsegurovivi, $tinteres, $r_periodoGracia, $r_diavencim, $r_nomseguro, $r_nomcuoDobles, $r_cuoDobles,$r_Producto, $g_dbl_FmvBBP);
		
?>


