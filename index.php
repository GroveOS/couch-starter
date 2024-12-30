<?php require_once('couch/cms.php'); ?>

<cms:template title='Index' hidden='1' order='99' routable='1'>

	<!-- Custom routes go here -->

</cms:template>

<cms:match_route debug='0' />

<cms:embed file="routes/<cms:show k_matched_route />.html" />

<?php COUCH::invoke( K_IGNORE_CONTEXT ); ?>