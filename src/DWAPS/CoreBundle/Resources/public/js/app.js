
// NAMESPACE DWAPS
var dwaps = {
	init: function()
	{
		this.body = document.body;
		this.nav = document.querySelector( 'nav ul' );
		this.uri = window.location.pathname;

		if( this.uri != '/' )
		{
			this.body.style.display = "block";

			if( window.innerWidth >= 768 )
				this.nav.className = "show";
			this.navSelection(); // On lance l'animation dynamique du menu haut
		}
		else
		{
			// A la fin le l'animation, le body doit avoir un fond clair
			// (par défaut, il est de la même couleur que le splashscreen)
			this.startBody();
		}
	},
	startBody: function()
	{
		var THIS = this;

		// Si il y a un redimensionnement en cours d'animation
		// on redirige simplement sur /accueil
		window.addEventListener(
			"resize",
			function()
			{
				window.location.href = "/accueil";
			}
		);
		
		// Permet d'anticiper les désagréments de démarrage
		setTimeout(
			function()
			{
				THIS.body.style.display = "block";
			}
		);

		// Fait apparaître le menu prinipale
		setTimeout(
			function()
			{
				if( window.innerWidth >= 768 )
					THIS.nav.className = "show animated fadeIn";
				THIS.navSelection(); // On lance l'animation dynamique du menu haut
			},
			4000
		);
	},
	navSelection: function()
	{
		items = $("nav ul li");
		btMenu = $(".bt-menu"), toggle = false;
		activeItem = $("nav ul li.active");
		selectBox = $("#selectBox");
		activeBox = $("#activeBox");

		// Gestion du bouton menu
		toggleMenu();

		btMenu.click(
			function(e)
			{
				e.defaultPrevented;
				toggle = !toggle;

				if(toggle) items.parent().toggleClass( "show" );
				else items.parent().toggleClass( "hidden" );
			}
		);

		if(localStorage.getItem( "itemSelected" ) !== null)
			item = items.eq( localStorage.getItem( "itemSelected" ) );

		// Positionnement de activeBox sur l'onglet actif
		updatePosActiveBox();

		// Déplacement de selectBox selon l'onglet survolé
		items.hover(
			function()
			{
				selectBox
					.stop()
					.animate(
					{
						"left" : $( this ).offset().left,
						"width" : $( this ).outerWidth()
					});
			},
			function()
			{
				selectBox
					.stop()
					.animate({
						"left" : -120
					});
			}
		);

		// Gestion du replacement de activeBox
		$(window).resize(
			function()
			{
				toggleMenu();
				updatePosActiveBox();
			}
		);

		// Fonction de gestion du déplacement et du redimensionnement de activeBox
		function updatePosActiveBox()
		{
			if( activeItem.offset() && window.innerWidth >= 768 )
			{
				activeBox
					.offset({ left: activeItem.offset().left })
					.css( "width", activeItem.outerWidth() )
				;
			}
		}

		function toggleMenu()
		{
			if( window.innerWidth < 768 )
			{
				btMenu.css({ display: "block" });

				// On s'assure que le menu sera toujours caché par défaut
				items.parent().attr("class", "hidden");
			}
			else
			{
				
				items.parent().attr("class", "show");
				btMenu.css({ display: "none" });
			}
		}
	}
}


dwaps.init();