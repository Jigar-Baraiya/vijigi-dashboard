<?php
include("without_login.php")
     ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dashboard</title>
     <link rel="stylesheet" href="../logo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="bg-body">

<?php
    include("greetings.php")
        ?>

     <div class="p-3 my-3  text-white" style="opacity: 0.8;">
     <?php
        include("nav.php")
            ?>
            <br/>
            <br/>
          <div>
               <p>
                    Vehicle Id:  <?php echo $_SESSION["vehicle_id"];?>
               </p>
          </div>
          <div>
               <p>
                    Customer Name:  <?php echo $_SESSION["customer_name"];?>
               </p>
          </div>
          <div class="row">
               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["r_level"] ?>
                         </p>
                         <h5 class="card-title">Regen Level</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["f_severity"] ?>
                         </p>
                         <h5 class="card-title">Fault</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["PRND"] ?>
                         </p>
                         <h5 class="card-title">PRND</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["t_distance"] ?>
                         </p>
                         <h5 class="card-title">Trip Distance</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["d_mode"] ?>
                         </p>
                         <h5 class="card-title">Drive Mode</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["bms_state"] ?>
                         </p>
                         <h5 class="card-title">BMS State</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["mtr_state"] ?>
                         </p>
                         <h5 class="card-title">Inverter State</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["veh_state"] ?>
                         </p>
                         <h5 class="card-title">State</h5>
                    </div>
               </div>
          </div>

          <div class="row">
               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["battery_p_state"] ?>
                         </p>
                         <h5 class="card-title">Battery Pump State</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["battery_p_flow"] ?>
                         </p>
                         <h5 class="card-title">Battery Pump Flow</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["battery_f_state"] ?>
                         </p>
                         <h5 class="card-title">Battery Fan State</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["battery_f_current"] ?>
                         </p>
                         <h5 class="card-title">Battery Fan Current</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["powertrain_p_state"] ?>
                         </p>
                         <h5 class="card-title">Powertrain Pump state</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["powertrain_p_flow"] ?>
                         </p>
                         <h5 class="card-title">Powertrain Pump Flow</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["powertrain_f_state"] ?>
                         </p>
                         <h5 class="card-title">Powertrain Fan State</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["powertrain_p_current"] ?>
                         </p>
                         <h5 class="card-title">Powertrain Fan Current</h5>
                    </div>
               </div>
          </div>

          <div class="row">
               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["accelerator"] ?>
                         </p>
                         <h5 class="card-title">Accelerator %</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["torque"] ?>
                         </p>
                         <h5 class="card-title">Torque</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["Motor_Speed"] ?>
                         </p>
                         <h5 class="card-title">Motor Speed</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["Inverter_Current"] ?>
                         </p>
                         <h5 class="card-title">Inverter Current</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["Temperature"] ?>
                         </p>
                         <h5 class="card-title">Motor Temperature</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["Inverter_Temperature"] ?>
                         </p>
                         <h5 class="card-title">Inverter Temperature</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["Powertrain_Efficiency"] ?>
                         </p>
                         <h5 class="card-title">Powertrain Efficiency</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                         <p>
                              <?php echo $_SESSION["Motor_Type"] ?>
                         </p>
                         <h5 class="card-title">Motor Type</h5>
                    </div>
               </div>
          </div>

          <div class="row">
               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                    <p>
                              <?php echo $_SESSION["Veh_Current"] ?>
                         </p>
                         <h5 class="card-title">BMS Current</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                    <p>
                              <?php echo $_SESSION["Voltage"] ?>
                         </p>
                         <h5 class="card-title">Voltage</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                    <p>
                              <?php echo $_SESSION["Battery_Temperature"] ?>
                         </p>
                         <h5 class="card-title">Battery Temperature</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                    <p>
                              <?php echo $_SESSION["Battery_power"] ?>
                         </p>
                         <h5 class="card-title">Battery Power</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                    <p>
                              <?php echo $_SESSION["SOC"] ?>
                         </p>
                         <h5 class="card-title">SOC</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                    <p>
                              <?php echo $_SESSION["Low_Voltage_Current"] ?>
                         </p>
                         <h5 class="card-title">Low Voltage Current</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                    <p>
                              <?php echo $_SESSION["SOH"] ?>
                         </p>
                         <h5 class="card-title">SOH</h5>
                    </div>
               </div>

               <div class="card col my-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                    <p>
                              <?php echo $_SESSION["Battery_Chemistry"] ?>
                         </p>
                         <h5 class="card-title">Battery Chemistry</h5>
                    </div>
               </div>
          </div>
          <div align="right">
               
               <a href='customer.php' class='btn btn-info my-2 my-sm-0 btn-lg'>Back</a>
          </div>
     </div>

</body>

</html>