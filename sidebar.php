<?php if ( ! is_active_sidebar( 'main-sidebar' ) ) :   ?>
 
	<div class="widget widget_search"><!--BEGIN #searchform-->
    	<form method="get" id="searchform" action="/">
   			<fieldset>
    			<input type="text" name="s" id="s" value="search" onfocus="if(this.value=='search')this.value='';" onblur="if(this.value=='')this.value='search';" />
      			<input type="submit" name="submit" value="" id="s-submit">
   			</fieldset>
		<!--END #searchform-->
    	</form>
  	</div> 
 
<?php else:                                        
 
	dynamic_sidebar( 'main-sidebar' ); 
 
endif;
