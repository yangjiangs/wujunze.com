<?php if(!empty($this->options->duoshuo)): ?>
<div id="comments" class="duoshuo"> 
<?php if($this->allow('comment')): ?>
<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="<?php echo $this->cid;?>" data-title="<?php echo $this->title;?>" data-author-key="<?php echo $this->authorId;?>" data-url=""></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"<?php echo $this->options->duoshuo ?>"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = document.location.protocol + '//wujunze.com/usr/themes/yilia/js/duoshuo.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->

<?php else: ?>
<h4><?php _e('评论已关闭'); ?></h4> 
<?php endif; ?> 
</div>
<?php endif; ?>
