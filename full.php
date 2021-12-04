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
        if(array_key_exists('button9', $_POST)) {
            button9();
        }
        if(array_key_exists('button10', $_POST)) {
            button10();
        }		
        if(array_key_exists('view4', $_POST)) {
            view4();
        }
        if(array_key_exists('view10', $_POST)) {
            view10();
        }
        if(array_key_exists('sequence', $_POST)) {
            sequence();
        }
        if(array_key_exists('zoom', $_POST)) {
            zoom();
        }
        if(array_key_exists('left', $_POST)) {
            left();
        }
        if(array_key_exists('right', $_POST)) {
            right();
        }
        if(array_key_exists('up', $_POST)) {
            up();
        }
        if(array_key_exists('down', $_POST)) {
            down();
        }
        if(array_key_exists('menu', $_POST)) {
            menu();
        }
        if(array_key_exists('enter', $_POST)) {
            enter();
        }
        if(array_key_exists('search', $_POST)) {
            search();
        }
        if(array_key_exists('play', $_POST)) {
            play();
        }
        if(array_key_exists('freeze', $_POST)) {
            freeze();
        }
        if(array_key_exists('stop', $_POST)) {
            stop();
        }




//camera buttons
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
            shell_exec("echo '\xff\x55\x0e'>/dev/ttyUSB0");
        }
	function button7() {
            shell_exec("echo '\xff\x55\x0f'>/dev/ttyUSB0");
        }
	function button8() {
            shell_exec("echo '\xff\x55\x10'>/dev/ttyUSB0");
        }
	function button9() {
            shell_exec("echo '\xff\x55\x11'>/dev/ttyUSB0");
        }
	function button10() {
            shell_exec("echo '\xff\x55\x12'>/dev/ttyUSB0");
        }
//function buttons

	function view4() {
            shell_exec("echo '\xff\x55\x84'>/dev/ttyUSB0");
        }
	function view10() {
            shell_exec("echo '\xff\x55\x88'>/dev/ttyUSB0");
        }
	function sequence() {
            shell_exec("echo '\xff\x55\x07'>/dev/ttyUSB0");
        }
    function zoom() {
            shell_exec("echo '\xff\x55\x06'>/dev/ttyUSB0");
        }
    function left() {
            shell_exec("echo '\xff\x55\x40'>/dev/ttyUSB0");
        }
    function right() {
            shell_exec("echo '\xff\x55\x41'>/dev/ttyUSB0");
        }
    function up() {
            shell_exec("echo '\xff\x55\x42'>/dev/ttyUSB0");
        }
    function down() {
            shell_exec("echo '\xff\x55\x43'>/dev/ttyUSB0");
        }
    function menu() {
            shell_exec("echo '\xff\x55\x29'>/dev/ttyUSB0");
        }
    function enter() {
            shell_exec("echo '\xff\x55\x2a'>/dev/ttyUSB0");
        }
    function search() {
            shell_exec("echo '\xff\x55\x6f'>/dev/ttyUSB0");
        }
	function play() {
            shell_exec("echo '\xff\x55\x02'>/dev/ttyUSB0");
        }
	function freeze() {
            shell_exec("echo '\xff\x55\x05'>/dev/ttyUSB0");
        }
	function stop() {
            shell_exec("echo '\xff\x55\x03'>/dev/ttyUSB0");
        }



    ?>
<!--Button actions and labels.-->
    <form method="post">
        <input type="submit" name="button1"
                class="button" value="1" />
        <input type="submit" name="button2"
                class="button" value="2" />
        <input type="submit" name="button3"
                class="button" value="3" />
        <input type="submit" name="button4"
                class="button" value="4" />
        <input type="submit" name="button5"
                class="button" value="5" />
        <input type="submit" name="button6"
                class="button" value="6" />
        <input type="submit" name="button7"
                class="button" value="7" />
        <input type="submit" name="button8"
                class="button" value="8" />
		<input type="submit" name="button9"
                class="button" value="9" />
        <input type="submit" name="button10"
                class="button" value="10" />
</p>

        <input type="submit" name="view4"
                class="button" value="4 way" />
        <input type="submit" name="view10"
                class="button" value="View" />
        <input type="submit" name="sequence"
                class="button" value="Sequence" />
        <input type="submit" name="zoom"
                class="button" value="Zoom" />
        <input type="submit" name="left"
                class="button" value="LEFT" />
        <input type="submit" name="right"
                class="button" value="RIGHT" />
        <input type="submit" name="up"
                class="button" value="UP" />
        <input type="submit" name="down"
                class="button" value="DOWN" />
</p>
		<input type="submit" name="menu"
                class="button" value="MENU" />
		<input type="submit" name="enter"
                class="button" value="enter" />
		<input type="submit" name="search"
                class="button" value="Search" />
		<input type="submit" name="play"
                class="button" value="Play" />
		<input type="submit" name="freeze"
                class="button" value="Freeze" />		
		<input type="submit" name="stop"
                class="button" value="Stop" />

-->

    </form>
</head>

</html>

