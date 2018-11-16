<?php

# Class implementing the Campop online atlas
require_once ('online-atlas/onlineAtlas.php');
class economiespast extends onlineAtlas
{
	# Function to assign defaults additional to the general application defaults
	public function defaults ()
	{
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
			'datasets' => array (1600, 1660, 1710, 1755, 1785, 1851, 1861, 1881, 1911, /* 2001, */ 2011),
			
			// More detailed datasets when close in
			'closeDatasets' => array (1851, 1861, 1881, 1901, 1911),
			'closeName' => 'parish',
			'closeZoom' => 10,
			'closeField' => 'PARISH',
			'farField' => 'SUBDIST',
			
			// Value representing 'Unknown' and the string it is converted to
			'valueUnknown' => 1000,
			
			// Fields
			'defaultField' => 'PShare',
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
				'PShare' => array (
					'label' => 'Primary sector share of male workforce',
					'description' => '',
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
				),
				'SecShare' => array (
					'label' => 'Secondary sector share of male workforce',
					'description' => "Secondary sector's share of male workforce",
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
				),
				'TShare' => array (
					'label' => 'Tertiary sector share of male workforce',
					'description' => '',
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
				),
				'AgShare' => array (
					'label' => 'Agriculture share of male workforce',
					'description' => '',
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
				),
				'MineShare' => array (
					'label' => 'Mining share of male workforce',
					'description' => '',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20-30, 30+',
				),
				'CloShare' => array (
					'label' => 'Clothing share of male workforce',
					'description' => '',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20-30, 30+',
				),
				'ShoeShare' => array (
					'label' => 'Shoemaking share of male workforce',
					'description' => '',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20+',
				),
				'MetShare' => array (
					'label' => 'Metal trade share of male workforce',
					'description' => '',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20-30, 30+',
				),
				'TextShare' => array (
					'label' => 'Textiles share of male workforce',
					'description' => '',
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60+',
				),
				'BldShare' => array (
					'label' => 'Building and construction share of male workforce',
					'description' => '',
					'intervals' => '0, 0-5, 5-10, 10-15, 15-20, 20-25, 25-30, 30+',
				),
				'SelShare' => array (
					'label' => 'Dealer and seller share of male workforce',
					'description' => '',
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15+',
				),
				'SPShare' => array (
					'label' => 'Service and profession share of male workforce',
					'description' => '',
					'intervals' => '0, 0-5, 5-10, 10-15, 15-20, 20-30, 30-40, 40+',
				),
				'TraShare' => array (
					'label' => 'Transport share of male workforce',
					'description' => '',
					'intervals' => '0-2, 2-5, 5-10, 10-15, 15-20, 20+',
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
		# Return the SQL
		return $sql = "
			  /* Domain-specific fields */
			  
			  `REGCNTY` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[Unknown county name]' COMMENT 'County',
			  `SUBDIST` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[Unknown sub-district name]' COMMENT 'Sub-district',
			  `PARISH` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '[Unknown parish name]' COMMENT 'Parish',
			  `PShare` DECIMAL(14,7) NOT NULL COMMENT 'Primary sector share of male workforce',
			  `SecShare` DECIMAL(14,7) NOT NULL COMMENT 'Secondary sector\'s share of male workforce',
			  `TShare` DECIMAL(14,7) NOT NULL COMMENT 'Tertiary sector share of male workforce',
			  `AgShare` DECIMAL(14,7) NOT NULL COMMENT 'Agriculture share of male workforce',
			  `MineShare` DECIMAL(14,7) NOT NULL COMMENT 'Mining share of male workforce',
			  `CloShare` DECIMAL(14,7) NOT NULL COMMENT 'Clothing share of male workforce',
			  `ShoeShare` DECIMAL(14,7) NOT NULL COMMENT 'Shoemaking share of male workforce',
			  `MetShare` DECIMAL(14,7) NOT NULL COMMENT 'Metal trade share of male workforce',
			  `TextShare` DECIMAL(14,7) NOT NULL COMMENT 'Textiles share of male workforce',
			  `BldShare` DECIMAL(14,7) NOT NULL COMMENT 'Building and construction share of male workforce',
			  `SelShare` DECIMAL(14,7) NOT NULL COMMENT 'Dealer and seller share of male workforce',
			  `SPShare` DECIMAL(14,7) NOT NULL COMMENT 'Service and profession share of male workforce',
			  `TraShare` DECIMAL(14,7) NOT NULL COMMENT 'Transport share of male workforce',
		";
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
