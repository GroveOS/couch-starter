<?php require_once('../couch/cms.php'); ?>

<cms:template title='Settings' icon='cog' order='0'>

	<cms:editable name='details' label='Details' type='group' order='0' collapsed='1' />

	<cms:editable name='site_name' label='Site name' desc='Enter the name of your site (80 characters max)' type='text' maxlength='80' group='details' />
	<cms:editable name='site_description' label='Site description' desc='Describe the purpose of this site in a sentence or two' type='textarea' group='details' />
	<cms:editable name='site_keywords' label='Keywords' desc='Describe the purpose of this site with a handful of keywords separated by commas' type='textarea' group='details' />
	<cms:editable name='site_logo' label='Logo' type='image' show_preview='1' preview_height='100' group='details' />
	<cms:editable name='site_favicon' label='Favicon' type='image' desc='Upload a small (~ 180x180 pixel) image to be used as the site favicon in browser tabs' show_preview='1' preview_height='40' group='details' />

	<cms:editable name='social' label='Social media' type='group' order='1' collapsed='1' />

	<cms:editable
		name='socials'
		label='Social media'
		type='checkbox'
		opt_values='Facebook | Twitter | Instagram | LinkedIn | YouTube | TikTok | Pinterest | Snapchat | WhatsApp | Tumblr | Reddit | Vimeo | Flickr'
		group='social' />

	<cms:func _into='cond_Facebook' socials=socials>
		<cms:if "<cms:is 'Facebook' in=socials />">show<cms:else />hide</cms:if>
	</cms:func>
	<cms:func _into='cond_Twitter' socials=socials>
		<cms:if "<cms:is 'Twitter' in=socials />">show<cms:else />hide</cms:if>
	</cms:func>
	<cms:func _into='cond_Instagram' socials=socials>
		<cms:if "<cms:is 'Instagram' in=socials />">show<cms:else />hide</cms:if>
	</cms:func>
	<cms:func _into='cond_LinkedIn' socials=socials>
		<cms:if "<cms:is 'LinkedIn' in=socials />">show<cms:else />hide</cms:if>
	</cms:func>
	<cms:func _into='cond_YouTube' socials=socials>
		<cms:if "<cms:is 'YouTube' in=socials />">show<cms:else />hide</cms:if>
	</cms:func>
	<cms:func _into='cond_TikTok' socials=socials>
		<cms:if "<cms:is 'TikTok' in=socials />">show<cms:else />hide</cms:if>
	</cms:func>
	<cms:func _into='cond_Pinterest' socials=socials>
		<cms:if "<cms:is 'Pinterest' in=socials />">show<cms:else />hide</cms:if>
	</cms:func>
	<cms:func _into='cond_Snapchat' socials=socials>
		<cms:if "<cms:is 'Snapchat' in=socials />">show<cms:else />hide</cms:if>
	</cms:func>
	<cms:func _into='cond_WhatsApp' socials=socials>
		<cms:if "<cms:is 'WhatsApp' in=socials />">show<cms:else />hide</cms:if>
	</cms:func>
	<cms:func _into='cond_Tumblr' socials=socials>
		<cms:if "<cms:is 'Tumblr' in=socials />">show<cms:else />hide</cms:if>
	</cms:func>
	<cms:func _into='cond_Reddit' socials=socials>
		<cms:if "<cms:is 'Reddit' in=socials />">show<cms:else />hide</cms:if>
	</cms:func>
	<cms:func _into='cond_Vimeo' socials=socials>
		<cms:if "<cms:is 'Vimeo' in=socials />">show<cms:else />hide</cms:if>
	</cms:func>
	<cms:func _into='cond_Flickr' socials=socials>
		<cms:if "<cms:is 'Flickr' in=socials />">show<cms:else />hide</cms:if>
	</cms:func>

	<cms:editable name='social_facebook' label='Facebook' type='text' group='social' not_active=cond_Facebook />
	<cms:editable name='social_twitter' label='Twitter (X)' type='text' group='social' not_active=cond_Twitter />
	<cms:editable name='social_instagram' label='Instagram' type='text' group='social' not_active=cond_Instagram />
	<cms:editable name='social_linkedin' label='LinkedIn' type='text' group='social' not_active=cond_LinkedIn />
	<cms:editable name='social_youtube' label='YouTube' type='text' group='social' not_active=cond_YouTube />
	<cms:editable name='social_tiktok' label='TikTok' type='text' group='social' not_active=cond_TikTok />
	<cms:editable name='social_pinterest' label='Pinterest' type='text' group='social' not_active=cond_Pinterest />
	<cms:editable name='social_snapchat' label='Snapchat' type='text' group='social' not_active=cond_Snapchat />
	<cms:editable name='social_whatsapp' label='WhatsApp' type='text' group='social' not_active=cond_WhatsApp />
	<cms:editable name='social_tumblr' label='Tumblr' type='text' group='social' not_active=cond_Tumblr />
	<cms:editable name='social_reddit' label='Reddit' type='text' group='social' not_active=cond_Reddit />
	<cms:editable name='social_vimeo' label='Vimeo' type='text' group='social' not_active=cond_Vimeo />
	<cms:editable name='social_flickr' label='Flickr' type='text' group='social' not_active=cond_Flickr />

</cms:template>

<?php COUCH::invoke(); ?>