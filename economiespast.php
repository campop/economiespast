<?php

# Class implementing the Campop online atlas
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
		
		# Define an additional legend value for use below
		$descriptionLegendSuffix = ' (<abbr title="Workers in the selected population group and the selected occupational category, divided by workers in the selected population group.">% of the labour force<abbr>)';
		
		# Add implementation defaults
		$defaults = array (
			
			// Application name
			'applicationName' => 'Economies Past map',
			'pageHeader' => 'Economies Past <img src="' . $this->baseUrl . '/images/beta.png" height="50" />',
			
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
			
			// About page
			'aboutFile' => $_SERVER['DOCUMENT_ROOT'] . '/about/index.html',
			
			// Download filename base, i.e. CSV export
			'downloadFilenameBase' => false,
			
			// PDF map links
			'pdfLink' => true,
			
			// Send intervals rather than exact values
			'intervalsMode' => true,
			
			// Datasets
			'datasets' => array (1600, 1660, 1710, 1755, 1785, 1817, 1851, 1861, 1881, 1891, 1901, 1911, 2011),
			
			// Defaults
			'defaultDataset' => 1851,
			'defaultField' => 'LFPR',
			'defaultVariations' => array (
				'Gender'	=> 'F',
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
			'valueUnknownString' => 'No data',
			
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
				'LFPR' => array (
					'label' => 'Labour force participation rate',
					'description' => 'The labour force participation rate',
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
					'unavailable' => $unavailable,
				),
				'P' => array (
					'label' => 'Primary sector',
					'description'           => 'The share of the labour force in the primary sector (%)',
					'descriptionLegendHtml' => 'The share of the labour force in the primary sector' . $descriptionLegendSuffix,
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
					'grouping' => 'Primary - Labour force share',
					'unavailable' => $unavailable,
				),
				'Ag' => array (
					'label' => 'Agriculture',
					'description'           => 'The share of the labour force in agriculture (%)',
					'descriptionLegendHtml' => 'The share of the labour force in agriculture' . $descriptionLegendSuffix,
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
					'grouping' => 'Primary - Labour force share',
					'unavailable' => $unavailable,
				),
				'Mine' => array (
					'label' => 'Mining',
					'description'           => 'The share of the labour force in mining (%)',
					'descriptionLegendHtml' => 'The share of the labour force in mining' . $descriptionLegendSuffix,
					'intervals' => '0, 0-1, 1-2, 2-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60+',
					'grouping' => 'Primary - Labour force share',
					'unavailable' => $unavailable,
				),
				'Sec' => array (
					'label' => 'Secondary sector',
					'description'           => 'The share of the labour force in the secondary sector (%)',
					'descriptionLegendHtml' => 'The share of the labour force in the secondary sector' . $descriptionLegendSuffix,
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
					'grouping' => 'Secondary - Labour force share',
					'unavailable' => $unavailable,
				),
				'Clo' => array (
					'label' => 'Clothing',
					'description'           => 'The share of the labour force employed in making clothes (%)',
					'descriptionLegendHtml' => 'The share of the labour force employed in making clothes' . $descriptionLegendSuffix,
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20-30, 30-40, 40-50, 50-60, 60+',
					'grouping' => 'Secondary - Labour force share',
					'unavailable' => $unavailable,
				),
				'Shoe' => array (
					'label' => 'Shoemaking',
					'description'           => 'The share of the labour force employed in shoemaking (%)',
					'descriptionLegendHtml' => 'The share of the labour force employed in shoemaking' . $descriptionLegendSuffix,
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20+',
					'grouping' => 'Secondary - Labour force share',
					'unavailable' => $unavailable,
				),
				'Met' => array (
					'label' => 'Metal trade',
					'description'           => 'The share of the labour force employed in metal manufacture (%)',
					'descriptionLegendHtml' => 'The share of the labour force employed in metal manufacture' . $descriptionLegendSuffix,
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20-30, 30+',
					'grouping' => 'Secondary - Labour force share',
					'unavailable' => $unavailable,
				),
				'Text' => array (
					'label' => 'Textiles',
					'description'           => 'The share of the labour force employed in textiles (%)',
					'descriptionLegendHtml' => 'The share of the labour force employed in textiles' . $descriptionLegendSuffix,
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60+',
					'grouping' => 'Secondary - Labour force share',
					'unavailable' => $unavailable,
				),
				'Bld' => array (
					'label' => 'Building and construction',
					'description'           => 'The share of the labour force employed in construction (%)',
					'descriptionLegendHtml' => 'The share of the labour force employed in constructio' . $descriptionLegendSuffix,
					'intervals' => '0, 0-5, 5-10, 10-15, 15-20, 20-25, 25-30, 30+',
					'grouping' => 'Secondary - Labour force share',
					'unavailable' => $unavailable,
				),
				'T' => array (
					'label' => 'Tertiary sector',
					'description'           => 'The share of the labour force in the tertiary sector (%)',
					'descriptionLegendHtml' => 'The share of the labour force in the tertiary sector' . $descriptionLegendSuffix,
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80-90, 90-100',
					'grouping' => 'Tertiary - Labour force share',
					'unavailable' => $unavailable,
				),
				'Sel' => array (
					'label' => 'Dealer and seller',
					'description'           => 'The share of the labour force employed in wholesale and retail employment (%)',
					'descriptionLegendHtml' => 'The share of the labour force employed in wholesale and retail employment' . $descriptionLegendSuffix,
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15+',
					'grouping' => 'Tertiary - Labour force share',
					'unavailable' => $unavailable,
				),
				'SP' => array (
					'label' => 'Service and profession',
					'description'           => 'The share of the labour force employed in miscellaneous services and professions (%)',
					'descriptionLegendHtml' => 'The share of the labour force employed in miscellaneous services and professions' . $descriptionLegendSuffix,
					'intervals' => '0, 0-5, 5-10, 10-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70-80, 80+',
					'grouping' => 'Tertiary - Labour force share',
					'unavailable' => $unavailable,
				),
				'Dom' => array (
					'label' => 'Domestic service',
					'description'           => 'The share of the labour force in domestic service (%)',
					'descriptionLegendHtml' => 'The share of the labour force in domestic service' . $descriptionLegendSuffix,
					'intervals' => '0, 0-5, 5-10, 10-15, 15-20, 20-30, 30-40, 40-50, 50-60, 60-70, 70+',
					'grouping' => 'Tertiary - Labour force share',
					'unavailable' => $unavailable,
				),
				'Tra' => array (
					'label' => 'Transport',
					'description'           => 'The share of the labour force in transport (%)',
					'descriptionLegendHtml' => 'The share of the labour force in transport' . $descriptionLegendSuffix,
					'intervals' => '0, 0-2, 2-5, 5-10, 10-15, 15-20, 20+',
					'grouping' => 'Tertiary - Labour force share',
					'unavailable' => $unavailable,
				),
			),
			
			// Colours based on: https://www.campop.geog.cam.ac.uk/research/projects/transport/data/population.html
			'colourUnknown' => '#9c9c9c',
			'colourStopsIntervalsConsistent' => false,
			'colourStops' => array (
				'#ffffff',
				'#ffff73',
				'#d3ffbe',
				'#55ff00',
				'#ffd37f',
				'#ffaa00',
				'#ff5500',
				'#e60000',
				'#df73ff',
				'#8400a8',
				'#730000',
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
			  
			  `REGCNTY` VARCHAR(255) NOT NULL DEFAULT '[Unknown county name]' COMMENT 'County',
			  `SUBDIST` VARCHAR(255) NOT NULL DEFAULT '[Unknown sub-district name]' COMMENT 'Sub-district',
			  `PARISH` VARCHAR(255) NOT NULL DEFAULT '[Unknown parish name]' COMMENT 'Parish',
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
	public function home ($additionalCss = false)
	{
		# Define additional CSS
		$additionalCss = '
			#onlineatlas nav {width: 380px;}
			#onlineatlas .leaflet-control-layers, #onlineatlas .leaflet-control-attribution, #onlineatlas .summary {right: 380px;}
			#onlineatlas ul.rangelabels.smalllabels li {font-size: 0.69em; outline-right: 0; transform: rotate(-25deg);}
			#onlineatlas nav form div.radiobuttons h4 {margin-top: 0.5em; margin-bottom: 0.2em;}
		';
		
		return parent::home ($additionalCss);
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
