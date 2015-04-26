
		<script src="<?php echo base_url(); ?>js/jquery.js"></script>
		
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap-tokenfield.min.js"></script>
    	<script src="<?php echo base_url(); ?>js/typeahead.bundle.min.js"></script>
    	<script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
    	<script>
    		var engine = new Bloodhound
    		({
	  			local: [{value: 'red'}, {value: 'blue'}, {value: 'green'} , {value: 'yellow'}, {value: 'violet'}, {value: 'brown'}, {value: 'purple'}, {value: 'black'}, {value: 'white'}],
	  			datumTokenizer: function(d) 
	  			{
    				return Bloodhound.tokenizers.whitespace(d.value);
	  			},
	  			queryTokenizer: Bloodhound.tokenizers.whitespace
			});
			engine.initialize();
			$('#tokenfield-typeahead').tokenfield
			({
  				typeahead: [null, { source: engine.ttAdapter() }]
			});
    	</script>
	</body>
</html>