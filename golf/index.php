<!DOCTYPE HTML>
<html lang="es" prefix="og: https://ogp.me/ns#">
    <head>
        <meta name="keywords" content=""/> 
        <meta property="og:url" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:image" content="" />
        
        <?php include_once("phpAssets/head.php"); ?>
        
        <title>Registro</title>

    </head>
    <body>
    <?php include_once("phpAssets/analytics.php"); ?>
        <div class="cont-index" id="big-container"> 
        	 <?php /* include_once("phpAssets/header.php");  */?>
             
             
             <div class="fondo">
             <div id="edit" class="blur"></div>
                <div class="cont-form">
                
                    <h1 class="title">Registro/Register</h1> 
                    <div class="align-form">
                        <form class="form" id="form" >
                            <div class="part1">
                                <h2>Datos generales/General data</h1>
                                <div class="inputs">
                                    <input placeholder="Nombre/Name:" type="text">
                                    <input placeholder="E-mail" type="email">
                                    <input placeholder="Teléfono de contacto/Contact Phone Number:" type="number">
                                    <input placeholder="Puesto/Ocupación/Job/Occupation:" type="text">
                                    <input placeholder="Empresa/Company" type="text">
                                </div>
                                
                            </div>

                            <h2>Datos Fiscales/Fiscal Data</h1>
                            <div class="part2">
                            <label class="lab-title"><input type="checkbox" id="cbox1" value="first_checkbox">  ¿Requiere Comprobante Fiscal?/You required Fiscal Data?</label><br>
                                <div class="not-visible">
                                    <input class="inp-desp" type="text" placeholder="Razón Social / Company Name:" name="" id="">
                                    <input class="inp-desp" type="text" placeholder="Dirección/Address:" name="" id="">
                                    <input class="inp-desp" type="text" placeholder="Ciudad/City:" name="" id="">
                                    <input class="inp-desp" type="text" placeholder="Estado/State:" name="" id="">
                                    <input class="inp-desp" type="text" placeholder="Pais/Country:" name="" id="">
                                    <input class="inp-desp" type="tel" placeholder="Teléfono/Phone Number:" name="" id="">
                                    <input class="inp-desp" type="number" placeholder="Código postal/Zip Code:" name="" id="">
                                    <input class="inp-desp" type="text" placeholder="R.F.C:" name="" id="">
                                    <input class="inp-desp" type="text" placeholder="Colonia:" name="" id="">
                                </div>
                                
                            </div>

                            <h2>Actividad/Activity</h2>
                            <div class="part3">
                            <label class="lab-title" for="cboxA"><input type="radio" id="cboxG" name="cboxA" class="inp-check" value="first_checkbox"> Golf</label>
                            <label class="lab-title" for="cboxA"><input type="radio" id="cboxD" name="cboxA" class="inp-check" value="first_checkbox"> Domino</label>
                            <label class="lab-title" for="cboxA"><input type="radio" id="cboxC" name="cboxA" class="inp-check" value="first_checkbox"> Casino</label>
                            </div>
                            <div class="cont-golf-inp">
                                <input class="golf-inp inp-desp" type="text" placeholder="Handicap:" name="" id="">
                            </div>

                            <h2>Desea ser Patrocinador o Donador</h2>
                            <div class="part4">
                                <div class="secPD">
                                <label class="lab-title" for="cboxPD"><input type="radio" id="cboxP" name="cboxPD" class="check-cboxPD" value="first_checkbox"> NIVELES DE DONATIVO/LEVELS OF DONATION</label>
                                    <div class="desp-sec1">
                                        <label for="inp-sec1"><input type="radio" class="cboxp" name="inp-sec1" id="opc1" value="1">Plata/Silver: $50,000 MXN</label>
                                        <label for="inp-sec1"><input type="radio" class="cboxp" name="inp-sec1" id="opc2" value="2">Bronce/Bronze: $25,000 MXN</label>
                                        <label for="inp-sec1"><input type="radio" class="cboxp" name="inp-sec1" id="opc3" value="3">Otra cantidad mayor de /Other value greater than: $25,000 MXN</label>
                                        <input type="text" name="" id="inp-can" placeholder="Cantidad">
                                        
                                    </div>
                                </div>
                                <div class="pop-act">
                                </div>
                                <div class="secPD">
                                <label class="lab-title" for="cboxPD"><input type="radio" id="cboxD" name="cboxPD" class="check-cboxPD" value="first_checkbox"> NIVELES DE PATROCINIO/SPONSORSHIP LEVELS</label>
                                    <div class="desp-sec2">
                                        <label for="inp-sec1"><input type="radio" class="cboxp" name="inp-sec1" id="opc4" value="4">Centurión/Centurion: $1,000,000 MXN</label>
                                        <label for="inp-sec1"><input type="radio" class="cboxp" name="inp-sec1" id="opc5" value="5">Diamante/Diamond: $500,000 MXN</label>
                                        <label for="inp-sec1"><input type="radio" class="cboxp" name="inp-sec1" id="opc6" value="6">Platino/Platinum: $250,000 MXN</label>
                                        <label for="inp-sec1"><input type="radio" class="cboxp" name="inp-sec1" id="opc7" value="7">Oro/Gold: $100,000 MXN</label>
                                        <label for="inp-sec1"><input type="radio" class="cboxp" name="inp-sec1" id="opc8" value="8">Otra cantidad mayor de /Other value greater than: $25,000 MXN</label>
                                        <input type="text" name="" id="inp-can2" placeholder="Cantidad">
                                    </div>
                                </div>
                            </div>

                            <h2>Forma de Pago/Payment Method</h2>
                            <div class="part5">
                                <div class="box-pay">
                                    <label class="lab-title" for="pay"><input type="radio" class="inp-pay" name="pay" id="pay-dep">Deposito en Cuenta/Deposit to the Account:</label>
                                    <div class="dep">
                                        <p>
                                        <span class="bold">Cuenta en Pesos (MXN)</span> <br>
                                        <span class="bold">Banco / Bank:</span> BBVA <br>
                                        <span class="bold">Nombre Cuenta / Account Holder:</span> Fundación Grupo Bafar A.C. <br>
                                        <span class="bold">Cuenta / Account Number:</span> 0116.4763.17 <br>
                                        <br>

                                        <span class="bold">Cuenta en Dolares (USD)</span> <br>
                                        <span class="bold">Banco / Bank:</span> BBVA <br>
                                        <span class="bold">Cuenta / Account Number:</span> 0115.9484.95 <br>
                                        </p>
                                    </div>      
                                </div>

                                <div class="box-pay">
                                    <label class="lab-title" for="pay"><input type="radio" class="inp-pay" name="pay" id="pay-trans">Transferencia Electrónica/Electronic Transfer:</label>
                                    <div class="trans">
                                        <p>
                                        <span class="bold">Cuenta en Dolares (USD)</span> <br>
                                        <span class="bold">Banco / Bank:</span> BBVA <br>
                                        <span class="bold">Nombre Cuenta / Account Holder:</span> Fundación Grupo Bafar A.C. <br>
                                        <span class="bold">Cuenta / Account Number: </span> 0121.5000.1159.4849.51 <br>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <h2>Hoteles/Hotels</h2>
                            <div class="part6">
                                <div class="cont-label">
                                    <label for="hotel"><input type="radio" class="inp-hotel" name="hotel" id="enc" value="1">ENCORE</label>
                                    <label for="hotel"><input type="radio" class="inp-hotel" name="hotel" id="hol" value="2">HOLIDAY INN</label>
                                    <label for="hotel"><input type="radio" class="inp-hotel" name="hotel" id="hil" value="3">HILTON</label>
                                    <label for="hotel"><input type="radio" class="inp-hotel" name="hotel" id="she" value="4">SHERATON SOBERANO</label>
                                    <label for="hotel"><input type="radio" class="inp-hotel" name="hotel" id="no" value="5">NO GRACIAS / NO THANKS</label>
                                </div>
                                

                                <div class="pop-hotel">
                                    <div class="ali-pop-hotel">
                                        <div class="boxR room1">
                                            <h3>HABITACIÓN ESTÁNDAR/STANDARD</h3>
                                            <label id="op1" for="hotel"></label> <br> <br>
                                            <label id="op2" for="hotel"></label>
                                        </div>

                                        <div class="boxR room2">
                                            <h3>HABITACIÓN PISO EJECUTIVO/EXECUTIVE FLOOR ROOM</h3>
                                                <p>Habitacion Sencilla</p>
                                                <span class="bold">No Disponible/Not Available</span> <br> <br>
                                                <p>Habitacion Doble</p>
                                                <span class="bold">No Disponible/Not Available</span>
                                            
                                        </div>

                                        <div class="boxR">
                                            <h3>FECHAS DE RESERVACIÓN/RESERVATION DATES</h3>
                                            <input type="text" name="" placeholder="CHECK IN (MM/DD/AA MM/DD/YYYY)" class="inp-date">
                                            <input type="text" name="" placeholder="CHECK OUT (MM/DD/AA MM/DD/YYYY)" class="inp-date">
                                        </div>
                                    </div>
                                        
                                </div> 
                            </div>

                            <h2>¿Necesita apoyo en su transportación?/Do you need transportation?</h2>
                            <div class="part6">
                                <label class="lab-title" for="transport"><input type="checkbox" name="transport" id="transportY">Si/Yes</label>
                                <div class="cont-transport">
                                    <div class="ali-transport">
                                        <label for=""><input type="checkbox" name="" id="">Sep 29th (Hotel - Bafar - Hotel)</label> 
                                        <label for=""><input type="checkbox" name="" id="">Sep 30th (Hotel - Campestre - Hotel)</label>

                                        <div class="text-trans">
                                            <span class="bold">Le recordamos que el apoyo de transporte solo será desde el Hotel (SEDE) al evento y de dicho evento al Hotel NO se recogerán desde el Aeropuerto</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div> 

                            <div class="part7">
                                <p class="lab-title">¿LE GUSTARIA ACOMPAÑARNOS EN UN RECORRIDO POR LA COMPAÑÍA?/WOULD YOU LIKE TO HAVE A TOUR AROUND THE COMPANY? (SEPT 29TH)</p>
                                <label for=""><input type="checkbox" name="" id="check">Si/Yes</label>
                                <div class="tour">
                                    <p>Hora de Preferencia/Preference Time</p> <br>
                                    <span class="bold">Horarios Completos</span>
                                </div>
                                <p class="lab-title">LE GUSTARÍA ACOMPAÑARNOS A COMER EN LAS INSTALACIONES DEL COMPLEJO BAFAR?/WOULD YOU LIKE TO HAVE LUNCH WITH US AT BAFAR COMPLEX? (SEP 29 TH)</p>
                                <label for=""><input type="checkbox" name="" id="">Si/Yes</label>
                                <p class="lab-title">ASISTIRÁ AL COCKTAIL DE BIENVENIDA EN LAS INSTALACIONES DEL COMPLEJO BAFAR?/WILL YOU COME TO THE WELCOME COCKTAIL AT BAFAR COMPLEX? (SEP 29 TH, 18:30 HRS)</p>
                                <label for=""><input type="checkbox" name="" id="">Si/Yes</label>
                            </div>

                            <div class="box-cont">
                                <div class="ali-cont">
                                    <h2>INFORMACIÓN DE CONTACTO/CONTACT INFORMATION</h2> 
                                    <h3>¿ALGUNA DUDA?/ANY QUESTIONS?</h3>
                                    <span>Teléfono/Phone Number:</span> <br>
                                    <p>52 (614) 439.0100 <br> 
                                        Ext. 7580</p> <br> <br>
                                    <span>Correo Electrónico:</span>
                                    <p>torneo@bafar.com.mx</p>
                                </div>
                            </div>
                            <div class="ali-button">
                                <button type="submit">Enviar/Submit</button>
                            </div>
                            
                        </form>
                    </div>

                    <div id="content">

                    </div>
                    
                </div>
             </div>
            
			<div id="footer_cut"></div>
        </div><!--END #big-container -->
        
         <?php /* include_once("phpAssets/footer.php");  */?>
    
    </body>
</html>