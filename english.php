<?php
	$update_date = '2012/01/11';
	$ver         = '5.0';
	$page_title  = '(Demo)jquery.ajaxComboBox.' . $ver . '.js';
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $page_title; ?></title>
		<link rel="stylesheet" type="text/css" href="acbox/css/jquery.ajaxComboBox.css">

		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="acbox/js/jquery.ajaxComboBox.<?php echo $ver; ?>.js"></script>

		<link rel="stylesheet" type="text/css" href="sample.css">
		<script type="text/javascript" src="sample_en.js"></script>
	</head>
	<body>
		<h2><?php echo $page_title; ?></h2>
		<p class="date"><?php echo $update_date; ?></p>

		<a href="japanese.php">=> 日本語版</a>

		<ul>
			<li>Server Side : PHP5</li>
			<li>DB : SQLite2</li>
			<li>DOCTYPE : HTML5</li>
		</ul>

		<!--**************************************************** -->
		<h4 id="idx_area">Contents</h4>
		<ol>
			<li class="big_idx">
				<a href="#sample01">Basic usage</a>
				<ol>
					<li><a href="#sample01_01">Basic</a></li>
					<li><a href="#sample01_02">The number of displays of the list and page is changed.</a></li>
					<li><a href="#sample01_03">Simple Page-navi</a></li>
					<li><a href="#sample01_04">Search from several fields</a></li>
					<li><a href="#sample01_05">Change from "AND" to "OR"</a></li>
				</ol>
			</li>
			<li class="big_idx">
				<a href="#sample02">Display Sub-info</a>
				<ol>
					<li><a href="#sample02_01">Basic</a></li>
					<li><a href="#sample02_02">The item name of the table is changed.</a></li>
					<li><a href="#sample02_03">Setting of display field of Sub-info.</a></li>
					<li><a href="#sample02_04">Setting of hidden field of Sub-info.</a></li>
					<li><a href="#sample02_05">How to use Sub-info for other purpose</a></li>
				</ol>
			</li>
			<li class="big_idx"><a href="#sample03">Select-only</a>
				<ol>
					<li><a href="#sample03_01">Basic</a></li>
					<li><a href="#sample03_02">Setting of Primary key.</a></li>
				</ol>
			</li>
			<li class="big_idx">
				<a href="#sample04">Initial Value</a>
				<ol>
					<li><a href="#sample04_01">Basic</a></li>
					<li><a href="#sample04_02">Select-only</a></li>
				</ol>
			</li>
			<li class="big_idx">
				<a href="#sample05">Search from JSON without database</a>
				<ol>
					<li><a href="#sample05_01">Basic</a></li>
				</ol>
			</li>
			<li class="big_idx">
				<a href="#sample06">Submitting at once when selected</a>
				<ol>
					<li><a href="#sample06_01">Basic</a></li>
					<li><a href="#sample06_02">Not enclosed by form tag</a></li>
				</ol>
			</li>
		</ol>
		<!--**************************************************** -->
		<h4 id="sample01">Basic usage</h4>

		<h5 id="sample01_01">Basic</h5>
		<p>
			First parameter => File name transmitted by Ajax<br />
			Second parameter => Options
		</p>
		<label for="ac01_01">Nation:</label>
		<input id="ac01_01" type="text">
		<input class="check_btn" type="button" value="Check the value." onclick="displayResult('ac01_01')" />
<code>
  $('#ac01_01').ajaxComboBox(
	'acbox/php/ajaxComboBox.php',
	{
	  <span class="green">'lang'        : 'en',</span>
	  'db_table'    : 'nation',
	  'order_field' : 'id'
	}
  );

</code>
		<!--------------------------------------------------------->
		<h5 id="sample01_02">The number of displays of the list and page is changed. </h5>
		<p>
			"per_page" option => The number of displays of lists is changed.<br />
			"navi_num" option => The number of page is changed.
		</p>
		<label for="ac01_02">Name:</label>
		<input id="ac01_02" type="text" style="width:400px">
		<input class="check_btn" type="button" value="Check the value." onclick="displayResult('ac01_02')" />
<code>
  $('#ac01_02').ajaxComboBox(
	'acbox/php/ajaxComboBox.php',
	{
	  'lang'        : 'en',
	  'db_table'    : 'name_en',
	  <span class="green">'per_page'    : 20,</span>
	  <span class="green">'navi_num'    : 10,</span>
	}

</code>
		<!--------------------------------------------------------->
		<h5 id="sample01_03">Simple Page-navi</h5>
		<p>
			Please set "navi_simple" option when you want to narrow<br />
			the width of the ComboBox as much as possible.
		</p>
		<label for="ac01_03">Name:</label>
		<input id="ac01_03" type="text" style="width:160px">
		<input class="check_btn" type="button" value="Check the value." onclick="displayResult('ac01_03')" />
<code>
  $('#ac01_03').ajaxComboBox(
	'acbox/php/ajaxComboBox.php',
	{
	  'lang'        : 'en',
	  'db_table'    : 'name_en',
	  'navi_num'    : 1,
	  <span class="green">'navi_simple' : true</span>
	}

</code>
		<!--------------------------------------------------------->
		<h5 id="sample01_04">Search from several fields</h5>
		<p>
			Set several fields for "search_field" option.<br>
			Please input "23" to the following box.
		</p>
		<label for="ac01_04">Nation(name, id):</label>
		<input id="ac01_04" type="text">
		<input class="check_btn" type="button" value="Check the value." onclick="displayResult('ac01_04')" />
<code>
  $('#ac01_04').ajaxComboBox(
    'acbox/php/ajaxComboBox.php',
    {
      'lang'        : 'en',
      'db_table'    : 'nation',
      <span class="green">'search_field': 'name, id'</span>
    }
  );

</code>
		<!--------------------------------------------------------->
		<h5 id="sample01_05">Change from "AND" to "OR"</h5>
		<p>
			You can change the type of search from "AND" to "OR".<br>
			Please input "ame ja" to the following box.
		</p>
		<label for="ac01_05">Nation:</label>
		<input id="ac01_05" type="text">
		<input class="check_btn" type="button" value="Check the value." onclick="displayResult('ac01_05')" />
<code>
  $('#ac01_05').ajaxComboBox(
    'acbox/php/ajaxComboBox.php',
    {
      'lang'        : 'en',
      'db_table'    : 'nation',
      <span class="green">'and_or'      : 'OR'</span>
    }
  );

</code>

		<div class="top_navi"><a href="#idx_area"> To contents </a></div>
		<!--**************************************************** -->
		<h4 id="sample02">Display Sub-info</h4>
		<p>
			Each candidate can be distinguished when there is a candidate of the same name.
		</p>
		<h5 id="sample02_01">Basic</h5>
		<p>
			Only "sub_info" option set "true".
		</p>
		<label for="ac02_01">Employee:</label>
		<input id="ac02_01" type="text">
		<input class="check_btn" type="button" value="Check the value." onclick="displayResult('ac02_01')" />
<code>
  $('#ac02_01').ajaxComboBox(
	'acbox/php/ajaxComboBox.php',
	{
	  'lang'        : 'en',
	  'db_table'    : 'employee_en',
	  <span class="green">'sub_info'    : true</span>
	}
  );

</code>
		<!--------------------------------------------------------->
		<h5 id="sample02_02">The item name of the table is changed.</h5>
		<p>
			"sub_as" option can change the field-name.
		</p>
		<label for="ac02_02">Employee:</label>
		<input id="ac02_02" type="text">
		<input class="check_btn" type="button" value="Check the value." onclick="displayResult('ac02_02')" />
<code>
  $('#ac02_02').ajaxComboBox(
	'acbox/php/ajaxComboBox.php',
	{
	  'lang'        : 'en',
	  'db_table'    : 'employee_en',
	  'sub_info'    : true,
	  <span class="green">'sub_as'      : {</span>
		<span class="green">'id'       : 'Employer ID',</span>
		<span class="green">'post'     : 'Post',</span>
		<span class="green">'position' : 'Position'</span>
	  <span class="green">}</span>
	}
  );

</code>
		<!--------------------------------------------------------->
		<h5 id="sample02_03">Setting of display field of Sub-info.</h5>
		<p>
			"show_field" option choose the displayed field-name.
		</p>
		<label for="ac02_03">Employee:</label>
		<input id="ac02_03" type="text">
		<input class="check_btn" type="button" value="Check the value." onclick="displayResult('ac02_03')" />
<code>
  $('#ac02_03').ajaxComboBox(
	'acbox/php/ajaxComboBox.php',
	{
	  'lang'        : 'en',
	  'db_table'    : 'employee_en',
	  'sub_info'    : true,
	  'sub_as'      : {
		'post'     : 'Post',
		'position' : 'Position'
	  },
	  <span class="green">'show_field'  : 'position,post'</span>
	}
  );

</code>
		<!--------------------------------------------------------->
		<h5 id="sample02_04">Setting of hidden field of Sub-info.</h5>
		<p>
			"hide_field" option choose the hidden field-name.
		</p>
		<label for="ac02_04">Employee:</label>
		<input id="ac02_04" type="text">
		<input class="check_btn" type="button" value="Check the value." onclick="displayResult('ac02_04')" />
<code>
  $('#ac02_04').ajaxComboBox(
	'acbox/php/ajaxComboBox.php',
	{
	  'lang'        : 'en',
	  'db_table'    : 'employee_en',
	  'sub_info'    : true,
	  'sub_as'      : {
		'id'       : 'Employer ID'
	  },

	  <span class="green">'hide_field'  : 'position,post'</span>
	}
  );

</code>

		<!--------------------------------------------------------->
		<h5 id="sample02_05">How to use Sub-info for other purpose</h5>
		<p>
			The "sub_info" attribute is added to text box<br />
			when you select from list.<br />
			So, you can use Sub-info for other purpose.
		</p>
		<label for="ac02_05">Employee:</label>

		<input id="ac02_05" type="text">
		<input class="check_btn" type="button" value="Check Sub-info" onclick="func_02_05()" />
		<script>
		function func_02_05(){
		  var result = 'Sub-info\n';
		  var json = $('#ac02_05').attr('sub_info');
		  var obj = eval( '(' + json + ')' );
		  for(var key in obj){
			result += key + ' : ' + obj[key] + '\n';
		   } 
		  alert(result);
		}
		</script>
<code>
  var result = 'Sub-info\n';
  var json = $('#ac_02_05_1')<span class="green">.attr('sub_info')</span>;
  var obj = <span class="green">eval( '(' + json + ')' )</span>;
  for(var key in obj){
	result += key + ' : ' + obj[key] + '\n';
   } 
  alert(result);

</code>


		<div class="top_navi"><a href="#idx_area"> To contents </a></div>
		<!--**************************************************** -->
		<h4 id="sample03">Select-only</h4>
		<h5 id="sample03_01">Basic</h5>
		<p>
			When the value that doesn't exist in the list is input, warning is received.
		</p>
		<label for="ac03_01">Employee:</label>
		<input id="ac03_01" name="ac03_01" type="text">
		<input class="check_btn" type="button" value="Check the value." onclick="displayResult('ac03_01')" />
<code>
  $('#ac03_01').ajaxComboBox(
	'acbox/php/ajaxComboBox.php',
	{
	  'lang'        : 'en',
	  'db_table'    : 'employee_en',
	  'sub_info'    : true,
	  <span class="green">'select_only' : true</span>
	}
  );

</code>
		<p>
			If this option is set, the value of "Primary_key" field transmit by the form.
		</p>
<code>
<span class="gray">//Text-box</span>
&lt;input id=&quot;ac03_01_1&quot; name=&quot;<span class="green">ac03_01_1</span>&quot; type=&quot;text&quot; /&gt;

<span class="gray">//List</span>
...
&lt;li id=&quot;A010&quot; class=&quot;&quot;&gt;Adams&lt;/li&gt;
&lt;li id=&quot;<span class="red">A009</span>&quot; class=&quot;ac_over&quot;&gt;Adams&lt;/li&gt;
&lt;li id=&quot;A005&quot; class=&quot;&quot;&gt;Adams&lt;/li&gt;
...

<span class="gray">//Hidden field</span>
&lt;input type=&quot;hidden&quot; name=&quot;<span class="green">ac03_01_1</span>&quot; value=&quot;<span class="red">A011</span>&quot;/&gt;

</code>
		<!--------------------------------------------------------->
		<h5 id="sample03_02">Setting of Primary key.</h5>
		<label for="ac03_02">Nation:</label>
		<input id="ac03_02" name="ac03_02" type="text"></div>
		<input class="check_btn" type="button" value="Check the value." onclick="displayResult('ac03_02')" />
<code>
  $('#ac03_02').ajaxComboBox(
	'acbox/php/ajaxComboBox.php',
	{
	  'lang'        : 'en',
	  'db_table'    : 'nation',
	  'order_field' : 'id',
	  'show_field'  : 'id',
	  'sub_info'    : true,
	  'select_only' : true,
	  <span class="green">'primary_key' : 'name'</span>
	}
  );

</code>
		<div class="top_navi"><a href="#idx_area"> To contents </a></div>
		<!--**************************************************** -->
		<h4 id="sample04">Initial Value</h4>
		
		<h5 id="sample04_01">Basic</h5>
		<label for="ac04_01">Nation:</label>
		<input id="ac04_01" name="ac04_01" type="text">
		<input class="check_btn" type="button" value="Check the value." onclick="displayResult('ac04_01')" />

		<code>
  $('#ac04_01').ajaxComboBox(
	'acbox/php/ajaxComboBox.php',
	{
	  'lang'        : 'en',
	  'db_table'    : 'prefectures',
	  'order_field' : 'id',
	  <span class="green">'init_val'    : 'Japan'</span>
	}
  );

</code>
		<!--------------------------------------------------------->
		<h5 id="sample04_02">Select-only</h5>
		<label for="ac04_02">Nation:</label>
		<input id="ac04_02" name="ac04_02" type="text">
		<input class="check_btn" type="button" value="Check the value." onclick="displayResult('ac04_02')" />

<code>
  $('#ac04_02').ajaxComboBox(
	'acbox/php/ajaxComboBox.php',
	{
	  'lang'        : 'en',
	  'db_table'    : 'prefectures',
	  'order_field' : 'id',
	  <span class="green">'select_only' : true,</span>
	  <span class="green">'primary_key' : 'id',</span>
	  <span class="green">'init_val'    : 28</span>
	}
  );

</code>
		<div class="top_navi"><a href="#idx_area"> To contents </a></div>
		<!--**************************************************** -->
		<h4 id="sample05">Search from JSON without database</h4>
		<p>
			Search from JSON without database or server-side like PHP.
		</p>
<code>
var data = [
	{'id':'A001','name':'Adams','post':'Sales','position':'The rank and file'},
	{'id':'A002','name':'Darling','post':'Sales','position':'The rank and file'},
	{'id':'A003','name':'Kingston','post':'General Affairs','position':'Chief clerk'},
	{'id':'A004','name':'Darling','post':'General Affairs','position':'Section chief'},
	...
];

</code>
		<h5 id="sample05_01">Basic</h5>
		<p>
			Set JSON object instead of a name of server-side file.
		</p>
		<label for="ac05_01">Employee:</label>
		<input id="ac05_01" name="ac05_01" type="text">
		<input class="check_btn" type="button" value="Check the value." onclick="displayResult('ac05_01')" />

<code>
  $('#ac05_01').ajaxComboBox(
    <span class="green">data</span>,
    {
      'sub_info'    : true,
      'sub_as'      : {
        'id'       : 'Employer ID',
        'post'     : 'Post',
        'position' : 'Position'
      },
      'select_only' : true,
      'init_val'    : ['A009'],
      'primary_key' : 'id'
    }
  );

</code>

		<div class="top_navi"><a href="#idx_area"> To contents </a></div>
		<!--**************************************************** -->
		<h4 id="sample06">Submitting at once when selected</h4>
		<h5 id="sample06_01">Basic</h5>
		<label for="ac06_01">Nation:</label>
		<input id="ac06_01" type="text">
<code>
  $('#ac06_01').ajaxComboBox(
    'acbox/php/ajaxComboBox.php',
    {
      'db_table'    : 'nation',
      'order_field' : 'id',
      <span class="green">'bind_to'     : '<span class="red">foo</span>'</span>
    }
  )
  .bind('<span class="red">foo</span>', function(){
    alert($(this).val() + ' is selected.');
  });

</code>
		<!--------------------------------------------------------->
		<h5 id="sample06_02">Not enclosed by form tag</h5>
		<p>
			If text box is not enclosed by form tag and event handler is set<br />
			for inputting enter key, when one of the list is selected by enter key<br />
			function is doubly executed.<br />
			To avoid this situation, a argument that become true when selected by<br />
			enter key is set When originality event of plugin is fired.
		</p>
		<label for="ac06_02">Nation:</label>
		<input id="ac06_02" type="text">

<code>
  $('#ac06_02').ajaxComboBox(
    'acbox/php/ajaxComboBox.php',
    {
      'db_table'    : 'nation',
      'order_field' : 'id',
      'bind_to'     : 'foo'
    }
  )
  .bind('foo', function(e, <span class="green">is_enter_key</span>){
    if(<span class="green">!is_enter_key</span>){
      alert($(this).val() + ' is selected. (by mouse)');
    }
  })
  .keydown(function(e){
    if(e.keyCode == 13) alert($(this).val() + ' is selected. (by enter key)');
  });

</code>
		<div class="top_navi"><a href="#idx_area"> To contents </a></div>
		<!--**************************************************** -->
		<hr />
		<address>
		Author : sutara_lumpur /
		<a href="http://d.hatena.ne.jp/sutara_lumpur/20090124/1232781879">Blog</a> /
		<a href="http://twitter.com/sutara_lumpur">Twitter</a> /
		<img src="mail_image.png" alt="mail address" />
		</address>
	</body>
</html>
