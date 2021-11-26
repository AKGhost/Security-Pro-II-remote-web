<!DOCTYPE html>
<html>

<head>
    <title>
        GE Storesafe Pro II
    </title>
</head>

<body style="text-align:center;">

    <?php
//buttons
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        if(array_key_exists('button2', $_POST)) {
            button2();
        }
	if(array_key_exists('button3', $_POST)) {
            button3();
        }
	if(array_key_exists('button4', $_POST)) {
            button4();
        }
	if(array_key_exists('button5', $_POST)) {
            button5();
        }
        if(array_key_exists('button6', $_POST)) {
            button6();
        }
        if(array_key_exists('button7', $_POST)) {
            button7();
        }
        if(array_key_exists('button8', $_POST)) {
            button8();
        }


//scripts
    function button1() {
            shell_exec("echo '\xff\x55\x09'>/dev/ttyUSB0");
        }
    function button2() {
            shell_exec("echo '\xff\x55\x0a'> /dev/ttyUSB0");
        }
	function button3() {
            shell_exec("echo '\xff\x55\x0b'>/dev/ttyUSB0");
        }
	function button4() {
            shell_exec("echo '\xff\x55\x0c'>/dev/ttyUSB0");
        }
	function button5() {
            shell_exec("echo '\xff\x55\x0d'>/dev/ttyUSB0");
        }
	function button6() {
            shell_exec("echo '\xff\x55\x84'>/dev/ttyUSB0");
        }
	function button7() {
            shell_exec("echo '\xff\x55\x88'>/dev/ttyUSB0");
        }
	function button8() {
            shell_exec("echo '\xff\x55\x07'>/dev/ttyUSB0");
        }

    ?>
<!--Button actions and labels.-->
    <form method="post">
        <input type="submit" name="button1"
                class="button" value="Drive" />
        <input type="submit" name="button2"
                class="button" value="Front" />
        <input type="submit" name="button3"
                class="button" value="Back" />
        <input type="submit" name="button4"
                class="button" value="Room" />
        <input type="submit" name="button5"
                class="button" value="Kitchen" />
        <input type="submit" name="button6"
                class="button" value="4Way" />
        <input type="submit" name="button7"
                class="button" value="View" />
        <input type="submit" name="button8"
                class="button" value="Sequence" />


    </form>
<!--<div class="responsive-video">
<iframe width="480" height="320" src="http://10.13.37.60:8081" frameborder="5" allow="autoplay" allowfullscreen></iframe>
</div>-->
</head>

</html>

