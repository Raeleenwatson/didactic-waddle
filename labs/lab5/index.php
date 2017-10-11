<!DOCTYPE html>
<html>
    <head>
        <title>Lab5: Device Search </title>
    </head>
    <body>
        <h1>Technology Center: Checkout System</h1>


    <form>
        Device: <input type="text" name="deviceName" placeholder="Device Name"/>
        Type:
        <select name="deviceType">
            <option>Tablet</option>
            <?getDeviceTypes()?>
        </select>
    </form>
    </body>
</html>