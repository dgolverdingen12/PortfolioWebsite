	// Hamburger menu
    let header = document.getElementsByClassName( 'header' );
    let hamburger = document.getElementsByClassName( 'header-hamburger' );

    function toggle() {
        header[0].classList.toggle( 'header--active' );
    }

    hamburger[0].addEventListener( 'click', toggle ); 
