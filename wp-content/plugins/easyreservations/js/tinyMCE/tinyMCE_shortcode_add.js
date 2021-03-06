(function() {

    tinymce.create('tinymce.plugins.easyReservations', {

        init : function(ed, url){		
			ed.addCommand('easyReservations', function() {
				ed.windowManager.open({
					file : url + '/window.php',
					width : 360,
					height : 190,
					inline : 1
				}, {
					plugin_url : url // Plugin absolute URL
				});
			});

			// Register example button
			ed.addButton('easyReservations', {
				title : 'easyReservations',
				cmd : 'mceReservations',
                image: url + "/logo.png",
				onclick : function() {
					ed.windowManager.open({
					file : url + '/tinyMCE_shortcode_add.php',
					width : 670,
					height : 420,
					inline : 1
				}, {
					plugin_url : url // Plugin absolute URL
				});
				}
			});
		ed.addCommand('mceOpenReservation', function() {
			ed.windowManager.open({
				file : url + '/tinyMCE_shortcode_add.php',
				width : 600,
				height : 420,
				inline : 1
			}, {
				plugin_url : url // Plugin absolute URL
			});		
		});
        },

        getInfo : function() {
            return {
                longname : 'easyReservations Shortcodes',
                author : 'Feryaz Beer',
                authorurl : 'http://www.feryaz.de',
                infourl : '',
                version : "1.2"
            };
        }
    });

    tinymce.PluginManager.add('easyReservations', tinymce.plugins.easyReservations);

})();