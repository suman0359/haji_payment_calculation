<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
	<title>Buttons example - jQuery UI styling</title>
	<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.jqueryui.css">
	<link rel="stylesheet" type="text/css" href="css/buttons.jqueryui.css">
	<link rel="stylesheet" type="text/css" href="css/shCore.css">
	<link rel="stylesheet" type="text/css" href="css/demo.css">
	<style type="text/css" class="init">
	
	</style>
	
</head>
<body class="dt-example dt-example-jqueryui">
	<div class="container">
		<section>
			<h1>Buttons example <span>jQuery UI styling</span></h1>
			<div class="info">
				<p>This example shows DataTables and Buttons being used with <a href="http://jqueryui.com/">jQuery UI</a> providing the base styling information.</p>
				<p>Note that for ease of implementation, the <a href="//datatables.net/reference/option/buttons"><code class="option" title=
				"Buttons initialisation option">buttons</code></a> option is specified as <code>true</code> to use the default options, and the <a href=
				"//datatables.net/reference/api/buttons().container()"><code class="api" title="Buttons API method">buttons().container()</code></a> method then used to insert the
				buttons into the document. It is possible to use the <a href="//datatables.net/reference/option/dom"><code class="option" title=
				"DataTables initialisation option">dom</code></a> option to insert the buttons like in the DataTables styled examples, but the default <a href=
				"//datatables.net/reference/option/dom"><code class="option" title="DataTables initialisation option">dom</code></a> option used for jQuery UI styling is quite
				complex and would need to be fully restated.</p>
			</div>
			<table id="example" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Age</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Age</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</tfoot>
				<tbody>
					<tr>
						<td>Tiger Nixon</td>
						<td>System Architect</td>
						<td>Edinburgh</td>
						<td>61</td>
						<td>2011/04/25</td>
						<td>$320,800</td>
					</tr>
					<tr>
						<td>Garrett Winters</td>
						<td>Accountant</td>
						<td>Tokyo</td>
						<td>63</td>
						<td>2011/07/25</td>
						<td>$170,750</td>
					</tr>
					<tr>
						<td>Ashton Cox</td>
						<td>Junior Technical Author</td>
						<td>San Francisco</td>
						<td>66</td>
						<td>2009/01/12</td>
						<td>$86,000</td>
					</tr>
					<tr>
						<td>Cedric Kelly</td>
						<td>Senior Javascript Developer</td>
						<td>Edinburgh</td>
						<td>22</td>
						<td>2012/03/29</td>
						<td>$433,060</td>
					</tr>
					<tr>
						<td>Airi Satou</td>
						<td>Accountant</td>
						<td>Tokyo</td>
						<td>33</td>
						<td>2008/11/28</td>
						<td>$162,700</td>
					</tr>
					<tr>
						<td>Brielle Williamson</td>
						<td>Integration Specialist</td>
						<td>New York</td>
						<td>61</td>
						<td>2012/12/02</td>
						<td>$372,000</td>
					</tr>
					<tr>
						<td>Herrod Chandler</td>
						<td>Sales Assistant</td>
						<td>San Francisco</td>
						<td>59</td>
						<td>2012/08/06</td>
						<td>$137,500</td>
					</tr>
					<tr>
						<td>Rhona Davidson</td>
						<td>Integration Specialist</td>
						<td>Tokyo</td>
						<td>55</td>
						<td>2010/10/14</td>
						<td>$327,900</td>
					</tr>
					<tr>
						<td>Colleen Hurst</td>
						<td>Javascript Developer</td>
						<td>San Francisco</td>
						<td>39</td>
						<td>2009/09/15</td>
						<td>$205,500</td>
					</tr>
					<tr>
						<td>Sonya Frost</td>
						<td>Software Engineer</td>
						<td>Edinburgh</td>
						<td>23</td>
						<td>2008/12/13</td>
						<td>$103,600</td>
					</tr>
					<tr>
						<td>Jena Gaines</td>
						<td>Office Manager</td>
						<td>London</td>
						<td>30</td>
						<td>2008/12/19</td>
						<td>$90,560</td>
					</tr>
					<tr>
						<td>Quinn Flynn</td>
						<td>Support Lead</td>
						<td>Edinburgh</td>
						<td>22</td>
						<td>2013/03/03</td>
						<td>$342,000</td>
					</tr>
					<tr>
						<td>Charde Marshall</td>
						<td>Regional Director</td>
						<td>San Francisco</td>
						<td>36</td>
						<td>2008/10/16</td>
						<td>$470,600</td>
					</tr>
					<tr>
						<td>Haley Kennedy</td>
						<td>Senior Marketing Designer</td>
						<td>London</td>
						<td>43</td>
						<td>2012/12/18</td>
						<td>$313,500</td>
					</tr>
					<tr>
						<td>Tatyana Fitzpatrick</td>
						<td>Regional Director</td>
						<td>London</td>
						<td>19</td>
						<td>2010/03/17</td>
						<td>$385,750</td>
					</tr>
					<tr>
						<td>Michael Silva</td>
						<td>Marketing Designer</td>
						<td>London</td>
						<td>66</td>
						<td>2012/11/27</td>
						<td>$198,500</td>
					</tr>
					<tr>
						<td>Paul Byrd</td>
						<td>Chief Financial Officer (CFO)</td>
						<td>New York</td>
						<td>64</td>
						<td>2010/06/09</td>
						<td>$725,000</td>
					</tr>
					<tr>
						<td>Gloria Little</td>
						<td>Systems Administrator</td>
						<td>New York</td>
						<td>59</td>
						<td>2009/04/10</td>
						<td>$237,500</td>
					</tr>
					<tr>
						<td>Bradley Greer</td>
						<td>Software Engineer</td>
						<td>London</td>
						<td>41</td>
						<td>2012/10/13</td>
						<td>$132,000</td>
					</tr>
					<tr>
						<td>Dai Rios</td>
						<td>Personnel Lead</td>
						<td>Edinburgh</td>
						<td>35</td>
						<td>2012/09/26</td>
						<td>$217,500</td>
					</tr>
					<tr>
						<td>Jenette Caldwell</td>
						<td>Development Lead</td>
						<td>New York</td>
						<td>30</td>
						<td>2011/09/03</td>
						<td>$345,000</td>
					</tr>
					<tr>
						<td>Yuri Berry</td>
						<td>Chief Marketing Officer (CMO)</td>
						<td>New York</td>
						<td>40</td>
						<td>2009/06/25</td>
						<td>$675,000</td>
					</tr>
					<tr>
						<td>Caesar Vance</td>
						<td>Pre-Sales Support</td>
						<td>New York</td>
						<td>21</td>
						<td>2011/12/12</td>
						<td>$106,450</td>
					</tr>
					<tr>
						<td>Doris Wilder</td>
						<td>Sales Assistant</td>
						<td>Sidney</td>
						<td>23</td>
						<td>2010/09/20</td>
						<td>$85,600</td>
					</tr>
					<tr>
						<td>Angelica Ramos</td>
						<td>Chief Executive Officer (CEO)</td>
						<td>London</td>
						<td>47</td>
						<td>2009/10/09</td>
						<td>$1,200,000</td>
					</tr>
					<tr>
						<td>Gavin Joyce</td>
						<td>Developer</td>
						<td>Edinburgh</td>
						<td>42</td>
						<td>2010/12/22</td>
						<td>$92,575</td>
					</tr>
					<tr>
						<td>Jennifer Chang</td>
						<td>Regional Director</td>
						<td>Singapore</td>
						<td>28</td>
						<td>2010/11/14</td>
						<td>$357,650</td>
					</tr>
					<tr>
						<td>Brenden Wagner</td>
						<td>Software Engineer</td>
						<td>San Francisco</td>
						<td>28</td>
						<td>2011/06/07</td>
						<td>$206,850</td>
					</tr>
					<tr>
						<td>Fiona Green</td>
						<td>Chief Operating Officer (COO)</td>
						<td>San Francisco</td>
						<td>48</td>
						<td>2010/03/11</td>
						<td>$850,000</td>
					</tr>
					<tr>
						<td>Shou Itou</td>
						<td>Regional Marketing</td>
						<td>Tokyo</td>
						<td>20</td>
						<td>2011/08/14</td>
						<td>$163,000</td>
					</tr>
					<tr>
						<td>Michelle House</td>
						<td>Integration Specialist</td>
						<td>Sidney</td>
						<td>37</td>
						<td>2011/06/02</td>
						<td>$95,400</td>
					</tr>
					<tr>
						<td>Suki Burks</td>
						<td>Developer</td>
						<td>London</td>
						<td>53</td>
						<td>2009/10/22</td>
						<td>$114,500</td>
					</tr>
					<tr>
						<td>Prescott Bartlett</td>
						<td>Technical Author</td>
						<td>London</td>
						<td>27</td>
						<td>2011/05/07</td>
						<td>$145,000</td>
					</tr>
					<tr>
						<td>Gavin Cortez</td>
						<td>Team Leader</td>
						<td>San Francisco</td>
						<td>22</td>
						<td>2008/10/26</td>
						<td>$235,500</td>
					</tr>
					<tr>
						<td>Martena Mccray</td>
						<td>Post-Sales support</td>
						<td>Edinburgh</td>
						<td>46</td>
						<td>2011/03/09</td>
						<td>$324,050</td>
					</tr>
					<tr>
						<td>Unity Butler</td>
						<td>Marketing Designer</td>
						<td>San Francisco</td>
						<td>47</td>
						<td>2009/12/09</td>
						<td>$85,675</td>
					</tr>
					<tr>
						<td>Howard Hatfield</td>
						<td>Office Manager</td>
						<td>San Francisco</td>
						<td>51</td>
						<td>2008/12/16</td>
						<td>$164,500</td>
					</tr>
					<tr>
						<td>Hope Fuentes</td>
						<td>Secretary</td>
						<td>San Francisco</td>
						<td>41</td>
						<td>2010/02/12</td>
						<td>$109,850</td>
					</tr>
					<tr>
						<td>Vivian Harrell</td>
						<td>Financial Controller</td>
						<td>San Francisco</td>
						<td>62</td>
						<td>2009/02/14</td>
						<td>$452,500</td>
					</tr>
					<tr>
						<td>Timothy Mooney</td>
						<td>Office Manager</td>
						<td>London</td>
						<td>37</td>
						<td>2008/12/11</td>
						<td>$136,200</td>
					</tr>
					<tr>
						<td>Jackson Bradshaw</td>
						<td>Director</td>
						<td>New York</td>
						<td>65</td>
						<td>2008/09/26</td>
						<td>$645,750</td>
					</tr>
					<tr>
						<td>Olivia Liang</td>
						<td>Support Engineer</td>
						<td>Singapore</td>
						<td>64</td>
						<td>2011/02/03</td>
						<td>$234,500</td>
					</tr>
					<tr>
						<td>Bruno Nash</td>
						<td>Software Engineer</td>
						<td>London</td>
						<td>38</td>
						<td>2011/05/03</td>
						<td>$163,500</td>
					</tr>
					<tr>
						<td>Sakura Yamamoto</td>
						<td>Support Engineer</td>
						<td>Tokyo</td>
						<td>37</td>
						<td>2009/08/19</td>
						<td>$139,575</td>
					</tr>
					<tr>
						<td>Thor Walton</td>
						<td>Developer</td>
						<td>New York</td>
						<td>61</td>
						<td>2013/08/11</td>
						<td>$98,540</td>
					</tr>
					<tr>
						<td>Finn Camacho</td>
						<td>Support Engineer</td>
						<td>San Francisco</td>
						<td>47</td>
						<td>2009/07/07</td>
						<td>$87,500</td>
					</tr>
					<tr>
						<td>Serge Baldwin</td>
						<td>Data Coordinator</td>
						<td>Singapore</td>
						<td>64</td>
						<td>2012/04/09</td>
						<td>$138,575</td>
					</tr>
					<tr>
						<td>Zenaida Frank</td>
						<td>Software Engineer</td>
						<td>New York</td>
						<td>63</td>
						<td>2010/01/04</td>
						<td>$125,250</td>
					</tr>
					<tr>
						<td>Zorita Serrano</td>
						<td>Software Engineer</td>
						<td>San Francisco</td>
						<td>56</td>
						<td>2012/06/01</td>
						<td>$115,000</td>
					</tr>
					<tr>
						<td>Jennifer Acosta</td>
						<td>Junior Javascript Developer</td>
						<td>Edinburgh</td>
						<td>43</td>
						<td>2013/02/01</td>
						<td>$75,650</td>
					</tr>
					<tr>
						<td>Cara Stevens</td>
						<td>Sales Assistant</td>
						<td>New York</td>
						<td>46</td>
						<td>2011/12/06</td>
						<td>$145,600</td>
					</tr>
					<tr>
						<td>Hermione Butler</td>
						<td>Regional Director</td>
						<td>London</td>
						<td>47</td>
						<td>2011/03/21</td>
						<td>$356,250</td>
					</tr>
					<tr>
						<td>Lael Greer</td>
						<td>Systems Administrator</td>
						<td>London</td>
						<td>21</td>
						<td>2009/02/27</td>
						<td>$103,500</td>
					</tr>
					<tr>
						<td>Jonas Alexander</td>
						<td>Developer</td>
						<td>San Francisco</td>
						<td>30</td>
						<td>2010/07/14</td>
						<td>$86,500</td>
					</tr>
					<tr>
						<td>Shad Decker</td>
						<td>Regional Director</td>
						<td>Edinburgh</td>
						<td>51</td>
						<td>2008/11/13</td>
						<td>$183,000</td>
					</tr>
					<tr>
						<td>Michael Bruce</td>
						<td>Javascript Developer</td>
						<td>Singapore</td>
						<td>29</td>
						<td>2011/06/27</td>
						<td>$183,000</td>
					</tr>
					<tr>
						<td>Donna Snider</td>
						<td>Customer Support</td>
						<td>New York</td>
						<td>27</td>
						<td>2011/01/25</td>
						<td>$112,000</td>
					</tr>
				</tbody>
			</table>
			<ul class="tabs">
				<li class="active">Javascript</li>
				<li>HTML</li>
				<li>CSS</li>
				<li>Ajax</li>
				<li>Server-side script</li>
			</ul>
			<div class="tabs">
				<div class="js">
					<p>The Javascript shown below is used to initialise the table shown in this example:</p><code class="multiline language-js">$(document).ready(function() {
	var table = $('#example').DataTable( {
		lengthChange: false,
		buttons: true
	} );

	table.buttons().container()
		.insertBefore( '#example_filter' );
} );</code>
					<p>In addition to the above code, the following Javascript library files are loaded for use in this example:</p>
					<ul>
						<li>
							<a href="//code.jquery.com/jquery-1.12.0.min.js">//code.jquery.com/jquery-1.12.0.min.js</a>
						</li>
						<li>
							<a href="../../../../media/js/jquery.dataTables.js">../../../../media/js/jquery.dataTables.js</a>
						</li>
						<li>
							<a href="../../../../media/js/dataTables.jqueryui.js">../../../../media/js/dataTables.jqueryui.js</a>
						</li>
						<li>
							<a href="../../js/dataTables.buttons.js">../../js/dataTables.buttons.js</a>
						</li>
						<li>
							<a href="../../js/buttons.jqueryui.js">../../js/buttons.jqueryui.js</a>
						</li>
						<li>
							<a href="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js">//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js</a>
						</li>
						<li>
							<a href="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js">//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js</a>
						</li>
						<li>
							<a href="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js">//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js</a>
						</li>
						<li>
							<a href="../../js/buttons.html5.js">../../js/buttons.html5.js</a>
						</li>
						<li>
							<a href="../../js/buttons.print.js">../../js/buttons.print.js</a>
						</li>
					</ul>
				</div>
				<div class="table">
					<p>The HTML shown below is the raw HTML table element, before it has been enhanced by DataTables:</p>
				</div>
				<div class="css">
					<div>
						<p>This example uses a little bit of additional CSS beyond what is loaded from the library files (below), in order to correctly display the table. The
						additional CSS used is shown below:</p><code class="multiline language-css"></code>
					</div>
					<p>The following CSS library files are loaded for use in this example to provide the styling of the table:</p>
					<ul>
						<li>
							<a href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css</a>
						</li>
						<li>
							<a href="../../../../media/css/dataTables.jqueryui.css">../../../../media/css/dataTables.jqueryui.css</a>
						</li>
						<li>
							<a href="../../css/buttons.jqueryui.css">../../css/buttons.jqueryui.css</a>
						</li>
					</ul>
				</div>
				<div class="ajax">
					<p>This table loads data by Ajax. The latest data that has been loaded is shown below. This data will update automatically as any additional data is
					loaded.</p>
				</div>
				<div class="php">
					<p>The script used to perform the server-side processing for this table is shown below. Please note that this is just an example script using PHP. Server-side
					processing scripts can be written in any language, using <a href="//datatables.net/manual/server-side">the protocol described in the DataTables
					documentation</a>.</p>
				</div>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<h2>Other examples</h2>
				<div class="toc">
					<div class="toc-group">
						<h3><a href="../initialisation/index.html">Basic initialisation</a></h3>
						<ul class="toc">
							<li>
								<a href="../initialisation/simple.html">Basic initialisation</a>
							</li>
							<li>
								<a href="../initialisation/export.html">File export</a>
							</li>
							<li>
								<a href="../initialisation/custom.html">Custom button</a>
							</li>
							<li>
								<a href="../initialisation/className.html">Class names</a>
							</li>
							<li>
								<a href="../initialisation/keys.html">Keyboard activation</a>
							</li>
							<li>
								<a href="../initialisation/collections.html">Collections</a>
							</li>
							<li>
								<a href="../initialisation/collections-sub.html">Multi-level collections</a>
							</li>
							<li>
								<a href="../initialisation/collections-autoClose.html">Auto close collection</a>
							</li>
							<li>
								<a href="../initialisation/plugins.html">Plug-ins</a>
							</li>
							<li>
								<a href="../initialisation/new.html">`new` initialisation</a>
							</li>
							<li>
								<a href="../initialisation/multiple.html">Multiple button groups</a>
							</li>
							<li>
								<a href="../initialisation/pageLength.html">Page length</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../html5/index.html">HTML 5 data export</a></h3>
						<ul class="toc">
							<li>
								<a href="../html5/simple.html">HTML5 export buttons</a>
							</li>
							<li>
								<a href="../html5/tsv.html">Tab separated values</a>
							</li>
							<li>
								<a href="../html5/filename.html">File name</a>
							</li>
							<li>
								<a href="../html5/copyi18n.html">Copy button internationalisation</a>
							</li>
							<li>
								<a href="../html5/pdfMessage.html">PDF message</a>
							</li>
							<li>
								<a href="../html5/pdfPage.html">PDF page size and orientation</a>
							</li>
							<li>
								<a href="../html5/pdfImage.html">PDF with image</a>
							</li>
							<li>
								<a href="../html5/pdfOpen.html">PDF - open in new window</a>
							</li>
							<li>
								<a href="../html5/outputFormat-orthogonal.html">Format output data - orthogonal data</a>
							</li>
							<li>
								<a href="../html5/columns.html">Column selectors</a>
							</li>
							<li>
								<a href="../html5/outputFormat-function.html">Format output data - export options</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../flash/index.html">Flash data export</a></h3>
						<ul class="toc">
							<li>
								<a href="../flash/simple.html">Flash export buttons</a>
							</li>
							<li>
								<a href="../flash/tsv.html">Tab separated values</a>
							</li>
							<li>
								<a href="../flash/filename.html">File name</a>
							</li>
							<li>
								<a href="../flash/copyi18n.html">Copy button internationalisation</a>
							</li>
							<li>
								<a href="../flash/pdfMessage.html">PDF message</a>
							</li>
							<li>
								<a href="../flash/pdfPage.html">Page size and orientation</a>
							</li>
							<li>
								<a href="../flash/hidden.html">Hidden initialisation</a>
							</li>
							<li>
								<a href="../flash/swfPath.html">SWF file location</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../column_visibility/index.html">Column visibility</a></h3>
						<ul class="toc">
							<li>
								<a href="../column_visibility/simple.html">Basic column visibility</a>
							</li>
							<li>
								<a href="../column_visibility/layout.html">Multi-column layout</a>
							</li>
							<li>
								<a href="../column_visibility/text.html">Internationalisation</a>
							</li>
							<li>
								<a href="../column_visibility/restore.html">Restore column visibility</a>
							</li>
							<li>
								<a href="../column_visibility/columns.html">Select columns</a>
							</li>
							<li>
								<a href="../column_visibility/columnsToggle.html">Visibility toggle buttons</a>
							</li>
							<li>
								<a href="../column_visibility/columnGroups.html">Column groups</a>
							</li>
							<li>
								<a href="../column_visibility/stateSave.html">State saving</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../print/index.html">Print</a></h3>
						<ul class="toc">
							<li>
								<a href="../print/simple.html">Print button</a>
							</li>
							<li>
								<a href="../print/message.html">Custom message</a>
							</li>
							<li>
								<a href="../print/columns.html">Export options - column selector</a>
							</li>
							<li>
								<a href="../print/select.html">Export options - row selector</a>
							</li>
							<li>
								<a href="../print/autoPrint.html">Disable auto print</a>
							</li>
							<li>
								<a href="../print/customisation.html">Customisation of the print view window</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../api/index.html">API</a></h3>
						<ul class="toc">
							<li>
								<a href="../api/enable.html">Enable / disable</a>
							</li>
							<li>
								<a href="../api/text.html">Dynamic text</a>
							</li>
							<li>
								<a href="../api/addRemove.html">Adding and removing buttons dynamically</a>
							</li>
							<li>
								<a href="../api/group.html">Group selection</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="./index.html">Styling</a></h3>
						<ul class="toc active">
							<li>
								<a href="./bootstrap.html">Bootstrap 3</a>
							</li>
							<li>
								<a href="./bootstrap4.html">Bootstrap 4</a>
							</li>
							<li>
								<a href="./foundation.html">Foundation styling</a>
							</li>
							<li class="active">
								<a href="./jqueryui.html">jQuery UI styling</a>
							</li>
							<li>
								<a href="./icons.html">Icons</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="epilogue">
					<p>Please refer to the <a href="http://www.datatables.net">DataTables documentation</a> for full information about its API properties and methods.<br>
					Additionally, there are a wide range of <a href="http://www.datatables.net/extensions">extensions</a> and <a href=
					"http://www.datatables.net/plug-ins">plug-ins</a> which extend the capabilities of DataTables.</p>
					<p class="copyright">DataTables designed and created by <a href="http://www.sprymedia.co.uk">SpryMedia Ltd</a> © 2007-2016<br>
					DataTables is licensed under the <a href="http://www.datatables.net/mit">MIT license</a>.</p>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript" language="javascript" src="http://qutubhajj.com/vendor/jquery/jquery.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/dataTables.jqueryui.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/dataTables.buttons.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/buttons.jqueryui.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/jszip.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/pdfmake.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/vfs_fonts.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/buttons.html5.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/buttons.print.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/shCore.js">
	</script>
	<script type="text/javascript" language="javascript" src="js/demo.js">
	</script>
	
	<script type="text/javascript" language="javascript" class="init">
	


$(document).ready(function() {
	var table = $('#example').DataTable( {
		lengthChange: false,
		buttons: true
	} );

	table.buttons().container()
		.insertBefore( '#example_filter' );
} );



	</script>

</body>
</html>
