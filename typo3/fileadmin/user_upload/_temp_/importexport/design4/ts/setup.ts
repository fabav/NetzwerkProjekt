# ---------------------------------------------- #
#	Config 
# ---------------------------------------------- #
#config.disableImgBorderAttr = 1
config {
	doctype = {$doctype}
    xmlprologue = none
	xhtml_cleaning = none
	htmlTag_setParams = none
}

[globalString = IENV:HTTP_HOST=t3-design.site]
	config.baseURL = http://t3-design.site
[globalString = IENV:HTTP_HOST=*t3-design.ch]
	config {
			baseURL = http://www.t3-design.ch/
			tx_realurl_enable = 0
	}	
[global]

# ---------------------------------------------- #


# ---------------------------------------------- #
#	Javascript	
# ---------------------------------------------- #

config.compressJs = 1
page.includeJS {
   jquery = {$design_path}js/jquery-1.10.2.min.js
}

page.includeJSFooter {
   t3-design = {$design_path}js/scripts.js   
}

# ---------------------------------------------- #


# ---------------------------------------------- #
#	Css	
# ---------------------------------------------- #

config.compressCss = 1
#config.concatenateCss = 1


page.includeCSS {
   awesomefont = {$design_path}css/font-awesome.min.css
   style = {$design_path}css/style.css      
  
}

[globalVar = TSFE:page|backend_layout = 5]
	page.includeCSS {
	   index = {$design_path}css/startpage.css
	}
[global]

# ---------------------------------------------- #



# ---------------------------------------------- #
#	Footer Copyright
# ---------------------------------------------- #

lib.copyright1 = TEXT
lib.copyright1.value = {$text.copyright1}
lib.copyright2 = TEXT
lib.copyright2.value = {$text.copyright2}
  
# ---------------------------------------------- #



# ---------------------------------------------- #
#	Topnavigation
# ---------------------------------------------- #

	lib.topnav = HMENU
	lib.topnav {
	  excludeUidList = 18,37
	  1 = TMENU
	  1 {
	  	
		  
	    expAll = 0
	    noBlur=2
	    NO.allWrap = <li>|</li>
		NO.ATagTitle.field = abstract // description // title
		NO.stdWrap.field = title
		

	    ACT = 1
	    ACT.allWrap = <li class="current_page_item">|</li>
	    ACT.ATagTitle.field = abstract // description // title
		ACT.ATagParams = class="active"	    
		ACT.stdWrap.field = title
	wrap = <ul>|</ul>
  }
}


# ---------------------------------------------- #


# ---------------------------------------------- #
# Logo 
# ---------------------------------------------- #

lib.logo = TEXT
#lib.logo.value = <img class="logo" src="{$design_path}img/logo.png" alt="Typo3 Freelancer" title="Typo3 Freelancer" />
lib.logo.value = T3-Design.ch
lib.logo.wrap (
			<span class="icon icon-group"></span>
			<h1>|</h1>
			<span>Ihr Typo3 Freelancer</span>
			)
lib.logo.typolink.parameter=54
			      		
# ---------------------------------------------- #


# ---------------------------------------------- #
# HTML Template aus Backend Layout wählen
# ---------------------------------------------- #
page = PAGE
page.10 = FLUIDTEMPLATE
page.10 {
	file.stdWrap.cObject = CASE
	file.stdWrap.cObject {
		key.data = levelfield:-1, backend_layout_next_level, slide
		key.override.field = backend_layout
		default = TEXT
		default.value = {$design_path}html/index.html
		# Startseite
		5 = TEXT
		5.value = {$design_path}html/index.html
		# Folgeseite
		6 = TEXT
		6.value = {$design_path}html/page.html
	}
}


page.config {
	no_cache = 1
	admPanel = 0
	inlineStyle2TempFile = 1
	#baseURL = 

	language = de
	locale_all = de_DE
	htmlTag_langKey = de	
	
	# Spam Protection
	spamProtectEmailAddresses = 2
	spamProtectEmailAddresses_atSubst = (at)

	
	disableAllHeaderCode = 0
	metaCharset = utf-8
	forceCharset = utf-8
	renderCharset = utf-8

}





 
# ---------------------------------------------- #
# Headerdata / Meta Tags
# ---------------------------------------------- #
 
config.noPageTitle = 1
 
page {

	headerData {
		19 = TEXT
		19 {
				field = title
				wrap = <title>|</title>
		}
	}	

	headerData.20 = TEXT
	headerData.20.field = description
	headerData.20.wrap = <meta name="description" content="|">
	
	headerData.21 = TEXT
	headerData.21.field = keywords
	headerData.21.wrap = <meta name="keywords" content="|">
	  
	headerData.22 = TEXT
	headerData.22.value (	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<meta name="author" content="www.t3-design.ch">
	   	<meta name="publisher" content="www.t3-design.ch">
	   	<meta name="language" content="de">
	   	<meta name="robots" content="index, follow">
	   	<meta name="revisit-after" content="7 days">
	   	<meta name="copyright" content="www.t3-design.ch">
	   
	   
	   <!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]--> 
	   
	)  
}
# ---------------------------------------------- #



# ---------------------------------------------- #
# Tempaltemarker setzen
# ---------------------------------------------- #

lib.content_main < styles.content.get

lib.content_left < styles.content.get
lib.content_left.select.where = colPos = 1

lib.content_middle < styles.content.get
lib.content_middle.select.where = colPos = 2

lib.content_right < styles.content.get
lib.content_right.select.where = colPos = 3

#	 	Page Config								 #
# ---------------------------------------------- #