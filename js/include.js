(jQuery)(function($){
    /* ================ 960GS NESTED COLUMN MARGINS ================ */

    (function(){
        $('*[class*="grid_"] > :last-child').not('.grid_2, .grid_1, .grid_10, .grid_11').each(function(){
            var $this = $(this);
            if($this.hasClass('clear')){
                if($this.prev('*[class*="grid_"]')){
                    $this.parent('*[class*="grid_"]').css('margin-bottom', 0);
                }
            }else if($this.is('*[class*="grid_"]')){
                $this.parent('*[class*="grid_"]').css('margin-bottom', 0);
            }
        }); 
    })();    
    
    /* ================ MAIN NAVIGATION ================ */
	
    (function(){
        $(" #nav ul ").css({
            display: "none"
        }); // Opera Fix
        $(" #nav li").hover(function(){
            $(this).find('ul:first').css({
                visibility: "visible",
                display: "none"
            }).slideDown(250);
        },function(){
            $(this).find('ul:first').css({
                visibility: "hidden"
            });
        });
    })();        
    
    (function(){
        $('#nav-responsive').on('change', function() {
            window.location = $(this).val();
        }); 
    })();    
    
    /* ================ SEARCH BUTTON ================ */
    
    (function(){
        $('#header').on('click', '#search', function(e){
            e.preventDefault();
            $(this).find('.search-bkg').fadeIn().focus();
        });
    
        $('.search-bkg').focusout(function(e){
            $(e.target).fadeOut();
        });
    })();  
	
    /* ================ CONTENT TABS ================ */
    
    (function() {
        $('.tabs').each(function(){
            var $tabLis = $(this).find('li');            
            var $tabContent = $(this).next('.tab-content-wrap').find('.tab-content');
            
            $tabContent.hide();
            $tabLis.first().addClass('active').show();
            $tabContent.first().show();
        });        

        $('.tabs').on('click', 'li', function(e) {
            var $this = $(this);
            var parentUL = $this.parent();
            var tabContent = parentUL.next('.tab-content-wrap');

            parentUL.children().removeClass('active');
            $this.addClass('active');
                
            tabContent.find('.tab-content').hide();
            var showById = $( $this.find('a').attr('href') );
            tabContent.find(showById).fadeIn();            

            e.preventDefault();
        });                  
    })();

    /* ================ ACCORDION ================ */
    
    (function(){
        $('.accordion').on('click', '.title', function(event) {
            event.preventDefault();
            var $this = $(this);
            $this.closest('.accordion').find('.active').next().slideUp('normal');
            $this.closest('.accordion').find('.title').removeClass("active");        
            if($this.next().is(':hidden') === true) {
                $this.next().slideDown('normal');
                $this.addClass("active");
            }
        });
        $('.accordion .content').hide();
        $('.accordion .active').next().slideDown('normal');
    })();
    
    /* ================ TOGGLE ================ */
    
    $(".vertical-toggle .content").hide();
    $(".vertical-toggle .title").eq(0).addClass('active').next().slideDown();
    $(".vertical-toggle .title").toggle(function(){
        if($(this).hasClass('active')){
            $(this).removeClass("active");
        }else{
            $(this).addClass("active");
        }
        
    }, function () {
        if($(this).hasClass('active')){
            $(this).removeClass("active");
        }else{
            $(this).addClass("active");
        }
        
    });
    $(".vertical-toggle .title").click(function(){
        $(this).next(".vertical-toggle .content").slideToggle();
    });
    
    (function(){
        /* ================ PICASA FEED ================ */
        $('.picasa-feed').socialstream({
            socialnetwork: 'picasa',
            limit: 15,
            username: 'vmrkela1@gmail.com'
        });

        /* ================ PLACEHOLDER PLUGIN ================ */
        $('input[placeholder], textarea[placeholder]').placeholder();
    })();
        
});




