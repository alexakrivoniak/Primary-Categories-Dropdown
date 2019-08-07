<p>
    <p>Your Primary Category is what your post will be sorted by. Choose wisely.</p>
    <br>
    <select name="primary-cat-select" id="primary-cat-select">
    	<?php if($value == ''): ?>
    		<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
    	<?php endif; ?>
    	<?php foreach($categories as $category) { ?>
    		<?php if($value ==  $category->slug): ?>
    			<option value="<?php echo $category->slug; ?>" selected><?php echo $category->name; ?></option>
    		<?php else: ?>
	    		<?php if ($category->name != 'Uncategorized'): ?>
	    			<option value="<?php echo $category->slug; ?>"><?php echo $category->name; ?></option>
	    		<?php endif; ?>
	    	<?php endif; ?>
    	<?php } ?>
    </select>
</p>