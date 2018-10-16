ticket/4125">#4125</a> : Remove Format command incorrectly removes SCAYT word markers.</li>
			<li><a href="http://dev.ckeditor.com/ticket/5671">#5671</a> : SCAYT bootstrap script could be added multiple times unnecessarily.</li>
			<li><a href="http://dev.ckeditor.com/ticket/5573">#5573</a> : SCAYT move cursor position after insert element into marked word text.</li>
			<li><a href="http://dev.ckeditor.com/ticket/5546">#5546</a> : SCAYT interferes with undo/redo commands.</li>
			<li><a href="http://dev.ckeditor.com/ticket/5570">#5570</a> : [IE] First enabling SCAYT blind cursor in editor.</li>
			<li><a href="http://dev.ckeditor.com/ticket/5741">#5741</a> : Enable SCAYT cause error in multiple editor instances.</li>
			<li><a href="http://dev.ckeditor.com/ticket/5744">#5744</a> : Remove editor with SCAYT enabled in source mode throws error.</li>
		</ul></li>
		<li>Updated the following language files:<ul>
			<li><a href="http://dev.ckeditor.com/ticket/5432">#5432</a> : Dutch;</li>
			<li><a href="http://dev.ckeditor.com/ticket/5619">#5619</a> : Finnish;</li>
			<li><a href="http://dev.ckeditor.com/ticket/5515">#5515</a> : Hebrew;</li>
			<li><a href="http://dev.ckeditor.com/ticket/5588">#5588</a> : Turkish;</li>
		</ul></li>
	</ul>
	<h3>
		CKEditor 3.2.1</h3>
	<p>
		New features:</p>
	<ul>
		<li><a href="http://dev.ckeditor.com/ticket/4478">#4478</a> : Enable the SelectAll command in source mode.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5150">#5150</a> : Allow names in the CKEDITOR.config.colorButton_colors setting.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4810">#4810</a> : Adding configuration option for image dialog preview area filling text.</li>
		<li><a href="http://dev.ckeditor.com/ticket/536">#536</a> : Object style now could be applied on any parent element of current selection.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5290">#5290</a> : Unified stylesSet loading removing dependencies from the styles combo.
					Now the configuration entry is named 'config.stylesSet' instead of config.stylesCombo_stylesSet and the default location
					is under the 'styles' plugin instead of 'stylescombo'.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5352">#5352</a> : Allow to define the stylesSet array in the config object for the editor.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5302">#5302</a> : Adding config option "forceEnterMode".</li>
		<li><a href="http://dev.ckeditor.com/ticket/5216">#5216</a> : Extend CKEDITOR.appendTo to allow a data parameter for the initial value.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5024">#5024</a> : Added sample to show how to output XHTML and avoid deprecated tags.</li>
	</ul>
	<p>
		Fixed issues:</p>
	<ul>
		<li><a href="http://dev.ckeditor.com/ticket/5152">#5152</a> : Indentation using class attribute doesn't work properly.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4682">#4682</a> : It wasn't possible to edit block elements in IE that had styles like width, height or float.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4750">#4750</a> : Correcting default order of buttons layout in dialogs on Mac.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4932">#4932</a> : Fixed collapse button not clickable on simple toolbar.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5228">#5228</a> : Link dialog is automatically changes protocol when URLs that starts with '?'.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4877">#4877</a> : Fixed CKEditor displays source code in one long line (IE quirks mode + office2003 skin).</li>
		<li><a href="http://dev.ckeditor.com/ticket/5132">#5132</a> : Apply inline style leaks into sibling words which are seperated spaces.</li>
		<li><a href="http://dev.ckeditor.com/ticket/3599">#3599</a> : Background color style on sized text displayed as narrow band behind.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4661">#4661</a> : Translation missing in link dialog.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5240">#5240</a> : Flash alignment property is not presented visually on fake element.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4910">#4910</a> : Pasting in IE scrolls document to the end.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5041">#5041</a> : Table summary attribute can't be removed with dialog.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5124">#5124</a> : All inline styles cannot be applied on empty spaces.</li>
		<li><a href="http://dev.ckeditor.com/ticket/3570">#3570</a> : SCAYT marker shouldn't appear inside elements path bar.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4553">#4553</a> : Dirty check result incorrect when editor document is empty.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4555">#4555</a> : Unreleased memory when editor is created and destroyed.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5118">#5118</a> : Arrow keys navigation in RTL languages is incorrect.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4721">#4721</a> : Remove attribute 'value' of checkbox in IE.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5278">#5278</a> : IE: Add validation to check for bad window names of popup window.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5171">#5171</a> : Dialogs contains lists don't have proper voice labels.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4791">#4791</a> : Can't place cursor inside a form that end with a checkbox/radio.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4479">#4479</a> : StylesCombo doesn't reflect the selection state until it's first opened.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4717">#4717</a> : 'Unlink' and 'Outdent' command buttons should be disabled on editor startup.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5119">#5119</a> : Disabled command buttons are not being properly styled when focused.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5307">#5307</a> : Hide dialog page cause problem when there's two tab pages remain.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5343">#5343</a> : Active list item ARIA role is wrongly placed.</li>
		<li><a href="http://dev.ckeditor.com/ticket/3599">#3599</a> : Background color style applying to text with font size style has been narrowly rendered.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4711">#4711</a> : Line break character inside preformatted text makes it unable to type text at the end of previous line.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4829">#4829</a> : [IE] Apply style from combo has wrong result on manually created selection.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4830">#4830</a> : Retrieving selected element isn't always right, especially selecting using keyboard (SHIFT+ARROW).</li>
		<li><a href="http://dev.ckeditor.com/ticket/5128">#5128</a> : Element attribute inside preformatted text is corrupted when converting to other blocks.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5190">#5190</a> : Template list entry shouldn't gain initial focus open templates list dialog opens.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5238">#5238</a> : Menu button doesn't display arrow icon in high-contrast mode.</li>
		<li><a href="http://dev.ckeditor.com/ticket/3576">#3576</a> : Non-attributed element of the same name with the applied style is incorrectly removed.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5221">#5221</a> : Insert table into empty document cause JavaScript error thrown.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5242">#5242</a> : Apply 'automatic' color option of text color incorrectly removes background-color style.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4719">#4719</a> : IE does not escape attribute values properly.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5170">#5170</a> : Firefox does not insert text into styled element properly.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4026">#4026</a> : Office2003 skin has no toolbar button borders in High Contrast in IE7.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4348">#4348</a> : There should have exception thrown when 'CKEDITOR_BASEPATH' couldn't be figured out automatically.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5364">#5364</a> : Focus may not be put into dialog correctly when dialog skin file is loading slow.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4016">#4016</a> : Justify the layout of forms select dialog in Chrome and IE7.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5373">#5373</a> : Variable 'pathBlockElements' defines wrong items in CKEDITOR.dom.elementPath.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5082">#5082</a> : Ctrl key should be described as Cmd key on Mac.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5182">#5182</a> : Context menu is not been announced correctly by ATs.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4898">#4898</a> : Can't navigate outside table under the last paragraph of document.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4950">#4950</a> : List commands could compromise list item attribute and styles.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5018">#5018</a> : Find result highlighting remove normal font color styles unintentionally.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5376">#5376</a> : Unable to exit list from within a empty block under list item.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5145">#5145</a> : Various SCAYT fixes.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5319">#5319</a> : Match whole word doesn't work anymore after replacement has happened.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5363">#5363</a> : 'title' attribute now presents on all editor iframes.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5374">#5374</a> : Unable to toggle inline style when the selection starts at the linefeed of the previous paragraph.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4513">#4513</a> : Selected link element is not always correctly detected when using keyboard arrows to perform such selection.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5372">#5372</a> : Newly created sub list should inherit nothing from the original (parent) list, except the list type.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5274">#5274</a> : [IE6] Templates preview image is displayed in wrong size.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5292">#5292</a> : Preview in font size and family doesn't work with custom styles.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5396">#5396</a> : Selection is lost when use cell properties dialog to change cell type to header.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4082">#4082</a> : [IE+Quirks] Preview text in the image dialog is not wrapping.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4197">#4197</a> : Fixing format combo don't hide when editor blur on Safari.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5401">#5401</a> : The context menu break layout with Office2003 and V2 skin on IE quirks mode.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4825">#4825</a> : Fixing browser context menu is opened when clicking right mouse button twice.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5356">#5356</a> : The SCAYT dialog had issues with Prototype enabled pages.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5266">#5266</a> : SCAYT was disturbing the rendering of TH elements.</li>
		<li><a href="http://dev.ckeditor.com/ticket/4688">#4688</a> : SCAYT was interfering on checkDirty.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5429">#5429</a> : High Contrast mode was being mistakenly detected when loading the editor through Dojo's xhrGet.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5221">#5221</a> : Range is mangled when making collapsed selection in an empty paragraph.</li>
		<li><a href="http://dev.ckeditor.com/ticket/5261">#5261</a> : Config option 'scayt_autoStartup' slow down editor loading.</li>
		<li><a href="http://dev.ckeditor.com/ticket/3846">#3846</a> : Google Chrome - No Img properties after inserting.</li>
		<	},

	// Select Field Dialog.
	select :
	{
		title		: 'Selection Field Properties', // MISSING
		selectInfo	: 'Select Info', // MISSING
		opAvail		: 'Available Options', // MISSING
		value		: 'Value', // MISSING
		size		: 'Size', // MISSING
		lines		: 'lines', // MISSING
		chkMulti	: 'Allow multiple selections', // MISSING
		opText		: 'Text', // MISSING
		opValue		: 'Value', // MISSING
		btnAdd		: 'Add', // MISSING
		btnModify	: 'Modify', // MISSING
		btnUp		: 'Up', // MISSING
		btnDown		: 'Down', // MISSING
		btnSetValue : 'Set as selected value', // MISSING
		btnDelete	: 'Delete' // MISSING
	},

	// Textarea Dialog.
	textarea :
	{
		title		: 'Textarea Properties', // MISSING
		cols		: 'Columns', // MISSING
		rows		: 'Rows' // MISSING
	},

	// Text Field Dialog.
	textfield :
	{
		title		: 'Text Field Properties', // MISSING
		name		: 'Name', // MISSING
		value		: 'Value', // MISSING
		charWidth	: 'Character Width', // MISSING
		maxChars	: 'Maximum Characters', // MISSING
		type		: 'Type', // MISSING
		typeText	: 'Text', // MISSING
		typePass	: 'Password' // MISSING
	},

	// Hidden Field Dialog.
	hidden :
	{
		title	: 'Hidden Field Properties', // MISSING
		name	: 'Name', // MISSING
		value	: 'Value' // MISSING
	},

	// Image Dialog.
	image :
	{
		title		: 'Svojstva slike',
		titleButton	: 'Image Button Properties', // MISSING
		menu		: 'Svojstva slike',
		infoTab		: 'Info slike',
		btnUpload	: 'Šalji na server',
		upload		: 'Šalji',
		alt			: 'Tekst na slici',
		lockRatio	: 'Zakljuèaj odnos',
		resetSize	: 'Resetuj dimenzije',
		border		: 'Okvir',
		hSpace		: 'HSpace',
		vSpace		: 'VSpace',
		alertUrl	: 'Molimo ukucajte URL od slike.',
		linkTab		: 'Link', // MISSING
		button2Img	: 'Do you want to transform the selected image button on a simple image?', // MISSING
		img2Button	: 'Do you want to transform the selected image on a image button?', // MISSING
		urlMissing	: 'Image source URL is missing.', // MISSING
		validateBorder	: 'Border must be a whole number.', // MISSING
		validateHSpace	: 'HSpace must be a whole number.', // MISSING
		validateVSpace	: 'VSpace must be a whole number.' // MISSING
	},

	// Flash Dialog
	flash :
	{
		properties		: 'Flash Properties', // MISSING
		propertiesTab	: 'Properties', // MISSING
		title			: 'Flash Properties', // MISSING
		chkPlay			: 'Auto Play', // MISSING
		chkLoop			: 'Loop', // MISSING
		chkMenu			: 'Enable Flash Menu', // MISSING
		chkFull			: 'Allow Fullscreen', // MISSING
 		scale			: 'Scale', // MISSING
		scaleAll		: 'Show all', // MISSING
		scaleNoBorder	: 'No Border', // MISSING
		scaleFit		: 'Exact Fit', // MISSING
		access			: 'Script Access', // MISSING
		accessAlways	: 'Always', // MISSING
		accessSameDomain: 'Same domain', // MISSING
		accessNever		: 'Never', // MISSING
		alignAbsBottom	: 'Abs dole',
		alignAbsMiddle	: 'Abs sredina',
		alignBaseline	: 'Bazno',
		alignTextTop	: 'Vrh teksta',
		quality			: 'Quality', // MISSING
		qualityBest		: 'Best', // MISSING
		qualityHigh		: 'High', // MISSING
		qualityAutoHigh	: 'Auto High', // MISSING
		qualityMedium	: 'Medium', // MISSING
		qualityAutoLow	: 'Auto Low', // MISSING
		qualityLow		: 'Low', // MISSING
		windowModeWindow: 'Window', // MISSING
		windowModeOpaque: 'Opaque', // MISSING
		windowModeTransparent : 'Transparent', // MISSING
		windowMode		: 'Window mode', // MISSING
		flashvars		: 'Variables for Flash', // MISSING
		bgcolor			: 'Boja pozadine',
		hSpace			: 'HSpace',
		vSpace			: 'VSpace',
		validateSrc		: 'Molimo ukucajte URL link',
		validateHSpace	: 'HSpace must be a number.', // MISSING
		validateVSpace	: 'VSpace must be a number.' // MISSING
	},

	// Speller Pages Dialog
	spellCheck :
	{
		toolbar			: 'Check Spelling', // MISSING
		title			: 'Spell Check', // MISSING
		notAvailable	: 'Sorry, but service is unavailable now.', // MISSING
		errorLoading	: 'Error loading application service host: %s.', // MISSING
		notInDic		: 'Not in dictionary', // MISSING
		changeTo		: 'Change to', // MISSING
		btnIgnore		: 'Ignore', // MISSING
		btnIgnoreAll	: 'Ignore All', // MISSING
		btnReplace		: 'Replace', // MISSING
		btnReplaceAll	: 'Replace All', // MISSING
		btnUndo			: 'Undo', // MISSING
		noSuggestions	: '- No suggestions -', // MISSING
		progress		: 'Spell check in progress...', // MISSING
		noMispell		: 'Spell check complete: No misspellings found', // MISSING
		noChanges		: 'Spell check complete: No words changed', // MISSING
		oneChange		: 'Spell check complete: One word changed', // MISSING
		manyChanges		: 'Spell check complete: %1 words changed', // MISSING
		ieSpellDownload	: 'Spell checker not installed. Do you want to download it now?' // MISSING
	},

	smiley :
	{
		toolbar	: 'Smješko',
		title	: 'Ubaci smješka',
		options : 'Smiley Options' // MISSING
	},

	elementsPath :
	{
		eleLabel : 'Elements path', // MISSING
		eleTitle : '%1 element' // MISSING
	},

	numberedlist	: 'Numerisana lista',
	bulletedlist	: 'Lista',
	indent			: 'Poveæaj uvod',
	outdent			: 'Smanji uvod',

	justify :
	{
		left	: 'Lijevo poravnanje',
		center	: 'Centralno poravnanje',
		right	: 'Desno poravnanje',
		block	: 'Puno poravnanje'
	},

	blockquote : 'Block Quote', // MISSING

	clipboard :
	{
		title		: 'Zalijepi',
		cutError	: 'Sigurnosne postavke vašeg pretraživaèa ne dozvoljavaju operacije automatskog rezanja. Molimo koristite kraticu na tastaturi (Ctrl/Cmd+X).',
		copyError	: 'Sigurnosne postavke Vašeg pretraživaèa ne dozvoljavaju operacije automatskog kopiranja. Molimo koristite kraticu na tastaturi (Ctrl/Cmd+C).',
		pasteMsg	: 'Please paste inside the following box using the keyboard (<strong>Ctrl/Cmd+V</strong>) and hit OK', // MISSING
		securityMsg	: 'Because of your browser security settings, the editor is not able to access your clipboard data directly. You are required to paste it again in this window.', // MISSING
		pasteArea	: 'Paste Area' // MISSING
	},

	pastefromword :
	{
		confirmCleanup	: 'The text you want to paste seems to be copied from Word. Do you want to clean it before pasting?', // MISSING
		toolbar			: 'Zalijepi iz Word-a',
		title			: 'Zalijepi iz Word-a',
		error			: 'It was not possible to clean up the pasted data due to an internal error' // MISSING
	},

	pasteText :
	{
		button	: 'Zalijepi kao obièan tekst',
		title	: 'Zalijepi kao obièan tekst'
	},

	templates :
	{
		button			: 'Templates', // MISSING
		title			: 'Content Templates', // MISSING
		options : 'Template Options', // MISSING
		insertOption	: 'Replace actual contents', // MISSING
		selectPromptMsg	: 'Please select the template to open in the editor', // MISSING
		emptyListMsg	: '(No templates defined)' // MISSING
	},

	showBlocks : 'Show Blocks', // MISSING

	stylesCombo :
	{
		label		: 'Stil',
		panelTitle	: 'Formatting Styles', // MISSING
		panelTitle1	: 'Block Styles', // MISSING
		panelTitle2	: 'Inline Styles', // MISSING
		panelTitle3	: 'Object Styles' // MISSING
	},

	format :
	{
		label		: 'Format',
		panelTitle	: 'Format',

		tag_p		: 'Normal',
		tag_pre		: 'Formatted',
		tag_address	: 'Address',
		tag_h1		: 'Heading 1',
		tag_h2		: 'Heading 2',
		tag_h3		: 'Heading 3',
		tag_h4		: 'Heading 4',
		tag_h5		: 'Heading 5',
		tag_h6		: 'Heading 6',
		tag_div		: 'Normal (DIV)' // MISSING
	},

	div :
	{
		title				: 'Create Div Container', // MISSING
		toolbar				: 'Create Div Container', // MISSING
		cssClassInputLabel	: 'Stylesheet Classes', // MISSING
		styleSelectLabel	: 'Style', // MISSING
		IdInputLabel		: 'Id', // MISSING
		languageCodeInputLabel	: ' Language Code', // MISSING
		inlineStyleInputLabel	: 'Inline Style', // MISSING
		advisoryTitleInputLabel	: 'Advisory Title', // MISSING
		langDirLabel		: 'Language Direction', // MISSING
		langDirLTRLabel		: 'Left to Right (LTR)', // MISSING
		langDirRTLLabel		: 'Right to Left (RTL)', // MISSING
		edit				: 'Edit Div', // MISSING
		remove				: 'Remove Div' // MISSING
  	},

	iframe :
	{
		title		: 'IFrame Properties', // MISSING
		toolbar		: 'IFrame', // MISSING
		noUrl		: 'Please type the iframe URL', // MISSING
		scrolling	: 'Enable scrollbars', // MISSING
		border		: 'Show frame border' // MISSING
	},

	font :
	{
		label		: 'Font',
		voiceLabel	: 'Font', // MISSING
		panelTitle	: 'Font'
	},

	fontSize :
	{
		label		: 'Velièina',
		voiceLabel	: 'Font Size', // MISSING
		panelTitle	: 'Velièina'
	},

	colorButton :
	{
		textColorTitle	: 'Boja teksta',
		bgColorTitle	: 'Boja pozadine',
		panelTitle		: 'Colors', // MISSING
		auto			: 'Automatska',
		more			: 'Više boja...'
	},

	colors :
	{
		'000' : 'Black', // MISSING
		'800000' : 'Maroon', // MISSING
		'8B4513' : 'Saddle Brown', // MISSING
		'2F4F4F' : 'Dark Slate Gray', // MISSING
		'008080' : 'Teal', // MISSING
		'000080' : 'Navy', // MISSING
		'4B0082' : 'Indigo', // MISSING
		'696969' : 'Dark Gray', // MISSING
		'B22222' : 'Fire Brick', // MISSING
		'A52A2A' : 'Brown', // MISSING
		'DAA520' : 'Golden Rod', // MISSING
		'006400' : 'Dark Green', // MISSING
		'40E0D0' : 'Turquoise', // MISSING
		'0000CD' : 'Medium Blue', // MISSING
		'800080' : 'Purple', // MISSING
		'808080' : 'Gray', // MISSING
		'F00' : 'Red', // MISSING
		'FF8C00' : 'Dark Orange', // MISSING
		'FFD700' : 'Gold', // MISSING
		'008000' : 'Green', // MISSING
		'0FF' : 'Cyan', // MISSING
		'00F' : 'Blue', // MISSING
		'EE82EE' : 'Violet', // MISSING
		'A9A9A9' : 'Dim Gray', // MISSING
		'FFA07A' : 'Light Salmon', // MISSING
		'FFA500' : 'Orange', // MISSING
		'FFFF00' : 'Yellow', // MISSING
		'00FF00' : 'Lime', // MISSING
		'AFEEEE' : 'Pale Turquoise', // MISSING
		'ADD8E6' : 'Light Blue', // MISSING
		'DDA0DD' : 'Plum', // MISSING
		'D3D3D3' : 'Light Grey', // MISSING
		'FFF0F5' : 'Lavender Blush', // MISSING
		'FAEBD7' : 'Antique White', // MISSING
		'FFFFE0' : 'Light Yellow', // MISSING
		'F0FFF0' : 'Honeydew', // MISSING
		'F0FFFF' : 'Azure', // MISSING
		'F0F8FF' : 'Alice Blue', // MISSING
		'E6E6FA' : 'Lavender', // MISSING
		'FFF' : 'White' // MISSING
	},

	scayt :
	{
		title			: 'Spell Check As You Type', // MISSING
		opera_title		: 'Not supported by Opera', // MISSING
		enable			: 'Enable SCAYT', // MISSING
		disable			: 'Disable SCAYT', // MISSING
		about			: 'About SCAYT', // MISSING
		toggle			: 'Toggle SCAYT', // MISSING
		options			: 'Options', // MISSING
		langs			: 'Languages', // MISSING
		moreSuggestions	: 'More suggestions', // MISSING
		ignore			: 'Ignore', // MISSING
		ignoreAll		: 'Ignore All', // MISSING
		addWord			: 'Add Word', // MISSING
		emptyDic		: 'Dictionary name should not be empty.', // MISSING

		optionsTab		: 'Options', // MISSING
		allCaps			: 'Ignore All-Caps Words', // MISSING
		ignoreDomainNames : 'Ignore Domain Names', // MISSING
		mixedCase		: 'Ignore Words with Mixed Case', // MISSING
		mixedWithDigits	: 'Ignore Words with Numbers', // MISSING

		languagesTab	: 'Languages', // MISSING

		dictionariesTab	: 'Dictionaries', // MISSING
		dic_field_name	: 'Dictionary name', // MISSING
		dic_create		: 'Create', // MISSING
		dic_restore		: 'Restore', // MISSING
		dic_delete		: 'Delete', // MISSING
		dic_rename		: 'Rename', // MISSING
		dic_info		: 'Initially the User Dictionary is stored in a Cookie. However, Cookies are limited in size. When the User Dictionary grows to a point where it cannot be stored in a Cookie, then the dictionary may be stored on our server. To store your personal dictionary on our server you should specify a name for your dictionary. If you already have a stored dictionary, please type its name and click the Restore button.', // MISSING

		aboutTab		: 'About' // MISSING
	},

	about :
	{
		title		: 'About CKEditor', // MISSING
		dlgTitle	: 'About CKEditor', // MISSING
		help	: 'Check $1 for help.', // MISSING
		userGuide : 'CKEditor User\'s Guide', // MISSING
		moreInfo	: 'For licensing information please visit our web site:', // MISSING
		copy		: 'Copyright &copy; $1. All rights reserved.' // MISSING
	},

	maximize : 'Maximize', // MISSING
	minimize : 'Minimize', // MISSING

	fakeobjects :
	{
		anchor		: 'Anchor', // MISSING
		flash		: 'Flash Animation', // MISSING
		iframe		: 'IFrame', // MISSING
		hiddenfield	: 'Hidden Field', // MISSING
		unknown		: 'Unknown Object' // MISSING
	},

	resize : 'Drag to resize', // MISSING

	colordialog :
	{
		title		: 'Select color', // MISSING
		options	:	'Color Options', // MISSING
		highlight	: 'Highlight', // MISSING
		selected	: 'Selected Color', // MISSING
		clear		: 'Clear' // MISSING
	},

	toolbarCollapse	: 'Collapse Toolbar', // MISSING
	toolbarExpand	: 'Expand Toolbar', // MISSING

	toolbarGroups :
	{
		document : 'Document', // MISSING
		clipboard : 'Clipboard/Undo', // MISSING
		editing : 'Editing', // MISSING
		forms : 'Forms', // MISSING
		basicstyles : 'Basic Styles', // MISSING
		paragraph : 'Paragraph', // MISSING
		links : 'Links', // MISSING
		insert : 'Insert', // MISSING
		styles : 'Styles', // MISSING
		colors : 'Colors', // MISSING
		tools : 'Tools' // MISSING
	},

	bidi :
	{
		ltr : 'Text direction from left to right', // MISSING
		rtl : 'Text direction from right to left' // MISSING
	},

	docprops :
	{
		label : 'Document Properties', // MISSING
		title : 'Document Properties', // MISSING
		design : 'Design', // MISSING
		meta : 'Meta Tags', // MISSING
		chooseColor : 'Choose', // MISSING
		other : 'Other...', // MISSING
		docTitle :	'Page Title', // MISSING
		charset : 	'Character Set Encoding', // MISSING
		charsetOther : 'Other Character Set Encoding', // MISSING
		charsetASCII : 'ASCII', // MISSING
		charsetCE : 'Central European', // MISSING
		charsetCT : 'Chinese Traditional (Big5)', // MISSING
		charsetCR : 'Cyrillic', // MISSING
		charsetGR : 'Greek', // MISSING
		charsetJP : 'Japanese', // MISSING
		charsetKR : 'Korean', // MISSING
		charsetTR : 'Turkish', // MISSING
		charsetUN : 'Unicode (UTF-8)', // MISSING
		charsetWE : 'Western European', // MISSING
		docType : 'Document Type Heading', // MISSING
		docTypeOther : 'Other Document Type Heading', // MISSING
		xhtmlDec : 'Include XHTML Declarations', // MISSING
		bgColor : 'Background Color', // MISSING
		bgImage : 'Background Image URL', // MISSING
		bgFixed : 'Non-scrolling (Fixed) Background', // MISSING
		txtColor : 'Text Color', // MISSING
		margin : 'Page Margins', // MISSING
		marginTop : 'Top', // MISSING
		marginLeft : 'Left', // MISSING
		marginRight : 'Right', // MISSING
		marginBottom : 'Bottom', // MISSING
		metaKeywords : 'Document Indexing Keywords (comma separated)', // MISSING
		metaDescription : 'Document Description', // MISSING
		metaAuthor : 'Author', // MISSING
		metaCopyright : 'Copyright', // MISSING
		previewHtml : '<p>This is some <strong>sample text</strong>. You are using <a href="javascript:void(0)">CKEditor</a>.</p>' // MISSING
	}
};
