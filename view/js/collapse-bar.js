/* Responsável por mostrar e esconder o menu */
$(document).ready(function () {
	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').toggleClass('active');
		$(this).toggleClass('active');
		/* Para esconder a label "Categorias" após clique */
		var x = document.getElementById('txt-cat');
		if (x.style.visibility === 'hidden') {
			x.style.WebkitTransitionDuration = "1s";
			x.style.transitionDuration = "1s"
			x.style.WebkitTransition = "all 0.5s";
			x.style.transition = "all 0.5s"
			x.style.opacity = "1"
			x.style.visibility = 'visible';
		} else {
			x.style.WebkitTransitionDuration = "1s";
			x.style.transitionDuration = "1s"
			x.style.WebkitTransition = "all 0.5s";
			x.style.transition = "all 0.5s"
			x.style.opacity = "0"
			x.style.visibility = 'hidden';
		}
	});
});

$(document).ready(function () {
	$('#sidebarCollapse').on('click', function () {
		
	});
});

function expand__btn(){
	var x = document.getElementById("expand__icon");
	var y = "expand_less";
	if (x.textContent === y){
		x.innerHTML = "expand_more";
	} else {
		x.innerHTML = "expand_less";
	}
}
function menu__btn(){
	var x = document.getElementById("btn__menu");
	var y = "menu";
	if (x.textContent === y){
		x.innerHTML = "close";
	} else {
		x.innerHTML = "menu";
	}
}

function get__height(){
	var elmnt = document.getElementById("collapse__desc");
	if (elmnt.offsetHeight >= 230){
		$("#demo").append(`<a role="button" class="material-icons collapsed d-flex align-items-center" data-toggle="collapse" href="#collapse__desc"
		aria-expanded="false" aria-controls="collapse__desc"></a>`)
	}
};

$(document).ready(function(){
    $('.cat-list li').addClass('fnd');
    function counter_set()
    {
        $('.cat-list').each(function() {
        var cnt = $(this).children('.cat-list li.fnd').length;
      
        $(this).parent().parent().parent().find('.incat-count').text(cnt);
                                        });
    }
    
    counter_set();
    
    $('.srch').keyup(function(){
        var txt = $(this).val().toLowerCase();
        $('.cat-list li').filter(function(){
            var mt = $(this).text().toLowerCase().indexOf(txt) > -1;
            $(this).toggle(mt);
            $(this).toggleClass('fnd', mt);
        });
        counter_set();
  });
});

$(function () {
	// ------------------------------------------------------- //
	// Multi Level dropdowns
	// ------------------------------------------------------ //
	$('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
		if (!$(this).next().hasClass('show')) {
			$(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
		}
		var $subMenu = $(this).next('.dropdown-menu');
		$subMenu.toggleClass('show');


		$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
			$('.dropdown-submenu .show').removeClass('show');
		});


		return false;
	});
});

$('.lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 9
});

$('.lightSlider-modal').lightSlider({
	gallery:true,
	item:1,
	vertical:true,
	verticalHeight:250,
	vThumbWidth:50,
	thumbItem:8,
	thumbMargin:4,
	slideMargin:0,
	controls: false
});

