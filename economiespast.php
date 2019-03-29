<?php

# Class implementing the Campop online atlas
require_once ('online-atlas/onlineAtlas.php');
class economiespast extends onlineAtlas
{
	# Function to assign defaults additional to the general application defaults
	public function defaults ()
	{
		# Define unavailability
		$unavailable = array (
			'_F' => array (1851, 1861, 1881, 1891, 1901, 1911),
			'_B' => array (1851, 1861, 1881, 1891, 1901, 1911),
		);
		
		# Add implementation defaults
		$defaults = array (
			
			// Application name
			'applicationName' => 'Economies Past',
			'pageHeader' => 'Economies Past <img src="/images/beta.png" height="50" />',
			
			// Database
			'database' => 'economiespast',
			'username' => 'economiespast',
			'password' => NULL,
			
			// Style
			'bodyClass' => 'campl-theme-0',
			
			// Geocoder
			'geocoderApiKey' => NULL,		// Obtain at https://www.cyclestreets.net/api/apply/
			
			// First run message
			'firstRunMessageHtml' =>
				  '<p><strong>Welcome to Economies Past, from CAMPOP</strong></p>'
				. '<p>The site enables you to explore changing patterns of work from 1600 - 2011.</p>'
				. '<p>Please note that various improvements are still being made to the site.</p>',
			
			// Download filename base
			'downloadFilenameBase' => false,
			
			// Send intervals rather than exact values
			'intervalsMode' => true,
			
			// Datasets
			'datasets' => array (1600, 1660, 1710, 1755, 1785, 1851, 1861, 1881, 1891, 1901, 1911, 2011),
			
			// Defaults
			'defaultDataset' => 1710,
			'defaultField' => 'Sec',
			'defaultVariations' => array (
				'Gender'	=> 'M',
				'Age'		=> 'A',
			),
			
			// More detailed datasets when close in
			'closeDatasets' => array (1851, 1861, 1881, 1891, 1901, 1911),
			'closeName' => 'parish',
			'closeZoom' => 10,
			'closeField' => 'PARISH',
			'farField' => 'SUBDIST',
			
			// Value representing 'Unknown' and the string it is converted to
			'valueUnknown' => 1000,
			
			# Define variations suffixes list, as suffix => label
			'variations' => array (
				'Gender' => array (
					'M' => 'Male',
					'F' => 'Female',
					'B' => 'Both',
				),
				'Age' => array (
					'A' => 'Adults',
					'OC' => 'Children (13-14)',
					'YC' => 'Children (10-12)',
				),
			),
			
			// Fields
			'expandableHeadings' => false,
			'fields' => array (
				
				// General fields
				'year' => array (
					'label' => 'Year',
					'description' => 'Year',
					'intervals' => '',
					'general' => true,
				),
				'REGCNTY' => array (
					'label' => 'Registration county',
					'description' => 'Registration county',
					'intervals' => '',
					'general' => true,
				),
				'SUBDIST' => array (
					'label' => 'Sub-district',
					'description' => 'Sub-district',
					'intervals' => '',
					'general' => true,
				),
				'PARISH' => array (
					'label' => 'Parish',
					'description' => 'Parish',
					'intervals' => '',
					'general' => true,
				),
				
				'_' => array (
					'label' => '[Show background map only]',
					'description' => 'Removes data from the map, showing only the background',
					'intervals' => '',
				),
				
				// Data fields
				'P' => array (
					'label' => 'Primary sector share of workforce',
					'description' => 'The share of the labour force in the primary sector',
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
					'grouping' => 'Primary',
					'unavailable' => $unavailable,
				),
				'Ag' => array (
					'label' => 'Agriculture share of workforce',
					'description' => 'The share of the labour force in agriculture',
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
					'grouping' => 'Primary',
					'unavailable' => $unavailable,
				),
				'Mine' => array (
					'label' => 'Mining share of workforce',
					'description' => 'The share of the labour force in mining',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20-30, 30+',
					'grouping' => 'Primary',
					'unavailable' => $unavailable,
				),
				'Sec' => array (
					'label' => 'Secondary sector share of workforce',
					'description' => 'The share of the labour force in the secondary sector',
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
					'grouping' => 'Secondary',
					'unavailable' => $unavailable,
				),
				'Clo' => array (
					'label' => 'Clothing share of workforce',
					'description' => 'The share of the labour force employed in making clothes',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20-30, 30+',
					'grouping' => 'Secondary',
					'unavailable' => $unavailable,
				),
				'Shoe' => array (
					'label' => 'Shoemaking share of workforce',
					'description' => 'The share of the labour force employed in shoemaking',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20+',
					'grouping' => 'Secondary',
					'unavailable' => $unavailable,
				),
				'Met' => array (
					'label' => 'Metal trade share of workforce',
					'description' => 'The share of the labour force employed in metal manufacture',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20-30, 30+',
					'grouping' => 'Secondary',
					'unavailable' => $unavailable,
				),
				'Text' => array (
					'label' => 'Textiles share of workforce',
					'description' => 'The share of the labour force employed in textiles',
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60+',
					'grouping' => 'Secondary',
					'unavailable' => $unavailable,
				),
				'Bld' => array (
					'label' => 'Building and construction share of workforce',
					'description' => 'The share of the labour force employed in construction',
					'intervals' => '0, 0-5, 5-10, 10-15, 15-20, 20-25, 25-30, 30+',
					'grouping' => 'Secondary',
					'unavailable' => $unavailable,
				),
				'T' => array (
					'label' => 'Tertiary sector share of workforce',
					'description' => 'The share of the labour force in the tertiary sector',
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
					'grouping' => 'Tertiary',
					'unavailable' => $unavailable,
				),
				'Sel' => array (
					'label' => 'Dealer and seller share of workforce',
					'description' => 'The share of the labour force employed in wholesale and retail employment',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15+',
					'grouping' => 'Tertiary',
					'unavailable' => $unavailable,
				),
				'SP' => array (
					'label' => 'Service and profession share of workforce',
					'description' => 'The share of the labour force employed in miscellaneous services and professions',
					'intervals' => '0, 0-5, 5-10, 10-15, 15-20, 20-30, 30-40, 40+',
					'grouping' => 'Tertiary',
					'unavailable' => $unavailable,
				),
				'Dom' => array (
					'label' => 'Domestic service',
					'description' => 'The share of the labour force in domestic service',
					'intervals' => '0-2, 2-5, 5-10, 10-15, 15-20, 20+',
					'grouping' => 'Tertiary',
					'unavailable' => $unavailable,
				),
				'Tra' => array (
					'label' => 'Transport share of workforce',
					'description' => 'The share of the labour force in transport',
					'intervals' => '0-2, 2-5, 5-10, 10-15, 15-20, 20+',
					'grouping' => 'Tertiary',
					'unavailable' => $unavailable,
				),
				'LFPR' => array (
					'label' => 'Labour force participation rate',
					'description' => 'The labour force participation rate',
					'intervals' => '0-2, 2-5, 5-10, 10-15, 15-20, 20+',
					'grouping' => 'Participation rate',
					'unavailable' => $unavailable,
				),
			),
			
			// Colours based on: https://www.campop.geog.cam.ac.uk/research/projects/transport/data/population.html
			'colourStopsIntervalsConsistent' => false,
			'colourStops' => array (
				'#ffffff',
				'#ffffbe',
				'#ffebaf',
				'#ffff73',
				'#d1ff73',
				'#a3ff73',
				'#ffaa00',
				'#ff7f7f',
				'#e64c00',
				'#df73ff',
				'#4c0073',
				'#000000',
			),
		);
		
		# Merge in the default defaults
		$defaults += parent::defaults ();
		
		# Return the defaults
		return $defaults;
	}
	
	
	# Database structure
	public function databaseStructureSpecificFields ()
	{
		# Compile the SQL
		$sql = "
			  /* Domain-specific fields */
			  
			  `REGCNTY` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[Unknown county name]' COMMENT 'County',
			  `SUBDIST` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[Unknown sub-district name]' COMMENT 'Sub-district',
			  `PARISH` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[Unknown parish name]' COMMENT 'Parish',
		";
		
		# Compile variations; although the same routine is done in onlineAtlas::fieldsVariationsProcessed() that is run after databaseStructure, so has to be repeated here
		$variationsFlattened = application::array_key_combinations ($this->settings['variations'], '_', ' - ');
		
		# Add each data field; NB cannot use $this->fieldsExpanded as databaseStructure() is executed before mainPreActions()/main()
		foreach ($this->settings['fields'] as $field => $attributes) {
			if (!isSet ($attributes['general']) && ($field != '_')) {
				
				# Work through the variations in combinations
				foreach ($variationsFlattened as $suffix => $label) {
					$sql .= "\n\t\t\t  `{$field}_{$suffix}` DECIMAL(14,7) NULL COMMENT '" . str_replace ("'", "\\'", $attributes['label'] . ' (' . $label . ')') . "',";
				}
			}
		}
		
		# Return the SQL
		return $sql;
	}
	
	
	# Additional initialisation
	public function main ()
	{
		# Determine the extended application (repository) directory
		$this->extendedApplicationRoot = dirname (__FILE__);
		
		# Set the exports directory
		$this->settings['exportsDirectory'] = "{$this->extendedApplicationRoot}/exports/";
		
		# Run base main
		parent::main ();
		
	}
	
	
	# Home page
	public function home ($aboutPath = false, $additionalCss = false)
	{
		# Define additional CSS
		$additionalCss = '
			nav {width: 380px;}
			.leaflet-control-layers, .leaflet-control-attribution, .summary {right: 380px;}
			ul.rangelabels.smalllabels li {font-size: 0.8em; border-right: 1px solid transparent;}
			nav form div.radiobuttons h4 {margin-top: 0.5em; margin-bottom: 0.2em;}
		';
		
		return parent::home ($this->extendedApplicationRoot, $additionalCss);
	}
	
	
	# About page
	public function about ($path = false)
	{
		return parent::about ($this->extendedApplicationRoot);
	}
	
	
	# Resources page
	public function resources ($path = false)
	{
		return parent::resources ($this->extendedApplicationRoot);
	}
	
	
	# Acknowledgements page
	public function acknowledgements ($path = false)
	{
		return parent::acknowledgements ($this->extendedApplicationRoot);
	}
	
	
	# Contacts page
	public function contacts ($path = false)
	{
		return parent::contacts ($this->extendedApplicationRoot);
	}
}

?>
