<?php
session_start();
include '../config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `vehicledata` WHERE vehicle_id = '$id'";
    $re = $con->query($query);
    $res = $re->fetch_object();
    if (isset($res)) {
        $_SESSION["PRND"] = $res->PRND_state;
        $_SESSION["r_level"] = $res->Regen_level;
        $_SESSION["f_severity"] = $res->fault_severity;
        $_SESSION["t_distance"] = $res->Trip_Distance;
        $_SESSION["d_mode"] = $res->Drive_mode;
        $_SESSION["bms_state"] = $res->BMS_State;
        $_SESSION["mtr_state"] = $res->Motor_State;
        $_SESSION["veh_state"] = $res->Vehicle_state;
        $_SESSION["battery_p_state"] = $res->Battery_Pump_State;
        $_SESSION["battery_p_flow"] = $res->Battery_Pump_Flow;
        $_SESSION["battery_f_state"] = $res->Battery_Fan_State;
        $_SESSION["battery_f_current"] = $res->Battery_Fan_Current;
        $_SESSION["powertrain_p_state"] = $res->Powertrain_Pump_State;
        $_SESSION["powertrain_p_flow"] = $res->Powertrain_Pump_Flow;
        $_SESSION["powertrain_f_state"] = $res->Powertrain_Fan_State;
        $_SESSION["powertrain_p_current"] = $res->Powertrain_Fan_Current;
        $_SESSION["accelerator"] = $res->accelerator;
        $_SESSION["torque"] = $res->torque;
        $_SESSION["Motor_Speed"] = $res->Motor_Speed;
        $_SESSION["Inverter_Current"] = $res->Inverter_Current;
        $_SESSION["Temperature"] = $res->Temperature;
        $_SESSION["Inverter_Temperature"] = $res->Inverter_Temperature;
        $_SESSION["Powertrain_Efficiency"] = $res->Powertrain_Efficiency;
        $_SESSION["Motor_Type"] = $res->Motor_Type;
        $_SESSION["Veh_Current"] = $res->Veh_Current;
        $_SESSION["Voltage"] = $res->Voltage;
        $_SESSION["Battery_Temperature"] = $res->Battery_Temperature;
        $_SESSION["Battery_power"] = $res->Battery_power;
        $_SESSION["SOC"] = $res->SOC;
        $_SESSION["Low_Voltage_Current"] = $res->Low_Voltage_Current;
        $_SESSION["SOH"] = $res->SOH;
        $_SESSION["Battery_Chemistry"] = $res->Battery_Chemistry;




        // showing customer details
        $q = "SELECT * FROM `customer` WHERE vehicle_id = '$id'";
        $ree = $con->query($q);
        $result = $ree->fetch_object();
        if (isset($result)) {
            $_SESSION["vehicle_id"] = $result->vehicle_id;
            $_SESSION["customer_name"] = $result->customer_name;
        }
        header('location:show_car_detail.php');
    } else {
        // echo "<script type='text/javascript'>alert('Data not found for the selected vehicle....!!!!')</script>";
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Data not found for the selected vehicle');
    window.location.href='customer.php';
    </script>");

    }
}
?>