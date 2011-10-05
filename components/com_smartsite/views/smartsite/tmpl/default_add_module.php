<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 

?>
<div id="inner">
<div id="container">

	<div class="right">
			<div class="fieldName">
				<span>Name of a feed</span>
				</span>
			</div>
            <div class="fields">
            <form method="POST" action="<?php echo JRoute::_( 'index2.php?option=com_smartsite&task=add_module_submit' ); ?>" target="_self"> 
            
            <div><input type="text" name="name" /></div>
           
            </div>
            
			<div class="fieldName">
				<span>URL</span>
				</span>
			</div>
            <div class="fields">
            
            <div><input type="text" name="url" /></div>
            <input type="submit" class="button" value="Submit" />
            </form>
            </div>            

	</div>
</div>
</div>

 
