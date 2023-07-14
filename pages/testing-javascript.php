<!DOCTYPE html>
<html lang="en">

<head>
<title>CGR Credit Union</title>

<!--META DATA-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="description" content="Like all credit unions, CGR Credit Union is a not-for-profit financial cooperative. When you join the credit union, you become a shareholder – or an owner – of a very unique financial institution. Earnings above the required reserves are returned to you, in the form of lower interest rates on loans and competitive dividends on savings.">
<meta name="keywords" content=""/>

<?php include ('../includes/head.php'); ?>


<script>

$(document).ready(function(e) {
    
	var iheight = $('.ul-my-table').innerHeight();
	var iwidth = $('.ul-my-table').innerWidth();
	var mheight = $('.ul-my-table').height();
	var mwidth = $('.ul-my-table').width();
	var xpos = $('.ul-my-table').position();
	$('.table-properties').html('Inner Height: '+ iheight + '<br/>Inner Width: ' + iwidth + '<br/>Height: '+ mheight + '<br/>Width: ' + mwidth + '<br/>X Position: ' + xpos.top + '<br/>Y Position: ' + xpos.left);
});

</script>

</head>

<body>
<?php include_once("../includes/analyticstracking.php") ?>
<?php include ('../includes/header.php');?>

<main id="main" class="content page">

<div class="container">
<h1 class="page-title">Template</h1>


<p class="para1">Paragraph 1: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<p class="para2">Paragraph 2: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<p class="para3">Paragraph 3: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<p class="para4">Paragraph 4: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


<ul class="ul-my-list">
<li>List 1</li>
<li>List 2</li>
<li>List 3</li>
<li>List 4</li>
<li>List 5</li>
</ul>


<ol class="ol-my-list">
<li>List 1</li>
<li>List 2</li>
<li>List 3</li>
<li>List 4</li>
<li>List 5</li>
</ol>



<table class="ul-my-table">

<tr>
<td>Cell 1</td>
<td>Cell 2</td>
<td>Cell 3</td>
</tr>

<tr>
<td>Cell 4</td>
<td>Cell 5</td>
<td>Cell 6</td>
</tr>

<tr>
<td>Cell 7</td>
<td>Cell 8</td>
<td>Cell 9</td>
</tr>

</table>

<div class="table-properties m20-t"></div>

</div>


</main>






<?php include ('../includes/footer.php');?>

<!--JAVASCRIPT INCLUDES-->


</body>

</html>