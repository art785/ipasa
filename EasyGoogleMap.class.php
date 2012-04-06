<?php
/**
 * @package: 	Google Map Class
 * @author: 	Mitchelle C. Pascual (mitch.pascual at gmail dot com)
 *				http://ordinarywebguy.wordpress.com
 * @date: 		March 27, 2007
 * @warning:	Use this class at your own risk. Not recommended to set more than 20 addresses at a time.
 */
class EasyGoogleMap {

	/**
	 * @desc: 	Google Map Key
	 * @type: 	string
	 * @access: private
	 */
	var $mMapKey;

	/**
	 * @desc: 	Map Place Holder Sizes
	 * @type: 	int
	 * @access:	private
	 */
	var $mMapWidth;
	var $mMapHeight;

	/**
	 * @desc: 	Map Zoom Value
	 * @type: 	int
	 * @access:	private
	 */
	var $mMapZoom;
	
	/**
	 * @desc: 	Address Data Array Holder
	 * @type: 	array
	 * @access: private
	 */
	var $mAddressArr =  array();

	/**
	 * @desc: 	Info Window Array Holder
	 * @type: 	array
	 * @access: private
	 */
	var $mInfoWindowTextArr = array();

	/**
	 * @desc: 	Side Click Array Holder
	 * @type: 	array
	 * @access: private
	 */
	var $mSideClickArr = array();

	/**
	 * @desc: 	Var Holder of Marker Icon Color Scheme
	 * @type: 	string
	 * @access: private
	 */
	var $mDefColor;
	
	/**
	 * @desc: 	Arrays of Marker Icon Color Scheme
	 * @type: 	array
	 * @access: private
	 */
	var $mIconColor = array(
							'PACIFICA'		=>'pacifica',
							'YOSEMITE'		=>'yosemite',
							'MOAB'			=>'moab',
							'GRANITE_PINE'	=>'granitepine',
							'DESERT_SPICE'	=>'desertspice',
							'CABO_SUNSET'	=>'cabosunset',
							'TAHITI_SEA'	=>'tahitisea',
							'POPPY'			=>'poppy',
							'NAUTICA'		=>'nautica',
							'DEEP_JUNGLE'	=>'deepjungle',
							'SLATE'			=>'slate'
							);

	/**
	 * @desc: 	Var Holder of Marker Icon
	 * @type: 	string
	 * @acess: 	private
	 */
	var $mDefStyle;
	
	/**
	 * @desc: 	Arrays of Marker Icon Scheme
	 * @type: 	array
	 * @access: private
	 */
	var $mIconStyle = array(
							'FLAG'		=>array(
											'DIR'				=>'flag', 
											'ICON_W'			=>31, 
											'ICON_H'			=>35, 
											'ICON_ANCHR_W'		=>4, 
											'ICON_ANCHR_H'		=>27, 
											'INFO_WIN_ANCHR_W'	=>8, 
											'INFO_WIN_ANCHR_H'	=>3
											),
											
							'GT_FLAT'	=>array(
											'DIR'				=>'traditionalflat', 
											'ICON_W'			=>34, 
											'ICON_H'			=>35, 
											'ICON_ANCHR_W'		=>9, 
											'ICON_ANCHR_H'		=>23, 
											'INFO_WIN_ANCHR_W'	=>19, 
											'INFO_WIN_ANCHR_H'	=>0
											),
											
							'GT_PILLOW'	=>array(
											'DIR'				=>'traditionalpillow', 
											'ICON_W'			=>34, 
											'ICON_H'			=>35, 
											'ICON_ANCHR_W'		=>9, 
											'ICON_ANCHR_H'		=>23, 
											'INFO_WIN_ANCHR_W'	=>19, 
											'INFO_WIN_ANCHR_H'	=>0
											),
											
							'HOUSE'		=>array(
											'DIR'				=>'house', 
											'ICON_W'			=>24, 
											'ICON_H'			=>14, 
											'ICON_ANCHR_W'		=>9, 
											'ICON_ANCHR_H'		=>13, 
											'INFO_WIN_ANCHR_W'	=>9, 
											'INFO_WIN_ANCHR_H'	=>0
											),
											
							'PIN'		=>array(
											'DIR'				=>'pin', 
											'ICON_W'			=>31, 
											'ICON_H'			=>24, 
											'ICON_ANCHR_W'		=>17, 
											'ICON_ANCHR_H'		=>22, 
											'INFO_WIN_ANCHR_W'	=>17, 
											'INFO_WIN_ANCHR_H'	=>0
											),
											
							'PUSH_PIN'	=>array(
											'DIR'				=>'pushpin', 
											'ICON_W'			=>40, 
											'ICON_H'			=>41, 
											'ICON_ANCHR_W'		=>7, 
											'ICON_ANCHR_H'		=>38, 
											'INFO_WIN_ANCHR_W'	=>26, 
											'INFO_WIN_ANCHR_H'	=>1
											),
											
							'STAR'		=>array(
											'DIR'				=>'star', 
											'ICON_W'			=>29, 
											'ICON_H'			=>39, 
											'ICON_ANCHR_W'		=>15, 
											'ICON_ANCHR_H'		=>15, 
											'INFO_WIN_ANCHR_W'	=>19, 
											'INFO_WIN_ANCHR_H'	=>7
											)
							);

	/**
	 * @desc: Var Holder of Map Control 
	 * @type: string
	 * @access: private
	 */
	var $mDefControl;
	
	var $mDefControl2;

	/**
	 * @desc: 	Arrays of Map Control Scheme
	 * @type: 	array
	 * @access: private
	 */
	var $mControl = array(
							'NONE',
							'SMALL_PAN_ZOOM',
							'LARGE_PAN_ZOOM',
							'SMALL_ZOOM'
						);

	/**
	 * @desc: 	Enable/Disable Map Continuous Zooming
	 * @type: 	boolean
	 * @acess: 	public
	 */
	var $mContinuousZoom = FALSE;

	/**
	 * @desc: 	
	 * @type: 	booleanEnable/Disable Map Double Click Zooming
	 * @access: public
	 */
	var $mDoubleClickZoom = FALSE;

	/**
	 * @desc: 	Enable/Disable Map Scale (MI/KM)
	 * @type: 	boolean
	 * @access: public
	 */
	var $mScale = TRUE;

	/**
	 * @desc: 	Enable/Disable Map Inset
	 * @type: 	boolean
	 * @acess: 	public
	 */
	var $mInset = FALSE;

	/**
	 * @desc: 	Enable/Disable Map Type (Map/Satellite/Hybrid)
	 * @type: 	boolean
	 * @acess: 	public
	 */
	var $mMapType = FALSE;

	/**
	 * @desc: 	Enable/Disable Info Window Direction Option
	 * @type: 	boolean
	 * @access: public
	 */
	#var $mDirection = TRUE;

	/**
	 * @desc: 	Index Array
	 * @type: 	int
	 * @access: private
	 */
	var $mIndex;

	/**
	 * @desc:	Constructor
	 * @param: 	string (Google Map Key)
	 * @access: public
	 * @return: void
	 */
	function EasyGoogleMap($mapKey) {
		$this->mMapKey = $mapKey;
		$this->SetMapWidth();
		$this->SetMapHeight();
		$this->SetMapZoom();
		$this->SetMarkerIconColor();
		$this->SetMarkerIconStyle();
		$this->SetMapControl();
		$this->SetMapTIPO();
		$this->mIndex = -1;
	} # end function

	/**
	 * @desc: 	Set Address(es)
	 * @param: 	string 
	 * @access: public
	 * @return: void
	 */
	function SetAddress($address) {
		$this->mIndex++;
		$this->mAddressArr[$this->mIndex] = $address;
		$this->mInfoWindowTextArr[$this->mIndex] = $address;
		$this->mSideClickArr[$this->mIndex] = $address;
	} # end function

	/**
	 * @desc: 	Set Info Window Text
	 * @param: 	string
	 * @access:	public
	 * @return: void
	 */
	function SetInfoWindowText($info) {
		$this->mInfoWindowTextArr[$this->mIndex] = $info;
	} # end function

	/**
	 * @desc: 	Set Side Click for Multiple Addresses
	 * @param: 	string
	 * @access:	public
	 * @return: void
	 */
	function SetSideClick($str) {
		$this->mSideClickArr[$this->mIndex] = $str;
	} # end function

	/**
	 * @desc: 	Set Map Width
	 * @param: 	int 
	 * @access:	public
	 * @return: void
	 */
	function SetMapWidth($width=300) {
		$this->mMapWidth = $width;
	} # end function

	/**
	 * @desc: 	Set Map Zoom
	 * @param: 	int
	 * @access:	public
	 * @return:	void
	 */
	function SetMapZoom($zoom=13) {
		$this->mMapZoom = $zoom;
	} # end function

	/**
	 * @desc: 	Set Map Height
	 * @param: 	int
	 * @access:	public
	 * @return:	void
	 */
	function SetMapHeight($height=300) {
		$this->mMapHeight = $height;
	} # end function

	/**
	 * @desc: 	Set Marker Icon Color Scheme
	 * @param: 	string [options('PACIFICA','YOSEMITE','MOAB','GRANITE_PINE','DESERT_SPICE','CABO_SUNSET','TAHITI_SEA','POPPY','NAUTICA','SLATE')]
	 * @access:	public
	 * @return: void
	 */
	function SetMarkerIconColor($colorScheme="PACIFICA") {
		$this->mDefColor = $colorScheme;
	} # end function

	/**
	 * @desc: 	Set Marker Icon Style Scheme
	 * @param: 	string [options('FLAG','GT_FLAT','GT_PILLOW','HOUSE','PIN','PUSH_PIN','STAR')]
	 * @access:	public
	 * @return: void
	 */
	function SetMarkerIconStyle($style="GT_FLAT") {
		$this->mDefStyle = $style;
	} # end function

	/**
	 * @desc: 	Set Map Control
	 * @param: 	string [options('NONE','SMALL_PAN_ZOOM','LARGE_PAN_ZOOM','SMALL_ZOOM')]
	 * @access:	public
	 * @return: void
	 */
	function SetMapControl($control="LARGE_PAN_ZOOM") {
		$this->mDefControl = $control;
	} 
	
	function SetMapTIPO($control1="TIPO") {
		$this->mDefControl2 = $control1;
	}
	
	# end function

	/**
	 * @desc: 	Generate JS Code 
	 * @param: 	string 
	 * @access: public
	 * @return: string
	 */
	function InitJs() {
        $ret = "";
		# show error if misconfigured
		$is_error = $this->CheckConf();
		if ($is_error) { 
			$ret = $is_error; 
		} else {		
			$cnt_add = count($this->mAddressArr);
			
			$color = $this->mIconColor[$this->mDefColor];
			$dir = $this->mIconStyle[$this->mDefStyle]['DIR'];
	
			$icon_w  = $this->mIconStyle[$this->mDefStyle]['ICON_W'];
			$icon_h  = $this->mIconStyle[$this->mDefStyle]['ICON_H'];
	
			$icon_anchr_w  = $this->mIconStyle[$this->mDefStyle]['ICON_ANCHR_W'];
			$icon_anchr_h  = $this->mIconStyle[$this->mDefStyle]['ICON_ANCHR_H'];
	
			$info_win_anchr_w  = $this->mIconStyle[$this->mDefStyle]['INFO_WIN_ANCHR_W'];
			$info_win_anchr_h  = $this->mIconStyle[$this->mDefStyle]['INFO_WIN_ANCHR_H'];
			
			# start of JS SCRIPT		
            $ret .= "<script type=\"text/javascript\">\n";
			$ret .= "var gmarkers = [];\n";
			$ret .= "var address = [];\n";
			$ret .= "var points = [];\n";
				
			$ret .= "if(GBrowserIsCompatible()) { \n";
			$ret .= "	var map = new GMap2(document.getElementById('map')); \n";
	
			# handle map continuous zooming
			$ret .= ($this->mContinuousZoom==TRUE)?"	map.enableContinuousZoom(); \n":"";
	
			# handle map double click zooming
			$ret .= ($this->mDoubleClickZoom==TRUE)?"	map.enableDoubleClickZoom(); \n":"";
	
			# handle map controls
			$mapCtrl = "";
			switch ($this->mDefControl) {
				case 'NONE':
					$mapCtrl = "";
					break;
					
				case 'SMALL_PAN_ZOOM':
					$mapCtrl = "map.addControl(new GSmallMapControl()); \n";
					break;
					
				case 'LARGE_PAN_ZOOM':
					$mapCtrl = "map.addControl(new GLargeMapControl()); \n";
					break;
	
				case 'SMALL_ZOOM':
					$mapCtrl = "map.addControl(new GSmallZoomControl()); \n";
					break;
				
				default;
					break;
			
			} 
			$mapCtrl2 = "";
			switch ($this->mDefControl2) {
				case 'NONE':
					$mapCtrl2 = "";
					break;
					
				case 'SMALL_PAN_ZOOM':
					$mapCtrl2 = "map.addControl(new GSmallMapControl()); \n";
					break;
					
				case 'TIPO':
					$mapCtrl2 = "map.addControl(new GMapTypeControl()); \n";
					break;
	
				case 'SMALL_ZOOM':
					$mapCtrl2 = "map.addControl(new GSmallZoomControl()); \n";
					break;
				
				default;
					break;
			
			} 
			
			
			# end switch
			$ret .= "	$mapCtrl";
			
			$ret .= "	$mapCtrl2";
			
			# handle map scale (mi/km)
			$ret .= ($this->mScale==TRUE)?"	map.addControl(new GScaleControl()); \n":"";
	
			# handle map type (map/satellite/hybrid)
			$ret .= ($this->mMapType==TRUE)?"	map.addControl(new GMapTypeControl()); \n":"";
	
			# handle map inset
			$ret .= ($this->mInset==TRUE)?"	map.addControl(new GOverviewMapControl()); \n":"";
	
			$ret .= "	var geocoder = new GClientGeocoder(); \n";
			$ret .= "	var icon = new GIcon(); \n";
			$ret .= "	icon.image = 'http://google.webassist.com/google/markers/$dir/$color.png'; \n";
			$ret .= "	icon.shadow = 'http://google.webassist.com/google/markers/$dir/shadow.png'; \n";
			$ret .= "	icon.iconSize = new GSize($icon_w,$icon_h); \n";
			$ret .= "	icon.shadowSize = new GSize($icon_w,$icon_h); \n";
			$ret .= "	icon.iconAnchor = new GPoint($icon_anchr_w,$icon_anchr_h); \n";
			$ret .= "	icon.infoWindowAnchor = new GPoint($info_win_anchr_w,$info_win_anchr_h); \n";
			$ret .= "	icon.printImage = 'http://google.webassist.com/google/markers/$dir/$color.gif'; \n";
			$ret .= "	icon.mozPrintImage = 'http://google.webassist.com/google/markers/$dir/{$color}_mozprint.png'; \n";
			$ret .= "	icon.printShadow = 'http://google.webassist.com/google/markers/$dir/shadow.gif'; \n";
			$ret .= "	icon.transparent = 'http://google.webassist.com/google/markers/$dir/{$color}_transparent.png'; \n\n";

			# loop set address(es)
			for ($i=$cnt_add-1; $i>=0; $i--) {
			
				$ret .= "	var address_$i = {\n";
				$ret .= "	  infowindowtext: '".addslashes($this->mInfoWindowTextArr[$i])."',\n";
				$ret .= "	  full: '".addslashes($this->mAddressArr[$i])."'\n";
				$ret .= "	};\n\n";

				$ret .= "	address[$i] = address_$i.infowindowtext;\n\n";
				
				$ret .= "	geocoder.getLatLng (\n";
				$ret .= "	  address_$i.full,\n";
				$ret .= "	  function(point) {\n";
				$ret .= "		if(point) {\n";
				$ret .= "		  points[$i] = point; \n";	
				$ret .= "		  map.setCenter(point, {$this->mMapZoom});\n";
				$ret .= "		  var marker = new GMarker(point, icon);\n";
				$ret .= "		  GEvent.addListener(marker, 'click', function() {\n";
				$ret .= "			marker.openInfoWindowHtml(address_$i.infowindowtext);\n";
				$ret .= "		  });\n";

				$ret .= "		  map.addOverlay(marker);\n";

				# show only info window to the first set address
				if ($i===0) 
					$ret .= "		  marker.openInfoWindowHtml(address_$i.infowindowtext);\n";
				
				$ret .= "		  gmarkers[$i] = marker;\n";

				$ret .= "		}\n";
				$ret .= "		else {\n";
				$ret .= "		  map.setCenter(new GLatLng(37.4419, -122.1419), {$this->mMapZoom});\n";
				$ret .= "		}\n";
				$ret .= "	  }\n";
				$ret .= "	); // end geocoder.getLatLng\n\n";
			
			} # end for
			$ret .= "} // end if\n\n";
			
			$ret .= "function sideClick(i) {\n";
			$ret .= "   if (gmarkers[i]) {\n";
			$ret .= "	  gmarkers[i].openInfoWindowHtml(address[i]);\n";
			$ret .= "	  map.setCenter(points[i],{$this->mMapZoom});\n";
			$ret .= "   } else {\n";
			$ret .= "	  var htstring = address[i];\n";
			$ret .= "	  var stripped = htstring.replace(/(<([^>]+)>)/ig,'');\n";
			$ret .= "	  alert('Location not found: ' +  stripped);\n";
			$ret .= "   } /*endif*/\n";
			$ret .= "} /*end function */\n";

			$ret .= "</script>\n";
		} # end if

		return $ret;
	} # end function

	/**
	 * @desc: 	Generate JS for Map Key (static)
	 * @access: public
	 * @return: string
	 */
	function GmapsKey() {
		return "<script type=\"text/javascript\" src=\"http://maps.google.com/maps?file=api&v=2&key={$this->mMapKey}\"></script>\n";	
	} # end function

	/**
	 * @desc: 	Generate Links for Multiple Addresses (static)
	 * @access: public
	 * @return: string
	 */
	function GetSideClick() {
		$ret = "";
		$loop = count($this->mAddressArr);
		for ($i=0; $i<$loop; $i++) {
			$ret .=	"<a href=\"javascript:void($i);\" onclick=\"javascript:sideClick($i);\">{$this->mSideClickArr[$i]}</a><br />\n";
		} # end for

		return $ret;
	} # end function

	/**
	 * @desc: 	Generate Map Holder/Container (static)
	 * @access: public
	 * @return: string
	 */
	function MapHolder() {
		return "<div id=\"map\" style=\"width: ".$this->mMapWidth."px; height: ".$this->mMapHeight."px;\"></div>";
	} # end function

	/**
	 * @desc: 	Generate Unloading Script for Google Map (static)
	 * @access: public
	 * @return: string
	 */
	function UnloadMap() {
		return '<script type="text/javascript">window.onunload = function() { GUnload(); }</script>';
	} # end function

	/**
	 * @desc: 	Check Passed Method Parameters
	 * @access: private
	 * @return: string
	 */
	function CheckConf() {
		$ret = "";
		# map height and width
		if (!is_numeric($this->mMapWidth) || !is_numeric($this->mMapHeight)) 
			$ret .= "<h1>INVALID SetMapWidth() OR SetMapHeight() PARAMETER</h1><br />\n";		
		
		# map control
		if (!in_array($this->mDefControl, $this->mControl)) {
			$ret .= "<h1>INVALID setMapControl() PARAMETER:  $this->mDefControl</h1><br />\n";
			$ret .= "<b>POSSIBLE PARAMETER VALUES: </b><br />\n";
			foreach ($this->mControl as $option=>$value) {
				$ret .= "=>'$option' <br />\n";
			} # end foreach
		} # end if

		# color
		if (!array_key_exists($this->mDefColor, $this->mIconColor)) {
			$ret .= "<h1>INVALID setMarkerIconColor() PARAMETER:  $this->mDefColor</h1><br />\n";
			$ret .= "<b>POSSIBLE PARAMETER VALUES: </b><br />\n";
			foreach ($this->mIconColor as $option=>$value) {
				$ret .= "=>'$option' <br />\n";
			} # end foreach
		} # end if
			
		# style
		if (!array_key_exists($this->mDefStyle, $this->mIconStyle)) {
			$ret .= "<h1>INVALID setMarkerIconStyle() PARAMETER: $this->mDefStyle</h1><br />\n";
			$ret .= "<b>POSSIBLE PARAMETER VALUES: </b><br />\n";
			foreach ($this->mIconStyle as $option=>$value) {
				$ret .= "=>'$option' <br />\n";
			} # end foreach
		} # end if
	
		return $ret;
	} # end function
} # end class
?>