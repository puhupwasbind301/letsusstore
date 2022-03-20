<?php //if($front_page_name != 'storage-calculator'): ?>
<?php  include('include/header.php') ?>
<?php  include('include/topbar.php') ?>
<?php //endif; ?>
<?php  include($front_page_name.'.php') ?>
<?php if(in_array($front_page_name,['delhi-mundka','gurgaon-hondachowk','pune-ranjangaon','chennai','hyderabad','kolkatta','mumbai','goa'])): ?>
<?php  include('include/contact.php') ?>
<?php endif; ?>
<?php  include('include/user_contact_detail.php') ?>
<?php //if($front_page_name != 'storage-calculator'): ?>
<?php  include('include/footer.php') ?>
<?php //endif; ?>

<!-- 
<script>
	alert($(this).width());
</script>
 -->