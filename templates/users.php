<?php require_once('../couch/cms.php'); ?>

<cms:template title='Users' clonable='1' order='99'>

	<cms:config_list_view exclude='default' searchable='1' />

	<cms:config_form_view>
		<cms:field 'k_page_name' label='Username' group='_advanced_settings_' />
		<cms:field 'k_page_title' hide='1' />
		<cms:field 'extended_user_email' label='Email' />
		<cms:field 'extended_user_id' hide='1' />
		<cms:field 'extended_user_password' label='Password' group='credentials' />
		<cms:field 'extended_user_password_repeat' label='Confirm Password' group='credentials' />
	</cms:config_form_view>

	<cms:editable name='credentials' label='Reset credentials' type='group' collapsed='1' order='99' />

</cms:template>

<?php COUCH::invoke(); ?>