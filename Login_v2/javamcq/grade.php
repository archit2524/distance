<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div id="demo-top-bar">

  <div id="demo-bar-inside">

    <h2 id="demo-bar-badge">
      <a href="/">Java</a>
    </h2>

    <div id="demo-bar-buttons">
          </div>

  </div>
</div>

	<div id="page-wrap">

		<h1><font size=+4><u>RESULTS</u></font></h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
			$answer6 = $_POST['question-6-answers'];
			$answer7 = $_POST['question-7-answers'];
			$answer8 = $_POST['question-8-answers'];
			$answer9 = $_POST['question-9-answers'];
			$answer10 = $_POST['question-10-answers'];
			$answer11 = $_POST['question-11-answers'];
			$answer12 = $_POST['question-12-answers'];
			$answer13 = $_POST['question-13-answers'];
			$answer14 = $_POST['question-14-answers'];
			$answer15 = $_POST['question-15-answers'];
			$answer16 = $_POST['question-16-answers'];
			$answer17 = $_POST['question-17-answers'];
			$answer18 = $_POST['question-18-answers'];
			$answer19 = $_POST['question-19-answers'];
			$answer20 = $_POST['question-20-answers'];
			$answer21 = $_POST['question-21-answers'];
			$answer22 = $_POST['question-22-answers'];
			$answer23 = $_POST['question-23-answers'];
			$answer24 = $_POST['question-24-answers'];
			$answer25 = $_POST['question-25-answers'];
			$answer26 = $_POST['question-26-answers'];
			$answer27 = $_POST['question-27-answers'];
			$answer28 = $_POST['question-28-answers'];
			$answer29 = $_POST['question-29-answers'];
			$answer30 = $_POST['question-30-answers'];
			$answer31 = $_POST['question-31-answers'];
			$answer32 = $_POST['question-32-answers'];
			$answer33 = $_POST['question-33-answers'];
			$answer34 = $_POST['question-34-answers'];
			$answer35 = $_POST['question-35-answers'];
			$answer36 = $_POST['question-36-answers'];
			$answer37 = $_POST['question-37-answers'];
			$answer38 = $_POST['question-38-answers'];
			$answer39 = $_POST['question-39-answers'];
			$answer40 = $_POST['question-40-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
			if ($answer6 == "D") { $totalCorrect++; }
            if ($answer7 == "A") { $totalCorrect++; }
			if ($answer8 == "B") { $totalCorrect++; }
			if ($answer9 == "D") { $totalCorrect++; }
			if ($answer10 == "C") { $totalCorrect++; }
			if ($answer11 == "D") { $totalCorrect++; }
			if ($answer12 == "C") { $totalCorrect++; }
			if ($answer13 == "C") { $totalCorrect++; }
			if ($answer14 == "B") { $totalCorrect++; }
			if ($answer15 == "A") { $totalCorrect++; }
			if ($answer16 == "C") { $totalCorrect++; }
			if ($answer17 == "B") { $totalCorrect++; }
			if ($answer18 == "D") { $totalCorrect++; }
			if ($answer19 == "A") { $totalCorrect++; }
			if ($answer20 == "D") { $totalCorrect++; }
			if ($answer21 == "B") { $totalCorrect++; }
			if ($answer22 == "A") { $totalCorrect++; }
			if ($answer23 == "C") { $totalCorrect++; }
			if ($answer24 == "C") { $totalCorrect++; }
			if ($answer25 == "B") { $totalCorrect++; }
			if ($answer26 == "B") { $totalCorrect++; }
			if ($answer27 == "C") { $totalCorrect++; }
			if ($answer28 == "A") { $totalCorrect++; }
			if ($answer29 == "B") { $totalCorrect++; }
			if ($answer30 == "B") { $totalCorrect++; }
			if ($answer31 == "B") { $totalCorrect++; }
			if ($answer32 == "D") { $totalCorrect++; }
			if ($answer33 == "C") { $totalCorrect++; }
			if ($answer34 == "B") { $totalCorrect++; }
			if ($answer35 == "C") { $totalCorrect++; }
			if ($answer36 == "C") { $totalCorrect++; }
			if ($answer37 == "A") { $totalCorrect++; }
			if ($answer38 == "C") { $totalCorrect++; }
			if ($answer39 == "B") { $totalCorrect++; }
			if ($answer40 == "D") { $totalCorrect++; }

            echo "<div id='results'>$totalCorrect / 40 correct</div>";
            
        ?>
	
	</div>
	<style type="text/css" style="display: none !important;">
	* {
		margin: 0;
		padding: 0;
	}
	body {
		overflow-x: hidden;
	}
	#demo-top-bar {
		text-align: left;
		background: #222;
		position: relative;
		zoom: 1;
		width: 100% !important;
		z-index: 6000;
		padding: 20px 0 20px;
	}
	#demo-bar-inside {
		width: 960px;
		margin: 0 auto;
		position: relative;
		overflow: hidden;
	}
	#demo-bar-buttons {
		padding-top: 10px;
		float: right;
	}
	#demo-bar-buttons a {
		font-size: 12px;
		margin-left: 20px;
		color: white;
		margin: 2px 0;
		text-decoration: none;
		font: 14px "Lucida Grande", Sans-Serif !important;
	}
	#demo-bar-buttons a:hover,
	#demo-bar-buttons a:focus {
		text-decoration: underline;
	}
	#demo-bar-badge {
		display: inline-block;
		width: 302px;
		padding: 0 !important;
		margin: 0 !important;
		background-color: transparent !important;
	}
	#demo-bar-badge a {
		display: block;
		width: 100%;
		height: 120px;
		border-radius: 0;
		bottom: auto;
		margin: 0;
		background: url('https://www.kindpng.com/picc/m/591-5916423_advanced-java-logo-png-transparent-png.png') no-repeat;
		background-size: 50%;
		overflow: hidden;
		text-indent: -9999px;
	}
	#demo-bar-badge:before, #demo-bar-badge:after {
		display: none !important;
	}
</style>
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>