<?php 
include("config2.php");
include("verifica.php");

$codigousuario = $_SESSION['codigousuario'];

$consulta = $MySQLi->query("SELECT * FROM TB_EVENTOS JOIN TB_AGENDAS ON EVE_AGE_CODIGO = AGE_CODIGO WHERE AGE_USU_CODIGO = '$codigousuario';");
	
$ja=0;

// Set your timezone
date_default_timezone_set('America/Bahia');
// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}
// Check format
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}
// Today
$today = date('Y-m-j', time());
// For H3 title
$html_title = date('m / Y', $timestamp);
// Create prev & next month link     mktime(hour,minute,second,month,day,year)
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
// You can also use strtotime!
// $prev = date('Y-m', strtotime('-1 month', $timestamp));
// $next = date('Y-m', strtotime('+1 month', $timestamp));
// Number of days in the month
$day_count = date('t', $timestamp);
// 0:Sun 1:Mon 2:Tue ...
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
//$str = date('w', $timestamp);
// Create Calendar!!
$weeks = array();
$week = '';
// Add empty cell
$week .= str_repeat('<td></td>', $str);

$dias = array();
$eventosnosdias =array();
$longosdias =array();
$eventosdodia="";
for ( $day = 1; $day <= $day_count; $day++, $str++) {
	$date = $ym . '-' . $day;
    //dia 

    // coleta os eventos e guarda nos vetores
    while($resultadoa=$consulta->fetch_assoc()){
   
	   for ( $days = 1; $days <= $day_count; $days++) {
		    //dia
          $dates = $ym . '-' . $days;
            //dia do evento
		  $auxx=$resultadoa['EVE_DATAINICIO'];
		  $auxxx=$resultadoa['EVE_DATAFIM'];
		  $tituloeve=$resultadoa['EVE_TITULO'];
            //dias do intervalo
            $timestamp1 = strtotime( $auxx ); //inicio
            $timestamp2 = strtotime( $auxxx ); //fim
            $cont = 1;
                while ( $timestamp1 <= $timestamp2 ){
	               $mds=date( 'Y-m-j', $timestamp1 ) . PHP_EOL;
	               $timestamp1 += 86400;
	               $cont++;
	               $mdss=date('Y-m-j', strtotime($mds));
	               if($dates==$mdss){	
		              array_push($dias,$mdss);
                      if(@$eventosnosdias[$tituloeve]){
                        $longosdias[$mdss]=$tituloeve;
                      }else{
                        $eventosnosdias[$tituloeve]=$mdss;
                      }   
	               }
                    $dias = array_unique($dias);
                }
	   }
    }
	$qtd=count($dias);
	for($x=0; $x<$qtd; $x++){
        //um dia esp e tds os dias cadastrados
		if($date==$dias[$x]){
            foreach($eventosnosdias as $titulos=>$ahjesus){
                if($ahjesus==$date){
                    $eventosdodia.=$titulos."<br>";    
                }
            }
            foreach($longosdias as $ahjesus=>$titulos){
                if($ahjesus==$date){
                    $eventosdodia.=$titulos."<br>";
                }
            }
			$week .= '<td class="evento">'.$day.
            "<br>".$eventosdodia;           
			$ja=1;
		}
		$eventosdodia="";
  	}
    if ($today == $date&&$ja!=1) {
        $week .= '<td class="today">' . $day;
    }else if($ja!=1){
        $week .= '<td>' . $day; 
    }
    $ja=0;
    $week .= '</td>';
    
    // End of the week OR End of the month
    if ($str % 7 == 6 || $day == $day_count) {
        if ($day == $day_count) {
            // Add empty cell
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }
        $weeks[] = '<tr>' . $week . '</tr>';
        // Prepare for new week
        $week = '';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>AGENDA</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <style>
        .containera {
            font-family: 'Noto Sans', sans-serif;
        }
        h4{
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: 'Muli', "Helvetica", Arial, sans-serif;
            margin: 30px 0 15px;
            font-size: 1.8em;
            font-weight: 600;
            line-height: 1.2em; }
        .aaa {
            margin-bottom: 30px;
        }
        th {
            height: 30px;
            text-align: center;
            background-color: #C4C4C4;
        }
        td {
            height: 100px;
            background-color: white;
            width: 120px;
        }
        td:hover {
            background-color: #E4E4E4;
            transition: background-color .4s;
        }
        .today {
            background: #F2CA97;
        }
        .evento {
            background: #C4BDB4;
        }
        th:nth-of-type(1), td:nth-of-type(1) {
            color: #B8751E;
        }
        th:nth-of-type(7), td:nth-of-type(7) {
            color: #B8751E;
        }
        a{
            color:black;
        }
        a:hover{
            color:gray;
            text-decoration: none;
        }
    </style>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    <big>ALT<b style="color:#D13B1B">MARKET</b></big>
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="index.php" style="color:#D13B1B">
                        <i class="ti-gallery"></i>
                        <p>Principal</p>
                    </a>
                </li>
                <li>
                    <a href="contato.php">
                        <i class="ti-comments"></i>
                        <p>Contato</p>
                    </a>
                </li>
                <li>
                    <a href="atuacao.php">
                        <i class="ti-star"></i>
                        <p>Atuação</p>
                    </a>
                </li>
                <li>
                    <a href="calendario.php">
                        <i class="ti-calendar"></i>
                        <p>Calendário</p>
                    </a>
                </li>
                <li>
                    <a href="conta.php">
                        <i class="ti-user"></i>
                        <p>Conta</p>
                    </a>
                </li>
                <li>
                    <a href="sair.php">
                        <i class="ti-shift-right"></i>
                        <p>Sair</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>


<div class="main-panel">

        <div class="content">
<div class="container-fluid">
    <div class="card">
<div class="col-md-12">
<div class="containera">
        <h4 class="aaa"><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h4>
        <table class="table table-bordered">
            <tr>
                <th>D</th>
                <th>S</th>
                <th>T</th>
                <th>Q</th>
                <th>Q</th>
                <th>S</th>
                <th>S</th>
            </tr>
            <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
            ?>
        </table>
    </div></div>
</div>
</div>
        </div>
    </div>
<br><br>
</div>

</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

</html>
