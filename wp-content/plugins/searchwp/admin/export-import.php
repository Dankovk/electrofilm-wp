<hr />
<div class="searchwp-export-settings">
	<h3><?php _e( 'Settings Export', 'searchwp' ); ?></h3>
	<p><?php _e( 'Export SearchWP the configuration(s) for SearchWP search engines as JSON. This allows you to easily import your settings into another site.', 'searchwp' ); ?></p>
	<?php if ( isset( SWP()->settings['engines'] ) && is_array( SWP()->settings['engines'] ) ) : ?>
		<?php $export_sources_json = SWP()->export_settings(); ?>
		<script type="text/javascript">
			var searchwp_engines_export_sources = '<?php echo $export_sources_json; ?>';
		</script>
		<div class="swp-group">
			<div class="swp-json">
				<h4><?php _e( 'Export Data', 'searchwp' ); ?></h4>
				<textarea onclick="this.focus();this.select()" name="searchwp_export_source" id="searchwp_export_source" cols="30" rows="10" readonly="readonly"><?php echo esc_textarea( $export_sources_json ); ?></textarea>
			</div>
			<div class="swp-import-export-sources">
				<h4><?php _e( 'Search Engines', 'searchwp' ); ?></h4>
				<p class="description"><?php _e( 'Checked search engines will be included in the export', 'searchwp' ); ?></p>
				<?php $engine_id = 0; foreach ( SWP()->settings['engines'] as $searchwp_engine_id => $searchwp_export_source ) : ?>
					<?php $engine_label = isset( $searchwp_export_source['searchwp_engine_label'] ) ? $searchwp_export_source['searchwp_engine_label'] : __( 'Default', 'searchwp' ); ?>
					<div class="swp-export-source">
						<input type="checkbox" id="<?php echo esc_attr( strtolower( $engine_label ) ); ?>" checked="checked" data-swp-engine-id="<?php echo esc_attr( $searchwp_engine_id ); ?>" />
						<label for="<?php echo esc_attr( strtolower( $engine_label ) ); ?>"><?php echo esc_html( $engine_label ); ?></label>
					</div>
				<?php $engine_id++; endforeach; ?>
			</div>
		</div>
	<?php else : ?>
		<p><strong><?php _e( 'ERROR: No SearchWP engines found!', 'searchwp' ); ?></strong></p>
	<?php endif; ?>
</div>

<div class="searchwp-import-settings">
	<h3><?php _e( 'Settings Import', 'searchwp' ); ?></h3>
	<p><?php _e( 'Paste the JSON from a SearchWP settings export below to import search engine configuration(s).', 'searchwp' ); ?></p>
	<p><?php _e( '<strong>NOTE:</strong> Existing configurations with matching labels <em>will be overwritten!</em> This cannot be undone.', 'searchwp' ); ?></p>

	<form method="post" id="searchwp-form-import" action="<?php echo esc_url( admin_url( 'options-general.php?page=searchwp' ) ); ?>">
		<div style="display:none;">
			<?php wp_nonce_field( 'searchwp_import_engine_config' ); ?>
			<input type="hidden" name="searchwp_action" value="import_engine_config" />
		</div>
		<div class="swp-group">
			<div class="swp-json">
				<textarea name="searchwp_import_source" id="searchwp_import_source" cols="30" rows="10"></textarea>
			</div>
			<div class="swp-import-export-sources">
				<button class="button" type="submit"><?php _e( 'Import', 'searchwp' ); ?></button>
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($){
		searchwp_engines_export_sources = $.parseJSON(searchwp_engines_export_sources);
		$('.swp-import-export-sources input').change(function(){
			var engines_config = {};
			$('.swp-import-export-sources input:checked').each(function(){
				var engine_id = $(this).data('swp-engine-id');
				engines_config[engine_id] = searchwp_engines_export_sources[engine_id];
			});
			$('#searchwp_export_source').val(JSON.stringify(engines_config));
		});

		$('#searchwp-form-import').submit(function () {
			if(confirm('<?php _e( "Are you SURE you want to import these settings? This cannot be undone.", 'searchwp' ); ?>')) {
				return true;
			}
			return false;
		});
	});
</script>
