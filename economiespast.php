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
			'defaultVariation' => '_M',
			
			// More detailed datasets when close in
			'closeDatasets' => array (1851, 1861, 1881, 1891, 1901, 1911),
			'closeName' => 'parish',
			'closeZoom' => 10,
			'closeField' => 'PARISH',
			'farField' => 'SUBDIST',
			
			// Value representing 'Unknown' and the string it is converted to
			'valueUnknown' => 1000,
			
			# Define variations suffixes list, as suffix => label
			'variationsLabel' => 'Gender',
			'variations' => array (
				'_M' => 'Male',
				'_F' => 'Female',
				'_B' => 'Both',
			),
			
			// Fields
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
					'label' => 'Primary sector share of adult workforce',
					'description' => '',
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
					'unavailable' => $unavailable,
				),
				'Sec' => array (
					'label' => 'Secondary sector share of adult workforce',
					'description' => "Secondary sector's share of adult workforce",
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
					'unavailable' => $unavailable,
				),
				'T' => array (
					'label' => 'Tertiary sector share of adult workforce',
					'description' => '',
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
					'unavailable' => $unavailable,
				),
				'Ag' => array (
					'label' => 'Agriculture share of adult workforce',
					'description' => '',
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
					'unavailable' => $unavailable,
				),
				'Mine' => array (
					'label' => 'Mining share of adult workforce',
					'description' => '',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20-30, 30+',
					'unavailable' => $unavailable,
				),
				'Clo' => array (
					'label' => 'Clothing share of adult workforce',
					'description' => '',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20-30, 30+',
					'unavailable' => $unavailable,
				),
				'Shoe' => array (
					'label' => 'Shoemaking share of adult workforce',
					'description' => '',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20+',
					'unavailable' => $unavailable,
				),
				'Met' => array (
					'label' => 'Metal trade share of adult workforce',
					'description' => '',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20-30, 30+',
					'unavailable' => $unavailable,
				),
				'Text' => array (
					'label' => 'Textiles share of adult workforce',
					'description' => '',
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60+',
					'unavailable' => $unavailable,
				),
				'Bld' => array (
					'label' => 'Building and construction share of adult workforce',
					'description' => '',
					'intervals' => '0, 0-5, 5-10, 10-15, 15-20, 20-25, 25-30, 30+',
					'unavailable' => $unavailable,
				),
				'Sel' => array (
					'label' => 'Dealer and seller share of adult workforce',
					'description' => '',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15+',
					'unavailable' => $unavailable,
				),
				'SP' => array (
					'label' => 'Service and profession share of adult workforce',
					'description' => '',
					'intervals' => '0, 0-5, 5-10, 10-15, 15-20, 20-30, 30-40, 40+',
					'unavailable' => $unavailable,
				),
				'Tra' => array (
					'label' => 'Transport share of adult workforce',
					'description' => '',
					'intervals' => '0-2, 2-5, 5-10, 10-15, 15-20, 20+',
					'unavailable' => $unavailable,
				),
				'Dom' => array (
					'label' => 'Domestic service',
					'description' => '',
					'intervals' => '0-2, 2-5, 5-10, 10-15, 15-20, 20+',
					'unavailable' => $unavailable,
				),
				'LFPR' => array (
					'label' => 'Labour force participation rate',
					'description' => '',
					'intervals' => '0-2, 2-5, 5-10, 10-15, 15-20, 20+',
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
		
		# Add each data field; NB cannot use $this->fieldsExpanded as databaseStructure() is executed before mainPreActions()/main()
		foreach ($this->settings['fields'] as $field => $attributes) {
			if (!isSet ($attributes['general']) && ($field != '_')) {
				foreach ($this->settings['variations'] as $variationSuffix => $variationLabel) {
					$sql .= "\n\t\t\t  `{$field}{$variationSuffix}` DECIMAL(14,7) NULL COMMENT '" . str_replace ("'", "\\'", $attributes['label'] . ' (' . $variationLabel . ')') . "',";
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
	public function home ($aboutPath = false)
	{
		return parent::home ($this->extendedApplicationRoot);
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
